<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Fak3r - Profiler</title>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">

</head>

<body class="default">
<div id="particles-js"></div>

    <header>
        <span><a>Profiler ~</a></span><img class="logo" src="../img/giphy.gif" alt="">
        <nav role="full-horizontal">
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li class="deroulant"><a href="#">Challenges&ensp;</a>
                    <ul class="sous">
                        <li id="enabled"><a href="#">0x1</a></li>
                        <li id="enabled"><a href="#">0x2</a></li>
                        <li id="enabled"><a href="#">0x3</a></li>
                        <li><a href="#">0x4</a></li>
                        <li><a href="#">0x5</a></li>
                        <li><a href="#">0x6</a></li>
                        <li><a href="#">0x7</a></li>
						<li><a href="#">0x8</a></li>

                        
                    </ul>
                </li>
                <li><a href="../about.php">À propos</a></li>

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
        <div id="main_content">
            <pre>

                <h2>Le FAUX Morse</h2>
                --------------
                
                Celle-ci était un peu plus complexe mais vous avez réussi.
                Maintenant la solution vous est donnée, mais elle est cryptée, 
                à vous de la décrypter.
                <span>NE VOUS FIEZ PAS AUX APPARENCES.</span>

                <strong><a>-..--..- -..-.--. -..-..-- -..--.-. -.-..... -...--.. -..-.--. -....-.- -..--.-.</a></strong>

                
                <strong>Hint (Aléatoire)</strong>
                ----------------
                <br>
                <button class="btn btn-outline-success" onclick="newQuote()">Clique Moi</button>

                <div id="quoteDisplay"></div>

                </pre>
        </div>
        <?php

        $answer = "file_size";
        if (isset($_POST["guess"])) {
            if ($_POST["guess"] == $answer) {
                echo '<span style="color:green;text-align:center;">../PHPGuesser</span>';
            } else {
                echo '<span style="color:red;text-align:center;">Réponse Incorrecte</span>';
            }
        }

        ?>

        <form method="POST" action="">
            <input type="hidden" name="currentQuestion" value="<?php echo $currentQuestion; ?>">
            <input type="text" class="btn btn-light" name="guess" value="">
            <input class="btn btn-info" type="submit">
        </form>

    </div>
    <div class="spacer"></div>
    <footer>
        <div>
            Copyright 2021 Profiler.
        </div>
    </footer>
   <!-- StackOverFlow Typewriter Script --> 
    <script>
        var i = 0;
        var speed = 50;
        var timeoutId;
        var quotes = [
            'Changement de variables.',
            '- => 0',
            '. => 1',
			'.--..-.. => 10011011',
        ]

        function newQuote() {
            document.getElementById("quoteDisplay").innerHTML = ""
            var randomNumber = Math.floor(Math.random() * (quotes.length));
            txt = quotes[randomNumber];
            if (timeoutId) clearTimeout(timeoutId);
            i = 0;
            typeWriter(txt)
        }

        function typeWriter(txt) {
            if (i < txt.length) {
                document.getElementById("quoteDisplay").innerHTML += txt.charAt(i);
                i++;
                timeoutId = setTimeout(typeWriter, speed, txt);
            }
        }
    </script>
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