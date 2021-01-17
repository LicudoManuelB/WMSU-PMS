<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMSU PMO Property Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&family=Texturina:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&family=Texturina:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/faf20bb39b.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            setInterval(function(){
                $('#time').load('../../common/time.php')
            },1000);
        })
    </script>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="container-fluid title form-inline">
        <img class="wmsu-logo" src="../../img/wmsu.png" alt="wmsu-logo">
        <h5>WMSU PMO Property Management System</h5>
        <div class ="col-0 date-time p-2">
                <div id="date" class="text-dark date">
                    <h4><?php echo date("F d,Y"); ?></h4>
                </div>
                <div id="time" class="text-dark">
                    00 : 00 : 00 AM
                </div>
            </div>
    </div>