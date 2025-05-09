<div class="container login-main" style="background-color: #17273a;">
    <div class="flex-container login">
        <div class="row login" style="background: transparent;">
            <form method="POST" action="<?=$this->config->base_url('login/loginsubmit')?>" class="container login">
                <div class="form-group login">
                    <label>Username</label>
                    <input type="text" name="luname" placeholder="Your Username" style="background-color: #1a2430;" class="form-control login"/>
                    <label>Password</label>
                    <input type="password" name="lpass" placeholder="Your Password" style="background-color: #1a2430;" class="form-control login" style="background-color: transparent;"/>
                    <!-- <input type="submit" class="btn login btn-primary" style="border-radius: 0;width: 10%;"></input> -->
                    <button type="submit" class="btn btn-primary" style="box-shadow: none;margin:0; font-size: 15px;font-family: Lato,sans-serif;
                        font-weight: 900;">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>