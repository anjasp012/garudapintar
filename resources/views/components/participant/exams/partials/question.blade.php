@php
    $examUserAnswer = $examSessionQuestion?->examUserAnswer ? $examSessionQuestion?->examUserAnswer : null;
    $answer = json_decode($examUserAnswer?->answer);
@endphp
<div class="flex justify-between items-center pb-4 mb-5 border-b-2 border-slate-100">
    <div class="flex gap-3 items-center">
        <div
            class="text-lg font-bold aspect-ratio-1 size-11.5 font-semibold flex items-center text-center justify-center rounded-xl bg-gradient-to-br from-indigo-500 to-indigo-400 text-white">
            {{ $questionNumber }}
        </div>
        <div>
            <div class="font-semibold text-slate-600 text-sm">
                SOAL NOMOR
            </div>
            <div class="font-bold text-slate-900 text-xl">
                {{ $questionNumber }} dari {{ $examSessionQuestions }}
            </div>
        </div>
    </div>
    <button type="button"
        x-on:click="
        fetch('{{ route('participant.exams.answer.submit', ['doubt', $examSessionQuestion->id, 'doubt']) }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
        })
        .then(res => {
            if (!res.ok) throw 'Error';
            doubtQuestions.includes({{ $examSessionQuestion->id }})
            ? doubtQuestions = doubtQuestions.filter(id => id !== {{ $examSessionQuestion->id }})
            : doubtQuestions.push({{ $examSessionQuestion->id }});

        })
        .catch(() => {
            alert('Gagal');
        });
    "
        :class="doubtQuestions.includes(@js($examSessionQuestion->id)) ?
            'bg-gradient-to-b from-yellow-300 via-yellow-400 to-yellow-500 text-white' :
            'bg-slate-50 hover:bg-gradient-to-b hover:from-yellow-200 hover:via-yellow-300 hover:to-yellow-400 hover:text-white transition-all duration-300 ease'"
        class="cursor-pointer [&_svg]:size-6 aspect-ratio-1 size-11.5 flex items-center justify-center rounded-lg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd"
                d="M3 2.25a.75.75 0 0 1 .75.75v.54l1.838-.46a9.75 9.75 0 0 1 6.725.738l.108.054A8.25 8.25 0 0 0 18 4.524l3.11-.732a.75.75 0 0 1 .917.81 47.784 47.784 0 0 0 .005 10.337.75.75 0 0 1-.574.812l-3.114.733a9.75 9.75 0 0 1-6.594-.77l-.108-.054a8.25 8.25 0 0 0-5.69-.625l-2.202.55V21a.75.75 0 0 1-1.5 0V3A.75.75 0 0 1 3 2.25Z"
                clip-rule="evenodd" />
        </svg>

    </button>
</div>

<div class="mb-6 text-sm p-5 bg-gradient-to-r from-blue-100 to-blue-200 rounded-xl border-s-4 border-blue-500"
    x-data="{ open: false }">
    <button x-on:click="open = !open"
        class="cursor-pointer [&_svg]:size-4.5 flex items-center gap-2 font-bold text-blue-700 w-full text-start">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd"
                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                clip-rule="evenodd" />
        </svg>

        <div>
            Petunjuk
            Soal
        </div>
        <div class="ms-auto">
            <svg x-transition :class="open ? 'rotate-180' : ''" class="transition" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd"
                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                    clip-rule="evenodd" />
            </svg>
        </div>

    </button>
    <p x-show="open" class="text-blue-800 mt-2">Anda dapat melewati soal dengan mengklik nomor soal di panel
        navigasi sebelah kanan. Soal yang sudah dijawab akan ditandai dengan warna hijau. </p>
</div>
{{-- Teks soal --}}
<div class="mb-8 text-xl text-slate-900">
    {{ $examSessionQuestion->question->question }}
</div>

