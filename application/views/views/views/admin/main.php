<div class="container">
    
    <h1>Videos</h1>
    
    <a class="btn btn-success pull-right" href="/admin/video/create">Add Video</a>
    
    <table class="span12 table table-striped" id="videoTable">
        <thead>
            <tr>
                <th>Title</th>
                <th>Post Date</th>
                <th>Level</th>
                <th>Resource Year</th>
                <th>View Count</th>
                <th width="100">&nbsp;</th>
            </tr>
        </thead>
        
        <tbody>
            
            <?php
                //Loop through all of our videos
                foreach($videos AS $videoInfo):
            ?>
            
            <tr class="odd">
                <td><?=$videoInfo['title']?></td>
                <td><?=$videoInfo['post_date']?></td>
                <td><?= videoLevel($videoInfo['level']); ?></td>
                <td><?=$videoInfo['resource_year']?></td>
                <td><?=$videoInfo['view_count']?></td>
                <td class="button-column">
                    <a class="btn btn-small" href="/admin/video/view/<?=$videoInfo['id']?>"><i class="icon-eye-open"></i></a> 
                    <a class="btn btn-small btn-info" title="Update" href="/admin/video/update/<?=$videoInfo['id']?>"><i class="icon-pencil"></i></a> 
                    <a class="btn btn-small btn-danger" title="Delete" href="/admin/video/delete/<?=$videoInfo['id']?>"><i class="icon-remove"></i></a> 
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>    

<script type="text/javascript" src="<?=serverAssets();?>js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
		$('#videoTable').dataTable({
            "bPaginate": true,
            "bSort": true
        });
	} );
</script>
