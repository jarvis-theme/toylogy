@if(Session::has('error'))
<div class="error" id='message' style='display:none'>							
	{{Session::get('error')}}
</div>
@endif
@if(Session::has('success'))
<div class="success" id='message' style='display:none'>
	<p>Selamat, anda sudah berhasil register. Silakan check email untuk mengetahui informasi akun anda.</p>
</div>
@endif
@if(Session::has('errorrecovery'))
<div class="error" id='message' style='display:none'>
	<p>Maaf, email anda tidak ditemukan.</p>					
</div>
@endif	

@if(Session::has('error'))
<div class="alert alert-error" style='display:none'>
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
								<h2>Login</h2>
								<form method="post" action="{{url('member/login')}}" class="login span4" style="padding: 20px;margin: 2em 0px;text-align: left;border-radius: 5px;border: 1px solid #E0DADF;">

									<p class="form-row form-row-wide">
										<label for="username">Email address <span class="required">*</span></label>
										<input type="text" class="input-text" name="email" id="username" />
									</p>
									<p class="form-row form-row-wide">
										<label for="password">Password <span class="required">*</span></label>
										<input class="input-text" type="password" name="password" id="password" />
									</p>

									<p class="form-row">			
										<input type="submit" class="button" name="login" value="Login" /> 
										<a href="{{url('member/forget-password')}}">Lost your password?</a>
									</p>

								</form>
								<div class="login span4" style="padding: 20px;margin: 2em 10px;text-align: left;border-radius: 5px;border: 1px solid #E0DADF;">

									<p class="form-row form-row-wide">
										By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.
										<p class="form-row">			
											<a class="medium metro rounded btn primary" href="{{url('member/create')}}">Register</a>
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