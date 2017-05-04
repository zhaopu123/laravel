<?php

namespace App\Http\Controllers\Upload;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Intervention\Image\ImageManagerStatic as Image;

// use App\Org\Image;

class UploadController extends Controller
{
    //
    public function doupload(Request $request)
    {
        // if($request->hasFile('mypic')){
        //     $data = $request->file('mypic');
        //     for($i=0;$i < count($data);$i++){
        //         $ext = $data[$i]->getClientOriginalExtension();
        //         $filename = time().mt_rand('1000','9999').'.'.$ext;
        //         $data[$i]->move('./admin/upload',$filename);
        //         if($data[$i]->getError() > 0){
        //             echo "{$i}下标图片上传失败";
        //         }else{
        //             echo "<img src='./admin/upload/{$filename}' width='200'>";
        //         }
        //     }
        // }
        if($request->hasFile('pic')){
            if($request->file('pic')->isValid()){
                $data = $request->file('pic');
                $ext = $data->getClientOriginalExtension();
                $picname = time().rand(1000,9999).'.'.$ext;
                $data->move('./Admin/upload',$picname);
            }
        }else{
            if($request->has('oldpic')){
                $picname = $request->input('oldpic');
            }else{
                $picname = 'default.jpg';
            }
        }
        //图片缩放
        // $img = new Image();
        // $img->open('./admin/upload/'.$picname);
        // $img->thumb(100,100)->save('./admin/upload/s_'.$picname);
        
        // $img = Image::make('./Admin/upload/'.$picname);
        // $img->resize();
        // $img->save('./Admin/upload/s_'.$picname);
        return $picname;
    }
}
