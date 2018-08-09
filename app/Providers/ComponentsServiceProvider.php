<?php
/**
 * Created by IntelliJ IDEA.
 * User: minhhung
 * Date: 3/5/18
 * Time: 22:23
 */

namespace App\Providers;

class ComponentsServiceProvider extends AbstractServiceProvider
{
    /**
     * Will make sure that the required modules have been fully loaded
     * @return void
     */
    public function boot()
    {
        $core_views = app_path() . '/Core/Views';

        if (is_dir(app_path() . '/Components/') && $this->files->exists($core_views)) {
            $components = array_map('class_basename', $this->files->directories(app_path() . '/Components/'));
            foreach ($components as $component) {
                // Allow routes to be cached
                if (!$this->app->routesAreCached()) {
                    $route_files = [
                        app_path() . '/Components/' . $component . '/routes.php',
                        app_path() . '/Components/' . $component . '/routes/web.php',
                        app_path() . '/Components/' . $component . '/routes/api.php',
                    ];
                    foreach ($route_files as $route_file) {
                        if ($this->files->exists($route_file)) {
                            include $route_file;
                        }
                    }
                }
                $helper = app_path() . '/Components/' . $component . '/helper.php';
                $views = app_path() . '/Components/' . $component . '/Views';
                $trans = app_path() . '/Components/' . $component . '/Translations';
                $this->loadViewsFrom($views, $component);
                if ($this->files->exists($helper)) {
                    include_once $helper;
                }
                if ($this->files->isDirectory($views)) {
                    $this->loadViewsFrom($views, strtolower($component));
                }
                if ($this->files->isDirectory($trans)) {
                    $this->loadTranslationsFrom($trans, strtolower($component));
                }
            }
        }
    }
}