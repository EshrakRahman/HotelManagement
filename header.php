<?php session_start();
require_once("configs/config.php");
require_once("helpers/helper.php");
require_once("libraries/library.php");
require_once("models/model.php");
require_once("controllers/controller.php");

if (!isset($_SESSION["uid"])) header("location:$base_url");
$uid = $_SESSION["uid"];


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Dashboard | UBold - Responsive Bootstrap 5 Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="UBold is a modern, responsive admin dashboard available on ThemeForest. Ideal for building CRM, CMS, project management tools, and custom web applications with a clean UI, flexible layouts, and rich features.">
  <meta name="keywords" content="UBold, admin dashboard, ThemeForest, Bootstrap 5 admin, responsive admin, CRM dashboard, CMS admin, web app UI, admin theme, premium admin template">
  <meta name="author" content="Coderthemes">

  <!-- App favicon -->
  <link rel="shortcut icon" href="<?php echo $base_url ?>/assets/images/favicon.ico">

  <!-- Theme Config Js -->
  <script src="<?php echo $base_url ?>/assets/js/config.js"></script>

  <!-- Vendor css -->
  <link href="<?php echo $base_url ?>/assets/css/vendors.min.css" rel="stylesheet" type="text/css">

  <!-- App css -->
  <link href="<?php echo $base_url ?>/assets/css/app.min.css" rel="stylesheet" type="text/css">
</head>

<body>
  <!-- Begin page -->
  <div class="wrapper">

<?php include __DIR__ . "/views/layout/navbar.php"; ?>
<?php include __DIR__ . "/views/layout/main_sidebar.php"; ?>


<div class="content-page">

<div class="container-fluid">