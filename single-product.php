<?php
session_start();
include("structure-start-of-index.php");
$pid=$_GET['id'];
include("index_of_header.php");
$conn=mysqli_connect("localhost","root","","adminpanel");
   $query="SELECT * FROM product WHERE id='$pid'"; $query_run=mysqli_query($conn,$query);
$row=mysqli_fetch_array($query_run);

 
function cart()
{
   global $query;
    global $query_run;
    global $row;
    if(isset($_POST['add']))
       { $item_qty=$_POST['num_of_pro'];
           global $conn;
                $pid=  $_GET['id'];
                $productname=$row['product_name']; $productprice=$row['product_price'];
        
        /*$productqty=$row['product_qty'];*/
           
        
            $productimage=$row['product_image'];
           $check_pro="SELECT * FROM add_to_cart WHERE id='$pid'";
           $run_check=mysqli_query($conn,$check_pro);
           if(mysqli_num_rows($run_check)>0)
           {
               echo "";
           }
           else
           {  global $conn;
            $pid=$_GET['id'];
               $q="INSERT INTO add_to_cart(id,name,product_price,product_qty,image)VALUES('$pid','$productname','$productprice','$item_qty','$productimage')";
               $run_q=mysqli_query($conn,$q);
           }
          
    }
}
 cart();   



// Retreving Comments
if(isset($_POST['submit']))
{
    $name=$_POST['comment_name'];
    $email=$_POST['comment_email'];
    $comment=$_POST['comment'];
  $query= "INSERT INTO comments_tbl(product_id,name,email,comments_text)
        VALUES('$pid','$name','$email','$comment')";
  $query_run=mysqli_query($conn,$query);
            if($query_run)
            {
              // echo "comment is inserted";                     
            }
                                
        else
        {
          // echo "comment is not inserted"; 
        }
}


?>
 
<!-- Start Page Header Wrapper -->
<div class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="page-header-content">
                    <h2>Single Product</h2>
                    <nav class="page-breadcrumb">
                        <ul class="d-flex justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="shop.html" class="active">Single Product</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header Wrapper -->

