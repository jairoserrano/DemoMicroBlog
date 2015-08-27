
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ejemplo basado en documentación de Laravel, Bootstrap y Laracast">
    <meta name="author" content="Jairo Serrano">
    <link rel="icon" href="favicon.ico">
    <title>Narrow Jumbotron Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation" class="active"><a href="/">Home</a></li>
                <li role="presentation"><a href="/all.json">JSON data</a></li>
                <li role="presentation"><a href="https://github.com/jairoserrano/DemoMicroBlog">Proyecto en Github</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">Project name</h3>
    </div>

    @forelse ($posts as $post)
    <div>
        <h1>{{ $post->title }}</h1>
        <small>{{ $post->created_at }}</small>
        <p>{{ $post->body }}</p>
    </div>
    @empty
        <p>No hay nada por ahora...</p>
    @endforelse

    <footer class="footer">
        <p>&copy; Company 2014</p>
    </footer>

</div> <!-- /container -->
<!-- Jquery and Bootstrap JS libraries from CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
