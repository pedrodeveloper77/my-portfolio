<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Dev</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php
$data = [
    [
        "developedBy" => "João Pedro",
        "description" => "Transformo necessidades em aplicações reais, envolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.",
        "tags" => [
            "blue" => 'Github',
            "green" => 'PHP',
            "purple" => 'CSS',
            "pink" => 'HTML',
            "yellow" => 'Javascript'
        ],
        "cases" => [
            "travelgram" => [
                "title" => "Travelgram",
                "img" => "/assets/case.png",
                "desc" => "Sistema de viagens estilo o instagram.",
                "stacks" => [
                    "blue" => 'Github',
                    "green" => 'PHP',
                    "purple" => 'CSS',
                ]
            ],
            "technews" => [
                "title" => "Tech News",
                "img" => "/assets/case2.png",
                "desc" => "Portal de tecnologia.",
                "stacks" => [
                    "blue" => 'Github',
                    "green" => 'PHP',
                    "purple" => 'CSS',
                ]
            ],
            "zingen" => [
                "title" => "Zingen",
                "img" => "/assets/case3.png",
                "desc" => "Landing page completa e responsiva de um aplicativo de Karaokê.",
                "stacks" => [
                    "blue" => 'Github',
                    "green" => 'PHP',
                    "purple" => 'CSS',
                ]
            ],
            "turismo" => [
                "title" => "Página de turismo",
                "img" => "/assets/case4.png",
                "desc" => "Página com as principais informações para quem quer viajar para Busan.",
                "stacks" => [
                    "blue" => 'Github',
                    "green" => 'PHP',
                    "purple" => 'CSS',
                ]
            ]
        ],
        "socialmedia" => [
            "linkedin" => [
                "name_social" => 'Linkedin',
                "img_social" => '/assets/linkedin.png',
                "url" => "http://google.com"
            ],
            "instagram" => [
                "name_social" => 'Instagram',
                "img_social" => '/assets/instagram.png',
                "url" => "http://google.com"
            ],
            "github" => [
                "name_social" => 'Github',
                "img_social" => '/assets/github.png',
                "url" => "http://google.com"
            ],
            "email" => [
                "name_social" => 'Email',
                "img_social" => '/assets/email.png',
                "url" => "http://google.com"
            ],
        ]

    ]
]

?>

<body class="bg-[url('./assets/background_Intro.png')] bg-cover bg-center h-screen text-white">
    <header class="mx-auto max-w-screen-lg p-9">
        <nav class="flex flex-col items-center justify-center h-auto">
            <ul class="text-center space-y-7">
                <?php foreach ($data as $d): ?>
                    <li><img class="mx-auto w-32 h-32 rounded-full" src="./assets/profile.jpg" alt=""></li>
                    <li class="text-gray-500 text-base md:text-lg">Hello World! Meu nome é <span class="text-red-400 font-semibold"><?= $d['developedBy']; ?></span> e sou</li>
                    <li class="text-gray-200 text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-semibold">Desenvolvedor PHP</li>
                    <li class="text-gray-400 mx-auto w-34 sm:w-full md:w-full lg:w-full text-center sm:text-start text-xs sm:text-base md:text-base lg:text-base"><?= $d['description']; ?></li>
                    <li class="flex justify-center space-x-1 gap-1 sm:gap-2">
                        <?php foreach ($d['tags'] as $key => $value): ?>
                            <span class="bg-<?= $key; ?>-500 text-slate-900 px-2 py-1 sm:px-3 sm:py-1 rounded cursor-pointer hover:opacity-90"><?= $value; ?></span>
                        <?php endforeach; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
    <section class="mx-auto max-w-screen-lg p-9 flex justify-center flex-col items-center mt-20">
        <h1 class="text-red-400 font-semibold text-2xl">Meu trabalho</h1>
        <h3 class="text-white text-3xl font-bold text-center">Veja os projetos em destaque</h3>
    </section>
    <section class="mx-auto max-w-screen-lg p-9 grid grid-cols-1 sm:grid-cols-2 gap-3">
        <?php foreach ($d['cases'] as $key => $value): ?>
            <div class="bg-[#292c34] mt-9 flex flex-col sm:flex-col md:flex-col lg:flex-row items-center px-3 py-3 gap-4 w-full">
                <div class="flex-shrink-0 w-36 h-36 overflow-hidden rounded-lg">
                    <img class="w-full h-full object-center brightness-50 hover:animate-ping" src="<?= $value['img']; ?>" alt="<?= $value['title']; ?>">
                </div>
                <div class="space-y-2 py-4 text-start">
                    <h2 class="cursor-pointer font-semibold"><?= $value['title']; ?></h2>
                    <p class="text-gray-300"><?= $value['desc']; ?></p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        <?php foreach ($value['stacks'] as $color => $stack): ?>
                            <span class="text-xs bg-<?= $color; ?>-500 text-slate-900 px-2 py-1 sm:px-3 sm:py-1 rounded cursor-pointer hover:opacity-90"><?= $stack; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
    <section class="mx-auto max-w-screen-lg p-9 flex justify-center flex-col items-center mt-20">
        <h1 class="text-purple-400 font-semibold text-2xl">Contato</h1>
        <h3 class="text-gray-500 text-1xl text-center">Entre em contato ou acompanhe minhas redes sociais!</h3>
    </section>
    <footer class="mx-auto max-w-screen-lg px-7 py-3 flex flex-col justify-center items-center">
        <?php foreach ($d['socialmedia'] as $social => $s): ?>
            <div onclick="window.open('<?= $s['url']; ?>', '_blank')" class="flex flex-row justify-between bg-[#292c34] w-full sm:w-1/3 md:w-1/3 py-4 px-3 rounded-lg mt-2 items-center cursor-pointer">
                <p class="flex flex-row gap-3"><img src="<?= $s['img_social']; ?>" alt=""><?= $s['name_social']; ?></p>
                <img class="w-3 h-3" src="/assets/arrow.png" alt="">
            </div>
        <?php endforeach; ?>
    </footer>
</body>

</html>