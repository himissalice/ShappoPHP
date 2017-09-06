<?php
     if(isset($_REQUEST['RRR']))




<script>
    function chForm(){
        return false;
    }
</script>

<form action="hellophp20.php" method="get">
      <input name="account"><br>
      <input type="password" name="passwd"><br>

      <input type="radio" name="gender" value="m">Male
      <input type="radio" name="gender" value="f">Female<br>

      <input type="submit" name="RRRRR" value="OK1">
      <input type="submit" name="RRRRR" value="OK2"><br>

      <input type="checkbox" name="hobby[]" value="1">Being Shappo
      <input type="checkbox" name="hobby[]" value="2">Drawing Shappo<br>
      <input type="checkbox" name="hobby[]" value="3">Looking at Shappo
      <input type="checkbox" name="hobby[]" value="4">Eating Shappo<br>

      <textarea name="memo" rows="10" cols="40"></textarea><br>
      <input type="file" name="upload" />

        <select>
            <option value="10">去洗澡</option>>
            <option value="20">去睡覺</option>>
            <option value="30">去吃飯</option>>
            <option value="40">去玩耍</option>>
        </select>

</form>

<hr>

<!--Event ==> onXxx＝“處理事件（JS）”-->
<form action="hellophp21.php" onsubmit="return chForm(); method="get">
    <input type="text" name="account"><br>
    <input type="password" name="passwd"><br>

    <input type="submit" value="OK">
</form>

<hr>
<form action="hellophp22.php">
    <input type="test" name="account" /><br>
    <input type="submit" value="OK" />

</form>

