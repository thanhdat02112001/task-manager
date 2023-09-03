<div class="header">
    <div class="row h-100">
        <div class="col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
            <strong>To Do</strong>
        </div>
        <div class="col-md-8 col-sm-8 d-flex align-items-center justify-content-center">
            <div class="input-group searchToolBar">
                <span class="input-group-text text-primary h-100">
                    <i class="fa fa-search fa-flip-horizontal" aria-hidden="true"></i>
                </span>
                <input type="text" class="form-control h-100" placeholder="Search">
            </div>
        </div>
        <div class="col-md-2 col-sm-2">{{Auth::user()->name}}</div>
    </div>
</div>