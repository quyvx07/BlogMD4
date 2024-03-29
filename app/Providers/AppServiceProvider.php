<?php

namespace App\Providers;

use App\Repositories\Contracts\ImageAlbumRepositoryInterface;
use App\Repositories\Contracts\PostRepositoryInterface;
use App\Repositories\Contracts\ShareLinkPostRepositoryInterface;
use App\Repositories\Contracts\TagRepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Eloquent\ImageAlbumRepositoryEloquent;
use App\Repositories\Eloquent\PostRepositoryEloquent;
use App\Repositories\Eloquent\ShareLinkPostRepositoryEloquent;
use App\Repositories\Eloquent\TagRepositoryEloquen;
use App\Repositories\Eloquent\UserRepositoryEloquent;
use App\Services\Contracts\ImageAlbumServiceInterFace;
use App\Services\Contracts\PostServiceInterface;
use App\Services\Contracts\ShareLinkPostServiceInterface;
use App\Services\Contracts\TagServiceInterface;
use App\Services\Contracts\UserServiceInterface;
use App\Services\Services\ImageAlbumService;
use App\Services\Services\PostService;
use App\Services\Services\ShareLinkPostService;
use App\Services\Services\TagService;
use App\Services\Services\UserService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserRepositoryInterface::class, UserRepositoryEloquent::class);
        $this->app->singleton(UserServiceInterface::class, UserService::class);
        $this->app->singleton(PostRepositoryInterface::class, PostRepositoryEloquent::class);
        $this->app->singleton(PostServiceInterface::class, PostService::class);
        $this->app->singleton(ShareLinkPostRepositoryInterface::class, ShareLinkPostRepositoryEloquent::class);
        $this->app->singleton(ShareLinkPostServiceInterface::class, ShareLinkPostService::class);
        $this->app->singleton(TagRepositoryInterface::class, TagRepositoryEloquen::class);
        $this->app->singleton(TagServiceInterface::class, TagService::class);
        $this->app->singleton(ImageAlbumRepositoryInterface::class, ImageAlbumRepositoryEloquent::class);
        $this->app->singleton(ImageAlbumServiceInterFace::class, ImageAlbumService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
