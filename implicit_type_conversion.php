<p><a href="http://github.com/mosbth/Utility/blob/master/<?php echo basename(__FILE__); ?>"><em>This file is part of Utility project on GitHub</em></a>

<?php
$ant = "2-1a";

echo "<p>int: ", intval($ant);
echo "<p>string: ", strval($ant);
echo "<p>(int)string: ", (int)strval($ant);
echo "<p>float: ", floatval($ant);

echo "<p>int == string ? ", intval($ant) == strval($ant) ? "true" : "false";
echo "<p>int == (int)string ? ", intval($ant) == (int)strval($ant) ? "true" : "false";

echo "<p>int === string ? ", intval($ant) === strval($ant) ? "true" : "false";
echo "<p>int === (int)string ? ", intval($ant) === (int)strval($ant) ? "true" : "false";

?>

<p><a href="source.php?file=<?php echo basename(__FILE__); ?>"><em>Sourcecode</em></a>
