<body>
    <?php include 'others/head.php'; ?>
    <h1 class="headOfProjects">My Projects.</h1>

    <div class="wrapperProjects">

    <?php for ($a = 1; $a <= 6; $a++) : ?>
        <section class="projectCard">
            <div class="socialWrapper">
                <a href="" target="_self"><img src="assets/instagram.png" class="ig" alt="instagram"></a>
                <p class="projectDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt inventore explicabo ullam totam, iste corrupti ratione nihil voluptate fuga, animi aut autem adipisci? Voluptas laudantium fuga possimus aspernatur culpa magni? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga repudiandae expedita magnam, voluptatibus, rem omnis quisquam officiis ad ab modi non quod quia dolore excepturi ut iusto optio voluptatum alias.</p>
            </div>
            <a href="#" target="_self" class="linkToProjects"><p>Links<p></a>
        </section>
    <?php endfor; ?>

    </div>
    <?php include 'others/footer.php'; ?>