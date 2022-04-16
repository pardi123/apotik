<?php
if ($pegawai['count'] > 0){
	$i=0;
	foreach ($pegawai['multi'] as $p){
		$i++;
		?>
			<tr>
				<td><?=$i?></td>
				<td><?=$p->nama?></td>
				<td><?=$p->username?></td>
				<td>
					<button class="btn btn-primary">Edit</button>
					<button class="btn btn-danger delete-pegawai" id_data="<?=$p->id_data?>" >Hapus</button>
				</td>
			</tr>
		<script>
			$(document).ready(function(){
			   $(".delete-pegawai").click(function(e){
			       e.preventDefault();
			       const id = {"id":$(this).attr("id_data")};
			       ajax.ajaxPost(
			           "<?=base_url()?>delete-pegawai",
					   id,
					   function (res) {
						   if (res === "1"){
                               swal.fire({
                                   title:"Berhasil",
                                   icon:"success",
                                   html:"Berhasil Menghapus Data"
                               });
                               reloadPegawai();
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
			   })
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
		<?php
	}
}
