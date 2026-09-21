<?php

declare(strict_types=1);

$site = require __DIR__ . '/config/site.php';

function whatsapp_url(string $phone, string $message): string
{
    return 'https://wa.me/' . $phone . '?text=' . rawurlencode($message);
}

$projectWhatsapp = whatsapp_url(
    $site['phone_whatsapp'],
    'Olá, Anoar! Gostaria de conversar sobre um projeto digital.'
);

$services = [
    [
        'number' => '01',
        'title' => 'Posicionamento digital',
        'description' => 'Estratégia para organizar sua presença digital, comunicar valor com clareza e ocupar o espaço certo no mercado.',
        'items' => ['Estratégia de presença', 'Identidade e comunicação', 'Jornada digital'],
    ],
    [
        'number' => '02',
        'title' => 'Marketing',
        'description' => 'Planejamento e execução para transformar comunicação em relacionamento, demanda e oportunidades de negócio.',
        'items' => ['Planejamento', 'Conteúdo e campanhas', 'Performance digital'],
    ],
    [
        'number' => '03',
        'title' => 'Sites',
        'description' => 'Sites institucionais, landing pages e experiências digitais rápidas, responsivas e alinhadas à sua marca.',
        'items' => ['UX e interface', 'Desenvolvimento', 'SEO técnico'],
    ],
    [
        'number' => '04',
        'title' => 'Sistemas',
        'description' => 'Soluções sob medida para digitalizar processos, integrar operações e transformar necessidades em software.',
        'items' => ['Sistemas web', 'Integrações', 'Automação de processos'],
    ],
    [
        'number' => '05',
        'title' => 'Hospedagem',
        'description' => 'Infraestrutura para manter sites e sistemas disponíveis, protegidos e acompanhados por suporte técnico.',
        'items' => ['Hospedagem gerenciada', 'SSL e segurança', 'Suporte técnico'],
    ],
];

$process = [
    ['step' => '01', 'title' => 'Entender', 'text' => 'Começamos pelo negócio, pelo público e pelo que precisa mudar — não por uma ferramenta pronta.'],
    ['step' => '02', 'title' => 'Planejar', 'text' => 'Definimos prioridades, escopo, arquitetura e uma direção clara para o projeto.'],
    ['step' => '03', 'title' => 'Construir', 'text' => 'Design, conteúdo e tecnologia avançam juntos, com decisões orientadas ao objetivo.'],
    ['step' => '04', 'title' => 'Evoluir', 'text' => 'Publicamos, acompanhamos e criamos base para a operação continuar evoluindo.'],
];

