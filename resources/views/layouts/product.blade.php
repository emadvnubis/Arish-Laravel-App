@yield('header')
  @yield('navbar')
  <div class="product__carousel">
    <!-- Swiper and EasyZoom plugins start -->

    <div class="swiper-container gallery-top">

      <div class="swiper-wrapper">
        @foreach($product as $prod)

        <div class="swiper-slide easyzoom easyzoom--overlay">

          <a href="<?php echo url('/') . '/thumbnail' . $prod->Thumbnail ?>">
            <img src="<?php echo url('/') . '/thumbnail' . $prod->Thumbnail ?>" alt=""/>
          </a>

        </div>
        @endforeach

      </div>

      <!-- Add Arrows -->
      <div class="swiper-button-next swiper-button-white"></div>
      <div class="swiper-button-prev swiper-button-white"></div>
    </div>
    <div class="swiper-container gallery-thumbs">
      <div class="swiper-wrapper">
        @foreach($product as $prod)

        <div class="swiper-slide">

          <img class="thumbnails" src="<?php echo url('/') . '/thumbnail' . $prod->Thumbnail ?>" alt="">

        </div>
        @endforeach

      </div>
    </div>
    <!-- Swiper and EasyZoom plugins end -->
</div>

<!-- Slider main container -->
<div class="swiper-container text-center">
  <div class="swiper-wrapper">
       @foreach($product as $prod)
           <div class="swiper-slide img-responsive img_prod" style="background-image: url('<?php echo url('/') . '/thumbnail' . $prod->Thumbnail ?>')" alt="">
           <div class="overlay_prod">
           <h2 class="prod_name">
             <a href="posts.php?postid=<?php echo $prod->id; ?>">
             <?php echo $prod->name; ?>
            </a>
         </h2>
         </div>
         </div>
         @endforeach
      </div>
</div>


@yield('footer')
