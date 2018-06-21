	<meta charset="utf-8">
	<title>jQuery UI Datepicker - Default functionality</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css">
<style>
	.ui-datepicker
{
   font-family: Arial;
   font-size: 13px;
   z-index: 1003 !important;
}
</style>
<script type="text/javascript">
$(document).ready(function()
{
   var indexjQueryDatePicker1Opts =
   {
      dateFormat: 'yy-mm-dd',
      changeMonth: false,
      changeYear: false,
      showButtonPanel: false,
      showAnim: 'show'
   };
	$("#indexjQueryDatePicker1").datepicker(indexjQueryDatePicker1Opts);
	$("#indexjQueryDatePicker2").datepicker(indexjQueryDatePicker1Opts);
	$("#indexjQueryDatePicker3").datepicker(indexjQueryDatePicker1Opts);
	$("#indexjQueryDatePicker4").datepicker(indexjQueryDatePicker1Opts);
	$("#indexjQueryDatePicker5").datepicker(indexjQueryDatePicker1Opts);
	$("#indexjQueryDatePicker6").datepicker(indexjQueryDatePicker1Opts);
	$("#indexjQueryDatePicker7").datepicker(indexjQueryDatePicker1Opts);
	$("#indexjQueryDatePicker8").datepicker(indexjQueryDatePicker1Opts);
	$("#indexjQueryDatePicker9").datepicker(indexjQueryDatePicker1Opts);
	$("#indexjQueryDatePicker10").datepicker(indexjQueryDatePicker1Opts);
});
</script>
