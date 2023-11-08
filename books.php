<!DOCTYPE html>
<html lang="en">
    <?php
        include 'templates/head.php';
    ?>
<body>
    <header>
        <?php
            include 'templates/header.php';
        ?>
    </header>

    <div class="book-page">
    <main>
        <section class="books">
            <?php
                include 'templates/featured-book.php';
            ?>
        </section>

        <section class="books">
            <div class="book-desc">
                <h2>Millicent Marvel &amp; Bentley Bunny</h2>
                <h3>A Storybook Quilt</h3>
                <p class="book-passage">Millicent Marvel left Bentley Bunny outside in the cold last night.<br>Her Gramma will make Bentley a quilt to warm up in but Millicent must choose a pattern.<br>Decisions, decisions.</p>
                <p class="book-explanation">Discover a new world where animals from the quilt come alive...</p>
                <p class="book-snippets">Let's stitch a quilt to wrap him up in.<br>Come, pick a pattern from my old cookie tin.</p>
                <p class="book-snippets">This skunk cabbage pattern might work, don't you think?<br>Uh uh, then Bunny really would stink.</p>
                <p class="book-explanation">These are just some of the lines to be found in this delightful child’s picture book. The vibrant colors and textures jump from the pages and stimulate the senses of children and quilters alike. The book evolved from a quilt and poem I created for one of my grand-daughters.</p>
            </div>

            <div class="container">
                <div class="book-images">
                    <img class="book-cover-img" src="imgs/marvel-cover.png" alt="Millicent Marvel Standing on Grass beside her Bunny.">
                    <div class="thumbnails">
                        <img src="imgs/marvel-word-thumbnail.png" alt="Page of Millicent Book">
                        <img src="imgs/marvel-skunk-thumbnail.png" alt="Skunk Spraying Bentley Bunny">
                        <img src="imgs/marvel-crows-thumbnail.png" alt="Three Crows Sitting on a Wire">
                    </div>
                </div>
                <div class="buttons">
                    <a href="purchase.php" class="purchase-button">Purchase Now</a>
                    <a class="buy-button" style="align-self: flex-end" href="https://www.westernskybooks.com/">Buy Locally at Western Sky Books in Port Coquitlam</a>
                </div>
            </div>
        </section>
        <section class="books">
            <?php $buy="https://www.amazon.ca/Millicent-Marvel-Bentley-Bunny-Salish/dp/0995200750/ref=tmm_pap_swatch_0?_encoding=UTF8&qid=1656882831&sr=8-2" ?>
            <div class="book-desc">
                <h2>Millicent Marvel &amp; Bentley Bunny By the Salish Sea</h2>
                <h3>A Storybook Quilt</h3>
                <p class="book-explanation">Millicent Marvel sets out with Bentley Bunny on a small adventure while Mama snores on the picnic blanket. Millicent explores the forest and encounters everything from slugs to owls. When she wanders down to the Salish Sea, an orca greets her. The sun is setting and Mama is frantic. Where is Millicent Marvel?
                </p>
            </div>

            <div class="container">
                <div class="book-images">
                    <iframe class="book-image" type="text/html" width="414" height="480" frameborder="0" allowfullscreen style="max-width:100%"
        src="https://read.amazon.ca/kp/card?asin=0995200750&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_RD1IFbHYJWH1R" ></iframe>
                    <dsc-polymer-carousel interval="5" style="max-width:90vw;width:480px;--carousel-height: 494px;--carousel-width:480px" width="210px" height="480px">
                        <section background="imgs/mmss/MMSS-mosquito.png"><a href="<?= $buy ?>"></a></section>
                        <section background="imgs/mmss/MMSS-orca.png"><a href="<?= $buy ?>"></a></section>
                        <section background="imgs/mmss/MMSS-slug.png"><a href="<?= $buy ?>"></a></section>
                    </dsc-polymer-carousel>
                </div>
                <div class="buttons">
                    <a class="buy-button" style="align-self: flex-end"
                        href="<?= $buy ?>">
                        Buy now
                    </a>
                    <a class="buy-button" style="align-self: flex-end" href="https://www.westernskybooks.com/">Buy Locally at Western Sky Books in Port Coquitlam</a>
                </div>
            </div>
        </section>
        <section class="books">
            <div class="book-desc">
                <h2>Surprise</h2>
                <h3>A Storybook Quilt</h3>
                <p class="book-passage">Rhymes delight the old and young<br>They slip off the reader’s tongue<br>Quilts soothe our active minds<br>Bring joy and time to unwind</p>
                <p class="book-explanation">Discover a new world where animals from the quilt come alive...</p>
                <p class="book-snippets">Turning the corner he was suprised to see.<br>A black and white skunk climbing a tree…</p>
                <p class="book-snippets">A green garter snake sipping his tea.<br>And a red ant dipping his toe in the sea</p>
                <p class="book-explanation">These are just some of the lines to be found in this delightful child’s picture book. The vibrant colors and textures jump from the pages and stimulate the senses of children and quilters alike. The book evolved from a quilt and poem I created for one of my grandsons.</p>
            </div>

            <div class="container">
                <div class="book-images">
                    <img class="book-cover-img" src="imgs/surprise-cover-small.jpg" alt="Book Cover">
                    <div class="thumbnails">
                        <img src="imgs/skunk-thumbnail.jpg" alt="Skunk page">
                        <img src="imgs/hippo-thumbnail.jpg" alt="Hippo page">
                        <img src="imgs/centipede-thumbnail.jpg" alt="Centipede page">
                    </div>
                </div>
                <div class="buttons">
                    <a href="purchase.php" class="purchase-button">Purchase Now</a>
                </div>
            </div>
        </section>
        <section class="books">
            <div class="book-desc">
                <h2>Tangled Tongue</h2>
                <h3>A F.U.S.E Adventure <sub>Book One</sub></h3>
                <p class="book-explanation">Tangled Tongue is a coming of age quest novel comparable to The Truth as Told by Mason Buttle and Fish in a Tree. This middle-grade adventure features self-reliance, friendship, and technology. A perfect read for back to school — no matter what that looks like.</p>
                <p class="book-explanation">Duff Fraser can’t leave his stutter behind even on the soccer field. Ambushed by a bully from the rival team, he limps home. Duff and his dad team up to create the F.U.S.E., a device that alters brain pathways and lets Duff speak normally. Then hoodlums snatch his dad off the street. Will Duff, armed with newfound confidence, robots, drones, and best of all, good friends, be able to find him?</p>
            </div>
            <div class="container">
                <div class="book-images">
                    <iframe class="book-image" type="text/html" width="414" height="724" frameborder="0" allowfullscreen style="max-width:100%" src="https://read.amazon.ca/kp/card?asin=B08L5SR3T4&preview=newtab&linkCode=kpe&ref_=cm_sw_r_kb_dp_RD1IFbHYJWH1R" ></iframe>
                </div>
                <div class="buttons">
                    <?php $buy= "https://www.amazon.com/Tangled-Tongue-F-U-S-Adventure-ebook/dp/B08L5SR3T4/ref=sr_1_1?dchild=1&qid=1602869977&refinements=p_27%3AJean+Husband&s=books&sr=1-1" ?>
                    <a class="buy-button" style="align-self: flex-end"
                            href="<?= $buy ?>">
                        Buy now
                    </a>
                    <a class="buy-button" style="align-self: flex-end" href="https://www.westernskybooks.com/">Buy Locally at Western Sky Books in Port Coquitlam</a>
                </div>
            </div>
        </section>
    </main>
    </div>

    <footer>
        <?php
            include 'templates/footer.php';
        ?>
    </footer>

    <?php
        include 'templates/scripts.php';
    ?>
</body>
</html>