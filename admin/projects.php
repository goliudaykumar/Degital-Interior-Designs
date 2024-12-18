<?php
    require_once('header.php');
?>

        <main class="main-container">
            <div class="main-title">
                <h2>Projects</h2>
                <button type="button" class="Pbtn" onclick="formShow()">Add+</button>
            </div>
            <div class="projects">
                <form id="Pform" method="post" enctype="multipart/form-data">
                        <label for="">Client Name: </label><input type="text" class="form-control" name="Cname" required><br><br>
                        <label for="">Project Name: </label><input type="text" class="form-control" name="Pname" required><br><br>
                        <label for="">Project Location: </label><input type="text" class="form-control" name="Plocation" required><br><br>
                        <label for="">Design Type: </label><select name="design" class="form-select">
                                                                <option value="">Select Design Type</option>
                                                                <option value="Traditional Interior Design">Traditional Interior Design</option>
                                                                <option value="Contemporary Interior Design">Contemporary Interior Design</option>
                                                                <option value="Modern Interior Design">Modern Interior Design</option>
                                                           </select><br><br>
                        <label for="">Start Date: </label><input type="date" class="form-control" name="date" required><br><br>
                        <label for="">Email: </label><input type="email" class="form-control" name="email" required><br><br>
                        <label for="">Mobile: </label><input type="text" class="form-control" name="mobile" required><br><br>

                        <label for="">Project Images: </label><input type="file" class="form-control" name="image" required><br><br>
                        <button type="submit"  name="btn">Add Service</button>
                </form>
                <?php
                    $connect = mysqli_connect("localhost","root","","ff_interior_designs");

                    if(isset($_POST["btn"])){
                        $cName = $_POST["Cname"];
                        $pName = $_POST["Pname"];
                        $pLocation = $_POST["Plocation"];
                        $design = $_POST["design"];
                        $date = $_POST["date"];
                        $email = $_POST["email"];
                        $mobile = $_POST["mobile"];
                        $images = $_FILES["image"]["name"];
                        $target = "../pages/assets/images".basename($images);
                        move_uploaded_file($_FILES["image"]["tmp_name"],$target);

                        $query = "INSERT INTO `projects`(`Client_Name`, `Project_Name`, `Project_Location`, `Design_type`, `Start_date`, `Email`, `Mobile`, `Projects_Images`) VALUES ('$cName','$pName','$pLocation','$design','$date','$email','$mobile','$images')";

                        if(mysqli_query($connect, $query)){
                            echo "<script>alert('New Project Added..!');</script>";
                        }else{
                            echo "<script>alert('Project Added Failed..!');</script>";

                        }
                            
                    }

                ?>
            </div>
            <!-- Retrive Data -->
            <div class="pro-table">
                    <table>
                        <tr>
                            <th>SNO</th>
                            <th>Client Name</th>
                            <th>Project Name</th>
                            <th>Project Location</th>
                            <th>Design Type</th>
                            <th>Date</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Project Images</th>
                            <th>Delete</th>
                            <th>Status</th>
                        </tr>
                        <?php

                            $query1 = "SELECT * FROM `projects`";

                            if($res = mysqli_query($connect,$query1)){
                                if(mysqli_num_rows($res)>0){
                                    while($row = mysqli_fetch_array($res)){
                                        echo "<tr>";
                                            echo "<td>". $row["SNo"] . "</td>";
                                            echo "<td>". $row["Client_Name"] . "</td>";
                                            echo "<td>". $row["Project_Name"] . "</td>";
                                            echo "<td>". $row["Project_Location"] . "</td>";
                                            echo "<td>". $row["Design_type"] . "</td>";
                                            echo "<td>". $row["Start_date"] . "</td>";
                                            echo "<td>". $row["Email"] . "</td>";
                                            echo "<td>". $row["Mobile"] . "</td>";
                                            echo "<td>". $row["Projects_Images"] . "</td>";

                                            echo "<td><a href='pro_delete.php?id4=" .$row["SNo"]."'>Delete</a></td>";
                                            echo "<td><a href='pro_status.php?id5=" .$row["SNo"]."'>Status</a></td>";

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
            var form = document.getElementById("Pform");

            if(form.style.display === "none"){
                form.style.display = "block";
            }else{
                form.style.display = "none";
            }
        }
    </script>
</body>
</html>