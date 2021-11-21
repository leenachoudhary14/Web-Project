

<html>
<head>
	<title>Chair Shop Website</title>
	<!-- <link rel="stylesheet" type="text/css" href="style1.css"  media="1">
 -->
	<style type="text/css">
		/* Google Fonts */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
  scroll-padding-top: 2rem;
  list-style: none;
  text-decoration: none;
  font-family: "Poppins", sans-serif;
}
:root {
  --text-color: #000000;
  --main-color: #83b735;
}
section {
  padding: 50px 10%;
}
header {
  position: fixed;
  width: 100%;
  top: 0;
  right: 0;
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 18px 100px;
  background: #edecea;
}
.logo {
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--text-color);
}

.navbar {
  position: relative;
  display: flex;
}
.navbar a {
  font-size: 1rem;
  padding: 10px 20px;
  font-weight: 500;
  color: var(--text-color);
}
.navbar a:hover {
  color: var(--main-color);
}
#menu-icon {
  font-size: 2rem;
  cursor: pointer;
  display: none;
}
.home {
  width: 100%;
  min-height: 100vh;
  background-image: url(images/background.jpg);
  background-repeat: no-repeat;
  background-size: covere;
  background-position: right;
  background-attachment: fixed;
  display: flex;
  align-items: center;
}
.home-text h1 {
  font-size: 2.7rem;
}
.home-text p {
  font-size: 0.938rem;
  margin: 0.4rem 0 1.8rem;
}
.home-text span {
  color: var(--main-color);
}
.btn {
  padding: 10px 14px;
  background: var(--main-color);
  color: #fff;
  border-radius: 0.3rem;
  font-size: 14px;
}
.btn:hover {
  background: #8fc53d;
}
.heading {
  text-align: center;
}
.heading span {
  font-size: 14px;
  font-weight: 500;
  color: var(--main-color);
  text-transform: uppercase;
}
.shop-container,
.new-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, auto));
  gap: 1rem;
  margin-top: 2rem;
}
.box {
  position: relative;
  box-shadow: 1px 4px 4px rgb(0, 0, 0, 0.1);
  border-radius: 44px 4px 4px 4px;
}
.box .box-img {
  width: 100%;
  height: 400px;
  overflow: hidden;
  border-radius: 44px 4px 0 0;
}
.box .box-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}
.box .box-img img:hover {
  transform: scale(1.1);
  transition: 0.5s;
}
.title-price {
  display: flex;
  justify-content: space-between;
  padding: 12px;
}
.title-price h3 {
  font-size: 1rem;
  font-weight: 600;
}
.box span {
  font-size: 1.1rem;
  font-weight: 500;
  padding-left: 12px;
  color: var(--main-color);
}
.stars .bx {
  color: var(--main-color);
}
.box .bx-cart {
  position: absolute;
  bottom: 0;
  right: 0;
  padding: 7px;
  font-size: 20px;
  color: #fff;
  border-radius: 4px 0 4px 0;
  background: var(--main-color);
}
.box .bx-cart:hover {
  background: #8fc53d;
}
.new-container .box {
  border-radius: 4px;
}
.new-container .box .box-img {
  border-radius: 4px;
}
.about {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 1rem;
}
.about-img img {
  width: 80%;
  border-radius: 10px;
  object-fit: contain;
}
.about-text span {
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  color: var(--main-color);
}
.about-text p {
  font-size: 0.938rem;
  margin: 0.5rem 0 1.4rem;
}
.brands-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(100px, auto));
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  margin-top: 2rem;
}
.brands-container img {
  width: 100px;
  filter: grayscale(1);
}
.brands-container img:hover {
  width: 100px;
  filter: grayscale(0);
}
.newsletter {
  display: flex;
  flex-direction: column;
  align-items: center;
  background-image: url(images/bg.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
.newsletter h2 {
  color: #fff;
}
.news-box {
  display: flex;
  align-items: center;
  margin-top: 2rem;
}
.news-box input {
  width: 260px;
  height: 44px;
  border: none;
  outline: none;
  background: #fff;
  padding: 10px;
}
.news-box .btn {
  height: 44px;
  padding: 11px;
  border-radius: 0;
  font-weight: 500;
  text-transform: uppercase;
}
.footer {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, auto));
  gap: 1rem;
}
.footer-box h2 {
  font-size: 1.2rem;
  font-weight: 600;
  margin-bottom: 10px;
}
.footer-box span {
  color: var(--main-color);
}
.footer-box p {
  font-size: 00.938rem;
  margin-bottom: 10px;
}
.social {
  display: flex;
  align-items: center;
}
.social a {
  font-size: 24px;
  margin-right: 10px;
  color: var(--text-color);
}
.social a:hover {
  color: var(--main-color);
}
.footer-box h3 {
  font-weight: 500;
  margin-bottom: 10px;
}
.footer-box li a {
  color: var(--text-color);
}
.footer-box li a:hover {
  color: var(--main-color);
}
.contact-info {
  display: flex;
  flex-direction: column;
}
.contact-info span {
  color: var(--text-color);
}
.copyright {
  padding: 20px;
  text-align: center;
}


