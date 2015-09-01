<? $cur = get_the_id(); 

   $category = get_the_category();  

   $noun = strtolower(get_the_title());  

   $single_post = is_single($cur); 

   ?>





<div class="menu">

	<?$menu = array(

		"title_li"    => "",

		// "exclude"     => get_option('page_on_front'),

		"link_before" => '<span class="menu--item">',

		"link_after"  => '</span>',

		"depth"       => '1',

	);?>



	<ul> 

	<h4 class="brand-title" style="font-size:1.25rem;line-height:1.5rem;">

	<a id="brand" href="{{home_url()}}">{{ bloginfo('name') }} </a>

			@if(count($category)>=1)

	<a id="brand" href="{{home_url()}}/{{ strtolower($category[0]->cat_name); }}">

			{{ strtolower($category[0]->cat_name); }} </a>

			@endif

			@if($single_post == 'true')

	<a id="brand" href="{{home_url()}}/{{ strtolower($category[0]->cat_name); }}/{{ str_replace(" ","-","$noun")}}">

			{{$noun}}</a>

			@endif

		</h4>

	{{ wp_list_pages( $menu ); }} 

	</ul>

</div>