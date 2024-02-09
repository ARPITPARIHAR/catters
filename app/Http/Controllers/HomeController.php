<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
public function home()
 {

return view(' user.home');

 }
 public function contact()
 {

return view(' user.contact');

 }

 public function about()
 {

return view(' user.about');

 }


 public function getComment(Request $request)
 {
     try {
         
         $commentData = ['id' => 1, 'text' => 'Sample Comment']; 

         return response()->json(['comment' => $commentData], 200);
     } catch (\Exception $e) {
         // Log the exception for further investigation
         \Log::error($e);

         return response()->json(['error' => 'Internal Server Error'], 500);
     }
 }
}
