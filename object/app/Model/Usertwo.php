<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Usertwo extends Model
{
    //
    protected $table = 'user';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    public function checkUser($request)
    {
    	$name = $request->input('name');
    	$ob = $this->where('name',$name)->first();
    	if($ob){
            if(md5($request->input('pw')) == $ob->pw){
            	return $ob;
            }else{
            	return null;
            }
    	}else{
    		return null;
    	}
    }
}
