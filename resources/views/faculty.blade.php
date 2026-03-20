@extends('layouts.app')

@section('title', 'RIDTE - Red para la investigación y el desarrollo de la Tecnología educativa')

@section('content')
	<main class="flex-1 px-4 md:px-10 lg:px-40 py-8">
		<div class="flex flex-col items-center text-center max-w-4xl mx-auto mb-12">
			<div class="max-w-3xl flex flex-col items-center">
				<div class="flex items-center gap-2 mb-2">
					<span class="material-symbols-outlined text-primary text-sm">groups</span>
					<span class="text-primary text-sm font-bold uppercase tracking-wider">Red de Innovación</span>
				</div>
				<h1 class="text-slate-900 dark:text-slate-100 text-5xl font-extrabold leading-tight tracking-tight">
					Cuerpos Académicos
				</h1>
				<p class="text-slate-600 dark:text-slate-400 text-lg mt-2 font-normal">
					Directorio de grupos de investigación integrados a la red por institución y grado de
					consolidación.
				</p>
			</div>
			<div class="flex mt-8 justify-center w-full">
				<a
					href="{{ asset('pdf/Mesa-Directiva-RIDTE.pdf') }}"
					class="flex items-center gap-3 bg-white dark:bg-slate-900 text-primary px-8 py-3 rounded-full text-base font-bold hover:bg-primary hover:text-white transition-all border-2 border-primary shadow-lg"
					target="_blank"
					rel="noopener">
					<span class="material-symbols-outlined text-[20px]">download</span>
					<span>Ver Mesa Directiva</span>
				</a>
			</div>
		</div>
		<div class="border-b border-slate-200 dark:border-slate-800 mb-8 overflow-x-auto">
			<div class="flex gap-8" data-campus-filters>
				<button
					class="flex flex-col items-center justify-center border-b-[3px] border-primary text-slate-900 dark:text-slate-100 pb-4 pt-2"
					data-filter="all"
					aria-pressed="true">
					<span class="text-sm font-bold leading-normal tracking-wide px-2">TODOS</span>
				</button>
				<button
					class="flex flex-col items-center justify-center border-b-[3px] border-transparent text-slate-500 dark:text-slate-400 hover:text-primary pb-4 pt-2 transition-all"
					data-filter="uan"
					aria-pressed="false">
					<span class="text-sm font-bold leading-normal tracking-wide px-2">UAN</span>
				</button>
				<button
					class="flex flex-col items-center justify-center border-b-[3px] border-transparent text-slate-500 dark:text-slate-400 hover:text-primary pb-4 pt-2 transition-all"
					data-filter="udg"
					aria-pressed="false">
					<span class="text-sm font-bold leading-normal tracking-wide px-2">UDG</span>
				</button>
				<button
					class="flex flex-col items-center justify-center border-b-[3px] border-transparent text-slate-500 dark:text-slate-400 hover:text-primary pb-4 pt-2 transition-all"
					data-filter="uach"
					aria-pressed="false">
					<span class="text-sm font-bold leading-normal tracking-wide px-2">UACH</span>
				</button>
			</div>
		</div>
		<div class="space-y-12">
			<section data-campus="uan">
				<div class="flex items-center gap-4 mb-6">
					<div class="bg-primary/10 p-2 rounded-lg">
						<span class="material-symbols-outlined text-primary">account_balance</span>
					</div>
					<h2 class="text-2xl font-bold text-slate-900 dark:text-slate-100">
						Universidad Autónoma de Nayarit (UAN)
					</h2>
					<div class="h-[1px] flex-1 bg-slate-200 dark:bg-slate-800 ml-4"></div>
				</div>
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
					<div
						class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
						<div class="flex justify-between items-start mb-3">
							<span
								class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">
								Consolidado
							</span>
							<span class="text-xs text-slate-500 font-mono">UAN-CA306</span>
						</div>
						<h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">
							Investigación Multidisciplinar en Educación
						</h3>
					</div>
					<div
						class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
						<div class="flex justify-between items-start mb-3">
							<span
								class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">
								Consolidado
							</span>
							<span class="text-xs text-slate-500 font-mono">UAN-CA097</span>
						</div>
						<h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">
							Educación, Desarrollo y Turismo
						</h3>
					</div>
					<div
						class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
						<div class="flex justify-between items-start mb-3">
							<span
								class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">
								Consolidado
							</span>
							<span class="text-xs text-slate-500 font-mono">UAN-CA252</span>
						</div>
						<h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">
							Nuevas Tecnologías Aplicadas a la Educación
						</h3>
					</div>
					<div
						class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
						<div class="flex justify-between items-start mb-3">
							<span
								class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800 dark:bg-amber-900/30 dark:text-amber-400">
								En Consolidación
							</span>
							<span class="text-xs text-slate-500 font-mono">UAN-CA309</span>
						</div>
						<h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">
							Investigación Enfocada en la Tecnología Educativa
						</h3>
					</div>
					<div
						class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
						<div class="flex justify-between items-start mb-3">
							<span
								class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800 dark:bg-amber-900/30 dark:text-amber-400">
								En Consolidación
							</span>
							<span class="text-xs text-slate-500 font-mono">UAN-CA314</span>
						</div>
						<h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">
							Tecnología Educativa en Ciencias Básicas e Ingenierías
						</h3>
					</div>
					<div
						class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
						<div class="flex justify-between items-start mb-3">
							<span
								class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800 dark:bg-amber-900/30 dark:text-amber-400">
								En Consolidación
							</span>
							<span class="text-xs text-slate-500 font-mono">UAN-CA300</span>
						</div>
						<h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">
							Ciencias Básicas
						</h3>
					</div>
					<div
						class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
						<div class="flex justify-between items-start mb-3">
							<span
								class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800 dark:bg-amber-900/30 dark:text-amber-400">
								En Consolidación
							</span>
							<span class="text-xs text-slate-500 font-mono">UAN-CA315</span>
						</div>
						<h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">
							Bienestar y Salud Integral
						</h3>
					</div>
					<div
						class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
						<div class="flex justify-between items-start mb-3">
							<span
								class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-violet-100 text-violet-800 dark:bg-violet-900/30 dark:text-violet-300">
								En proceso de registro
							</span>
							<span class="text-xs text-slate-500 font-mono">UAN-CA</span>
						</div>
						<h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">
							Interseccionalidades, Educación y Grupos Sociales
						</h3>
					</div>
					<div
						class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
						<div class="flex justify-between items-start mb-3">
							<span
								class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-300">
								Sin estatus
							</span>
							<span class="text-xs text-slate-500 font-mono">UAN-CA293</span>
						</div>
						<h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">
							Implicaciones e Impacto de la Tecnología en la Educación y Sociedad
						</h3>
					</div>
					<div
						class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
						<div class="flex justify-between items-start mb-3">
							<span
								class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-300">
								Sin estatus
							</span>
							<span class="text-xs text-slate-500 font-mono">UAN-CA267</span>
						</div>
						<h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">
							Educación Turística y Desarrollo Social
						</h3>
					</div>
					<div
						class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
						<div class="flex justify-between items-start mb-3">
							<span
								class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-300">
								Sin estatus
							</span>
							<span class="text-xs text-slate-500 font-mono">UAN-CA297</span>
						</div>
						<h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">
							Matemática Educativa
						</h3>
					</div>
				</div>
			</section>
			<section data-campus="udg">
				<div class="flex items-center gap-4 mb-6">
					<div class="bg-primary/10 p-2 rounded-lg">
						<span class="material-symbols-outlined text-primary">school</span>
					</div>
					<h2 class="text-2xl font-bold text-slate-900 dark:text-slate-100">
						Universidad de Guadalajara (UDG)
					</h2>
					<div class="h-[1px] flex-1 bg-slate-200 dark:bg-slate-800 ml-4"></div>
				</div>
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
					<div
						class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
						<div class="flex justify-between items-start mb-3">
							<span
								class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800 dark:bg-amber-900/30 dark:text-amber-400">
								En Consolidación
							</span>
							<span class="text-xs text-slate-500 font-mono">UDG-CA885</span>
						</div>
						<h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">
							Educación y Desarrollo Tecnológico
						</h3>
					</div>
					<div
						class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
						<div class="flex justify-between items-start mb-3">
							<span
								class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800 dark:bg-amber-900/30 dark:text-amber-400">
								En Consolidación
							</span>
							<span class="text-xs text-slate-500 font-mono">UDG-CA656</span>
						</div>
						<h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">
							Educación y Tecnología Instruccional
						</h3>
					</div>
				</div>
			</section>
			<section data-campus="uach">
				<div class="flex items-center gap-4 mb-6">
					<div class="bg-primary/10 p-2 rounded-lg">
						<span class="material-symbols-outlined text-primary">foundation</span>
					</div>
					<h2 class="text-2xl font-bold text-slate-900 dark:text-slate-100">
						Universidad Autónoma de Chihuahua (UACH)
					</h2>
					<div class="h-[1px] flex-1 bg-slate-200 dark:bg-slate-800 ml-4"></div>
				</div>
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
					<div
						class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
						<div class="flex justify-between items-start mb-3">
							<span
								class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400">
								En formación
							</span>
							<span class="text-xs text-slate-500 font-mono">UACH-CA300</span>
						</div>
						<h3 class="text-lg font-bold text-slate-900 dark:text-slate-100">
							Educación Sociomédica
						</h3>
					</div>
				</div>
			</section>
		</div>
		<div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 gap-4">
			<div class="bg-primary p-6 rounded-xl text-white shadow-xl shadow-primary/10">
				<p class="text-primary-200 text-xs font-bold uppercase tracking-widest mb-1">Total CAs</p>
				<h4 class="text-3xl font-black">14</h4>
				<div class="mt-4 flex items-center gap-2 text-sm text-primary-100">
					<span class="material-symbols-outlined text-[18px]">trending_up</span>
					<span>Actualizado</span>
				</div>
			</div>
			<div
				class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
				<p class="text-slate-500 text-xs font-bold uppercase tracking-widest mb-1">Consolidados</p>
				<h4 class="text-3xl font-black text-slate-900 dark:text-slate-100">3</h4>
				<div class="mt-4 w-full bg-slate-100 dark:bg-slate-800 h-1.5 rounded-full overflow-hidden">
					<div class="bg-green-500 h-full w-[21%]"></div>
				</div>
			</div>
			<div
				class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
				<p class="text-slate-500 text-xs font-bold uppercase tracking-widest mb-1">En Consolidación</p>
				<h4 class="text-3xl font-black text-slate-900 dark:text-slate-100">6</h4>
				<div class="mt-4 w-full bg-slate-100 dark:bg-slate-800 h-1.5 rounded-full overflow-hidden">
					<div class="bg-amber-500 h-full w-[43%]"></div>
				</div>
			</div>
			<div
				class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
				<p class="text-slate-500 text-xs font-bold uppercase tracking-widest mb-1">En Formación</p>
				<h4 class="text-3xl font-black text-slate-900 dark:text-slate-100">1</h4>
				<div class="mt-4 w-full bg-slate-100 dark:bg-slate-800 h-1.5 rounded-full overflow-hidden">
					<div class="bg-blue-500 h-full w-[7%]"></div>
				</div>
			</div>
			<div
				class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
				<p class="text-slate-500 text-xs font-bold uppercase tracking-widest mb-1">En proceso de registro</p>
				<h4 class="text-3xl font-black text-slate-900 dark:text-slate-100">1</h4>
				<div class="mt-4 w-full bg-slate-100 dark:bg-slate-800 h-1.5 rounded-full overflow-hidden">
					<div class="bg-violet-500 h-full w-[7%]"></div>
				</div>
			</div>
			<div
				class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
				<p class="text-slate-500 text-xs font-bold uppercase tracking-widest mb-1">Sin estatus</p>
				<h4 class="text-3xl font-black text-slate-900 dark:text-slate-100">3</h4>
				<div class="mt-4 w-full bg-slate-100 dark:bg-slate-800 h-1.5 rounded-full overflow-hidden">
					<div class="bg-slate-400 h-full w-[21%]"></div>
				</div>
			</div>
		</div>
	</main>
	<script>
		document.addEventListener('DOMContentLoaded', () => {
			const filterBar = document.querySelector('[data-campus-filters]');
			const filterButtons = filterBar ? Array.from(filterBar.querySelectorAll('[data-filter]')) : [];
			const sections = Array.from(document.querySelectorAll('[data-campus]'));

			if (!filterBar || filterButtons.length === 0) {
				return;
			}

			const activeClasses = ['border-primary', 'text-slate-900', 'dark:text-slate-100'];
			const inactiveClasses = ['border-transparent', 'text-slate-500', 'dark:text-slate-400'];

			const setActiveButton = (activeButton) => {
				filterButtons.forEach((button) => {
					const isActive = button === activeButton;
					button.setAttribute('aria-pressed', isActive ? 'true' : 'false');
					activeClasses.forEach((className) => button.classList.toggle(className, isActive));
					inactiveClasses.forEach((className) => button.classList.toggle(className, !isActive));
				});
			};

			const applyFilter = (filter) => {
				sections.forEach((section) => {
					const matches = filter === 'all' || section.dataset.campus === filter;
					section.classList.toggle('hidden', !matches);
				});
			};

			filterButtons.forEach((button) => {
				button.addEventListener('click', () => {
					const filter = button.dataset.filter || 'all';
					setActiveButton(button);
					applyFilter(filter);
				});
			});

			setActiveButton(filterButtons[0]);
			applyFilter('all');
		});
	</script>
@endsection