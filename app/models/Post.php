<?php

namespace app\models;

class Post
{
    public static function getPosts()
    {
        $posts = [
            ['title' => 'Post 1', 'content' => 'Muna Saed'],
            ['title' => 'Post 2', 'content' => 'Fordham'],
            ['title' => 'Post 3', 'content' => 'CISC 3300'],
        ];

        return $posts;
    }
}
