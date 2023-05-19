<?php
namespace blog\controllers;


use blog\models\Post;

class PostsController extends FuncController
{
    public function actionIndex() {
        $posts = (new Post())->getAll();

        echo $this->render('posts', [
            'posts' => $posts
        ]);
    }
}