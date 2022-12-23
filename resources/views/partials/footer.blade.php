<footer id="site_footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-7 d-flex flex-wrap py-4">
                    @foreach(Config::get('links.footer-links.lists') as $list)
                    <ul class="list-unstyled px-4">
                        @foreach($list as $footer_link)
                        @if($footer_link['is_title'])
                        <li>
                            <h4 class="text-uppercase my-3 text-white fw-bold"><a href="{{$footer_link['link']}}">{{$footer_link['text']}}</a></h4>
                        </li>
                        @else
                        <li class="py-1"> <a class="ms_footer-link" href="{{$footer_link['link']}}">{{$footer_link['text']}}</a> </li>
                        @endif
                        @endforeach
                    </ul>
                    @endforeach



                    <div class="text-secondary px-4">All Site Content TM &copy; 2020 DC Entertainmnent, unless otherwise <span class="text-primary">noted here</span>. All right reserved. <span class="text-primary">Cookies Settings</span></div>
                </div>

                <div class="col-5 dc-img-footer">2</div>
            </div>
        </div>
    </div>
    <div class="footer-bottom py-4">
        <div class="container">
            <div class="row ">
                <div class="col d-flex justify-content-between">
                    <button class="btn ms_btn signup text-uppercase text-white fw-bold border-primary">sign up now</button>
                    <div class="social d-flex align-items-center">
                        <h5 class="text-primary text-uppercase m-0 px-4">follow us</h5>
                        @foreach(Config::get('links.footer-links.socials') as $social)
                        <a class="mx-2" href="{{$social['link']}}"><img src="{{Vite::asset($social['icon'])}}" alt=""></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>