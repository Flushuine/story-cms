<?php

namespace Story\Cms\Backend\Controllers;

class PostController extends Controller
{
    public function index()
    {
        return $this->view('post.index');
    }

    public function create()
    {
        return $this->view('post.create');
    }
}
