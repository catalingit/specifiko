<div class="container">
	
<h1>Vocabulary</h1>
        
	<a href="/admin/term/create" class="btn btn-success pull-right">Create</a>
		
	<table class="span12 table table-striped" id="termsTable">
		<thead>
			<tr>
				<th>ID</th>
				<th>Vocabulary</th>
				<th>Phrase (Chinese)</th>
				<th>Phrase (Japanese)</th>
				<th>Level</th>
				<th class="button-column">&nbsp;</th>
			</tr>

		</thead>
		
		<tbody>
			<?php
				//Loop through our users
				foreach($vocabulary AS $voc):
			?>
			<tr class="odd">
				<td><?=$voc['vid']?></td>
				<td><?=$voc['vocabulary']?></td>
				<td><?=$voc['explain_zh']?></td>
				<td><?=$voc['explain_jp']?></td>
				<td><?=$voc['level']?></td>
				<td class="button-column">
					<a class="btn btn-small btn-info" title="Update" href="/admin/vocabulary/update/<?=$voc['vid']?>"><i class="icon-pencil"></i></a> 
					<a class="btn btn-small btn-danger" title="Delete" href="/admin/vocabulary/delete/<?=$voc['vid']?>"><i class="icon-remove"></i></a> 
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