<div>
    <div class="container py-5">
        <div class="row">
            @foreach ($examSessions as $examSession)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $examSession->exam->name }}</h5>
                            <p class="card-text">{{ $examSession->exam->description }}</p>
                            <div class="d-flex justify-content-between">
                                <p class="card-text text-success">{{ $examSession->exam->duration }} menit</p>
                                <p class="card-text text-danger">{{ $examSession->examSettings->sum('question_count') }} soal</p>
                            </div>

                            <a wire:navigate href="{{ route('participant.exams.start', $examSession) }}" class="btn btn-primary w-100"
                                wire:loading.attr="disabled">
                                <span wire:loading.remove>Start</span>
                                <span wire:loading>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                </span>
                            </a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
