<?php include "header.php";  ?>
<!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
    <?php
        if(!isset($_GET['editid']) || $_GET['editid']==NULL){
            header("Location:postlist.php");
        }else{
            $editid=$_GET['editid'];
        }
    ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Post</h2>
                <?php
                 if($_SERVER['REQUEST_METHOD']=='POST'){
                    $title=mysqli_real_escape_string($db->link,$_POST['title']);
                    $cat=mysqli_real_escape_string($db->link,$_POST['cat']);
                    $body=mysqli_real_escape_string($db->link,$_POST['body']);
                    $tags=mysqli_real_escape_string($db->link,$_POST['tags']);
                    $author=mysqli_real_escape_string($db->link,$_POST['author']);

                   
                    if ($title=="" || $cat=="" || $body=="" || $tags=="" || $author=="") {
                        echo "not be empty";
                    }
                    else{
                    $query = "UPDATE tbl_post SET 
                     cat='$cat'
                    ,title='$title'
                    ,body='$body'
                    ,author='$author'
                    ,tags='$tags' 
                     where 
                     id='$editid'
                     ";

                    $inserted_rows = $db->update($query);
                    if ($inserted_rows) {
                     echo "<span class='success'>Image Inserted Successfully.
                     </span>";
                    }else {
                     echo "<span class='error'>Image Not Inserted !</span>";
                    }
                    }

                }
                ?>
                <div class="block"> 
                    <?php
                        $query="select * from tbl_post where id='$editid'";
                        $getpost=$db->select($query);
                        if($getpost){
                            while($postresult=$getpost->fetch_assoc()){
                        
                     ?>              
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" value="<?php echo $postresult['title']; ?>"  class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" name="cat">
                                    <?php
                                        $query="select * from tbl_cat";
                                        $cat=$db->select($query);
                                        while($result=$cat->fetch_assoc()){
                                     ?>
                                        <option 
                                        <?php if($postresult['cat']==$result['id']){?>
                                            selected="selected"
                                        <?php }?> value="<?php echo $result['id']; ?>"><?php echo $result['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body" ><?php echo $postresult['body']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Tags</label>
                            </td>
                            <td>
                                <input type="text" name="tags" value="<?php echo $postresult['tags']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Author</label>
                            </td>
                            <td>
                                <input type="text" name="author" value="<?php echo $postresult['author']; ?>"  class="medium" />
                            </td>
                        </tr>
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php }} ?>
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
