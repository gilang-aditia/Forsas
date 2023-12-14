<?php 

$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "forsas";
$koneksi    = mysqli_connect($host, $user, $password, $database);

        $kode_laporan=$_POST['kode'];
        $id_kantor=$_POST['id_kantor'];
        $tgl=$_POST['tgl'];
        $mesin_tempel=$_POST['mesin_tempel'];
        $perahu_karet=$_POST['perahu_karet'];
        $tenda=$_POST['tenda'];
        $pompa=$_POST['pompa'];
        $genangan=$_POST['genangan'];
        $bbm=$_POST['bbm'];
        $suhu_cent=$_POST['suhu_cent'];
        $suhu_trans=$_POST['suhu_trans'];
        $suhu_rec=$_POST['suhu_rec'];
        $kapasitas=$_POST['kapasitas'];
        $catudaya=$_POST['catudaya'];
        $cuaca=$_POST['cuaca'];
        $pln=$_POST['pln'];
        $genset_pln=$_POST['genset_pln'];
        $genset_pompa=$_POST['genset_pompa'];
        $pelapor=$_POST['pelapor'];
        $kondisi_pelapor=$_POST['kondisi_pelapor'];
        $filename = $_FILES['image']['name'];
        
        if ($filename!=""){
            $ekstensi=array('png','jpg');
            $x=explode('.',$filename);
            $ekst= strtolower(end($x));
            $file_temp=$_FILES['image']['tmp_name'];
            $rand=rand(1,999);
            $xx=$rand.'-'.$filename;
            if (in_array($ekst,$ekstensi)===true){
                move_uploaded_file($file_temp, '../images/'. $xx);
                $query= "INSERT INTO laporan (id_laporan,
                    id_kantor,tgl_laporan,mesin_tempel,perahu_karet,
                    tenda,pompa,genset_pln,bbm,kapasitas,genangan_air,catudaya,cuaca,pln,genset_pompa,
                    suhu_central,suhu_trans,suhu_rect,nama_pelapor,kondisi,foto)
                 VALUES ('$kode_laporan',
                    '$id_kantor',
                    '$tgl',
                    '$mesin_tempel',
                    '$perahu_karet',
                    '$tenda',
                    '$pompa',
                    '$genset_pln',
                    '$bbm',
                    '$kapasitas',
                    '$genangan',
                    '$catudaya',
                    '$cuaca',
                    '$pln',
                    '$genset_pompa',
                    '$suhu_cent',
                    '$suhu_trans',
                    '$suhu_rec',
                    '$pelapor',
                    '$kondisi_pelapor',
                    '$xx')";
                    $result=mysqli_query($koneksi,$query);
                    if(!$result){
                        die("Querry error".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
                    }else{
                        echo "<script>alert('Berhasil input laporan (kode: $kode_laporan)');window.location='list.php'</script>";
                    }
            }else{
                echo "<script>alert('Ekstensi salah, hany dapat .png dan.jpg');window.location='input.php';</script>";
            }
        }
    
?>