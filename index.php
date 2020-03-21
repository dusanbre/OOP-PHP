<link rel="stylesheet" href="style.css" type="text/css">
<?php
require "matches.php";
require "player.php";
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
$p = new Display_Players([
    new Player (
        "Dusan", "https://static.hltv.org/images/playerprofile/thumb/12089/400.jpeg?v=6", "6"
    ),
    new Player (
        "Dusan", "https://static.hltv.org/images/playerprofile/thumb/12089/400.jpeg?v=6", "6"
    ),
]);
$w->render();
$p->render();