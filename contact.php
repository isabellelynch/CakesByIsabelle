<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact — Rosewood Bakery</title>
<link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<?php require_once 'include/nav.php'; ?>

<section class="section">
  <div class="container">
    <span class="eyebrow">Get in touch</span>
    <h1>We'd love to hear from you.</h1>
    <hr class="divider">

    <div class="contact-grid">
      <!-- Form -->
      <div>
        <form data-contact-form>
          <div class="field">
            <label for="name">Your name</label>
            <input type="text" id="name" name="name" placeholder="Jane Smith" required>
          </div>
          <div class="field">
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" placeholder="jane@email.com" required>
          </div>
          <div class="field">
            <label for="subject">What's this about?</label>
            <select id="subject" name="subject">
              <option value="">Select…</option>
              <option>Custom order enquiry</option>
              <option>Wedding cake consultation</option>
              <option>Delivery question</option>
              <option>Dietary requirements</option>
              <option>Something else</option>
            </select>
          </div>
          <div class="field">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Tell us what you need…" required></textarea>
          </div>
          <button type="submit" class="btn btn--primary">Send message</button>
          <p data-form-status style="margin-top:1rem; color:var(--rose); font-weight:500;"></p>
        </form>
      </div>

      <!-- Contact info + FAQ -->
      <div>
        <h3>Contact details</h3>
        <div class="contact-info">
          <p>Send us an email: <a href="mailto:isabellemarielynch@gmail.com">info@cakesbyisabelle.ie</a></p>
          <p>DM us on Instagram: <a href="https://www.instagram.com/cakes_byisabelle/">@cakes_byisabelle</a></p>
        </div>

        <div style="margin-top:2.5rem">
          <h3>Common questions</h3>
          <div style="margin-top:1rem; display:flex; flex-direction:column; gap:1.2rem;">
            <div>
              <strong>How far in advance should I order?</strong>
              <p>Standard cakes need at least 3 days. Wedding and tiered cakes need 1-2 weeks.</p>
            </div>
            <div>
              <strong>Do you deliver?</strong>
              <p>Yes - across Kerry. Delivery charges depend on your location. Collection from Kerry is free.</p>
            </div>
            <div>
              <strong>Can you accommodate allergies?</strong>
              <p>Gluten-free and dairy-free options are available for most cakes. Tell us in your message and we'll advise.</p>
            </div>
            <div>
              <strong>Can I request a custom design?</strong>
              <p>Absolutely - that's most of what we do. Send us a photo or idea and we'll work from it.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once 'include/footer.php'; ?>

<script src="js/main.js"></script>
</body>
</html>
