<body style="background-color: #dee4e9">

    <?php include 'others/head.php'; ?>
    <div class="container p-5 my-5">
        <h1 class="header">Dev's Profile'</h1>
        <section class="devOne">
            <div class="line mb-5"></div>

            <div class="cardBg">

                <div class="section1">
                    <img src="assets/silder.jpg" alt="dev pfp">
                    <h5>Contact</h5>
                    <div class="socialMedList">
                        <a href="#"><img src="/assets/guthib.svg"></a>
                        <a href="#"><img src="/assets/racistapp.svg"></a>
                    </div>
                </div>

                <div class="section2">
                    <h3>Dev Name</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint hic maxime, doloribus porro
                        repellat temporibus consequuntur quod minus cumque, sequi deleniti corporis inventore adipisci
                        suscipit magnam distinctio nesciunt quia dolorem!</p>

                    <div class="section3">
                        <h5>My Tech Stack</h5>

                        <div class="techStack">
                            <img src="assets/scarybear.png" alt="#" class="imgStack">
                            <img src="assets/scarybear.png" alt="#" class="imgStack">
                            <img src="assets/scarybear.png" alt="#" class="imgStack">
                            <img src="assets/scarybear.png" alt="#" class="imgStack">
                        </div>
                    </div> <!-- SECTION 3 -->
                </div> <!-- SECTION 2 -->

            </div> <!-- CARD BG -->
        </section> <!-- DEV ONE -->


        <section class="devTwo">

            <h3 class="sub-header">Projects and Others</h3>
            <div class="line mb-5"></div>
            <div class="extrasWrapper">

                <?php for ($k = 0; $k <= 1; $k++): ?>
                    <div class="extras<?= $k ?>">
                        <div class="extrasCard">

                            <div class="extrasCardContent">
                                <img src="" alt="">
                                <div class="extrasCardContent2">
                                    <h3>Project Name</h3>
                                    <p>project desc</p>
                                    <div class="view">
                                        <a href="#" target="_self">
                                            <p>View Projects</p>
                                        </a>
                                    </div>
                                </div> <!-- VIEW -->
                            </div> <!-- EXTRAS CARD CONTENT -->
                        </div> <!-- EXTRAS CARD -->
                    </div> <!-- EXTRAS ONE -->
                <?php endfor; ?>

            </div> <!-- EXTRAS WRAPPER -->
        </section>

        <section class="devThree">
            <div class="extrasTwo">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla dicta, explicabo sit iusto in quasi
                    magni! Molestias dolorem necessitatibus qui ducimus cupiditate ex? Atque omnis commodi rerum
                    architecto pariatur consequuntur!</p>
                
                <div class="favMusic">
                    <img src="assets/epic.jpg" alt="epic" class="img">
                    <div class="textArea">
                        <p>KSI - Thick of It</p>
                    </div>
                </div>
            </div>
        </section>

    </div> <!-- CONTAINER -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

    <script src="script/linggangguliguliguliwachalingganggulingganggu.js"></script>
    <?php include 'others/footer.php'; ?>