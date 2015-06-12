<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="span12" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="span12" data-motopress-type="static">
						<section class="title-section">
							<h1 class="title-header">{{$detailblog->judul}}</h1>
							<!-- BEGIN BREADCRUMBS-->
							<ul class="breadcrumb breadcrumb__t">
								<li><a href="{{url('/')}}">Home</a></li>
								<li class="divider"></li>
								<li><a href="{{url('blog')}}">Blog</a></li>
								<li class="divider"></li>
								<li class="active">{{$detailblog->judul}}</li>
							</ul>			
							<!-- END BREADCRUMBS -->
							{{waktuTgl($detailblog->created_at)}}
						</section><!-- .title-section -->					
					</div>
				</div>
				<div id="content" class="row">
					<div class="span12" data-motopress-type="loop" >
						<div id="post-1797" class="post-1797 page type-page status-publish hentry">
							<div class="row">
								<div class="span8">
									{{$detailblog->isi}}
									<br>
									<div>
										@if(isset($prev))
							                <div style="width: 50%;float: left;">
							                	<a class="medium metro rounded btn primary" href="{{$prev->slug}}">Prev</a>
							            	</div>
							            @endif

							            @if(isset($next))
							                <div style="text-align: right;">
							                    <a class="medium metro rounded btn primary" href="{{$next->slug}}">Next</a>
							                </div>
							            @endif
								  	</div>
									<div class="clear"></div><br>
								  	<div class="comments">
								        {{$fbscript}}
						                {{fbcommentbox(slugBlog($detailblog), '100%', '5', 'light')}}
									</div>
								</div>
								<div class="span4">
									<h4>New Blogs</h4>
									<ul>
										@foreach(recentBlog(null,5) as $artikel)
					                    <li>
					                        <a href="{{blog_url($artikel)}}">{{short_description($artikel->judul, 28)}}</a><br>
					                        <span style="font-size: 14px;">{{date("d F Y", strtotime($artikel->created_at))}}</span><br><br>
					                    </li>
					                    @endforeach
									</ul>
								</div>
								</div>
							</div><!-- .row (end) -->
							<div class="clear"></div>
							<!--.pagination-->
							<!-- comment section -->
						</div><!--#post-->
					</div>
					<!-- pagination -->
				</div>
				<div class="clear"></div>
				<br><br>
			</div>
		</div>
	</div>
</div>