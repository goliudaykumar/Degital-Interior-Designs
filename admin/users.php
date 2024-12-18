<?php
    require_once('header.php');
?>

        <main class="main-container">
            <div class="main-title">
                <h2>Users</h2>
            <div class="users">
                <table>
                    <tr>
                        <th>Sno</th>
                        <th>FullName</th>
                        <th>UserName</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>userType</th>
                        <th>create_time</th>
                        <th>Delete</th>
                    </tr>
                
                    <?php

                        $connect = mysqli_connect("localhost","root","","ff_interior_designs");

                        $query = "SELECT * FROM `users`";

                        if($res = mysqli_query($connect,$query)){
                            if(mysqli_num_rows($res)>0){
                                while($row = mysqli_fetch_array($res)){
                                    echo "<tr>";
                                    echo "<td>". $row["Sno"]."</td>";
                                    echo "<td>". $row["FullName"]."</td>";
                                    echo "<td>". $row["UserName"]."</td>";
                                    echo "<td>". $row["Mobile"]."</td>";
                                    echo "<td>". $row["Email"]."</td>";
                                    echo "<td>". $row["userType"]."</td>";
                                    echo "<td>". $row["create_time"]."</td>";
                                    echo "<td><a href='delete.php?id=".$row["Sno"]."'>Delete</a></td>"; 

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
</body>
</html>