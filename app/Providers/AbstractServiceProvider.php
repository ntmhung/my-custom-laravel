<?php
/**
 * Created by IntelliJ IDEA.
 * User: minhhung
 * Date: 3/5/18
 * Time: 23:42
 */

namespace App\Providers;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;

class AbstractServiceProvider extends ServiceProvider
{
    /**
     * @var Filesystem $files
     */
    protected $files;

    public function register()
    {
        $this->files = new Filesystem();
    }
}