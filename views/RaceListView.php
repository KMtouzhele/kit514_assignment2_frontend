<?php
class RaceListView
{
    public function output($races)
    {
        ?>
        <h1>Races</h1>
        <table>
            <tr>
                <th>id</th>
                <th>track</th>
                <th>Actions</th>
            </tr>
            <?php
            foreach ($races as $race) {
                ?>
                <tr>
                    <td><?php echo $race['id']; ?></td>
                    <td><?php echo $race['track']['name']; ?></td>
                    <td>
                        <a href="?controller=race&action=leaderboard&id=<?php echo $race['id']; ?>">Show Leaderboard</a>
                        <a href="?controller=race&action=laps&id=<?php echo $race['id']; ?>">Show Laps</a>
                    </td>

                </tr>
                <?php
            }
            ?>
        </table>
        <a href="?controller=race&action=awesome">Show Awesome Drivers</a>
        <?php
    }
}