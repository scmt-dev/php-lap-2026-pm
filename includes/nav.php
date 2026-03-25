 <aside class="fixed left-0 top-0 h-full w-64 pt-20 pb-8 flex flex-col gap-2 z-40 bg-slate-50 tonal-shift">
        <div class="px-6 mb-8">
            <h2 class="text-lg font-black text-blue-950">Vaulted Editorial</h2>
            <p class="font-manrope text-[10px] tracking-widest uppercase font-bold text-slate-400">Private Banking</p>
        </div>
        <nav class="flex-1 px-4 space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-blue-700 hover:translate-x-1 duration-200 transition-transform font-manrope text-sm tracking-wide uppercase font-bold"
                href="<?php echo BASE_URL; ?>/index.php">
                <span class="material-symbols-outlined">dashboard</span>
                Dashboard
            </a>
            <a class="flex items-center gap-3 px-4 py-3 bg-white text-blue-900 rounded-xl shadow-sm font-manrope text-sm tracking-wide uppercase font-bold"
                href="<?php echo BASE_URL; ?>/account/index.php">
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