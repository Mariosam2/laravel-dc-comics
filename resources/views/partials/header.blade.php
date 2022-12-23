<header id="site_header">
    <section class="header-top bg-primary text-white">
        <div class="container d-flex justify-content-end">
            <div class="item">dc power visa&#8480; and &reg;</div>
            <div class="item">additional dc sites<i class="fa-solid fa-chevron-down ps-2"></i></div>
        </div>


    </section>
    <nav class="navbar navbar-expand-sm navbar-light p-0">
        <div class="container">
            <a class="navbar-brand ms_logo py-1" href="/"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav flex-grow-1 justify-content-around mt-2 mt-lg-0 ms_nav px-3">
                    @foreach(Config::get('links.nav-links') as $navlink)
                    <li class="nav-item">
                        <a class="nav-link" href="{{$navlink['link']}}">{{$navlink['title']}}</a>
                    </li>
                    @endforeach
                    <li class="nav-item">
                        <a class="nav-link" href="#" aria-current="page">Shop<i class="fa-solid fa-chevron-down ps-2"></i><span class="visually-hidden">(current)</span></a>
                    </li>
                </ul>

                <form class="d-flex my-2 my-lg-0 border-primary ms_searchbar">
                    <input class="form-control border-0 me-sm-2 text-align-right ms_searchtext" type="text" placeholder="Search">
                    <button class="btn ms_btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </nav>

</header>