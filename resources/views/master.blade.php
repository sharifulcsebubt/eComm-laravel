<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm project</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    {{ View::make('header')}}
    @yield('content')
    {{ View::make('footer')}}
    
</body>
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img
    {
        height: 400px !important;
    }
    .custom-product{
        height: 600px;
        padding-right: 0%;
        padding-left: 10%;
        
    }
    .slider-text{
        background-color: rgba(10, 10, 10, 0.089) !important;
    }
    .trending-img{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
    .trending-wrapper{
        margin: 20px;4
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important;
    }
    .cart-list-divider{
        border-bottom: 1px solid #cccccc;
        margin-bottom: 20px;
        padding bottom: 20px;
    }
    .link_color{
        color: #cccccc;
    }
    .list_size{
        padding-left: 1%;
        padding-right: 80%;
        padding-top: 0%;
    }
</style>
</html>