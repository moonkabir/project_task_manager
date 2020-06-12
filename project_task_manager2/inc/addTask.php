<p>...</p>
    <h4>Add Tasks</h4>
    <form method="post" action="/project/project_task_manager/tasks.php">
        <fieldset>
        <?php
            $added = $_GET['added']??'';
            if ($added) {
                echo "<p> Task successfully added</p>";
            }
        ?>
            <label for="task">Task</label>
            <input type="text" placeholder="Task Details" id="task" name="task">
            <label for="date">Date</label>
            <input type="text" placeholder="Task Date" id="date" name="date">
            <input class="button-primary" type="submit" value="Add Task">
            <input type="hidden" name="action" value="Add">
        </fieldset>
    </form>
</div>