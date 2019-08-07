<footer class="footer mt-auto">
    <div class="container mb-3">
        <div class="row">
            <div class="col-md-3 text-center">
                <h3>@lang('Hueic')</h3>
                <ul class="footer-menu nav flex-column">
                    <li class="nav-item"> <a href="">@lang('About us')</a>  </li>
                    <li class="nav-item"> <a href="">@lang('Contact us')</a>  </li>
                    <li class="nav-item"> <a href="">@lang('sitemap')</a>  </li>
                </ul>
            </div>
            <div class="col-md-3 text-center">
                <h3>@lang('Customer Services')</h3>
                <ul class="footer-menu nav flex-column">
                    <li class="nav-item"> <a href="">@lang('Help Center')</a>  </li>
                    <li class="nav-item"> <a href="">@lang('Submit a Dispute')</a>  </li>
                    <li class="nav-item"> <a href="">@lang('Terms of service')</a>  </li>
                </ul>
            </div>
            <div class="col-md-3 text-center">
                <h3>@lang('Trade Services')</h3>
                <ul class="footer-menu nav flex-column">
                    <li class="nav-item"> <a href="">@lang('Trade Assurance')</a>  </li>
                    <li class="nav-item"> <a href="">@lang('Logistics Service')</a>  </li>
                </ul>
            </div>
            <div class="col-md-3 text-center">
                <h3>@lang('Hueic social')</h3>
                <ul class="footer-social nav justify-content-center">
                    <li class="nav-item"> <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i>  </a> </li>
                    <li class="nav-item"> <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i>   </a> </li>
                    <li class="nav-item"> <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i>  </a> </li>
                    <li class="nav-item"> <a href=""> <i class="fa fa-pinterest-p" aria-hidden="true"></i>  </a> </li>
                </ul>

            </div>
        </div>

    </div>
    <div class="bg-secondary footer-text py-2">
        <div class="container">
            <div class="row text-white ">
                &copy;  <a href="{{ config('app.url') }}">{{ config('app.name') }}</a> | @lang('All Rights Reserved')</&copy;>
            </div>
        </div>
    </div>
</footer>
