@if($errors->all())
<div class="alert alert-error">
	Kami menemukan error berikut:			
	<ul>
		@foreach($errors->all() as $message)
		<li style="margin-left: 20px;">{{ $message }}</li>
		@endforeach
	</ul>
</div>
@endif

@if(Session::has('error'))
	<div class="alert alert-error">
		<h3>Kami menemukan error berikut:</h3>
		<p>{{Session::get('error')}}</p>
	</div>
@endif

<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="span12" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="span12" data-motopress-type="static">
						<section class="title-section">
							<h1 class="title-header">My Account</h1>
							<!-- BEGIN BREADCRUMBS-->
							<ul class="breadcrumb breadcrumb__t">
								<li><a href="{{url('/')}}">Home</a></li>
								<li class="divider"></li>
								<li class="active">My Account</li>
							</ul>			
							<!-- END BREADCRUMBS -->
						</section><!-- .title-section -->					
					</div>
				<div>
				
				<div>
					<div class="span9 right right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
						<div id="post-1888" class="post-1888 page type-page status-publish hentry">
							<div class="woocommerce">
								<h2>Register Member</h2>
								<form action="{{url('member')}}" method="post" class="login span5" style="padding: 20px;margin: 2em 0px;text-align: left;border-radius: 5px;border: 1px solid #E0DADF;">

									<p class="form-row form-row-wide">
										<label for="username">Full Name<span class="required">*</span></label>
										<input type="text" class="input-text" value="{{Input::old('nama')}}" name="nama" required />
									</p>
									<p class="form-row form-row-wide">
										<label for="username">Email address <span class="required">*</span></label>
										<input class="input-text" type="email" name="email" required />
									</p>
									<p class="form-row form-row-wide">
										<label for="password">Password <span class="required">*</span></label>
										<input class="input-text" type="password" name="password" required id="password" />
									</p>
									<p class="form-row form-row-wide">
										<label for="password">Confirm Password <span class="required">*</span></label>
										<input class="input-text" type="password" name="password_confirmation" required id="password" />
									</p>
									<p class="form-row form-row-wide">
										<label for="username">Phone <span class="required">*</span></label>
										<input type="text" class="input-text" name='telp' value='{{Input::old("telp")}}' required />
									</p>
									<p class="form-row form-row-wide">
										<label for="username">Country <span class="required">*</span></label>
										{{Form::select('negara',array('' => '-- Pilih Negara --') + $negara,Input::old(''),array('required', 'id="negara" data-rel="chosen" class="form-control"'))}}
									</p>
									<p class="form-row form-row-wide">
										<label for="username">State <span class="required">*</span></label>
										{{Form::select('provinsi',array('' => '-- Pilih Provinsi --'), Input::old("provinsi"),array('required', 'id="provinsi" data-rel="chosen" class="form-control"'))}}
									</p>
									<p class="form-row form-row-wide">
										<label for="username">City <span class="required">*</span></label>
										{{Form::select('kota',array('' => '-- Pilih Kota --'), Input::old("kota"),array('required', 'id="kota" data-rel="chosen" class="form-control"'))}}
									</p>
									<p class="form-row form-row-wide">
										<label for="username">Address <span class="required">*</span></label>
										<textarea type="text" class="input-text" name="email" id="username" />{{Input::old("alamat")}}</textarea>
									</p>
									<p class="form-row form-row-wide">
										<label for="username">Post Code </label>
										<input type="text" class="input-text" name="kodepos" value='{{Input::old("kodepos")}}' />
									</p>
									<p class="form-row form-row-wide">
										<label for="username">Captcha <span class="required">*</span></label>
										{{ HTML::image(Captcha::img(), 'Captcha image') }}
										{{Form::text('captcha','', array('class'=>'text input'))}}
									</p>
									<p class="form-row form-row-wide">
										<label for="username">Captcha <span class="required">*</span></label>
										<input name="readme" id="check1" value="1" type="checkbox" />
					    				I have read and agree to </label><a href="{{url('service')}}" target="_blank">Privacy & Terms</a>
									</p>
					  
									<p class="form-row">			
										<input type="submit" class="button" name="login" value="Register" /> 
									</p>

								</form>
								<div class="login span3" style="padding: 20px;margin: 2em 10px;text-align: left;border-radius: 5px;border: 1px solid #E0DADF;">

									<p class="form-row form-row-wide">
										By login you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.
										<p class="form-row">			
											<a class="medium metro rounded btn primary" href="{{url('member')}}">Login</a>
										</p>
									</p>

								</div>
							</div>
							<div class="clear"></div>
							<!--.pagination-->
						</div><!--#post-->
					</div>
					<div class="span3 sidebar" id="sidebar" data-motopress-type="static-sidebar"  data-motopress-sidebar-file="sidebar.php">
						<div id="woocommerce_product_search-2" class="visible-all-devices widget"><h3>Search Products</h3>
							<form role="search" method="post" id="searchform" action="{{url('search')}}">
								<div>
									<label class="screen-reader-text" for="s">Search for:</label>
									<input type="text" value="" name="search" id="s" placeholder="Search for products" />
									<input type="submit" id="searchsubmit" value="Search" />
								</div>
							</form>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>