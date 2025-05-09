<h1 class="adminhomeh1" style="background :#00a63f; margin: 0%;
padding-top: 0.5%; padding-bottom:0.5%; padding-left: 12px; padding-right: 16px; font-size: 24px; font-weight: 900;
">ADMIN HOME PAGE
</h1>

<div class="container-m-0">
    <!-- <h2>Edit Homepage Content</h2> -->



    <div class="row adminpage" style="width: 100%;">
        <!-- <div class="col panel" style="background-color: #17273a;">
            //code for admin panel, to the left side of the editable 
            HASSAN GET GUD
        </div> -->

        
        <div class="col content">
            <?php echo form_open('admin/save_content'); ?>
                <div class="row form">
                    <div class="col-md-12 forma">
                        <div class="card mb-4" style="border-top: 0px; margin-bottom: 0 !important; border: 0;">
                            <div class="card-header form1" style="padding: 15px 20px; border-radius: 0;">
                                <h5>Container 1</h5>
                            </div>
                            <div class="card-body bodyform1">
                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container1_header" style="color: #ccc;">Header:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container1_header" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo $AllItems[0]->container1_header; ?>">
                                    </div>
                                </div>

                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container1_background"style="color: #ccc;">BG Image:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container1_background" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo $AllItems[0]->container1_background; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 formb">
                        <div class="card mb-4" style="border-top: 0px; margin-bottom: 0 !important; border: 0;">
                            <div class="card-header form2" style="padding: 15px 20px; border-radius: 0;">
                                <h5>Container 2</h5>
                            </div>
                            <div class="card-body bodyform2">
                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container2_header"style="color: #ccc;">Header:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container2_header" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo $AllItems[0]->container2_header; ?>">
                                    </div>
                                </div>

                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container2_subtext"style="color: #ccc;">Subtext:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container2_subtext" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo $AllItems[0]->container2_subtext; ?>">
                                    </div>
                                </div>


                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container2_icon1"style="color: #ccc;">Icon 1:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container2_icon1" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo htmlspecialchars($AllItems[0]->container2_icon1); ?>">
                                    </div>
                                </div>
                                <!-- Add more form-group blocks for other container 2 icons -->

                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container2_icon1_desc"style="color: #ccc;">Icon 1 Desc:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container2_icon1_desc" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo $AllItems[0]->container2_icon1_desc; ?>">
                                    </div>
                                </div>

                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container2_icon2"style="color: #ccc;">Icon 2:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container2_icon2" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo htmlspecialchars($AllItems[0]->container2_icon2); ?>">
                                    </div>
                                </div>


                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container2_icon2_desc"style="color: #ccc;">Icon 2 Desc:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container3_header" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo $AllItems[0]->container2_icon2_desc; ?>">
                                    </div>
                                </div>

                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container2_icon3"style="color: #ccc;">Icon 3:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container2_icon3" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo htmlspecialchars($AllItems[0]->container2_icon3); ?>">
                                    </div>
                                </div>


                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container2_icon3_desc"style="color: #ccc;">Icon 3 Desc:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container2_icon3_desc" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo $AllItems[0]->container2_icon3_desc; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 formc">
                        <div class="card mb-4" style="border-top: 0px; margin-bottom: 0 !important; border: 0;">
                            <div class="card-header form3" style="padding: 15px 20px; border-radius: 0;">
                                <h5>Container 3</h5>
                            </div>
                            <div class="card-body bodyform3">
                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container3_header"style="color: #ccc;">Header:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container3_header" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo $AllItems[0]->container3_header; ?>">
                                    </div>
                                </div>
                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container3_subtext"style="color: #ccc;">Subtext:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container3_subtext" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo htmlspecialchars($AllItems[0]->container3_subtext); ?>">
                                    </div>
                                </div>
                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container3_trailerdesc"style="color: #ccc;">Trailer Desc:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container3_trailerdesc" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo htmlspecialchars($AllItems[0]->container3_trailerdesc); ?>">
                                    </div>
                                </div>
                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container3_highlight1"style="color: #ccc;">1st Highlight:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container3_highlight1" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo htmlspecialchars($AllItems[0]->container3_highlight1); ?>">
                                    </div>
                                </div>
                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container3_highlight2"style="color: #ccc;">2nd Highlight:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container3_highlight2" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo htmlspecialchars($AllItems[0]->container3_highlight2); ?>">
                                    </div>
                                </div>
                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container3_highlight3"style="color: #ccc;">3rd Highlight:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container3_highlight3" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo htmlspecialchars($AllItems[0]->container3_highlight3); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 formd">
                        <div class="card mb-4" style="border-top: 0px; margin-bottom: 0 !important; border: 0;">
                            <div class="card-header form4" style="padding: 15px 20px; border-radius: 0;">
                                <h5>Container 4</h5>
                            </div>
                            <div class="card-body bodyform4">
                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container3_img1"style="color: #ccc;">Image 1:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container3_img1" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo htmlspecialchars($NewTableData[0]->container3_img1); ?>">
                                    </div>
                                </div>
                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container3_img2"style="color: #ccc;">Image 2:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container3_img2" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo htmlspecialchars($NewTableData[0]->container3_img2); ?>">
                                    </div>
                                </div>
                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container3_img3"style="color: #ccc;">Image 3:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="container3_img3" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo htmlspecialchars($NewTableData[0]->container3_img3); ?>">
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary admin">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary admin">Save Changes</button>
                    </div> -->
                    
                </div>
            <?php echo form_close(); ?>
            
        </div>
        
    </div>




</div>
