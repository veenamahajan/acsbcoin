<?
#################################################################
## PHP Pro Bid v6.04															##
##-------------------------------------------------------------##
## Copyright �2007 PHP Pro Software LTD. All rights reserved.	##
##-------------------------------------------------------------##
#################################################################

if ( !defined('INCLUDED') ) { die("Access Denied"); }
?>
<div class="mainhead"><img src="images/auction.gif" align="absmiddle"> <?=$header_section;?></div>
<?=$msg_changes_saved;?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="4"><img src="images/c1.gif" width="4" height="4"></td>
		<td width="100%" class="ftop"><img src="images/pixel.gif" width="1" height="1"></td>
		<td width="4"><img src="images/c2.gif" width="4" height="4"></td>
	</tr>
</table>
<table width="100%" border="0" cellpadding="3" cellspacing="3" class="fside">
	<tr>
      <td colspan="5" class="c3"><img src="images/subt.gif" align="absmiddle" hspace="4" vspace="2"> <b><?=strtoupper($subpage_title);?></b></td>
   </tr>
   <tr>
      <td colspan="5" align="center"><?=$query_results_message;?></td>
   </tr>
   <tr class="c4">
      <td width="100"><?=AMSG_TOPIC_ID;?></td>
      <td><?=AMSG_TOPIC_NAME;?></td>
      <td width="110" align="center"><?=AMSG_NB_MESSAGES;?></td>
      <td width="110" align="center"><?=AMSG_OPTIONS;?></td>
   </tr>
   <?=$messaging_content;?>
   <tr>
      <td colspan="5" align="center"><?=$pagination;?></td>
   </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td width="4"><img src="images/c3.gif" width="4" height="4"></td>
	<td width="100%" class="fbottom"><img src="images/pixel.gif" width="1" height="1"></td>
	<td width="4"><img src="images/c4.gif" width="4" height="4"></td>
</tr>
</table>