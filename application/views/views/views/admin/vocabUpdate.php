<div class="container">
    
    <h1>Update Vocabulary "<?=$vocab->vocabulary?>"</h1>

    <table class="well span8">
        
        <form action="/admin/updateVocab" method="post" accept-charset="utf-8" enctype="multipart/form-data">            
            
            <tr class="odd">
                <th>English Translation</th>
                <td> <input type="text" name="vocabulary" value="<?=$vocab->vocabulary?>" size="100"></td>
            </tr>
            
            <tr class="odd">
                <th>Chinese Translation</th>
                <td> <input type="text" name="explain_zh" value="<?=$vocab->explain_zh?>" size="100"></td>
            </tr>
            
            <tr class="even">
                <th>Japanese Translation</th>
                <td><input type="text" name="explain_jp" value="<?=$vocab->explain_jp?>" size="100"></td>
            </tr>
            
            <tr class="odd">
                <th>Voice MP3</th>
                <td>
                    <input type="file" name="voice_mp3" size="100"><br/><br/>
                    
                    <!-- Flash Audio Player -->
                    <object type="application/x-shockwave-flash" data="<?=serverAssets();?>player/player_mp3.swf" width="200" height="20">
                        <param name="movie" value="<?=serverAssets();?>player/player_mp3.swf" />
                        <param name="FlashVars" value="mp3=../../../<?=$vocab->voice_mp3?>&amp;showstop=1&amp;showinfo=1" />
                    </object>
                </td>
            </tr>
            
            <tr class="even">
                <th>Description Picture</th>
                <td>
                    <input type="file" name="desc_pic" size="100"><br/>
                    <img src="http://www.bilingoz.com/<?=$vocab->desc_pic?>"><br/>
                    
                    <img src="../../../<?=$vocab->desc_pic?>" alt="No Photo Supplied" width="150"><br/>
                    <?=$vocab->desc_pic?>
                </td>
            </tr>
        
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="update-voc" value="Update Vocabulary">
                </td>
            </tr>
            
            <input type="hidden" name="vocID" value="<?=$vocab->vid?>">
        </form>
    </table>
    
    <p>&nbsp;</p>
    
    <a class="btn pull-right" href="/admin/vocabulary/index">Return to Vocabulary List</a>
    
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