<?php
    if(isset($_POST["login"])){
        login($_POST);
    }
?>
<div class="main-body-container">
    <div class="body-wrapper">
        <div class="login-section">
            <div class="login-tab-panel" role="tabpanel">
                <ul class="nav nav-tabs" id="login-tab" role="tablist">
                    <li role="presentation" class="active"><a href="#">Login</a></li>
                    <li role="presentation"><a href="/cgv?p=register">Sign Up</a></li>
                </ul>

                <div class="tab-content" style="padding:0;">
                    <div role="tabpanel" class="tab-pane active" id="login">
                        <div class="form-group login">
                            <form action="" method="post" autocomplete="off">
                                <div class="form-msg">
                                    Login with your web profile
                                </div>
                                <div class="input-group">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="email" value="" placeholder="Email" autocomplete="off" />
                                </div>
                                <div class="input-group">
                                    <i class="fa fa-unlock-alt"></i>
                                    <input type="password" name="password" placeholder="Password" autocomplete="off" />
                                </div>
                                <div class="input-group">
                                    <input name="login" type="submit" value="Login" class="g-recaptcha" data-sitekey="6LdPw1kUAAAAANnq6qTKBXXUyFzbZbjXdQkZt_4m" data-callback="onSubmit" onclick="loginPushed()" />
                                </div>
                            </form>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>