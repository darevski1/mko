<!DOCTYPE html>
<html>
<head>
    <title>Dropzone.js</title>
    {{--dropzone css cdn--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
</head>
<body>
<div class="container">
    @if (count($errors) > 0)

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif
    <h2>Dropzone js</h2>
    <form action="{{route('home.store')}}" method="post" class="dropzone">
        {{ csrf_field() }}
        <div class="fallback">
            <input name="file" type="file" multiple />
        </div>
    </form>
</div>
</body>
</html>