<?php

namespace App\Repositories;


use App\Title;

use Illuminate\Http\Request;


class TitlesRepository
{

    public function create($description , int $id)
    {
        $title = new Title();
        $title->autor_id = $id;
        $title->title = (string)$description ;
        $title->save();
        return $title;
    }

}