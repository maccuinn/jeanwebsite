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
        <form class="buy-box" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <p>
            CDN $15.00
            </p>
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="HQZDB9GDJTRVL">
            <input type="hidden" name="on0" value="Picture Book">
            <input type="hidden" name="os0" value="$15.00">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
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



