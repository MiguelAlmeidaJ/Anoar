<?php

declare(strict_types=1);

$site = require __DIR__ . '/config/site.php';

function whatsapp_url(string $phone, string $message): string
{
    return 'https://wa.me/' . $phone . '?text=' . rawurlencode($message);
}

$contacts = [
    [
        'label' => 'Suporte',
        'title' => 'Precisa de ajuda?',
        'description' => 'Fale com nosso time pelo WhatsApp e conte o que você precisa resolver.',
        'message' => 'Olá, Anoar! Preciso de suporte.',
        'icon' => 'headset',
    ],
    [
        'label' => 'Comercial',
        'title' => 'Vamos conversar sobre negócios?',
        'description' => 'Entre em contato para conhecer possibilidades, propostas e novas oportunidades.',
        'message' => 'Olá, Anoar! Gostaria de falar com o comercial.',
        'icon' => 'briefcase',
    ],
    [
        'label' => 'Outros assuntos',
        'title' => 'Quer falar com a Anoar?',
        'description' => 'Use nosso canal direto para parcerias, dúvidas ou qualquer outro assunto.',
        'message' => 'Olá, Anoar! Gostaria de falar sobre outro assunto.',
        'icon' => 'message',
    ],
];

$primaryWhatsapp = whatsapp_url($site['phone_whatsapp'], 'Olá, Anoar! Gostaria de falar com vocês.');
$currentYear = date('Y');
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1800ac">
    <meta name="description" content="Canal oficial da Anoar. Fale com nossa equipe de suporte, comercial e atendimento pelo WhatsApp.">
    <meta property="og:title" content="Anoar — Conexões que fazem avançar">
    <meta property="og:description" content="Fale com a Anoar pelo WhatsApp ou acompanhe nossas novidades no Instagram.">
    <meta property="og:type" content="website">
    <title>Anoar — Suporte, Comercial e Contato</title>
    <link rel="icon" type="image/svg+xml" href="assets/img/anr-mark.svg">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <a class="skip-link" href="#conteudo">Ir para o conteúdo</a>

    <header class="site-header" id="inicio">
        <div class="container header-inner">
            <a class="brand" href="#inicio" aria-label="Anoar — início">
                <img src="assets/img/anr-mark.svg" alt="" width="44" height="44">
                <span>ANOAR</span>
            </a>

            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-nav" aria-label="Abrir menu">
                <span></span><span></span>
            </button>

            <nav class="main-nav" id="main-nav" aria-label="Navegação principal">
                <a href="#sobre">Sobre</a>
                <a href="#contato">Contato</a>
                <a href="#faq">Dúvidas</a>
                <a class="nav-cta" href="<?= htmlspecialchars($primaryWhatsapp, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">Falar no WhatsApp</a>
            </nav>
        </div>
    </header>

    <main id="conteudo">
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero-glow hero-glow-one"></div>
            <div class="hero-glow hero-glow-two"></div>

            <div class="container hero-grid">
                <div class="hero-copy reveal">
                    <span class="eyebrow">GRUPO ANOAR</span>
                    <h1 id="hero-title">Mais perto para resolver.<br><span>Mais simples para avançar.</span></h1>
                    <p>Um canal direto com a Anoar para suporte, comercial e novos contatos. Escolha como quer falar com a gente.</p>

                    <div class="hero-actions">
                        <a class="button button-primary" href="<?= htmlspecialchars($primaryWhatsapp, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">
                            <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M16.75 13.96c-.25-.12-1.47-.72-1.7-.81-.23-.08-.4-.12-.56.13-.17.25-.65.81-.8.98-.15.17-.29.19-.54.06-.25-.12-1.05-.39-2-1.24-.74-.66-1.24-1.47-1.38-1.72-.15-.25-.02-.38.11-.5.11-.11.25-.29.37-.44.12-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.12-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.43 1.03 2.6.12.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.43.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.15-1.18-.06-.1-.23-.17-.48-.29z"/><path d="M20.52 3.48A11.91 11.91 0 0 0 12.04 0C5.44 0 .07 5.37.07 11.97c0 2.11.55 4.17 1.6 5.98L0 24l6.2-1.63a11.93 11.93 0 0 0 5.83 1.48h.01C18.64 23.85 24 18.48 24 11.88c0-3.17-1.23-6.15-3.48-8.4zm-8.48 18.35h-.01a9.9 9.9 0 0 1-5.05-1.38l-.36-.21-3.68.97.98-3.59-.23-.37a9.91 9.91 0 0 1-1.52-5.28c0-5.49 4.47-9.95 9.96-9.95 2.66 0 5.16 1.04 7.04 2.92a9.9 9.9 0 0 1 2.91 7.05c0 5.49-4.47 9.95-9.96 9.95z"/></svg>
                            Falar no WhatsApp
                        </a>
                        <a class="button button-ghost" href="<?= htmlspecialchars($site['instagram_url'], ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">Ver Instagram</a>
                    </div>

                    <div class="hero-meta" aria-label="Áreas de atendimento">
                        <span>Suporte</span><i></i><span>Comercial</span><i></i><span>Parcerias</span>
                    </div>
                </div>

                <div class="hero-visual reveal reveal-delay">
                    <div class="brand-panel">
                        <img class="wordmark-image" src="assets/img/anoar-wordmark.svg" alt="Anoar" width="1920" height="1080">
                        <div class="visual-line"></div>
                        <p>Conexões que movem ideias, negócios e pessoas.</p>
                    </div>
                    <div class="anr-badge">
                        <img src="assets/img/anr-mark.svg" alt="ANR." width="500" height="500">
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-light" id="sobre" aria-labelledby="sobre-title">
            <div class="container about-grid">
                <div class="section-heading reveal">
                    <span class="eyebrow eyebrow-dark">SOBRE A ANOAR</span>
                    <h2 id="sobre-title">Boas relações começam por uma conversa clara.</h2>
                </div>
                <div class="about-copy reveal reveal-delay">
                    <p class="lead">Criamos este espaço para reunir nossos canais oficiais e facilitar seu contato com o time certo.</p>
                    <p>Seja para tirar uma dúvida, pedir suporte, conversar com o comercial ou iniciar uma nova parceria, a Anoar está a uma mensagem de distância.</p>
                    <a class="text-link" href="#contato">Escolha seu atendimento <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>

        <section class="section section-blue" id="contato" aria-labelledby="contato-title">
            <div class="container">
                <div class="section-heading section-heading-centered reveal">
                    <span class="eyebrow eyebrow-light">FALE COM A GENTE</span>
                    <h2 id="contato-title">Do que você precisa hoje?</h2>
                    <p>Um único número, com a mensagem certa para chegar mais rápido ao assunto que você quer tratar.</p>
                </div>

                <div class="contact-grid">
                    <?php foreach ($contacts as $index => $contact): ?>
                        <article class="contact-card reveal" style="--delay: <?= (int) $index * 90 ?>ms">
                            <div class="contact-icon" aria-hidden="true">
                                <?php if ($contact['icon'] === 'headset'): ?>
                                    <svg viewBox="0 0 24 24"><path d="M4 14v-2a8 8 0 0 1 16 0v2"/><path d="M18 19c0 1.1-.9 2-2 2h-4"/><rect x="3" y="13" width="4" height="6" rx="2"/><rect x="17" y="13" width="4" height="6" rx="2"/></svg>
                                <?php elseif ($contact['icon'] === 'briefcase'): ?>
                                    <svg viewBox="0 0 24 24"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M3 12h18M10 12v2h4v-2"/></svg>
                                <?php else: ?>
                                    <svg viewBox="0 0 24 24"><path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/><path d="M8 9h8M8 13h5"/></svg>
                                <?php endif; ?>
                            </div>
                            <span class="card-kicker"><?= htmlspecialchars($contact['label']) ?></span>
                            <h3><?= htmlspecialchars($contact['title']) ?></h3>
                            <p><?= htmlspecialchars($contact['description']) ?></p>
                            <a href="<?= htmlspecialchars(whatsapp_url($site['phone_whatsapp'], $contact['message']), ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">
                                Abrir conversa <span aria-hidden="true">↗</span>
                            </a>
                        </article>
                    <?php endforeach; ?>
                </div>

                <div class="phone-strip reveal">
                    <div>
                        <span>WhatsApp oficial</span>
                        <strong><?= htmlspecialchars($site['phone_display']) ?></strong>
                    </div>
                    <a class="button button-dark" href="<?= htmlspecialchars($primaryWhatsapp, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">Enviar mensagem</a>
                </div>
            </div>
        </section>

        <section class="section social-section" aria-labelledby="social-title">
            <div class="container social-grid">
                <div class="social-card reveal">
                    <div class="social-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
                    </div>
                    <div>
                        <span>Acompanhe a Anoar</span>
                        <h2 id="social-title"><?= htmlspecialchars($site['instagram_handle']) ?></h2>
                    </div>
                    <a href="<?= htmlspecialchars($site['instagram_url'], ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer" aria-label="Abrir Instagram da Anoar">↗</a>
                </div>
            </div>
        </section>

        <section class="section faq-section" id="faq" aria-labelledby="faq-title">
            <div class="container faq-grid">
                <div class="section-heading reveal">
                    <span class="eyebrow eyebrow-dark">DÚVIDAS RÁPIDAS</span>
                    <h2 id="faq-title">Antes de chamar, talvez isso ajude.</h2>
                </div>
                <div class="faq-list reveal reveal-delay">
                    <details>
                        <summary>Qual é o canal direto da Anoar?</summary>
                        <p>Nosso contato principal é o WhatsApp <strong><?= htmlspecialchars($site['phone_display']) ?></strong>.</p>
                    </details>
                    <details>
                        <summary>Posso falar com o comercial pelo mesmo número?</summary>
                        <p>Sim. Use o botão “Comercial” acima para abrir a conversa já com o assunto identificado.</p>
                    </details>
                    <details>
                        <summary>Onde acompanho as novidades?</summary>
                        <p>Siga <strong><?= htmlspecialchars($site['instagram_handle']) ?></strong> no Instagram para acompanhar as publicações da Anoar.</p>
                    </details>
                </div>
            </div>
        </section>

        <section class="final-cta">
            <div class="container final-cta-inner reveal">
                <span class="eyebrow">PRONTO PARA CONVERSAR?</span>
                <h2>Chame a Anoar.</h2>
                <p>Escolha seu assunto e comece uma conversa agora.</p>
                <a class="button button-primary button-light" href="<?= htmlspecialchars($primaryWhatsapp, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">Abrir WhatsApp</a>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-inner">
            <a class="brand brand-footer" href="#inicio" aria-label="Anoar — início">
                <img src="assets/img/anr-mark.svg" alt="" width="40" height="40">
                <span>ANOAR</span>
            </a>
            <p>© <?= htmlspecialchars($currentYear) ?> Anoar. Todos os direitos reservados.</p>
            <div class="footer-links">
                <a href="<?= htmlspecialchars($site['instagram_url'], ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">Instagram</a>
                <a href="<?= htmlspecialchars($primaryWhatsapp, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">WhatsApp</a>
            </div>
        </div>
    </footer>

    <a class="floating-whatsapp" href="<?= htmlspecialchars($primaryWhatsapp, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer" aria-label="Falar com a Anoar no WhatsApp">
        <svg aria-hidden="true" viewBox="0 0 24 24"><path d="M16.75 13.96c-.25-.12-1.47-.72-1.7-.81-.23-.08-.4-.12-.56.13-.17.25-.65.81-.8.98-.15.17-.29.19-.54.06-.25-.12-1.05-.39-2-1.24-.74-.66-1.24-1.47-1.38-1.72-.15-.25-.02-.38.11-.5.11-.11.25-.29.37-.44.12-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.12-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.43 1.03 2.6.12.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.43.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.15-1.18-.06-.1-.23-.17-.48-.29z"/><path d="M20.52 3.48A11.91 11.91 0 0 0 12.04 0C5.44 0 .07 5.37.07 11.97c0 2.11.55 4.17 1.6 5.98L0 24l6.2-1.63a11.93 11.93 0 0 0 5.83 1.48h.01C18.64 23.85 24 18.48 24 11.88c0-3.17-1.23-6.15-3.48-8.4zm-8.48 18.35h-.01a9.9 9.9 0 0 1-5.05-1.38l-.36-.21-3.68.97.98-3.59-.23-.37a9.91 9.91 0 0 1-1.52-5.28c0-5.49 4.47-9.95 9.96-9.95 2.66 0 5.16 1.04 7.04 2.92a9.9 9.9 0 0 1 2.91 7.05c0 5.49-4.47 9.95-9.96 9.95z"/></svg>
    </a>

    <script src="assets/js/main.js" defer></script>
</body>
</html>
