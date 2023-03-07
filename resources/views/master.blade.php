<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerce Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
   
   @include('header')
   @yield('content')
   @include('footer') 

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
    .custom-product
    {
        height: 600px;
    }
    .slider-text
    {
        background-color: red !important;
    }
    .tranding-img
    {
        height: 100px;

    }
    .trending-items
   {
    float: left;
    width: 20%;
   }
   .tranding-wraper
    {
       margin:20px;

    }
    .detail-img
    {
        height: 200px;
    }
    .search-box
    {
        width: 500px !important;
    }
   .search-form
   {
     width: 200px;
   }
   .cart-list-devider
   {
    border-bottom:1px solid #ccc;   
   }

</style>
</html>