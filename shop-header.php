<?php

$conn=mysqli_connect("localhost","root","","adminpanel");

?>

<!--== Start Header Area ===-->
<header id="header-area" class="sticky-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-content-wrapper d-flex align-items-center">
             <div class="header-left-area d-flex align-items-center">
                        <!-- Start Logo Area -->
                        <div class="logo-area">
                            <a href="index.php"><img src="assets/img/111%20copy.png" width="200" alt="Logo"/></a>
                        </div>
                    
                    </div>

                    <div class="header-mainmenu-area d-none d-lg-block">
                                     <!-- Start Main Menu -->
                    <nav id="mainmenu-wrap">
    
                    <ul class="nav mainmenu justify-content-center">
    <li class="dropdown-show"><a class="current" href="index.php">Home</a>
  
    </li>
                        
    <li class="dropdown-show"><a  href="Tablet_product.php">Tablet</a>
     
        <ul class="dropdown-nav">
            <li><a href="about.html">Dell</a></li>
            <li><a href="team.html">Hp</a></li>
            <li><a href="portfolio.html">Apple</a></li>
            <li><a href="contact.html">Lenovo</a></li>
          
        </ul>   
    </li>
    <li class="dropdown-show"><a href="laptop-product.php">Laptop</a>
      <ul class="dropdown-nav">
            <li><a href="about.html">Hp</a></li>
            <li><a href="team.html">Dell</a></li>
            <li><a href="portfolio.html">Lenovo</a></li>
            <li><a href="contact.html">Apple</a></li>
            <li><a href="contact.html">Microsoft</a></li>
        </ul>   
    </li>
    <li class="dropdown-show "><a href="mobile-product.php">Mobile</a>
        <ul class="dropdown-nav">
            <li><a href="about.html">Apple</a></li>
            <li><a href="team.html">Samsung</a></li>
            <li><a href="portfolio.html">IPhone</a></li>
            <li><a href="contact.html">Huawei</a></li>
            <li><a href="contact.html">Nokia</a></li>
            <li><a href="contact.html">QMobile</a></li>
        </ul>     
    </li>
    <li class=" mega-fullwidth"><a href="shop.php">shop</a>
       
    </li>
   
    <li><a href="contact.php">Contact</a></li>
</ul>
                    </nav>
                    <!-- End Main Menu -->
                    </div>

                   <div class="header-right-area d-flex justify-content-end align-items-center">
                        <button class="search-icon animate-modal-popup" data-mfp-src="#search-box-popup"><i class="dl-icon-search1"></i></button>
                        <ul class="user-area">
                            <li class="dropdown-show">
                                <button><i class="fa fa-user">
                                    <?php
                       $conn=mysqli_connect("localhost","root","","adminpanel");
            if (isset($_POST['user_login_btn']))
        {
               $user_email = $_POST['user_email'];
                
         $user_password = $_POST['user_password'];
                $query="SELECT * FROM register WHERE email = '$user_email' AND password = '$user_password'";
               $result_query = mysqli_query($conn ,$query);

               $usertypes=mysqli_fetch_array($result_query);

                if($result_query){
                if($usertypes['usertype'] == "user")
                {
                    $_SESSION['username']=$user_email;
                  //header("location:index.php");
                   
                }
               else
               {
                 $_SESSION['status']="Your email/password is wrong";
                    header("location:user_login.php");
            echo '<h1>'."your email/password is wrong".'</h1>';
               }
                echo $_SESSION['username'];      
       }
                
      }
                                   
       ?>
                                    </i></button>
                                <ul class="dropdown-nav">
                                    <li><a href="user_login.php">My Account</a></li>
                                   
                                  
                                    <li><a href="my-account.php">Lost Password</a></li>
                                    <form action="logout.php" method="post">
                                    <button type="submit" name="user_logout_btn"class="btn btn-primary">
                                    Logout
                                    </button>
                                    </form>
                                </ul>
                            </li>
                        </ul>
                        
                        <button class="mini-cart-icon modalActive" data-mfp-src="#miniCart-popup">
                            
                            <i class="fa fa-shopping-cart"></i>
                           
                          
                            
                       
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--== End Header Area ===-->

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
        
      
            <?php
        
              $total=0;  $conn=mysqli_connect("localhost","root","","adminpanel");
                $query="SELECT * FROM add_to_cart";
                $query_run=mysqli_query($conn,$query);
     
        while($results=mysqli_fetch_array($query_run))
        {
           $total= $total + ( $results['product_price'] * $results['product_qty']);
       ?>
    
           <div class="minicart-product-list">
            <!-- Start Single Product -->
            <div class="single-product-item d-flex">
                <figure class="product-thumb">
                    <a href="single-product.html"><img src="admin/<?php echo $results['image'];?>" alt="Product"></a>
                </figure>
                <div class="product-details">
                    <h2 class="product-title"><a href="single-product.html"><?php echo $results['name'];?></a></h2>
                    <div class="prod-cal d-flex align-items-center">
                        <span class="quantity"><?php echo $results['product_qty']?></span>
                        <span class="multiplication">&#215;</span>
                        <span class="price"><?php echo $results['product_price']?></span>
                    </div>
                </div>
                <form action="admin/code.php"method="post">
                     
                
                    <input type="hidden" name="cart_delete_id" value="<?php echo
                    $results['id'];?>">
                    <button type="submit"  name="remove_item" class="remove-icon remove">&#215;</button>
                    </form>
            </div>
            <!-- End Single Product -->
 
        </div>
        <div class="minicart-calculation-wrap d-flex justify-content-between align-items-center">
            <span class="cal-title">Subtotal:</span>
            <span class="cal-amount"><?php echo number_format($total, 2);?></span>
        </div>
        <?php
    }
   
     ?>
        <div class="minicart-btn-group mt-38">
            <a href="cart.php" class="btn btn-black ">View Cart</a>
            <a href="checkout.php" class="btn btn-black mt-10">checkout</a>
        </div>
    </div>
</div>
<!--== End Mini Cart Wrapper ==-->
