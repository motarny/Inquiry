{*
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$MetaTag->HTML_Title}</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="../style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="lib/lightbox/js/prototype.js"></script>
<script type="text/javascript" src="lib/lightbox/js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="lib/lightbox/js/lightbox.js"></script>

<link rel="stylesheet" href="lib/lightbox/css/lightbox.css" type="text/css" media="screen" />

<META NAME="Description" CONTENT="{$MetaTag->HTML_Description}">

</head>

<body>

<!-- Page Description-->
<div style="position:absolute; top:-100px; left:0px">
	{$MetaTag->HTML_Description}
</div>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>

	<td id="marginLeft">&nbsp;</td>

	<td width="950" valign="top" background="images/total-bg.jpg" height="800" >

         <div id="GFX_mainFlash">

         </div>

         <div id="MainContent">

            <div id="PageLabelRegion">
            </div>

            <div id="PageEssential">
               <div id="NaviPath"></div>

               <div id="textContent">

*}
                  <div align="right" style="margin-bottom:15px; margin-top:-20px">
               {if $strefa == ""}
                     <a href="?p=news">&laquo; wróć do listy newsów</a>
				{else}
					<a href="?p=23">&laquo; wróć do komunikatów związkowych</a>
				{/if}
                  </div>

                  <table width="100%" cellpadding="3" cellspacing="0" align="center" id="newsTable" style="line-height:15px">

                     <tr>
					{if $NewsContent->Image != ""}
                        <td width="158" valign="top" align="center">
							<a href="{$NewsContent->Image}" rel="lightbox" title="{$NewsContent->Title}">
							{*<img src="lib/phpThumb/phpThumb.php?src=/Solidarnosc/www cms 2010/{$NewsContent->Image}&wl=150&hl=180" align="left" border="1">*}
							<img src="lib/phpThumb/phpThumb.php?src=/{$NewsContent->Image}&wl=150&hl=180" align="center" border="1">
							</a>
                        </td>
					{/if}
                     <td  valign="top">
                           <b style="font-size:11px"><span style="color:red">{$NewsContent->NewsDate}</a> - {$NewsContent->Title}</b>
                        <BR><BR>
                        <b>{$NewsContent->ShortInfo}</b>

                     </td>

                     </tr>

                  </table>

                   <BR>
                   {$NewsContent->HTMLContent}<BR>


{*
               </div>
            </div>


         </div>

	</td>

	<td id="marginRight">&nbsp;</td>
</tr>
</table>

</body>
</html>
*}