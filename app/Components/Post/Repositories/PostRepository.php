<?php
/**
 * Created by IntelliJ IDEA.
 * User: minhhung
 * Date: 3/18/18
 * Time: 21:51
 */

namespace App\Components\Post\Repositories;


use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;

class PostRepository extends BaseRepository implements CacheableInterface
{
    use CacheableRepository;
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return "App\\Components\\Post\\Models\\Post";
    }
}