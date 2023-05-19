<script src="https://www.google.com/recaptcha/api.js">
</script>
<div class="main-body-container">
    <div class="body-wrapper">
        <div class="login-section">
            <div class="login-tab-panel" role="tabpanel">
                <ul class="nav nav-tabs" id="login-tab" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#">Login</a>
                    </li>
                    <li role="presentation">
                        <a href="/cgv?p=register">Sign Up</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="login">
                        <div class="form-group login">
                            <form method="post" autocomplete="off">
                                <p><b>Login with your web profile</b></p>
                                <div class="input-group">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="email" value placeholder="Email" autocomplete="off">
                                </div>
                                <div class="input-group">
                                    <i class="fa fa-unlock-alt"></i>
                                    <input type="password" name="password" placeholder="Password" autocomplete="off">
                                </div>
                                <div class="input-group">
                                    <div>
                                        <div class="grecaptcha-badge" data-style="bottomright"
                                            style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                            <div class="grecaptcha-logo">
                                                <iframe title="reCAPTCHA"
                                                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&k=6LdPw1kUAAAAANnq6qTKBXXUyFzbZbjXdQkZt_4m&co=aHR0cHM6Ly93d3cuY2d2LmlkOjQ0Mw..&hl=en&v=4PnKmGB9wRHh1i04o7YUICeI&size=invisible&cb=7sbpduexzmaf"
                                                    width="256" height="60" role="presentation" name="a-id63s7dt3xfi"
                                                    frameborder="0" scrolling="no"
                                                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox">
                                                </iframe>
                                            </div>
                                            <div class="grecaptcha-error"></div>
                                            <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                                class="g-recaptcha-response"
                                                style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                        </div>
                                    </div>
                                    <input type="submit" value="Login" class="g-recaptcha"
                                        data-sitekey="6LdPw1kUAAAAANnq6qTKBXXUyFzbZbjXdQkZt_4m" data-callback="onSubmit"
                                        onclick="loginPushed()">
                                </div>
                                <div class="input-group">
                                    <div class="forgot-pass">
                                        <a href="https://www.cgv.id/en/user/forgot_password">Forgot
                                            Password?</a>
                                    </div>
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
</div>