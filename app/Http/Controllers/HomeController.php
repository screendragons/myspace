<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Image;
use Profile;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();
        return view('home')->with('users', $users);

        $profile = profile::select('profile.*')
            ->with('users')
            ->orderBy('profile.id', 'desc')->paginate(2);

        $userLikes = Like::where('user_id', Auth::id())
            ->pluck('profile_id')->toArray();


        return view('home')
            ->with('profile', $profile)
            ->with('userLikes', $userLikes);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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

    public function like( $id){
        $userLikes = DB::table('likes')->insert([
            'profile_id' => $id,
            'users_id' => Auth::user()->id,
            'created_at' =>\Carbon\Carbon::now()->toDateTimeString()
        ]);

        if($userLikes){
            return upload::with('users')->orderBy('created_at', 'DESC')->get();
        }
    }
}
