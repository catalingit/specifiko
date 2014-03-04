<div class="container">
    
    <h1>Update Term "<?=$term->tname?>"</h1>

    <table class="well span8">
        
        <form method="post" id="term-update-form">            
            
            <tr class="odd">
                <th>English Term</th>
                <td> <input type="text" name="tname" value="<?=$term->tname?>" size="100"></td>
            </tr>
            
            <tr class="odd">
                <th>Chinese Term</th>
                <td> <input type="text" name="tname_zh" value="<?=$term->tname_zh?>" size="100"></td>
            </tr>
            
            <tr class="even">
                <th>Japanese Term</th>
                <td><input type="text" name="tname_jp" value="<?=$term->tname_jp?>" size="100"></td>
            </tr>
        
            <tr>
                <td></td>
                <td>
                    <input type="submit" class="btn btn-success" id="term-update-btn" value="Update Term">
                </td>
            </tr>
            
            <!-- Term Update Response -->
            <div id="term-update-response"></div>
            
            <input type="hidden" name="termID" value="<?=$term->tid?>">
        </form>

    </table>
    
    <a class="btn pull-right" href="/admin/terms">Return to Term List</a>
    
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