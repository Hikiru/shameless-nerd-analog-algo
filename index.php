<?php
include_once "src/config.php"; ?>

<html lang="en">
    <html>
        <head>
            <title>Snacc</title>
            <link rel="icon" href="media/reid.jpg" />
        </head>

        <body>
            <main>
                <h1>
                    <img src="media/reid.jpg" style="width: 100px" />
                    Shameless Nerd Analog Community Curation
                </h1>
                <h3>AKA, Snacc</h3>
                <form action="src/submit.php" method="post">
                    <label for="movie">Favorite movie?</label>
                    <input type="text" id="movie" name="movie" /><br /><br />
                    <label for="book">Favorite book?</label>
                    <input type="text" id="book" name="book" /><br /><br />
                    <input type="submit" value="Submit" />
                </form>
            </main>
        </body>
    </html>
</html>
