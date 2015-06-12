<!DOCTYPE html>
<html>
    <!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
    <!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
    <!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
    <!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
    <!--[if gt IE 9]><!--> 
    <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> 
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{{ Theme::place('title') }}</title>

        {{ Theme::partial('seostuff') }}    
        {{ Theme::partial('defaultcss') }}  
        {{ Theme::asset()->styles() }}  
        
    </head>

    <body class="home page page-id-203 page-template page-template-page-home-php has_woocommerce has_shop">
        <div id="motopress-main" class="main-holder">
            {{ Theme::partial('header') }}  
            {{ Theme::place('content') }}   
            {{ Theme::partial('footer') }}  
        </div>

        <div id="back-top-wrapper" class="visible-desktop">
            <p id="back-top">
                <a href="#top"><span></span></a>        
            </p>
        </div>
        {{ Theme::partial('defaultjs') }}   
        {{ Theme::asset()->scripts() }}
        {{ Theme::asset()->container('footer')->scripts() }}
        {{ Theme::partial('analytic') }}    
    </body>
</html>