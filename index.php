<?php
session_start();

?>

<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5,3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5,3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

  body,
  html {
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
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/opacity/see-through */
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


  * {
    box-sizing: border-box;
  }

  .row {
    margin-left: -5px;
    margin-right: -5px;
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

  th,
  td {
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
<script>
  function confirmLogout(event) {
    event.preventDefault();
    var confirmLogout = confirm("Apakah Anda yakin ingin logout?");
    if (confirmLogout) {
      window.location.href = event.target.href;
    }
  }
</script>


<body>

  <div class="topnav">
    <a class="active" href="#home">Home</a>
    <a href="datamobil.html">Data Mobil</a>
    <a href="datacostumer.html">Data Costumer</a>
    <a href="tambah_transaksi.php">Data Transaksi</a>
    <?php
    if (isset($_SESSION['username'])) {

      echo '<a href="logout.php" onclick="confirmLogout(event)"> <i data-feather="log-out"></i> Logout</a>';
    } else {

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

</body>

</html>