<?php
session_start();
 include("structure-start-of-index.php");
include("index_of_header.php");


?>


<!-- Start Page Header Wrapper -->
<div class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="page-header-content">
                    <h2>Shopping Cart</h2>
                    <nav class="page-breadcrumb">
                        <ul class="d-flex justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="shop.html" class="active">Cart</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header Wrapper -->

<!--== Start Cart Page Wrapper ==-->
<div id="cart-page-wrapper" class="pt-86 pt-md-56 pt-sm-46 pb-50 pb-md-20 pb-sm-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping-cart-list-area">
                    <div class="shopping-cart-table table-responsive">
                     
                        
                        
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>SUBTotal</th>
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
                    $_SESSION['TOTAL']=number_format($total, 2);
                    $totals= ( $result['product_price'] * $result['product_qty']);
                    $_SESSION['image']=$result['image'];
                    $_SESSION['name']=$result['name'];
                    $_SESSION['product_qty']=$result['product_qty'];
                    $_SESSION['product_price']=$result['product_price'];
                    $_SESSION['Add_amount'] =number_format($totals, 2);
   
                    
                    
                    
                    $Addqty=  ( + $result['product_qty']);
                    $_SESSION['Add_qty']=number_format($Addqty, 1);
                                ?>
                                <tr>
                                    <td class="product-list">
                                        <div class="cart-product-item d-flex align-items-center">
                                            
                                            <a href="#" class="product-thumb">
                                                <img src="admin/<?php echo $_SESSION['image'];?>" alt="Product"/>
                                            </a>
                                            <a href="#" class="product-name"><?php echo $_SESSION['name'];?></a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price"><?php echo $_SESSION['product_price'];?></span>
                                    </td>
                                    <td>
                                        <div >
                                           <?php echo $_SESSION['Add_qty']; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price"><?php echo $_SESSION['Add_amount']; ?></span>
                                    </td>
                                </tr>
                            <?php
                }
                                ?>

                            </tbody>
                        </table>
                    </div>

                    
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Cart Calculate Area -->
                <div class="cart-calculate-area mt-sm-30 mt-md-30">
                    <h5 class="cal-title">Cart Totals</h5>

                    <div class="cart-cal-table table-responsive">
                        <table class="table table-borderless">
                            <tr class="cart-sub-total">
                                <th>Subtotal</th>
                                <td><?php echo $_SESSION['TOTAL'];?></td>
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
                            <tr class="order-total">
                                <th>Total</th>
                                <td><b><?php echo number_format($total, 2);?></b></td>
                            </tr>
                        </table>
                    </div>

                    <div class="proceed-checkout-btn">
                        <a href="checkout.php" class="btn btn-full btn-black">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Cart Page Wrapper ==-->



<?php
 include("footer-area.php");
    include("structure-end-of-index.php");
?>