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

const applyTheme = (theme) => {
	if (theme === 'dark') {
		root.classList.add('dark');
	} else {
		root.classList.remove('dark');
	}
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
