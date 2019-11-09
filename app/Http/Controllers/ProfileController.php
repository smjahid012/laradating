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
     * @return \Illuminate\Http\Response
     */
    public function addprofile(Request $request)
    {
        //This logic will stop user to go back on profile section
        //Checking If Dating Profile exist & under review
        // $chekcingUserProfile = Profile::where(['id' =>Auth::user()['id'], 'status'=>0])->count();
        // if($chekcingUserProfile>0){
        //     return redirect('/reviewprofile');
        // }


        //  echo "<pre>";
        //  print_r(Auth::User());
        //  die;

        if($request->isMethod('post')){
            //profiles is table name
            $data = $request->all();
            $profile = new profile;
            $profile->email = $data['email'];
            $profile->gender = $data['gender'];
            $profile->height = $data['height'];
            // $profile->country = $data['country'];
            // $profile->language = $data['language'];
            $profile->dob = $data['dob'];
            $profile->mybio = $data['mybio'];
            $profile->myinterest = $data['myinterest'];

            $profile->save();

            //Redirect Users To Review Page after saving form
            return redirect('/reviewprofile');

            //  echo "<pre>";
            //  print_r($data);
            //  die;

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
        return view('frontView.pages.review_content');
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
