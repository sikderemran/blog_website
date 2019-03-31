<?php include "header.php"; ?>
<script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
            setSidebarHeight();


        });
    </script>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                <?php
				 if(isset($_GET['delcat'])){
				    $catid=$_GET['delcat'];
				    $query="delete from tbl_cat where id='$catid'";
				    $catinsert=$db->delete($query);
				    if($catinsert){
				    	echo "<span class='success'>Category not delete successfully</span>";
				    }else echo "<span class='success'>Category delete successfully</span>";
				    }
			   ?>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$query="select * from tbl_cat order by id desc";
							$category=$db->select($query);
							if($category){
								$i=0;
								while ($result=$category->fetch_assoc()){
									$i++;
						?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['name']; ?></td>
							<td><a href="editcat.php?catid=<?php echo $result['id']; ?>">Edit</a> || <a onclick="return confirm('Are you sure ?');" href="?delcat=<?php echo $result['id']; ?>">Delete</a></td>
						</tr>
						<?php 	} } ?>
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
</body>
</html>
