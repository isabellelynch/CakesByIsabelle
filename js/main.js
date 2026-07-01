document.addEventListener("DOMContentLoaded", () => {

  // ── Active nav link ──────────────────────────────────────
  const current = location.pathname.split("/").pop() || "index.html";
  document.querySelectorAll(".nav__links a").forEach((a) => {
    if (a.getAttribute("href") === current) a.classList.add("active");
  });

  // ── Menu filter bar ──────────────────────────────────────
 const filterBtns = document.querySelectorAll(".filter-btn");
const cakeCards  = document.querySelectorAll(".cake-card[data-category]");

filterBtns.forEach((btn) => {
  btn.addEventListener("click", () => {

    filterBtns.forEach((b) => b.classList.remove("active"));
    btn.classList.add("active");

    const cat = btn.dataset.filter;

    cakeCards.forEach((card) => {
      const wrapper = card.closest(".cake-card-wrap");

      if (cat === "all" || card.dataset.category === cat || card.dataset.category.split(" ").includes(cat)) {
        wrapper.classList.remove("hidden");
      } else {
        wrapper.classList.add("hidden");
      }
    });

  });
});

  // ── Order configurator ───────────────────────────────────
  const BASE = 0;
  const prices = { size: { "mini": 40, "r-small": 100, "t-small":110, "r-large":125, "t-large":140, "tiered": 200 },
                   flavour: { "vanilla": 0, "chocolate": 0, "lemon": 5, "kinder": 5, "biscoff": 5, "redvelvet": 8, "rockyroad": 10 },
                   extras: { "none": 0, "birthday": 5, "wedding": 15, "heart": 5, "custom": 10 } };

  const selected = { size: null, flavour: null, extras: null };

  function updatePrice() {
    const total = Object.keys(selected).reduce((acc, key) => {
      return acc + (selected[key] ? prices[key][selected[key]] : 0);
    }, BASE);
    const el = document.querySelector("[data-price]");
    if (el) el.textContent = total > 0 ? `€${total}` : "€—";
  }

  // config step tabs
  document.querySelectorAll(".config-step-btn").forEach((btn) => {
    btn.addEventListener("click", () => {
      document.querySelectorAll(".config-step-btn").forEach((b) => b.classList.remove("active"));
      document.querySelectorAll(".config-panel").forEach((p) => p.classList.remove("active"));
      btn.classList.add("active");
      document.querySelector(`[data-panel="${btn.dataset.step}"]`).classList.add("active");
    });
  });

  // config option selection
  document.querySelectorAll(".config-option").forEach((opt) => {
    opt.addEventListener("click", () => {
      const group = opt.dataset.group;
      document.querySelectorAll(`.config-option[data-group="${group}"]`)
        .forEach((o) => o.classList.remove("selected"));
      opt.classList.add("selected");
      selected[group] = opt.dataset.value;
      updatePrice();
    });
  });

  // add to order
  const addBtn = document.querySelector("[data-add-order]");
  const msg    = document.querySelector("[data-order-msg]");
  if (addBtn) {
    addBtn.addEventListener("click", () => {
      if (!selected.size || !selected.flavour || !selected.extras) {
        if (msg) msg.textContent = "Please complete all three steps first.";
        return;
      }
      if (msg) msg.textContent = `Order added! A ${selected.flavour} ${selected.size} cake for ${selected.extras}. We'll be in touch to confirm.`;
    });
  }

  // contact form
  const contactForm = document.querySelector("[data-contact-form]");
  if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
      e.preventDefault();
      const s = contactForm.querySelector("[data-form-status]");
      if (s) s.textContent = "Message received — we'll reply within one business day.";
      contactForm.reset();
    });
  }
  

  // about page image carosel
  const images = [
  "images/cakes/1.jpg",
  "images/cakes/2.jpg",
  "images/cakes/3.jpg",
  "images/cakes/4.jpg",
  "images/cakes/5.jpg",
  "images/cakes/6.jpg"
];

let index = 0;
const sliderImage = document.getElementById("about-image");

setInterval(() => {
  sliderImage.style.opacity = 0;

  setTimeout(() => {
    index = (index + 1) % images.length;
    sliderImage.src = images[index];
    sliderImage.style.opacity = 1;
  }, 500);

}, 3000);

});

