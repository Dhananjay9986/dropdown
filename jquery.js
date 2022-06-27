$(document).ready(function(){
 
    $("#country").on('change',function(){
      var countryId = $(this).val();
      $.ajax({
      method: "POST",
      url: "ajax.php",
      data: {id: countryId},
      dataType:"html",

      success: function(data){     
        $("#state").html(data);
        $('#city').html('<option value="">Select State First</option>'); 
      }
      });    
    });   
    
    $("#state").on('change',function(){
      var stateId =  $(this).val();
      $.ajax({
         method: "POST",
      url: "ajax.php",
      data: {stateId: stateId},
      dataType:"html",
      success: function(data){
        $("#city").html(data);   
      }
      });    
    });
   });