@section('header')
<!-- define HTML Basic DOCTYPE & HEAD -->
  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/pygments.css') }}" rel="stylesheet">

        <link href="{{ asset('css/easyzoom.css') }}" rel="stylesheet">
        <!-- <link href="{{ asset('css/app-ltr.css') }}" rel="stylesheet"> -->

        @if(App::getLocale() == 'en')
        <link href="{{ asset('css/app-ltr.css') }}" rel="stylesheet">
          @elseif(App::getLocale() == 'ar')
          <link href="{{ asset('css/app-rtl.css') }}" rel="stylesheet">
          @endif
          <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/media_query.css') }}" rel="stylesheet">
    </head>
    <body>
@endsection

@section('navbar')
<!-- define navbar -->
<header class="navbar front_header row" data-spy="affix" data-offset-top="50">
  <!-- Start nav one -->
   @if (Auth::check())
   <nav  class="hold_top_nav">
     <div class="top_nav">
       <ul>
         @php $locale = session()->get('locale'); @endphp
         <li class="nav-item dropdown list_home_top">
           <a id="navbarDropdown" class="nav-link dropdown-toggle left_m" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               @switch($locale)
                   @case('ar')
                   عربى
                   @break
                   @default
                   English
               @endswitch
           </a>
           <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="lang/ar">عربى</a>
               <a class="dropdown-item" href="lang/en"> English</a>
           </div>
         </li>
       </ul>
     </div>
   </nav>
    <nav class="row col-sm-12 m-auto navbar log_nav">

      <!-- Start LEFT nav ONE -->
      <div class="col-md-4">
        <ul class="row m-auto">
          <li class="list_home_top">
            <img width="50" src="<?php echo url('/'); ?>/uploads/logo.jpeg" alt="">

            <a class="site-title" href="/">
              {{ __("Arish Store")}}
            </a>
          </li>
        </ul>

      </div>
      <!-- Start RIGHT nav ONE -->
      <div class="col-md-4">
        <ul class="row">
           <li class="list_home_top dropdown">
            <a class="nav-link a_header" href="#">
              <i class="fas fa-bolt fa-2x" aria-hidden="true"></i>
              المساعدة
            </a>

            <ul class="child_cat dropdown-menu">
              <li class="upper_li">
                 <a class="upper_a" href="">
                   عربى
                 </a>
              </li>
              <li class="upper_li">
                 <a class="upper_a" href="">
                   اتصل بنا
                 </a>
              </li>
              <li class="upper_li">
                 <a class="upper_a" href="">
                   شكاوى واقتراحات
                 </a>
              </li>
            </ul>
          </li>

          <li class="list_home_top">
            <a class="nav-link a_header" href="#">
              <i class="fas fa-cart-plus fa-2x" aria-hidden="true"></i>
              سلة المشتريات
            </a>
          </li>

        </ul>
      </div>
      <!-- Start RIGHT nav ONE -->
      <div class="row profile_nav">
        <ul class="col-md-4">
          <li class="list_home_top nav-item dropdown">
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>

                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>

              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                    {{ Auth::user()->name }}
                    <span class="caret"></span>

                  </a>
                  @if (auth()->user()->Avatar)
                      <img src="{{ asset(auth()->user()->Avatar) }}" style="width: 40px; height: 40px; border-radius: 50%;">
                  @endif
          </li>
        </ul>
        <form class="col-md-8 form-inline md-form form-sm mt-0 search_form">
          <input class="form-control text-center search_input" type="text" placeholder="ابحث فى الموقع" aria-label="Search">
          <i class="fas fa-search"></i>
        </form>
      </div>
    </nav>
      @else
      <nav  class="hold_top_nav">
        <div class="top_nav">
          <ul class="row">
            @php $locale = session()->get('locale'); @endphp
            <li class="col-md-3 nav-item dropdown list_home_top">
              <a id="navbarDropdown" class="nav-link dropdown-toggle left_m" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  @switch($locale)
                      @case('ar')
                      عربى
                      @break
                      @default
                      English
                  @endswitch
              </a>
              <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="lang/ar">عربى</a>
                  <a class="dropdown-item" href="lang/en"> English</a>
              </div>
            </li>
            <li class="col-md-3 nav-item dropdown list_home_top">
              <a class="nav-link a_header dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="false">
                <i class="fas fa-users fa-2x" aria-hidden="true"></i>
                {{ __("Questions")}}
              </a>
              <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="">{{ __("Contact Us") }}</a>
                  <a class="dropdown-item" href="">{{ __("feedback")}}</a>
              </div>
            </li>
            <li class="col-md-3 nav-item list_home_top">
              <a class="nav-link a_header" href="/login">
                <i class="fas fa-users fa-2x" aria-hidden="true"></i>
                {{ __("Log In") }}
              </a>
            </li>
            <li class="col-md-3 nav-item list_home_top">
              <a class="nav-link a_header" href="/register">
                <i class="fas fa-users fa-2x" aria-hidden="true"></i>
                {{ __("Register") }}
              </a>
            </li>
          </ul>
        </div>
      </nav>
  <nav class="row col-sm-12 navbar log_nav">

    <!-- Start LEFT nav ONE -->
    <div class="col-md-4">
      <ul class="row m-auto">
        <li class="list_home_top">
          <img width="50" src="<?php echo url('/'); ?>/uploads/logo.jpeg" alt="">

          <a class="site-title" href="/">
            {{ __("Arish Store")}}
          </a>
        </li>
      </ul>

    </div>
    <!-- Start RIGHT nav ONE -->
    <div class="col-md-4">
      <form class="form-inline md-form form-sm mt-0 search_form">
        <input class="form-control text-center search_input" type="text" placeholder="{{ __("Search")}}" aria-label="Search">
        <i class="fas fa-search"></i>
      </form>
    </div>
    <!-- Start RIGHT nav ONE -->
    <div class="col-md-4">
      <ul class="row rtl_flex">
        <li class="list_home_top">
          <a class="nav-link a_header" href="#">
            <i class="fas fa-cart-plus fa-2x" aria-hidden="true"></i>
          {{ __("Shop Card") }}
          </a>
        </li>
      </ul>
    </div>
  </nav>
 @endif
