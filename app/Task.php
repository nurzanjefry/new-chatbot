<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];

    Schema::create('tasks', function (Blueprint $table) {
        $table->increments('id');
        $table->longText('body')->nullable()->default('text');
        $table->timestamps();
    });
}
