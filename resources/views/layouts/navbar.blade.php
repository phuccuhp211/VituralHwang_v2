	<div class="navbar">
        <a href="{{ route('user.home') }}" class="a-logo">Vitural Hwang.</a>
        <button class="menu-bar"><i class="fa-solid fa-bars"></i></button>
        <div class="firts-box goup">
            @foreach ($navs as $nav => $item)
            <a href="{{ route($nav) }}" class="a-menu">{{ $item }}</a>
            @endforeach
        </div>
    </div>