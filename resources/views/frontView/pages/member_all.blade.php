@extends('frontview.master')

@section('title','VeroDate 2019 All Member Page')


@section('membercontent')
<!--================Register Members slider Area =================-->
<section class="register_members_slider">
    <div class="container">
        <div class="welcome_title">
            <h3>Latest registered members</h3>
            <img src="img/w-title-b.png" alt="">
        </div>
        <div class="r_members_inner">
            @foreach ($memberall as $item)
            <div class="item">
                <img class="img-circle" src="img/members/r_members-1.png" alt="">
                <h4>{{ $item->email }}</h4>
                <h5>{{ $item->dob }}</h5>
            </div>
            @endforeach
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
            @foreach ($memberall as $item)
            <div class="col-sm-2 col-xs-6">
                <div class="all_members_item">
                    <img src="img/members/all-members/members-1.png" alt="">
                    <h4>{{ $item->email }}</h4>
                    <h5>{{ $item->dob }}</h5>
                </div>
            </div>
            @endforeach
        </div>
        <a href="#" class="register_angkar_btn">View More</a>
    </div>
</section>
<!--================End All Members Area =================-->

<!--================Active Memebers Area =================-->
<section class="actives_members">
        <div class="container">
            <div class="welcome_title">
                <h3>Active Members</h3>
                <img src="img/w-title-b.png" alt="">
            </div>
            <div class="row">
                @foreach ($memberall as $item)
                <div class="col-sm-2 col-xs-6">
                    <div class="active_mem_item">
                        <ul class="nav navbar-nav">
                            <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"><img
                                        src="img/members/active-members/a-members-1.png" alt=""></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head_area">
                                            <h4>{{ $item->email }}</h4>
                                            <h4>{53% Match}</h4>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="img/photo/people-p/people-drop-3.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h6>{{ $item->dob }} <br> From Derby <br> Single</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h4>{{ $item->email }}</h4>
                        <h5>{{ $item->dob }}</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================End Active Memebers Area =================-->

@endsection
