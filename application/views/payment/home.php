<?
$this->load->model('paddler','',TRUE);
$this->load->model('payment_type','',TRUE);
$this->load->model('user','',TRUE);
?>
<br/>
&nbsp;&nbsp;<a href="<?=base_url()?>admin/addPayment">Add New</a>
<br/>	
<table border="1" width="70%">
	<tr>
		<td>First Name</td>
		<td>Last  Name</td>
		<td>Date of Payment</td>
		<td>Amount</td>
		<td>Received By</td>
		<td>Type</td>
		<td>Date Processed</td>
	</tr>
	<? if($queries < 0 || empty($queries)):?>
	<tr>
		<td>No Result Found...</td>
	</tr>
	<?else:?>
	<?php foreach($queries as $q):?>
	<tr>
		<?
			$getName=$this->paddler->edit($q->id)->row_array();
			$getType=$this->payment_type->edit($q->payment_type)->row_array();
			$getUser=$this->user->edit($q->received_by)->row_array();
		?>
		<td><?=$getName['fname']?></td>
		<td><?=$getName['lname']?></td>
		<td><?=$q->date_of_payment?></td>
		<td><?=$q->amount?></td>
		<td><?=$getUser['fname']."&nbsp;".$getUser['lname']?></td>
		<td><?=$getType['description']?></td>
		<td><?=$q->date_encoded?></td>
		<td>
			<a href="<?=base_url()?>admin/editPayment/<?=$q->id?>">Edit</a>
			<a href="<?=base_url()?>admin/deletePaddler/<?=$q->id?>" onclick="return confirm('Are you sure you want to delete this record ?')">Delete</a>
		</td>
	</tr>
	<?php endforeach;?>
	<? endif;?>
</table>
