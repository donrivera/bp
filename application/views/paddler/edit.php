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
	$( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd");
	
	 
});</script>
<?
$this->load->model('paddler_code','',TRUE);
$this->load->model('status_code','',TRUE);
?>
<BR/>Edit Paddler
	<? if($queries < 0 || empty($queries)):?>
		<BR/><BR/>No Result Found...
	<?else:?>
	
		<?foreach($queries as $q):?>
			<form action="<?=base_url()?>member/update" method="post" id="frm">
				<table border="1">
					<tr>
						<td>First Name:</td>
							<td><input type="text" name="fname" value="<?=$q->fname?>"/></td>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td><input type="text" name="lname" value="<?=$q->lname?>"/></td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td>
							
							<select name="gender">
								<option value="">Gender</option>
								<?php foreach($gcs as $gc):?>
								<option value="<?=$gc->code?>" selected="<?($q->gender==$gc->code?'selected':'')?>"><?=$gc->code?></option>
								<?php endforeach;?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Tel No:</td>
						<td><input type="text" name="tel_no" value="<?=$q->tel_no?>"/></td>
					</tr>
					<tr>
						<td>Blood Type:</td>
						<td><input type="text" name="blood_type" value="<?=$q->blood_type?>"/></td>
					</tr>
					<tr>
						<td>Address:</td>
						<td><textarea cols="10" rows="5" name="address"/><?=$q->tel_no?></textarea></td>
					</tr>
					<tr>
						<td>Start Date:</td>
						<script>$(function(){$("#datepicker").datepicker( "setDate" , "<?=$q->start_date?>" );});</script>
						<td><input type="text" name="registration_date" id="datepicker"/></td>
					</tr>
					<tr>
						<td>Status:</td>
						<td>
							<select name="status">
								<option value="">Status</option>
								<?php foreach($scs as $sc):?>
								<option value="<?=$sc->code?>" selected="<?($q->status==$sc->code?'selected':'')?>"><?=$sc->description?></option>
								<?php endforeach;?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Paddler:</td>
						<td>
							<select name="paddler_type">
								<option value="">Type</option>
								<?php foreach($pcs as $pc):?>
								<option value="<?=$pc->code?>" selected="<?($q->paddler_type==$pc->code?'selected':'')?>"><?=$pc->description?></option>
								<?php endforeach;?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Civil:</td>
						<td>
							<select name="civil_status">
								<option value="">Status</option>
								<?php foreach($ccs as $cc):?>
								<option value="<?=$cc->code?>" selected="<?($q->civil_status==$cc->code?'selected':'')?>"><?=$cc->description?></option>
								<?php endforeach;?>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
						<input type="hidden" name="id" value="<?=$q->id?>"/>
						<input type="submit" name="submit" value="submit"/>
						<input type="reset" name="reset" value="reset"/>
						</td>
					</tr>			
				</table>
			</form>
		<?endforeach;?>
	<?endif;?>