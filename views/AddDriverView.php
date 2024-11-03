<?php
class AddDriverView
{
    public function output()
    {
        ?>
        <h1>Add Driver</h1>
        <form action="index.php?controller=driver&action=add" method="post">
            <label for="number">Number:</label>
            <input type="text" id="number" name="number" required>
            <br>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="shortName">Short Name:</label>
            <input type="text" id="shortName" name="shortName" required>
            <br>
            <label for="race">Race Skill:</label>
            <input type="text" id="race" name="race" required>
            <br>
            <label for="street">Street Skill:</label>
            <input type="text" id="street" name="street" required>
            <br>
            <input type="submit" value="Add Driver">
        </form>
        <?php
    }
}