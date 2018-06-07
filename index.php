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

    <main>
        <section class="quilts">
            <div class="quilt-container">
                <h1>Featured Quilts</h1>
                <paper-carousel items="2" responsive="1050:1" controls="true" dots="true" dottext="false">   
                    <div>
                        <img src="imgs/surprise-quilt.png" alt="">
                    </div>
                    <div>
                        <img src="imgs/william_quilt.jpg" alt="">
                    </div>
                    <div>
                        <img src="imgs/skimmerhorns_quilt.jpg" alt="">
                    </div>
                    <div>
                        <img src="imgs/owl_moon_quilt.jpg" alt="">
                    </div>
                    <div>
                        <img src="imgs/car-quilt-large.png" alt="">
                    </div>
                </paper-carousel>
                <div class="buttons">
                    <p class="more-info-button">More Quilts</p>
                </div>
            </div>
        </section>

        <section class="about">
            <h1>Grandma Extraordinaire</h1>
            <div class="img-container">
                <picture class="about-image">
                    <source srcset="imgs/jean_about-small.jpg" media="(max-width: 805px)">
                    <img src="imgs/jean_about.jpeg" alt="Jean headshot">
                </picture>
            </div>
            <div class="about-info">
                <p>Twenty years ago, the quilting world was opened up to Jean via her step mom Cay and an ambitious project - a queen sized quilt called the Tennassee Waltz. An avid seamstress in her youth, Jean took to quilting right away.</p>
                <p>Fast forward twenty years...retired and ready for a new challenge Jean decided to combine her passions: quilting and writing. Inspired by a trip to the beach with her grandson, a silly time of rhyming and throwing stones, Surprise: A Storybook Quilt was born.</p>
                <p>This site contains just some of the projects this busy grandma has been working on, from books to quilts.</p>
            </div>
            
        </section>

        <section class="books">
            <h1>Featured Book</h1>
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
                    <p class="more-info-button">More Books</p>
                    <p class="purchase-button">Purchase Now</p>
                </div>
            </div>
        </section>
    </main>
    
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