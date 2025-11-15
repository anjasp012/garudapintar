<div class="py-10">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($exams as $exam)
                <div class="bg-white shadow-md rounded-2xl overflow-hidden hover:shadow-lg transition-all duration-300">
                    <div class="p-5 flex flex-col h-full">
                        <h5 class="text-lg font-semibold text-gray-800 mb-2">{{ $exam->name }}</h5>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ $exam->description }}</p>

                        <div class="flex justify-between text-sm mb-4">
                            <p class="text-green-600 font-medium">{{ $exam->duration }} menit</p>
                            <p class="text-red-500 font-medium">{{ $exam->examSettings->sum('question_count') }} soal</p>
                        </div>

                        <button
                            wire:click="joinExam({{ $exam->id }})"
                            wire:loading.attr="disabled"
                            wire:target="joinExam({{ $exam->id }})"
                            class="mt-auto w-full inline-flex justify-center items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-2.5 rounded-lg transition-all duration-200 disabled:opacity-70 disabled:cursor-not-allowed"
                        >
                            <span wire:loading.remove wire:target="joinExam({{ $exam->id }})">Join Exam</span>
                            <span wire:loading wire:target="joinExam({{ $exam->id }})">
                                <svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10"
                                        stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Modal pembayaran --}}
    @if ($showPaymentModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
            <div class="bg-white rounded-xl shadow-xl w-full max-w-5xl p-6 relative">
                <button wire:click="$set('showPaymentModal', false)"
                    class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
                    ✕
                </button>

                <h2 class="text-xl font-semibold mb-4 text-center">Pilih Metode Pembayaran</h2>

                <div class="grid grid-cols-4 gap-2">
                    @foreach ($channels as $channel)
                        <div wire:click="createTransaction('{{ $channel->code }}','{{ $selectedExamId }}')"
                            class="flex items-center gap-3 p-3 border rounded-lg hover:bg-gray-50 cursor-pointer transition">
                            <img src="{{ $channel->icon_url }}" alt="{{ $channel->name }}" class="w-20 h-10 object-contain">
                            <div>
                                <p class="font-medium text-gray-800">{{ $channel->name }}</p>
                                <p class="text-xs text-gray-500">{{ $channel->group }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>
