<?php 

use yii\helpers\Url;

?>

<p class="h1" align="center"> Order </p> 

   <div align="center">

      <form class="form-inline" id="form1" method="post" action="<?= Url::to(['shop/order']); ?> ">
         
         <br>   
         
         <div align="center" class="form-group">
      
         <button class="btn btn-primary" type="submit">Submit</button>
      
         </div>
         
         <br>      
         <br>
         <br>

         <div align="center" class="form-group">
         
         <input required="" class="form-control" type="text" name="title" placeholder="Title">
         
         </div>

         <br>
         <br>
         <br>
         

         <div align="center" class="form-group">
         
         <div align="center" class="form-group">
               <br>
            <select class="form-control" name="employee_id">
            <?php

             foreach ($employee as $key) { 

            ?> 
              <option value="<?=$key->id?>"> <?=$key->name?> </option>
            
            <?php
            
            }

            ?>
            </select>
            
            <br>
            <br>
         

            </div>
         </div>
         
         <br>
         <br>
         <br>
         
         <div align="center" class="form-group">
      
         <input required="" class="form-control" type="number" name="order_id" placeholder="Order ID">
      
         </div>
      
         <br>
         <br>
         <br>
         

         <div align="center" id="d" class="form-group">
            
            <div align="center" class="form-group">
               <br>
            <select class="form-control" name="sel[]">
            <?php

             foreach ($product as $key) { 

            ?> 
              <option value="<?=$key->id?>"> <?=$key->name?> </option>
            
            <?php
            
            }

            ?>
            </select>
            
            <br>
            <br>
         

            </div>
            
            <br>
            
            <div align="center" class="form-group">
            
            <input class="form-control" required="" type="number" name="quan[]" placeholder="Enter Your Desired Quantity ..">
            
            </div>
            
            <br>
         
         </div>

         
      
      </form>

      <br>
      <br>
         

<div align="center" class="form-group">

<button class="btn btn-secondary" id="btn1">+</button>

</div>
</div>












<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>


<script type="text/javascript">


   $(document).ready(function(){
      var counter=1;
      $('#btn1').click(function(){
         var form="";
            form+="<div align='center' id='d"+counter+"' class='form-group'>";
            form+="  <div align='center' class='form-group'>";
            form+="     <br>"
            form+="<select class='form-control' name='sel[]'>";
            form+="   <option value='1'>Pizza</option>";
            form+="   <option value='2'>Burger</option>";
            form+="</select>";
            form+="<br><br>";
            form+="</div>"
            form+="<br>";
            form+="<div align='center' class='form-group'>";
            form+="<input class='form-control' required type='number' name='quan[]' placeholder='Enter Your Desired Quantity ..'>";
            form+="<button class='btn btn-secondary' onclick='myfunc("+counter+")'>X</button>"
            form+="</div>";
            form+="<br>";
            form+="</div>";

         
         counter=counter+1;
         $('#form1').append(form);
         
      });
   });


   function myfunc(counter){
      $('#d'+counter).remove();
      
   }
   


</script>

