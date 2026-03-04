<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>User Banking Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                    "primary": "#17cf54",
                    "background-light": "#f6f8f6",
                    "background-dark": "#112116",
                },
                fontFamily: {
                    "display": ["Inter", "sans-serif"]
                },
                borderRadius: {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
            },
        },
    }
    </script>
    <style>
    body {
        font-family: 'Inter', sans-serif;
    }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
    <div
        class="relative flex h-auto min-h-screen w-full flex-col bg-background-light dark:bg-background-dark group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-800 px-10 py-3 bg-white dark:bg-slate-900 shadow-sm z-10 sticky top-0">
                <div class="flex items-center gap-8">
                    <div class="flex items-center gap-4 text-primary">
                        <div class="size-6">
                            <span class="material-symbols-outlined text-2xl">account_balance</span>
                        </div>
                        <h2 class="text-slate-900 dark:text-white text-xl font-bold leading-tight tracking-[-0.015em]">
                            Bankify</h2>
                    </div>
                </div>
                <div class="flex flex-1 justify-end gap-8">
                    <label class="flex flex-col min-w-40 !h-10 max-w-64">
                        <div class="flex w-full flex-1 items-stretch rounded-lg h-full bg-slate-100 dark:bg-slate-800">
                            <div class="text-slate-500 dark:text-slate-400 flex items-center justify-center pl-4">
                                <span class="material-symbols-outlined text-xl">search</span>
                            </div>
                            <input
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-slate-900 dark:text-white focus:outline-0 focus:ring-0 border-none bg-transparent focus:border-none h-full placeholder:text-slate-500 dark:placeholder:text-slate-400 px-4 pl-2 text-sm font-normal leading-normal"
                                placeholder="Search" value="" />
                        </div>
                    </label>
                    <div class="flex gap-2">
                        <button
                            class="flex cursor-pointer items-center justify-center overflow-hidden rounded-full size-10 bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                            <span class="material-symbols-outlined text-xl">notifications</span>
                        </button>
                        <button
                            class="flex cursor-pointer items-center justify-center overflow-hidden rounded-full size-10 bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                            <span class="material-symbols-outlined text-xl">account_circle</span>
                        </button>
                    </div>
                </div>
            </header>
            <div class="flex flex-1 flex-row h-full">
                <!-- Sidebar -->
                <aside
                    class="w-64 flex-shrink-0 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-4 flex flex-col justify-between hidden md:flex">
                    <div class="flex flex-col gap-6">
                        <div class="flex gap-3 items-center">
                            <img alt="User Profile Picture"
                                class="rounded-full size-12 object-cover border-2 border-primary/20"
                                data-alt="User avatar placeholder"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJjdtGOKXmbwvIOL5TGARJwZUKAK2TiFuKS19QnYJP4HOq2cFL72psQ1A4WlIbzdEBvg5kBbUTWpxtzi60-oTcQ2vMcejwA0HsuSmTMJVHCeI9F3KW52J6OY-D2WGRQ9ZwmtT3b4lcPZpFf6jdME_TTaQ5jXAAA4yl-Rhi1EXaRKYoNe1bKtEV5UnwbRaYqTCZxvjLLkxfIrmQlxhQtrBerXcJbyuxl1tlUOYipGTkNMjR2xYlYGvqs2oPnGYxpfhjSlrHNoJYROE" />
                            <div class="flex flex-col">
                                <h1 class="text-slate-900 dark:text-white text-base font-semibold leading-normal">John
                                    Doe</h1>
                                <p class="text-slate-500 dark:text-slate-400 text-xs font-medium leading-normal">
                                    john.doe@email.com</p>
                            </div>
                        </div>
                        <nav class="flex flex-col gap-2">
                            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary transition-colors"
                                href="#">
                                <span class="material-symbols-outlined text-[20px]">dashboard</span>
                                <p class="text-sm font-semibold leading-normal">Dashboard</p>
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors"
                                href="#">
                                <span class="material-symbols-outlined text-[20px]">account_balance_wallet</span>
                                <p class="text-sm font-medium leading-normal">Accounts</p>
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors"
                                href="#">
                                <span class="material-symbols-outlined text-[20px]">swap_horiz</span>
                                <p class="text-sm font-medium leading-normal">Transactions</p>
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors"
                                href="#">
                                <span class="material-symbols-outlined text-[20px]">send</span>
                                <p class="text-sm font-medium leading-normal">Transfers</p>
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors"
                                href="#">
                                <span class="material-symbols-outlined text-[20px]">settings</span>
                                <p class="text-sm font-medium leading-normal">Settings</p>
                            </a>
                        </nav>
                    </div>
                    <div class="mt-auto pt-6 border-t border-slate-200 dark:border-slate-800">
                        <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-red-50 dark:hover:bg-red-900/20 hover:text-red-600 dark:hover:text-red-400 transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-[20px]">logout</span>
                            <p class="text-sm font-medium leading-normal">Log out</p>
                        </a>
                    </div>
                </aside>
                <!-- Main Content -->
                <main class="flex-1 flex justify-center py-8 px-6 md:px-10 overflow-y-auto">
                    <div class="flex flex-col max-w-[1000px] w-full gap-8">
                        <!-- Header Section -->
                        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                            <div class="flex flex-col gap-2">
                                <h1
                                    class="text-slate-900 dark:text-white text-3xl font-bold leading-tight tracking-[-0.02em]">
                                    Dashboard</h1>
                                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Welcome back, here's
                                    your financial overview.</p>
                            </div>
                            <div class="flex gap-3">
                                <button
                                    class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-semibold text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors shadow-sm">
                                    <span class="material-symbols-outlined text-[18px]">download</span>
                                    Statement
                                </button>
                            </div>
                        </div>
                        <!-- Balance Card & Quick Actions -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <!-- Total Balance Card -->
                            <div
                                class="lg:col-span-1 bg-gradient-to-br from-primary to-green-600 rounded-xl p-6 text-white shadow-lg relative overflow-hidden flex flex-col justify-between min-h-[180px]">
                                <!-- Decorative element -->
                                <div class="absolute -right-6 -top-6 size-32 bg-white/10 rounded-full blur-2xl"></div>
                                <div class="absolute -left-6 -bottom-6 size-24 bg-black/10 rounded-full blur-xl"></div>
                                <div class="relative z-10 flex justify-between items-start">
                                    <p class="text-white/80 text-sm font-medium tracking-wide uppercase">Primary Account
                                    </p>
                                    <span class="material-symbols-outlined text-white/80">more_horiz</span>
                                </div>
                                <div class="relative z-10 mt-4">
                                    <p class="text-3xl font-bold tracking-tight">₭ 15,450,000</p>
                                    <p class="text-white/80 text-sm mt-1 font-mono tracking-wider">**** **** **** 4281
                                    </p>
                                </div>
                            </div>
                            <!-- Quick Actions -->
                            <div
                                class="lg:col-span-2 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-6 shadow-sm">
                                <h2 class="text-slate-900 dark:text-white text-lg font-bold mb-4">Quick Actions</h2>
                                <div class="grid grid-cols-3 gap-4 h-[calc(100%-2rem)]">
                                    <button
                                        class="flex flex-col items-center justify-center gap-3 p-4 rounded-lg bg-slate-50 dark:bg-slate-800 hover:bg-primary/10 dark:hover:bg-primary/20 hover:text-primary transition-all group border border-transparent hover:border-primary/20">
                                        <div
                                            class="size-12 rounded-full bg-white dark:bg-slate-700 shadow-sm flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors text-slate-600 dark:text-slate-300">
                                            <span class="material-symbols-outlined">send_money</span>
                                        </div>
                                        <span
                                            class="text-sm font-semibold text-slate-700 dark:text-slate-300 group-hover:text-primary">Transfer</span>
                                    </button>
                                    <button
                                        class="flex flex-col items-center justify-center gap-3 p-4 rounded-lg bg-slate-50 dark:bg-slate-800 hover:bg-primary/10 dark:hover:bg-primary/20 hover:text-primary transition-all group border border-transparent hover:border-primary/20">
                                        <div
                                            class="size-12 rounded-full bg-white dark:bg-slate-700 shadow-sm flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors text-slate-600 dark:text-slate-300">
                                            <span class="material-symbols-outlined">add_circle</span>
                                        </div>
                                        <span
                                            class="text-sm font-semibold text-slate-700 dark:text-slate-300 group-hover:text-primary">Deposit</span>
                                    </button>
                                    <button
                                        class="flex flex-col items-center justify-center gap-3 p-4 rounded-lg bg-slate-50 dark:bg-slate-800 hover:bg-primary/10 dark:hover:bg-primary/20 hover:text-primary transition-all group border border-transparent hover:border-primary/20">
                                        <div
                                            class="size-12 rounded-full bg-white dark:bg-slate-700 shadow-sm flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors text-slate-600 dark:text-slate-300">
                                            <span class="material-symbols-outlined">payments</span>
                                        </div>
                                        <span
                                            class="text-sm font-semibold text-slate-700 dark:text-slate-300 group-hover:text-primary">Withdraw</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Recent Activity -->
                        <div
                            class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl shadow-sm overflow-hidden">
                            <div
                                class="flex items-center justify-between p-6 border-b border-slate-200 dark:border-slate-800">
                                <h2 class="text-slate-900 dark:text-white text-lg font-bold">Recent Activity</h2>
                                <a class="text-primary text-sm font-semibold hover:underline" href="#">View All</a>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-left border-collapse">
                                    <thead>
                                        <tr class="bg-slate-50 dark:bg-slate-800/50">
                                            <th
                                                class="py-3 px-6 text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                                Transaction</th>
                                            <th
                                                class="py-3 px-6 text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                                Date</th>
                                            <th
                                                class="py-3 px-6 text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">
                                                Status</th>
                                            <th
                                                class="py-3 px-6 text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-right">
                                                Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                            <td class="py-4 px-6">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="size-10 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center">
                                                        <span
                                                            class="material-symbols-outlined text-sm">shopping_cart</span>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm font-semibold text-slate-900 dark:text-white">
                                                            Grocery Store</p>
                                                        <p class="text-xs text-slate-500 dark:text-slate-400">Card
                                                            Payment</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6 text-sm text-slate-600 dark:text-slate-400">Today,
                                                10:24 AM</td>
                                            <td class="py-4 px-6">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Completed</span>
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-semibold text-slate-900 dark:text-white text-right">
                                                - ₭ 450,000</td>
                                        </tr>
                                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                            <td class="py-4 px-6">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="size-10 rounded-full bg-primary/20 text-primary flex items-center justify-center">
                                                        <span
                                                            class="material-symbols-outlined text-sm">arrow_downward</span>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm font-semibold text-slate-900 dark:text-white">
                                                            Salary Deposit</p>
                                                        <p class="text-xs text-slate-500 dark:text-slate-400">Tech Corp
                                                            Inc.</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6 text-sm text-slate-600 dark:text-slate-400">Yesterday,
                                                09:00 AM</td>
                                            <td class="py-4 px-6">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Completed</span>
                                            </td>
                                            <td class="py-4 px-6 text-sm font-semibold text-primary text-right">+ ₭
                                                5,000,000</td>
                                        </tr>
                                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                            <td class="py-4 px-6">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="size-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center">
                                                        <span class="material-symbols-outlined text-sm">sync_alt</span>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm font-semibold text-slate-900 dark:text-white">
                                                            Transfer to Savings</p>
                                                        <p class="text-xs text-slate-500 dark:text-slate-400">Internal
                                                            Transfer</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6 text-sm text-slate-600 dark:text-slate-400">Oct 12,
                                                02:15 PM</td>
                                            <td class="py-4 px-6">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">Completed</span>
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-semibold text-slate-900 dark:text-white text-right">
                                                - ₭ 1,000,000</td>
                                        </tr>
                                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                            <td class="py-4 px-6">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="size-10 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center">
                                                        <span class="material-symbols-outlined text-sm">bolt</span>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm font-semibold text-slate-900 dark:text-white">
                                                            Electric Bill</p>
                                                        <p class="text-xs text-slate-500 dark:text-slate-400">Utility
                                                            Payment</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6 text-sm text-slate-600 dark:text-slate-400">Oct 10,
                                                08:30 AM</td>
                                            <td class="py-4 px-6">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400">Pending</span>
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-semibold text-slate-900 dark:text-white text-right">
                                                - ₭ 250,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>