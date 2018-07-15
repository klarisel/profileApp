<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\User;

class UserController extends Controller
{
    /**
     * retrieve users
     *
     * @param $userId
     * @return view
     */
    public function getUser($userId)
    {
        $user = User::where('id',$userId)
                ->with('skills')
                ->with('experiences')
                ->with('education')
                ->with('training')
                ->first();
        if(empty($user)){
            Response::json(['code'=>400, 'message'=>'User not found', 'data'=>null]);
        }


        return Response::json(['code'=>200, 'message'=>'User Information', 'data'=>$user]);
    }


}
