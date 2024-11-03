<?php
class AddTrackView
{
    public function output()
    {
        ?>
        <h1>Add Track</h1>
        <form action="index.php?controller=track&action=add" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="type">Type:</label>
            <input type="text" id="type" name="type" required>
            <br>
            <label for="baseLapTime">Base Lap Time:</label>
            <input type="text" id="baseLapTime" name="baseLapTime" required>
            <br>
            <label for="laps">Lap Count:</label>
            <input type="text" id="laps" name="laps" required>
            <br>
            <input type="submit" value="Add Track">
        </form>
        <?php
    }
}