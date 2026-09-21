<?php

declare(strict_types=1);

$site = require __DIR__ . '/config/site.php';

function whatsapp_url(string $phone, string $message): string
{
    return 'https://wa.me/' . $phone . '?text=' . rawurlencode($message);
}

$projectWhatsapp = whatsapp_url(
    $site['phone_whatsapp'],
    'Olá, Anoar! Quero conversar sobre um projeto para minha empresa.'
);

$services = [
    [
        'number' => '01',
        'title' => 'Posicionamento digital',
        'text' => 'Estratégia para organizar presença, mensagem e percepção de marca no ambiente digital.',
        'detail' => 'Estratégia · marca · presença'
    ],
    [
        'number' => '02',
        'title' => 'Marketing',
        'text' => 'Planejamento de comunicação e ações digitais conectadas aos objetivos reais do negócio.',
        'detail' => 'Conteúdo · campanhas · performance'
    ],
    [
        'number' => '03',
        'title' => 'Sites',
        'text' => 'Sites institucionais e landing pages com direção visual, experiência e desenvolvimento responsivo.',
        'detail' => 'UX · UI · desenvolvimento'
    ],
    [
        'number' => '04',
        'title' => 'Sistemas',
        'text' => 'Soluções web sob medida para digitalizar operações, integrar informações e reduzir trabalho manual.',
        'detail' => 'Software · integrações · automação'
    ],
    [
        'number' => '05',
        'title' => 'Hospedagem',
        'text' => 'Infraestrutura e acompanhamento técnico para manter sites e sistemas publicados com segurança.',
        'detail' => 'Hospedagem · SSL · suporte'
    ],
];

$process = [
    ['number' => '01', 'title' => 'Diagnóstico', 'text' => 'Entendemos o negócio, o momento, o público e o problema antes de propor qualquer solução.'],
    ['number' => '02', 'title' => 'Direção', 'text' => 'Definimos prioridades, linguagem, escopo e arquitetura para que cada decisão tenha um motivo.'],
    ['number' => '03', 'title' => 'Construção', 'text' => 'Estratégia, design e tecnologia avançam juntos até a entrega do que foi planejado.'],
    ['number' => '04', 'title' => 'Continuidade', 'text' => 'Depois da publicação, podemos cuidar da infraestrutura e da evolução digital do projeto.'],
];

