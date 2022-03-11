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
  <form method="POST" action="#" >
    <div class="mb-3 mt-3">
      <label class="text-secondary" for="names">Name:</label>
      <input type="name" class="form-control" id="names" placeholder="Enter a name" name="name">
    </div>
    <div class="mb-3">
      <label class="text-secondary" for="emails">Email:</label>
      <input type="email" class="form-control" id="emails" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label class="text-secondary" for="phones">Phone:</label>
      <input type="phone" class="form-control" id="phones" placeholder="Enter a phone number" name="phone">
    </div>
    <div class="mb-3">
      <label class="text-secondary" for="enroll_numbers">Enroll number:</label>
      <input type="password" class="form-control" id="enroll_numbers" placeholder="Enter an enroll number" name="enroll_number">
    </div>
    <div class="mb-3">
      <label class="text-secondary" for="date_of_addmissions">Date of addmission:</label>
      <input type="date" class="form-control" id="date_of_addmissions" placeholder="Enter a date of admission" name="date_of_addmission">
    </div>
     <button type="submit" value="add" class="btn btn-primary my-3 pb-4 ">Add a student </button>
  </form>
 
</div>
<?php 
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['enroll_number']) && isset($_POST['date_of_addmission'])){
    $input = [ 
    'id' => uniqid(),
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'enroll_number' => $_POST['enroll_number'],
    'date_of_addmission' => $_POST['date_of_addmission']
    ];
    $contents=file_get_contents('students.json');
    $content= json_decode($contents,true);
    array_push($content,$input);
    $contents=json_encode($content,JSON_PRETTY_PRINT);
    file_put_contents('students.json',$contents);
    header('location:student.php');
};
?>

</body>
</html>
