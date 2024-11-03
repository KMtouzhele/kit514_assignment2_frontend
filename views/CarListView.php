<?php
class CarListView
{
    public function output($cars)
    {
        ?>
        <h1>Cars</h1>
        <a href="?controller=car&action=toAdd">Add Car</a>
        <table>
            <tr>
                <th>id</th>
                <th>Race Suitability</th>
                <th>Street Suitability</th>
                <th>Reliability</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($cars as $car) { ?>
                <tr>
                    <td><?php echo $car['id']; ?></td>
                    <td><?php echo $car['suitability']['race']; ?></td>
                    <td><?php echo $car['suitability']['street']; ?></td>
                    <td><?php echo $car['reliability']; ?></td>
                    <td>
                        <a href="?controller=car&action=delete&id=<?php echo $car['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <?php
    }
}