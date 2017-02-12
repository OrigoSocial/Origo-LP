@extends('master')

@section('content')
    @include('partials.above-the-fold')

    <div class="features-container section-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 features section-description wow fadeIn">
                    <h2>Main Features</h2>
                    <div class="divider-1">
                        <div class="line"></div>
                    </div>
                    <p class="medium-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 features-box wow fadeInUp">
                    <div class="features-box-icon"><i class="fa fa-thumbs-up"></i></div>
                    <h3>Easy To Use</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                </div>
                <div class="col-sm-4 features-box wow fadeInDown">
                    <div class="features-box-icon"><i class="fa fa-cog"></i></div>
                    <h3>Responsive Design</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                </div>
                <div class="col-sm-4 features-box wow fadeInUp">
                    <div class="features-box-icon"><i class="fa fa-commenting"></i></div>
                    <h3>24/7 Support</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 features-box wow fadeInDown">
                    <div class="features-box-icon"><i class="fa fa-magic"></i></div>
                    <h3>Smart Layout</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                </div>
                <div class="col-sm-4 features-box wow fadeInUp">
                    <div class="features-box-icon"><i class="fa fa-video-camera"></i></div>
                    <h3>Lots Of Videos</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                </div>
                <div class="col-sm-4 features-box wow fadeInDown">
                    <div class="features-box-icon"><i class="fa fa-instagram"></i></div>
                    <h3>Big Community</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 section-bottom-button wow fadeInUp">
                    <a class="btn btn-link-1 scroll-link" href="#top-content">Sign Up Now <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="video-container section-container section-container-gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 video-box">

                </div>
                <div class="col-sm-6 col-sm-offset-1 video-box video-box-right wow fadeInUp">
                    <h3>An Inside Look To Our Course!</h3>
                    <p class="medium-paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et.
                    </p>
                    <p>
                        Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        Ut wisi enim ad minim veniam, quis nostrud.
                    </p>
                    <p>
                        <a class="learn-more scroll-link" href="#top-content">Sign Up Now</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="more-features-container section-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 more-features section-description wow fadeIn">
                    <h2>More Features</h2>
                    <div class="divider-1">
                        <div class="line"></div>
                    </div>
                    <p class="medium-paragraph">Ut wisi enim ad minim veniam, sed do eiusmod tempor consectetur adipisicing
                        elit.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7 more-features-box wow fadeInLeft">
                    <div class="more-features-box-text">
                        <div class="more-features-box-text-icon"><i class="fa fa-paperclip"></i></div>
                        <h3>Ut Wisi Enim Ad Minim</h3>
                        <div class="more-features-box-text-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                        </div>
                    </div>
                    <div class="more-features-box-text">
                        <div class="more-features-box-text-icon"><i class="fa fa-user"></i></div>
                        <h3>Quis Nostrud Exerci Tat</h3>
                        <div class="more-features-box-text-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 more-features-box wow fadeInUp">
                    <img src="assets/img/devices/pc.png" alt="pc">
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
    @include('partials.privacy-modal')
@endsection