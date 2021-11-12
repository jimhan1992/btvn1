<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAccountRequest;
use App\Http\Services\UserService;
use App\Models\AccountModel;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = AccountModel::all();
        return  view('users.list', compact('users'));
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(CreateAccountRequest $request)
    {
        $account = new AccountModel();
        $account->first_name = $request->input('first_name');
        $account->last_name = $request->input('last_name');
        $account->email = $request->input('email');
        $account->password = $request->input('password');
        $account->address = $request->input('address');
        $account->save();
        return redirect()->route('users.index');
    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        $user = AccountModel::findOrFail($id);
        return view('users.edit', compact('user'));
    }


    public function update(CreateAccountRequest $request, $id)
    {
        $account = AccountModel::findOrFail($id);
        $account->first_name = $request->input('first_name');
        $account->last_name = $request->input('last_name');
        $account->email = $request->input('email');
        $account->password = $request->input('password');
        $account->address = $request->input('address');
        $account->save();
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = AccountModel::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');

    }
}
