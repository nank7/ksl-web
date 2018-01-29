
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Detail Pesan</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Detail Pesan</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">
						Detail Pesan
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body timeline-container">
            <dl class="dl-horizontal">
              <dt>Nama</dt>
              <dd><strong><?= $pesan->nama_user ?></strong></dd>
              <br>
              <dt>Email</dt>
              <dd><strong><?= $pesan->email_user ?></strong></dd>
              <br>
              <dt>Waktu</dt>
              <dd><strong><?= $pesan->waktu_pesan ?></strong></dd>
              <br>
              <dt>Isi</dt>
              <dd><?= $pesan->isi_pesan ?></dd>
              <br>
              <dt>Action</dt>
              <dd>
								<?= form_open('admin-message/delete', ['class' => 'pull-left']) ?>
								<?= form_hidden('id_pesan', $pesan->id_pesan) ?>
								<?= form_submit(null, 'Hapus', ['class' => 'btn btn-danger']) ?>
								<?= form_close() ?>
              </dd>
            </dl>
					</div>
				</div>

			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->


<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>
