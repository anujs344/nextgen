<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\ta_user;

class ApiController extends Controller
{
    public function update($from,$to)
    {
        ta_user::where('user_id',$from)->update([
            'user_id' => $to
        ]);
        $id = Hash::make('123456789');
        return $id;
    }

}
