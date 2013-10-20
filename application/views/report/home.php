<script src="<?=base_url()?>public/js/jquery-1.9.1.js"></script>
<script src="<?=base_url()?>public/js/jquery-ui-1.10.3.custom.min.js"></script>
<link rel="stylesheet" href="<?=base_url()?>public/stylesheets/ui-lightness/jquery-ui-1.10.3.custom.min.css"/>
<style>
div.ui-datepicker{
 font-size:11px;
}
</style>
<script>
$(document).ready(function() 
{
	//alert("TEST");
   $('#frm').submit(function() 
   {
		//alert('Submit Data Entry!');
		//return false;
	});
});
</script>
<script>
$(function()
{
	$( "#start_date" ).datepicker();
	$( "#start_date" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
	$( "#end_date" ).datepicker();
	$( "#end_date" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
	 
});</script>
<br/>
Search Paddler's Name
<form action="report/reportById" name="frm" method="post">
<table border="3">
	<tr>
		<td>Name</td>
		<td>
			<select name="paddler_id">
				<option value="">Select</option>
				<?php foreach($paddlers as $p):?>
					<option value="<?=$p->id?>"><?=$p->lname."&nbsp;,&nbsp;".$p->fname?></option>
				<?php endforeach;?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Date</td>
		<td><input type="text" id="start_date" name="start_date"/>TO<input type="text" id="end_date" name="end_date"/></td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="submit" name="submit" value="Generate Report"/>
			<input type="reset" name="reset" value="Reset"/>
		</td>
	</tr>		
</table>
</form>