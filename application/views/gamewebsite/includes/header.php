<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <!-- <link rel="stylesheet" href="<?= $this->config->base_url()?>assets/css/bootstrap.css"/> -->
    
    <!-- <link rel="stylesheet" href="<?= $this->config->base_url()?>assets/css/style.css"/>  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $this->config->base_url()?>assets/css/style.css"/> 
    <link rel="stylesheet" href="<?= $this->config->base_url()?>assets/css/stylecontact.css"/> 
    <link rel="stylesheet" href="<?= $this->config->base_url()?>assets/css/styleabout.css"/>
    <link rel="stylesheet" href="<?= $this->config->base_url()?>assets/css/stylegalleryhome.css"/>
</head>
<body>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <!-- <script src="https://kit.fontawesome.com/3d33ae2de1.js" crossorigin="anonymous"></script> -->
    
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#" style="display: flex; justify-content: center; max-width: 80px;">
            <img src="<?= $this->config->base_url()?>assets/images/SLM LOGO(TRANSPARENT).png" class="img-fluid branding" alt="Responsive image" style="max-height: 73px; max-width: 73px; opacity: 1;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="height: 100%;">
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
                <li class="nav-item" style="display: none;">
                    <a class="nav-link" href="<?=$this->config->base_url('login')?>">ADMIN</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1>Welcome to our Website!</h1>
                <p>We are a company that provides top-quality products and services to our clients. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="col-lg-6">
                <img src="<?= $this->config->base_url()?>assets/images/image1.jpg" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div> -->
    <!-- <script src="<?= $this->config->base_url()?>assets/js/bootstrap.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



