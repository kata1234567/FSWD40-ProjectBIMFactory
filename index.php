<?php
    ob_start();
    session_start();
    require_once 'dbconnect.php';
    // it will never let you open index(login) page if session is set
    if ( isset($_SESSION['user'])!="" ) {
        header("Location: userhome.php");
        exit;
    }
    $error = false;
    if( isset($_POST['btn-login']) ) {
        // prevent sql injections/ clear user invalid inputs
        $email = trim($_POST['email']);
        $email = strip_tags($email);
        $email = htmlspecialchars($email);

        $password = trim($_POST['password']);
        $password = strip_tags($password);
        $password = htmlspecialchars($password);
        // prevent sql injections / clear user invalid inputs
        if(empty($email)){
            $error = true;
            $emailError = "Please enter your email address.";
        } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
            $error = true;
            $emailError = "Please enter valid email address.";
        }
        if(empty($password)){
            $error = true;
            $passError = "Please enter your password.";
        }
        // if there's no error, continue to login
        if (!$error) {
            $passwordd = hash('sha256', $password); // password hashing using SHA256
            $res=mysqli_query($conn, "SELECT name, password, type FROM user WHERE email='$email'");
            $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
            $count = mysqli_num_rows($res); // if username/password correct it returns must be 1 row
            //compare the inserted data with database
            if( $count == 1 && $row['password']==$passwordd ) {
                $_SESSION['user'] = $row['name'];
                $_SESSION['type'] = $row['type'];

            if($_SESSION['type']== 'admin'){
                header("Location: adminhome.php");
            }else{
                header("Location: userhome.php");
            }
                
            } else {
                $errMSG = "Incorrect Credentials, Try again...";
            }
        }
        

    }
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Creativity, web design, blocs, web, template">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/et-line.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oleo+Script&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire+Swash&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="./js/jquery-2.1.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/blocs.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>CIA - Code Institute Austria</title>
    <!-- Google Analytics -->
    <!-- Google Analytics END -->
</head>

