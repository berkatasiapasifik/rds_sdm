<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-body">
				<form action="./savedata" method="POST">
					<div class="col-md-12">
						<div class="col-md-2">
							<label class="text-uppercase">Id</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="id">
						</div>
					</div>
					<div class="col-md-12" style="margin-top:10px;">
						<div class="col-md-2">
							<label class="text-uppercase">Nama</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="nama">
						</div>
					</div>
                    <div class="col-md-12" style="margin-top:10px;">
						<div class="col-md-2">
							<label class="text-uppercase">Dinas</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="dinas" >
						</div>
					</div>
                    <div class="col-md-12" style="margin-top:10px;">
						<div class="col-md-2">
							<label class="text-uppercase">Durasi</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="durasi" >
						</div>
					</div>
                    <div class="col-md-12" style="margin-top:10px;">
						<div class="col-md-2">
							<label class="text-uppercase">Hari</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="hari" >
						</div>
                        <div class="col-md-12" style="margin-top:10px;">
						<div class="col-md-2">
							<label class="text-uppercase">Alasan</label>
						</div>
			</div>
            <div class="col-md-12" style="margin-top:10px;">
						<div class="text-center">
							<button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Simpan</button>
						</div>	
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$("form#form-pegawai").submit(function(e) {
    e.preventDefault();    

    var conf = confirm("Apakah anda yakin ingin menyimpan ini ?");

    if(conf == true){
    	var formData = new FormData(this);

	    $.ajax({
	        url: './savedata',
	        type: 'POST',
	        data: formData,
	        cache: false,
	        contentType: false,
	        processData: false,
	        beforeSend:function(){
	        	$('#alert-pegawai').html('<div class="alert alert-warning"><i class="fa fa-spinner fa-spin"></i> Menyimpan data...</div>');
	        },
	        success: function (data) {

	          	$('#alert-pegawaii').html(data);
	          	 
	        },
	        error:function(xhr){
	        	$('#alert-pegawai').html(xhr.responseText);
	        }
	    });
    }
});
</script>