<?php

use GuzzleHttp\Psr7\Header;
class DriverListView
{
    public function output($drivers)
    {
        ?>
        <h1>Drivers</h1>
        <a href="?controller=driver&action=toAdd">Add Driver</a>
        <table>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Short Name</th>
                <th>Race Skill</th>
                <th>Street Skill</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($drivers as $driver) { ?>
                <tr>
                    <td><?php echo $driver['number']; ?></td>
                    <td><?php echo $driver['name']; ?></td>
                    <td><?php echo $driver['shortName']; ?></td>
                    <td><?php echo $driver['skill']['race']; ?></td>
                    <td><?php echo $driver['skill']['street']; ?></td>
                    <td>
                        <a href="?controller=driver&action=delete&number=<?php echo $driver['number']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <?php
    }
}
?>