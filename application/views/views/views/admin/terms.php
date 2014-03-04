<div class="container">
	
<h1>Terms</h1>

	<a href="/admin/term/create" class="btn btn-success pull-right">Create New Term</a>
        
	<table class="span12 table table-striped" id="termsTable">
		<thead>
			<tr>
				<th>ID</th>
				<th>Term Name</th>
				<th>Term Name (Chinese)</th>
				<th>Term Name (Japanese)</th>
				<th>Description</th>
				<th class="button-column">&nbsp;</th>
			</tr>

		</thead>
		
		<tbody>
			<?php
				//Loop through our users
				foreach($terms AS $term):
			?>
			<tr class="odd">
				<td><?=$term['tid']?></td>
				<td><?=$term['tname']?></td>
				<td><?=$term['tname_jp']?></td>
				<td><?=$term['tname_zh']?></td>
				<td><?=$term['description']?></td>
				<td class="button-column">
					<a class="btn btn-small btn-info" title="Update" href="/admin/terms/update/<?=$term['tid']?>"><i class="icon-pencil"></i></a> 
					<a class="btn btn-small btn-danger" title="Delete" href="/admin/terms/delete/<?=$term['tid']?>"><i class="icon-remove"></i></a> 
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

    
</div>

<script type="text/javascript" src="<?=serverAssets();?>js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
		$('#termsTable').dataTable({
            "bPaginate": true,
            "bSort": true
        });
	} );
</script>