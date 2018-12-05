<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li class="menu-text">Blog</li>
            <li><a href="#">One</a></li>
            <li><a href="#">Two</a></li>
            <li><a href="#">Three</a></li>
        </ul>
    </div>

    @if(\Illuminate\Support\Facades\Auth::check())
        <div class="top-bar-right">
            <ul class="menu">
                <li class="menu-text">{{ \Illuminate\Support\Facades\Auth::user()->name }}</li>
            </ul>
        </div>
    @endif

</div>