<div class ="container-fluid aboutbg">
    <div class ="flex-container about1">
        <div class="image about">
            <img src="https://cdn1.epicgames.com/ue/product/Featured/LowPolyForest_featured-894x488-11fb4e107d18b1a080ec82b9cb6ee5ac.png" class="image-about-main" style="opacity: 0.6;">
            <div class="image-about-overlay">
                <h1 class="about-opening">ABOUT&nbsp</h1>
                <h1 class="about-opening-a">US</h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid aboutbga">
    <div class="flex-container about2">
        <div class="row" style="width: 50%; margin-right:auto;margin-left:auto;flex-direction: column;">
            <div class="col-md-6" style="width: 80%; margin-right:auto;margin-left:auto;">
                <h3 style="width: 100%;font-family: 'Open-Sans',arial,serif;font-size: 2rem;font-weight: 600;line-height: 1.1em;color: #00a63f;margin-bottom: 20px;text-transform: uppercase;text-align:center;
                font-size: 250%;
                font-weight: 900;
                letter-spacing: 0.1rem;
                text-align: center;
                color: #00a63f;
                margin-top: 10%;">
                    <?php echo $AllItems[0]->about1_header_text1;?>
                </h3>
                <div class="boxer" style="background-color: #0a121c;width: 100%;margin-right:auto;margin-left:auto;">
                    <p class="boxer-p" style="color: #bdbdbd;text-align: center;font-family: 'Open Sans', Arial, sans-serif; padding-left: 4%;padding-right: 4%;
                    margin: 0;"> <?php echo $AllItems[0]->about1_subtext1;?>
                    </p>
                </div>
                
            </div>
            <div class="col-md-6" style="margin-left: auto; margin-right: auto;margin-top: 2%;" >
                <img src="<?=$this->config->base_url('assets/images/taktyllogo.png')?>" style="width: 100%;">
            </div>
        </div>
        <div class="row about-team">
            <div class="col team" style="align-items: center;">
                <h3 class="team-header"><?php echo $AllItems[0]->about1_header_text2;?></h3>
                <div class="boxer" style="background-color: #0a121c;width: 50%;">
                    <p class="boxer-p" style="color: #bdbdbd;text-align: center;font-family: 'Open Sans', Arial, sans-serif; padding-left: 4%;padding-right: 4%;
                    margin: 0;"><?php echo $AllItems[0]->about1_subtext2;?>
                    </p>
                </div>
                
                <!-- <hr class="about-divider"></hr> -->
            </div>
        </div>
        
        <div class="row about a">
            <div class="col about">
                <div class="aboutbox1">
                    <img src="<?=$this->config->base_url('assets/images/oliverID.png')?>" class="img-fluid manager">
                    <h4 class="manager-header">Oliver Manalastas</h4>
                    <p class="manager-text">Project Manager - Head Level Designer - Sound Engineer. Also a game developer, ensures that all tasks are met and strategizes the team's
                        general direction and point of effort.
                    </p>
                </div>
            </div>
            <div class="col aboutb">
                <div class="aboutbox2">
                    <img src="<?=$this->config->base_url("assets/images/julesID.jpg")?>" class="img-fluid headprogrammer">
                    <h4 class="headprogrammer-header">Jules Fajardo</h4>
                    <p class="headprogrammer-text">Lead Programmer - UI Artist - QA Tester. Jules developed and maintains the foundation behind the scenes that allows the game to function.</p>
                </div>
            </div>
            <div class="col aboutc">
                <div class="aboutbox3">
                    <img src="<?=$this->config->base_url("assets/images/angeloID.jpg")?>" class="img-fluid webdeveloper">
                    <h4 class="webdeveloper-header">John Angelo Junio</h4>
                    <p class="webdeveloper-text">Web Developer - UI/UX Designer - Full-Stack Web Developer - Backup Programmer - Game Marketer. Shaped the development of the website and its promotional
                        content
                    </p>
                </div>
            </div>
            <div class="col aboutd">
                <div class="aboutbox4">
                    <img src="<?=$this->config->base_url("assets/images/Story Writer & Animator.jpg")?>" class="img-fluid animator">
                    <h4 class="animator-header">John Marcel Crisostomo</h4>
                    <p class="animator-text">Head Game Animator, Lead Game Artist, Narrative Designer. Marcel shaped the story and lore and introduced loveable characters of the Micro-Bloom Universe</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid aboutbgb">

</div>