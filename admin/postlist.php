<?php include "header.php" ?>
<?php
if(!isset($_GET['delid']) || isset($_GET['delid'])==NULL){
	 
}else{
	$delid=$_GET['delid'];
	$query="DELETE FROM tbl_post WHERE id=$delid";
	$resultdelid=$db->delete($query);
	echo "<script>alert('data delete successfully');</script>";
}
 ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Post List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="5%">No.</th>
							<th width="15%">Post Title</th>
							<th width="15%">Description</th>
							<th width="10%">Category</th>
							<th width="10%">Author</th>
							<th width="10%">Tags</th>
							<th width="10%">Date</th>
							<th width="15%">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query="select tbl_post.*, tbl_cat.name from tbl_post inner join tbl_cat on tbl_post.cat=tbl_cat.id
							 order by tbl_post.title desc";
						 	$post=$db->select($query);
						 	if($post){
						 		$i=0;
						 		while($result=$post->fetch_assoc()){
						 			$i++;
						 ?>
						<tr class="gradeU">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['title']; ?></td>
							<td><?php echo $fm->textShorten($result['body'],50); ?></td>
							<td><?php echo $result['name']; ?></td>
							<td><?php echo $result['author']; ?></td>
							<td><?php echo $result['tags']; ?></td>
							<td><?php echo $fm->formatDate($result['date']); ?></td>
							<td><a href="editpost.php?editid=<?php echo $result['id']; ?>">Edit</a> || 
								<a onclick ="return confirm('are you sure')" href="?delid=<?php echo $result['id']; ?>">Delete</a></td>
						</tr>
						<?php }} ?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
	<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
			setSidebarHeight();
        });
    </script>
	   
</body>
</html>
