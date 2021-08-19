<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width:1236px)" href="css/phone.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div id="loader"></div>
    <nav id="navbar" class="h-nav">
        <img id="logo" src="images/logo.jpg" alt="logo">
        <ul id="nav-list" class="v-nav">
            <li class="list-item"><a href="#">Home</a></li>
            <li class="list-item"><a href="#features">About</a></li>
            <li class="list-item"><a href="#form">Contact</a></li>
        </ul>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <section id="banner">
        <h1><span class="typed-text"></span><span class="cursor">&nbsp;</span></h1>
    </section>
    <h1 class="center">our speciality</h1>
    <section id="features">
        <div class="box-front" id="box-1">
            <img src="images/computers.jpg" alt="computer lab">
            <h1>Computer Lab</h1>
            <p>A computer lab is a space which provides computer services to a defined community. Computer labs are typically provided by libraries to the public, by academic institutions to students who attend the institution, or by other institutions to the public or to people affiliated with that institution.</p>
        </div>
        <div class="box-front" id="box-2">
            <img src="images/computers.jpg" alt="computer lab">
            <h1>Computer Lab</h1>
            <p>A computer lab is a space which provides computer services to a defined community. Computer labs are typically provided by libraries to the public, by academic institutions to students who attend the institution, or by other institutions to the public or to people affiliated with that institution.</p>
        </div>
        <div class="box-front" id="box-3">
            <img src="images/computers.jpg" alt="computer lab">
            <h1>Computer Lab</h1>
            <p>A computer lab is a space which provides computer services to a defined community. Computer labs are typically provided by libraries to the public, by academic institutions to students who attend the institution, or by other institutions to the public or to people affiliated with that institution.</p>
        </div>
    </section>
    <section class="contact">
        <div id="form">
            <form>
                <label for="name">Name:</label>
                <input type="text" name="text" id="text" placeholder="Enter your name" required>
                <label for="subject">Subject:</label>
                <input type="text" name="subject" id="subject" placeholder="Subject" required>
                <label for="message">Message:</label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                <div class="container-btn">
                    <!-- <a class="submit-btn" onclick="submit()">submit</a> -->
                    <button class="submit-btn" type="submit">submit</button>
                </div>
            </form>
        </div>
    </section>
    <footer>
        Copyright &copy; 2021 Himaloy Mondal
    </footer>
    <!-- <div class="social-media-icons">
        <a href="https://www.youtube.com/user/nsdcindiaofficial" class="youtube" target="_blank"><img src="images/youtube.png" alt="youtube logo"></a>
    </div> -->
</body>
<script src="js/typing.js"></script>
<script src="js/responsive.js"></script>
<script>
    document.addEventListener('load', () => {
        const loader = document.querySelector('#loader');
        loader.style.display = 'none';
    });
    function submit(){
        document.querySelector('form').submit();
    }
</script>
</html>