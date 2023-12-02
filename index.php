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
            <li><a href="website/daily.php">Switch</a></li>
            <li><a href="adder.php">Troubleshoot</a></li>
            <li><a href="./weeks/week5/calculator.php">Calculator</a></li>
            <li><a href="website/contactf.php">Email</a></li>
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

                        <h3>Week 3</h3>
                        <ul>
                            <li><a href="weeks/week3/date.php">Date</a>
                            <li><a href="weeks/week3/for-each.php">For-Each</a>
                            <li><a href="weeks/week3/for-loop.php">For-Loop</a>
                            <li><a href="weeks/week3/if.php">If</a>
                            <li><a href="weeks/week3/index.php">Index</a>
                            <li><a href="weeks/week3/switch.php">Switch</a>
                        </ul>

                        <h3>Week 4</h3>
                        <ul>
                            <li><a href="weeks/week4/form1.php">Form 1</a>
                            <li><a href="weeks/week4/form2.php">Form 2</a>
                            <li><a href="weeks/week4/form3.php">Form 3</a>
                            <li><a href="weeks/week4/form-get.php">Form-Get</a>
                            <li><a href="weeks/week4/celsius.php">Celsius Form</a>
                            <li><a href="weeks/week4/arithmetic-form.php">Arithmetic Form</a>
                        </ul>

                        <h3>Week 5</h3>
                        <ul>
                            <li><a href="weeks/week5/currency1.php">Currency 1</a>
                            <li><a href="weeks/week5/currency2.php">Currency 2</a>
                            <li><a href="weeks/week5/currency3.php">Currency 3</a>
                            <li><a href="weeks/week5/null.php">Learn NULL</a>
                            <li><a href="weeks/week5/currency4.php">Currency 4/Extra Credit</a>
                        </ul>

                        <h3>Week 6</h3>
                        <ul>
                            <li><a href="weeks/week6/form.php">Form</a>
                            <li><a href="weeks/week6/form2.php">Form 2</a>
                            <li><a href="weeks/week6/functions.php">Functions</a>
                        </ul>

                        <h3>Week 7</h3>
                        <ul>
                            <li><a href="weeks/week7/form3.php">Form 3</a>
                            <li><a href="weeks/week7/pictures.php">Form 2</a>
                            <li><a href="weeks/week7/rand.php">Rand Function</a>
                            <li><a href="weeks/week7/strings.php">Strings</a>
                        </ul>

                        <h3>Week 8</h3>
                        <ul>
                            <li><a href="weeks/week8/people.php">People</a>
                            <li><a href="weeks/week8/people-view.php">People View</a>
                        </ul>

                        <h3>Week 9</h3>
                        <ul>
                            <li><a href="weeks/week9/register.php">Register</a>
                            <li><a href="weeks/week9/login.php">Login</a>
                            <li><a href="weeks/week9/index.php">Index Page</a>
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