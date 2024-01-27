<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>kalkulator PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA Compatible" content="IE-EDGE">
  <meta name="author" content="Kelompok2">
  <meta name="color-scheme" content="#DFF6FF">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shizuru&family=Sometype+Mono&family=Ubuntu+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style/prjct-style/style.css">
</head>
<body>
  <main>
    <div class="menu-container">
      <div class="menu-content">
        <h1>Project_Kalkulator</h1>
        <img src="assets/profile.png" alt="profile-photos">
      </div>
      <!-- MENU CONTENT -->
    </div>
    <!-- MENU CONTAINER -->
    <div class="menu-bottom">
      <p class="text-tambahan">
        -Beyond the limits-
      </p>
    </div>
    <content>
      <div class="content-wrapper">
        <div class="inTable">
          <h1>Kalkulator</h1>
          <div class="inForm">
            <form action="" method="post">
              <p class="txt-angka">
                Angka ke-1 :
              </p>
              <input type="text" name="angka_1" placeholder="Masukkan angka ke-1" class="angka1">
              <br><br>
              <p class="txt-angka">
                Angka ke-2 :
              </p>
              <input type="text" name="angka_2" placeholder="Masukkan angka ke-2" class="angka2"><br>

              <div class="end-form">
                <select name="operator" class="operasi">
                  <option value="tambah">+</option>
                  <option value="kurang">-</option>
                  <option value="kali">x</option>
                  <option value="bagi">/</option>
                </select>
                <input type="submit" name="submit" value="Hitung" class="button-submit">
              </div>
            </form>
            <?php

            if (isset($_POST['submit'])) {
              $angka_1 = $_POST['angka_1'];
              $angka_2 = $_POST['angka_2'];
              $operator_jum = $_POST['operator'];

              // OPERASI ARITMATIKA BEGIN
              switch ($operator_jum) {
                case "tambah":
                  $hasil = $angka_1 + $angka_2;
                  break;
                case "kurang":
                  $hasil = $angka_1 - $angka_2;
                  break;
                case "kali":
                  $hasil = $angka_1 * $angka_2;
                  break;
                case "bagi":
                  if ($angka_2 != 0) {
                    $hasil = $angka_1 / $angka_2;
                  } else {
                    $hasil = " Masukkan bilangan dengan benar!!";
                  }
                  break;
                default:
                  $hasil = " Operasi gagal, silahkan coba ulang";
                }
                echo "<br>";
                echo "<h5>Hasil =$hasil</h5>";
              }
              ?>
            </div>
            <!-- IN FORM CLASS-->
          </div>
          <!-- IN TABLE CLASS -->
        </div>
        <!-- CONTENT WRAPPER  -->
      </content>
      <content>
        <p class="note">
          <em>CDE-001-071223.</em>
        </p>
      </content>
    </main>
    <footer>
      <h1 class="judul-footer">Kelompok II</h1>
      <hr class="pembatas">
      <div class="container flex footer-container">
        <div class="footer-inline">
          <h1 class="wm">Dibuat Oleh:</h1>
        </div>
        <div class="members-column flex">
          <p class="member">
            Ryan Ferdiansyah (X-RPL3)
          </p>
          <p class="member">
            Fauzan Ardiansyah (X-RPL3)
          </p>
          <p class="member">
            M. Akbar Firdaus (X-RPL3)
          </p>
          <p class="member">
            Ali Rachman Gumilang (X-RPL3)
          </p>
        </div>
        <div class="source-code flex">
          <h1 class="wm">Source</h1>
          <div class="code-history flex">
            <p class="link-column flex">
              <a href="#" target="_self">ChatGPT (For Code References)</a>
            </p>
            <p class="link-column flex">
              <a href="#" target="_self">Youtube (For other Code References)</a>
            </p>
            <p class="link-column flex">
              <a href="#" target="_self">Instagram (For Design and CSS code References)</a>
            </p>
            <p class="link-column flex">
              <a href="#" target="_self">W3Schools (For other CSS code References)</a>
            </p>
          </div>
          <!-- CODE HISTORY -->
        </div>
        <!-- SOURCE CODE -->
      </div>
      <!-- FOOTER CONTAINER -->
      <hr class="pembatas">
    </footer>
    <div class="footer-tambahan">
      <p>
        <em>• WEST JAVA 7 Dec 2023 •</em>
      </p>
    </div>
  </body>
</html>