<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Our Team</title>
    <style>
html, body {
    height: 100%; 
    margin: 
}
body {
    font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
    background-color: #f4f4f4;
    background-size: cover;
    background-repeat: no-repeat; 
    background-position: center;
    margin: 0;
    padding: 0;
    text-align: center;
    color: #333; 
    line-height: 1.6;  
    display: flex;
    flex-direction: column; 

}
header {
    font-size: 25px;
    background-color: #333;
    color: white;
    padding: 20px 0;
    margin-bottom: 20px;
}
.container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    flex: 1;
}
.team-member {
    background-color: transparent; 
    border-radius: 0; 
    padding: 0; 
    max-width: 300px;
    box-shadow: none; 
    cursor: pointer; 
    transition: transform 0.3s; 
}
.team-member:active {
    transform: scale(0.95); 
}
.team-member img {
    width: 150px; 
    height: 150px;
    border-radius: 50%; 
    object-fit: cover;
    margin-bottom: 15px;
    box-shadow: 0 8px 8px rgba(0, 0, 0, 0.2);
}
.team-member:hover {
    transform: scale(1.05); 
}
h3 {
    font-size: 20px;
    margin: 10px 0;
    color: #555;
}
p {
    color: black;
    text-align: left;
}
.border-box {
    border-top: 2px solid #eee;
    margin-top: 15px;
    padding-top: 10px;
    font-style: italic;
}
.bottom-bar {
    background: #964B00;
    text-align: center;
    padding: 10px 0;
    margin-top: 20px;
}
.bottom-bar p{
    color: white;
    margin: 0;
    font-size: 16px;
    padding: 7px;
    text-align: center;
}
.social-links {
    margin-top: 10px;
}
.social-links a {
    margin: 0 10px; 
    color: #333; 
    text-decoration: none; 
    font-size: 24px;
}
nav {
    background-color: #333;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
nav .logo {
    color: #f18930;
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
}
nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
}
nav ul li {
    margin: 0 15px;
}
nav ul li a {
    color: white;
    text-decoration: none;
    padding: 10px 15px;
}
nav ul li a:hover {
    color: #f18930;
}
.menu-icon {
    display: none;
    color: white;
    font-size: 30px;
    cursor: pointer;
}
@media (max-width: 768px) {
nav ul {
    display: none;
    flex-direction: column;
    background-color: #333;
    position: absolute;
    top: 50px;
    left: 0;
    width: 100%;
    text-align: center;
}
nav ul.show {
    display: flex;
}
.menu-icon {
    display: block;
}
}
    </style>

</head>
<body>
     <nav>
        <a href="#" class="logo">The Kulelat Team</a>
        <ul id="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="team.html">Team</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="menu-icon" id="menu-icon">
            <i class='bx bx-menu'></i>
        </div>
      </nav>
         
    <header>
        <h1>Meet Our Team</h1>
    </header>

    <div class="container">
        <div class="team-member" onclick="toggleInfo(this)">
            <img src="Tristan.jpg" alt="Tristan">
            <h3>Tristan Joed Abar</h3>
            <p style="display: none;">Nickname: Tris</p>
            <p style="display: none;">Birthdate: Dec.24,2002</p>
            <p style="display: none;">Age: 21</p>
            <p style="display: none;">Address: Paranaque City</p>
            <div class="container">
             <div class="border-box" style="display: none;">
              </p>"Kung d ako ang para sa kanya,kawawa naman sya"</p>
              </div>
              <div class="social-links" style="display: none;">
                    <a href="https://www.facebook.com/tristanjoed.abar.5" target="_blank"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="https://www.instagram.com/tristan" target="_blank"><i class='bx bxl-instagram'></i></a>
            </div>
          </div>
        </div>
        <div class="team-member" onclick="toggleInfo(this)">
            <img src="Dan.jpg" alt="Dan Joseph">
            <h3>Dan Joseph Divina</h3>
            <p style="display: none;">Nickname: Ej</p>
            <p style="display: none;">Birthdate: November 14,2001</p>
            <p style="display: none;">Age: 22</p>
            <p style="display: none;">Address: Tunasan, Muntinlupa</p>
            <div class="container">
            <div class="border-box" style="display: none;">
            <p>"Lagi mong tatandaan na kapag nag iisa ka, wala kang kasama"</p>
            <div class="social-links" style="display: none;">
                    <a href="https://www.facebook.com/danjoseph.divina.3" target="_blank"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="https://www.instagram.com/cuya_dan?igsh=MWs0dGJ4bmhzcngwNA==" target="_blank"><i class='bx bxl-instagram'></i></a>
            </div>
         </div>
          </div>
        </div>
        <div class="team-member" onclick="toggleInfo(this)">
            <img src="ian.jpg" alt="Ian Gabriel">
            <h3>Ian Gabriel Magpantay</h3>
            <p style="display: none;">Nickname: Gabo</p>
            <p style="display: none;">Birthdate: July 25,2003</p>
            <p style="display: none;">Age: 21</p>
            <p style="display: none;">Address: Poblacion,Muntinlupa</p>
            <div class="container">
            <div class="border-box" style="display: none;">
            <p>"Don't make the same mistake twice,marami pang kasalanan try mo naman"</p>
            <div class="social-links" style="display: none;">
                    <a href="https://www.facebook.com/profile.php?id=100072862945099" target="_blank"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="https://www.instagram.com/imnotiyay/profilecard/?igsh=bW5sejZ0bDVqZnoz" target="_blank"><i class='bx bxl-instagram'></i></a>
                </div>
          </div>
           </div>
        </div>
        <div class="team-member" onclick="toggleInfo(this)">
          <img src="Jer.jpg" alt="Jerrel">
          <h3>Jerrel Perez</h3>
          <p style="display: none;">Nickname: Rel</p>
          <p style="display: none;">Birthdate: December 16,2003</p>
          <p style="display: none;">Age: 21</p>
          <p style="display: none;">Address: Poblacion, Muntinlupa</p>
          <div class="container">
          <div class="border-box" style="display: none;">
          <p>"Kung ang pansit ay pampahaba ng buhay, ba't d to nirereseta ng doktor"</p>
         <div class="social-links" style="display: none;">
                    <a href="https://www.facebook.com/perez.jerrel.31" target="_blank"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="https://www.instagram.com/kya_jrrl?igsh=eHAzaHp5OG05d3Uz" target="_blank"><i class='bx bxl-instagram'></i></a>
                </div>
        </div>
          </div>
        </div>
     </div>
     <footer>
          <div class="bottom-bar">
            <p>&copy; 2024 The Kulelat Team.All Rights Reserved.</p>
          </div>
     </footer>
     
     <script>
        function toggleInfo(element) {
            const allInfoElements = document.querySelectorAll('p, .border-box, .social-links');

            const infoElements = element.querySelectorAll('p, .border-box, .social-links');
            const isOpen = Array.from(infoElements).some(info => info.style.display === 'block');

            allInfoElements.forEach(info => {
               info.style.display = 'none';
            });

            if (!isOpen) {
              infoElements.forEach(info => {
                 info.style.display = 'block';
            });
          }
        }
     </script> 
</body> 
</html>