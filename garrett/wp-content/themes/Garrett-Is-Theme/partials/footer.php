<div class="project-list">
	<?$menu = array(
		"title_li"    => "",
		// "exclude"     => get_option('page_on_front'),
		"link_before" => '<span class="menu--item">',
		"link_after"  => '</span>',
		"depth"       => '1',
	);?>
	<ul>
	{{ wp_list_categories( $menu ); }}
	</ul>
</div>

<ul class="social-icons" style="text-align:center;line-height: 1.5rem;">
	<a href="http://www.linkedin.com/in/jgsibinga"><i class="fa fa-linkedin"></i></a>
	<a href="http://www.twitter.com/mercigarrett"><i class="fa fa-twitter"></i></a>
	<a href="http://www.instagram.com/j__garrett"><i class="fa fa-instagram"></i></a>
	<a href="http://www.facebook.com/jgsibinga"><i class="fa fa-facebook"></i></a>
	<a href="http://www.dribbble.com/jamesgarrett"><i class="fa fa-dribbble"></i></a>
	<a href="http://google.com/+GarrettSibinga"><i class="fa fa-google-plus"></i></a>
</ul>