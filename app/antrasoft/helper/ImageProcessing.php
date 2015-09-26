<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 9/23/15
 * Time: 10:42 PM
 */

namespace App\antrasoft\helper;


class ImageProcessing {

    private $image;
    private $width;
    private $height;
    private $newImage;

    function __construct($fileName)
    {
        // *** Open up the file
        $this->image = $this->openImage($fileName);

        // *** Get width and height
       $this->width  = imagesx($this->image);
       $this->height = imagesy($this->image);
       list($this->width,$this->height) = getimagesize($fileName);
    }
    private function openImage($file)
    {
        // *** Get extension
        $extension = strtolower(strrchr($file, '.'));
        switch($extension)
        {
            case '.jpg':
            case '.jpeg':
                $img = imagecreatefromjpeg($file);
                break;
            case '.gif':
                $img = imagecreatefromgif($file);
                break;
            case '.png':
                $img = imagecreatefrompng($file);
                break;
            default:
                $img = false;
                break;
        }
        return $img;
    }

    public function crop($cropStartX, $cropStartY, $newWidth, $newHeight)
    {
        $this->newImage = imagecreatetruecolor($newWidth,$newHeight);
        //dd($this->newImage.'---'.$cropStartX.'-'.$cropStartY.'..newheight'.$newWidth.'-'.$newHeight.'...main:'.$this->width.'-'.$this->height);
        imagecopyresampled($this->newImage,$this->image , 0, 0, $cropStartX, $cropStartY, $newWidth, $newHeight,$this->width,$this->height);

    }

    public function saveImage($savePath, $imageQuality="90")
    {
        // *** Get extension
        $extension = strrchr($savePath, '.');
        $extension = strtolower($extension);

        switch($extension)
        {
            case '.jpg':
            case '.jpeg':
                if (imagetypes() & IMG_JPG) {
                    imagejpeg($this->newImage, $savePath, $imageQuality);
                }
                //dd($this->newImage);
                break;

            case '.gif':
                if (imagetypes() & IMG_GIF) {
                    imagegif($this->newImage, $savePath);
                }
                break;

            case '.png':
                // *** Scale quality from 0-100 to 0-9
                $scaleQuality = round(($imageQuality/100) * 9);

                // *** Invert quality setting as 0 is best, not 9
                $invertScaleQuality = 9 - $scaleQuality;

                if (imagetypes() & IMG_PNG) {
                    imagepng($this->newImage, $savePath, $invertScaleQuality);
                }
                break;

            // ... etc

            default:
                // *** No extension - No save.
                break;
        }

        imagedestroy($this->newImage);
    }
} 