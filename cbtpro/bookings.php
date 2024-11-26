    <link rel="stylesheet" href="css/map.css">
    <link rel="stylesheet" href="css/about.css">
    <?php require_once('header.php'); ?>

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    <meta name="desciption" content="Mapmyindia Direction Plugin">
    <!-- <script src="https://apis.mapmyindia.com/advancedmaps/v1/d355eb40e97ef90b567a66e80e5e7a11/map_load?v=1.5"></script>
    <script src="https://apis.mapmyindia.com/advancedmaps/api/d355eb40e97ef90b567a66e80e5e7a11/map_sdk_plugins"></script> -->
    <script src="https://apis.mapmyindia.com/advancedmaps/v1/79427625e1ebf169d4d7c92595442444/map_load?v=1.5"></script>
    <script src="https://apis.mapmyindia.com/advancedmaps/api/79427625e1ebf169d4d7c92595442444/map_sdk_plugins"></script>

        <div class="main">
            <br><br>
            <div style="position: relative;">
                <div id="map"></div>
                <div class="form">
                    <h2>E-Taxi Booking</h2>
                    <div class="LocationDiv">
                        <label>From:</label>
                        <span id="fromLocation">Choose Location</span>
                    </div>
                    <div class="LocationDiv">
                        <label>To:</label>
                        <span id="toLocation">Choose Location</span>
                    </div>
                    
                    <button  onclick="loadMap()"class="btnn">More Details</button>

                    <!-- <p class="link">Don't have an account<br>
                    <a href="signup.html">Sign up </a> here</a></p>
                    <br>
                    <br>
                      
                   
                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div> -->
                </div>
            </div>
            <!-- <div id="direction"></div>  -->
            <div class="content">
                <div id="user_data">
                    <h2>E-taxi Booking</h2><br/>
                    <div class="LocationDiv UserLocation">
                        <label>Pickup<br> Point:</label>
                        <span id="pickup"></span>
                    </div>
                    <div class="LocationDiv UserLocation">
                        <label>End<br> Point:</label>
                        <span id="endPoint"></span>
                    </div>
                    <div class="LocationDiv UserLocation">
                        <label>Pick Up<br> Time:</label>
                        <input type="time" id="time">
                    </div>
                    <div class="LocationDiv UserLocation">
                        <label>Distance:</label>
                        <span id="dist"></span>
                    </div>
                    <div class="LocationDiv UserLocation">
                        <label>Est. Time:</label>
                        <span id="estTime"></span>
                    </div>
                    <br>
                    <div id="SelectCar">
                        <div class="carcontainer">

                        <div class="carItem">
                            <div class="ip">
                                <input type="radio"name="carType" value="suv"/>
                            </div>
                            <div class="desc">
                                <span> SUV </span>
                                 <span class="prices">&#x20b9; 15/KM</span>
                                <img src="img/icar.png">
                                
                            
                            </div>
                        
                        </div>
                            <div class="pricecal">
                                <span > TOTAL AMOUNT :- </span>
                                        
                            </div>
                        </div>
                        <div class="carcontainer">

                        <div class="carItem">
                            <div class="ip">
                                <input type="radio"name="carType" value="sedan"/>
                            </div>
                            <div class="desc">
                                <span> Sedan </span>
                                <span class="prices">&#x20b9; 12/KM</span>
                                <img src="img/icar.png">
                            </div>
                        </div>
                        <div class="pricecal">
                            <span > TOTAL AMOUNT :- </span>
                                        
                            </div>
                    </div>
                        <div class="carcontainer">

                        <div class="carItem">
                            <div class="ip">
                                <input type="radio"name="carType" value="hatchback"/>
                            </div>
                            <div class="desc">
                                <span> hatchBack </span>
                                 <span class="prices">&#x20b9; 10/KM</span>
                                <img src="img/icar.png">
                            </div>
                        </div>
                        <div class="pricecal">
                            <span > TOTAL AMOUNT :- </span>
                                        
                            </div>
                    </div>
                    </div>
                    <input type="submit" value="BOOK NOW" id = "bookBtn">
                </div>

            </div>
   
    <script type="text/javascript" src = "scripts/map.js"></script>
