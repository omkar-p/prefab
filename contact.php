<!DOCTYPE html>

<html>

<head>
    <title>Contact-Us</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./static/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

    <!-- <link href="http://fonts.cdnfonts.com/css/adobe-clean" rel="stylesheet"> -->


    <script src="static/scripts/index.js"></script>
    <script src="static/scripts/sidebar.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="static/stylesheets/sidebar.css">
    <link rel="stylesheet" type="text/css" href="static/stylesheets/header.css">
    <link rel="stylesheet" type="text/css" href="static/stylesheets/footer.css">

    <style>
        .slogan-with-order-btn h1 {
            font-family: 'Montserrat-Arabic', sans-serif !important;
            font-weight: 700;
        }

        .designed-experience-container .back-imgs .bitmap-pattern {
            position: absolute;
            left: -100px;
        }

        .designed-experience-container .back-imgs .gray-bitmap {
            position: absolute;
            right: 335px;
        }

        .designed-experience-container-2 .back-imgs .bitmap-pattern {
            position: absolute;
            right: -40px;
        }
        
        @media only screen and (min-width:1500px) and (max-width:2500px) {
            .designed-experience-container .back-imgs .bedroom {
                width: 550px !important;
                height: 600px;
                right: 420px;
            }
        }
        
        @media only screen and (min-width:1500px) and (max-width:2500px) {
            .designed-experience-container-2 .back-imgs .bedroom {
                width: 800px !important;
                height: 439px;
                left: 340px;
            }
        }

        @media (min-width: 1600px) {
            .designed-experience-container .back-imgs .gray-bitmap {
                position: absolute;
                right: 50px;
            }

            .designed-experience-container .back-imgs .bitmap-pattern {
                position: absolute;
                left: -215px;
                top: 15px;
            }

            .designed-experience-container-2 .back-imgs .bitmap-pattern {
                position: absolute;
                right: -75px;
            }
        }
    </style>
    <script>
        function Home() {
            window.location.href = "index.php";
        }
    </script>
</head>

<body>
   
