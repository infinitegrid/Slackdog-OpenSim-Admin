<?
if($_SESSION[ADMINUID] == $ADMINCHECK){
?>
<style type="text/css">
<!--
.Stil1 {font-size: 18px;font-weight: bold;}
.box {font-size: 12px;height: 20;}
.Stil4 {font-size: 14}
-->
</style>

<?
$DbLink = new DB;

if($_POST[Submitreg]=="Save"){
$DbLink->query("UPDATE ".C_ADM_TBL." SET adress='$_POST[adressset]',region='$_POST[regtyp]',startregion='$_POST[region]'");
}

if($_POST[Submit2]=="Save"){
if($_POST[lastname] != ""){
$DbLink->query("SELECT name FROM ".C_NAMES_TBL." Where name='$_POST[lastname]'");
list($checkname) = $DbLink->next_record();

if($checkname){

}else{
$DbLink->query("INSERT INTO ".C_NAMES_TBL." (name,active)VALUES('$_POST[lastname]','1')");
}
}
}

if($_POST[Submit3]=="Save"){
$DbLink->query("UPDATE ".C_NAMES_TBL." SET active='0' WHERE name='$_POST[deactivelast]'");
}

if($_POST[Submit4]=="Save"){
$DbLink->query("UPDATE ".C_NAMES_TBL." SET active='1' WHERE name='$_POST[activatelast]'");
}

if($_POST[Submit5]=="Save"){
$DbLink->query("DELETE FROM ".C_NAMES_TBL." WHERE name='$_POST[delname]'");
}

if($_POST[Submitgau]=="Save"){
$DbLink->query("UPDATE ".C_ADM_TBL." SET griddir='$_POST[griddir]',assetdir='$_POST[assetdir]',userdir='$_POST[userdir]'");
}

if($_POST[Submitnam2]=="Activate"){
$DbLink->query("UPDATE ".C_ADM_TBL." SET lastnames='1'");
}

if($_POST[Submitnam2]=="Deactivate"){
$DbLink->query("UPDATE ".C_ADM_TBL." SET lastnames='0'");
}

$DbLink->query("SELECT griddir,assetdir,userdir,lastnames,region,startregion,adress FROM ".C_ADM_TBL."");
list($GRIDSDIR,$ASSETSDIR,$USERSDIR,$LASTNMS,$REGIOCHECK,$STARTREGION,$ADRESSCHECK) = $DbLink->next_record();

?>
<table width="100%" height="100%" border="0" align="center">
            <tr>
              <td valign="top"><table width="50%" border="0" align="center">
                <tr>
                  <td><p align="center" class="Stil1">Admin Settings </p>                  </td>
                </tr>
              </table>

              <br />
              
              <table width="64%" border="0" align="center" cellpadding="3" cellspacing="1" class="box">
                <tr>
                  <td colspan="2"><table width="100%" border="0" cellpadding="5" cellspacing="0">
                    <form id="form41" name="form41" method="post" action="index.php?page=settings">
				<tr>
                  <td width="373" bgcolor="#FFFFFF"><span class="Stil4">Start Region changeable at:</span>
                    <select class="box" wide="25" name="regtyp" >
					  <?
					  echo "
                       <option value='0' " . ($REGIOCHECK == '0' ? 'selected' : '') . ">Create/Edit Account</option>
					   <option value='1' " . ($REGIOCHECK == '1' ? 'selected' : '') . ">Edit Account</option>
					   <option value='2' " . ($REGIOCHECK == '2' ? 'selected' : '') . ">Admin only</option>
					   ";

					  ?> 
                  </select>                  </td>
                  <td width="205" bgcolor="#FFFFFF">
				  <span class="Stil4">Startregion:</span>				  
				  <select class="box" wide="25" name="region">
                    <?   
	  $DbLink->query("SELECT regionName,regionHandle FROM ".C_REGIONS_TBL." ORDER BY regionName ASC ");
	  while(list($RegionName,$RegionHandle) = $DbLink->next_record())
	  {
	  echo"<option value='$RegionHandle' " . ($STARTREGION == '$RegionHandle' ? 'selected' : '') . ">$RegionName</option>";
	  }
      ?>
                  </select></td>
                </tr>
				<tr>
				  <td bgcolor="#FFFFFF"><span class="Stil4">Require address for account creation?</span>
				  <select class="box" wide="25" name="adressset" >
                      <?
					  echo " 
                       <option value='0' " . ($ADRESSCHECK == '0' ? 'selected' : '') . ">NO</option>
					   <option value='1' " . ($ADRESSCHECK == '1' ? 'selected' : '') . ">YES</option>
					   ";

					  ?>
                  </select></td>
				  <td bgcolor="#FFFFFF">
				    <div align="center">
				      <input type="submit" name="Submitreg" value="Save" />
		            </div></td>
				  </tr>
				</form>
                  </table></td>
                </tr>
                <tr>
                  <td><span class="Stil4"></span></td>
                  <td>&nbsp;</td>
                </tr>
				<form id="form6" name="form6" method="post" action="index.php?page=settings">
                <tr>
				  <td bgcolor="#FFFFFF"><span class="Stil4">Grid Server Log Directory </span></td>
                  <td bgcolor="#FFFFFF"><input type="text" value="<?=$GRIDSDIR?>" name="griddir"></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF"><span class="Stil4">Asset Server Log Directory </span></td>
                  <td bgcolor="#FFFFFF"><input type="text" value="<?=$ASSETSDIR?>" name="assetdir" />
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF"><span class="Stil4">User Server Log Directory </span></td>
                  <td bgcolor="#FFFFFF"><input type="text" value="<?=$USERSDIR?>" name="userdir" />
                  <input type="submit" name="Submitgau" value="Save" /></td>
                </tr>
				</form>
                <tr>
                  <td><span class="Stil4"></span></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
				<form id="form9" name="form9" method="post" action="index.php?page=settings">
                  <td width="58%" bgcolor="#FFFFFF"><span class="Stil4">Activate Lastnames </span></td>
                  <td width="42%" bgcolor="#FFFFFF">
				  <? if($LASTNMS==0){?>
				  <input type="submit" name="Submitnam2" value="Activate" />
				  <? }else{?>
				  <input type="submit" name="Submitnam2" value="Deactivate" />
				  <? } ?>				  </td>
				</form>
                </tr>
				<form id="form2" name="form2" method="post" action="index.php?page=settings">
                <tr>
                  <td bgcolor="#FFFFFF"><span class="Stil4">Add last name </span></td>
                  <td bgcolor="#FFFFFF">
                    <input type="text" name="lastname" />
                    <input type="submit" name="Submit2" value="Save" />                  </td>
                </tr>
				</form>
                
                <form id="form3" name="form3" method="post" action="index.php?page=settings">
				<tr>
                  <td bgcolor="#FFFFFF"><span class="Stil4">Deactivate last name </span></td>
                  <td bgcolor="#FFFFFF">
				  <select class="box" wide="25" name="deactivelast">
                    <?
	  $DbLink->query("SELECT name FROM ".C_NAMES_TBL." WHERE active=1 ORDER BY name ASC ");
	  while(list($NAMEDB) = $DbLink->next_record())
	  {
	  ?>
                    <option>
                    <?=$NAMEDB?>
                    </option>
                    <?	
	  }
      ?>
                  </select>
                  <input type="submit" name="Submit3" value="Save" /></td>
                </tr>
				</form>
                
				<form id="form4" name="form4" method="post" action="index.php?page=settings">
                <tr>
                  <td bgcolor="#FFFFFF"><span class="Stil4">Reactivate last name </span></td>
                  <td bgcolor="#FFFFFF"><select class="box" wide="25" name="activatelast">
                    <?
	  $DbLink->query("SELECT name FROM ".C_NAMES_TBL." WHERE active=0 ORDER BY name ASC ");
	  while(list($NAMEDB) = $DbLink->next_record())
	  {
	  ?>
                    <option>
                    <?=$NAMEDB?>
                    </option>
                    <?	
	  }
      ?>
                  </select>
                  <input type="submit" name="Submit4" value="Save" /></td>
                </tr>
				</form>
                
				<form id="form5" name="form5" method="post" action="index.php?page=settings">
                <tr>
                  <td bgcolor="#FFFFFF"><span class="Stil4">Delete last name </span></td>
                  <td bgcolor="#FFFFFF"><select class="box" wide="25" name="delname">
                    <?
	  $DbLink->query("SELECT name FROM ".C_NAMES_TBL." ORDER BY name ASC ");
	  while(list($NAMEDB) = $DbLink->next_record())
	  {
	  ?>
                    <option>
                    <?=$NAMEDB?>
                    </option>
                    <?	
	  }
      ?>
                  </select>
                  <input type="submit" name="Submit5" value="Save" /></td>
                </tr>
				</form>
              </table></td>
            </tr>
</table>
<?
}
?>