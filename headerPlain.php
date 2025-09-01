<?php
$host = $_SERVER['HTTP_HOST']; // e.g. localhost:8080
$basePath =  "http://".$host . "/locator/";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEZRIS - Dashboard</title>

  <!-- Google Font: Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  

  <!-- Font Awesome (AdminLTE v3 uses FA5) -->
  <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/all.min.css">
  <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/botstrap-4.min.css">
  <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/-icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/adminlte-v3.min.css">
  <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/overlayScrollbars.min.css">
  <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/datepicker.min.css">

  <link rel="stylesheet" href="<?php echo $basePath; ?>assets/main.css">
</head>
<body class="sidebar-mini layout-fixed" style="height: auto;">
<div class="wrapper ">
    