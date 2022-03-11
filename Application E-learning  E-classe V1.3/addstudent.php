<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container bg-white w-50 lg w-100 sm h-100 sm" style="margin-top: 30px !important;">
  <h4 class="pt-3"> <span>|</span> E-classe</h4> 
  <h2 class="text-center">ADD A STUDENT</h5>
  <p class="text-muted text-center">Enter informations to add a student</p>
  <form method="POST" action="" >
    <div class="mb-3 mt-3">
      <input type="hidden" class="form-control" name="id">
    </div>
    <div class="mb-3 mt-3">
      <label class="text-secondary" >Name:</label>
      <input type="name" class="form-control" id="names" placeholder="Enter a name" name="name" required>
    </div>
    <div class="mb-3">
      <label class="text-secondary" for="emails">Email:</label>
      <input type="email" class="form-control" id="emails" placeholder="Enter email" name="email" required>
    </div>
    <div class="mb-3">
      <label class="text-secondary" >phone:</label>
      <input type="phone" class="form-control" placeholder="Enter a phone number" name="phone" required>
    </div>
    <div class="mb-3">
      <label class="text-secondary" >enroll number:</label>
      <input type="phone" class="form-control" placeholder="Enter a phone number" name="enroll_number" required>
    </div>
    <div class="mb-3">
      <label class="text-secondary" >date of admission:</label>
      <input type="date" class="form-control" placeholder="Enter a phone number" name="date_of_admission" required>
    </div>
      <input class="btn btn-primary mb-2" type="submit" name="save" value="save">
  </form>
</div>
<?php
include "connection.php";
if(!empty($_POST['save'])){
  $name= $_POST['name'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $enroll= $_POST['enroll_number'];
  $date = $_POST['date_of_admission'];

  $insert="INSERT INTO `students`(`name`, `email`, `phone`, `enroll_number`, `date_of_admission`) VALUES ('$name','$email','$phone','$enroll','$date')";
  $data= $link->query($insert);
  header('location:student.php');
}
?>
</body>
</html>

