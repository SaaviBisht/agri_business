<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up/Sign In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<br/><br/>
<header class="masthead" style="background-image: url('img/wheat.jpg')">
<div class="container">
  <div class="row">
  <div class="col-sm-12">
    <div class="panel panel-danger">
      <div class="panel-heading">Registration For Farmers</div>
      <div class="panel-body">Farmer Dont Work Till The Sun Goes Down.... But They Work Till The Work Done</div>
    </div>
    </div>
  </div>
</div>  

<div class="container">
  <div class="row">
  <div class="col-sm-6">
  <div class="panel panel-success">
    <div class="panel panel-heading"><h4>Log In</h4></div>
        <div class="panel panel-body">
            <form action="logf.php" method="POST" roll="form">
              <div class="form-group">
                <label for="number">Number:</label>
                <input class="form-control" id="inputPhone" maxlength= "10" name="phone" placeholder="+911113634626" title="" type="tel"
            value="">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
              </div>
         
              <button type="submit" class="btn btn-success" name="signin" value="Sign In">Log In</button>
            </form>
        </div>
  </div>
</div>
<div class="col-sm-6">
  <div class="panel panel-success">
    <div class="panel panel-heading"><h4>Sign Up</h4></div>
      <div class="panel panel-body">
            <form role="form" action="sinf.php" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
              </div>

             <div class="form-group">
                <label for="number">Number:</label>
                <input class="form-control" id="inputPhone" maxlength= "10" name="phone" placeholder="+911113634626" title="" type="tel"
            value="">
              </div>
              
                <div class="form-group">
                <label for="UploadImage">Upload Image:</label>
                <input type="file" class="form-control" id="file" placeholder="" name="img">
              </div>

                <div class="form-group">
                    <label for="name">Product:</label>
                    <input type="text" name="Product"class="form-control" id="Product" placeholder="Product Name">
                    
                </div>

                <div class="form-group">
                    <label for="name">Category:</label>
                    <input type="text" name="Product"class="form-control" id="Product" placeholder="Product Category">
                    
                </div>

                <div class="form-group">
                <label for="UploadImage">Product Image:</label>
                <input type="file" class="form-control" id="file" placeholder="" name="img">
              </div>

                <div class="form-group">
                    <label for="Price">Price/kg:</label>
                    <input type="text" name="Price"class="form-control" id="Price" placeholder="Product Rate">
                    
                </div>

              <div class="form-group">
                <label for="pass">Password:</label>
                <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
              </div>

              <div class="form-group">
                <label for="cpass">Confirm Password:</label>
                <input type="password" class="form-control" id="cpass" placeholder="Confirm Password" name="cpass">
              </div>
               
              <button type="submit" class="btn btn-success" name="signup" value="Sign Up">Sign Up</button>
            </form>
      </div>
  </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>