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

            @foreach(\App\Gallery::Gallery() as $pict)
            <div class="aduh col-sm-4">
                <div class="blogBox">   
                    <div class="gallerySection">
                        <figure>
                                    <!-- Single Album Image -->
                            <figcaption>
                                <!-- Single Album Image -->
                                <div class="hovereffect">
                                    <img class="img-responsive" src="{{asset('img/blog/'.$pict->imgpath)}}" alt="{{$pict->title}}">
                                    <div class="overlay">
                                       <a class="info lightbox" href="{{asset('img/blog/'.$pict->imgpath)}}"></a>
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
        </div><!-- end row -->  
    </section>

    <!-- <section class="albumSingle padding background-properties">
        <div class="gallerySection" style="margin-top: 20px; background-color: yellow;">
            <div class="container-fluid">
                <div class="col-sm-12">
                    <div class="content-container clearfix">
                        <div class="single-photo-album-container col-sm-12">
                            <div class="row">
                                <article class="col-sm-4 col-xs-12">
                                    <figure>
                                        <figcaption>
                                            <div class="hovereffect">
                                                <img class="img-responsive" src="img/blog/1.png" alt="">
                                                <div class="overlay">
                                                   <a class="info lightbox" href="img/blog/1.png"></a>
                                                </div>
                                            </div>
                                        </figcaption>
                                        
                                    </figure>
                                </article>
                                <article class="col-sm-4 col-xs-12">
                                    <figure>
                                        <figcaption>
                                            <div class="hovereffect">
                                            <img class="img-responsive" src="img/blog/2.jpg" alt="">
                                            <div class="overlay">
                                               <a class="info lightbox" href="img/blog/2.jpg"></a>
                                            </div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="col-sm-4 col-xs-12">
                                    <figure>
                                        <figcaption>
                                            <div class="hovereffect">
                                            <img class="img-responsive" src="img/blog/3.jpg" alt="">
                                            <div class="overlay">
                                               <a class="info lightbox" href="img/blog/3.jpg"></a>
                                            </div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="col-sm-4 col-xs-12">
                                    <figure>
                                        <figcaption>
                                            <div class="hovereffect">
                                            <img class="img-responsive" src="img/blog/4.jpg" alt="">
                                            <div class="overlay">
                                               <a class="info lightbox" href="img/blog/4.jpg"></a>
                                            </div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="col-sm-4 col-xs-12">
                                    
                                    <figure>
                                        
                                        <figcaption>
                                            <div class="hovereffect">
                                            <img class="img-responsive" src="img/blog/5.png" alt="">
                                            <div class="overlay">
                                               <a class="info lightbox" href="img/blog/5.png"></a>
                                            </div>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </article>  
                                
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- =============== END GALLERY SECTION ================ -->
    
@endsection