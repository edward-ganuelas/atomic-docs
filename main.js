var req = require.context("./js", false, /^(.*\.(js$))[^.]*$/);
//https://stackoverflow.com/questions/29891458/webpack-require-every-file-in-directory
req.keys().forEach(function(key){
    req(key);
});

var sass = require.context("./scss", false, /^(.*\.(scss$))[^.]*$/);

sass.keys().forEach(function(key){
    sass(key);
});