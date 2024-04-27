<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PET SHOP - Pet Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
        height: 100%;
        margin: 0;
      }
      body, input, select { 
        padding: 0;
        margin: 0;
        outline: none;
        font-family: Roboto, Arial, sans-serif;
        font-size: 16px;
        color: #eee;
      }
      h1, h3 {
        font-weight: 400;
      }
      h1 {
        font-size: 32px;
      }
      h3 {
        color: #1c87c9;
      }
      .main-block, .info {
        display: flex;
        flex-direction: column;
      }
      .main-block {
        justify-content: center;
        align-items: center;
        width: 100%; 
        min-height: 100%;
        background: url("img/hero.jpg") no-repeat center;
        background-size: cover;
        margin-top: 10px; /* Adjusted margin */
      }
      form {
        width: 80%; 
        padding: 25px;
        margin-bottom: 20px;
        background: rgba(0, 0, 0, 0.498);
        margin-top: 10px; /* Adjusted margin */
      }
      input, select {
        padding: 5px;
        margin-bottom: 20px;
        background: transparent;
        border: none;
        border-bottom: 1px solid #eee;
      }
      input::placeholder {
        color: #eee;
      }
      option {
        background: black; 
        border: none;
      }
      .metod {
        display: flex; 
      }
      input[type=radio] {
        display: none;
      }
      label.radio {
        position: relative;
        display: inline-block;
        margin-right: 20px;
        text-indent: 32px;
        cursor: pointer;
      }
      label.radio:before {
        content: "";
        position: absolute;
        top: -1px;
        left: 0;
        width: 17px;
        height: 17px;
        border-radius: 50%;
        border: 2px solid #1c87c9;
      }
      label.radio:after {
        content: "";
        position: absolute;
        width: 8px;
        height: 4px;
        top: 5px;
        left: 5px;
        border-bottom: 3px solid #1c87c9;
        border-left: 3px solid #1c87c9;
        transform: rotate(-45deg);
        opacity: 0;
      }
      input[type=radio]:checked + label:after {
        opacity: 1;
      }
      button {
        display: block;
        width: 200px;
        padding: 10px;
        margin: 20px auto 0;
        border: none;
        border-radius: 5px; 
        background: #1c87c9; 
        font-size: 14px;
        font-weight: 600;
        color: #fff;
      }
      button:hover {
        background: #095484;
      }
      @media (min-width: 568px) {
        .info {
          flex-flow: row wrap;
          justify-content: space-between;
        }
        input {
          width: 46%;
        }
        input.fname {
          width: 100%;
        }
        select {
          width: 48%;
        }
      }
    </style>


</head>

<body>
    

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0"
    >
      <a href="index.html" class="navbar-brand ms-lg-5">
        <h1 class="m-0 text-uppercase text-dark">
          <i class="bi bi-dog fs-1 text-primary me-3"></i>Pawspire
        </h1>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
          <a href="index.html" class="nav-item nav-link active">Home</a>
          <a href="about.html" class="nav-item nav-link">About</a>
          <a href="service.html" class="nav-item nav-link">Service</a>
          <a href="product.html" class="nav-item nav-link">Product</a>

          <a
            href="contact.php"
            class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5"
            >Contact <i class="bi bi-arrow-right"></i
          ></a>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <div class="main-block">
    <h1>Order Form</h1>
    <form role="form" action="insert_order.php" method="post">
        <div class="info">
            <input class="fname" type="text" name="a" placeholder="Full name">
            <input type="text" name="b" placeholder="Email">
            <input type="text" name="c" placeholder="Phone number">
            <input type="text" name="d" placeholder="Today's date">
            <input type="text" name="e" placeholder="pin_code">
            <input type="text" name="f" placeholder="Age">
            <input type="text" name="g" placeholder="Breed">
            <input type="text" name="h" placeholder="Address">
            <input type="text" name="i" placeholder="Gender">        
        </div>
        <h3>Delivery Method</h3>
        <div class="metod">       
            <div>
                <input type="radio" value="none" id="radioTwo" name="j" />
                <label for="radioTwo" class="radio">For delivery</label>
            </div>
        </div>
        <!-- Add name attribute to the submit button -->
        <button type="submit" name="submit" class="button">Submit</button>
    </form>
</div>

 


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>
