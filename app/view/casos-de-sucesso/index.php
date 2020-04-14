<?php 
    include '../header.php';
    require_once '../../controller/controller_casos.php';
    
?>

<style>
    .col-center {
	margin: 0 auto;
	float: none !important;
}
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel .item {
	color: #999;
	font-size: 14px;
    text-align: center;
	overflow: hidden;
    min-height: 290px;
}
.carousel .item .img-box {
	width: 135px;
	height: 135px;
	margin: 0 auto;
	padding: 5px;
	border: 1px solid #ddd;
	border-radius: 50%;
}
.carousel .img-box img {
	width: 100%;
	height: 100%;
	display: block;
	border-radius: 50%;
}
.carousel .testimonial {
	padding: 30px 0 10px;
}
.carousel .overview {	
	font-style: italic;
}
.carousel .overview b {
	text-transform: uppercase;
	color: #7AA641;
}
.carousel .carousel-control {
	width: 40px;
    height: 40px;
    margin-top: -20px;
    top: 50%;
	background: none;
}
.carousel-control i {
    font-size: 68px;
	line-height: 42px;
    position: absolute;
    display: inline-block;
	color: rgba(0, 0, 0, 0.8);
    text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
}
.carousel .carousel-indicators {
	bottom: -40px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 1px 3px;
	border-radius: 50%;
}
.carousel-indicators li {	
	background: #999;
	border-color: transparent;
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
.carousel-indicators li.active {	
	background: #555;		
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        document.title= "Casos de Sucesso - Inner Champ";
    });
</script>

<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg);background-color:#31708f;">
    <div class="banner-text">
       <div class="container">
          <div class="row">
             <div class="col-xs-12">
                <div class="banner-heading">
                   <h1 class="banner-title">Casos de Sucesso</h1>
                </div>
             </div><!-- Col end -->
          </div><!-- Row end -->
       </div><!-- Container end -->
    </div><!-- Banner text end -->
</div>

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-center m-auto">
                <h2>Testimonials</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>   
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="img-box"><img src="/examples/images/clients/1.jpg" alt=""></div>
                            <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                            <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="/examples/images/clients/2.jpg" alt=""></div>
                            <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                            <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="/examples/images/clients/3.jpg" alt=""></div>
                            <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                            <p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
	</div>
        
        <div class="row">
            <div class="col-sm-4">
                <div class="thumb-wrapper">
                    <div class="img-box">
                        <img src="/examples/images/cities/kuala-lumpur.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                        <h4>Kuala Lumpur</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam.</p>
                        <a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
                    </div>						
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="thumb-wrapper">
                    <div class="img-box">
                        <img src="/examples/images/cities/agra.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                        <h4>Agra</h4>
                        <p>Vivamus fermentum in arcu in aliquam. Quisque aliqua porta odio in fringilla vivamus.</p>
                        <a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
                    </div>						
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="thumb-wrapper">
                    <div class="img-box">
                        <img src="/examples/images/cities/dubai.png" class="img-responsive img-fluid" alt="">
                    </div>
                    <div class="thumb-content">
                        <h4>Dubai</h4>
                        <p>Convallis eget pretium eu, bibendum non leo. Proin susc ipit purus adipiscing dolor.</p>
                        <a href="#" class="btn btn-primary">More <i class="fa fa-angle-right"></i></a>
                    </div>						
                </div>					
            </div>
        </div>
    </div>
</section>


<?php include '../footer.php';