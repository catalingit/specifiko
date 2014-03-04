<a class="ui-dialog-close-button" onclick="$('#show-word-detail').dialog('close');"></a>

<h2><?=$vocabulary->vtext?></h2>

<!-- Chinese Terms -->
<strong>中文：</strong><br/>
    <?=$vocabulary->explain_zh?>
<br/><br/>

<!-- Japanese Terms -->
<strong>日本語：</strong><br/>
    <?=$vocabulary->explain_jp?>
<hr>
<br/>

Intermediate |
<?php if(!$this->session->userdata('user_id')): ?>
    <a href="../../signup">Register to track your vocabulary</a>
<?php else: ?>
    <span class="add"><a onclick="addvocabulary(<?=$vocabulary->id?>)">Add to my vocabulary</a></span>
<?php endif; ?>