<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dashboard-style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
      <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body style=" background-color: rgb(243, 240, 240);">
<!-- ::::::::::::::::::::::::::::::::::::::::::main-container:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
    <div id="container"  class=" position-relative d-flex" style=" background-color: rgb(243, 240, 240);"> <!--  -->
<!-- ::::::::::::::::::::::::::::::::::::::::side-bar:::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<input class="d-none" id="check-v" type="checkbox">       
         <?php
           include 'aside.php'
         ?>
  <input class="d-none" type="checkbox" id="check">
  <?php
   include 'mob-aside.php'
  ?>
<!-- :::::::::::::::::::::::::::::::::::::::nav-bar::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
        <div class="container"> <!--  -->
        <?php
           include 'header.php'
          ?>
<!-- ::::::::::::::::::::::::::::::::::::::::::payment details::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<div  class="container">
<div id="std-list" class="row mt-3 border-bottom border-2 border-muted">
<div class="col pb-1">
<div >
  <h3 id="H3" class="fs-4">Payment Details</h3>
</div>
</div>
<div class="col">
  <div id="std-btn" class=" text-end">
   <a href="addpayment.php"> <i class="fas fa-sort me-1" style="color: #00C1FE; font-size: 20px;"></i></a>
  </div>
</div>
 </div>
 </div>
 <!-- :::::::::::::::::::::::::::::::::::payment-tab:::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
 <div style="overflow-x: auto;" class="row mt-3">
                            <table id="arrow" class="table table-hover table-striped mx-auto" style="width: 95%;">
                                <tr>
                                    <th class=" text-secondary" scope="col">Name</th>
                                    <th  class=" text-secondary" scope="col" >Payment Schedule</th>
                                    <th  class=" text-secondary" scope="col">Bill Number</th>
                                    <th  class=" text-secondary" scope="col" >Amount Paid</th>
                                    <th  class=" text-secondary" scope="col">Balance amount</th>
                                    <th  class=" text-secondary" scope="col" >Date </th>
                                    <th></th>
                                </tr>
                               <?php
                               include 'payment-tab-row.php';
                               ?>


                            </table>

                        </div>
<!-- ::::::::::::::::::::::::::::::::::::payment-tab-mob:::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
  <div id="list-tab-mob" class="container mt-3 ">
   <?php
   include 'payment-tab-row-mob.php'
   ?>
  </div>
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
           </div>
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
       </div>
    </body>
</html>