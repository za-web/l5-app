<?php namespace ZaWeb\Core\Services\Content;

use ZaWeb\Core\Repositories\Content\ContentInterface;

use Illuminate\Support\Facades\View;
class ContentService
{
    protected $contentRepo;
    
    public function __construct(ContentInterface $contentRepo)
    {
        $this->contentRepo = $contentRepo;
    }
    
    
    public function viewAd($model)
    {
        $data = $this->contentRepo->getAll($model);
        return View::make('content.ad', array('data'=>$data));
    }
}



