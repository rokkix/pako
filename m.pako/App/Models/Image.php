<?php


namespace App\Models;

use App\Core\Dbase\Db;
use App\Core\Mvc\Model;

class Image
{

    public static function getImage()
    {
        $images = [];
        //$hadle = opendir(__DIR__ . '/../../img/img_big/1');

        for ($i = 1; $i <= 7; $i++) {
            $hadle = opendir(__DIR__ . '/../../img/img_big/' . $i);
            if (handle) {
                while (false !== ($file = readdir($hadle))) {
                    if ($file != '.' && $file != '..') {
                        $images[$i][] = $file;
                    }
                }
                closedir($hadle);
            }
        }
        return $images;


    }

    public static function Upload($file)
    {
        move_uploaded_file($file['upl']['tmp_name'],__DIR__ . '/../../big_img/' . $file['upl']['name']) ;
        self::img_resize(__DIR__ . '/../../big_img/' . $file['upl']['name'],__DIR__ . '/../../small_img/' . $file['upl']['name'],320,220);
        //var_dump($file['upl']);die;
        return true;

    }

    public static function img_resize(
        $source_path,
        $destination_path,
        $newwidth,
        $newheight = FALSE,
        $quality = 100 // качество для формата jpeg
    ) {

        ini_set("gd.jpeg_ignore_warning", 1); // иначе на некотоых jpeg-файлах не работает

        list($oldwidth, $oldheight, $type) = getimagesize($source_path);

        switch ($type) {
            case IMAGETYPE_JPEG: $typestr = 'jpeg'; break;
            case IMAGETYPE_GIF: $typestr = 'gif' ;break;
            case IMAGETYPE_PNG: $typestr = 'png'; break;
        }
        $function = "imagecreatefrom$typestr";
        $src_resource = $function($source_path);

        if (!$newheight) { $newheight = round($newwidth * $oldheight/$oldwidth); }
        elseif (!$newwidth) { $newwidth = round($newheight * $oldwidth/$oldheight); }
        $destination_resource = imagecreatetruecolor($newwidth,$newheight);

        imagecopyresampled($destination_resource, $src_resource, 0, 0, 0, 0, $newwidth, $newheight, $oldwidth, $oldheight);

        if ($type = 2) { # jpeg
            imageinterlace($destination_resource, 1); // чересстрочное формирование изображение
            imagejpeg($destination_resource, $destination_path, $quality);
        }
        else { # gif, png
            $function = "image$typestr";
            $function($destination_resource, $destination_path);
        }

        imagedestroy($destination_resource);
        imagedestroy($src_resource);
    }
    
    public static function check() {

        $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
        $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
        $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
        $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
        $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
        $mobile = strpos($_SERVER['HTTP_USER_AGENT'],"Mobile");
        $symb = strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
        $operam = strpos($_SERVER['HTTP_USER_AGENT'],"Opera M");
        $htc = strpos($_SERVER['HTTP_USER_AGENT'],"HTC_");
        $fennec = strpos($_SERVER['HTTP_USER_AGENT'],"Fennec/");
        $winphone = strpos($_SERVER['HTTP_USER_AGENT'],"WindowsPhone");
        $wp7 = strpos($_SERVER['HTTP_USER_AGENT'],"WP7");
        $wp8 = strpos($_SERVER['HTTP_USER_AGENT'],"WP8");
        $wp10 = strpos($_SERVER['HTTP_USER_AGENT'],"WP10");
        if ($wp10 || $iphone || $android || $palmpre || $ipod || $berry || $mobile || $symb || $operam || $htc || $fennec || $winphone || $wp7 || $wp8 === true){
            return true;
        }

    }

}