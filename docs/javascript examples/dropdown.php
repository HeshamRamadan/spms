<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(event){
        $("#p").hide();
        $("#d").hide();
        $("#t").hide();
        $("#a").hide();
    $("#ad").click(function(){
        
        $("#a").hide();
        $("#p").hide();
        $("#d").hide();
        $("#t").hide();
        

    });
    $("#pm").click(function(){
        
        $("#a").hide();
        $("#p").show();
        $("#d").hide();
        $("#t").hide();
        

    });
 $("#de").click(function(){

        $("#a").hide();
        $("#p").hide(); 
        $("#d").show();
        $("#t").hide();
       

    });
 $("#te").click(function(){
        
        $("#a").hide();
        $("#p").hide();
        $("#d").hide();
        $("#t").show();
        

    });


});
</script>
</head>
<body>


<select name="job_type" class="form-control">
<option value="" selected id="ad" ></option>	
<option value="1" id="ad">Admin</option>
<option value="2" id="pm">Project Manager</option>
<option value="3" id="de">Developer</option>
<option value="4" id="te">tester</option>
</select>


<p id="p">manager</p>
<p id="d">developer</p>
<p id="t">tester</p>

</body>
</html>