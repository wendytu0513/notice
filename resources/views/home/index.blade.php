<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Lab</title>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<script src="scripts/jquery-1.9.1.min.js"></script>
	<script src="scripts/jquery.mobile-1.3.2.min.js"></script>
	<link rel="stylesheet" href="scripts/jquery.mobile-1.3.2.min.css" />
	<link rel="stylesheet" href="styles.css" />
</head>

<body>
<div data-role="page" data-theme="c">

<div data-role="header">
	<h1>Notice Details</h1>
	<a href="/notice/create" class="btn btn-md btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> 新增</a>
</div>

<div data-role="content">
	<ul data-role="listview" data-filter="true">

	@foreach ($noticelist as $note)
		<li>
            <form method="post" action="/notice/{{ $note->id }}"> 
            <a href="/notice/{{$note->id}}/edit">
			<h4>{{ $note->title }}</h4>
			<p>更新時間 : {{ $note->noticetime }}</p>
			<p>公告部門 : {{ $note->department["departmentname"] }}</p>
		    </a>
		</li>
	@endforeach


	</ul>
</div>

</div>
</body>

</html>