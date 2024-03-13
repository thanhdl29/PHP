<?php
require_once "./admin/post.php";
require_once "./home/post.php";

use AdminPost\Post;
use HomePost\Post as homePost;

$adminPost = new Post();
echo "<br>"; 
$homePost = new homePost();

?>