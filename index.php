<?php

ini_set('display_errors', E_ALL);

require_once './models/category.php';
require_once './models/post.php';

$post1 = new postModel('Post 1', 'Hello 1', 'https://images.unsplash.com/photo-1490730141103-6cac27aaab94?q=80&w=1470');
$post1->category(new categoryModel('Sample Category'));

$post2 = new postModel('Post 2', 'Hello 2', 'https://images.unsplash.com/photo-1490730141103-6cac27aaab94?q=80&w=1470');
$post2->category(new categoryModel('Sample Category'));

$post3 = new postModel('Post 3', 'Hello 3', 'https://images.unsplash.com/photo-1490730141103-6cac27aaab94?q=80&w=1470');
$post3->category(new categoryModel('Sample Category'));

$posts = array(
    $post1,
    $post2,
    $post3,
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAT Backend Week 4</title>
</head>
<body>
    <ul>
        <?php foreach ($posts as $post) { ?>
            <li>
                <a href="post.php">
                    <?= $post->title ?> (<?= $post->category->title ?>)
                </a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>