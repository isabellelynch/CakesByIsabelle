<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order — Cakes By Isabelle</title>
<link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<?php require_once 'include/nav.php'; ?>

<section class="section" style="padding-bottom:0">
  <div class="container">
    <span class="eyebrow">Order your cake</span>
    <h1>Build your perfect cake.</h1>
    <p>Choose size, flavour and extras - we'll confirm your order within 24 hours.</p>
    <hr class="divider">
  </div>
</section>

<section class="section">
  <div class="container">

    <div class="configurator">

      <!-- Step tabs -->
      <div class="config-steps">
        <button class="config-step-btn active" data-step="size">1. Size</button>
        <button class="config-step-btn" data-step="flavour">2. Flavour</button>
        <button class="config-step-btn" data-step="extras">3. Extras</button>
      </div>

      <!-- Size panel -->
      <div class="config-panel active" data-panel="size">
        <h3>How big?</h3>
        <p>All cakes serve approximate numbers. Need something different? Just ask.</p>
        <div class="config-options">
          <button class="config-option" data-group="size" data-value="mini">
            <span class="config-option-label">Bento 4"</span>
            <span class="config-option-sub">Serves 2-4 · &euro;40</span>
          </button>
          <button class="config-option" data-group="size" data-value="r-small">
            <span class="config-option-label">6" Regular</span>
            <span class="config-option-sub">Serves 6-8 · &euro;100</span>
          </button>
          <button class="config-option" data-group="size" data-value="t-small">
            <span class="config-option-label">6" Tall</span>
            <span class="config-option-sub">Serves 10-12 · &euro;110</span>
          </button>
          <button class="config-option" data-group="size" data-value="r-large">
            <span class="config-option-label">8" Regular</span>
            <span class="config-option-sub">Serves 15-20 · &euro;125</span>
          </button>
          <button class="config-option" data-group="size" data-value="t-large">
            <span class="config-option-label">8" Tall</span>
            <span class="config-option-sub">Serves 30+ · &euro;140</span>
          </button>
          <button class="config-option" data-group="size" data-value="tiered">
            <span class="config-option-label">2 Tiers</span>
            <span class="config-option-sub">Serves 40+ · &euro;200+</span>
          </button>
        </div>
      </div>

      <!-- Flavour panel -->
      <div class="config-panel" data-panel="flavour">
        <h3>Which flavour?</h3>
        <p>Some flavours carry a small additional charge.</p>
        <div class="config-options">
          <button class="config-option" data-group="flavour" data-value="vanilla">
            <span class="config-option-label">Vanilla</span>
          </button>
          <button class="config-option" data-group="flavour" data-value="chocolate">
            <span class="config-option-label">Chocolate Fudge</span>
          </button>
          <button class="config-option" data-group="flavour" data-value="lemon">
            <span class="config-option-label">Lemon</span>
            <span class="config-option-sub">+&euro;5</span>
          </button>
          <button class="config-option" data-group="flavour" data-value="kinder">
            <span class="config-option-label">Kinder Bueno</span>
            <span class="config-option-sub">+&euro;5</span>
          </button>
          <button class="config-option" data-group="flavour" data-value="biscoff">
            <span class="config-option-label">Biscoff</span>
            <span class="config-option-sub">+&euro;5</span>
          </button>
          <button class="config-option" data-group="flavour" data-value="redvelvet">
            <span class="config-option-label">Red Velvet</span>
            <span class="config-option-sub">+&euro;8</span>
          </button>
          <button class="config-option" data-group="flavour" data-value="rockyroad">
            <span class="config-option-label">Rocky Road</span>
            <span class="config-option-sub">+&euro;5-15</span>
          </button>
        </div>
      </div>

      <!-- Extras panel -->
      <div class="config-panel" data-panel="extras">
        <h3>Anything Extra?</h3>
        <p>Each cake will be priced individually based on your selections.</p>
        <div class="config-options">
          <button class="config-option" data-group="extras" data-value="none">
            <span class="config-option-label">Nothing Extra!</span>
            <span class="config-option-sub">Plain finish · no extra</span>
          </button>
          <button class="config-option" data-group="extras" data-value="birthday">
            <span class="config-option-label">Basic Birthday</span>
            <span class="config-option-sub">Candles & decor · +&euro;5</span>
          </button>
          <button class="config-option" data-group="extras" data-value="wedding">
            <span class="config-option-label">Vintage Wedding</span>
            <span class="config-option-sub">Vintage piping · +&euro;15</span>
          </button>
          <button class="config-option" data-group="extras" data-value="heart">
            <span class="config-option-label">Heart Cake</span>
            <span class="config-option-sub">Heart shape · +&euro;5</span>
          </button>
          <button class="config-option" data-group="extras" data-value="custom">
            <span class="config-option-label">Custom</span>
            <span class="config-option-sub">Tell us your idea · +&euro;10 or more</span>
          </button>
        </div>
      </div>

      <!-- Price footer -->
      <div class="config-footer">
        <div>
          <div class="config-price" data-price>&euro;—</div>
          <small>Estimated total · delivery extra</small>
        </div>
        <button class="btn btn--primary" data-add-order>Place order →</button>
      </div>

    </div>

    <p data-order-msg class="order-msg"></p>

    <div class="order-warning-info">
      <h3>Before you order</h3>
      <p>Please place orders at least <strong>3 days</strong> in advance (1-2 weeks for wedding and tiered cakes). 
        After submitting, we'll email you within 24 hours to confirm flavour details, delivery date, and address. 
        Allergies or dietary needs? Add a note on the contact page and we'll accommodate where possible.</p>
    </div>
  </div>
</section>

<?php require_once 'include/footer.php'; ?>

<script src="js/main.js"></script>
</body>
</html>
