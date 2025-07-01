<?php
// index.php

// 1. Load Composer’s autoloader (and with it, your JCI SDK)
//    Make sure you ran `composer install` so that vendor/autoload.php exists.
require __DIR__ . '/vendor/autoload.php';

// 2. (Optional) Instantiate your JCI client here:
// use JCI\Client;
// $jci = new Client([ /* config */ ]);
// $result = $jci->someMethod();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CulinaryMasters - Premium Recipe Collection & Custom Orders</title>
    <style>
        /* … all of your existing CSS exactly as before … */
    </style>
</head>
<body>
    <header>
        <nav class="container">
            <div class="logo">CulinaryMasters</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#custom-order">Custom Order</a></li>
                <li><a href="#recipes">Recipes</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Premium Recipe Collection</h1>
                <p>Discover authentic flavors from around the world, crafted by master chefs</p>
                <a href="#custom-order" class="cta-button">Order Your Custom Recipe FREE</a>
            </div>
        </div>
    </section>

    <section id="custom-order" class="custom-order">
        <div class="container">
            <div class="custom-order-content">
                <h2>🎯 Custom Recipe Service</h2>
                <p>Can't find your favorite recipe? No problem! Tell us what you're craving and we'll create a personalized recipe just for you - delivered within 24 hours, completely FREE!</p>
                
                <form class="order-form" method="POST" action="">
                    <div class="form-group">
                        <label for="recipe-name">What Recipe Do You Want?</label>
                        <input type="text" id="recipe-name" name="recipe_name" placeholder="e.g., Grandma's Apple Pie, Spicy Thai Curry..." required>
                    </div>
                    
                    <div class="form-group">
                        <label for="dietary">Any Dietary Preferences?</label>
                        <input type="text" id="dietary" name="dietary" placeholder="Vegetarian, Gluten-free, Low-carb, etc.">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" placeholder="your@email.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="details">Additional Details</label>
                        <textarea id="details" name="details" rows="3" placeholder="Tell us more about what you're looking for..."></textarea>
                    </div>
                    
                    <button type="submit" class="cta-button">Get My FREE Custom Recipe</button>
                </form>
            </div>
        </div>
    </section>

    <section id="recipes" class="recipes">
        <div class="container">
            <h2 class="section-title">Featured Recipes</h2>
            <div class="recipe-grid">
                <!-- recipe cards… -->
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews">
        <div class="container">
            <h2 class="section-title" style="color: white;">What Our Customers Say</h2>
            <div class="reviews-grid">
                <!-- review cards… -->
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">About CulinaryMasters</h2>
            <div class="about-content">
                <!-- about content… -->
            </div>
        </div>
    </section>

    <section id="vision" class="vision">
        <div class="container">
            <h2 class="section-title" style="color: white;">Our Vision</h2>
            <div class="vision-content">
                <!-- vision content… -->
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <!-- contact info… -->
                </div>
                <form class="contact-form" method="POST" action="">
                    <!-- contact form fields… -->
                    <button type="submit" class="cta-button">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 CulinaryMasters. All rights reserved. | Privacy Policy | Terms of Service</p>
            <p>Bringing the world's flavors to your kitchen, one recipe at a time.</p>
        </div>
    </footer>

    <!-- Recipe Modal markup… -->

    <script>
        // Your existing JS: openRecipeModal, closeRecipeModal, smooth scroll, form handlers…

        // Scroll effect for header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            header.style.background = window.scrollY > 50
                ? 'rgba(26,14,8,0.9)'
                : '';
        });
    </script>
</body>
</html>
