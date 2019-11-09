<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display Adding Profile Form Request.
     *
     * @return \Illuminate\Http\Response
     */
    public function addprofile(Request $request)
    {
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


            //  echo "<pre>";
            //  print_r($data);
            //  die;
        }


        return view('frontView.pages.addprofile_content');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
