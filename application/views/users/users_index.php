<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Bois Hobby Store</title>

    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRP_LMOiRMzdWWwR3PFMRfrBbLeCKjk1kjAWrezJ1f_&s">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?= base_url('resources/css/style.css') ?>">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">The Bois</a>

    <nav class="navbar">
        <div id="nav-close" class="fas fa-times"></div>
        <a href="#home">home</a>
        <a href="#about">Button1</a>
        <a href="addtocart.html">shop</a>
        <a href="#blogs">Daily updates</a>
        <a href="#">Profile</a>
        <a href="registration.html">Sign-in/Sign-up</a>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#" class="fas fa-shopping-cart"></a>
        <div id="search-btn" class="fas fa-search"></div>
    </div>

</header>

<!-- header section ends -->

<!-- search form  -->

<div class="search-form">

    <div id="close-search" class="fas fa-times"></div>

    <form action="">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>
</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url(https://sportshub.cbsistatic.com/i/2023/01/29/4713d909-e8d8-44ae-9d6c-880f032afa60/witch-from-mercury-gundam-aerial-anime.jpg) no-repeat;">
                    <div class="content">
                        <span>Hobby</span>
                        <h3>Gundam</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde ex molestias soluta consequatur saepe aliquam, excepturi delectus consequuntur minus!</p>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box second" style="background: url(images/landing.png) no-repeat;">
                    <div class="content">
                        <span>Be</span>
                        <h3>amazing</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde ex molestias soluta consequatur saepe aliquam, excepturi delectus consequuntur minus!</p>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(images/blog1.jpg) no-repeat;">
                    <div class="content">
                        <span>explore the of</span>
                        <h3>Taekwondon</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde ex molestias soluta consequatur saepe aliquam, excepturi delectus consequuntur minus!</p>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->

<!-- category section starts  -->

<section class="category">

    <h1 class="heading">Taekwondo</h1>

    <div class="box-container">

        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWq8bF5wZ66B68xgTsdTf_P9zpJtfgMOJGHw&usqp=CAU" alt="">
            <h3>Gundam Tools</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTooYzdwuQ1YumuE8CvmVWvXBUSspZihEA1UA&usqp=CAU" alt="">
            <h3>Gundam Series</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="data:image/png;base64,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" alt="">
            <h3>Gundam History</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="data:image/png;base64,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" alt="">
            <h3>What is Plamo</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- category section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="https://live.staticflickr.com/65535/52339766141_a7d6f1dee2_o.jpg" alt="">
    </div>

    <div class="content">
        <h3>Latest Gundam</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque voluptates corrupti natus necessitatibus beatae voluptatibus, deserunt quo soluta minima libero laborum, corporis error esse vitae placeat blanditiis reiciendis vel? Minima.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dicta doloremque placeat porro, ipsam quia at beatae atque odit iste?</p>
        <a href="#" class="btn">read more</a>
    </div>

</section>

<!-- about section ends -->

<!-- shop section starts  -->

<section class="shop" id="shop">

    <h1 class="heading">shop</h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="https://live.staticflickr.com/65535/52339766141_a7d6f1dee2_o.jpg" alt="">
                    <div class="icons">
                        <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                        <a href="addtocart.html" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Full Set</h3>
                    <div class="price"> $500 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="https://live.staticflickr.com/65535/52339766141_a7d6f1dee2_o.jpg" alt="">
                    <div class="icons">
                        <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                        <a href="addtocart.html" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Gloves</h3>
                    <div class="price"> $50</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="https://live.staticflickr.com/65535/52339766141_a7d6f1dee2_o.jpg" alt="">
                    <div class="icons">
                        <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                        <a href="addtocart.html" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Gloves</h3>
                    <div class="price"> $50</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="https://live.staticflickr.com/65535/52339766141_a7d6f1dee2_o.jpg" alt="">
                    <div class="icons">
                        <a href="addtocart.html" class="fas fa-shopping-cart"></a>
                        <a href="addtocart.html" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Foot Socks</h3>
                    <div class="price"> $100</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- shop section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">Gundam Grade</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="data:image/jpeg;base64,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" alt="">
            </div>
            <div class="content">
                <h3>Super Deformed</h3>
                <div class="price">P1000</div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="data:image/jpeg;base64,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" alt="">
            </div>
            <div class="content">
                <h3>High Grade</h3>
                <div class="price">P1500</div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://www.pro-bems.com/IMAGES/images_1/FIGGUN83115P/g/FIGGUN83115P_1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Real Grade</h3>
                <div class="price">P2000</div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://1.bp.blogspot.com/-ImWukPNdR9M/YRwZCv5y4aI/AAAAAAAHfE8/42Z4iPvzO3AecK6bz0Ty4NLoNXlgcK7vACLcBGAsYHQ/s1200/mg-eclipse-gundam%2B%25281%2529.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Master Grade</h3>
                <div class="price">P2000</div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="data:image/jpeg;base64,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" alt="">
            </div>
            <div class="content">
                <h3>Perfect Grade</h3>
                <div class="price">P2000</div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgWwQx0GP1XUNiYjOFQpz7YTgT83xt979CuA&usqp=CAU" alt="">
            </div>
            <div class="content">
                <h3>High Resolution</h3>
                <div class="price">P2000</div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://preview.redd.it/0kmheqysn2081.png?auto=webp&s=fc9553b66bd852da4edba4b771afdf7317ac170a" alt="">
            </div>
            <div class="content">
                <h3>Entry Grade</h3>
                <div class="price">P2000</div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="https://static.wikia.nocookie.net/gundam/images/c/cf/MSM-Unicorn_Gundam_Ver.TWC.jpg/revision/latest?cb=20210507051109" alt="">
            </div>
            <div class="content">
                <h3>Mega Size</h3>
                <div class="price">P2000</div>
            </div>
        </div>



       

    </div>

</section>

<!-- packages section ends -->


<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> Nosure what should I input here </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgWwQx0GP1XUNiYjOFQpz7YTgT83xt979CuA&usqp=CAU" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> December 30, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Coach Marlon </a>
                </div>
                <h3>Taekwondo</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, deserunt.</p>
                <a href="https://www.facebook.com/profile.php?id=100063761903685&sk=photos" class="btn">read more</a>
            </div>

           

        </div>

    </div>

</section>

<!-- blogs section ends -->



<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#about">about</a>
        </div>

        <div class="box">
            <a href="#">terms of use</a>
            <a href="#">privacy policy</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        </div>

    </div>

    <div class="credit">created by <span>The Bois</span> | all rights reserved 2023 | For Study Purpose only</div>

</section>

<!-- footer section ends -->












<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="<?= base_url('resources/javascript/script.js') ?>"></script>

</body>
</html>