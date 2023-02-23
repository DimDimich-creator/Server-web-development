<!DOCTYPE html>
<html lang="ru" data-theme="dracula">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="./src/assets/favicon.svg" />
    <?php echo '<link rel="stylesheet" href=".\style.css" />'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Лабораторная работа 2</title>
</head>

<body>
    <header>
        <div class="navbar bg-base-100">
            <a href="../../../index.html" class="btn btn-ghost text-xl normal-case">МосПолитех</a>
        </div>
    </header>
    <main>
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
                    Лабараторная работа 2
                </li>
            </ul>
        </div>
        <div class="hero bg-base-200 min-h-screen">
            <div class="hero-content flex-col lg:flex-row-reverse">
                <div class="text-center lg:text-left">
                    <h1 class="text-5xl font-bold">Нет времени объяснять, заходи!</h1>
                    <p class="py-6"></p>
                </div>
                <form class="card bg-base-100 w-full max-w-sm flex-shrink-0 shadow-2xl"
                    action=" https://httpbin.org/post" method="post">
                    <div class="card-body">
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Мыло</span>
                            </label>
                            <input type="email" name="email" placeholder="aboba@mail.ru" class="input input-bordered" />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Имя</span>
                            </label>
                            <input type="text" name="name" placeholder="ДимДимыч" class="input input-bordered" />
                        </div>
                        <input type="radio" name="radio" id="complaint" value="complaint" class="radio radio-primary"
                            checked />
                        <label for="complaint">Жалоба</label>
                        <input type="radio" name="radio" value="suggestion" id="suggestion"
                            class="radio radio-primary" />
                        <label for="suggestion">Предложение</label>
                        <input type="radio" id="righty" value="righty" name="radio" class="radio radio-primary" />
                        <label for="righty">Благодарность</label>

                        <input type="text" placeholder="Пиши тут"
                            class="input input-bordered input-lg w-full max-w-xs" />
                        <h3 class="">Удобная форма связи</h3>
                        <div class="form-control">
                            <label class="label cursor-pointer">
                                <span class="label-text">СМС</span>
                                <input type="checkbox" name="connection" value="cmc"
                                    class="checkbox checkbox-primary" />
                            </label>
                        </div>
                        <div class="form-control">
                            <label class="label cursor-pointer">
                                <span class="label-text">Почта</span>
                                <input type="checkbox" name="connection" value="email" checked="checked"
                                    class="checkbox checkbox-primary" />
                            </label>
                        </div>
                        <div class="form-control mt-6">
                            <button class="btn btn-primary">Войти</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="footer bg-neutral text-neutral-content items-center p-4">
        <div class="grid-flow-col items-center">
            <svg width="36" height="36" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                clip-rule="evenodd" class="fill-current">
                <path
                    d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z">
                </path>
            </svg>
            <p>Каширин Дмитрий Артёмович 221-321 © 2023 - Все права защищены</p>
        </div>
        <div class="grid-flow-col gap-4 md:place-self-center md:justify-self-end"></div>
    </footer>
    <script type="module" src="../../main.js"></script>
</body>

</html>
