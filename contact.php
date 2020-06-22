<?php
session_start();
$conn=mysqli_connect("localhost","root","","adminpanel");
                      
                        if(isset($_POST['send_message']))
{
    $first_name = $_POST['first_name'];
    $email_address = $_POST['email_address'];
    $phone_no = $_POST['phone_no'];
    $message = $_POST['con_message'];
    
                            
                            
                            
    $query="INSERT INTO contact_us(name,email_address,phone_no,message) VALUES('$first_name','$email_address','$phone_no','$message')";
    $query_run=mysqli_query($conn,$query);

    
    if($query_run)
{
   
    //$_SESSION['success']="User Profile Added";
    header('location:index.php');
    
}
else 
{
 // $_SESSION['status']="User Profile Not Added";
    header('location:contact.php');
   // echo "record is not inserted in database";
}
}


                    

include("structure-start-of-index.php");
include("index_of_header.php");
?>

<!-- Start Page Header Wrapper -->
<div class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="page-header-content">
                    <h2>Contact Us</h2>
                    <nav class="page-breadcrumb">
                        <ul class="d-flex justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop.html" class="active">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header Wrapper -->

<!--== Start Contact Page Wrapper ==-->
<div id="contact-page-wrapper" class="pt-90 pt-md-60 pt-sm-50 pb-50 pb-md-20 pb-sm-10">
    <div class="contact-page-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="contact-page-form-wrap contact-method">
                        <h3>Get in touch</h3>

  
                        
                        <div class="contact-form-wrap">
                            <form action="" method="post" >
                                <div class="single-input-item">
                                    <input type="text" name="first_name" placeholder="Your Name *" required />
                                </div>

                                <div class="single-input-item">
                                    <input type="email" name="email_address" placeholder="Email address *" required />
                                </div>

                                <div class="single-input-item">
                                    <input type="text" name="phone_no" placeholder="Your Phone *" required />
                                </div>

                                <div class="single-input-item">
                                    <textarea name="con_message" id="con_message" cols="30" rows="7" placeholder="Message *" required></textarea>
                                </div>

                                 <button type="submit" name="send_message" class="btn btn-primary">send_message
        </button>

                                
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 mt-sm-50">
                    <div class="contact-info-wrapper contact-method">
                        <h3>Contact Info</h3>

                        <div class="contact-info-content">
                            <div class="single-contact-info">
                                <h4>Postal Address</h4>
                                <p> Post Center University Town, Peshawar, <br>North-West Frontier is located in Pakistan.</p>
                            </div>

                            <div class="single-contact-info">
                                <h4>T-shopping HQ</h4>
                                <p>Post Center University Town, Peshawar, <br>North-West Frontier is located in Pakistan.</p>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-contact-info">
                                        <h4>Business Phone</h4>
                                        <p>+61 3 8376 6284</p>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="single-contact-info mb-0">
                                        <h4>Say Hello</h4>
                                        <p>your@example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page-map-area mt-90 mt-md-60 mt-sm-50">
        <div class="map-area-wrapper">
            <div id="map_content" data-lat="33.763491" data-lng="72.431167" data-zoom="6" data-maptitle="T-shopping" data-mapaddress="Floor# 4, House# 5, Block# C </br> Shaheen Town, peshawar">
            </div>
        </div>
    </div>
</div>
<!--== End Contact Page Wrapper ==-->
<?php
include("shop-footer.php");
?>
<!--== Start Search box Wrapper ==-->
<div class="modalSearchBox" id="search-box-popup">
    <div class="modaloverlay"></div>
    <div class="search-box-wrapper">
        <p>Start typing and press Enter to search</p>
        <div class="search-box-form">
            <form action="#" method="POST" class="search-form-area">
                <input type="search"  name="search" id="search" placeholder="Search entire store" />
                <button type="submit" class="btn-search"><i class="dl-icon-search10"></i></button>
            </form>
        </div>
    </div>
</div>
<!--== End Search box Wrapper ==-->

