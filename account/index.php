<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Sovereign Financial | Accounts Management</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap"
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

    .tabular-nums {
        font-variant-numeric: tabular-nums;
    }

    body {
        font-family: 'Inter', sans-serif;
    }

    h1,
    h2,
    h3 {
        font-family: 'Manrope', sans-serif;
    }
    </style>
</head>

<body class="bg-background text-on-surface selection:bg-primary-fixed selection:text-on-primary-fixed">
    <!-- TopNavBar -->
    <header
        class="fixed top-0 left-0 w-full h-16 flex items-center justify-between px-8 z-50 bg-white/70 backdrop-blur-xl shadow-sm">
        <div class="flex items-center gap-4">
            <span class="text-xl font-extrabold tracking-tighter text-blue-900">Sovereign Financial</span>
        </div>
        <div class="flex items-center gap-6">
            <div class="relative hidden md:flex items-center">
                <span class="material-symbols-outlined absolute left-3 text-slate-400">search</span>
                <input
                    class="pl-10 pr-4 py-2 bg-slate-50 border-none rounded-xl text-sm focus:ring-2 focus:ring-primary-fixed-dim transition-all w-64"
                    placeholder="Global Ledger Search..." type="text" />
            </div>
            <div class="flex items-center gap-3">
                <button class="p-2 rounded-full hover:bg-blue-50/50 transition-colors text-slate-500">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                <button class="p-2 rounded-full hover:bg-blue-50/50 transition-colors text-slate-500">
                    <span class="material-symbols-outlined">help_outline</span>
                </button>
                <div class="h-8 w-8 rounded-full overflow-hidden bg-primary-fixed ml-2">
                    <img alt="User profile avatar"
                        data-alt="professional portrait of a banking executive in a navy suit with soft studio lighting and neutral background"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQnKUiVtB6Wlh5Orr_rzLzZP2fM80m_aExzS93yF7G4xF5unljxNhtzmpy2SvZBfOZe3W8X4o_ztmb2zMCDA5rOucYOvjfRg9-7DTzSoJ5S9Ie3q0J8X1X34QuH4KeyqmfasIZLhFUo_UvYlnBJIui6kHSvnBfflb1rgMEww5wzHJPehX-v2TiH3uSA8alJnIyYRfTGc2vQhhLHHIFqpPtchA3K3TomXIWJB34uoCECRlgDflCqvJ7dzV1T-16gVNuSKNE9oN1nQ" />
                </div>
            </div>
        </div>
    </header>
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-full w-64 pt-20 pb-8 flex flex-col gap-2 z-40 bg-slate-50 tonal-shift">
        <div class="px-6 mb-8">
            <h2 class="text-lg font-black text-blue-950">Vaulted Editorial</h2>
            <p class="font-manrope text-[10px] tracking-widest uppercase font-bold text-slate-400">Private Banking</p>
        </div>
        <nav class="flex-1 px-4 space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-blue-700 hover:translate-x-1 duration-200 transition-transform font-manrope text-sm tracking-wide uppercase font-bold"
                href="../index.php">
                <span class="material-symbols-outlined">dashboard</span>
                Dashboard
            </a>
            <a class="flex items-center gap-3 px-4 py-3 bg-white text-blue-900 rounded-xl shadow-sm font-manrope text-sm tracking-wide uppercase font-bold"
                href="index.php">
                <span class="material-symbols-outlined">account_balance</span>
                Accounts
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-blue-700 hover:translate-x-1 duration-200 transition-transform font-manrope text-sm tracking-wide uppercase font-bold"
                href="#">
                <span class="material-symbols-outlined">receipt_long</span>
                Transactions
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-blue-700 hover:translate-x-1 duration-200 transition-transform font-manrope text-sm tracking-wide uppercase font-bold"
                href="#">
                <span class="material-symbols-outlined">group</span>
                Users
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-blue-700 hover:translate-x-1 duration-200 transition-transform font-manrope text-sm tracking-wide uppercase font-bold"
                href="#">
                <span class="material-symbols-outlined">settings</span>
                Settings
            </a>
        </nav>
        <div class="px-4 mb-6">
            <button
                class="w-full flex items-center justify-center gap-2 py-3 bg-primary text-white rounded-xl shadow-lg hover:bg-primary-container transition-all text-sm font-bold active:scale-[0.98]">
                <span class="material-symbols-outlined text-[18px]">add</span>
                New Transaction
            </button>
        </div>
        <div class="px-4 border-t border-slate-200/50 pt-4 space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-blue-700 transition-colors font-manrope text-[11px] tracking-wide uppercase font-bold"
                href="#">
                <span class="material-symbols-outlined">contact_support</span>
                Support
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-error hover:bg-error-container/20 rounded-lg transition-colors font-manrope text-[11px] tracking-wide uppercase font-bold"
                href="#">
                <span class="material-symbols-outlined">logout</span>
                Logout
            </a>
        </div>
    </aside>
    <!-- Main Content -->
    <main class="ml-64 pt-24 px-10 pb-12">
        <!-- Header & Action Row -->
        <div class="flex justify-between items-end mb-10">
            <div>
                <nav
                    class="flex items-center gap-2 text-[10px] uppercase tracking-widest font-bold text-on-surface-variant mb-2">
                    <span>Portfolio</span>
                    <span class="material-symbols-outlined text-[12px]">chevron_right</span>
                    <span class="text-primary">Entity Accounts</span>
                </nav>
                <h1 class="text-[3.5rem] font-headline font-extrabold text-primary leading-none tracking-tighter">
                    Accounts Management</h1>
            </div>
            <button
                class="bg-primary text-white px-8 py-4 rounded-full font-headline font-bold text-sm tracking-tight flex items-center gap-2 shadow-2xl hover:bg-primary-container transition-all active:scale-95">
                <span class="material-symbols-outlined">add_circle</span>
                Add New Account
            </button>
        </div>
        <!-- High Density Data Table Section -->
        <section class="bg-surface-container rounded-[2rem] p-1 overflow-hidden">
            <div class="bg-surface-container-lowest rounded-[1.8rem] shadow-sm">
                <!-- Table Filters -->
                <div class="px-8 py-6 flex items-center justify-between border-b border-surface-container-low">
                    <div class="flex items-center gap-4">
                        <div class="flex items-center bg-surface-container-low px-4 py-2 rounded-xl">
                            <span
                                class="text-xs font-bold uppercase tracking-wider text-on-surface-variant mr-3">Status:</span>
                            <div class="flex gap-1">
                                <button
                                    class="px-3 py-1 bg-white text-[10px] font-black rounded-lg shadow-sm text-primary">ALL</button>
                                <button
                                    class="px-3 py-1 text-[10px] font-bold text-slate-400 hover:text-primary transition-colors">ACTIVE</button>
                                <button
                                    class="px-3 py-1 text-[10px] font-bold text-slate-400 hover:text-primary transition-colors">INACTIVE</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-[11px] font-bold text-on-surface-variant uppercase tracking-widest">Sort
                            by:</span>
                        <select class="bg-transparent border-none text-xs font-bold text-primary focus:ring-0">
                            <option>Created Date</option>
                            <option>Balance: High to Low</option>
                            <option>Account Name</option>
                        </select>
                    </div>
                </div>
                <!-- The Ledger Table -->
                <div class="w-full overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low">
                                <th
                                    class="px-8 py-5 text-[11px] font-black uppercase tracking-[0.15em] text-on-surface-variant">
                                    Account Detail</th>
                                <th
                                    class="px-8 py-5 text-[11px] font-black uppercase tracking-[0.15em] text-on-surface-variant">
                                    Account Number</th>
                                <th
                                    class="px-8 py-5 text-[11px] font-black uppercase tracking-[0.15em] text-on-surface-variant text-right">
                                    Balance</th>
                                <th
                                    class="px-8 py-5 text-[11px] font-black uppercase tracking-[0.15em] text-on-surface-variant text-center">
                                    Status</th>
                                <th
                                    class="px-8 py-5 text-[11px] font-black uppercase tracking-[0.15em] text-on-surface-variant">
                                    Created At</th>
                                <th
                                    class="px-8 py-5 text-[11px] font-black uppercase tracking-[0.15em] text-on-surface-variant text-right">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-surface-container-low">
                            <!-- Row 1 -->
                            <tr class="hover:bg-blue-50/30 transition-colors group">
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="h-10 w-10 rounded-full bg-primary-fixed flex items-center justify-center text-primary">
                                            <span class="material-symbols-outlined">account_balance_wallet</span>
                                        </div>
                                        <div>
                                            <p class="font-bold text-sm text-primary">Corporate Treasury</p>
                                            <p class="text-[10px] text-on-surface-variant uppercase font-medium">
                                                Internal Reserve</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <span
                                        class="tabular-nums font-mono text-xs text-on-surface-variant tracking-wider">****
                                        8842</span>
                                </td>
                                <td class="px-8 py-6 text-right">
                                    <span
                                        class="tabular-nums font-headline font-extrabold text-lg text-primary">$1,245,890.00</span>
                                </td>
                                <td class="px-8 py-6 text-center">
                                    <span
                                        class="inline-flex px-3 py-1 rounded-full bg-secondary-fixed-dim/20 text-on-secondary-container text-[10px] font-black uppercase tracking-widest">Active</span>
                                </td>
                                <td class="px-8 py-6">
                                    <span class="text-xs font-medium text-on-surface-variant">Oct 24, 2022</span>
                                </td>
                                <td class="px-8 py-6 text-right">
                                    <button
                                        class="material-symbols-outlined text-slate-300 hover:text-primary transition-colors">more_vert</button>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr class="hover:bg-blue-50/30 transition-colors group">
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="h-10 w-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant">
                                            <span class="material-symbols-outlined">savings</span>
                                        </div>
                                        <div>
                                            <p class="font-bold text-sm text-primary">High Yield Reserve</p>
                                            <p class="text-[10px] text-on-surface-variant uppercase font-medium">Escrow
                                                Holding</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <span
                                        class="tabular-nums font-mono text-xs text-on-surface-variant tracking-wider">****
                                        1109</span>
                                </td>
                                <td class="px-8 py-6 text-right">
                                    <span
                                        class="tabular-nums font-headline font-extrabold text-lg text-primary">$450,200.50</span>
                                </td>
                                <td class="px-8 py-6 text-center">
                                    <span
                                        class="inline-flex px-3 py-1 rounded-full bg-secondary-fixed-dim/20 text-on-secondary-container text-[10px] font-black uppercase tracking-widest">Active</span>
                                </td>
                                <td class="px-8 py-6">
                                    <span class="text-xs font-medium text-on-surface-variant">Jan 12, 2023</span>
                                </td>
                                <td class="px-8 py-6 text-right">
                                    <button
                                        class="material-symbols-outlined text-slate-300 hover:text-primary transition-colors">more_vert</button>
                                </td>
                            </tr>
                            <!-- Row 3 -->
                            <tr class="hover:bg-blue-50/30 transition-colors group">
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="h-10 w-10 rounded-full bg-error-container/40 flex items-center justify-center text-error">
                                            <span class="material-symbols-outlined">domain</span>
                                        </div>
                                        <div>
                                            <p class="font-bold text-sm text-primary">Global Operations</p>
                                            <p class="text-[10px] text-on-surface-variant uppercase font-medium">Pending
                                                Liquidation</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <span
                                        class="tabular-nums font-mono text-xs text-on-surface-variant tracking-wider">****
                                        3341</span>
                                </td>
                                <td class="px-8 py-6 text-right">
                                    <span
                                        class="tabular-nums font-headline font-extrabold text-lg text-slate-400">$0.00</span>
                                </td>
                                <td class="px-8 py-6 text-center">
                                    <span
                                        class="inline-flex px-3 py-1 rounded-full bg-slate-100 text-slate-500 text-[10px] font-black uppercase tracking-widest">Inactive</span>
                                </td>
                                <td class="px-8 py-6">
                                    <span class="text-xs font-medium text-on-surface-variant">May 05, 2021</span>
                                </td>
                                <td class="px-8 py-6 text-right">
                                    <button
                                        class="material-symbols-outlined text-slate-300 hover:text-primary transition-colors">more_vert</button>
                                </td>
                            </tr>
                            <!-- Row 4 -->
                            <tr class="hover:bg-blue-50/30 transition-colors group">
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="h-10 w-10 rounded-full bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed-variant">
                                            <span class="material-symbols-outlined">payments</span>
                                        </div>
                                        <div>
                                            <p class="font-bold text-sm text-primary">Executive Payroll</p>
                                            <p class="text-[10px] text-on-surface-variant uppercase font-medium">Salary
                                                Disburser</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <span
                                        class="tabular-nums font-mono text-xs text-on-surface-variant tracking-wider">****
                                        9002</span>
                                </td>
                                <td class="px-8 py-6 text-right">
                                    <span
                                        class="tabular-nums font-headline font-extrabold text-lg text-primary">$89,330.00</span>
                                </td>
                                <td class="px-8 py-6 text-center">
                                    <span
                                        class="inline-flex px-3 py-1 rounded-full bg-secondary-fixed-dim/20 text-on-secondary-container text-[10px] font-black uppercase tracking-widest">Active</span>
                                </td>
                                <td class="px-8 py-6">
                                    <span class="text-xs font-medium text-on-surface-variant">Nov 30, 2023</span>
                                </td>
                                <td class="px-8 py-6 text-right">
                                    <button
                                        class="material-symbols-outlined text-slate-300 hover:text-primary transition-colors">more_vert</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="px-8 py-6 flex items-center justify-between bg-surface-container-low rounded-b-[1.8rem]">
                    <p class="text-[11px] font-bold text-on-surface-variant uppercase tracking-widest">Showing 1 to 4 of
                        28 Accounts</p>
                    <div class="flex gap-2">
                        <button class="p-2 rounded-lg bg-white shadow-sm text-primary disabled:opacity-50" disabled="">
                            <span class="material-symbols-outlined text-sm">chevron_left</span>
                        </button>
                        <button
                            class="px-4 py-2 rounded-lg bg-primary text-white text-[11px] font-black uppercase tracking-widest">1</button>
                        <button
                            class="px-4 py-2 rounded-lg bg-white text-primary text-[11px] font-black uppercase tracking-widest hover:bg-slate-50">2</button>
                        <button
                            class="px-4 py-2 rounded-lg bg-white text-primary text-[11px] font-black uppercase tracking-widest hover:bg-slate-50">3</button>
                        <button class="p-2 rounded-lg bg-white shadow-sm text-primary">
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Insights Bento Grid -->
        <div class="mt-12 grid grid-cols-12 gap-6">
            <div
                class="col-span-8 bg-surface-container-low rounded-[2rem] p-8 flex flex-col justify-between min-h-[300px]">
                <div>
                    <h3 class="font-headline font-extrabold text-2xl text-primary mb-2">Liquidity Analysis</h3>
                    <p class="text-on-surface-variant text-sm max-w-md">Your combined asset liquidity has increased by
                        14% this quarter through strategic rebalancing of corporate holdings.</p>
                </div>
                <div class="h-32 w-full mt-4 flex items-end gap-2">
                    <div class="flex-1 bg-primary/10 rounded-t-xl h-[40%]"></div>
                    <div class="flex-1 bg-primary/20 rounded-t-xl h-[60%]"></div>
                    <div class="flex-1 bg-primary/10 rounded-t-xl h-[45%]"></div>
                    <div class="flex-1 bg-primary/30 rounded-t-xl h-[80%]"></div>
                    <div class="flex-1 bg-primary/40 rounded-t-xl h-[95%]"></div>
                    <div class="flex-1 bg-primary rounded-t-xl h-[100%]"></div>
                </div>
            </div>
            <div class="col-span-4 relative group rounded-[2rem] overflow-hidden min-h-[300px] shadow-2xl">
                <img class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                    data-alt="minimalist architecture with shadows and sharp lines casting across a white concrete surface, luxurious and clean banking aesthetic"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAZn4AExe85FP6zPQw7Ut_VPU95g5ockLLPGWV0yNszNw9T6Ub2MhqBimAbXqKm86YPWfoCavvYL42RFPEszMCnYCRTnuYvTacVDsWqaarXyl8Mu1QwzT6imFH5o7kcUk-3TO0tp0Y-rOjbrMIAWBY43xfhpOFSzOFoL4T4Lz_Iuuvc-yge-YwuwtdBmo9FqGwrGDZYc0Dx1kc06zkeZ4iyjidKOUxShYAWiUmxV0aBvDy2kgy6tdBUx2dmdjUBJ0rFIx-pPrqCQ" />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-primary/90 to-transparent p-8 flex flex-col justify-end">
                    <span class="text-secondary-fixed text-xs font-black uppercase tracking-[0.2em] mb-2">Private
                        Advisor</span>
                    <h3 class="font-headline font-bold text-white text-xl">Speak with your vault officer</h3>
                    <p class="text-blue-100/70 text-xs mt-2">Personalized guidance for high-net-worth portfolio
                        management available 24/7.</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>