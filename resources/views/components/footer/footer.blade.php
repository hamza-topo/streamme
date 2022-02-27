<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="./index.html">@lang('Accueil')</a></li>
                        <li><a href="#">@lang('Genres')</a></li>
                        <li><a href="{{route('dmca')}}">@lang('DMCA')</a></li>
                        <li><a href="{{route('privacy')}}">@lang('Privacy')</a></li>
                        <li><a href="{{route('contact')}}">@lang('Contact')</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <p>
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                </p>
                <p>
                {{ config('app.name') }}
                </p>
              </div>
          </div>
      </div>
</footer>