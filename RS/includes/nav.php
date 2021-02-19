<ul>
    <?php

    foreach ($navItems as $nav) {
        echo "<li><a href=\"$nav[slug]\">$nav[title] </a></li>";
    }

    ?>
</ul>