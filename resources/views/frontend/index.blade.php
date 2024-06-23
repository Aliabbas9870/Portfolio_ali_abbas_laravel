{{-- @extends('frontend.layouts.main')
{{-- @section('title', 'About') --}}
{{-- @section('content') --}}
<!Doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ali Abbas | CV</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="frontend/img/parsonal-info/anmy.jpeg">
    <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/animate.min.css">
    <link rel="stylesheet" href="frontend/css/fontawesome.min.css">
    <link rel="stylesheet" href="frontend/css/all.min.css">
    <link rel="stylesheet" href="frontend/css/odometer.min.css">
    <link rel="stylesheet" href="frontend/css/meanmenu.css">
    <link rel="stylesheet" href="frontend/css/swipper.css">
    <link rel="stylesheet" href="frontend/css/main.css">
</head>

<body>
    <div class="page-wrapper home-3" data-background="frontend/img/bg/page-bg-1.jpg">
        <!-- PRELOADER -->
        <div id="preloader">
            <div class="loader_line"></div>
        </div>
        <!-- /PRELOADER -->

        <!-- header-start -->
        <div class="bostami-header-area mb-30 z-index-5">
            <div class="container">
                <div class="bostami-header-wrap">
                    <div class="row">
                        <!-- menu btn -->
                        <div class="col-6 pl-100">
                            <div class="bostami-header-menu-btn text-right mb-0">
                                <div class="dark-btn dark-btn-stored dark-btn-icon">
                                    <i class="fa-light fa-moon "></i>
                                    <i class="fa-light fa-sun "></i>
                                </div>
                                <div class="menu-btn toggle_menu d-lg-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile menu -->
                <div class="mobile-menu-wrap">
                    <div class="mobile-menu mobile_menu_3"></div>
                </div>
            </div>
        </div>
        <!-- header-end -->


        <div class="container z-index-3">
            <div class="row">
                <!-- personal-info-start -->
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="bostami-parsonal-info-area">
                        <div class="bostami-parsonal-info-wrap">
                            <!-- img -->
                            <div class="bostami-parsonal-info-img">
                                <img src="frontend/img/parsonal-info/anmy.jpeg" alt="avatar">
                            </div>

                            <!-- name -->
                            <h4 class="bostami-parsonal-info-name">
                                <a href="#">Ali Abbas </a>
                            </h4>
                            <span class="bostami-parsonal-info-bio mb-15">Web/Android Developer</span>

                            <!-- social link -->
                            <ul class="bostami-parsonal-info-social-link mb-30">
                                <li>
                                    <a href="https://youtube.com/@hackhubali?si=cvk5CmWMW7_ZMXTO" class="youtube">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wa.me/923251806654" class="whatsapp">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://linkedin.com/in/ali-abbas-63a263234" class="linkedin">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>

                            <!-- contact -->
                            <div class="bostami-parsonal-info-contact mb-30">
                                <div class="bostami-parsonal-info-contact-item phone">
                                    <div class="icon">
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                    </div>
                                    <div class="text">
                                        <span>Phone</span>
                                        <p>+92 3251806654</p>
                                    </div>
                                </div>
                                <div class="bostami-parsonal-info-contact-item email">
                                    <div class="icon">
                                        <i class="fa-regular fa-envelope-open-text"></i>
                                    </div>
                                    <div class="text">
                                        <span>Email</span>
                                        <p>aliab7357@gmail.com</p>
                                    </div>
                                </div>
                                <div class="bostami-parsonal-info-contact-item location">
                                    <div class="icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="text">
                                        <span>Location</span>
                                        <p>Sahiwal,Punjab Pakistan</p>
                                    </div>
                                </div>
                                <div class="bostami-parsonal-info-contact-item calendar">
                                    <div class="icon">
                                        <i class="fa-light fa-calendar-days"></i>
                                    </div>
                                    <div class="text">
                                        <span>Birthday</span>
                                        <p>Aug 20, 2003</p>
                                    </div>
                                </div>
                            </div>

                            <!-- cv button -->
                            <div class="bostami-parsonal-info-btn">
                                <a class="btn-2 circle" id="download-cv-btn">
                                    <span class="icon">
                                        <i class="fa-regular fa-download"></i>
                                    </span>
                                    download cv
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- personal-info-end -->

                <!-- about-page-start -->
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <!-- main-menu-start -->
                    <div class="text-right">
                        <div class="bostami-main-menu-wrap">
                            <nav class="bastami-main-menu main_menu_3">
                                <ul>
                                    <li class="active">
                                        <a href="about">
                                            <span>
                                                <i class="fa-light fa-address-card"></i>
                                            </span>
                                            about
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/resume">
                                            <span>
                                                <i class="fa-light fa-file-user"></i>
                                            </span>
                                            Resume
                                        </a>
                                    </li>
                                    <li>
                                        <a href="work">
                                            <span>
                                                <i class="fa-light fa-briefcase"></i>
                                            </span>
                                            Works
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact">
                                            <span>
                                                <i class="fa-light fa-address-book"></i>
                                            </span>
                                            contact
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- main-menu-end -->

                    <div class="bostami-page-content-wrap">
                        <!-- page title -->
                        <div class="section-wrapper pl-60 pr-60 pt-60">
                            <div class="bostami-page-title-wrap mb-15">
                                <h2 class="page-title">about</h2>
                                <p>I am a dedicated Flutter and Web developer, bringing a robust background in
                                    Flutter and Web Development with six months of hands-on experience in Flutter, i am
                                    actively
                                    pursuing a challenging role to apply his skills and creativity for outstanding
                                    results. I was not
                                    only in Flutter and graphic design but also demonstrates proficiency in MS Office,
                                    specializing
                                    in document editing, formatting, and layout design. I aslo enthusiastic about
                                    contributing our
                                    expertise and experiences to a dynamic team.</p>
                            </div>
                        </div>

                        <!-- what-do -->
                        <div class="section-wrapper pl-60 pr-60">
                            <div class="bostami-section-title-wrap mt-30 mb-20">
                                <h3 class="section-title">What I do!</h3>
                            </div>
                            <div class="bostami-what-do-wrap mb-30">
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="bostami-what-do-item bg-prink bg-blue">
                                            <div class="icon">
                                                <i class="fa-regular fa-code"></i>
                                            </div>
                                            <div class="text">
                                                <h4 class="title">Web Development</h4>
                                                <p>Web development involves creating and maintaining websites, ensuring
                                                    functionality, user experience, and visual appeal through coding and
                                                    design</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="bostami-what-do-item bg-catkrill">
                                            <div class="icon">
                                                <i class="fa-regular fa-grid-2"></i>
                                            </div>
                                            <div class="text">
                                                <h4 class="title">App Development</h4>
                                                <p>App development involves creating software applications for mobile
                                                    devices or desktop environments, combining coding, design, and
                                                    testing to deliver functional and user-friendly digital solutions.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item -->
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="bostami-what-do-item bg-prink">
                                            <div class="icon">
                                                <i class="fa-light fa-swatchbook"></i>
                                            </div>
                                            <div class="text">
                                                <h4 class="title">Ui/Ux Design</h4>
                                                <p>UI/UX design is the art and science of crafting digital experiences
                                                    that are intuitive, engaging, and user-friendly. It combines visual
                                                    design, user research, and interaction design to create interfaces
                                                    that meet users' needs and expectations</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single item -->

                                    <!-- single item -->
                                    {{-- <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="bostami-what-do-item  bg-catkrill">
                                            <div class="icon">
                                                <i class="fa-regular fa-camera-retro"></i>
                                            </div>
                                            <div class="text">
                                                <h4 class="title">Photography</h4>
                                                <p>Photography is the art and practice of capturing images using a
                                                    camera to convey moments, stories, and perspectives.</p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- single item -->

                                </div>
                            </div>
                        </div>

                        <!-- client -->
                        <!-- footer copyright -->
                        <div class="footer-copyright text-center pt-25 pb-25">
                            <span>© 2024 All Rights Reserved by <a href="Ali" target="_blank"
                                    rel="noopener noreferrer">Ali Abbas</a>.</span>
                        </div>
                    </div>
                </div>
                <!-- about-page-end -->
            </div>
        </div>
    </div>

    <!-- JS here -->
    <script src="frontend/js/jquery.min.js"></script>
    <script src="frontend/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/js/swipper-bundle.min.js"></script>
    <script src="frontend/js/jquery.meanmenu.min.js"></script>
    <script src="frontend/js/wow.min.js"></script>
    <script src="frontend/js/odometer.min.js"></script>
    <script src="frontend/js/appear.min.js"></script>
    <script src="frontend/js/main.js"></script>
    <script>
        document.getElementById('download-cv-btn').addEventListener('click', function(event) {
            event.preventDefault();
            fetch('{{ route('download.cv') }}')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.blob();
                })
                .then(blob => {
                    const url = window.URL.createObjectURL(blob);
                    const a = document.createElement('a');
                    a.style.display = 'none';
                    a.href = url;
                    a.download = 'Ali_Abbas_CV.pdf'; // The filename to be used by the browser
                    document.body.appendChild(a);
                    a.click();
                    window.URL.revokeObjectURL(url);
                })
                .catch(error => console.error('Error downloading the file:', error));
        });
    </script>
</body>

</html>
