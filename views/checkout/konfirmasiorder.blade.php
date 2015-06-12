@if(Session::has('success'))
<div class="success" id='message' style='display:none'>
	<p>Terima kasih, konfirmasi anda sudah terkirim.</p>					
</div>		
@endif

<div class="motopress-wrapper content-holder clearfix">
    <div class="container">
        <div class="row">
            <div class="span12" data-motopress-wrapper-type="content">
                <div class="row">
                    <div class="span12" data-motopress-type="static">
                        <section class="title-section">
                            <h1 class="title-header">Search Order</h1>
                            <!-- BEGIN BREADCRUMBS-->
                            <ul class="breadcrumb breadcrumb__t">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="divider"></li>
                                <li><a href="{{url('member')}}">Member</a></li>
                                <li class="divider"></li>
                                <li class="active">Order</li>
                            </ul>           
                            <!-- END BREADCRUMBS -->
                        </section><!-- .title-section -->                   
                    </div>
                <div>
                
                <div>
                    <div class="span9 right right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
                        <div id="post-1888" class="post-1888 page type-page status-publish hentry">
                            <div class="woocommerce">
                                <h2>Konfirmasi Order</h2>
                                <div class="login" style="padding: 20px;margin: 2em 0px;text-align: left;border-radius: 5px;border: 1px solid #E0DADF;">
									<div class="featured-box" style="background:none;">
										<a class="banner-wrap" style="margin-right: 15px;"><br>
											<strong style="">ID Order</strong>
											<br>
											@if($checkouttype==1)
												{{prefixOrder().$order->kodeOrder}}
											@else
												{{prefixOrder().$order->kodePreorder}}
											@endif
										</a>
										<a class="banner-wrap" style="margin-right: 15px;"><br>
											<strong>Tanggal Order</strong>
											<p>
											@if($checkouttype==1)
												{{waktu($order->tanggalOrder)}}
											@else
												{{waktu($order->tanggalPreorder)}}
											@endif
											</p>
										</a>
										<a class="banner-wrap" style="margin-right: 15px;"><br>
											<strong>Detail Order</strong>
											<ul>
											@if ($checkouttype==1)
												@foreach ($order->detailorder as $detail)
												<li li style="margin-left: 8px">{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':''}} - {{$detail->qty}}</li>
												@endforeach
											@else
												<li li style="margin-left: 8px">{{$order->preorderdata->produk->nama}} ({{$order->opsiSkuId==0 ? 'No Opsi' : $order->opsisku->opsi1.($order->opsisku->opsi2!='' ? ' / '.$order->opsisku->opsi2:'').($order->opsisku->opsi3!='' ? ' / '.$order->opsisku->opsi3:'')}})
												 - {{$order->jumlah}}</li>
											@endif
											</ul>
										</a>
										<a class="banner-wrap" style="margin-right: 15px;"><br>
											<strong>Jumlah</strong><br>
											@if($checkouttype==1)
												{{jadiRupiah($order->total)}}
											@else 
												@if($order->status < 2)
													{{jadiRupiah($order->total)}}
												@elseif(($order->status > 1 && $order->status < 4) || $order->status==7)
													{{jadiRupiah($order->total - $order->dp)}}
												@else
													0
												@endif
											@endif
										</a>
										<a class="banner-wrap" style="margin-right: 15px;"><br>
											<strong>Belum dibayar</strong><br>
											{{($order->status==2 || $order->status==3) ? jadiRupiah(0) : ' - '.jadiRupiah($order->total)}}
										</a>
										<a class="banner-wrap" style="margin-right: 15px;"><br>
											<strong>No. Resi</strong><br>
											{{ $order->noResi}}
										</a>
										<a class="banner-wrap" style="margin-right: 15px;"><br>
											<strong>Status</strong><br>
											@if($checkouttype==1)
												@if($order->status==0)
													<strong class="label label-warning">Pending</strong>
												@elseif($order->status==1)
													<strong class="label label-important">Konfirmasi diterima</strong>
												@elseif($order->status==2)
													<strong class="label label-info">Pembayaran diterima</strong>
												@elseif($order->status==3)
													<strong class="label label-info">Terkirim</strong>
												@elseif($order->status==4)
													<strong class="label label-info">Batal</strong>
												@endif
											@else 
												@if($order->status==0)
													<strong class="label label-warning">Pending</strong>
												@elseif($order->status==1)
													<strong class="label label-important">Konfirmasi DP diterima</strong>
												@elseif($order->status==2)
													<strong class="label label-info">DP terbayar</strong>
												@elseif($order->status==3)
													<strong class="label label-info">Menunggu pelunasan</strong>
												@elseif($order->status==4)
													<strong class="label label-info">Pembayaran lunas</strong>
												@elseif($order->status==5)
													<strong class="label label-info">Terkirim</strong>
												@elseif($order->status==6)
													<strong class="label label-info">Batal</strong>
												@elseif($order->status==7)
													<strong class="label label-info">Konfirmasi Pelunasan diterima</strong>
												@endif
											@endif	
										</a>
									</div>

                                </div>
                            </div>
                             <div class="woocommerce">
								@if($order->jenisPembayaran==1)
                                	<form action="{{url('konfirmasiorder/'.$order->id)}}" method="put" class="login" style="padding: 20px;margin: 2em 0px;text-align: left;border-radius: 5px;border: 1px solid #E0DADF;">
	                                	<h3><center>Konfirmasi Pembayaran</center></h3>
	                                    <p class="form-row form-row-wide">
											<label  class="mheight"> Nama Pengirim:</label>
											<input type="text" class="input-text" id="search" placeholder="Nama Pengirim" name='nama' required>
										</p>
										<p class="form-row form-row-wide">
											<label  class="mheight"> No Rekening:</label>
											<input type="text" class="input-text" id="search" placeholder="No Rekening" name='noRekPengirim' required>
										</p>
										<p class="form-row form-row-wide">
											<label  class="mheight"> Rekening Tujuan:</label>
											<select name='bank' class="opsi">
												<option value=''>-- Pilih Bank Tujuan --</option>
												@foreach ($banktrans as $bank)
												<option value="{{$bank->id}}">{{$bank->bankdefault->nama}} - {{$bank->noRekening}} - A/n {{$bank->atasNama}}</option>
												@endforeach
											</select>
										</p>
										<p class="form-row form-row-wide">
											<label  class="mheight"> Jumlah:</label>
											@if($checkouttype==1)        
											<input type="text" class="input-text" id="search" placeholder="jumlah yg terbayar" name='jumlah' value='{{$order->total}}' required>
											@else
												@if($order->status < 2)
										  		<input class="text input" id="search" placeholder="jumlah yg terbayar" type="text" name='jumlah' value='{{$order->dp}}' required>
												@elseif(($order->status > 1 && $order->status < 4) || $order->status==7)
												<input class="text input" id="search" placeholder="jumlah yg terbayar" type="text" name='jumlah' value='{{$order->total - $order->dp}}' required>
												@endif
											@endif
										</p>
								
	                                    <p class="form-row">            
	                                        <input type="submit" class="button" name="login" value="Konfirmasi Pembayaran" /> 
	                                    </p>

									{{Form::close()}}
								</div>
								@endif
							</div>
							@if($paymentinfo!=null)
							<div class="login" style="padding: 20px;margin: 2em 0px;text-align: left;border-radius: 5px;border: 1px solid #E0DADF;">
							<h3><center>Paypal Payment Details</center></h3><br>
								<hr>
								<div class="table-responsive">
								  <table class='table table-bordered'>
									  <tr>
										  <td>Payment Status</td><td>:</td><td>{{$paymentinfo['payment_status']}}</td>
									  </tr>
									  <tr>
										  <td>Payment Date</td><td>:</td><td>{{$paymentinfo['payment_date']}}</td>
									  </tr>
									  <tr>
										  <td>Address Name</td><td>:</td><td>{{$paymentinfo['address_name']}}</td>
									  </tr>
									  <tr>
										  <td>Payer Email</td><td>:</td><td>{{$paymentinfo['payer_email']}}</td>
									  </tr>
									  <tr>
										  <td>Item Name</td><td>:</td><td>{{$paymentinfo['item_name1']}}</td>
									  </tr>
									  <tr>
										  <td>Receiver Email</td><td>:</td><td>{{$paymentinfo['receiver_email']}}</td>
									  </tr>
									  <tr>
										  <td>Total Payment</td><td>:</td><td>{{$paymentinfo['payment_gross']}} {{$paymentinfo['mc_currency']}}</td>
									  </tr>
								  </table>
								</div>
							  <p>Thanks you for your order.</p>
							  <br>
							</div>
							@endif 
						  
							@if($order->jenisPembayaran==2)
							<div class="login" style="padding: 20px;margin: 2em 0px;text-align: left;border-radius: 5px;border: 1px solid #E0DADF;">
							  <h3><center>Konfirmasi Pembayaran Via Paypal</center></h3><br>
							  <p>Silakan melakukan pembayaran dengan paypal Anda secara online via paypal payment gateway. Transaksi ini berlaku jika pembayaran dilakukan sebelum {{$expired}}. Klik tombol "Bayar Dengan Paypal" di bawah untuk melanjutkan proses pembayaran.</p>
							  {{$paypalbutton}}
							  <br>
                            </div>
							@endif
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