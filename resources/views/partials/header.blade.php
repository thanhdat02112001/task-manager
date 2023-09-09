<div class="header">
    <div class="row h-100">
        <div class="col-md-2 col-sm-2 d-flex align-items-center justify-content-center">
            <strong class="fs-3">To Do</strong>
        </div>
        <div class="col-md-8 col-sm-8 d-flex align-items-center justify-content-center">
            <div class="input-group searchToolBar">
                <span class="input-group-text text-primary h-100">
                    <i class="fa fa-search fa-flip-horizontal" aria-hidden="true"></i>
                </span>
                <input type="text" class="form-control h-100" placeholder="Search">
            </div>
        </div>
        <div class="col-md-2 col-sm-2 text-center">
            <button class="dropdown-toogle profile mt-1" aria-haspopup="true" type="button" id="dropdownHeader" data-bs-toggle="dropdown">
                <img src="{{Auth::user()->avatar}}" alt="avatar" title="{{Auth::user()->name}}">
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownHeader">
                <li>
                    <a href="/logout" class="dropdown-item d-flex justify-content-around align-items-center">
                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 4.354v6.651l7.442-.001L17.72 9.28a.75.75 0 0 1-.073-.976l.073-.084a.75.75 0 0 1 .976-.073l.084.073 2.997 2.997a.75.75 0 0 1 .073.976l-.073.084-2.996 3.004a.75.75 0 0 1-1.134-.975l.072-.085 1.713-1.717-7.431.001L12 19.25a.75.75 0 0 1-.88.739l-8.5-1.502A.75.75 0 0 1 2 17.75V5.75a.75.75 0 0 1 .628-.74l8.5-1.396a.75.75 0 0 1 .872.74ZM8.502 11.5a1.002 1.002 0 1 0 0 2.004 1.002 1.002 0 0 0 0-2.004Z" fill="#212121"/>
                            <path d="M13 18.501h.765l.102-.006a.75.75 0 0 0 .648-.745l-.007-4.25H13v5.001ZM13.002 10 13 8.725V5h.745a.75.75 0 0 1 .743.647l.007.102.007 4.251h-1.5Z" fill="#212121"/>
                        </svg>
                        <span>Logout</span>
                    </a>
                </li>    
            </ul>
        </div>
    </div>
</div>