$currentYear = date('Y');
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#26110F">
    <meta name="description" content="A Anoar atua com posicionamento digital, marketing, criação de sites e sistemas e hospedagem de sites. Estratégia, design e tecnologia para negócios.">
    <meta property="og:title" content="Anoar — Posicionamento, marketing e tecnologia">
    <meta property="og:description" content="Estratégia, marketing, sites, sistemas e infraestrutura digital para empresas.">
    <meta property="og:type" content="website">
    <title>Anoar — Posicionamento, marketing, sites e sistemas</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <a class="skip-link" href="#conteudo">Ir para o conteúdo</a>

    <header class="site-header" id="inicio">
        <div class="container header-inner">
            <a class="brand" href="#inicio" aria-label="Anoar — início">
                <img src="assets/img/anoar-wordmark.svg" alt="Anoar" width="154" height="38">
            </a>

            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-nav" aria-label="Abrir menu">
                <span></span><span></span>
            </button>

            <nav class="main-nav" id="main-nav" aria-label="Navegação principal">
                <a href="#atuacao">Atuação</a>
                <a href="#metodo">Método</a>
                <a href="#hospedagem">Hospedagem</a>
                <a href="#contato">Contato</a>
                <a class="nav-cta" href="<?= htmlspecialchars($projectWhatsapp, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">Iniciar projeto</a>
            </nav>
        </div>
    </header>

    <main id="conteudo">
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero-grain" aria-hidden="true"></div>

            <div class="container hero-grid">
                <div class="hero-main reveal">
                    <span class="eyebrow">POSICIONAMENTO · MARKETING · TECNOLOGIA</span>
                    <h1 id="hero-title">Presença digital com <em>direção, forma e estrutura.</em></h1>
                    <p>Anoar é uma empresa de soluções digitais. Unimos estratégia, comunicação e desenvolvimento para construir presenças digitais coerentes com o negócio.</p>

                    <div class="hero-actions">
                        <a class="button button-primary" href="#atuacao">Conheça nossa atuação</a>
                        <a class="button button-text" href="<?= htmlspecialchars($projectWhatsapp, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">
                            Falar sobre um projeto <span aria-hidden="true">↗</span>
                        </a>
                    </div>
                </div>

                <aside class="hero-aside reveal reveal-delay" aria-label="Áreas de atuação">
                    <div class="hero-aside-head">
                        <span>ANOAR / 2026</span>
                        <span>BRASIL</span>
                    </div>

                    <div class="hero-logo-stage">
                        <img src="assets/img/anoar-wordmark.svg" alt="Anoar">
                    </div>

                    <div class="hero-capabilities">
                        <span>Posicionamento digital</span>
                        <span>Marketing</span>
                        <span>Sites</span>
                        <span>Sistemas</span>
                        <span>Hospedagem</span>
                    </div>
                </aside>
            </div>

            <div class="container hero-foot reveal">
                <span>Estratégia para posicionar.</span>
                <span>Design para comunicar.</span>
                <span>Tecnologia para sustentar.</span>
            </div>
        </section>

        <section class="manifesto" aria-labelledby="manifesto-title">
            <div class="container manifesto-grid">
                <span class="section-index reveal">01 / SOBRE</span>

                <div class="manifesto-copy reveal reveal-delay">
                    <h2 id="manifesto-title">Digital não é um canal isolado. <em>É parte da experiência da empresa.</em></h2>
                    <div class="manifesto-text">
                        <p>Um bom site não resolve uma mensagem confusa. Marketing não sustenta uma experiência ruim. Tecnologia sem direção apenas digitaliza problemas.</p>
                        <p>Nosso trabalho é conectar essas partes para que a presença digital tenha coerência — da estratégia à infraestrutura.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="services" id="atuacao" aria-labelledby="services-title">
            <div class="container">
                <div class="section-head reveal">
                    <div>
                        <span class="section-index">02 / ATUAÇÃO</span>
                        <h2 id="services-title">O que a Anoar constrói.</h2>
                    </div>
                    <p>Projetos podem começar por uma única necessidade ou combinar diferentes frentes conforme o momento da empresa.</p>
                </div>

                <div class="service-list">
                    <?php foreach ($services as $index => $service): ?>
                        <article class="service-row reveal" style="--delay: <?= (int) $index * 55 ?>ms">
                            <span class="service-number"><?= htmlspecialchars($service['number']) ?></span>
                            <h3><?= htmlspecialchars($service['title']) ?></h3>
                            <p><?= htmlspecialchars($service['text']) ?></p>
                            <span class="service-detail"><?= htmlspecialchars($service['detail']) ?></span>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="statement" aria-label="Posicionamento Anoar">
            <div class="container statement-inner reveal">
                <span>Anoar</span>
                <p>Entre uma ideia e uma experiência digital consistente existe estratégia, linguagem, design, código e operação.</p>
            </div>
        </section>

        <section class="method" id="metodo" aria-labelledby="method-title">
            <div class="container method-grid">
                <div class="method-intro reveal">
                    <span class="section-index">03 / MÉTODO</span>
                    <h2 id="method-title">Antes de executar, <em>entendemos.</em></h2>
                    <p>Não começamos escolhendo ferramenta, layout ou campanha. Começamos pelo contexto para decidir o que realmente precisa ser construído.</p>
                </div>

                <div class="process-list">
                    <?php foreach ($process as $index => $item): ?>
                        <article class="process-row reveal" style="--delay: <?= (int) $index * 70 ?>ms">
                            <span><?= htmlspecialchars($item['number']) ?></span>
                            <div>
                                <h3><?= htmlspecialchars($item['title']) ?></h3>
                                <p><?= htmlspecialchars($item['text']) ?></p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="hosting" id="hospedagem" aria-labelledby="hosting-title">
            <div class="container hosting-shell">
                <div class="hosting-copy reveal">
                    <span class="section-index section-index-light">04 / HOSPEDAGEM</span>
                    <h2 id="hosting-title">Publicar é só o começo.</h2>
                    <p>Sites e sistemas precisam de uma base confiável depois que entram no ar. A Anoar também oferece hospedagem e acompanhamento técnico para projetos digitais.</p>
                    <a class="button button-cream" href="<?= htmlspecialchars($projectWhatsapp, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">
                        Falar sobre hospedagem <span aria-hidden="true">↗</span>
                    </a>
                </div>

                <div class="hosting-panel reveal reveal-delay">
                    <div class="hosting-status">
                        <i></i>
                        <span>INFRAESTRUTURA</span>
                    </div>
                    <dl>
                        <div>
                            <dt>Hospedagem</dt>
                            <dd>Sites e sistemas</dd>
                        </div>
                        <div>
                            <dt>Segurança</dt>
                            <dd>SSL e boas práticas</dd>
                        </div>
                        <div>
                            <dt>Operação</dt>
                            <dd>Acompanhamento técnico</dd>
                        </div>
                        <div>
                            <dt>Continuidade</dt>
                            <dd>Suporte e evolução</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </section>

        <section class="fit" aria-labelledby="fit-title">
            <div class="container fit-grid">
                <div class="fit-heading reveal">
                    <span class="section-index">05 / QUANDO FAZ SENTIDO</span>
                    <h2 id="fit-title">Quando o digital precisa acompanhar o nível do seu negócio.</h2>
                </div>

                <div class="fit-items reveal reveal-delay">
                    <p>Quando sua empresa cresceu, mas a presença digital ficou para trás.</p>
                    <p>Quando o site precisa comunicar melhor, gerar confiança ou apoiar o comercial.</p>
                    <p>Quando processos internos já pedem sistema, integração ou automação.</p>
                    <p>Quando marketing, marca, tecnologia e operação precisam seguir a mesma direção.</p>
                </div>
            </div>
        </section>

        <section class="contact" id="contato" aria-labelledby="contact-title">
            <div class="container contact-grid">
                <div class="contact-label reveal">
                    <span class="section-index section-index-light">06 / CONTATO</span>
                </div>

                <div class="contact-main reveal reveal-delay">
                    <h2 id="contact-title">Vamos entender o que sua empresa precisa <em>construir agora.</em></h2>
                    <p>Conte um pouco sobre o negócio, o cenário atual e o objetivo. A partir daí, podemos direcionar a conversa para a solução certa.</p>

                    <div class="contact-actions">
                        <a class="button button-cream" href="<?= htmlspecialchars($projectWhatsapp, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">
                            Iniciar uma conversa <span aria-hidden="true">↗</span>
                        </a>
                        <span><?= htmlspecialchars($site['phone_display']) ?></span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-top">
            <a class="footer-logo" href="#inicio" aria-label="Anoar — início">
                <img src="assets/img/anoar-wordmark.svg" alt="Anoar">
            </a>

            <div class="footer-services">
                <span>Posicionamento</span>
                <span>Marketing</span>
                <span>Sites</span>
                <span>Sistemas</span>
                <span>Hospedagem</span>
            </div>

            <div class="footer-links">
                <a href="<?= htmlspecialchars($projectWhatsapp, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">WhatsApp ↗</a>
                <a href="<?= htmlspecialchars($site['instagram_url'], ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">Instagram ↗</a>
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
