<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="span12" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="span12" data-motopress-type="static">
						<section class="title-section">
							<h1 class="title-header">{{$data->judul}}</h1>
							<!-- BEGIN BREADCRUMBS-->
							<ul class="breadcrumb breadcrumb__t">
								<li><a href="{{url('/')}}">Home</a></li>
								<li class="divider"></li>
								<li class="active">{{$data->judul}}</li>
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
										{{$data->up}}
										{{$data->isi}}
									</div>
									<div class="span4"></div>
								</div><!-- .row (end) -->
								<div class="clear"></div>
								<!--.pagination-->
							</div><!--#post-->
					</div>
				</div>
				<div class="clear"></div>
				<br><br>
			</div>
		</div>
	</div>
</div>