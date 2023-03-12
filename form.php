<?php include("connection.php"); ?>
<!Doctype html>
<html>
<head>
  <meta charset="utf">
  <meta name="viewport" content="width=device-width",initial-scale=1">
  <link rel="stylesheet"type="text/css"href="style.css">
  <title> CRUD </title>
</head>

<body>
  <div class="container">
    <form action="#" method="POST">
    <div class="title">
      Registration form
    </div>
    <div class="form">
      <div class="input_field">
        <label>First Name </label>
        <input type="text" class="input" name="fname">
      </div>

      <div class="input_field">
        <label>Last Name </label>
        <input type="text" class="input"name="lname">
      </div>

      <div class="input_field">
        <label>Password </label>
        <input type="Password" class="input"name="password">
      </div>

      <div class="input_field">
        <label>Conform Password </label>
        <input type="Password" class="input"name="conpassword">
      </div>

      <div class="input_field">
        <label> Gender </label>
        <div class="custom_select">
        <select name="gender"required>
          <option value="">Select</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
    </div>

      <div class="input_field">
        <label>Email Address</label>
        <input type="text" class="input"name="email">
      </div>

      <div class="input_field">
        <label>Phone Number </label>
        <input type="text" class="input"name="phone">
      </div>

      <div class="input_field">
        <label>Address </label>
        <textarea class="textarea"name="address"></textarea>
      </div>

      <div class="input_field">
        <label class="Check">
        <input type="checkbox">
        <span class="checkmark">
     </label>
     <p>Agree to term and condition </p>
    </div>
    <div class="input_field">
      <input type="submit" value="Register" class="btn" name="register">

    </div>

    </div>
  </form>
  </div>
</body>
</html>

<?php
 if($_POST['register'])
 {
   $fname      = $_POST['fname'];
   $lname      = $_POST['lname'];
   $pwd        = $_POST['password'];
   $cpwd       = $_POST['conpassword'];
   $gender     = $_POST['gender'];
   $email      = $_POST['email'];
   $phone      = $_POST['phone'];
   $address    = $_POST['address'];

  $query=  "INSERT INTO form VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";
  $data = mysqli_query($conn,$query);

  if($data)
  {
  //  echo "data inserted into database";
  }
  else {
    echo "Failed";
  }
 }

 ?>
