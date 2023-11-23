<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../recources/css/style2.css">
</head>
<body>
<div>
    <nav class="nav1">
        <a href="#">Home</a>
        <a href="#">Contact</a>
        <a href="#">Projects</a>
    </nav>
</div>
    <div class="hidehamburg">
        <div class="menu-toggle">
            <button class='hamburger-button'>&#9776;</button>
        </div> 
    </div> 
<div class="popup">
    <nav class='nav2'>
        <a class="Home" href="#">Home</a>
        <a class="Projects" href="#">Projects</a>
        <a class="Contact" href="#">Contact</a>
    </nav>
    <div class="hidex">
        <button class='closemenub'>X</button> 
    </div>
</div>
<div class="kopje">
    <h1>Welkom in mijn digitale wereld: Software Developer en Creatieve Visionair</h1>
</div>
<div class=text1>
    <p>Mijn passie voor het bouwen van digitale oplossingen wordt aangevuld door een veelzijdige geest en een scala aan interesses</p>
</div>
<div class=text2>
    <p>Codeerwiz met een skateboard, dansmoves, tekeningen en Wing Tsun skills</p>
</div>
<div class=text3>
    <p>Technologische finesse ontmoet creatieve kracht in al mijn projecten; ik omarm zowel de macht van code als de doorzettingskracht van kunst en sport.</p>
</div>

</body>
</html>
<script>
    // JavaScript to toggle the navigation menu
    window.onload =  function () {
        const button = document.querySelector('.hamburger-button');
    const nav = document.querySelector('.nav');
    const popup = document.querySelector('.popup');
    const closeBtn = document.querySelector('.closemenub');

    button.addEventListener('click', function () {
        popup.classList.add('active');
        nav.classList.add('active');
    });

    closeBtn.addEventListener('click', function () {
        popup.classList.remove('active');
        nav.classList.remove('active');
    });

    // Close the menu when clicking outside
    document.addEventListener('click', function (event) {
        if (nav.classList.contains('active') && !popup.contains(event.target) && event.target !== button) {
            popup.classList.remove('active');
            nav.classList.remove('active');
        }
    });
};
</script>
