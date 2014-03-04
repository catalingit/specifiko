<div class="container">
	
    <h1>Biographys</h1>
        
        <table class="span12 table table-striped" id="bioTable">
            
        <thead>
            <tr>
                <th>Name</th>
                <th>Title</th>
                <th>Bio</th>
                <th width="100">Bio Options</th>
            </tr>
            
        </thead>
        
        <tbody>
            <?php
                //Loop through the biographies
                foreach($biographies AS $bio):
            ?>
            <tr class="odd">
                <td><?=$bio['name']?></td>
                <td><?=$bio['title']?></td>
                <td><?php echo substr($bio['bio'],0,200); ?>...</td>
                
                <td class="button-column">
                    <a class="btn btn-small" title="View" href="/admin/biography/view/<?=$bio['bid']?>"><i class="icon-eye-open"></i></a> 
                    <a class="btn btn-small btn-info" title="Update" href="/admin/biography/update/<?=$bio['bid']?>"><i class="icon-pencil"></i></a> 
                    <a class="btn btn-small btn-danger" title="Delete" href="/admin/biography/delete/<?=$bio['bid']?>"><i class="icon-remove"></i></a> 
                </td>
            </tr>
            <?php endforeach; ?>
            
            </tbody>
        </table>
        
        <div class="keys" style="display:none" title="/admin/biography"><span>5</span><span>4</span></div>

</div>

<script type="text/javascript" src="<?=serverAssets();?>js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
		$('#bioTable').dataTable({
            "bPaginate": true,
            "bSort": true
        });
	} );
</script>