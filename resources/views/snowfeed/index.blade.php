<!doctype html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Snow Feed</title>

    <script src="{{ asset('bower_components/webcomponentsjs/webcomponents.js') }}"></script>
    <link rel="import" href="{{asset('custom_elements/elements.html')}}">

    <style>
        body {
            background: #fafafa;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #333;
        }

        .hero-unit {

        }

        .hero-unit h1 {
            font-size: 60px;
            line-height: 1;
            letter-spacing: -1px;
        }

        .browsehappy {
            margin: 0.2em 0;
            background: #ccc;
            color: #000;
            padding: 0.2em 0;
        }

        [drawer] {
            background-color: #EEEEEE;
        }

        core-toolbar {
            color: #FAFAFA;
            background-color: #2962FF;
        }
    </style>
</head>

<body unresolved fullbleed layout vertical>
<template is="auto-binding" id="app">
    @include('snowfeed.index-partial')
</template>

<script>
    (function (document) {
        'use strict';

        var app = document.querySelector('#app');
        app.appName = 'Snow Feed';

        app.locations = [
            {
                'name': 'Fellhorn Funslope',
                'webcam': 'http://tramino.s3.amazonaws.com/s/das-hoechste/webcams/fellhorn-funpark.jpg?1425218640'
            },
            {
                'name': 'Fellhorn Gipfelstation',
                'webcam': 'http://tramino.s3.amazonaws.com/s/das-hoechste/webcams/fellhorn-gipfelstation.jpg?1425218640',
                'weatherNow': 'http://api.openweathermap.org/data/2.5/weather?lat=47.408947&lon=10.313998&lang=de'
            },
            {
                'name': 'Ruhestein',
                'webcam': 'http://www.skilift-ruhestein.de/pics/webcam.jpg',
                'weatherNow': 'http://api.openweathermap.org/data/2.5/weather?q=Ruhestein,de&lang=de',
                'weather3Days': null
            },
            {
                'name': 'Seibels Eckle',
                'webcam': 'http://www.seibelseckle.de/seibelseckle-webcam-lift.jpg?dummy=8484744',
                'weatherNow': null,
                'weather3Days': null
            },
            {
                'name': 'Vogelskopf',
                'webcam': 'http://www.vogelskopf.de/webcam/Vogelskopf_R1.jpg',
                'weatherNow': 'http://api.openweathermap.org/data/2.5/weather?q=Vogelskopf,de&lang=de',
                'weather3Days': null
            },
            {
                'name': 'Zufluch',
                'webcam': 'http://www.vogelskopf.de/webcam/Zuflucht_R1.jp'
            },
            {
                'name': 'Kniebis',
                'webcam': 'http://www.itunds.de/nachtloipe_webcam/skicam.jpg',
                'weatherNow': 'http://api.openweathermap.org/data/2.5/weather?q=Kniebis,de&lang=de',
                'weather3Days': null
            }
        ];
    })(wrap(document));
</script>

</body>

</html>
