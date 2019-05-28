<?php 

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\ArticleCRUDinterface;

class CRUDRepositories implements ArticleCRUDinterface
{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function Show()
    {
        return $this->model->all();
    }

    public function ShowItems($id){

        $this->model->find($id);
    }

    public function CreateArticle(){}

    public function DeleteArticle($id){}
}