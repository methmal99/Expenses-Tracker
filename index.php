<!DOCTYPE HTML>
<html>

<head>
    <title>Homepage</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>

    <!-- Header -->
    <header id="header" class="alt">
        <a href="#menu" class="toggle"><span>Menu</span></a>
    </header>

    <!-- Nav -->
    <nav id="menu">
        <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="help.php">Help</a></li>
        </ul>
    </nav>

    <section id="banner" data-video="images/banner">
        <div class="inner">
            <h1>Expenses Tracker</h1>
            <p>A full responsive website<br /> built for you <br> <a href="">To Track your Expenses</a> and to lead a <br> <a href="https://templated.co/license">Productive and Happy</a> life.</p>
            <a href="#one" class="button special scrolly">Get Started</a>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="wrapper style2">
        <div class="inner">
            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="/images/pic01.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2>SIGN UP AND SIGN IN</h2>
                            <p>You must Sign Up if you are a new user. If you are already signed up, Sign In</p>
                        </header>
                        <hr />
                        <center>
                            <input type="button" class="button" value="SIGN UP" onclick="window.location.href='signup.php'" />
                            <input type="button" class="button" value="SIGN IN" onclick="window.location.href='signin.php'" />
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper style3">
        <div class="inner">
            <div id="flexgrid">
                <div>
                    <header>
                        <h3>Hey There!</h3>
                    </header>
                    <p>How far does the budget management is important for us? </p>
                    <ul class="actions">
                        <li><a href="https://www.mymoneycoach.ca/budgeting/what-is-a-budget-planning-forecasting" class="button alt">Learn More</a></li>
                    </ul>
                </div>
                <div>
                    <p> An expenditure plan, also known as a spending plan, is a strategic tool that a small business can use to manage money. The expenditure plan helps in tracking the amount of income or revenue available, and in making decisions on how
                        to use this income and also to save some.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Three -->
    <section id="three" class="wrapper style2">
        <div class="inner">
            <div class="grid-style">

                <div>
                    <div class="box">
                        <div class="image fit">
                            <img src="images/pic02.jpg" alt="" />
                        </div>
                        <div class="content">
                            <header class="align-center">
                                <h2>Tip for the Day (1)</h2>
                                <p>USE A PERSONAL FINANCE ADVISOR</p>
                            </header>
                            <hr />
                            <p>Having a personal financial advisor is essential if you’re looking at investments or are wondering about your future. Depending on your needs, the right financial advisor can help you to manage even the most complicated of
                                situations and is very well-placed to help you make long-term targets. The right financial advisor will start with a fact-finding check that will cover the full scope of your situation and give them a greater insight into
                                your potential financial growth. There are a variety of financial advisor types, and finding the one that best suits your situation is the first step to a better, more stable future. Look for specialists in your area of
                                interest, and browse a dedicated portal like Buffert (Buffert.se) so that you are better able to take advantage of a dedicated level of experience and insider insights. Those insights will not only mean that you gain access
                                to better advice but also give your finances an extra layer of added protection as well.</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="box">
                        <div class="image fit">
                            <img src="images/pic03.jpg" alt="" />
                        </div>
                        <div class="content">
                            <header class="align-center">
                                <h2>Tip for the Day (2)</h2>
                                <p>RECORD YOUR EXPENDITURES</p>
                            </header>
                            <hr />
                            <p>It may sound almost redundant in the days of online banking and mobile phone consumerism, but making a note of what and where you are spending your money can be hugely beneficial. Being able to see just where you’re spending
                                your money (and the amounts) will go a long way to giving you a much greater insight into your monthly budget. Budgeting needn’t be a complicated process, and it doesn’t have to mean denying yourself treats either. It’s
                                more a case of simply knowing how much money you have coming in, and how much is going out. It sounds basic perhaps, but far too many people have higher outgoings than income, and that’s where the problems start. Look at
                                your list of purchases over the last month and see if there are any regular buys which are simply not necessary, and make adjustments to ensure that your money coming in is not overshadowed by the money that then goes out
                                over the course of the month.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Four -->
    <section id="four" class="wrapper style3">
        <div class="inner">

            <header class="align-center">
                <h2>Money is the thing what we need</h2>
                <p>It is also seen in our society that if the person has got money with him every person of the society starts following him, praise him and somehow wanted to be like him without knowing no what his behaviour is with public or other people.
                    <br> Well things are not limited to this only everything that person has done in the past like any wrong thing will be forgotten up by the people easily, even it was one the worst things he has done.

                </p>
            </header>

        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="wrapper">
        <div class="inner">
            <section>
                <div class="box">
                    <div class="content">
                        <h2 class="align-center">Get in Touch</h2>
                        <hr />
                        <form action="feedback.php" method="post">
                            <div class="field half first">
                                <label for="name">Name</label>
                                <input name="name" id="name" type="text" placeholder="Name">
                            </div>
                            <div class="field half">
                                <label for="email">Email</label>
                                <input name="email" id="email" type="email" placeholder="Email">
                            </div>
                            <div class="field">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
                            </div>
                            <ul class="actions align-center">
                                <li><input value="Send Message" class="button special" type="submit"></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>