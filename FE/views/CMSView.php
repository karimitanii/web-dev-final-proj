<?php

function listItems() {
    ?>
        <h1>
            <center>
                List of Items
            </center>
        </h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            foreach ($items as $item) { ?>
                <tr>
                    <td><?php echo $item->Id; ?></td>
                    <td><?php echo $item->name; ?></td>
                    <td><?php echo $item->description; ?></td>
                    <td><?php echo $item->isActive ? "Active" : "Deactivated"; ?></td>
                    <td>
                        <form name="activateForm" method="post" action="">
                            <input type="hidden" name="id" value="<?php echo $item->Id; ?>">
                            <input type="hidden" name="name" value="<?php echo $item->name; ?>">
                            <input type="hidden" name="description" value="<?php echo $item->description; ?>">
                            <input type="hidden" name="activate" value="<?php echo $item->isActive ? 0 : 1; ?>">
                            <input type="submit" value="<?php echo $item->isActive ? "Deactivate" : "Activate"; ?>">
                        </form>
                    </td>
                    <td>
                        <form name="deleteForm" method="post" action="">
                            <input type="hidden" name="id" value="<?php echo $item->Id; ?>">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    <?php
    


}
function addItemForm() {
    ?>
    <form method="POST" action="../../BE/addItem-be.php">
                    <div class="form-group">
                            <label for="platter">ID</label>
                            <input type="text" class="form-control" id="id-plate" name="id" required>
                        </div>
                        <div class="form-group">
                            <label for="platter">Platter Name</label>
                            <input type="text" class="form-control" id="platter" name="platter" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="isActive">Is Active</label>
                            <select class="form-control" id="isActive" name="isActive">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <button type="submit" class="button-additem" onclick="addItem()">Add Item</button>
                    </form>
<?php
}
?>