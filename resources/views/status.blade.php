<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Instamojo Payment Gateway Integrate</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <style>
        .mt40{
            margin-top: 40px;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-lg-12 mt40">
            <div class="card-header" style="background: #0275D8;">
                <h2>Payment Status for Event</h2>
            </div>
        </div>
    </div>


        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Payment staus</strong>
                    <p><?php echo $_GET['payment_status'];?></p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Payment Id</strong>
                    <p><?php echo $_GET['payment_id'];?></p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Payment request ID</strong>
                    <p><?php echo $_GET['payment_request_id'];?></p>
                </div>
            </div>

        </div>
</div>

</body>
</html>