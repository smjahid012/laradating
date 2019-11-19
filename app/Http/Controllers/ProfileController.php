<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display Adding Profile Form Request.
     *
     *@param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addprofile(Request $request)
    {
        //This logic will stop user to go back on profile section
        //Checking If Dating Profile exist & under review
        $chekcingUserProfile = Profile::where(['users_id' => Auth::user()->id, 'status'=>0])->count();
        if ($chekcingUserProfile>0) {
            return redirect('/reviewprofile');
        }

        if ($request->isMethod('post')) {
            //profiles is table name
            $data = $request->all();
            //checking userdata if it is empty or not to determine which profile to show add or update
            if (empty($data['users_id'])) {
                $profile = new profile;
                $profile->users_id = Auth::user()->id;
            } else {
                //when they update it's status will bo 0 & again for admin approval
                $profile = Profile::where('users_id', $data['users_id'])->first();
                $profile->status = 0;
            }

            //validating user
            $data = request()->validate([
            'email' => 'required|email',
            'gender' => 'required',
            'height' => 'required',
            'dob' => 'required',
            'mybio' => 'required',
            'myinterest' => 'required',
        ]);

            $profile->email = $data['email'];
            $profile->gender = $data['gender'];
            $profile->height = $data['height'];
            // $profile->country = $data['country'];
            // $profile->language = $data['language'];
            $profile->dob = $data['dob'];
            $profile->mybio = $data['mybio'];
            $profile->myinterest = $data['myinterest'];
            $profile->save();

            // echo "<pre>";
            // print_r($data);
            // print_r(Auth::User());
            // print_r(Auth::user()->id);
            // die;

            //Redirect Users To Review Page after saving form
            return redirect('/reviewprofile');
        }
        return view('frontView.pages.addprofile_content');
    }

    /**
     * Show the message for review a new profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function reviewprofile()
    {
        //working
        $users_id = Auth::User()->id;
        $userStatus = Profile::select('status')->where('users_id', $users_id)->first();
        if ($userStatus->status == 1) {
            return redirect('/memberprofile');
        } else {
            return view('frontView.pages.review_content');
        }




        //return view('frontView.pages.review_content');
    }


    /**
     * For Showing All Member In Member Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function memberprofile()
    {
        $memberall = Profile::all();
        return view('frontView.pages.member_all')->with('memberall', $memberall);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified single member page resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singleprofile = Profile::where('users_id', $id)->first();
        return view('frontView.pages.member_details')->with('singleprofile', $singleprofile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editprofile = Profile::where('users_id', $id)->first();
        return view('frontView.pages.editprofile')->with('editprofile', $editprofile);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'email' => 'required|email',
            'gender' => 'required',
            'height' => 'required',
            'dob' => 'required',
            'mybio' => 'required',
            'myinterest' => 'required',
        ]);

        $profile = Profile::where('users_id', $id)->first();
        $profile->email = $data['email'];
        $profile->gender = $data['gender'];
        $profile->height = $data['height'];
        $profile->dob = $data['dob'];
        $profile->mybio = $data['mybio'];
        $profile->myinterest = $data['myinterest'];

        $profile->save();

         //echo "<pre>";
         //print_r($data);
         //print_r($profile);
        // print_r(Auth::user()->id);
        // die;
        //return redirect('/updateprofile/{id}');

        return redirect()->route('profile.show',Auth::user()->id );
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
