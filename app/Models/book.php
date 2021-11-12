<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $visible = ['title', 'author_id', 'amount', 'cover'];
    protected $fissible = ['title', 'author_id', 'amount', 'cover'];
    public $timestamps = true;

    public function author()
    {
        //data dari model "Book" bisa dimiliki oleh model "Author"
        //melalui fk "author_id"
        return $this -> belongsTo('App\Models\Author', 'author_id');
    }
}
