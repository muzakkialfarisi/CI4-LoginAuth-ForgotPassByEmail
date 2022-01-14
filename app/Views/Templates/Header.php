<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->

    <title><?= $title ?></title>

    <!-- local -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
</head>

<body>
<?php if(session()->get('logged_in')){ ?>
<!-- https://github.com/harshitjain-hj/SideNav -->
<div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column bg-light" id="sidebar">
    <ul class="nav flex-column w-100">
        <div class="text-center">
            <a href="#" class="nav-link text-white mb-2" id="grad">
                <img class="rounded-pill mb-3" src="<?= base_url('uploads/photo_profile/' . session()->get('photo')) ?>"/>
                <br>
                <?= ucfirst(session()->get('name')) ?>
            </a>
        </div>
      
      <hr id="grad">
      <li class="nav-item">
        <a href="\dashboard" class="nav-link active" aria-current="page">
        <i class="bi bi-speedometer2"></i>
            Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
        <i class="bi bi-person"></i>
            Profile
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
        <i class="bi bi-sliders"></i>
            Setting
        </a>
      </li>
      <li>
        <a href="\login\logout" class="nav-link">
        <i class="bi bi-box-arrow-right"></i>
            Logout
        </a>
      </li>
    </ul>
</div>

<div class="p-1 my-container active-cont">
    <!-- Top Nav -->
    <nav class="navbar top-navbar navbar-light bg-light px-5">
        <a class="btn border-0" id="menu-btn"><i class="bi bi-list"></i></a>
    </nav>
<?php } ?>

