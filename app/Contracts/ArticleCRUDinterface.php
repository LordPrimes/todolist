<?php

namespace App\Contracts;


interface ArticleCRUDinterface 
{
    public function ShowItems($id);

    public function CreateArticle($date);

    public function DeleteArticle($id);

    public function Show();
} 


