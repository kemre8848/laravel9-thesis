<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach($sliderdata as $rs)
        <li data-target="#carouselExampleControls" data-slide-to="{{$loop->index}}" @once class="active" @endonce></li>
        @endforeach

    </ol>
    <div class="carousel-inner" role="listbox">
        @foreach($sliderdata as $rs)
        <div class="carousel-item @once active @endonce">
            <div id="home" class="first-section" style="background-image:url('{{Storage::url($rs->image)}}');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-right">
                                <div class="big-tagline">
                                    <h2><strong>{{$rs->title}} </strong> </h2>
                                    <p class="lead">With Landigoo responsive landing page template, you can promote your all hosting, domain and email services. </p>
                                    <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="#" class="hover-btn-new"><span>Read More</span></a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        @endforeach

        <!-- Left Control -->
        <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