</header>

@endsection


@section('slider')
<div class="swiper-container text-center">
  <div class="swiper-wrapper">
     <div class="swiper-slide img-responsive img_prod" style="background-image: url('<?php echo url('/'); ?>/uploads/logo.jpeg')" alt="">
       <img width="50" src="<?php echo url('/'); ?>/uploads/logo.jpeg" alt="">


     <div class="overlay_prod">
     <h2 class="prod_name">
       <a href="">
         اسم المنتج
      </a>
   </h2>

     <span class="prod_span">
       القسم
     </span>

     <span class="prod_span">
       التقييم
     </span>
   </div>
   </div>
      </div>
</div>
@endsection

@section('footer')
<!-- define Footer -->
  <footer class="hold_footer">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="single_footer single_footer_address">
          <h4>أقسام رئيسية</h4>
          <ul class="row  hold_latest text-center">
              <li class="col-sm-12 col-md-6 col-lg-6">
                <a class="prod_a" href="">اجهزة كهربائية</a>
              </li>
              <li class="col-sm-12 col-md-6 col-lg-6">
                <a class="prod_a" href="">موبايلات</a>
              </li>
              <li class="col-sm-12 col-md-6 col-lg-6">
                <a class="prod_a" href="">ملابس حريمى</a>
              </li>
              <li class="col-sm-12 col-md-6 col-lg-6">
                <a class="prod_a" href="">ملابس رجالى</a>
              </li>
              <li class="col-sm-12 col-md-6 col-lg-6">
                <a class="prod_a" href="">احذية وساعات</a>
              </li>
              <li class="col-sm-12 col-md-6 col-lg-6">
                <a class="prod_a" href="">اكسسوارات</a>
              </li>
          </ul>

        </div>
      </div>
      <!--- END COL -->
      <div class="col-sm-12 col-md-4">
        <div class="single_footer single_footer_address">
          <h4>أحدث المنتجات</h4>
          <ul class="row hold_latest text-center">
            <li class="col-sm-12 col-md-6 col-lg-6">
                <a class="prod_a" id="" href="">
                  منتج تجريبى 1
                </a>
            </li>
            <li class="col-sm-12 col-md-6 col-lg-6">
                <a class="prod_a" id="" href="">
                  منتج تجريبى 2
                </a>
            </li>
            <li class="col-sm-12 col-md-6 col-lg-6">
                <a class="prod_a" id="" href="">
                  منتج تجريبى 3
                </a>
            </li>
            <li class="col-sm-12 col-md-6 col-lg-6">
                <a class="prod_a" id="" href="">
                  منتج تجريبى 4
                </a>
            </li>
            <li class="col-sm-12 col-md-6 col-lg-6">
                <a class="prod_a" id="" href="">
                  منتج تجريبى 5
                </a>
            </li>
            <li class="col-sm-12 col-md-6 col-lg-6">
                <a class="prod_a" id="" href="">
                  منتج تجريبى 6
                </a>
            </li>
          </ul>
    </div>
    </div>
    <!--- END COL -->
    <div class="col-sm-12 col-md-4">
      <div class="single_footer single_footer_address text-center">
        <h4>أحدث العروض</h4>
        <p>انتظرو قريبا الكثير من العروض</p>
      </div>

    </div>
    <!--- END COL -->
  </div>
  <!-- Section: Contact v.3 -->
  <section class="contact-section shadow p-3 mb-5 bg-white rounded">

  <!-- Form with header -->
  <div class="card" style="border-radius:0;">

    <!-- Grid row -->
    <form class="row text-center">
      <!-- Grid column -->
      <div class="col-lg-8">

        <div class="card-body form">

          <!-- Header -->
          <h3 class="mt-4"><i class="fas fa-envelope contact_li_down"></i>تواصل معنا</h3>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-name" class="form-control input_con" placeholder="الإسم">
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-email" class="form-control input_con" placeholder="البريد الإلكترونى">
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-phone" class="form-control input_con" placeholder="رقم الموبايل">
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-company" class="form-control input_con" placeholder="الموضوع">
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-12">
              <div class="">
                <textarea style="resize:none;" id="form-contact-message" class="form-control md-textarea input_con text-area" rows="3" placeholder="الرسالة"></textarea>
              </div>
              <div class="text-left">
                <a href="#" class="btn-floating border border-default btn-lg blue">
                  إرسال
                  <i class="far fa-paper-plane"></i>
                </a>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>

      </div>
      <!-- Grid column -->
      <!-- Grid column -->
      <div class="col-lg-4">

        <div class="card-body contact text-center h-100 white-text">

          <h3 class="my-4 pb-2">معلومات التواصل</h3>
          <ul class="list-unstyled ml-4">
            <li class="contact_li">
              <p><i class="fas fa-map-marker-alt"></i>العريش - شمال سيناء - مصر</p>
            </li>
            <li class="contact_li">
              <p><i class="fas fa-phone"></i>+2 01110282344</p>
            </li>
            <li class="contact_li">
              <p><i class="fas fa-envelope"></i>admin@arishstore.com</p>
            </li>
          </ul>
          <hr class="hr-light my-4">
          <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a class="p-2 fa-lg tw-ic">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg li-ic">
                <i class="fab fa-linkedin-in"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg ins-ic">
                <i class="fab fa-instagram"> </i>
              </a>
            </li>
          </ul>

        </div>

      </div>
      <!-- Grid column -->

    </form>
    <!-- Grid row -->

  </div>
  <!-- Form with header -->

  </section>
  <div class="row hold_cont">
    <div  class="col-sm-12 col-md-6 text-center">
      <div class="hold_welc_2">
      <div class="row hold_welc_row">
        <div class="col-sm-12 col-md-6">
      <h4 class="arish_store">
        ماسنجر
      <i class="fab fa-facebook-messenger fa-lg msner"></i>
      </h4>
    </div>
    <div class="col-sm-12 col-md-6">
      <h4 class="arish_store">
        انستجرام
        <i class="fab fa-instagram fa-lg insta"></i>
    </h4>
    </div>
  </div>
    </div>
  </div>
  <div  class="col-sm-12 col-md-6 text-center">
    <div class="hold_welc_2">
    <div class="row hold_welc_row">
        <div class="col-sm-12 col-md-8">
          <input type="email" class="form-control input_con" placeholder="بريدك الاليكترونى" id="usr">
        </div>
        <div class="col-sm-12 col-md-4">
          <button type="button" class="btn btn-primary border">
            سجل الآن
          </button>
        </div>
      </div>
  </div>
  </div>
  </div>

    <!--- END ROW -->
    <div class="row">
      <div class="col-sm-12 hold_copy">
        <p class="copyright">
          جميع الحقوق محفوظة لـ
          @ <a href="#">Arish Store</a>.</p>
      </div>
      <!--- END COL -->
    </div>
    <!--- END ROW -->
  </footer>
  <!--- END CONTAINER -->
  <!-- Scripts -->
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer></script>
  <script src="{{ asset('js/jquery-ui.min.js') }}" defer></script>
  <script src="{{ asset('js/popper.js') }}" defer></script>
  <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
  <script src="{{ asset('js/all.min.js') }}" defer></script>
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer></script>
  <script src="{{ asset('js/plugins/jquery-slicknav-min.js') }}" defer></script>
  <script src="{{ asset('js/plugins/swiper.min.js') }}" defer></script>
  <script src="{{ asset('js/plugins/easyzoom.js') }}" defer></script>

  <script src="{{ asset('js/app.js') }}" defer></script>
  </body>
  </html>

@endsection
