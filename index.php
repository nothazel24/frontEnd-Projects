<body style="background-color: #dee4e9">

  <?php include 'others/head.php'; ?>

  <!-- Assets load overlay -->
  <div class="loadingAssetsScreen" id="assetOverlay">
    <p id="textID">Waiting for assets to load...</p>
  </div>

  <!-- Notice Popup -->
  <div class="popup" id="bgPopup">
    <div class="popup-content" id="popup">
      <h1>Notice</h1>
      <div class="hr my-3"></div>
      <p>This site is still on development, so any visual glitches and obstructed elements could be found in this site.
        Don't worry, we'll fix it as soon as possible!</p>
      <label class="label">
        <input type="checkbox" id="dontRemind"> Don't show this again
      </label><br>
      <button type="button" class="gotIt" id="gotIt">Got it</button>
    </div>
  </div>

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

    <?php
    $contents = [
      ["title" => "Why We Build This?", "content" => "The purpose of making this is to hone our skills, strengthen all the material taught at school and implemented by making this website, and train our cooperation to be able to work in groups."],
      ["title" => "Our Goals", "content" => "What we aim to do in this project is to be able to work together in a group, expand our experience, and as a medium to show what we can do. "],
      ["title" => "Follow Us!", "content" => "Feel free to join us!. You can click the button below the footer...."]
    ];

    $elementCount = count($contents);

    for ($j = 2; $j <= 4; $j++):
      $currentIndex = ($j - 2) % $elementCount;
      $currentElement = $contents[$currentIndex];
      ?>
      <div class="container p-5 my-5">
        <div class="contentWrapper<?= $j ?>">
          <h1 class="header"><?= $currentElement['title'] ?></h1>
          <p class="text-desc<?= $j ?>">
            <?= $currentElement['content'] ?>
          </p>
        </div>
      </div>
    <?php endfor; ?>


  </section>
  <!-- SECTION CONTENT TWO -->

  <div class="hr"></div>


  <section class="three" style="background-color: #bec9d4;">
    <div class="container p-5 my-5">

      <h1 class="contributorsHeader">Contributors</h1>

      <?php
      $contributors = [
        ["pfp" => "https://avatars.githubusercontent.com/u/154614176?v=4", "name" => "NzddXD", "desc" => "Duh furry bamke lucu bgt sumpah plis jadi fandom boyskisser bareng le", "links" => "#"],
        ["pfp" => "https://avatars.githubusercontent.com/u/157547885?v=4", "name" => "nothazel24", "desc" => "Dev nguwawor inimah", "links" => "#"],
        ["pfp" => "https://avatars.githubusercontent.com/u/140289917?v=4", "name" => "azvlyy", "desc" => "Designer sepuh aowkoakwokoak", "links" => "#"]
      ];

      $countContributors = count($contributors);

      for ($e = 0; $e <= 2; $e++):
        $currentIndex = ($e - 0) % $countContributors;
        $currentContents = $contributors[$currentIndex];
        ?>
        <div class="cProfile<?= $e ?>">
          <img src=<?= $currentContents['pfp'] ?> alt="dev's photo" width="150px" height="150px"
            style="border-radius: 100%;">
          <div class="cDesc">
            <h1><?= $currentContents['name'] ?></h1>
            <p><?= $currentContents['desc'] ?></p>

            <div class="contributorsButton">
              <a href=<?= $currentContents['links'] ?> class="cButton">
                <p>See Profile</p>
              </a>
            </div>

          </div> <!-- CONTRIBUTOR DESC END -->
        </div> <!-- CONTRIBUTORS PROFILE END -->
      <?php endfor; ?>

    </div>
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
  <script src="script/popupscript.js"></script>
  <!-- WRAPPER DIVISION -->

  <!-- <img src="assets/waveFooter.svg" alt="footerWave" class="wave"> -->
  <?php include 'others/footer.php'; ?>