<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $this->config->base_url()?>assets/css/style.css"/> 
    <link rel="stylesheet" href="<?= $this->config->base_url()?>assets/css/stylecontact.css"/> 
    <link rel="stylesheet" href="<?= $this->config->base_url()?>assets/css/styleabout.css"/>
    <link rel="stylesheet" href="<?= $this->config->base_url()?>assets/css/stylegallery.css"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="<?= $this->config->base_url()?>assets/images/gamelogoweb.png" class="img-fluid branding" alt="Responsive image">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <!-- <li class = "nav-item">
                    <a class = "nav-link" aria-current="page" href="#">Home</a>
                </li> -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?= $this->config->base_url()?>">HOME </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->config->base_url('gamewebsite/about')?>">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->config->base_url('gamewebsite/gallery')?>">GALLERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->config->base_url('gamewebsite/contact')?>">CONTACT US</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?= $this->config->base_url('admin/logout')?>">ADMIN</a>
                </li> -->
            </ul>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>