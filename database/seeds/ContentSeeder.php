<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 10/14/15
 * Time: 9:38 PM
 */

use Illuminate\Database\Seeder;
use App\antrasoft\models\Content;
use App\antrasoft\models\ContentType;
use App\antrasoft\models\Comment;
use App\antrasoft\models\Tag;
use Illuminate\Support\Facades\Hash;

class ContentSeeder extends Seeder{
    public function run()
    {
        /*
        $contentType = new ContentType();
        $contentType->contenttype_name = "Blog-post";
        $contentType->status = 1;
        $contentType->save();

        $contentType = new ContentType();
        $contentType->contenttype_name = "Video-post";
        $contentType->status = 1;
        $contentType->save();

        $contentType = new ContentType();
        $contentType->contenttype_name = "Event-post";
        $contentType->status = 1;
        $contentType->save();

        $contentType = new ContentType();
        $contentType->contenttype_name = "Testimony";
        $contentType->status = 1;
        $contentType->save();


        // end of contenttype seeder


        $tag = new Tag();
        $tag->tag_name = "Career";
        $tag->save();

        $tag = new Tag();
        $tag->tag_name = "Success";
        $tag->save();

        $tag = new Tag();
        $tag->tag_name = "Winner";
        $tag->save();

        $tag = new Tag();
        $tag->tag_name = "Service Ride";
        $tag->save();

        $tag = new Tag();
        $tag->tag_name = "Entrepreneur";
        $tag->save();

        $tag = new Tag();
        $tag->tag_name = "Psychology";
        $tag->save();

        // end of tag seeder

        $content =  new Content();
        $content->title = "Agbo leaves in Calabar";
        $content->intro_text = "Agbo leaves in calabar intoduction Text";
        $content->featured_image = "images/slide/img14432369517.jpg";
        $content->main_text = "Amet culpa, accusamus. Temporibus animi, consequatur cumque natus, esse consequuntur voluptatibus deleniti necessitatibus autem architecto quaerat tenetur nobis, ea maxime saepe rem doloribus placeat aliquid quod, id fuga ratione error harum ex! Facere vero veniam ducimus nulla sed possimus nobis nisi maiores quibusdam, nam odit quos dolores laborum pariatur distinctio in ex culpa impedit. Corrupti sequi perferendis atque nam debitis ea sunt, vel mollitia voluptas tempora eaque Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
        $content->content_type = 1;
        $content->published_date = \Carbon\Carbon::now();
        $content->status = 1;
        $content->weight = 0;
        $content->save();

        $content =  new Content();
        $content->title = "Sample Antrasoft CMS Post";
        $content->intro_text = "Introductory Test Data for Antrasoft CMS Post";
        $content->featured_image = "images/slide/img14432772717.JPG";
        $content->main_text = "Agbo leaves in Calabar. luptatibus deleniti necessitatibus autem architecto quaerat tenetur nobis, ea maxime saepe rem doloribus placeat aliquid quod, id fuga ratione error harum ex! Facere vero veniam ducimus nulla sed possimus nobis nisi maiores quibusdam, nam odit quos dolores laborum pariatur distinctio in ex culpa impedit. Corrupti sequi perferendis atque nam debitis ea sunt, vel mollitia voluptas tempora eaque Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
        $content->content_type = 1;
        $content->published_date = \Carbon\Carbon::now();
        $content->status = 1;
        $content->userid = 1;
        $content->weight = 0;
        $content->save();

        $content =  new Content();
        $content->title = "Ok. third test srticles";
        $content->intro_text = "Introductory Test Data for Antrasoft CMS Post";
        $content->featured_image = "images/slide/img14432369517.jpg";
        $content->main_text = "Amet culpa, accusamus. Temporibus animi, consequatur cumque natus, esse consequuntur voluptatibus deleniti necessitatibus autem architecto quaerat tenetur nobis, ea maxime saepe rem doloribus placeat aliquid quod, id fuga ratione error harum ex! Facere vero veniam ducimus nulla sed possimus nobis nisi maiores quibusdam, nam odit quos dolores laborum pariatur distinctio in ex culpa impedit. Corrupti sequi perferendis atque nam debitis ea sunt, vel mollitia voluptas tempora eaque Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
        $content->content_type = 2;
        $content->userid = 1;
        $content->published_date = \Carbon\Carbon::now();
        $content->status = 1;
        $content->weight = 0;
        $content->save();

         */

        // comment blade and seeder
        $comment = new Comment();
        $comment->comment = "This is a sanmple comment";
        $comment->userid = 2;
        $comment->status = 1;
        $comment->postid = 1;
        $comment->like = 10;
        $comment->save();

        $comment = new Comment();
        $comment->comment = "This is a seconded comment";
        $comment->userid = 2;
        $comment->status = 1;
        $comment->postid = 1;
        $comment->like = 10;
        $comment->save();

        $comment = new Comment();
        $comment->comment = "This is ok i have a sanmple comment";
        $comment->userid = 2;
        $comment->status = 1;
        $comment->postid = 1;
        $comment->like = 10;
        $comment->save();

    }
} 