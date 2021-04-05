<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="./src/bootstrap-input-spinner.js"></script>
</head>
    <body>
      <?php
     include('connect.php'); 

      //execute the SQL query and return records
      $result = mysqli_query($connect,"SELECT * FROM package_selection ");
      ?>
      <table class="table table-bordered" style="background:#f0ad4e;">
        <h2>PACKAGES :</h2>
        <tr class="d-flex">
          <th class="col-sm-4">Package_id</th>
          <th class="col-sm-4">Package Type </th>
          <th class="col-sm-4">Package</th>  
        </tr>
     
        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){
            ?>
            <tr class="d-flex">
              <td class="col-sm-4"><?php echo $row['package_id'] ?></td>
              <td class="col-sm-4"><?php echo $row['package_type']?></td>
              <td class="col-sm-4"><?php echo $row['package_name']?></td>
         
            </tr>
			<?php
          }
        ?>
     
    </table>
     <?php mysqli_close($connect); ?>
    </body>
    </html>
