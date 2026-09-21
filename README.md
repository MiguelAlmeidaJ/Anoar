# Anoar — site institucional

Landing page responsiva em PHP para a Anoar, com foco em contato rápido por WhatsApp e presença no Instagram.

## Stack

- PHP 8+
- HTML5 semântico
- CSS responsivo sem frameworks
- JavaScript vanilla

## Rodando localmente

```bash
php -S localhost:8000
```

Abra `http://localhost:8000` no navegador.

## Configuração

Os dados de contato ficam centralizados em `config/site.php`:

- WhatsApp: `+55 (32) 98407-5039`
- Instagram: `@grupoanoar`

## Estrutura

```text
.
├── index.php
├── config/
│   └── site.php
└── assets/
    ├── css/style.css
    ├── js/main.js
    └── img/
        ├── anoar-wordmark.svg
        └── anr-mark.svg
```