<body>
    <!-- Main container -->
    <div class="page-container">
        <!-- welcome -->
        <div class="bloc bloc-fill-screen b-parallax bloc-bg-texture texture-darken bgc-onyx bg-Creativity-207 d-bloc " id="welcome">
            <div class="container fill-bloc-top-edge sticky-nav">
                <?php include 'nav.php' ;?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-md-4">
                        <h1 class="text-center mg-md sm-shadow creativity-hero-heading">Unleash your Coding Skills</h1>
                        <h3 class="text-center mg-lg sm-shadow animDelay02 tc-white">Wake up right now and reach your potential</h3>
                        <div class="text-center"><a href="portfolio.php" class="btn btn-lg btn-rd btn-d animDelay04 creativity-hero-button">View courses</a></div>
                    </div>
     
        <div class="col-sm-12 col-lg-6 col-md-4">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

            <h3 class=" mg-lg sm-shadow animDelay02 tc-white">Get Started for Free</h2>

            <hr />

            <?php
                if ( isset($errMSG) ) {
                    echo $errMSG;               //php open and close?
                }
            ?>

            <h3> Username </h3>
    
            <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />

            <span class="text-danger"><?php echo $emailError; ?></span>

            <h3> Password </h3>

            <input type="password" name="password" class="form-control" placeholder="Your Password" maxlength="15" />
            
            <span class="text-danger"><?php echo $passError; ?></span>

            <hr />

            <div class="text-left"><button href="userhome.php" type="submit" name="btn-login" class="btn btn-block btn-warning" style="color:">Start coding now</button></div>

            <hr />

            <a href="register.php">Register here</a>

            </form>
            </div>
        </div>
         
    </div>

                    </div>

                </div>
            </div>
            <div class="container fill-bloc-bottom-edge">
                <div class="row">
                    <div class="col-sm-12 col-lg-6"><a id="scroll-hero" class="blocs-hero-btn-dwn" href="#"><span class="fa fa-chevron-down creativity-arrow-down"></span></a></div>
                </div>
            </div>
        </div>
        <!-- welcome END -->
        <!-- bring-dreams -->
        <div class="bloc tc-dark-jungle-green bgc-white" id="bring-dreams">
            <div class="container bloc-xl">
                <div class="row voffset">
                    <div class="col-sm-12">
                        <h1 class="mg-lg  text-center fadeInUp tc-dark-jungle-green animated">Bring your ideas to life</h1>
                        <h3 class="mg-lg text-w-70 text-center tc-dark-jungle-green fadeInUp animated">Get where you're going faster with CIA</h3>
                        <div class="text-center"><span class="ion ion-flash icon-md fadeInUp animDelay02 creativity-yellow animated"></span></div>
                    </div>
                </div>
                <div class="row voffset-lg">
                    <div class="col-sm-4">
                        <h4 class="mg-md  text-center fadeInUp tc-dark-jungle-green animated">Structured Curriculum</h4>
                        <h3 class="mg-md text-center fadeInUp tc-onyx creativity-yellow animated"><strong>Smart design</strong></h3>
                        <p class=" text-center fadeInUp animated">Our courses are designed to keep you on track, so </p>
                    </div>
                    <div class="col-sm-4">
                        <h4 class="mg-md  text-center fadeInUp animDelay02 tc-dark-jungle-green animated">Practice Smarter</h4>
                        <h3 class="mg-md text-center fadeInUp animDelay02 tc-onyx creativity-yellow animated"><strong>Unique feel</strong></h3>
                        <p class=" text-center fadeInUp animDelay02 animated">Drill the material with 85 coding quizzes and feel comfortable and confindent.</p>
                    </div>
                    <div class="col-sm-4">
                        <h4 class="mg-md  text-center tc-dark-jungle-green fadeInUp animDelay04 animated">One Day, One New Skill</h4>
                        <h3 class="mg-md text-center fadeInUp animDelay04 tc-onyx creativity-yellow animated"><strong>Amazing style</strong></h3>
                        <p class=" text-center fadeInUp animDelay04 animated">Most of our free courses take fewer than 11 hours.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- bring-dreams END -->
        <!-- start-right-away -->
        <div class="bloc bgc-dark-jungle-green d-bloc" id="start-right-away">
            <div class="container bloc-lg">
                <div class="row">
                    <div class="col-sm-10">
                        <h3 class="mg-md tc-white creativity-blocs-mobile-signup-text">Want to get started right away?</h3></div>
                    <div class="col-sm-2">
                        <div class="text-center"><a href="register.php" class="btn  btn-d  btn-lg btn-sq creativity-yellow-button" target="_blank">Register now</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start-right-away END -->
        <!-- Bloc Group -->
        <!-- Bloc Group END -->
        <!-- three-principles -->
