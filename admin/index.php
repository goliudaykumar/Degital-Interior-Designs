<?php
    require_once('header.php');
?>

        <main class="main-container">
            <div class="main-title">
                <h2>Dashboard</h2>
            </div>
            <div class="main-cards">
                <a href="users.php" class="card" >
                    <div class="card-inner">
                        <h4>Users</h4>
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <?php
                        $connect = mysqli_connect("localhost","root","","ff_interior_designs");

                        $totalUsers = "SELECT * FROM `users`";
                        $usersQuery = mysqli_query($connect,$totalUsers);

                        if($users = mysqli_num_rows($usersQuery)){
                            echo '<h3>'.$users.'</h3>';
                        }else{
                            echo '<h3>No Data</h3>';
                        }
                    ?>
                    
                </a>
                <a href="projects.php" class="card">
                    <div class="card-inner">
                        <h4>Projects</h4>
                        <i class="bi bi-briefcase"></i>

                    </div>
                    <h3>125+</h3>
                </a>
                <a href="services.php" class="card">
                    <div class="card-inner">
                        <h4>Services</h4>
                        <i class="bi bi-shop"></i>

                    </div>
                    <?php
                        $connect = mysqli_connect("localhost","root","","ff_interior_designs");

                        $totalServices = "SELECT * FROM `services`";
                        $servicesQuery = mysqli_query($connect,$totalServices);

                        if($services = mysqli_num_rows($servicesQuery)){
                            echo '<h3>'.$services.'</h3>';
                        }else{
                            echo '<h3>No Data</h3>';
                        }
                    ?>
                  
                </a>
                <a href="enquiry.php" class="card">
                    <div class="card-inner">
                        <h4>Enquiry</h4>
                        <i class="bi bi-cart"></i>

                    </div>
                    <?php
                        $connect = mysqli_connect("localhost","root","","ff_interior_designs");

                        $totalEnquiries = "SELECT * FROM `enquiry`";
                        $enquiriesQuery = mysqli_query($connect,$totalEnquiries);

                        if($enquiries = mysqli_num_rows($enquiriesQuery)){
                            echo '<h3>'.$enquiries.'</h3>';
                        }else{
                            echo '<h3>No Data</h3>';
                        }
                    ?>
                
                </a>
            </div>
            <div class="bottam-cards">
            <a href="appointments.php" class="card">
                    <div class="card-inner">
                        <h4>Orders + Appointments</h4>
                        <i class="bi bi-cart"></i>

                    </div>
                    <?php
                        $connect = mysqli_connect("localhost","root","","ff_interior_designs");

                        $totalAppointmets = "SELECT * FROM `booking_appointment`";
                        $appointmetsQuery = mysqli_query($connect,$totalAppointmets);

                        if($appointments = mysqli_num_rows($appointmetsQuery)){
                            echo '<h3>'.$appointments.'</h3>';
                        }else{
                            echo '<h3>No Data</h3>';
                        }
                    ?>
                
                </a>
                <a href="services.php" class="card">
                    <div class="card-inner">
                        <h4>Coming Soon Services</h4>
                        <i class="bi bi-clock-fill"></i>

                    </div>
                    <h3>2+</h3>
                </a>
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