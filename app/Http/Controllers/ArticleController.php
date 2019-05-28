<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CRUDRepositories;
use App\Article;

class ArticleController extends Controller
{
    protected $model;

    public function __construct(Article $Article)
    {
    
        $this->model = new CRUDRepositories($Article);
    }

    public function items()
    {
       $view = $this->model->Show();
       return view('welcome')->with('view', $view);
    }

    public function showitem($id)
    {
        $items = $this->model->ShowItems($id);

        return view('items')->with('items', $items);

    }
}
