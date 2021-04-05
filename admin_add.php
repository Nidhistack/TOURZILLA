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
<style>
body{
background:#f0ad4e;
}
form .error {
color: #ff0001;
}
</style>
</head>
<body>
<form class="form" id="PackForm" method="post" action="add_package.php" name="PackForm">
   <div class="container">
   <br><br><h1>ADD PACKAGE</h1><br><br>
  <div class="form-group row">
    <label for="pack_name" class="col-sm-2 col-form-label">Package Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pack_name" name="pack_name" >
    </div>
</div>

  <div class="form-group row">
    <label for="pack_desc" class="col-sm-2 col-form-label">Package Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="pack_desc" name="pack_desc" required>
    </div>
  </div>
 
  
    <div class="form-group row">
           <label for="pack_type" class="mb-2 mr-sm-2">Package Type</label>
                      <div class="col-sm-10">
                             <select type="text" class="form-control" id="pack_type" name="pack_type" required>
                          <option>Festivel Special</option>
                          <option>Senior Special</option>
                          <option>Honeymoon Special</option>
                          <option>Solo Special</option>
                        </select>
                      </div>
   </div>
 
 <div class="form-group row">
   <label  class="mb-2 mr-sm-2">No. of Days:</label>
             <input type="text" class="form-control-lg mb-2 mr-sm-2"  id="no_of_days" name="no_of_days" required  >
  </div>
    <div class="form-group">
        <label  class="mb-2 mr-sm-2 " >Day1 Name:</label>
       <input type="text" class="form-control-lg mb-2 mr-sm-2" id="day1_nm" name="day1_nm" required >
       <label  class="mb-2 mr-sm-2">Day1 Description:</label>
       <input type="text" class="form-control-lg mb-2 mr-sm-2" size="50" maxlength="900" id="day1_desc" name="day1_desc" required  >
     
   </div>
   <div class="form-group">
<label  class="mb-2 mr-sm-2 " >Day2 Name:</label>
   <input type="text" class="form-control-lg mb-2 mr-sm-2"  id="day2_nm" name="day2_nm"  required   >
   <label  class="mb-2 mr-sm-2">Day2 Description:</label>
   <input type="text" class="form-control-lg mb-2 mr-sm-2" size="50" maxlength="900" id="day2_desc" name="day2_desc"  required  >
 
   </div>
   <div class="form-group">
<label  class="mb-2 mr-sm-2 " >Day3 Name:</label>
   <input type="text" class="form-control-lg mb-2 mr-sm-2"  id="day3_nm" name="day3_nm" required  >
   <label  class="mb-2 mr-sm-2">Day3 Description:</label>
   <input type="text" class="form-control-lg mb-2 mr-sm-2" size="50" maxlength="900" id="day3_desc" name="day3_desc"  required  >
 
   </div>
    <div class="form-group">
<label  class="mb-2 mr-sm-2 " >Day4 Name:</label>
   <input type="text" class="form-control-lg mb-2 mr-sm-2"  id="day4_nm" name="day4_nm"  required     >
   <label  class="mb-2 mr-sm-2">Day4 Description:</label>
   <input type="text" class="form-control-lg mb-2 mr-sm-2" size="50" maxlength="900"  id="day4_desc" name="day4_desc"  required  >
 
   </div>
   <div class="form-group">
<label  class="mb-2 mr-sm-2 " >Day5 Name:</label>
   <input type="text" class="form-control-lg mb-2 mr-sm-2"  id="day5_nm" name="day5_nm"  required   >
   <label  class="mb-2 mr-sm-2">Day5 Description</label>
   <input type="text" class="form-control-lg mb-2 mr-sm-2" size="50" maxlength="900"   id="day5_desc" name="day5_desc" required  >
 
   </div>
    <div class="form-group">
<label  class="mb-2 mr-sm-2 " >Day6 Name:</label>
   <input type="text" class="form-control-lg mb-2 mr-sm-2"  id="day6_nm" name="day6_nm" required   >
   <label  class="mb-2 mr-sm-2">Day6 Description:</label>
   <input type="text" class="form-control-lg mb-2 mr-sm-2" size="50" maxlength="900"  id="day6_desc" name="day6_desc"  required  >
 
   </div>

<div class="form-group">

   <label  class="mb-2 mr-sm-2">Fare:</label>
   <input type="number" class="form-control-lg mb-2 mr-sm-2"  id="pack_fare" name="pack_fare" required   >
<label  class="mb-2 mr-sm-2 " >Tour Highlights:</label>
   <input type="text" class="form-control-lg mb-2 mr-sm-2" size="50" maxlength="900"  id="tour_highlights" name="tour_highlights" required   >
 
   </div>
   
 <div class="form-group row">
<label  class="mb-1 mr-sm-1 " >Add Image 1:</label>
   <input type="text" class="form-control-lg mb-1 mr-sm-1" id="img1" name="img1" required  >
   <label  class="mb-1 mr-sm-1">Add Image 2:</label>
   <input type="text" class="form-control-lg mb-1 mr-sm-1" id="img2" name="img2" required   >
<label  class="mb-1 mr-sm-1">Add Image 3:</label>
   <input type="text" class="form-control-lg mb-1 mr-sm-1" id="img3" name="img3"  required >
 
   </div>
   
 <button type="submit" name="submit" class="btn btn-outline-warning btn-dark ">ADD PACKAGE! </button>

   </div>
</form>

</body>

       