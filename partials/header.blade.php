<header class="motopress-wrapper header">

    <div class="container">

        <div class="row">

            <div class="span12" data-motopress-wrapper-file="wrapper/wrapper-header.php" data-motopress-wrapper-type="header" data-motopress-id="5566ec6cb55c7">

                <div style="color:#faf38b;">TOYLOGY.COM merupakan portal <a href="http://www.toylogy.com" style="color:#faf38b;">Toko Mainan Online</a></div>

                    <div class="row bot2">

                        <div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-shop-nav.php">

                            <div class="shop-nav">

                                <ul id="shopnav" class="shop-menu">

                                    <li id="menu-item-2588" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2588"><a href="{{URL::to('konfirmasiorder')}}">Confirm Payment</a></li>

                                    <li id="menu-item-2003" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2003"><a href="{{URL::to('checkout')}}">Checkout</a></li>

                                    <li id="menu-item-2002" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2002"><a href="{{url('member')}}">My Account</a></li>

                                    @if(!is_login())

                                    @else

                                    <li id="menu-item-2002" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2002"><a href="{{url('logout')}}">Logout</a></li>

                                    @endif

                                </ul>

                            </div>              

                            <!-- BEGIN SEARCH FORM -->

                                <div class="search-form search-form__h clearfix">

                                    <form role="search" method="post" id="searchform" action="{{url('search')}}">

                                            <input type="text" value="" name="search" id="s" placeholder="Search for products" required/>

                                            <input type="submit" id="searchsubmit" value="Search" />

                                            <input type="hidden" name="post_type" value="product" />

                                    </form>

                                </div>

                            <!-- END SEARCH FORM -->            

                        </div>

                        <div class="clear"></div>

                    </div>

                    <div class="row">

                        <div class="span3" data-motopress-type="static" data-motopress-static-file="static/static-logo.php">

                            <!-- BEGIN LOGO -->

                            <div class="logo pull-left">

                                @if(@getimagesize(url( logo_image_url() )))

                                <a href="{{url('home')}}" class="logo_h logo_h__img">

                                    {{HTML::image(logo_image_url(), Theme::place('title'), array('style'=>'width:250px;height:auto;'))}}

                                </a>

                                @else

                                <a href="{{url('home')}}" class="logo_h logo_h__img">

                                    {{ short_description(Theme::place('title'),30,array('style'=>'margin-top:10px;')) }}

                                </a>

                                @endif

                                <p class="logo_tagline">{{$kontak->judulToko}}</p><!-- Site Tagline -->

                            </div>

                            <!-- END LOGO -->           

                        </div>  

                        <div class="span9" data-motopress-type="static" data-motopress-static-file="static/static-header-widget.php">

                            <div id="text-2" class="visible-all-devices ">          

                                <div class="textwidget">

                                    <!-- <span class="text1">follow us:</span> -->

                                    <span class="text1">

                                        <a href="#" target="_blank"><img style="width: 250px;" src="{{URL::to(dirTemaToko().'toylogy/assets/images/01_pengiriman.png')}}" class="alignnone size-full wp-image-2110" alt="1396234049_facebook_circle_color"></a>

                                        <a href="#" target="_blank"><img style="width: 250px;" src="{{URL::to(dirTemaToko().'toylogy/assets/images/02_tukar.png')}}" class="alignnone size-full wp-image-2110" alt="1396234049_facebook_circle_color"></a>

                                        <a href="#" target="_blank"><img style="width: 250px;" src="{{URL::to(dirTemaToko().'toylogy/assets/images/03_bayar.png')}}" class="alignnone size-full wp-image-2110" alt="1396234049_facebook_circle_color"></a>

                                    </span>

                                </div>

                            </div>                          

                        </div>

                    </div>

                <div class="row">

                    <div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">

                        <!-- BEGIN MAIN NAVIGATION -->

                        <nav class="nav nav__primary clearfix">

                            <ul id="topnav" class="sf-menu">

                                @foreach(main_menu()->link as $key=>$link)

                                    <li><a href="{{menu_url($link)}}">{{$link->nama}}</a></li>

                                @endforeach 

                            </ul>

                        </nav><!-- END MAIN NAVIGATION --> 

                    </div>

                </div>                  

            </div>

        </div>

    </div>

</header>