﻿<!DOCTYPE html>
<html>
	<head>
		<link href="/Home/shopping/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/Home/shopping/basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link href="/Home/shopping/css/cartstyle.css" rel="stylesheet" type="text/css" />
		<link href="/Home/shopping/css/optstyle.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="/Home/shopping/js/jquery.js"></script>
		<link rel="stylesheet" href="/Home/shopping/css1/style.css"/>
		<script type="text/javascript" src="/Home/shopping/js1/demo.js?version={{$versionId}}"></script>
		<!-- 听云监控 -->
		<script type='text/javascript'>window._ty_rum||function(t){function e(t){switch(typeof t){case"object":if(!t)return"null";if(t instanceof Array){for(var r="[",n=0;n<t.length;n++)r+=(n>0?",":"")+e(t[n]);return r+"]"}var r="{",n=0;for(var a in t)if("function"!=typeof t[a]){var i=e(t[a]);r+=(n>0?",":"")+e(a)+":"+i,n++}return r+"}";case"string":return'"'+t.replace(/([\"\\])/g,"\\$1").replace(/\n/g,"\\n")+'"';case"number":return t.toString();case"boolean":return t?"true":"false";case"function":return e(t.toString());case"undefined":default:return'"undefined"'}}function r(t){return B?B(t):t}function n(){return Date.now?Date.now():(new Date).valueOf()}function a(t,e,r){function n(){var t=H.args.apply(this,arguments);return e(i,t,r)}var a,i=t[t.length-1];if("function"==typeof i){switch(i.length){case 0:a=function(){return n.apply(this,arguments)};break;case 1:a=function(t){return n.apply(this,arguments)};break;case 2:a=function(t,e){return n.apply(this,arguments)};break;case 3:a=function(t,e,r){return n.apply(this,arguments)};break;case 4:a=function(t,e,r,a){return n.apply(this,arguments)};break;case 5:a=function(t,e,r,a,i){return n.apply(this,arguments)};break;default:for(var o=[],s=0,u=i.length;u>s;s++)o.push("_"+s);a=eval("(function(){return function("+o.join(",")+"){var args = [].slice.call(arguments, 0);return e(i, args, r);};})();")}t[t.length-1]=a}return t}function i(t,e){return t&&e&&(t.moduleName=e),t}function o(t,e,r){return function(){try{k=e,r&&s(e),t.apply(this,arguments),r&&u()}catch(n){throw r&&u(),i(n,e)}}}function s(e){H.each(["setTimeout","setInterval"],function(r){H.wrap(!0,t,r,function(t){return function(){var r,n=H.args.apply(this,arguments),a=n[0];return"function"==typeof a&&(r=o(a,e,!0)),r&&(n[0]=r),t.apply?t.apply(this,n):Function.prototype.apply.apply(t,[t,n])}})})}function u(){H.each(["setTimeout","setInterval"],function(e){H.unwrap(t,e)})}function c(t){P&&H.wrap(!1,P.prototype,"addEventListener",function(e){return function(){var r,n=H.args.apply(this,arguments),a=n[1];return"function"==typeof a&&(r=o(a,t,!0)),r&&(n[1]=r),e.apply(this,n)}}),s(t)}function f(){P&&H.unwrap(P.prototype,"addEventListener"),u()}function p(t){return function(t,e){}}function l(){if(this.errors.length){var t=function(t){var e=[],r={};H.each(t,function(t){var e=_(t[1],t[2],t[3],t[6]);r[e]?r[e][4]+=1:r[e]=[t[1],t[2],t[3],"#"==t[4]?R.URL:t[4],1,t[5],t[6],t[7]]});for(var n in r)e.push(r[n]);return e}(this.errors),e=this;H.POST(H.mkurl(A.server.beacon,"err",{fu:C?C:C++,os:parseInt((n()-(N||A.st))/1e3)}),H.stringify({datas:t}),{},function(t,r){t||(e.errors=[])})}}function d(){U.initend()}function h(){"complete"===R.readyState&&U.initend()}function m(t){function e(){U.send()}return A.load_time?!0:(U.initend(),A.load_time=n(),void(9===t?e():setTimeout(e,0)))}function y(){X||m(9),H.bind(l,U)(),X=1}function v(){U.touch||(U.touch=n())}function g(t){if(t[6]){var e=t[4],r=t[5];if(r&&"string"==typeof r&&e){r=r.split(/\n/);var n=O.exec(r[0]);n||(n=O.exec(r[1])),n&&n[1]!=e&&(t[4]=n[1]||e,t[2]=n[2]||t[2],t[3]=n[3]||t[3])}}}function _(t,e,r,n){return t+e+r+(n?n:"")}function w(e){var r=arguments,a="unknown",i=[n()];if(0!=r.length){if("string"==typeof e){var o=r.length<4?r.length:4;i[1]=r[0],o>2&&(i[2]=r[2],i[3]=0,i[4]=r[1]),o>3&&r[3]&&(i[3]=r[3])}else if(e instanceof Event||t.ErrorEvent&&e instanceof ErrorEvent){if(i[1]=e.message||(e.error&&e.error.constructor.name)+(e.error&&e.error.message)||"",i[2]=e.lineno?e.lineno:0,i[3]=e.colno?e.colno:0,i[4]=e.filename||e.error&&e.error.fileName||e.target&&e.target.baseURI||"",i[4]==R.URL&&(i[4]="#"),e.error){i[5]=e.error.stack,i[6]=e.error.moduleName;var s=_(i[1],i[2],i[3],i[6]);i[7]=j[s]?0:1,j[s]=!0}else i[5]=null,i[6]=null,i[7]=0;if(i[1]===a&&i[4]===a)return;g(i)}U.errors.push(i)}}function S(t,e,r){for(var n="o."+e+"(",a=0;a<r.length;a++)n+=(a>0?",":"")+"a["+a+"]";return n+=");",new Function(n)()}function T(t){return function(){var e=arguments;if(!this._ty_wrap){var r=H.args.apply(this,e);this._ty_rum={method:r[0],url:r[1],start:n()}}try{return t.apply(this,e)}catch(a){return this.open=t,S(this,"open",e)}}}function b(e){return"string"==typeof e?e.length:t.ArrayBuffer&&e instanceof ArrayBuffer?e.byteLength:t.Blob&&e instanceof Blob?e.size:e&&e.length?e.length:0}function E(e){return function(){function r(t){var e,r,a=l._ty_rum;if(a){if(4!==a.readyState&&(a.end=n()),a.s=l.status,""==l.responseType||"text"==l.responseType)a.res=b(l.responseText);else if(l.response)a.res=b(l.response);else try{a.res=b(l.responseText)}catch(i){a.res=0}if(a.readyState=l.readyState,a.cb_time=d,e=[a.method+" "+a.url,a.s>0?a.end-a.start:0,d,a.s,a.s>0?0:t,a.res,a.req],a.r&&(r=o(l),r&&(r=r.xData)&&(e.push(r.id),e.push(r.action),e.push(r.time&&r.time.duration),e.push(r.time&&r.time.qu))),A.aa.push(e),A.server.custom_urls&&A.server.custom_urls.length&&!U.ct){if(!A.pattern){A.pattern=[];for(var s=0;s<A.server.custom_urls.length;s++)A.pattern.push(new RegExp(A.server.custom_urls[s]))}for(var s=0;s<A.pattern.length;s++)if(a.url.match(A.pattern[s])){U.ct=a.end+d;break}}U.sa(),l._ty_rum=null}}function a(){4==l.readyState&&r(0)}function o(e){var r;if(e.getResponseHeader){var n=H.parseJSON(e.getResponseHeader("X-Tingyun-Tx-Data"));n&&n.r&&e._ty_rum&&n.r+""==e._ty_rum.r+""&&(r={name:e._ty_rum.url,xData:n},F&&t._ty_rum.c_ra.push(r))}return r}function c(t){return function(){var e,r;4==l.readyState&&l._ty_rum&&(l._ty_rum.end=e=n(),l._ty_rum.readyState=4);try{k&&s(k),r=t.apply(this,arguments),k&&u()}catch(o){throw o=i(o,k),k&&u(),k=null,o}return 4==l.readyState&&(d=n()-e),a(),r}}function f(t){return function(){var e=l._ty_rum;return e?"progress"==t?!0:("abort"==t?r(905):"loadstart"==t?e.start=n():"error"==t?r(990):"timeout"==t&&r(903),!0):!0}}function p(t,e){e instanceof Array||(e=[e]);for(var r=0;r<e.length;r++){var n=e[r];H.sh(t,n,f(n),!1)}}if(!this._ty_wrap){this._ty_rum.start=n(),this._ty_rum.req=arguments[0]?b(arguments[0]):0;var l=this,d=0,h=H.wrap(!1,this,"onreadystatechange",c);h||H.sh(this,"readystatechange",a,!1),p(this,["error","progress","abort","load","loadstart","loadend","timeout"]),h||setTimeout(function(){H.wrap(!1,l,"onreadystatechange",c)},0)}var m=function(){function t(t){var e={},r=/^(?:([A-Za-z]+):)?(\/{0,3})([0-9.\-A-Za-z]+)(?::(\d+))?/.exec(t);return r&&(e.protocol=r[1]?r[1]+":":"http:",e.hostname=r[3],e.port=r[4]||""),e}return function(e){var r=location;if(e=H.trim(e)){if(e=e.toLowerCase(),e.startsWith("//")&&(e=r.protocol+e),!e.startsWith("http"))return!0;var n=t(e),a=n.protocol===r.protocol&&n.hostname===r.hostname;return a&&(a=n.port===r.port?!0:!r.port&&("http:"===r.protocol&&"80"===n.port||"https:"===r.protocol&&"443"===n.port)),a}return!1}}(),y=arguments;try{try{var v=A.server;v&&v.id&&this._ty_rum&&m(this._ty_rum.url)&&(this._ty_rum.r=(new Date).getTime()%1e8,this.setRequestHeader&&this.setRequestHeader("X-Tingyun-Id",v.id+";r="+this._ty_rum.r))}catch(g){}return e.apply(this,y)}catch(g){return this.send=e,S(this,"send",y)}}}var k,x=t.XMLHttpRequest,R=document,L=Object.defineProperty,q=t.define,P=t.EventTarget,C=0,O=new RegExp("([a-z]+:/{2,3}.*):(\\d+):(\\d+)"),B=t.encodeURIComponent,N=null,A=t._ty_rum={st:n(),ra:[],c_ra:[],aa:[],snd_du:function(){return this.server.adu?1e3*this.server.adu:1e4},cc:function(){return this.server.ac?this.server.ac:10}};var ty_rum=A;ty_rum.server = {id:'b7zdQ4sD_p0',beacon:'beacon.tingyun.com',beacon_err:'beacon-err.tingyun.com',key:'oL9TaVKfH4E',trace_threshold:7000,custom_urls:[],sr:1.0};if(A.server&&!(A.server.sr&&Math.random()>=A.server.sr)){var D=String.prototype.trim;String.prototype.startsWith||(String.prototype.startsWith=function(t,e){return e=e||0,this.indexOf(t,e)===e});var I=/^http/i,M=function(){function t(){return(65536*(1+Math.random())|0).toString(16).substring(1)}return t()+"-"+t()+t()}(),H={wrap:function(t,e,r,n,a){try{var i=e[r]}catch(o){if(!t)return!1}if(!i&&!t)return!1;if(i&&i._ty_wrap)return!1;try{e[r]=n(i,a)}catch(o){return!1}return e[r]._ty_wrap=[i],!0},unwrap:function(t,e){try{var r=t[e]._ty_wrap;r&&(t[e]=r[0])}catch(n){}},each:function(t,e){if(t){var r;for(r=0;r<t.length&&(!t[r]||!e(t[r],r,t));r+=1);}},mkurl:function(t,e){var a=arguments,i=/^https/i.test(R.URL)?"https":"http";if(i=i+"://"+t+"/"+e+"?av=1.0.0&v=1.3.2&key="+r(A.server.key)+"&ref="+r(R.URL)+"&rand="+n()+"&pvid="+M,"pf"!==e&&A&&A.agent&&A.agent.n&&(i+="&n="+r(A.agent.n)),a.length>2){var o=a[2];for(var s in o)i+="&"+s+"="+o[s]}return i},GET:function(t,e){function r(){e&&e.apply(this,arguments),n.parentNode&&n.parentNode.removeChild(n)}if(navigator&&navigator.sendBeacon&&I.test(t))return navigator.sendBeacon(t,null);var n=R.createElement("img");return n.setAttribute("src",t),n.setAttribute("style","display:none"),this.sh(n,"readystatechange",function(){("loaded"==n.readyState||4==n.readyState)&&r("loaded")},!1),this.sh(n,"load",function(){return r("load"),!0},!1),this.sh(n,"error",function(){return r("error"),!0},!1),R.body.appendChild(n)},fpt:function(t,e,r){function n(t,e,r){var n=R.createElement(t);try{for(var a in e)n[a]=e[a]}catch(i){var o="<"+t;for(var a in e)o+=" "+a+'="'+e[a]+'"';o+=">",r||(o+="</"+t+">"),n=R.createElement(o)}return n}var a=n("div",{style:"display:none"},!1),i=n("iframe",{name:"_ty_rum_frm",width:0,height:0,style:"display:none"},!1),o=n("form",{style:"display:none",action:t,enctype:"application/x-www-form-urlencoded",method:"post",target:"_ty_rum_frm"},!1),s=n("input",{name:"data",type:"hidden"},!0);return s.value=e,o.appendChild(s),a.appendChild(i),a.appendChild(o),R.body.appendChild(a),o.submit(),i.onreadystatechange=function(){("complete"===i.readyState||4===i.readyState)&&(r(null,i.innerHTML),R.body.removeChild(a))},!0},POST:function(e,r,n,a){if(this.ie)return this.fpt(e,r,a);if(navigator&&navigator.sendBeacon&&I.test(e)){var i=navigator.sendBeacon(e,r);return a(!i),i}var o;if(t.XDomainRequest)return o=new XDomainRequest,o.open("POST",e),o.onload=function(){a(null,o.responseText)},this.sh(o,"load",function(){a(null,o.responseText)},!1),this.sh(o,"error",function(){a("POST("+e+")error")},!1),this.wrap(!0,o,"onerror",function(t){return function(){return a&&a("post error",o.responseText),!0}}),o.send(r),!0;if(!x)return!1;o=new x,o.overrideMimeType&&o.overrideMimeType("text/html");try{o._ty_wrap=1}catch(s){}var u=0;o.onreadystatechange=function(){4==o.readyState&&200==o.status&&(0==u&&a(null,o.responseText),u++)},o.onerror&&this.wrap(!0,o,"onerror",function(t){return function(){return a("post error",o.responseText),"function"==typeof t?t.apply(this,arguments):!0}});try{o.open("POST",e,!0)}catch(s){return this.fpt(e,r,a)}for(var c in n)o.setRequestHeader(c,n[c]);return o.send(r),!0},sh:function(t,e,r,n){return t.addEventListener?t.addEventListener(e,r,n):t.attachEvent?t.attachEvent("on"+e,r):!1},args:function(){for(var t=[],e=0;e<arguments.length;e++)t.push(arguments[e]);return t},stringify:e,parseJSON:function(e){if(e&&"string"==typeof e){var r=t.JSON?t.JSON.parse:function(t){return new Function("return "+t)()};return r(e)}return null},trim:D?function(t){return null==t?"":D.call(t)}:function(t){return null==t?"":t.toString().replace(/^\s+/,"").replace(/\s+$/,"")},extend:function(t,e){if(t&&e)for(var r in e)e.hasOwnProperty(r)&&(t[r]=e[r]);return t},bind:function(t,e){return function(){t.apply(e,arguments)}}};try{L&&L(t,"define",{get:function(){return q},set:function(t){"function"==typeof t&&(t.amd||t.cmd)?(q=function(){var e=H.args.apply(this,arguments);if(3!==e.length)return t.apply(this,e);var r="string"==typeof e[0]?e[0]:"anonymous";return t.apply(this,a(e,function(t,e,r){var n;try{k=r,c(r),n=t.apply(this,e),f()}catch(a){throw f(),i(a,r)}return n},r))},H.extend(q,t)):q=t},configurable:!0})}catch($){}var F=t.performance?t.performance:t.Performance;F&&(H.sh(F,"resourcetimingbufferfull",function(){var t=F.getEntriesByType("resource");t&&(A.ra=A.ra.concat(t),F.clearResourceTimings())},!1),H.sh(F,"webkitresourcetimingbufferfull",function(){var t=F.getEntriesByType("resource");t&&(A.ra=A.ra.concat(t),F.webkitClearResourceTimings())},!1));for(var U=A.metric={ready:function(){return A.load_time},initend:function(){function t(){U.sa()}A.end_time||(A.end_time=n(),this._h=setInterval(t,2e3))},send:function(){function e(){function e(t){return a[t]>0?a[t]-o:0}var n={};if(F&&F.timing){var a=F.timing;o=a.navigationStart;var i=e("domainLookupStart"),s=e("domainLookupEnd"),u=e("redirectStart"),c=e("redirectEnd"),f=e("connectStart"),p=e("connectEnd");n={f:e("fetchStart"),qs:e("requestStart"),rs:e("responseStart"),re:e("responseEnd"),os:e("domContentLoadedEventStart"),oe:e("domContentLoadedEventEnd"),oi:e("domInteractive"),oc:e("domComplete"),ls:e("loadEventStart"),le:e("loadEventEnd")},p-f>0&&(n.cs=f,n.ce=p),s-i>0&&(n.ds=i,n.de=s),(c-u>0||c>0)&&(n.es=u,n.ee=c),0==n.le&&(n.ue=A.load_time-o);var l;if(a.msFirstPaint)l=a.msFirstPaint;else if(t.chrome&&chrome.loadTimes){var d=chrome.loadTimes();d&&d.firstPaintTime&&(l=1e3*d.firstPaintTime)}else A.firstPaint&&(l=A.firstPaint);l&&(n.fp=Math.round(l-o)),a.secureConnectionStart&&(n.sl=e("secureConnectionStart"))}else n={t:o,os:A.end_time-o,ls:A.load_time-o};n.je=U.errors.length,U.ct&&(n.ct=U.ct-o),U.touch&&(n.fi=U.touch-o);var h=A.agent;return h&&(n.id=r(h.id),n.a=h.a,n.q=h.q,n.tid=r(h.tid),n.n=r(h.n)),n.sh=t.screen&&t.screen.height,n.sw=t.screen&&t.screen.width,n}function a(e){var r=t._ty_rum.c_ra;if(e)for(var n=r.length-1;n>=0;n--)if(e.indexOf(r[n].name)>-1)return r[n].xData;return null}function i(t){function e(t){return f[t]>0?f[t]:0}if(t<A.server.trace_threshold)return null;var n=F;if(n&&n.getEntriesByType){var i={tr:!0,tt:r(R.title),charset:R.characterSet},s=A.ra,u=n.getEntriesByType("resource");u&&(s=s.concat(u),n.webkitClearResourceTimings&&n.webkitClearResourceTimings(),n.clearResourceTimings&&n.clearResourceTimings()),i.res=[];for(var c=0;c<s.length;c++){var f=s[c],p={o:e("startTime"),rt:f.initiatorType,n:f.name,f:e("fetchStart"),ds:e("domainLookupStart"),de:e("domainLookupEnd"),cs:e("connectStart"),ce:e("connectEnd"),sl:e("secureConnectionStart"),qs:e("requestStart"),rs:e("responseStart"),re:e("responseEnd")},l=a(f.name);l&&(p.aid=l.id,p.atd=l.trId,p.an=l.action,p.aq=l.time&&l.time.qu,p.as=l.time&&l.time.duration),i.res.push(p)}if(U.errors.length){i.err=[];for(var c=0,d=U.errors,h=d.length;h>c;c++)i.err.push({o:Math.round(d[c][0]-o),e:d[c][1],l:d[c][2],c:d[c][3],r:d[c][4],ec:h,s:d[c][5],m:d[c][6],ep:d[c][7]})}return i}return null}if(this.sended)return!1;if(!this.ready())return!1;var o=A.st,s={};try{pf=e(),s=i(pf.ls>0?pf.ls:A.load_time-o)}catch(u){}s=s?H.stringify(s):"";var c=H.mkurl(A.server.beacon,"pf",pf);N=n(),0!=s.length&&H.POST(c,s,{},p("POST"))||H.GET(c);var f=H.bind(l,this);return f(),setInterval(f,1e4),this.sended=!0,this.sa(1),!0},sa:function(t){(this.ready()||t)&&(t||(t=!this._last_send||n()-this._last_send>A.snd_du()||A.aa.length>=A.cc()),A.aa.length>0&&t&&(this._last_send=n(),H.POST(H.mkurl(A.server.beacon,"xhr"),H.stringify({xhr:A.aa}),{},p("POST")),A.aa=[]))},errors:[]},X=null,j={},z=[["load",m],["beforeunload",y],["pagehide",y],["unload",y]],J=0;J<z.length;J++)H.sh(t,z[J][0],z[J][1],!1);t.addEventListener?H.sh(t,"error",w,!1):t.onerror=function(t,e,r,n,a){var i=[t,r,n,e==R.URL?"#":e];if(a){var o=_(t,r,n,a.moduleName);i=i.concat([1,a.stack,a.moduleName,j[o]?0:1]),j[o]=!0}g(i),U.errors.push(i)};for(var W=[["scroll",v],["keypress",v],["click",v],["DOMContentLoaded",d],["readystatechange",h]],J=0;J<W.length;J++)H.sh(R,W[J][0],W[J][1],!1);if(H.wrap(!1,t,"requestAnimationFrame",function(e){return function(){return A.firstPaint=n(),t.requestAnimationFrame=e,e.apply(this,arguments)}}),x)if(x.prototype)H.wrap(!1,x.prototype,"open",T),H.wrap(!1,x.prototype,"send",E);else{H.ie=7;var G=x;t.XMLHttpRequest=function(){var t=new G;return H.wrap(!1,t,"open",T),H.wrap(!1,t,"send",E),t}}else t.ActiveXObject&&(H.ie=6);}}(window);</script>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    	<meta property="qc:admins" content="56207406376255516375" />
    	<title>购物车 - 聚美优品</title>
		<link rel="dns-prefetch" href="http://f0.jmstatic.com">
    	<link rel="dns-prefetch" href="http://f1.jmstatic.com/">
    	<link rel="dns-prefetch" href="http://f2.jmstatic.com/">
    	<link rel="dns-prefetch" href="http://f3.jmstatic.com/">
    	<link rel="dns-prefetch" href="http://f4.jmstatic.com/">
    	<link rel="dns-prefetch" href="http://f5.jmstatic.com/">
		<script type="text/javascript">
  		// ie8以下不支持console.log等方法，ie8-9需打开开发者工具才支持，都会报错导致js crash
  		// 以下代码修复这个问题
		(function() {
		    var method;
		    var noop = function () {};
		    var methods = [
		        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
		        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
		        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
		        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
		      ];
		    var length = methods.length;
		    var console = (window.console = window.console || {});
			while (length--) {
		        method = methods[length];
				// Only stub undefined methods.
		        if (!console[method]) {
		            console[method] = noop;
		        }
		    }
		}());
		</script>
		<script type="text/javascript">
		with(window) {
			RM_SITE_MAIN_WEBBASEURL='http://www.jumei.com/';
			RM_SITE_MAIN_TOPLEVELDOMAINNAME='jumei.com';
			RM_SERVER_TIME=1492393507;
			RM_IMGDIR='http://p0.jmstatic.com/templates/jumei/images';
			RM_SITE_MAIN_PASSPORTURL='http://passport.jumei.com/';
			RM_SITE_MAIN_ORDERLISTURL='http://i.jumei.com/';
			RM_SITE='bj';
			RM_CURRENT_SITE_MAIN_WEBBASEURL='http://bj.jumei.com';
			RM_RECOMMEND_GLOBAL_SITE_DOMAIN='www.jumeiglobal.com';
			RM_RECOMMEND_MEDIA_SITE_DOMAIN='www.jumei.com';
			RM_RECOMMEND_PRODUCT_SITE_DOMAIN='www.jumei.com';
			RM_CURRENT_SITE_DOMAIN='cart.jumei.com';
			RM_GLOBAL_CART_SITE_DOMAIN='cart.jumeiglobal.com';
			RM_JUMEI_CART_SITE_DOMAIN='cart.jumei.com';
			RM_CONTROL='Cart';
			RM_ACTION='show';
		    RM_CLIENT_TIME = parseInt((new Date()).getTime() / 1000);
		    GA_ACCOUNT = "UA-10208510-1";
		}
		var screen_wide = document.documentElement.clientWidth > 1200 ? true : false ;
		function getCookie(name)
		{
		    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
		    if(arr=document.cookie.match(reg))
		        return (arr[2]);
		    else
		        return null;
		}
		RM_UID = getCookie('uid');
		RM_NICKNAME = null;
		if ( getCookie('nickname') != null ){
		    RM_NICKNAME = decodeURIComponent(getCookie('nickname'));
		}
		var is_semwinner = false;

		window._gaq = window._gaq || [];
		_gaq.push(['_setAccount', GA_ACCOUNT]);
		_gaq.push(['_addOrganic', 'baidu', 'wd']);
		_gaq.push(['_addOrganic', 'image.baidu', 'word']);
		_gaq.push(['_addOrganic', 'soso', 'w']);
		_gaq.push(['_addOrganic', 'vnet', 'kw']);
		_gaq.push(['_addOrganic', 'sogou', 'query']);
		_gaq.push(['_addOrganic', 'youdao', 'q']);
		_gaq.push(['_addIgnoredOrganic', 'jumei.com']);
		_gaq.push(['_addIgnoredOrganic', 'www.jumei.com']);
		_gaq.push(['_addIgnoredOrganic', 'jumei']);
		_gaq.push(['_addIgnoredOrganic', '聚美']);
		_gaq.push(['_addIgnoredOrganic', '聚美优品']);
		_gaq.push(['_addIgnoredOrganic', 'tuanmei.net']);
		_gaq.push(['_addIgnoredOrganic', 'www.tuanmei.net']);
		_gaq.push(['_addIgnoredOrganic', 'tuanmei']);
		_gaq.push(['_addIgnoredOrganic', '团美']);
		_gaq.push(['_addIgnoredRef', 'jumei']);
		_gaq.push(['_addIgnoredRef', 'tuanmei']);
		_gaq.push(['_setDomainName', '.jumei.com']);
		_gaq.push(['_setAllowHash', false]);
		_gaq.push(['_trackPageview']);
		</script>
		<!--<script type="text/javascript" charset="utf-8" src="--><!--"></script>-->
		<!--<script type="text/javascript" charset="utf-8" src="--><!--"></script>-->
		</head>
		<body>
		<style type="text/css">
		.cart_header{
		    width: 960px;
		    margin: 0 auto;
		}
		.cart_header_box{
		    border-bottom: 2px solid #e5e5e5;
		    box-shadow: 0px 1px 2px rgba(0,0,0,0.1);
		    padding-bottom: 15px;
		}
		.cart_header .logo_box{
		    float: left;
		}
		.cart_header .order_path{
		    float: right;
		    width: 377px;
		    height: 48px;
		}
		.cart_header .order_path_1{
		    background: url(shopping/images/order_path.png) no-repeat;
		    background-position: -2px -2px;
		}
		.cart_header .order_path_2{
		    background: url(shopping/images/order_path.png) no-repeat;
		    background-position: -2px -54px;
		}
		.cart_header .order_path_3{
		    background: url(shopping/images/order_path.png) no-repeat;
		    background-position: -2px -106px;
		}
		.cart_header .order_path_4{
		    background: url(shopping/images/order_path.png) no-repeat;
		    background-position: -2px -158px;
		}
		.cart_top{
		    position: relative;
		    height: 32px;
		    line-height: 32px;
		    color: #999999;
		    width: 960px;
		    margin: 0 auto;
		}
		.cart_top .user_box{
		    position: absolute;
		    right: 0;
		    top: 0;
		}
		.cart_top .user_box .tips{
		    font-style: normal;
		    color: #dddddd;
		    padding: 0 5px;
		}
		.cart_top .user_box .out,.cart_top .user_box .query{
		    color: #999999;
		}
		.cart_top .user_box a:hover{text-decoration: none;color: #ed145b;}
		</style>

		<div style="background: white;">
			@if(session('adminuser')['name'])
    			<div class="cart_top">
        			<div class="user_box" id="JS_user_box">
        				<div>聚美优品欢迎您，<a href="{{ asset('home/shopcart') }}">{{ session('adminuser')['name'] }}</a>
        					<i class="tips">|</i>
        					<a href="{{ asset('home/over') }}">退出</a>
        				</div>
        			</div>
    			</div>
    		@else
    			<div class="cart_top">
        			<div class="user_box" id="JS_user_box">
        				<div>聚美优品欢迎您，<a href="{{ asset('home/login/index') }}">登录</a>
        					<i class="tips">|</i>
        					<a href="">免费注册</a>
        				</div>
        			</div>
    			</div>
   			@endif
    		<div class="cart_header_box">
        		<div class="cart_header clearfix">
            		<h1 class="logo_box">
               		 	<a href="/home/index" target="_blank" id="home">
                    		<img src="shopping/picture/cart_logo.jpg" alt="化妆品团购">
                		</a>
            		</h1>
       			 </div>
    		</div>
		</div>

		<script type="text/javascript">
		(function () {
    		var html = '';
    		if (RM_NICKNAME !== null) {
        		html = '<div>欢迎您，<a href="'+RM_SITE_MAIN_ORDERLISTURL+'/i/order/list">'+RM_NICKNAME+'</a>&nbsp;<a href="'+RM_SITE_MAIN_PASSPORTURL+'i/account/logout" class="out">[退出]</a><i class="tips">|</i><a href="'+RM_SITE_MAIN_ORDERLISTURL+'/i/order/list" class="query">订单查询</a></div>';
        		document.getElementById('JS_user_box').innerHTML = html;
    		}
		})()
		</script>
		<div id="container" style="width: auto;">
		<script type="text/javascript">
			window.GLOBAL =  {
        		"initData" : {"etime":0,"total_amount":0,"quantity":0,"isEmpty":true,"confirm_version":0,"back_to_shopping":"http:\/\/bj.jumei.com","SiteGlobal":{"WebDomainName":"www.jumeiglobal.com","WebBaseURL":"http:\/\/www.jumeiglobal.com\/","ItemWebURL":"http:\/\/item.jumeiglobal.com\/"},"error_msg":"","item_limit":10,"recommend":true,"marketPriceShow":true}}
		</script>
		<link rel="stylesheet" href="shopping/css/show.css"/>
		<script type="text/javascript" src="shopping/js/website.min.js"></script><!--http://f0.jmstatic.com/static_lib/dist/20141111/website.min.js-->
		<script type="text/javascript" src=""></script>
		<script type="text/javascript">
		//    seajs.use("views/show/index", function(Index){
		//        var index = Index.init({
		//            data : GLOBAL.initData,
		//            container : $("#container")
		//        });
		//    });
		</script>

		<form action="/home/shopcart" method='post' name='myform' id='form1'>
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
		</form>
		<form action='/home/shopcart/createorder' method='post' id='form2'>
			{{ csrf_field() }}
			<div class="catbox">
				<h1 style="font-size:25px;">购物车</h1>
				<table id="cartTable">
					<thead style="text-align:center;height:60px;">
			  			<tr>
					    	<th>
					    		<label><input class="check-all check" type="checkbox"/>&nbsp;&nbsp;全选</label>
					    	</th>
					    	<th>商品</th>
					    	<th>单价</th>
					    	<th>数量</th>
					    	<th>小计</th>
					    	<th>操作</th>
			  			</tr>
					</thead>
					<tbody>
					@if($list)
						@foreach ($list as $v)
					  		<tr>
						    	<td class="checkbox">
						    		<input class="check-one check" type="checkbox" name="check[]" value="{{ $v->id }}"/>
						    	</td>
						    	<td class="goods">
						    		<img src="/Admin/upload/{{ $v->pic }}" alt=""/>
						    		<span>{{ $v->pname}}</span>
						    	</td>
						    	<td class="price">
						    		{{ $v->money }}
						    	</td>
						    	<td class="count"><span class="reduce"></span>
						      		<input class="count-input" type="text" value="{{ $v->pnum }}"/>
						      		<span class="add">+</span></td>
						    	<td class="subtotal">{{ $v->money * $v->pnum  }}</td>
						    	<td class="operation">
									<input type="hidden" name="product-id" value="{{ $v->id }}"/>
						    		<input type="hidden" name="pid[{{ $v->id }}]" value="{{ $v->pid }}"/>
						    		<input type="hidden" name="money[{{ $v->id }}]" value="{{ $v->money }}"/>
						    		<input type="hidden" name="pnum[{{ $v->id }}]" value="{{ $v->pnum }}"/>
						    		<a href="javascript:doDel({{ $v->id }})" data-point-url="#" class="delete">删除</a>
						    	</td>
						  	</tr>
						@endforeach
					@else
					@endif
					</tbody>
					<script type="text/javascript">
					    function doDel(id){
					     	if(confirm('确定删除吗？')){
					         	var form = document.myform;
					         	form.action = '/home/shopcart/'+id;
					         	form.submit();
					     	}
					  	}
					</script>
				</table>
				<div class="foot" id="foot">
					<label class="fl select-all"><input type="checkbox" class="check-all check"/>&nbsp;&nbsp;全选</label>
						<a class="fl delete" id="deleteAll" href="javascript:;">删除</a>
						@if(session('adminuser')['name'])
							<a id="js" href="javascript:;void()"></a>
							<div class="fr closing" onclick="getTotal();">
								<input type='submit' value='结算'/>
							</div>
						@else
							<div class="fr closing" onclick="getTotal();">
								<a href="{{ asset('/home/login/index')}}">结 算</a>
							</div>
						@endif
					<div class="fr closing" onclick="getTotal();">
						<a href="{{ asset('/home/index')}}">继续购物</a>
					</div>
					<input type="hidden" id="cartTotalPrice" />
					<div class="fr total">合计：￥<span id="priceTotal">0.00</span></div>
					<div class="fr selected" id="selected">已选商品
						<span id="selectedTotal">0</span>件<span class="arrow up"></span>
						<span class="arrow down">︾</span>
					</div>
					<div class="selected-view">
				  		<div id="selectedViewList" class="clearfix">
				    		<div>
				    			<img src="/Home/shopping/images1/1.jpg"><span>取消选择</span>
				    		</div>
				    	</div>
				  		<span class="arrow">◆<span>◆</span></span>
				  	</div>
				</div>
			</div>
		</form>

		<!--操作页面-->
		<div id="footer_container">
			<div id="footer_textarea">
			    <div class="footer_con" id="footer_copyright">
			        <p class="footer_copy_con">
			            &copy; 2013 北京创锐文化传媒有限公司 Jumei.com 保留一切权利。客服热线：400-123-8888 <br/>
			            京公网安备 11010102001226 | <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow">京ICP证111033号</a> | 食品流通许可证 SP1101051110165515（1-1）
			            | <a href="http://p2.jmstatic.com/activity/2013_chuangrui.jpeg" target="_blank">营业执照</a>
			        </p>
			        <p>
			            <a href="javascript:void(0)" class="footer_copy_logo logo01"></a>
			            <a href="https://www.itrust.org.cn/yz/pjwx.asp?wm=1693268180" target="_blank" class="footer_copy_logo logo02"></a>
			            <a href="javascript:void(0)" class="footer_copy_logo logo03"></a>
			            <a href="javascript:void(0)" class="footer_copy_logo logo04"></a>
			            <a href="https://ss.cnnic.cn/verifyseal.dll?sn=e12070911010031011307708&ct=df&pa=453163" target="_blank" class="footer_copy_logo logo05"></a>
			        </p>
			        <script>function change_urlknet(eleId){var str= document.getElementById(eleId).href;var str1 =str.substring(0,(str.length-6));str1+=RndNum(6);document.getElementById(eleId).href=str1;}function RndNum(k){var rnd="";for (var i=0;i<k;i++){rnd+=Math.floor(Math.random()*10);}return rnd;}</script>
			    </div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		 //ga
		(function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = 'http://s0.jmstatic.com/templates/jumei/js/jquery/dc.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

		})();
		//baidu tongji
		(function() {
		    var baidu_tongji = document.createElement('script'); baidu_tongji.type = 'text/javascript';
		    baidu_tongji.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'hm.baidu.com/h.js?884477732c15fb2f2416fb892282394b';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(baidu_tongji, s);
		})();
	</script>
	<script>
		var token = "{{csrf_token() }}";
	</script>
		<!--[if IE 6]>
		<script type="text/javascript" src="js/dd_belated-min.js" ></script>

		<script type="text/javascript">
		    DD_belatedPNG.fix('.pop_banner_box a span.corn, .pop_box, .png');
		</script>
		<![endif]-->
	</body>
</html>
