<div class="container">
	
<h1>Users</h1>
        
	<table class="span12 table table-striped" id="userTable">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Organization</th>
				<th>Native Language</th>
				<th>Home Country</th>
				<th>Registertime</th>
				<th>Login Count</th>
				<th>Last Login Time</th>
				<th class="button-column">&nbsp;</th>
			</tr>

		</thead>
		
		<tbody>
			<?php
				//Loop through our users
				foreach($users AS $userInfo):
			?>
			<tr class="odd">
				<td><?=$userInfo['id']?></td>
				<td><?=$userInfo['name']?></td>
				<td><?=$userInfo['email']?></td>
				<td><?=$userInfo['organization']?></td>
				<td><?=$userInfo['native_language']?></td>
				<td><?=$userInfo['home_country']?></td>
				<td><?=substr($userInfo['registertime'],0,11);?></td>
				<td><?=$userInfo['login_count']?></td>
				<td><?=$userInfo['last_login']?></td>
				<td class="button-column">
					<a class="btn btn-small btn-info" title="Update" href="/admin/users/update/<?=$userInfo['id']?>"><i class="icon-pencil"></i></a> 
					<a class="btn btn-small btn-danger" title="Delete" href="/admin/users/delete/<?=$userInfo['id']?>"><i class="icon-remove"></i></a> 
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
    
</div>

<script type="text/javascript" src="<?=serverAssets();?>js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
		$('#userTable').dataTable({
            "bPaginate": true,
            "bSort": true
        });
	} );
</script>