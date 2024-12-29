<?php
include('yonetim/ayar.php');
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Web Tasarımı Dersleri</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

      <header>
          <a href="javascript:void(0);" onclick="ac();" id="acdgm">☰</a>
          <a href="javascript:void(0);" onclick="kapat();" id="kapatdgm">☰</a>
      </header>

      <aside id="menu">
        <h1>CS<br>Tasarım</h1>
        <ul>
          <li><a href="#anasayfa">Ana Sayfa</a></li>
          <li><a href="#hakkimizda">Hakkımızda</a></li>
          <li><a href="#hizmetlerimiz">Hizmetlerimiz</a></li>
          <li><a href="#projelerimiz">Projelerimiz</a></li>
          <li><a href="#iletisim">İletişim</a></li>
        </ul>
      </aside>

      <main id="icerik">
        <section id="anasayfa">
          <h1>CS Tasarım</h1>
          <h2>Galeri</h2>
          <hr>
          <div class="temizle"></div>
          <?php
            $sorgu = $baglan->query("select * from portfolyo");
            while ($satir = $sorgu->fetch_object()) {
              $resim = substr($satir->resim,3);
              echo "<div class='galeri'>
              <a href='$resim' class='resimler' rel='group2' title='$satir->baslik'><img src='$resim' alt='$satir->baslik'></a>
              </div>";
            }
          ?>

          <div class="temizle"></div>
        </section>

        <section id="hakkimizda">
          <h2>Hakkımızda.</h2>
          <hr>
          <div class="temizle"></div>
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
        </section>

        <section id="hizmetlerimiz">
          <h2>Hizmetlerimiz.</h2>
          <hr>
          <div class="temizle"></div>
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
          <ul>
            <li>1. Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
            <li>2. Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
            <li>3. Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
            <li>4. Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
            <li>5. Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
            <li>6. Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
            <li>7. Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
            <li>8. Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
            <li>9. Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
          </ul>
        </section>

        <section id="projelerimiz">
          <h2>Projelerimiz.</h2>
          <hr>
          <div class="temizle"></div>
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
        </section>

        <section id="iletisim">
          <h2>İletişim.</h2>
          <hr>
          <div class="temizle"></div>
          <form method="post" action="">
            <label for="adsoyad">Ad Soyad</label>
            <input type="text" name="adsoyad" id="adsoyad" required>

            <label for="telefon">Telefon</label>
            <input type="tel" name="telefon" id="telefon">

            <label for="eposta">E-posta</label>
            <input type="email" name="eposta" id="eposta">

            <label for="mesaj">Mesaj</label>
            <textarea name="mesaj" id="mesaj"></textarea>

            <button type="submit">Mesaj Gönder</button>
          </form>
        </section>

        <footer>
          <p>Tasarım <span></span> <a href="#" target="_blank"></a></p>
        </footer>
      </main>

      <script src="js/jquery-1.4.3.min.js"></script>
      <script src="js/jquery.fancybox-1.3.4.js"></script>
    <script>
        $("a.resimler").fancybox();

        function ac() {
            document.getElementById("menu").style.display = "block";
            document.getElementById("icerik").style.paddingLeft = "350px";
            document.getElementById("acdgm").style.display = "none";
            document.getElementById("kapatdgm").style.display = "block";
        }

        function kapat() {
            document.getElementById("menu").style.display = "none";
            document.getElementById("icerik").style.paddingLeft = "50px";
            document.getElementById("acdgm").style.display = "block";
            document.getElementById("kapatdgm").style.display = "none";
        }
    </script>

    </body>
</html>
