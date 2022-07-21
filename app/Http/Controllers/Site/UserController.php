<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\Http\Requests\UserUpdateFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * index
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $users = User::paginate(5);
        return view('site.users.list',compact('users'));
    }    
    /**
     * add
     *
     * @param  mixed $request
     * @return \Illuminate\Http\Response
     */
    public function add(UserFormRequest $request)
    {
        User::create($request->all());
        return redirect()->route('site.users.form')->with(['success'=>'Insert with success']);
    }

    public function update(UserUpdateFormRequest $request)
    {
        $user = User::find($request->id);
        $user->update($request->has('password') ? $request->all() : $request->except(['password']));
        return redirect()->route('site.users.form.update', ['user_id'=>$user->id])->with(['success'=>'Updated with success']);
    }
    
    public function form()
    {
        return view('site.users.form');
    }    
 
    /**
     * formUpdate
     *
     * @param  mixed $user_id
     * @return void
     */
    public function formUpdate(int $user_id)
    {
        $user = User::find($user_id);
        return view('site.users.formUpdate', ['users' => $user]);
    }

    public function delete(int $id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json(['status'=> 'users deleted']);
    }
}
