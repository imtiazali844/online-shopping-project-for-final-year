<?php
session_start();
include("include/security.php");
include("include/header.php");
include("include/sidebar.php");



?>

<!-- Modal -->
<div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
        <form action="code.php" method="post" enctype="multipart/form-data">
      <div class="modal-body">
          
          <div class="form-group">
          <label>Product Name</label>
              <input type="text" name="pname" class="form-control" placeholder="Enter Productname"required>
          </div>
                          
          <div class="form-group">
          <label>Product Price</label>
              <input type="text" name="pprice" class="form-control" placeholder="Enter Productprice"required>
          </div>
          
          
          
          <div class="form-group">
          <label>Product Image</label>
            <input type="file"name="pimage" id="pimage" class="form-control"required>
              
          </div>
          
          <div class="form-group">
         
              <label>Product Category</label>
              <select name="category" class="form-control" value=""required>
                    <option value="Tablet">Tablet</option>
                    <option value="Laptop">Laptop</option>
                    <option value="Mobile">Mobile</option>
                    </select>
          </div>
          
          <div class="form-group">
          <label>Product short description </label>
            <input type="text" name="textdescription"class="form-control"required>
          </div>
          <input type="hidden" name="usertype"value="admin" >
          
       
      </div>
           
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel
        </button>
        <button type="submit" name="addproduct" class="btn btn-primary">Save
        </button>
      </div>
             </form>
    </div>
  </div>
</div>

     <div class="container-fluid">
    
<!--data table example-->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Products
    <button type="button" class="btn btn-primary "data-toggle="modal" data-target="#addproduct">Add Products
    </button>
</h6>
</div>
    <div clas="card-body">
    

      
        <div class="table-responsive">
                
        <table class="table table-bordered" id="dataTable"width="100%"cellspacing="0">
        <thead>
        <tr>
        <th>ID</th>
        <th>ProductName</th>
        <th>ProductPrice</th>
        <th>ProuductQuantity</th>
        <th>ProductImage</th>
        <th>ProductCatagory</th>
        <th>ProductDescription</th>
      
        <th>Edit</th>
        <th>Delete</th>
        </tr>    
        </thead>
            <tbody>
                <?php
                $conn=mysqli_connect("localhost","root","","adminpanel");
                $query="SELECT * FROM product";
                $query_run=mysqli_query($conn,$query);
                
                  while($row=mysqli_fetch_array($query_run))
                    {
                     ?>
        <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['product_name'];?></td>
        <td><?php echo $row['product_price'];?></td>
        <td><?php echo $row['product_qty'];?></td>
        <td><img src="<?php echo $row['product_image'];?>" width="100px"></td> <td><?php echo $row['product_category'];?></td>
        <td><?php echo $row['product_desc'];?></td>
        
        <td> 
        <form action="product_edit.php" method="post">
        <input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
        <button type="submit" name="edit_product_btn" class="btn btn-success">Edit
        </button>
        </form>
        </td>
        <td>
            <form action="code.php" method="post">
            <input type="hidden" name="pdelete_id" value="<?php echo
            $row['id'];?>">
            <button type="submit" name="pdelete_btn" class="btn btn-danger">Delete</button>
            </form>
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
        </div>
<!----container-fluid--->

<?php
include("include/scripts.php");

?>