<?php 
            if(!empty($_REQUEST['alert']) && $_REQUEST['alert']==1){
        ?>
        <div id="alerts" class="alerts">
            <?php 
                if(!empty($_REQUEST['mail_success']) && $_REQUEST['mail_success']==1){
            ?>
            <div id="success-alert-model" class="model-box success-alert">
                <div class="model-icon">
                    <i class="fa fa-check" aria-hidden="true"></i>
                </div>
                <div class="model-header">
                    <h3> Thank you for your response </h3>
                </div>
                <div class="model-content">
                    <p>Message sent successfully! We will be in touch with you soon!!</p>    
                </div>
                <div class="model-footer">
                    <button class="btn btn-success" onclick="hideModel()">Okay</button>
                </div>
            </div>
            <?php
                }
            ?>
            <?php 
                if(!empty($_REQUEST['mail_failure']) && $_REQUEST['mail_failure']==1){
            ?>
            <div id="error-alert-model" class="model-box error-alert">
                <div class="model-icon">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>
                <div class="model-header">
                    <h3> Failed </h3>
                </div>
                <div class="model-content">
                    <p>Failed to send message! Please reach us on support@prefab.com for any query</p>    
                </div>
                <div class="model-footer">
                    <button class="btn btn-danger" onclick="hideModel()">Okay</button>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        <?php
            }
        ?>
    <div id="sidebar-container" class="sidebar-container" onClick="toggleSidebar()">
        <div class="sidebar">
            <div class="close-btn-container">
                <div class="close-btn slide-button slide_diagonal">
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="menu-bars">
                <div id="left-menu-bar" class="left-menu-bar">
                    <a href="index.php" class="menu">
                            HOME
                        </a>
                    <a href="modals.html" class="menu">
                            OUR MODALS
                        </a>
                    <a href="about-us.html" class="menu">
                            ABOUT US
                        </a>
                    <a href="#" class="menu">
                            BLOGS
                        </a>
                    <a href="contact.php" class="menu">
                            CONTACTS
                        </a>
                </div>
                <div class="right-menu-bar">
                    <button class="track-order-button slide-button slide_right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23.807" height="29.098" viewBox="0 0 23.807 29.098">
                            <g id="track_icon" transform="translate(-3 -1)">
                              <path id="Path_65255" data-name="Path 65255" d="M6.2,2.336a.687.687,0,0,1,.89.544,3.97,3.97,0,0,0,3.848,2.994h7.936A3.97,3.97,0,0,0,22.719,2.88a.687.687,0,0,1,.89-.544,5.292,5.292,0,0,1,3.2,4.861V24.391a5.291,5.291,0,0,1-5.29,5.29H8.29A5.291,5.291,0,0,1,3,24.391V7.2A5.292,5.292,0,0,1,6.2,2.336Zm4.737,10.151a1.323,1.323,0,1,1-1.323-1.323A1.323,1.323,0,0,1,10.936,12.488Zm2.645,0A1.323,1.323,0,0,1,14.9,11.165h5.29a1.323,1.323,0,1,1,0,2.645H14.9A1.323,1.323,0,0,1,13.581,12.488ZM14.9,16.455a1.323,1.323,0,1,0,0,2.645h5.29a1.323,1.323,0,1,0,0-2.645Zm0,5.29a1.323,1.323,0,1,0,0,2.645h2.645a1.323,1.323,0,0,0,0-2.645Zm-3.968-3.968a1.323,1.323,0,1,1-1.323-1.323A1.323,1.323,0,0,1,10.936,17.778Zm0,5.29a1.323,1.323,0,1,1-1.323-1.323A1.323,1.323,0,0,1,10.936,23.068Z" transform="translate(0 0.416)" fill="#262723" fill-rule="evenodd"/>
                              <path id="Path_65256" data-name="Path 65256" d="M9.323,1h7.936a1.323,1.323,0,1,1,0,2.645H9.323A1.323,1.323,0,1,1,9.323,1Z" transform="translate(1.613)" fill="#262723"/>
                            </g>
                          </svg> Track Order</button>
                    <div class="get-in-touch">
                        <div class="menu title">
                            GET IN TOUCH
                        </div>
                        <div class="menu detail">
                            Support@nozal.sa
                        </div>
                        <div class="menu detail">
                            +966 5000 0000
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-head-part">
        <header>
            <!-- <div class="logo">
                    <div>P</div>
                    <div>R</div>
                    <div>E</div>
                    <div class="font-weight-bold">F</div>
                    <div class="font-weight-bold">A</div>
                    <div class="font-weight-bold">B</div>
                </div> -->
            <div class="logo">
                <img src="./static/images/logo.png" alt="" class="logoimg" onclick="Home()">
            </div>
            <div class="header-right">
                <div class="lang-bx">AR</div>
                <div class="sidebar-btn" onClick="toggleSidebar()">
                    <div class="sidbar-ln sidbar-ln-top"></div>
                    <div class="sidbar-ln sidbar-ln-middle"></div>
                    <div class="sidbar-ln sidbar-ln-bottom"></div>
                </div>
            </div>
        </header>
        <div class="ui-pattern-1"></div>

        <div class="slogan-with-order-btn">
            <p>
                CUSTOMIZED CONTAINERS
            </p>
            <h1>WE CREATE <br>
                <font>DREAM PREFAB CABINS</font>
            </h1>
            <a href="modals.html"><button class="slide-button slide_right">ORDER NOW</button></a>
        </div>

        <div class="bg-slider-options">
            <div id="page-head-bg-img-1" class="bg-slider-img-container" onclick="changeHeadBg(0)">
                <div class="bg-slider-img">
                    <img src="./static/images/Bitmap_ee.png" alt="">
                </div>
                <div class="active-ln"></div>
            </div>
            <div id="page-head-bg-img-2" class="bg-slider-img-container" onclick="changeHeadBg(1)">
                <div class="bg-slider-img">
                    <img src="./static/images/Bitmap_eg.png" alt="">
                </div>
                <div class="active-ln"></div>
            </div>
            <div id="page-head-bg-img-3" class="bg-slider-img-container" onclick="changeHeadBg(2)">
                <div class="bg-slider-img">
                    <img src="./static/images/Night2.jpg" alt="">
                </div>
                <div class="active-ln"></div>
            </div>
            <div id="page-head-bg-img-4" class="bg-slider-img-container" onclick="changeHeadBg(3)">
                <div class="bg-slider-img">
                    <img src="./static/images/Bitmap_ej.png" alt="">
                </div>
                <div class="active-ln"></div>
            </div>
        </div>
    </div>
    <div class="models-carosul-container">
        <div class="models-carosul-content">
            <h3>Choose your <br>
                <font>FUTURE SPACE</font>
            </h3>
            <p class="content-line-2">With future modern design that fits your</p>
            <p>Just 3% of Prefab Cabins in each destination win the Plum Award, the new global quality standard.</p>
            <div class="next-prev-button-container">
                <div class="next-prev-button prev-button" onclick="slidePrevModelCarosulItem()">
                    <div class="next-prev-button-prefix prev-button-prefix"></div>
                    <div>PREV</div>
                </div>
                <div class="next-prev-button next-button" onclick="slideNextModelCarosulItem()">
                    <div>NEXT</div>
                    <div class="next-prev-button-prefix next-button-prefix"></div>
                </div>
            </div>
        </div>
        <div class="model-carosul-outer-container">
            <div class="model-carosul">
                <div id="model-carosul-item-hidden-left" class="model-carosul-item">
                    <img class="img-responsive" src="./static/images/Cabin_Desert_4to3.jpg" alt="">
                    <div class="model-carosul-item-detail-container">
                        <div class="model-carosul-nxt-prev-btn model-carosul-prev-btn">
                            <div class="next-prev-button-prefix prev-button-prefix" onclick="slidePrevModelCarosulItem()"></div>
                        </div>
                        <div class="model-carosul-item-detail">
                            <div class="carosul-slider">
                                <!-- <div id="model-carosul-item-slider-1"></div>
                                <div id="model-carosul-item-slider-2"></div>
                                <div id="model-carosul-item-slider-3"></div>
                                <div id="model-carosul-item-slider-4"></div>
                                <div id="model-carosul-item-slider-5"></div> -->
                            </div>
                            <p>Hadeed NozolPods</p>
                            <p class="price-start-from-label">Start from</p>
                            <p class="price-start-from">75,452 SR</p>
                        </div>
                        <div class="model-carosul-nxt-prev-btn model-carosul-nxt-btn">
                            <div class="next-prev-button-prefix next-button-prefix" onclick="slideNextModelCarosulItem()"></div>
                        </div>
                    </div>
                    <div class="share-button-container">
                        <div class="share-button">
                            <svg class="Vector_op" viewBox="0 0 10.929 12.376">
                                    <path id="Vector_op" d="M 9.106307983398438 8.828417778015137 C 8.662296295166016 8.831399917602539 8.23625373840332 9.004164695739746 7.91556978225708 9.311276435852051 L 3.584689140319824 6.707122802734375 C 3.618195056915283 6.563064575195312 3.636525869369507 6.415894508361816 3.639381885528564 6.268018245697021 C 3.636525869369507 6.120142459869385 3.618195056915283 5.97297191619873 3.584689140319824 5.828913688659668 L 7.867127418518066 3.250543832778931 C 8.19842529296875 3.574635028839111 8.642854690551758 3.757058620452881 9.106307983398438 3.759186029434204 C 9.349655151367188 3.755422115325928 9.589871406555176 3.7037034034729 9.813207626342773 3.606991291046143 C 10.03654289245605 3.510279178619385 10.23861312866211 3.370472431182861 10.40785312652588 3.195572137832642 C 10.57709217071533 3.020671844482422 10.71017742156982 2.814112663269043 10.79949283599854 2.587717056274414 C 10.88880729675293 2.361321210861206 10.93259716033936 2.119534254074097 10.9283561706543 1.876194715499878 C 10.93549633026123 1.632430195808411 10.89364910125732 1.389711141586304 10.80529403686523 1.162410616874695 C 10.71693897247314 0.9351100325584412 10.58387279510498 0.7278494238853455 10.41397380828857 0.5529019832611084 C 10.24407577514648 0.377954512834549 10.04079914093018 0.2388772815465927 9.816183090209961 0.143905907869339 C 9.591567039489746 0.04893453419208527 9.350176811218262 -2.819193522631881e-16 9.106307983398438 -2.667926664007631e-31 C 8.862439155578613 -2.493902165941891e-16 8.621048927307129 0.04893453419208527 8.396432876586914 0.143905907869339 C 8.171816825866699 0.2388772815465927 7.968539237976074 0.377954512834549 7.798641204833984 0.5529019832611084 C 7.628742694854736 0.7278494238853455 7.49567699432373 0.9351100325584412 7.407321929931641 1.162410616874695 C 7.318966865539551 1.389711141586304 7.277120113372803 1.632430195808411 7.284259796142578 1.876194715499878 C 7.287116050720215 2.024070262908936 7.305447101593018 2.17124080657959 7.338952541351318 2.315299034118652 L 3.056514263153076 4.893668651580811 C 2.725216865539551 4.569577217102051 2.280786991119385 4.387154102325439 1.817333936691284 4.385026931762695 C 1.329533696174622 4.402242183685303 0.8674587607383728 4.608124256134033 0.5284581780433655 4.959299564361572 C 0.1894576102495193 5.310474872589111 3.469776765407451e-16 5.779523849487305 0 6.267627716064453 C 0 6.75573205947876 0.1894576102495193 7.224780082702637 0.5284581780433655 7.575955867767334 C 0.8674587607383728 7.927131175994873 1.329533696174622 8.133013725280762 1.817333936691284 8.150228500366211 C 2.280786991119385 8.148101806640625 2.725216865539551 7.965678215026855 3.056514263153076 7.641586780548096 L 7.381144046783447 10.25199031829834 C 7.349715709686279 10.38568782806396 7.333465576171875 10.52250289916992 7.332701683044434 10.6598424911499 C 7.344056606292725 11.00812911987305 7.457713603973389 11.34536266326904 7.659493446350098 11.629469871521 C 7.861273765563965 11.91357803344727 8.142244338989258 12.13198184967041 8.467350006103516 12.25743579864502 C 8.792455673217773 12.38288974761963 9.147305488586426 12.40983772277832 9.487627983093262 12.33491897583008 C 9.827950477600098 12.25999927520752 10.13867950439453 12.0865306854248 10.38105010986328 11.83615207672119 C 10.62342071533203 11.58577442169189 10.78670120239258 11.26957225799561 10.8505220413208 10.92699432373047 C 10.91434288024902 10.58441734313965 10.87587833404541 10.23063087463379 10.73992729187012 9.909772872924805 C 10.60397624969482 9.588915824890137 10.37655735015869 9.315190315246582 10.08604335784912 9.122749328613281 C 9.795528411865234 8.930307388305664 9.454779624938965 8.827668190002441 9.106307983398438 8.82763671875 L 9.106307983398438 8.828417778015137 Z">
                                    </path>
                                </svg>
                        </div>
                    </div>
                </div>
                <div id="model-carosul-item-active" class="model-carosul-item active">
                    <img class="img-responsive" src="./static/images/Cabin_Desert_4to3.jpg" alt="">
                    <div class="model-carosul-item-detail-container">
                        <div class="model-carosul-nxt-prev-btn model-carosul-prev-btn">
                            <div class="next-prev-button-prefix prev-button-prefix" onclick="slidePrevModelCarosulItem()"></div>
                        </div>
                        <div class="model-carosul-item-detail">
                            <div class="carosul-slider">
                                <div id="model-carosul-item-slider-1"></div>
                                <div id="model-carosul-item-slider-2"></div>
                                <div id="model-carosul-item-slider-3"></div>
                                <div id="model-carosul-item-slider-4"></div>
                                <div id="model-carosul-item-slider-5"></div>
                            </div>
                            <p>Hadeed NozolPods</p>
                            <p class="price-start-from-label">Start from</p>
                            <p class="price-start-from">75,452 SR</p>
                        </div>
                        <div class="model-carosul-nxt-prev-btn model-carosul-nxt-btn">
                            <div class="next-prev-button-prefix next-button-prefix" onclick="slideNextModelCarosulItem()"></div>
                        </div>
                    </div>
                    <div class="share-button-container">
                        <div class="share-button">
                            <svg class="Vector_op" viewBox="0 0 10.929 12.376">
                                    <path id="Vector_op" d="M 9.106307983398438 8.828417778015137 C 8.662296295166016 8.831399917602539 8.23625373840332 9.004164695739746 7.91556978225708 9.311276435852051 L 3.584689140319824 6.707122802734375 C 3.618195056915283 6.563064575195312 3.636525869369507 6.415894508361816 3.639381885528564 6.268018245697021 C 3.636525869369507 6.120142459869385 3.618195056915283 5.97297191619873 3.584689140319824 5.828913688659668 L 7.867127418518066 3.250543832778931 C 8.19842529296875 3.574635028839111 8.642854690551758 3.757058620452881 9.106307983398438 3.759186029434204 C 9.349655151367188 3.755422115325928 9.589871406555176 3.7037034034729 9.813207626342773 3.606991291046143 C 10.03654289245605 3.510279178619385 10.23861312866211 3.370472431182861 10.40785312652588 3.195572137832642 C 10.57709217071533 3.020671844482422 10.71017742156982 2.814112663269043 10.79949283599854 2.587717056274414 C 10.88880729675293 2.361321210861206 10.93259716033936 2.119534254074097 10.9283561706543 1.876194715499878 C 10.93549633026123 1.632430195808411 10.89364910125732 1.389711141586304 10.80529403686523 1.162410616874695 C 10.71693897247314 0.9351100325584412 10.58387279510498 0.7278494238853455 10.41397380828857 0.5529019832611084 C 10.24407577514648 0.377954512834549 10.04079914093018 0.2388772815465927 9.816183090209961 0.143905907869339 C 9.591567039489746 0.04893453419208527 9.350176811218262 -2.819193522631881e-16 9.106307983398438 -2.667926664007631e-31 C 8.862439155578613 -2.493902165941891e-16 8.621048927307129 0.04893453419208527 8.396432876586914 0.143905907869339 C 8.171816825866699 0.2388772815465927 7.968539237976074 0.377954512834549 7.798641204833984 0.5529019832611084 C 7.628742694854736 0.7278494238853455 7.49567699432373 0.9351100325584412 7.407321929931641 1.162410616874695 C 7.318966865539551 1.389711141586304 7.277120113372803 1.632430195808411 7.284259796142578 1.876194715499878 C 7.287116050720215 2.024070262908936 7.305447101593018 2.17124080657959 7.338952541351318 2.315299034118652 L 3.056514263153076 4.893668651580811 C 2.725216865539551 4.569577217102051 2.280786991119385 4.387154102325439 1.817333936691284 4.385026931762695 C 1.329533696174622 4.402242183685303 0.8674587607383728 4.608124256134033 0.5284581780433655 4.959299564361572 C 0.1894576102495193 5.310474872589111 3.469776765407451e-16 5.779523849487305 0 6.267627716064453 C 0 6.75573205947876 0.1894576102495193 7.224780082702637 0.5284581780433655 7.575955867767334 C 0.8674587607383728 7.927131175994873 1.329533696174622 8.133013725280762 1.817333936691284 8.150228500366211 C 2.280786991119385 8.148101806640625 2.725216865539551 7.965678215026855 3.056514263153076 7.641586780548096 L 7.381144046783447 10.25199031829834 C 7.349715709686279 10.38568782806396 7.333465576171875 10.52250289916992 7.332701683044434 10.6598424911499 C 7.344056606292725 11.00812911987305 7.457713603973389 11.34536266326904 7.659493446350098 11.629469871521 C 7.861273765563965 11.91357803344727 8.142244338989258 12.13198184967041 8.467350006103516 12.25743579864502 C 8.792455673217773 12.38288974761963 9.147305488586426 12.40983772277832 9.487627983093262 12.33491897583008 C 9.827950477600098 12.25999927520752 10.13867950439453 12.0865306854248 10.38105010986328 11.83615207672119 C 10.62342071533203 11.58577442169189 10.78670120239258 11.26957225799561 10.8505220413208 10.92699432373047 C 10.91434288024902 10.58441734313965 10.87587833404541 10.23063087463379 10.73992729187012 9.909772872924805 C 10.60397624969482 9.588915824890137 10.37655735015869 9.315190315246582 10.08604335784912 9.122749328613281 C 9.795528411865234 8.930307388305664 9.454779624938965 8.827668190002441 9.106307983398438 8.82763671875 L 9.106307983398438 8.828417778015137 Z">
                                    </path>
                                </svg>
                        </div>
                    </div>
                </div>
                <div id="model-carosul-item-hidden" class="model-carosul-item">
                    <img class="img-responsive" src="./static/images/Cabin_Desert_4to3.jpg" alt="">
                    <div class="model-carosul-item-detail-container">
                        <div class="model-carosul-nxt-prev-btn model-carosul-prev-btn">
                            <div class="next-prev-button-prefix prev-button-prefix" onclick="slidePrevModelCarosulItem()"></div>
                        </div>
                        <div class="model-carosul-item-detail">
                            <div class="carosul-slider">
                                <!-- <div id="model-carosul-item-slider-1"></div>
                                <div id="model-carosul-item-slider-2"></div>
                                <div id="model-carosul-item-slider-3"></div>
                                <div id="model-carosul-item-slider-4"></div>
                                <div id="model-carosul-item-slider-5"></div> -->
                            </div>
                            <p>Hadeed NozolPods</p>
                            <p class="price-start-from-label">Start from</p>
                            <p class="price-start-from">75,452 SR</p>
                        </div>
                        <div class="model-carosul-nxt-prev-btn model-carosul-nxt-btn">
                            <div class="next-prev-button-prefix next-button-prefix" onclick="slideNextModelCarosulItem()"></div>
                        </div>
                    </div>
                    <div class="share-button-container">
                        <div class="share-button">
                            <svg class="Vector_op" viewBox="0 0 10.929 12.376">
                                    <path id="Vector_op" d="M 9.106307983398438 8.828417778015137 C 8.662296295166016 8.831399917602539 8.23625373840332 9.004164695739746 7.91556978225708 9.311276435852051 L 3.584689140319824 6.707122802734375 C 3.618195056915283 6.563064575195312 3.636525869369507 6.415894508361816 3.639381885528564 6.268018245697021 C 3.636525869369507 6.120142459869385 3.618195056915283 5.97297191619873 3.584689140319824 5.828913688659668 L 7.867127418518066 3.250543832778931 C 8.19842529296875 3.574635028839111 8.642854690551758 3.757058620452881 9.106307983398438 3.759186029434204 C 9.349655151367188 3.755422115325928 9.589871406555176 3.7037034034729 9.813207626342773 3.606991291046143 C 10.03654289245605 3.510279178619385 10.23861312866211 3.370472431182861 10.40785312652588 3.195572137832642 C 10.57709217071533 3.020671844482422 10.71017742156982 2.814112663269043 10.79949283599854 2.587717056274414 C 10.88880729675293 2.361321210861206 10.93259716033936 2.119534254074097 10.9283561706543 1.876194715499878 C 10.93549633026123 1.632430195808411 10.89364910125732 1.389711141586304 10.80529403686523 1.162410616874695 C 10.71693897247314 0.9351100325584412 10.58387279510498 0.7278494238853455 10.41397380828857 0.5529019832611084 C 10.24407577514648 0.377954512834549 10.04079914093018 0.2388772815465927 9.816183090209961 0.143905907869339 C 9.591567039489746 0.04893453419208527 9.350176811218262 -2.819193522631881e-16 9.106307983398438 -2.667926664007631e-31 C 8.862439155578613 -2.493902165941891e-16 8.621048927307129 0.04893453419208527 8.396432876586914 0.143905907869339 C 8.171816825866699 0.2388772815465927 7.968539237976074 0.377954512834549 7.798641204833984 0.5529019832611084 C 7.628742694854736 0.7278494238853455 7.49567699432373 0.9351100325584412 7.407321929931641 1.162410616874695 C 7.318966865539551 1.389711141586304 7.277120113372803 1.632430195808411 7.284259796142578 1.876194715499878 C 7.287116050720215 2.024070262908936 7.305447101593018 2.17124080657959 7.338952541351318 2.315299034118652 L 3.056514263153076 4.893668651580811 C 2.725216865539551 4.569577217102051 2.280786991119385 4.387154102325439 1.817333936691284 4.385026931762695 C 1.329533696174622 4.402242183685303 0.8674587607383728 4.608124256134033 0.5284581780433655 4.959299564361572 C 0.1894576102495193 5.310474872589111 3.469776765407451e-16 5.779523849487305 0 6.267627716064453 C 0 6.75573205947876 0.1894576102495193 7.224780082702637 0.5284581780433655 7.575955867767334 C 0.8674587607383728 7.927131175994873 1.329533696174622 8.133013725280762 1.817333936691284 8.150228500366211 C 2.280786991119385 8.148101806640625 2.725216865539551 7.965678215026855 3.056514263153076 7.641586780548096 L 7.381144046783447 10.25199031829834 C 7.349715709686279 10.38568782806396 7.333465576171875 10.52250289916992 7.332701683044434 10.6598424911499 C 7.344056606292725 11.00812911987305 7.457713603973389 11.34536266326904 7.659493446350098 11.629469871521 C 7.861273765563965 11.91357803344727 8.142244338989258 12.13198184967041 8.467350006103516 12.25743579864502 C 8.792455673217773 12.38288974761963 9.147305488586426 12.40983772277832 9.487627983093262 12.33491897583008 C 9.827950477600098 12.25999927520752 10.13867950439453 12.0865306854248 10.38105010986328 11.83615207672119 C 10.62342071533203 11.58577442169189 10.78670120239258 11.26957225799561 10.8505220413208 10.92699432373047 C 10.91434288024902 10.58441734313965 10.87587833404541 10.23063087463379 10.73992729187012 9.909772872924805 C 10.60397624969482 9.588915824890137 10.37655735015869 9.315190315246582 10.08604335784912 9.122749328613281 C 9.795528411865234 8.930307388305664 9.454779624938965 8.827668190002441 9.106307983398438 8.82763671875 L 9.106307983398438 8.828417778015137 Z">
                                    </path>
                                </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-categories-container">
        <div class="row row1">
            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12 col1 modal-categories-detail">
                <div class="headrow">
                    MODAL CATEGORIES
                </div>
                <div class="datarow">
                    check the best type of our modal which prefer your business.and If you have question about this container, please feel free to ask by our engineers.
                </div>
                <div class="contactus">
                    <a href="contact.html#contact-us-form"><button type="button" class="contactusbtn">contact us</button></a>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12 col2 modal-categories">
                <div class="row col2row1">
                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12 modal-category facility">
                        <!-- <i class="fa fa-cog" aria-hidden="true"></i> -->
                        <img src="static/images/facilities.png" alt="">
                        <p>Facilities</p>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12 modal-category office">
                        <!-- <i class="fa fa-building" aria-hidden="true"></i> -->
                        <img src="static/images/workspace.png" alt="">
                        <p>offices</p>
                    </div>
                </div>
                <div class="row col2row2">
                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12 modal-category commercial">
                        <!-- <i class="fa fa-building" aria-hidden="true"></i> -->
                        <img src="static/images/commercial.png" alt="">
                        <p>COMMERCIALS</p>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12 modal-category residence">
                        <!-- <i class="fa fa-home" aria-hidden="true"></i> -->
                        <img src="static/images/Residence.png" alt="">
                        <p>RESIDENTIAL</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-closup-container">
        <div class="modal-closup-head">
            <h3>MODEL CLOSE-UP</h3>
        </div>
        <div class="modal-closup-box">
            <div class="modal-closup-box-bg-1"></div>
            <div class="modal-closup-box-bg-2"></div>
            <div class="modal-closup" style="background: url('./static/images/LIVING.jpg');background-size: cover; background-repeat: no-repeat;">
                <div class="model-closup-tabs">
                    <div id="model-closup-preview" class="model-closup-tab" onclick="changeModelClosup(0)">
                        MODAL PREVIEW
                    </div>
                    <div id="model-closup-plan" class="model-closup-tab" onclick="changeModelClosup(1)">
                        FLOOR PLAN
                    </div>
                    <div id="model-closup-interior" class="model-closup-tab active" onclick="changeModelClosup(2)">
                        INTERIOR
                    </div>
                    <div id="model-closup-exterior" class="model-closup-tab" onclick="changeModelClosup(3)">
                        EXTERIOR
                    </div>
                </div>
                <div class="model-closup-detail">
                    <h3>Omnia Hotel Nozol 1 Bed</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>
                    <a href="modals.html"><button class="slide-button slide_right">ORDER NOW</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="designed-experience-external-container">
        <div class="designed-experience-container">
            <div class="designed-exerinence-content">
                <p class="top-head" style="color: #CC9B55;padding-bottom: 10px;margin-bottom: 0;">Welcome To Nozol</font>
                </p>
                <h3>We Can Creat More Than You Expect</h3>
                <P class="designed-exerinence-content-body">The founders of Nozol are dedicated to producing quality products that meet and exceed client expectations. Each Pod has been designed with passion and to the highest international standards. It is understood that every project is unique
                    and requires that special extra touch.</P>


                <hr>



            </div>
            <div class="back-imgs">
                <img class="bitmap-pattern" src="./static/images/Pattern-01.png" alt="">
                <div class="gray-bitmap"></div>
                <img class="bathroom" src="./static/images/Desert_Wide_croped_vertical.jpg" alt="">
                <img class="bedroom" style="width: 250px;" src="./static/images/Shore_CB_croped_vertical.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="designed-experience-external-container-2">
        <!-- <div class="designed-experience-container">
                <div class="designed-exerinence-content">
                    <p class="top-head">Welcome To <font>PREFAB</font></p>
                    <h3>A DESIGNED EXPERIENCE</h3>
                    <P class="designed-exerinence-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vehicula nulla ac leo pretium sollicitudin. Mauris at porta nulla, nec tristique sem. Nam molestie auctor lectus ac congue. In et tristique urna. Duis eget elit scelerisque, vehicula quam non, posuere.</P>
                    <hr>
                </div>
                <div class="back-imgs">
                    <div class="gray-bitmap"></div>
                    <img class="bathroom" src="./static/images/BATHROOM.jpg" alt="">
                    <img class="bedroom" src="./static/images/BEDROOM.jpg" alt="">
                </div>
            </div> -->
        <div class="designed-experience-bg-1"></div>
        <div class="designed-experience-bg-2"></div>
        <div class="designed-experience-container-2">
            <div class="back-imgs">
                <img class="bitmap-pattern" src="./static/images/Pattern-01.png" alt="">
                <!-- <div class="gray-bitmap"></div> -->
                <img class="bathroom" src="./static/images/Desert_Wide_croped_vertical.jpg" alt="">
                <img class="bedroom" style="width: 400px;" src="./static/images/Cabin_Desert_2k.jpg" alt="">
            </div>
            <div class="designed-exerinence-content">
                <p class="top-head">Welcome To
                    <font>Nozol</font>
                </p>
                <h3>We Can Creat More Than You <br> Expect</h3>
                <P class="designed-exerinence-content-body">The founders of Nozol are dedicated to producing quality products that meet and exceed client expectations. Each Pod has been designed with passion and to the highest international standards. It is understood that every project is unique
                    and require.</P>
                <a href="modals.html"><button class="slide-button slide_right">ORDER NOW</button></a>
            </div>
        </div>
    </div>
    <div id="contact-us-form" class="page-contact-us-part">
        <div class="contact-us-container">
            <p class="contact-us-title">Contact us</p>
            <p class="write-us-title">You Can Write Us</p>
            <form method="POST" action="contact-us.php">
                <div class="form-container">
                    <div class="form-fields">
                        <select class="form-input" style="width:100%;" name="issue" id="">
                                <option value="" hidden>Please choose your issue below</option>
                                <option value="1">Issue 1</option>
                                <option value="2">Issue 2</option>
                            </select>
                        <div class="form-fields-row">
                            <input class="form-input" style="margin-right: 10px;" type="text" name="name" id="" placeholder="Name">
                            <input class="form-input" type="text" name="email" id="" placeholder="Email">
                        </div>
                        <textarea class="form-input form-input-textarea" name="description" id="" placeholder="Description"></textarea>
                    </div>
                    <div class="location-map-container">
                        <!-- <div id="googleMap" style="width:100%;height:100%;"></div> -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d927755.0518381862!2d46.26204078024357!3d24.725398108760096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2sRiyadh%20Saudi%20Arabia!5e0!3m2!1sen!2sin!4v1653410078325!5m2!1sen!2sin"
                            width="330" height="300" style="width:100%;height:100%;border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <button type="submit" name="sendMessage">SEND MESSAGE</button>
            </form>
        </div>
    </div>
    <div class="page-foot-part">
        <footer>
            <div class="footer-top">
                <div class="footer-left">
                    <div class="footer-left-top">
                        <div class="footer-left-top-contianer footer-details-container">
                            <div class="logo">
                                <!-- <img src="./static/images/logo_2.png" alt="" class="logoimg"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="255.928" height="35.365" viewBox="0 0 255.928 35.365">
                                    <g id="logo_footer" transform="translate(-538.16 -410.712)">
                                      <g id="Group_56608" data-name="Group 56608" transform="translate(538.16 411.319)">
                                        <g id="Group_56602" data-name="Group 56602">
                                          <path id="Path_66411" data-name="Path 66411" d="M552.842,411.637a12.282,12.282,0,0,1,8.508,2.878,10.282,10.282,0,0,1,0,14.941,12.275,12.275,0,0,1-8.508,2.879H540.806V446.4H538.16V411.637Zm0,18.313a9.5,9.5,0,0,0,6.589-2.231,7.379,7.379,0,0,0,2.491-5.759,7.3,7.3,0,0,0-2.491-5.733,9.577,9.577,0,0,0-6.589-2.2H540.806V429.95Z" transform="translate(-538.16 -411.637)" fill="#fff"/>
                                        </g>
                                        <g id="Group_56603" data-name="Group 56603" transform="translate(39.583)">
                                          <path id="Path_66412" data-name="Path 66412" d="M623.12,446.4,608.8,430.417h-7.626V446.4H598.53V411.637h15.822a11.519,11.519,0,0,1,7.834,2.568,9.345,9.345,0,0,1,0,13.643,11.519,11.519,0,0,1-7.834,2.568h-2.23L626.545,446.4Zm-8.768-18.314a8.772,8.772,0,0,0,5.94-1.945,6.418,6.418,0,0,0,2.257-5.11,6.345,6.345,0,0,0-2.257-5.085,8.855,8.855,0,0,0-5.94-1.92H601.176v14.059Z" transform="translate(-598.53 -411.637)" fill="#fff"/>
                                        </g>
                                        <g id="Group_56604" data-name="Group 56604" transform="translate(80.462)">
                                          <path id="Path_66413" data-name="Path 66413" d="M663.523,427.772h20.7v2.334h-20.7v13.9h22.256V446.4h-24.9V411.637h24.9v2.385H663.523Z" transform="translate(-660.877 -411.637)" fill="#fff"/>
                                        </g>
                                        <g id="Group_56605" data-name="Group 56605" transform="translate(120.51)">
                                          <path id="Path_66414" data-name="Path 66414" d="M727.508,426.993H745.46v5.032H727.508V446.4h-5.55V411.637H747.38v5.032H727.508Z" transform="translate(-721.958 -411.637)" fill="#fff"/>
                                        </g>
                                        <g id="Group_56606" data-name="Group 56606" transform="translate(154.696)">
                                          <path id="Path_66415" data-name="Path 66415" d="M803.875,446.4l-3.423-8.094H783.539l-3.423,8.094H774.1l15.3-34.759h5.189l15.3,34.759Zm-11.881-27.963-6.277,14.786h12.555Z" transform="translate(-774.097 -411.637)" fill="#fff"/>
                                        </g>
                                        <g id="Group_56607" data-name="Group 56607" transform="translate(205.225)">
                                          <path id="Path_66416" data-name="Path 66416" d="M872.535,428.705a7.077,7.077,0,0,1,4.616,2.49,8.241,8.241,0,0,1,1.92,5.654,8.979,8.979,0,0,1-2.827,6.953q-2.827,2.594-8.172,2.594H851.161V411.637H867.71a10.7,10.7,0,0,1,7.522,2.568,8.807,8.807,0,0,1,2.8,6.822,7.683,7.683,0,0,1-1.685,5.085,6.349,6.349,0,0,1-3.813,2.385Zm-15.824-2.024h10.377a5.545,5.545,0,0,0,4.021-1.479,5.128,5.128,0,0,0,1.53-3.865,4.556,4.556,0,0,0-1.53-3.554,5.715,5.715,0,0,0-3.969-1.376H856.711ZM867.5,441.623a6.064,6.064,0,0,0,4.306-1.453,5.007,5.007,0,0,0,1.556-3.839,4.822,4.822,0,0,0-1.582-3.762,5.926,5.926,0,0,0-4.125-1.427H856.711v10.48Z" transform="translate(-851.161 -411.637)" fill="#fff"/>
                                        </g>
                                      </g>
                                      <g id="Group_56610" data-name="Group 56610" transform="translate(777.877 410.712)">
                                        <g id="Group_56609" data-name="Group 56609">
                                          <path id="Path_66417" data-name="Path 66417" d="M917.621,413.025a7.824,7.824,0,0,1,2.358,5.828,7.691,7.691,0,0,1-2.358,5.759,8.343,8.343,0,0,1-11.484,0,7.674,7.674,0,0,1-2.37-5.759,7.807,7.807,0,0,1,2.37-5.828,8.285,8.285,0,0,1,11.484,0Zm-10.465.926a6.6,6.6,0,0,0-1.955,4.88,6.674,6.674,0,1,0,13.345,0,6.607,6.607,0,0,0-1.955-4.868,6.683,6.683,0,0,0-9.435-.012Zm7.713,1.445a3.553,3.553,0,0,1,1.342,2.3l-2.012.416a2.1,2.1,0,0,0-.786-1.238,2.331,2.331,0,0,0-1.435-.451,2.157,2.157,0,0,0-1.654.683,2.653,2.653,0,0,0,0,3.446,2.156,2.156,0,0,0,1.654.683,2.339,2.339,0,0,0,1.48-.485,1.873,1.873,0,0,0,.717-1.342l2.036.323a3.531,3.531,0,0,1-1.285,2.487,4.763,4.763,0,0,1-6.059-.266,4.383,4.383,0,0,1,0-6.244,4.389,4.389,0,0,1,3.11-1.225A4.459,4.459,0,0,1,914.868,415.4Z" transform="translate(-903.767 -410.712)" fill="#fff"/>
                                        </g>
                                      </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="footer-app-short">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                            </div>
                            <a href="modals.html"><button class="slide-button slide_right">ORDER NOW</button></a>
                        </div>
                        <div class="footer-left-top-contianer footer-contact-container">
                            <p class="head">
                                CONTACT
                            </p>
                            <div class="content">
                                <p class="head">PHONE</p>
                                <p class="value">+966 666 444 0000</p>
                            </div>
                            <div class="content">
                                <p class="head">ADDRESS</p>
                                <p class="value">Riyadh, Saudi Arabia</p>
                            </div>
                            <div class="content">
                                <p class="head">EMAIL</p>
                                <p class="value">admin@prefab.sa</p>
                            </div>
                        </div>
                        <div class="footer-left-top-contianer footer-nozol-container">
                            <p class="head">
                                NOZOL
                            </p>
                            <p class="link">Our Models</p>
                            <p class="link">About Us</p>
                            <p class="link">Pricing</p>
                            <p class="link">How it works</p>
                            <p class="link">Account</p>
                            <p class="link">ENG</p>
                        </div>
                        <div class="footer-left-top-contianer footer-support-container">
                            <p class="head">
                                SUPPORT
                            </p>
                            <p class="link">FAQs</p>
                            <p class="link">Contact Us</p>
                            <p class="link">Terms of Service</p>
                            <p class="link">Privacy</p>
                            <p class="link">Careers</p>
                            <p class="link">Blogs</p>
                        </div>
                    </div>
                    <div class="footer-left-bottom">
                        <div class="back-to-top-btn" onclick="gotoTop()">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 28.501">
                                <g id="back_top" transform="translate(-426 -25.979)">
                                  <g id="base" transform="translate(426 25.979)" fill="rgba(255,255,255,0)" stroke="#fff" stroke-linejoin="round" stroke-width="1">
                                    <rect width="20" height="21" stroke="none"/>
                                    <rect x="0.5" y="0.5" width="19" height="20" fill="none"/>
                                  </g>
                                  <g id="Arrow_read_more_HOVER" transform="translate(431.331 53.98) rotate(-90)">
                                    <line id="Path_2" data-name="Path 2" x2="17.501" transform="translate(0 4.669)" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1"/>
                                    <line id="Path_3" data-name="Path 3" x1="4.669" y1="4.669" transform="translate(12.832)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                    <line id="Path_4" data-name="Path 4" x1="4.669" y2="4.669" transform="translate(12.832 4.669)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                  </g>
                                </g>
                              </svg> BACK TO TOP</div>
                        <div class="footer-copyright"> © 2021 PREFAB, All copyright reserve</div>
                    </div>
                </div>
                <div class="footer-right">
                    <p class="head">FOLLOW US</p>
                    <div class="social-handle-container">
                        <div class="social-handle">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                        <div class="social-handle">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </div>
                        <div class="social-handle">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </div>
                        <div class="social-handle">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="news-letter-input">
                        <p class="news-letter-input-label mb-3">Sign to our newsletter for updates</p>
                        <input type="text" placeholder="Email...">
                    </div>
                </div>
            </div>
            <div class="footer-left-top footer-second-row">
                <div class="footer-left-top-contianer footer-nozol-container">
                    <p class="head">
                        NOZOL
                    </p>
                    <p class="link">Our Models</p>
                    <p class="link">About Us</p>
                    <p class="link">Pricing</p>
                    <p class="link">How it works</p>
                    <p class="link">Account</p>
                    <p class="link">ENG</p>
                </div>
                <div class="footer-left-top-contianer footer-support-container">
                    <p class="head">
                        SUPPORT
                    </p>
                    <p class="link">FAQs</p>
                    <p class="link">Contact Us</p>
                    <p class="link">Terms of Service</p>
                    <p class="link">Privacy</p>
                    <p class="link">Careers</p>
                    <p class="link">Blogs</p>
                </div>
                <div class="footer-left-top-contianer footer-contact-container">
                    <p class="head">
                        CONTACT
                    </p>
                    <div class="content">
                        <p class="head">PHONE</p>
                        <p class="value">+966 666 444 0000</p>
                    </div>
                    <div class="content">
                        <p class="head">ADDRESS</p>
                        <p class="value">Riyadh, Saudi Arabia</p>
                    </div>
                    <div class="content">
                        <p class="head">EMAIL</p>
                        <p class="value">admin@prefab.sa</p>
                    </div>
                </div>
            </div>
            <div class="footer-right footer-third-row">
                <p class="head">FOLLOW US</p>
                <div class="social-handle-container">
                    <div class="social-handle">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </div>
                    <div class="social-handle">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </div>
                    <div class="social-handle">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </div>
                    <div class="social-handle">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="news-letter-input">
                    <p class="news-letter-input-label mb-3">Sign to our newsletter for updates</p>
                    <input type="text" placeholder="Email...">
                </div>
            </div>
            <div class="footer-left-bottom footer-fourth-row">
                <div class="back-to-top-btn" onclick="gotoTop()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 28.501">
                        <g id="back_top" transform="translate(-426 -25.979)">
                          <g id="base" transform="translate(426 25.979)" fill="rgba(255,255,255,0)" stroke="#fff" stroke-linejoin="round" stroke-width="1">
                            <rect width="20" height="21" stroke="none"/>
                            <rect x="0.5" y="0.5" width="19" height="20" fill="none"/>
                          </g>
                          <g id="Arrow_read_more_HOVER" transform="translate(431.331 53.98) rotate(-90)">
                            <line id="Path_2" data-name="Path 2" x2="17.501" transform="translate(0 4.669)" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1"/>
                            <line id="Path_3" data-name="Path 3" x1="4.669" y1="4.669" transform="translate(12.832)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <line id="Path_4" data-name="Path 4" x1="4.669" y2="4.669" transform="translate(12.832 4.669)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                          </g>
                        </g>
                      </svg> BACK TO TOP</div>
                <div class="footer-copyright"> © 2021 PREFAB, All copyright reserve</div>
            </div>
        </footer>
    </div>

    <script>
        changeHeadBg(1); //initializing from index 1 to show 2nd image first after page load
        // slideNextModelCarosulItem();
        doCarosulSlideShow();

        function Redirect() {
            window.location.href = "index.html";
        }
    </script>
    <!-- <script>
            var nextimage=0;
            var pageHeadBgImages = [
                {
                    "id": "page-head-bg-img-1",
                    "imgPath": "./static/images/Shore_CB.jpg"
                },
                {
                    "id": "page-head-bg-img-2",
                    "imgPath": "./static/images/Desert.jpg"
                },
                {
                    "id": "page-head-bg-img-3",
                    "imgPath": "./static/images/Desert_cliff.jpg"
                },
                {
                    "id": "page-head-bg-img-4",
                    "imgPath": "./static/images/Forest_2k.jpg"
                }
            ];

            var nextModelClosup = 0;
            var modelClosupImages = [
                {
                    "id": "model-closup-preview",
                    "imgPath": "./static/images/omino_hotel_nozal.jpg"
                },
                {
                    "id": "model-closup-plan",
                    "imgPath": "./static/images/Desert.jpg"
                },
                {
                    "id": "model-closup-interior",
                    "imgPath": "./static/images/Shore_CB.jpg"
                },
                {
                    "id": "model-closup-exterior",
                    "imgPath": "./static/images/Cabin_Desert_2k.jpg"
                }
            ];
            var changeHeadBgTimeout;
            var images=new Array('','','','');

            $(document).click(function (e) {
                if ($(e.target).parents(".alerts").length === 0 && document.getElementById('alerts')!=null) {
                    // $("#alerts").fadeOut();
                    removeFadeOut(document.getElementById('alerts'), 500);
                    window.location.href = window.location.origin+window.location.pathname;
                }
            });

            doSlideshow();

            function doSlideshow(){
                if(nextimage>=pageHeadBgImages.length){nextimage=0;}
                var nextBgImageObj = pageHeadBgImages[nextimage++];
                $('.page-head-part')
                .css('background-image','url("'+nextBgImageObj.imgPath+'")')
                .fadeIn(500,function(){
                    clearTimeout(changeHeadBgTimeout);
                    changeHeadBgTimeout = setTimeout(doSlideshow,3000);
                });

                $('.bg-slider-img').removeClass("active");
                $('#'+nextBgImageObj.id).addClass("active");
            }

            function changeHeadBg(pageHeadBgIdx) {
                nextimage=pageHeadBgIdx;
                var nextBgImageObj = pageHeadBgImages[nextimage++];
                $('.page-head-part')
                .css('background-image','url("'+nextBgImageObj.imgPath+'")')
                .fadeIn(500,function(){
                    clearTimeout(changeHeadBgTimeout);
                    changeHeadBgTimeout = setTimeout(doSlideshow,3000);
                });

                $('.bg-slider-img').removeClass("active");
                $('#'+nextBgImageObj.id).addClass("active");
            }

            function changeModelClosup(modelClosupIdx) {
                nextModelClosup=modelClosupIdx;
                var nextBgImageObj = modelClosupImages[nextModelClosup++];
                $('.modal-closup')
                .css('background-image','url("'+nextBgImageObj.imgPath+'")')
                .fadeIn(500);

                $('.model-closup-tab').removeClass("active");
                $('#'+nextBgImageObj.id).addClass("active");
            }

            function myMap() {
                var mapProp = {
                    center:new google.maps.LatLng(51.508742,-0.120850),
                    zoom:5,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
            }

            function gotoTop() {
                var scrollStep = -window.scrollY / (150 / 15);
                var scrollInterval = setInterval(function () {
                if (window.scrollY != 0) {
                    window.scrollBy(0, scrollStep);
                }
                else clearInterval(scrollInterval);
                }, 15);

            }

            function goToContactUs() {
                $('html,body').animate({
                    scrollTop: $('#contact-us-form').offset().top
                }, 1000);
            }

            function hideModel() {
                // $("#alerts").fadeOut();
                removeFadeOut(document.getElementById('alerts'), 500);
                window.location.href = window.location.origin+window.location.pathname;
            }

            function removeFadeOut( el, speed ) {
                var seconds = speed/1000;
                el.style.transition = "opacity "+seconds+"s ease";

                el.style.opacity = 0;
                setTimeout(function() {
                    el.parentNode.removeChild(el);
                }, speed);
            }

            
        </script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
</body>

</html>