<?php 
session_start();
include("structure-start-of-index.php");
    include("index_of_header.php");  

?>
<!-- Start of Mobiles Products Area -->
<section id="mobile-products-area" class="pt-60 pt-md-60 pt-sm-50">
    <div class="container">
        <div class="row">
            <!-- Start Section title -->
            <div class="col-lg-8 m-auto text-center">
                <div class="section-title-wrap">
                    <h2>Mobiles</h2>
                    <p class="mt-12">Show latest products</p>
                </div>
            </div>
            <!-- End Section title -->
        </div>

        <div class="container">
                <div class="shop-page-products-wrapper mt-44 mt-sm-30">
                    <div class="products-wrapper products-on-column">
                        <div class="row">
                            
                                         <?php
                $conn=mysqli_connect("localhost","root","","adminpanel");
                $query="SELECT * FROM product WHERE product_category='mobile'";
                $query_run=mysqli_query($conn,$query);
                
                  while($row=mysqli_fetch_array($query_run))
                    {
                     ?>
                            <!-- Start Single Product -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-product-wrap">
                                    <div style="border:1px solid black">
                                    <!-- Product Thumbnail -->
                                    <figure class="product-thumbnail">
                                        <a href="single-product.html" class="d-block">
                                      <img class="primary-thumb" src="admin/<?php echo $row['product_image'];?>"
                                                 alt="Product"/>
                                            <img class="secondary-thumb" src="admin/<?php echo $row['product_image'];?>"
                                                 alt="Product"/>
                                        </a>
                                        <figcaption class="product-hvr-content">
                                            <a href="single-product.php?id=<?php echo $row['id'];?>" class="btn btn-black btn-addToCart">See Detail</a>
                                            <div class="prod-btn-group">
                                           
                                            </div>
                                            
                                        </figcaption>
                                    </figure>
                                        </div>
                                    <!-- Product Details -->
                                    <div class="product-details">
                                        <h2 class="product-name"><a href="single-product.html"><?php echo $row['product_name'];?></a></h2>
                                        <div class="product-prices">
                                            <del class="oldPrice"><?php echo $row['product_price'];?></del>
                                            <span class="price"><?php echo $row['product_price'];?></span>
                                        </div>
                                        <div class="list-view-content">
                                            <p class="product-desc">Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco ommodo consequat. Duis aute irure dolor in reprehenderit dolore
                                                eu fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Accusantium commodi consectetur dignissimos, eveniet maiores nesciunt
                                                quisquam quos soluta!</p>

                                            <div class="list-btn-group mt-30 mt-sm-14">
                                                <a href="cart.html" class="btn btn-black">Add to Cart</a>
                                                <a href="wishlist.html" data-toggle="tooltip" data-placement="top"
                                                   title="Add to wishlist"><i class="dl-icon-heart2"></i></a>
                                                <a href="compare.html" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Compare"><i class="dl-icon-compare2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                <?php
                    }
                ?>

                        </div>
                    </div>
                </div>
        </div> 

        </div>
</section>
    
    <!--End of Mobiles products area->
<?php
     include("footer-area.php");
    include("structure-end-of-index.php");
    
    ?>
]