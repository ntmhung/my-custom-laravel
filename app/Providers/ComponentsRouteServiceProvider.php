<?php
/**
 * Created by IntelliJ IDEA.
 * User: minhhung
 * Date: 3/10/18
 * Time: 14:06
 */

namespace App\Providers;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;


class ComponentsRouteServiceProvider extends ServiceProvider
{
    protected $files;

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->files = new Filesystem();
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        $components = array_map('class_basename', $this->files->directories(app_path() . '/Components/'));
        foreach ($components as $component) {
            $namespace = 'App\Components\\' .$component . '\Http\Controllers';
            Route::middleware('web')
                ->namespace($namespace)
                ->group(app_path() . '/Components/' . $component . '/routes/web.php');
        }
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        $components = array_map('class_basename', $this->files->directories(app_path() . '/Components/'));
        foreach ($components as $component) {
            $namespace = 'App\Components\\' .$component . '\Http\Controllers';
            Route::prefix('api')
                ->middleware('api')
                ->namespace($namespace)
                ->group(app_path() . '/Components/' . $component . '/routes/api.php');
        }
    }
}