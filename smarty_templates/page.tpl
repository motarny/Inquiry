<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$MetaTag->META_Title}</title>


{*
<script type="text/javascript" src="lib/lightbox/js/prototype.js"></script>
<script type="text/javascript" src="lib/lightbox/js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="lib/lightbox/js/lightbox.js"></script>
*}

<script type="text/javascript" src="JSScripts/jquery.js"></script>

<script type="text/javascript" src="lib/lightbox/js/jquery.lightbox-0.5.pack.js"></script>
<link rel="stylesheet" href="lib/lightbox/css/lightbox.css" type="text/css" media="screen" />

<script src="http://www.panoramy.pro/panobox/panobox_nojq.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://www.panoramy.pro/panobox/panobox.css" media="screen" />



<link href="style.css" rel="stylesheet" type="text/css" />

<META NAME="Description" CONTENT="{$MetaTag->META_Description}">

</head>

<body>


<table width="100%" cellpadding="0" cellspacing="0" border="0" id="MainBackground">
<tr>

	<td id="marginLeft">&nbsp;</td>


		<td width="1000" valign="top" height="275" >

		<table width="1000" cellpadding="0" cellspacing="0" border="0"  background="images/bottomBackCont.jpg">
			<tr>
				<td height="275" style="height:275px"><img src="images/upgfx.jpg"></td>
			</tr>
			<tr>
				<td><table width="1000" cellpadding="0" cellspacing="0"><tr><td width="300" class="PanelLeft" valign="top" style="padding:0px">
								<div style="background-image:url('images/leftColumn.jpg');	background-repeat:no-repeat;	background-position: top; height:914px; margn-bottom:0px; margin-top:-1px">

								<!-- MENU -->
									{$SiteMenu}

								<!-- PANEL_LEFT -->
									<div style="font-size:11px; font-family:Verdana, Arial; margin-top:30px; line-height:15px; margin-left:10px; margin-right:75px;">
										{$getPanels.LEFT_COLUMN->HTMLContent|replace:"../fopen":"fopen"}
									</div>
							</div>
							</td>


							<td width="" class="PanelContent" valign="top">
								<div style="padding:20px; padding-top:20px;position:relative">

								{if $NaviPath != ""}
									<div id="NaviPath">
										{$NaviPath}
									</div>
								{/if}

								{if $SubpagesLinks != ""}
									<div id="SubpagesLinks">
									{section name=loopSubpages loop=$SubpagesLinks}
										&raquo; <a href="?p={$SubpagesLinks[loopSubpages]->FolderID}"><b>{$SubpagesLinks[loopSubpages]->FolderName}</b></a><BR>
									{/section}
									</div>
								{/if}
	
								<div id="PageLabel">
									<i>{$PageContent->FolderName}</i>
								</div>

								<div id="PageTextContent">

						{if $PageID == "1"}

							<!-- PANEL_TOP -->
							{if $getPanels.HOMETOP_PANEL->HTMLContent != ""}
							<div style="font-size:11px; font-family:Verdana, Arial; padding-top:10px;">
								{$getPanels.HOMETOP_PANEL->HTMLContent|replace:"../fopen":"fopen"}
							</div>
							{/if}

							<div class="textNormal">
							<BR><BR><b>OSTATNIE WIADOMOŚCI:<br><br></b>
							{$NewsListDisplay}
							<BR><BR>
							<b><a href="?p=news">&raquo; Więcej wydarzeń...</a></b>
							<BR><BR>
							</div>
						{/if}


									{$PageContent->HTMLContent}
								</div>

								</div>
							</td>



						</tr>
					</table>
				</td>
			</tr>

		</table>

		</td>

	<td id="marginRight">&nbsp;</td>
</tr>
</table>


{literal}
<script type="text/javascript">
$(function() {
	$('a[rel=lightbox]').lightBox({fixedNavigation:true});
	$('a[rel="lightbox[]"]').lightBox({fixedNavigation:true});


});
</script>
{/literal}

</body>
</html>
