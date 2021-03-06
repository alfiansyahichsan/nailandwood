@extends('shared.layouts')
@section('halaman')
Gallery
@endsection
@section('content')

    <!-- =============== START BREADCRUMB ================ -->
    <!-- <section class="no-mb">
        <div class="row">
            <div class="col-sm-12" style="margin-bottom: 50px;">
                <div class="before-FullscreenSlider"></div>
                <div class="breadcrumb-fullscreen-parent phone-menu-bg">
                    <div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('img/header/koc.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
                        <div class="breadTxt breadSingle">
                            <h2>Gallery <span>Example</span></h2>
                            <p>6 March, 2015</p>
                             <a href="#content" data-easing="easeInOutQuint" data-scroll="" data-speed="900" data-url="false">
                                View More <i class="fa fa-angle-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- =============== END BREADCRUMB ================ -->

    <!-- =============== START GALLERY SECTION ================ -->
    <section class="qqq hide-section background-properties blogHomeSection">    
        <div class="container">
            <div class="row">

            @foreach($gallery as $pict)
            <div class="aduh col-sm-4">
                <div class="blogBox">   
                    <div class="gallerySection">
                        <figure>
                                    <!-- Single Album Image -->
                            <figcaption>
                                <!-- Single Album Image -->
                                <div class="hovereffect">
                                    <img class="img-responsive object-fit_contain" src="{{asset('img/gallery/'.$pict->imgpath)}}" alt="{{$pict->title}}">
                                    <div class="overlay">
                                       <a class="info lightbox" href="{{asset('img/gallery/'.$pict->imgpath)}}"></a>
                                    </div>
                                </div>
                            </figcaption>
                            <!-- Single Album View Button -->
                            
                        </figure>
                    </div>
                    
                </div><!-- end blogBox -->
            </div><!-- end col-sm-4 --> 
            @endforeach
                               
            </div><!-- end container -->
            <div class="paginate" style="text-align: center;">
        {{ $gallery->links() }}
    </div>
        </div><!-- end row -->  
    </section>

@endsection