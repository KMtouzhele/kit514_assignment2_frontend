<?php
class LapsView
{
    public function output($laps)
    {
        ?>
        <h1>Laps</h1>
        <table>
            <tr>
                <th>Lap Number</th>
                <th>Entrant</th>
                <th>Time</th>
                <th>Crashed</th>
            </tr>
            <?php
            foreach ($laps as $lap) {
                // Displaying multiple entrants and lap times for each lap number
                foreach ($lap['lapTimes'] as $lt) {
                    ?>
                    <tr>
                        <td><?php echo $lap['number']; ?></td> <!-- Lap number -->
                        <td><?php echo $lt['entrant']; ?></td> <!-- Entrant -->
                        <td><?php echo $lt['time']; ?></td> <!-- Time -->
                        <td><?php echo $lt['crashed'] ? 'Yes' : 'No'; ?></td> <!-- Crashed -->
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
        <?php
    }
}
