<div id="slider-wrapper" class="slider">
	<div class="container">
		@foreach(slideshow() as $slide)
		<li>
			<div class="tagline">
				{{HTML::image(slide_image_url($slide->gambar),'slideshow')}}
				<!-- <p>{{$slide->text}}</p> -->
			</div>
		</li>
		@endforeach
	</div>
</div><!-- .slider -->