<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1> Data Room Hotel Mulya</h1>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Title</h3>

				<div class="card-tools">
					<a href="<?= base_url() ?>index.php/hotel/tambahTransaksi" class="btn btn-info">
						<i class="fas fa-plus"></i>Tambah Data</a>

				</div>
			</div>
			<div class="card-body">
				<table class="table table-hover" id="datatable">
					<thead>
						<tr>
							<th scope="col">Nama Pengunjung</th>
							<th scope="col">Nama Kamar</th>
							<th scope="col">Tanggal Masuk</th>
							<th scope="col">Tanggal Keluar</th>
							<th scope="col">Status</th>
							<th class="text-center" colspan="2" scope="col">Tindakan</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($transaksi as $data) : ?>
							<tr>
								<td><?= ucwords($data['nama_pengunjung']) ?></td>
								<td><?= ucwords($data['nama']) ?></td>
								<td><?= $data['tgl_masuk'] ?></td>
								<td><?= $data['tgl_keluar'] ?></td>
								<td><?= ucwords($data['status']) ?></td>
								<td class="text-center"><a class='btn btn-primary display-4 text-white edittransaksi' data-toggle="modal" data-target="#editTransaksi" data-id_transaksi="<?= $data['id_transaksi'] ?>">Edit</a>
									<a class='btn btn-warning display-4 text-white' href="<?= site_url('hotel/deleteTransaksi') ?>/<?= $data['id_transaksi'] ?>" onclick="return confirm('Apakah anda akan menghapus data ?')">Hapus</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<!-- /.card-footer-->
		</div>
		<!-- /.card -->
	</section>
</div>

<div class="modal fade" id="editTransaksi" tabindex="-1" aria-labelledby="editTransaksiLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editTransaksiLabel">Edit Data Kamar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open('hotel/tambahTransaksi'); ?>
				<div class="form-group">
					<label>Nama Pengunjung :</label>
					<?php
					foreach ($pengunjung as $data) {
						$options[$data['id']] = ucwords($data['nama_pengunjung']);
					}
					$pilih1 = set_value('id_pengunjung');
					echo form_dropdown('id_pengunjung', $options, $pilih1, 'class="custom-select" id="id_pengunjung"');
					?>
					<label>Tipe Kamar :</label>
					<?php
					foreach ($kamar as $data) {
						$opsi[$data['id']] = ucwords($data['nama']);
					}
					$pilih2 = set_value('id_kamar');
					echo form_dropdown('id_kamar', $opsi, $pilih2, 'class="custom-select" id="id_kamar"');
					?>
					<label>Tanggal Masuk :</label> <?php echo form_error('tgl_masuk'); ?>
					<input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk">
					<label>Tanggal Keluar</label> <?php echo form_error('tgl_keluar'); ?>
					<input type="date" class="form-control" name="tgl_keluar" id="tgl_keluar">
					<label>Status :</label>
					</br>
					<?php
					$status = array(
						'Belum Checkin' => 'Belum Checkin',
						'Checkin' => 'Checkin',
						'Checkout' => 'Checkout'
					);
					$pilih3 = set_value('status');
					echo form_dropdown('status', $status, $pilih3, 'class="form-control" id="status"');
					?>
					</br>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
				<?= form_close() ?>
			</div>
			<?php
			echo form_close();
			?>
		</div>
	</div>
</div>
