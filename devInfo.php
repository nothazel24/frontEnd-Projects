<body style="background-color: #dee4e9">

    <?php include 'others/head.php'; ?>
    <div class="container p-5 my-5">
        <h1 class="header">Dev's Profile'</h1>

        <section class="devOne">

            <div class="cardBg">
                <div class="section1">
                    <div class="bannerBg">
                        <h1 class="bannerHead"><?= "Username"; ?></h1>
                    </div>
                </div>

                <div class="section2">
                    <div class="descRow">
                        <img src="assets/scarybear.png" alt="devFurry" class="devPfp" width="90px" height="90px">
                        <div class="descColumn">
                            <h3>Dev Name</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint hic maxime, doloribus porro
                                repellat temporibus consequuntur quod minus cumque, sequi deleniti corporis inventore adipisci
                                suscipit magnam distinctio nesciunt quia dolorem!</p>
                        </div>
                    </div>

                    <div class="section3">
                        <h5>My Tech Stack</h5>

                        <div class="techStack">
                            <img src="assets/scarybear.png" alt="#" class="imgStack">
                            <img src="assets/scarybear.png" alt="#" class="imgStack">
                            <img src="assets/scarybear.png" alt="#" class="imgStack">
                            <img src="assets/scarybear.png" alt="#" class="imgStack">
                        </div>
                    </div> <!-- SECTION 3 -->

                    <div class="favMusic">
                        <img src="assets/epic.jpg" alt="epic" class="img">
                        <div class="textArea">
                            <p>KSI - Thick of It</p>
                        </div>
                    </div>

                </div> <!-- SECTION 2 -->

            </div> <!-- CARD BG -->
        </section> <!-- DEV ONE -->


        <section class="devTwo">

            <h3 class="sub-header">Projects and Others</h3>
            <div class="extrasWrapper">

                <?php for ($k = 0; $k <= 1; $k++): ?>
                    <div class="extrasCardContent">
                        <img src="assets/silder.jpg" class="project-photo" alt="projectPhoto" width="80px" height="80px">
                        <div class="extrasCardContent2">
                            <h3>Project Name</h3>
                            <p>project desc</p>
                            <a href="#" class="projectLink" target="_self">
                                <p>View Projects</p>
                            </a>
                        </div> <!-- EXTRAS CARD CONTENT 2-->

                    </div> <!-- EXTRAS CARD CONTENT -->
                <?php endfor; ?>

            </div> <!-- EXTRAS WRAPPER -->
        </section>

        <section class="devThree">
            <div class="extrasTwo">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla dicta, explicabo sit iusto in quasi
                    magni! Molestias dolorem necessitatibus qui ducimus cupiditate ex? Atque omnis commodi rerum
                    architecto pariatur consequuntur!</p>
            </div>
        </section>

    </div> <!-- CONTAINER -->

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="script/linggangguliguliguliwachalingganggulingganggu.js"></script>

    <?php include 'others/footer.php'; ?>