<?php echo form_open_multipart("User/addUserValidation", 'role="form" class="form-horizontal"')?>

    <div class="row">
        <div class="col-lg-12">
            <?php echo validation_errors(); ?>
        </div>
    </div>

<h2 style=color:grey;> New user's registration</h2>
<div class="row">
	<div class="col-lg-12">
		<div class="form-group row">
			<?php echo form_label('MyIdUser', 'myIdUser', array('class' => 'col-lg-3 control-label'))?>
			<div class="col-lg-12">
				<?php echo form_input('myIdUser', set_value('myIdUser'), 'class="form-control"')?>
			</div>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group row">
			<?php echo form_label('IdProfile', 'idProfile', array('class' => 'col-lg-3 control-label'))?>
			<div class="col-lg-12">
				<?php echo form_input('idProfile', set_value('idProfile'), 'class="form-control"')?>
			</div>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group row">
			<?php echo form_label('Name', 'name', array('class' => 'col-lg-3 control-label'))?>
			<div class="col-lg-12">
				<?php echo form_input('name', set_value('name'), 'class="form-control"')?>
			</div>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group row">
			<?php echo form_label('Email', 'email', array('class' => 'col-lg-3 control-label'))?>
			<div class="col-lg-12">
				<?php echo form_input('email', set_value('email'), 'class="form-control"')?>
			</div>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group row">
			<?php echo form_label('Pass', 'pass', array('class' => 'col-lg-3 control-label'))?>
			<div class="col-lg-12">
				<?php echo form_input('pass', set_value('pass'), 'class="form-control"')?>
			</div>
		</div>
	</div>
	<div class="col-lg-12">
		<div class="form-group row">
			<?php echo form_label('BirthDate', 'birthDate', array('class' => 'col-lg-3 control-label'))?>
			<div class="col-lg-12">
				<?php echo form_input('birthDate', set_value('birthDate'), 'class="form-control"')?>
			</div>
		</div>
	</div>

	<div class="col-lg-12">
		<p class="text-center">
			<br>
			<button type="submit" class="btn btn-green" style="width: 100%"> Add User</button>
		</p>
	</div>
</div>
<?php echo form_close()?>