<!--== Start Single Product Page Wrapper ==-->
<div id="single-product-page" class="pt-90 pt-md-60 pt-sm-50 pb-92 pb-md-58 pb-sm-50">
    <div class="container-fluid">
        <div class="row">
                                  <?php
            
                $conn=mysqli_connect("localhost","root","","adminpanel");
                $query="SELECT * FROM product WHERE id='$pid'";
                $query_run=mysqli_query($conn,$query);
                
                 while($row=mysqli_fetch_array($query_run)) 
                 {
                     ?>
           
            <!-- Start Single Product Thumbnail -->
            <div class="col-xl-7 col-lg-6">
                <div class="single-product-thumb-wrap p-0 pb-sm-30 pb-md-30">
                    <!-- Product Thumbnail Large View -->
                    <div class="product-thumb-large-view">
                        <div class="product-thumb-carousel">
                            <figure class="product-thumb-item">
                                <img src="admin/<?php echo $row['product_image'];?>"
                                alt="Single Product"/>
                            </figure>
                            
                        </div>

                        <!-- Product Thumb Button  -->
                        <div class="product-thumb-btns">
                            <button class="btn-zoom-popup"><i class="dl-icon-zoom-in"></i></button>
                            
                        </div>
                    </div>

                    <!-- Product Thumbnail Nav -->
                  
                </div>
            </div>
            <!-- End Single Product Thumbnail -->

            <!-- Start Single Product Content -->
            <div class="col-xl-5 col-lg-6">
                <div class="single-product-content-wrapper">
                                
              
                    <div class="single-product-details">
                        <h2 class="product-name"><?php echo $row['product_name'];?></h2>
                        <div class="prices-stock-status d-flex align-items-center justify-content-between">
                            <div class="prices-group">
                                <del class="old-price"><?php echo $row['product_price'];?></del>
                                <span class="price"><?php echo $row['product_price'];?></span>
                            </div>
                            
                        </div>
                      
                        <div class="product-description-review">
                        <!-- Product Description Tab Menu -->
                        <ul class="nav nav-tabs desc-review-tab-menu" id="desc-review-tab" role="tablist">
                            <li>
                                <a class="active" id="desc-tab" data-toggle="tab" href="#descriptionContent" role="tab">Description</a>
                            </li>
                            <li>
                                <a id="profile-tab" data-toggle="tab" href="#reviewContent">Review</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            
             
                            
                            <div class="tab-pane fade show active" id="descriptionContent">
                                <div class="description-content">
                                    <p class="m-0"><?php echo $row['product_desc'];?></p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="reviewContent">
                                <div class="product-ratting-wrap">
                                  
                                    <div class="rattings-wrapper">
                                        <div class="sin-rattings">
                 <?php
                $conn=mysqli_connect("localhost","root","","adminpanel");
                $query="SELECT * FROM comments_tbl WHERE  product_id='$pid'";
                $query_run=mysqli_query($conn,$query);
                
                 while($row=mysqli_fetch_array($query_run)) 
                 {
                     ?>
                        <div class="ratting-author">
                        <h3><?php echo $row['name'];?></h3>
                                             
                        </div>
                        <p><?php echo $row['comments_text'];?></p>
                <?php
                     
                 }
                ?>
                                        </div>


                                    </div>
                                    <div class="ratting-form-wrapper">
                                        <h3>Add your Reviews</h3>
                                       <form action="" method="post">
                                            <div class="ratting-form row">
                                            
                                                <div class="col-md-6 col-12 mb-10">
                                        <label for="name">Name:</label>
                                        <input name="comment_name"id="name" placeholder="Name" type="text"required>
                                                </div>
                                                <div class="col-md-6 col-12 mb-10">
                                        <label for="email">Email:</label>
                                        <input name="comment_email"id="email" placeholder="Email" type="text" required>
                                                </div>
                                                <div class="col-12">
                                        <label for="your-review">Your Review:</label>
                                        <textarea name="comment" id="your-review" placeholder="Write a review" required></textarea>
                                                </div>
                                                
                                                
                  
                                                <div class="col-12 mt-22">
                                                     <button type="submit" name="submit" value="submit now" class="btn btn-primary btn-user btn-block">
                                                    submit</button>
                                                </div>
                 
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                        <div class="quantity-btn-group d-flex">
                                   <?php
                     if(isset($_SESSION['username']))
                     {
                     ?>
                            <form action="" method="post">
                            <div class="pro-qty">
                                <input type="text" name="num_of_pro"id="quantity" value="1"/>
                            </div>
                   
                            <div class="list-btn-group">
                            <input type="submit"name="add" class="btn btn-black btn-addToCart" value="Add to Cart" >
                            </div>
                            </form>
                             <?php
                     }
                         ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Product Content -->
            <?php
                 }
                     ?>
        </div>
    </div>
</div>
<!--== End Single Product Page Wrapper ==-->

<!--== Start Related Products Area ==-->
<section id="related-products-wrapper" class="pb-48 pb-md-18 pb-sm-8">
    <div class="container-fluid">
        <div class="row">
            <!-- Start Section title -->
            <div class="col-lg-8 m-auto text-center">
                <div class="section-title-wrap">
                    <h2>Related Products</h2>
                </div>
            </div>
            <!-- End Section title -->
        </div>

        <div class="row products-on-column">
             <?php
               
                $conn=mysqli_connect("localhost","root","","adminpanel");
                $query="SELECT * FROM product WHERE product_category='Laptop'";
                $query_run=mysqli_query($conn,$query);
                
                 while($row=mysqli_fetch_array($query_run))
                    {
                    
                     ?>
            <!-- Start Single Product -->
            <div class="col-sm-6 col-lg-3">
                <div class="single-product-wrap">
                   <div style="border:1px solid black">
                    <!-- Product Thumbnail -->
                    <figure class="product-thumbnail">
                        <a href="#" class="d-block">
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
                            <del class="oldPrice"><?php echo $row['product_price'];?></del>
                            <span class="price"><?php echo $row['product_price'];?></span>
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
</section>
<!--== End Related Products Area ==-->

<?php
 include("footer-area.php");
    include("structure-end-of-index.php");
   

?>
 