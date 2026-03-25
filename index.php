<?php include_once 'includes/header.php' ?>

<body class="bg-background text-on-surface antialiased">
    <!-- SideNavBar -->
   <?php include_once 'includes/nav.php' ?>
    <!-- TopNavBar -->
   <?php include_once 'includes/header-menu.php' ?>
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