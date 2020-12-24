<?php
  include('db.php');
  $query = 'SELECT * FROM posting';
  $result = mysqli_query($conn , $query);
  $data = mysqli_fetch_all($result , MYSQLI_ASSOC);
  $home = "active";
?>
 <?php include('header.php');?>
<div class="container">
	<div class="mainheading">
		<h1 class="sitetitle">Trinity Blog</h1>
		<p class="lead">
		  We Provide Accurate And Reliable Information As Soon As Possible 
		</p>
	</div>

	<section class="featured-posts">
	  <?php include('featured.php');?>
	</section>
	
	<section class="recent-posts">
	  <?php include('recent.php')?>
		</section>
 <?php include 'footer.php';?>
 