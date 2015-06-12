<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="span12" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="span12" data-motopress-type="static">
						<section class="title-section">
							<h1 class="title-header">Blogs</h1>
							<!-- BEGIN BREADCRUMBS-->
							<ul class="breadcrumb breadcrumb__t">
								<li><a href="{{url('/')}}">Home</a></li>
								<li class="divider"></li>
								<li><a>Blog</a></li>
							</ul>			
							<!-- END BREADCRUMBS -->
						</section><!-- .title-section -->					
					</div>
				</div>
				<div id="content" class="row">
					<div class="span12" data-motopress-type="loop" >
						<div id="post-1797" class="post-1797 page type-page status-publish hentry">
							<div class="row">
								<div class="span8">
									<div class="post_warpper">
										@if(count(list_blog(null,@$blog_category)) > 0)
											@foreach(list_blog(null,@$blog_category) as $blogs)
											<article>
												<header>
													<h2>
														<a href="{{blog_url($blogs)}}">{{$blogs->judul}}</a>
													</h2>
													<div class="meta">
										                <i class="icon-calendar"></i> {{date("d F Y", strtotime($blogs->updated_at))}} <i class="icon-paperclip"></i> <a href="{{blog_category_url(@$blogs->kategori)}}">{{$blogs->kategori->nama}}</a>
										            </div>
												</header>
												<br>
												<div class="post_content">
													<div class="excerpt">{{short_description($blogs->isi,380)}}</div>
												</div>
												<div>
									                <div style="text-align: right;">
									                    <a class="medium metro rounded btn primary" href="{{blog_url($blogs)}}">Read More</a>
									                </div>
											  	</div>
											</article>
											<hr />
											@endforeach
											<nav class="woocommerce-pagination" style="text-align: center;">
												{{list_blog(null,@$blog_category)->links()}}
											</nav>
											<br />
										@else
											<div class="row">
												<article class="twelve columns">
													<p>Blog tidak ditemukan.</p>
												</article>
											</div>
										@endif
										
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