<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Category extends Model
{


    public $table = 'categories';
    
    public $fillable = ['title','parent_id'];


    /**
     * Get the index name for the model.
     *
     * @return string
    */
    public function childs() {
        return $this->hasMany('App\Category','parent_id','id') ;
    }
}