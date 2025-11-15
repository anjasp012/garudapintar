<div>
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 my-8">
        <div class="grid grid-cols-12 gap-6" x-data='{ activeQuestionIndex : 0 }'>
            <div class="col-span-9">
                <x-card>
                    @foreach ($examSessionQuestions as $index => $question)
                        <x-participant-exams-partials-question x-show="{{ $index }} == activeQuestionIndex" :$examSessionQuestions />
                    @endforeach
                </x-card>
            </div>
            <div class="col-span-3 space-y-5">
                <x-card>
                    <div class="grid grid-cols-5 gap-2">
                        @foreach ($examSessionQuestions as $key => $examSessionQuestion)
                            <div>
                                <livewire:participant.exams.partials.number :active='$questionNumber == $key + 1' :answered='1 == $key + 1'
                                    :doubt='12 == $key + 1' wire:key="{{ $questionNumber }}" :$examSessionQuestion
                                    :number='$key + 1' />
                            </div>
                        @endforeach
                    </div>
                </x-card>
                <livewire:participant.exams.partials.statistics wire:key="statistic{{ rand(100000, 999999) }}" :$examSession :$examSessionQuestions />
            </div>
        </div>
    </div>
</div>
