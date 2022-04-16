<?php
class userPage extends MY_Controller{

    function listPegawai(){
        $data['title'] = 'Beranda Pegawai';
        $this->renderAdmin("page/pegawai/index.php",$data);
    }
    function addPegawai(){
    	$nama = securepost("nama",TRUE);
    	$nip = securepost("nip",TRUE);
    	$pass = md5(securepost("password",TRUE));
    	$check = crud_selwhere("users",NULL,"username = '$nip'");
    	if ($check['count'] > 0){
    		echo "2";
		}
    	else
		{
			$insert = crud_insert("users","'','$nama','$nip','$pass','pegawai'");
			if ($insert)
			{
				echo "1";
			}
		}

	}
	function dataPegawai(){
    	$data['pegawai'] = crud_selwhere("users",NULL,"id_data > 0");
    	$this->load->view("page/pegawai/viewholder/data-pegawai",$data);
	}
	function deletePegawai(){
    	$id = securepost("id",TRUE);
    	$delete = crud_delete("users","id_data = '$id'");
    	if ($delete){
    		echo "1";
		}
	}
}

?>
