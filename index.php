<body style="background-color: #dee4e9">

  <?php include 'others/head.php'; ?>

  <section class="one">
    <div class="container p-2 my-5">
      <div class="contentWrapper">

        <img src="https://image.noelshack.com/fichiers/2023/29/3/1689748539-ryo28.png" alt="ryo:3" class="ryo" />

        <h1 class="intro">Greetings, User!</h1>
        <p class="introDesc">
          This is our first Front-end project, any changes in this site may look broken or incomplete.
        </p>

        <!-- SLIDING SECTION -->
        <div class="slidingSection">
          <div class="sliding-wrapper">
            <?php for ($i = 1; $i <= 30; $i++): ?>
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

    <?php for ($j = 2; $j <= 4; $j++) : ?>
      <div class="container p-5 my-5">
        <div class="contentWrapper<?= $j ?>">
          <h1 class="header">Ini apa ya...</h1>
          <p class="text-desc<?= $j ?>">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi hic assumenda natus nam doloribus beatae repellat reiciendis, quis officiis amet sint sed laborum tempore tempora animi, aliquid fugit, explicabo provident.
          </p>
        </div>
      </div>
    <?php endfor; ?>

  </section>
  <!-- SECTION CONTENT TWO -->


  <!-- UNCOMPLETED SECTION -->
  <section class="three">
    <!-- CONTRIBUTOR PAGE -->
  </section> <!-- SECTION CONTENT FIVE -->

  <div class="hr"></div>

  <section class="four">
    <div class="creditsWrapper">
      <div class="imageGroups">
        <a href="#" target="_self"><img src="assets/instagram.png" alt="instagram" style="width: 30px" /></a>
        <a href="#" target="_self"><img src="assets/telegram.png" alt="telegram" style="width: 30px" /></a>
        <a href="#" target="_self"><img src="assets/github.png" alt="github" style="width: 30px" /></a>
      </div>
      <p class="creditsTxt">Made by Origami Teams</p>
    </div>
  </section>
  </div>

  <!-- Scripts -->
  <script src="script/script.js"></script>

  <!-- GSAP Make things easier -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/EaselPlugin.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>


  <!-- RoughEase, ExpoScaleEase and SlowMo are all included in the EasePack file -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/EasePack.min.js"></script>

  <script src="script/anims.js"></script>
  <script src="script/navbarAnims.js"></script>
  <!-- WRAPPER DIVISION -->

  <!-- <img src="assets/waveFooter.svg" alt="footerWave" class="wave"> -->
  <?php include 'others/footer.php'; ?>