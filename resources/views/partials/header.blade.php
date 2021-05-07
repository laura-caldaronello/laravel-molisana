<header>
    <div class="wrapper">
        <img src="{{asset('img/logo.png')}}" alt="logo molisana">
        <nav>
            <ul>
                <li class="{{(Request::route()->getName() == 'pagina-home')? 'active' : ''}}">
                    <a href="{{route('pagina-home')}}">home</a>
                </li>
                <li class="{{(Request::route()->getName() == 'pagina-news')? 'active' : ''}}">
                    <a href="{{route('pagina-news')}}">news</a>
                </li>
                <li class="{{(Request::route()->getName() == 'pagina-prodotti')? 'active' : ''}}">
                    <a href="{{route('pagina-prodotti')}}">prodotti</a>
                </li>
            </ul>
        </nav>
    </div>
</header>