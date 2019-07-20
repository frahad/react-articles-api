<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * @var int
     */
    protected static $perPage = 15;

    /**
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return Article::orderBy('created_at', 'desc')
            ->simplePaginate(self::$perPage);
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'author' => 'required|string|max:255',
            'title' => 'required|string|max:150',
            'content' => 'required|string|max:3500',
        ]);

        return Article::create($request->all());
    }

    /**
     * @param  Request  $request
     * @param  string  $article
     * @return Response
     */
    public function show(Request $request, string $article)
    {
        return Article::whereSlug($article)
            ->first();
    }
}
