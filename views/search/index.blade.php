<div class="motopress-wrapper content-holder clearfix woocommerce">

	<div class="container">

		<div class="row">

			<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">

				<section class="title-section">

					<h1 class="title-header">Result</h1>

					<!-- BEGIN BREADCRUMBS-->

					<ul class="breadcrumb breadcrumb__t"><a class="home" href="http://toylogy.com">Home</a> Result		

					<!-- END BREADCRUMBS -->

				</section>

				<!-- .title-section -->

			</div>

		</div>

		

		<div class="row">

			<div class="span9 right" id="content">

				<!-- <h1 class="page-title">Avengers</h1> -->

				<!-- <p class="woocommerce-result-count">Showing 1–6 of 9 results</p> -->

				@if($jumlahCari != 0)
	
				<ul class="products">

					@foreach($hasilpro as $key=> $products)
					<li class="post-6326 product type-product status-publish has-post-thumbnail {{$key==0 ? 'first':''}} sold-individually shipping-taxable purchasable instock">

						<a href="{{product_url($products)}}">

							<h3>{{short_description($products->nama)}}</h3>

							@if(is_outstok($products))



	                        @elseif(is_terlaris($products))



	                        @elseif(is_produkbaru($products))



	                        @endif

							<img width="222" height="222" src="{{url(product_image_url($products->gambar1,'medium'))}}" class="attachment-shop_catalog wp-post-image" alt="toylogy toko mainan anak online block super heroes captain america avengers" />

							<span class="price"><span class="amount">{{price($products->hargaJual)}}</span></span>

						</a>

						<div class='button-wrap'><a href="/product-category/avengers-2/?add-to-cart=6326" rel="nofollow" data-product_id="6326" data-product_sku="" class="button add_to_cart_button product_type_simple">Add to cart</a></div>

					</li>

					@endforeach

				</ul>

				

				<nav class="woocommerce-pagination" style="text-align: center;">

					{{$hasilpro->links()}}

				</nav>
				@else
					<h1 class="" style="text-align: center;">Hasil pencarian tidak ditemukan, silahkan coba lagi</h1>
		        @endif

			</div>

			<div class="sidebar span3" id="sidebar" data-motopress-type="static-sidebar"  data-motopress-sidebar-file="sidebar.php">

				<div id="woocommerce_product_search-2" class="visible-all-devices widget">

					<h3>Search Products</h3>

					<form role="search" method="get" id="searchform" action="http://toylogy.com/">

						<div>

							<label class="screen-reader-text" for="s">Search for:</label>

							<input type="text" value="" name="s" id="s" placeholder="Search for products" required />

							<input type="submit" id="searchsubmit" value="Search" />

							<input type="hidden" name="post_type" value="product" />

						</div>

					</form>

				</div>

				<div class="cat-block">

					<h3>Categories</h3>

					<ul class='advanced_categories cols_1'>

						@foreach(category_menu() as $key=> $menu)
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

			</div>

		</div>

	</div>

</div>