
 <?php 
    $content = file_get_contents('students.json');
    $students = json_decode($content,true);
    $index=1;
    if (! empty($students) ){
    foreach($students as $student){
?> 
   <div class="row my-3 pt-3 border-none rounded-3 bg-white">
     <div class="col ">
       <div>
         <img style="width: 90px;" src="./image/gens-se-reunissent-au-bar-du-restaurant-pour-diner-isole-illustration-vectorielle-plane-dessin-anime-hommes-femmes-buvant-du-vin-biere-dans-pub_74855-8505.jpg" alt="img">
       </div>
      </div>
       <div class="col text-start pt-3">
        <div>
          <h6 class="text-muted "><?=  $student['name']?></h6>
        </div>
       </div>
     
       <div class="col  text-start pt-3">
         <div>
           <h6 class="text-muted "><?= $student['email']?></h6>
         </div>
        </div>
     
        <div class="col  text-start pt-3">
         <div>
           <h6 class="text-muted "><?= $student['phone']?></h6>
         </div>
        </div>
     
        <div class="col  text-start pt-3">
         <div>
           <h6 class="text-muted "><?= $student['enroll_number']?></h6>
         </div>
        </div>
     
        <div class="col-2  text-start pt-3">
         <div>
           <h6 class="text-muted "><?= $student['date_of_addmission']?></h6>
         </div>
        </div>
        <div class="col pt-3 text-center">
        <a href="edit.php"><i style="color:#00C1FE ;" class="bi bi-pencil pe-3"></i></a>
        <a href="delet.php"> <i style="color:#00C1FE ;" class="bi bi-trash"></i></a>
       </div>
     </div>
<?php
$index++;
    }
  }
?>

