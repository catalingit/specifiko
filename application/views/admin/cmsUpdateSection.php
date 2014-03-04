    <!-- include summernote -->
    <link rel="stylesheet/less" type="text/css" href="<?=serverAssets();?>css/summernote.less" /> 
    <script type="text/javascript" src="<?=serverAssets();?>js/summernote.js"></script>
    <link rel="stylesheet" type="text/css" href="<?=serverAssets();?>css/summernote.css" /> 
  
    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote({height: 300, focus: true});
        });
    </script>

<div class="container">
    
    <h3>View Page Section "<?=$section['page_name']?>"</h3>

    <form id="update-section-form" method="post">
        
        <table class="detail-view" id="yw0">
            
            <tr class="even">
                <th>English Content </th>
                <td>
                    <div class="summernote" id="content"><?php echo $section['content']; ?></textarea>
                </td>
            </tr>
            
            <tr class="even">
                <th>Chinese Content </th>
                <td>
                    <div class="summernote" id="ch_content"><?php echo $section['ch_content']; ?></textarea>
                </td>
            </tr>
            
            <tr class="even">
                <th>Japanese Content </th>
                <td>
                    <div class="summernote" id="jp_content"><?php echo $section['jp_content']; ?></textarea>
                </td>
            </tr>
            
        </table>
        
        <p>&nbsp;</p>
        
        <p>
            <input type="submit" class="btn btn-success" id="update-section-btn" value="Update Section"> &nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn pull-right" href="/admin/cms">Return to Page List</a>
        </p>
        
        <input type="hidden" name="id" id="sectionid" value="<?=$section['id']?>">
    </form>
    
    <!-- Update Response -->
    <div id="update-section-response"></div>
    
</div>