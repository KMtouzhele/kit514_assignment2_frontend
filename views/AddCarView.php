<?php
class AddCarView
{
    public function output()
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Add Car</title>
            <link rel="stylesheet" href="css/styles.css"> <!-- Include your CSS file here -->
        </head>

        <body>
            <h1>Add Car</h1>
            <form action="index.php?controller=car&action=add" method="post">
                <label for="race">Suitability Race:</label>
                <input type="text" id="race" name="race" required>
                <br>
                <label for="street">Suitability Street:</label>
                <input type="text" id="street" name="street" required>
                <br>
                <label for="reliability">Reliability:</label>
                <input type="text" id="reliability" name="reliability" required>
                <br>
                <input type="submit" value="Add Car">
            </form>
        </body>

        </html>
        <?php
    }
}
