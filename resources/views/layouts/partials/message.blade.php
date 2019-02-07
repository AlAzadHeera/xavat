<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="fa fa-times"></i>
                    </button>
                    <span>{{ $error }}</span>
                </div>
            @endforeach
        @endif
    </div>
    <div class="col-md-2"></div>
</div>