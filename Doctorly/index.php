<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
<?php  include_once 'inc/head.php';?>
    <?php  include_once 'inc/header.php';?>

        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function() {
                $firstdd = $("select[name='firstdd']");
                $secdd = $("select[name='secdd']");

                $firstdd.click(function() {

                    if ($(this).val() == "North West Delhi") {
                        $("select[name='secdd'] option").remove();
                        $("<option>Rohini</option>").appendTo($secdd);
                        $("<option>Kanjhawala</option>").appendTo($secdd);
                        $("<option>Saraswati Vihar</option>").appendTo($secdd);
                    }

                    if ($(this).val() == "West Delhi") {
                        $("select[name='secdd'] option").remove();
                        $("<option>Patel Nagar</option>").appendTo($secdd);
                        $("<option>Rajouri Garden</option>").appendTo($secdd);
                        $("<option>Punjabi Bagh</option>").appendTo($secdd);
                    }

                    if ($(this).val() == "North Delhi") {
                        $("select[name='secdd'] option").remove();
                        $("<option>Model Town</option>").appendTo($secdd);
                        $("<option>Narela</option>").appendTo($secdd);
                        $("<option>Alipur</option>").appendTo($secdd);
                    }

                    if ($(this).val() == "Central Delhi") {
                        $("select[name='secdd'] option").remove();
                        $("<option>Karol Bagh</option>").appendTo($secdd);
                        $("<option>Kotwali</option>").appendTo($secdd);
                        $("<option>Civil Lines</option>").appendTo($secdd);
                    }

                    if ($(this).val() == "New Delhi") {
                        $("select[name='secdd'] option").remove();
                        $("<option>Chanakyapuri</option>").appendTo($secdd);
                        $("<option>Delhi Cantonment</option>").appendTo($secdd);
                        $("<option>Vasant Vihar</option>").appendTo($secdd);
                    }

                    if ($(this).val() == "North East Delhi") {
                        $("select[name='secdd'] option").remove();
                        $("<option>Seelampur</option>").appendTo($secdd);
                        $("<option>Yamuna Vihar</option>").appendTo($secdd);
                        $("<option>Karawal Nagar</option>").appendTo($secdd);
                    }

                    if ($(this).val() == "Shahdara") {
                        $("select[name='secdd'] option").remove();
                        $("<option>Shahdara</option>").appendTo($secdd);
                        $("<option>Seemapuri</option>").appendTo($secdd);
                        $("<option>Vivek Vihar</option>").appendTo($secdd);
                    }

                    if ($(this).val() == "East Delhi") {
                        $("select[name='secdd'] option").remove();
                        $("<option>Gandhi Nagar</option>").appendTo($secdd);
                        $("<option>Preet Vihar</option>").appendTo($secdd);
                        $("<option>Mayur Vihar</option>").appendTo($secdd);
                    }

                    if ($(this).val() == "South Delhi") {
                        $("select[name='secdd'] option").remove();
                        $("<option>Saket</option>").appendTo($secdd);
                        $("<option>Hauz Khas</option>").appendTo($secdd);
                        $("<option>Mehrauli</option>").appendTo($secdd);
                    }

                    if ($(this).val() == "South East Delhi") {
                        $("select[name='secdd'] option").remove();
                        $("<option>Defence Colony</option>").appendTo($secdd);
                        $("<option>Kalkaji</option>").appendTo($secdd);
                        $("<option>Sarita Vihar</option>").appendTo($secdd);
                    }

                    if ($(this).val() == "South West Delhi") {
                        $("select[name='secdd'] option").remove();
                        $("<option>Dwarka</option>").appendTo($secdd);
                        $("<option>Najafgarh</option>").appendTo($secdd);
                        $("<option>Kapashera</option>").appendTo($secdd);
                    }

                });
            });
        </script>

        <section class="area">
            <h1 class="text-center mt-4 " >Find Your Free Doctors in Delhi</h1>
            <h3 class="text-center my-4" >We provide information of AAMC, Polyclinics, Government Hospitals and Dispensaries</h3>
            <div class="container">
                <form action="connect.php" method="post">
                    <div class="row">
                        <div class="col-md text-center">
                            <select name="firstdd" class="btn btn-outline-primary my-4 text-center" style="width: 200px;">
                                <option hidden>Select District</option>
                                <option>West Delhi</option>
                                <option>North West Delhi</option>
                                <option>North Delhi</option>
                                <option>Central Delhi</option>
                                <option>New Delhi</option>
                                <option>North East Delhi</option>
                                <option>Shahdara</option>
                                <option>East Delhi</option>
                                <option>South Delhi</option>
                                <option>South East Delhi</option>
                                <option>South West Delhi </option>
                            </select>
                        </div>
                        <div class="col-md text-center">
                            <select name="secdd" class="btn btn-outline-primary my-4 text-center" style="width: 200px; ">
                                <option hidden>Select Sub-division</option>
                                
                            </select>
                        </div>
                        <div class="col-md text-center my-4">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                        <!-- <div class="justify-content-center"></div> -->
                    </div>
                </form>
            </div>
        </section>
        <!-- End of section -->

        <section class="bmi">
            <section class="container">
                <div class="row">
                    <div class="col-md">
                        <script type="text/javascript" src="jquery.js"></script>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                function showbmi() {
                                    var weight = $("input#weight").val();
                                    var height = $("input#height").val();
                                    var bmi = "?";

                                    if (weight && height) {
                                        bmi = Math.round(10 * weight / Math.pow(height / 100, 2)) / 10;
                                        if (isNaN(bmi)) bmi = "?";
                                    }
                                    $("#bmiresult").text(bmi);
                                    return bmi;
                                }
                                $("form#bmi input").bind("keydown", function() {
                                    setTimeout(function() {
                                        showbmi();
                                    }, 100);
                                    return true;
                                });
                                $("form#bmi input").bind("change", function() {
                                    showbmi();
                                });
                                $("form#bmi").bind("submit", function() {
                                    showbmi();
                                    return false;
                                });
                            });
                        </script>
                        </head>

                        <body>
                            <div class="row">
                            	<div class="col-md">
                            		<h5 class="mb-2 font-weight-bold">Calculate your BMI and check your health status </h5>
                            		<img src="images/bmi1.jpg" class="img-fluid"></div>
                            	<div class="col-md">
                            		<h2 class="mb-5 mt-2">BMI Calculator</h2>
                            		<div id="bmi-calculator">
                                <div id="bmiresult">Your BMI</div>
                                <form id="bmi" action="#">
                                    <div class="form-group">
                                        <label>Height</label>
                                        <input id="height" name="height" type="text" value="" autocomplete="off"> cm
                                    </div>
                                    <div class="form-group">
                                        <label for="weight">Weight</label>
                                        <input id="weight" name="weight" type="text" value="" autocomplete="off"> kg
                                    </div>

                                </form>
                            </div>
                            	</div>
                            </div>
                            <!-- End of row -->
                    </div>
                </div>
                </div>
            </section>
        </section>

        <?php include_once'inc/footer.php'?>