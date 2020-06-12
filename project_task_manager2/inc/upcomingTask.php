<?php 
    if(mysqli_num_rows($result)==0){
?>
<p>No Tasks found</p>
<?php
    }else{
?>

<h4>Upcoming Tasks</h4>
<form method="POST" action="/project/project_task_manager/tasks.php">
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Task</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while ($data = mysqli_fetch_assoc($result)) {
                    $timestamp = strtotime($data['date']);
                    $date = date("jS M, Y", $timestamp);
            ?>
            <tr>
                <td><input name="taskids[]" class="label-inline" type="checkbox" value="<?php echo $data['Id'];?>"></td>
                <td><?php echo $data['Id'];?></td>
                <td><?php echo $data['task'];?></td>
                <td><?php echo $date;?></td>
                <td><a class="delete" data-taskid="<?php echo $data['Id'];?>" href='#'>Delete</a> | <a class="complete"
                        data-taskid="<?php echo $data['Id'];?>" href='#'>completed</a></td>
            </tr>
            <?php
                }
                mysqli_close($connection);
            ?>
        </tbody>
    </table>
    <select id="action" name="action">
        <option value="0">With Selected</option>
        <option value="bulkdelete">Delete</option>
        <option value="bulkcomplete">Mark As Complete</option>
    </select>
    <input class="button-primary" id="bulksubmit" type="submit" value="Submit">
</form>
<?php 
    } 
?>