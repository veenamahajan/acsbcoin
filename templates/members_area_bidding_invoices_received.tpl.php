<?
#################################################################
## PHP Pro Bid v6.00															##
##-------------------------------------------------------------##
## Copyright �2007 PHP Pro Software LTD. All rights reserved.	##
##-------------------------------------------------------------##
#################################################################

if ( !defined('INCLUDED') ) { die("Access Denied"); }
?>
<br>
<table width="100%" border="0" cellpadding="3" cellspacing="2" class="border">
	<tr>
      <td colspan="5" class="c7"><b><?=MSG_MM_INVOICES_RECEIVED;?></b> (<?=$nb_items;?> <?=MSG_INVOICES;?>)</td>
   </tr>
   <tr>
      <td colspan="5" class="c5"></td>
   </tr>
  	<?=$invoices_received_content;?>
   <? if ($nb_items>0) { ?>
   <tr>
      <td colspan="5" align="center" class="contentfont"><?=$pagination;?></td>
   </tr>
	<? } ?>
</table>

