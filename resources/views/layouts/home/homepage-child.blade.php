@extends('layouts.homepage')

@extends('layouts.components')

@section('is_login')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Categories</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>
@endsection
@section('login')
<!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
    @endguest
</ul>
@endsection
@section('timeline')
<div class="row">
<div class="text-left col-sm-12">
<span class="home_title">
  أفضل التقييمات
   <i class="fas fa-award homepage_icon"></i>
</span>
</div>
<div class="row col-sm-12 m-auto">
     <div class="col-sm-12 col-md-6 col-lg-3">
       <div class="post_title_cat">
         <h2>
          <a id="" href="" class="checkActive">
             اسم تجريب
           </a>
         </h2>
       </div>
       <div class="">
         صورة
       </div>
         <div class="overlay">
           <div class="date">
             <span>
               تجريب
             </span>
             <span>
               <?php echo '55' . ' ' . "<i class='fas fa-dollar-sign' style='font-size:11px !important;'></i>"; ?>
             </span>
           </div>
         </div>
     </div>
 </div>
 </div>
@endsection
