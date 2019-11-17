@extends('frontview.master')

@section('title','VeroDate 2019 User Adding Form ')

@section('addprofile')

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

                                <h4>Adding Profile After Registration</h4>

                                <form method="post" action="{{ route('profile.add') }}">
                                    @csrf
 
                                        <div class="form-group">
                                            @if (auth()->user())
                                            <label for="email">Email Address </label>
                                            <input type="email" placeholder="Enter Email" name="email" value="{{ auth()->user()->email }}"  />
                                            @else
                                            <label for="email">Email Address </label>
                                            <input type="email" placeholder="Enter Email" name="email" value="{{ old('email') }}"  />
                                            @endif
                                        </div>


                                            {{-- <div class="form-group">
                                                <input type="text" placeholder="Enter Gender" name="gender"  />
                                            </div> --}}

                                            <div class="form-group">
                                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Choose Gender</label>
                                                <select name="gender" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                                  <option selected>Choose...</option>
                                                  <option value="1">Male</option>
                                                  <option value="2">Female</option>
                                                  <option value="3">Three</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Choose Height</label>
                                                <select name="height" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                                  <option selected>Choose...</option>
                                                  <option value="1">5.2</option>
                                                  <option value="2">5.3</option>
                                                  <option value="3">5.4</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <div class="datepicker">
                                                    <input type='text' class="form-control datetimepicker4" placeholder="Birthday" name="dob"/>
                                                    <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" placeholder="Bio" name="mybio"   />
                                            </div>


                                            <div class="form-group">
                                                <input type="text" placeholder="Interst" name="myinterest"   />
                                            </div>


                                            {{-- <div class="form-group">
                                                <input type="text" placeholder="height" name="height"  />
                                            </div>



                                            <div class="form-group">
                                                <input type="text" placeholder="country" name="country"  />
                                            </div>



                                            <div class="form-group">
                                                <input type="text" placeholder="Language" name="language"  />
                                            </div>



                                            --}}


                                    <button type="submit">Save Profile</button>
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
