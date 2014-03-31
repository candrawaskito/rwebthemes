<?php get_header(); ?>

	<div class="site-content container">
		
		<?php get_sidebar(); ?>

		<section class="content col-md-9">	
			<article class="row post">

			<?php if (have_posts()) {
				# code...
				while (have_posts()) {
					# code...
					the_post(); ?>

					<header class="entry-header">
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<div class="entry-meta">
						<span class="entry-date">
							<a href="" rel="bookmark"><span class="glyphicon glyphicon-calendar"></span> <time class="entry-date" datetime="2014-03-20T14:53:43+00:00"><?php the_date(); ?></time></a>&nbsp;
						</span>
						<span class="byline">
							<span class="author vcard"><a class="url fn n" href="<?php get_the_date(); ?>" rel="author"><span class="glyphicon glyphicon-user"></span> <?php the_author(); ?></a></span>&nbsp;
						</span>
						<span class="comments-link">
							<a href="#" title="Comment on oke"><span class="glyphicon glyphicon-comment"></span>  <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></a>&nbsp;
						</span>
						<span class="edit-link">
							<a class="post-edit-link" href="#"><span class="glyphicon glyphicon-edit"></span> Edit Post</a>
						</span>
					</div>
				</header>

				<div class="entry-content">
					
					<p>
						<?php the_content(); ?>
					</p>
	
				</div>

				<footer class="entry-footer">
					<span class="entry-more"><a href="" class="btn btn-primary">READ MORE <span class="glyphicon glyphicon-chevron-right"></span></a></span>
				</footer>

				<?php }
			} ?>
			
			</article>

			<nav class="row navigation nav-post">
				<ul>
					<li class="pull-left"><a href="#" rel="prev">&larr; Previous</a></li>
					<li class="pull-right"><a href="#" rel="next">Next &rarr;</a></li>
				</ul>
			</nav>

			<div id="respond">
				<h3>Leave a Reply</h3>
				<div id="cancel-comment-reply">
					<small><a id="cancel-comment-reply-link" href="#">Click here to cancel reply.</a></small>
				</div>
				<form action="#" method="post" id="commentform">
					<p>Logged in as <a href="#">admin</a>. <a href="#" title="Log out of this account">Log out &rarr;</a></p>
					<p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea></p>
					<p><input name="submit" id="submit" tabindex="5" value="Submit Comment" type="submit"></p>
				</form>
				<form action="#" method="post" id="commentform">
					<p><input name="author" id="author" value="" size="22" tabindex="1" aria-required="true" type="text">
					<label for="author"><small>Name (required)</small></label></p>

					<p><input name="email" id="email" value="" size="22" tabindex="2" aria-required="true" type="text">
					<label for="email"><small>Mail (will not be published) (required)</small></label></p>

					<p><input name="url" id="url" value="" size="22" tabindex="3" type="text">
					<label for="url"><small>Website</small></label></p>

					<p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea></p>

					<p><input name="submit" id="submit" tabindex="5" value="Submit Comment" type="submit"></p>
				</form>
			</div>
		</section>
	</div>

<?php get_footer(); ?>