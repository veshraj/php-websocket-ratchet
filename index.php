<!DOCTYPE html>
<html>
<head>
	<style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
	</style>
	<!-- Custom styles for this template -->
	<link
		href="https://getbootstrap.com/docs/4.5/examples/offcanvas/offcanvas.css"
		rel="stylesheet"
	/>
	<link
		rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
		crossorigin="anonymous"
	/>
	<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
		integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
		crossorigin="anonymous"
	/>
	<title>Ratchet Server</title>

</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
	<a class="navbar-brand mr-auto mr-lg-0" href="/">Ratchet Server</a>
	<button
		class="navbar-toggler p-0 border-0"
		type="button"
		data-toggle="offcanvas"
	>
		<span class="navbar-toggler-icon"></span>
	</button>
</nav>

<div class="nav-scroller bg-white shadow-sm">
	<nav class="nav nav-underline"></nav>
</div>

<main role="main" class="container">
	<div
		class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm"
	>
		<img
			class="mr-3"
			src="http://socketo.me/assets/img/logo.png"
			alt=""
			width="50"
			height="50"
			style="background:#fff;"
		/>
		<div class="lh-100">
			<h6 class="mb-0 text-white lh-100">Pusher Realtime communication</h6>
			<small>Pusher Realtime communication using Core PHP and Pusher Js</small>
		</div>
	</div>

	<div class="my-3 p-3 bg-white rounded shadow-sm">
		<h6 class="border-bottom border-gray pb-2 mb-0">Recent Updates
			<a target="__blank" href="/create_user.php" class="btn btn-primary">New</a>
		</h6>
		<table class="table table-bordered">
			<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Phone Number</th>
			</tr>
			</thead>
			<tbody id="user-list">

			</tbody>
		</table>

	</div>
</main>

<script
	src="https://code.jquery.com/jquery-3.5.1.min.js"
	integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
	crossorigin="anonymous"
></script>
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
	crossorigin="anonymous"
></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
	integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
	crossorigin="anonymous"
></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    var conn = new WebSocket('ws://localhost:9090')
    conn.onopen = function (e) {
        console.log("Connection Established");
    }

    conn.onmessage = function (e) {
        console.log(e.data);
    }
    conn.bind()
</script>
</body>
</html>
