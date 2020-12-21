{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>List Tasks</title>--}}

{{--    <!-- Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"--}}
{{--          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">--}}

{{--    <!-- CSS -->--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">--}}
{{--</head>--}}
{{--<body>--}}
{{--<form class="text-left" method="post" action="{{ route('tasks.update',$task->id) }}" enctype="multipart/form-data">--}}
{{--    @csrf--}}
{{--    <div class="flex-center position-ref full-height">--}}
{{--        <div class="content">--}}
{{--            <div class="title m-b-md">--}}
{{--                Edit Task--}}
{{--            </div>--}}
{{--            <form class="container">--}}
{{--                <div class="form-group">--}}
{{--                    <label for="inputTitle">Task title</label>--}}
{{--                    <input type="text"--}}
{{--                           class="form-control"--}}
{{--                           id="inputTitle"--}}
{{--                           name="title"--}}
{{--                           value="{{ $task->title }}" required>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="inputContent">Task content</label>--}}
{{--                    <textarea class="form-control"--}}
{{--                              id="inputContent"--}}
{{--                              name="content"--}}
{{--                              rows="3"--}}
{{--                              required>{{ $task->content }}</textarea>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="inputDueDate">Due Date</label>--}}
{{--                    <input type="date"--}}
{{--                           class="form-control"--}}
{{--                           id="inputDueDate"--}}
{{--                           name="due_date"--}}
{{--                           value="{{ $task->due_date }}"required>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="inputFileName">File Name</label>--}}
{{--                    <input type="text"--}}
{{--                           class="form-control"--}}
{{--                           id="inputFileName"--}}
{{--                           name="inputFileName">--}}
{{--                    <input type="file"--}}
{{--                           class="form-control-file"--}}
{{--                           id="inputFile"--}}
{{--                           name="inputFile">--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--            </form>--}}
{{--            <hr>--}}
{{--            <a href="{{ route('welcome') }}">< Back</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Bootstrap JS -->--}}
{{--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"--}}
{{--            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"--}}
{{--            crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"--}}
{{--            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"--}}
{{--            crossorigin="anonymous"></script>--}}
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"--}}
{{--            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"--}}
{{--            crossorigin="anonymous"></script>--}}
{{--</form>--}}
{{--</body>--}}
{{--</html>--}}

{{--<!--A Design by W3layouts--}}
{{--Author: W3layout--}}
{{--Author URL: http://w3layouts.com--}}
{{--License: Creative Commons Attribution 3.0 Unported--}}
{{--License URL: http://creativecommons.org/licenses/by/3.0/--}}
{{---->--}}
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Curved Contact Form Responsive Widget Template :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Curved Contact Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates,
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="{{asset('backend2/css/style.css')}}" rel='stylesheet' type='text/css' />
    <!--fonts-->
    <link href="{{asset('backend2///fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800')}}" rel="stylesheet">
    <!--//fonts-->
</head>
<body>
<!--background-->
<!-- login -->
<h1>EDIT TASK MANAGER</h1>
<div class="login-w3l">
    <div class="top-img-agileits-w3layouts">
        <h2 class="sub-head-w3-agileits">Edit</h2>
{{--        <p>Fillout the form below to learn more!</p>--}}
        <div class="login-form">
            <form action="{{ route('tasks.update',$task->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text"  id="inputTitle"
                       name="title"
                       value="{{ $task->title }}" placeholder="Title..." required="" />
                <textarea id="inputContent"
                name="content"
                rows="3"
                 placeholder="Content...">
                {{ $task->content }}</textarea>
                <input  style="font-size: 25px" type="date" id="inputDueDate"
                       name="due_date"
                       value="{{ $task->due_date }}" placeholder="Due Date.." required="" />

                <input type="text" id="inputFileName"
                       name="inputFileName" placeholder="File Name..." required="" />
                    <input style="font-size: 25px" type="file" name="inputFile">
                <input type="submit" value="Send">
            </form>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="footer-agileits">
    <p>© 2018 Curved Contact Form. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
</div>
</body>
</html>
