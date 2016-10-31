<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="description" content="">
	<meta name="author" content="">

	<title>HTTP Endpoint Tester</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

	<!-- Custom styles for this template -->
	<style type="text/css" media="screen">
		body {
			padding-top: 1.5rem;
			padding-bottom: 1.5rem;
		}
		/* Everything but the jumbotron gets side spacing for mobile first views */
		.header,
		.marketing,
		.footer {
			padding-right: 1rem;
			padding-left: 1rem;
		}
		/* Custom page header */
		.header {
			padding-bottom: 1rem;
			border-bottom: .05rem solid #e5e5e5;
		}
		/* Make the masthead heading the same height as the navigation */
		.header h3 {
			margin-top: 0;
			margin-bottom: 0;
			line-height: 3rem;
		}
		/* Custom page footer */
		.footer {
			padding-top: 1.5rem;
			color: #777;
			border-top: .05rem solid #e5e5e5;
		}
		/* Customize container */
		@media (min-width: 48em) {
			.container {
				max-width: 46rem;
			}
		}
		.container-narrow > hr {
			margin: 2rem 0;
		}
		/* Main marketing message and sign up button */
		.jumbotron {
			text-align: center;
			border-bottom: .05rem solid #e5e5e5;
		}
		.jumbotron .btn {
			padding: .75rem 1.5rem;
			font-size: 1.5rem;
		}
		/* Supporting marketing content */
		.marketing {
			margin: 3rem 0;
		}
		.marketing p + h4 {
			margin-top: 1.5rem;
		}
		/* Responsive: Portrait tablets and up */
		@media screen and (min-width: 48em) {
			/* Remove the padding we set earlier */
			.header,
			.marketing,
			.footer {
				padding-right: 0;
				padding-left: 0;
			}
			/* Space out the masthead */
			.header {
				margin-bottom: 2rem;
			}
			/* Remove the bottom border on the jumbotron for visual effect */
			.jumbotron {
				border-bottom: 0;
			}
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="header clearfix">
			<h3 class="text-muted">HTTP Endpoint Tester</h3>
		</div>
		<div class="row marketing">
			<table class="table">
				<thead>
					<tr>
						<th>Endpoint</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data as $link => $linkInfo)
						<tr>
							<td>
								<a href="{{ $link }}">{{ $linkInfo['link'] }}</a>
							</td>
							<td>
								{{ $linkInfo['description'] }}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<footer class="footer">
			<p>&copy; Lewis Communications 2016</p>
		</footer>
	</div> <!-- /container -->

</body>
</html>
