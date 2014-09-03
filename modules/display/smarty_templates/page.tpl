<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{$InquiryInfo.title}</title>

	<script type="text/javascript" src="{$INQUIRY_APP_ROOT_DIRECTORY}js/jquery111.js"></script>

	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>


<!-- header -->

<div class="header">

	<div class="title">{$InquiryInfo.title}</div>
	<div class="startdate"><span>start:</span> {$InquiryInfo.startdate}</div>
	<div class="description">{$InquiryInfo.description}</div>
	
</div>


<div class="mainContent">

    {$mainContent}

</div>





</body>
</html>
