<?php

namespace App\Http\Controllers;

use App\Http\Requests\postRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
      public function create (postRequest $request){
        $post=new Post();
        $post->name =$request->name;
        $post->email =$request->email;
        $opp= $post->save();
        if($opp)
        return "added successfully";
        else
        return "not added successfully";
      }
      public function update ($post){
        $device = Post::findOrFail($post); 
        $device->name = request()->name;
        $device->email = request()->email;
        $device->save();
        return "update successfully";
}
public function delete($post){
    DB::table('posts')->where('id', $post)->delete();
    return "delete successfully"; 
}
public function search ($post){
  return Post::where('name',$post)->get();
 }
}