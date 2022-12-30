<?php

namespace App\Http\Controllers\Admin;

use App\CPU\Helpers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yoeunes\Toastr\Facades\Toastr;

class UserController extends Controller
{
    public function index()
    {
        $data['user'] = User::where('email', '!=', 'root@root.com')->get();
        $data['title'] = 'Admin List';

        return view('admin.user.index', $data);
    }

    public function add_admin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required|unique:users',
        ], [
            'name.required' => 'Admin name is required!',
            'email.required' => 'Email  is required!',
            'phone.required' => 'Phone is required!',
        ]);

        if ($validator->errors()->count() > 0) {
            $errors = Helpers::error_processor($validator);
            foreach ($errors as $e) {
                Toastr::warning($e['message']);
            }

            return redirect()->back();
        }

        $password = env('ADMINPASS', 'adminamar');
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->is_active = 1;
        $user->password = Hash::make($password);

        $user->save();

        Toastr::success('Admin added Successfully with account password '.$password);

        return redirect()->back();
    }
}
