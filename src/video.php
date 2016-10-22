<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Mosher/Rapp Home Movies (1967-1978)</title>
    <link href="video.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
<iframe width="660" height="525" src="https://www.youtube.com/embed/<?php echo $_GET['vidid']; ?>"></iframe>
<p>
Click the movie to play it. You can drag the slider to skip around in the movie.
</p>



<table border="1" class="scene">
<caption>Scenes</caption>
<thead>
<tr><th>Date</th><th>Theme</th><th>People</th><th>Location</th></tr>
</thead>
<tbody>
<?php

define("STATE_START",0);
define("STATE_FILM",1);
define("STATE_END",2);

$chron = fopen("chron.txt","rt");
$state = STATE_START;
while (($lin = stream_get_line($chron,65536,"\n")) && $state != STATE_END)
{
  $lin = trim($lin);
  if ($lin[0] == '#')
  {
    continue;
  }

  if ($state == STATE_START)
  {
    if ($lin[0] == '*' && substr($lin,-4) == $_GET['filmnum'])
    {
      $state = STATE_FILM;
    }
  }
  else if ($state == STATE_FILM)
  {
    if ($lin[0] == '*')
      $state = STATE_END;
    else
    {
      preg_match('/([^,]*),([^,]*),([^,]*),?([^,]*)/',$lin,$regs);

      if ($regs[3] == "WH")
        $regs[3] = "Windsor Hills";
      else if ($regs[3] == "NM")
        $regs[3] = "Normandy Manor";
      else if ($regs[3] == "Shelb" || $regs[3] == "Shelb.")
        $regs[3] = "Shelburne";

      echo "<tr><td>{$regs[4]}</td><td>{$regs[1]}</td><td>{$regs[2]}</td><td>{$regs[3]}</td></tr>\n";
    }
  }
}
fclose($chron);

?>
</tbody>
</table>




  </body>
</html>
