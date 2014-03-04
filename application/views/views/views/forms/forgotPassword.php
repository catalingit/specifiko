<?php
        
    $attributes = array('id' => 'forgot-password-form', 'method' => 'post', 'class' => 'form-inline');
    echo form_open('forgotpass/reset', $attributes);
?>
                        
    <div class="row">
        <label for="email" class="required">Email Address</label>
        <input name="email" id="email" type="text" maxlength="50" value="" />
    </div>

    <div class="row buttons">
        <input type="submit" name="forgot" id="forgot-password-btn" class="btn btn-success" value="Reset Password"/>
    </div>

</form>

<div id="forgot-password-response"></div>