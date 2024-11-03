<?php
class AddCarView
{
    public function output()
    {
        ?>
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
        <?php
    }
}