<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1> Tambah Data Transaksi Hotel Mulya</h1>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<?php echo form_open('hotel/tambahTransaksi'); ?>

		<!-- Default box -->
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Formulir Room</h3>
			</div>

			<!-- /.card-header -->
			<!-- form start -->
			<div class="card-body">

				<div class="form-group">
					<label>Nama Pengunjung :</label>
					<?php
					foreach ($pengunjung as $data) {
						$options[$data['id']] = ucwords($data['nama_pengunjung']);
					}
					$pilih1 = set_value('id_pengunjung');
					echo form_dropdown('id_pengunjung', $options, $pilih1, 'class="custom-select"');
					?>
					<label>Tipe Kamar :</label>
					<?php
					foreach ($kamar as $data) {
						$opsi[$data['id']] = ucwords($data['nama']);
					}
					$pilih2 = set_value('id_kamar');
					echo form_dropdown('id_kamar', $opsi, $pilih2, 'class="custom-select"');
					?>
					<label>Tanggal Masuk :</label> <?php echo form_error('tgl_masuk'); ?>
					<input type="date" class="form-control" name="tgl_masuk">
					<label>Tanggal Keluar</label> <?php echo form_error('tgl_keluar'); ?>
					<input type="date" class="form-control" name="tgl_keluar">
					<label>Status :</label>
					</br>
					<?php
					$status = array(
						'Belum Checkin' => 'Belum Checkin',
						'Checkin' => 'Checkin',
						'Checkout' => 'Checkout'
					);
					$pilih3 = set_value('status');
					echo form_dropdown('status', $status, $pilih3, 'class="form-control"');
					?>
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
