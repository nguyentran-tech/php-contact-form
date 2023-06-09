<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/solid.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <section class="container">
        <div class="content">
            <h1>CONTACT US</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores distinctio delectus aut, perferendis nobis ab voluptates optio, dolores iure non porro? Non pariatur qui quasi sapiente mollitia illum quibusdam ipsa deserunt, distinctio consectetur, dolorem quisquam voluptatibus libero iusto asperiores perferendis.</p>
        </div>

        <div class="contact">
            <div class="contact-info">
                <div class="box">
                    <div class="icon"><i class="fas fa-map-location-dot"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Ho Chi Minh City, <br> Vietnam</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fas fa-phone"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+84 987654321</p>
                    </div>
                    
                </div>

                <div class="box">
                    <div class="icon"><i class="fas fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>buildproject@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="form">
                <form action="connect.php" method="POST" class="contact-form">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <span for="user">Your name</span>
                        <input type="text" name="name" id="name" placeholder="Enter your name" required>
                    </div>

                    <div class="inputBox">
                        <span for="email">Your email</span>
                        <input type="email" name="email" id="email" placeholder="Enter your email" required>
                    </div>

                    <div class="inputBox">
                        <span for="phone">Your phone</span>
                        <input type="text" name="phone" id="phone" placeholder="Enter your phone" required>
                    </div>

                    <div class="inputBox">
                        <span for="message">Your message</span>
                        <textarea type="text" name="message" id="message" placeholder="Enter your message" required></textarea>
                    </div>

                    <div class="inputBox">
                        <input type="submit" name="submit" id="submit" value="Send">
                    </div>
                </form>
                <?php 
                session_start();

                if(isset($_SESSION['status'])) {
                    echo $_SESSION['status'];
                    unset($_SESSION['status']);
                }

                ?>
            </div>
        </div>
    </section>
</body>
</html>