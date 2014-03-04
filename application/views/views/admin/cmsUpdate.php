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
    
    <h3>View CMS Page "<?=$page['name']?>"</h3>

    <form id="update-page-form" method="post">
        
        <table class="detail-view" id="yw0">
            <tr class="odd">
                <th>Page Name</th>
                <td><input type="text" name="name" value="<?=$page['name']?>" id="pagename"></td>
            </tr>
            
            <tr class="even">
                <th>English Content </th>
                <td>
                    <div class="summernote" id="bodytxt"><?php echo $page['bodytxt']; ?></div>
                </td>
            </tr>
            
            <tr class="even">
                <th>Chinese Content </th>
                <td>
                    <div class="summernote" id="ch_bodytxt"><?php echo $page['ch_bodytxt']; ?></div>
                </td>
            </tr>
            
            <tr class="even">
                <th>Japanese Content </th>
                <td>
                    <div class="summernote" id="jp_bodytxt"><?php echo $page['jp_bodytxt']; ?></textarea>
                </td>
            </tr>
            
        </table>
        
        <p>&nbsp;</p>
        
        <p>
            <input type="submit" class="btn btn-success" id="update-page-btn" value="Update Page"> &nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn pull-right" href="/admin/cms">Return to Page List</a>
        </p>
        
        <input type="hidden" name="id" id="pageid" value="<?=$page['id']?>">
    </form>
    
    <!-- Update Response -->
    <div id="page-update-response"></div>
    
</div>