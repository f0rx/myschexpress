<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;
use App\Http\View\Composers\BreadcrumbComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.partials.breadcrumbs', BreadcrumbComposer::class);
        view()->composer('home.welcome', function ($view) {
            $category = Category::whereIsFeatured(true)->with('courses')->first();
            $view->with('featuredCategory', $category);
            $view->with('featuredCourses', json_encode($category->courses()->paginate(7)));

            $view->with('categories', Category::with('courses')->take(6)->get());
        });
    }
}
