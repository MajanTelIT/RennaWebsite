@extends('website.layouts.master')

@section('content')

<?php $segment1 =  Request::segment(2);  ?>

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
  </section>
  <!-- =======End Hero Section ======= -->

  <main id="main">

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        @if($segment1 =='en')         
              <div>{!!html_entity_decode($pages['description'])!!}</div>         
        @else
              <div>{!!html_entity_decode($pages['arabic_description'] )!!} </div>        
        @endif
      </div>
    </section>
    <!-- End Featured Section -->

  </main><!-- End #main -->

@endsection