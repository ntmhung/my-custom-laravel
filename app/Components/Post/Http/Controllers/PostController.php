<?php
/**
 * Created by IntelliJ IDEA.
 * User: minhhung
 * Date: 3/5/18
 * Time: 22:02
 */

namespace App\Components\Post\Http\Controllers;


use App\Components\Post\Repositories\PostRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * @var PostRepository $post_repository
     */
    protected $post_repository;

    public function __construct(PostRepository $postRepository)
    {
        $this->post_repository = $postRepository;
        $this->post_repository->skipPresenter();
    }

    public function index()
    {
        $posts = $this->post_repository->all();
        return view("post::post")->with("posts", $posts);
    }

    /**
     * @param string $slug
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show($slug)
    {
        $post = $this->post_repository->findWhere(['slug' => $slug])->first();
        return view("post::detail")->with("post", $post);
    }

    /**
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function add()
    {
        return view("post::add");
    }

    public function edit()
    {

    }

    public function store(Request $request)
    {

    }
}