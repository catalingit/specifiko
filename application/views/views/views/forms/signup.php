<?php
        
    //Beta signup form
    $attributes = array('id' => 'register-form', 'method' => 'post', 'class' => 'form-inline');
    echo form_open('/signup/register', $attributes);
?>

<ul>
    
    <li class="row">
        <label for="User_name" class="required">Name <span class="required">*</span></label>
        <input size="60" maxlength="100" name="name" id="name" type="text" />
        
        <div class="errorMessage" id="name_em" style="display:none"></div>
    </li>
    
    <li class="row">
        <label for="User_Organization">Organization</label>
        <input size="60" maxlength="200" name="organization" id="User_organization" type="text" />
        
        <div class="errorMessage" id="organization_em" style="display:none"></div>
    </li>
    
    <li class="row">
        <label for="email" class="required">Email <span class="required">*</span></label>
        <input size="60" maxlength="100" name="email" id="email" type="text" />
        
        <div class="errorMessage" id="email_em" style="display:none"></div>
    </li>
    
    <li class="row">
        <label for="password" class="required">Password <span class="required">*</span></label>
        <input size="50" maxlength="50" name="password" id="password" type="password" />
        
        <div class="errorMessage" id="password_em" style="display:none"></div>
    </li>
    
    <li class="row">
        <label for="password_repeat">Confirm Password</label>
        <input size="50" maxlength="50" name="password2" id="password_repeat" type="password" />
        
        <div class="errorMessage" id="password_repeat_em" style="display:none"></div>
    </li>
    
    <li class="row">
        <label for="native_language">Native Language</label>
        <select name="native_language" id="User_native_language">
            <option value="" selected="selected">Select Language</option>
            <option value="en">English</option>
            <option value="ja">Japanese - 日本語</option>
            <option value="zh">Chinese - 中文</option>
        </select>
        
        <div class="errorMessage" id="ative_language_em" style="display:none"></div>
    </li>

    <li class="row">
        <label for="home_country">Home Country</label>
        <select name="home_country" id="home_country">
            <option value="" selected="selected">Select Country</option>
            <option value="US">United States</option>
            <option value="JP">Japan</option>
            <option value="CN">China</option>
        </select>
        
        <div class="errorMessage" id="home_country_em" style="display:none"></div>
    </li>

    <li class="row">
        <label for="english_level">English Level</label>
        <select name="english_level" id="User_english_level">
            <option value="0" selected="selected">Select Your Level</option>
            <option value="1">Beginner</option>
            <option value="2">Intermediate</option>
            <option value="3">Advanced</option>
        </select>
        
        <div class="errorMessage" id="english_level_em" style="display:none"></div>
    </li>
    
</ul>

<div class="notice">
    By clicking the 'Register' button below, I agree to the Specifiko
    <a href="/terms" target="_blank">Terms of Use</a> and
    <a href="/privacy" target="_blank">Privacy Policy</a>.
</div>

<div class="btn">
    <?php echo form_submit('register', 'Register', "class='register-button' id='register-btn'"); ?>
</div>

<?php echo form_close(); ?>