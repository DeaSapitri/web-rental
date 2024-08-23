<?php
session_start();

?>

<!DOCTYPE html>
<html>
<>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create a right-aligned (split) link inside the navigation bar */
.topnav a.split {
  float: right;
  background-color: #04AA6D;
  color: white;
}

body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("mercedes7.webp");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}

* {
      margin: 0;
      padding: 0;
    }

    body {
      width: 100vw;
      height: 100vh;
    }

    .section {
      width: 100vw;
      height: 40vh;
      background-color: #faf8f8;
      font-size: 15px;
      color: white;
      text-align: center;
      margin: 10px 5px;
    }

    .one,
    .three {
      background-color: #fcfafa;
    }

    .nav {
      width: 100vw;
      height: 40vh;
      background-color: #f8f8f9;
      font-size: x-large;
      color: white;
      text-align: center;
      margin: 10px 5px;
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      place-items: center;
    }

    .btn {
      color: white;
      background-color: #38CC77;
      height: 40px;
      width: 90px;
      padding: 2px;
      border: 2px solid black;
      text-decoration: none;
    }

</style>
<script>
  function confirmLogout(event) {
    event.preventDefault();
    var confirmLogout = confirm("Apakah Anda yakin ingin logout?");
    if (confirmLogout) {
      window.location.href = event.target.href;
    }
  }
</script>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="datamobil.html">Data Mobil</a>
  <a href="datacostumer.html">Data Costumer</a>
  <a href="tambah_transaksi.php">Data Transaksi</a>
  <?php
  if (isset($_SESSION['username'])) {

    echo '<a href="logout.php" onclick="confirmLogout(event)"> <i data-feather="log-out"></i> Logout</a>';
  } else{
    
    echo '<a href="login.php"> <i data-feather="log-in"></i> Login</a>';
  }
  ?>
</div>

<div style="padding-left:16px">
  <h2>Rental Dea</h2>
</div>

<div class="bg-image"></div>

<div class="bg-text">
  <h2>hallo aku deaaa</h2>
  <h1 style="font-size:50px">welcome in rent cars</h1>
  <p>pelayanan terbaik</p>
</div>
   <div class="nav">
    <a href="datamobil.html" class="btn">Data Mobil</a>
    <a href="datacostumer.html" class="btn">Data Costumer</a>
    <a href="login.php" class="btn">Login</a>
  </div>
  <div class="section one" id="section1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      * {
        box-sizing: border-box;
      }
    
    body {
    font-family: Arial, Helvetica, sans-serif;
    }
    
    /* float four columns side by side */
    .column {
      float: left;
      width: 25%;
      padding: 0 10px;
    }
    
    /* Remove extra left ang right margins, due to padding */
    .row {margin: 0 --5px;}
    
    /*  Clear floats after the column */
    .row:after{
      content: "";
      display: table;
      clear: both;
    }
    
    /* Resvonsive columnsm*/
    @media screen and (max-width: 600px){
    .column {
      width: 80%;
      display: block;
      margin-bottom: 20px;
    }
    }
      
    /* Style the counter cards */
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      padding: 16px;
      text-align: center;
      background-color: #f1f1f1;
    }
    
    .w3-button {width:150px;}
    
    </style>
    </head>
    <body>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <h2>Data Mobil</h2>
    <div class="column">
      <div class="card">
      <img src="alphard2.jpg" alt="Avatar" style="width:80%">
      <div class="container">
        <p>Toyota Alphard</p>
        <p><button class="w3-button w3-cyan"><a href="detail.html">Detail</a></button></p>
      </div>
    </div>
    </div>
    
    <div class="column">
      <div class="card">
        <img src="fortuner.jpg" alt="Avatar" style="width:80%">
        <p>Toyota Fortuner</p>
        <p><button class="w3-button w3-cyan"><a href="detail2.html">Detail</a></button></p>
      </div>
    </div>
    
    <div class="column">
      <div class="card">
        <img src="mercedes7.webp" alt="Avatar" style="width:80%">
        <p>Mercedes Benz</p>
        <p><button class="w3-button w3-cyan"><a href="detail3.html">Detail</a></button></p>
      </div>
    </div>
    
    <div class="column">
      <div class="card">
      <img src="brio2.png" alt="Avatar" style="width:80%">
      <div class="container">
        <p>Honda Brio</p>
        <p><button class="w3-button w3-cyan"><a href="detail4.html">Detail</a></button></p>
      </div>
    </div>
  <div class="section two" id="section2">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #8dd1e8;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #3c58fb;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #afc3ed;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<h2>Data Costumer</h2>
