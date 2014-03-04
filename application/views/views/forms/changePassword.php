<?php
        
    $attributes = array('id' => 'update-password-form', 'method' => 'post', 'class' => 'form-inline');
    echo form_open('profile/changepassword', $attributes);
?>
                        
    <div class="row">
        <label for="User_password" class="required">Old Password <span class="required">*</span></label>
        <input name="old_password" id="password" type="password" maxlength="50" value="" />
        
        <div class="errorMessage" id="User_password_em_" style="display:none"></div>
    </div>

    <div class="row">
        <label for="password_new">New Password</label>
        <input name="new_password" id="password_new" type="password" />
        
        <div class="errorMessage" id="User_password_new_em_" style="display:none"></div>
    </div>

    <div class="row">
        <label for="password_repeat">Confirm New Password</label>
        <input size="50" maxlength="50" name="new_password2" id="password_repeat" type="password" />
        
        <div class="errorMessage" id="User_password_repeat_em_" style="display:none"></div>
    </div>

    <div class="row buttons">
        <input type="submit" name="login" id="update-password-btn" class="register-button" value="Update"/>
    </div>

</form>

<div id="update-password-response"></div>