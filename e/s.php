<?
	header("Content-Type: text/html; charset=utf-8");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS" />
<meta http-equiv="Cache-Control" content="no-cache" /> 
<title>result</title>
</head>
<body>
<?
	$c=escapeshellcmd($_POST[s]);
?>
[e-&gt;j]  <a href="../j/">[j-&gt;e]</a><br /><br />
<form action="s.php" method="post">
<input type="text" name="s" value="<? print "$c"; ?>" format="*m" />
<select name="t" size="1">
<option value="0" selected>init</option>
<option value="1">match</option>
<option value="2">include</option>
</select>
<input type="submit" value="search" />
&nbsp;
<input type="button" name="change" value="e-&gt;j" onClick="location.href='../j/s.php'" />
</form>
<hr />
<?
	$f="eijiro79.txt";
	$t=escapeshellcmd($_POST[t]);
	if($t==0)	// init
		$r=`grep -e '^■\<$c\>' $f | perl -pe 's/\n/<br \/>\n/'`;
	if($t==1)	// match
		$r=`grep -e '\<$c\>' $f | perl -pe 's/\n/<br \/>\n/'`;
	if($t==2)	// include
		$r=`grep -i $c $f | perl -pe 's/\n/<br \/>\n/'`;
	print "$r";
?>
</body>
</html>
