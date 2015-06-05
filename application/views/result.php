<!DOCTYPE html>
<html lang="en">
	<head>	
		<link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
		<script src="<?= base_url();?>bootstrap/js/jquery.js"></script>
		<script src="<?= base_url();?>bootstrap/js/bootstrap.min.js"></script>
	</head>	
	<body>
		<div class="container">
			<?php if(isset($message)){?>
			<div class="row">
				<div class="col-lg-12"><div class="alert alert-success"><?=$message?></div></div>
			</div>
			<?php }?>
			<div class="row">
			<fieldset>
    		<legend>Agencies List</legend>
				<div class="col-lg-12">
			  		<table class="table table-hover table-bordered">
					<tr>
						<td class="text-center"><strong>#</strong></td>
			        	<td><strong>Agency Name</strong></td>
			        	<td><strong>Contact person</strong></td>
			        	<td><strong>Contact phone</strong></td>
			        	<td><strong>Description</strong></td>
			        </tr>
					<?php if(is_array($SUPPLY_AGENCIES) && count($SUPPLY_AGENCIES) ) {
						foreach($SUPPLY_AGENCIES as $loop){
					?>
			        <tr>
			        	<td><?=$loop->supply_chain_agency_id;?></td>
			        	<td><?=$loop->supply_chain_agency;?></td>
			        	<td><?=$loop->contact_person;?></td>
			        	<td><?=$loop->contact_phone;?></td>
			        	<td><?=$loop->comment;?></td>


			        </tr>
					<?php } 
					}?>
					</table>
				</div>
			</fieldset>
        </div>
		</div>
	</body>
</html>