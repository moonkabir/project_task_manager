<?php 
if(mysqli_num_rows($resultCompleteTasks) > 0){
    ?>
<h4>Complete Tasks</h4>
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
    while ($cdata = mysqli_fetch_assoc($resultCompleteTasks)) {
        $timestamp = strtotime($cdata['date']);
        $cdate = date("jS M, Y", $timestamp);
        ?>
        <tr>
            <td><input class="label-inline" type="checkbox" value="<?php echo $cdata['Id'];?>"></td>
            <td><?php echo $cdata['Id'];?></td>
            <td><?php echo $cdata['task'];?></td>
            <td><?php echo $cdate;?></td>
            <td><a class="delete" data-taskid="<?php echo $cdata['Id'];?>" href='#'>Delete</a> | <a class="incomplete"
                    data-taskid="<?php echo $cdata['Id'];?>" href='#'>Mark Incomplete</a></td>
        </tr>
        <?php
    }
        ?>
    </tbody>
</table>
<p>...</p>
<?php
}
?>