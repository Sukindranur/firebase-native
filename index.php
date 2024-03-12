<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
?>


<a href="add.php"><button>Add Data</button></a>
<table border="1" widht="500">
    <tr>
        <td>Thumbnail</td>
        <td>Title</td>
        <td>Year</td>
        <td>Rating</td>
        <td colspan="2">Action</td>
    </tr>

    <?php
    $data = $db->retrieve("film");
    $data = json_decode($data, 1);

    foreach ($data as $id => $film) {
        if (is_array($film) && isset($film['thumbnail']) && isset($film['title']) && isset($film['year']) && isset($film['rating'])) {
            echo "<tr>
                    <td><img src='{$film['thumbnail']}'></td>
                    <td>{$film['title']}</td>
                    <td>{$film['year']}</td>
                    <td>{$film['rating']}</td>
                    <td><a href='edit.php?id=$id'>EDIT</a></td>
                    <td><a href='delete.php?id=$id'>DELETE</a></td>
                  </tr>";
        }
    }
    ?>
</table>