
<div class="container">
                <!-- Start Shop Page Product Area -->
                <div class="shop-page-products-wrapper mt-44 mt-sm-30">
                    <div class="products-wrapper products-on-column">
                        <div class="row">
                                                   <?php
                $conn=mysqli_connect("localhost","root","","adminpanel");
                $query="SELECT * FROM product";
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
                                        <a href="" class="d-block">
                                                <img class="primary-thumb" src="admin/<?php echo $row['product_image'];?>"
                                                 alt="Product"/>
                                            <img class="secondary-thumb" src="admin/<?php echo $row['product_image'];?>"
                                                 alt="Product"/>
                                        </a>
                                        <figcaption class="product-hvr-content">
                                            <a href="single-product.php?id=<?php echo $row['id'];?>" class="btn btn-black btn-addToCart">See Detail</a>
                                       
                                        </figcaption>
                                         
                                    </figure>
                                       </div>
                                    <!-- Product Details -->
                                    <div class="product-details">
                                        <h2 class="product-name"><a href="single-product.html"><?php echo $row['product_name'];?></a></h2>
                                        <div class="product-prices">
                                            <del class="oldPrice"><?php echo $row['product_price'];?> </del>
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
                <!-- End Shop Page Product Area -->
</div>
                <!-- Page Pagination Start  -->
                <div class="page-pagination-wrapper mt-70 mt-md-50 mt-sm-40">
                    <nav class="page-pagination">
                        <ul class="pagination justify-content-center">
                            <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Page Pagination End  -->