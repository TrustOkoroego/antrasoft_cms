<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 9/18/15
 * Time: 4:56 PM
 */

namespace App\Http\Controllers\admin;
use Request,Auth,URL;
use App\antrasoft\helper;


trait DirectoryreaderController{

    public function getReadimages()
    {
       // dd( Request::input('targ'));
        $directory ="";
        if(Request::input('targ')=="")
        {
            $directory='/public/images';
        }
        else{
            $directory = Request::input('targ');
        }
        $dir = base_path().$directory;
        $files1 = scandir($dir);
        $re="";
        $fldr="";
        foreach($files1 as $f)
        {
            if($f!='.' && $f!='..')
            {

                if(is_dir($dir.'/'.$f))
                {

                    $fldr.='<div class="folderselect" targ="'.str_replace(base_path(),"",$dir).'/'.$f.'" style="width: 150px;height: 150px; float: left;border: thin solid #CCCCCC;margin: 5px;cursor: pointer">';
                    $fldr.='<div style="width: 50px;height: 50px;overflow: hidden;margin: 50px"><i class="fa fa-folder" style="font-size: 40px"><br><span style="font-size: 12px">'.$f.'</span></i>';
                    $fldr.='</div></div>';
                }else{
                    $re.='<div class="imageselect img_select" fname="'.$f.'" src="'.URL::to('/').'/images/slide/'.$f.'" style="width: 150px;height: 150px; float: left;border: thin solid #CCCCCC;margin: 5px;cursor: pointer">';
                    $re.='<div style="width: 150px;height: 120px;overflow: hidden"><img src="'.URL::to('/').'/images/slide/'.$f.'" width="100%">';
                    $re.='</div><p style="padding: 5px;word-wrap: break-word;font-size: 10px"> '.$f.' </p></div>';
                }

            }

        }
        $t2='<input id="navigation" type="hidden" value="'.substr($directory, 0, strrpos( $directory, '/')).'" />';
        return $fldr.$re.$t2;

    }
}