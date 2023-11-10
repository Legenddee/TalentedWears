<!doctype html>
<html lang="en">

<head>
  <title>Talented Wears</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- google font link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=FontName">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/commentStyle.css">
</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><span>T</span>alented <span>W</span>ears</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0 navigations">
            <li class="nav-item">
              <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
  </header>
  <main>
    <?php include('./assets/sliders.php'); ?><br><br>
   <div class="best-collection">
    <div class="container">
        <div class="row"id="why-us">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h2>Elevate Your Lifestyle with Exquisite Textiles</h2>
                <p>
                Every aspect of our lives deserves a touch of luxury and refinement, and what better way to achieve this than through the exquisite world of textiles? Imagine enveloping yourself in the softest, most indulgent fabrics that not only elevate your comfort but also add a distinct touch of elegance to your everyday routine. Our carefully curated collection of textiles brings forth a symphony of colors, patterns, and textures that are meticulously crafted to offer you the ultimate in comfort and style.
                </p>
                <p>
                Wrap yourself in luxury with our exquisite collection of finely crafted textiles. Elevate your everyday with the softest fabrics, vibrant colors, and intricate designs that speak of comfort and style. Indulge in the elegance of our textiles and discover a world where quality meets sophistication. Experience the touch of perfection, tailored just for you.
                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                <div class="video-container">
                    <video controls>
                        <source src="./assets/videos/video04.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <?php
         include('./assets/bestCollection.php');
         include('./assets/lookBook.php');
         ?>
    </div>
    <?php include('./assets/whyShop.php'); ?>
    <div class="container">
        <div class="">
            <?php 
            include('./assets/newIn.php');
            include('./assets/comment.php');
            ?>
        </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>