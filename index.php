<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cakes By Isabelle - Handmade Cakes</title>
<link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
<?php require_once 'include/nav.php'; ?>
<!-- Hero -->
<section class="hero">
  <div class="hero__inner">
    <h1>Cakes made with <em>real love.</em></h1>
    <p>Handmade to order - birthdays, weddings and every occasion in between.</p>
    <div class="btn-row">
      <a class="btn btn--primary" href="order.html">Order your cake</a>
      <a class="btn btn--outline" href="menu.html">Browse the menu</a>
    </div>
  </div>
</section>

<!-- Featured cakes -->
<section class="section">
  <div class="container">
    <span class="eyebrow">Our favourites</span>
    <h2>A few things we're known for</h2>
    <hr class="divider">

    <div class="cake-grid">

      <div class="cake-card-wrap">
        <div class="cake-card">
          <img src="images/red.webp" alt="Description of image" class="cake-card-img">
          <div class="cake-card-body">
            <h3>Red Velvet</h3>
            <p>Vibrant red cake with a rich, moist texture and a hint of cocoa. Filled with cream cheese frosting.</p>
            <div class="cake-card-tags"><span class="tag">Modern</span><span class="tag">Indulgent</span></div>
          </div>
        </div>
      </div>

      <div class="cake-card-wrap">
        <div class="cake-card">
          <img src="images/vanilla.jpg" alt="Description of image" class="cake-card-img">
          <div class="cake-card-body">
            <h3>Classic Victoria Sponge</h3>
            <p>Light and airy vanilla layers, filled with a decadent vanilla buttercream. A timeless crowd-pleaser.</p>
            <div class="cake-card-tags"><span class="tag">Bestseller</span><span class="tag">Vanilla</span></div>
          </div>
        </div>
      </div>


      

      <div class="cake-card-wrap">
        <div class="cake-card">
          <img src="images/choc.webp" alt="Description of image" class="cake-card-img">
          <div class="cake-card-body">
            <h3>Dark Chocolate Ganache</h3>
            <p>Rich, moist Belgian chocolate cake, oozing full of decadent, silky, indulgent chocolate ganache.</p>
            <div class="cake-card-tags"><span class="tag">Chocolate</span><span class="tag">Indulgent</span></div>
          </div>
        </div>
      </div>


    </div>


    <div class="btn-row" style="margin-top:2.5rem">
      <a class="btn btn--outline-dark" href="menu.html">See full menu →</a>
    </div>
  </div>
</section>

<!-- How it works -->
<section class="section section--tinted">
  <div class="container">
    <span class="eyebrow">How it works</span>
    <h2 style="text-align:center; margin-bottom:3rem">From order to your door</h2>
    
    <div class="steps">
      <div>
        <div>1</div>
        <h3>Pick your cake</h3>
        <p>Choose size, flavour, and occasion using our easy order builder.</p>
      </div>
      <div>
        <div>2</div>
        <h3>We confirm with you</h3>
        <p>We'll reach out within 24 hours to confirm details and any personalisation.</p>
      </div>
      <div>
        <div>3</div>
        <h3>Delivered fresh</h3>
        <p>Your cake arrives chilled and beautifully boxed, ready to celebrate.</p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="section">
  <div class="container">
    <span class="eyebrow">Kind words</span>
    <h2>What customers say</h2>
    <hr class="divider">
    <div class="testimonials">
      <div class="testimonial">
        <div class="testimonial__stars">★★★★★</div>
        <p class="testimonial__text">"The most beautiful birthday cake I've ever seen — and it tasted even better than it looked."</p>
        <span class="testimonial__name">Sarah M., Dublin</span>
      </div>
      <div class="testimonial">
        <div class="testimonial__stars">★★★★★</div>
        <p class="testimonial__text">"Ordered our wedding cake and it was absolutely perfect. So many guests asked who made it."</p>
        <span class="testimonial__name">James & Aoife, Cork</span>
      </div>
      <div class="testimonial">
        <div class="testimonial__stars">★★★★★</div>
        <p class="testimonial__text">"The dark chocolate ganache is genuinely the best cake I've eaten. Will order again and again."</p>
        <span class="testimonial__name">Tom R., Galway</span>
      </div>
    </div>
  </div>
</section>

<!-- CTA strip -->
<section class="section section--tinted" style="text-align:center">
  <div class="container">
    <h2>Ready to order?</h2>
    <p style="max-width:42ch; margin: 0 auto 2rem;">Every cake is made to order. Place yours with at least 5 days' notice — or 2 weeks for wedding cakes.</p>
    <a class="btn btn--primary" href="order.html">Start your order</a>
  </div>
</section>

<?php require_once 'include/footer.php'; ?>

<script src="js/main.js"></script>
</body>
</html>
