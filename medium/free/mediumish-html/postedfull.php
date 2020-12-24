	
    <div class="col-md-8 col-md-offset-2 col-xs-12">
			<div class="mainheading">

				
				<div class="row post-top-meta">
					<div class="col-md-2">
						<a href="author.php"><img class="author-thumb" src="<?php echo $data['userURL']?>" alt="<?php echo $data['username'];?>"></a>
					</div>
					<div class="col-md-10">
						<a class="link-dark" href="author.php"><b><?php echo $data['username'];?></b></a><a href="#" class="btn follow">Follow</a>
						<span class="author-description"><?php echo $data['about'];?></span>
						<span class="post-date"><?php echo $data['created_at']; ?></span><span class="dot"></span>
					</div>
				</div>
				<!-- End Top Menta -->

				<h1 class="posttitle"><?php echo $data['title']; ?></h1>

			</div>

			<!-- Begin Featured Image -->
			<img class="featured-image img-fluid" src="<?php echo $data["imageURL"]?>" alt="">
			<!-- End Featured Image -->

			<!-- Begin Post Content -->
			<div class="article-post">
				<?php echo $data['post']?>
			</div>
		
			<div class="after-post-tags">
				<ul class="tags">
					<li><a href="#">Design</a></li>
					<li><a href="#">Growth Mindset</a></li>
					<li><a href="#">Productivity</a></li>
					<li><a href="#">Personal Growth</a></li>
				</ul>
			</div>
			<!-- End Tags -->

		</div>
		<!-- End Post -->

