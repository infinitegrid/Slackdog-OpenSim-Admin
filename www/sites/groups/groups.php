<?
if($_SESSION[USERID] == ""){
echo "<script language='javascript'>
<!--
window.location.href='index.php?page=home';
// -->
</script>";
}
else
{ 
?>
<link href="/css/site.css" rel="stylesheet" type="text/css">
<?
}