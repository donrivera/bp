<?
$this->load->model('paddler_code','',TRUE);
$this->load->model('status_code','',TRUE);
?>
<br/>
&nbsp;&nbsp;<a href="<?=base_url()?>member/add">Add New</a>
<br/>	
<table border="1" width="70%">
	<tr>
		<td>First Name</td>
		<td>Last  Name</td>
		<td>Tel No</td>
		<td>Paddler Type</td>
		<td>Status</td>
		<td>Action</td>
	</tr>
	<? if($queries < 0 || empty($queries)):?>
	<tr>
		<td>No Result Found...</td>
	</tr>
	<?else:?>
	<?php foreach($queries as $q):?>
	<?
		$getPaddlerType=$this->paddler_code->getDesc($q->paddler_type)->row_array();
		$getStatusType=$this->status_code->getDesc($q->status)->row_array();
	?>
	<tr>
		<td><?=$q->fname?></td>
		<td><?=$q->lname?></td>
		<td><?=$q->tel_no?></td>
		<td><?=$getPaddlerType['description']?></td>
		<td><?=$getStatusType['description']?></td>
		<td>
			<a href="<?=base_url()?>member/edit/<?=$q->id?>">Edit</a>
			<a href="<?=base_url()?>member/delete/<?=$q->id?>" onclick="return confirm('Are you sure you want to delete this record ?')">Delete</a>
		</td>
	</tr>
	<?php endforeach;?>
	<? endif;?>
</table>
