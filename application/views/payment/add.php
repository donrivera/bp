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
	$( "#datepicker" ).datepicker();
	$( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
	 
});</script>
<BR/>Add Payment

	<form action="<?=base_url()?>account/insertPayment" method="post" id="frm">
		<table border="1">
			<tr>
				<td>Name:</td>
				<td>
					<select name="paddler_id">
						<option value="">Select</option>
						<?php foreach($pds as $pd):?>
							<option value="<?=$pd->id?>"><?=$pd->lname."&nbsp;,&nbsp;".$pd->fname?></option>
						<?php endforeach;?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Payment Type:</td>
				<td>
					<select name="payment_type">
						<option value="">Select</option>
						<?php foreach($pts as $pt):?>
							<option value="<?=$pt->code?>"><?=$pt->description?></option>
						<?php endforeach;?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Amount:</td>
				<td>
					<input type="text" name="amount"/>
				</td>
			</tr>
			<tr>
				<td>Date:</td>
				<td>
					<input type="text" name="date_of_payment" id="datepicker"/>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="submit"/>
					<input type="reset" name="reset" value="reset"/>
				</td>
			</tr>			
		</table>
	</form>