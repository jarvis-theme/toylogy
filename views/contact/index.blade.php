@if(Session::has('msg2'))
<div class="success" id='message' style='display:none'>
	Terima kasih, pesan anda sudah terkirim.
</div>
@endif
@if(Session::has('msg3'))
<div class="success" id='message' style='display:none'>
	Maaf, pesan anda belum terkirim.
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
	Terjadi kesalahan dalam menyimpan data.<br><br>
	@foreach($errors->all() as $message)
	-{{ $message }}<br>
	@endforeach
	</ul>
</div>
@endif

<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="span12" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="span12" data-motopress-type="static">
						<section class="title-section">
							<h1 class="title-header">Contact Us</h1>
							<!-- BEGIN BREADCRUMBS-->
							<ul class="breadcrumb breadcrumb__t">
								<li><a href="{{url('/')}}">Home</a></li>
								<li class="divider"></li>
								<li class="active">Contact Us</li>
							</ul>			
							<!-- END BREADCRUMBS -->
						</section><!-- .title-section -->					
					</div>
					<div id="content">
						<div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
								<div id="post-14" class="post-14 page type-page status-publish hentry">
									<div class="row">
										<div class="span4"><h2>Contact info</h2>
											<p>Punya saran dan kritik untuk Toylogy? Atau mencari barang yang tidak ditemukan pada website kami? Silakan hubungi kami melalui alamat email dan social media kami, atau via form contact berikut.</p>
											<address>
												<strong>{{$kontak->nama}}<br></strong>
												Twitter: <a href="{{$kontak->tw}}">{{$kontak->tw}}</a><br>
												Facebook: <a href="{{$kontak->fb}}">{{$kontak->fb}}</a><br>
												E-mail: <a href="mailto:{{$kontak->email}}">{{$kontak->email}}</a>
												<br>
												BBM: {{$kontak->bb}}<p></p>
											</address>
											<!-- address (end) -->
										</div>
										<div class="span8">
											<h2>Contact form</h2>
											<form action="{{url('kontak')}}" method="post" class="wpcf7-form" novalidate="novalidate">
												<div class="row-fluid">
													<p class="span6 field">
														<span class="wpcf7-form-control-wrap your-name">
															<input name="namaKontak" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name:" type="text">
														</span> 
													</p>
													<p class="span6 field">
														<span class="wpcf7-form-control-wrap your-email">
															<input name="emailKontak" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail:" type="email">
														</span> 
													</p>
												</div>
												<p class="field">
													<span class="wpcf7-form-control-wrap your-message">
														<textarea name="messageKontak" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message:"></textarea>
													</span> 
												</p>
												<p class="submit-wrap">
													<input value="clear" class="btn btn-primary" type="reset">
													<input value="send" class="wpcf7-form-control wpcf7-submit btn btn-primary" type="submit"><img style="visibility: hidden;" alt="Sending ..." src="http://toylogy.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" class="ajax-loader">
													<div class="ajax-loader"></div>
												</p>
											</form>
										</div>
									</div>
								</div><!-- .row (end) -->
								<div class="clear"></div>
								<!--.pagination-->
							</div><!--#post-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>