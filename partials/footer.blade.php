<footer class="motopress-wrapper footer">
    <div class="container">
        <div class="row">
            <div class="span12" data-motopress-wrapper-file="wrapper/wrapper-footer.php" data-motopress-wrapper-type="footer" data-motopress-id="5566ec6d247f9">
                <div class="row footer-widgets">
                    <div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-3">
                        @if(@getimagesize(url( logo_image_url() )))
                        <a href="{{url('home')}}" class="logo_h logo_h__img">
                            {{HTML::image(logo_image_url(), Theme::place('title'), array('style'=>'width:250px;height:auto;'))}}
                        </a>
                        @else
                        <a href="{{url('home')}}" class="logo_h logo_h__img">
                            {{ short_description(Theme::place('title'),30,array('style'=>'margin-top:10px;')) }}
                            <img src="http://toylogy.com/shop/wp-content/uploads/2014/04/logo-small-tagline_-copy_w3001.png" alt="Toylogy" title="Play. Learn. Grow | Toko Mainan Online | Toko Boneka Online">
                        </a>
                        @endif
                    </div>
                    @foreach($tautan as $key=>$group)
                    @if($key>0)
                    <div class="span2" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-{{$key+1}}">
                        <strong style="font-size: 16px;">{{$group->nama}}</strong><br><br>
                        <div id="nav_menu-2">
                            <div class="menu-menu1-container">
                                <ul id="menu-menu1" class="menu">
                                    @foreach($quickLink as $link)
                                        @if($group->id == $link->tautanId)
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                            @if($link->halaman=='1')
                                                @if($link->linkTo == 'halaman/about-us')
                                                <a href="{{url(strtolower($link->linkTo))}}">{{$link->nama}}</a>
                                                @else
                                                <a href='{{url("halaman/".strtolower($link->linkTo))}}'>{{$link->nama}}</a>
                                                @endif
                                            @elseif($link->halaman=='2')
                                                <a href='{{url("blog/".strtolower($link->linkTo))}}'>{{$link->nama}}</a>
                                            @elseif($link->url=='1')
                                                <a href="http://{{strtolower($link->linkTo)}}">{{$link->nama}}</a>
                                            @else
                                                <a href='{{url(strtolower($link->linkTo))}}'>{{$link->nama}}</a>
                                            @endif
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>   
                    </div>
                    <!-- <div class="span2" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-0"></div> -->
                    @endif
                    @endforeach
                    <div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-4" id="mc_embed_signup">
                        <div style="margin-top: -28px;" >
                        <img style="width:auto;height:100px;margin-bottom:-30px" src="http://toylogy.jstore.co/themes/8913-tema/toylogy/assets/images/ogy-ngintip.png" alt="toylogy">
                        <div style="float: right; text-align: right;" class="textwidget">
                            <span style="color: rgb(155, 150, 144); text-transform: uppercase; font-size: 18px; font-family: "Patrick Hand SC",cursive;" class="text1">follow us:</span><br>
                            <span class="text1">
                                <a href="{{$kontak->fb}}" target="_blank"><img class="alignnone size-full wp-image-2110" alt="1396234049_facebook_circle_color" src="{{URL::to(dirTemaToko().'toylogy/assets/images/icons/fb_cr.png')}}" height="34" width="34"></a>
                                <a href="{{$kontak->tw}}" target="_blank"><img class="alignnone size-full wp-image-2109" alt="1396234060_twitter_circle_color" src="{{URL::to(dirTemaToko().'toylogy/assets/images/icons/tw_cr.png')}}" height="34" width="34"></a>
                                <a href="{{$kontak->ig}}" target="_blank"><img class="alignnone size-full wp-image-2110" alt="instagram_circle_color" src="{{URL::to(dirTemaToko().'toylogy/assets/images/icons/ig_cr.png')}}" height="34" width="34"></a>
                                <a href="{{$kontak->pt}}" target="_blank"><img class="alignnone size-full wp-image-2110" alt="picmix" src="{{URL::to(dirTemaToko().'toylogy/assets/images/icons/px_cr.png')}}" height="30" width="30"></a></span>
                        </div>
                        <form name="mc-embedded-subscribe-form" target="_blank" style="background: rgb(203, 104, 42) none repeat scroll 0% 0%; text-align: center;" role="search" method="post" id="searchform mc-embedded-subscribe-form" action="{{@$mailing->action}}">
                                <p style="color: rgb(255, 255, 255); text-align: initial; margin: 18px;"><br><strong style="font-size: 16px;">Newsletter</strong>
                                <pstyle="text-align: left; margin: 12px; color: rgb(255, 255, 255);">Daftar sekarang untuk mendapatkan infomasi produk terkini, promosi, dan tawaran menarik lainnya.</p></p>
                                <input style="width: 150px;" name="EMAIL" id="newsletter mce-EMAIL" placeholder="Masukan Email Kamu" type="email">
                                <input style="margin-top: -10px;" {{ @$mailing->action==''?'disabled="disabled"':'' }} id="searchsubmit" value="Subscribe" type="submit">
                                <br>
                        </form>    
                    </div>  
                    </div>
                </div>
                <div class="row copyright">
                    <div class="span8" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
                        <div id="footer-text" class="footer-text">
                            © {{date('Y')}} {{ Theme::place('title') }} | <a href="{{url('/')}}">Toko Mainan Online</a> | boneka | mainan kayu | mainan edukatif | mainan bayi               <!-- {%FOOTER_LINK} -->
                        </div>  
                    </div>
                    <div class="span4" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php"></div>
                </div>                  
            </div>
        </div>
    </div>
</footer>