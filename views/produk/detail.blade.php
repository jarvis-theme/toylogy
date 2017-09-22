<div class="motopress-wrapper content-holder clearfix woocommerce">

	<div class="container">

		<div class="row">

			<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">

				<section class="title-section">

					<h1 class="title-header"> {{$produk->nama}}	</h1>

					<!-- BEGIN BREADCRUMBS-->

					<ul class="breadcrumb breadcrumb__t">

						<a class="home" href="{{url('/')}}">Home</a> / 

						<a href="{{url('produk')}}">Produk</a> /

						{{$produk->nama}}

					</ul>			

					<!-- END BREADCRUMBS -->

				</section>

				<!-- .title-section -->

			</div>

		</div>

		<div class="row">

			<div class="span9 right" id="content">

				<div itemscope itemtype="http://schema.org/Product" id="product-6435" class="post-6435 product type-product status-publish has-post-thumbnail featured sold-individually shipping-taxable purchasable instock">

					<div class="images">

						@if($produk->gambar1 != '')

							<a href="{{product_image_url($produk->gambar1,'large')}}" itemprop="image" class="woocommerce-main-image zoom" title="24a_1000_white_wm_" data-rel="prettyPhoto[product-gallery]"><img width="300" height="300" src="{{product_image_url($produk->gambar1,'large')}}" class="attachment-shop_single wp-post-image" alt="{{$produk->des}}" title="{{$produk->nama}}" /></a>

						@endif

						<div class="thumbnails">

							@if($produk->gambar2 != '')

							<a href="{{product_image_url($produk->gambar2,'large')}}" class="zoom first" title="{{$produk->nama}}" data-rel="prettyPhoto[product-gallery]"><img width="90" height="90" src="{{product_image_url($produk->gambar2,'thumb')}}" class="attachment-shop_thumbnail" alt="{{$produk->des}}" /></a>

							@endif

							@if($produk->gambar3 != '')

							<a href="{{product_image_url($produk->gambar3,'large')}}" class="zoom first" title="{{$produk->nama}}" data-rel="prettyPhoto[product-gallery]"><img width="90" height="90" src="{{product_image_url($produk->gambar3,'thumb')}}" class="attachment-shop_thumbnail" alt="{{$produk->des}}" /></a>

							@endif

							@if($produk->gambar4 != '')

							<a href="{{product_image_url($produk->gambar4,'large')}}" class="zoom first" title="{{$produk->nama}}" data-rel="prettyPhoto[product-gallery]"><img width="90" height="90" src="{{product_image_url($produk->gambar4,'thumb')}}" class="attachment-shop_thumbnail" alt="{{$produk->des}}" /></a>

							@endif

						</div>

					</div>

					<div class="summary entry-summary">

						<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

							<p class="price"><span class="amount">{{price($produk->hargaJual)}}</span></p>

						</div>

						<div itemprop="description">

							<p><strong>** {{$produk->vendor}} **</strong></p>

						</div>

						<p>{{$produk->deskripsi}}</p><br>

						@if($produk->stok>0)

						<p class="stock ">In stock</p>

						@else

						<p class="stock ">Out stock</p>

						@endif

						<form class="cart" action="#" id="addorder">

							@if($opsiproduk->count() > 0)

								<select class="orderby">

							        <option>-- Pilih Opsi --</option>

							        @foreach ($opsiproduk as $key => $opsi)

                                    <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >

                                        {{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{jadiRupiah($opsi->harga)}}

                                    </option>

                                    @endforeach

							    </select><br>

							@endif

							<input class="span1" type="number" step="1" min="1" placeholder="1" name="qty" value="1" pattern="[0-9]" /><br>

							<button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>

						</form>

						<div class="product_meta">

							<span class="sku_wrapper">SKU: <span class="sku" itemprop="sku">{{$produk->barcode}}</span>.</span>

							<span class="tagged_as">Tags: {{getTagsProduk('<a></a>',$produk->tags,',',false)}}.</span>

						</div>

						<!-- .share-buttons -->

						<!-- Facebook Like Button -->

						<ul class="share-buttons unstyled clearfix">

							{{sosialShare(product_url($produk))}}

						</ul><!-- //.share-buttons -->

					</div><!-- .summary -->



					<div class="woocommerce-tabs">

					<ul class="tabs">



							<li class="reviews_tab">

								<a href="#tab-reviews">Reviews</a>

							</li>



					</ul>



					<div class="panel entry-content" id="tab-reviews">

						<div id="reviews">

							<div id="comments">

								<h2>Reviews</h2>

								{{pluginTrustklik()}}

							</div>

		

							<div id="review_form_wrapper">

								<div id="review_form"></div>

							</div>

							<div class="clear"></div>

						</div>			

					</div>

				</div>



				<div class="related products">

					<h2>Related Products</h2>

					<ul class="products">		

						@foreach(other_product($produk) as $other)

						<li class="post-6340 product type-product status-publish has-post-thumbnail first shipping-taxable purchasable product-type-simple product-cat-3-5-years product-cat-6-9-years product-cat-9-14-years product-cat-arts-crafts product-cat-boys-toys product-cat-building-set-blocks product-cat-new product-tag-block product-tag-blocks product-tag-blok product-tag-bongkar-pasang product-tag-brick product-tag-bricks product-tag-car product-tag-kendaraan-besar product-tag-merakit product-tag-otomotif product-tag-pertukangan product-tag-tool product-tag-toy instock">

							<a href="{{url($produk->other)}}">

								<h3>{{short_description($other->nama)}}</h3>

								<img width="222" height="222" src="{{product_image_url($other->gambar1)}}" class="attachment-shop_catalog wp-post-image" alt="toylogy toko mainan anak online intellectual metal toy car mobil" />

								<span class="price"><span class="amount">{{price($other->hargaJual)}}</span></span>

							</a>

							<div class='button-wrap'><a href="/product/dora-drum-set/?add-to-cart=6340" rel="nofollow" data-product_id="6340" data-product_sku="" class="button add_to_cart_button product_type_simple">Add to cart</a></div>

						</li>

						@endforeach

					</ul>

				</div>



				<meta itemprop="url" content="http://toylogy.com/product/dora-drum-set/" />



			</div><!-- #product-6435 -->	

		</div>

		<div class="sidebar span3" id="sidebar" data-motopress-type="static-sidebar"  data-motopress-sidebar-file="sidebar.php">

			<div id="woocommerce_product_search-2" class="visible-all-devices widget">

				<h3>Search Products</h3>

				<form role="search" method="get" id="searchform" action="http://toylogy.com/">

					<div>

						<label class="screen-reader-text" for="s">Search for:</label>

						<input type="text" value="" name="s" id="s" placeholder="Search for products" />

						<input type="submit" id="searchsubmit" value="Search" />

						<input type="hidden" name="post_type" value="product" />

					</div>

				</form>

			</div>

		</div>

	</div>

</div>