<!--== Start Mini Cart Wrapper ==-->
<div class="mfp-hide modal-minicart" id="miniCart-popup">
    <div class="minicart-content-wrap">
        <h2>Shopping Cart</h2>
        <div class="minicart-product-list">
            <!-- Start Single Product -->
            <div class="single-product-item d-flex">
                <figure class="product-thumb">
                    <a href="single-product.html"><img src="assets/img/products/prod-1-1.jpg" alt="Product"></a>
                </figure>
                <div class="product-details">
                    <h2 class="product-title"><a href="single-product.html">Stripe textured dress</a></h2>
                    <div class="prod-cal d-flex align-items-center">
                        <span class="quantity">1</span>
                        <span class="multiplication">&#215;</span>
                        <span class="price">$99.99</span>
                    </div>
                </div>
                <a href="#" class="remove-icon">&#215;</a>
            </div>
            <!-- End Single Product -->

            <!-- Start Single Product -->
            <div class="single-product-item d-flex">
                <figure class="product-thumb">
                    <a href="single-product.html"><img src="assets/img/products/prod-2-1.jpg" alt="Product"></a>
                </figure>
                <div class="product-details">
                    <h2 class="product-title"><a href="single-product.html">Tassels embroidered dress</a></h2>
                    <div class="prod-cal d-flex align-items-center">
                        <span class="quantity">2</span>
                        <span class="multiplication">&#215;</span>
                        <span class="price">$39.29</span>
                    </div>
                </div>
                <a href="#" class="remove-icon">&#215;</a>
            </div>
            <!-- End Single Product -->

            <!-- Start Single Product -->
            <div class="single-product-item d-flex">
                <figure class="product-thumb">
                    <a href="single-product.html"><img src="assets/img/products/prod-3-1.jpg" alt="Product"></a>
                </figure>
                <div class="product-details">
                    <h2 class="product-title"><a href="single-product.html">Open-knit sweater</a></h2>
                    <div class="prod-cal d-flex align-items-center">
                        <span class="quantity">1</span>
                        <span class="multiplication">&#215;</span>
                        <span class="price">33.29</span>
                    </div>
                </div>
                <a href="#" class="remove-icon">&#215;</a>
            </div>
            <!-- End Single Product -->

            <!-- Start Single Product -->
            <div class="single-product-item d-flex">
                <figure class="product-thumb">
                    <a href="single-product.html"><img src="assets/img/products/prod-4-1.jpg" alt="Product"></a>
                </figure>
                <div class="product-details">
                    <h2 class="product-title"><a href="single-product.html">Open-knit sweater</a></h2>
                    <div class="prod-cal d-flex align-items-center">
                        <span class="quantity">1</span>
                        <span class="multiplication">&#215;</span>
                        <span class="price">33.29</span>
                    </div>
                </div>
                <a href="#" class="remove-icon">&#215;</a>
            </div>
            <!-- End Single Product -->
        </div>
        <div class="minicart-calculation-wrap d-flex justify-content-between align-items-center">
            <span class="cal-title">Subtotal:</span>
            <span class="cal-amount">£119.97</span>
        </div>
        <div class="minicart-btn-group mt-38">
            <a href="cart.html" class="btn btn-black ">View Cart</a>
            <a href="checkout.html" class="btn btn-black mt-10">checkout</a>
        </div>
    </div>
</div>
<!--== End Mini Cart Wrapper ==-->

<!--== Start Left Offside Menu Wrapper ==-->
<div class="mfp-hide modalLeftOffside" id="left-offside-popup">
    <div class="leftoffside-content-wrap">
        <nav class="offside-menu">
            <ul class="left-offsidemenu">
                <li><a href="#">About Veera Shop</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">New Look</a></li>
            </ul>
        </nav>
        <div class="offside-text">
            <a href="#"><img src="assets/img/payments.png" alt="Payment Method"></a>
            <p>Pellentesque mollis nec orci id tincidunt. Sed mollis risus eu nisi aliquet, sit amet fermentum justo
                dapibus.</p>
            <a href="#">(+612) 2531 5600</a>
            <a href="#">info@la-studioweb.com</a>
            <p>PO Box 1622 Colins Street West</p>

            <div class="offset-menu-footer">
                <a href="#" target="_blank"><u>Google Maps</u></a>
                <div class="social-icons nav">
                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                </div>
                <p class="copyright">&copy; 2018 Veera All rights reserved.</p>
            </div>
        </div>
    </div>
</div>
<!--== End Left Offside Wrapper ==-->