$currentYear = date('Y');
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0b0b0d">
    <meta name="description" content="A Anoar atua com posicionamento digital, marketing, criação de sites e sistemas e hospedagem de sites. Estratégia, design e tecnologia para negócios.">
    <meta property="og:title" content="Anoar — Estratégia, design e tecnologia">
    <meta property="og:description" content="Posicionamento digital, marketing, sites, sistemas e hospedagem para empresas que querem avançar no digital.">
    <meta property="og:type" content="website">
    <title>Anoar — Posicionamento digital, marketing, sites e sistemas</title>
    <link rel="icon" type="image/svg+xml" href="assets/img/anr-mark.svg">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <a class="skip-link" href="#conteudo">Ir para o conteúdo</a>

    <header class="site-header" id="inicio">
        <div class="container header-inner">
            <a class="brand" href="#inicio" aria-label="Anoar — início">
                <img src="assets/img/anr-mark.svg" alt="" width="36" height="36">
                <span>ANOAR</span>
            </a>

            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-nav" aria-label="Abrir menu">
                <span></span><span></span>
            </button>

            <nav class="main-nav" id="main-nav" aria-label="Navegação principal">
                <a href="#solucoes">Soluções</a>
                <a href="#metodo">Como trabalhamos</a>
                <a href="#infraestrutura">Hospedagem</a>
                <a href="#contato">Contato</a>
                <a class="nav-cta" href="<?= htmlspecialchars($projectWhatsapp, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">Falar sobre um projeto</a>
            </nav>
        </div>
    </header>

    <main id="conteudo">
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero-orbit hero-orbit-one"></div>
            <div class="hero-orbit hero-orbit-two"></div>

            <div class="container hero-grid">
                <div class="hero-copy reveal">
                    <span class="eyebrow">ESTRATÉGIA · DESIGN · TECNOLOGIA</span>
                    <h1 id="hero-title">Construímos presença digital que <span>faz sentido para o negócio.</span></h1>
                    <p>A Anoar conecta posicionamento, marketing e tecnologia para criar experiências digitais mais claras, profissionais e preparadas para crescer.</p>

                    <div class="hero-actions">
                        <a class="button button-primary" href="#solucoes">Conhecer soluções</a>
                        <a class="button button-ghost" href="<?= htmlspecialchars($projectWhatsapp, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">
                            Falar sobre um projeto
                            <span aria-hidden="true">↗</span>
                        </a>
                    </div>

                    <div class="hero-proof">
                        <span>Posicionamento</span>
                        <i></i>
                        <span>Marketing</span>
                        <i></i>
                        <span>Desenvolvimento</span>
                        <i></i>
                        <span>Infraestrutura</span>
                    </div>
                </div>

                <div class="hero-system reveal reveal-delay" aria-label="Áreas de atuação da Anoar">
                    <div class="system-top">
                        <span>ANOAR / DIGITAL</span>
                        <span>2026</span>
                    </div>

                    <div class="system-mark">
                        <img src="assets/img/anr-mark.svg" alt="ANR." width="500" height="500">
                        <p>Estratégia para posicionar.<br>Tecnologia para construir.<br>Estrutura para sustentar.</p>
                    </div>

                    <div class="system-list">
                        <div><span>01</span><strong>Posicionamento</strong></div>
                        <div><span>02</span><strong>Marketing</strong></div>
                        <div><span>03</span><strong>Sites</strong></div>
                        <div><span>04</span><strong>Sistemas</strong></div>
                        <div><span>05</span><strong>Hospedagem</strong></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="intro-section" aria-labelledby="intro-title">
            <div class="container intro-grid">
                <div class="intro-label reveal">
                    <span class="eyebrow eyebrow-dark">O QUE FAZEMOS</span>
                </div>
                <div class="intro-copy reveal reveal-delay">
                    <h2 id="intro-title">Digital não é só aparecer. É ser entendido, encontrado e ter estrutura para entregar.</h2>
                    <p>Por isso, trabalhamos diferentes camadas da presença digital de uma empresa — da estratégia ao desenvolvimento e à infraestrutura.</p>
                </div>
            </div>
        </section>

        <section class="services-section" id="solucoes" aria-labelledby="services-title">
            <div class="container">
                <div class="section-heading reveal">
                    <div>
                        <span class="eyebrow eyebrow-dark">SOLUÇÕES</span>
                        <h2 id="services-title">Competências que funcionam melhor quando trabalham juntas.</h2>
                    </div>
                    <p>Podemos atuar em uma frente específica ou estruturar um projeto combinando estratégia, comunicação e tecnologia.</p>
                </div>

                <div class="services-grid">
                    <?php foreach ($services as $index => $service): ?>
                        <article class="service-card reveal" style="--delay: <?= (int) ($index % 3) * 70 ?>ms">
                            <div class="service-number"><?= htmlspecialchars($service['number']) ?></div>
                            <h3><?= htmlspecialchars($service['title']) ?></h3>
                            <p><?= htmlspecialchars($service['description']) ?></p>
                            <ul>
                                <?php foreach ($service['items'] as $item): ?>
                                    <li><?= htmlspecialchars($item) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </article>
                    <?php endforeach; ?>

                    <article class="service-card service-card-cta reveal">
                        <span class="eyebrow">PROJETO SOB MEDIDA</span>
                        <h3>Seu desafio não cabe em uma categoria?</h3>
                        <p>Ótimo. Projetos digitais reais quase nunca começam prontos. Podemos entender o cenário e definir a melhor combinação de soluções.</p>
                        <a href="<?= htmlspecialchars($projectWhatsapp, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">Conversar sobre o desafio <span aria-hidden="true">↗</span></a>
                    </article>
                </div>
            </div>
        </section>

        <section class="method-section" id="metodo" aria-labelledby="method-title">
            <div class="container">
                <div class="method-head reveal">
                    <div>
                        <span class="eyebrow">COMO TRABALHAMOS</span>
                        <h2 id="method-title">Menos improviso.<br>Mais direção.</h2>
                    </div>
                    <p>Projetos melhores começam com contexto. Nosso processo organiza decisões antes de transformar tudo em layout, campanha ou código.</p>
                </div>

                <div class="process-grid">
                    <?php foreach ($process as $index => $item): ?>
                        <article class="process-item reveal" style="--delay: <?= (int) $index * 70 ?>ms">
                            <span><?= htmlspecialchars($item['step']) ?></span>
                            <h3><?= htmlspecialchars($item['title']) ?></h3>
                            <p><?= htmlspecialchars($item['text']) ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="infrastructure-section" id="infraestrutura" aria-labelledby="infra-title">
            <div class="container infrastructure-grid">
                <div class="infra-copy reveal">
                    <span class="eyebrow">HOSPEDAGEM & INFRAESTRUTURA</span>
                    <h2 id="infra-title">Depois de publicar, o trabalho continua.</h2>
                    <p>Também cuidamos da camada que mantém seu projeto no ar. Hospedagem, segurança e suporte técnico fazem parte de uma presença digital profissional.</p>
                    <a class="text-link-light" href="<?= htmlspecialchars($projectWhatsapp, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">
                        Falar sobre hospedagem <span aria-hidden="true">↗</span>
                    </a>
                </div>

                <div class="infra-panel reveal reveal-delay">
                    <div class="infra-status">
                        <span class="status-dot"></span>
                        <span>INFRAESTRUTURA DIGITAL</span>
                    </div>
                    <div class="infra-row">
                        <span>Hospedagem</span>
                        <strong>Gerenciada</strong>
                    </div>
                    <div class="infra-row">
                        <span>Segurança</span>
                        <strong>SSL + boas práticas</strong>
                    </div>
                    <div class="infra-row">
                        <span>Operação</span>
                        <strong>Suporte técnico</strong>
                    </div>
                    <div class="infra-row">
                        <span>Projetos</span>
                        <strong>Sites e sistemas</strong>
                    </div>
                </div>
            </div>
        </section>

        <section class="fit-section" aria-labelledby="fit-title">
            <div class="container fit-grid">
                <div class="section-heading compact reveal">
                    <div>
                        <span class="eyebrow eyebrow-dark">QUANDO A ANOAR FAZ SENTIDO</span>
                        <h2 id="fit-title">Para empresas que precisam transformar presença digital em estrutura de negócio.</h2>
                    </div>
                </div>

                <div class="fit-list reveal reveal-delay">
                    <div>
                        <span>01</span>
                        <p>Quando a marca existe, mas a comunicação ainda não transmite o nível da empresa.</p>
                    </div>
                    <div>
                        <span>02</span>
                        <p>Quando o site precisa deixar de ser cartão de visita e passar a apoiar objetivos comerciais.</p>
                    </div>
                    <div>
                        <span>03</span>
                        <p>Quando processos manuais já pedem um sistema, integração ou automação.</p>
                    </div>
                    <div>
                        <span>04</span>
                        <p>Quando marketing, tecnologia e operação precisam começar a conversar entre si.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section" id="contato" aria-labelledby="contact-title">
            <div class="container contact-shell reveal">
                <div class="contact-copy">
                    <span class="eyebrow">VAMOS CONVERSAR</span>
                    <h2 id="contact-title">Conte o que sua empresa precisa construir ou melhorar.</h2>
                    <p>O WhatsApp é apenas o canal de contato. A conversa começa pelo seu negócio, pelo momento da empresa e pelo objetivo do projeto.</p>
                </div>
                <div class="contact-actions">
                    <a class="button button-light" href="<?= htmlspecialchars($projectWhatsapp, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">
                        Iniciar uma conversa
                        <span aria-hidden="true">↗</span>
                    </a>
                    <span class="contact-phone"><?= htmlspecialchars($site['phone_display']) ?></span>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-main">
            <div class="footer-brand">
                <a class="brand brand-footer" href="#inicio" aria-label="Anoar — início">
                    <img src="assets/img/anr-mark.svg" alt="" width="32" height="32">
                    <span>ANOAR</span>
                </a>
                <p>Posicionamento digital, marketing, sites, sistemas e hospedagem.</p>
            </div>

            <div class="footer-nav">
                <div>
                    <span>Site</span>
                    <a href="#solucoes">Soluções</a>
                    <a href="#metodo">Como trabalhamos</a>
                    <a href="#infraestrutura">Hospedagem</a>
                </div>
                <div>
                    <span>Contato</span>
                    <a href="<?= htmlspecialchars($projectWhatsapp, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">WhatsApp</a>
                    <a href="<?= htmlspecialchars($site['instagram_url'], ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">Instagram</a>
                </div>
            </div>
        </div>

        <div class="container footer-bottom">
            <p>© <?= htmlspecialchars($currentYear) ?> Anoar. Todos os direitos reservados.</p>
            <span>Estratégia · Design · Tecnologia</span>
        </div>
    </footer>

    <script src="assets/js/main.js" defer></script>
</body>
</html>
