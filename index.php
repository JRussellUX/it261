<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portal Page</title>
    <link href="css/styles.css" type="text/css"
    rel="stylesheet">
</head>
<body>
    <header>
        <h1>Welcome to Jennifer's Portal Page</h1>
    </header>
    <div id="wrapper">
        <nav>
            <ul>
            <li><a href="">Switch</a></li>
            <li><a href="">Troubleshoot</a></li>
            <li><a href="">Calculator</a></li>
            <li><a href="">Email</a></li>
            <li><a href="">Database</a></li>
            <li><a href="">Gallery</a></li>
            </ul>
        </nav>
        <div class="main_indent">
            <main>
                <h2>About Jennifer</h2>
            
                <p>I am a mother to a daughter who just entered middle school.
                    I also have two bunnies that are a handful, and a dog who is
                    the best dog ever! I worked in healthcare for eleven years
                    and realized during the pandemic I needed to switch careers for my daughters health.
                    After deciding web design was the path I wanted to take, I joined an
                    online bootcamp and enjoyed every second. I've worked as a freelancer ever since.
                    Now I am excited to work towards my degree in a feild I enjoy so much!
                    Outside of school and work, I enjoy playing video games, hiking, and baking with my daughter.
                </p>

                <img src="images/MAMP.png" alt="MAMP">
                <img src="images/PHPerror.png" alt="PHPerror">
            

            </main>
        </div>

            <aside>
                <img id="profile" src="images/Jennifer.jpeg" alt="Jennifer">
                <div class="box">
                    <h2 class="fill">Weekly Class Exercises</h2>
                    <div class="indent">
                        <h3>Week 2</h3>
                        <ul>
                            <li><a href="weeks/week2/var.php">var.php</a>
                            <li><a href="weeks/week2/vars2.php">var2.php</a>
                            <li><a href="weeks/week2/currency-logic.php">Currency-Logic</a>
                            <li><a href="weeks/week2/currency.php">Currency</a>
                        </ul>
                    </div>
                </div>
            </aside>
        
        
    </div>
    <footer>
        <ul>
        <li>Copyright &copy;
            2023</li>
        <li>All Rights Reserved</li>
        <li><a href="../index.php">Web Design by Jennifer</a></li>
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>
        
        <script>
                document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>
    </footer>
    
</body>
</html>