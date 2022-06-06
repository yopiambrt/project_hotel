<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1> Data Kamar Hotel Mulya</h1>
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
							<th scope="col">Kode</th>
							<th scope="col">Nama</th>
							<th scope="col">Harga</th>
							<th scope="col">Kapasitas</th>
							<th scope="col">Fasilitas</th>
							<th class="text-center" colspan="2" scope="col">Tindakan</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($kamar as $data) : ?>
							<tr>
								<td><?= $data['id'] ?></td>
								<td><?= $data['nama'] ?></td>
								<td><?= $data['harga'] ?></td>
								<td><?= $data['kapasitas'] ?></td>
								<td><?= $data['keterangan'] ?></td>
								<td class="text-center"><a class='btn btn-primary display-4 text-white editkamar' data-toggle="modal" data-target="#editKamar" data-id="<?= $data['id'] ?>">Edit</a>
									<a class='btn btn-warning display-4 text-white' href="<?= site_url('hotel/deletekamar') ?>/<?= $data['id'] ?>" onclick="return confirm('Apakah anda akan menghapus data ?')">Hapus</a>
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

<div class="modal fade" id="editKamar" tabindex="-1" aria-labelledby="editKamarLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editKamarLabel">Edit Data Kamar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open('hotel/updateKamar', 'id = "formKamar"'); ?>
				<div class="form-group">
					<label>Kode Room :</label>
					<?= form_input('id', set_value('id'), 'class = "form-control" id="id"') ?>
					<label>Nama Room :</label>
					<?php echo form_input('nama', set_value('nama'), 'class = "form-control" id="nama"') ?>
					<label>Harga Room :</label>
					<?php echo form_input('harga', set_value('harga'), 'class = "form-control" id="harga"') ?>
					<label>Kapasitas :</label>
					<?php echo form_input('kapasitas', set_value('kapasitas'), 'class = "form-control" id="kapasitas"') ?>
					<label>Keterangan :</label>
					</br>
					<?php
					$settextarea = array(
						'name' => 'keterangan',
						'rows' => '4',
						'cols' => '50',
						'value' => set_value('keterangan'),
						'class' => 'form-control',
						'id' => 'keterangan'
					);
					echo form_textarea($settextarea) ?>
					</br>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
			<?php
			echo form_close();
			?>
		</div>
	</div>
</div>
