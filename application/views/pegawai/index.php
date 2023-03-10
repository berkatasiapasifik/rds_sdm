<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<h4 class="box-title"></h4>
			</div>
			<div class="box-body">
				<div class="col-md-12" style="margin-bottom: 10px;">
					<a class="btn btn-default" href="<?php echo base_url();?>pegawai/tambah">Tambah Ijin</a>
				</div>
				<div class="col-md-12" style="margin-top:10px;">
					<div class="table-responsive">
						<table class="table table-bordered" id="tbl_pegawai">
							<thead>
								<tr>
									<th class="text-uppercase text-center" style="width:150px;">Kode Pegawai</th>
									<th class="text-uppercase text-center" style="width:250px;">NIP</th>
									<th class="text-uppercase text-center" style="width:90px;">Nama</th>
									<th class="text-uppercase text-center" style="width:95px;">Jenis Kelamin</th>
									<th class="text-uppercase text-center">Tempat lahir</th>
									<th class="text-uppercase text-center">Tanggal lahir</th>
									<th class="text-uppercase text-center">Agama</th>
									<th class="text-uppercase text-center">Status</th>
									<th class="text-uppercase text-center">Pendidikan</th>
									<th class="text-uppercase text-center">alamat</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($pegawai as $p):?>
									<tr>
										<td><?php echo $p->id;?></td>
										<td><?php echo $p->nip;?></td>
										<td><?php echo $p->nama;?></td>
										<td><?php echo $p->jenis_kel;?></td>
										<td><?php echo $p->ttl;?></td>
										<td><?php echo $p->tanggal_lahir;?></td>
										<td><?php echo $p->agama;?></td>
										<td><?php echo $p->status;?></td>
										<td><?php echo $p->pendidikan;?></td>
										<td><?php echo $p->alamat;?></td>
									</tr>
								<?php endforeach;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(function(){
	$('#tbl_produk').DataTable({
		'ordering':false
	});
});
</script>