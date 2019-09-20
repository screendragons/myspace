<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;
use Auth;
use Redirect;
use DB;
use Image;
use Likes;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
         $users = User::find(Auth::id());
        // User::where('id',Auth::id())->get()
            return view('profile')->with('users', $users);
        // return view('profile');
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
        // $this->validate($request, [
        //     'file' => 'image|nullable|max:1999'
        // ]);


        // if($request->hasFile('file')){

        //     $filenameWithExt = $request->file('file')->getClientOriginalName();

        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        //     $extension = $request->file('file')->getClientOriginalName();

        //     $fileNameToStore = str_slug($filename.'_'.time()).'.'.$extension;

        //     Profile::make($request->file('file'))
        //         ->resize(600, 300, function($constraint){
        //             $constraint->aspectRatio();
        //         })
        //         ->save(storage_path('app\\public\\'.$fileNameToStore));

        // } else {
        //     $fileNameToStore = 'no_image.jpg';
        // }

        // $upload = new Upload();
        // $upload->user_id = Auth::id();
        // $upload->name = $request->title;
        // $upload->filename = $fileNameToStore;
        // $upload->description = $request->body;
        // $upload->media_type = '';
        // $upload->datasize = 1;
        // $upload->save();

         // return redirect('profile');
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
        $user = User::find($id);

        return view('profile')->with('user', $user);
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
        try {
            DB::beginTransaction();

            // logica
            $user = User::findOrFail($id);
            // $user->image = $request->image;
            $user->username = $request->username;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            // $user->password = $request->password;
            $user->address = $request->address;
            $user->zipcode = $request->zipcode;

            // $user->relationship_status = $request->relationship_status;
            $user->save();

            DB::commit();
            return redirect::back();
        }
        catch(Exception $e) {
            // later
            DB::rollback();

        }
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

    public function update_image(Request $request) {
        // Handle the user upload of avatar
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $avatar->getClientOrginalExtension();
                Image::make($image)->resize(300, 300)->save( public_path('/uploads/images' . $filename));

            $user = Auth::user();
            $user->image = $filename;
            $user->save;
        }

        return view('profile', array('user' => Auth::user()) );
    }
}
