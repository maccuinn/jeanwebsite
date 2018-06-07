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
                    <p class="purchase-button">Purchase Now</p>
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