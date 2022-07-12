<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to my hotel</title>
    <link href="hotel.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ce5ba257be.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

</head>

<body>
    <div class="navbar">
        <ul>
            <div class="home">
                <li><a href="hotel.php"><i class="fa-solid fa-house fa-1x" style="color:sienna;"></i>Home</a></li>
                <div class="home1">
                    <ul>
                        <li><a href="#">Misson</a></li>
                        <li><a href="#">Vision</a></li>
                        <li><a href="#">Team</a></li>
                    </ul>
                </div>
            </div>
            <div class="about">
                <li><a href="#"><i class="fa-solid fa-user fa-1x" style="color:sienna;"></i>About us</a></li>
                <div class="about1">
                    <ul>
                        <li><a href="#">History</a></li>
                        <li><a href="#">Management</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Our partner</a></li>
                    </ul>
                </div>
            </div>
            <div class="service">
                <li><a href="#"><i class="fa-solid fa-edit fa-1x" style="color:sienna;"></i>Service</a></li>
                <div class="service1">
                    <ul>
                        <li><a href="#">Reception</a></li>
                        <li><a href="#">Room</a></li>
                        <li><a href="#">Food</a></li>
                        <li><a href="#">Restaurants</a></li>
                        <li><a href="#">Security</a></li>
                    </ul>
                </div>
            </div>
        </ul>
        <div class="login">
            <a href="login.php" style="text-decoration: none;"> <label><i class="fa-solid fa-user fa-1x" style="color:brown;"></i><?php echo ($_SESSION['email']) ?></label></a>
        </div>
    </div>
    <div class="container">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="image\1.jpg">
                    <li>My Hotel located in Island, a sunny beach getaway surrounded by coconut palm trees with Sea View rooms and private balcony</li>
                </div>
                <div class="swiper-slide"><img src="image\5.jpg">
                    <li>Located in high hills of Bujumbura, Mountain's view Hotel offers stay to its guests and a best view of the city and a better sight to the Lake Tanganyika.</li>
                </div>
                <div class="swiper-slide"><img src="image\6.jpg">
                    <li>All rooms are Air Conditioned, with Hot water shower, Satellite Television, Wireless Internet, Mini Bar, Hair Dryer and Safe deposit</li>
                </div>
                <div class="swiper-slide"><img src="image\7.jpg">
                    <li>You will find a Restaurant serving Buffet Breakfast and Dinner and a rooftop open air terrace with loungers. There are variety of entertainments including Karaoke</li>
                </div>
            </div>
            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <form action="book.php" method="POST" class="form">
        <fieldset class="body">
            <div class="personal">
            <label>Name:</label>
            <input type="text" name="name" placeholder="enter your name"></br>
            <label>Email:</label>
            <input type="email" name="email" placeholder="enter your email"></br>
            <label>Phone:</label>
            <input type="text" name="phone" placeholder="enter your phone number">
</div>
            <div class="book">
                <div> <label>Your destination:</label>
                    <select name="branch" >
                        <option>Patna</option>
                        <option>Mumbai</option>
                        <option>Bengolre</option>
                        <option>Kanpur</option>
                        <option>Delhi</option>
                        <option>kolkata</option>
                    </select>
                    <div class="check">
                        
                    <label>Check in: </label>
                        <input type="date" name="in" id="in" onkeyup="data"></br>
                        <label>Check out: </label>
                        <input type="date" name="out" id="out"onkeyup="data">
                    </div>
                    <div>
                
                    <label>room: </label>
                        <input type="number" name="room" id="room" onkeyup="room">    
                        <label>guest: </label>
                        <input type="number" name="guest" id="guest" onkeyup="room">        
                    </div>
                
                    <button type="submit" name="submit">Submit</button>
                </div>
            </div>
        </fieldset>
    </form>
    </div>
    <div class="footer">
        <div class="explore">
            <p>Explore</p>
            <ul>
                <a href="hotel.php">
                    <li>Home</li>
                </a>
                <a href="#">
                    <li>About</li>
                </a>
                <a href="#">
                    <li>Careers</li>
                </a>
            </ul>
        </div>
        <div class="visit">
            <p>Visit</p>
            <a href="hotel.php">My hotel</a>
        </div>
        <div class="contact">
            <p>Contact</p>
            <a href="https://www.facebook.com/profile.php?id=100011206895252"> <i class="fa-brands fa-facebook-f fa-2x " style="color:blue;"></i></a>
            <a href="https://www.instagram.com/_.sandeep.singh_/"> <i class="fa-brands fa-instagram fa-2x" style="color:red;"></i></a>
            <a href="https://web.whatsapp.com/<+91-9166856918>"> <i class="fa-brands fa-whatsapp-square fa-2x" style="color:green;"></i></a>
            <a href="https://twitter.com/sandeep08096758"> <i class="fa-brands fa-twitter fa-2x" style="color:blue;"></i></a>
            <a href="tel:+91-9166856918"> <i class="fa-solid fa-phone fa-2x" style="color:greenyellow;"></i></a>
            <a href="mailto:1js20cs140@gmail.com"> <i class="fa-solid fa-envelope fa-2x" style="color:brown;"></i></a>
        </div>
        <div class="legal">
            <p>Legal</p>
            <ul>
                <li>Terms</li>
                <li>privacy</li>
            </ul>
        </div>
        <div class="feedback">
            <p>Feedback/suggestion</p>
            <textarea></textarea>
        </div>
        <div class="location">
            <p>Location</p>

        </div>
    </div>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            loop: true,
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script type="text/javascript" src="hotel.js"></script>
</body>

</html>