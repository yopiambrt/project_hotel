<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1> Data Pengunjung Hotel Mulya</h1>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Data Kamar</h3>
			</div>
			<div class="card-body">
				<table class="table table-hover" id="datatable">
					<thead>
						<tr>
							<th scope="col">Nomor KTP</th>
							<th scope="col">Nama</th>
							<th scope="col">Nomor Telepon</th>
							<th scope="col">Alamat</th>
							<th class="text-center" colspan="2" scope="col">Tindakan</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($pengunjung as $data) : ?>
							<tr>
								<td><?= $data['no_ktp'] ?></td>
								<td><?= $data['nama_pengunjung'] ?></td>
								<td><?= $data['no_telp'] ?></td>
								<td><?= $data['alamat'] ?></td>
								<td class="text-center"><a class='btn btn-primary display-4 text-white editpengunjung' data-toggle="modal" data-target="#editPengunjung" data-id="<?= $data['id'] ?>">Edit</a>
									<a class='btn btn-warning display-4 text-white' href="<?= site_url('hotel/deletepengunjung') ?>/<?= $data['id'] ?>" onclick="return confirm('Apakah anda akan menghapus data ?')">Hapus</a>
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

<div class="modal fade" id="editPengunjung" tabindex="-1" aria-labelledby="editPengunjungLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editPengunjungLabel">Edit Data Pengunjung</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
				$hidden = array('id' => $data['id']);
				echo form_open('hotel/updatePengunjung', 'id="formPengunjung"', $hidden); ?>
				<div class="form-group">
					<label>Nomor KTP :</label>
					<?= form_input('no_ktp', set_value('no_ktp'), 'class = "form-control" id = "no_ktp"') ?>
					<label>Nama :</label>
					<?php echo form_input('nama_pengunjung', set_value('nama_pengunjung'), 'class = "form-control" id = "nama_pengunjung"') ?>
					<label>Nomor Telepon :</label>
					<?php echo form_input('no_telp', set_value('no_telp'), 'class = "form-control" id = "no_telp"') ?>
					<label>Alamat :</label>
					</br>
					<?php
					$settextarea = array(
						'name' => 'alamat',
						'rows' => '4',
						'cols' => '50',
						'value' => set_value('alamat'),
						'class' => 'form-control',
						'id' => 'alamat'
					);
					echo form_textarea($settextarea) ?>
					</br>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
				<?php
				echo form_close();
				?>
			</div>
		</div>
	</div>
</div>
