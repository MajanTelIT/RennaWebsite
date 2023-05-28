@extends('website.layouts.master')

@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<section id="services" class="services section-bg">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo $results->title ; ?></h2>
          <p><?php echo $results->description ; ?></p>
        </div>

        <div class="row">
          <?php echo $results->arabic_description ; ?>

        </div>

      </div>
    </section>
            
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">