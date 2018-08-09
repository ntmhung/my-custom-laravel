<?php
/**
 * Created by IntelliJ IDEA.
 * User: minhhung
 * Date: 3/5/18
 * Time: 23:41
 */

namespace App\Providers;

class CoreServiceProvider extends AbstractServiceProvider
{
    /**
     * Will make sure that the required modules have been fully loaded
     * @return void
     */
    public function boot()
    {
        if (is_dir(app_path() . '/Core/')) {
            $helper = app_path() . '/Core/helper.php';
            $views = app_path() . '/Core/Views';
            if ($this->files->exists($helper)) {
                include_once $helper;
            }
            if ($this->files->isDirectory($views)) {
                $this->loadViewsFrom($views, 'core');
            }
        }
    }
}