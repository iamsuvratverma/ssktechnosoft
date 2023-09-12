<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <link rel="stylesheet" href="style.css">
    <style>
        #panel,
        #flip {
            padding: 5px;
            font-size: 18px;
            text-align: center;
            background-color: #EEEEEE;
            color: rgb(0, 0, 0);
            cursor: pointer;


        }
        #flip{
            color: #0326c4;
        }
        #panel {
            display: none;
            margin-left: 50px;
        }
        .video{
            margin-right: 50px;
            margin-top: 20PX;
        }
    </style>

</div>
<header>
        <div class="main">
            <div class="header">
                <div class="head_main">
                    <div class="head_main_logo">
                        <h4>SSK Technosoft

                        </h4>
                    </div>
                    <div class="heda_main_content">
                        <ul class="ul_login">
                            <li><a><?php echo $_SESSION['user_name'] ?></a></li>
                            <li><a href="index.html" class="btn">logout</a></li>
                        </ul>
                    </div>
                </div>
                <!----------------------head main part is closed ---------------------->
                <div class="head_menus">
                    <ul>
                        <li class="item_menu"><a href="index.html">Home</a></li>
                        <li class="item_menu"><a href="about.html">About Us</a></li>
                        <li class="item_menu"><a href="service.html">Services</a></li>
                        <li class="item_menu"><a href="team.html">Team</a></li>
                        <li class="item_menu"><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!---------------------------webiste head section is closed------------------------>
    <!--------slider section is started ------------------------------------------------>
    <section>

        <div class="middle">
            <div class="main_section">
                <img src="image/kapil.gif" alt="" class="img">
            </div>
            <div class="middle_section">
                <ul class="middle_ul">
                    <li class="middle_item"><a href="">Photoshop</a></li>
                    <li class="middle_item"><a href="">Web Designing</a></li>
                    <li class="middle_item"><a href="">Video Editing</a></li>
                </ul>
                <hr class="middle_hr">
                <div class="photoshop">
                    <p>Photoshop:- We are Provide Photoshop Related Service Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Facere, ex. Quos perspiciatis repellendus, deserunt ratione eveniet voluptatem
                        nihil? Ea iusto eaque id culpa! Laudantium, sint accusamus quaerat officia aliquam sit. Lorem
                        ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, hic?</p>
                    </div>

                    <!-- jquery -->
                    <div id="flip"> Read More</div>
                    <div id="panel">
                        Web Designing:- We are Provide Photoshop Related Service Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Facere, ex. Quos perspiciatis repellendus, deserunt ratione eveniet
                        voluptatem
                        nihil? Ea iusto eaque id culpa! Laudantium, sint accusamus quaerat officia aliquam sit.
                        Lorem
                        ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, hic
                        
                        <p class="video">Video Editing :- We are Provide Photoshop Related Service Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Facere, ex. Quos perspiciatis repellendus, deserunt ratione eveniet
                            voluptatem
                            nihil? Ea iusto eaque id culpa! Laudantium, sint accusamus quaerat officia aliquam sit.
                            Lorem
                            ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, hic</p>
                  
                    </div>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
                    <script>
                        $(document).ready(function () {
                            $("#flip").click(function () {
                                $("#panel").slideToggle("slow");
                            });
                        });
                    </script>
             

            </div>
            <div class="middle_footer container">
                <div class="middle_inner">
                    <h2>Refer & Earn</h2>
                    <p class="refer">Refer your friends and earn good money.</p>
                    <div class="middle_inner_part">
                        <div class="refer_friends">
                            <div class="refer_inner">
                                <div class="refer_logo">
                                    <div class="refer_logo_part">
                                        <p><img src="image/horn.svg" alt="" width="80" height="110"></p>
                                    </div>
                                </div>
                                <div class="refer_con">
                                    <p>Your Refer Friends</p>
                                </div>
                                <div class="refer_con1">
                                    <p>Share your referral link with friends. They get $100.</p>
                                </div>
                            </div>
                        </div>
                        <div class="friend_reg">
                            <div class="refer_inner">
                                <div class="refer_logo">
                                    <div class="refer_logo_part">
                                        <p><img src="image/sign.svg" alt="" width="80" height="110"></p>
                                    </div>
                                </div>
                                <div class="refer_con">
                                    <p>Your Friends Register</p>
                                </div>
                                <div class="refer_con1">
                                    <p>Your friends Register with using your referral link. </p>
                                </div>
                            </div>
                        </div>
                        <div class="earn_money">
                            <div class="refer_inner">
                                <div class="refer_logo">
                                    <div class="refer_logo_part">
                                        <p><img src="image/doller.svg" alt="" width="80" height="110"></p>
                                    </div>
                                </div>
                                <div class="refer_con">
                                    <p>Earn You</p>
                                </div>
                                <div class="refer_con1">
                                    <p>You get money. You can use these credits to take recharge</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!----------slider section is closed --------------------------->
    <!-----------------------programmming section is here ------------------->
    <section>
        <div class="program">
            <div class="program_inner">
                <div class="program_inner_side">
                    <div class="program_con">
                        <p>Programming</p>
                    </div>
                    <div class="main_program">
                        <div class="main_program1">
                            <div class="main_inner">
                                <div class="img_hidden">
                                    <p class="HTML">HTML & CSS</p>
                                </div>
                                <div class="main_inner_img">
                                </div>
                                <div class="main_inner_con">
                                    <p>HTML & CSS Basic and Advance learning</p>
                                    <p>HTML5 All Tags and border</p>
                                    <p>CSS Flex and Display Property</p>
                                    <p>CSS Grid</p>
                                    <p>CSS Position Cover</p>
                                    <p>Element</p>
                                    <button type="button" class="btn">Enroll Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="main_program1">
                            <div class="main_inner">
                                <div class="img_hidden">
                                    <p class="HTML">JavaScript</p>
                                </div>
                                <div class="main_inner_img1">
                                </div>
                                <div class="main_inner_con">
                                    <p>HTML & CSS Basic and Advance learning</p>
                                    <p>HTML5 All Tags and border</p>
                                    <p>CSS Flex and Display Property</p>
                                    <p>CSS Grid</p>
                                    <p>CSS Position Cover</p>
                                    <p>Element</p>
                                    <button type="button" class="btn">Enroll Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="main_program1">
                            <div class="main_inner">
                                <div class="img_hidden">
                                    <p class="HTML">Bootstrap</p>
                                </div>
                                <div class="main_inner_img2">
                                </div>
                                <div class="main_inner_con">
                                    <p>HTML & CSS Basic and Advance learning</p>
                                    <p>HTML5 All Tags and border</p>
                                    <p>CSS Flex and Display Property</p>
                                    <p>CSS Grid</p>
                                    <p>CSS Position Cover</p>
                                    <p>Element</p>
                                    <button type="button" class="btn">Enroll Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main_program">
                        <div class="main_program1">
                            <div class="main_inner">
                                <div class="img_hidden">
                                    <p class="HTML">Node Js</p>
                                </div>
                                <div class="main_inner_img3">
                                </div>
                                <div class="main_inner_con">
                                    <p>HTML & CSS Basic and Advance learning</p>
                                    <p>HTML5 All Tags and border</p>
                                    <p>CSS Flex and Display Property</p>
                                    <p>CSS Grid</p>
                                    <p>CSS Position Cover</p>
                                    <p>Element</p>
                                    <button type="button" class="btn">Enroll Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="main_program1">
                            <div class="main_inner">
                                <div class="img_hidden">
                                    <p class="HTML">PHP & SQL</p>
                                </div>
                                <div class="main_inner_img4">
                                </div>
                                <div class="main_inner_con">
                                    <p>HTML & CSS Basic and Advance learning</p>
                                    <p>HTML5 All Tags and border</p>
                                    <p>CSS Flex and Display Property</p>
                                    <p>CSS Grid</p>
                                    <p>CSS Position Cover</p>
                                    <p>Element</p>
                                    <button type="button" class="btn">Enroll Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="main_program1">
                            <div class="main_inner">
                                <div class="img_hidden">
                                    <p class="HTML">Wordpress</p>
                                </div>
                                <div class="main_inner_img5">
                                </div>
                                <div class="main_inner_con">
                                    <p>HTML & CSS Basic and Advance learning</p>
                                    <p>HTML5 All Tags and border</p>
                                    <p>CSS Flex and Display Property</p>
                                    <p>CSS Grid</p>
                                    <p>CSS Position Cover</p>
                                    <p>Element</p>
                                    <button type="button" class="btn">Enroll Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------programming section is closed --------------------------->
    <!---------------------avail design is here-------------------------------->
    <section>
        <div class="program">
            <div class="program_inner">
                <div class="program_inner_side" id="web">
                    <div class="program_con">
                        <p>Our Design</p>
                    </div>
                    <div class="design">
                        <div class="main_design">
                            <div class="design_img"></div>
                            <div class="design_img_con">
                                <div class="ourdesign_hidden">
                                    <p>
                                        Website Development
                                    </p>
                                </div>
                            </div>
                            <div class="web_development">
                                Website Developement and Desinging
                            </div>
                            <div class="design_img_btn">
                                <button type="button" class="book"> Book Now</button>
                            </div>
                        </div>

                    </div>
                    <div class="design">
                        <div class="main_design">
                            <div class="design_img1"></div>
                            <div class="design_img_con">
                                <div class="ourdesign_hidden">
                                    <p>
                                        Android Development
                                    </p>
                                </div>
                            </div>
                            <div class="web_development">
                                Android Developement and Desinging
                            </div>
                            <div class="design_img_btn">
                                <button type="button" class="book"> Book Now</button>
                            </div>
                        </div>

                    </div>
                    <div class="design">
                        <div class="main_design">
                            <div class="design_img2"></div>
                            <div class="design_img_con">
                                <div class="ourdesign_hidden">
                                    <p>
                                        PhotoShop Design
                                    </p>
                                </div>
                            </div>
                            <div class="web_development">
                                PhotoShop Desinging
                            </div>
                            <div class="design_img_btn">
                                <button type="button" class="book"> Book Now</button>
                            </div>
                        </div>

                    </div>
                    <div class="design">
                        <div class="main_design">
                            <div class="design_img3"></div>
                            <div class="design_img_con">
                                <div class="ourdesign_hidden">
                                    <p>
                                        Logo Designing
                                    </p>
                                </div>
                            </div>
                            <div class="web_development">
                                Logo Desinging
                            </div>
                            <div class="design_img_btn">
                                <button type="button" class="book"> Book Now</button>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>

    <!---------avail design is closed ---------------------->
    <!-------last end part is started ----------------->
    <section>
        <div class="section_footer">
            <div class="main_section_footer">
                <div class="main_section_footer1">
                    <div class="main_section_footer1_logo">
                        <img src="image/lock.svg" alt="" width="90" height="90">
                    </div>
                    <div class="main_section_footer1_con">
                        <p>100% Secure Payments</p>
                    </div>
                    <div class="main_section_footer1_con1">
                        <p>Moving your card details to a much more secured place.</p>
                    </div>
                </div>
                <div class="main_section_footer1">
                    <div class="main_section_footer1_logo">
                        <img src="image/thumb.svg" alt="" width="90" height="90">
                    </div>
                    <div class="main_section_footer1_con">
                        <p>Trust pay</p>
                    </div>
                    <div class="main_section_footer1_con1">
                        <p>100% Payment Protection. Easy Return Policy.</p>
                    </div>
                </div>
                <div class="main_section_footer1">
                    <div class="main_section_footer1_logo">
                        <img src="image/horn.svg" alt="" width="90" height="90">
                    </div>
                    <div class="main_section_footer1_con">
                        <p>Refer & Earn</p>
                    </div>
                    <div class="main_section_footer1_con1">
                        <p>Invite a friend to sign up and earn up to 100.</p>
                    </div>
                </div>
                <div class="main_section_footer1">
                    <div class="main_section_footer1_logo">
                        <img src="image/team.svg" alt="" width="90" height="90">
                    </div>
                    <div class="main_section_footer1_con">
                        <p>24X7 Support</p>
                    </div>
                    <div class="main_section_footer1_con1">
                        <p>We're here to help. Have a query and need help ?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------------last end part is closed --------------------->
    <!------footer is started ---------->
    <footer>
        <div class="footer">
            <div class="footer_main">
                <div class="footer_main1">
                    <h3 class="foot_1">Servies</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#web">Web Development</a></li>
                        <li><a href="#web">Android Developement</a></li>
                        <li><a href="#web">PhotoShop</a></li>
                        <li><a href="#web">Logo Designing</a></li>

                    </ul>
                </div>
                <div class="footer_main1">
                    <h3 class="foot_1">About Us</h3>
                    <ul>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="reg.html">Registration </a></li>
                        <li><a href="service.html">Services</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer_main1">
                    <h3 class="foot_1">Contact Us</h3>
                    <ul>
                        <li><a href="#"><strong>Address :</strong> Paota C Road Jodhpur <br> Rajasthan 341518 </a></li>
                        <li><a href="#"><strong>Mobile Number :</strong> 9828521474</a></li>
                        <li><a href="#"><strong>Email ID : </strong> admin@gmail.com</a></li>
                        <li><a href="#"><strong>Web Link :</strong> www.Google.com</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!----------footer is closed --------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>
</html>