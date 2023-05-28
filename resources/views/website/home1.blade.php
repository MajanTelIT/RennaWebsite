@extends('website.layouts.master')

@section('content')

<!-- Start Page Content here -->

<!--========================================================
                          CONTENT
=========================================================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - September08, 2014!</div>
<div class="camera-wrapper">
        <div id="camera" class="camera-wrap">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <?php foreach($banner as $key=> $slide) : ?>
            <li data-target="#myCarousel" data-slide-to="{{ $slide->id }}" class="{{$key == 0 ? 'active' : '' }}"></li>
            <?php endforeach; ?>
           
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <?php foreach($banner as $key=> $slide) : ?>
            <div class="item {{$key == 0 ? 'active' : '' }}">
              <img src="{{ asset('images/' . $slide->image_path) }}" class="d-block w-100"  alt="..." />
            </div>
            <?php endforeach; ?>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row wrap_1 wrap_5">
        <div class="grid_3">
            <div class="box_1">
                <div class="icon_1"></div>
                <h3 class="text_2 color_2 maxheight1"><a href="#">Budget Planning</a></h3>
                <p class="text_3 color_2 maxheight">
                    Lorem ipsum dolor sit amettetur dipiscing elit. In mollis erat mattis
                </p>
                <a class="btn_2" href="#">read more</a></div>
        </div>
        <div class="grid_3">
            <div class="box_1">
                <div class="icon_2"></div>
                <h3 class="text_2 color_2 maxheight1"><a href="#">Marketing Research</a></h3>
                <p class="text_3 color_2 maxheight">
                    Dorem ipsum dolor sit amettetur dipiscing elit. In mollis erat mattis
                </p>
                <a class="btn_2" href="#">read more</a></div>
        </div>
        <div class="grid_3">
            <div class="box_1">
                <div class="icon_3"></div>
                <h3 class="text_2 color_2 maxheight1"><a href="#">Employee Benefits</a></h3>
                <p class="text_3 color_2 maxheight">
                    Kerem ipsum dolor sit amettetur dipiscing elit. In mollis erat mattis
                </p>
                <a class="btn_2" href="#">read more</a></div>
        </div>
        <div class="grid_3">
            <div class="box_1">
                <div class="icon_4"></div>
                <h3 class="text_2 color_2 maxheight1"><a href="#">Risk Management</a></h3>
                <p class="text_3 color_2 maxheight">
                    Norem ipsum dolor sit amettetur dipiscing elit. In mollis erat mattis neque facilisis, sit
                    amet uesas
                </p>
                <a class="btn_2" href="#">read more</a></div>
        </div>
    </div>
</div>
<div class="bg_1 wrap_2 wrap_4">
    <div class="container">
        <div class="row">
            <div class="preffix_2 grid_8">
                <h2 class="header_1 wrap_3 color_3">
                    The Best Marketing Services, <br/>
                    Data & Analysis
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="grid_12">
                <div class="box_1">
                    <p class="text_3">
                        Visit our official blog for more detailed information about this
                        <a href="http://blog.templatemonster.com/free-website-templates/" rel="nofollow">
                            freebie.
                        </a>
                        <br/>
                        Want more
                        <a href="http://www.templatemonster.com/properties/topic/business-services/"
                           rel="nofollow">
                            business themes
                        </a>?
                        Check out the same name category at
                        TemplateMonster.com.
                        <br/>
                        <br/>
                        Vivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a,
                        commodo luctus libero. Praesent faucibus malesuada faucibus. Donec laoreet metus id
                        laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                        consectetur orci sed
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row wrap_1">
        <div class="grid_6">
            <div class="wrap_6">
                <div class="box_2 maxheight2">
                    <div class="put-left"><img src="{{ asset('website/images/index_img01.png')}}" alt="Image 1"/></div>
                    <div class="caption">
                        <h3 class="text_2 color_2">
                            Save Your Time <br/>
                            with Us
                        </h3>
                        <p class="text_3">
                            Morem ipsum dolor sit amettetur dipiscing elit. In mollis erat mattis neque facilisis,
                            sit amet ultries wertolio dasererat rutru.
                        </p>
                        <a href="#" class="btn_2">read more</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="grid_6">
                <div class="wrap_6">
                    <div class="box_2 maxheight2">
                        <div class="put-left"><img src="{{ asset('website/images/index_img02.png')}}" alt="Image 2"/></div>
                        <div class="caption">
                            <h3 class="text_2 color_2">
                                The Highest <br/>
                                Quality Services
                            </h3>
                            <p class="text_3">
                                Lorem ipsum dolor sit amettetur dipiscing elit. In mollis erat mattis neque facilisis,
                                sit amet ultries wertolio dasererat rutrum.
                            </p>
                            <a href="#" class="btn_2">read more</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
           
        </div>
    </div>
</div>
<div class="bg_1 wrap_7 wrap_5">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <h2 class="header_1 wrap_8 color_3">
                    What Clients Say
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="grid_12">
                <div id="owl">
                    <div class="item">
                        <p class="text_3">
                            Vivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a,
                            commodo luctus libero. Praesent faucibus malesuada faucibus. Donec laoreet metus id
                            laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                            consectetur orci sed nulla facilisis consequat. Curabitur vel lorem sit amet nulla
                            ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros,
                            <br/>
                            laoreet sit amet est vel, commodo venenatis eros. Fusce adipiscing quam id risus
                            sagittis, non consequat lacus interdum.
                        </p>
                    </div>
                    <div class="item">
                        <p class="text_3">
                            Vivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a,
                            commodo luctus libero. Praesent faucibus malesuada faucibus. Donec laoreet metus id
                            laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                            consectetur orci sed nulla facilisis consequat. Curabitur vel lorem sit amet nulla
                            ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros,
                            <br/>
                            laoreet sit amet est vel, commodo venenatis eros. Fusce adipiscing quam id risus
                            sagittis, non consequat lacus interdum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row wrap_9 wrap_4 wrap_10">
        <div class="grid_12">
            <div class="header_1 wrap_3 color_3">
                Get in Touch
            </div>
            <div class="box_3">
                <ul class="list_1">
                    <li><a class="fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-google-plus" href="#"></a></li>
                    <li><a class="fa fa-pinterest" href="#"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</section>

@endsection