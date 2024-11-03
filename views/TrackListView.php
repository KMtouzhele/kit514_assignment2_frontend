<?php
class TrackListView
{
    public function output($tracks)
    {
        ?>
        <h1>Tracks</h1>
        <a href="?controller=track&action=toAdd">Add Track</a>
        <table>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Base Lap Time</th>
                <th>Lap Count</th>
                <th>Actions</th>
            </tr>
            <?php
            foreach ($tracks as $track) {
                ?>
                <tr>
                    <td><?php echo $track['name']; ?></td>
                    <td><?php echo $track['type']; ?></td>
                    <td><?php echo $track['baseLapTime']; ?></td>
                    <td><?php echo $track['laps']; ?></td>
                    <td>
                        <a href="?controller=track&action=delete&id=<?php echo $track['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    }
}