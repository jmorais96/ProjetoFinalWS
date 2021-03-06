<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 29-11-2018
 * Time: 14:26
 */
//var_dump($movies);
?>

<h1>List of read books</h1>
<table class="table table-bordered table-hover">
	<thead>

	<!--	<div class="row">
		 <div class="col-lg-12">
			<?php //file_get_contents(FCPATH . "upload/prometoFalhar.jpg" , base64_decode($books[0]['image'])); ?>
			 <img src="<?php //echo base_url('upload/prometoFalhar.jpg'); ?>" class="img-fluid">
		</div>
		<div class="col-lg-12">
			<?php //echo validation_errors(); ?>
		</div>
	</div>-->

	<tr>
		<td scope="col" >Name</td>
		<td scope="col" >Author</td>
		<td scope="col" >Description</td>
		<!--<td scope="col" >image</td>-->
		<!--<td scope="col" >View Info</td>-->
	</tr>
	</thead>
	<tbody>
	<?php

	//var_dump($users);
	foreach ($allRead as $oneRead){ ?>
		<tr>
			<td><?php echo  $oneRead['name']  = str_replace('%20', ' ', $oneRead['name']);?></td>
			<td><?php echo  $oneRead['author']  = str_replace('%20', ' ', $oneRead['author']);?></td>
			<td><?php echo  $oneRead['description']  = str_replace('%20', ' ', $oneRead['description']);?></td>
			<!--<td class="col-lg-6" style="width: 100px; height: 100px;">
				<?php //file_put_contents(FCPATH . 'upload/notFound.jpg', base64_decode($book['image'])); ?>
				<img src="<?php //echo base_url('upload/notFound.jpg');?>" class="img-fluid">
			</td>-->
		</tr>
	<?php } ?>
	</tbody>
</table>

<!-- SET READ FORM -->
<?php echo form_open_multipart("Book/setReadValidation", 'role="form" class="form-horizontal"')?>
<div class="row">
	<div class="col-lg-2">
		<?php echo validation_errors(); ?>
	</div>
</div>
<h3 class="col-lg-12" style=color:grey;> Add one book to the read list</h3>
<div class="row">
	<div class="col-lg-3">
		<div class="form-group row">
			<?php echo form_label('MyIdUser', 'myIdUser', array('class' => 'col-lg-3 control-label'))?>
			<div class="col-lg-12">
				<?php echo form_input('myIdUser', set_value('myIdUser'), 'class="form-control"')?>
			</div>
		</div>
	</div>

	<div class="col-lg-3">
		<div class="form-group row">
			<?php echo form_label('IdBook', 'idBook', array('class' => 'col-lg-3 control-label'))?>
			<div class="col-lg-12">
				<?php echo form_input('idBook', set_value('idBook'), 'class="form-control"')?>
			</div>
		</div>
	</div>

	<div class="col-lg-6">
		<p class="text-center">
			<br>
			<button type="submit" class="btn btn-green" style="width: 100%"> Set read</button>
		</p>
	</div>
</div>
<?php echo form_close()?>
<!--<p><a>> See all read books </a><a href="<?php //echo site_url("user/getuserbooks"); ?>" class="greenLink">here</a></p>-->
</div>
<!-- END SET READ FORM -->
