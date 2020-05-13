<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * The resources per page.
     *
     * @var int
     */
    protected static $perPage = 15;

    /**
     * Display a paginated list of articles.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return Article::orderBy('created_at', 'desc')
            ->simplePaginate(self::$perPage);
    }

    /**
     * Store a new article.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:150',
            'author' => 'required|string|max:255',
            'thumbnail' => 'required|url|max:255',
            'content' => 'required|string|min:500|max:3500',
        ]);

        return Article::create($request->all());
    }

    /**
     * Show the given article.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request, int $id)
    {
        return Article::findOrFail($id);
    }
}
