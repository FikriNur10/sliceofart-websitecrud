let mix = require("laravel-mix");

mix.setPublicPath('./public/build');

mix.js("src/app.js", "dist").setPublicPath("dist");
mix.js("resources/js/app.js", "public/js")
    .vue()
    .postCss("resources/css/app.css", "resources/css/app.css", [
        require("tailwindcss"),
        //
    ]);
