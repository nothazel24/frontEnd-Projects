<body>

  <?php include 'others/head.php'; ?>
  <!-- CONTENT SECTION -->
  <!-- <section class="home">
            <div class="text-center p-5" style="margin:auto">
                <h1>Hi! Welcome to my Website</h1>
            </div>
        </section> -->

  <section class="one">
    <div class="container p-2 my-2">
      <div class="contentWrapper">

          <img src="https://image.noelshack.com/fichiers/2023/29/3/1689748539-ryo28.png" alt="ryo:3" class="ryo" />

          <h1 class="intro">Greetings, User!</h1>
          <p class="introDesc">
            This is our first Front-end project, any changes in this site may look broken or incomplete.
          </p>

          <!-- SLIDING SECTION -->
          <div class="slidingSection">
          <div class="sliding-wrapper">
            <?php for ($i = 1; $i <= 8; $i++): ?>
              <div class="image-container" id="img<?= $i ?>">
                <img src="assets/silder.jpg" alt="sliding-img" class="sliding-content">
                <div class="overlay">
                  <div class="text">
                    <p id="overlayText"></p>
                  </div>
                </div>
              </div>
            <?php endfor; ?>
          </div>

          </div> <!-- SLIDING SECTION -->

      </div> <!-- CONTENT WRAPPER END -->
    </div> <!-- CONTAINER END -->

  </section>
  <!-- SECTION CONTENT ONE -->

  <div class="hr"></div>

  <section class="two">
    <div class="container p-5 my-5">
      <div class="contentWrapper-start">
        <h1 class="header">Ini apa ya...</h1>
        <p class="content-desc">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Obcaecati, soluta! Laboriosam, saepe minus sequi dolorem ut quasi
          libero quos illo ipsum et dolor veniam earum dolorum error culpa
          cumque nulla!
        </p>
      </div>
    </div>
  </section>
  <!-- SECTION CONTENT TWO -->

  <div class="hr"></div>

  <section class="three">
    <div class="container p-5 my-5">
      <div class="contentWrapper-center">
        <h1 class="header">Ini apa ya...</h1>
        <p class="content-desc">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Obcaecati, soluta! Laboriosam, saepe minus sequi dolorem ut quasi
          libero quos illo ipsum et dolor veniam earum dolorum error culpa
          cumque nulla!
        </p>
      </div>
    </div>
  </section>
  <!-- SECTION CONTENT THREE -->

  <div class="hr"></div>

  <section class="four">
    <div class="container p-5 my-5">
      <div class="contentWrapper-end">
        <h1 class="header">Ini apa ya...</h1>
        <p class="content-desc">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Obcaecati, soluta! Laboriosam, saepe minus sequi dolorem ut quasi
          libero quos illo ipsum et dolor veniam earum dolorum error culpa
          cumque nulla!
        </p>
      </div>
    </div>
  </section>
  <!-- SECTION CONTENT FOUR -->

  <div class="hr"></div>

  <section class="five">
    <div class="section-content">
      <div class="list-content">
        <h2>Ini Judul</h2>
        <div class="innerWrapper">
          <img src="assets/silder.jpg" alt="image-content" class="innerImage">
          <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab
            consectetur labore eius eos dolorum nobis. Doloribus ducimus aut
            repellat consequuntur officiis. Ea qui, consequuntur ipsa laborum
            impedit debitis. Quis, minima.
          </p>
        </div>
        <p>
          <a href="#" class="cLink">Ini link</a>
        </p>
      </div>
      <!-- LIST CONTENT -->

      <div class="list-content">
        <h2>Ini Judul</h2>
        <div class="innerWrapper">
          <img src="assets/silder.jpg" alt="image-content" class="innerImage">
          <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab
            consectetur labore eius eos dolorum nobis. Doloribus ducimus aut
            repellat consequuntur officiis. Ea qui, consequuntur ipsa laborum
            impedit debitis. Quis, minima.
          </p>
        </div>
        <p>
          <a href="#" class="cLink">Ini link</a>
        </p>
      </div>
      <!-- LIST CONTENT -->

      <div class="list-content">
        <h2>Ini Judul</h2>
        <div class="innerWrapper">
          <img src="assets/silder.jpg" alt="image-content" class="innerImage">
          <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab
            consectetur labore eius eos dolorum nobis. Doloribus ducimus aut
            repellat consequuntur officiis. Ea qui, consequuntur ipsa laborum
            impedit debitis. Quis, minima.
          </p>
        </div>
        <p>
          <a href="#" class="cLink">Ini link</a>
        </p>
      </div>
      <!-- LIST CONTENT -->

      <div class="list-content">
        <h2>Ini Judul</h2>
        <div class="innerWrapper">
          <img src="assets/silder.jpg" alt="image-content" class="innerImage">
          <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab
            consectetur labore eius eos dolorum nobis. Doloribus ducimus aut
            repellat consequuntur officiis. Ea qui, consequuntur ipsa laborum
            impedit debitis. Quis, minima.
          </p>
        </div>
        <p>
          <a href="#" class="cLink">Ini link</a>
        </p>
      </div>
      <!-- LIST CONTENT -->

    </div>
    <!-- SECTION CONTENT -->
  </section>
  <!-- SECTION CONTENT FIVE -->

  <div class="hr"></div>

  <section class="six">
    <div class="creditsWrapper">
      <div class="imageGroups">
        <a href="#" target="_self"><img src="assets/instagram.png" alt="instagram" style="width: 30px" /></a>
        <a href="#" target="_self"><img src="assets/telegram.png" alt="telegram" style="width: 30px" /></a>
        <a href="#" target="_self"><img src="assets/github.png" alt="github" style="width: 30px" /></a>
      </div>
      <p class="creditsTxt">Made by yan.f</p>
    </div>
  </section>
  </div>

  <!-- Scripts -->
  <script src="script/script.js"></script>

  <!-- WRAPPER DIVISION -->

  <!-- <img src="assets/waveFooter.svg" alt="footerWave" class="wave"> -->
  <?php include 'others/footer.php'; ?>