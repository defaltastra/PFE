<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-PABJxUqZ0uLFr7V9yZAB+gpdUCGr3nu8n1DPTzkFX8fQynWpYRJ6CBrD/0jHwCzD/z7DY3BA5U/GvCKMy+WXfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ScolarNet | <?php echo e($title); ?></title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .footer {
            background-color: #063247;
            color: white;
            text-align: center;
            padding: 20px 0;
            width: 100%;
            margin-top: auto;
            /* Change position to fixed */
            bottom: 0;
        }

        .social-icon,
        .menu {
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




    </style>
</head>
<body>
    <?php echo $__env->make('partials.bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div style="position: absolute;top:65px;width:90%;margin:30px;" >
        <?php echo $__env->make('partials.flashbag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo e($slot); ?>


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
            <li class="menu__item"><a  class="menu__link" href="<?php echo e(route('home')); ?>">Home</a></li>
            <li class="menu__item"><a   class="menu__link" href="<?php echo e(route('about')); ?>">About us</a></li>
            <li class="menu__item"><a  class="menu__link"  href="<?php echo e(route('contact')); ?>">Contact</a></li>
            <li class="menu__item"><a  class="menu__link" href="https://maps.google.com/?q=Essaouira+Aljadida+BP.+383,+Essaouira" target="_blank">Location </a></li>
        </ul>
        <p >&copy; school2023</p>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\user\Documents\PFE\ScholarNet\resources\views/components/master.blade.php ENDPATH**/ ?>