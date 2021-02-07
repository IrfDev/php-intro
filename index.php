<?php

class Post
{
  public $title;
  public $published;

  public function __construct($title, $published)
  {
    $this->title = $title;
    $this->published = $published;
  }
};


$posts = [
  new Post('My First post', true),
  new Post('My Second post', true),
  new Post('My Third post', true),
  new Post('My Fourth post', true),
  new Post('My Fifth post', false)
];

// $unpublishedPosts = array_filter($posts, function ($post) {
//   return !$post->published;
// });

// $modified = array_map(function ($post) {

//   return ['title' => $post->title];
// }, $posts);

// $titles = array_map(function ($post) {
//   return $post->title;
// }, $posts);

$titles = array_column($posts, 'title');

var_dump($titles);
