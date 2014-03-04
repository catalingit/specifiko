<div class="main">
    
	<script type="text/javascript">
        function add(el) {
            $.get($(el).attr("href")+"/id/<?=$video['id']?>");
        }
    </script>
    
    <h1>View Video #<?=$video['id']?></h1>

    <table class="detail-view" id="yw0">
        
        <tr class="odd">
            <th>Title</th>
            <td><?=$video['title']?></td>
        </tr>
        
        <tr class="even">
            <th>Description</th>
            <td>
                <?=$video['description']?>
            </td>
        </tr>
        
        <tr class="odd">
            <th>Transcript</th>
            <td>
                <?=$video['transcript']?>
            </td>
        </tr>
        
        <tr class="even">
            <th>Post Date</th>
            <td><?=$video['post_date']?></td>
        </tr>
        
        <tr class="odd">
            <th>Video File</th>
            <td>
                <?=$video['video_file']?><br/>
                <a href="<?=$video['video_file']?>" class="button">Download</a>
            </td>
        </tr>
        
        <tr class="even">
            <th>Embedded Code</th>
            <td>
                <?=$video['embedded_code']?>
            </td>
        </tr>
        
        <tr class="odd">
            <th>Video Type</th>
            <td><?=$video['video_type']?></td>
        </tr>
        
        <tr class="even">
            <th>Thumbnail</th>
            <td>
                <?=$video['thumbnail_pic']?><br/>
                <img src="http://www.bilingoz.com/<?=$video['thumbnail_pic']?>"/>
            </td>
        </tr>
        
        <tr class="odd">
            <th>Preview</th>
            <td>
                <?=$video['preview_pic']?><br/>
                <img src="http://www.bilingoz.com/<?=$video['preview_pic']?>"/>
            </td>
        </tr>
        
        <tr class="even">
            <th>Caption File</th>
            <td>
                <?=$video['caption_file']?><br/>
                <a href="/assets/files/video/2011/FDA/FDA_201101_106/FDA_201101_106_1/FDA_201101_106_1.xml" class="button">Download</a>
            </td>
        </tr>
        
        <tr class="odd">
            <th>Level</th>
            <td><?= videoLevel($video['level']); ?></td>
        </tr>
        
        <tr class="even">
            <th>Resource Year</th>
            <td><?=$video['resource_year']?></td>
        </tr>
        
        <tr class="odd">
            <th>View Count</th>
            <td><?=$video['view_count']?></td>
        </tr>
    </table>
    
    <!-- Vocabulary -->
    <h2>Vocabulary</h2>
    
    <div id="video-voc-grid" class="grid-view">
        
        <div class="summary"></div>
        
        <table class="items">
            <thead>
                <tr>
                    <th>id</th>
                    <th>vocabulary</th>
                    <th>current_zh</th>
                    <th>current_jp</th>
                    <th class="button-column">&nbsp;</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                    //Loop through the video's vocabulary terms
                    foreach($vocabulary AS $terms):
                ?>
                
                <tr class="odd">
                    <td><?=$terms['id']?></td>
                    <td><?=$terms['vtext']?></td>
                    <td><?=$terms['explain_zh']?></td>
                    <td><?=$terms['explain_jp']?></td>
                    <td class="button-column">
                        <a style="display:none;" title="View"><img src="/assets/d479ad1/gridview/view.png" alt="View" /></a>
                        <a class="update" title="Update" href="/admin/video/updatevoc/id/<?=$terms['id']?>"><img src="/assets/d479ad1/gridview/update.png" alt="Update" /></a>
                        <a class="delete" title="Delete" href="/admin/video/deletevoc/id/<?=$terms['id']?>"><img src="/assets/d479ad1/gridview/delete.png" alt="Delete" /></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <div class="keys" style="display:none" title="/admin/video/view/id/1934">
            
            <span>17040</span>
            <span>17701</span> <span>18309</span><span>18542</span><span>29320</span><span>19742</span><span>8719</span><span>20007</span><span>20009</span>
            <span>20010</span><span>20011</span><span>20174</span><span>20663</span>
            <span>8844</span><span>3750</span><span>20934</span><span>21073</span><span>4080</span><span>21417</span><span>21435</span>
            <span>21445</span><span>21719</span><span>29902</span><span>21756</span><span>21827</span><span>21872</span><span>22149</span>
            <span>22302</span><span>22383</span><span>9166</span><span>22805</span><span>22915</span><span>9293</span><span>23447</span>
            <span>30348</span><span>9415</span><span>24304</span><span>24512</span><span>24794</span><span>26299</span><span>26691</span>
            <span>26721</span><span>26737</span><span>26989</span><span>27143</span><span>27190</span><span>27216</span><span>27378</span>
            <span>10189</span><span>28085</span><span>28142</span><span>28193</span><span>28194</span><span>28337</span><span>30764</span>
        </div>
        
    </div>
 
    <p>
        <strong>Add Vocabulary:(search & add to video vocabluary list)</strong>
    </p>
    
    <div id="vocabulary-grid" class="grid-view">
    
        <table class="items">
            <thead>
                <tr>
                    <th id="vocabulary-grid_c0">vocabulary</th>
                    <th id="vocabulary-grid_c1">Level</th>
                    <th id="vocabulary-grid_c2">explain_zh</th>
                    <th id="vocabulary-grid_c3">explain_jp</th>
                    <th class="button-column" id="vocabulary-grid_c4">&nbsp;</th>
                </tr>
                
                <tr class="filters" id="voc-search-table">
                    <td>
                        <form method="post" name="vocab_search" id="voc-search-form">
                            <input id="vocabulary_search" name="vocabulary_search" type="text" maxlength="100" />
                        </form>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td colspan="5"><span class="empty">No results found.</span></td>
                </tr>
            </tbody>
        </table>
        
        <div class="keys" style="display:none" title="/admin/video/view/id/1934"></div>
        
    </div>
    
    <h2>Actor Biography</h2>
    
    <div id="video-bio-grid" class="grid-view">
        
        <div class="summary">Displaying 1-3 of 3 result(s).</div>
        
        <table class="items">
            <thead>
                <tr>
                    <th id="video-bio-grid_c0">id</th>
                    <th id="video-bio-grid_c1">subject</th>
                    <th id="video-bio-grid_c2">Actor Name</th>
                    <th class="button-column" id="video-bio-grid_c3">&nbsp;</th>
                </tr>
            </thead>
            
            <tbody>
                
                <?php
                    //Loop through the speakers
                    foreach($speakers AS $speaker):
                ?>
                <tr class="odd">
                    <td><?=$speaker['id']?></td>
                    <td><?=$speaker['subject']?></td>
                    <td><?=$speaker['name_cache']?></td>
                    <td class="button-column">
                        <a class="view" title="View" href="/admin/biography/view/id/0"><img src="/assets/d479ad1/gridview/view.png" alt="View" /></a>
                        <a style="display:none;" title="Update" href="#"><img src="/assets/d479ad1/gridview/update.png" alt="Update" /></a>
                        <a class="delete" title="Delete" href="/admin/video/delbio/bid/3519"><img src="/assets/d479ad1/gridview/delete.png" alt="Delete" /></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <div class="keys" style="display:none" title="/admin/video/view/id/1934"><span>3519</span><span>3520</span><span>3521</span></div>
    </div>
    
    <p>&nbsp;</p>
    
    <p>
        <a class="button" href="/admin/video/update/id/1934">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="button" href="/admin/video/index">Return to Video List</a>
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