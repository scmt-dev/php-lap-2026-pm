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

<body class="bg-background text-on-surface antialiased">
    <!-- SideNavBar -->
    <aside
        class="fixed left-0 top-0 h-full w-64 pt-20 pb-8 flex flex-col gap-2 z-40 bg-slate-50 dark:bg-slate-950 font-manrope text-sm tracking-wide uppercase font-bold tonal-shift architecture">
        <div class="px-8 mb-8">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-white">
                    <span class="material-symbols-outlined"
                        style="font-variation-settings: 'FILL' 1;">account_balance</span>
                </div>
                <div>
                    <h1 class="text-lg font-black text-blue-950 dark:text-white leading-tight">Vaulted Editorial</h1>
                    <p class="text-[10px] tracking-widest text-on-surface-variant opacity-70">Private Banking</p>
                </div>
            </div>
        </div>
        <nav class="flex-1 px-4 space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 bg-white dark:bg-slate-800 text-blue-900 dark:text-blue-50 rounded-xl shadow-sm hover:translate-x-1 duration-200 transition-transform"
                href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 hover:translate-x-1 duration-200 transition-transform"
                href="#">
                <span class="material-symbols-outlined">account_balance</span>
                <span>Accounts</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 hover:translate-x-1 duration-200 transition-transform"
                href="#">
                <span class="material-symbols-outlined">receipt_long</span>
                <span>Transactions</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 hover:translate-x-1 duration-200 transition-transform"
                href="#">
                <span class="material-symbols-outlined">group</span>
                <span>Users</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-blue-700 dark:hover:text-blue-300 hover:translate-x-1 duration-200 transition-transform"
                href="#">
                <span class="material-symbols-outlined">settings</span>
                <span>Settings</span>
            </a>
        </nav>
        <div class="px-4 mt-auto space-y-1">
            <button
                class="w-full mb-6 py-4 bg-primary text-white rounded-xl font-bold flex items-center justify-center gap-2 hover:opacity-90 transition-all shadow-lg shadow-primary/20">
                <span class="material-symbols-outlined">add</span>
                <span>New Transaction</span>
            </button>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-blue-700 transition-transform hover:translate-x-1"
                href="#">
                <span class="material-symbols-outlined">contact_support</span>
                <span>Support</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-error hover:opacity-80 transition-transform hover:translate-x-1"
                href="#">
                <span class="material-symbols-outlined">logout</span>
                <span>Logout</span>
            </a>
        </div>
    </aside>
    <!-- TopNavBar -->
    <header
        class="fixed top-0 left-0 w-full h-16 flex items-center justify-between px-8 z-50 bg-white/70 dark:bg-slate-900/70 backdrop-blur-xl shadow-sm dark:shadow-none font-manrope text-sm font-semibold tracking-tight no-border">
        <div class="flex items-center gap-8 pl-64">
            <span class="text-xl font-extrabold tracking-tighter text-blue-900 dark:text-blue-50">Sovereign
                Financial</span>
            <div class="hidden md:flex items-center bg-surface-container-low px-4 py-1.5 rounded-full">
                <span class="material-symbols-outlined text-on-surface-variant text-sm mr-2">search</span>
                <input
                    class="bg-transparent border-none focus:ring-0 text-sm w-64 placeholder:text-on-surface-variant/50"
                    placeholder="Search portfolio..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 rounded-full text-slate-500 hover:bg-blue-50/50 transition-colors">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <button class="p-2 rounded-full text-slate-500 hover:bg-blue-50/50 transition-colors">
                <span class="material-symbols-outlined">help_outline</span>
            </button>
            <div class="h-8 w-8 rounded-full overflow-hidden ml-2 border-2 border-primary/10">
                <img alt="User profile avatar"
                    data-alt="professional headshot of a mature executive man with a confident expression in a business suit"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBtmZdtB6bZgRwaF83cSRKDMseX1tsM4hv5HVcBWoQiE8QB5lTIBowIv0ccXObfPLYVXLfzagQWuFpPuY1XHbrd3-9eh2YjzcGBS3gqBngCMyHD9_JkDKXvIeXCr7YfsFrL13qsrjpbxHyOQ0J0hlexPVyiaSuLhhMjp0sUwdvJFKHo5LAsVgfI2_9OGVxE1ul1vakXbj7Lyfr0MvYuymyM4paafM-uNrkG12fBvxK_xcS-spJmw9OlPxBT2V__bAzhHxItKCR26Q" />
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <main class="pl-64 pt-16 min-h-screen">
        <div class="p-8 max-w-7xl mx-auto">
            <!-- Hero Section: Total Balance -->
            <section class="mb-12">
                <div class="bg-surface-container-lowest rounded-xl p-10 relative overflow-hidden shadow-sm">
                    <div
                        class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-primary-fixed/30 to-transparent">
                    </div>
                    <div class="relative z-10">
                        <p class="text-on-surface-variant label-sm uppercase tracking-widest font-bold mb-4">
                            Consolidated Net Worth</p>
                        <h2
                            class="text-display-lg text-[3.5rem] font-extrabold text-primary leading-none font-headline mb-2">
                            482,950,000 <span
                                class="text-2xl font-bold align-top mt-2 inline-block opacity-60">LAK</span>
                        </h2>
                        <div class="flex items-center gap-2 text-secondary font-semibold">
                            <span class="material-symbols-outlined text-sm">trending_up</span>
                            <span>+4.2% from last month</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Stats & Quick Actions Bento Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
                <!-- Monthly Income -->
                <div class="bg-surface-container rounded-xl p-8 flex flex-col justify-between">
                    <div>
                        <span
                            class="material-symbols-outlined text-primary-fixed-variant bg-white p-3 rounded-full mb-6">call_received</span>
                        <p class="text-on-surface-variant label-md font-bold uppercase tracking-wider">Monthly Income
                        </p>
                        <h3 class="text-3xl font-bold text-on-surface mt-2 font-headline">52,400,000 LAK</h3>
                    </div>
                    <div class="mt-4 h-1 w-full bg-white/50 rounded-full overflow-hidden">
                        <div class="bg-secondary h-full w-[78%]"></div>
                    </div>
                </div>
                <!-- Monthly Spending -->
                <div class="bg-surface-container rounded-xl p-8 flex flex-col justify-between">
                    <div>
                        <span
                            class="material-symbols-outlined text-error bg-white p-3 rounded-full mb-6">call_made</span>
                        <p class="text-on-surface-variant label-md font-bold uppercase tracking-wider">Monthly Spending
                        </p>
                        <h3 class="text-3xl font-bold text-on-surface mt-2 font-headline">18,210,000 LAK</h3>
                    </div>
                    <div class="mt-4 h-1 w-full bg-white/50 rounded-full overflow-hidden">
                        <div class="bg-error h-full w-[35%]"></div>
                    </div>
                </div>
                <!-- Quick Actions -->
                <div
                    class="bg-primary text-white rounded-xl p-8 flex flex-col justify-between shadow-xl shadow-primary/20">
                    <p class="text-primary-fixed label-md font-bold uppercase tracking-wider mb-6">Vault Actions</p>
                    <div class="grid grid-cols-2 gap-4">
                        <button
                            class="bg-white/10 hover:bg-white/20 p-4 rounded-xl flex flex-col items-center gap-2 transition-all">
                            <span class="material-symbols-outlined">payments</span>
                            <span class="text-xs font-bold uppercase">Transfer</span>
                        </button>
                        <button
                            class="bg-white/10 hover:bg-white/20 p-4 rounded-xl flex flex-col items-center gap-2 transition-all">
                            <span class="material-symbols-outlined">add_circle</span>
                            <span class="text-xs font-bold uppercase">Deposit</span>
                        </button>
                        <button
                            class="bg-white/10 hover:bg-white/20 p-4 rounded-xl flex flex-col items-center gap-2 transition-all">
                            <span class="material-symbols-outlined">account_balance_wallet</span>
                            <span class="text-xs font-bold uppercase">Withdraw</span>
                        </button>
                        <button
                            class="bg-white/10 hover:bg-white/20 p-4 rounded-xl flex flex-col items-center gap-2 transition-all">
                            <span class="material-symbols-outlined">qr_code_2</span>
                            <span class="text-xs font-bold uppercase">Scan Pay</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Transactions Ledger -->
            <section class="bg-surface-container-low rounded-xl p-8">
                <div class="flex items-center justify-between mb-8">
                    <h3 class="text-xl font-extrabold text-on-surface font-headline uppercase tracking-tight">Recent
                        Ledger Entries</h3>
                    <button class="text-primary font-bold text-sm flex items-center gap-1 hover:underline">
                        View Detailed History <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </button>
                </div>
                <div class="space-y-4">
                    <!-- Transaction Row 1 -->
                    <div
                        class="bg-surface-container-lowest p-5 rounded-xl flex items-center justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 bg-primary-fixed rounded-full flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">shopping_bag</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-on-surface">Luxury Lifestyle Boutique</h4>
                                <p class="text-xs text-on-surface-variant font-medium">14 OCT 2023 • Vientiane Center
                                </p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-error font-headline">- 4,250,000 LAK</p>
                            <span
                                class="text-[10px] uppercase font-bold text-on-surface-variant bg-surface-container-high px-2 py-0.5 rounded">Settled</span>
                        </div>
                    </div>
                    <!-- Transaction Row 2 -->
                    <div
                        class="bg-surface-container-lowest p-5 rounded-xl flex items-center justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 bg-primary-fixed rounded-full flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">work</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-on-surface">International Wire Deposit</h4>
                                <p class="text-xs text-on-surface-variant font-medium">12 OCT 2023 • Sovereign Corp</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-secondary font-headline">+ 15,000,000 LAK</p>
                            <span
                                class="text-[10px] uppercase font-bold text-on-secondary-container bg-secondary-container px-2 py-0.5 rounded">Completed</span>
                        </div>
                    </div>
                    <!-- Transaction Row 3 -->
                    <div
                        class="bg-surface-container-lowest p-5 rounded-xl flex items-center justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 bg-primary-fixed rounded-full flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">restaurant</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-on-surface">Mekong River Dining</h4>
                                <p class="text-xs text-on-surface-variant font-medium">10 OCT 2023 • Dining &amp; Social
                                </p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-error font-headline">- 1,200,000 LAK</p>
                            <span
                                class="text-[10px] uppercase font-bold text-on-surface-variant bg-surface-container-high px-2 py-0.5 rounded">Settled</span>
                        </div>
                    </div>
                    <!-- Transaction Row 4 -->
                    <div
                        class="bg-surface-container-lowest p-5 rounded-xl flex items-center justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 bg-primary-fixed rounded-full flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">swap_horiz</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-on-surface">Internal Vault Transfer</h4>
                                <p class="text-xs text-on-surface-variant font-medium">08 OCT 2023 • Saving to
                                    Investment</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-on-surface font-headline">5,000,000 LAK</p>
                            <span
                                class="text-[10px] uppercase font-bold text-tertiary-fixed-variant bg-tertiary-fixed px-2 py-0.5 rounded">Processing</span>
                        </div>
                    </div>
                    <!-- Transaction Row 5 -->
                    <div
                        class="bg-surface-container-lowest p-5 rounded-xl flex items-center justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 bg-primary-fixed rounded-full flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">electric_car</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-on-surface">EV Charging Station</h4>
                                <p class="text-xs text-on-surface-variant font-medium">05 OCT 2023 • Auto Services</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-error font-headline">- 450,000 LAK</p>
                            <span
                                class="text-[10px] uppercase font-bold text-on-surface-variant bg-surface-container-high px-2 py-0.5 rounded">Settled</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- Map/Background Accents (Editorial Layering) -->
    <div class="fixed bottom-0 right-0 p-8 opacity-20 pointer-events-none">
        <div class="w-64 h-64 bg-primary rounded-full blur-[100px]"></div>
    </div>
</body>

</html>