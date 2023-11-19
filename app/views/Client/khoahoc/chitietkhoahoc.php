<?php 
 updateview();
$ctkh = chitietkhoahoc();
    foreach($ctkh as $khct):
        extract($khct);
?>
    <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-xl-8 col-xxl-9">
                            <div class="card border-0 mb-0 rounded-lg overflow-hidden">
                                <div class="player shadow-none">
                                    <video id='video' src='images/video4.mp4' playsinline></video>
                                        <div class='play-btn-big'></div>
                                        <div class='controls'>
                                            <div class="time"><span class="time-current"></span><span class="time-total"></span></div>
                                            <div class='progress'>
                                                <div class='progress-filled'></div>
                                            </div>
                                            <div class='controls-main'>
                                                <div class='controls-left'>
                                                    <div class='volume'>
                                                        <div class='volume-btn loud mt-1'>
                                                            <i class="feather-volume-1 font-xl text-white"></i>
                                                        </div>
                                                        <div class='volume-slider'>
                                                            <div class='volume-filled'></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='play-btn paused'></div>
                                                <div class="controls-right">
                                                    <div class='speed'>
                                                        <ul class='speed-list'>
                                                            <li class='speed-item' data-speed='0.5'>0.5x</li>
                                                            <li class='speed-item' data-speed='0.75'>0.75x</li>
                                                            <li class='speed-item active' data-speed='1'>1x</li>
                                                            <li class='speed-item' data-speed='1.5'>1.5x</li>
                                                            <li class='speed-item' data-speed='2'>2x</li>
                                                        </ul>
                                                    </div>
                                                    <div class='fullscreen'>
                                                        <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z" transform="translate(2 2)" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card d-block border-0 rounded-lg overflow-hidden dark-bg-transparent bg-transparent mt-4 pb-3">
                                <div class="row">
                                    <div class="col-10"><h2 class="fw-700 font-md d-block lh-4 mb-2">Microsoft Access Development, Design and Advanced Methods Workshop Tutorial</h2></div>
                                    <div class="col-2">
                                        <a href="#" class="btn-round-md ml-3 d-inline-block float-right rounded-lg bg-danger"><i class="feather-bookmark font-sm text-white"></i></a>
                                        <a href="#" class="btn-round-md ml-0 d-inline-block float-right rounded-lg bg-greylight" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="feather-share-2 font-sm text-grey-700"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right p-3 border-0 shadow-xss" aria-labelledby="dropdownMenu2">
                                            <ul class="d-flex align-items-center mt-0 float-left">
                                                <li class="mr-2"><h4 class="fw-600 font-xss text-grey-900  mt-2 mr-3">Share: </h4></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                                <li class="mr-2"><a href="#" class="btn-round-md bg-pinterest"><i class="font-xs ti-pinterest text-white"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <span class="font-xssss fw-700 text-grey-900 d-inline-block ml-0 text-dark">Cassica Vanni</span>
                                <span class="dot ml-2 mr-2 d-inline-block btn-round-xss bg-grey"></span>
                                <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">Developer</span>
                                <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">Design</span>
                                <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">Developer</span>
                                <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">HTML5</span>
                                <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-1">Jquery</span>
                                <span class="dot ml-2 mr-2 d-inline-block btn-round-xss bg-grey"></span>
                                <span class="font-xssss fw-700 text-primary d-inline-block ml-0 ">Follow Author</span>
                            </div>

                            <div class="card d-block border-0 rounded-lg overflow-hidden mt-2">
                                <div id="accordion" class="accordion mb-0">
                                    <div class="card shadow-xss mb-0">
                                        <div class="card-header bg-greylight theme-dark-bg" id="headingOne">
                                            <h5 class="mb-0"><button class="btn font-xsss fw-600 btn-link " data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Development  to the Course </button></h5>
                                        </div>
                                        <div id="collapseOne" class="collapse p-3 show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body d-flex p-2">
                                                <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">1</span>
                                                <span class="font-xssss fw-500 text-grey-500 ml-2">Introduction to the course</span>
                                                <span class="ml-auto font-xssss fw-500 text-grey-500">12:34</span>
                                            </div>

                                            <div class="card-body d-flex p-2">
                                                <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">2</span>
                                                <span class="font-xssss fw-500 text-grey-500 ml-2">Watch the videos in HD mode only</span>
                                                <span class="ml-auto font-xssss fw-500 text-grey-500">10:34</span>
                                            </div>

                                            <div class="card-body d-flex p-2">
                                                <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">3</span>
                                                <span class="font-xssss fw-500 text-grey-500 ml-2">Watch the videos in HD mode only</span>
                                                <span class="ml-auto font-xssss fw-500 text-grey-500">10:34</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow-xss mb-0">
                                        <div class="card-header bg-greylight theme-dark-bg" id="headingTwo4">
                                            <h5 class="mb-0"><button class="btn font-xsss fw-600 btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Creating a sliding down menu </button></h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse p-3" aria-labelledby="headingTwo4" data-parent="#accordion">
                                            <div class="card-body d-flex p-2">
                                                <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">1</span>
                                                <span class="font-xssss fw-500 text-grey-500 ml-2">Introduction to the course</span>
                                                <span class="ml-auto font-xssss fw-500 text-grey-500">12:34</span>
                                            </div>

                                            <div class="card-body d-flex p-2">
                                                <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">2</span>
                                                <span class="font-xssss fw-500 text-grey-500 ml-2">Watch the videos in HD mode only</span>
                                                <span class="ml-auto font-xssss fw-500 text-grey-500">10:34</span>
                                            </div>

                                            <div class="card-body d-flex p-2">
                                                <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">3</span>
                                                <span class="font-xssss fw-500 text-grey-500 ml-2">Watch the videos in HD mode only</span>
                                                <span class="ml-auto font-xssss fw-500 text-grey-500">10:34</span>
                                            </div>

                                            <div class="card-body d-flex p-2">
                                                <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">4</span>
                                                <span class="font-xssss fw-500 text-grey-500 ml-2">Watch the videos in HD mode only</span>
                                                <span class="ml-auto font-xssss fw-500 text-grey-500">10:34</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card shadow-xss mb-0">
                                        <div class="card-header bg-greylight theme-dark-bg" id="headingTwo2">
                                            <h5 class="mb-0"><button class="btn font-xsss fw-600 btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> People chart infographics Animation </button></h5>
                                        </div>
                                        <div id="collapseThree" class="collapse p-3" aria-labelledby="headingTwo2" data-parent="#accordion">
                                            <div class="card-body d-flex p-2">
                                                <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">1</span>
                                                <span class="font-xssss fw-500 text-grey-500 ml-2">Introduction to the course</span>
                                                <span class="ml-auto font-xssss fw-500 text-grey-500">12:34</span>
                                            </div>

                                            <div class="card-body d-flex p-2">
                                                <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">2</span>
                                                <span class="font-xssss fw-500 text-grey-500 ml-2">Watch the videos in HD mode only</span>
                                                <span class="ml-auto font-xssss fw-500 text-grey-500">10:34</span>
                                            </div>

                                            <div class="card-body d-flex p-2">
                                                <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">3</span>
                                                <span class="font-xssss fw-500 text-grey-500 ml-2">Watch the videos in HD mode only</span>
                                                <span class="ml-auto font-xssss fw-500 text-grey-500">10:34</span>
                                            </div>

                                            <div class="card-body d-flex p-2">
                                                <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">4</span>
                                                <span class="font-xssss fw-500 text-grey-500 ml-2">Watch the videos in HD mode only</span>
                                                <span class="ml-auto font-xssss fw-500 text-grey-500">10:34</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card shadow-xss mb-0">
                                        <div class="card-header bg-greylight theme-dark-bg" id="headingTwo">
                                            <h5 class="mb-0"><button class="btn font-xsss fw-600 btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour"> Creating a clock animation with rotation property of shapes</button></h5>
                                        </div>
                                        <div id="collapsefour" class="collapse p-3" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body d-flex p-2">
                                                <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">1</span>
                                                <span class="font-xssss fw-500 text-grey-500 ml-2">Introduction to the course</span>
                                                <span class="ml-auto font-xssss fw-500 text-grey-500">12:34</span>
                                            </div>

                                            <div class="card-body d-flex p-2">
                                                <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">2</span>
                                                <span class="font-xssss fw-500 text-grey-500 ml-2">Watch the videos in HD mode only</span>
                                                <span class="ml-auto font-xssss fw-500 text-grey-500">10:34</span>
                                            </div>

                                            <div class="card-body d-flex p-2">
                                                <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">3</span>
                                                <span class="font-xssss fw-500 text-grey-500 ml-2">Watch the videos in HD mode only</span>
                                                <span class="ml-auto font-xssss fw-500 text-grey-500">10:34</span>
                                            </div>

                                            <div class="card-body d-flex p-2">
                                                <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">4</span>
                                                <span class="font-xssss fw-500 text-grey-500 ml-2">Watch the videos in HD mode only</span>
                                                <span class="ml-auto font-xssss fw-500 text-grey-500">10:34</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card d-block border-0 rounded-lg overflow-hidden p-4 shadow-xss mt-4 alert-success">
                                <h2 class="fw-700 font-sm mb-3 mt-1 pl-1 text-success mb-4">What you'll learn from this lesson</h2>
                                <h4 class="font-xssss fw-600 text-grey-600 mb-3 pl-30 position-relative lh-24"><i class="ti-check font-xssss btn-round-xs bg-success text-white position-absolute left-0 top-5"></i>Create awesome animated splash screens for any Excel project such as animation with password access to a work book, loading animation.</h4>
                                <h4 class="font-xssss fw-600 text-grey-600 mb-3 pl-30 position-relative lh-24"><i class="ti-check font-xssss btn-round-xs bg-success text-white position-absolute left-0 top-5"></i>After completing this course you'll be confident to create any subtle to complex animation that will turn any project a professional work and surely you'll become an awesome developer and designer</h4>
                                <h4 class="font-xssss fw-600 text-grey-600 mb-3 pl-30 position-relative lh-24"><i class="ti-check font-xssss btn-round-xs bg-success text-white position-absolute left-0 top-5"></i>Create awesome animated splash screens for any Excel project such as animation with password access to a work book, loading animation.</h4>
                                <h4 class="font-xssss fw-600 text-grey-600 mb-3 pl-30 position-relative lh-24"><i class="ti-check font-xssss btn-round-xs bg-success text-white position-absolute left-0 top-5"></i>After completing this course you'll be confident to create any subtle to complex animation that will turn any project a professional work and surely you'll become an awesome developer and designer</h4>
                                <h4 class="font-xssss fw-600 text-grey-600 mb-3 pl-30 position-relative lh-24"><i class="ti-check font-xssss btn-round-xs bg-success text-white position-absolute left-0 top-5"></i>Create awesome animated splash screens for any Excel project such as animation with password access to a work book, loading animation.</h4>
                                <h4 class="font-xssss fw-600 text-grey-600 mb-3 pl-30 position-relative lh-24"><i class="ti-check font-xssss btn-round-xs bg-success text-white position-absolute left-0 top-5"></i>After completing this course you'll be confident to create any subtle to complex animation that will turn any project a professional work and surely you'll become an awesome developer and designer</h4>

                            </div>

                            <div class="card d-block border-0 rounded-lg overflow-hidden p-4 shadow-xss mt-4">
                                <h2 class="fw-700 font-sm mb-3 mt-1 pl-1 mb-3">Description</h2>
                                <p class="font-xssss fw-500 lh-28 text-grey-600 mb-0 pl-2">After creating more than a dozen courses on Microsoft Access databases and programming in VBA, many students have contacted me with discussions on specific problems and scenarios.  From these discussions, I have created videos reviewing the details of the most useful techniques that everyone will eventually need.  I have made sure that every detail of these techniques is recorded in the videos!  BUT you should be somewhat familiar with VBA since there are lots of coding examples in the course. <br>                                        There are MANY tips and tricks in this workshop that you will not find an ANY of my other courses! <br>  I also include a specific database design challenge from a student and then go over the details of how I would handle it. <br> If you are willing to take the time to go through this course you could easily be much more productive with Microsoft Access in just a few hours! </p>
                            </div>

                            <div class="card d-block border-0 rounded-lg overflow-hidden p-4 shadow-xss mt-4 mb-5">
                                <h2 class="fw-700 font-sm mb-3 mt-1 pl-1 mb-3">Requirements</h2>
                                <p class="font-xssss fw-500 lh-28 text-grey-600 mb-0 pl-2">After creating more than a dozen courses on Microsoft Access databases and programming in VBA, many students have contacted me with discussions on specific problems and scenarios.  From these discussions,</p>
                                <ul class="list-style-disc pl-4 mt-3"><li><p class="font-xssss fw-500 lh-28 text-grey-500 mb-0 pl-2">move around shapes in Excel with codes,</p></li><li><p class="font-xssss fw-500 lh-28 text-grey-500 mb-0 pl-2">rotate shapes,</p></li><li><p class="font-xssss fw-500 lh-28 text-grey-500 mb-0 pl-2">understand 3D rotations in X, Y, Z axis</p></li><li><p class="font-xssss fw-500 lh-28 text-grey-500 mb-0 pl-2">Morphing of shapes</p></li><li><p class="font-xssss fw-500 lh-28 text-grey-500 mb-0 pl-2">create amazing animated splash screens to create first impression when a user clicks open your Excel workbook. Its a winning trick you'd always use once you learn</p></li><li><p class="font-xssss fw-500 lh-28 text-grey-500 mb-0 pl-2">create loading screens like seen on web pages /&nbsp; mobile apps in your Excel workbooks</p></li><li><p class="font-xssss fw-500 lh-28 text-grey-500 mb-0 pl-2">create animated password access splash screen system to your Excel workbooks. </p></li><li><p class="font-xssss fw-500 lh-28 text-grey-500 mb-0 pl-2">learn different styles of animated menus like slide out menus, slide down menus, scaling menus, toggle button animated menus</p></li><li><p class="font-xssss fw-500 lh-28 text-grey-500 mb-0 pl-2">loop animations</p></li><li><p class="font-xssss fw-500 lh-28 text-grey-500 mb-0 pl-2">chart animation / graph animation in Excel</p></li><li><p class="font-xssss fw-500 lh-28 text-grey-500 mb-0 pl-2">Learn text animation, that you'll always use in all simple to big Excel projects. Because it's insanely easy and useful!</p></li><li><p class="font-xssss fw-500 lh-28 text-grey-500 mb-0 pl-2">learn to apply various animations in all kinds of dashboards/reports/simple information workbook</p></li><li><p class="font-xssss fw-500 lh-28 text-grey-500 mb-0 pl-2">learn awesome button animations for that great user experience every time someone interacts with your dashboards/reports/projects</p></li><li><p class="font-xssss fw-500 lh-28 text-grey-500 mb-0 pl-2">creative mouse hover animation for all projects</p></li><li><p class="font-xssss fw-500 lh-28 text-grey-500 mb-0 pl-2">various transitions and effect animations</p></li><li><p class="font-xssss fw-500 lh-28 text-grey-500 mb-0 pl-2">learn all properties of shapes such as transparency, blur, Scale height/width, glow, color to achieve amazing animation effects that can be applied to any project.</p></li></ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-xxl-3">
                            <div class="card p-4 mb-4 bg-primary border-0 shadow-xss rounded-lg">
                                <div class="card-body">
                                    <h2 class="text-white font-xsssss fw-700 text-uppercase ls-3 ">Starter</h2>
                                    <h1 class="display2-size text-white fw-700">€ 49</h1>
                                    <h4 class="text-white fw-500 mb-4 lh-24 font-xssss">For anyone validating Framer as a professional prototyping tool.</h4>
                                    <h4 class="text-white font-xssss mb-2"><i class="ti-check mr-2 text-white"></i> Unlimited views</h4>
                                    <h4 class="text-white font-xssss mb-2"><i class="ti-check mr-2 text-white"></i> Everything in Free</h4>
                                    <h4 class="text-white font-xssss mb-4"><i class="ti-check mr-2 text-white"></i> Private share links</h4>
                                    <a href="#" class="btn btn-block border-0 w-100 bg-white p-3 text-primary fw-600 rounded-lg d-inline-block font-xssss btn-light">Subscribe</a>

                                </div>
                            </div>
                            <div class="card w-100 border-0 mt-0 mb-4 p-4 shadow-xss position-relative rounded-lg bg-white">
                                <div class="row">
                                    <div class="col-5 pr-0">
                                        <h2 class="display3-size lh-1 m-0 text-grey-900 fw-700">4.2</h2>
                                    </div>
                                    <div class="col-7 pl-0 text-right">
                                        <div class="star d-block w-100 text-right">
                                            <img src="images/star.png" alt="star" class="w10">
                                            <img src="images/star.png" alt="star" class="w10">
                                            <img src="images/star.png" alt="star" class="w10">
                                            <img src="images/star.png" alt="star" class="w10">
                                            <img src="images/star-disable.png" alt="star" class="w10">
                                        </div>
                                        <h4 class="font-xsssss text-grey-600 fw-600 mt-1">Based on 433 rating</h4>
                                    </div>
                                </div>
                                <div class="bg-greylight theme-dark-bg rounded-sm p-2 mt-3 mb-4">
                                    <div class="row mt-3">
                                        <div class="col-3 pr-1 mt-0"><img src="images/star.png" alt="star" class="w10 float-left"><h4 class="font-xsss fw-600 text-grey-600 ml-1 float-left d-inline">5</h4></div>
                                        <div class="col-7 pl-0 pr-2">
                                            <div id="bar_1" data-value="45" class="bar-container">
                                                <div class="bar-percentage" style="width: 70%;"></div>
                                            </div>
                                        </div>
                                        <div class="col-2 pl-0"><h4 class="font-xssss fw-600 text-grey-800">70%</h4></div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-3 pr-1 mt-0"><img src="images/star.png" alt="star" class="w10 float-left"><h4 class="font-xsss fw-600 text-grey-600 ml-1 float-left d-inline">4</h4></div>
                                        <div class="col-7 pl-0 pr-2">
                                            <div id="bar_2" data-value="45" class="bar-container">
                                                <div class="bar-percentage" style="width: 50%;"></div>
                                            </div>
                                        </div>
                                        <div class="col-2 pl-0"><h4 class="font-xssss fw-600 text-grey-800">50%</h4></div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-3 pr-1 mt-0"><img src="images/star.png" alt="star" class="w10 float-left"><h4 class="font-xsss fw-600 text-grey-600 ml-1 float-left d-inline">3</h4></div>
                                        <div class="col-7 pl-0 pr-2">
                                            <div id="bar_3" data-value="45" class="bar-container">
                                                <div class="bar-percentage" style="width: 40%;"></div>
                                            </div>
                                        </div>
                                        <div class="col-2 pl-0"><h4 class="font-xssss fw-600 text-grey-800">40%</h4></div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-3 pr-1 mt-0"><img src="images/star.png" alt="star" class="w10 float-left"><h4 class="font-xsss fw-600 text-grey-600 ml-1 float-left d-inline">2</h4></div>
                                        <div class="col-7 pl-0 pr-2">
                                            <div id="bar_4" data-value="45" class="bar-container">
                                                <div class="bar-percentage" style="width: 30%;"></div>
                                            </div>
                                        </div>
                                        <div class="col-2 pl-0"><h4 class="font-xssss fw-600 text-grey-800">30%</h4></div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-3 pr-1 mt-0"><img src="images/star.png" alt="star" class="w10 float-left"><h4 class="font-xsss fw-600 text-grey-600 ml-1 float-left d-inline">1</h4></div>
                                        <div class="col-7 pl-0 pr-2">
                                            <div id="bar_5" data-value="45" class="bar-container">
                                                <div class="bar-percentage" style="width: 20%;"></div>
                                            </div>
                                        </div>
                                        <div class="col-2 pl-0"><h4 class="font-xssss fw-600 text-grey-800">20%</h4></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2 text-left">
                                        <figure class="avatar float-left mb-0"><img src="images/user-7.png" alt="image" class="float-right shadow-none w40 mr-2"></figure>
                                    </div>
                                    <div class="col-10 pl-4">
                                        <div class="content">
                                            <h6 class="author-name font-xssss fw-600 mb-0 text-grey-800">Goria Coast</h6>
                                            <h6 class="d-block font-xsssss fw-500 text-grey-500 mt-2 mb-0">July 26 at 8:20 PM</h6>
                                            <div class="star d-block w-100 text-left">
                                                <img src="images/star.png" alt="star" class="w10">
                                                <img src="images/star.png" alt="star" class="w10">
                                                <img src="images/star.png" alt="star" class="w10">
                                                <img src="images/star.png" alt="star" class="w10">
                                                <img src="images/star-disable.png" alt="star" class="w10">
                                            </div>                            
                                            <p class="comment-text lh-24 fw-500 font-xssss text-grey-500 mt-2">Enjoyed this a lot and well done. We are an early stage digitally native vertical brand, making travel bags. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2 text-left">
                                        <figure class="avatar float-left mb-0"><img src="images/user-6.png" alt="image" class="float-right shadow-none w40 mr-2"></figure>
                                    </div>
                                    <div class="col-10 pl-4">
                                        <div class="content">
                                            <h6 class="author-name font-xssss fw-600 mb-0 text-grey-800">Goria Coast</h6>
                                            <h6 class="d-block font-xsssss fw-500 text-grey-500 mt-2 mb-0">July 26 at 8:20 PM</h6>
                                            <div class="star d-block w-100 text-left">
                                                <img src="images/star.png" alt="star" class="w10">
                                                <img src="images/star.png" alt="star" class="w10">
                                                <img src="images/star.png" alt="star" class="w10">
                                                <img src="images/star.png" alt="star" class="w10">
                                                <img src="images/star-disable.png" alt="star" class="w10">
                                            </div>                            
                                            <p class="comment-text lh-24 fw-500 font-xssss text-grey-500 mt-2">Enjoyed this a lot and well done. We are an early stage digitally native vertical brand, making travel bags. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2 text-left">
                                        <figure class="avatar float-left mb-0"><img src="images/user-5.png" alt="image" class="float-right shadow-none w40 mr-2"></figure>
                                    </div>
                                    <div class="col-10 pl-4">
                                        <div class="content">
                                            <h6 class="author-name font-xssss fw-600 mb-0 text-grey-800">Goria Coast</h6>
                                            <h6 class="d-block font-xsssss fw-500 text-grey-500 mt-2 mb-0">July 26 at 8:20 PM</h6>
                                            <div class="star d-block w-100 text-left">
                                                <img src="images/star.png" alt="star" class="w10">
                                                <img src="images/star.png" alt="star" class="w10">
                                                <img src="images/star.png" alt="star" class="w10">
                                                <img src="images/star.png" alt="star" class="w10">
                                                <img src="images/star-disable.png" alt="star" class="w10">
                                            </div>                            
                                            <p class="comment-text lh-24 fw-500 font-xssss text-grey-500 mt-2">Enjoyed this a lot and well done. We are an early stage digitally native vertical brand, making travel bags. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2 text-left">
                                        <figure class="avatar float-left mb-0"><img src="images/user-3.png" alt="image" class="float-right shadow-none w40 mr-2"></figure>
                                    </div>
                                    <div class="col-10 pl-4">
                                        <div class="content">
                                            <h6 class="author-name font-xssss fw-600 mb-0 text-grey-800">Goria Coast</h6>
                                            <h6 class="d-block font-xsssss fw-500 text-grey-500 mt-2 mb-0">July 26 at 8:20 PM</h6>
                                            <div class="star d-block w-100 text-left">
                                                <img src="images/star.png" alt="star" class="w10">
                                                <img src="images/star.png" alt="star" class="w10">
                                                <img src="images/star.png" alt="star" class="w10">
                                                <img src="images/star.png" alt="star" class="w10">
                                                <img src="images/star-disable.png" alt="star" class="w10">
                                            </div>                            
                                            <p class="comment-text lh-24 fw-500 font-xssss text-grey-500 mt-2">Enjoyed this a lot and well done. We are an early stage digitally native vertical brand, making travel bags. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row"><a href="#" class="d-block p-2 lh-32 w-100 text-center ml-3 mr-3 bg-greylight fw-600 font-xssss text-grey-900">Add a Review</a></div>
                            </div>

                            <div class="card shadow-xss rounded-lg border-0 p-4 mb-4">
                                <h4 class="font-xs fw-700 text-grey-900 d-block mb-3">Modul <a href="#" class="float-right"><i class="ti-arrow-circle-right text-grey-500 font-xss"></i></a></h4>
                                <div class="card-body d-flex p-0">
                                    <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">1</span>
                                    <span class="font-xssss fw-500 text-grey-500 ml-2">Introduction</span>
                                    <span class="ml-auto font-xssss fw-500 text-grey-500">12:34</span>
                                </div>
                                <div class="card-body d-flex p-0 mt-3">
                                    <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">2</span>
                                    <span class="font-xssss fw-500 text-grey-500 ml-2">Watch the videos</span>
                                    <span class="ml-auto font-xssss fw-500 text-grey-500">22:34</span>
                                </div>

                                <div class="card-body d-flex p-0 mt-3">
                                    <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">3</span>
                                    <span class="font-xssss fw-500 text-grey-500 ml-2"> Creating a sliding</span>
                                    <span class="ml-auto font-xssss fw-500 text-grey-500">34:34</span>
                                </div>

                                <div class="card-body d-flex p-0 mt-3">
                                    <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">4</span>
                                    <span class="font-xssss fw-500 text-grey-500 ml-2">Make a  Dropdown</span>
                                    <span class="ml-auto font-xssss fw-500 text-grey-500">40:34</span>
                                </div>

                                <div class="card-body d-flex p-0 mt-3">
                                    <span class="bg-current btn-round-xs rounded-lg font-xssss text-white fw-600">5</span>
                                    <span class="font-xssss fw-500 text-grey-500 ml-2">Conclusion</span>
                                    <span class="ml-auto font-xssss fw-500 text-grey-500">2:34</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="middle-sidebar-right right-scroll-bar">
                    <div class="middle-sidebar-right-content">

                        <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0">
                            <div class="card-body p-2 d-block text-center bg-no-repeat bg-image-topcenter" style="background-image: url(images/user-pattern.png);">
                                <a href="#" class="position-absolute right-0 mr-4"><i class="feather-edit text-grey-500 font-xs"></i></a>
                                <figure class="avatar ml-auto mr-auto mb-0 mt-2 w90"><img src="images/user-12.png" alt="image" class="float-right shadow-sm rounded-circle w-100"></figure>
                                <div class="clearfix"></div>
                                <h2 class="text-black font-xss lh-3 fw-700 mt-3 mb-1">Hendrix Stamp</h2>
                                <h4 class="text-grey-500 font-xssss mt-0"><span class="d-inline-block bg-success btn-round-xss m-0"></span> Available</h4>
                                <div class="clearfix"></div>
                                <div class="col-12 text-center mt-4 mb-2">
                                    <a href="#" class="p-0 ml-1 btn btn-round-md rounded-xl bg-lightblue"><i class="text-current ti-comment-alt font-sm"></i></a>
                                    <a href="#" class="p-0 ml-1 btn btn-round-md rounded-xl bg-lightblue"><i class="text-current ti-lock font-sm"></i></a>
                                    <a href="#" class="p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                </div>
                                <ul class="list-inline border-0 mt-4">
                                    <li class="list-inline-item text-center mr-4"><h4 class="fw-700 font-md">500+ <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Connections</span></h4></li>
                                    <li class="list-inline-item text-center mr-4"><h4 class="fw-700 font-md">88.7 k <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Follower</span></h4></li>
                                    <li class="list-inline-item text-center"><h4 class="fw-700 font-md">1,334 <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Followings</span></h4></li>
                                </ul>

                                <div class="col-12 pl-0 mt-4 text-left">
                                    <h4 class="text-grey-800 font-xsss fw-700 mb-3 d-block">My Skill <a href="#"><i class="ti-angle-right font-xsssss text-grey-700 float-right "></i></a></h4>
                                    <div class="carousel-card owl-carousel owl-theme overflow-visible nav-none">
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="images/download1.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="images/download2.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="images/download4.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="images/download3.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="images/download1.png" alt="icon" class="p-3"></a></div>
                                    </div>
                                </div>  

                            </div>
                        </div>

                        <div class="card theme-light-bg overflow-hidden rounded-xxl border-0 mb-3">
                            <div class="card-body d-flex justify-content-between align-items-end p-4">
                                <div>
                                    <h4 class="font-xsss text-grey-900 mb-2 d-flex align-items-center justify-content-between mt-2 fw-700">
                                        Dark Mode
                                    </h4>
                                </div>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input dark-mode-switch" id="darkmodeswitch">
                                    <label class="custom-control-label bg-success" for="darkmodeswitch"></label>
                                </div>

                            </div>
                        </div>

                        <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0">
                            <div class="card-body d-block text-left">
                                <h1 class="text-grey-800 font-xl fw-900 mb-4 lh-3">Sign up for our newsletter</h1>
                                <form action="#" class="mt-3">
                                    <div class="form-group icon-input">
                                        <i class="ti-email text-grey-500 font-sm"></i>
                                        <input type="text" class="form-control mb-2 bg-greylight border-0 style1-input pl-5" placeholder="Enail address">
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox">By checking this box, you confirm that you have read and are agreeing to our terms of use regarding.</label>
                                    </div>
                                </form>
                                <ul class="d-flex align-items-center justify-content-between mt-3">
                                    <li><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-pinterest"><i class="font-xs ti-pinterest text-white"></i></a></li>
                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
                <button class="btn btn-circle text-white btn-neutral sidebar-right">
                    <i class="ti-angle-left"></i>  
                </button>
            </div>            
        </div>
    <?php endforeach;?>
<button type="submit">Thanh toán</button>