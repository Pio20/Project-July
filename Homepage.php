<?php
	session_start();
	if(!isset($_SESSION["id"])){
	//Transfer to login if you are not yet logged in
	print"<script>window.location.href='login.php';</script>";

}
?>
<html>
    <head>
        <title>
            Homepage
        </title>
        <link rel="stylesheet" type="text/css" href="bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="homepage-stylesheet.css">
    </head>
    <body class="home">
        <div class="banner">
            <div class="container">
            
            <div class="contents container">

            <div class="logo">
            <img src="images/logo.png">
            </div>
        
            <div class="header-lists">
                    <ul>
                            <li>
                                <a href="Homepage.php">HOME</a>
                            </li>
                    
                    
                            <li>
                                <a href="Homepage.php#section2">GETTING STARTED</a>
                            </li>
                    
                    
                            <li>
                                <a href="Places.php">PLACES</a>
                            </li>
                    
                    
                            <li>
                                <a href="Facts.php">FACTS</a>
                            </li>
                    
                    
                            <li>
                                <a href="Sources.php">SOURCES</a>
                            </li>
							
							<li>
								<a href="#">JAVASCRIPTS</a>
                            </li>

                            <li class="logout">
                                <a href="logout.php">LOG-OUT</a>
                            </li>
                            </ul>
            </div>

            <div class="banner-text">
                <h3>
                    WELCOME TO JAPANICE WEBSITE
                </h3>
                <h2>
                    Indulge yourself with the view,
                </h2>
                <h1>
                    Explore and find amazing places.
                </h1>
                <h4>
                    Japan is known worldwide for its traditional arts, including<br>
                    tea ceremonies, calligraphy and flower arranging.
                </h4>

                <a href="#section2" class="Button" id="section1">Get Started</a>
                
            </div>    
            </div>
            

            <div class="info container">
        <div class="informations" id="section2">
            <div class="first-info">
                <img src="images/information-circular-button-symbol.png">
                <h4>
                    ABOUT JAPAN
                </h4>
                <h3>
                        Japan – the “Land of the Rising sun” – is an archipelago of more than 6,800 islands in the Pacific Ocean. The main islands are, from North to South: Hokkaido, Honshu, Shikoku, Kyushu, which make for 97% of the land of Japan. Almost four-fifths of Japan is covered with mountains. The Japanese Alps run down the center of the largest island, Honshu. The highest peak is Mount Fuji, a cone-shaped volcano considered sacred by many Japanese.
                </h3>
            </div>

            <div class="second-info">
                <img src="images/masks-and-people.png">
                <h4>
                    PEOPLE AND CULTURE
                </h4>
                <h3>
                        The Japanese are famous for their willingness to work very hard. Children are taught to show respect for others, especially parents and bosses. They learn to do what's best for their family or company and worry less about their own needs. Japanese food is very different from food in Western countries. There is lots of rice, fish, and vegetables, but little meat. With little fat or dairy, this diet is very healthy, which helps Japanese people live, on average, longer than any other people in the world.
                </h3>
            </div>

            <div class="third-info">
                <img src="images/sakura-leaves.png">
                <h4>
                    NATURE
                </h4>
                <h3>
                        The Japanese people have a deep affection for the beauty of the landscape. The ancient Shinto religion says natural features like mountains, waterfalls, and forests have their own spirits, like souls.<br><br>

                        Most of Japan is covered by countryside. But with more than 100 million people living in such a small place, wildlife has suffered.<br><br>
                        
                        Pollution is now tightly controlled, but road building and other human activities have harmed natural habitats. About 136 species in Japan are listed as endangered.<br><br>
                        
                        The warm Tsushima Current flows from the south into the Sea of Japan, where it meets a colder current from the north. The mixing of waters makes the seas around Japan very rich in fish and other sea life.<br><br>
                </h3>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="footer">
                <div class="footerwrap-container">
                <div class="container">
                <hr class="footer-line">

                <div class="leftside-images col-6">

                        <h4>
                            IMAGES COMES FROM
                        </h4>

                        

                        <img id="unsplashandfreepik" src="images/unsplash-and-freepik.png">

                    </div>
                <div class="col-6">
                    <h4>
                            FOLLOW US ON
                    </h4>
                    <div class="social-icons">
                        <button type="submit" class="facebook-button">
                            <img src="images/facebook-icon.png"/>
                        </button>

                        <button type="submit" class="twitter-button">
                            <img src="images/twitter-icon.png"/>
                        </button>

                        <button type="submit" class="instagram-button">
                            <img src="images/instagram-icon.png"/>
                        </button>    
                    </div>
                    </div>     
             </div>        
            </div>
        </div>
        </div>
    </body>
</html>