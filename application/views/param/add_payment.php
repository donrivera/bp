<br/>
Add Payment Type
<br/>
<form action="<?=base_url()?>parameter/insertPayment" method="post">
<table>
	<tr>
		<td>Code:</td>
		<td><input type="text" name="code"/></td>
	</tr>
	<tr>
		<td>Description:</td>
		<td><input type="text" name="description"/></td>
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