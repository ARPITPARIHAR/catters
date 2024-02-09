<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{


    public function wedding()
    {

return view(' user.marriage');



    }






    public function festival()
    {
        
        return view(' user.festival');


    }





public function anniversry()
{
   
    return view(' user.aniversry');


}





public function kitti()
{
  
    return view(' user.kitty'); 

}

public function office()
{
   
    return view(' user.office'); 

}

public function birthday()
{
   
    return view(' user.birthday');  

}

public function innuga()
{
    return view(' user.any');  
    
}

public function special()
{
    return view(' user.special'); 
    
}

public function kids()
{
   
    return view(' user.kids'); 

}

public function photo()
{
   
    return view(' user.photo'); 

}
public function video()
{
   
    return view(' user.video'); 

}


}



