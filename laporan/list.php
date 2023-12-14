<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}

$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "forsas";
$koneksi    = mysqli_connect($host, $user, $password, $database);
	
// include('../conn.php');
// $db = new database();
// $data_laporan = $db->tampil_laporan();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="icon" href="../logo/Untitled-1.png"/>
    <title>Report List | forSAS</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/"> -->

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<!-- <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3"> -->


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .scroll{
        height:400px;
        overflow:scroll;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.css" rel="stylesheet">
  </head>
  <body>
    


<main>
<div class="flex-shrink-0 p-3 " style="width: 200px;height: 800px;px;background-color:gainsboro">
    <a href="../home.php" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
      <img src="../logo/telkom.png" style="width:100px">
    </a>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          Kantor Cabang
        </button>
        <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="../kantor/input.php" class="link-dark rounded">Input Kantor</a></li>
            <li><a href="../kantor/list.php" class="link-dark rounded">List Kantor</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Laporan
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="../laporan/input.php" class="link-dark rounded">Input Laporan</a></li>
            <li><a href="../laporan/list.php" class="link-dark rounded">List Laporan</a></li>
          </ul>
        </div>
      </li>
      
      <li class="border-top my-5"></li>
      <li class="mb-1">
      <a class="btn btn-outline-danger btn-sm" href="../logout.php" role="button">Logout</a>
      </li>
    </ul>
  </div>

<br>
<div class="container">
<br>
<br>
<h3>List Laporan</h3>
 <hr>
      <form class="d-flex" action="list.php" method="GET" >
        <input class="form-control"  style="width:20%"  name="cari" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <div class="col">
         <a class="btn btn-success" href="cetaksemua.php" target="_blank" role="button" style="margin-left:80%"><i class="fas fa-print"></i>Cetak Semua</a>
        </div>
      </form>
      <br>
      <figcaption class="blockquote-footer">
      Input Kode Laporan 
      </figcaption>
      <br>
      

<div class="scroll">
<table class="table caption-top table-hover table-responsive">
  
  <thead class="table-light" style="font-size:12px">
    <tr>
    <th scope="col">Kode Laporan</th>
              <th scope="col">Nama Kantor</th>
              <th scope="col">Tanggal Laporan</th>
              <th scope="col">Waktu</th>
              <th scope="col">Nama Pelapor</th>
              <th scope="col">Kondisi Pelapor</th>
              <th scope="col">Mesin Tempel</th>
              <th scope="col">Perahu Karet</th>
              <th scope="col">Tenda</th>
              <th scope="col">Pompa</th>
	            <th scope="col">PLN</th>
              <th scope="col">Genset PLN</th>
              <th scope="col">Genset Pompa</th>
              <th scope="col">Genangan Air</th>
              <th scope="col">BBM</th>
              <th scope="col">Kapasitas</th>
              <th scope="col">Catudaya</th>
              <th scope="col">Cuaca</th>
              <th scope="col">Suhu Central</th>
              <th scope="col">Suhu Transmisi</th>
              <th scope="col">Suhu Rectifier</th>
              <th scope="col">Image</th>
              <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
$conn= mysqli_connect('localhost','root','','forsas');
$batas= 3;
if(isset($_GET['page'])){
  $page= $_GET['page'];
}else{
  $page=1;
}
if ($page> 1){
  $start = ($page * $batas) - $batas;
}else{
  $start = 0;
}
if(isset($_GET['cari'])){
  $search=$_GET['cari'];
  $sql="SELECT * FROM kantor INNER JOIN laporan on kantor.id=laporan.id_kantor LIMIT $start, $batas  ";
  $sql="SELECT * FROM kantor INNER JOIN laporan on kantor.id=laporan.id_kantor where id_laporan  LIKE '%$search%'";
}else{
  $sql="SELECT * FROM kantor INNER JOIN laporan on kantor.id=laporan.id_kantor LIMIT $start, $batas  ";
  $search="";
}
$result=mysqli_query($conn, $sql);
?>
<!-- 
  // $no=1;
  // foreach($data_laporan as $dl){ -->
  
    <tr>
    <?php
   
    while($d=mysqli_fetch_object($result)){
      ?>
    
      <th scope="row"><?php echo $d->id_laporan; ?></th>
      <td><?php echo $d->nama_kantor; ?></td>
      <td><?php echo $d->tgl_laporan; ?></td>
      <td><?php echo $d->waktu; ?></td>
      <td><?php echo $d->nama_pelapor; ?></td>
      <td><?php echo $d->kondisi; ?></td>
      <td><?php echo $d->mesin_tempel; ?></td>
      <td><?php echo $d->perahu_karet; ?></td>
      <td><?php echo $d->tenda; ?></td>
      <td><?php echo $d->pompa; ?></td>
      <td><?php echo $d->pln; ?></td>
      <td><?php echo $d->genset_pln; ?></td>
      <td><?php echo $d->genset_pompa; ?></td>
      <td><?php echo $d->genangan_air; ?></td>
      <td><?php echo $d->bbm; ?></td>
      <td><?php echo $d->kapasitas; ?></td>
      <td><?php echo $d->catudaya; ?></td>
      <td><?php echo $d->cuaca; ?></td>
      <td><?php echo $d->suhu_central; ?></td>
      <td><?php echo $d->suhu_trans; ?></td>
      <td><?php echo $d->suhu_rect; ?></td>
      <td><?php echo "<img src='../images/$d->foto' width='70' height='90' />";?></td>
      <td>
      <a href="cetaksatu.php?id=<?php echo $d->id_laporan; ?>" target="_blank"><i class="fas fa-print"></i></a>
      </td>
     
    </tr>
    
    <?php
  }
    ?>
    
   
  </tbody>
</table>


</div>
<?php
$dt=mysqli_query($koneksi,"SELECT * FROM  laporan");
$jmlBaris= mysqli_num_rows($dt);
$halaman= ceil($jmlBaris/$batas);

for ($i=1;$i<=$halaman;$i++){
  echo "<a role='button' href='?page=$i'>$i</a>";
}
?>

</div>
</main>




    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/243d5afe8a.js" crossorigin="anonymous"></script>
      <script src="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.js"></script>
  </body>
</html>
