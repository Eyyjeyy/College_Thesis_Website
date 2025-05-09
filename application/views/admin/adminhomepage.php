
    <h1>Welcome to Micro-Bloom Admin Panel</h1>

    <h2>Edit Homepage Content</h2>
    <?php echo form_open('admin/save_content'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                BIG BOSS HURTS
            </div>
            <div class="col">
                <!-- Container 1 -->
                <h3>Container 1</h3>
                <label for="container1_header">Header:</label>
                <input type="text" name="container1_header" value="<?php echo $AllItems[0]->container1_header; ?>"><br>

                <label for="container1_background">Background Image:</label>
                <input type="text" name="container1_background" value="<?php echo $AllItems[0]->container1_background; ?>"><br>

                <!-- Container 2 -->
                <h3>Container 2</h3>
                <label for="container2_header">Header:</label>
                <input type="text" name="container2_header" value="<?php echo $AllItems[0]->container2_header; ?>"><br>

                <label for="container2_subtext">Subtext:</label>
                <input type="text" name="container2_subtext" value="<?php echo $AllItems[0]->container2_subtext; ?>"><br>

                <!-- Container 2 Icons -->
                <h4>Container 2 Icons</h4>
                <!-- Display and edit the content for container 2 icons similarly -->
                <label for="container2_header">Icon1:</label>
                <input type="text" name="container2_icon1" value="<?php echo htmlspecialchars($AllItems[0]->container2_icon1); ?>"><br>

                <label for="container2_header">Icon1 Description:</label>
                <input type="text" name="container2_icon1_desc" value="<?php echo $AllItems[0]->container2_icon1_desc; ?>"><br>

                <label for="container2_header">Icon2:</label>
                <input type="text" name="container2_icon2" value="<?php echo htmlspecialchars($AllItems[0]->container2_icon2); ?>"><br>

                <label for="container2_header">Icon2 Description:</label>
                <input type="text" name="container2_icon2_desc" value="<?php echo $AllItems[0]->container2_icon2_desc; ?>"><br>

                <label for="container2_header">Icon3:</label>
                <input type="text" name="container2_icon3" value="<?php echo htmlspecialchars($AllItems[0]->container2_icon3); ?>"><br>

                <label for="container2_header">Icon3 Description:</label>
                <input type="text" name="container2_icon3_desc" value="<?php echo $AllItems[0]->container2_icon3_desc; ?>"><br>

                <!-- Container 3 -->
                <h3>Container 3</h3>
                <label for="container3_header">Header:</label>
                <input type="text" name="container3_header" value="<?php echo $AllItems[0]->container3_header; ?>"><br>

                <label for="container3_subtext">Subtext:</label>
                <input type="text" name="container3_subtext" value="<?php echo $AllItems[0]->container3_subtext; ?>"><br>

                <input type="submit" value="Save Changes">
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    

