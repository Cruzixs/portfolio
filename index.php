<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-title">My Portfolio</a>
            <div class="navbar-toggle" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="navbar-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contacts">Contacts</a></li>
            </ul>
        </div>
    </nav>
    <!-- Content here -->
     <div class="section1">
        <div class="text">Hello There! I'm Justine Belga Cruz</div>
        <div class = "text">Computer Engineer</div>
     </div>
     <div class="section2">
        <div class="text"></div>
     </div>
     <div class="section3">
        <div class="text"></div>
     </div>

</body>
    <script>
        function toggleMenu() {
            const menu = document.querySelector('.navbar-menu');
            menu.classList.toggle('show');
        }
    </script>


</html>
