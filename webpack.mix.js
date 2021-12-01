let mix = require("laravel-mix")
require("laravel-mix-webp");

mix.js(`src/scripts/app.js`, "dist/")
    .options({
        processCssUrls: false,
        autoprefixer: false,
        postCss: false
    })
    .ImageWebp({
        from: 'src/images',
        to: 'dist/images'
	})
    .setPublicPath('dist');
    