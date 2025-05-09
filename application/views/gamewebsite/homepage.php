<div class ="container-fluid bg">
    <div class="flex-container cont1">
        <div class="image bg">
            <!-- <img src="<?=$this->config->base_url('assets/images/gameplaybg.jpg')?>" class ="img-bg-main"> -->
            <img src="<?php echo $AllItems[0]->container1_background; ?>" class ="img-bg-main">
            <div class = "image-overlay">
                <h1 class ="homepage-opening"><?php echo $AllItems[0]->container1_header;?></h1>
                <!-- <h1 class ="homepage-opening-a">MICRO-BLOOM</h1> -->
            </div>
            <div href= "#" class="download-btn btn-primary" style="border-radius: 0px;transform: skew(0deg);">
                    <!-- <a class="download-link" href="#">Download</a> -->
                    <a href="https://drive.google.com/drive/folders/1-wqboKSr5ILLGT3moY-9CEafXadXsUtM?usp=sharing" class="download-text">
                        <div class="text-dl" style="transform: skew(7deg);">
                            DOWNLOAD
                        </div>
                    </a>
            </div>
        </div>
        <!-- <div class ="box sha"></div>
        <img src="<?= $this->config->base_url()?>assets/images/gameplaybg.jpg" class="img-fluid a" alt="randomgameplayimg"> -->
        <!-- <div class="container inner">
            <div class="row">
                <div class="col a">
                    <p class ="p1">WELCOME TO</p>
                </div>
                <div class="col b">
                    <p class ="p2">MICRO-BLOOM</p>
                </div>
            </div>
            <div class="row2">
                <p class ="p3">In Micro Bloom, the garden becomes a whole new world of adventure and danger. As a tiny survivor, 
                    you'll need to navigate treacherous terrain, outsmart ruthless enemies, and gather resources to stay alive. It's a game of skill, strategy, 
                    and pure grit – are you ready to take on the challenge?
                </p>
            </div>
        </div> -->
    </div>
</div>

<div class="container-fluid bgb home">
    <div class="flex-container cont3">
        <div class="row b-title">
            <div class="col game-features">
                <h3 class="feature-title"><?php echo $AllItems[0]->container2_header;?></h3>
                <div class="unleash-text" >
                    <p style="font-weight: 700;"><?php echo $AllItems[0]->container2_subtext;?></p>
                </div>
                
            </div>
        </div>
        <hr class="feature-divider"></hr>
        <div class="row b">
            <div class = "col e">
                <div class="iconbox1">
                    <?php echo $AllItems[0]->container2_icon1;?>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-tree-fill" viewBox="0 0 16 16">
                    <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5z"/>
                    </svg> -->
                </div>
                <h3 class="craftheader">LEARN</h3>
                <div class="p-box">
                    <p class="craft-p" style="margin: 0;">Learn all the plants as you make your way to survival. Know your plants the way no one has ever done before.</p>
                </div>
            </div>
            <div class = "col e">
                <div class="iconbox1">
                    <?php echo $AllItems[0]->container2_icon2;?>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="combat-hands" viewBox="0 0 448 512"><path d="M192 0c17.7 0 32 14.3 32 32V144H160V32c0-17.7 14.3-32 32-32zM64 64c0-17.7 14.3-32 32-32s32 14.3 32 32v80H64V64zm192 0c0-17.7 14.3-32 32-32s32 14.3 32 32v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V64zm96 64c0-17.7 14.3-32 32-32s32 14.3 32 32v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V128zm-96 88l0-.6c9.4 5.4 20.3 8.6 32 8.6c13.2 0 25.4-4 35.6-10.8c8.7 24.9 32.5 42.8 60.4 42.8c11.7 0 22.6-3.1 32-8.6V256c0 52.3-25.1 98.8-64 128v96c0 17.7-14.3 32-32 32H160c-17.7 0-32-14.3-32-32V401.6c-17.3-7.9-33.2-18.8-46.9-32.5L69.5 357.5C45.5 333.5 32 300.9 32 267V240c0-35.3 28.7-64 64-64h88c22.1 0 40 17.9 40 40s-17.9 40-40 40H128c-8.8 0-16 7.2-16 16s7.2 16 16 16h56c39.8 0 72-32.2 72-72z"/></svg> -->
                </div>

                <h3 class ="combatheader">COMBAT</h3>
                <div class="p-box">
                    <p class="combat-p" style="margin: 0;">Survive by fighting through nature's residents. Who would have thought that such forces of nature would be small but terrible... now deadly<br></p>
                </div>
            </div>
            <div class = "col e">
                <div class="iconbox1">
                    <?php echo $AllItems[0]->container2_icon3;?>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="explore-map" viewBox="0 0 576 512"><path d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152V422.8c0 9.8-6 18.6-15.1 22.3L416 503V200.4zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6V451.8L32.9 502.7C17.1 509 0 497.4 0 480.4V209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77V504.3L192 449.4V255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/></svg> -->
                </div>
                
                <h3 class="exploreheader">EXPLORE</h3>
                <div class="p-box">
                    <p class="explore-p" style="margin: 0;">Discover things both great and terrible throughout your journey. The once-familiar landscapes transformed into vast, treacherous expanses.<br></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bga">
    <div class="flex-container cont2">
        <div class="row a">
            <div class="col ourgame">
                <p class = "p4" style="color: #2c2c2c;font-size: 2rem;">
                    <?php echo $AllItems[0]->container3_header;?>
                </p>
                <!-- <div class="line">
                    <span class ="divider"></span>
                </div> -->
                <p class = "p5" style="color:#2c2c2c;width: 50%;margin-right:auto;margin-left:auto;border-radius: 16px;margin-top: 2%;font-weight: 700;">
                    <?php echo $AllItems[0]->container3_subtext; ?>
                </p>
            </div>
            <!-- <div class="col d">
                <iframe width="75%" height="5%" src="https://www.youtube.com/embed/jWLmkDp2H2I" title="Placeholder-MicroBloom" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                </iframe>
            </div> -->
        </div>
        <div class="row b-ourgame">
            <div class="col-md-6 col-sm-6" style="display: flex;width: 40%;">
                <div class="video text">
                    <p style="color: #ccc;"><?php echo $AllItems[0]->container3_trailerdesc;?>
                    </p>
                    <?php if (!empty($AllItems[0]->container3_highlight1)): ?>
                        <ul class="withArrow" style="list-style-type: none;padding-left:0;color:#ccc;">
                            <li style="display: flex;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24px" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                            </svg>
                                <p style="margin-left: 2%;margin-bottom:0;"><?php echo $AllItems[0]->container3_highlight1;?></p>
                            </li>
                        </ul>
                    <?php endif; ?>
                    <?php if (!empty($AllItems[0]->container3_highlight2)): ?>
                        <ul class="withArrow" style="list-style-type: none;padding-left:0;color:#ccc;">
                            <li style="display: flex;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24px" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                            </svg>
                                <p style="margin-left: 2%;margin-bottom:0;"><?php echo $AllItems[0]->container3_highlight2;?></p>
                            </li>
                        </ul>
                    <?php endif; ?>
                    <?php if (!empty($AllItems[0]->container3_highlight3)): ?>
                        <ul class="withArrow" style="list-style-type: none;padding-left:0;color:#ccc;">
                            <li style="display: flex;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="24px" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                            </svg>
                                <p style="margin-left: 2%;margin-bottom:0;"><?php echo $AllItems[0]->container3_highlight3;?></p>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6 col-sm-6" style="display: flex;width: 60%;">
                <iframe width="75%"  src="https://www.youtube.com/embed/dq7moqNAc0Y" title="Placeholder-MicroBloom" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                </iframe>
            </div>
            
        </div>
    </div>
