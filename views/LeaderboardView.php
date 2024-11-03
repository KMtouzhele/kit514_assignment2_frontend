<?php
class LeaderboardView
{
    public function output($leaderboard)
    {
        ?>
        <h1>Leaderboard</h1>
        <table>
            <tr>
                <th>Position</th>
                <th>Number</th>
                <th>Name</th>
                <th>Short Name</th>
                <th>Laps</th>
                <th>Time</th>
            </tr>
            <?php
            foreach ($leaderboard as $position => $entry) {
                ?>
                <tr>
                    <td><?php echo $position + 1; ?></td>
                    <td><?php echo $entry['number']; ?></td>
                    <td><?php echo $entry['name']; ?></td>
                    <td><?php echo $entry['shortName']; ?></td>
                    <td><?php echo $entry['laps']; ?></td>
                    <td><?php echo $entry['time']; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    }
}