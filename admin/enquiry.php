<?php
    require_once('header.php');
?>

        <main class="main-container">
            <div class="main-title">
                <h2>Enquiries</h2>
            </div>
            <div class="enquiries">
                    <table>
                        <tr>
                            <th>Sno</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>MobileNo</th>
                            <th>Message</th> 
                            <th>Delete</th>                           
                        </tr>
                        <?php
                          $connect = mysqli_connect("localhost","root","","ff_interior_designs");
                          $query = "SELECT * FROM `enquiry`";

                          if($res = mysqli_query($connect,$query)){
                            if(mysqli_num_rows($res)>0){
                                while($row = mysqli_fetch_array($res)){
                                    echo "<tr>";
                                    echo "<td>". $row["SNO"]."</td>";
                                    echo "<td>". $row["Name"]."</td>";
                                    echo "<td>". $row["Email"]."</td>";
                                    echo "<td>". $row["MobileNo"]."</td>";
                                    echo "<td>". $row["Message"]."</td>";
                                    echo "<td><a href='en_delete.php?id2=".$row["SNO"]."'>Delete</a></td>"; 

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