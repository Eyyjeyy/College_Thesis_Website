<div class ="container-fluid bg">
    <div class="flex-container cont1">
        <div class="image bg">
            <!-- <img src="<?=$this->config->base_url('assets/images/gameplaybg.jpg')?>" class ="img-bg-main"> -->
            <img src="https://cdn1.epicgames.com/ue/product/Featured/LowPolyForest_featured-894x488-11fb4e107d18b1a080ec82b9cb6ee5ac.png" class ="img-bg-main">
            <div class = "image-overlay">
                <h1 class ="homepage-opening">GALLERY</h1>
                <!-- <h1 class ="homepage-opening-a">PAGE</h1> -->
            </div>
            <!-- <div href= "#" class="download-btn">
                    <a class="download-link" href="#">Download</a>
                    <a href="https://drive.google.com/uc?export=download&id=1f85M04F3yyAHBlnBVJNcNeePPjZXrXHB" class="download-text">DOWNLOAD</a>
            </div> -->
        </div>
    </div>
</div>


<!-- <div class="container-fluid gallery">
    <div class="flex-container">
        <div class="row">
            <div class="col">
                <table class="table text-center">
                    <thead>
                        <th>ID</th>
                        <th>Picture Name</th>
                        <th>Picture Image</th>
                    </thead>
                    <tbody>
                        <?php foreach($AllItems as $it): ?>
                            <tr>
                                <td>
                                    <?=$it->pictureID;?>
                                </td>
                                <td>
                                    <?=$it->pictureMessage;?>
                                </td>
                                <td>
                                    <img src= <?=$it->pictureImage;?> class="pictureimg" >
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> -->
<!-- <div class="container-fluid gallery">
    <div class="flex-container gallery">
        <div class="row gallery">
            <?php foreach($AllItems as $it): ?>
                <div class="col gallery">
                    <div class="picturediv">
                        <div class="picturebox">
                            <img src=<?=$it->pictureImage;?> class="pictureimg">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div> -->


    <div class="flex-container gallery">
        <?php foreach($AllItems as $it): ?>
            <div class="flex-item">
                <div class="banner-card">
                    <img src=<?=$it->pictureImage;?> class="picture"alt="Image 1" style="object-fit: cover;">
                    <div class="banner-text">
                        <h4 class="textofpicture" style="word-break: break-word; margin: 0; text-align: center;font-family: 'Open Sans', Arial, sans-serif;font-weight: 300;
                        color: #00a63f;"><?=$it->pictureMessage?></h4>
                        <!-- <p style="color: #ccc;">Forge your path</p> -->
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <!-- Add more divs with images as needed -->
    </div>


