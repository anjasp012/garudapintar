<div>
    <x-card>
        <div class="grid grid-cols-2 gap-3">
            <x-card wire:key="TERJAWAB"
                class="!bg-gradient-to-r !from-green-100 !to-green-200 !py-4 space-y-1.5 !rounded-lg shadow-green-50">
                <div class="text-center text-2xl font-bold text-green-900" x-text='answeredQuestions.length'></div>
                <div class="text-center font-semibold text-green-800 text-xs">TERJAWAB</div>
            </x-card>
            <x-card wire:key="BELUM"
                class="!bg-gradient-to-r !from-red-100 !to-red-200 !py-4 space-y-1.5 !rounded-lg shadow-red-50">
                <div class="text-center text-2xl font-bold text-red-900" x-text='sumNotAnswered'></div>
                <div class="text-center font-semibold text-red-800 text-xs">BELUM</div>
            </x-card>
            <x-card wire:key="DITANDAI"
                class="!bg-gradient-to-r !from-yellow-100 !to-yellow-200 !py-4 space-y-1.5 !rounded-lg shadow-yellow-50">
                <div class="text-center text-2xl font-bold text-yellow-900" x-text='doubtQuestions.length'></div>
                <div class="text-center font-semibold text-yellow-800 text-xs">DITANDAI</div>
            </x-card>
            <x-card wire:key="PROGRESS"
                class="!bg-gradient-to-r !from-blue-100 !to-blue-200 !py-4 space-y-1.5 !rounded-lg shadow-blue-50">
                <div class="text-center text-2xl font-bold text-blue-900" x-text='progress'>%</div>
                <div class="text-center font-semibold text-blue-800 text-xs">PROGRESS</div>
            </x-card>
        </div>
        <div class="px-4 py-3 bg-slate-50 rounded-lg shadow-2xs shadow-slate-50 mt-4 space-y-2">
            <div class="font-semibold text-sm text-slate-500">Progress berjalan</div>
            <div class="relative overflow-hidden w-full h-2 bg-slate-300 rounded-full">
                <div class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-indigo-400 rounded-full transition-all duration-500 w-0"
                    :style="'width: ' + progress()">
                </div>

            </div>
        </div>
    </x-card>
</div>
