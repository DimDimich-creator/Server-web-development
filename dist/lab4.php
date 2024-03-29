<!DOCTYPE html>
<html lang="ru" data-theme="lofi">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <title>Лабораторная работа 4</title>
</head>

<body class="flex h-screen flex-col justify-between">
    <div class="navbar bg-base-100">
        <a href="index.html" class="btn btn-ghost flex items-center gap-2 text-xl normal-case">
            <img src="logo.svg" alt="" width="36px" class="" /> МосПолитех</a>
    </div>
    <main class="mb-auto">
        <div class="breadcrumbs bg-base-200 pl-16 text-sm">
            <ul>
                <li>
                    <a href="../../../index.html">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="mr-2 h-4 w-4 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                        </svg>
                        Домой
                    </a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="mr-2 h-4 w-4 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                    Лабораторная работа 4
                </li>
            </ul>
        </div>
        <div class="flex flex-col items-center py-10">
            <h1 class="text-4xl">Решение уравнений</h1>
            <form method="POST" class='mt-10'>
                <input type="text" name="text" placeholder="x * 6 = 10" class="input input-bordered">
                <button class='btn btn-primary'>Ok</button>
            </form>
            <div class='mt-10'>
                <?php
            
            $equation = $_POST['text'];;
            list($a, $operator, $b, $equal, $c) = explode(" ", $equation);
            // $a = (float)$a;
            // $b = (float)$b;
            // $c = (float)$c;
            $x = "";
            if ($b == 'x') {
                echo "Введите x первым пожалуйста :)";
            } else {
                if ($operator == '+') {
                $x = $c - $b;
                } elseif ($operator == '-') {
                $x = $c + $b;
                } elseif ($operator == '*') {
                $x = $c / $b;
                } else {
                $x = $c * $b;
                }
                if ($x != ''){
                    echo "Значение переменной x = $x";}
            }        
            ?>
            </div>
            <img src="block.svg" alt="" class='mt-10 ml-16'>
        </div>
    </main>

    <footer class="footer bg-neutral text-neutral-content items-center gap-y-0 p-4">
        <div class="grid-flow-col items-center">
            <svg width="36" height="36" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                clip-rule="evenodd" class="fill-current">
                <path
                    d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z">
                </path>
            </svg>
            <p class="text-xs sm:text-base">
                Каширин Дмитрий Артёмович 221-321 © 2023 - Все права защищены
            </p>
        </div>
        <div class="grid-flow-col gap-4 md:place-self-center md:justify-self-end"></div>
    </footer>
    <!-- <script type="module" src="src/main.js"></script> -->
</body>

</html>
