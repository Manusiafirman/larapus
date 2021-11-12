<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    //memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['name'];
    //meberikan akses data apa saja yang bisa di isi
    protected $fillable = ['name'];
    //mencatat waktu pembuatan dan update dala otomatis
    public $timestaps = true;
    //Membuat relasi one to many
    public function book()
    {
        //data model "Author" bisa memiliki banyak data
        //data dari model "Book" melalui fk"author id"
        $this -> hasMany('App\Models\book', 'author_id');
    }
}
