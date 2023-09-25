<!DOCTYPE html>
<html lang="fr">

<head>
    <title>À propos - Profiler</title>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body class="default">
    <div id="particles-js"></div>

    <header>
        <strong><a>Profiler ~</a></strong><img class="logo" src="img/giphy.gif" alt="">
        <nav role="full-horizontal">
            <ul>
                <li><a href="./index.php">Accueil</a></li>
                <li class="deroulant"><a href="#">Challenges&ensp;</a>
                    <ul class="sous">
                        <li><a href="#">0x1</a></li>
                        <li><a href="#">0x2</a></li>
                        <li><a href="#">0x3</a></li>
                        <li><a href="#">0x4</a></li>
                        <li><a href="#">0x5</a></li>
                        <li><a href="#">0x6</a></li>
                        <li><a href="#">0x7</a></li>



                    </ul>
                </li>
                <li><a href="about.php">À propos</a></li>

            </ul>
            <div>
                <!-- PHP Search -->
                <?php
                if (isset($_POST["search-done"])) {
                    $result = 'disabled';
                    }
                ?>
                    <form class="search-form" action="" method="post">
                        <div>
                            <input class="search-input <?php echo (isset($result)) ? $result : ''; ?>" name="search-done" type="search" placeholder="Rechercher" <?php echo (isset($result)) ? $result : ''; ?>>
                        </div>
                        <input class="search-submit" type="submit" value="&#10140;" <?php echo (isset($result)) ? $result : ''; ?>/>
                    </form>

            </div>
        </nav>
    </header>

    <div class="container">
        <section id="main_content">
            <h1>À propos</h1>

            <p>Nous sommes un groupe de 3 experts informatiques et nous avons crée ce site pour challenger vos compétences. Vous devrez faire appel à vos connaissances mais aussi à votre mémoire et à votre sens de la déduction pour passer toutes les épreuves. Il y a une récompense à la clef. Ne négligez rien, les indices sont cachés partout dans le site.</p>

    </div>
    <div class="spacer"></div>
    <footer>
        <div>
            Copyright 2021 Profiler.
        </div>
    </footer>
    <script src="./js/particles.min.js"></script>
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