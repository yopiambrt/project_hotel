<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1> Tambah Pengunjung Hotel Mulya</h1>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<?php echo form_open('hotel/inputPengunjung'); ?>

		<!-- Default box -->
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Formulir Pengunjung</h3>
			</div>

			<!-- /.card-header -->
			<!-- form start -->
			<div class="card-body">

				<div class="form-group">
					<label>Nomor KTP :</label> <?php echo form_error('no_ktp'); ?>
					<?= form_input('no_ktp', set_value('no_ktp'), 'class = "form-control"') ?>
					<label>Nama :</label> <?php echo form_error('nama_pengunjung'); ?>
					<?php echo form_input('nama_pengunjung', set_value('nama_pengunjung'), 'class = "form-control"') ?>
					<label>Nomor Telepon :</label> <?php echo form_error('no_telp'); ?>
					<?php echo form_input('no_telp', set_value('no_telp'), 'class = "form-control"') ?>
					<label>Alamat :</label> <?php echo form_error('alamat'); ?>
					</br>
					<?php
					$settextarea = array(
						'name' => 'alamat',
						'rows' => '4',
						'cols' => '50',
						'value' => set_value('alamat'),
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
