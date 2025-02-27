<!DOCTYPE html>
<html>
<head>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        .footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    background-color: #063247;
    color: white;
    text-align: center;
    padding: 20px 0;
}

        .social-icon,
        .menu {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0;
            flex-wrap: wrap;
        }

        .social-icon__item,
        .menu__item {
            list-style: none;
        }

        .social-icon__link {
            font-size: 2rem;
            color: #fff;
            margin: 0 10px;
            display: inline-block;
            transition: 0.5s;
        }

        .social-icon__link:hover {
            transform: translateY(-10px);
        }

        .menu__link {
            font-size: 1.2rem;
            color: #fff;
            margin: 0 10px;
            display: inline-block;
            transition: 0.5s;
            text-decoration: none;
            opacity: 0.75;
            font-weight: 300;
        }

        .menu__link:hover {
            opacity: 1;
        }

        .footer p {
            color: #fff;
            margin: 15px 0 10px 0;
            font-size: 1rem;
            font-weight: 300;
        }

        @keyframes animateWaves {
            0% {
                background-position-x: 1000px;
            }
            100% {
                background-positon-x: 0px;
            }
        }

        @keyframes animate {
            0% {
                background-position-x: -1000px;
            }
            100% {
                background-positon-x: 0px;
            }
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social-icon">
            <li class="social-icon__item">
                <a class="social-icon__link" href="mailto:este@uca.ac.ma">
                    <ion-icon name="mail-outline"></ion-icon>
                </a>
            </li>
            <li class="social-icon__item">
                <a class="social-icon__link" href="https://maps.google.com/?q=Essaouira+Aljadida+BP.+383,+Essaouira" target="_blank">
                    <ion-icon name="location-outline"></ion-icon>
                </a>
            </li>
        </ul>

        <ul class="menu">
            <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
            <li class="menu__item"><a class="menu__link" href="#">About us</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Contact us</a></li>
        </ul>
        <p>&copy; school2023</p>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\user\Documents\PFE\ScholarNet\resources\views/partials/footer.blade.php ENDPATH**/ ?>