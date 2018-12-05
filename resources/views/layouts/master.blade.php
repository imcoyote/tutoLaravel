<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

@include('layouts.top_bar')

@include('layouts.header')


<div class="grid-container">
    <div class="grid-x grid-padding-x" id="content">
        <div class="cell medium-10">
            @yield('content')
        </div>
        <div class="cell medium-2"  data-sticky-container>
            @include('layouts.side')
        </div>
    </div>
</div>

<script src="/js/app.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
