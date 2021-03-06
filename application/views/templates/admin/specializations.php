 <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
   			<?php 
   				if($this->session->flashdata('success_message') OR $this->session->flashdata('delete_message'))
   				{
   				?>
   				<!-- <div class=""></div> -->
   				<p class="alert <?= ($this->session->flashdata('delete_message') ? 'alert-danger' : 'alert-success') ?> alert-dismissable fade in text-center top-height"><?php if($this->session->flashdata('success_message')) {echo $this->session->flashdata('success_message');} elseif($this->session->flashdata('delete_message')) {echo $this->session->flashdata('delete_message');}else{ echo '';} ?>
   					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				</p>
   				<?php
   				}
   				?>
            <h1 class="page-header"><?= $layout_title; ?></h1>
             </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
			<!-- Add Category Button -->
			<div class="form-group text-left">
				<a href="<?= site_url('a/doctor_specialization/add_doctor_specialization'); ?>" class="btn btn-success">Add New</a>
			</div>
     <?php if(!empty($specializations)): ?>
			<table class="table table-bordered table-striped">
				<col width="50">
  				<col width="220">
  				<col width="20">
			    <thead>
			    	<tr>
			    		<th>Specialization</th>
			    		<th>Detail</th>
			    		<th>Actions</th>
			    	</tr>
			    </thead>
			    <tbody>
			    <?php foreach ($specializations as $specialization): ?>
			    	<tr>
			   			<td><?= ucwords($specialization->name); ?></td>
			   			<?php $detail = ucwords(entity_decode($specialization->detail)); 
			   			$detail = (strlen($detail) > 125) ? substr($detail,0,120).'.....' : $detail; ?>
			   			<td><?= $detail; ?></td>
			   			<td>
			   				<a href="<?= site_url('a/doctor_specialization/edit_doctor_specialization') . '/' . $specialization->id; ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
							<a href="javascript:void(0)" onclick="getModal(<?= $specialization->id; ?>, 'delete', 'doctor_specialization')" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove-sign"></span></a>
			   				<a href="javascript:void(0)" onclick="getModal(<?= $specialization->id; ?>, 'view', 'doctor_specialization')" class="btn btn-sm btn-info"><span class="fa fa-eye"></span></a>
			   			</td>
			   		</tr>
				<?php endforeach; ?>
			    </tbody>
  			</table>
  		<?php endif; ?>
  			<?= $links ?>
		</div>
		
		<!-- <div class="col-lg-2"></div> -->
		</div>
    </div>

</div> <!-- /.row  -->