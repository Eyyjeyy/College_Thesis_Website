<div class="container-fluid p-0">
    <div class="flex-container add" style="background-color: #17273a;">
        <div class="row-add">
            <form method="POST" action="<?=$this->config->base_url('admin/insertRecord')?>" class="container-padding round" enctype="multipart/form-data">
                <div class="form-group" style="height: 200px;">
                    <label style="color: #fff;">Picture Name</label>
                    <input type="text" class="form-control namefield" name="pictureMessage"/>

                    <label style="color: #fff;">Picture Image</label>
                    <input type="file" name="pictureImage" accept="image/*" class="input-admin">
                    <!-- <input type="submit" class="btn addsubmit btn-primary" style="border-radius: 0px; width: 75px;height: 40px;"/> -->
                    <button type="submit" class="btn btn-primary" style="box-shadow: none;margin:0; font-size: 15px;font-family: Lato,sans-serif;
                        font-weight: 900;">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid admin" style="background-color: #17273a;">
    <div class="flex-container admin" style="width: 100%;">
        <div class="row-admin">
            <table class="table text-center" style="width: 100%;">
                <thead>
                    <th class="text-center">
                        Picture ID
                    </th>
                    <th class="text-center">
                        Picture Name
                    </th>
                    <th class="text-center">
                        Picture Image
                    </th>
                    <th class="text-center">
                        Action
                    </th>
                </thead>
                <tbody>
                    <?php foreach($AllItems as $it): ?>
                    <tr style="background-color: #2e3f52;">
                        <td>
                            <?=$it->pictureID;?>
                        </td>
                        <td>
                            <?=$it->pictureMessage;?>
                        </td>
                        <td>
                        <img src="<?= htmlspecialchars(urldecode($it->pictureImage)); ?>" class="round" height="100px" style="width: 50%;">
                        </td>
                        <td style="padding-left: 2%;padding-right: 2%;">
                            <a href="<?=$this->config->base_url('admin/deleteRecord/'.$it->pictureID)?>" class="btn btn-danger">DELETE</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
