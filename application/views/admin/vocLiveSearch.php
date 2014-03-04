<?php
    //loop through the searched for terms
    foreach($vocabTerms AS $voc):
?>

    <tr>
        <td><?=$voc['vtext']?></td>
        <td><?= videoLevel($voc['level']); ?></td>
        <td>1</td>
        <td><?=$voc['explain_zh']?></td>
        <td><?=$voc['explain_jp']?></td>
    </tr>

<?php endforeach; ?>