!function(t){var n={};function r(e){if(n[e])return n[e].exports;var o=n[e]={i:e,l:!1,exports:{}};return t[e].call(o.exports,o,o.exports,r),o.l=!0,o.exports}r.m=t,r.c=n,r.d=function(t,n,e){r.o(t,n)||Object.defineProperty(t,n,{enumerable:!0,get:e})},r.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},r.t=function(t,n){if(1&n&&(t=r(t)),8&n)return t;if(4&n&&"object"==typeof t&&t&&t.__esModule)return t;var e=Object.create(null);if(r.r(e),Object.defineProperty(e,"default",{enumerable:!0,value:t}),2&n&&"string"!=typeof t)for(var o in t)r.d(e,o,function(n){return t[n]}.bind(null,o));return e},r.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(n,"a",n),n},r.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},r.p="/js/",r(r.s=575)}({1:function(t,n){t.exports=function(t){try{return!!t()}catch(t){return!0}}},102:function(t,n,r){"use strict";var e={}.propertyIsEnumerable,o=Object.getOwnPropertyDescriptor,i=o&&!e.call({1:2},1);n.f=i?function(t){var n=o(this,t);return!!n&&n.enumerable}:e},103:function(t,n,r){var e=r(104);t.exports=function(t,n){var r=t[n];return null==r?void 0:e(r)}},104:function(t,n,r){var e=r(2),o=r(166);t.exports=function(t){if(e(t))return t;throw TypeError(o(t)+" is not a function")}},105:function(t,n,r){var e=r(12),o=r(42),i=r(172).indexOf,u=r(60);t.exports=function(t,n){var r,c=o(t),a=0,f=[];for(r in c)!e(u,r)&&e(c,r)&&f.push(r);for(;n.length>a;)e(c,r=n[a++])&&(~i(f,r)||f.push(r));return f}},106:function(t,n,r){var e=r(40),o=Math.min;t.exports=function(t){return t>0?o(e(t),9007199254740991):0}},107:function(t,n){n.f=Object.getOwnPropertySymbols},108:function(t,n,r){var e=r(175);t.exports=function(t,n){return new(e(t))(0===n?0:n)}},12:function(t,n,r){var e=r(26),o={}.hasOwnProperty;t.exports=Object.hasOwn||function(t,n){return o.call(e(t),n)}},14:function(t,n,r){var e=r(17);t.exports=function(t){if(e(t))return t;throw TypeError(String(t)+" is not an object")}},15:function(t,n,r){"use strict";r(225),Object.defineProperty(n,"__esModule",{value:!0}),n.loadState=function(t,n,r){var e=document.querySelector("#initial-state-".concat(t,"-").concat(n));if(null===e){if(void 0!==r)return r;throw new Error("Could not find initial state ".concat(n," of ").concat(t))}try{return JSON.parse(atob(e.value))}catch(r){throw new Error("Could not parse initial state ".concat(n," of ").concat(t))}}},164:function(t,n,r){var e=r(17),o=r(90),i=r(103),u=r(167),c=r(5)("toPrimitive");t.exports=function(t,n){if(!e(t)||o(t))return t;var r,a=i(t,c);if(a){if(void 0===n&&(n="default"),r=a.call(t,n),!e(r)||o(r))return r;throw TypeError("Can't convert object to primitive value")}return void 0===n&&(n="number"),u(t,n)}},165:function(t,n,r){var e=r(30);t.exports=e("navigator","userAgent")||""},166:function(t,n){t.exports=function(t){try{return String(t)}catch(t){return"Object"}}},167:function(t,n,r){var e=r(2),o=r(17);t.exports=function(t,n){var r,i;if("string"===n&&e(r=t.toString)&&!o(i=r.call(t)))return i;if(e(r=t.valueOf)&&!o(i=r.call(t)))return i;if("string"!==n&&e(r=t.toString)&&!o(i=r.call(t)))return i;throw TypeError("Can't convert object to primitive value")}},168:function(t,n,r){var e=r(3),o=r(2),i=r(55),u=e.WeakMap;t.exports=o(u)&&/native code/.test(i(u))},169:function(t,n,r){var e=r(12),o=r(170),i=r(89),u=r(28);t.exports=function(t,n){for(var r=o(n),c=u.f,a=i.f,f=0;f<r.length;f++){var s=r[f];e(t,s)||c(t,s,a(n,s))}}},17:function(t,n,r){var e=r(2);t.exports=function(t){return"object"==typeof t?null!==t:e(t)}},170:function(t,n,r){var e=r(30),o=r(171),i=r(107),u=r(14);t.exports=e("Reflect","ownKeys")||function(t){var n=o.f(u(t)),r=i.f;return r?n.concat(r(t)):n}},171:function(t,n,r){var e=r(105),o=r(64).concat("length","prototype");n.f=Object.getOwnPropertyNames||function(t){return e(t,o)}},172:function(t,n,r){var e=r(42),o=r(173),i=r(62),u=function(t){return function(n,r,u){var c,a=e(n),f=i(a),s=o(u,f);if(t&&r!=r){for(;f>s;)if((c=a[s++])!=c)return!0}else for(;f>s;s++)if((t||s in a)&&a[s]===r)return t||s||0;return!t&&-1}};t.exports={includes:u(!0),indexOf:u(!1)}},173:function(t,n,r){var e=r(40),o=Math.max,i=Math.min;t.exports=function(t,n){var r=e(t);return r<0?o(r+n,0):i(r,n)}},174:function(t,n,r){var e=r(1),o=r(2),i=/#|\.prototype\./,u=function(t,n){var r=a[c(t)];return r==s||r!=f&&(o(n)?e(n):!!n)},c=u.normalize=function(t){return String(t).replace(i,".").toLowerCase()},a=u.data={},f=u.NATIVE="N",s=u.POLYFILL="P";t.exports=u},175:function(t,n,r){var e=r(98),o=r(176),i=r(17),u=r(5)("species");t.exports=function(t){var n;return e(t)&&(n=t.constructor,(o(n)&&(n===Array||e(n.prototype))||i(n)&&null===(n=n[u]))&&(n=void 0)),void 0===n?Array:n}},176:function(t,n,r){var e=r(1),o=r(2),i=r(66),u=r(30),c=r(55),a=[],f=u("Reflect","construct"),s=/^\s*(?:class|function)\b/,l=s.exec,p=!s.exec((function(){})),v=function(t){if(!o(t))return!1;try{return f(Object,a,t),!0}catch(t){return!1}};t.exports=!f||e((function(){var t;return v(v.call)||!v(Object)||!v((function(){t=!0}))||t}))?function(t){if(!o(t))return!1;switch(i(t)){case"AsyncFunction":case"GeneratorFunction":case"AsyncGeneratorFunction":return!1}return p||!!l.call(s,c(t))}:v},18:function(t,n,r){var e=r(1);t.exports=!e((function(){return 7!=Object.defineProperty({},1,{get:function(){return 7}})[1]}))},2:function(t,n){t.exports=function(t){return"function"==typeof t}},225:function(t,n,r){"use strict";var e=r(37),o=r(1),i=r(98),u=r(17),c=r(26),a=r(62),f=r(226),s=r(108),l=r(227),p=r(5),v=r(61),y=p("isConcatSpreadable"),d=v>=51||!o((function(){var t=[];return t[y]=!1,t.concat()[0]!==t})),b=l("concat"),x=function(t){if(!u(t))return!1;var n=t[y];return void 0!==n?!!n:i(t)};e({target:"Array",proto:!0,forced:!d||!b},{concat:function(t){var n,r,e,o,i,u=c(this),l=s(u,0),p=0;for(n=-1,e=arguments.length;n<e;n++)if(x(i=-1===n?u:arguments[n])){if(p+(o=a(i))>9007199254740991)throw TypeError("Maximum allowed index exceeded");for(r=0;r<o;r++,p++)r in i&&f(l,p,i[r])}else{if(p>=9007199254740991)throw TypeError("Maximum allowed index exceeded");f(l,p++,i)}return l.length=p,l}})},226:function(t,n,r){"use strict";var e=r(57),o=r(28),i=r(45);t.exports=function(t,n,r){var u=e(n);u in t?o.f(t,u,i(0,r)):t[u]=r}},227:function(t,n,r){var e=r(1),o=r(5),i=r(61),u=o("species");t.exports=function(t){return i>=51||!e((function(){var n=[];return(n.constructor={})[u]=function(){return{foo:1}},1!==n[t](Boolean).foo}))}},26:function(t,n,r){var e=r(39);t.exports=function(t){return Object(e(t))}},27:function(t,n,r){var e=r(18),o=r(28),i=r(45);t.exports=e?function(t,n,r){return o.f(t,n,i(1,r))}:function(t,n,r){return t[n]=r,t}},28:function(t,n,r){var e=r(18),o=r(94),i=r(14),u=r(57),c=Object.defineProperty;n.f=e?c:function(t,n,r){if(i(t),n=u(n),i(r),o)try{return c(t,n,r)}catch(t){}if("get"in r||"set"in r)throw TypeError("Accessors not supported");return"value"in r&&(t[n]=r.value),t}},3:function(t,n,r){(function(n){var r=function(t){return t&&t.Math==Math&&t};t.exports=r("object"==typeof globalThis&&globalThis)||r("object"==typeof window&&window)||r("object"==typeof self&&self)||r("object"==typeof n&&n)||function(){return this}()||Function("return this")()}).call(this,r(6))},30:function(t,n,r){var e=r(3),o=r(2),i=function(t){return o(t)?t:void 0};t.exports=function(t,n){return arguments.length<2?i(e[t]):e[t]&&e[t][n]}},32:function(t,n,r){var e=r(3),o=r(2),i=r(12),u=r(27),c=r(54),a=r(55),f=r(75),s=r(83).CONFIGURABLE,l=f.get,p=f.enforce,v=String(String).split("String");(t.exports=function(t,n,r,a){var f,l=!!a&&!!a.unsafe,y=!!a&&!!a.enumerable,d=!!a&&!!a.noTargetGet,b=a&&void 0!==a.name?a.name:n;o(r)&&("Symbol("===String(b).slice(0,7)&&(b="["+String(b).replace(/^Symbol\(([^)]*)\)/,"$1")+"]"),(!i(r,"name")||s&&r.name!==b)&&u(r,"name",b),(f=p(r)).source||(f.source=v.join("string"==typeof b?b:""))),t!==e?(l?!d&&t[n]&&(y=!0):delete t[n],y?t[n]=r:u(t,n,r)):y?t[n]=r:c(n,r)})(Function.prototype,"toString",(function(){return o(this)&&l(this).source||a(this)}))},37:function(t,n,r){var e=r(3),o=r(89).f,i=r(27),u=r(32),c=r(54),a=r(169),f=r(174);t.exports=function(t,n){var r,s,l,p,v,y=t.target,d=t.global,b=t.stat;if(r=d?e:b?e[y]||c(y,{}):(e[y]||{}).prototype)for(s in n){if(p=n[s],l=t.noTargetGet?(v=o(r,s))&&v.value:r[s],!f(d?s:y+(b?".":"#")+s,t.forced)&&void 0!==l){if(typeof p==typeof l)continue;a(p,l)}(t.sham||l&&l.sham)&&i(p,"sham",!0),u(r,s,p,t)}}},38:function(t,n){var r={}.toString;t.exports=function(t){return r.call(t).slice(8,-1)}},39:function(t,n){t.exports=function(t){if(null==t)throw TypeError("Can't call method on "+t);return t}},40:function(t,n){var r=Math.ceil,e=Math.floor;t.exports=function(t){var n=+t;return n!=n||0===n?0:(n>0?e:r)(n)}},42:function(t,n,r){var e=r(63),o=r(39);t.exports=function(t){return e(o(t))}},45:function(t,n){t.exports=function(t,n){return{enumerable:!(1&t),configurable:!(2&t),writable:!(4&t),value:n}}},5:function(t,n,r){var e=r(3),o=r(59),i=r(12),u=r(93),c=r(92),a=r(91),f=o("wks"),s=e.Symbol,l=a?s:s&&s.withoutSetter||u;t.exports=function(t){return i(f,t)&&(c||"string"==typeof f[t])||(c&&i(s,t)?f[t]=s[t]:f[t]=l("Symbol."+t)),f[t]}},53:function(t,n,r){var e=r(3),o=r(54),i=e["__core-js_shared__"]||o("__core-js_shared__",{});t.exports=i},54:function(t,n,r){var e=r(3);t.exports=function(t,n){try{Object.defineProperty(e,t,{value:n,configurable:!0,writable:!0})}catch(r){e[t]=n}return n}},55:function(t,n,r){var e=r(2),o=r(53),i=Function.toString;e(o.inspectSource)||(o.inspectSource=function(t){return i.call(t)}),t.exports=o.inspectSource},57:function(t,n,r){var e=r(164),o=r(90);t.exports=function(t){var n=e(t,"string");return o(n)?n:String(n)}},575:function(t,n,r){"use strict";r.r(n);var e=r(15),o=!0===Object(e.loadState)("settings","has-reasons-use-nextcloud-pdf");window.addEventListener("DOMContentLoaded",(function(){var t=document.getElementById("open-reasons-use-nextcloud-pdf");t&&o&&t.addEventListener("click",(function(t){t.preventDefault(),OCA.Viewer.open({path:"/Reasons to use Nextcloud.pdf"})}))}))},59:function(t,n,r){var e=r(86),o=r(53);(t.exports=function(t,n){return o[t]||(o[t]=void 0!==n?n:{})})("versions",[]).push({version:"3.18.2",mode:e?"pure":"global",copyright:"© 2021 Denis Pushkarev (zloirock.ru)"})},6:function(t,n){var r;r=function(){return this}();try{r=r||new Function("return this")()}catch(t){"object"==typeof window&&(r=window)}t.exports=r},60:function(t,n){t.exports={}},61:function(t,n,r){var e,o,i=r(3),u=r(165),c=i.process,a=i.Deno,f=c&&c.versions||a&&a.version,s=f&&f.v8;s?o=(e=s.split("."))[0]<4?1:e[0]+e[1]:u&&(!(e=u.match(/Edge\/(\d+)/))||e[1]>=74)&&(e=u.match(/Chrome\/(\d+)/))&&(o=e[1]),t.exports=o&&+o},62:function(t,n,r){var e=r(106);t.exports=function(t){return e(t.length)}},63:function(t,n,r){var e=r(1),o=r(38),i="".split;t.exports=e((function(){return!Object("z").propertyIsEnumerable(0)}))?function(t){return"String"==o(t)?i.call(t,""):Object(t)}:Object},64:function(t,n){t.exports=["constructor","hasOwnProperty","isPrototypeOf","propertyIsEnumerable","toLocaleString","toString","valueOf"]},66:function(t,n,r){var e=r(73),o=r(2),i=r(38),u=r(5)("toStringTag"),c="Arguments"==i(function(){return arguments}());t.exports=e?i:function(t){var n,r,e;return void 0===t?"Undefined":null===t?"Null":"string"==typeof(r=function(t,n){try{return t[n]}catch(t){}}(n=Object(t),u))?r:c?i(n):"Object"==(e=i(n))&&o(n.callee)?"Arguments":e}},73:function(t,n,r){var e={};e[r(5)("toStringTag")]="z",t.exports="[object z]"===String(e)},74:function(t,n,r){var e=r(3),o=r(17),i=e.document,u=o(i)&&o(i.createElement);t.exports=function(t){return u?i.createElement(t):{}}},75:function(t,n,r){var e,o,i,u=r(168),c=r(3),a=r(17),f=r(27),s=r(12),l=r(53),p=r(76),v=r(60),y=c.WeakMap;if(u||l.state){var d=l.state||(l.state=new y),b=d.get,x=d.has,g=d.set;e=function(t,n){if(x.call(d,t))throw new TypeError("Object already initialized");return n.facade=t,g.call(d,t,n),n},o=function(t){return b.call(d,t)||{}},i=function(t){return x.call(d,t)}}else{var h=p("state");v[h]=!0,e=function(t,n){if(s(t,h))throw new TypeError("Object already initialized");return n.facade=t,f(t,h,n),n},o=function(t){return s(t,h)?t[h]:{}},i=function(t){return s(t,h)}}t.exports={set:e,get:o,has:i,enforce:function(t){return i(t)?o(t):e(t,{})},getterFor:function(t){return function(n){var r;if(!a(n)||(r=o(n)).type!==t)throw TypeError("Incompatible receiver, "+t+" required");return r}}}},76:function(t,n,r){var e=r(59),o=r(93),i=e("keys");t.exports=function(t){return i[t]||(i[t]=o(t))}},83:function(t,n,r){var e=r(18),o=r(12),i=Function.prototype,u=e&&Object.getOwnPropertyDescriptor,c=o(i,"name"),a=c&&"something"===function(){}.name,f=c&&(!e||e&&u(i,"name").configurable);t.exports={EXISTS:c,PROPER:a,CONFIGURABLE:f}},86:function(t,n){t.exports=!1},89:function(t,n,r){var e=r(18),o=r(102),i=r(45),u=r(42),c=r(57),a=r(12),f=r(94),s=Object.getOwnPropertyDescriptor;n.f=e?s:function(t,n){if(t=u(t),n=c(n),f)try{return s(t,n)}catch(t){}if(a(t,n))return i(!o.f.call(t,n),t[n])}},90:function(t,n,r){var e=r(2),o=r(30),i=r(91);t.exports=i?function(t){return"symbol"==typeof t}:function(t){var n=o("Symbol");return e(n)&&Object(t)instanceof n}},91:function(t,n,r){var e=r(92);t.exports=e&&!Symbol.sham&&"symbol"==typeof Symbol.iterator},92:function(t,n,r){var e=r(61),o=r(1);t.exports=!!Object.getOwnPropertySymbols&&!o((function(){var t=Symbol();return!String(t)||!(Object(t)instanceof Symbol)||!Symbol.sham&&e&&e<41}))},93:function(t,n){var r=0,e=Math.random();t.exports=function(t){return"Symbol("+String(void 0===t?"":t)+")_"+(++r+e).toString(36)}},94:function(t,n,r){var e=r(18),o=r(1),i=r(74);t.exports=!e&&!o((function(){return 7!=Object.defineProperty(i("div"),"a",{get:function(){return 7}}).a}))},98:function(t,n,r){var e=r(38);t.exports=Array.isArray||function(t){return"Array"==e(t)}}});
//# sourceMappingURL=vue-settings-nextcloud-pdf.js.map?v=cec0aa54f3d1af91aa3b