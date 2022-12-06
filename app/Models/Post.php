<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->string('nim');
            $table->string('nama');
            $table->integer('umur');
            $table->text('alamat');
            $table->string('kota');
            $table->string('kelas');
            $table->text('jurusan');
            $table->timestamps();
        });
    }
}