<p>Silahkan Wajib Diisi.</p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Biodata Pemesan</h3>
            <label for="fname"><i class="fa fa-user"></i> Nama Lengkap</label>
            <input type="text" id="fname" name="firstname" placeholder="Dea">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="dea@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Umur</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 17th">
            <label for="city"><i class="fa fa-institution"></i> Alamat</label>
            <input type="text" id="city" name="city" placeholder="Bandung">

            <div class="row">
              <div class="col-50">
                <label for="state">Jenis Kelamin</label>
                <input type="text" id="state" name="state" placeholder="Perempuan">
              </div>
              <div class="col-50">
                <label for="zip">Nomor Pesan</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Penyewaan</h3>
            <label for="fname">Bekerjasama dengan</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Nama Pemesan/penyewa</label>
            <input type="text" id="cname" name="cardname" placeholder="Dea">
            <label for="ccnum">Nomor Telpon</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="0858-6175-1308">
            <label for="expmonth">Merk Mobil</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Tahun Pesan</label>
                <input type="text" id="expyear" name="expyear" placeholder="2022">
              </div>
              <div class="col-50">
                <label for="cvv">Tahun Pengembalian</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="detail.html">Aphard</a> <span class="price">$1,71 Milyar</span></p>
      <p><a href="detail2.html">Fortuner</a> <span class="price">$650 Juta</span></p>
      <p><a href="detail3.html">Mercedes Benz</a> <span class="price">$2,91 Milyar</span></p>
      <p><a href="detail4.html">Brio</a> <span class="price">$254,1 Juta</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
  </div>
  <div class="section three" id="section3">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5,3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5,3.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
* {
  box-sizing: border-box;
}

.row {
  margin-left:-5px;
  margin-right:-5px;
}
  
.column {
  float: left;
  width: 50%;
  padding: 5px;
  margin-top: -5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 0px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
.tab {
  margin-left: 30px;
}

</style>
</head>
<body>
  <div class="tab">

<h2>Rental Mobil</h2>
<p align="center">Detail Mobil</p>

<div class="row">
  <div class="column">
    <table border="1">
      <tr>
        <td rowspan="5"></td><div class="w3-container">
          
          <div class="w3-card-4" style="width: 100%;">
            <img src="alphard3.jfif" alt="Alps" style="width: 100%;">
            <div class="w3-container w3-center">
              <p>Alphard</p>
            </div>
            </div>
            </div>
          </div>
      </tr>
    </table>
  </div>
  <div class="column">
    <table border="1">
      <tr>
        <th>NAMA</th>
        <th>Alphard</th>
      </tr>
      <tr>
        <td>JENIS</td>
        <td>Multi-Purpose Whicle</td>
      </tr>
      <tr>
        <td>TYPE</td>
        <td>Alphard 2.3 HEV Premium Color</td>
      </tr>
      <tr>
        <td>HARGA</td>
        <td>Rp.1,71 Millyar</td>
      </tr>
      <tr align="center">
        <td colspan="2"><a button type="button" class="btn btn-secondary" href="datamobil.html">Back
          </a>&nbsp;&nbsp;&nbsp;&nbsp;<a button type="button" class="btn btn-primary" href="detail.html">Sewa
          </a></td>
    </table>
  </div>
</div>

  </div>
  </div>
</body>
</html> 
