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
  <p class="text-muted text-center">Enter informations to add a Payement</p>
  <form method="POST" action="#" >
    <div class="mb-3 mt-3">
      <label class="text-secondary" for="names">Name:</label>
      <input type="name" class="form-control" id="names" placeholder="Enter a name" name="name">
    </div>
    <div class="mb-3">
      <label class="text-secondary" for="payment_schedules">Payment schedule:</label>
      <input type="text" class="form-control" id="payment_schedules" placeholder="Payment schedule" name="payment_schedule">
    </div>
    <div class="mb-3">
      <label class="text-secondary" for="bill_numbers">Bill number:</label>
      <input type="number" class="form-control" id="bill_numbers" placeholder="Enter a bill number" name="bill_number">
    </div>
    <div class="mb-3">
      <label class="text-secondary" for="amount_paids">Amount paid:</label>
      <input type="text" class="form-control" id="amount_paids" placeholder="Amount paid" name="amount_paid">
    </div>
    <div class="mb-3">
      <label class="text-secondary" for="balance_amounts">Balance amount:</label>
      <input type="text" class="form-control" id="balance_amounts" placeholder="Enter a balance number" name="balance_amount">
    </div>
    <div class="mb-3">
      <label class="text-secondary" for="dates">Date:</label>
      <input type="date" class="form-control" id="dates" placeholder="Enter a date " name="date">
    </div>
     <button type="submit" value="add" class="btn btn-primary my-3 pb-4 ">Add a payment </button>
  </form>
 
</div>
<?php 
if(isset($_POST['name']) && isset($_POST['payment_schedule']) && isset($_POST['bill_number']) && isset($_POST['amount_paid']) && isset($_POST['balance_amount'])&& isset($_POST['date'])){
    $input = [ 
    'id' => uniqid(),
    'name' => $_POST['name'],
    'payment_schedule' => $_POST['payment_schedule'],
    'bill_number' => $_POST['bill_number'],
    'amount_paid' => $_POST['amount_paid'],
    'balance_amount' => $_POST['balance_amount'],
    'date' => $_POST['date'],
    ];
    $contents=file_get_contents('payment.json');
    $content= json_decode($contents,true);
    array_push($content,$input);
    $contents=json_encode($content,JSON_PRETTY_PRINT);
    file_put_contents('payment.json',$contents);
    header('location:payment.php');
};
?>

</body>
</html>
