<header
    class="sticky top-0 z-50 w-full border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
    <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-1 flex h-20 items-center justify-between">
        <div class="flex items-center gap-4" aria-label="RIDTE">
            <a class="flex items-center justify-center" href="{{ route('inicio') }}" aria-label="Inicio">
                <img src="{{ asset('images/logo-ridte.webp') }}" alt="RIDTE" class="h-20 w-auto">
            </a>
        </div>
        <div class="flex items-center gap-2 lg:gap-6">
            <nav class="hidden lg:flex items-center gap-10" aria-label="Navegacion principal">
                <a class="font-sans font-semibold text-slate-600 dark:text-slate-300 hover:text-primary transition-colors text-xs uppercase tracking-widest focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                    href="{{ route('inicio') }}" style="">Inicio</a>
                <a class="font-sans font-semibold text-slate-600 dark:text-slate-300 hover:text-primary transition-colors text-xs uppercase tracking-widest focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                    href="{{ route('cuerpos-academicos') }}" style="">Cuerpos academicos</a>
                <a class="font-sans font-semibold text-slate-600 dark:text-slate-300 hover:text-primary transition-colors text-xs uppercase tracking-widest focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                    href="{{ route('investigacion') }}" style="">Investigación</a>
                
            </nav>
            <details class="relative lg:hidden">
                <summary
                    class="list-none inline-flex items-center justify-center size-10 rounded-full text-foreground hover:bg-surface-hover focus:outline-hidden focus:bg-surface-focus cursor-pointer">
                    <span class="sr-only">Abrir menu</span>
                    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 6h18" />
                        <path d="M3 12h18" />
                        <path d="M3 18h18" />
                    </svg>
                </summary>
                <div
                    class="absolute right-0 mt-3 w-56 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-lg p-3 flex flex-col gap-2">
                    <a class="font-sans font-semibold text-slate-600 dark:text-slate-300 hover:text-primary transition-colors text-xs uppercase tracking-widest"
                        href="{{ route('inicio') }}">Inicio</a>
                    <a class="font-sans font-semibold text-slate-600 dark:text-slate-300 hover:text-primary transition-colors text-xs uppercase tracking-widest"
                        href="{{ route('cuerpos-academicos') }}">Cuerpos academicos</a>
                    <a class="font-sans font-semibold text-slate-600 dark:text-slate-300 hover:text-primary transition-colors text-xs uppercase tracking-widest"
                        href="{{ route('investigacion') }}">Investigación</a>
                </div>
            </details>
            <button type="button"
                class="hs-dark-mode-active:hidden block hs-dark-mode font-medium text-foreground rounded-full hover:bg-surface-hover focus:outline-hidden focus:bg-surface-focus"
                data-hs-theme-click-value="dark">
                <span class="group inline-flex shrink-0 justify-center items-center size-9">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
                    </svg>
                </span>
            </button>
            <button type="button"
                class="hs-dark-mode-active:block hidden hs-dark-mode font-medium text-foreground rounded-full hover:bg-surface-hover focus:outline-hidden focus:bg-surface-focus"
                data-hs-theme-click-value="light">
                <span class="group inline-flex shrink-0 justify-center items-center size-9">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="4" />
                        <path d="M12 2v2" />
                        <path d="M12 20v2" />
                        <path d="m4.93 4.93 1.41 1.41" />
                        <path d="m17.66 17.66 1.41 1.41" />
                        <path d="M2 12h2" />
                        <path d="M20 12h2" />
                        <path d="m6.34 17.66-1.41 1.41" />
                        <path d="m19.07 4.93-1.41 1.41" />
                    </svg>
                </span>
            </button>
        </div>
    </div>
</header>
