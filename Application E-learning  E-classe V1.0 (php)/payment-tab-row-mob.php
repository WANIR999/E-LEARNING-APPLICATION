
<?php
$content = file_get_contents('payment.json');
$payments = json_decode($content,true);
foreach($payments as $payment){
  echo '<div class="card my-3" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title text-center">name : '.$payment['name'].'</h5>
    <p class="card-text text-center"> payment schedule : '.$payment['payment_schedule'].'</p>
    <p class="card-text text-center">bill number : '.$payment['bill_number'].'</p>
    <p class="card-text text-center">amount paid : '.$payment['amount_paid'].'</p>
    <p class="card-text text-center">balance amount : '.$payment['balance_amount'].'</p>
    <p class="card-text text-center"> date : '.$payment['date'].'</p>
    <a href="#" class="btn btn-primary w-100"> <i style="color:#00C1FE ;" class="bi bi-eye  pe-3"></i></a>
  </div>
  </div>';

}
?>