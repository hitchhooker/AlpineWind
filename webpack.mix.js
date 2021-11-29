let mix = require("laravel-mix")
require("laravel-mix-webp");

mix.js(`src/scripts/app.js`, "dist/")
    .options({
        processCssUrls: false
    })
    .ImageWebp({
        from: 'src/images',
        to: 'dist/images'
	})
    setPublicPath('dist');