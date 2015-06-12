<div class="motopress-wrapper content-holder clearfix">
    <div class="container">
        <div class="row">
            <div data-motopress-wrapper-type="content">
                <div class="row">
                    <div class="span12" data-motopress-type="static">
                        <section class="title-section">
                            <h1 class="title-header">Testimonial</h1>
                            <!-- BEGIN BREADCRUMBS-->
                            <ul class="breadcrumb breadcrumb__t">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="divider"></li>
                                <li class="active">Testimonial</li>
                            </ul>           
                            <!-- END BREADCRUMBS -->
                        </section><!-- .title-section -->                   
                    </div>
                </div>
                <div>
                    <div class="span8 right right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-testi.php">
                        @foreach(list_testimonial() as $key=>$value)
                        <article id="post-4599" class="testimonial clearfix">
                            <blockquote class="testimonial_bq">
                                <div class="testimonial_content">
                                    <!-- <p><a href="http://toylogy.com/wp-content/uploads/2014/11/Testi-Wina_150x200.jpg"><img src="http://toylogy.com/wp-content/uploads/2014/11/Testi-Wina_150x200.jpg" alt="Testi-Wina_150x200" class="alignnone size-full wp-image-4604" height="200" width="150"></a></p> -->
                                    <p>{{short_description($value->isi)}}  ({{date("d M Y", strtotime($value->updated_at))}})</p>
                                    <div class="clear"></div>
                                    <small>
                                        <span class="user">{{$value->nama}}</span>,                                                    
                                        <!-- <span class="info">Bumi Bekasi Baru, Bekasi</span><br> -->
                                    </small>
                                </div>
                            </blockquote>
                        </article>
                        @endforeach
                        <div class="pagination pagination__posts">
                           {{list_testimonial()->links()}}
                        </div>
                        <!-- Posts navigation -->
                    </div>                   
                </div>
                <div class="span3 sidebar" id="sidebar" data-motopress-type="static-sidebar"  data-motopress-sidebar-file="sidebar.php">
                    <div id="woocommerce_product_search-2" class="visible-all-devices widget"><h3>Send Testimonial</h3>
                        <form role="search" action="{{url('testimoni')}}" method="post">
                            <div>
                                <label class="screen-reader-text" for="s">Name</label>
                                <input type="text" value="" name="nama" id="s" placeholder="Name" />
                                <label class="screen-reader-text" for="s">Testimonial</label>
                                <textarea class="input textarea" id="message" name="testimonial" required></textarea>
                                <input type="submit" id="searchsubmit" value="Send" />
                            </div>
                        </form>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</div>