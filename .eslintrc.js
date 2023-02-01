module.exports = {
    root: true,
    env: {
        browser: true,
        node: true,
    },
    parserOptions: {
        ecmaVersion: 2022,
    },
    extends: [
        'eslint:recommended',
        'plugin:vue/vue3-recommended',
        'plugin:prettier/recommended',
    ],
    rules: {
        'no-unused-vars': ['off'],

        // 'no-func-assign': ['off'],
        // 'no-undef': ['off'],
        // 'vue/multi-word-component-names': ['off'],
        // 'vue/no-unused-vars': ['off'],
        // 'vue/no-v-html': ['off'],
        // 'vue/require-default-prop': ['off'],
        // 'vue/require-v-for-key': ['off'],
        // 'vue/valid-v-for': ['off'],
    },
    globals: {
        axios: true,
        __: true,
    },
}
