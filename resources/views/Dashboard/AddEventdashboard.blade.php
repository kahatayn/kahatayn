<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">



<style>
   body{
       padding:25px;
   }
   
   input:focus{
        outline: none;
    }
    
    .eventInfo{
        width: 35%;
        margin-left:auto;
        margin-right:auto;
        padding:50px;
        background:whitesmoke;
        border-radius:5px;
        position:relative;
        font-family: 'Libre Franklin', sans-serif;
    }

    .eventInfo > div {
        float:left;margin-bottom:30px;
    }
    .eventInfo > div > p{
        font-size: 12px;margin-bottom: 3px;
    }
    .eventInfo > div > input{
        font-size:12px;letter-spacing:1px;padding:  5px;border: 0;background:  whitesmoke;border-bottom: 1px solid silver;width: 100%;color: gray;
    }

    .eventInfo > p:last-of-type{
        text-align: center;padding-top: 50px;display:  table;width: 100%;color:white;
    }

    .eventInfo > p:last-of-type > a{
        cursor:pointer;border:0;
        padding: 10px 25px;
        background:  silver;
        border-radius:  28px;
        font-size: 12px; 
    }

    .term{
        padding-top:40px;display: flex;width:  100%;align-items:  center;
    }

    .term > i{
        cursor:pointer;width:20px;
    }

    .term > span{
        font-size:12px;
    }

    /* delete */
    .eventInfo > button:last-of-type{
        position:absolute;
        bottom: 10px;
        right: 15px;
        font-size:  10px;
        letter-spacing:  1px;
        font-style: italic;
    }

</style>
</head>
<body>
    

{{-- Create event --}}	
{{-- name	image	date	location	 description --}}
<div style="display:flex;width:100%;">
    <form action="/createEvent" method="post" class="eventInfo" enctype="multipart/form-data">
        @csrf
        <div style="width:100%;">
            <p>NAME</p>
            <input name="name" type="text" autofocus>
        </div>
        <div style="width:100%;">
            <p>DESCRIPTION</p>
            <input name="description" type="text">
        </div>

        
        <div style="width:47%;">
            <p>DATE</p>
            <input name="date" type="date">
        </div>
        <div style="width:47%;margin-left:6%">
            <p>LOCATION</p>
            <input name="location" type="text">
        </div>
        <div style="width:100%;">
            <p>IMAGE</p>
            <input name="image" type="file">
        </div>
        <p>
        <button type="submit" class="btn ">Add</button>
        </p>
    </form> 
</div>
{{-- <.eventInfo action="createEvent" method="post" enctype="multipart/.eventInfo-data">

</.eventInfo> --}}

</body>
</html>