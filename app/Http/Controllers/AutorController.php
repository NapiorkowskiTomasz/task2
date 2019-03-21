<?php

namespace App\Http\Controllers;


use App\Repositories\AutorsRepository;
use App\Repositories\TitlesRepository;
use Illuminate\Http\Request;


class AutorController extends Controller
{
    public function __construct(TitlesRepository $repository, AutorsRepository $autorsRepository )
    {
        $this->repoTitle=$repository;
        $this->repoAutor=$autorsRepository;
    }

    public function index(){

    }

    public function create()
    {
        return view('createAutor');
    }
    public function store(Request $request)
    {
        $autor = $this->repoAutor->create($request);
        $title1 = $this->repoTitle->create($request['title1'],$autor->id);
        $title2 = $this->repoTitle->create($request['title2'],$autor->id);
        $title3 = $this->repoTitle->create($request['title3'],$autor->id);

        return redirect()->route('autor.create');


    }

}
