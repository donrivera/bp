
<br/>
<a href="<?=base_url()?>parameter/addPayment">Add Payment Type</a>
<br/>	
<table border="1" width="70%">
	<tr>
		<td>Code</td>
		<td>Description</td>
		<td>Action</td>
	</tr>
	<? if($queries < 0 || empty($queries)):?>
	<tr>
		<td>No Result Found...</td>
	</tr>
	<?else:?>
	<?php foreach($queries as $q):?>
	
	<tr>
		<td><?=$q->code?></td>
		<td><?=$q->description?></td>
		<td>
			<a href="<?=base_url()?>param/editPayment/<?=$q->id?>">Edit</a>
			<a href="<?=base_url()?>param/deletePayment/<?=$q->id?>" onclick="return confirm('Are you sure you want to delete this record ?')">Delete</a>
		</td>
		
	</tr>
	<?php endforeach;?>
	<? endif;?>
</table>
