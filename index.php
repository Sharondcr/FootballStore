
<head>   
<title>Nike Store</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="main.css">    
</head>
<body>
    <header>
    <?php include_once("./layout/header.php"); ?>
    </header>
    
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade ca" data-bs-ride="carousel"  data-bs-interval="2000">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="pics/nike5.jpg" class="d-block w-100 image" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
              <p class="slide1">A beautifully crafted football boot for the GOAT.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="pics/nike 2.jpg" class="d-block w-100 image" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>NIKE AIR SUPERFLY VII</h5>
              <p>So fast,that you were never there there.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="pics/nike3.webp" class="d-block w-100 image" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
              <p>For those who crave swagger.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <div class="features">
        <div class="feature">
            <img src="pics/shipping.jpg" alt="" class="featureImg">
            <span class="featureTitle">Free Shipping</span>
            <span class="featureDesc">Free world wide shipping on all orders.</span>
        </div>
        <div class="feature">
            <img src="pics/return.jpg" alt="" class="featureImg">
            <span class="featureTitle">30 Days return</span>
            <span class="featureDesc">No question return and easy refund in 14 days.</span>
        </div>
        <div class="feature">
            <img src="pics/giftcard.png" alt="" class="featureImg">
            <span class="featureTitle">Gift Cards</span>
            <span class="featureDesc">Buy gift cards and use coupon codes easily.</span>
        </div>
        <div class="feature">
            <img src="pics/contact.png" alt="" class="featureImg">
            <span class="featureTitle">Contact Us</span>
            <span class="featureDesc">Keep in touch via email and support system.</span>
        </div>
    </div> 
</body>