{{-- Opsi jawaban / textarea --}}
<div x-data="{ userAnswer: '{{ $answer }}' }" class="mt-4">
    {{-- Single Choice --}}
    @if ($examSessionQuestion->question->type == 'single_choice')
        <div class="space-y-3">
            @foreach ($examSessionQuestion->question->questionOptions as $option)
                <button type="button"
                    x-on:click="
                    if (userAnswer === '{{ $option->option_label }}') return;
        const oldAnswer = userAnswer;
        userAnswer = '{{ $option->option_label }}';

        fetch('{{ route('participant.exams.answer.submit', ['single_choice', $examSessionQuestion->id, $option->option_label]) }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
        })
        .then(res => {
            if (!res.ok) throw 'Error';
            if (!answeredQuestions.includes({{ $examSessionQuestion->id }})) {
                answeredQuestions.push({{ $examSessionQuestion->id }});
            }
                if (doubtQuestions.includes({{ $examSessionQuestion->id }})) {
                doubtQuestions = doubtQuestions.filter(id => id !== {{ $examSessionQuestion->id }});
            }
        })
        .catch(() => {
            userAnswer = oldAnswer;
            alert('Gagal menyimpan jawaban');
        });
    "
                    :class="userAnswer === '{{ $option->option_label }}'
                        ?
                        'bg-gradient-to-br from-indigo-100 to-indigo-50 border-2 border-indigo-600 shadow shadow-indigo-200' :
                        'cursor-pointer bg-slate-50 border-2 border-slate-200 hover:bg-slate-100 hover:border-slate-300'"
                    class="flex gap-3 items-center font-medium px-5 py-4.5 w-full rounded-[14px] text-start hover:translate-x-1.5 transition-all duration-300 ease">
                    <div :class="userAnswer === '{{ $option->option_label }}'
                        ?
                        'bg-gradient-to-br from-indigo-500 via-indigo-500 to-indigo-400 border-2 border-indigo-500 text-white' :
                        'bg-white border-2 border-slate-300 text-slate-600'"
                        class="inline-flex items-center justify-center text-center rounded-full size-10 font-semibold">
                        {{ $option->option_label }}
                    </div>

                    <div
                        :class="userAnswer === '{{ $option->option_label }}'
                            ?
                            'text-indigo-900 font-semibold' :
                            'text-slate-700 font-medium'">
                        {{ $option->option_text }}
                    </div>
                </button>
            @endforeach
        </div>

        {{-- Essay --}}
    @elseif($examSessionQuestion->question->type == 'essay')
        <textarea x-model.debounce.500ms="userAnswer" x-on:focus="oldAnswer = userAnswer"
            x-on:input.debounce.500ms="
        const url = '{{ route('participant.exams.answer.submit', ['essay', $examSessionQuestion->id, ':answer']) }}'.replace(':answer', encodeURIComponent(userAnswer));
        fetch(url, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(res => {
            if (!res.ok) throw 'Error';
            if (!answeredQuestions.includes({{ $examSessionQuestion->id }})) {
                answeredQuestions.push({{ $examSessionQuestion->id }});
            }
            if (doubtQuestions.includes({{ $examSessionQuestion->id }})) {
                doubtQuestions = doubtQuestions.filter(id => id !== {{ $examSessionQuestion->id }});
            }
        })
        .catch(() => {
            alert('Gagal menyimpan jawaban');
        });
    "
            placeholder="Type your answer" x-on:keydown.enter.prevent
            :class="userAnswer ?? true ?
                'bg-gradient-to-br from-indigo-100 to-indigo-50 border-indigo-600 hover:!bg-slate-50' :
                'bg-slate-50 border-slate-200'"
            class="w-full px-5 py-4.5 border-2 placeholder:text-slate-700 placeholder:font-medium rounded-xl text-indigo-900 font-semibold focus:outline-none focus:ring-0 focus:border-indigo-600 focus:shadow focus:shadow-indigo-200"></textarea>
    @endif
</div>
