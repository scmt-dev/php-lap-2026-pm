<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin User Management</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet" />
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
                    "display": ["Inter"]
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
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-slate-200 dark:border-b-slate-800 px-10 py-3 bg-white dark:bg-slate-900">
                <div class="flex items-center gap-8">
                    <div class="flex items-center gap-4 text-primary">
                        <span class="material-symbols-outlined text-3xl">account_balance</span>
                        <h2 class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">
                            Admin Portal</h2>
                    </div>
                    <label class="flex flex-col min-w-40 !h-10 max-w-64">
                        <div
                            class="flex w-full flex-1 items-stretch rounded-lg h-full border border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 overflow-hidden">
                            <div class="text-slate-500 flex border-none items-center justify-center pl-4">
                                <span class="material-symbols-outlined">search</span>
                            </div>
                            <input
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden text-slate-900 dark:text-white focus:outline-0 focus:ring-0 border-none bg-transparent focus:border-none h-full placeholder:text-slate-500 px-4 pl-2 text-sm font-normal leading-normal"
                                placeholder="Search" value="" />
                        </div>
                    </label>
                </div>
                <div class="flex flex-1 justify-end gap-8">
                    <div class="flex items-center gap-9">
                        <a class="text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary text-sm font-medium leading-normal transition-colors"
                            href="#">Dashboard</a>
                        <a class="text-primary text-sm font-medium leading-normal border-b-2 border-primary pb-1"
                            href="#">Users</a>
                        <a class="text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary text-sm font-medium leading-normal transition-colors"
                            href="#">Transactions</a>
                        <a class="text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary text-sm font-medium leading-normal transition-colors"
                            href="#">Settings</a>
                    </div>
                    <div class="flex gap-2">
                        <button
                            class="flex items-center justify-center rounded-lg h-10 w-10 bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                            <span class="material-symbols-outlined">notifications</span>
                        </button>
                        <button
                            class="flex items-center justify-center rounded-lg h-10 w-10 bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                            <span class="material-symbols-outlined">account_circle</span>
                        </button>
                    </div>
                </div>
            </header>
            <div class="flex flex-1 justify-center py-8 px-10">
                <div
                    class="layout-content-container flex flex-col w-full max-w-6xl flex-1 bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800">
                    <div
                        class="flex flex-wrap items-center justify-between gap-4 p-6 border-b border-slate-200 dark:border-slate-800">
                        <div>
                            <h1 class="text-slate-900 dark:text-white text-2xl font-bold leading-tight">User Management
                            </h1>
                            <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Manage platform users, roles, and
                                access.</p>
                        </div>
                        <button
                            class="flex items-center justify-center rounded-lg h-10 px-4 bg-primary text-white hover:bg-primary/90 transition-colors text-sm font-medium leading-normal shadow-sm gap-2">
                            <span class="material-symbols-outlined text-sm">add</span>
                            <span>Add New User</span>
                        </button>
                    </div>
                    <div
                        class="flex flex-col sm:flex-row gap-4 p-6 items-center justify-between bg-slate-50/50 dark:bg-slate-800/30">
                        <label class="flex flex-col w-full sm:max-w-md h-10">
                            <div
                                class="flex w-full flex-1 items-stretch rounded-lg h-full border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 overflow-hidden shadow-sm">
                                <div class="text-slate-400 flex border-none items-center justify-center pl-3">
                                    <span class="material-symbols-outlined text-xl">search</span>
                                </div>
                                <input
                                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden text-slate-900 dark:text-white focus:outline-0 focus:ring-0 border-none bg-transparent h-full placeholder:text-slate-400 px-3 text-sm"
                                    placeholder="Search by name, email, or ID..." value="" />
                            </div>
                        </label>
                        <div class="flex gap-2 w-full sm:w-auto overflow-x-auto pb-2 sm:pb-0 hide-scrollbar">
                            <button
                                class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-lg border border-primary bg-primary/10 text-primary px-4 shadow-sm transition-colors">
                                <span class="text-sm font-medium">All Roles</span>
                            </button>
                            <button
                                class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700 px-4 shadow-sm transition-colors">
                                <span class="text-sm font-medium">User</span>
                            </button>
                            <button
                                class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700 px-4 shadow-sm transition-colors">
                                <span class="text-sm font-medium">Staff</span>
                            </button>
                            <button
                                class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700 px-4 shadow-sm transition-colors">
                                <span class="text-sm font-medium">Admin</span>
                            </button>
                            <button
                                class="flex h-10 shrink-0 items-center justify-center rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-700 px-3 shadow-sm transition-colors ml-2">
                                <span class="material-symbols-outlined text-xl">filter_list</span>
                            </button>
                        </div>
                    </div>
                    <div class="px-6 pb-6 overflow-x-auto">
                        <div
                            class="overflow-hidden rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 shadow-sm">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr
                                        class="bg-slate-50 dark:bg-slate-800/50 border-b border-slate-200 dark:border-slate-700">
                                        <th
                                            class="px-6 py-4 text-slate-600 dark:text-slate-300 text-xs font-semibold uppercase tracking-wider">
                                            User</th>
                                        <th
                                            class="px-6 py-4 text-slate-600 dark:text-slate-300 text-xs font-semibold uppercase tracking-wider">
                                            Role</th>
                                        <th
                                            class="px-6 py-4 text-slate-600 dark:text-slate-300 text-xs font-semibold uppercase tracking-wider">
                                            Status</th>
                                        <th
                                            class="px-6 py-4 text-slate-600 dark:text-slate-300 text-xs font-semibold uppercase tracking-wider">
                                            Last Seen</th>
                                        <th
                                            class="px-6 py-4 text-slate-600 dark:text-slate-300 text-xs font-semibold uppercase tracking-wider text-right">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="h-10 w-10 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center text-slate-600 dark:text-slate-300 font-bold">
                                                    JD
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-slate-900 dark:text-white">John
                                                        Doe</div>
                                                    <div class="text-sm text-slate-500 dark:text-slate-400">
                                                        john@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-slate-200 border border-slate-200 dark:border-slate-700">
                                                User
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-1.5">
                                                <div class="w-2 h-2 rounded-full bg-primary"></div>
                                                <span class="text-sm text-slate-600 dark:text-slate-300">Active</span>
                                            </div>
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-slate-500 dark:text-slate-400">
                                            10 mins ago
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div
                                                class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                <button
                                                    class="text-slate-600 hover:text-primary dark:text-slate-400 dark:hover:text-primary px-3 py-1.5 rounded-md hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors text-xs font-semibold border border-transparent hover:border-slate-200 dark:hover:border-slate-700">Edit</button>
                                                <button
                                                    class="text-primary hover:text-primary/80 px-3 py-1.5 rounded-md hover:bg-primary/10 transition-colors text-xs font-semibold">View
                                                    Accounts</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="h-10 w-10 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold">
                                                    JS
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-slate-900 dark:text-white">Jane
                                                        Smith</div>
                                                    <div class="text-sm text-slate-500 dark:text-slate-400">
                                                        jane@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary/10 text-primary border border-primary/20">
                                                Admin
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-1.5">
                                                <div class="w-2 h-2 rounded-full bg-primary"></div>
                                                <span class="text-sm text-slate-600 dark:text-slate-300">Active</span>
                                            </div>
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-slate-500 dark:text-slate-400">
                                            2 hours ago
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div
                                                class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                <button
                                                    class="text-slate-600 hover:text-primary dark:text-slate-400 dark:hover:text-primary px-3 py-1.5 rounded-md hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors text-xs font-semibold border border-transparent hover:border-slate-200 dark:hover:border-slate-700">Edit</button>
                                                <button
                                                    class="text-primary hover:text-primary/80 px-3 py-1.5 rounded-md hover:bg-primary/10 transition-colors text-xs font-semibold">View
                                                    Accounts</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="h-10 w-10 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400 font-bold">
                                                    AJ
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-slate-900 dark:text-white">
                                                        Alice Johnson</div>
                                                    <div class="text-sm text-slate-500 dark:text-slate-400">
                                                        alice@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-400 border border-blue-200 dark:border-blue-800/50">
                                                Staff
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-1.5">
                                                <div class="w-2 h-2 rounded-full bg-slate-400"></div>
                                                <span class="text-sm text-slate-600 dark:text-slate-300">Offline</span>
                                            </div>
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-slate-500 dark:text-slate-400">
                                            1 day ago
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div
                                                class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                <button
                                                    class="text-slate-600 hover:text-primary dark:text-slate-400 dark:hover:text-primary px-3 py-1.5 rounded-md hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors text-xs font-semibold border border-transparent hover:border-slate-200 dark:hover:border-slate-700">Edit</button>
                                                <button
                                                    class="text-primary hover:text-primary/80 px-3 py-1.5 rounded-md hover:bg-primary/10 transition-colors text-xs font-semibold">View
                                                    Accounts</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr
                                        class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors group opacity-75">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="h-10 w-10 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center text-slate-500 dark:text-slate-400 font-bold">
                                                    BB
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-slate-900 dark:text-white">Bob
                                                        Brown</div>
                                                    <div class="text-sm text-slate-500 dark:text-slate-400">
                                                        bob@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-slate-200 border border-slate-200 dark:border-slate-700">
                                                User
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center gap-1.5">
                                                <div class="w-2 h-2 rounded-full bg-red-500"></div>
                                                <span
                                                    class="text-sm text-slate-600 dark:text-slate-300">Suspended</span>
                                            </div>
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-slate-500 dark:text-slate-400">
                                            3 days ago
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div
                                                class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                <button
                                                    class="text-slate-600 hover:text-primary dark:text-slate-400 dark:hover:text-primary px-3 py-1.5 rounded-md hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors text-xs font-semibold border border-transparent hover:border-slate-200 dark:hover:border-slate-700">Edit</button>
                                                <button
                                                    class="text-primary hover:text-primary/80 px-3 py-1.5 rounded-md hover:bg-primary/10 transition-colors text-xs font-semibold">View
                                                    Accounts</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div
                                class="px-6 py-4 border-t border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 flex items-center justify-between">
                                <span class="text-sm text-slate-500 dark:text-slate-400">Showing 1 to 4 of 124
                                    results</span>
                                <div class="flex gap-1">
                                    <button
                                        class="px-3 py-1 border border-slate-200 dark:border-slate-700 rounded text-sm text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800 disabled:opacity-50">Previous</button>
                                    <button
                                        class="px-3 py-1 border border-slate-200 dark:border-slate-700 rounded text-sm bg-primary/10 text-primary font-medium">1</button>
                                    <button
                                        class="px-3 py-1 border border-slate-200 dark:border-slate-700 rounded text-sm text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800">2</button>
                                    <button
                                        class="px-3 py-1 border border-slate-200 dark:border-slate-700 rounded text-sm text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800">3</button>
                                    <span class="px-2 py-1 text-slate-500">...</span>
                                    <button
                                        class="px-3 py-1 border border-slate-200 dark:border-slate-700 rounded text-sm text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800">10</button>
                                    <button
                                        class="px-3 py-1 border border-slate-200 dark:border-slate-700 rounded text-sm text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>