<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="homepage.CSS">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    
    <?php
    include "../COMPONENT/_dbconnect.php";
    ?>
    <?php
    include "../COMPONENT/_navbar.php";
    ?>
    <?php
    include "../COMPONENT/_sidebar.php";
    ?>
 
    <div class="container">
        
        <div class="content">
            <div class="content-l">
                <div class="content-title">
                    <H1>MINI CINEPLEX</H1>
                </div>
                <div class="description">WATCH YOUR FAVROUTIE MOVIE AND SERIES AT FREE OF COST AND BOOK TICKET CINEMA
                    TICKET FOR NEW RELEASE MOVIE.</div>
                <button class="btn">WATCH NOW</button>
            </div>
            
        </div>
        <div class="movie-container">
            <h1 class="movie-title">NEW RELEASE</h1>
            <div class="wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;"
                            src="https://i.zoomtventertainment.com/story/Tenet_Movie_Review.jpg" alt="">
                        <div class="movie-desc">
                            <h4 style="text-align: center;">TENT</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>

                        </div>
                        <button class="movie-watch-btn" style="margin-left: 11px;"><a href="seat_booking.php?movie_name=TENT">BOOK TICKET</a></button>
                        <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;"
                            src="https://i.ytimg.com/vi/yjR6kc7ZSkg/sddefault.jpg#404_is_fine" alt="">
                        <div class="movie-desc">
                            <h4 style="text-align: center;">DINCHAK</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>

                        </div>
                        <button class="movie-watch-btn" style="margin-left: 11px;"><a href="seat_booking.php?movie_name=DHINCHAK">BOOK TICKET</a></button>
                        <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;"
                            src="https://i.ytimg.com/vi/hz_yJyrCpjw/maxresdefault.jpg" alt="">
                        <div class="movie-desc">
                            <h4 style="text-align: center;">UNDERWATER</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>

                        </div>
                        <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                        <button class="movie-watch-btn"><a href="seat_booking.php?movie_name=UNDERWATER">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;"
                            src="https://moviegalleri.net/wp-content/gallery/bheeshma-movie-hd-wallpapers/bheeshma-movie-hd-wallpapers-nitin-rashmika-mandanna-474e7ca.jpg"
                            alt="">
                        <div class="movie-desc">
                            <h4 style="text-align: center;">WAFI</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>

                        </div>
                        <button class="movie-watch-btn" style="margin-left: 11px;"><a href="seat_booking.php?movie_name=WAFI">BOOK TICKET</a></button>
                        <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                   
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;"
                            src="https://wallpapercave.com/wp/wp9059434.jpg" alt="">
                        <div class="movie-desc">
                            <h4 style="text-align: center;">MUMBAI-SAGA</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>

                        </div>
                        <button class="movie-watch-btn" style="margin-left: 11px;"><a href="seat_booking.php?movie_name=MUMBAI_SAGA">BOOK TICKET</a></button>
                        <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    
                </div>
                <i class="fa-solid fa-angle-right arrow"></i>
            </div>
        </div>
        <!-- -------------------------------- -->
        <div class="movie-container">
            <h1 class="movie-title">BOOLLYWOOD</h1>
            <div class="wrapper">
                <div class="movie-list">
                    <div class="movie-list-item" >
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://i.zoomtventertainment.com/story/Tenet_Movie_Review.jpg" alt="">
                        <div class="movie-desc" >
                       <h4 style="text-align: center;">TENT</h4>
                       <ul>
                           <li>crime</li>
                           <li>drama</li>
                           <li>imbd:8/10</li>
                       </ul>

                        </div>
                        <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                        <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://i.ytimg.com/vi/yjR6kc7ZSkg/sddefault.jpg#404_is_fine" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">DINCHAK</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://i.ytimg.com/vi/hz_yJyrCpjw/maxresdefault.jpg" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">UNDERWATER</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://moviegalleri.net/wp-content/gallery/bheeshma-movie-hd-wallpapers/bheeshma-movie-hd-wallpapers-nitin-rashmika-mandanna-474e7ca.jpg" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">WAFI</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://wallpapercave.com/wp/wp9059434.jpg" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">MUMBAI-SAGA</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://wallpapercave.com/wp/wp9059434.jpg" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">MUMBAI-SAGA</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://wallpapercave.com/wp/wp9059434.jpg" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">MUMBAI-SAGA</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                </div>
                <i class="fa-solid fa-angle-right arrow"></i>
            </div>
        </div> -->
        <!-- -------------------- -->
        <div class="movie-container">
            <h1 class="movie-title">HOLLYWOOD</h1>
            <div class="wrapper">
                <div class="movie-list">
                    <div class="movie-list-item" >
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://i.zoomtventertainment.com/story/Tenet_Movie_Review.jpg" alt="">
                        <div class="movie-desc" >
                       <h4 style="text-align: center;">TENT</h4>
                       <ul>
                           <li>crime</li>
                           <li>drama</li>
                           <li>imbd:8/10</li>
                       </ul>

                        </div>
                        <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                        <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://i.ytimg.com/vi/yjR6kc7ZSkg/sddefault.jpg#404_is_fine" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">DINCHAK</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://i.ytimg.com/vi/hz_yJyrCpjw/maxresdefault.jpg" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">UNDERWATER</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://moviegalleri.net/wp-content/gallery/bheeshma-movie-hd-wallpapers/bheeshma-movie-hd-wallpapers-nitin-rashmika-mandanna-474e7ca.jpg" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">WAFI</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://wallpapercave.com/wp/wp9059434.jpg" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">MUMBAI-SAGA</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://wallpapercave.com/wp/wp9059434.jpg" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">MUMBAI-SAGA</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://wallpapercave.com/wp/wp9059434.jpg" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">MUMBAI-SAGA</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                </div>
                <i class="fa-solid fa-angle-right arrow"></i>
            </div>
        </div>
        <div class="movie-container">
            <h1 class="movie-title">SOUTH</h1>
            <div class="wrapper">
                <div class="movie-list">
                    <div class="movie-list-item" >
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://i.zoomtventertainment.com/story/Tenet_Movie_Review.jpg" alt="">
                        <div class="movie-desc" >
                       <h4 style="text-align: center;">TENT</h4>
                       <ul>
                           <li>crime</li>
                           <li>drama</li>
                           <li>imbd:8/10</li>
                       </ul>

                        </div>
                        <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                        <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://i.ytimg.com/vi/yjR6kc7ZSkg/sddefault.jpg#404_is_fine" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">DINCHAK</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://i.ytimg.com/vi/hz_yJyrCpjw/maxresdefault.jpg" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">UNDERWATER</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://moviegalleri.net/wp-content/gallery/bheeshma-movie-hd-wallpapers/bheeshma-movie-hd-wallpapers-nitin-rashmika-mandanna-474e7ca.jpg" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">WAFI</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://wallpapercave.com/wp/wp9059434.jpg" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">MUMBAI-SAGA</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://wallpapercave.com/wp/wp9059434.jpg" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">MUMBAI-SAGA</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                    <div class="movie-list-item">
                        <img style="width: 200px; height: 200px; border: 2px solid white;" src="https://wallpapercave.com/wp/wp9059434.jpg" alt="">
                        <div class="movie-desc" >
                            <h4 style="text-align: center;">MUMBAI-SAGA</h4>
                            <ul>
                                <li>crime</li>
                                <li>drama</li>
                                <li>imbd:8/10</li>
                            </ul>
     
                             </div>
                             <button class="movie-watch-btn" style="margin-left: 11px;"><a href="">BOOK TICKET</a></button>
                             <button class="movie-watch-btn"><a href="">VIEW TRAILER</a></button>
                    </div>
                </div>
                <i class="fa-solid fa-angle-right arrow"></i>
            </div>
        </div>

        
    </div>
        <script src="./JSHOME.JS"></script>
</body>

</html>