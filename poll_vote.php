<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 0) {
  $abhijit = $abhijit + 1;
}
if ($vote == 1) {
  $monal = $monal + 1;
}

//insert votes to txt file
$insertvote = $abhijit."||".$monal;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Yes:</td>
<td><img src="poll.gif"
width='<?php echo(100*round($abhijit/($monal+$abhijit),2)); ?>'
height='20'>
<?php echo(100*round($abhijit/($monal+$abhijit),2)); ?>%
</td>
</tr>
<tr>
<td>No:</td>
<td><img src="poll.gif"
width='<?php echo(100*round($abhijit/($monal+$abhijit),2)); ?>'
height='20'>
<?php echo(100*round($abhijit/($monal+$abhijit),2)); ?>%
</td>
</tr>
</table>
