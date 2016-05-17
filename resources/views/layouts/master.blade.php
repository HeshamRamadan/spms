<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	
	<link href="{{URL::to('src/css/bootstrap.min.css')}}" rel="stylesheet">
	
	<link href="{{URL::to('src/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
	<link href="{{URL::to('src/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{URL::to('src/css/styles.css')}}" rel="stylesheet">
	<script src="{{URL::to('src/js/lumino.glyphs.js')}}"></script>
	
	</head>
	
	<body>
    	
  			@yield('content')
 		
 	
	<script src="{{URL::to('src/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{URL::to('src/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::to('src/js/chart.min.js')}}"></script>
	<script src="{{URL::to('src/js/chart-data.js')}}"></script>
	<script src="{{URL::to('src/js/easypiechart.js')}}"></script>
	<script src="{{URL::to('src/js/easypiechart-data.js')}}"></script>
	<script src="{{URL::to('src/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{URL::to('src/js/bootstrap-datetimepicker.min.js')}}"></script>
	<script src="{{URL::to('src/js/bootstrap-datetimepicker.pt-BR.js')}}"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
		
		
	</script>	
<script type="text/javascript">
  $(function() {
    $('#datetimepicker4').datetimepicker({
      pickTime: false
    });
   
  });
  $(function() {
	    $('#indatetime').datetimepicker({
	      pickTime: false
	    });
	   
	  });
	  
</script>	
</body>

</html>