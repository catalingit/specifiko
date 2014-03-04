<div class="main">
    
    <h1>Update User "<?=$user->name?>"</h1>

    <table class="detail-view" id="yw0">
        

        <form action="/admin/updateVocab" method="post" id="user-update-form">            
            
            <tr class="odd">
                <th>Name</th>
                <td> <input type="text" name="name" value="<?=$user->name?>" size="100"></td>
            </tr>
            
            <tr class="odd">
                <th>Email</th>
                <td> <input type="text" name="email" value="<?=$user->email?>" size="100"></td>
            </tr>
            
            <tr class="odd">
                <th>Organization Name</th>
                <td> <input type="text" name="organization" value="<?=$user->organization?>" size="100"></td>
            </tr>
            
            <tr class="odd">
                <th>Account Status</th>
                <td>
                    <select name="account_status">
                        <option value="Active" <?php if($user->account_status == "Active"): ?>selected="selected"<?php endif; ?>>Active</option>
                        <option value="Inactive" <?php if($user->account_status == "Inactive"): ?>selected="selected"<?php endif; ?>>Inactive</option>
                    </select>
                </td>
            </tr>
            
            <tr class="odd">
                <th>User Level</th>
                <td>
                    <select name="user_level">
                        <option value="Member" <?php if($user->user_level === "Member"): ?>selected="selected"<?php endif; ?>>Member</option>
                        <option value="Admin" <?php if($user->user_level === "Admin"): ?>selected="selected"<?php endif; ?>>Admin</option>
                    </select>
                </td>
            </tr>
        
            <tr>
                <td></td>
                <td>
                    <input type="submit" class="btn btn-success" value="Update User" id="user-update-btn">
                </td>
            </tr>
            
            <input type="hidden" name="userID" value="<?=$user->id?>">
        </form>
    </table>
    
    <!-- Backend AJax Reposnse -->
    <div id="user-update-response"></div>
    
    <p>&nbsp;</p>
    
    <p>
        <a class="btn" href="/admin/users">Return to User List</a>
    </p>
    
</div>