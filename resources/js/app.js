import './bootstrap';

const themeSwitch = document.querySelector('[data-hs-theme-switch]');
const storageKey = 'ridte-theme';
const root = document.documentElement;

const getPreferredTheme = () => {
	const stored = localStorage.getItem(storageKey);
	if (stored === 'light' || stored === 'dark') {
		return stored;
	}
	return 'light';
};

const getCurrentTheme = () => (root.classList.contains('dark') ? 'dark' : 'light');

const applyTheme = (theme) => {
	if (theme === 'dark') {
		root.classList.add('dark');
	} else {
		root.classList.remove('dark');
	}
	root.classList.toggle('hs-dark-mode-active', theme === 'dark');
	if (themeSwitch) {
		themeSwitch.checked = theme === 'dark';
	}
};

applyTheme(getPreferredTheme());

if (themeSwitch) {
	themeSwitch.addEventListener('change', () => {
		const nextTheme = themeSwitch.checked ? 'dark' : 'light';
		localStorage.setItem(storageKey, nextTheme);
		applyTheme(nextTheme);
	});
}

document.addEventListener('click', (event) => {
	const button = event.target.closest('[data-hs-theme-click-value]');
	if (!button) {
		return;
	}
	const requestedTheme = button.dataset.hsThemeClickValue;
	const currentTheme = getCurrentTheme();
	const nextTheme =
		requestedTheme === currentTheme
			? currentTheme === 'dark'
				? 'light'
				: 'dark'
			: requestedTheme;
	if (nextTheme === 'light' || nextTheme === 'dark') {
		localStorage.setItem(storageKey, nextTheme);
		applyTheme(nextTheme);
	}
});
