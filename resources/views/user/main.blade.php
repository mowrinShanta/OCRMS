
<!DOCTYPE html>

<html lang="bn">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bangladesh Police</title>
    <link rel="shortcut icon" href="/images/police-logo.png" />
    <!-- Csrf -->
    <meta name="_csrf" content="1cf3449b-ccd9-40ce-8ea2-b3464f266264" />
    <meta name="_csrf_header" content="X-CSRF-TOKEN" />

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500" />
    <link rel="stylesheet" href="http://gd.police.gov.bd/css/bootstrap.css" />
    <link rel="stylesheet" href="http://gd.police.gov.bd/css/font-awesome.min.css" />
    <link rel="stylesheet" href="http://gd.police.gov.bd/css/animate.css" />
    <link rel="stylesheet" href="http://gd.police.gov.bd/css/style-public-ui.css" />
    <link rel="stylesheet" href="http://gd.police.gov.bd/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="http://gd.police.gov.bd/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="http://gd.police.gov.bd/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="http://gd.police.gov.bd/css/select2.min.css" />
    <link rel="stylesheet" href="http://gd.police.gov.bd/css/3-step-style.css" />
    <link rel="stylesheet" id="css-main" href="http://gd.police.gov.bd/css/daterangepicker.css" />


</head>

<body>

    <div>
        
    @include('user.partials.header')
    </div>

    <div class="top-content">

        <div class="container" style="margin-top: 6%;margin-bottom: 3%;">
            
               
                <div class="col-md-6 features-box wow fadeInLeft" style="margin-top:30px;">
                    <!--    -->
                    <div class="col-lg-12 step-2 fadin-slide v-center" style="display:none;">

                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
                        <!--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="customer">
                                <p class="counter-count" th:text="${totalAppliedGd}">954</p>
                                <p class="customer-p " style="margin-left: -15px;">মোট জিডি আবেদন</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="design">
                                <p class="counter-count" th:text="${totalCompletedGd}"></p>
                                <p class="design-p ">নিষ্পন্ন জিডি</p>
                            </div>
                        </div>-->
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
                    </div>

                    

                    <div class="col-lg-12 step-1 fadin-slide" style="color:#0C3982;">
                        
                        
                       
                       
                        <div class="col-lg-12" style="display:none;">
                            <span class="btn next-button necessary-color" onclick="goToByScroll('prothom-dhap')">  Complain application rules  </span>
                        </div>
                    </div>
                </div>
                

               
                                       
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="features-container section-container" style="margin-top:10px;">
        <div class="container">
            
                <div class="col-sm-12 features-box wow fadeInLeft" style="margin-top: 26px;">
                    <div class="row">
                        <div class="col-sm-1 features-box-icon-full-length">
                            <i class="fa fa-bookmark-o"></i>
                            <!-- fa fa-hand-pointer-o -->
                        </div>
                        <div class="col-sm-5">
                            <h3>what is required to apply for complain</h3>
                            <div class="col-lg-12">
                                <p><i class="fa fa-snowflake-o"></i>  your national identity card number</p>
                                <p><i class="fa fa-snowflake-o"></i>  your mobile number</p>
                               
                            </div>
                            <br />
                            <br />
                        </div>
                        
                    </div>
                </div>
            </div>

           
                <div class="col-sm-12 features-box wow fadeInLeft" style="margin-top: 26px;">
                    <div class="row">
                        <div class="col-sm-1 features-box-icon-full-length">
                            <i class="fa fa-fileAttachment-text"></i>
                            <!-- fa fa-hand-pointer-o -->
                        </div>
                        <div class="col-sm-10">
                            <h3 style="margin-top:10px;">Complain application rules</h3>
                            <div class="col-lg-2" style="background:#0C3982; margin-bottom:10px; padding-top:10px;" id="prothom-dhap">
                                <p class="step" style="color:#FFF!important;"><i class="fa fa-hand-o-right" style="color:#FFF!important;"></i>Step 1</p>
                            </div>
                            <div class="col-lg-12">
                                <p><i class="fa fa-snowflake-o"></i>Submit by entering your national identity card number, mobile number. </p>
                        
                            </div>
                            <br />
                            <br />
                            <div class="col-lg-2" style="background:#0C3982; margin-bottom:10px; padding-top:10px; margin-top:15px;">
                                <p class="step" style="color:#FFF!important;"><i class="fa fa-hand-o-right" style="color:#FFF!important;"></i>Step 2</p>
                            </div>
                            <div class="col-lg-12">
                                <p><i class="fa fa-snowflake-o"></i> Select type of Complain </p>
                                <p><i class="fa fa-snowflake-o"></i> select which area councilor office you want to complain,enter the time and place of the incident </p>
                            
                            </div>

                            <div class="col-lg-2" style="background:#0C3982; margin-bottom:10px; padding-top:10px; margin-top:15px;">
                                <p class="step" style="color:#FFF!important;"><i class="fa fa-hand-o-right" style="color:#FFF!important;"></i>Step 3 </p>
                            </div>
                            <div class="col-lg-12">
                                <p><i class="fa fa-snowflake-o"></i> Enter your current address and name</p>
                                <p><i class="fa fa-snowflake-o"></i>If you have any documents like details,photos related to your complain, attach them.</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div>
       


        <!-- Javascript -->
        <script src="http://gd.police.gov.bd/js/jquery.min.js"></script>
        <script src="http://gd.police.gov.bd/js/bootstrap.min.js"></script>
        <script src="http://gd.police.gov.bd/js/wow.min.js"></script>
        <script src="http://gd.police.gov.bd/js/waypoints.min.js"></script>





        <script src="http://gd.police.gov.bd/js/scripts.js"></script>


        <!--<script src="assets/js/scripts.js" th:src="@{/js/scripts.js}"></script>-->


        <script src="http://gd.police.gov.bd/js/3-step-scripts.js"></script>
        <script src="http://gd.police.gov.bd/js/bootstrap-datepicker.min.js"></script>
        <script src="http://gd.police.gov.bd/js/bootstrap-datetimepicker.min.js"></script>
        <script src="http://gd.police.gov.bd/js/select2.min.js"></script>
        <script src="http://gd.police.gov.bd/js/scripts.js"></script>
        <script src="http://gd.police.gov.bd/js/jquery.backstretch.min.js"></script>


        <script src="/js/scripts.js"></script>
        <script src="/js/util.js"></script>
        <script src="/js/sweetalert2.all.min.js"></script>

        <script>
            /*<![CDATA[*/
            //Get Current year
            var date = new Date();
            var year = date.getFullYear();
            $('#currentYear').text(year);

            //format date
            function formatDate(date) {
                var monthNames = [
                    "Jan", "Feb", "Mar",
                    "Apr", "May", "Jun", "Jul",
                    "Aug", "Sep", "Oct",
                    "Nov", "Dec"
                ];

                var day = date.getDate();
                if (day < 9) {
                    day = '0' + day;
                }
                var monthIndex = date.getMonth();
                var year = date.getFullYear().toString().substring(2);
                //console.log(day + '-' + monthNames[monthIndex] + '-' + year);
                return day + '-' + monthNames[monthIndex] + '-' + year;

            }

            /*]]>*/
        </script>


        <script>
            $(document).ready(function() {
                activePublicPageNav();
                var language = $('html')[0].lang;
                if(language == 'en'){
                    $('#ChooseBangla').show();
                }else{
                    $('#ChooseEnglish').show();
                }
            })
            //Get Current year
            var date = new Date();
            var year = date.getFullYear();
            $('#currentYear').text(year);
        </script>


    </div>

    <script src="/js/jquery.backstretch.min.js"></script>
    <script src="/js/index.js"></script>
    <script src="/js/moment.js"></script>
    <script src="/js/daterangepicker.js"></script>
    <script src="/js/index_gd.js"></script>





    <script>

        $(document).ready(function() {
            $("#codeResend").css("display","none");
        });


    </script>

</body>

</html>