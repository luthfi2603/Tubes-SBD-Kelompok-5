(function() {
    /* 
 
 Copyright The Closure Library Authors. 
 SPDX-License-Identifier: Apache-2.0 
*/
    var ba;
    function ca(a) {
        var b = 0;
        return function() {
            return b < a.length ? {
                done: !1,
                value: a[b++]
            } : {
                done: !0
            }
        }
    }
    var da = "function" == typeof Object.defineProperties ? Object.defineProperty : function(a, b, c) {
        if (a == Array.prototype || a == Object.prototype)
            return a;
        a[b] = c.value;
        return a
    }
    ;
    function ea(a) {
        a = ["object" == typeof globalThis && globalThis, a, "object" == typeof window && window, "object" == typeof self && self, "object" == typeof global && global];
        for (var b = 0; b < a.length; ++b) {
            var c = a[b];
            if (c && c.Math == Math)
                return c
        }
        throw Error("Cannot find global object");
    }
    var fa = ea(this)
      , ha = "function" === typeof Symbol && "symbol" === typeof Symbol("x")
      , k = {}
      , ia = {};
    function t(a, b, c) {
        if (!c || null != a) {
            c = ia[b];
            if (null == c)
                return a[b];
            c = a[c];
            return void 0 !== c ? c : a[b]
        }
    }
    function u(a, b, c) {
        if (b)
            a: {
                var d = a.split(".");
                a = 1 === d.length;
                var e = d[0], f;
                !a && e in k ? f = k : f = fa;
                for (e = 0; e < d.length - 1; e++) {
                    var g = d[e];
                    if (!(g in f))
                        break a;
                    f = f[g]
                }
                d = d[d.length - 1];
                c = ha && "es6" === c ? f[d] : null;
                b = b(c);
                null != b && (a ? da(k, d, {
                    configurable: !0,
                    writable: !0,
                    value: b
                }) : b !== c && (void 0 === ia[d] && (a = 1E9 * Math.random() >>> 0,
                ia[d] = ha ? fa.Symbol(d) : "$jscp$" + a + "$" + d),
                da(f, ia[d], {
                    configurable: !0,
                    writable: !0,
                    value: b
                })))
            }
    }
    u("Symbol", function(a) {
        function b(f) {
            if (this instanceof b)
                throw new TypeError("Symbol is not a constructor");
            return new c(d + (f || "") + "_" + e++,f)
        }
        function c(f, g) {
            this.g = f;
            da(this, "description", {
                configurable: !0,
                writable: !0,
                value: g
            })
        }
        if (a)
            return a;
        c.prototype.toString = function() {
            return this.g
        }
        ;
        var d = "jscomp_symbol_" + (1E9 * Math.random() >>> 0) + "_"
          , e = 0;
        return b
    }, "es6");
    u("Symbol.iterator", function(a) {
        if (a)
            return a;
        a = (0,
        k.Symbol)("Symbol.iterator");
        for (var b = "Array Int8Array Uint8Array Uint8ClampedArray Int16Array Uint16Array Int32Array Uint32Array Float32Array Float64Array".split(" "), c = 0; c < b.length; c++) {
            var d = fa[b[c]];
            "function" === typeof d && "function" != typeof d.prototype[a] && da(d.prototype, a, {
                configurable: !0,
                writable: !0,
                value: function() {
                    return ja(ca(this))
                }
            })
        }
        return a
    }, "es6");
    function ja(a) {
        a = {
            next: a
        };
        a[t(k.Symbol, "iterator")] = function() {
            return this
        }
        ;
        return a
    }
    var na = ha && "function" == typeof t(Object, "assign") ? t(Object, "assign") : function(a, b) {
        for (var c = 1; c < arguments.length; c++) {
            var d = arguments[c];
            if (d)
                for (var e in d)
                    Object.prototype.hasOwnProperty.call(d, e) && (a[e] = d[e])
        }
        return a
    }
    ;
    u("Object.assign", function(a) {
        return a || na
    }, "es6");
    function oa(a, b, c) {
        if (null == a)
            throw new TypeError("The 'this' value for String.prototype." + c + " must not be null or undefined");
        if (b instanceof RegExp)
            throw new TypeError("First argument to String.prototype." + c + " must not be a regular expression");
        return a + ""
    }
    u("String.prototype.endsWith", function(a) {
        return a ? a : function(b, c) {
            var d = oa(this, b, "endsWith");
            void 0 === c && (c = d.length);
            c = Math.max(0, Math.min(c | 0, d.length));
            for (var e = b.length; 0 < e && 0 < c; )
                if (d[--c] != b[--e])
                    return !1;
            return 0 >= e
        }
    }, "es6");
    function pa(a, b) {
        a instanceof String && (a += "");
        var c = 0
          , d = !1
          , e = {
            next: function() {
                if (!d && c < a.length) {
                    var f = c++;
                    return {
                        value: b(f, a[f]),
                        done: !1
                    }
                }
                d = !0;
                return {
                    done: !0,
                    value: void 0
                }
            }
        };
        e[t(k.Symbol, "iterator")] = function() {
            return e
        }
        ;
        return e
    }
    u("Array.prototype.entries", function(a) {
        return a ? a : function() {
            return pa(this, function(b, c) {
                return [b, c]
            })
        }
    }, "es6");
    u("Array.prototype.keys", function(a) {
        return a ? a : function() {
            return pa(this, function(b) {
                return b
            })
        }
    }, "es6");
    u("globalThis", function(a) {
        return a || fa
    }, "es_2020");
    u("Object.values", function(a) {
        return a ? a : function(b) {
            var c = [], d;
            for (d in b)
                Object.prototype.hasOwnProperty.call(b, d) && c.push(b[d]);
            return c
        }
    }, "es8");
    u("Array.prototype.values", function(a) {
        return a ? a : function() {
            return pa(this, function(b, c) {
                return c
            })
        }
    }, "es8");
    u("Object.is", function(a) {
        return a ? a : function(b, c) {
            return b === c ? 0 !== b || 1 / b === 1 / c : b !== b && c !== c
        }
    }, "es6");
    u("Array.prototype.includes", function(a) {
        return a ? a : function(b, c) {
            var d = this;
            d instanceof String && (d = String(d));
            var e = d.length;
            c = c || 0;
            for (0 > c && (c = Math.max(c + e, 0)); c < e; c++) {
                var f = d[c];
                if (f === b || t(Object, "is").call(Object, f, b))
                    return !0
            }
            return !1
        }
    }, "es7");
    u("String.prototype.includes", function(a) {
        return a ? a : function(b, c) {
            return -1 !== oa(this, b, "includes").indexOf(b, c || 0)
        }
    }, "es6");
    u("Object.entries", function(a) {
        return a ? a : function(b) {
            var c = [], d;
            for (d in b)
                Object.prototype.hasOwnProperty.call(b, d) && c.push([d, b[d]]);
            return c
        }
    }, "es8");
    var v = this || self;
    function qa(a, b) {
        function c() {}
        c.prototype = b.prototype;
        a.ca = b.prototype;
        a.prototype = new c;
        a.prototype.constructor = a;
        a.Y = function(d, e, f) {
            for (var g = Array(arguments.length - 2), h = 2; h < arguments.length; h++)
                g[h - 2] = arguments[h];
            return b.prototype[e].apply(d, g)
        }
    }
    function ra(a) {
        return a
    }
    ;function w(a) {
        a = parseFloat(a);
        return isNaN(a) || 1 < a || 0 > a ? 0 : a
    }
    ;function sa(a, b) {
        if (Error.captureStackTrace)
            Error.captureStackTrace(this, sa);
        else {
            var c = Error().stack;
            c && (this.stack = c)
        }
        a && (this.message = String(a));
        void 0 !== b && (this.cause = b)
    }
    qa(sa, Error);
    sa.prototype.name = "CustomError";
    function ta(a, b) {
        a = a.split("%s");
        for (var c = "", d = a.length - 1, e = 0; e < d; e++)
            c += a[e] + (e < b.length ? b[e] : "%s");
        sa.call(this, c + a[d])
    }
    qa(ta, sa);
    ta.prototype.name = "AssertionError";
    function y(a, b) {
        this.h = a === ua && b || "";
        this.G = va
    }
    y.prototype.j = !0;
    y.prototype.g = function() {
        return this.h
    }
    ;
    function wa(a) {
        return a instanceof y && a.constructor === y && a.G === va ? a.h : "type_error:Const"
    }
    var va = {}
      , ua = {};
    function xa(a) {
        var b = !1, c;
        return function() {
            b || (c = a(),
            b = !0);
            return c
        }
    }
    ;var ya = Array.prototype.indexOf ? function(a, b) {
        return Array.prototype.indexOf.call(a, b, void 0)
    }
    : function(a, b) {
        if ("string" === typeof a)
            return "string" !== typeof b || 1 != b.length ? -1 : a.indexOf(b, 0);
        for (var c = 0; c < a.length; c++)
            if (c in a && a[c] === b)
                return c;
        return -1
    }
      , za = Array.prototype.some ? function(a, b) {
        return Array.prototype.some.call(a, b, void 0)
    }
    : function(a, b) {
        for (var c = a.length, d = "string" === typeof a ? a.split("") : a, e = 0; e < c; e++)
            if (e in d && b.call(void 0, d[e], e, a))
                return !0;
        return !1
    }
    ;
    var Aa, Ba;
    a: {
        for (var Ca = ["CLOSURE_FLAGS"], Da = v, Ea = 0; Ea < Ca.length; Ea++)
            if (Da = Da[Ca[Ea]],
            null == Da) {
                Ba = null;
                break a
            }
        Ba = Da
    }
    var Fa = Ba && Ba[610401301];
    Aa = null != Fa ? Fa : !1;
    function Ia(a) {
        if (!Ja.test(a))
            return a;
        -1 != a.indexOf("&") && (a = a.replace(Ka, "&amp;"));
        -1 != a.indexOf("<") && (a = a.replace(La, "&lt;"));
        -1 != a.indexOf(">") && (a = a.replace(Ma, "&gt;"));
        -1 != a.indexOf('"') && (a = a.replace(Na, "&quot;"));
        -1 != a.indexOf("'") && (a = a.replace(Oa, "&#39;"));
        -1 != a.indexOf("\x00") && (a = a.replace(Pa, "&#0;"));
        return a
    }
    var Ka = /&/g
      , La = /</g
      , Ma = />/g
      , Na = /"/g
      , Oa = /'/g
      , Pa = /\x00/g
      , Ja = /[\x00&<>"']/;
    function Qa() {
        var a = v.navigator;
        return a && (a = a.userAgent) ? a : ""
    }
    var Ra, Sa = v.navigator;
    Ra = Sa ? Sa.userAgentData || null : null;
    function Ta(a) {
        return Aa ? Ra ? Ra.brands.some(function(b) {
            return (b = b.brand) && -1 != b.indexOf(a)
        }) : !1 : !1
    }
    function A(a) {
        return -1 != Qa().indexOf(a)
    }
    ;function C() {
        return Aa ? !!Ra && 0 < Ra.brands.length : !1
    }
    function Ua() {
        return C() ? Ta("Chromium") : (A("Chrome") || A("CriOS")) && !(C() ? 0 : A("Edge")) || A("Silk")
    }
    ;function Va(a) {
        Va[" "](a);
        return a
    }
    Va[" "] = function() {}
    ;
    var Wa = {
        area: !0,
        base: !0,
        br: !0,
        col: !0,
        command: !0,
        embed: !0,
        hr: !0,
        img: !0,
        input: !0,
        keygen: !0,
        link: !0,
        meta: !0,
        param: !0,
        source: !0,
        track: !0,
        wbr: !0
    };
    var Xa;
    function Ya() {
        if (void 0 === Xa) {
            var a = null
              , b = v.trustedTypes;
            if (b && b.createPolicy) {
                try {
                    a = b.createPolicy("goog#html", {
                        createHTML: ra,
                        createScript: ra,
                        createScriptURL: ra
                    })
                } catch (c) {
                    v.console && v.console.error(c.message)
                }
                Xa = a
            } else
                Xa = a
        }
        return Xa
    }
    ;function D(a, b) {
        this.h = b === Za ? a : ""
    }
    D.prototype.toString = function() {
        return this.h + ""
    }
    ;
    D.prototype.j = !0;
    D.prototype.g = function() {
        return this.h.toString()
    }
    ;
    function $a(a) {
        return a instanceof D && a.constructor === D ? a.h : "type_error:TrustedResourceUrl"
    }
    var ab = /^([^?#]*)(\?[^#]*)?(#[\s\S]*)?/
      , Za = {};
    function bb(a) {
        var b = Ya();
        a = b ? b.createScriptURL(a) : a;
        return new D(a,Za)
    }
    function cb(a, b, c) {
        if (null == c)
            return b;
        if ("string" === typeof c)
            return c ? a + encodeURIComponent(c) : "";
        for (var d in c)
            if (Object.prototype.hasOwnProperty.call(c, d)) {
                var e = c[d];
                e = Array.isArray(e) ? e : [e];
                for (var f = 0; f < e.length; f++) {
                    var g = e[f];
                    null != g && (b || (b = a),
                    b += (b.length > a.length ? "&" : "") + encodeURIComponent(d) + "=" + encodeURIComponent(String(g)))
                }
            }
        return b
    }
    ;function E(a, b) {
        this.h = b === db ? a : ""
    }
    E.prototype.toString = function() {
        return this.h.toString()
    }
    ;
    E.prototype.j = !0;
    E.prototype.g = function() {
        return this.h.toString()
    }
    ;
    function eb(a) {
        return a instanceof E && a.constructor === E ? a.h : "type_error:SafeUrl"
    }
    var fb = /^data:(.*);base64,[a-z0-9+\/]+=*$/i
      , gb = /^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i;
    function hb(a) {
        if (a instanceof E)
            return a;
        a = "object" == typeof a && a.j ? a.g() : String(a);
        gb.test(a) ? a = new E(a,db) : (a = String(a).replace(/(%0A|%0D)/g, ""),
        a = a.match(fb) ? new E(a,db) : null);
        return a
    }
    var db = {}
      , ib = new E("about:invalid#zClosurez",db);
    var jb = {};
    function F(a, b) {
        this.h = b === jb ? a : "";
        this.j = !0
    }
    F.prototype.g = function() {
        return this.h
    }
    ;
    F.prototype.toString = function() {
        return this.h.toString()
    }
    ;
    var kb = new F("",jb);
    function lb(a) {
        if (a instanceof E)
            return 'url("' + eb(a).replace(/</g, "%3c").replace(/[\\"]/g, "\\$&") + '")';
        if (a instanceof y)
            a = wa(a);
        else {
            a = String(a);
            var b = a.replace(mb, "$1").replace(mb, "$1").replace(nb, "url");
            if (ob.test(b)) {
                if (b = !qb.test(a)) {
                    for (var c = b = !0, d = 0; d < a.length; d++) {
                        var e = a.charAt(d);
                        "'" == e && c ? b = !b : '"' == e && b && (c = !c)
                    }
                    b = b && c && rb(a)
                }
                a = b ? sb(a) : "zClosurez"
            } else
                a = "zClosurez"
        }
        if (/[{;}]/.test(a))
            throw new ta("Value does not allow [{;}], got: %s.",[a]);
        return a
    }
    function rb(a) {
        for (var b = !0, c = /^[-_a-zA-Z0-9]$/, d = 0; d < a.length; d++) {
            var e = a.charAt(d);
            if ("]" == e) {
                if (b)
                    return !1;
                b = !0
            } else if ("[" == e) {
                if (!b)
                    return !1;
                b = !1
            } else if (!b && !c.test(e))
                return !1
        }
        return b
    }
    var ob = RegExp("^[-+,.\"'%_!#/ a-zA-Z0-9\\[\\]]+$")
      , nb = RegExp("\\b(url\\([ \t\n]*)('[ -&(-\\[\\]-~]*'|\"[ !#-\\[\\]-~]*\"|[!#-&*-\\[\\]-~]*)([ \t\n]*\\))", "g")
      , mb = RegExp("\\b(calc|cubic-bezier|fit-content|hsl|hsla|linear-gradient|matrix|minmax|radial-gradient|repeat|rgb|rgba|(rotate|scale|translate)(X|Y|Z|3d)?|steps|var)\\([-+*/0-9a-zA-Z.%#\\[\\], ]+\\)", "g")
      , qb = /\/\*/;
    function sb(a) {
        return a.replace(nb, function(b, c, d, e) {
            var f = "";
            d = d.replace(/^(['"])(.*)\1$/, function(g, h, l) {
                f = h;
                return l
            });
            b = (hb(d) || ib).g();
            return c + f + b + f + e
        })
    }
    ;var tb = {};
    function H(a, b) {
        this.h = b === tb ? a : "";
        this.j = !0
    }
    H.prototype.g = function() {
        return this.h.toString()
    }
    ;
    H.prototype.toString = function() {
        return this.h.toString()
    }
    ;
    function ub(a) {
        return a instanceof H && a.constructor === H ? a.h : "type_error:SafeHtml"
    }
    function vb(a) {
        return a instanceof H ? a : wb(Ia("object" == typeof a && a.j ? a.g() : String(a)))
    }
    function xb(a) {
        function b(e) {
            Array.isArray(e) ? e.forEach(b) : (e = vb(e),
            d.push(ub(e).toString()))
        }
        var c = vb(yb)
          , d = [];
        a.forEach(b);
        return wb(d.join(ub(c).toString()))
    }
    function zb(a) {
        return xb(Array.prototype.slice.call(arguments))
    }
    function wb(a) {
        var b = Ya();
        a = b ? b.createHTML(a) : a;
        return new H(a,tb)
    }
    var Ab = /^[a-zA-Z0-9-]+$/
      , Bb = {
        action: !0,
        cite: !0,
        data: !0,
        formaction: !0,
        href: !0,
        manifest: !0,
        poster: !0,
        src: !0
    }
      , Cb = {
        APPLET: !0,
        BASE: !0,
        EMBED: !0,
        IFRAME: !0,
        LINK: !0,
        MATH: !0,
        META: !0,
        OBJECT: !0,
        SCRIPT: !0,
        STYLE: !0,
        SVG: !0,
        TEMPLATE: !0
    }
      , yb = new H(v.trustedTypes && v.trustedTypes.emptyHTML || "",tb);
    var Db = RegExp("^(?:([^:/?#.]+):)?(?://(?:([^\\\\/?#]*)@)?([^\\\\/?#]*?)(?::([0-9]+))?(?=[\\\\/?#]|$))?([^?#]+)?(?:\\?([^#]*))?(?:#([\\s\\S]*))?$");
    function Eb(a) {
        var b = a.match(Db);
        a = b[5];
        var c = b[6];
        b = b[7];
        var d = "";
        a && (d += a);
        c && (d += "?" + c);
        b && (d += "#" + b);
        return d
    }
    function Fb(a, b, c, d) {
        for (var e = c.length; 0 <= (b = a.indexOf(c, b)) && b < d; ) {
            var f = a.charCodeAt(b - 1);
            if (38 == f || 63 == f)
                if (f = a.charCodeAt(b + e),
                !f || 61 == f || 38 == f || 35 == f)
                    return b;
            b += e + 1
        }
        return -1
    }
    var Gb = /#|$/;
    function Hb(a, b) {
        var c = a.search(Gb)
          , d = Fb(a, 0, b, c);
        if (0 > d)
            return null;
        var e = a.indexOf("&", d);
        if (0 > e || e > c)
            e = c;
        d += b.length + 1;
        return decodeURIComponent(a.slice(d, -1 !== e ? e : 0).replace(/\+/g, " "))
    }
    var Ib = /[?&]($|#)/;
    function I(a, b, c) {
        for (var d = a.search(Gb), e = 0, f, g = []; 0 <= (f = Fb(a, e, b, d)); )
            g.push(a.substring(e, f)),
            e = Math.min(a.indexOf("&", f) + 1 || d, d);
        g.push(a.slice(e));
        a = g.join("").replace(Ib, "$1");
        c = null != c ? "=" + encodeURIComponent(String(c)) : "";
        (b += c) ? (c = a.indexOf("#"),
        0 > c && (c = a.length),
        d = a.indexOf("?"),
        0 > d || d > c ? (d = c,
        e = "") : e = a.substring(d + 1, c),
        c = [a.slice(0, d), e, a.slice(c)],
        a = c[1],
        c[1] = b ? a ? a + "&" + b : b : a,
        b = c[0] + (c[1] ? "?" + c[1] : "") + c[2]) : b = a;
        return b
    }
    ;/* 
 
 SPDX-License-Identifier: Apache-2.0 
*/
    function Jb(a) {
        var b, c, d = null == (c = (b = (a.ownerDocument && a.ownerDocument.defaultView || window).document).querySelector) ? void 0 : c.call(b, "script[nonce]");
        (b = d ? d.nonce || d.getAttribute("nonce") || "" : "") && a.setAttribute("nonce", b)
    }
    ;function Kb(a, b) {
        a.write(ub(b))
    }
    ;function Lb(a) {
        try {
            var b;
            if (b = !!a && null != a.location.href)
                a: {
                    try {
                        Va(a.foo);
                        b = !0;
                        break a
                    } catch (c) {}
                    b = !1
                }
            return b
        } catch (c) {
            return !1
        }
    }
    function Mb() {
        if (!k.globalThis.crypto)
            return Math.random();
        try {
            var a = new Uint32Array(1);
            k.globalThis.crypto.getRandomValues(a);
            return a[0] / 65536 / 65536
        } catch (b) {
            return Math.random()
        }
    }
    function Nb(a, b) {
        if (a)
            for (var c in a)
                Object.prototype.hasOwnProperty.call(a, c) && b(a[c], c, a)
    }
    var Pb = xa(function() {
        return za(["Google Web Preview", "Mediapartners-Google", "Google-Read-Aloud", "Google-Adwords"], Ob) || 1E-4 > Math.random()
    })
      , Qb = xa(function() {
        return Ob("MSIE")
    });
    function Ob(a) {
        return -1 != Qa().indexOf(a)
    }
    function K(a) {
        return /^true$/.test(a)
    }
    function Rb(a, b) {
        b = void 0 === b ? document : b;
        return b.createElement(String(a).toLowerCase())
    }
    ;var Sb = w("0.20")
      , Tb = w("0.002")
      , Ub = w("1.0")
      , Vb = w("0.00")
      , Wb = w("0.00")
      , Xb = w("0.00")
      , Yb = K("false")
      , Zb = K("true")
      , $b = K("true")
      , ac = K("true")
      , bc = K("true")
      , cc = K("true");
    var dc = null;
    function ec() {
        if (null === dc) {
            dc = "";
            try {
                var a = "";
                try {
                    a = v.top.location.hash
                } catch (c) {
                    a = v.location.hash
                }
                if (a) {
                    var b = a.match(/\bdeid=([\d,]+)/);
                    dc = b ? b[1] : ""
                }
            } catch (c) {}
        }
        return dc
    }
    function L(a, b, c) {
        var d = M;
        if (c ? d.g.hasOwnProperty(c) && "" == d.g[c] : 1) {
            var e;
            e = (e = ec()) ? (e = e.match(new RegExp("\\b(" + a.join("|") + ")\\b"))) ? e[0] : null : null;
            if (e)
                a = e;
            else
                a: {
                    if (!Qb() && !Pb() && (e = Math.random(),
                    e < b)) {
                        e = Mb();
                        a = a[Math.floor(e * a.length)];
                        break a
                    }
                    a = null
                }
            a && "" != a && (c ? d.g.hasOwnProperty(c) && (d.g[c] = a) : d.h[a] = !0)
        }
    }
    function N(a) {
        var b = M;
        return b.g.hasOwnProperty(a) ? b.g[a] : ""
    }
    function fc() {
        var a = M
          , b = [];
        Nb(a.h, function(c, d) {
            b.push(d)
        });
        Nb(a.g, function(c) {
            "" != c && b.push(c)
        });
        return b
    }
    ;var gc = {
        N: 2,
        V: 13,
        U: 14,
        R: 16,
        P: 17,
        O: 18,
        M: 19,
        X: 20,
        W: 21,
        L: 22
    }
      , M = null;
    function hc() {
        return !!M && ("466465926" == N(20) || "466465925" == N(20))
    }
    function ic() {
        return !!M && "592230571" == N(16)
    }
    function jc() {
        return !!M && ("512247839" == N(22) || "512247838" == N(22))
    }
    ;function kc(a) {
        var b = void 0 === b ? v : b;
        var c, d;
        return (null == (c = b.performance) ? void 0 : null == (d = c.timing) ? void 0 : d[a]) || 0
    }
    ;function O(a) {
        var b = "u";
        if (a.u && a.hasOwnProperty(b))
            return a.u;
        b = new a;
        return a.u = b
    }
    ;var lc = {
        S: 0,
        I: 1,
        T: 2,
        K: 3,
        J: 4
    };
    function mc() {
        this.g = {}
    }
    function nc(a, b, c) {
        "number" === typeof c && 0 < c && (a.g[b] = Math.round(c))
    }
    function oc(a) {
        var b = O(mc);
        var c = void 0 === c ? v : c;
        c = c.performance;
        nc(b, a, c && c.now ? c.now() : null)
    }
    function pc() {
        function a() {
            return nc(b, 0, kc("loadEventStart") - kc("navigationStart"))
        }
        var b = O(mc);
        0 != kc("loadEventStart") ? a() : window.addEventListener("load", a)
    }
    function qc() {
        var a = O(mc);
        return t(Object, "values").call(Object, lc).map(function(b) {
            return [b, a.g[b] || 0]
        })
    }
    ;var rc = K("false");
    var sc = {};
    function P(a) {
        sc.TAGGING = sc.TAGGING || [];
        sc.TAGGING[a] = !0
    }
    ;var tc = Array.isArray;
    function uc(a, b) {
        if (a && tc(a))
            for (var c = 0; c < a.length; c++)
                if (a[c] && b(a[c]))
                    return a[c]
    }
    function vc(a, b) {
        for (var c in a)
            Object.prototype.hasOwnProperty.call(a, c) && b(c, a[c])
    }
    ;function wc(a) {
        a = xc(a);
        return wb(a)
    }
    function xc(a) {
        return null === a ? "null" : void 0 === a ? "undefined" : a
    }
    ;var Q = window
      , R = document;
    function yc(a, b) {
        b && (a.addEventListener ? a.onload = b : a.onreadystatechange = function() {
            a.readyState in {
                loaded: 1,
                complete: 1
            } && (a.onreadystatechange = null,
            b())
        }
        )
    }
    var zc = {
        async: 1,
        nonce: 1,
        onerror: 1,
        onload: 1,
        src: 1,
        type: 1
    }
      , Ac = {
        onload: 1,
        src: 1,
        width: 1,
        height: 1,
        style: 1
    };
    function Bc(a, b, c) {
        b && vc(b, function(d, e) {
            d = d.toLowerCase();
            c.hasOwnProperty(d) || a.setAttribute(d, e)
        })
    }
    function Cc(a, b, c, d) {
        var e = R.createElement("script");
        Bc(e, c, zc);
        e.type = "text/javascript";
        e.async = !0;
        a = bb(xc(a));
        e.src = $a(a);
        Jb(e);
        yc(e, b);
        d ? d.appendChild(e) : (b = R.getElementsByTagName("script")[0] || R.body || R.head,
        b.parentNode.insertBefore(e, b))
    }
    function Dc(a, b, c) {
        var d = !1;
        d = void 0 === d ? !0 : d;
        var e = !1;
        c || (c = R.createElement("iframe"),
        e = !0);
        Bc(c, void 0, Ac);
        d && (c.height = "0",
        c.width = "0",
        c.style.display = "none",
        c.style.visibility = "hidden");
        e && (d = R.body && R.body.lastChild || R.body || R.head,
        d.parentNode.insertBefore(c, d));
        yc(c, b);
        void 0 !== a && (c.src = a)
    }
    ;function Ec() {
        var a = void 0 === a ? document : a;
        var b;
        return !(null == (b = a.featurePolicy) || !(ba = b.allowedFeatures(),
        t(ba, "includes")).call(ba, "attribution-reporting"))
    }
    ;function Fc(a, b, c) {
        a = Gc(a, !0);
        if (a[b])
            return !1;
        a[b] = [];
        a[b][0] = c;
        return !0
    }
    function Gc(a, b) {
        var c = a.GooglebQhCsO;
        c || (c = {},
        b && (a.GooglebQhCsO = c));
        return c
    }
    ;!A("Android") || Ua();
    Ua();
    A("Safari") && (Ua() || (C() ? 0 : A("Coast")) || (C() ? 0 : A("Opera")) || (C() ? 0 : A("Edge")) || (C() ? Ta("Microsoft Edge") : A("Edg/")) || C() && Ta("Opera"));
    var Hc = {}
      , Ic = null;
    function Kc(a) {
        for (var b = [], c = 0, d = 0; d < a.length; d++) {
            var e = a.charCodeAt(d);
            255 < e && (b[c++] = e & 255,
            e >>= 8);
            b[c++] = e
        }
        a = 4;
        void 0 === a && (a = 0);
        if (!Ic)
            for (Ic = {},
            c = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split(""),
            d = ["+/=", "+/", "-_=", "-_.", "-_"],
            e = 0; 5 > e; e++) {
                var f = c.concat(d[e].split(""));
                Hc[e] = f;
                for (var g = 0; g < f.length; g++) {
                    var h = f[g];
                    void 0 === Ic[h] && (Ic[h] = g)
                }
            }
        a = Hc[a];
        c = Array(Math.floor(b.length / 3));
        d = a[64] || "";
        for (e = f = 0; f < b.length - 2; f += 3) {
            var l = b[f]
              , m = b[f + 1];
            h = b[f + 2];
            g = a[l >> 2];
            l = a[(l & 3) << 4 | m >> 4];
            m = a[(m & 15) << 2 | h >> 6];
            h = a[h & 63];
            c[e++] = g + l + m + h
        }
        g = 0;
        h = d;
        switch (b.length - f) {
        case 2:
            g = b[f + 1],
            h = a[(g & 15) << 2] || d;
        case 1:
            b = b[f],
            c[e] = a[b >> 2] + a[(b & 3) << 4 | g >> 4] + h + d
        }
        return c.join("")
    }
    ;function Lc(a, b, c, d, e) {
        var f = Hb(c, "fmt");
        if (d) {
            var g = Hb(c, "random")
              , h = Hb(c, "label") || "";
            if (!g)
                return !1;
            g = Kc(decodeURIComponent(h.replace(/\+/g, " ")) + ":" + decodeURIComponent(g.replace(/\+/g, " ")));
            if (!Fc(a, g, d))
                return !1
        }
        f && 4 != f && (c = I(c, "rfmt", f));
        c = I(c, "fmt", 4);
        Cc(c, function() {
            a.google_noFurtherRedirects && d && d.call && (a.google_noFurtherRedirects = null,
            d())
        }, e, b.getElementsByTagName("script")[0].parentElement || void 0);
        return !0
    }
    ;var Mc = new function(a, b) {
        this.g = a;
        this.defaultValue = void 0 === b ? !1 : b
    }
    (1933);
    function Nc() {
        var a = {};
        this.g = function() {
            var b = Mc.g
              , c = Mc.defaultValue;
            return null != a[b] ? a[b] : c
        }
    }
    ;var Oc = [];
    var Pc = []
      , Qc = {
        ad_storage: !1,
        ad_user_data: !1,
        ad_data_sharing: !1
    };
    function T() {
        var a = {};
        var b = Q.google_tag_data;
        Q.google_tag_data = void 0 === b ? a : b;
        a = Q.google_tag_data;
        a.ics || (a.ics = {
            entries: {},
            set: Rc,
            update: Sc,
            declare: Tc,
            addListener: Uc,
            notifyListeners: Vc,
            active: !1,
            usedDeclare: !1,
            usedDefault: !1,
            usedUpdate: !1,
            accessedDefault: !1,
            accessedAny: !1,
            wasSetLate: !1
        });
        return a.ics
    }
    function Tc(a, b, c, d, e) {
        var f = T();
        f.active = !0;
        f.usedDeclare = !0;
        f = t(f, "entries");
        var g = f[a] || {}
          , h = g.declare_region;
        c = c && "string" === typeof c ? c.toUpperCase() : void 0;
        d = d.toUpperCase();
        e = e.toUpperCase();
        if ("" === d || c === e || (c === d ? h !== e : !c && !h))
            if (b = {
                region: g.region,
                declare_region: c,
                declare: "granted" === b,
                initial: g.initial,
                update: g.update,
                quiet: g.quiet
            },
            "" !== d || !1 !== g.declare)
                f[a] = b
    }
    function Rc(a, b, c, d, e, f) {
        var g = T();
        g.usedDefault || !g.accessedDefault && !g.accessedAny || (g.wasSetLate = !0);
        g.active = !0;
        g.usedDefault = !0;
        P(19);
        if (void 0 == b)
            P(18);
        else {
            var h = t(g, "entries");
            g = h[a] || {};
            var l = g.region;
            c = c && "string" === typeof c ? c.toUpperCase() : void 0;
            d = d.toUpperCase();
            e = e.toUpperCase();
            if ("" === d || c === e || (c === d ? l !== e : !c && !l)) {
                e = !!(f && 0 < f && void 0 === g.update);
                var m = {
                    region: c,
                    declare_region: g.declare_region,
                    initial: "granted" === b,
                    declare: g.declare,
                    update: g.update,
                    quiet: e
                };
                if ("" !== d || !1 !== g.initial)
                    h[a] = m;
                e && Q.setTimeout(function() {
                    h[a] === m && m.quiet && (m.quiet = !1,
                    Wc(a),
                    Vc(),
                    P(2))
                }, f)
            }
        }
    }
    function Sc(a, b) {
        var c = T();
        c.usedDefault || c.usedUpdate || !c.accessedAny || (c.wasSetLate = !0);
        c.active = !0;
        c.usedUpdate = !0;
        if (void 0 != b) {
            var d = Xc(c, a)
              , e = t(c, "entries");
            e = e[a] = e[a] || {};
            e.update = "granted" === b;
            b = Xc(c, a);
            e.quiet ? (e.quiet = !1,
            Wc(a)) : b !== d && Wc(a)
        }
    }
    function Uc(a, b) {
        Pc.push({
            consentTypes: a,
            C: b
        })
    }
    function Wc(a) {
        for (var b = 0; b < Pc.length; ++b) {
            var c = Pc[b];
            tc(c.consentTypes) && -1 !== c.consentTypes.indexOf(a) && (c.B = !0)
        }
    }
    function Vc(a, b) {
        for (var c = 0; c < Pc.length; ++c) {
            var d = Pc[c];
            if (d.B) {
                d.B = !1;
                try {
                    d.C({
                        consentEventId: a,
                        consentPriorityId: b
                    })
                } catch (e) {}
            }
        }
    }
    function Xc(a, b) {
        a = t(a, "entries")[b] || {};
        var c = a.update;
        if (void 0 !== c)
            return c;
        c = a.initial;
        if (void 0 !== c)
            return c;
        c = a.declare;
        if (void 0 !== c)
            return c;
        if ((void 0 == Oc[3] ? 0 : Oc[3]) && Qc.hasOwnProperty(b))
            return Qc[b]
    }
    function Yc(a) {
        var b = T();
        b.accessedAny = !0;
        return Xc(b, a)
    }
    function Zc(a) {
        var b = T();
        b.accessedAny = !0;
        return !(t(b, "entries")[a] || {}).quiet
    }
    function $c() {
        if (!O(Nc).g())
            return !1;
        var a = T();
        a.accessedAny = !0;
        return a.active
    }
    function ad(a, b) {
        T().addListener(a, b)
    }
    function bd(a) {
        function b() {
            for (var e = 0; e < c.length; e++)
                if (!Zc(c[e]))
                    return !0;
            return !1
        }
        var c = ["ad_storage"];
        if (b()) {
            var d = !1;
            ad(c, function(e) {
                d || b() || (d = !0,
                a(e))
            })
        } else
            a({})
    }
    function cd(a) {
        function b() {
            for (var e = [], f = 0; f < c.length; f++) {
                var g = c[f];
                !1 === Yc(g) || d[g] || (e.push(g),
                d[g] = !0)
            }
            return e
        }
        var c = ["ad_storage"]
          , d = {};
        b().length !== c.length && ad(c, function(e) {
            var f = b();
            0 < f.length && (e.consentTypes = f,
            a(e))
        })
    }
    ;function dd(a, b, c, d) {
        if (ed(d)) {
            d = [];
            b = String(b || fd()).split(";");
            for (var e = 0; e < b.length; e++) {
                var f = b[e].split("=")
                  , g = f[0].replace(/^\s*|\s*$/g, "");
                g && g == a && ((f = f.slice(1).join("=").replace(/^\s*|\s*$/g, "")) && c && (f = decodeURIComponent(f)),
                d.push(f))
            }
            a = d
        } else
            a = [];
        return a
    }
    function gd(a, b, c, d) {
        var e = fd()
          , f = window;
        "null" !== f.origin && (f.document.cookie = a);
        a = fd();
        return e != a || void 0 != c && 0 <= dd(b, a, !1, d).indexOf(c)
    }
    function hd(a, b, c) {
        function d(n, q, G) {
            if (null == G)
                return delete g[q],
                n;
            g[q] = G;
            return n + "; " + q + "=" + G
        }
        function e(n, q) {
            if (null == q)
                return delete g[q],
                n;
            g[q] = !0;
            return n + "; " + q
        }
        if (ed(c.l)) {
            if (void 0 == b)
                var f = a + "=deleted; expires=" + (new Date(0)).toUTCString();
            else
                c.encode && (b = encodeURIComponent(b)),
                b = id(b),
                f = a + "=" + b;
            var g = {};
            f = d(f, "path", c.path);
            if (c.expires instanceof Date)
                var h = c.expires.toUTCString();
            else
                null != c.expires && (h = c.expires);
            f = d(f, "expires", h);
            f = d(f, "max-age", c.Z);
            f = d(f, "samesite", c.aa);
            c.ba && (f = e(f, "secure"));
            if ((h = c.domain) && "auto" === h.toLowerCase()) {
                h = jd();
                for (var l = 0; l < h.length; ++l) {
                    var m = "none" !== h[l] ? h[l] : void 0
                      , p = d(f, "domain", m);
                    p = e(p, c.flags);
                    if (!kd(m, c.path) && gd(p, a, b, c.l))
                        break
                }
            } else
                h && "none" !== h.toLowerCase() && (f = d(f, "domain", h)),
                f = e(f, c.flags),
                kd(h, c.path) || gd(f, a, b, c.l)
        }
    }
    function ld(a, b, c) {
        null == c.path && (c.path = "/");
        c.domain || (c.domain = "auto");
        hd(a, b, c)
    }
    function id(a) {
        a && 1200 < a.length && (a = a.substring(0, 1200));
        return a
    }
    var md = /^(www\.)?google(\.com?)?(\.[a-z]{2})?$/
      , nd = /(^|\.)doubleclick\.net$/i;
    function kd(a, b) {
        return nd.test(window.document.location.hostname) || "/" === b && md.test(a)
    }
    function fd() {
        return "null" !== window.origin ? window.document.cookie : ""
    }
    function jd() {
        var a = []
          , b = window.document.location.hostname.split(".");
        if (4 === b.length) {
            var c = b[b.length - 1];
            if (parseInt(c, 10).toString() === c)
                return ["none"]
        }
        for (c = b.length - 2; 0 <= c; c--)
            a.push(b.slice(c).join("."));
        b = window.document.location.hostname;
        nd.test(b) || md.test(b) || a.push("none");
        return a
    }
    function ed(a) {
        if (!O(Nc).g() || !a || !$c())
            return !0;
        if (!Zc(a))
            return !1;
        a = Yc(a);
        return null == a ? !0 : !!a
    }
    ;function od(a, b) {
        var c, d = Number(null != a.A ? a.A : void 0);
        0 !== d && (c = new Date((b || (new Date(Date.now())).getTime()) + 1E3 * (d || 7776E3)));
        return {
            path: a.path,
            domain: a.domain,
            flags: a.flags,
            encode: !0,
            expires: c,
            l: void 0
        }
    }
    ;function pd(a) {
        var b = []
          , c = R.cookie.split(";");
        a = new RegExp("^\\s*" + (a || "_gac") + "_(UA-\\d+-\\d+)=\\s*(.+?)\\s*$");
        for (var d = 0; d < c.length; d++) {
            var e = c[d].match(a);
            e && b.push({
                v: e[1],
                value: e[2],
                timestamp: Number(e[2].split(".")[1]) || 0
            })
        }
        b.sort(function(f, g) {
            return g.timestamp - f.timestamp
        });
        return b
    }
    function qd(a, b) {
        a = pd(a);
        var c = {};
        if (!a || !a.length)
            return c;
        for (var d = 0; d < a.length; d++) {
            var e = a[d].value.split(".");
            if (!("1" !== e[0] || b && 3 > e.length || !b && 3 !== e.length) && Number(e[1])) {
                c[a[d].v] || (c[a[d].v] = []);
                var f = {
                    version: e[0],
                    timestamp: 1E3 * Number(e[1]),
                    i: e[2]
                };
                b && 3 < e.length && (f.labels = e.slice(3));
                c[a[d].v].push(f)
            }
        }
        return c
    }
    ;var rd = /:[0-9]+$/;
    function sd(a, b) {
        a = a.split("&");
        for (var c = 0; c < a.length; c++) {
            var d = a[c].split("=");
            if (decodeURIComponent(d[0]).replace(/\+/g, " ") === b)
                return decodeURIComponent(d.slice(1).join("=")).replace(/\+/g, " ")
        }
    }
    function td(a, b) {
        var c = "query";
        var d = (d = a.protocol) ? d.replace(":", "").toLowerCase() : "";
        c && (c = String(c).toLowerCase());
        switch (c) {
        case "url_no_fragment":
            b = "";
            a && a.href && (b = a.href.indexOf("#"),
            b = 0 > b ? a.href : a.href.substr(0, b));
            a = b;
            break;
        case "protocol":
            a = d;
            break;
        case "host":
            a = a.hostname.replace(rd, "").toLowerCase();
            break;
        case "port":
            a = String(Number(a.port) || ("http" === d ? 80 : "https" === d ? 443 : ""));
            break;
        case "path":
            a.pathname || a.hostname || P(1);
            a = "/" === a.pathname.charAt(0) ? a.pathname : "/" + a.pathname;
            a = a.split("/");
            0 <= [].indexOf(a[a.length - 1]) && (a[a.length - 1] = "");
            a = a.join("/");
            break;
        case "query":
            a = a.search.replace("?", "");
            b && (a = sd(a, b));
            break;
        case "extension":
            a = a.pathname.split(".");
            a = 1 < a.length ? a[a.length - 1] : "";
            a = a.split("/")[0];
            break;
        case "fragment":
            a = a.hash.replace("#", "");
            break;
        default:
            a = a && a.href
        }
        return a
    }
    ;var ud = /^\w+$/
      , vd = /^[\w-]+$/
      , wd = {
        aw: "_aw",
        dc: "_dc",
        gf: "_gf",
        ha: "_ha",
        gp: "_gp",
        gb: "_gb"
    };
    function U() {
        if (!O(Nc).g() || !$c())
            return !0;
        var a = Yc("ad_storage");
        return null == a ? !0 : !!a
    }
    function xd(a, b) {
        Zc("ad_storage") ? U() ? a() : cd(a) : b ? P(3) : bd(function() {
            xd(a, !0)
        })
    }
    function yd(a) {
        return zd(a).map(function(b) {
            return b.i
        })
    }
    function zd(a) {
        var b = [];
        if ("null" === Q.origin || !R.cookie)
            return b;
        a = dd(a, R.cookie, void 0, "ad_storage");
        if (!a || 0 == a.length)
            return b;
        for (var c = {}, d = 0; d < a.length; c = {
            m: c.m
        },
        d++) {
            var e = Ad(a[d]);
            if (null != e) {
                var f = e;
                e = f.version;
                c.m = f.i;
                var g = f.timestamp;
                f = f.labels;
                var h = uc(b, function(l) {
                    return function(m) {
                        return m.i === l.m
                    }
                }(c));
                h ? (h.timestamp = Math.max(h.timestamp, g),
                h.labels = Bd(h.labels, f || [])) : b.push({
                    version: e,
                    i: c.m,
                    timestamp: g,
                    labels: f
                })
            }
        }
        b.sort(function(l, m) {
            return m.timestamp - l.timestamp
        });
        return Cd(b)
    }
    function Bd(a, b) {
        for (var c = {}, d = [], e = 0; e < a.length; e++)
            c[a[e]] = !0,
            d.push(a[e]);
        for (a = 0; a < b.length; a++)
            c[b[a]] || d.push(b[a]);
        return d
    }
    function Dd(a) {
        return a && "string" == typeof a && a.match(ud) ? a : "_gcl"
    }
    function Ed() {
        var a = Q.location.href
          , b = R.createElement("a");
        a && (b.href = a);
        var c = b.pathname;
        "/" !== c[0] && (a || P(1),
        c = "/" + c);
        a = b.hostname.replace(rd, "");
        var d = {
            href: b.href,
            protocol: b.protocol,
            host: b.host,
            hostname: a,
            pathname: c,
            search: b.search,
            hash: b.hash,
            port: b.port
        };
        b = td(d, "gclid");
        c = td(d, "gclsrc");
        a = td(d, "wbraid");
        var e = td(d, "dclid");
        b && c && a || (d = d.hash.replace("#", ""),
        b = b || sd(d, "gclid"),
        c = c || sd(d, "gclsrc"),
        a = a || sd(d, "wbraid"));
        return Fd(b, c, e, a)
    }
    function Fd(a, b, c, d) {
        function e(g, h) {
            f[h] || (f[h] = []);
            f[h].push(g)
        }
        var f = {};
        f.gclid = a;
        f.gclsrc = b;
        f.dclid = c;
        void 0 !== d && vd.test(d) && (f.gbraid = d,
        e(d, "gb"));
        if (void 0 !== a && a.match(vd))
            switch (b) {
            case void 0:
                e(a, "aw");
                break;
            case "aw.ds":
                e(a, "aw");
                e(a, "dc");
                break;
            case "ds":
                e(a, "dc");
                break;
            case "3p.ds":
                e(a, "dc");
                break;
            case "gf":
                e(a, "gf");
                break;
            case "ha":
                e(a, "ha")
            }
        c && e(c, "dc");
        return f
    }
    function Gd() {
        var a = {}
          , b = Ed();
        xd(function() {
            Hd(b, !1, a)
        })
    }
    function Hd(a, b, c, d, e) {
        function f(n) {
            n = ["GCL", p, n];
            0 < e.length && n.push(e.join("."));
            return n.join(".")
        }
        function g(n, q) {
            if (n = Id(n, h))
                ld(n, q, l),
                m = !0
        }
        c = c || {};
        e = e || [];
        var h = Dd(c.prefix);
        d = d || (new Date(Date.now())).getTime();
        var l = od(c, d);
        l.l = "ad_storage";
        var m = !1
          , p = Math.round(d / 1E3);
        a.aw && g("aw", f(a.aw[0]));
        a.dc && g("dc", f(a.dc[0]));
        a.gf && g("gf", f(a.gf[0]));
        a.ha && g("ha", f(a.ha[0]));
        a.gp && g("gp", f(a.gp[0]));
        if (!m && a.gb) {
            a = a.gb[0];
            d = Id("gb", h);
            c = !1;
            if (!b)
                for (b = zd(d),
                d = 0; d < b.length; d++)
                    b[d].i === a && b[d].labels && 0 < b[d].labels.length && (c = !0);
            c || g("gb", f(a))
        }
    }
    function Id(a, b) {
        a = wd[a];
        if (void 0 !== a)
            return b + a
    }
    function Jd(a) {
        return 0 !== Kd(a.split(".")).length ? 1E3 * (Number(a.split(".")[1]) || 0) : 0
    }
    function Ad(a) {
        a = Kd(a.split("."));
        return 0 === a.length ? null : {
            version: a[0],
            i: a[2],
            timestamp: 1E3 * (Number(a[1]) || 0),
            labels: a.slice(3)
        }
    }
    function Kd(a) {
        return 3 > a.length || "GCL" !== a[0] && "1" !== a[0] || !/^\d+$/.test(a[1]) || !vd.test(a[2]) ? [] : a
    }
    function Cd(a) {
        return a.filter(function(b) {
            return vd.test(b.i)
        })
    }
    function Ld() {
        var a = ["aw"]
          , b = {};
        if ("null" !== Q.origin) {
            for (var c = Dd(b.prefix), d = {}, e = 0; e < a.length; e++)
                wd[a[e]] && (d[a[e]] = wd[a[e]]);
            xd(function() {
                vc(d, function(f, g) {
                    g = dd(c + g, R.cookie, void 0, "ad_storage");
                    g.sort(function(p, n) {
                        return Jd(n) - Jd(p)
                    });
                    if (g.length) {
                        var h = g[0];
                        g = Jd(h);
                        var l = 0 !== Kd(h.split(".")).length ? h.split(".").slice(3) : []
                          , m = {};
                        h = 0 !== Kd(h.split(".")).length ? h.split(".")[2] : void 0;
                        m[f] = [h];
                        Hd(m, !0, b, g, l)
                    }
                })
            })
        }
    }
    function Md(a, b, c, d) {
        var e = [];
        c = c || {};
        if (!U())
            return e;
        var f = zd(a);
        if (!f.length)
            return e;
        for (var g = 0; g < f.length; g++)
            -1 === (f[g].labels || []).indexOf(b) ? e.push(0) : e.push(1);
        if (d)
            return e;
        1 !== e[0] && (d = f[0],
        f = f[0].timestamp,
        b = [d.version, Math.round(f / 1E3), d.i].concat(d.labels || [], [b]).join("."),
        c = od(c, f),
        c.l = "ad_storage",
        ld(a, b, c));
        return e
    }
    function Nd(a, b) {
        b = Dd(b);
        a = Id(a, b);
        if (!a)
            return 0;
        a = zd(a);
        for (var c = b = 0; c < a.length; c++)
            b = Math.max(b, a[c].timestamp);
        return b
    }
    function Od(a) {
        var b = 0, c;
        for (c in a)
            for (var d = a[c], e = 0; e < d.length; e++)
                b = Math.max(b, Number(d[e].timestamp));
        return b
    }
    ;var Pd = RegExp("^UA-\\d+-\\d+%3A[\\w-]+(?:%2C[\\w-]+)*(?:%3BUA-\\d+-\\d+%3A[\\w-]+(?:%2C[\\w-]+)*)*$")
      , Qd = /^~?[\w-]+(?:\.~?[\w-]+)*$/
      , Rd = /^\d+\.fls\.doubleclick\.net$/
      , Sd = /;gac=([^;?]+)/
      , Td = /;gacgb=([^;?]+)/
      , Ud = /;gclaw=([^;?]+)/
      , Vd = /;gclgb=([^;?]+)/;
    function Wd(a, b, c) {
        if (Rd.test(a.location.host))
            return (b = a.location.href.match(c)) && 2 == b.length && b[1].match(Pd) ? decodeURIComponent(b[1]) : "";
        a = [];
        for (var d in b) {
            c = [];
            for (var e = b[d], f = 0; f < e.length; f++)
                c.push(e[f].i);
            a.push(d + ":" + c.join(","))
        }
        return 0 < a.length ? a.join(";") : ""
    }
    function Xd(a, b, c, d) {
        var e = U() ? qd("_gac_gb", !0) : {}, f = [], g = !1, h;
        for (h in e) {
            var l = Md("_gac_gb_" + h, b, c, d);
            g = g || 0 !== l.length && l.some(function(m) {
                return 1 === m
            });
            f.push(h + ":" + l.join(","))
        }
        return {
            F: g ? f.join(";") : "",
            D: Wd(a, e, Td)
        }
    }
    function Yd(a, b, c, d) {
        if (Rd.test(a.location.host)) {
            if ((a = a.location.href.match(d)) && 2 == a.length && a[1].match(Qd))
                return [{
                    i: a[1]
                }]
        } else
            return zd((b || "_gcl") + c);
        return []
    }
    function Zd(a, b) {
        return Yd(a, b, "_aw", Ud).map(function(c) {
            return c.i
        }).join(".")
    }
    function $d(a, b) {
        return Yd(a, b, "_gb", Vd).map(function(c) {
            return c.i
        }).join(".")
    }
    function ae(a) {
        0 !== yd("_gcl_aw").length || a && 0 !== yd(a + "_aw").length || (Gd(),
        Ld())
    }
    function be(a, b, c) {
        a = Md((b && b.prefix || "_gcl") + "_gb", a, b, c);
        return 0 === a.length || a.every(function(d) {
            return 0 === d
        }) ? "" : a.join(".")
    }
    ;function ce() {
        if ("function" === typeof Q.__uspapi) {
            var a = "";
            try {
                Q.__uspapi("getUSPData", 1, function(b, c) {
                    c && b && (b = b.uspString) && RegExp("^[\\da-zA-Z-]{1,20}$").test(b) && (a = b)
                })
            } catch (b) {}
            return a
        }
    }
    ;var de = "platform platformVersion architecture model uaFullVersion bitness fullVersionList wow64".split(" ");
    function ee(a) {
        var b;
        return null != (b = a.google_tag_data) ? b : a.google_tag_data = {}
    }
    function fe(a) {
        a = a.google_tag_data;
        if (null != a && a.uach) {
            a = a.uach;
            var b = t(Object, "assign").call(Object, {}, a);
            a.fullVersionList && (b.fullVersionList = a.fullVersionList.slice(0));
            a = b
        } else
            a = null;
        return a
    }
    function ge(a) {
        var b, c;
        return "function" === typeof (null == (b = a.navigator) ? void 0 : null == (c = b.userAgentData) ? void 0 : c.getHighEntropyValues)
    }
    function he() {
        var a = window;
        if (ge(a)) {
            var b = ee(a);
            b.uach_promise || (a = a.navigator.userAgentData.getHighEntropyValues(de).then(function(c) {
                null != b.uach || (b.uach = c);
                return c
            }),
            b.uach_promise = a)
        }
    }
    ;var ie = /^[a-zA-Z0-9_]+$/
      , je = !1
      , ke = "google_conversion_id google_conversion_format google_conversion_type google_conversion_order_id google_conversion_language google_conversion_value google_conversion_currency google_conversion_domain google_conversion_label google_conversion_color google_disable_viewthrough google_enable_display_cookie_match google_gtag_event_data google_remarketing_only google_conversion_linker google_tag_for_child_directed_treatment google_tag_for_under_age_of_consent google_allow_ad_personalization_signals google_restricted_data_processing google_conversion_items google_conversion_merchant_id google_user_id google_custom_params google_conversion_date google_conversion_time google_conversion_js_version onload_callback opt_image_generator google_gtm_url_processor google_conversion_page_url google_conversion_referrer_url google_gtm google_gcl_cookie_prefix google_gcl_cookie_path google_gcl_cookie_flags google_gcl_cookie_domain google_gcl_cookie_max_age_seconds google_read_gcl_cookie_opt_out google_basket_feed_country google_basket_feed_language google_basket_discount google_basket_transaction_type google_additional_conversion_params google_additional_params google_transport_url google_gtm_experiments".split(" ")
      , le = ["google_conversion_first_time", "google_conversion_snippets"];
    function V(a) {
        return null != a ? encodeURIComponent(String(a)) : ""
    }
    function me(a) {
        if (null != a) {
            a = String(a).substring(0, 512);
            var b = a.indexOf("#");
            return -1 == b ? a : a.substring(0, b)
        }
        return ""
    }
    function W(a, b) {
        b = V(b);
        return "" != b && (a = V(a),
        "" != a) ? "&".concat(a, "=", b) : ""
    }
    function ne(a) {
        var b = typeof a;
        return null == a || "object" == b || "function" == b ? null : String(a).replace(/,/g, "\\,").replace(/;/g, "\\;").replace(/=/g, "\\=")
    }
    function oe(a) {
        if (!a || "object" != typeof a || "function" == typeof a.join)
            return "";
        var b = [], c;
        for (c in a)
            if (Object.prototype.hasOwnProperty.call(a, c)) {
                var d = a[c];
                if (d && "function" === typeof d.join) {
                    for (var e = [], f = 0; f < d.length; ++f) {
                        var g = ne(d[f]);
                        null != g && e.push(g)
                    }
                    d = 0 == e.length ? null : e.join(",")
                } else
                    d = ne(d);
                (e = ne(c)) && null != d && b.push(e + "=" + d)
            }
        return b.join(";")
    }
    function pe(a) {
        return "number" != typeof a && "string" != typeof a ? "" : V(a.toString())
    }
    function qe(a, b) {
        if (b.google_read_gcl_cookie_opt_out || b.google_remarketing_only || b.google_conversion_domain && (!b.google_gcl_cookie_prefix || !/^_ycl/.test(b.google_gcl_cookie_prefix)))
            return "";
        var c = "";
        var d = b.google_gcl_cookie_prefix && "_gcl" !== b.google_gcl_cookie_prefix && ie.test(b.google_gcl_cookie_prefix) ? b.google_gcl_cookie_prefix : "";
        var e = {};
        b.google_gcl_cookie_domain && (e.domain = b.google_gcl_cookie_domain);
        b.google_gcl_cookie_flags && (e.flags = b.google_gcl_cookie_flags);
        null != b.google_gcl_cookie_max_age_seconds && (e.A = b.google_gcl_cookie_max_age_seconds);
        b.google_gcl_cookie_path && (e.path = b.google_gcl_cookie_path);
        d && (e.prefix = d);
        if (re(b) && b.s)
            var f = void 0 === b.o;
        else
            Rd.test(a.location.host) ? f = !(Ud.test(a.location.href) || Sd.test(a.location.href)) : (f = Math.max(Nd("aw", d), Od(U() ? qd() : {})),
            f = Math.max(Nd("gb", d), Od(U() ? qd("_gac_gb", !0) : {})) > f);
        if (f) {
            if (void 0 !== b.o)
                return b.o;
            c = $d(a, d || void 0);
            f = b.google_conversion_label;
            var g = be(f, e, b.s);
            c = W("gclgb", c) + (g ? W("mcov", g) : "");
            if (d)
                return b.o = c;
            d = Xd(a, f, e, b.s);
            a = d.D;
            d = d.F;
            c += (a ? W("gacgb", a) : "") + (d ? W("gacmcov", d) : "");
            return b.o = c
        }
        if (d)
            return b = Zd(a, d),
            W("gclaw", b);
        (b = Zd(a)) && (c = W("gclaw", b));
        b = Wd(a, U() ? qd() : {}, Sd);
        return c + (b ? W("gac", b) : "")
    }
    function se(a) {
        function b(d) {
            try {
                return decodeURIComponent(d),
                !0
            } catch (e) {
                return !1
            }
        }
        a = a ? a.title : "";
        if (void 0 == a || "" == a)
            return "";
        a = encodeURIComponent(a);
        for (var c = 256; !b(a.substr(0, c)); )
            c--;
        return "&tiba=" + a.substr(0, c)
    }
    function te(a, b, c, d, e) {
        var f = "https://"
          , g = "landing" === d.google_conversion_type ? "/extclk" : "/";
        switch (e) {
        default:
            return "";
        case 2:
        case 3:
            var h = "googleads.g.doubleclick.net/";
            var l = "pagead/viewthroughconversion/";
            break;
        case 1:
            h = "www.google.com/";
            l = "pagead/1p-conversion/";
            break;
        case 6:
            h = "www.google.com/";
            l = "ccm/conversion/";
            break;
        case 0:
            h = d.google_conversion_domain || "www.googleadservices.com/";
            l = "pagead/conversion/";
            break;
        case 5:
            h = d.google_conversion_domain || "www.googleadservices.com/";
            l = "ccm/conversion/";
            break;
        case 4:
            h = (h = d.google_gtm_experiments) && h.apcm ? "www.google.com" : h && h.capiorig ? d.google_conversion_id + ".privacysandbox.googleadservices.com" : "www.google.com/";
            l = "pagead/privacysandbox/conversion/";
            break;
        case 7:
            h = "googleads.g.doubleclick.net/",
            l = "td/rul/"
        }
        Yb && d.google_transport_url && (h = d.google_transport_url);
        "/" !== h[h.length - 1] && (h += "/");
        if (0 === h.indexOf("http://") || 0 === h.indexOf("https://"))
            f = "";
        f = [f, h, l, V(d.google_conversion_id), g, "?random=", V(d.google_conversion_time)].join("");
        g = W("cv", d.google_conversion_js_version);
        h = W("fst", d.google_conversion_first_time);
        l = W("num", d.google_conversion_snippets);
        var m = W("fmt", d.google_conversion_format)
          , p = d.google_remarketing_only ? W("userId", d.google_user_id) : "";
        var n = d.google_tag_for_child_directed_treatment;
        n = null == n || 0 !== n && 1 !== n ? "" : W("tfcd", n);
        var q = d.google_tag_for_under_age_of_consent;
        q = null == q || 0 !== q && 1 !== q ? "" : W("tfua", q);
        var G = d.google_allow_ad_personalization_signals;
        G = !1 === G ? W("npa", 1) : !0 === G ? W("npa", 0) : "";
        var Ga = d.google_restricted_data_processing;
        Ga = $b ? !0 === Ga ? W("rdp", 1) : !1 === Ga ? W("rdp", 0) : "" : "";
        var Fe = W("value", d.google_conversion_value)
          , Ge = W("currency_code", d.google_conversion_currency)
          , He = W("label", d.google_conversion_label)
          , Ie = W("oid", d.google_conversion_order_id)
          , Je = W("bg", d.google_conversion_color);
        a: {
            var B = d.google_conversion_language;
            if (null != B) {
                B = B.toString();
                if (2 == B.length) {
                    B = W("hl", B);
                    break a
                }
                if (5 == B.length) {
                    B = W("hl", B.substring(0, 2)) + W("gl", B.substring(3, 5));
                    break a
                }
            }
            B = ""
        }
        var Ke = W("guid", "ON")
          , Le = !d.google_conversion_domain && "GooglemKTybQhCsO"in v && "function" == typeof v.GooglemKTybQhCsO ? W("resp", "GooglemKTybQhCsO") : ""
          , Me = W("disvt", d.google_disable_viewthrough)
          , Ne = W("eid", fc().join());
        var ka = d.google_conversion_date;
        var z = [];
        if (a) {
            var J = a.screen;
            J && (z.push(W("u_h", J.height)),
            z.push(W("u_w", J.width)),
            z.push(W("u_ah", J.availHeight)),
            z.push(W("u_aw", J.availWidth)),
            z.push(W("u_cd", J.colorDepth)));
            a.history && z.push(W("u_his", a.history.length))
        }
        ka && "function" == typeof ka.getTimezoneOffset && z.push(W("u_tz", -ka.getTimezoneOffset()));
        b && ("function" == typeof b.javaEnabled && z.push(W("u_java", b.javaEnabled())),
        b.plugins && z.push(W("u_nplug", b.plugins.length)),
        b.mimeTypes && z.push(W("u_nmime", b.mimeTypes.length)));
        ka = z.join("");
        z = W("gtm", d.google_gtm);
        b = b && b.sendBeacon ? W("sendb", "1") : "";
        J = ue();
        var Pe = W("ig", /googleadservices\.com/.test("www.googleadservices.com") ? 1 : 0);
        var S = oe(d.google_custom_params);
        var Ha = oe();
        S = S.concat(0 < S.length && 0 < Ha.length ? ";" : "", Ha);
        S = "" == S ? "" : "&".concat("data=", encodeURIComponent(S));
        Ha = qe(c, d);
        var la = d.google_conversion_page_url
          , Qe = d.google_conversion_referrer_url
          , ma = "";
        if (c) {
            var Z = a.top == a ? 0 : (Z = a.location.ancestorOrigins) ? Z[Z.length - 1] == a.location.origin ? 1 : 2 : Lb(a.top) ? 1 : 2;
            la = la ? la : 1 == Z ? a.top.location.href : a.location.href;
            var Jc = "";
            M && L(["509562772", "509562773"], Vb, 21);
            if (M && ("509562773" == N(21) || "509562772" == N(21))) {
                for (var x, r = a, aa = r; r && r != r.parent; )
                    r = r.parent,
                    Lb(r) && (aa = r);
                x = aa;
                r = x.location.href;
                if (x === x.top)
                    r = {
                        url: r,
                        H: !0
                    };
                else {
                    aa = !1;
                    var pb = x.document;
                    pb && pb.referrer && (r = pb.referrer,
                    x.parent === x.top && (aa = !0));
                    (x = x.location.ancestorOrigins) && (x = x[x.length - 1]) && -1 === r.indexOf(x) && (aa = !1,
                    r = x);
                    r = {
                        url: r,
                        H: aa
                    }
                }
                r.url && la !== r.url && (Jc = r.url)
            }
            ma += W("frm", Z);
            ma += W("url", me(la));
            ma += W("ref", me(Qe || c.referrer));
            ma += W("top", me(Jc))
        }
        a = [g, h, l, m, p, n, q, G, Ga, Fe, Ge, He, Ie, Je, B, Ke, Le, Me, Ne, ka, z, b, J, Pe, S, Ha, ma, se(c), ve(d.google_additional_params), ve(d.google_remarketing_only ? {} : d.google_additional_conversion_params), "&hn=" + V("www.googleadservices.com"), we(a), xe(a)].join("");
        c = ec();
        a += 0 < c.length ? "&debug_experiment_id=" + c : "";
        if (!d.google_remarketing_only && !d.google_conversion_domain) {
            c = [W("mid", d.google_conversion_merchant_id), W("fcntr", d.google_basket_feed_country), W("flng", d.google_basket_feed_language), W("dscnt", d.google_basket_discount), W("bttype", d.google_basket_transaction_type)].join("");
            if (d)
                if (g = d.google_conversion_items) {
                    h = [];
                    l = 0;
                    for (m = g.length; l < m; l++)
                        p = g[l],
                        n = [],
                        p && (n.push(pe(p.value)),
                        n.push(pe(p.quantity)),
                        n.push(pe(p.item_id)),
                        n.push(pe(p.start_date)),
                        n.push(pe(p.end_date)),
                        h.push("(" + n.join("*") + ")"));
                    g = 0 < h.length ? "&item=" + h.join("") : ""
                } else
                    g = "";
            else
                g = "";
            c = [a, c, g].join("");
            a = 4E3 < c.length ? [a, W("item", "elngth")].join("") : c
        }
        f += a;
        1 === e || 6 === e ? f += [W("gcp", 1), W("sscte", 1), W("ct_cookie_present", 1)].join("") : 3 == e && (f += W("gcp", 1),
        f += W("ct_cookie_present", 1));
        Zb && (e = ce(),
        void 0 !== e && (f += W("us_privacy", e || "error")));
        re(d) && (f = d.s ? f + W("gbcov", 1) : f + W("gbcov", 0));
        return f
    }
    function ye(a, b, c, d, e, f, g) {
        return '<iframe name="' + a + '"' + (g ? ' id="' + g + '"' : "") + ' title="' + b + '" width="' + d + '" height="' + e + '"' + (c ? ' src="' + c + '"' : "") + ' frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true"' + (f ? ' style="display:none"' : "") + ' scrolling="no"></iframe>'
    }
    function ze(a) {
        return {
            ar: 1,
            bg: 1,
            cs: 1,
            da: 1,
            de: 1,
            el: 1,
            en_AU: 1,
            en_US: 1,
            en_GB: 1,
            es: 1,
            et: 1,
            fi: 1,
            fr: 1,
            hi: 1,
            hr: 1,
            hu: 1,
            id: 1,
            is: 1,
            it: 1,
            iw: 1,
            ja: 1,
            ko: 1,
            lt: 1,
            nl: 1,
            no: 1,
            pl: 1,
            pt_BR: 1,
            pt_PT: 1,
            ro: 1,
            ru: 1,
            sk: 1,
            sl: 1,
            sr: 1,
            sv: 1,
            th: 1,
            tl: 1,
            tr: 1,
            vi: 1,
            zh_CN: 1,
            zh_TW: 1
        }[a] ? a + ".html" : "en_US.html"
    }
    function Ae(a, b, c, d) {
        function e(h, l, m, p, n) {
            p = p ? ' style="display:none"' : "";
            return "<img " + (n && jc() ? "attributionsrc " : "") + 'height="' + m + '" width="' + l + '" border="0" alt="" src="' + h + '"' + p + " />"
        }
        ic() && oc(2);
        var f = "";
        d.google_remarketing_only && d.google_enable_display_cookie_match && !rc && (M && L(["376635470", "376635471"], Sb, 2),
        f = d.google_remarketing_only && d.google_enable_display_cookie_match && !rc && M && "376635471" == N(2) ? ye("google_cookie_match_frame", "Google cookie match frame", "https://bid.g.doubleclick.net/xbbe/pixel?d=KAE", 1, 1, !0, null) : "");
        d.google_remarketing_only && !d.google_conversion_domain && M && L(["759238990", "759238991"], Xb, 13);
        !d.google_remarketing_only || d.google_conversion_domain || M && ("759248991" == N(14) || "759248990" == N(14)) || M && L(["759248990", "759248991"], Wb, 14);
        !1 !== d.google_conversion_linker && ae(d.google_gcl_cookie_prefix);
        b = te(a, b, c, d, d.google_remarketing_only ? 2 : 0);
        if (0 == d.google_conversion_format && null == d.google_conversion_domain)
            return '<a href="https://services.google.com/sitestats/' + (ze(d.google_conversion_language) + "?cid=" + V(d.google_conversion_id)) + '" target="_blank">' + e(b, 135, 27, !1, !1) + "</a>" + f;
        if (void 0 !== d.google_conversion_snippets && 1 < d.google_conversion_snippets || 3 == d.google_conversion_format) {
            var g = b;
            null == d.google_conversion_domain && (g = 3 == d.google_conversion_format ? b : I(b, "fmt", 3));
            b = void 0;
            jc() && !d.google_remarketing_only && (b = {
                attributionsrc: ""
            });
            return Be(a, c, d, g, b) ? f : e(g, 1, 1, !0, !d.google_remarketing_only) + f
        }
        g = null;
        !d.google_conversion_domain && Be(a, c, d, b) && (g = "goog_conv_iframe",
        b = "");
        return ye("google_conversion_frame", "Google conversion frame", b, 2 == d.google_conversion_format ? 200 : 300, 2 == d.google_conversion_format ? 26 : 13, !1, g) + f
    }
    function Be(a, b, c, d, e) {
        if (c.google_conversion_domain)
            return !1;
        try {
            return Lc(a, b, d, null, e)
        } catch (f) {
            return !1
        }
    }
    function Ce(a) {
        if ("landing" === a.google_conversion_type || !a.google_conversion_id || a.google_remarketing_only && a.google_disable_viewthrough)
            return !1;
        a.google_conversion_date = new Date;
        a.google_conversion_time = a.google_conversion_date.getTime();
        a.google_conversion_snippets = "number" === typeof a.google_conversion_snippets && 0 < a.google_conversion_snippets ? a.google_conversion_snippets + 1 : 1;
        void 0 === a.google_conversion_first_time && (a.google_conversion_first_time = a.google_conversion_time);
        a.google_conversion_js_version = "9";
        0 != a.google_conversion_format && 1 != a.google_conversion_format && 2 != a.google_conversion_format && 3 != a.google_conversion_format && (a.google_conversion_format = 3);
        !1 !== a.google_enable_display_cookie_match && (a.google_enable_display_cookie_match = !0);
        return !0
    }
    function De(a) {
        for (var b = 0; b < ke.length; b++)
            a[ke[b]] = null
    }
    function Ee(a) {
        for (var b = {}, c = 0; c < ke.length; c++)
            b[ke[c]] = a[ke[c]];
        for (c = 0; c < le.length; c++)
            b[le[c]] = a[le[c]];
        return b
    }
    function ue() {
        var a = "";
        ic() && (a = qc().map(function(b) {
            return b.join("-")
        }).join("_"));
        return W("li", a)
    }
    function we(a) {
        if (!ac || !a.__gsaExp || !a.__gsaExp.id)
            return "";
        a = a.__gsaExp.id;
        if ("function" !== typeof a)
            return "";
        try {
            var b = Number(a());
            return isNaN(b) ? "" : W("gsaexp", b)
        } catch (c) {
            return ""
        }
    }
    function xe(a) {
        function b(d, e) {
            null != e && c.push(d + "=" + encodeURIComponent(e))
        }
        if (!hc())
            return "";
        a = fe(a);
        if (!a)
            return "";
        var c = [];
        b("&uaa", a.architecture);
        b("&uab", a.bitness);
        b("&uam", a.model);
        b("&uap", a.platform);
        b("&uapv", a.platformVersion);
        null != a.wow64 && b("&uaw", a.wow64 ? "1" : "0");
        a.fullVersionList && b("&uafvl", a.fullVersionList.map(function(d) {
            return encodeURIComponent(d.brand || "") + ";" + encodeURIComponent(d.version || "")
        }).join("|"));
        return c.join("")
    }
    function ve(a) {
        if (!a)
            return "";
        var b = "", c;
        for (c in a)
            a.hasOwnProperty(c) && (b += W(c, a[c]));
        return b
    }
    function re(a) {
        return (a = a.google_gtm_experiments) && a.gbcov ? !0 : !1
    }
    function Oe(a, b) {
        var c;
        if (c = !b.google_remarketing_only)
            if (b.google_transport_url || !M || "375603261" != N(19) && "375603260" != N(19))
                c = !1;
            else {
                b: {
                    if (!je && !Ec()) {
                        if (c = t("www.googleadservices.com", "endsWith").call("www.googleadservices.com", "google.com") ? "" : "A6kXmyCuZvElUva1W5xQNsbe69MdeA6sRuFq5S8omT8lvc4IjqpBA//6/w6dpbZFUw58hnyvILNvYDZX4SMf8QgAAACKeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZWFkc2VydmljZXMuY29tOjQ0MyIsImZlYXR1cmUiOiJQcml2YWN5U2FuZGJveEFkc0FQSXMiLCJleHBpcnkiOjE2ODgwODMxOTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9",
                        a.head) {
                            var d = Rb("META");
                            a.head.appendChild(d);
                            d.httpEquiv = "origin-trial";
                            d.content = c;
                            a = d
                        } else
                            a = null;
                        if (!a) {
                            a = !1;
                            break b
                        }
                        je = !0
                    }
                    a = Ec()
                }
                c = a
            }
        c && (a = b.google_additional_conversion_params || {},
        c = b.google_gtm_experiments,
        a.capi = c && c.apcm ? "2" : "1",
        b.google_additional_conversion_params = a)
    }
    ;var Re = !1
      , Se = document.currentScript && document.currentScript.src || "";
    function Te(a, b, c) {
        try {
            if (!Re && (Re = !0,
            !c.google_gtm)) {
                var d = void 0
                  , e = void 0
                  , f = Hb(a.location.href, "gtm_debug");
                Ue(f) && (d = 2);
                d || 0 !== b.referrer.indexOf("https://tagassistant.google.com/") || (d = 3);
                !d && 0 <= ya(b.cookie.split("; "), "__TAG_ASSISTANT=x") && (d = 4);
                d || (e = b.documentElement.getAttribute("data-tag-assistant-present"),
                Ue(e) && (d = 5));
                if (d) {
                    var g = "AW-" + (c.google_conversion_id || "");
                    if (!a["google.tagmanager.debugui2.queue"]) {
                        a["google.tagmanager.debugui2.queue"] = [];
                        var h = bb(wa(new y(ua,"https://www.googletagmanager.com/debug/bootstrap")));
                        c = {
                            id: g,
                            src: "LEGACY",
                            cond: d
                        };
                        var l = ab.exec($a(h).toString())
                          , m = l[3] || "";
                        var p = bb(l[1] + cb("?", l[2] || "", c) + cb("#", m));
                        var n = Rb("SCRIPT", b);
                        n.src = $a(p);
                        Jb(n);
                        var q = b.getElementsByTagName("script")[0];
                        q && q.parentNode && q.parentNode.insertBefore(n, q)
                    }
                    a["google.tagmanager.debugui2.queue"].push({
                        messageType: "LEGACY_CONTAINER_STARTING",
                        data: {
                            id: g,
                            scriptSource: Se
                        }
                    })
                }
            }
        } catch (G) {}
    }
    function Ue(a) {
        if (null == a || 0 === a.length)
            return !1;
        a = Number(a);
        var b = Date.now();
        return a < b + 3E5 && a > b - 9E5
    }
    ;function Ve(a) {
        return a.prerendering ? 3 : {
            visible: 1,
            hidden: 2,
            prerender: 3,
            preview: 4,
            unloaded: 5
        }[a.visibilityState || a.webkitVisibilityState || a.mozVisibilityState || ""] || 0
    }
    function We(a) {
        var b;
        a.visibilityState ? b = "visibilitychange" : a.mozVisibilityState ? b = "mozvisibilitychange" : a.webkitVisibilityState && (b = "webkitvisibilitychange");
        return b
    }
    function Xe(a, b) {
        if (3 == Ve(b))
            return !1;
        a();
        return !0
    }
    function Ye(a, b) {
        if (!Xe(a, b)) {
            var c = !1
              , d = We(b)
              , e = function() {
                !c && Xe(a, b) && (c = !0,
                b.removeEventListener && b.removeEventListener(d, e, !1))
            };
            d && b.addEventListener && b.addEventListener(d, e, !1)
        }
    }
    ;function Ze(a) {
        var b = t(Object, "assign").call(Object, {}, a);
        a = a.id;
        b = (delete b.id,
        b);
        if (t(Object, "keys").call(Object, b).length)
            throw Error("Invalid attribute(s): " + t(Object, "keys").call(Object, b));
        a = {
            id: a
        };
        if (!Ab.test("span"))
            throw Error("");
        if ("SPAN"in Cb)
            throw Error("");
        b = void 0;
        var c = "";
        if (a)
            for (l in a)
                if (Object.prototype.hasOwnProperty.call(a, l)) {
                    if (!Ab.test(l))
                        throw Error("");
                    var d = a[l];
                    if (null != d) {
                        var e = void 0;
                        var f = l;
                        if (d instanceof y)
                            d = wa(d);
                        else if ("style" == f.toLowerCase()) {
                            var g = typeof d;
                            g = "object" == g && null != d || "function" == g;
                            if (!g)
                                throw Error("");
                            if (!(d instanceof F)) {
                                g = "";
                                for (e in d)
                                    if (Object.prototype.hasOwnProperty.call(d, e)) {
                                        if (!/^[-_a-zA-Z0-9]+$/.test(e))
                                            throw Error("Name allows only [-_a-zA-Z0-9], got: " + e);
                                        var h = d[e];
                                        null != h && (h = Array.isArray(h) ? h.map(lb).join(" ") : lb(h),
                                        g += e + ":" + h + ";")
                                    }
                                d = g ? new F(g,jb) : kb
                            }
                            d = d instanceof F && d.constructor === F ? d.h : "type_error:SafeStyle"
                        } else {
                            if (/^on/i.test(f))
                                throw Error("");
                            if (f.toLowerCase()in Bb)
                                if (d instanceof D)
                                    d = $a(d).toString();
                                else if (d instanceof E)
                                    d = eb(d);
                                else if ("string" === typeof d)
                                    d = (hb(d) || ib).g();
                                else
                                    throw Error("");
                        }
                        d.j && (d = d.g());
                        e = f + '="' + Ia(String(d)) + '"';
                        c += " " + e
                    }
                }
        var l = "<span" + c;
        null == b ? b = [] : Array.isArray(b) || (b = [b]);
        !0 === Wa.span ? l += ">" : (b = zb(b),
        l += ">" + ub(b).toString() + "</span>");
        return wb(l)
    }
    ;M = new function() {
        var a = [];
        var b = 0, c;
        for (c in gc)
            a[b++] = gc[c];
        a = void 0 === a ? [] : a;
        this.h = {};
        this.g = {};
        for (b = 0; b < a.length; ++b)
            this.g[a[b]] = ""
    }
    ;
    L(["466465925", "466465926"], Ub, 20);
    hc() && he();
    M && L(["592230570", "592230571"], Tb, 16);
    ic() && (oc(1),
    pc());
    function $e(a, b, c) {
        function d(m, p) {
            var n = new Image;
            n.onload = m;
            n.src = p
        }
        function e() {
            --f;
            if (0 >= f) {
                var m = Gc(a, !1)
                  , p = m[b];
                p && (delete m[b],
                (m = p[0]) && m.call && m())
            }
        }
        var f = c.length + 1;
        if (2 == c.length) {
            var g = c[0]
              , h = c[1];
            0 <= Fb(g, 0, "rmt_tld", g.search(Gb)) && 0 <= Fb(g, 0, "ipr", g.search(Gb)) && !h.match(Db)[6] && (h += Eb(g),
            c[1] = I(h, "rmt_tld", "1"))
        }
        for (g = 0; g < c.length; g++) {
            h = c[g];
            var l = Hb(h, "fmt");
            switch (parseInt(l, 10)) {
            case 1:
            case 2:
                (l = a.document.getElementById("goog_conv_iframe")) && !l.src ? Dc(h, e, l) : d(e, h);
                break;
            case 4:
                Lc(a, a.document, h, e);
                break;
            case 5:
                if (a.navigator && a.navigator.sendBeacon)
                    if (a.navigator.sendBeacon(h, "")) {
                        e();
                        break
                    } else
                        h = I(h, "sendb", 2);
                h = I(h, "fmt", 3);
            default:
                d(e, h)
            }
        }
        e()
    }
    var af = ["GooglemKTybQhCsO"]
      , X = v;
    af[0]in X || "undefined" == typeof X.execScript || X.execScript("var " + af[0]);
    for (var Y; af.length && (Y = af.shift()); )
        af.length || void 0 === $e ? X[Y] && X[Y] !== Object.prototype[Y] ? X = X[Y] : X = X[Y] = {} : X[Y] = $e;
    (function(a, b, c) {
        if (a) {
            Te(a, c, a);
            try {
                if (Ce(a)) {
                    var d = Ee(a);
                    M && L(["375603260", "375603261"], bc ? 1 : 0, 19);
                    M && L(["512247838", "512247839"], cc ? 1 : 0, 22);
                    if (3 == Ve(c)) {
                        var e = "google_conversion_" + Math.floor(1E9 * Math.random());
                        Kb(c, Ze({
                            id: e
                        }));
                        Ye(function() {
                            try {
                                Oe(c, d);
                                var f = c.getElementById(e);
                                if (f) {
                                    var g = wc(Ae(a, b, c, d));
                                    if (void 0 !== f.tagName) {
                                        if ("script" === f.tagName.toLowerCase())
                                            throw Error("");
                                        if ("style" === f.tagName.toLowerCase())
                                            throw Error("");
                                    }
                                    f.innerHTML = ub(g)
                                }
                            } catch (h) {}
                        }, c)
                    } else
                        Oe(c, d),
                        Kb(c, wc(Ae(a, b, c, d)))
                }
            } catch (f) {}
            De(a)
        }
    }
    )(window, navigator, document);
}
).call(this);