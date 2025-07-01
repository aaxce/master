<?php
// ==== HANDLE CUSTOM RECIPE FORM SUBMISSION ====
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['custom_recipe_submit'])) {
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $details = htmlspecialchars(trim($_POST['details']));
    if ($name && $email && $details) {
        $to      = 'you@yourdomain.com';         // ← change to your address
        $subject = 'New Custom Recipe Request';
        $message = "Name: $name\nEmail: $email\nDetails: $details\nRequested on: " . date('d-m-Y H:i:s');
        $headers = "From: no-reply@yourdomain.com\r\nReply-To: $email\r\n";
        mail($to, $subject, $message, $headers);
        $success = "Thank you, $name! Your custom recipe request has been sent. We'll email you within 24 hours.";
    } else {
        $error = "Please fill out all fields correctly.";
    }
}

// ==== JCI CODE HERE ====
// <script src="…your JCI snippet…"></script>
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recipe Haven • Free Custom Recipes</title>
  <style>
    :root {
      --primary: #c0392b;
      --accent:  #f39c12;
      --bg:      #fdfdfd;
      --text:    #2c3e50;
    }
    * { margin:0; padding:0; box-sizing:border-box; }
    body { font-family:Arial,sans-serif; color:var(--text); background:var(--bg); }
    header { background:var(--primary); padding:20px; display:flex; align-items:center; justify-content:space-between; }
    header .logo { color:#fff; font-size:1.8rem; font-weight:bold; }
    header nav a { color:#fff; margin-left:15px; text-decoration:none; font-weight:500; }
    .hero { height:300px; background:url('https://source.unsplash.com/1200x300/?restaurant')center/cover; display:flex; align-items:center; justify-content:center; color:#fff; text-shadow:0 0 5px rgba(0,0,0,0.5); }
    .hero h1 { font-size:2.5rem; }
    section { padding:60px 80px; }
    h2 { margin-bottom:20px; color:var(--primary); }
    .grid { display:grid; grid-template-columns:repeat(4,1fr); gap:20px; }
    .card { background:#fff; border:1px solid #eee; border-radius:8px; overflow:hidden; box-shadow:0 2px 5px rgba(0,0,0,0.1); }
    .card img { width:100%; height:150px; object-fit:cover; }
    .card-content { padding:15px; }
    .card-content h3 { margin-bottom:10px; font-size:1.1rem; }
    .card-content p { font-size:0.9rem; margin-bottom:15px; color:#555; }
    .btn { display:inline-block; background:var(--accent); color:#fff; padding:8px 12px; border-radius:4px; text-decoration:none; font-size:0.9rem; }
    #reviews .review { margin-bottom:20px; }
    .review p { font-style:italic; color:#555; margin-bottom:5px; }
    .review span { font-weight:bold; }
    form input, form textarea { width:100%; padding:10px; margin-bottom:15px; border:1px solid #ccc; border-radius:4px; }
    form button { background:var(--primary); color:#fff; padding:10px 20px; border:none; border-radius:4px; cursor:pointer; }
    .message { padding:10px; margin-bottom:20px; border-radius:4px; }
    .success { background:#dff0d8; color:#3c763d; }
    .error   { background:#f2dede; color:#a94442; }
    footer { background:#333; color:#fff; text-align:center; padding:20px; font-size:0.9rem; }
    @media(max-width:1024px){
      .grid { grid-template-columns:repeat(2,1fr); }
      section { padding:40px 20px; }
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">Recipe Haven</div>
    <nav>
      <a href="#recipes">Recipes</a>
      <a href="#reviews">Reviews</a>
      <a href="#about">About Us</a>
      <a href="#vision">Our Vision</a>
      <a href="#contact">Contact</a>
      <a href="#order">Custom Recipe</a>
      <a href="#disclaimer">Disclaimer</a>
      <a href="#privacy">Privacy</a>
    </nav>
  </header>

  <div class="hero">
    <h1>Delicious Recipes, Just a Click Away</h1>
  </div>

  <!-- Featured Recipes -->
  <section id="recipes">
    <h2>Featured Recipes</h2>
    <div class="grid">
      <?php for($i=1; $i<=8; $i++): ?>
      <div class="card">
        <img src="https://source.unsplash.com/400x300/?food&sig=<?= $i ?>" alt="Recipe <?= $i ?>">
        <div class="card-content">
          <h3>Recipe Title <?= $i ?></h3>
          <p>A quick, tasty dish ready in under 30 minutes.</p>
          <a href="#order" class="btn">Get Custom Version</a>
        </div>
      </div>
      <?php endfor; ?>
    </div>
  </section>

  <!-- User Reviews -->
  <section id="reviews">
    <h2>User Reviews</h2>
    <div class="review">
      <p>"Absolutely loved the custom recipe they sent me!"</p>
      <span>— Priya K.</span>
    </div>
    <div class="review">
      <p>"Quick, easy, and delicious. The 24-hr promise is real."</p>
      <span>— Mark T.</span>
    </div>
    <div class="review">
      <p>"My friends thought I hired a chef. Thanks, Recipe Haven!"</p>
      <span>— Elena R.</span>
    </div>
  </section>

  <!-- About Us -->
  <section id="about">
    <h2>About Us</h2>
    <p>At Recipe Haven, we believe everyone deserves restaurant-quality food at home. Our chefs craft custom recipes tailored to your taste—free, in just 24 hours.</p>
  </section>

  <!-- Our Vision -->
  <section id="vision">
    <h2>Our Vision</h2>
    <p>To make gourmet cooking accessible to all, one personalized recipe at a time.</p>
  </section>

  <!-- Contact Us -->
  <section id="contact">
    <h2>Contact Us</h2>
    <p>Email: contact@yourdomain.com<br>Phone: +1 (555) 123-4567</p>
  </section>

  <!-- Custom Recipe Order -->
  <section id="order">
    <h2>Request Your Custom Recipe (FREE)</h2>
    <?php if(!empty($success)): ?>
      <div class="message success"><?= $success ?></div>
    <?php elseif(!empty($error)): ?>
      <div class="message error"><?= $error ?></div>
    <?php endif; ?>
    <form method="POST" action="#order">
      <input type="text"   name="name"    placeholder="Your Name"           required>
      <input type="email"  name="email"   placeholder="Your Email"          required>
      <textarea name="details" rows="5" placeholder="Describe what you’d like…" required></textarea>
      <button type="submit" name="custom_recipe_submit">Send My Free Recipe</button>
    </form>
  </section>

  <!-- Disclaimer -->
  <section id="disclaimer">
    <h2>Disclaimer</h2>
    <p>We do <strong>not</strong> charge any money. All recipes and custom services are completely free.</p>
  </section>

  <!-- Privacy Policy -->
  <section id="privacy">
    <h2>Privacy Policy</h2>
    <p>Your privacy is important to us. We will never share or sell your personal data. We use your email only to deliver your requested recipes.</p>
  </section>

  <footer>
    &copy; <?= date('Y') ?> Recipe Haven. All rights reserved.
  </footer>

</body>
</html>
