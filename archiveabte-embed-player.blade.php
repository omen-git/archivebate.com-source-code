<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="{{ Request::url() }}" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Archivebate Embed - {{ $video->username }}</title>
    <link rel="shortcut icon" href="https://archivebate.com/logo/app.ico" type="image/x-icon">
    <meta name="application-name" content="archivebate.com">
    <meta name="author" content="archivebate.com">
    <meta name="RATING" content="RTA-5042-1996-1400-1577-RTA" />
    <meta name="RATING" content="mature" />

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:500,900" rel="stylesheet">
    <script src="https://cdn.fluidplayer.com/v3/current/fluidplayer.min.js"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #000;
            font-family: Inter, sans-serif
        }

        video {
            width: 100%;
            height: 400px;
            margin: auto
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center
        }

        @media screen and (max-width:480px) {
            video {
                width: 100%;
                height: 250px;
                margin: auto
            }
        }

        #detect {
            height: 100vh;
            width: 100%;
            position: fixed;
            background: rgb(16 22 28);
            z-index: 999999;
            text-align: center;
            padding-top: 10%
        }

        h1 {
            color: #fff;
            text-transform: uppercase
        }

        p {
            color: #fff
        }
    </style>

    <script>
        async function detectAdBlock() {
            let adBlockEnabled = false;
            const googleAdUrl = 'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js';

            try {
                await fetch(new Request(googleAdUrl));
            } catch (e) {
                adBlockEnabled = true;
                console.log(e);
            } finally {
                const detectElement = document.getElementById('detect');
                if (detectElement) {
                    if (adBlockEnabled) {
                        detectElement.style.display = 'block';
                    } else {
                        detectElement.style.display = 'none';
                    }
                }
            }
        }
        window.onload = detectAdBlock;
    </script>

</head>

<body>
    {{-- #### - POP ADS FOR THE PLAYER - ### --}}
    <script data-cfasync="false" type="text/javascript" src="//gmxvmvptfm.com/aas/r45d/vki/1979994/59fc4996.js"></script>
    
    {{-- #### - ADBLOCK DETECTOR - ### --}}
    <section id="detect" style="display:none">
        <h1>ADBLOCK DETECTED</h1>
        <p>Disable the adblock and reload the page</p>
    </section>

    <div class="container">
        
        {{-- #### - HLS VIDEO PLAYER - ### --}}
        <video id="hls-video">
            <source src="{{ $video->embed_link }}" type="application/x-mpegURL">
        </video>

        {{-- #### - VIDEO PLAYER CONFIGS - ### --}}
        <script>
            fluidPlayer("hls-video", {
                layoutControls: {
                    posterImage: "{!! $video->default_thumbnail !!}",
                    doubleclickFullscreen: !0,
                    autoHide: !0,
                    logo: {
                        imageUrl: 'https://archivebate.com/img/logo-sm.png',
                        position: 'top right',
                        clickUrl: 'https://archivebate.com',
                        opacity: 0.6,
                        mouseOverImageUrl: 'https://archivebate.com/img/logo-sm.png',
                        imageMargin: '10px',
                        hideWithControls: true,
                        showOverAds: 'true'
                    }
                }
            });
        </script>
    </div>
</body>
</html>
