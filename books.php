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