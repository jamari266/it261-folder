<footer>
<div class="inner">
<ul>
<li>Copyright <?= date('Y') ?></li>
<li>All Right Reserved</li>
<li><a href="../../index.php">web Design by jamari<li>
<li><a href="">HTML VALID<li>
<li><a href="">CSS VALID<li>


</ul>


</div>

</footer>

<?php
//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);
?>

</body>

</html>