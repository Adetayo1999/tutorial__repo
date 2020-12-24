<?php

$post = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia consequatur odio illum at dolores nulla cum ab suscipit earum dolor. Animi consequuntur vero tenetur provident reprehenderit dicta ut ex, necessitatibus explicabo ab facere ad assumenda quas? Magnam provident possimus cumque?";

echo "<p>".substr($post , 0 , 100)."...</p>";


$hello = mysqli_connect('localhost' , 'tomiwa' , 'panasonic99' , 'posts');

$query = "SELECT * FROM posting WHERE id=1";
$result = mysqli_query($hello , $query);

$data = mysqli_fetch_assoc($result);



?>
