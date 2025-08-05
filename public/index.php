<?PHP 
echo "<h3></h3>";
//foreach (glob($dir."materials/"."*.tif*") as $filename) 
foreach (glob($dir."*.pdf*") as $filename) 
//{echo "<a href=\"$filename\">".basename("$filename", ".d")."</a>"."<br />"; }
//With size and date
//{echo "<a href=\"$filename\">".basename("$filename", ".d")."</a>"."&nbsp;&nbsp;&nbsp;"."<b><font size=2> (".(round((filesize("$filename")/1024), 0))." Kb)"."&nbsp;&nbsp;&nbsp;". date ("M d, Y", filemtime($filename))." </font></b>"."<br />"; }
{echo "<a href=\"$filename\">$filename</a>"."<br />"; }
//echo "<br />"."<br />";