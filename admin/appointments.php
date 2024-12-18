
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Rs Dashboard</title>
</head>
<body>
    <div class="grid-container">
        <header  class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-icons-outlined">
                    <i class="bi bi-list"></i>
                </span>  
            </div>
            <div class="header-left">
                <span class="material-icons-outlined">
                    <i class="bi bi-search"></i>
                </span>  
            </div>
            <div class="header-right">
                <span class="material-icons-outlined">
                <h4>welcome <span>Admin <i class="bi bi-person-circle"></i> </h4>
                                   
                </span>  
            </div>
        </header>


        <aside id="sidebar">
            <div class="sidebar-title">
               <div class="sidebar-brand">
                <span class="material-icons-outlined">
                    <i class="bi bi-view-list">Dashboard</i>                
                </span>  
               </div>     
               <span class="material-icons-outlined" onclick="closeSidebar()">
                    <i class="bi bi-x-lg"></i>
               </span>       
            </div>
            <ul class="sidebar-list">
            <a href="index.php"><li class="sidebar-list-item">
                    <span class="material-icons-outlined">
                        <i class="bi bi-view-list"> Dashboard</i>                
                    </span>  
                </li></a>
                <a href="users.php"><li class="sidebar-list-item">
                    <span class="material-icons-outlined">
                        <i class="bi bi-people-fill"> Users</i>                    
                    </span>  
                </li></a>
                <a href="projects.php"><li class="sidebar-list-item">
                    <span class="material-icons-outlined">
                        <i class="bi bi-briefcase"> Projects</i>                    
                    </span>  
                </li></a>
                <a href="services.php">
                <li class="sidebar-list-item">
                    <span class="material-icons-outlined">
                        <i class="bi bi-shop"> Services</i>                
                    </span>  
                </li>
                </a>
                <a href="enquiry.php">
                <li class="sidebar-list-item">
                    <span class="material-icons-outlined">
                        <i class="bi bi-shop">Enquiries</i>                
                    </span>  
                </li>
                </a>
                <a href="appointments.php">
                <li class="sidebar-list-item">
                    <span class="material-icons-outlined">
                        <i class="bi bi-bar-chart-line-fill"> Analytics</i>                
                    </span>  
                </li>
                </a>
                <a href="settings.php">
                <li class="sidebar-list-item">
                    <span class="material-icons-outlined">
                        <i class="bi bi-gear-fill"> Settings</i>                
                    </span>  
                </li>
                </a>
            </ul>
            <button type="button"><a href="../logout.php">Logout</a></button>
        </aside>


        <main class="main-container">
            <div class="main-title">
                <h2>Appointments</h2>
            </div>
            <div class="appointments">
                    <table>
                        <tr>
                            <th>Sno</th>
                            <th>FullName</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Preferred Date</th>
                            <th>Preferred Time</th>
                            <th>Service Type</th>
                            <th>Budget</th>
                            <th>Design Suggetions</th>
                            <th>Appointment Location</th>
                            <th>Reminder</th>
                            <th>Status</th>
                            <th>Delete</th>
                            
                        </tr>
                    <?php
                          $connect = mysqli_connect("localhost","root","","ff_interior_designs");
                          $query = "SELECT * FROM `booking_appointment`";

                          if($res = mysqli_query($connect,$query)){
                            if(mysqli_num_rows($res)>0){
                                while($row = mysqli_fetch_array($res)){
                                    echo "<tr>";
                                    echo "<td>". $row["Sno"]."</td>";
                                    echo "<td>". $row["FullName"]."</td>";
                                    echo "<td>". $row["Email"]."</td>";
                                    echo "<td>". $row["Phone"]."</td>";
                                    echo "<td>". $row["Address"]."</td>";
                                    echo "<td>". $row["Preferred_Date"]."</td>";
                                    echo "<td>". $row["Preferred_Time"]."</td>";
                                    echo "<td>". $row["Services_Type"]."</td>";
                                    echo "<td>". $row["Budget"]."</td>";
                                    echo "<td>". $row["Design_Preferance"]."</td>";
                                    echo "<td>". $row["Appointment_Location"]."</td>";
                                    echo "<td>". $row["Reminder"]."</td>";
                                    echo "<td><a href='app_confirm.php?id6=".$row["Sno"]."'>Confirm</a></td>"; 

                                    echo "<td><a href='app_delete.php?id3=".$row["Sno"]."'>Delete</a></td>"; 

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

