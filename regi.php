<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up/Sign In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br/><br/>
<header class="masthead" style="background-image: url('img/crop1.jpg')">
<div class="container">
  <div class="row">
  <div class="col-sm-12">
    <div class="panel panel-danger">
      <div class="panel-heading">Registration For Dealers</div>
      <div class="panel-body">Don't Be Busy Be Productive!</div>
    </div>
    </div>
  </div>
</div>  

<div class="container">
  <div class="row">
  <div class="col-sm-6">
  <div class="panel panel-success">
    <div class="panel panel-heading"><h4>Sign In</h4></div>
        <div class="panel panel-body">
            <form action="login.php" method="POST" roll="form">
             <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
              
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
              </div>
         
              <button type="submit" class="btn btn-success" name="signin" value="Sign In">Sign In</button>
            </form>
        </div>
  </div>
</div>
<div class="col-sm-6">
  <div class="panel panel-success">
    <div class="panel panel-heading"><h4>Sign Up</h4></div>
      <div class="panel panel-body">
            <form role="form" action="signup.php" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
              </div>

              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>

              <div class="form-group">
                <label for="UploadImage">Upload Image:</label>
                <input type="file" class="form-control" id="file" placeholder="" name="img">
              </div>

              <div class="form-group">
                    <label for="name">Product Name:</label>
                    <input type="text" name="Product"class="form-control" id="Product" placeholder="Product Name">
                    
                </div>

                <div class="form-group">
                    <label for="name">Product Quantity:</label>
                    <input type="text" name="Product"class="form-control" id="Product" placeholder="Product Quantity">
                    
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
</body>
</html>