<?php

namespace App\Repositories;

use App\Autor;
use Illuminate\Config\Repository;
use Illuminate\Http\Request;


class AutorsRepository extends Repository
{

    public function create(Request $request)
    {
        $autor = new Autor();
        $autor->name = $request->get('name');
        $autor->save();
        return $autor;
    }

}