let mix = require("laravel-mix")
require("laravel-mix-webp")
require("laravel-mix-brotli");

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
	.brotli({
        enabled: mix.inProduction(),
		asset: '[path].br[query]',
		test: /\.(js|css|html|svg)$/,
		threshold: 10240,
		minRatio: 0.8
	});
    .setPublicPath('dist');
    