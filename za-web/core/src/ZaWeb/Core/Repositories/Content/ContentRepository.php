<?php namespace ZaWeb\Core\Repositories\Content;

use Illuminate\Database\Eloquent\Model;

class ContentRepository implements ContentInterface
{

    
    public function getAll($model)
    {
        return $model;
    }
    
    
    protected function convertFormat($model)
    {
    return $model ? (object) $model->toArray() : null;
    }
}

