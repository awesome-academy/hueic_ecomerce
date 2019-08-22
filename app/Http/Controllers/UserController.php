<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserUpdate;
use App\Models\User;
use Auth;

class UserController extends Controller
{

    protected $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user= Auth::user();
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.profile')->with('user',$this->user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdate $request, $id)
    {
        $user = User::findOrFail($id);
        if($user) {

            $data = $request->only([
                'name',
                'phone',
                'address',
            ]);

            $user->update($data);
            return back()->withMessage('Update profle success');
        }

        return back()->withErrors(['msg', 'Has a error!']);
    }
}
