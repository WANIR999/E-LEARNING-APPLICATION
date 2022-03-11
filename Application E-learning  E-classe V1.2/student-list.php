  <?php
   include "connection.php";
   $select= "SELECT *FROM students";
   $data= $link->query($select);

   if($data->num_rows>0){
     while($row= $data->fetch_assoc()) {
  ?>
  
  <div class="row my-3 pt-3 border-none rounded-3 bg-white">
     <div class="col ">
       <div>
         <img style="width: 90px;" src="./image/gens-se-reunissent-au-bar-du-restaurant-pour-diner-isole-illustration-vectorielle-plane-dessin-anime-hommes-femmes-buvant-du-vin-biere-dans-pub_74855-8505.jpg" alt="img">
       </div>
      </div>
       <div class="col text-start pt-3">
        <div>
          <h6 class="text-muted "><?=  $row['name'];?></h6>
        </div>
       </div>
     
       <div class="col  text-start pt-3">
         <div>
           <h6 class="text-muted "><?= $row['email'];?></h6>
         </div>
        </div>
     
        <div class="col  text-start pt-3">
         <div>
           <h6 class="text-muted "><?= $row['phone'];?></h6>
         </div>
        </div>
     
        <div class="col  text-start pt-3">
         <div>
           <h6 class="text-muted "><?= $row['enroll_number'];?></h6>
         </div>
        </div>
     
        <div class="col-2  text-start pt-3">
         <div>
           <h6 class="text-muted "><?= $row['date_of_admission'];?></h6>
         </div>
        </div>
        <div class="col pt-3 text-center">
        <a href="updatestudent.php?id=<?= $row['id']; ?>"><i style="color:#00C1FE ;" class="bi bi-pencil pe-3"></i></a>
        <a href="deletestudent.php?id=<?= $row['id']; ?>"> <i style="color:#00C1FE ;" class="bi bi-trash"></i></a>
       </div>
     </div>
     <?php  }
   }
     
     ?>
