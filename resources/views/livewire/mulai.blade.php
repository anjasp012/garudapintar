<div class="container">
    <div class="py-5">
        <div class="row justify-content-end">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-4">
                        <div class="row row-cols-5 g-2">
                            @foreach ($questions as $no => $item)
                                <div class="col">
                                    <button class="fw-medium w-100 btn d-flex align-items-center justify-content-center text-center rounded-3 {{ $no < 4 ? 'btn-success bg-gradient border-2 text-white' : 'btn-light bg-gradient border-2' }}" style="aspect-ratio: 1;">
                                        {{ $no + 1 }}
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
