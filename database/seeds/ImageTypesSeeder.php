<?php
use \Illuminate\Database\Seeder;
use App\antrasoft\models\Imagetype;

class ImageTypesSeeder extends Seeder {
    public function run()
    {
        $imageType = new Imagetype();
        $imageType->type_name = 'slides';
        $imageType->type_description = 'slide images';
        $imageType->save();

        $imageType = new Imagetype();
        $imageType->type_name = 'album';
        $imageType->type_description = 'album images';
        $imageType->save();

        $imageType = new Imagetype();
        $imageType->type_name = 'gallery';
        $imageType->type_description = 'gallery images';
        $imageType->save();

        $imageType = new Imagetype();
        $imageType->type_name = 'blog';
        $imageType->type_description = 'blog images';
        $imageType->save();

        $imageType = new Imagetype();
        $imageType->type_name = 'general';
        $imageType->type_description = 'general use images';
        $imageType->save();
    }
} 