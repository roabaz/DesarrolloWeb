#!/usr/bin/node
const fs = require("fs");
const SitemapGenerator = require('sitemap-generator');
const log = console.log;
const sep = () => log("".padEnd(80, "-"));
const chalk = require('chalk');

let baseUrl = 'http://localhost/CoderHouseFullStack/web%20naty/';
baseUrl = process.argv[2] ? process.argv[2] : baseUrl;

sep();
log("Utilizando url base: " + baseUrl);
sep();

let brokenUrlList = [];


// create generator
const generator = SitemapGenerator(baseUrl, {
  stripQuerystring: false,
  filepath: './sitemap.xml',
  lastMod: true,
  changeFreq: 'monthly',
  ignore: url => {
    // Prevent URLs from being added that contain `<pattern>`.
    return /sitemap.xml$/g.test(url)
  }
});

generator.on('add', (url) => {
    // log url
    log(chalk.green.bold(
        "Añadida " + url
    ));
});


generator.on('error', (error) => {
    brokenUrlList.push(error);
    // => { code: 404, message: 'Not found.', url: 'http://example.com/foo' }
});
 
// register event listeners
generator.on('done', () => {
    // sitemaps created
    fs.writeFileSync(
        '/var/www/html/CoderHouseFullStack/web naty/tools/sitemap.xml',
        fs.readFileSync('./sitemap.xml')
    );

    sep();


    log("FINALIZADO");
    sep();

    if (brokenUrlList.length)
    {
        log( chalk.bgRed.bold(
            "Hay " +  brokenUrlList.length + " URLs rotas"
        ));
        sep();
    }


    brokenUrlList.forEach((item) => {
        log(chalk.yellow.bold(
            item.url +  " - " + item.code + " - " + item.message
        ))
    })
});
 
// start the crawler
generator.start();
