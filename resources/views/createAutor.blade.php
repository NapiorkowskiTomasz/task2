<!doctype html>
<html>
<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="container">
    <br/>
    <div class="panel panel-primary">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
            <form method="post" action="">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-md-4">Imię</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label class="col-md-4">tytuł</label>
                    <input type="text" class="form-control" name="title1"/>
                </div>

                <div class="form-group">
                    <label class="col-md-4">tytuł2</label>
                    <input type="text" class="form-control" name="title2"/>
                </div>

                <div class="form-group">
                    <label class="col-md-4">tytuł3</label>
                    <input type="text" class="form-control" name="title3"/>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<form method="post" action="{{ route('autor.store') }}">