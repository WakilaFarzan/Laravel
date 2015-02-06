<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/5/15
 * Time: 3:35 PM
 */

namespace App\Http\Controllers;

class ArticleController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function article_create()
    {
        return view('article/create_article');
    }

} 