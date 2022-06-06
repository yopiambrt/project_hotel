<footer class="main-footer">
	<div class="float-right d-none d-sm-block">
		<b>Version</b> 3.0.4
	</div>
	<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
	reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/admin'); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/admin'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/admin'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/admin'); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/admin'); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('assets/admin'); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/admin'); ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/admin'); ?>/dist/js/demo.js"></script>
<!-- page script -->
<script>
	$(function() {
		$('.editkamar').on('click', function() {
			const id = $(this).data('id');

			$.ajax({
				url: '<?= site_url('hotel/getDataKamar') ?>',
				data: {
					id: id
				},
				method: 'post',
				dataType: 'json',
				success: function(data) {
					$('#id').val(data.id);
					$('#nama').val(data.nama);
					$('#harga').val(data.harga);
					$('#kapasitas').val(data.kapasitas);
					$('#keterangan').val(data.keterangan);
				}
			});
		});

		$('.editpengunjung').on('click', function() {
			const id = $(this).data('id');

			$.ajax({
				url: '<?= site_url('hotel/getDataPengunjung') ?>',
				data: {
					id: id
				},
				method: 'post',
				dataType: 'json',
				success: function(data) {
					$('#no_ktp').val(data.no_ktp);
					$('#nama_pengunjung').val(data.nama_pengunjung);
					$('#no_telp').val(data.no_telp);
					$('#alamat').val(data.alamat);
				}
			});
		});

		$('.edittransaksi').on('click', function() {
			const id = $(this).data('id_transaksi');

			$.ajax({
				url: '<?= site_url('hotel/getDataTransaksi') ?>',
				data: {
					id: id
				},
				method: 'post',
				dataType: 'json',
				success: function(data) {
					$('#id_pengunjung').val(data.id_pengunjung);
					$('#id_kamar').val(data.id_kamar);
					$('#tgl_masuk').val(data.tgl_masuk);
					$('#tgl_keluar').val(data.tgl_keluar);
					$('#status').val(data.status);
					console.log(data);
				}
			});
		});


	});
</script>
</body>

</html>
