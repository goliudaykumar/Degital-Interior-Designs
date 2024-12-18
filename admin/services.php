<?php
    require_once('header.php');
?>

        <main class="main-container">
            <div class="main-title">
                <h2>Services</h2>
                <button type="button" class="servbtn" onclick="formShow()">Add+</button>
                <div class="serv">
                    <form id="servForm" method="post" enctype="multipart/form-data">
                        <label for="">Service Name: </label><input type="text" class="form-control" name="serv_name" required><br><br>
                        <label for="">Description: </label><textarea name="description" class="form-control" id="" required></textarea><br><br>
                        <label for="">Image: </label><input type="file" class="form-control" name="image" required><br><br>
                        <button type="submit"  name="btn">Add Service</button>
                    </form>
                    <?php

                        $connect = mysqli_connect("localhost","root","","ff_interior_designs");

                        if(isset($_POST['btn'])){
                            $serv_name = $_POST["serv_name"];
                            $description = $_POST["description"];
                            $image = $_FILES["image"]["name"];
                            $target = "../pages/assets/".basename($image);
                            move_uploaded_file($_FILES["image"]["tmp_name"],$target);

                            $query = "INSERT INTO `services`(`Service_Name`, `Description`, `Image`) VALUES ('$serv_name','$description','$image')";

                            if(mysqli_query($connect,$query)){
                                echo "<script>alert('New Service Added..!');</script>";
                            }else{
                                echo "<script>alert('Service Added Failed..!');</script>";

                            }
                        }


                    ?>
                </div>
                    <!--  retrive data  -->
         
            </div>
            <div class="serv-table">
                            <table>
                                <tr>
                                    <th>Sno</th>
                                    <th>Service Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Delete</th>
                                    <th>Update</th>
                                </tr>
                                <?php

                                    $connect = mysqli_connect("localhost","root","","ff_interior_designs");

                                    $query = "SELECT * FROM `services`";

                                    if($res = mysqli_query($connect,$query)){
                                        if(mysqli_num_rows($res)>0){
                                            while($row = mysqli_fetch_array($res)){
                                                echo "<tr>";
                                                echo "<td>". $row["Sno"]."</td>";
                                                echo "<td>". $row["Service_Name"]."</td>";
                                                echo "<td>". $row["Description"]."</td>";
                                                echo "<td>". $row["Image"]."</td>";
                                                
                                                echo "<td><a href='delete.php?id1=".$row["Sno"]."'>Delete</a></td>"; 
                                                echo "<td><a href='update.php?id2=".$row["Sno"]."'>Update</a></td>"; 

                                                echo "</tr>";
                                            }
                                            echo "</table>";
                                        }
                                    }

                                ?>
                    </div>
            
        </main>
    </div>
    <script>
        var sidebarOpen = false;
        var sidebar = document.getElementById("sidebar");

        function openSidebar(){
            if(!sidebarOpen){
                sidebar.classList.add("sidebar-responsive");
                sidebarOpen = true;
            }
        }

        function closeSidebar(){
            if(sidebarOpen){
                sidebar.classList.remove("sidebar-responsive");
                sidebarOpen = false;
            }
        }
    </script>
    <script>
        function formShow(){
            var form = document.getElementById("servForm");

            if(form.style.display === "none"){
                form.style.display = "block";
            }else{
                form.style.display = "none";
            }
        }
    </script>
</body>
</html>