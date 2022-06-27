<!DOCTYPE html>
<html>
   <head>
      <title>PHP populate dynamic dropdown example</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <!-- jQuery library -->
      
      <style>
         .form_container{
         border:1px solid grey;
         background-color: #F8F9F9;
         margin: 5%;
         padding: 2%;
         border-radius: 3px;
         }
      </style>
   </head>
   <body>
      <div class="container" style="width:900px; margin-left: 25%;">
         <div class="form_container">
            <h2 align ="center">Country State City Dropdown using Ajax in PHP MySQL</h2>
            <br />  
            <div ng-app="myapp" >
                <div class="form-group">
                <label for="country">Select country:</label>
               <select name="country" id="country" class="form-control">
                  <option value=""> Select country</option>
                  <?php 
                     include('config.php');
                     $sql= "SELECT * from country ";
                     $result= mysqli_query($conn,$sql);
                     while ($row= mysqli_fetch_assoc($result)) { 
                        ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['country'] ;?></option> 
                  <?php } ?>
               </select>
               </div>
               <br/>

               <div class="form-group">
               <label for="country">Select State:</label>
               <select name="state" class="form-control" id="state">
                  <option value=""> Select state</option>
               </select>
                     </div>
               <br/>

               <div class="form-group">
                <label for="state">Select City:</label>
               <select name="city" id="city" ng-model="city" class="form-control" >
                  <option value=""> Select city</option>
                  
               </select>
                     </div>
            </div>
         </div>
      </div>
      </div>
      
      <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
   console.log("hghg");
   $(document).ready(function(){
 
    $("#country").on('change',function(){
      console.log($(this).val());
      var country_id = $(this).val();
      $.ajax({
      method: "POST",
      url: "state.php",
      data: {id: country_id},
      dataType:"html",

      success: function(data){ 
         console.log(data);    
        $("#state").fadeIn('fast').html(data);
        $('#city').html('<option value="">Select State First</option>'); 
      }
      });    
    });   
    
    $("#state").on('change',function(){
      console.log($(this).val());

      var state_id =  $(this).val();
      $.ajax({

         method: "POST",
      url: "city.php",
      data: {sid: state_id},
      dataType:"html",
      success: function(data){
        $("#city").html(data);   
      }
      });    
    });
   });
   </script>    
   </body>
</html>
