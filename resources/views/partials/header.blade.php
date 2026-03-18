<header
    class="sticky top-0 z-50 w-full border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
    <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-1 flex h-20 items-center justify-between">
        <div class="flex items-center gap-4" aria-label="RIDTE">
            <div class="flex items-center justify-center">
                <img src="{{ asset('images/logo-ridte.webp') }}" alt="RIDTE" class="h-20 w-auto">
            </div>
        </div>
        <div class="flex items-center gap-6">
            <nav class="hidden lg:flex items-center gap-10" aria-label="Navegacion principal">
                <a class="font-sans font-semibold text-slate-600 dark:text-slate-300 hover:text-primary transition-colors text-xs uppercase tracking-widest focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                    href="{{ route('inicio') }}" style="">Inicio</a>
                <a class="font-sans font-semibold text-slate-600 dark:text-slate-300 hover:text-primary transition-colors text-xs uppercase tracking-widest focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                    href="#ejes" style="">Cuerpos academicos</a>
                <a class="font-sans font-semibold text-slate-600 dark:text-slate-300 hover:text-primary transition-colors text-xs uppercase tracking-widest focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                    href="#nodos" style="">Proyectos</a>
                <a class="font-sans font-semibold text-slate-600 dark:text-slate-300 hover:text-primary transition-colors text-xs uppercase tracking-widest focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                    href="#corpus" style="">Contacto</a>
            </nav>
            <label for="darkSwtich" class="relative inline-block w-11 h-6 cursor-pointer">
                <input data-hs-theme-switch type="checkbox" id="darkSwtich" class="peer sr-only">
                <span
                    class="absolute inset-0 bg-surface-1 rounded-full transition-colors duration-200 ease-in-out peer-checked:bg-primary-checked peer-disabled:opacity-50 peer-disabled:pointer-events-none"></span>
                <span
                    class="absolute top-1/2 start-0.5 -translate-y-1/2 size-5 bg-switch rounded-full shadow-sm !transition-transform duration-200 ease-in-out peer-checked:translate-x-full"></span>
            </label>
        </div>
    </div>
</header>
