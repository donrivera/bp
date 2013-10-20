<br/>
	<a href="<?=base_url()?>account/payment">Add New Payment/s</a>
<br/>
<h6>Check Accounts</h6><br/>
<form action="<?=base_url()?>account/viewByGender" method="post">
	<table>
		<tr>
			<td>Select:</td>
			<td>
				<select name="gender">
					<option value="">Gender</option>
					<?php foreach($gcs as $gc):?>
					<option value="<?=$gc->code?>"><?=$gc->description?></option>
					<?php endforeach;?>
				</select>
			</td>
		</tr>
		
		<tr>
			<td>Select:</td>
			<td>
				<select name="payment">
					<option value="">Payment</option>
					<?php foreach($ptype as $p):?>
					<option value="<?=$p->code?>"><?=$p->description?></option>
					<?php endforeach;?>
				</select>
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