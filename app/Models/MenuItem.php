<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

    protected $with = ['children'];

    public function children(){
        return $this->hasmany(MenuItem::class, 'parent_id');
    }

    public function parent(){
        return $this->belongsTo(MenuItem::class, 'parent_id');
    }

}
