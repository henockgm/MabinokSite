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

      <table role="presentation" class="table table-striped">

         <thead>
            <th>Register id</th>
            <th>Register Value</th>
        </thead>

        <tbody class="files">
        <?php
            
          // shifts the first value of the array off and returns it. 
          array_shift($registers);

          //looping through the new array list and parsing the string line containg register id
          // and register data separated by a colon and printing it in table row element.
          foreach ($registers as $register) {
  	       $reg_parts = explode(':', $register);
  	   ?>
           <tr class="fade in">
              <td> <li class="item-link"> <a class="reg-item text-animate"> <?php echo $reg_parts[0] ?> </a> </li>
              </td>
              <td> <li class="item-link"> <a class="reg-item text-animate"> <?php echo $reg_parts[1] ?> </a> </li>
              </td>
          </tr>
        <?php } ?>

        </tbody>
      </table>

    </div> <!-- container -->

  <!-- Includes footer file --> 
<?php require_once ('footer.php'); ?>

    