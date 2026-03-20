<footer class="bg-slate-900 text-slate-400 py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-16 mb-20">
            <div class="col-span-1 md:col-span-1 space-y-8">
                <div class="flex items-center gap-3 text-white">
                        <img class="h-25 w-25 sm:h-20 sm:w-20 lg:h-24 lg:w-24" src="{{ asset('images/logo-ridte.webp') }}" alt="Logo RIDTE">
                </div>
            </div>
            <div>
                <h4 class="text-white font-sans text-xs font-bold uppercase tracking-widest mb-8"
                    style="">Estructura</h4>
                <ul class="space-y-4 text-[13px] font-sans">
                    <li class="" style=""><a class="hover:text-primary transition-colors"
                            href="{{ route('inicio') }}" style="">Marco Institucional</a></li>
                    <li class="" style=""><a class="hover:text-primary transition-colors"
                            href="{{ route('investigacion') }}" style="">Comité Científico</a></li>
                    <li class="" style=""><a class="hover:text-primary transition-colors"
                            href="{{ route('cuerpos-academicos') }}" style="">Nodos de Investigación</a></li>
                    <li class="" style=""><a class="hover:text-primary transition-colors"
                            href="{{ route('investigacion') }}" style="">Proyectos Vigentes</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-sans text-xs font-bold uppercase tracking-widest mb-8"
                    style="">Recursos Académicos</h4>
                {{--
                <ul class="space-y-4 text-[13px] font-sans">
                    <li class="" style="">Repositorio Digital</li>
                    <li class="" style="">Papers &amp; Journals</li>
                    <li class="" style="">Metodologías</li>
                    <li class="" style="">Call for Papers</li>
                </ul>
                --}}
            </div>
            <div>
                <h4 class="text-white font-sans text-xs font-bold uppercase tracking-widest mb-8"
                    style="">Secretaría General</h4>
                <ul class="space-y-4 text-[13px] font-sans">
                    <li class="flex items-start gap-3" style="">
                        <span class="material-symbols-outlined text-sm mt-1" aria-hidden="true"
                            style="">mail</span>
                        <a class="hover:text-primary transition-colors"
                            href="mailto:gabrielzepeda@uan.edu.mx" style="">gabrielzepeda@uan.edu.mx</a>
                    </li>
                    <li class="flex items-start gap-3" style="">
                        <span class="material-symbols-outlined text-sm mt-1" aria-hidden="true"
                            style="">location_on</span>
                        Universidad Autónoma de Nayarit, Unidad Académica de Economía, 2da Planta.
                    </li>
                    <li class="flex items-start gap-3" style="">
                        <span class="material-symbols-outlined text-sm mt-1" aria-hidden="true"
                            style="">call</span>
                        <a class="hover:text-primary transition-colors" href="tel:+523311234567"
                            style="">+52 311 1379272</a>
                    </li>
                </ul>
            </div>
        </div>
        <div
            class="flex flex-col md:flex-row justify-between items-center gap-8 pt-10 border-t border-slate-800">
            <p class="text-[10px] uppercase tracking-widest font-sans" style="">© 2026 RIDTE - Red para la investigación y el desarrollo de la Tecnología educativa
            </p>
            {{--
            <div class="flex gap-8 text-[10px] uppercase tracking-widest font-sans font-bold">
                <span>Ética de Datos</span>
                <span>Propiedad Intelectual</span>
                <span>Legal</span>
            </div>
            --}}
        </div>
    </div>
</footer>
