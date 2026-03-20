@extends('layouts.app')

@section('title', 'RIDTE - Investigación y cumplimiento de metas')

@section('content')
	<main class="max-w-7xl mx-auto px-8 py-12">
		<div class="mb-12 border-l-4 border-primary pl-6">
			<p class="text-sm font-semibold text-primary uppercase tracking-widest mb-2 font-body">
				Investigación
			</p>
			<h1 class="text-4xl md:text-5xl font-headline font-bold text-slate-900 dark:text-slate-100 leading-tight">
				Cumplimiento de Metas
			</h1>
		</div>
		<section class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-20 items-center">
			<div class="lg:col-span-7">
				<div class="bg-white dark:bg-slate-900 p-8 md:p-12 shadow-xl relative overflow-hidden">
					<div
						class="absolute top-0 right-0 w-32 h-32 bg-primary/10 opacity-50 -mr-16 -mt-16 rounded-full">
					</div>
					<h2 class="text-2xl font-headline font-bold text-primary mb-6">Introducción Institucional</h2>
					<p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6 font-light">
						La Red de Investigación, Docencia y Tecnologías en Educación (RIDTE) promueve activamente la
						excelencia científica a través de la integración de proyectos conjuntos y la cooperación
						estratégica entre sus miembros.
					</p>
					<p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed font-light">
						Nuestro compromiso radica en la generación de conocimiento riguroso que responda a los desafíos
						contemporáneos de la tecnología educativa a nivel internacional.
					</p>
				</div>
			</div>
			<div class="lg:col-span-5">
				<div
					class="h-100 w-full rounded-sm overflow-hidden shadow-2xl grayscale hover:grayscale-0 transition-all duration-700">
					<img
						alt="Escudo universidad Autonoma de Nayarit"
						class="w-full h-full object-cover"
						data-alt="Interior of a modern academic research library"
						src="{{ asset('images/uan-escudo.webp') }}" />
				</div>
			</div>
		</section>
		<section class="mb-6">
			<div class="flex items-center gap-4 mb-10">
				<div class="h-px bg-slate-200 dark:bg-slate-800 flex-grow"></div>
				<h2 class="text-primary font-bold uppercase tracking-[0.2em] text-2xl">
					Ejes de Desarrollo Científico
				</h2>
				<div class="h-px bg-slate-200 dark:bg-slate-800 flex-grow"></div>
			</div>
			<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
				<div
					class="group bg-white dark:bg-slate-900 p-10 hover:shadow-2xl transition-all duration-300 relative">
					<div class="flex items-start justify-between mb-8">
						<span
							class="material-symbols-outlined text-primary text-4xl"
							data-icon="analytics"
							data-weight="fill"
							style="font-variation-settings: 'FILL' 1;">analytics</span>
						<span class="text-5xl font-headline text-white font-black">01</span>
					</div>
					<h3
						class="text-xl font-headline font-bold text-slate-900 dark:text-slate-100 mb-4 group-hover:text-primary transition-colors">
						Avances en proyectos de investigación
					</h3>
					<p class="text-slate-600 dark:text-slate-400 leading-relaxed font-body">
						Actualmente destacamos el progreso del proyecto central sobre
						<span class="font-semibold italic text-primary">Inteligencia Artificial en educación</span>.
						Se ha alcanzado el hito significativo de recolección de datos con más de
						<span class="font-bold">800 encuestas validadas</span>, estableciendo una base empírica sólida
						para las fases diagnósticas.
					</p>
				</div>
				<div
					class="group bg-white dark:bg-slate-900 p-10 hover:shadow-2xl transition-all duration-300 relative">
					<div class="flex items-start justify-between mb-8">
						<span
							class="material-symbols-outlined text-primary text-4xl"
							data-icon="menu_book"
							data-weight="fill"
							style="font-variation-settings: 'FILL' 1;">menu_book</span>
						<span class="text-5xl font-headline text-white font-black">02</span>
					</div>
					<h3
						class="text-xl font-headline font-bold text-slate-900 dark:text-slate-100 mb-4 group-hover:text-primary transition-colors">
						Producción académica en curso
					</h3>
					<p class="text-slate-600 dark:text-slate-400 leading-relaxed font-body">
						Cumpliendo con la meta bienal establecida, la red mantiene en producción un artículo académico
						de alto impacto y <span class="font-semibold text-primary">dos libros en proceso de
							compilación</span>. Estas obras recogen las aportaciones más recientes de los cuerpos
						académicos integrantes de la red.
					</p>
				</div>
				<div
					class="group bg-white dark:bg-slate-900 p-10 hover:shadow-2xl transition-all duration-300 relative">
					<div class="flex items-start justify-between mb-8">
						<span
							class="material-symbols-outlined text-primary text-4xl"
							data-icon="handshake"
							data-weight="fill"
							style="font-variation-settings: 'FILL' 1;">handshake</span>
						<span class="text-5xl font-headline text-white font-black">03</span>
					</div>
					<h3
						class="text-xl font-headline font-bold text-slate-900 dark:text-slate-100 mb-4 group-hover:text-primary transition-colors">
						Convenios y cooperación
					</h3>
					<p class="text-slate-600 dark:text-slate-400 leading-relaxed font-body">
						La alianza estratégica consolidada con <span class="font-bold text-primary">ECORFAN</span> ha
						potenciado nuestra visibilidad internacional. Este convenio facilita la publicación de hallazgos
						en revistas indexadas y fortalece el posicionamiento de RIDTE en el ecosistema científico
						global.
					</p>
				</div>
				<div
					class="group bg-white dark:bg-slate-900 p-10 hover:shadow-2xl transition-all duration-300 relative">
					<div class="flex items-start justify-between mb-8">
						<span
							class="material-symbols-outlined text-primary text-4xl"
							data-icon="groups"
							data-weight="fill"
							style="font-variation-settings: 'FILL' 1;">groups</span>
						<span class="text-5xl font-headline text-white font-black">04</span>
					</div>
					<h3
						class="text-xl font-headline font-bold text-slate-900 dark:text-slate-100 mb-4 group-hover:text-primary transition-colors">
						Vinculación y fortalecimiento
					</h3>
					<p class="text-slate-600 dark:text-slate-400 leading-relaxed font-body">
						Promovemos el relevo generacional mediante la organización de seminarios y conferencias
						especializadas en IA. Contamos con la <span class="font-semibold">participación activa</span> de
						estudiantes de licenciatura y posgrado, integrándolos en dinámicas reales de investigación
						académica.
					</p>
				</div>
			</div>
		</section>
		<section class="mb-6">
			<div class="bg-primary text-white p-12 md:p-16 rounded-sm shadow-2xl relative overflow-hidden">
				<div
					class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-primary/40 via-transparent to-transparent opacity-40">
				</div>
				<div class="relative z-10 max-w-4xl">
					<h2 class="text-3xl font-headline font-bold mb-8 flex items-center gap-3">
						<span class="material-symbols-outlined text-4xl" data-icon="verified">verified</span>
						Evaluación General
					</h2>
					<div class="space-y-6 text-xl font-light leading-relaxed">
						<p>
							El análisis del periodo actual demuestra que los logros alcanzados —incluyendo el proyecto
							de IA, la consolidación de bases de datos, la producción editorial y el convenio con
							ECORFAN— representan un <span class="font-bold border-b-2 border-white/40 pb-1">cumplimiento
								sustantivo</span> de los lineamientos estratégicos de RIDTE.
						</p>
						<p class="text-white/80">
							Estos resultados posicionan a la Red como un referente en la vinculación académica y la
							producción científica de calidad en el ámbito de la tecnología educativa.
						</p>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection
