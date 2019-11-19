@extends('frontview.master')

@section('title','VeroDate 2019 Updating Adding Form')

@section('editprofile')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div style="padding:100px;">
                <div class="register_form_inner zoom-anim-dialog ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="registration_man">
                                <img src="img/Registration_man.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="registration_form_s">

                                <h4>Edit Registration</h4>

                                @if ($errors->any())
                                <div class='alert alert-danger'>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <form method="post" action="{{ route('profile.update', $editprofile->users_id) }}">
                                 @method('patch')
                                    @csrf

                                    <div class="form-group">
                                        @if (auth()->user())
                                        <label for="email">Email Address </label>
                                        <input type="email" placeholder="Enter Email" name="email"
                                            value="{{ auth()->user()->email }}" />
                                        @else
                                        <label for="email">Email Address </label>
                                        <input type="email" placeholder="Enter Email" name="email"
                                            value="{{ $editprofile->email }}" />
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="gender">Select Gender</label>
                                        <select class="form-control" name="gender" value="{{ $editprofile->gender }}">
                                          <option value="" >Choose</option>
                                          <option value="M" {{ $editprofile->gender == 'M' ?  'selected' : '' }} >Male</option>
                                          <option value="F" {{ $editprofile->gender == 'F' ?  'selected' : '' }} >Female</option>
                                          <option value="O" {{ $editprofile->gender == 'O' ?  'selected' : '' }} >Other</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="height">Select Height</label>
                                        <select class="form-control" name="height" value="{{ $editprofile->height }}" >
                                          <option value="" >Choose</option>
                                          <option value="1" {{ $editprofile->height == '1' ?  'selected' : '' }}>5.7</option>
                                          <option value="2" {{ $editprofile->height == '2' ?  'selected' : '' }}>5.8</option>
                                          <option value="3" {{ $editprofile->height == '3' ?  'selected' : '' }}>5.9</option>
                                          <option value="4" {{ $editprofile->height == '4' ?  'selected' : '' }}>6.0</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <div class="datepicker">
                                            <input type='text' class="form-control datetimepicker4"
                                                placeholder="Birthday" value="{{ $editprofile->dob }}" name="dob" />
                                            <span class="add-on"><i class="fa fa-calendar"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" placeholder="Bio" name="mybio" value="{{ $editprofile->mybio }}" />
                                    </div>


                                    <div class="form-group">
                                        <input type="text" placeholder="Interst" name="myinterest" value="{{ $editprofile->myinterest }}"/>
                                    </div>

                                    <button type="submit">Update Profile</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
