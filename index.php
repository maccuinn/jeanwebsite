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
                <dsc-polymer-carousel interval="5" style="--carousel-height:413px" height="413px" parallax>
                    <section background="imgs/marvel-quilt.png"><a href="quilts.php#marvel"></a></section>
                    <section background="imgs/surprise-quilt.png"><a href="quilts.php#surprise"></a></section>
                    <section background="imgs/william_quilt.jpg"><a href="quilts.php#william"></a></section>
                    <section background="imgs/skimmerhorns_quilt.jpg"><a href="quilts.php#skimmerhorns"></a></section>
                    <section background="imgs/owl_moon_quilt.jpg"><a href="quilts.php#owl_moon"></a></section>
                    <section background="imgs/car-quilt-large.png"><a href="quilts.php#car"></a></section>
                </dsc-polymer-carousel>
                <div class="buttons">
                    <a class="more-info-button" href="quilts.php">More Quilts</a>
                </div>
            </div>
        </section>

        <section class="about">
            <h1>Grandma Extraordinaire</h1>
            <div class="img-container">
                <picture class="about-image">
                    <source srcset="imgs/jean-about-small.png" media="(max-width: 805px)">
                    <img src="imgs/jean-about-photo.png" alt="Jean headshot">
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
            <?php
                include 'templates/featured-book.php';
            ?>
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