</style>

</head>
<body>


    <!-- Navbar -->
    <header>
        <a href="#" class="logo">Furniture</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#shop">Shop</a></li>
            <li><a href="#new">New Arrival</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#brands">Our Partners</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </header>
    <!-- Home -->
    <section class="home" id="home">
        <div class="home-text">
            <h1><Span>Make</Span>Your Comfort <br> Is Our <span>Happiness</span></h1>
            <p>A chair is a piece of furniture. <br>A chair is defined as a piece of furniture for one person to sit on.</p>
            <a href="" class="btn">Shop Now</a>
        </div>
    </section>
    <!-- Shop -->
    <section class="shop" id="shop">
        <div class="heading">
            <span>New Arrival</span>
            <h2>Shop Now</h2>
        </div>
        <!-- Content -->
        <div class="shop-container">
            <!-- Box 1 -->
            <div class="box">
                <div class="box-img">
                    <img src="images/p1.jpg" alt="">
                </div>
                <div class="title-price">
                    <h3>Gray Chair</h3>
                    <div class="stars">
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star-half' ></i>
                    </div>
                </div>
                <span>46$</span>
                <i class='bx bx-cart' ></i>
            </div>
            <!-- Box 2 -->
            <div class="box">
                <div class="box-img">
                    <img src="images/p2.jpg" alt="">
                </div>
                <div class="title-price">
                    <h3>Gray Chair</h3>
                    <div class="stars">
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star-half' ></i>
                    </div>
                </div>
                <span>46$</span>
                <i class='bx bx-cart' ></i>
            </div>
            <!-- Box 3 -->
            <div class="box">
                <div class="box-img">
                    <img src="images/p3.jpg" alt="">
                </div>
                <div class="title-price">
                    <h3>Gray Chair</h3>
                    <div class="stars">
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star-half' ></i>
                    </div>
                </div>
                <span>46$</span>
                <i class='bx bx-cart' ></i>
            </div>
            <!-- Box 4 -->
            <div class="box">
                <div class="box-img">
                    <img src="images/p4.jpg" alt="">
                </div>
                <div class="title-price">
                    <h3>Gray Chair</h3>
                    <div class="stars">
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star-half' ></i>
                    </div>
                </div>
                <span>46$</span>
                <i class='bx bx-cart' ></i>
            </div>
            <!-- Box 5 -->
            <div class="box">
                <div class="box-img">
                    <img src="images/p5.jpg" alt="">
                </div>
                <div class="title-price">
                    <h3>Gray Chair</h3>
                    <div class="stars">
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star-half' ></i>
                    </div>
                </div>
                <span>46$</span>
                <i class='bx bx-cart' ></i>
            </div>
            <!-- Box 6 -->
            <div class="box">
                <div class="box-img">
                    <img src="images/p6.jpg" alt="">
                </div>
                <div class="title-price">
                    <h3>Gray Chair</h3>
                    <div class="stars">
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star-half' ></i>
                    </div>
                </div>
                <span>46$</span>
                <i class='bx bx-cart' ></i>
            </div>
        </div>
    </section>
    <!-- New Arrival -->
    <section class="new" id="new">
        <div class="heading">
            <span>New Collection</span>
            <h2>Best Selling</h2>
        </div>
        <!-- Content -->
        <div class="new-container">
            <!-- Box 1 -->
            <div class="box">
                <div class="box-img">
                    <img src="images/new1.jpg" alt="">
                </div>
                <div class="title-price">
                    <h3>Wooden stool</h3>
                    <div class="stars">
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star-half' ></i>
                    </div>
                </div>
                <span>&#8377 4500</span>
                <i class='bx bx-cart' ></i>
            </div>
             <!-- Box 2 -->
             <div class="box">
                <div class="box-img">
                    <img src="images/new2.jpg" alt="">
                </div>
                <div class="title-price">
                    <h3>plastic Chair combo</h3>
                    <div class="stars">
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star-half' ></i>
                    </div>
                </div>
                <span>&#8377 5500</span>
                <i class='bx bx-cart' ></i>
            </div>
             <!-- Box 3 -->
             <div class="box">
                <div class="box-img">
                    <img src="images/new3.jpg" alt="">
                </div>
                <div class="title-price">
                    <h3>Stylish Chair</h3>
                    <div class="stars">
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star-half' ></i>
                    </div>
                </div>
                <span>&#8377 4500</span>
                <i class='bx bx-cart' ></i>
            </div>
        </div>
    </section>
    <!-- About -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="images/about.jpg" alt="">
        </div>
        <div class="about-text">
            <span>About Us</span>
            <h2>Furniture is important part <br>for comfort</h2>
            <p> we take great pride in design and  hand-craftsmanship of our products. Our in-house designers create time honed designs.</p>
            <p> Our products whether a Sofa, a Chair Soft furnishings are made in India.
            <a href="#shop" class="btn">Learn More.</a>
        </div>
    </section>
    <!-- Brands -->
    <section class="brands" id="brands">
        <div class="heading">
            <span>Brands</span>
            <h2>Our Brands Partners</h2>
        </div>
        <div class="brands-container">
        	<a href="https://artsandculture.google.com/entity/chair/m01mzpv?hl=en">
            <img src="images/Google.png" alt="" ></a>

            <a href="https://www.amazon.in/Living-Room-Chairs/b?ie=UTF8&node=5689448031">
            <img src="images/amazon.png" alt=""></a>

            <a href="https://www.google.com/">
            <img src="images/netflix.png" alt=""></a>

            <a href="https://www.google.com/">
            <img src="images/tesla.png" alt=""></a>

            <a href="https://www.google.com/">
            <img src="images/starbucks.png" alt=""></a>

            <a href="https://www.google.com/">
            <img src="images/zoom.png" alt=""></a>
        </div>
    </section>
    <section class="newsletter" id="contact">
        <h2>Subscribe To Newsletter</h2>
        <div class="news-box">
            <input type="text" placeholder="Enter Your Email...">
            <a href="Subscribe.php" class="btn">Subscribe</a>
        </div>
    </section>
    <!-- Footer -->
    <section class="footer" id="footer">
        <div class="footer-box">
            <h2>Furniture<
            <p>Look for a metal or paper tag, a sticker or a stamp listing a brand name.</p>
            <div class="social">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h3>Services</h3>
            <li><a href="#">Product</a></li>
            <li><a href="#">Help & Support</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">FAQ</a></li>
        </div>
        <div class="footer-box">
            <h3>Product</h3>
            <li><a href="#">Sofa's</a></li>
            <li><a href="#">Chair's</a></li>
            <li><a href="#">Living Room</a></li>
            <li><a href="#">Office</a></li>
        </div>
        <div class="footer-box contact-info">
            <h3>Contact</h3>
            <span>Indore City, India</span>
            <span>+1 100 1004 0001</span>
            <span><a href="https://mail.google.com/mail/">chairshop@gmail.com</a>
               </span>
            
        </div>
    </section>
    <div class="copyright">
        <p>&#169; All Right Reserved.</p>
    </div>
   
   <center>
   	     <a href="logout.php">LOGOUT</a>    
   </center>


</body>
</html>