/** @type {import('tailwindcss').Config} */
export default {
	content: [
		"./resources/**/*.blade.php",
		'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
	],
	theme: {
		extend: {
			colors: {
				background: '#E1E4E9',
				text: '#272C2F',
				secondary: '#C40000',
				tertiary: "#999999",
				dark: "#1E2534",
			},
		},
		pagination: theme => ({
			color: theme('colors.teal.600'),
		})
	},
	plugins: [],
}