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
                        echo "must be content";
                    }else{
                    $query = "INSERT INTO tbl_post(cat,title,body,author,tags) 
                    VALUES('$cat','$title','$body','$author','$tags')";
                    $inserted_rows = $db->insert($query);
                    if ($inserted_rows) {
                     echo "<span class='success'>Not Inserted Successfully.
                     </span>";
                    }else {
                     echo "<span class='error'>Inserted Successfully.</span>";
                    }
                    }
                }

                ?>
                <div class="block">               
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" placeholder="Enter Post Title..." class="medium" />
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
                                        <option value="<?php echo $result['id']; ?>"><?php echo $result['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                   
                    
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body" ></textarea>
                            </td>
                        </tr>

                        
                        <tr>
                            <td>
                                <label>Tags</label>
                            </td>
                            <td>
                                <input type="text" name="tags" placeholder="Enter tags name..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Author</label>
                            </td>
                            <td>
                                <input type="text" name="author" placeholder="Enter author name..." class="medium" />
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
