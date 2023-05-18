let mix = require("laravel-mix");

mix.js("src/app.js", "dist").setPublicPath("dist");
mix.js("resources/js/app.js", "public/js")
    .vue()
    .postCss("resources/css/app.css", "public/css", [
        require("tailwindcss"),
        //
    ]);
