<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Peyton Resume</title>
    <link rel="stylesheet" type="text/css"
          href="../probono/style.css">
</head>

<!-- the body section -->
<body>
<header>
    <div class="nav" id="nav">
        <ul>
            <li><a href="https://www.linkedin.com/in/peyton-clark-b11747117/">LinkedIn</a></li>
            <li><a href="https://twitter.com/fedesso">Twitter</a></li>
            <li><a href="https://github.com/pclark96">GitHub</a></li>
        </ul>
    </div>
</header>

<script>
        var nav = document.getElementById('nav');

        window.onscroll = function() {
            if (window.pageYOffset > 500) {
                nav.style.background = "orange";
                nav.style.boxShadow = "0px 4px 2px transparent";
            } else {
                nav.style.background = "transparent";
                nav.style.boxShadow = "none";
            }
        }
</script>
