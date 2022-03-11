<?php
 $content = file_get_contents('students.json');
 $students = json_decode($content,true);
foreach($students as $student) :
  ?>
   <div class="card my-3" style="width: 100%;">
  <img src="./image/gens-se-reunissent-au-bar-du-restaurant-pour-diner-isole-illustration-vectorielle-plane-dessin-anime-hommes-femmes-buvant-du-vin-biere-dans-pub_74855-8505.jpg" class="card-img-top rounded-circle" alt="img">
  <div class="card-body">
    <h5 class="card-title">username:<?=  $student['name']?></h5>
    <p class="card-text">email:<?=  $student['email']?></p>
    <p class="card-text">Phone:<?=  $student['phone']?></p>
    <p class="card-text">enroll-num:<?=  $student['enroll_number']?></p>
    <p class="card-text">admission date: <?=  $student['date_of_addmission']?></p>
    <a href="edit.php?id=<?php $input['id'] ?>"><i style="color:#00C1FE ;" class="bi bi-pencil pe-3"></i></a>
        <a href="delet.php?id=<?php $input['id'] ?>"> <i style="color:#00C1FE ;" class="bi bi-trash"></i></a>
  </div>
</div>

<?php endforeach ?>
