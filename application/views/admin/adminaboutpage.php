<h1 class="adminhomeh1" style="background :#00a63f; margin: 0%;
padding-top: 0.5%; padding-bottom:0.5%; padding-left: 12px; padding-right: 16px; font-size: 24px; font-weight: 900;
">ADMIN ABOUT PAGE
</h1>

<div class="container-m-0">
    <!-- <h2>Edit Homepage Content</h2> -->



    <div class="row adminpage" style="width: 100%;">
        <!-- <div class="col panel" style="background-color: #17273a;">
            //code for admin panel, to the left side of the editable 
            HASSAN GET GUD
        </div> -->

        
        <div class="col content">
            <?php echo form_open('admin/save_contentabout'); ?>
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
                                        <input type="text" class="form-control admin" name="about1_header_text1" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo $AllItems[0]->about1_header_text1; ?>">
                                    </div>
                                </div>

                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container1_background"style="color: #ccc;">BG Image:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="about1_subtext1" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo $AllItems[0]->about1_subtext1; ?>">
                                    </div>
                                </div>
                                <br><br><br><br><br><br><br><br>
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
                                        <input type="text" class="form-control admin" name="about1_header_text2" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo $AllItems[0]->about1_header_text2; ?>">
                                    </div>
                                </div>

                                <div class="form-group" style="display: flex; align-items: center; margin-bottom: 1.25em;">
                                    <label class="col-sm-3" for="container2_subtext"style="color: #ccc;">Subtext:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control admin" name="about1_subtext2" style="border-color: #636363; background: transparent;
                                        color: #ccc;border: 1px solid #757575;" value="<?php echo $AllItems[0]->about1_subtext2; ?>">
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary admin">Save Changes</button>
                                </div>

                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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