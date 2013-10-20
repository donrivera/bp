<?
$this->load->model('payment','',TRUE);
$this->load->model('balance','',TRUE);echo $pcode;
?>
<br/>

<br/>	
<table border="1" width="70%">
	<tr>
		<td>Name</td>
		<td>Date</td>
		<td>Due</td>
		<td>Amt Paid</td>
		<td>Outstanding</td>
	</tr>
	<? if($queries < 0 || empty($queries)):?>
	<tr>
		<td>No Result Found...</td>
	</tr>
	<?else:?>
	<?php foreach($queries as $q):?>
	<?php
		$date=explode("-",$q->due_date);
		$amount=$this->payment->paymentPerMonth($q->paddler_id,$date[1],$date[0])->row_array();
		$pay_per_month=($amount<0 || empty($amount['amt'])? '0' : $amount['amt']);
		$total_bal=$this->balance->totalBalance($q->paddler_id)->row_array();
	?>
	<tr>
		<td><?=$q->lname."&nbsp;,&nbsp;".$q->fname?></td>
		<td><?=$q->due_date?></td>
		<td><?=$q->amount;?></td>
		<td><?=$pay_per_month?></td>
		<td><?=$total_bal['bal']-$pay_per_month?></td>
		<!--
		<td>
			<a href="<?=base_url()?>member/edit/<?=$q->id?>">Edit</a>
			<a href="<?=base_url()?>member/delete/<?=$q->id?>" onclick="return confirm('Are you sure you want to delete this record ?')">Delete</a>
		</td>
		-->
	</tr>
	<?php endforeach;?>
	<? endif;?>
</table>
