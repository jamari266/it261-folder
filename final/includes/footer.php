<footer>
<div id="inner-footer">
<ul>
<li>Copyright &copy;
<?php echo date('Y') ; ?>
</li>
<li>All Rights Reserved</li>
<li><a href="../index.php">Web Design by jamari</a></li>
<li><a id="html-checker" href="a">HTML Validation</a></li>
<li><a id="css-checker" href="a">CSS Validation</a></li>

</ul>
</div>



</footer>

<script>
document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?url=" + location.href);
</script>



</body>
</html>