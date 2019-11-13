@extends('frontview.master')

@section('title','VeroDate 2019 All Member Page')


@section('membercontent')

 <!--================Active Memebers Area =================-->
 <section class="actives_members">
        <div class="container">
            <div class="welcome_title">
                <h3>Active Members</h3>
                <img src="img/w-title-b.png" alt="">
            </div>
            <div class="row">
                <div class="col-sm-2 col-xs-6">
                    <div class="active_mem_item">
                        <ul class="nav navbar-nav">
                            <li class="dropdown tool_hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-1.png" alt=""></a>
                                <ul class="dropdown-menu">

                                    {{-- @foreach ($memberall as $membertotal)
                                      @endforeach

                                        --}}


                                    <li>
                                        <div class="head_area">
                                            <h4>Lara Davis</h4>
                                            <h4>53% Match</h4>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/photo/people-p/people-drop-3.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h6>29 years old <br> From Derby <br> Single</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h4>Maria Doe</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="active_mem_item">
                        <ul class="nav navbar-nav">
                            <li class="dropdown tool_hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-2.png" alt=""></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head_area">
                                            <h4>Lara Davis</h4>
                                            <h4>53% Match</h4>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/photo/people-p/people-drop-4.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h6>29 years old <br> From Derby <br> Single</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h4>Maria Doe</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="active_mem_item">
                        <ul class="nav navbar-nav">
                            <li class="dropdown tool_hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-3.png" alt=""></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head_area">
                                            <h4>Lara Davis</h4>
                                            <h4>53% Match</h4>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/photo/people-p/people-drop-5.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h6>29 years old <br> From Derby <br> Single</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h4>Maria Doe</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="active_mem_item">
                        <ul class="nav navbar-nav">
                            <li class="dropdown tool_hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-4.png" alt=""></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head_area">
                                            <h4>Lara Davis</h4>
                                            <h4>53% Match</h4>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/photo/people-p/people-drop-6.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h6>29 years old <br> From Derby <br> Single</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h4>Maria Doe</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="active_mem_item">
                        <ul class="nav navbar-nav">
                            <li class="dropdown tool_hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-5.png" alt=""></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head_area">
                                            <h4>Lara Davis</h4>
                                            <h4>53% Match</h4>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/photo/people-p/people-drop-2.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h6>29 years old <br> From Derby <br> Single</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h4>Maria Doe</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>

                <div class="col-sm-2 col-xs-6">
                    <div class="active_mem_item">
                        <ul class="nav navbar-nav">
                            <li class="dropdown tool_hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-6.png" alt=""></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head_area">
                                            <h4>Lara Davis</h4>
                                            <h4>53% Match</h4>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/photo/people-p/people-drop-7.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h6>29 years old <br> From Derby <br> Single</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h4>Maria Doe</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="active_mem_item">
                        <ul class="nav navbar-nav">
                            <li class="dropdown tool_hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-7.png" alt=""></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head_area">
                                            <h4>Lara Davis</h4>
                                            <h4>53% Match</h4>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/photo/people-p/people-drop-8.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h6>29 years old <br> From Derby <br> Single</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h4>Maria Doe</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="active_mem_item">
                        <ul class="nav navbar-nav">
                            <li class="dropdown tool_hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-8.png" alt=""></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head_area">
                                            <h4>Lara Davis</h4>
                                            <h4>53% Match</h4>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/photo/people-p/people-drop-9.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h6>29 years old <br> From Derby <br> Single</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h4>Maria Doe</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="active_mem_item">
                        <ul class="nav navbar-nav">
                            <li class="dropdown tool_hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-9.png" alt=""></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head_area">
                                            <h4>Lara Davis</h4>
                                            <h4>53% Match</h4>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/photo/people-p/people-drop-10.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h6>29 years old <br> From Derby <br> Single</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h4>Maria Doe</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="active_mem_item">
                        <ul class="nav navbar-nav">
                            <li class="dropdown tool_hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-10.png" alt=""></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head_area">
                                            <h4>Lara Davis</h4>
                                            <h4>53% Match</h4>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/photo/people-p/people-drop-11.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h6>29 years old <br> From Derby <br> Single</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h4>Maria Doe</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="active_mem_item">
                        <ul class="nav navbar-nav">
                            <li class="dropdown tool_hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-11.png" alt=""></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head_area">
                                            <h4>Lara Davis</h4>
                                            <h4>53% Match</h4>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/photo/people-p/people-drop-12.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h6>29 years old <br> From Derby <br> Single</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h4>Maria Doe</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="active_mem_item">
                        <ul class="nav navbar-nav">
                            <li class="dropdown tool_hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/members/active-members/a-members-12.png" alt=""></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head_area">
                                            <h4>Lara Davis</h4>
                                            <h4>53% Match</h4>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/photo/people-p/people-drop-13.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h6>29 years old <br> From Derby <br> Single</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h4>Maria Doe</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Active Memebers Area =================-->

    <!--================Register Members slider Area =================-->
    <section class="register_members_slider">
        <div class="container">
            <div class="welcome_title">
                <h3>Latest registered members</h3>
                <img src="img/w-title-b.png" alt="">
            </div>
            <div class="r_members_inner">
                <div class="item">
                    <img class="img-circle" src="img/members/r_members-1.png" alt="">
                    <h4>Rocky Ahmed</h4>
                    <h5>22 years old</h5>
                </div>
                <div class="item">
                    <img class="img-circle" src="img/members/r_members-2.png" alt="">
                    <h4>Alex Jones</h4>
                    <h5>23 years old</h5>
                </div>
                <div class="item">
                    <img class="img-circle" src="img/members/r_members-3.png" alt="">
                    <h4>Nancy Martin</h4>
                    <h5>25 years old</h5>
                </div>
                <div class="item">
                    <img class="img-circle" src="img/members/r_members-4.png" alt="">
                    <h4>Kavin Smith</h4>
                    <h5>20 years old</h5>
                </div>
                <div class="item">
                    <img class="img-circle" src="img/members/r_members-5.png" alt="">
                    <h4>Lena Adms</h4>
                    <h5>26 years old</h5>
                </div>
                <div class="item">
                    <img class="img-circle" src="img/members/r_members-6.png" alt="">
                    <h4>Peter Nevill</h4>
                    <h5>20 years old</h5>
                </div>
                <div class="item">
                    <img class="img-circle" src="img/members/r_members-2.png" alt="">
                    <h4>Alex Jones</h4>
                    <h5>23 years old</h5>
                </div>
                <div class="item">
                    <img class="img-circle" src="img/members/r_members-3.png" alt="">
                    <h4>Nancy Martin</h4>
                    <h5>25 years old</h5>
                </div>
            </div>
        </div>
    </section>
    <!--================End Register Members  slider Area =================-->

    <!--================All Members Area =================-->
    <section class="all_members_area">
        <div class="container">
            <div class="welcome_title">
                <h3>All Members</h3>
                <img src="img/w-title-b.png" alt="">
            </div>
            <div class="row">
                <div class="col-sm-2 col-xs-6">
                    <div class="all_members_item">
                        <img src="img/members/all-members/members-1.png" alt="">
                        <h4>Lena Adms</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="all_members_item">
                        <img src="img/members/all-members/members-2.png" alt="">
                        <h4>Alex Jones</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="all_members_item">
                        <img src="img/members/all-members/members-3.png" alt="">
                        <h4>Lena Adms</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="all_members_item">
                        <img src="img/members/all-members/members-4.png" alt="">
                        <h4>Lena Adms</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="all_members_item">
                        <img src="img/members/all-members/members-5.png" alt="">
                        <h4>Lena Adms</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="all_members_item">
                        <img src="img/members/all-members/members-6.png" alt="">
                        <h4>Lena Adms</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="all_members_item">
                        <img src="img/members/all-members/members-7.png" alt="">
                        <h4>Lena Adms</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="all_members_item">
                        <img src="img/members/all-members/members-8.png" alt="">
                        <h4>Lena Adms</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="all_members_item">
                        <img src="img/members/all-members/members-9.png" alt="">
                        <h4>Lena Adms</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="all_members_item">
                        <img src="img/members/all-members/members-10.png" alt="">
                        <h4>Lena Adms</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="all_members_item">
                        <img src="img/members/all-members/members-11.png" alt="">
                        <h4>Lena Adms</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="all_members_item">
                        <img src="img/members/all-members/members-12.png" alt="">
                        <h4>Lena Adms</h4>
                        <h5>22 years old</h5>
                    </div>
                </div>
            </div>
            <a href="#" class="register_angkar_btn">View More</a>
        </div>
    </section>
    <!--================End All Members Area =================-->


@endsection


