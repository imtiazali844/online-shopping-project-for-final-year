<?php
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/veera-preview/veera/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 09:10:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>T-shopping</title>

        <!--=== Favicon ===-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/>

    <!--== Google Fonts ==-->
    <link href="../../../fonts.googleapis.com/cssc343.css?family=Poppins:300,300i,400,400i,500,600,700,800" rel="stylesheet">
    <link href="../../../fonts.googleapis.com/css056a.css?family=Playfair+Display" rel="stylesheet">


    <!--=== Revolution Slider CSS ===-->
    <link href="assets/css/revslider/settings.css" rel="stylesheet">

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
    <!--=== Font-Awesome CSS ===-->
    <link href="assets/css/vendor/font-awesome.css" rel="stylesheet">
    <!--=== Dl Icon CSS ===-->
    <link href="assets/css/vendor/dl-icon.css" rel="stylesheet">
    <!--=== Plugins CSS ===-->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <!--=== Helper CSS ===-->
    <link href="assets/css/helper.min.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="assets/css/style.min.css" rel="stylesheet">
    
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

    
<body class="preloader-active">
    <?php 
    include('index_of_header.php');
    ?>
    
<!-- Start Page Header Wrapper -->
<div class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="page-header-content">
                    <h2>Checkout</h2>
                    <nav class="page-breadcrumb">
                        <ul class="d-flex justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="shop.html" class="active">Checkout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header Wrapper -->

<!--== Start Checkout Page Wrapper ==-->
<div id="checkout-page-wrapper" class="pt-90 pt-md-60 pt-sm-50 pb-50 pb-md-20 pb-sm-10">
    <div class="container">
        

        <div class="row">
            <div class="col-lg-6">
                <!-- Checkout Form Area Start -->
                <div class="checkout-billing-details-wrap">
                    <h2>Billing Details</h2>
                    <div class="billing-form-wrap">
                        <?php
                        
                        if(isset($_POST['place_order']))
                        {
 echo '<script language="javascript">';
echo 'alert("You have successfully submited your order")';
echo '</script>';
                        }
                        
                        ?>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single-input-item">
                                        <label for="f_name" class="required"> Name</label>
                                        <input type="text" name="customer_name" placeholder="Name" required />
                                    </div>
                                </div>

                                
                            </div>

                            <div class="single-input-item">
                                <label for="email" class="required">Email Address</label>
                                <input type="email" name="customer_email" placeholder="Email Address" required />
                            </div>

                           

                            <div class="single-input-item">
                                <label for="country" class="required">Country</label>
                                <select name="country" id="country">
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="India">India</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="England">England</option>
                                    <option value="London">London</option>
                                    <option value="London">London</option>
                                    <option value="Chaina">China</option>
                                </select>
                            </div>

                            <div class="single-input-item">
                                <label for="street-address" class="required"> Address</label>
                                <input type="text" name="customer_address" placeholder="Street address Line 1" required />
                            </div>



                            

                            <div class="single-input-item">
                                <label for="postcode" class="required">Postcode / ZIP</label>
                                <input type="text" name="postcode"  placeholder="Postcode / ZIP" required />
                            </div>

                            <div class="order-details-footer">
                        <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our
                            <a href="#" class="text-danger">privacy policy</a>.</p>
                        <div class="custom-control custom-checkbox mt-10">
                            <input type="checkbox" id="privacy" class="custom-control-input" required />
                            <label for="privacy" class="custom-control-label">I have read and agree to the website terms and conditions</label>
                        </div>

                        <button name="place_order"class="btn btn-full btn-black mt-26">Place Order</button>
                    </div>



                            
                        </form>
                    </div>
                </div>
            </div>
                  
            <div class="col-lg-6 col-xl-5 ml-auto">
                <!-- Checkout Page Order Details -->
                <div class="order-details-area-wrap">
                    <h2>Your Order</h2>

                    <div class="order-details-table table-responsive">
                 
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Products</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                            <?php
                
               $total=0;
                $totals=0;
                $Addqty=0;
        $conn=mysqli_connect("localhost","root","","adminpanel");
                $query="SELECT * FROM add_to_cart";
                $query_run=mysqli_query($conn,$query);
                
                while($result=mysqli_fetch_array($query_run))
                {
                    $total= $total + ( $result['product_price'] * $result['product_qty']);
                    
                    $totals= ( $result['product_price'] * $result['product_qty']);
                    
                    $Addqty=  ( + $result['product_qty']);
                    ?>
                                <tr class="cart-item">
                                    <td><span class="product-title"><?php echo $result['name'];?></span> <span class="product-quantity">&#215;  <?php echo number_format($Addqty, 0);?></span></td>
                                    <td><?php echo number_format($totals, 2);?></td>
                                </tr>
                                  <?php
                }
                    ?>
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td><?php echo number_format($total, 2);?></td>
                                </tr>
                                <tr class="shipping">
                                    <th>Shipping</th>
                                    <td>
                                        <ul class="shipping-method">
                                           
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="free_shipping" name="shipping_method" class="custom-control-input" checked/>
                                                    <label class="custom-control-label" for="free_shipping">Free Shipping</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="cod_shipping" name="shipping_method" class="custom-control-input" />
                                                    <label class="custom-control-label" for="cod_shipping">Cash on Delivery</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="final-total">
                                    <th>Total</th>
                                    <td><span class="total-amount"><?php echo number_format($total, 2);?></span></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                   
                </div>
            </div>
            
          
        </div>
    </div>
</div>
<!--== End Checkout Page Wrapper ==-->

<?php
    
    include("footer-area.php");
    
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

<!-- Mirrored from demo.hasthemes.com/veera-preview/veera/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2019 09:10:41 GMT -->
</html>