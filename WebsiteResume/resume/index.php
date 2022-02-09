 <!--------------- PHP version------------- -->
 <?php
include "assets/database.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="This is my resume" />
        <meta name="author" content="<?php echo $about_data ['fname'] . ' ' . $about_data ['lname']; ?>" />
        <title>My Resume</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme w/Bootstrap -->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <style type="text/css">
            body {
                padding-top: 3.375rem;
                color: #6f42c1;
            }
            
            @media (min-width: 992px) {
                body {
                    padding-top: 0;
                    padding-left: 17rem;
                }
            }
            
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                text-transform: uppercase;
            }
            
            h1 {
                line-height: 1;
            }
            
            p.lead {
               font-size: 1.15rem;
               font-weight: 400;
            }
            
            .subheading {
                font-family: "Saira Extra Condensed", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                text-transform: uppercase;
                font-weight: 500;
                font-size: 1.5rem;
            }
            
            #sideNav .navbar-nav .nav-item .nav-link {
                font-weight: 800;
                letter-spacing: 0.05rem;
                text-transform: uppercase;
            }
            
            #sideNav .navbar-toggler:focus {
                outline-color: #ffc107;
            }
            
            @media (min-width: 992px) {
                #sideNav {
                    text-align: center;
                    position: fixed;
                    top: 0;
                    left: 0;
                    display: flex;
                    flex-direction: column;
                    width: 17rem;
                    height: 100vh;
                }
                
                #sideNav .navbar-brand {
                    display: flex;
                    margin: auto auto 0;
                    padding: 0.5rem;
                }
                
                #sideNav .navbar-brand .img-profile {
                    max-width: 10rem;
                    max-height: 10rem;
                    border: 0.5rem solid rgba(255,255,255, 0.2);
                }
                
                #sideNav .navbar-collapse {
                    display: flex;
                    align-items: flex-start;
                    flex-grow: 0;
                    width: 100%;
                    margin-bottom: auto;
                }
                
                #sideNav .navbar-collapse .navbar-nav {
                    flex-direction: column;
                    width: 100%;
                }
                
                #sideNav .navbar-collapse .navbar-nav .nav-item {
                    display: block;
                }
                
                #sideNav .navbar-collapse .navbar-nav .nav-item .nav-link {
                    display: block;
                }
            }
            
            .icons .icon {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                height: 3.5rem;
                width: 3.5rem;
                background-color: #343a40;
                color: #007bff;
                border-radius: 100%;
                font-size: 1.5rem;
                margin-right: 1.5rem;
            }
            
            .icons .icon:last-child {
                margin-right: 0;
            }
            
            .icons .icon:hover {
                background-color: #dc3545;
            }
            
            .dev-icons {
                font-size: 6rem;
            }
            
            section.resume-section {
                display: flex;
                align-items: center;
                padding-left: 1rem;
                padding-right: 1rem;
                padding-top: 5rem;
                padding-bottom: 5rem;
                max-width: 75rem;
            }
            
            section.resume-section .resume-section-content {
                width: 100%;
            }
            
            @media (min-width: 768px) {
                section.resume-section {
                    min-height: 100vh;
                }
            }
            
            @media (min-width: 992px) {
                section.resume-section {
                    padding-left: 3rem;
                    padding-right: 3rem;
                    padding-top: 5rem;
                    padding-bottom: 5rem;
                }
            }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation -->
        <nav id="sideNav" class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><span class="d-block d-lg-none"><?php  echo $about_data ['fname'] . ' ' . $about_data ['lname']; ?></span><span class="d-non l-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" /></span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggler-icon"></span></button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#about" class="nav-link js-scroll-trigger">About</a></li>
                    <li class="nav-item"><a href="#experience" class="nav-link js-scroll-trigger">Experience</a></li>
                    <li class="nav-item"><a href="#education" class="nav-link js-scroll-trigger">Education</a></li>
                    <li class="nav-item"><a href="#skills" class="nav-link js-scroll-trigger">Skills</a></li>
                    <li class="nav-item"><a href="#interests" class="nav-link js-scroll-trigger">Interests</a></li>
                    <li class="nav-item"><a href="#awards" class="nav-link js-scroll-trigger">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content -->
        <div class="container-fluid p-0">
            <!-- About -->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0"><?php echo $about_data ['fname']; ?> <span class="text-primary"><?php echo $about_data ['lname']; ?></span></h1>
                    <div class="subheading mb-5">
                        <?php echo $about_data['address'] . ' ' . $about_data['city'] .', ' . $about_data['state'] . ' ' . $about_data['zip'] . ' ' . $about_data['phone']; ?> <a href=" mailto:<?php echo $about_data['email']; ?>"><?php echo $about_data['email']; ?></a>
                        <!--leaving error php  198-->
                    </div>
                    <p class="lead mb-5"><?php echo $about_data["description"]; ?></p>
                    <div class="icons">
                        <a class="icon" href="https://www.linkedin.com/in/rueben-durfee-499775212/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a class="icon" href="https://github.com/Rubytuesdaysandwich"><i class="fab fa-github"></i></a>
                        <a class="icon" href="https://www.instagram.com/rubytuesdaysandwich/"><i class="fab fa-instagram"></i></a>
                        <a class="icon" href="https://www.facebook.com/rueben.durfee"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience -->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
<?php
foreach($experience_data as $experience){
?>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo $experience['job_name'];//title?></h3>
                            <div class="subheading mb-3"><?php echo $experience['company_name'];//company?></div>
                            <p><?php echo $experience['description'];//description?></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?php echo $experience['duration']; //duration?></span></div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education -->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <?php
                    foreach($education_data as $education){
                    ?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo $education['school_name']; //school?></h3>
                            <div class="subheading mb-3"><?php echo $education['certificate'];//degree-certificate?></div>
                            <div><?php echo $education['program_name']; //program name?></div>
                            <p>GPA:<?php echo $education['gpa'];?> </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?php echo $education['duration']; //gpa?></span></div>
                    </div>
                   <?php } ?>
                </div>
            </section>
            <hr />
            <!-- Skills -->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>

                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <?php foreach ($skills_data as $skill){
                            $class = "";
                            if($skill['skill_name'] == "html5"){
                                $class = "<i class='fab fa-html5'></i>";
                           
                            } elseif ($skill['skill_name'] == "css3"){

                            $class = "<i class='fab fa-css3-alt'></i>";

                        } elseif ($skill['skill_name'] == "JavaScript"){

                        $class = "<i class='fab fa-js-square'></i>";//not showing fontawsome

                    }elseif($skill['skill_name'] == "Database"){//not showing fontawsome

                    $class = "<i class='fas fa-database'></i>";
                } else {
                    $class ="<i>".   $skill ['skill_name'] . "</i>";
                }        
                            ?>
                       <li class="list-inline-item"><?php echo $class;?></li>  
                       <?php }?>   
                   </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Responsive Design and Web Presence</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Cross Browser Testing & Debugging</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Front-End & Back-End Development</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Databases Development</li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests -->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p><?php echo $interests_data[1]['description'];?></p>
                    <p class="mb-0"><?php echo $interests_data[2]['description'];?></p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards -->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <?php
                        foreach($awards_data as $award){
                        ?>

                     

                        <li><span class="fa-li"><i class="fas fa-trophy text-warning"></i></span><?php echo $award['award'];?></li>
                        <?php } ?>
                    </ul>
                </div>
            </section>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>