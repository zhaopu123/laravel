define("boot",[],function(){var a="static_passport",b="20170328",c=location.protocol||"http:",d="dev"==b?"f0.dev.jmstatic.com":"f0.jmstatic.com";"dev"!=b&&"https:"==c&&(d="secure0.jmstatic.com"),location&&location.search&&location.search.indexOf("__debugger__")>-1?(seajs.config({base:c+"//"+d+"/"+a+"/src/js"}),$(function(){$("link[rel=stylesheet]").each(function(c,d){var e=$(d).attr("href");e&&e.indexOf(a+"/dist/"+b+"/")>0&&$(d).attr("href",$(d).attr("href").replace(a+"/dist/"+b+"/",a+"/src/"))})})):(d=d.replace(/(f|secure)(\d)/,function(a,b){return b+"{{0}}"}),seajs.config({base:c+"//"+d+"/"+a+"/dist/"+b+"/js"}))}),seajs.use("boot");