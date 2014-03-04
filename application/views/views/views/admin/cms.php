<div class="container">
	
<h1>CMS</h1>

    <div id="user-grid" class="grid-view">
        
        <table class="span12 table table-striped" id="cmsTable">
        <thead>
			<tr>
				<th>ID</th>
				<th>Page</th>
				<th>Status</th>
				<th>Option</th>
			</tr>
		</thead>
            
            <tbody>
                <?php
                    //Loop through our users
                    foreach($pages AS $page):
                ?>
                <tr class="odd">
                    <td><?=$page['id']?></td>
                    <td><?=$page['name']?></td>
                    <td><?=$page['status']?></td>
                    <td class="button-column">
                        <a class="btn btn-small" title="Update" href="/admin/cms/update/<?=$page['id']?>"><i class="icon-pencil"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    
</div>

<script type="text/javascript" src="<?=serverAssets();?>js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
		$('#cmsTable').dataTable({
            "bPaginate": true,
            "bSort": true
        });
	} );
</script>