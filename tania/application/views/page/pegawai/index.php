<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="text-white" >Beranda Pegawai</h4>
            </div>
            <div class="card-body">
                <div class="row">
					<div class="col-md-12" style="margin-bottom: 20px;">
						<button class="btn btn-primary" data-toggle="modal" data-target="#addPegawai">Tambah Pegawai</button>
					</div>
                    <div class="col-md-12">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nip</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
							<tbody class="data-pegawai">

							</tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" tabindex="-1" id="addPegawai">
	<div class="modal-dialog" role="dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Tambah Pegawai</h4>
			</div>
			<div class="modal-body">
				<form class="addPegawai">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" required name="nama">
					</div>
					<div class="form-group">
						<label>NIP</label>
						<input type="text" class="form-control" required name="nip">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="Password" class="form-control" name="password">
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
	    reloadPegawai();
		$(".addPegawai").submit(function(e){
		    $("#addPegawai").modal("hide")
		    e.preventDefault();
			const data = $(this).serialize();
			ajax.ajaxPost(
			    "<?=base_url()?>add-pegawai",
				data,
				function (res) {
					if (res === "1"){
                        swal.fire({
                            title:"Berhasil",
                            icon:"success",
                            html:"Berhasil Menambah Data"
                        });
                        reloadPegawai();
					}
					 else if(res === "2"){
                        swal.fire({
                            title:"Gagal",
                            icon:"error",
                            html:"Data Telah Ada"
                        });
					}
					else
					{
                        swal.fire({
                            title:"Gagal",
                            icon:"error",
                            html:"Terjadi Kesalahan"
                        });
					}
                }
			)
		}) ;
		function reloadPegawai(){
			ajax.ajaxGet(
			    "<?=base_url()?>data-pegawai",
				function(res){
			        $(".data-pegawai").html(res);
				}
			)
		}
	});
</script>
