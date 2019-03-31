<?php include "header.php"; ?>
<?php
 if(!isset($_GET['catid']) || $_GET['catid']==NULL){
    headre("Location:catlist.php");
    }else{
    $catid=$_GET['catid'];
    }
    ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>update Category</h2>
               <div class="block copyblock"> 
                <?php 
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                        $name=$_POST['name'];
                        $name=mysqli_real_escape_string($db->link,$name);
                        if(empty($name)){
                            echo "filled must not be empty";
                        }else{
                            $query="update tbl_cat
                                    set
                                    name='$name'
                                    where id='$catid'";
                            $catinsert=$db->insert($query);
                            if(!$catinsert){
                                echo "insert not successfully";
                            }else{
                                echo "insert successfully";
                            }
                        }
                    }
                ?>
                 <?php 
                    $query="select * from tbl_cat where id='$catid' order by id desc";
                    $updateCat=$db->select($query);
                    while($result=$updateCat->fetch_assoc()){
                  ?>
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="name" value="<?php echo $result['name']; ?>" class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php } ?>
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
