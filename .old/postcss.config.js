/**
 * Big thanks to the instructions here!
 * https://flaviocopes.com/tailwind-setup/
 */
 
const tailwindcss = require('tailwindcss')
const purgecss = require('@fullhuman/postcss-purgecss')
const cssnano = require('cssnano')
const autoprefixer = require('autoprefixer')

/**
 * Custom PurgeCSS Extractor
 * https://github.com/FullHuman/purgecss
 * https://github.com/FullHuman/purgecss-webpack-plugin
 */
class TailwindExtractor {
    static extract(content) {
        return content.match(/[A-z0-9-:\/]+/g);
    }
}


module.exports = {
    plugins: [
        tailwindcss('tailwind.config.js'),
        cssnano({
            preset: 'default',
        }),
        purgecss({
            content: ['dist/*.html',
                      'dist/*.php',
                      'dist/includes/*.php',
                      'dist/templates/_template.php',
                      'dist/components/_template.php',
                      'dist/guides/_template.php'
            ],
            extractors: [{
                extractor: TailwindExtractor,
                extensions: ["html", "js", "php", "vue"]
            }],
            whitelist: ['w-1/3', 'w-2/3', 'w-full']
        }),
        autoprefixer
    ]
}