<!--== Start Quick View Modal Wrapper ==-->
<div class="modal" id="quickViewModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="dl-icon-close"></i></span>
            </button>
            <div class="modal-body">
                <div class="row">
                    <!-- Start Single Product Thumbnail -->
                    <div class="col-lg-5 col-md-6">
                        <div class="single-product-thumb-wrap p-0 pb-sm-30 pb-md-30">
                            <!-- Product Thumbnail Large View -->
                            <div class="quciview-product-thumb-carousel">
                                <figure class="product-thumb-item">
                                    <img src="assets/img/products/prod-1-1.jpg" alt="Single Product"/>
                                </figure>
                                <figure class="product-thumb-item">
                                    <img src="assets/img/products/prod-1-2.jpg" alt="Single Product"/>
                                </figure>
                                <figure class="product-thumb-item">
                                    <img src="assets/img/products/prod-2-1.jpg" alt="Single Product"/>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product Thumbnail -->

                    <!-- Start Single Product Content -->
                    <div class="col-lg-7 col-md-6 m-auto">
                        <div class="single-product-content-wrapper">
                            <div class="single-product-details">
                                <h2 class="product-name">Open-knit sweater</h2>
                                <div class="prices-stock-status d-flex align-items-center justify-content-between">
                                    <div class="prices-group">
                                        <del class="old-price">$50.00</del>
                                        <span class="price">$40.00</span>
                                    </div>
                                    <span class="stock-status"><i class="dl-icon-check-circle1"></i> In  Stock</span>
                                </div>
                                <p class="product-desc">Ut enim added minim veniam, quis nostrud exercitation ullamco
                                    ommodo
                                    consequat. Duis aute irure dolor in reprehenderit dolore eu fugiat nulla pariatur.
                                    Excepteur
                                    sint occaecat cupidatat non proident. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing
                                    elit. Ab dolorem eum labore minima possimus quaerat quod recusandae repellat sequi
                                    ut.</p>

                                <div class="quantity-btn-group d-flex">
                                    <div class="pro-qty">
                                        <input type="text" id="quantity" value="1"/>
                                    </div>
                                    <div class="list-btn-group">
                                        <a href="cart.html" class="btn btn-black">Add to Cart</a>
                                        <a href="wishlist.html" data-toggle="tooltip" data-placement="top"
                                           title="Add to wishlist"><i class="dl-icon-heart2"></i></a>
                                        <a href="compare.html" data-toggle="tooltip" data-placement="top"
                                           title="Add to Compare"><i class="dl-icon-compare2"></i></a>
                                    </div>
                                </div>

                                <div class="find-store-delivery">
                                    <a href="#"><i class="fa fa-map-marker"></i> Find store near you</a>
                                    <a href="#"><i class="fa fa-exchange"></i> Delivery and return</a>
                                </div>
                            </div>

                            <div class="single-product-footer mt-20 pt-20">
                                <div class="prod-footer-right">
                                    <dl class="social-share">
                                        <dt>Share with</dt>
                                        <dd><a href="#"><i class="fa fa-facebook"></i></a></dd>
                                        <dd><a href="#"><i class="fa fa-twitter"></i></a></dd>
                                        <dd><a href="#"><i class="fa fa-pinterest-p"></i></a></dd>
                                        <dd><a href="#"><i class="fa fa-google-plus"></i></a></dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product Content -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Quick View Modal Wrapper ==-->


<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="assets/js/vendor/jquery-migrate-1.4.1.min.js"></script>
<!--=== Popper Min Js ===-->
<script src="assets/js/vendor/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="assets/js/vendor/bootstrap.min.js"></script>
<!--=== Plugins Js ===-->
<script src="assets/js/plugins.js"></script>
<!--=== Ajax Mail Js ===-->
<script src="assets/js/ajax-mail.js"></script>

<!--=== Active Js ===-->
<script src="assets/js/active.min.js"></script>

<!--=== Revolution Slider Js ===-->
<script src="assets/js/revslider/jquery.themepunch.tools.min.js"></script>
<script src="assets/js/revslider/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="assets/js/revslider/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/js/revslider/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/js/revslider/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/js/revslider/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/js/revslider/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/js/revslider/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/js/revslider/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/js/revslider/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/js/revslider/extensions/revolution.extension.video.min.js"></script>


<script src="assets/js/revslider/revslider-active.js"></script>
</body>

<!-- Mirrored from demo.hasthemes.com/veera-preview/veera/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 09:10:37 GMT -->
</html>