<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(function() {
	  $('#recurrency select').on('change', function() {
	    var value = this.value;
	    $('#dayInterval').toggle(value == 'DAILY');
	    $('#weekInterval').toggle(value == 'WEEKLY');
	    $('#monthInterval').toggle(value == 'MONTHLY');
	  }).change();
	});
</script>
</head>
<body>

<div id="recurrency">
  <select path="recurrency">
    <option value="-" selected label="--Please Select" />
    <option value="DAILY">DAILY</option>
    <option value="WEEKLY">WEEKLY</option>
    <option value="MONTHLY">MONTHLY</option>
  </select>
</div>

<div id="dayInterval">DAILY</div>
<div id="weekInterval">WEEKLY</div>
<div id="monthInterval">MONTHLY</div>

</body>
</html>