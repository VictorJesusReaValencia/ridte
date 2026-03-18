<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>RIDTE - Consorcio Global para la Innovación en Tecnología Educativa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&amp;family=Merriweather:ital,wght@0,300;0,400;0,700;1,400&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 transition-colors duration-300">
    <a class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-white text-slate-900 px-4 py-2 border border-slate-200"
        href="#contenido-principal">Saltar al contenido principal</a>
    <div class="relative flex min-h-screen flex-col overflow-x-hidden">
        <header
            class="sticky top-0 z-50 w-full border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 flex h-20 items-center justify-between">
                <div class="flex items-center gap-4" aria-label="RIDTE">
                    <div class="flex items-center justify-center bg-primary p-2 text-white">
                        <span class="material-symbols-outlined !text-3xl" aria-hidden="true"
                            style="">account_balance</span>
                    </div>
                    <div>
                        <h2 class="text-2xl font-black tracking-tighter text-slate-900 dark:text-white leading-none"
                            style="">RIDTE</h2>
                        <p class="text-[10px] uppercase tracking-[0.2em] font-sans font-bold text-primary"
                            style="">Consorcio de Investigación</p>
                    </div>
                </div>
                    <div class="flex items-center gap-6">
                        <nav class="hidden lg:flex items-center gap-10" aria-label="Navegacion principal">
                    <a class="font-sans font-semibold text-slate-600 dark:text-slate-300 hover:text-primary transition-colors text-xs uppercase tracking-widest focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                        href="#" style="">Portal</a>
                    <a class="font-sans font-semibold text-slate-600 dark:text-slate-300 hover:text-primary transition-colors text-xs uppercase tracking-widest focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                        href="#ejes" style="">Investigación</a>
                    <a class="font-sans font-semibold text-slate-600 dark:text-slate-300 hover:text-primary transition-colors text-xs uppercase tracking-widest focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                        href="#nodos" style="">Nodos Académicos</a>
                    <a class="font-sans font-semibold text-slate-600 dark:text-slate-300 hover:text-primary transition-colors text-xs uppercase tracking-widest focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                        href="#corpus" style="">Corpus Documental</a>
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
        <main class="flex-1" id="contenido-principal" tabindex="-1">
            <section class="relative pt-16 pb-24 px-4 border-b border-slate-200 dark:border-slate-800">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
                        <div class="lg:col-span-7 space-y-10">
                            <div class="space-y-6">
                                <div class="inline-flex items-center gap-2 px-0 py-1 text-[11px] font-sans font-bold tracking-[0.3em] text-primary uppercase"
                                    style="">
                                    <span class="w-8 h-[1px] bg-primary"></span>ridte
                                </div>
                                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-slate-900 dark:text-white leading-[1.1]"
                                    style="">
                                    Red para la investigación y el desarrollo de la <span
                                        class="text-primary italic">Tecnología educativa</span>
                                </h1>
                                <div class="academic-border pl-8 py-2">
                                    <p class="abstract-text text-xl text-slate-700 dark:text-slate-300 max-w-2xl italic"
                                        style="">"La Red para la Investigación y el Desarrollo de la Tecnología
                                        Educativa tiene como
                                        finalidad fomentar la colaboración y el intercambio de conocimientos entre los
                                        cuerpos
                                        académicos participantes. Esta red busca crear un espacio dinámico y
                                        enriquecedor para el
                                        desarrollo, la investigación, y la implementación de tecnologías educativas
                                        innovadoras que
                                        puedan tener un impacto directo en la calidad educativa, así como en la
                                        sociedad."</p>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-6 pt-4">
                                <a class="bg-primary text-white px-10 py-5 font-sans text-xs font-bold uppercase tracking-widest hover:bg-blue-700 transition-all flex items-center gap-3 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                                    href="#corpus" style="">
                                    Conoce nuestros proyectos <span class="material-symbols-outlined !text-sm"
                                        aria-hidden="true" style="">article</span>
                                </a>
                                <a class="border border-slate-300 dark:border-slate-700 px-10 py-5 font-sans text-xs font-bold uppercase tracking-widest hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors flex items-center gap-3 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                                    href="#corpus" style="">
                                    Ver Directorio <span class="material-symbols-outlined !text-sm"
                                        aria-hidden="true" style="">database</span>
                                </a>
                            </div>
                        </div>
                        <div class="lg:col-span-5 space-y-8">
                            <figure class="relative group">
                                <img class="aspect-[4/5] w-full bg-slate-200 dark:bg-slate-800 object-cover object-center shadow-2xl"
                                    src="images/uan.jpg"
                                    alt="Observación participante en entornos de aprendizaje híbridos con interfaces colaborativas.">
                                <figcaption
                                    class="absolute -bottom-6 -left-6 bg-white dark:bg-slate-900 p-6 border border-slate-100 dark:border-slate-800 shadow-xl max-w-xs">
                                    <p class="font-sans text-[10px] uppercase tracking-widest text-primary font-bold mb-2"
                                        style="">Ejemplo de texto</p>
                                    <p class="text-xs text-slate-500 leading-relaxed italic" style="">Fig 1.1:
                                        lore ipsum dolor sit amet .</p>
                                </figcaption>
                            </figure>
                            <div class="grid grid-cols-2 gap-4 pt-12">
                                <div class="border-t border-slate-200 pt-4">
                                    <p class="text-3xl font-heading font-bold text-slate-900 dark:text-white"
                                        style="">14</p>
                                    <p class="font-sans text-[14px] uppercase tracking-tighter text-slate-500"
                                        style="">Cuerpos Académicos y Grupos de Investigación</p>
                                </div>
                                <div class="border-t border-slate-200 pt-4">
                                    <p class="text-3xl font-heading font-bold text-slate-900 dark:text-white"
                                        style="">3</p>
                                    <p class="font-sans text-[14px] uppercase tracking-tighter text-slate-500"
                                        style="">Universidades vinculadas (UAN, UDG, UACH)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24 bg-white dark:bg-background-dark" id="ejes">
                <div class="max-w-7xl mx-auto px-4">
                    <div
                        class="flex flex-col lg:flex-row justify-between items-end mb-20 gap-8 border-b border-slate-100 dark:border-slate-800 pb-12">
                        <div class="max-w-2xl space-y-4">
                            <h2 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-slate-100"
                                style="">Objetivos</h2>
                            <p class="text-lg text-slate-600 dark:text-slate-400 font-serif leading-relaxed"
                                style="">Nuestra agenda científica se articula en torno a tres pilares
                                fundamentales que garantizan el rigor y la aplicabilidad del conocimiento generado.</p>
                        </div>
                        <div class="flex gap-2">
                            <span class="material-symbols-outlined text-primary !text-4xl" aria-hidden="true"
                                style="">menu_book</span>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 md:grid-cols-3 gap-0 divide-y md:divide-y-0 md:divide-x divide-slate-200 dark:divide-slate-800 border border-slate-200 dark:border-slate-800">
                        <div class="p-12 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors">
                            <div class="text-primary mb-8">
                                <span class="material-symbols-outlined !text-4xl" aria-hidden="true"
                                    style="">hub</span>
                            </div>
                            <h3 class="text-2xl font-bold mb-6" style="">Cooperación Transnacional</h3>
                            <p class="text-slate-600 dark:text-slate-400 leading-loose text-sm" style="">
                                Articulación de nodos académicos para la transferencia de modelos pedagógicos y el
                                desarrollo de proyectos de investigación multicéntricos con alcance global.
                            </p>
                        </div>
                        <div class="p-12 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors">
                            <div class="text-primary mb-8">
                                <span class="material-symbols-outlined !text-4xl" aria-hidden="true"
                                    style="">science</span>
                            </div>
                            <h3 class="text-2xl font-bold mb-6" style="">Metodologías Rigurosas</h3>
                            <p class="text-slate-600 dark:text-slate-400 leading-loose text-sm" style="">
                                Aplicación de protocolos experimentales y cuasiexperimentales para la evaluación de la
                                eficacia en herramientas de tecnología educativa y entornos digitales.
                            </p>
                        </div>
                        <div class="p-12 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors">
                            <div class="text-primary mb-8">
                                <span class="material-symbols-outlined !text-4xl" aria-hidden="true"
                                    style="">psychology</span>
                            </div>
                            <h3 class="text-2xl font-bold mb-6" style="">Disrupción Pedagógica</h3>
                            <p class="text-slate-600 dark:text-slate-400 leading-loose text-sm" style="">
                                Investigación aplicada sobre el impacto de la Inteligencia Artificial y el Big Data en
                                la personalización de las trayectorias de aprendizaje superior.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="bg-slate-900 text-slate-400 py-20">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-16 mb-20">
                    <div class="col-span-1 md:col-span-1 space-y-8">
                        <div class="flex items-center gap-3 text-white">
                            <span class="material-symbols-outlined !text-3xl text-primary" aria-hidden="true"
                                style="">account_balance</span>
                            <span class="text-2xl font-black tracking-tighter" style="">RIDTE</span>
                        </div>
                        <p class="text-xs leading-relaxed font-serif italic" style="">
                            Organismo académico internacional dedicado a la excelencia en investigación y el desarrollo
                            de tecnologías para la transformación digital del conocimiento.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-white font-sans text-xs font-bold uppercase tracking-widest mb-8"
                            style="">Estructura</h4>
                        <ul class="space-y-4 text-[13px] font-sans">
                            <li class="" style=""><a class="hover:text-primary transition-colors"
                                    href="#" style="">Marco Institucional</a></li>
                            <li class="" style=""><a class="hover:text-primary transition-colors"
                                    href="#" style="">Comité Científico</a></li>
                            <li class="" style=""><a class="hover:text-primary transition-colors"
                                    href="#" style="">Nodos de Investigación</a></li>
                            <li class="" style=""><a class="hover:text-primary transition-colors"
                                    href="#" style="">Proyectos Vigentes</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-sans text-xs font-bold uppercase tracking-widest mb-8"
                            style="">Recursos Académicos</h4>
                        <ul class="space-y-4 text-[13px] font-sans">
                            <li class="" style=""><a class="hover:text-primary transition-colors"
                                    href="#" style="">Repositorio Digital</a></li>
                            <li class="" style=""><a class="hover:text-primary transition-colors"
                                    href="#" style="">Papers &amp; Journals</a></li>
                            <li class="" style=""><a class="hover:text-primary transition-colors"
                                    href="#" style="">Metodologías</a></li>
                            <li class="" style=""><a class="hover:text-primary transition-colors"
                                    href="#" style="">Call for Papers</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-sans text-xs font-bold uppercase tracking-widest mb-8"
                            style="">Secretaría General</h4>
                        <ul class="space-y-4 text-[13px] font-sans">
                            <li class="flex items-start gap-3" style="">
                                <span class="material-symbols-outlined text-sm mt-1" aria-hidden="true"
                                    style="">mail</span>
                                secretaria@redridte.org
                            </li>
                            <li class="flex items-start gap-3" style="">
                                <span class="material-symbols-outlined text-sm mt-1" aria-hidden="true"
                                    style="">location_on</span>
                                Facultad de Educación, Edificio de Investigación, 3ra Planta.
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row justify-between items-center gap-8 pt-10 border-t border-slate-800">
                    <p class="text-[10px] uppercase tracking-widest font-sans" style="">© 2024 RIDTE - Consorcio
                        para la Innovación en Tecnología Educativa. Registro Internacional de Redes de Investigación.
                    </p>
                    <div class="flex gap-8 text-[10px] uppercase tracking-widest font-sans font-bold">
                        <a class="hover:text-white" href="#" style="">Ética de Datos</a>
                        <a class="hover:text-white" href="#" style="">Propiedad Intelectual</a>
                        <a class="hover:text-white" href="#" style="">Legal</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>
