<?php
class AwesomeView
{
    public function output($drivers)
    {
        ?>
        <h1>Awesome Drivers</h1>
        <table>
            <tr>
                <th>Place</th>
                <th>Name</th>
                <th>Short Name</th>
                <th>Total Score</th>
            </tr>
            <?php
            $place = 1;
            foreach ($drivers as $driver) {
                ?>
                <tr>
                    <td><?php echo $place; ?></td>
                    <td><?php echo $driver['name']; ?></td>
                    <td><?php echo $driver['shortName']; ?></td>
                    <td><?php echo $driver['score']; ?></td>
                </tr>
                <?php
                $place++;
            }
            ?>
        </table>
        <?php
    }
}