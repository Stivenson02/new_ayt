@props(['href','logo', 'title' => 'Menu'])

<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="mx-10 d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ $href }}"><img style="width: 100%; height: auto;" src="{{ $logo }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">{{ $title }}</li>
                {{ $slot ?? '' }}
            </ul>
        </div>
    </div>
</div>
