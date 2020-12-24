<?php include('db.php')?>
<?php
$query = 'SELECT * FROM recent';
$result = mysqli_query($conn , $query);
$data = mysqli_fetch_all($result , MYSQLI_ASSOC);

?>
<div class="section-title">
		<h2><span>All Stories</span></h2>
	</div>
	<div class="card-columns listrecent">
    <?php foreach($data as $datum):?>
		<div class="card">
			<a href="post.php">
				<img class="img-fluid" src= "<?php echo $datum['imageURL']?>" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="post.html"><?php echo $datum['title']?></a></h2>
				<h4 class="card-text"><?php echo substr($datum['post'] , 0 , 120); ?> ...</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="meta-footer-thumb">
						<a href="author.php"><img class="author-thumb" src="<?php echo $datum['userURL'] ?>" alt="<?php echo $datum['username']?>"></a>
						</span>
						<span class="author-meta">
						<span class="post-name"><a href="author.php"><?php echo $datum['username']?></a></span><br/>
						<span class="post-date"><?php echo $datum["created_at"]?></span><span class="dot"></span>
						</span>
						<span class="post-read-more"><a href="<?php echo "recented.php?id=".$datum['id'];?>" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach ;?>
	</div>

