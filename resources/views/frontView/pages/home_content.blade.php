@extends('frontview.master')

@section('title','VeroDate 2019 Homepage ')


@section('homecontent')

 <!--================Slider Reg Area =================-->
 <section class="slider_area">
    <div class=slider_inner>
        <div class="rev_slider fullwidthabanner"  data-version="5.3.0.2" id="home-slider2">
            <ul>
                <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('img/slider-img/slider-2.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="tp-caption first_text"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-voffset="['260']"
                        data-hoffset="['40','120','40']"
                        data-x="left"
                        data-y="top"
                        data-fontsize="['48']"
                        data-lineheight="['55']"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="800"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">Are You <span>Waiting</span> <br /> For <span>Dating ?</span>
                    </div>
                    <div class="tp-caption download_btn"
                        data-whitespace="nowrap"
                        data-voffset="['390']"
                        data-hoffset="['40','120','40']"
                        data-x="left"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-y="top"
                        data-start="1800" >
                        <a class="register_angkar_btn" href="#">Registration</a>
                    </div>
                </li>
                <li data-index="rs-1597" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('img/slider-img/slider-1.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="tp-caption first_text"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-voffset="['260']"
                        data-hoffset="['40','120','40']"
                        data-x="left"
                        data-y="top"
                        data-fontsize="['48']"
                        data-lineheight="['55']"
                        data-transform_idle="o:1;"
                        data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-start="800"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">Are You <span>Waiting</span> <br /> For <span>Dating ?</span>
                    </div>
                    <div class="tp-caption download_btn"
                        data-whitespace="nowrap"
                        data-voffset="['390']"
                        data-hoffset="['40','120','40']"
                        data-x="left"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-y="top"
                        data-start="1800" >
                        <a class="register_angkar_btn" href="#">Registration</a>
                    </div>
                </li>
            </ul>
        </div><!-- END REVOLUTION SLIDER -->
    </div>
    <div class="advanced_search">
        <div class="container">
            <div class="search_inner">
                <div class="search_item">
                    <h5>I am a</h5>
                    <select class="selectpicker">
                        <option>Man</option>
                        <option>Woman</option>
                    </select>
                </div>
                <div class="search_item">
                    <h5>Seeking a</h5>
                    <select class="selectpicker">
                        <option>Woman</option>
                        <option>Man</option>
                    </select>
                </div>
                <div class="search_item">
                    <h5>From</h5>
                    <select class="selectpicker">
                        <option>20</option>
                        <option>28</option>
                    </select>
                </div>
                <div class="search_item">
                    <h5>To</h5>
                    <select class="selectpicker">
                        <option>28</option>
                        <option>38</option>
                    </select>
                </div>
                <div class="search_item">
                    <button type="submit" value="LogIn" class="btn form-control login_btn">Search</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Slider Reg Area =================-->

<!--================Welcome Area =================-->
<section class="welcome_area">
    <div class="container">
        <div class="welcome_title">
            <h3>Welcome to <span>Vero</span>Date</h3>
            <img src="img/w-title-b.png" alt="">
        </div>
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <div class="welcome_item">
                    <img src="{{ asset('img/welcome-icon/w-icon-1.png') }}" alt="">
                    <h4 class="counter">1611</h4>
                    <h6>Total Members</h6>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="welcome_item">
                    <img src="{{ asset('img/welcome-icon/w-icon-2.png') }}" alt="">
                    <h4 class="counter">500</h4>
                    <h6>Members online</h6>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="welcome_item">
                    <img src="{{ asset('img/welcome-icon/w-icon-3.png') }}" alt="">
                    <h4 class="counter">300</h4>
                    <h6>Men online</h6>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="welcome_item">
                    <img src="{{ asset('img/welcome-icon/w-icon-4.png') }}" alt="">
                    <h4 class="counter">200</h4>
                    <h6>Women online</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Welcome Area =================-->

<!--================Download Area =================-->
<section class="download_area">
    <div class="download_full_slider">
        <div class="container">
            <div class="row">
                <div class="item">
                    <div class="col-md-7">
                        <div class="download_app_icon">
                            <h3>Download <span>Vero</span><span>Date</span> app</h3>
                            <h5>Free Available in All Store PlayStore, AppStore & Microsoft Store</h5>
                            <ul>
                                <li><a href="#"><i class="fa fa-android"></i></a></li>
                                <li><a href="#"><i class="fa fa-apple"></i></a></li>
                                <li><a href="#"><i class="fa fa-windows"></i></a></li>
                            </ul>
                        </div>
                        <div class="download_content">
                            <div class="item">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</p>
                                <h4>Amanda Davidson</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="item">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</p>
                                <h4>Amanda Davidson</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="item">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</p>
                                <h4>Amanda Davidson</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="download_moblie">
                            <div class="download_m_slider">
                                <img src="{{ asset('img/mobile-slider/mobile-1.png') }}" alt="">
                                <div class="download_moblile_slider">
                                    <div class="item">
                                        <img src="{{ asset('img/mobile-slider/screen-1.png') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/mobile-slider/screen-1.png') }}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/mobile-slider/screen-1.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Download Area =================-->

<!--================Find Your Soul Area =================-->
<section class="find_soul_area">
    <div class="container">
        <div class="welcome_title">
            <h3>Step to Find Your Soul mate</h3>
            <img src="{{ asset('img/w-title-b.png') }}" alt="">
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="find_soul_item">
                    <img src="{{ asset('img/soul-icon/soul-1.png') }}" alt="">
                    <h4>Create a profile</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="find_soul_item">
                    <img src="{{ asset('img/soul-icon/soul-2.png') }}" alt="">
                    <h4>Find matches </h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="find_soul_item">
                    <img src="{{ asset('img/soul-icon/soul-3.png') }}" alt="">
                    <h4>Start Dating</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Find Your Soul Area =================-->

<!--================Video Area =================-->
<section class="video_area">
    <div class="row m0 video_row">
        <iframe id="video" src="http://www.youtube.com/embed/bCIXMvE5nL4?enablejsapi=1&amp;html5=1&amp;rel=0&amp;fs=0&amp;loop=1&amp;showinfo=0&amp;disablekb=1&amp;controls=0&amp;color=white&amp;playlist=bCIXMvE5nL4"></iframe>
        <div class="overlay" id="video_overlay">
            <div class="overlay_bg"></div>
            <div class="play_pause row m0">
                <i class="fa fa-play" aria-hidden="true" id="play_btn"></i>
                <i class="fa fa-pause" aria-hidden="true" id="pause_btn"></i>
                <div class="video_content">
                    <h4>Find your perfect match With us </h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Video Area =================-->

<!--================Testimonials Area =================-->
<section class="testimonials_area">
    <div class="container">
        <div class="welcome_title">
            <h3>Testimonials</h3>
            <img src="img/w-title-b.png" alt="">
        </div>
        <div class="testimonials_slider">
            <div class="item">
                <div class="col-md-9">
                    <div class="row">
                        <div class="test_left_content">
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, <span>so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</span>  These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="test_man">
                            <img class="img-circle" src="img/testimonials/testimonials-1.png" alt="">
                            <h4>David Parkar</h4>
                            <h5>Graphic Designer </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-9">
                    <div class="row">
                        <div class="test_left_content">
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, <span>so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</span>  These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="test_man">
                            <img class="img-circle" src="img/testimonials/testimonials-1.png" alt="">
                            <h4>David Parkar</h4>
                            <h5>Graphic Designer </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Testimonials Area =================-->

<!--================Blog slider Area =================-->
<section class="blog_slider_area">
    <div class="blog_slider_inner">
        <div class="item">
            <div class="single_blog_slider">
                <img src="img/blog/blog_slider/blog_slider-1.jpg" alt="">
                <div class="blog_item_content">
                    <h4>Your Blog title here</h4>
                    <h5>03 Sep, 2016 <span>|</span> Dating</h5>
                    <ul>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="single_blog_slider">
                <img src="img/blog/blog_slider/blog_slider-3.jpg" alt="">
                <div class="blog_item_content">
                    <h4>Your Blog title here</h4>
                    <h5>03 Sep, 2016 <span>|</span> Dating</h5>
                    <ul>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="single_blog_slider">
                <img src="img/blog/blog_slider/blog_slider-4.jpg" alt="">
                <div class="blog_item_content">
                    <h4>Your Blog title here</h4>
                    <h5>03 Sep, 2016 <span>|</span> Dating</h5>
                    <ul>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="single_blog_slider">
                <img src="img/blog/blog_slider/blog_slider-1.jpg" alt="">
                <div class="blog_item_content">
                    <h4>Your Blog title here</h4>
                    <h5>03 Sep, 2016 <span>|</span> Dating</h5>
                    <ul>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="single_blog_slider">
                <img src="img/blog/blog_slider/blog_slider-3.jpg" alt="">
                <div class="blog_item_content">
                    <h4>Your Blog title here</h4>
                    <h5>03 Sep, 2016 <span>|</span> Dating</h5>
                    <ul>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="single_blog_slider">
                <img src="img/blog/blog_slider/blog_slider-1.jpg" alt="">
                <div class="blog_item_content">
                    <h4>Your Blog title here</h4>
                    <h5>03 Sep, 2016 <span>|</span> Dating</h5>
                    <ul>
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Blog slider Area =================-->

<!--================Register Members slider Area =================-->
<section class="register_members_slider">
    <div class="container">
        <div class="welcome_title">
            <h3>Latest registered members</h3>
            <img src="img/w-title-b.png" alt="">
        </div>
        <div class="r_members_inner">
            <div class="item">
                <img src="img/members/r_members-1.png" alt="">
                <h4>Rocky Ahmed</h4>
                <h5>22 years old</h5>
            </div>
            <div class="item">
                <img src="img/members/r_members-2.png" alt="">
                <h4>Alex Jones</h4>
                <h5>23 years old</h5>
            </div>
            <div class="item">
                <img src="img/members/r_members-3.png" alt="">
                <h4>Nancy Martin</h4>
                <h5>25 years old</h5>
            </div>
            <div class="item">
                <img src="img/members/r_members-4.png" alt="">
                <h4>Kavin Smith</h4>
                <h5>20 years old</h5>
            </div>
            <div class="item">
                <img src="img/members/r_members-5.png" alt="">
                <h4>Lena Adms</h4>
                <h5>26 years old</h5>
            </div>
            <div class="item">
                <img src="img/members/r_members-6.png" alt="">
                <h4>Peter Nevill</h4>
                <h5>20 years old</h5>
            </div>
            <div class="item">
                <img src="img/members/r_members-2.png" alt="">
                <h4>Alex Jones</h4>
                <h5>23 years old</h5>
            </div>
            <div class="item">
                <img src="img/members/r_members-3.png" alt="">
                <h4>Nancy Martin</h4>
                <h5>25 years old</h5>
            </div>
        </div>
    </div>
</section>
<!--================End Register Members  slider Area =================-->

<!--================Map Area =================-->
<section class="map_area">

    <div id="mapCanvas"></div>

    <div class="container">
        <div class="bloger_map_form">
            <h4>Find People in Map</h4>
            <div class="bloger_map_inner">
                <div class="form-single row m0">
                    <h5>Looking for a</h5>
                    <select class="selectpicker">
                        <option>Woman</option>
                        <option>Man</option>
                    </select>
                </div>
                <div class="form-single row m0">
                    <h5>Your location</h5>
                    <select class="selectpicker">
                        <option>Paris</option>
                        <option>Paris</option>
                    </select>
                </div>
                <div class="form-single row m0">
                    <h5>From (age)</h5>
                    <select class="selectpicker">
                        <option>20</option>
                        <option>30</option>
                        <option>40</option>
                    </select>
                </div>
                <div class="form-single row m0">
                    <h5>To (age)</h5>
                    <select class="selectpicker">
                        <option>32</option>
                        <option>42</option>
                        <option>52</option>
                    </select>
                </div>
                <div class="range_count">
                    <h5>Search Distance</h5>
                    <div id="slider-range-min">
                        <div class="ui-slider-handle">
                            <span class="custom-handle"></span>
                        </div>
                    </div>
                    <div class="left_value">
                        <div class="custom-value"></div>
                        <div class="km_value">Km</div>
                    </div>
                    <div class="right_value">
                        <h5>50km</h5>
                    </div>
                </div>
                <div class="reg_chose">
                    <button type="submit" value="LogIn" class="btn form-control login_btn">Search</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Map Area =================-->

@endsection
