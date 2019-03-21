<?php

class Product{
    /*
  @param ID ($_GET)
  @return voi
  */
public function getProductFromId(int $id){

  include "db.php";

try{
    $queryd = " SELECT * FROM `products` WHERE `pid`='$id'";

    $ex = $db->query($queryd);

    

while($res = $ex->fetch(PDO::FETCH_ASSOC)){
  $doneThis = false;

echo ' 
 <h1 class="text-center" style="color:rgb(201,203,204);">'. $res['name'] .'</h1>
 <div style="background-image:linear-gradient(to bottom, rgb(30,29,29) , #21394b);border-radius:1px;padding:500px;width:500px;height:500px;margin-bottom:auto;margin-top:auto;margin-left:auto;margin-right:auto;border-radius:25px;background:#000000;padding:20px;width:50%;height:90%;background-image:linear-gradient(to bottom, rgb(30,29,29) , #21394b);">;


 <img src="../img/'.$id.'.png" class="img-fluid" alt="Responsive image">


 <button class="button" type="button" data-hover=" '.  $res['price']. '€ "><span>Buy</span></button>  
<p style="color:rgb(201,203,204);">'. $res['descr'] .'
 </p><h2 class="text-center" style="color:rgb(201,203,204);"> Required </h2>  <p style="color:rgb(201,203,204);">'.  $res['min'] .'
</p>';

if($doneThis == false && $res['approved']!=1){

  echo '<div class="alert alert-warning" role="alert">
  <h4 class="alert-heading">Warning!</h4>
  <p>The game has been submited by the publisher for our reviewal, however it hasn\'t been approved yet.</p>
  <hr>
  <p class="down">Game will be available withing 72 hours</p>
  </div>';
  $doneThis = true;
}
}



  
}catch (Exception $ex){
  echo "Exception";
  echo $ex;
}

}
}
