<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UsersController extends Controller
{
    /**
     * 注册表单视图
     *
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * 用户个人页
     *
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * 创建新用户
     *
     */
    public function store(Request $request)
    {
        // 数据验证
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

        // 入库
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // 自动登录
        Auth::login($user);

        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
        return redirect()->route('users.show', $user);
    }
}
