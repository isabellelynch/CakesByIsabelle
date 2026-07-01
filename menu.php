<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu — Rosewood Bakery</title>
<link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<?php require_once 'include/nav.php'; ?>

<section class="section">
  <div class="container">
    <span class="eyebrow">Our menu</span>
    <h1>Every cake, made for you.</h1>
    <p>All cakes are baked to order.</p>
    <hr class="divider">

    <div class="filter-bar">
      <button class="active" data-filter="all">All cakes</button>
      <button data-filter="classic">Classic</button>
      <button data-filter="chocolate">Chocolate</button>
      <button data-filter="best">BestSeller</button>
    </div>
  </div>
</section>

<section class="section cake-cards-section">
  <div class="container">
    <div class="cake-grid">

      <div class="cake-card-wrap">
        <div data-category="classic best">
          <img src="images/vanilla.jpg" alt="Victoria Sponge cake" class="cake-card-img">
          <div class="cake-card-body">
            <h3>Victoria Sponge</h3>
            <p>Vanilla sponge with vanilla buttercream.</p>
            <div class="cake-card-tags"><span class="tag">Classic</span><span class="tag">Bestseller</span></div>
          </div>
        </div>
      </div>

      <div class="cake-card-wrap">
        <div data-category="chocolate">
          <img src="images/choc.webp" alt="Triple Chocolate Fudge" class="cake-card-img">
          <div class="cake-card-body">
            <h3>Triple Chocolate Fudge</h3>
            <p>Belgian chocolate sponge with chocolate ganache.</p>
            <div class="cake-card-tags"><span class="tag">Chocolate</span></div>
          </div>
        </div>
      </div>

      <div class="cake-card-wrap">
        <div data-category="best">
          <img src="images/red.webp" alt="Red Velvet cake" class="cake-card-img">
          <div class="cake-card-body">
            <h3>Red Velvet</h3>
            <p>Vibrant red sponge with cream cheese frosting.</p>
            <div class="cake-card-tags"><span class="tag">BestSeller</span></div>
          </div>
        </div>
      </div>

      <div class="cake-card-wrap">
        <div data-category="best">
          <img src="images/biscoff.webp" alt="Biscoff cake" class="cake-card-img">
          <div class="cake-card-body">
            <h3>Biscoff</h3>
            <p>White chocolate sponge with Biscoff buttercream.</p>
            <div class="cake-card-tags"><span class="tag">BestSeller</span></div>
          </div>
        </div>
      </div>

      <div class="cake-card-wrap">
        <div data-category="chocolate best">
          <img src="images/kinder.webp" alt="Kinder Bueno cake" class="cake-card-img">
          <div class="cake-card-body">
            <h3>Kinder Bueno</h3>
            <p>Milk chocolate sponge with a white hazelnut cream filling.</p>
            <div class="cake-card-tags"><span class="tag">BestSeller</span><span class="tag">Chocolate</span></div>
          </div>
        </div>
      </div>

      <div class="cake-card-wrap">
        <div data-category="classic">
          <img src="images/lemon.webp" alt="Lemon drizzle cake" class="cake-card-img">
          <div class="cake-card-body">
            <h3>Lemon Drizzle</h3>
            <p>Tangy lemon sponge with lemon curd buttercream.</p>
            <div class="cake-card-tags"><span class="tag">Classic</span></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="section section--tinted" style="text-align:center">
  <div class="container">
    <h2>Don't see what you're after?</h2>
    <p>We take fully custom orders — tell us your idea and we'll make it happen.</p>
    <a class="btn btn--primary" href="contact.html">Get in touch</a>
  </div>
</section>

<?php require_once 'include/footer.php'; ?>

<script src="js/main.js"></script>
</body>
</html>
