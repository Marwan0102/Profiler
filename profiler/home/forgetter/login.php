<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Forgetter - Profiler</title>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">

</head>

<body class="default">
    <div id="particles-js"></div>

    <header>
        <span><a>Profiler ~</a></span><img class="logo" src="../img/giphy.gif" alt="">
    </header>

    <div class="container">
        <div id="main_content">
            <pre>
                                <?php


                $array = array('admin', 'profiler', 'admin', '123456');

                if (isset($_GET["user"])) {
                    if ($_GET['user'] == "profiler" && $_GET['password'] == "123456") {
                        echo '<center><span style="position:relative; color:red;text-align:center;">', "[$array[1], $array[3]]", '</span></center>';
                    } else {
                        echo '<center><span style="position:relative; color:red;text-align:center;">', "[ , ]", '</span></center>';
                    }
                } else {
                }
                ?>

</pre>

        </div>


    </div>



    <div class="spacer"></div>

    <footer>
        <div>
            Copyright 2021 Profiler.
        </div>
    </footer>
    <script src="../js/particles.min.js"></script>
    <script>
        /* ---- particles.js config ---- */

        particlesJS('particles-js', {
            "particles": {
                "number": {
                    "value": 222,
                    "density": {
                        "enable": true,
                        "value_area": 1122.388442605866
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#e1ff00"
                    },
                    "polygon": {
                        "nb_sides": 7
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.7,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.2,
                        "sync": false
                    }
                },
                "size": {
                    "value": 2,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 20,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 112.2388442605866,
                    "color": "#fff",
                    "opacity": 0.6413648243462091,
                    "width": 1.5
                },
                "move": {
                    "enable": true,
                    "speed": 3.620472365193136,
                    "direction": "none",
                    "random": true,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 721.5354273894853,
                        "rotateY": 962.0472365193136
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": false,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": false,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 852.6810729164124,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "repulse": {
                        "distance": 0,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });
    </script>
</body>

</html>