<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('form');
?>
<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
  </head>

<body>
    
<p>Coucouuu</p>
<br>

        <?php foreach($listobjectif->result_array() as $rows) {?>
            <p> <?php echo $rows['nomobjectif']; ?></p>
           
        <?php } ?>

</body>




</html>