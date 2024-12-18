
<?php
    require_once('header.php');
?>

    <div class="services">
        <div class="carousel slide" data-bs-ride="carousel"> 
            <div class="carousel-inner"> 
                <div class="carousel-item active"> 
                    <img src="./assets/images/traditional1.jpg" class="w-100 d-block">  
                </div> 
                <div class="carousel-item"> 
                    <img src="./assets/images/modren1.webp" class="w-100 d-block"> 
                </div> 
                <div class="carousel-item"> 
                    <img src="./assets/images/contemporary.webp" class="w-100 d-block"> 
                </div> 
            </div>
            <div class="service_name">
                <h1>Services</h1>
            </div>
        </div> 

        <section class="service_section1">
            <p data-aos="fade-up-right">At Full-Stack-Force (F&F) Interior Designs, we transform spaces into stylish, functional, and inspiring environments. With a team of experienced designers, project managers, and skilled craftsmen, we offer a comprehensive range of interior design services to meet every need, whether you’re renovating a single room or designing an entire building. Our approach combines creativity, precision, and innovative solutions to bring your vision to life.</p>
            <img src="./assets/images/living-room1.jpg" alt="" data-aos="fade-up-left">
        </section>
       <section class="service_section2">
            <a href="traditional.php" data-aos="fade-up-left"><img src="./assets/images/traditional.jpg" alt=""></a>
            <h2 data-aos="fade-up-right">Traditional Interior Designs</h2>
            <p data-aos="fade-up-right">At Full-Stack-Force Interior Designs, we specialize in blending timeless elegance with modern functionality through traditional interior design. Our team of expert designers is committed to creating spaces that exude warmth, comfort, and classic sophistication while meeting the needs of today’s lifestyle. <a href="traditional.php">More...</a></p>
       </section>
       <section class="service_section3">
            <a href="contemporary.php" data-aos="fade-up-right"><img src="./assets/images/contemporary.webp" alt=""></a>
            <h2 data-aos="fade-up-left">Contemporary Interior Designs</h2>
            <p data-aos="fade-up-left">Our design consultations provide you with the opportunity to collaborate directly with our expert designers. Whether you’re starting from scratch or refreshing your existing space, we help you define your style, choose color palettes, and select the latest furnishings to create an interior that’s modern, functional, and visually striking. <a href="contemporary.php">More...</a></p>
        </section>
        <section class="service_section4">
            <a href="modren.php" data-aos="fade-up-left"><img src="./assets/images/modren.jpeg" alt=""></a>
            <h2 data-aos="fade-up-right">Modren Interior Designs</h2>
            <p data-aos="fade-up-right">At Full-Stack-Force Interior Designs, we specialize in blending timeless elegance with modern functionality through traditional interior design. Our team of expert designers is committed to creating spaces that exude warmth, comfort, and classic sophistication while meeting the needs of today’s lifestyle. <a href="modren.php">More...</a></p>
       </section>
       <button type="button" class="book" data-aos="fade-up"
       data-aos-anchor-placement="center-center"><a href="../booking.php">Book an Appointment</a></button><hr>
       <h1 data-aos="fade-up"
       data-aos-anchor-placement="top-center">Upcoming Services</h1><hr>
       <div class="upcoming">
            <div data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">>
                <img src="./assets/images/vintage1.jpg" alt="" srcset="">
                <h2>Vintage Interior Designs</h2>
            </div>
            <div data-aos="fade-left"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">>
                <img src="./assets/images/eco-friendly.jpg" class="img2" alt="">
                <h2 >Eco-Friendly Interior Designs</h2>
            </div>
       </div><hr>
    </div>

<?php
    require_once('footer.php')
?>