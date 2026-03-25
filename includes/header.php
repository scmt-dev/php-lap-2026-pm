<?php 
require_once dirname(__DIR__).'/config/config.php';
?>
<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Sovereign Financial | Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    "inverse-on-surface": "#eaf1ff",
                    "tertiary-fixed-dim": "#ffb95f",
                    "on-tertiary-container": "#c88000",
                    "primary-fixed": "#dbe1ff",
                    "on-tertiary-fixed-variant": "#653e00",
                    "tertiary-fixed": "#ffddb8",
                    "on-secondary-container": "#00714d",
                    "inverse-primary": "#b3c5ff",
                    "on-surface-variant": "#444650",
                    "surface-container-highest": "#d9e3f6",
                    "on-surface": "#121c2a",
                    "background": "#f8f9ff",
                    "on-tertiary-fixed": "#2a1700",
                    "primary-fixed-dim": "#b3c5ff",
                    "error-container": "#ffdad6",
                    "on-tertiary": "#ffffff",
                    "outline": "#757682",
                    "secondary-fixed": "#6ffbbe",
                    "surface-dim": "#d0dbed",
                    "error": "#ba1a1a",
                    "surface-tint": "#435b9f",
                    "primary": "#00113a",
                    "on-primary-container": "#758dd5",
                    "on-secondary-fixed": "#002113",
                    "secondary": "#006c49",
                    "surface-container-high": "#dee9fc",
                    "surface-container": "#e6eeff",
                    "surface-container-low": "#eff4ff",
                    "surface-container-lowest": "#ffffff",
                    "secondary-container": "#6cf8bb",
                    "on-primary-fixed": "#00174a",
                    "on-secondary-fixed-variant": "#005236",
                    "surface-bright": "#f8f9ff",
                    "on-secondary": "#ffffff",
                    "primary-container": "#002366",
                    "on-error-container": "#93000a",
                    "outline-variant": "#c5c6d2",
                    "inverse-surface": "#27313f",
                    "on-primary": "#ffffff",
                    "tertiary-container": "#3c2300",
                    "on-error": "#ffffff",
                    "on-primary-fixed-variant": "#2a4386",
                    "surface": "#f8f9ff",
                    "secondary-fixed-dim": "#4edea3",
                    "surface-variant": "#d9e3f6",
                    "on-background": "#121c2a",
                    "tertiary": "#201100"
                },
                fontFamily: {
                    "headline": ["Manrope"],
                    "body": ["Inter"],
                    "label": ["Inter"]
                },
                borderRadius: {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
                },
            },
        },
    }
    </script>
    <style>
    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
    }

    body {
        font-family: 'Inter', sans-serif;
    }

    h1,
    h2,
    h3,
    .font-headline {
        font-family: 'Manrope', sans-serif;
    }
    </style>
</head>