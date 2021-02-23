<!doctype html>
<html lang="en">

<head>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: #0d638f;color: white;">
                        Add Event To Calendar
                    </div>
                    <div class="panel-body">
                        <h1>
                            Task: Add Data
                        </h1>
                        <form method="post" action="{{route('events.store')}}">
                            @csrf
                            <label for="">Enter Of Event</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter The Name"><br />
                            <br />
                            <label for="">Enter Of Start Date</label>
                            <input type="datetime-local" class="form-control" name="start_date" class="date"
                                placeholder="Enter The start"><br /> <br />
                            <label for="">Enter Of End Date</label>
                            <input type="datetime-local" class="form-control" name="end_date" class="date"
                                placeholder="Enter The end"><br /> <br />
                            <input type="submit" name="submit" class="btn btn-primary" value="Add Event Data">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>