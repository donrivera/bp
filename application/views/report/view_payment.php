<?
//$this->load->model('paddler_code','',TRUE);
//$this->load->model('status_code','',TRUE);
?>
<br/>
	
<table border="1" width="70%">
	<tr>
		<td>First Name</td>
		<td>Last  Name</td>
		<td>Amount</td>
		<td>Date</td>
	</tr>
	<? if($queries < 0 || empty($queries)):?>
	<tr>
		<td>No Result Found...</td>
	</tr>
	<?else:?>
	<?php foreach($queries as $q):?>
	<tr>
		<td><?=$q->fname?></td>
		<td><?=$q->lname?></td>
		<td><?=$q->amount?></td>
		<td><?=$q->date_of_payment?></td>
	</tr>
	<?php endforeach;?>
	<? endif;?>
</table>
