@layout('layouts.one-column')



@section('main')

	<div class="grid" style="max-height:90vh;overflow-y:scroll;background-image:url({{home_url()}}/SIGNATURE-MINI.png);background-repeat:repeat;">



		@wpquery(array('project_type'=>'projects'))

		    <? 

			$project_type = get_field('project_type');

		    $thumb = get_field('thumbnail');

		    $description = get_field('description');

		    $category = get_the_category();

		    ?>

		    <a class="grid--box--home" href="{{the_permalink()}}" style="background-image:url({{ $thumb['url'] }});background-size:cover;background-repeat:no-repeat;background-color:rgba(255,255,255,0.97);">

		    	<div class="meta--inner">

		    		<ul class="box--meta">

		    			<li>{{ strtolower($category[0]->cat_name); }}<strong> / </strong>{{the_title()}}</li>

		    			<li><em style="font-variant: small-caps;text-transform: lowercase;">{{$description}}</em></li>

			    	</ul>

				</div>

		    </a>

		@wpempty

		    <li>{{ __('Sorry, no posts matched your criteria.') }}</li>

		@wpend





	</div>

@endsection