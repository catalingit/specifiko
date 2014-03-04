<div class="form">
    
    <h2>My Profile</h2>
    
    <?php
        
        $attributes = array('id' => 'update-account-form', 'method' => 'post', 'class' => 'form-inline');
        echo form_open('/profile/update', $attributes);
    ?>
        
        <ul>
        
            <li class="row">
                <label for="name" class="required">Name <span class="required">*</span></label>
                <input size="60" maxlength="100" name="name" id="name" type="text" value="<?= $my->name ?>" />
                
                <div class="errorMessage" id="User_name_em_" style="display:none"></div>
            </li>
        
            <li class="row">
                <label for="organization">Organization</label>
                <input size="60" maxlength="200" name="organization" id="organization" type="text" value="<?= $my->organization ?>" />
                
                <div class="errorMessage" id="organization_em" style="display:none"></div>
            </li>
            
            <li class="row">
                <label for="email" class="required">Email <span class="required">*</span></label>
                <input size="60" maxlength="100" name="email" id="email" type="text" value="<?= $my->email ?>" />
                
                <div class="errorMessage" id="email_em" style="display:none"></div>
            </li>
            
            <li class="row">
                <label for="password" class="required">Password</label>
                <p><a href="profile/password">Click here to change password</a></p>
            </li>
            
            <li class="row">
                <label for="User_native_language">Native Language</label>
                
                <select name="native_language" id="native_language">
                    <option value="">Select Language</option>
                    <option value="<?=languageShort(languageLong($my->native_language))?>" <?php if($my->native_language == "en"):?> selected="selected" <?php endif; ?>> <?= languageLong($my->native_language) ?> </option>
                    <option value="ja" <?php if($my->native_language == "ja"):?> selected="selected" <?php endif; ?>>Japanese - 日本語</option>
                    <option value="zh" <?php if($my->native_language == "zh"):?> selected="selected" <?php endif; ?>>Chinese - 中文</option>
                </select>
                
                <div class="errorMessage" id="User_native_language_em_" style="display:none"></div>
            </li>
        
            <li class="row">
                <label for="home_country">Home Country</label>
                
                <select name="home_country" id="User_home_country">
                    <option value="">Select Country</option>
                    <option value="<?=countryShort(countryLong($my->home_country))?>" <?php if($my->home_country == "US"):?> selected="selected" <?php endif; ?>> <?= countryLong($my->home_country) ?> </option>
                    <option value="JP" <?php if($my->home_country == "JP"):?> selected="selected" <?php endif; ?>> Japan </option>
                    <option value="CN" <?php if($my->home_country == "CN"):?> selected="selected" <?php endif; ?>> China </option>
                </select>
                
                <div class="errorMessage" id="User_home_country_em_" style="display:none"></div>
            </li>
        
            <li class="row">
                <label for="english_level">English Level</label>
                
                <select name="english_level" id="english_level">
                    <option value="0">Select Your Level</option>
                    <option value="1">Beginner</option>
                    <option value="2">Intermediate</option>
                    <option value="3">Advanced</option>
                </select>
                
                <div class="errorMessage" id="User_english_level_em_" style="display:none"></div>
            </li>
        
        </ul>
          
        <div class="btn"><input type="submit" name="profile-update" id="profile-update-btn" class="register-button" value="Update"/></div>
        
	<?php echo form_close(); ?>
    
    <div id="profile-update-response"></div>
</div>


