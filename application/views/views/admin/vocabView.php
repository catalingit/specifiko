<div class="main">
    
    <h1>View Vocabulary "<?=$vocab->vocabulary?>"</h1>

    <table class="detail-view" id="yw0">
        
        <tr class="odd">
            <th>Chinese Translation</th>
            <td><?=$vocab->explain_zh?></td>
        </tr>
        
        <tr class="even">
            <th>Japanese Translation</th>
            <td><?=$vocab->explain_jp?></td>
        </tr>
        
        <tr class="odd">
            <th>Voice MP3</th>
            <td>
                <?=$vocab->voice_mp3?>
            </td>
        </tr>
        
        <tr class="even">
            <th>Description Picturre</th>
            <td>
                <?=$vocab->desc_pic?><br/>
                <img src="http://www.bilingoz.com/<?=$vocab->desc_pic?>">
            </td>
        </tr>
        
    </table>
    
    <p>&nbsp;</p>
    
    <p>
        <a class="button" href="/admin/vocabulary/update/<?=$vocab->vocabulary?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="button" href="/admin/vocabulary/index">Return to Vocabulary List</a>
    </p>
    
</div>


<script type="text/javascript">
    
    $(document).ready(function() {
        $('#voc-search-form').submit(function() { // catch the form's submit event
            
            $.ajax({ // create an AJAX call...
                
                type:'POST',
                url: '../../../admin/vocsearch',
                data:$('#voc-search-form').serialize(),
                
                success: function(response) { // on success..
                    $('#voc-search-table').html(response); // update the DIV
                }
                
            });
            
            return false; // cancel original event to prevent form submitting
        });
    });
</script>