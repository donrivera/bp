<?
$this->load->model('payment','',TRUE);
$this->load->model('balance','',TRUE);
?>
<br/>

<br/>	
<table border="1" width="70%">
	<tr>
		<td>Name</td>
		<td>Paid</td>
		<td>Outstanding Balance</td>
	</tr>
	<? if($queries < 0 || empty($queries)):?>
	<tr>
		<td>No Result Found...</td>
	</tr>
	<?else:?>
	<?php foreach($queries as $q):?>
	<?php
		$total_amt=$this->payment->totalAmount($q->id)->row_array();
		$total_bal=$this->balance->totalBalance($q->id)->row_array();
		
	?>
	<tr>
		<td><a href="<?=base_url()?>account/viewById/<?=$q->id?>/<?=$pcode?>"><?=$q->lname."&nbsp;,&nbsp;".$q->fname?></a></td>
		<td><?=($total_amt['amt'] <0 || empty($total_amt['amt'])? 'N/A' : $total_amt['amt']);?></td>
		<td><?=($total_bal <0 || empty($total_bal)? 'N/A' : $total_bal['bal']);?></td>
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
