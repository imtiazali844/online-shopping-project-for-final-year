<?php
session_start();

include("include/header.php");


?>

<div class="container-fluid">
    
<!--data table example-->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Admin Profile
    </h6>
    </div>
    <div clas="card-body">
<?php
        $conn=mysqli_connect("localhost","root","","adminpanel");
if(isset($_POST['edit_product_btn']))
{
    $id= $_POST['edit_id'];
    $query="SELECT * FROM product WHERE id='$id' ";
    $query_run=mysqli_query($conn,$query);
          


 foreach($query_run as $row)
        {
            ?>

 <form action="code.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="pedit_id" value="<?php echo $row['id']; ?>">
         <div class="form-group">
          <label>Product Name</label>
               <input type="text" name="pname" value="<?php echo $row['product_name'];  ?>"class="form-control" placeholder="Enter Productname">
          </div>
          
          <div class="form-group">
              <label>Product Price</label>
        <input type="text" name="pprice"value="<?php echo $row['product_price'];  ?>" class="form-control" placeholder="Enter Productprice">
          </div>
          
          
            
             <div class="form-group">
          <label>Product Image</label>
              <input type="file"name="pimage"  value="<?php echo $row['product_image'];  ?>"class="form-control" >
          </div>
     
     <div class="form-group">
          <label>Product Category</label>
         <select name="category"value="<?php echo $row['product_category']; ?>" class="form-control" >
                    <option value="Tablet">Tablet</option>
                    <option value="Laptop">Laptop</option>
                    <option value="Mobile">Mobile</option>
                    </select>
              
          </div>
     
     <div class="form-group">
          <label>Product short description</label> 
         <input type="text" name="textdescription"value="<?php echo $row['product_desc'];   ?>"class="form-control">
    
    </div>
        <a href="addproduct.php" class="btn btn-danger">Cancel</a>
        <button type="submit" name="proupdatebtn" class="btn btn-primary">UPDATE PRODUCT</button>  
        </form>


<?php
        }
}
        ?>  


</div>
    </div>
</div>


<?php
include("include/scripts.php");

?>