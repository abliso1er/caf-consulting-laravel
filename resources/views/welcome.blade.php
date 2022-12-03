<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CAF Consulting</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome-4.css')}}">
    <link rel="stylesheet" href="{{asset('css/softy.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<style>
    .icon-logo {
        width: 60%;
        margin: 0 auto 4vh auto;

    }

    .icon-logo img {
        width: 100%;

    } 

    .section-title-right::after {
        content: " ";
        width: 50%;
        display: block;
        border-bottom: 2px solid red;
        /* margin: auto */
    }

    .section-title-center::after {
        content: " ";
        width: 50%;
        display: block;
        border-bottom: 2px solid red;
        margin: auto
    }

    .mini-box img {
        width: 100%
    }

    .team-item {
        border: 1px solid rgba(255, 0, 0, 0.3);
        box-shadow: 10px 10px 8px rgba(0, 0, 255, 0.171);
        transition: all .5s
    }

    .team-item:hover {
        background: linear-gradient(to right, rgba(255, 0, 0, 0.363), rgba(0, 0, 255, 0.342));
        transform: translateX(5px)
    }

    .list {
        padding: 0 5%
    }

    .card-methode {
        height: 65vh;
        border: 1px solid rgba(255, 0, 0, 0.322);
        box-shadow: 10px 10px 8px rgba(0, 0, 255, 0.171);
        transition: all .5s
    }

    .card-methode:hover {
        transform: translateY(-5px)
    }

    .welcome-area-cust {
        height: 50vh !important;
    }

    .creation-1-section {
        padding: 70px 0;
    }

    .card-perso {
        border: 1px solid rgba(255, 0, 0, 0.322);
        box-shadow: 10px 10px 8px rgba(0, 0, 255, 0.171);
        color: blue;
        transition: all .4s
    }

    .card-perso:hover {
        transform: translateY(-5px)
    }

    .info-plus {
        background: rgba(0, 0, 255, 0.164);
        padding: 1vh 2%;
    }

    .info-ref {
        color: white;
        text-align: center;
        padding-top: 10vh
    }

    .count-item-cost {
        width: 100%;
        text-align: center
    }

    .count-item-cost img {
        width: 50%;
    }

    .ref2 {
        width: 80% !important;
    }



</style>
<body>
    <div id="app">

        <accueil-component />


    </div>

    

    <script src="{{asset('js/jquery.js')}}"></script> 


    <script src="{{mix('js/app.js')}}"></script>

    <script src="{{asset('js/scroll.js')}}"></script>
    <script src="{{asset('js/way.js')}}"></script>
    <script src="{{asset('js/counter.js')}}"></script>
    <script src="{{asset('js/imgfix.js')}}"></script>

    <script src="{{asset('js/custom.js')}}"></script>

</body>
</html>