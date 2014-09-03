{*
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$MetaTag->HTML_Title}</title>

<script src="JSScripts/dreamwork.js" language="javascript" type="text/javascript"></script>
<script src="JSScripts/scripts.js" language="javascript" type="text/javascript"></script>
<script src="JSScripts/ajax.js" language="javascript" type="text/javascript"></script>

<script type="text/javascript" src="lib/lightbox/js/prototype.js"></script>
<script type="text/javascript" src="lib/lightbox/js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="lib/lightbox/js/lightbox.js"></script>
<link rel="stylesheet" href="lib/lightbox/css/lightbox.css" type="text/css" media="screen" />

<link href="style.css" rel="stylesheet" type="text/css" />

<META NAME="Description" CONTENT="{$MetaTag->HTML_Description}">

</head>
*}

	<div id="columnMenu" style="padding-top:40px; text-align:right">
		<BR>

									{if $PageID != "1"}
										<div class="menuItem"  style="text-transform:none;"
											onmouseover="this.style.backgroundImage = 'url(images/menuItem-on.png)'"
											onmouseout="this.style.backgroundImage = 'url(images/menuItem-off.png)'"
											onclick="location.href = '?p=1'"
										>
											<a href="?p=1" style="text-decoration:none">Strona główna</a>
										</div>
									{else}
										<div class="menuItem"  style="text-transform:none; background-image:url(images/menuItem-on.png);">
											Strona główna &laquo;
										</div>
									{/if}
									{if $PageID != "news"}
										<div class="menuItem"  style="text-transform:none;"
											onmouseover="this.style.backgroundImage = 'url(images/menuItem-on.png)'"
											onmouseout="this.style.backgroundImage = 'url(images/menuItem-off.png)'"
											onclick="location.href = '?p=news'"
										>
											<a href="?p=news" style="text-decoration:none">Wydarzenia</a>
										</div>
									{else}
										<div class="menuItem"  style="text-transform:none; background-image:url(images/menuItem-on.png);" onclick="location.href = '?p=news'">
											<a href="?p=news" style="text-decoration:none">Wydarzenia &laquo;</a>
										</div>
									{/if}

									{section name=loopMenu loop=$MainMenu}

										{if $PageID != $MainMenu[loopMenu]->FolderID}
										<div class="menuItem"  style="text-transform:none;"
											onmouseover="this.style.backgroundImage = 'url(images/menuItem-on.png)'"
											onmouseout="this.style.backgroundImage = 'url(images/menuItem-off.png)'"
											{if $MainMenu[loopMenu]->FolderType == "html"}onclick="location.href = '?p={$MainMenu[loopMenu]->FolderID}'"
											{/if}
											{if $MainMenu[loopMenu]->FolderType == "url"}onclick="window.open('{$MainMenu[loopMenu]->FolderType_data}')"{/if}
										>
											{if $MainMenu[loopMenu]->FolderType != "url"}
												<a href="?p={$MainMenu[loopMenu]->FolderID}" style="text-decoration:none">{$MainMenu[loopMenu]->FolderName}</a>
											{else}
												{$MainMenu[loopMenu]->FolderName}
											{/if}
										</div>
										{else}
										<div class="menuItem"  style="text-transform:none; background-image:url(images/menuItem-on.png);">
											{$MainMenu[loopMenu]->FolderName} &laquo;
										</div>
										{/if}

										{if $lev0Parent == $MainMenu[loopMenu]->FolderID}
										{section name=loopSubMenu loop=$SubMenu}
											{if $PageID != $SubMenu[loopSubMenu]->FolderID}
											<div class="menuItem"  style="font-weight:normal; padding-right:50px; padding-top:2px; padding-bottom:2px; text-transform:none; font-size:11px;"
												onmouseover="this.style.backgroundImage = 'url(images/menuItem-on.png)'"
												onmouseout="this.style.backgroundImage = 'url(images/menuItem-off.png)'"
												{if $SubMenu[loopSubMenu]->FolderType == "html"}onclick="location.href = '?p={$SubMenu[loopSubMenu]->FolderID}'"{/if}
												{if $SubMenu[loopSubMenu]->FolderType == "url"}onclick="window.open('{$SubMenu[loopSubMenu]->FolderType_data}')"{/if}
											>
												{if $SubMenu[loopMenu]->FolderType != "url"}
													<a href="?p={$SubMenu[loopSubMenu]->FolderID}" style="text-decoration:none">{$SubMenu[loopSubMenu]->FolderName}</a>
												{else}
													{$SubMenu[loopSubMenu]->FolderName}
												{/if}
											</div>
											{else}
											<div class="menuItem"
												style="font-size:11px; font-weight:normal; padding-right:50px; padding-top:2px; padding-bottom:2px; text-transform:none;
												background-image:url(images/menuItem-on.png);">
												<b>{$SubMenu[loopSubMenu]->FolderName}</b> &laquo;
											</div>
											{/if}
										{/section}
										{/if}

									{/section}
								</div>