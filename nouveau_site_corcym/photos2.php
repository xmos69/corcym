<?php

include("includes/navbar.php");

?>

<head>
    <link rel="stylesheet" type="text/css" href="css/photos2.css">
    <script src="js/photos2.js"></script>
</head>

<body>
<div class="contenu-carrousel">
<div class="carrousel">
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
</div>
</div>
<div class=controle>
<button onclick="carrousel('-')">❮</button>
<button onclick="carrousel('')">❯</button>
</div>


</body>

<footer class="footer">
    <?php
    include("includes/footer.php");
    ?>
</footer>

</html>