<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task Manager</title>
</head>

<body>
  <h1>Task Manager</h1>
  <a href="add_task.php">Add new Task</a>
  <table border="1" cellpadding="10">
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Status</th>
      <th>Action</th>
    </tr>

    <?php
    $sql = "SELECT * FROM tasks";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td><a href='edit_task.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete_task.php?id=" . $row['id'] . "'>Delete</a></td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='5'>No task found</td></tr>";
    }
    ?>

  </table>

</body>

</html>