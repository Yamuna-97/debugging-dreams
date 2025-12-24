<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Debugging Dreams</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8; /* Light blue-gray background */
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #2c3e50; /* Dark blue */
            color: #ecf0f1; /* Light gray */
            padding: 30px 0;
            text-align: center;
        }

        header h1 {
            font-size: 2.5rem;
            margin: 0;
            font-family: 'Georgia', serif;
        }

        nav {
            background-color: #34495e; /* Slightly lighter blue */
            padding: 10px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 20px;
        }

        nav ul li a {
            color: #ecf0f1; /* Light gray */
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem;
        }

        nav ul li a:hover {
            color: #f39c12; /* Orange on hover */
        }

        section, article, aside {
            margin: 20px;
            padding: 20px;
            background-color: #ffffff; /* White */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .image-container {
            text-align: center;
            margin: 20px 0;
        }

        .btn-container {
            text-align: center;
            margin: 40px 0; /* Adds spacing before the button */
        }

        .explore-btn {
            background-color: #0057ff;
            color: white;
            font-size: 18px;
            font-weight: bold;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background 0.3s ease;
            border: none;
            cursor: pointer;
        }
        table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    border: 2px solid #2c3e50; /* Dark blue border */
}

th, td {
    padding: 12px;
    text-align: left;
    border: 1px solid #2c3e50; /* Border for cells */
}

th {
    background-color: #2c3e50; /* Dark blue */
    color: #ffffff; /* White text */
}

tr:nth-child(even) {
    background-color: #f2f2f2; /* Light gray for even rows */
}
.row-container {
    display: flex;
    justify-content: space-between;
    gap: 20px; /* Adds space between sections */
}

.latest-articles, .related-links, #table {
    flex: 1; /* Makes all sections equal width */
    min-width: 300px; /* Prevents them from shrinking too much */
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 12px;
    text-align: left;
    border: 1px solid #2c3e50;
}

th {
    background-color: #2c3e50;
    color: #ffffff;
}


tr:hover {
    background-color: #dcdde1; /* Light highlight on hover */
}

        .explore-btn:hover {
            background-color: #0040cc;
        }

        .explore-btn i {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Debugging Dreams</h1>
        <p>Exploring the intersection of AI, technology, and human imagination.</p>
    </header>

    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#articles">Articles</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
        </ul>
    </nav>

    <section id="home">
        <h2>Welcome to Debugging Dreams</h2>
        <p>Discover how AI and technology are shaping our dreams and creativity.</p>
        <div class="image-container">
            <img src="i2.jpeg" alt="AI and Dreams">
        </div>
    </section>

    <section id="about">
        <h2>About</h2>
        <p>This website delves into the fascinating world of AI and its impact on our dreams and creative processes. As technology continues to evolve, artificial intelligence is playing an increasingly significant role in shaping human imagination, enhancing creativity, and even influencing the way we perceive and interpret our dreams. From AI-generated art and music to machine learning models that analyze dream patterns, we explore how these advancements are redefining the boundaries between technology and human expression. Whether you’re an AI enthusiast, a dream researcher, or simply curious about the intersection of technology and creativity, "Debugging Dreams" offers insights, discussions, and discoveries that bridge the gap between the artificial and the imaginative.</p>
        <div class="image-container">
            <img src="images.jpeg" alt="AI Creativity">
        </div>
    </section>

    <div class="row-container">
        <section class="latest-articles">
            <h2>Latest Articles</h2>
            <ul>
                <li>AI and Dream Analysis</li>
                <li>The Role of Technology in Creativity</li>
                <li>Future of AI in Mental Health</li>
            </ul>
            <div class="image-container">
                <img src="d2.jpeg" alt="AI Technologies">
            </div>
        </section>
    
        <section class="related-links">
            <h2>Related Links</h2>
            <ol>
                <li>AI Research</li>
                <li>Tech Innovations</li>
                <li>Dream Studies</li>
            </ol>

            <div class="image-container">
                <img src="d4.jpeg" alt="AI Technologies">
            </div>
        </section>
    
        <section id="table">
            <h2>AI Technologies</h2>
            <table>
                <tr>
                    <th>Technology</th>
                    <th>Application</th>
                </tr>
                <tr>
                    <td>Neural Networks</td>
                    <td>Pattern Recognition</td>
                </tr>
                <tr>
                    <td>Natural Language Processing</td>
                    <td>Language Understanding</td>
                </tr>
                <tr>
                    <td>Computer Vision</td>
                    <td>Image Analysis</td>
                </tr>
            </table>
        </section>
    </div>
    

    <!-- Explore More Button -->
    <div class="btn-container">
        <a href="explore.php" class="explore-btn">
            EXPLORE MORE <i class="fa-solid fa-angles-right"></i>
        </a>
    </div>

    <script src="https://kit.fontawesome.com/YOUR_FONT_AWESOME_KIT.js" crossorigin="anonymous"></script>

</body>
</html>
