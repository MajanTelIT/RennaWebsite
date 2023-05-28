@extends('website.layouts.master')

@section('content')

<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="20000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 3 -->
          <?php foreach($banner as $key=> $slide) : ?>
            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                <div class="carousel-container">
                    <div class="carousel-content">
                      <img src="{{ asset('images/' . $slide->image_path) }}"  alt="..." /> 
                    </div>
                </div>
              </div>
              <?php endforeach; ?>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h3><a href="">{{ __('SIM TARIFF PLANS') }}</a></h3>
              <p>{{ __('View the latest tariff plans available on new SIMs.') }}</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h3><a href="">{{ __('SIM PRICE & OFFERS') }}</a></h3>
              <p>{{ __('View the types of new SIMs & in-built benefits available in the market') }}</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h3><a href="">{{ __('WHERE TO BUY RENNA') }}</a></h3>
              <p>{{ __('Want a Renna Mobile SIM now! Find out where from you can get it.') }}</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{{ asset('website/assets/img/about.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>{{ __('All across Oman, Renna Mobile’s Strong Network goes with you') }}</h3>
            <p class="fst-italic">
              {{ __('Stay in touch with your family and friends at most competitive local rates.') }}
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>{{ __('Stay in touch with your dear ones in native country with the Amazing International Offers in the market.') }}</li>
              <li><i class="bi bi-check-circle"></i> {{ __('Go Social / Stay in touch with the Amazing Internet Offers in the market.') }}</li>
              <li><i class="bi bi-check-circle"></i> {{ __('To make your Renna mobile more valuable to you.') }}</li>
            </ul>
            <p>
              {{ __('Our goal is to provide you great Services, in order to make your experience with Renna Mobile as good as practically possible.Check out our Services below.') }}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">{{ __('Lorem Ipsum') }}</a></h4>
              <p>{{ __('Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi') }}</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">{{ __('Sed ut perspiciatis') }}</a></h4>
              <p>{{ __('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore') }}</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">{{ __('Magni Dolores') }}</a></h4>
              <p>{{ __('Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia') }}</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">{{ __('Nemo Enim') }}</a></h4>
              <p>{{ __('At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis') }}</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">{{ __('Dele cardo') }}</a></h4>
              <p>{{ __('Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur') }}</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">{{ __('Divera don') }}</a></h4>
              <p>{{ __('Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur') }}</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>{{ __('Clients') }}</h2>
          <p>{{ __('Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.') }}</p>
        </div>

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('website/assets/img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('website/assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('website/assets/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('website/assets/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('website/assets/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('website/assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('website/assets/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('website/assets/img/clients/client-8.png') }}" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

  </main><!-- End #main -->

@endsection