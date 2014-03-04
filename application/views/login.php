<div class="wrapper">
    
    <div class="main">
        
        <div class="container">
            
            <div id="content">
                
                <div class="login-container">
                    <h1>Login</h1>
            
                    <div class="form">
                        
                        <?php
                            $attributes = array('id' => 'login-form');
                            echo form_open("login/validate", $attributes);
                        ?>
                        
                            <div id="login-response"></div>
                        
                            <div class="row">
                                <label>Email*</label>
                                <?php echo form_input('email');?>
                            </div>
                        
                            <div class="row">
                                <label>Password*</label>
                                <?php echo form_password('password');?>
                            </div>
                        
                            <div class="row rememberMe">
                                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                                Remember me next time
                            </div>
                        
                            <div class="row buttons">
                                <?php echo form_submit('submit', 'Login', 'id="login-btn" class="register-button"');?>
                            </div>
                        
                        <?php echo form_close();?>
                    </div><!-- form -->
                    
                    <a href="forgotpass">Forgot password?</a>
                </div>
            </div><!-- content -->
        </div>
    </div>
</div>