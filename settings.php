<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Bank Settings</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <script>
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    primary: "#34A853",
                    "background-light": "#F3F4F6",
                    "background-dark": "#111827",
                    "surface-light": "#FFFFFF",
                    "surface-dark": "#1F2937",
                    "border-light": "#E5E7EB",
                    "border-dark": "#374151",
                    "text-light": "#111827",
                    "text-dark": "#F9FAFB",
                    "text-muted-light": "#6B7280",
                    "text-muted-dark": "#9CA3AF"
                },
                fontFamily: {
                    display: ["Inter", "sans-serif"],
                },
                borderRadius: {
                    DEFAULT: "0.5rem",
                },
            },
        },
    };
    </script>
    <style>
    body {
        font-family: 'Inter', sans-serif;
    }

    ::-webkit-scrollbar {
        width: 6px;
    }

    ::-webkit-scrollbar-track {
        background: transparent;
    }

    ::-webkit-scrollbar-thumb {
        background-color: rgba(156, 163, 175, 0.5);
        border-radius: 20px;
    }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark min-h-screen flex antialiased">
    <aside
        class="w-64 border-r border-border-light dark:border-border-dark flex flex-col bg-background-light dark:bg-background-dark">
        <div class="h-16 flex items-center px-6">
            <div class="flex items-center gap-2">
                <div
                    class="w-8 h-8 bg-text-light dark:bg-text-dark text-surface-light dark:text-surface-dark rounded flex items-center justify-center font-bold text-xl">
                    K</div>
                <span class="font-bold text-xl">Kiska</span>
            </div>
        </div>
        <div class="px-4 py-6">
            <div
                class="text-xs font-semibold text-text-muted-light dark:text-text-muted-dark uppercase tracking-wider mb-4 px-2">
                Customize</div>
            <nav class="space-y-1">
                <a class="flex items-center gap-3 px-3 py-2 text-text-light dark:text-text-dark hover:bg-surface-light dark:hover:bg-surface-dark rounded-md transition-colors"
                    href="#">
                    <span
                        class="material-icons text-text-muted-light dark:text-text-muted-dark text-xl">person_outline</span>
                    <span class="font-medium">Profile</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2 bg-surface-light dark:bg-surface-dark text-blue-600 dark:text-blue-400 rounded-md shadow-sm"
                    href="#">
                    <span class="material-icons text-blue-600 dark:text-blue-400 text-xl">settings</span>
                    <span class="font-medium">Settings</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2 text-text-light dark:text-text-dark hover:bg-surface-light dark:hover:bg-surface-dark rounded-md transition-colors"
                    href="#">
                    <span
                        class="material-icons text-text-muted-light dark:text-text-muted-dark text-xl">credit_card</span>
                    <span class="font-medium">Payments</span>
                </a>
            </nav>
        </div>
        <div class="px-4 py-2">
            <div
                class="text-xs font-semibold text-text-muted-light dark:text-text-muted-dark uppercase tracking-wider mb-4 px-2">
                Tools</div>
            <nav class="space-y-1">
                <a class="flex items-center gap-3 px-3 py-2 text-text-light dark:text-text-dark hover:bg-surface-light dark:hover:bg-surface-dark rounded-md transition-colors"
                    href="#">
                    <span class="material-icons text-text-muted-light dark:text-text-muted-dark text-xl">sync</span>
                    <span class="font-medium">Sync</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2 text-text-light dark:text-text-dark hover:bg-surface-light dark:hover:bg-surface-dark rounded-md transition-colors"
                    href="#">
                    <span
                        class="material-icons text-text-muted-light dark:text-text-muted-dark text-xl">pie_chart_outline</span>
                    <span class="font-medium">Analytics</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2 text-text-light dark:text-text-dark hover:bg-surface-light dark:hover:bg-surface-dark rounded-md transition-colors"
                    href="#">
                    <span class="material-icons text-text-muted-light dark:text-text-muted-dark text-xl">storage</span>
                    <span class="font-medium">Database</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-2 text-text-light dark:text-text-dark hover:bg-surface-light dark:hover:bg-surface-dark rounded-md transition-colors"
                    href="#">
                    <span class="material-icons text-text-muted-light dark:text-text-muted-dark text-xl">archive</span>
                    <span class="font-medium">Archive</span>
                </a>
            </nav>
        </div>
        <div class="mt-auto p-4 border-t border-border-light dark:border-border-dark">
            <button
                class="flex items-center gap-2 text-text-muted-light dark:text-text-muted-dark hover:text-text-light dark:hover:text-text-dark w-full px-2 py-2">
                <span class="material-icons text-lg">add</span>
                <span>New section</span>
            </button>
        </div>
    </aside>
    <main
        class="flex-1 flex flex-col min-w-0 bg-surface-light dark:bg-surface-dark m-4 rounded-xl shadow-sm border border-border-light dark:border-border-dark overflow-hidden">
        <header
            class="h-20 border-b border-border-light dark:border-border-dark flex items-center justify-between px-8 bg-surface-light dark:bg-surface-dark">
            <div class="flex items-center gap-4">
                <img alt="User avatar" class="w-10 h-10 rounded-full border border-border-light dark:border-border-dark"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVrP4foCffYouhs2jcLcCRFOeCiyBV-1Q0hOtvdF0W9yHM0jGodoVa1LJ-v-rATY5i9xWXPufTFQaG-NRRWQP2si6ZRcZ2HgK3yeDXoWswF62loJKy-iFIKHn3bEWBEg8i-lHOs5aYd2Kuj1FELz1c7fkBui1qGLT3zzbTF1wOIsth858alm6YpB1fsL6OZI3zdc5fdYuAADmPH_irM7VLq5PociSnwHDvylXbsiGpA8o5Oa0Lvvn8J4rzm24m9UnlANzuEhzkdKk" />
                <div>
                    <h2 class="font-semibold text-sm">Harrison Pfannerstill</h2>
                    <p class="text-xs text-text-muted-light dark:text-text-muted-dark">Last edited 11-12-13, 8:13AM</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <button
                    class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center hover:bg-blue-700 transition-colors">
                    <span class="material-icons text-sm">edit</span>
                </button>
                <button
                    class="w-8 h-8 rounded-full bg-background-light dark:bg-background-dark text-text-muted-light dark:text-text-muted-dark flex items-center justify-center hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                    <span class="material-icons text-sm">delete_outline</span>
                </button>
                <button
                    class="w-8 h-8 rounded-full bg-background-light dark:bg-background-dark text-text-muted-light dark:text-text-muted-dark flex items-center justify-center hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                    <span class="material-icons text-sm">person_outline</span>
                </button>
                <button
                    class="w-8 h-8 rounded-full bg-background-light dark:bg-background-dark text-text-muted-light dark:text-text-muted-dark flex items-center justify-center hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                    <span class="material-icons text-sm">more_horiz</span>
                </button>
            </div>
        </header>
        <div class="flex flex-1 overflow-hidden">
            <div class="w-56 border-r border-border-light dark:border-border-dark overflow-y-auto py-8 pl-8 pr-4">
                <h1 class="text-3xl font-bold mb-8">Settings</h1>
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xs text-text-muted-light dark:text-text-muted-dark mb-3">Account</h3>
                        <ul class="space-y-2 text-sm">
                            <li><a class="text-blue-600 dark:text-blue-400 font-medium underline decoration-blue-200 dark:decoration-blue-800 underline-offset-4"
                                    href="#">Unhowered item</a></li>
                            <li><a class="text-text-light dark:text-text-dark hover:text-blue-600 dark:hover:text-blue-400 font-medium"
                                    href="#">Google account</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xs text-text-muted-light dark:text-text-muted-dark mb-3">Connections</h3>
                        <ul class="space-y-2 text-sm">
                            <li><a class="text-text-light dark:text-text-dark hover:text-blue-600 dark:hover:text-blue-400 font-medium"
                                    href="#">Email integration</a></li>
                            <li><a class="text-text-light dark:text-text-dark hover:text-blue-600 dark:hover:text-blue-400 font-medium"
                                    href="#">Calendar Sync</a></li>
                            <li><a class="text-text-light dark:text-text-dark hover:text-blue-600 dark:hover:text-blue-400 font-medium"
                                    href="#">Contact Sync</a></li>
                            <li><a class="text-text-light dark:text-text-dark hover:text-blue-600 dark:hover:text-blue-400 font-medium"
                                    href="#">Google Drive</a></li>
                            <li><a class="text-text-light dark:text-text-dark hover:text-blue-600 dark:hover:text-blue-400 font-medium"
                                    href="#">MailChimp</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xs text-text-muted-light dark:text-text-muted-dark mb-3">Preferences</h3>
                        <ul class="space-y-2 text-sm">
                            <li><a class="text-text-light dark:text-text-dark hover:text-blue-600 dark:hover:text-blue-400 font-medium"
                                    href="#">User interface</a></li>
                            <li><a class="text-text-light dark:text-text-dark hover:text-blue-600 dark:hover:text-blue-400 font-medium"
                                    href="#">Activity reminder emails</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xs text-text-muted-light dark:text-text-muted-dark mb-3">Security</h3>
                        <ul class="space-y-2 text-sm">
                            <li><a class="text-text-light dark:text-text-dark hover:text-blue-600 dark:hover:text-blue-400 font-medium"
                                    href="#">Change password</a></li>
                            <li><a class="text-text-light dark:text-text-dark hover:text-blue-600 dark:hover:text-blue-400 font-medium"
                                    href="#">Login verification</a></li>
                            <li><a class="text-text-light dark:text-text-dark hover:text-blue-600 dark:hover:text-blue-400 font-medium"
                                    href="#">Devices</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex-1 overflow-y-auto p-8 max-w-4xl">
                <section class="mb-12">
                    <h2 class="text-lg font-semibold mb-2">Notification settings</h2>
                    <p class="text-sm text-text-muted-light dark:text-text-muted-dark mb-8 leading-relaxed">
                        By default, designers will be notified by your company's preferred dark patterns. Employees can
                        also customize their notification preferences by logging into the <a
                            class="text-blue-600 dark:text-blue-400 hover:underline" href="#">Setproduct dashboard</a>
                    </p>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div>
                            <h3
                                class="text-xs font-semibold text-text-muted-light dark:text-text-muted-dark uppercase tracking-wider mb-4">
                                Primary Settings</h3>
                            <div class="space-y-4">
                                <div
                                    class="flex items-center justify-between p-4 border border-border-light dark:border-border-dark rounded-lg bg-surface-light dark:bg-surface-dark">
                                    <div class="flex gap-4">
                                        <div class="mt-1 text-text-muted-light dark:text-text-muted-dark">
                                            <span class="material-icons text-xl">settings</span>
                                        </div>
                                        <div>
                                            <div class="font-medium text-sm">Setting option disabled</div>
                                            <div class="text-xs text-text-muted-light dark:text-text-muted-dark mt-0.5">
                                                Describe here what it is for</div>
                                        </div>
                                    </div>
                                    <button aria-checked="false"
                                        class="bg-gray-200 dark:bg-gray-700 relative inline-flex h-5 w-9 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2"
                                        role="switch" type="button">
                                        <span aria-hidden="true"
                                            class="translate-x-0 pointer-events-none inline-block h-4 w-4 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                    </button>
                                </div>
                                <div
                                    class="flex items-center justify-between p-4 border border-border-light dark:border-border-dark rounded-lg bg-surface-light dark:bg-surface-dark">
                                    <div class="flex gap-4">
                                        <div class="mt-1 text-text-muted-light dark:text-text-muted-dark">
                                            <span class="material-icons text-xl">text_fields</span>
                                        </div>
                                        <div>
                                            <div class="font-medium text-sm">Automatically text alignment</div>
                                            <div class="text-xs text-text-muted-light dark:text-text-muted-dark mt-0.5">
                                                This is unuseful experimental feature</div>
                                        </div>
                                    </div>
                                    <button aria-checked="true"
                                        class="bg-primary relative inline-flex h-5 w-9 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
                                        role="switch" type="button">
                                        <span aria-hidden="true"
                                            class="translate-x-4 pointer-events-none inline-block h-4 w-4 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                    </button>
                                </div>
                            </div>
                            <h3
                                class="text-xs font-semibold text-text-muted-light dark:text-text-muted-dark uppercase tracking-wider mb-4 mt-8">
                                Secondary Options</h3>
                            <div class="space-y-4">
                                <div
                                    class="flex items-center justify-between p-4 border border-border-light dark:border-border-dark rounded-lg bg-surface-light dark:bg-surface-dark">
                                    <div class="flex gap-4">
                                        <div class="mt-1 text-text-muted-light dark:text-text-muted-dark">
                                            <span class="material-icons text-xl">settings</span>
                                        </div>
                                        <div>
                                            <div class="font-medium text-sm">Setting option disabled</div>
                                            <div class="text-xs text-text-muted-light dark:text-text-muted-dark mt-0.5">
                                                Here is the onhovered statement</div>
                                        </div>
                                    </div>
                                    <button aria-checked="false"
                                        class="bg-gray-200 dark:bg-gray-700 relative inline-flex h-5 w-9 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2"
                                        role="switch" type="button">
                                        <span aria-hidden="true"
                                            class="translate-x-0 pointer-events-none inline-block h-4 w-4 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                    </button>
                                </div>
                                <div
                                    class="flex items-center justify-between p-4 border border-border-light dark:border-border-dark rounded-lg bg-surface-light dark:bg-surface-dark">
                                    <div class="flex gap-4">
                                        <div class="mt-1 text-text-muted-light dark:text-text-muted-dark">
                                            <span class="material-icons text-xl">delete_outline</span>
                                        </div>
                                        <div>
                                            <div class="font-medium text-sm">Automatically delete items</div>
                                            <div class="text-xs text-text-muted-light dark:text-text-muted-dark mt-0.5">
                                                Get rid of sh*t and keep working hard</div>
                                        </div>
                                    </div>
                                    <button aria-checked="false"
                                        class="bg-gray-200 dark:bg-gray-700 relative inline-flex h-5 w-9 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2"
                                        role="switch" type="button">
                                        <span aria-hidden="true"
                                            class="translate-x-0 pointer-events-none inline-block h-4 w-4 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                    </button>
                                </div>
                                <div
                                    class="flex items-center justify-between p-4 border border-border-light dark:border-border-dark rounded-lg bg-surface-light dark:bg-surface-dark">
                                    <div class="flex gap-4">
                                        <div class="mt-1 text-text-muted-light dark:text-text-muted-dark">
                                            <span class="material-icons text-xl">credit_card</span>
                                        </div>
                                        <div>
                                            <div class="font-medium text-sm">Keep my financial information</div>
                                            <div class="text-xs text-text-muted-light dark:text-text-muted-dark mt-0.5">
                                                No more privacy on the web</div>
                                        </div>
                                    </div>
                                    <button aria-checked="true"
                                        class="bg-primary relative inline-flex h-5 w-9 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
                                        role="switch" type="button">
                                        <span aria-hidden="true"
                                            class="translate-x-4 pointer-events-none inline-block h-4 w-4 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3
                                class="text-xs font-semibold text-text-muted-light dark:text-text-muted-dark uppercase tracking-wider mb-4">
                                Checkable Section</h3>
                            <div class="space-y-1">
                                <div
                                    class="flex items-center justify-between p-3 hover:bg-background-light dark:hover:bg-background-dark rounded-lg transition-colors">
                                    <div class="flex items-center gap-3 text-sm">
                                        <span
                                            class="material-icons text-text-muted-light dark:text-text-muted-dark text-lg">image</span>
                                        <span>Allow images watermark</span>
                                    </div>
                                    <input
                                        class="rounded border-gray-300 dark:border-gray-600 text-primary focus:ring-primary bg-transparent w-4 h-4"
                                        type="checkbox" />
                                </div>
                                <div
                                    class="flex items-center justify-between p-3 hover:bg-background-light dark:hover:bg-background-dark rounded-lg transition-colors">
                                    <div class="flex items-center gap-3 text-sm">
                                        <span
                                            class="material-icons text-text-muted-light dark:text-text-muted-dark text-lg">file_download</span>
                                        <span>Available for download</span>
                                    </div>
                                    <input
                                        class="rounded border-gray-300 dark:border-gray-600 text-primary focus:ring-primary bg-transparent w-4 h-4"
                                        type="checkbox" />
                                </div>
                                <div
                                    class="flex items-center justify-between p-3 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg transition-colors">
                                    <div class="flex items-center gap-3 text-sm">
                                        <span
                                            class="material-icons text-text-muted-light dark:text-text-muted-dark text-lg">folder_open</span>
                                        <span>Onhovered item</span>
                                    </div>
                                    <div class="w-4 h-4 border border-green-500 rounded bg-transparent"></div>
                                </div>
                                <div
                                    class="flex items-center justify-between p-3 hover:bg-background-light dark:hover:bg-background-dark rounded-lg transition-colors">
                                    <div class="flex items-center gap-3 text-sm">
                                        <span
                                            class="material-icons text-text-muted-light dark:text-text-muted-dark text-lg">shopping_cart</span>
                                        <span>Show items in stock</span>
                                    </div>
                                    <input
                                        class="rounded border-gray-300 dark:border-gray-600 text-primary focus:ring-primary bg-transparent w-4 h-4"
                                        type="checkbox" />
                                </div>
                            </div>
                            <h3
                                class="text-xs font-semibold text-text-muted-light dark:text-text-muted-dark uppercase tracking-wider mb-4 mt-6">
                                Checked Items</h3>
                            <div class="space-y-1">
                                <div
                                    class="flex items-center justify-between p-3 hover:bg-background-light dark:hover:bg-background-dark rounded-lg transition-colors">
                                    <div class="flex items-center gap-3 text-sm">
                                        <span
                                            class="material-icons text-text-muted-light dark:text-text-muted-dark text-lg">attach_money</span>
                                        <span>For commercial projects</span>
                                    </div>
                                    <input checked=""
                                        class="rounded border-transparent bg-primary text-primary focus:ring-primary w-4 h-4"
                                        type="checkbox" />
                                </div>
                                <div
                                    class="flex items-center justify-between p-3 hover:bg-background-light dark:hover:bg-background-dark rounded-lg transition-colors">
                                    <div class="flex items-center gap-3 text-sm">
                                        <span
                                            class="material-icons text-text-muted-light dark:text-text-muted-dark text-lg">trending_up</span>
                                        <span>Accelerate design flow</span>
                                    </div>
                                    <input checked=""
                                        class="rounded border-transparent bg-primary text-primary focus:ring-primary w-4 h-4"
                                        type="checkbox" />
                                </div>
                                <div
                                    class="flex items-center justify-between p-3 hover:bg-background-light dark:hover:bg-background-dark rounded-lg transition-colors">
                                    <div class="flex items-center gap-3 text-sm">
                                        <span
                                            class="material-icons text-text-muted-light dark:text-text-muted-dark text-lg">file_download</span>
                                        <span>Available for download</span>
                                    </div>
                                    <input
                                        class="rounded border-gray-300 dark:border-gray-600 text-primary focus:ring-primary bg-transparent w-4 h-4"
                                        type="checkbox" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <hr class="border-border-light dark:border-border-dark my-8" />
                <section class="max-w-2xl">
                    <h2 class="text-lg font-semibold mb-2">Edit details</h2>
                    <p class="text-sm text-text-muted-light dark:text-text-muted-dark mb-8 leading-relaxed">
                        This Figma design system provides few styles of inputs and a variety of usage patterns. Detach,
                        mix and reuse. It's easy as a finger click
                    </p>
                    <form class="space-y-5">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6">
                            <label
                                class="sm:w-32 sm:text-right text-sm text-text-muted-light dark:text-text-muted-dark">Your
                                name</label>
                            <input
                                class="flex-1 block w-full rounded-md border-border-light dark:border-border-dark bg-transparent text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3"
                                type="text" value="Roman Kamushken" />
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6">
                            <label
                                class="sm:w-32 sm:text-right text-sm text-text-muted-light dark:text-text-muted-dark">Email</label>
                            <div class="flex-1 relative">
                                <input
                                    class="block w-full rounded-md border-border-light dark:border-border-dark bg-transparent text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3 pr-10 text-text-muted-light dark:text-text-muted-dark"
                                    type="email" value="kamushken@gmail.com" />
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <span class="material-icons text-blue-500 text-sm">edit</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-6">
                            <label
                                class="sm:w-32 sm:text-right text-sm text-text-muted-light dark:text-text-muted-dark sm:pt-2">Timezone</label>
                            <div class="flex-1">
                                <div class="relative">
                                    <input
                                        class="block w-full rounded-md border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3 pr-10 text-text-muted-light dark:text-text-muted-dark"
                                        readonly="" type="text" value="(-00:00) Europe/London" />
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <span
                                            class="material-icons text-text-muted-light dark:text-text-muted-dark text-sm">lock</span>
                                    </div>
                                </div>
                                <p class="mt-1 text-xs text-text-muted-light dark:text-text-muted-dark">Timezone is
                                    updated automatically to match your computer timezone</p>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6">
                            <label
                                class="sm:w-32 sm:text-right text-sm text-text-muted-light dark:text-text-muted-dark">Locale</label>
                            <select
                                class="flex-1 block w-full rounded-md border-border-light dark:border-border-dark bg-transparent text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 pl-3 pr-10">
                                <option>English (United Kingdom)</option>
                            </select>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6">
                            <label
                                class="sm:w-32 sm:text-right text-sm text-text-muted-light dark:text-text-muted-dark">Language</label>
                            <select
                                class="flex-1 block w-full rounded-md border-border-light dark:border-border-dark bg-transparent text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 pl-3 pr-10">
                                <option>English (US)</option>
                            </select>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6">
                            <label
                                class="sm:w-32 sm:text-right text-sm text-text-muted-light dark:text-text-muted-dark">Default
                                currency</label>
                            <select
                                class="flex-1 block w-full sm:w-64 rounded-md border-border-light dark:border-border-dark bg-transparent text-sm shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 pl-3 pr-10">
                                <option>Bitcoin</option>
                            </select>
                        </div>
                        <div class="pt-6 flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6">
                            <label
                                class="sm:w-32 sm:text-right text-sm text-text-muted-light dark:text-text-muted-dark">Profile
                                picture</label>
                            <div class="flex-1 flex items-center gap-3">
                                <button
                                    class="bg-gray-200 dark:bg-gray-700 text-sm py-1.5 px-4 rounded shadow-sm hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors"
                                    type="button">Choose file</button>
                                <span class="text-xs text-text-muted-light dark:text-text-muted-dark">No file chosen to
                                    Upload</span>
                            </div>
                        </div>
                        <div class="sm:pl-38 sm:ml-32">
                            <p class="text-xs text-text-muted-light dark:text-text-muted-dark mb-4">Currently, you don't
                                have a profile picture</p>
                        </div>
                        <div class="pt-6 sm:pl-38 sm:ml-32">
                            <button
                                class="bg-primary text-white font-medium py-2.5 px-6 rounded-lg shadow-sm hover:bg-green-600 transition-colors w-full sm:w-auto"
                                type="button">
                                Save changes
                            </button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </main>

</body>

</html>