</div>



<div class="container-fluid bgb home-b">
    <div class="flex-container cont4">
        <div class="row home-images">
            <div class="col h">
                <img src="<?php echo $NewTableData[0]->container3_img1;?>">
            </div>
            <div class="col i">
                <img class="img-i" src="<?php echo $NewTableData[0]->container3_img2;?>">
            </div>
            <div class="col j">
                <img class="img-j" src="<?php echo $NewTableData[0]->container3_img3;?>">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bgb home-c">
    <div class="flex-container cont5">
        <div class="row home-information">
            <div class="row system-requirement">
                <div class="col system-header">
                    <h3 class="system-text">SYSTEM&nbsp;</h3>
                    <h3 class="requirements-text">REQUIREMENTS</h3>
                </div>
            </div>
            <div class="row specs">
                <div class="col minimum-specs">
                    <div class="minimum-box">
                        <h5 class="minimum-box-a">MINIMUM</h5>
                    </div>
                    <div class="minimum-desc">
                        <p class="p-os">Operating System:</p>
                        <p class="p-win">Windows 10</p>
                        <p class="p-mem">Memory</p>
                        <p class="p-gb">4GB</p>
                        <p class="p-gpu">Graphics Card</p>
                        <p class="p-750">NVIDIA GTX 750</p>
                        <p class="p-direct">DirectX</p>
                        <p class="p-v11">Version 11 or Higher</p>
                        <p class="p-storage">Storage</p>
                        <p class="p-10GB">10 GB Available Space</p>
                    </div>
                </div>
                <div class="col recommended-specs">
                    <div class="recommended-box">
                        <h5 class="recommended-box-a">RECOMMENDED</h5>
                    </div>
                    <div class="recommended-desc">
                        <p class="p-os-a">Operating System:</p>
                        <p class="p-win-a">Windows 10</p>
                        <p class="p-win-mem">Memory</p>
                        <p class="p-win-gb">8GB</p>
                        <p class="p-win-gpu">Graphics Card</p>
                        <p class="p-win-1060">NVIDIA GTX 1060</p>
                        <p class="p-win-direct">DirectX</p>
                        <p class="p-win-v11">Version 11 or Higher</p>
                        <p class="p-win-storage">Storage</p>
                        <p class="p-win-10GB">10 GB Available Space</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

