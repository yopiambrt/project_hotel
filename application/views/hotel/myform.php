<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1> Tambah Data Kamar Hotel Mulya</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo site_url('login/logout'); ?>">Logout</a></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<?php echo form_open('hotel/inputForm'); ?>

		<!-- Default box -->
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Formulir Room</h3>
			</div>

			<!-- /.card-header -->
			<!-- form start -->
			<div class="card-body">

				<div class="form-group">
					<label>Kode Room :</label> <?php echo form_error('id'); ?>
					<?= form_input('id', set_value('id'), 'class = "form-control"') ?>
					<label>Nama Room :</label> <?php echo form_error('nama'); ?>
					<?php echo form_input('nama', set_value('nama'), 'class = "form-control"') ?>
					<label>Harga Room :</label> <?php echo form_error('harga'); ?>
					<?php echo form_input('harga', set_value('harga'), 'class = "form-control"') ?>
					<label>Kapasitas :</label> <?php echo form_error('kapasitas'); ?>
					<?php echo form_input('kapasitas', set_value('kapasitas'), 'class = "form-control"') ?>
					<label>Keterangan :</label> <?php echo form_error('keterangan'); ?>
					</br>
					<?php
					$settextarea = array(
						'name' => 'keterangan',
						'rows' => '4',
						'cols' => '50',
						'value' => set_value('keterangan'),
						'class' => 'form-control'
					);
					echo form_textarea($settextarea) ?>
					</br>
					<?php
					echo form_submit('submit', 'Submit', "class='btn btn-primary'");
					echo form_close();
					?>
				</div>
			</div>
			<!-- /.card-body -->
		</div>
		<div class="card-footer">
		</div>
		<!-- /.card -->

	</section>

</div>