<div class="bloc tc-dark-jungle-green bgc-white" id="bring-dreams">
            <div class="container bloc-xl">
                <div class="row voffset">
                    <div class="col-sm-12">
                        <h1 class="mg-lg  text-center fadeInUp tc-dark-jungle-green animated">Tell us why you want to learn to code </h1>
                        <h3 class="mg-lg text-w-70 text-center tc-dark-jungle-green fadeInUp animated">We'll show you what to learn</h3>
            
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center"><span class="et-icon-lightbulb icon-lg icon-round creativity-icon-home"></span></div>
                        <h3 class="text-center  mg-md fadeInUp creativity-yellow animated"><strong>Frontend</strong></h3>
                        <p class="text-center fadeInUp animated">Master the languages of the web: HTML, CSS, and JavaScript. This path will prepare you to build basic websites and then build interactive web apps.</p>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center"><span class="et-icon-clock icon-lg icon-round creativity-icon-home"></span></div>
                        <h3 class="mg-md text-center  fadeInUp animDelay02 creativity-yellow animated"><strong>Backend</strong></h3>
                        <p class="text-center fadeInUp animDelay02 animated">Learn SQL and Python and build the skills you need to analyze data. Great for anyone trying to use code to be more data-driven.&nbsp;</p>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center"><span class="et-icon-scope icon-lg icon-round creativity-icon-home"></span></div>
                        <h3 class="mg-md text-center  fadeInUp animDelay04 creativity-yellow animated"><strong>Computer Science</strong></h3>
                        <p class="text-center fadeInUp animDelay04 animated">Learn Python fundamentals, one of the hottest and fastest growing programming languages. This is a great introduction to the world of code.&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- three-principles END -->
        <!-- Bloc Group -->
        <div class='bloc-group'>
            <!-- bloc-7 -->
            <div class="bloc bloc-tile-2 b-parallax bgc-white bg-Creativity-202 d-bloc" id="bloc-7">
                <div class="container bloc-lg">
                    <div class="row">
                        <div class="col-sm-12"></div>
                    </div>
                </div>
            </div>
            <!-- bloc-7 END -->
            <!-- unique-approach -->
            <div class="bloc bloc-tile-2 bgc-onyx d-bloc" id="unique-approach">
                <div class="container bloc-lg">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center"><span class="et-icon-gears icon-xl icon-white creativity-yellow"></span></div>
                            <h1 class="mg-md text-center  tc-white fadeInUp creativity-yellow animated">Unique approach</h1>
                            <p class="text-center mg-lg text-w-70  fadeInUp animated">Join the 45 million people who have trusted CIA to learn to code</p>
                            <div class="text-center"><a href="about.php" class="btn  btn-d  btn-lg btn-sq fadeInUp animDelay04 creativity-yellow-button animated">It´s time to start investing in yourself</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- unique-approach END -->
        </div>
        <!-- Bloc Group END -->
        <!-- ScrollToTop Button --><a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span class="fa fa-chevron-up"></span></a>
        <!-- ScrollToTop Button END-->
        <!-- Footer - check-our-portofolio -->
        <!-- Footer - check-our-portofolio END -->

        <!-- Bloc Group -->
        <div class='bloc-group'>
            <!-- Footer - bloc-42 -->
            <div class="bloc bloc-tile-3 bgc-white l-bloc" id="bloc-42">
                <div class="container bloc-lg">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="mg-md text-center tc-onyx">Contact us</h2>
                            <h4 class="text-center mg-lg text-w-80 tc-dark-jungle-green fadeInUp animated">Get in contact with us. We would love to hear from you.</h4>
                            <div class="text-center"><a href="contact.php" class="btn  btn-d  btn-lg btn-sq fadeInUp creativity-wire-button animated">Contact us</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer - bloc-42 END -->
            <!-- Footer - bloc-43 -->
            <div class="bloc bloc-tile-3 bgc-golden-yellow l-bloc" id="bloc-43">
                <div class="container bloc-lg">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="mg-md text-center tc-onyx">Sign in for Newsletter</h2>
                            <h4 class="text-center mg-lg text-w-80 fadeInUp animDelay04 tc-dark-jungle-green animated">We will inform you about our latest work and your opportunities within the world of coding.</h4>
                            <div class="text-center"><a href="contact.php" class="btn  btn-d  btn-lg btn-sq fadeInUp animDelay04 creativity-wire-button animated" target="_blank">Request</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer - bloc-43 END -->
            <!-- Footer - shortcuts -->
            <div class="bloc bloc-tile-3 bgc-white l-bloc" id="shortcuts">
                <div class="container bloc-lg">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="mg-md text-center tc-onyx">Meet our team</h2>
                            <h4 class="text-center mg-lg text-w-80 fadeInUp animDelay08 tc-dark-jungle-green animated">We wanna know more about you. So it is only fair to introduce ourselfs to you.</h4>
                            <div class="text-center"><a href="team.php" class="btn  btn-d  btn-lg btn-sq fadeInUp animDelay08 creativity-wire-button animated">Meet us</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer - shortcuts END -->
        </div>
        <!-- Bloc Group END -->
        <!-- Footer - counts -->
        <?php include 'footer.php'; ?>
        <!-- Footer - footer END -->
    </div>
    <!-- Main container END -->
</body>

</html>

<?php ob_end_flush(); ?>