<!DOCTYPE html>
<html lang= "nl">

<head>
    <i class="fa-brands fa-discord"></i>
    <i class="fa-brands fa-twitter"></i>
    <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-youtube"></i>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-linkedin"></i>
    <i class="fa-brands fa-google"></i>

    <title>My portfolio</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <h1>Een leuk knopje</h1>
      <p id="greeting"></p>
      <button id="reveal">klik hier</button>
      <p id="text-hidden" style="display: none;">Wow je kunt een knopje indrukken</p>

 <script>
          let name = prompt ("Welkom bezoeker, Wat is uw naam", "Vul hier uw naam");
          if(name.length > 0){
                     document.getElementById('greeting').innerText = "Hallo " + name + ", Wilkom min jong";
          };
          document.getElementById('reveal').addEventListener('click', function(){
                     document.getElementById('text-hidden').style.display = "block";
                     document.getElementById('text-hidden').style.fontSize = "55ppx";
          })
 </script>



<footer>
        <p>&copy; Reinout van Schilt, 2023</p>
    </footer>
</body>
</html>