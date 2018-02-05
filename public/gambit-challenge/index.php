<?php 
  require_once ('header.php');
  require_once ('reader.php');
?>

    <div class="container">
        <p class="register-time"> 
          <?php
            // printing the first element in the array which the time registers are taken
            $date_registered = $registers[0];
            echo 'Time of registery: ' . '<span class="btn btn-warning">'. $date_registered . '</span>';
          ?>       
        </p>
            <div>
             <div class="row">
              <?php
                  // shifts the first value of the array off abd returns it.
                  array_shift($registers);
                   // parsing the string containing register id and value separaed by colon
                  foreach ($registers as $register) {
          	       $reg_parts = explode(':', $register);
          	   ?>
                  
            
            <section class="col-xs-6 col-sm-4 col-md-3 col-lg-2 register"> 
              <div class="reg-id"> <span class="reg-item-1" href="#"> <?php echo $reg_parts[0]; ?> </span></div>
              <div class="reg-val"> <span class="reg-item-2 text-animate" href="#"><?php echo $reg_parts[1]; ?> </span></div>
            </section>
                
         <?php } ?>
          </div>
        </div> 
    </div> <!-- container -->

   <!-- Includes footer file --> 
<?php require_once ('footer.php'); ?>
