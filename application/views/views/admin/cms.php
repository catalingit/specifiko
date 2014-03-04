<div class="container">
	
<h1>CMS</h1>

    <div id="user-grid" class="grid-view">
        
        <table class="span12 table table-striped" id="cmsTable">
        <thead>
			<tr>
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
						<td><?=$page['name']?></td>
						<td><?=$page['status']?></td>
						<td class="button-column">
							<a class="btn btn-small" title="Update" href="/admin/cms/update/<?=$page['id']?>"><i class="icon-pencil"></i></a>
						</td>
					</tr>
					
						<?php
							//Load content sections
							if($page['name'] == "Home Page"):
						?>
							<tr>
								<td>> <strong>Home Page</strong></td>
								<td>Top Right</td>
								<td class="button-column">
									<a class="btn btn-small" title="Update" href="../cms/updateSection/1"><i class="icon-pencil"></i></a>
								</td>
							</tr>
							<tr>
								<td>> <strong>Home Page</strong></td>
								<td>The Specifiko Solution</td>
								<td class="button-column">
									<a class="btn btn-small" title="Update" href="../cms/updateSection/2"><i class="icon-pencil"></i></a>
								</td>
							</tr>
							<tr>
								<td>> <strong>Home Page</strong></td>
								<td>Our Methods</td>
								<td class="button-column">
									<a class="btn btn-small" title="Update" href="../cms/updateSection/3"><i class="icon-pencil"></i></a>
								</td>
							</tr>
						<?php endif; ?>
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