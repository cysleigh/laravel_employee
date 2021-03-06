<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Lab</title>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<script src="/scripts/jquery-1.9.1.min.js"></script>
	<script src="/scripts/jquery.mobile-1.3.2.min.js"></script>
	<link rel="stylesheet" href="/scripts/jquery.mobile-1.3.2.min.css" />
	<link rel="stylesheet" href="/styles.css" />
</head>

<body>
<div data-role="page" data-theme="c">

<div data-role="header">
	<h1>Employee Details</h1>
</div>

<div data-role="content">
	<ul data-role="listview" data-filter="true">
        @foreach ($employeeList as $emp)
    <li><a href="/employees/{{$emp->employeeId}}/edit" data-ajax="false"> <img src="/images/{{$emp->firstName}}_{{$emp->lastName}}.jpg">
            <h4>{{$emp->firstName}}</h4>
            <p>{{$emp->lastName}}</p>
        </a></li>
        @endforeach
	</ul>
</div>

</div>
</body>

</html>