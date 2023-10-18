<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Faker\Core\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ContentAbout extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'content_about';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function setPhotoAttribute($value)
    {
        if (strlen($value) > 150) {
            $folderPath = "images/about-images/";
            $image_parts = explode(";base64,", $value);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $filename = Str::random(5) . time() . '.'.$image_type;
            $file = $folderPath . $filename;

            Storage::disk('public')->put($file, $image_base64);

            $this->attributes['photo'] = 'storage/' . $file;
        }
    }


    public function setLogoAttribute($value)
    {

        if (strlen($value) > 150) {
            $folderPath = "images/about-images/";
            $image_parts = explode(";base64,", $value);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $filename = Str::random(5) . time() . '.'.$image_type;
            $file = $folderPath . $filename;

            Storage::disk('public')->put($file, $image_base64);

            $this->attributes['logo'] = 'storage/' . $file;
        }
    }

    public function setLogoDarkAttribute($value)
    {

        if (strlen($value) > 150) {
            $folderPath = "images/about-images/";
            $image_parts = explode(";base64,", $value);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $filename = Str::random(5) . time() . '.'.$image_type;
            $file = $folderPath . $filename;

            Storage::disk('public')->put($file, $image_base64);

            $this->attributes['logo_dark'] = 'storage/' . $file;
        }
    }

    public function setCirclePhotoAttribute($value)
    {
        if (strlen($value) > 150) {
            $folderPath = "images/about-images/";
            $image_parts = explode(";base64,", $value);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $filename = Str::random(5) . time() . '.'.$image_type;
            $file = $folderPath . $filename;

            Storage::disk('public')->put($file, $image_base64);

            $this->attributes['circle_photo'] = 'storage/' . $file;
        }
    }


    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
