let mix = require("laravel-mix");

mix.js(`src/scripts/app.js`, "dist/")
    .options({
        processCssUrls: false
    })
    .ImageWebp({
        from: 'src/images',
        to: 'dist/images'
	});