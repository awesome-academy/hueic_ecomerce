<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{

    protected $user;
    protected $perPage;

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->perPage = config('pagination.per_page');
    }

    private function getUser($id){
        $user = User::find($id);
        if(!$user){
            return back()
            ->withErrors(['msg', 'Has a error!']);
        }
        return $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::paginate($this->perPage);

        if($request->has('search')) {
            $searchTerm = $request->get('search');
            $users = User::where('name', 'like', "%" . $searchTerm . "%")
                ->orWhere('email', 'like', "%" . $searchTerm . "%")
                ->paginate($this->perPage);
            return view('admin.user.index')
                ->with(['users' => $users, 'search' => $searchTerm])
                ->withMessage('Search result');
        }
        return view('admin.user.index')
            ->with('users',$users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->user = $this->getUser($id);

        return view('admin.user.edit')
                ->with('user',$this->user);

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
        $this->user = $this->getUser($id);

        $data = $request->only([
            'name',
            'email',
            'phone',
            'address',
        ]);

        $user->update($data);

        return back()
            ->withMessage('Update profle success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->user = $this->getUser($id);
        $this->user->delete();
        return back()
            ->withMessage('Delete user success');
    }
}
