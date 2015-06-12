	<!-- Default css-->
	{{favicon($toko)}}
	{{generate_theme_css('toylogy/assets/css/style.css')}}
	@if($tema->isiCss=='')	
	{{generate_theme_css('toylogy/assets/css/main-style.css')}}
	@else 	
	{{generate_theme_css('toylogy/assets/css/editmain-style.css')}}
	@endif	
	{{generate_theme_css('toylogy/assets/css/bootstrap/css/bootstrap.css')}}
	{{generate_theme_css('toylogy/assets/css/bootstrap/css/responsive.css')}}
	{{generate_theme_css('toylogy/assets/css/camera.css')}}
	{{generate_theme_css('toylogy/assets/css/magnific-popup.css')}}
	{{generate_theme_css('toylogy/assets/css/prettyPhoto.css')}}

<link rel='stylesheet' id='font-awesome-css'  href='http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css?ver=3.2.1' type='text/css' media='all' />
	<!-- {{generate_theme_css('toylogy/assets/css/woocommerce.css')}} -->
	{{generate_theme_css('toylogy/assets/css/woocommerce-layout.css')}}
	{{generate_theme_css('toylogy/assets/css/costum.css')}}
	<link rel='stylesheet' id='options_typography_Abel-css'  href='//fonts.googleapis.com/css?family=Abel&#038;subset=latin' type='text/css' media='all' />