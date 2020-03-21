<link rel="stylesheet" href="style.css" type="text/css">
<?php
require "classes.php";
$w = new Widget([
    new Match(
        new Team("Fnatic","https://static.hltv.org/images/bigflags/30x20/SE.gif"),
        new Team("North","https://static.hltv.org/images/bigflags/30x20/DK.gif"),
        new Score(4,10)
    ),
    new Match(
        new Team("Fnatic","https://static.hltv.org/images/bigflags/30x20/SE.gif"),
        new Team("North","https://static.hltv.org/images/bigflags/30x20/DK.gif"),
        new Score(4,10)
    ),
    new Match(
        new Team("Fnatic","https://static.hltv.org/images/bigflags/30x20/SE.gif"),
        new Team("North","https://static.hltv.org/images/bigflags/30x20/DK.gif"),
        new Score(4,10)
    ),
]);
$w->render();