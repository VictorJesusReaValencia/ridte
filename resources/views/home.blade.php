@extends('layouts.app')

@section('title', 'RIDTE - Red para la investigación y el desarrollo de la Tecnología educativa')

@section('content')
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
                            Red para la investigación y el desarrollo de la <span class="text-primary italic">Tecnología
                                educativa</span>
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
                            href="{{ route('investigacion') }}" style="">
                            Conoce nuestros proyectos <span class="material-symbols-outlined !text-sm" aria-hidden="true"
                                style="">article</span>
                        </a>
                        <a class="border border-slate-300 dark:border-slate-700 px-10 py-5 font-sans text-xs font-bold uppercase tracking-widest hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors flex items-center gap-3 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                            href="{{ route('cuerpos-academicos') }}" style="">
                            Ver Directorio <span class="material-symbols-outlined !text-sm" aria-hidden="true"
                                style="">database</span>
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
                                style="">UAN</p>
                            <p class="text-xs text-slate-500 leading-relaxed italic" style="">Universidad Autónoma de Nayarit</p>
                        </figcaption>
                    </figure>
                    <div class="grid grid-cols-2 gap-4 pt-12">
                        <div class="border-t border-slate-200 pt-4">
                            <p class="text-3xl font-heading font-bold text-slate-900 dark:text-white" style="">14</p>
                            <p class="font-sans text-[14px] uppercase tracking-tighter text-slate-500" style="">
                                Cuerpos Académicos y Grupos de Investigación</p>
                        </div>
                        <div class="border-t border-slate-200 pt-4">
                            <p class="text-3xl font-heading font-bold text-slate-900 dark:text-white" style="">3</p>
                            <p class="font-sans text-[14px] uppercase tracking-tighter text-slate-500" style="">
                                Universidades vinculadas (UAN, UDG, UACH)</p>
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
                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-slate-100" style="">Objetivos
                    </h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400 font-serif leading-relaxed" style="">Nuestra
                        agenda científica se articula en torno a tres pilares
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
                        <span class="material-symbols-outlined !text-4xl" aria-hidden="true" style="">hub</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-6" style="">Gestión del Conocimiento</h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-loose text-sm" style="">
                        Promover la actualización y circulación constante de saberes en TIC y Tecnología Educativa,
                        fomentando la interrelación
                        entre disciplinas para consolidar una base teórica sólida.
                    </p>
                </div>
                <div class="p-12 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors">
                    <div class="text-primary mb-8">
                        <span class="material-symbols-outlined !text-4xl" aria-hidden="true" style="">science</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-6" style="">Investigación Interdisciplinaria</h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-loose text-sm" style="">
                        Desarrollar estudios profundos sobre las temáticas de Tecnología Educativa y sus
                        vínculos con otras áreas del saber,
                        incentivando el trabajo conjunto entre diversos campos del conocimiento.
                    </p>
                </div>
                <div class="p-12 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors">
                    <div class="text-primary mb-8">
                        <span class="material-symbols-outlined !text-4xl" aria-hidden="true"
                            style="">psychology</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-6" style="">Espacios de Diálogo</h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-loose text-sm" style="">
                        Generar foros, seminarios y plataformas de discusión académica relativos a la tecnología
                        aplicada, abordando temas complementarios
                        que enriquezcan la visión crítica de la comunidad.
                    </p>
                </div>
                <div class="p-12 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors">
                    <div class="text-primary mb-8">
                        <span class="material-symbols-outlined !text-4xl">
                            diversity_2
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold mb-6" style="">Fortalecimiento Colaborativo</h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-loose text-sm" style="">
                        Potenciar el trabajo en equipo entre los integrantes de la red y los cuerpos académicos,
                        optimizando la cooperación técnica
                        y humana para alcanzar objetivos institucionales comunes.
                    </p>
                </div>
                <div class="p-12 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors">
                    <div class="text-primary mb-8">
                        <span class="material-symbols-outlined !text-4xl">
                            partner_exchange
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold mb-6" style="">Intercambio de Experiencias</h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-loose text-sm" style="">
                        Potenciar el trabajo en equipo entre los integrantes de la red y los cuerpos académicos,
                        optimizando la cooperación técnica
                        y humana para alcanzar objetivos institucionales comunes.
                    </p>
                </div>
                <div class="p-12 hover:bg-slate-50 dark:hover:bg-slate-900/50 transition-colors">
                    <div class="text-primary mb-8">
                        <span class="material-symbols-outlined !text-4xl">
                            antigravity
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold mb-6" style="">Divulgación Académica</h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-loose text-sm" style="">
                        Impulsar la publicación de artículos científicos y libros que beneficien a la comunidad local y
                        externa, logrando una
                        retroalimentación efectiva de la producción intelectual de los miembros.munes.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-background-light dark:bg-slate-900" id="metas">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
                    <div class="mb-16">
                        <div
                            class="inline-flex items-center gap-2 px-0 py-1 text-[11px] font-sans font-bold tracking-[0.3em] text-primary uppercase mb-4">
                            <span class="w-8 h-[1px] bg-primary"></span>Estado de Objetivos
                        </div>
                        <h2 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white">Cumplimiento de Metas
                        </h2>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                        <div class="space-y-12">
                            <div class="group">
                                <div class="flex gap-6">
                                    <div
                                        class="flex-none w-12 h-12 bg-primary/10 text-primary flex items-center justify-center font-heading font-black text-xl border border-primary/20">
                                        01</div>
                                    <div class="space-y-4">
                                        <h3
                                            class="text-2xl font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors">
                                            Avances en proyectos de investigación</h3>
                                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                            Uno de los compromisos de la RIDTE es desarrollar proyectos conjuntos que
                                            aborden problemáticas en diferentes contextos, con la meta de publicar
                                            resultados en revistas de impacto internacional. En este sentido: Ya cuentan
                                            con un proyecto sólido sobre la percepción de docentes y estudiantes
                                            respecto al uso de la IA en la educación, lo cual se alinea perfectamente
                                            con el objetivo de fomentar investigación interdisciplinaria en temas de
                                            tecnología educativa. La aplicación de más de 800 encuestas representa un
                                            avance metodológico significativo, pues asegura una base de datos robusta
                                            para análisis cuantitativos y cualitativos, fortaleciendo la validez de los
                                            resultados.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                <div class="flex gap-6">
                                    <div
                                        class="flex-none w-12 h-12 bg-primary/10 text-primary flex items-center justify-center font-heading font-black text-xl border border-primary/20">
                                        02</div>
                                    <div class="space-y-4">
                                        <h3
                                            class="text-2xl font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors">
                                            Producción académica en curso</h3>
                                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                            De acuerdo con los lineamientos, los integrantes deben generar publicaciones
                                            conjuntas (artículos, capítulos y libros) como parte de sus productos. En
                                            este aspecto: Actualmente se está desarrollando un artículo académico, lo
                                            que contribuye a la visibilidad inmediata en foros de investigación. Además,
                                            se cuenta con dos libros en proceso de compilación, lo cual es un gran logro
                                            porque cumple con la meta de publicar al menos un libro cada dos años, según
                                            lo establecido por la red. Falta únicamente la gestión editorial para su
                                            impresión y difusión.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                <div class="flex gap-6">
                                    <div
                                        class="flex-none w-12 h-12 bg-primary/10 text-primary flex items-center justify-center font-heading font-black text-xl border border-primary/20">
                                        03</div>
                                    <div class="space-y-4">
                                        <h3
                                            class="text-2xl font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors">
                                            Convenios y cooperación</h3>
                                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                            Los lineamientos señalan la importancia de la cooperación nacional e
                                            internacional, mediante convenios que fortalezcan la red y sus proyectos. La
                                            firma de un convenio con ECORFAN es un hito estratégico, ya que abre la
                                            posibilidad de publicaciones en revistas indexadas y fortalece el impacto
                                            internacional de la red. Este convenio también permite ampliar el alcance de
                                            la investigación hacia nuevos espacios de colaboración y difusión.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-12">
                            <div class="group">
                                <div class="flex gap-6">
                                    <div
                                        class="flex-none w-12 h-12 bg-primary/10 text-primary flex items-center justify-center font-heading font-black text-xl border border-primary/20">
                                        04</div>
                                    <div class="space-y-4">
                                        <h3
                                            class="text-2xl font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors">
                                            Vinculación y fortalecimiento de la red</h3>
                                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                            La red RIDTE busca no solo investigar, sino también extender sus acciones a
                                            través de vínculos con instituciones y sectores externos. Los avances
                                            actuales permiten: La futura organización de seminarios y conferencias sobre
                                            el impacto de la IA en las universidades, lo cual está en sintonía con las
                                            actividades de difusión y divulgación que la red se ha comprometido a
                                            realizar cada año. El involucramiento de estudiantes (de licenciatura y
                                            posgrado) en la recolección y análisis de encuestas, lo que cumple con el
                                            principio de formar recursos humanos vinculados a la investigación y con
                                            compromiso social.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-primary p-10 text-white space-y-6">
                                <div class="flex items-center gap-4 border-b border-white/20 pb-4">
                                    <span class="material-symbols-outlined !text-4xl">verified</span>
                                    <h3 class="text-2xl font-bold">Evaluación General</h3>
                                </div>
                                <p class="text-sm leading-relaxed font-serif italic opacity-90">
                                    "En conjunto, los logros alcanzados hasta ahora (proyecto consolidado, base de datos
                                    amplia, artículo en elaboración, libro compilado y convenio con ECORFAN) representan
                                    un cumplimiento sustantivo de los lineamientos de la RIDTE en sus apartados de
                                    investigación, publicaciones, cooperación y formación. Estos avances muestran que el
                                    trabajo está en la ruta correcta hacia la consolidación de la red, con posibilidades
                                    reales de impacto nacional e internacional."
                                </p>
                                <div class="pt-4">
                                    <div class="h-1 w-20 bg-white"></div>
                                    <p class="mt-4 text-[10px] uppercase tracking-widest font-sans font-bold">Comité de
                                        Seguimiento Institucional</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
