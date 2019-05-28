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

       return $this->model->where('id', $id)->get();
    }

    public function CreateArticle($date){

        return $this->model->create($date);
    }

    public function DeleteArticle($id){

        return $this->model->destroy($id);
    }
}