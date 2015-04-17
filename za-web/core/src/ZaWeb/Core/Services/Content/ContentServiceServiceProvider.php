<?php namespace ZaWeb\Core\Services\Content;

use Illuminate\Support\ServiceProvider;

use Illuminate\Database\Eloquent\Model;
class ContentServiceServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('contentService', function($app)
        {
           
            return new ContentService(
                $app->make('ZaWeb\Core\Repositories\Content\ContentInterface')
            );
            
        });
    }
    
}

