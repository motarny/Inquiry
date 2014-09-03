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

<div align="center">
{if $strefa != "strefa"}	
	{if ($currentPage > 1)}
		<a href="?p=news&pg={$currentPage-1}">&laquo; nowsze</a>
		&nbsp;&nbsp;&nbsp;
	{/if}
	{if ($cntMaxPages > $currentPage)}
		<a href="?p=news&pg={$currentPage+1}">starsze &raquo;</a>
	{/if}
{else}
	{if ($currentPage > 1)}
		<a href="?p=23&pg={$currentPage-1}">&laquo; nowsze</a>
		&nbsp;&nbsp;&nbsp;
	{/if}
	{if ($cntMaxPages > $currentPage)}
		<a href="?p=23&pg={$currentPage+1}">starsze &raquo;</a>
	{/if}
{/if}
</div>

                  <table width="100%" cellpadding="3" cellspacing="0" align="center" id="newsTable" style="line-height:16px;">

                  {section name=loopNews loop=$NewsList}

                     <tr>
                     <td  valign="top">

						{if $NewsList[loopNews]->Image != ""}
                              {if $NewsList[loopNews]->ReadMore}<a href="?p=news&n={$NewsList[loopNews]->NewsID}">{/if}
                              <img src="lib/phpThumb/phpThumb.php?src=/{$NewsList[loopNews]->Image}&wl=120&hl=120" align="left" border="1" style="margin-right:10px">
                              {if $NewsList[loopNews]->ReadMore}</a>{/if}
                        {/if}

                           <B style="color:red">{$NewsList[loopNews]->NewsDate}</b><BR>
                           {if $NewsList[loopNews]->ReadMore}<a href="?p=news&n={$NewsList[loopNews]->NewsID}&strefa={$strefa}">{/if}
							<B>{$NewsList[loopNews]->Title}</b>
                        		{if $NewsList[loopNews]->ReadMore}</a>
                        	{/if}
                        <BR>
                        {$NewsList[loopNews]->ShortInfo}<BR>

                        {if $NewsList[loopNews]->ReadMore}<a href="?p=news&n={$NewsList[loopNews]->NewsID}&strefa={$strefa}">czytaj więcej...</a>{/if}

                     </td>

                     </tr>

                     <tr><td colspan="2" height="20"></td></tr>

                  {/section}

                  </table>

<div align="center">
{if $strefa != "strefa"}	
	{if ($currentPage > 1)}
		<a href="?p=news&pg={$currentPage-1}">&laquo; nowsze</a>
		&nbsp;&nbsp;&nbsp;
	{/if}
	{if ($cntMaxPages > $currentPage)}
		<a href="?p=news&pg={$currentPage+1}">starsze &raquo;</a>
	{/if}
{else}
	{if ($currentPage > 1)}
		<a href="?p=23&pg={$currentPage-1}">&laquo; nowsze</a>
		&nbsp;&nbsp;&nbsp;
	{/if}
	{if ($cntMaxPages > $currentPage)}
		<a href="?p=23&pg={$currentPage+1}">starsze &raquo;</a>
	{/if}
{/if}
</div>


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