<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: Arial, sans-serif;
    }

    /* Navbar styling */
    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 10;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .navbar .nav-link,
    .navbar-brand,
    .navbar i {
      color: #000 !important;
      font-weight: 500;
    }

    .navbar-nav-center {
      flex-grow: 1;
      justify-content: center;
    }

    .nav-icons {
      gap: 15px;
    }

    /* Cart badge styling */
    .cart-badge {
      position: absolute;
      top: 0;
      right: 0;
      width: 18px;
      height: 18px;
      font-size: 12px;
      background-color: #0d6efd;
      color: white;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-weight: 600;
      user-select: none;
      pointer-events: none;
    }

    /* Dropdown styling */
    .nav-item.dropdown:hover .dropdown-menu {
      display: block;
      margin-top: 0;
    }

    .dropdown-menu {
      display: none;
      min-width: 200px;
      padding: 10px 0;
      transition: all 0.3s ease;
      border: none;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .dropdown-menu .dropdown-item {
      padding: 10px 20px;
      font-weight: 500;
      font-size: 13px;
      color: #555;
    }

    .dropdown-menu .dropdown-item:hover {
      background-color: #f8f9fa;
      color: #007bff;
    }

    /* Sidebar styling */
    .menu-icon {
      font-size: 24px;
      cursor: pointer;
      padding: 10px;
      z-index: 1001;
    }

    .overlay {
      position: fixed;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
      top: 0;
      left: 0;
      z-index: 999;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease;
    }

    .overlay.active {
      opacity: 1;
      visibility: visible;
    }

    .secondnav {
      position: fixed;
      left: -260px;
      top: 0;
      width: 250px;
      height: 100%;
      background: #fff;
      box-shadow: 2px 0 10px rgba(0,0,0,0.1);
      transition: 0.3s ease;
      z-index: 1000;
      padding: 20px;
      overflow-y: auto;
    }

    .secondnav.active {
      left: 0;
    }

    .tab-buttons {
      display: flex;
      justify-content: space-around;
      margin-bottom: 15px;
    }

    .tab-buttons button {
      padding: 8px 12px;
      border: none;
      background: #f1f1f1;
      cursor: pointer;
      font-weight: 600;
      border-radius: 4px;
    }

    .tab-buttons button.active {
      background-color: #007bff;
      color: #fff;
    }

    .tab-content {
      display: none;
    }

    .tab-content.active {
      display: block;
    }

    .tab-content ul {
      list-style: none;
      padding: 0;
    }

    .tab-content ul li {
      margin: 10px 0;
    }

    .tab-content ul li a {
      text-decoration: none;
      color: #000;
      font-size: 15px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .tab-content ul li a i {
      width: 20px;
      text-align: center;
    }

    /* Responsive adjustments */
    @media (max-width: 991.98px) {
      .navbar-brand {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
      }
      
      .navbar-nav-center {
        justify-content: start;
        margin-top: 10px;
      }

      .nav-icons {
        justify-content: start;
        margin-top: 10px;
      }

      .navbar-collapse {
        background: #fff;
        padding: 15px;
        border-radius: 8px;
        margin-top: 10px;
      }
    }

    /* Hide/show elements based on screen size */
    @media (max-width: 991.98px) {
      .desktop-nav {
        display: none !important;
      }
      
      .mobile-nav {
        display: flex !important;
      }
    }

    @media (min-width: 992px) {
      .desktop-nav {
        display: flex !important;
      }
      
      .mobile-nav {
        display: none !important;
      }
      
      .menu-icon, .secondnav, .overlay {
        display: none !important;
      }
    }

    /* Body padding to account for fixed navbar */
body {
    padding-top: 60px;
  }

  .imcs {
    height: 200px;
    background-size: cover;
    background-position: center;
    border-radius: 8px;
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }

  .imcs-left {
    background-image: url("https://woodmart.xtemos.com/accessories/wp-content/uploads/sites/7/2022/04/accessories-banner-3.jpg");
  }

  .imcs-right {
    background-image: url("https://woodmart.xtemos.com/accessories/wp-content/uploads/sites/7/2022/04/battary-cases-min.jpg");
  }

  .cons {
    margin-left: 15px;
    padding: 15px;
    border-radius: 10px;
    color: white;
    width: 90%;
  }

  .cons h1 {
    color: black;
    width: 100%;
    font-size: 1.5rem;
    font-weight: lighter;
    margin-bottom: 10px;
  }

  .cons p {
    font-size: 0.9rem;
    margin-bottom: 10px;
  }

  /* Medium devices (tablets, 768px and up) */
  @media (min-width: 768px) {
    .imcs {
      height: 250px;
    }
    
    .cons {
      padding: 20px;
      margin-left: 20px;
    }
    
    .cons h1 {
      font-size: 2rem;
    }
    
    .cons p {
      font-size: 1rem;
    }
  }

  /* Large devices (desktops, 992px and up) */
  @media (min-width: 992px) {
    .imcs {
      height: 300px;
    }
    
    .cons {
      padding: 30px;
    }
    
    .cons h1 {
      font-size: 2.5rem;
      max-width: 340px;
    }
  }
    .product-new-container {
      display: flex;
      justify-content: center;
      margin-top: 80px;
      margin-bottom: 60px;
    }

    .product-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .card-wrapper {
      width: 18%;
      min-width: 180px;
      position: relative;
      overflow: hidden;
      border-radius: 15px;
    }

    .new {
      position: relative;
      width: 100%;
      height: 70%;
      overflow: hidden;
      border-radius: 15px;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
    }

    .new img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 1;
    }

    .icons {
      position: absolute;
      top: 20px;
      right: -100px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      transition: right 0.4s ease;
      z-index: 2;
    }

    .icons i {
      background: #fff;
      color: #000;
      padding: 10px;
      border-radius: 50%;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      cursor: pointer;
      transition: transform 0.3s;
      text-align: center;
      font-size: 16px;
    }

    .icons i:hover {
      background-color: #eee;
      color: black;
    }

    .new:hover .icons {
      right: 15px;
    }

    .add-to-cart {
      position: absolute;
      bottom: -60px;
      width: calc(100% - 20px);
      left: 10px;
      background-color: #3f51b5;
      color: white;
      border-radius: 30px;
      border: none;
      font-size: 16px;
      cursor: pointer;
      transition: bottom 0.4s ease;
      padding: 10px;
      z-index: 2;
    }

    .new:hover .add-to-cart {
      bottom: 15px;
    }

    .badge-new {
      position: absolute;
      top: 10px;
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      left: 10px;
      background-color: green;
      color: white;
      font-size: 12px;
      font-weight: bold;
      padding: 6px 12px;
      border-radius: 50%;
      z-index: 3;
    }

    /* Responsive Fixes */
    @media (max-width: 1200px) {
      .card-wrapper {
        width: 23%;
      }
    }
    @media (max-width: 992px) {
      .card-wrapper {
        width: 30%;
      }
    }
    @media (max-width: 768px) {
      .card-wrapper {
        width: 45%;
      }
    }
    @media (max-width: 576px) {
      .card-wrapper {
        width: 90%;
      }
    }

    .category-row img {
      transition: transform 0.3s ease;
    }

    .category-row img:hover {
      transform: scale(1.1);
    }

    .footer {
      padding: 30px 0;
    }

    .footer a:hover {
      color: #0d6efd !important;
    }
    </style>
</head>
<body>
  
  <!-- Mobile Navbar (visible only on md and below) -->
  <nav class="navbar navbar-expand-lg py-2 px-3 bg-white mobile-nav d-lg-none">
    <div class="container-fluid">
      <!-- Hamburger menu -->
      <div class="menu-icon" id="menuIcon">
        <i class="fas fa-bars"></i>
      </div>
      
      <!-- Centered logo -->
      <a class="navbar-brand mx-auto" href="#">
        <img src="https://woodmart.xtemos.com/accessories/wp-content/themes/woodmart/images/wood-logo-dark.svg" alt="Logo" width="120">
      </a>
      
      <!-- Cart icon -->
      <div class="d-flex">
        <div class="position-relative">
          <a class="nav-link" href="#">
            <i class="bi bi-cart2 fs-5"></i>
            <span class="cart-badge">0</span>
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Desktop Navbar (visible only on lg and above) -->
  <nav class="navbar navbar-expand-lg py-3 px-4 bg-white desktop-nav">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://woodmart.xtemos.com/accessories/wp-content/themes/woodmart/images/wood-logo-dark.svg" alt="Logo" width="150">
      </a>
      
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#woodmartNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="woodmartNavbar">
        <!-- Center Menu -->
        <ul class="navbar-nav navbar-nav-center flex-wrap text-center text-lg-start">
          <!-- Cases -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownCases" role="button">Cases</a>
            <ul class="dropdown-menu shadow border-0 rounded-3 mt-2" aria-labelledby="dropdownCases">
              <li><a class="dropdown-item" href="#">iPhone 13</a></li>
              <li><a class="dropdown-item" href="#">iPhone 12 Pro</a></li>
              <li><a class="dropdown-item" href="#">iPhone 12</a></li>
              <li><a class="dropdown-item" href="#">iPhone 11</a></li>
              <li><a class="dropdown-item" href="#">iPhone 11 Pro</a></li>
              <li><a class="dropdown-item" href="#">SE</a></li>
              <li><a class="dropdown-item" href="#">XR</a></li>
            </ul>
          </li>

          <!-- Straps -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownStraps" role="button" style="font-size: 13px;">Straps</a>
            <ul class="dropdown-menu shadow border-0 rounded-3 mt-2" aria-labelledby="dropdownStraps">
              <li><a class="dropdown-item" href="#">Canvas</a></li>
              <li><a class="dropdown-item" href="#">Leather</a></li>
              <li><a class="dropdown-item" href="#">Limited Series</a></li>
              <li><a class="dropdown-item" href="#">Metal</a></li>
              <li><a class="dropdown-item" href="#">Silicon</a></li>
              <li><a class="dropdown-item" href="#">Sport</a></li>
            </ul>
          </li>

          <!-- Power Banks -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownPowerBanks" role="button" style="font-size: 13px;">Power Banks</a>
            <ul class="dropdown-menu shadow border-0 rounded-3 mt-2" aria-labelledby="dropdownPowerBanks">
              <li><a class="dropdown-item" href="#">Battery Case</a></li>
              <li><a class="dropdown-item" href="#">Powerful</a></li>
              <li><a class="dropdown-item" href="#">Wireless</a></li>
            </ul>
          </li>

          <!-- Cables -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownCables" role="button" style="font-size: 13px;">Cables</a>
            <ul class="dropdown-menu shadow border-0 rounded-3 mt-2" aria-labelledby="dropdownCables">
              <li><a class="dropdown-item" href="#">Lightening</a></li>
              <li><a class="dropdown-item" href="#">Universal</a></li>
              <li><a class="dropdown-item" href="#">USB-C</a></li>
            </ul>
          </li>

          <!-- Meg Safe -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownMegSafe" role="button" style="font-size: 13px;">Meg Safe</a>
            <ul class="dropdown-menu shadow border-0 rounded-3 mt-2" aria-labelledby="dropdownMegSafe">
              <li><a class="dropdown-item" href="#">Meg-Safe</a></li>
              <li><a class="dropdown-item" href="#">Battery</a></li>
              <li><a class="dropdown-item" href="#">Wallet</a></li>
            </ul>
          </li>

          <!-- Charger -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownCharger" role="button" style="font-size: 13px;">Charger</a>
            <ul class="dropdown-menu shadow border-0 rounded-3 mt-2" aria-labelledby="dropdownCharger">
              <li><a class="dropdown-item" href="#">Charging Pad</a></li>
              <li><a class="dropdown-item" href="#">Stands & Docks</a></li>
            </ul>
          </li>

          <!-- Other -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownOther" role="button" style="font-size: 13px;">Other</a>
            <ul class="dropdown-menu shadow border-0 rounded-3 mt-2" aria-labelledby="dropdownOther">
              <li><a class="dropdown-item" href="#">Shop</a></li>
              <li><a class="dropdown-item" href="#">Blog</a></li>
              <li><a class="dropdown-item" href="#">About us</a></li>
              <li><a class="dropdown-item" href="#">Contact us</a></li>
              <li><a class="dropdown-item" href="#">Privacy Policy</a></li>
              <li><a class="dropdown-item" href="#">Shipping</a></li>
              <li><a class="dropdown-item" href="#">Track Order</a></li>
              <li><a class="dropdown-item" href="#">FAQs</a></li>
            </ul>
          </li>
        </ul>
        
        <!-- Right icons -->
        <ul class="navbar-nav d-flex align-items-center ms-lg-3 flex-row gap-3 mt-3 mt-lg-0">
          <!-- Login/Register -->
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: 13px;">Login / Register</a>
          </li>

          <!-- Search icon -->
          <li class="nav-item position-relative">
            <a class="nav-link" href="#"><i class="bi bi-search fs-5"></i></a>
          </li>

          <!-- Shuffle icon -->
          <li class="nav-item position-relative">
            <a class="nav-link" href="#">
              <i class="bi bi-shuffle fs-5"></i>
              <span class="position-absolute bg-primary text-white rounded-circle d-flex justify-content-center align-items-center"
                style="width: 18px; height: 18px; font-size: 12px; top: 0; right: 0;">1</span>
            </a>
          </li>

          <!-- Wishlist icon -->
          <li class="nav-item position-relative">
            <a class="nav-link" href="#">
              <i class="bi bi-suit-heart fs-5"></i>
              <span class="position-absolute bg-primary text-white rounded-circle d-flex justify-content-center align-items-center"
                style="width: 18px; height: 18px; font-size: 12px; top: 0; right: 0;">0</span>
            </a>
          </li>

          <!-- Cart icon -->
          <li class="nav-item position-relative">
            <a class="nav-link d-flex align-items-center" href="#">
              <i class="bi bi-cart2 fs-5"></i>
              <span class="cart-badge">0</span>
            </a>
          </li>

          <!-- Cart total -->
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">$0.00</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Overlay -->
  <div class="overlay" id="overlay"></div>

  <!-- Sidebar -->
  <div class="secondnav" id="nav">
    <div class="search-container mb-3">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for products" />
        <button class="btn btn-outline-secondary" type="button">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>

    <div class="tab-buttons">
      <button id="casesTab" class="active">CATEGORIES</button>
      <button id="strapsTab">MENU</button>
    </div>

    <div id="casesContent" class="tab-content active">
      <ul>
        <li><a href="#"><i class="fas fa-mobile-alt"></i> Cases</a></li>
        <li><a href="#"><i class="fas fa-clock"></i> Straps</a></li>
        <li><a href="#"><i class="fas fa-battery-full"></i> Power Banks</a></li>
        <li><a href="#"><i class="fas fa-plug"></i> Cables</a></li>
        <li><a href="#"><i class="fas fa-magnet"></i> MagSafe</a></li>
        <li><a href="#"><i class="fas fa-charging-station"></i> Charger</a></li>
        <li><a href="#"><i class="fas fa-headphones"></i> Earphones</a></li>
      </ul>
    </div>

    <div id="strapsContent" class="tab-content">
      <ul>
        <li><a href="#"><i class="fas fa-store"></i> Shop</a></li>
        <li><a href="#"><i class="fas fa-blog"></i> Blog</a></li>
        <li><a href="#"><i class="fas fa-info-circle"></i> About Us</a></li>
        <li><a href="#"><i class="fas fa-phone-alt"></i> Contact Us</a></li>
        <li><a href="#"><i class="fas fa-question-circle"></i> FAQs</a></li>
      </ul>
    </div>
  </div>

<!-- Banner Image -->
<div class="imaged">
  <img src="this1.jpg" 
       alt="Banner" 
       style="height:200px; width:100%; object-fit:cover">
</div>

<br>

<!-- Categories -->
<div class="container-fluid d-flex flex-wrap py-5 category-row">
  <div class="col-lg-2 text-center">
    <img src="https://woodmart.xtemos.com/accessories/wp-content/uploads/sites/7/2022/04/w-accessories-product-12.jpg.webp" 
         width="100"
         alt="Charger">
    <h6>Charger</h6>
    <p class="text-secondary">12 Products</p>
  </div>
  <div class="col-lg-2 text-center">
    <img src="https://woodmart.xtemos.com/accessories/wp-content/uploads/sites/7/2022/08/w-accessories-product-iphone-11-2-430x491.jpg.webp" 
         width="100"
         alt="Cases">
    <h6>Cases</h6>
    <p class="text-secondary">51 Products</p>
  </div>
  <div class="col-lg-2 text-center">
    <img src="https://woodmart.xtemos.com/accessories/wp-content/uploads/sites/7/2022/04/w-accessories-product-11-430x491.jpg.webp" 
         width="100"
         alt="Cables">
    <h6>Cables</h6>
    <p class="text-secondary">18 Products</p>
  </div>
</div>

<!-- Brands -->
<div class="container-fluid d-flex flex-wrap justify-content-center py-5 category-row">
  <div class="col-lg-2 text-center">
    <img src="https://woodmart.xtemos.com/accessories/wp-content/uploads/sites/7/2022/04/w-accessories-brand-3.png.webp" 
         width="100"
         alt="Brand">
  </div>
  <div class="col-lg-2 text-center">
    <img src="https://woodmart.xtemos.com/accessories/wp-content/uploads/sites/7/2022/04/w-accessories-brand-4.png.webp" 
         width="100"
         alt="Brand">
  </div>
  <div class="col-lg-2 text-center">
    <img src="https://woodmart.xtemos.com/accessories/wp-content/uploads/sites/7/2022/04/w-accessories-brand-9.png.webp" 
         width="100"
         alt="Brand">
  </div>
  <div class="col-lg-2 text-center">
    <img src="https://woodmart.xtemos.com/accessories/wp-content/uploads/sites/7/2022/04/w-accessories-brand-12.png.webp" 
         width="100"
         alt="Brand">
  </div>
  <div class="col-lg-2 text-center">
    <img src="https://woodmart.xtemos.com/accessories/wp-content/uploads/sites/7/2022/04/w-accessories-brand-11.png.webp" 
         width="100"
         alt="Brand">
  </div>
  <div class="col-lg-2 text-center">
    <img src="https://woodmart.xtemos.com/accessories/wp-content/uploads/sites/7/2022/04/w-accessories-brand-10.png.webp" 
         width="100"
         alt="Brand">
  </div>
</div>

<!-- Promo Banners -->
<div class="container-fluid">
  <div class="row">
    <div class="issd d-flex flex-column flex-xl-row">
      <div class="col-12 col-lg-7 mb-3 mb-lg-0">
        <div class="imcs imcs-left">
          <div class="cons">
            <p class="text-info">Special offer</p>
            <h1>Buy One And Get 50% Off The Second</h1>
            <p class="text-black">Read more</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-5">
        <div class="imcs imcs-right">
          <div class="cons">
            <p class="text-info">Something Completely New</p>
            <h1>Cases For Phone</h1>
            <p class="text-black">Buy Now</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Products -->
<div class="product-new-container">
  <div class="product-grid">
    
    <!-- Card 1 -->
    <div class="card-wrapper">
      <div class="new">
        <img src="this2.webp" 
             alt="Product">
        <div class="icons">
          <i class="fas fa-random"></i>
          <i class="fas fa-heart"></i>
          <i class="fas fa-list"></i>
        </div>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <h6 class="text-center fw-bold">iPhone 13 Case Max-Black</h6>
      <p class="text-center text-secondary">iPhone 13</p>
      <p class="text-center text-primary">$159.00</p>
    </div>

    <!-- Card 2 -->
    <div class="card-wrapper">
      <div class="new">
        <img src="https://woodmart.xtemos.com/accessories/wp-content/uploads/sites/7/2022/04/power-banks-pb-5.jpg.webp" 
             alt="Product">
        <div class="icons">
          <i class="fas fa-random"></i>
          <i class="fas fa-heart"></i>
          <i class="fas fa-list"></i>
        </div>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <h6 class="text-center fw-bold">Power Bank 10000mAh</h6>
      <p class="text-center text-secondary">Power Banks</p>
      <p class="text-center text-primary">$79.00</p>
    </div>

    <!-- Card 3 with Green Badge -->
    <div class="card-wrapper">
      <div class="new">
        <span class="badge-new">NEW</span>
        <img src="https://woodmart.xtemos.com/accessories/wp-content/uploads/sites/7/2022/04/power-banks-wirelles-1.jpg.webp" 
             alt="Product">
        <div class="icons">
          <i class="fas fa-random"></i>
          <i class="fas fa-heart"></i>
          <i class="fas fa-list"></i>
        </div>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <h6 class="text-center fw-bold">Wireless Charger</h6>
      <p class="text-center text-secondary">Chargers</p>
      <p class="text-center text-primary">$49.00</p>
    </div>

    <!-- Card 4 -->
    <div class="card-wrapper">
      <div class="new">
        <img src="https://woodmart.xtemos.com/accessories/wp-content/uploads/sites/7/2022/04/power-banks-battery-case-5.jpg.webp" 
             alt="Product">
        <div class="icons">
          <i class="fas fa-random"></i>
          <i class="fas fa-heart"></i>
          <i class="fas fa-list"></i>
        </div>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <h6 class="text-center fw-bold">Battery Case</h6>
      <p class="text-center text-secondary">iPhone Cases</p>
      <p class="text-center text-primary">$99.00</p>
    </div>

    <!-- Card 5 -->
    <div class="card-wrapper">
      <div class="new">
        <img src="https://woodmart.xtemos.com/accessories/wp-content/uploads/sites/7/2022/04/power-banks-battery-case-3.jpg.webp" 
             alt="Product">
        <div class="icons">
          <i class="fas fa-random"></i>
          <i class="fas fa-heart"></i>
          <i class="fas fa-list"></i>
        </div>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <h6 class="text-center fw-bold">Slim Battery Case</h6>
      <p class="text-center text-secondary">iPhone Cases</p>
      <p class="text-center text-primary">$89.00</p>
    </div>
  </div>
</div>

<!-- Footer -->
<div class="footer d-flex flex-column flex-xl-row align-items-center justify-content-center justify-content-xl-between flex-wrap gap-3 p-4 bg-black text-white">
  <div class="top d-flex align-items-center">
    <img src="https://woodmart.xtemos.com/accessories/wp-content/themes/woodmart/images/wood-logo-dark.svg" 
         alt="Logo" 
         width="200" 
         style="filter: brightness(0) invert(1);">
  </div>

  <div class="msa d-flex align-items-center">
    <ul class="list-unstyled d-flex align-items-center justify-content-center gap-3 mb-0">
      <li><a href="#" class="text-decoration-none text-white">About us</a></li>
      <li><a href="#" class="text-decoration-none text-white">Privacy Policy</a></li>
      <li><a href="#" class="text-decoration-none text-white">Shipping</a></li>
      <li><a href="#" class="text-decoration-none text-white">Track Order</a></li>
      <li><a href="#" class="text-decoration-none text-white">FAQs</a></li>
    </ul>
  </div>

  <div class="rsd d-flex align-items-center">
    <p class="mb-0">Xtemos Studio Copyright &copy; 2025</p>
  </div>
</div>

<!-- Bootstrap 5 Bundle JS (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const nav = document.getElementById("nav");
  const overlay = document.getElementById("overlay");
  const menuIcon = document.getElementById("menuIcon");

  // Toggle Sidebar
  menuIcon.addEventListener("click", function (e) {
    e.stopPropagation();
    nav.classList.add("active");
    overlay.classList.add("active");
  });

  // Close on outside click
  overlay.addEventListener("click", function () {
    nav.classList.remove("active");
    overlay.classList.remove("active");
  });

  // Tab switching logic
  document.getElementById("casesTab").addEventListener("click", () => {
    document.getElementById("casesTab").classList.add("active");
    document.getElementById("strapsTab").classList.remove("active");
    document.getElementById("casesContent").classList.add("active");
    document.getElementById("strapsContent").classList.remove("active");
  });

  document.getElementById("strapsTab").addEventListener("click", () => {
    document.getElementById("casesTab").classList.remove("active");
    document.getElementById("strapsTab").classList.add("active");
    document.getElementById("casesContent").classList.remove("active");
    document.getElementById("strapsContent").classList.add("active");
  });
</script>

</body>
</html>