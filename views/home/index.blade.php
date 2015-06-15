<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="span12" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
						<div id="post-203" class="post-203 page type-page status-publish hentry">
							<div class="banner-box">
							 @foreach(vertical_banner() as $key=>$banner)
							    @if($key==0)
								<a href="{{$banner->url}}" title="Big Sale<br>sudah berakhir" class="banner-wrap banner1">
									<div class="corner">
										<div class="bot6"><h5>Big Sale<br />sudah berakhir</h5>
											<figure class="featured-thumbnail" style="text-align: center;">
												<span><img src="{{banner_image_url($banner->gambar)}}" title="Big Sale<br>sudah berakhir" alt="" style="width: 293px;"></span>
											</figure>
											<p><span class="text3">Terima kasih<br />atas partisipasinya</span>
											</p><strong class="bot3"></strong><span class="bot4"></span>
										</div>
									</div>
									<span class="link-align banner-btn"><span title="click here" class="btn btn-link" target="_self">click here<span class="bot5"></span></span></span>
								</a>
                                @elseif($key==1)
								<!-- .banner-wrap (end) -->
								<a href="{{$banner->url}}" title="Ada ratusan produk lucu" class="banner-wrap banner2">
									<div class="corner">
										<div class="bot6">
											<h5>Ada ratusan produk lucu</h5>
											<figure class="featured-thumbnail" style="text-align: center;">
												<span><img src="{{banner_image_url($banner->gambar)}}" title="Ada ratusan produk lucu" alt="" style="width: 293px;" /></span>
											</figure>
											<p><span class="text3">di kategori<br />Boneka</span></p><strong class="bot3"></strong><span class="bot4"></span>
											</div>
										</div>
										<span class="link-align banner-btn">
											<span title="click here" class="btn btn-link" target="_self">click here<span class="bot5"></span></span>
									</span>
								</a>
								@elseif($key==2)
								<!-- .banner-wrap (end) -->
								<a href="{{$banner->url}}" title="Beragam mainan Block" class="banner-wrap banner3">
									<div class="corner">
										<div class="bot6">
											<h5>Beragam mainan Block</h5>
											<figure class="featured-thumbnail" style="text-align: center;">
												<span><img src="{{banner_image_url($banner->gambar)}}" title="Beragam mainan Block" alt="" style="width: 293px;" /></span>
											</figure>
											<p><span class="text3">mulai dari<br /> 18ribu-an</span></p>
											<strong class="bot3"></strong>
											<span class="bot4"></span>
										</div>
									</div>
									<span class="link-align banner-btn">
										<span title="click here" class="btn btn-link" target="_self">click here<span class="bot5"></span></span>
									</span>
								</a>
								@elseif($key==3)
								<!-- .banner-wrap (end) -->
								<a href="{{$banner->url}}" title="yes, we're <br />turning one!" class="banner-wrap banner4">
									<div class="corner">
										<div class="bot6"><h5>yes, we're <br />turning one!</h5>
											<figure class="featured-thumbnail" style="text-align: center;">
												<span><img src="{{banner_image_url($banner->gambar)}}" title="yes, we're <br />turning one!" alt="" style="width: 293px;" /></span>
											</figure>
											<p><span class="text3">and still happily serving you</span></p>
											<strong class="bot3"></strong><span class="bot4"></span>
										</div>
									</div>
									<span class="link-align banner-btn">
										<span title="click here" class="btn btn-link" target="_self">click here<span class="bot5"></span></span>
									</span>
								</a>
								@endif
								@endforeach
								<!-- .banner-wrap (end) -->
								<a href="{{URL::to('/')}}" title="" class="banner-wrap banner5">
									<div class="corner">
										<div class="bot6">
											<figure class="featured-thumbnail"><span>
											    @foreach(horizontal_banner() as $key=>$banner)
												<img src="{{banner_image_url($banner->gambar)}}" style="width: 99.4%;height: 150px;" title="" alt="" style="width: 293px;" /></span>
											    @endforeach
											</figure>
											<p>
												<span class="text4">Melayani pengiriman ke seluruh Indonesia</span> 
												<span class="text5">melalui TIKI JNE & POS Indonesia*</span>
											</p>
											<strong class="bot3"></strong><span class="bot4"></span>
										</div>
									</div>
								</a>
								<!-- .banner-wrap (end) -->
							</div>
							<div class="featured-box">
								<a href="{{URL::to('/')}}" title="" class="banner-wrap banner6">
									<div class="corner">
										<div class="bot6">
											<p>
												<span class="text6">support chat</span> 
												<span class="text7">BBM: 7DDF1BEB WA/SMS:<br />0888-860-4878</span>
											</p>
											<strong class="bot3"></strong><span class="bot4"></span>
										</div>
									</div>
								</a>
								<!-- .banner-wrap (start) -->
								@foreach(list_koleksi() as $key => $koleksi)
								@if($key<6)
								<a href="{{koleksi_url($koleksi)}}" title="" class="banner-wrap banner{{$key+7}}">
									<div class="corner">
										<div class="bot6">
											<p><span class="text8">{{$koleksi->nama}}</span></p>
											<strong class="bot3"></strong><span class="bot4"></span>
										</div>
									</div>
								</a>
								@endif
								@endforeach
								<!-- .banner-wrap (end) -->

							</div>
							<div class="clear"></div>
							<div class="cat-block">
								<h2>categories:</h2>
								<ul class='advanced_categories cols_1'>
									@foreach(category_menu() as $key=>$menu)
									@if($key!='10')
									<li class='advanced_categories_item last'>
										<div class='advanced_categories_item_inner'>
											<h4><a href="{{category_url($menu)}}">{{$menu->nama}}</a></h4>
										</div>
									</li>
									@endif
									@endforeach
									@foreach(list_koleksi() as $koleksi)
									<li class='advanced_categories_item last'>
										<div class='advanced_categories_item_inner'>
											<h4><a href="{{koleksi_url($koleksi)}}">{{$koleksi->nama}}</a></h4>
										</div>
									</li>
									@endforeach
								</ul>
							</div>
							<div class="home-featured">
								<h2>featured products:</h2>
								<div class="woocommerce columns-3">
									<ul class="products">
											@foreach(home_product() as $key=>$products)
											<li class="post-6435 product type-product status-publish has-post-thumbnail {{$key==0 ? 'class="active"':''}} featured sold-individually shipping-taxable purchasable instock">

							
												<a href="{{product_url($products)}}">

													
													<h3>{{$products->nama}}</h3>

													<img width="222" height="222" src="{{url(product_image_url($products->gambar1))}}" class="attachment-shop_catalog wp-post-image" alt="toylogy toko mainan anak online dora drum set" />

												<span class="price"><span class="amount">{{price($products->hargaJual)}}</span></span>

												</a>

												<div class='button-wrap'><a href="{{product_url($products)}}" rel="nofollow" data-product_id="6435" data-product_sku="NB-00108" class="button add_to_cart_button product_type_simple">View</a></div>
											</li>
											@endforeach
										
									</ul>
								</div>
							</div>
							<div class="clear"></div>
							<!--.pagination-->
						</div><!--#post-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>