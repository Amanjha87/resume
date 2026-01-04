<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- ============box icons ===========-->

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- ========= header design =======-->
    <header class="header">
        <a href="#" class="logo">Portfolio</a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about" class="">About</a>
            <a href="#services" class="">Services</a>
            <a href="#portfolio" class="">Portfolio</a>
            <a href="#contact" class="">Contact</a>
        </nav>
    </header>

    <!-- home section design -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>Aman kumar Jha</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>As a full-stack developer and algorithm designer, I bring expertise in creating dynamic web applications and innovative
                algorithms. Skilled in video editing, and proficient with tools like VS Studio, MySQLi, Putty, MQTT, VMs, MS Office,
                PowerPoint, Excel, Word, and Tally Prime, I deliver well-rounded, efficient solutions
            </p>

            <div class="social-media">
                <a href="#facebook"><i class='bx bxl-github'></i></a>
                <a href="https://wa.me/918700305607" target="_blank"><i class='bx bxl-whatsapp'></i></a>
                <a href="https://www.linkedin.com/in/aman-jha-8042b1301/"><i class='bx bxl-linkedin'></i></a>
                <a href="#instagram"><i class='bx bxl-instagram-alt'></i></a>
            </div>
            <a href="img/Amanjha_CV.pdf" download="Amanjha_CV.pdf" class="btn">Download CV</a>
        </div>

        <div class="home-img">
            <img src="img/imgaman.png" alt="Myimg">
        </div>
    </section>

    <!-- about section design -->
    <section class="about" id="about">
        <div class="about-img">
            <video width="700" height="360" autoplay muted controls loop>
                <source src="img/finalanimation.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Full Stack Developer!</h3>
            <p>I am a full-stack developer with 2 years of experience in web development, specializing in building dynamic and e-commerce
                websites. My skills include front-end and back-end development, as well as database management. I am proficient in using
                tools like VS Studio, MySQLi, Putty, and MQTT to deliver smooth and scalable web applications. <span id="dots">...</span>
            </p>
            <span id="more">
                <p>Additionally, I have a strong passion for algorithm design, creating efficient solutions for complex problems. I am also
                    a skilled video editor, capable of producing creative and engaging videos to promote your brand or project. My expertise
                    extends to designing impactful, professional presentations using MS Office tools like PowerPoint and Excel.
                </p>
                <p>With a BCA degree from IGNOU, I bring a well-rounded technical background. I am confident in handling various tools and
                    technologies, including VMs and Tally Prime, which allow me to provide comprehensive solutions across multiple domains.
                    I am committed to continually enhancing my skills to stay at the forefront of technology and design.
                </p>
            </span>
            <a onclick="myFunction()" id="myBtn" class="btn">Read More</a>
        </div>
    </section>

    <!-- service section design -->
    <section class="services" id="services">
        <h2 class="heading">Our <span>Services</span></h2>

        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-code-alt'></i>
                <h3>Full Stack Development</h3>
                <p>As a Full Stack Developer, I specialize in creating dynamic and scalable web applications that offer
                    seamless user experiences. I am proficient in both front-end and back-end technologies, using tools like
                    "React" , "HTML/CSS" and "Javascript" for responsive, visually appealing interfaces. On the server side,
                    I work with "Node.js", "Express", "Django", and "Java", building secure, high-performance APIs and
                    applications tailored to meet specific business needs. <span id="dots1">...</span> 
                </p>
                <span id="more1">
                    <p>I have extensive experience with "SQL" (MySQL, PostgreSQL) and "NoSQL" (MongoDB), ensuring efficient data
                        management and fast retrieval. My focus on **UI/UX design** allows me to create intuitive and user-friendly
                        interfaces that enhance user engagement.
                    </p>
                    <p>I follow "Agile" methodologies to provide iterative development, regular feedback, and consistent progress.
                        Whether it’s developing a custom web solution or supporting ongoing maintenance, I am committed to delivering
                        high-quality products that align with client goals. Let’s collaborate to transform your ideas into a functional,
                        scalable web application that exceeds expectations.
                    </p>
                </span>
                <a onclick="myFunction1()" id="myBtn1" class="btn">Read More</a>
            </div>

            <div class="services-box">
                <i class='bx bxs-paint'></i>
                <h3>Graphic Design</h3>
                <p>As a Graphic Designer, I specialize in creating visually captivating designs that effectively communicate your
                    brand’s message. I have extensive experience in crafting unique logos, branding materials, print designs, and
                    digital assets for websites and social media. Using tools like "Adobe Photoshop", "Illustrator", and "PowerPoint",
                    I bring concepts to life with precision, ensuring every design is tailored to fit your brand identity and target audience.
                    <span id="dots2">...</span>
                </p>
                <span id="more2">
                    <p>I am highly proficient in designing creative, engaging PowerPoint presentations
                        that make a lasting impact. I focus on creating visually stunning slides that convey information clearly and keep
                        audiences engaged.
                    </p>
                    <p>By collaborating closely with clients, I ensure that every project aligns with your vision and objectives. With a keen
                        eye for detail and a passion for design, I provide solutions that elevate your brand’s presence across various platforms.
                        If you're looking for a graphic designer who can bring your creative ideas to life with style and professionalism,
                        let’s work together to make your vision a reality.
                    </p>
                </span>
                <a onclick="myFunction2()" id="myBtn2" class="btn">Read More</a>
            </div>

            <div class="services-box">
                <i class='bx bx-bar-chart-alt'></i>
                <h3>Digital Marketing</h3>
                <p>As a Digital Marketing Specialist, I help businesses grow their online presence through tailored digital strategies that
                    drive traffic, increase engagement, and boost conversions. With expertise in SEO, PPC, social media marketing, and content
                    creation, I craft data-driven campaigns that align with your brand’s goals. I leverage platforms like Google Ads, Facebook
                    Ads, and Instagram to reach your target audience and maximize ROI. <span id="dots3">...</span>
                </p>
                <span id="more3">
                    <p>I focus on optimizing websites and content to improve organic search rankings, ensuring your brand gets the visibility it
                        deserves. My experience extends to managing social media campaigns that foster community engagement, building brand
                        awareness, and driving website traffic.
                    </p>
                    <p>By analyzing campaign performance and using insights from tools like Google Analytics and social media analytics, I
                        continually refine strategies for optimal results. If you’re looking for a Digital Marketing expert who can develop
                        innovative solutions and elevate your online presence, let’s work together to achieve your marketing goals and grow your
                        business.
                    </p>
                </span>
                <a onclick="myFunction3()" id="myBtn3" class="btn">Read More</a>
            </div>
        </div>
    </section>

    <!-- Portfolio section design -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Leatest <span>Project</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="img/foodpresentation11.png" alt="projectimg">
                <div class="portfolio-layer">
                    <h4>Amazing ADD</h4>
                    <p>Get Amazing Addvertisement vedio for your Business , Grow with Digital Marketing.</p>
                    <a href="videoPage.php?video=video1" id="link1"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img/shoewheel.png" alt="projectimg">
                <div class="portfolio-layer">
                    <h4>Astounding Vedio</h4>
                    <p>Get Austounding Website like Promotional Vedio for Your Product ,Get your Product Popularity</p>
                    <a href="videoPage.php?video=video2" id="link2"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img/refreshcolddrink.png" alt="projectimg">
                <div class="portfolio-layer">
                    <h4>Fantastic ADD</h4>
                    <p>Get Fantastic Vedio to Promote & Grow Your Business On Social media, Grow Digitaly.</p>
                    <a href="videoPage.php?video=video3" id="link3"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img/microsoftppt.png" alt="projectimg">
                <div class="portfolio-layer">
                    <h4>Stunning PPT</h4>
                    <p>Get Impressive and Web like Clickable Presentation to Represent your Company. </p>
                    <a href="videoPage.php?video=video4" id="link4"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img/mcdonalsppt.png" alt="projectimg">
                <div class="portfolio-layer">
                    <h4>Sensational Add</h4>
                    <p>Get Sensational Video & Website for your business to Grow your Business ,Go online Get your Website.</p>
                    <a href="videoPage.php?video=video5" id="link5"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img/dashbodpic.png" alt="projectimg">
                <div class="portfolio-layer">
                    <h4>Dashboard</h4>
                    <p>Get Stunning Dashboard & Responsive Website for Your Company, Grow Your Business Go Online.</p>
                    <a href="videoPage.php?video=video6" id="link6"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section design -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>


        <?php
        // in bracket use("lacalhost", "root","your db password / or empty if you donot have password eg. "","database name which u creat in your database")
        $connection =  mysqli_connect("localhost", "root", "Kate8700@", "portfoliodata");
        if (!$connection)
            die("could not't connect" . mysqli_connect_error());
        else
            echo '';
        ?>
        <?php
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $emailid = $_POST['emailid'];
            $phoneno = $_POST['phoneno'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            mysqli_query($connection, "INSERT INTO contact_form( username, emailid , phoneno, subject, message) 
                              VALUES('$username','$emailid','$phoneno','$subject','$message')") or die(" Error occured");
            echo "<div class = 'aiimg'><img src=img/ai.png alt='projectimg'> <h3 class='kate'>AI <span>Kate</span> </h3></div>";
            echo "<div class ='message'>
                            </div> <br>";
            echo "<a href ='index.php'><button class='btn ctr'> Get Contact US Form</button>";
        } else {
        ?>
            <form action="" method="POST">
                <div class="input-box">
                    <input type="text" name="username" id="name" placeholder="Full Name" autocomplete="off" required>
                    <input type="email" name="emailid" id="emailid" placeholder="Email Address" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <input type="number" name="phoneno" id="phoneno" placeholder="Mobile Number" autocomplete="off" required>
                    <input type="text" name="subject" id="subject" placeholder="Subject" autocomplete="off" required>
                </div>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                <input type="submit" name="submit" value="Send Message" class="btn">
            </form>
        <?php } ?>
    </section>

    <!-- footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 By Aman Jha | All Rights Reserved.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- custom js -->
    <script>
        /*====================== toggle icon navbar ========================*/
        let menuIcon = document.querySelector('#menu-icon');
        let navbar = document.querySelector('.navbar');

        menuIcon.onclick = () => {
            menuIcon.classList.toggle('bx-x');
            navbar.classList.toggle('active');
        };


        /*====================== scroll section active link ========================*/
        let sections = document.querySelectorAll('section');
        let navLinks = document.querySelectorAll('header nav a');

        window.onscroll = () => {
            sections.forEach(sec => {
                let top = window.scrollY;
                let offset = sec.offsetTop - 150;
                let height = sec.offsetHeight;
                let id = sec.getAttribute('id');

                if (top >= offset && top < offset + height) {
                    navLinks.forEach(links => {
                        links.classList.remove('active');
                        document.querySelector('header nav a[href*=' + id + ']').classList.add('active');

                        /*====================== remove toggle icon and navbar when click navbar link(scroll) ========================*/
                        menuIcon.classList.remove('bx-x');
                        navbar.classList.remove('active');
                    });
                };
            });
            /*====================== Sticky navbar ========================*/
            let header = document.querySelector('header');
            header.classList.toggle('sticky', window.scrollY > 100);
        };

        /*====================== Scroll reavel ========================*/
        ScrollReveal({
            //reset: true,
            distance: '80px',
            duration: 2000,
            delay: 200,
        });

        ScrollReveal().reveal('.home-content, .heading', {
            origin: 'top'
        });
        ScrollReveal().reveal('.home-img, .services-container,.portfolio-box, .contact form', {
            origin: 'bottom'
        });
        ScrollReveal().reveal('.home-content h1, .about-img', {
            origin: 'left'
        });
        ScrollReveal().reveal('.home-content p, .about-content', {
            origin: 'right'
        });

        /*====================== typed js important ========================*/
        const typed = new Typed('.multiple-text', {
            strings: ['Full stack Developer', 'Graphic Designer', 'vedio Editor', 'Algorithems Editor'],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 1000,
            loop: true
        });
        const typeds = new Typed('.message', {
            strings: ['Hello!! and Thank-you for reaching out!!, I’m Kate, Mr. Jha’s personal AI assistant',
                'I’m excited to assist you and ensure you get the help you need.',
                'I’ve received your contact form submission, I Will inform Mr. Aman about your Query he will reached to you shortly.',
                'If you have any urgent Query or need Help, You can contact to Mr. Aman on the contact no: 8700305607, He is also avilable on Whatsapp with same Number.',
                'I hope i am able to help you, Apoligie in case of any mistake and misguidence , Thankyou for filling Contactus Form Mr.Jha will reach you soon!! Warm regards, Kate The AI Assiatant'
            ],
            typeSpeed: 100,
            backSpeed: 50,
            backDelay: 50,
            loop: true
        });
    </script>
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more ";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less ";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myFunction1() {
            var dots = document.getElementById("dots1");
            var moreText = document.getElementById("more1");
            var btnText = document.getElementById("myBtn1");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more ";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less ";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myFunction2() {
            var dots = document.getElementById("dots2");
            var moreText = document.getElementById("more2");
            var btnText = document.getElementById("myBtn2");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more ";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less ";
                moreText.style.display = "inline";
            }
        }
    </script>
     <script>
        function myFunction3() {
            var dots = document.getElementById("dots3");
            var moreText = document.getElementById("more3");
            var btnText = document.getElementById("myBtn3");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more ";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less ";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const videoId = urlParams.get('video');

        if (videoId) {
            document.querySelector('.video-links').classList.add('hidden');
        }
    </script>

</body>

</html>