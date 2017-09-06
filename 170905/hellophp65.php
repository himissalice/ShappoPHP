<?php
$mysqli = new mysqli('localhost','root','root', 'iii');
$result = $mysqli->query("SELECT * FORM member WHERE id=26"); //這行不對
$data = $result->fetch_object();
?>

<table boder="1" width="100%">
    <tr>
        <td><?php echo $data->id; ?></td>
        <td><?php echo $data->account; ?></td>
        <td><?php echo $data->realname; ?></td>
    </tr>
</table>
