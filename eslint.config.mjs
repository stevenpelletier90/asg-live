import js from '@eslint/js';
import prettier from 'eslint-config-prettier';
import globals from 'globals';

export default [
	{
		files: ['assets/js/**/*.js'],
		languageOptions: {
			ecmaVersion: 'latest',
			sourceType: 'script',
			globals: {
				...globals.browser,
			},
		},
		rules: {
			...js.configs.recommended.rules,
			'no-unused-vars': ['warn', { args: 'none' }],
		},
	},
	prettier,
];
