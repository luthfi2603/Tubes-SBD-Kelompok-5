(function(sttc) {
    /* 
 
 Copyright The Closure Library Authors. 
 SPDX-License-Identifier: Apache-2.0 
*/
    'use strict';
    var aa = {}
      , n = this || self;
    function ba(a, b) {
        var c = ca("CLOSURE_FLAGS");
        a = c && c[a];
        return null != a ? a : b
    }
    function ca(a) {
        a = a.split(".");
        for (var b = n, c = 0; c < a.length; c++)
            if (b = b[a[c]],
            null == b)
                return null;
        return b
    }
    function da(a) {
        var b = typeof a;
        b = "object" != b ? b : a ? Array.isArray(a) ? "array" : b : "null";
        return "array" == b || "object" == b && "number" == typeof a.length
    }
    function ea(a) {
        var b = typeof a;
        return "object" == b && null != a || "function" == b
    }
    function fa(a) {
        return Object.prototype.hasOwnProperty.call(a, ha) && a[ha] || (a[ha] = ++ia)
    }
    var ha = "closure_uid_" + (1E9 * Math.random() >>> 0)
      , ia = 0;
    function ja(a, b, c) {
        return a.call.apply(a.bind, arguments)
    }
    function ka(a, b, c) {
        if (!a)
            throw Error();
        if (2 < arguments.length) {
            var d = Array.prototype.slice.call(arguments, 2);
            return function() {
                var e = Array.prototype.slice.call(arguments);
                Array.prototype.unshift.apply(e, d);
                return a.apply(b, e)
            }
        }
        return function() {
            return a.apply(b, arguments)
        }
    }
    function la(a, b, c) {
        la = Function.prototype.bind && -1 != Function.prototype.bind.toString().indexOf("native code") ? ja : ka;
        return la.apply(null, arguments)
    }
    function ma(a, b) {
        var c = Array.prototype.slice.call(arguments, 1);
        return function() {
            var d = c.slice();
            d.push.apply(d, arguments);
            return a.apply(this, d)
        }
    }
    function na(a, b) {
        a = a.split(".");
        var c = n;
        a[0]in c || "undefined" == typeof c.execScript || c.execScript("var " + a[0]);
        for (var d; a.length && (d = a.shift()); )
            a.length || void 0 === b ? c[d] && c[d] !== Object.prototype[d] ? c = c[d] : c = c[d] = {} : c[d] = b
    }
    function oa(a) {
        return a
    }
    ;let pa = (new Date).getTime();
    function qa(a) {
        return /^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1]
    }
    function sa(a, b) {
        let c = 0;
        a = qa(String(a)).split(".");
        b = qa(String(b)).split(".");
        const d = Math.max(a.length, b.length);
        for (let g = 0; 0 == c && g < d; g++) {
            var e = a[g] || ""
              , f = b[g] || "";
            do {
                e = /(\d*)(\D*)(.*)/.exec(e) || ["", "", "", ""];
                f = /(\d*)(\D*)(.*)/.exec(f) || ["", "", "", ""];
                if (0 == e[0].length && 0 == f[0].length)
                    break;
                c = ta(0 == e[1].length ? 0 : parseInt(e[1], 10), 0 == f[1].length ? 0 : parseInt(f[1], 10)) || ta(0 == e[2].length, 0 == f[2].length) || ta(e[2], f[2]);
                e = e[3];
                f = f[3]
            } while (0 == c)
        }
        return c
    }
    function ta(a, b) {
        return a < b ? -1 : a > b ? 1 : 0
    }
    ;var ua = ba(610401301, !1)
      , va = ba(516931134, ba(1, !0));
    function wa() {
        var a = n.navigator;
        return a && (a = a.userAgent) ? a : ""
    }
    var xa;
    const Aa = n.navigator;
    xa = Aa ? Aa.userAgentData || null : null;
    function Ba(a) {
        return ua ? xa ? xa.brands.some(({brand: b})=>b && -1 != b.indexOf(a)) : !1 : !1
    }
    function p(a) {
        return -1 != wa().indexOf(a)
    }
    ;function Ca() {
        return ua ? !!xa && 0 < xa.brands.length : !1
    }
    function Da() {
        return Ca() ? !1 : p("Trident") || p("MSIE")
    }
    function Ea() {
        return Ca() ? Ba("Microsoft Edge") : p("Edg/")
    }
    function Fa() {
        !p("Safari") || Ga() || (Ca() ? 0 : p("Coast")) || (Ca() ? 0 : p("Opera")) || (Ca() ? 0 : p("Edge")) || Ea() || Ca() && Ba("Opera")
    }
    function Ga() {
        return Ca() ? Ba("Chromium") : (p("Chrome") || p("CriOS")) && !(Ca() ? 0 : p("Edge")) || p("Silk")
    }
    function Ha(a) {
        const b = {};
        a.forEach(c=>{
            b[c[0]] = c[1]
        }
        );
        return c=>b[c.find(d=>d in b)] || ""
    }
    function Ja() {
        var a = wa();
        if (Da()) {
            var b = /rv: *([\d\.]*)/.exec(a);
            if (b && b[1])
                a = b[1];
            else {
                b = "";
                var c = /MSIE +([\d\.]+)/.exec(a);
                if (c && c[1])
                    if (a = /Trident\/(\d.\d)/.exec(a),
                    "7.0" == c[1])
                        if (a && a[1])
                            switch (a[1]) {
                            case "4.0":
                                b = "8.0";
                                break;
                            case "5.0":
                                b = "9.0";
                                break;
                            case "6.0":
                                b = "10.0";
                                break;
                            case "7.0":
                                b = "11.0"
                            }
                        else
                            b = "7.0";
                    else
                        b = c[1];
                a = b
            }
            return a
        }
        c = RegExp("([A-Z][\\w ]+)/([^\\s]+)\\s*(?:\\((.*?)\\))?", "g");
        b = [];
        let d;
        for (; d = c.exec(a); )
            b.push([d[1], d[2], d[3] || void 0]);
        a = Ha(b);
        return (Ca() ? 0 : p("Opera")) ? a(["Version", "Opera"]) : (Ca() ? 0 : p("Edge")) ? a(["Edge"]) : Ea() ? a(["Edg"]) : p("Silk") ? a(["Silk"]) : Ga() ? a(["Chrome", "CriOS", "HeadlessChrome"]) : (a = b[2]) && a[1] || ""
    }
    ;function Ka(a, b) {
        if ("string" === typeof a)
            return "string" !== typeof b || 1 != b.length ? -1 : a.indexOf(b, 0);
        for (let c = 0; c < a.length; c++)
            if (c in a && a[c] === b)
                return c;
        return -1
    }
    function La(a, b) {
        const c = a.length
          , d = "string" === typeof a ? a.split("") : a;
        for (let e = 0; e < c; e++)
            e in d && b.call(void 0, d[e], e, a)
    }
    function Ma(a, b) {
        const c = a.length
          , d = [];
        let e = 0;
        const f = "string" === typeof a ? a.split("") : a;
        for (let g = 0; g < c; g++)
            if (g in f) {
                const h = f[g];
                b.call(void 0, h, g, a) && (d[e++] = h)
            }
        return d
    }
    function Na(a, b) {
        const c = a.length
          , d = Array(c)
          , e = "string" === typeof a ? a.split("") : a;
        for (let f = 0; f < c; f++)
            f in e && (d[f] = b.call(void 0, e[f], f, a));
        return d
    }
    function Oa(a, b) {
        const c = a.length
          , d = "string" === typeof a ? a.split("") : a;
        for (let e = 0; e < c; e++)
            if (e in d && b.call(void 0, d[e], e, a))
                return !0;
        return !1
    }
    function Pa(a, b) {
        a: {
            const c = a.length
              , d = "string" === typeof a ? a.split("") : a;
            for (let e = 0; e < c; e++)
                if (e in d && b.call(void 0, d[e], e, a)) {
                    b = e;
                    break a
                }
            b = -1
        }
        return 0 > b ? null : "string" === typeof a ? a.charAt(b) : a[b]
    }
    function Qa(a, b) {
        a: {
            var c = a.length;
            const d = "string" === typeof a ? a.split("") : a;
            for (--c; 0 <= c; c--)
                if (c in d && b.call(void 0, d[c], c, a)) {
                    b = c;
                    break a
                }
            b = -1
        }
        return 0 > b ? null : "string" === typeof a ? a.charAt(b) : a[b]
    }
    function Ra(a, b) {
        return 0 <= Ka(a, b)
    }
    function Sa(a) {
        const b = a.length;
        if (0 < b) {
            const c = Array(b);
            for (let d = 0; d < b; d++)
                c[d] = a[d];
            return c
        }
        return []
    }
    ;function Ta(a) {
        Ta[" "](a);
        return a
    }
    Ta[" "] = function() {}
    ;
    var Va = Da();
    !p("Android") || Ga();
    Ga();
    Fa();
    var Wa = null;
    function Xa(a) {
        var b = [];
        Ya(a, function(c) {
            b.push(c)
        });
        return b
    }
    function Ya(a, b) {
        function c(l) {
            for (; d < a.length; ) {
                var k = a.charAt(d++)
                  , m = Wa[k];
                if (null != m)
                    return m;
                if (!/^[\s\xa0]*$/.test(k))
                    throw Error("Unknown base64 encoding at char: " + k);
            }
            return l
        }
        Za();
        for (var d = 0; ; ) {
            var e = c(-1)
              , f = c(0)
              , g = c(64)
              , h = c(64);
            if (64 === h && -1 === e)
                break;
            b(e << 2 | f >> 4);
            64 != g && (b(f << 4 & 240 | g >> 2),
            64 != h && b(g << 6 & 192 | h))
        }
    }
    function Za() {
        if (!Wa) {
            Wa = {};
            for (var a = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split(""), b = ["+/=", "+/", "-_=", "-_.", "-_"], c = 0; 5 > c; c++)
                for (var d = a.concat(b[c].split("")), e = 0; e < d.length; e++) {
                    var f = d[e];
                    void 0 === Wa[f] && (Wa[f] = e)
                }
        }
    }
    ;const $a = Symbol();
    function ab(a, b) {
        if ($a)
            return a[$a] |= b;
        if (void 0 !== a.h)
            return a.h |= b;
        Object.defineProperties(a, {
            h: {
                value: b,
                configurable: !0,
                writable: !0,
                enumerable: !1
            }
        });
        return b
    }
    function bb(a, b) {
        $a ? a[$a] && (a[$a] &= ~b) : void 0 !== a.h && (a.h &= ~b)
    }
    function q(a) {
        let b;
        $a ? b = a[$a] : b = a.h;
        return null == b ? 0 : b
    }
    function cb(a, b) {
        $a ? a[$a] = b : void 0 !== a.h ? a.h = b : Object.defineProperties(a, {
            h: {
                value: b,
                configurable: !0,
                writable: !0,
                enumerable: !1
            }
        });
        return a
    }
    function db(a) {
        ab(a, 1);
        return a
    }
    function eb(a) {
        return !!(q(a) & 2)
    }
    function fb(a) {
        ab(a, 16);
        return a
    }
    function gb(a, b) {
        cb(b, (a | 0) & -51)
    }
    function hb(a, b) {
        cb(b, (a | 18) & -41)
    }
    ;var ib = {};
    function jb(a) {
        return null !== a && "object" === typeof a && !Array.isArray(a) && a.constructor === Object
    }
    let kb;
    var lb = Object.freeze(cb([], 23));
    function mb(a) {
        if (q(a.u) & 2)
            throw Error();
    }
    function nb(a) {
        var b = a.length;
        (b = b ? a[b - 1] : void 0) && jb(b) ? b.g = 1 : a.push({
            g: 1
        })
    }
    ;const r = !va;
    function ob(a) {
        if (null == a)
            return a;
        switch (typeof a) {
        case "string":
            return +a;
        case "number":
            return a
        }
    }
    function pb(a) {
        return a
    }
    function qb(a, b, c) {
        let d = !1;
        if (null != a && "object" === typeof a && !(d = Array.isArray(a)) && a.va === ib)
            return a;
        if (d)
            return rb(a, c),
            new b(a)
    }
    function rb(a, b) {
        const c = q(a);
        let d = c;
        0 === d && (d |= b & 16);
        d |= b & 2;
        d !== c && cb(a, d)
    }
    ;function sb(a) {
        const b = a.j + a.W;
        return a.H || (a.H = a.u[b] = {})
    }
    function t(a, b, c) {
        return -1 === b ? null : b >= a.j ? a.H ? a.H[b] : void 0 : c && a.H && (c = a.H[b],
        null != c) ? c : a.u[b + a.W]
    }
    function y(a, b, c, d) {
        mb(a);
        return z(a, b, c, d)
    }
    function z(a, b, c, d) {
        a.v && (a.v = void 0);
        if (b >= a.j || d)
            return sb(a)[b] = c,
            a;
        a.u[b + a.W] = c;
        (c = a.H) && b in c && delete c[b];
        return a
    }
    function tb(a, b, c, d, e) {
        let f = t(a, b, d);
        Array.isArray(f) || (f = lb);
        const g = q(f);
        g & 1 || db(f);
        if (e)
            g & 2 || ab(f, 18),
            c & 1 || Object.freeze(f);
        else {
            e = !(c & 2);
            const h = g & 2;
            c & 1 || !h ? e && g & 16 && !h && bb(f, 16) : (f = db(Array.prototype.slice.call(f)),
            z(a, b, f, d))
        }
        return f
    }
    function ub(a, b) {
        a = t(a, b);
        return null == a ? a : !!a
    }
    function vb(a, b, c) {
        const d = eb(a.u);
        let e = tb(a, b, 1, void 0, d)
          , f = q(e);
        if (!(f & 4)) {
            Object.isFrozen(e) && (e = db(e.slice()),
            z(a, b, e));
            let g = 0
              , h = 0;
            for (; g < e.length; g++) {
                const l = c(e[g]);
                null != l && (e[h++] = l)
            }
            h < g && (e.length = h);
            f |= 5;
            d && (f |= 18);
            cb(e, f);
            f & 2 && Object.freeze(e)
        }
        !d && (f & 2 || Object.isFrozen(e)) && (e = Array.prototype.slice.call(e),
        ab(e, 5),
        z(a, b, e));
        return e
    }
    function A(a, b, c=!1) {
        return B(ub(a, b), c)
    }
    function wb(a, b, c) {
        if (null == c)
            a = y(a, b, lb);
        else {
            var d = q(c);
            if (!(d & 4)) {
                if (d & 2 || Object.isFrozen(c))
                    c = Array.prototype.slice.call(c);
                for (let e = 0; e < c.length; e++)
                    c[e] = c[e];
                cb(c, d | 5)
            }
            a = y(a, b, c)
        }
        return a
    }
    function C(a, b, c, d) {
        mb(a);
        c !== d ? z(a, b, c) : z(a, b, void 0, !1);
        return a
    }
    function xb(a, b, c, d) {
        mb(a);
        (c = yb(a, c)) && c !== b && null != d && z(a, c, void 0, !1);
        return z(a, b, d)
    }
    function zb(a, b, c) {
        return yb(a, b) === c ? c : -1
    }
    function yb(a, b) {
        let c = 0;
        for (let d = 0; d < b.length; d++) {
            const e = b[d];
            null != t(a, e) && (0 !== c && z(a, c, void 0, !1),
            c = e)
        }
        return c
    }
    function Ab(a, b, c, d) {
        const e = t(a, c, d);
        b = qb(e, b, q(a.u));
        b !== e && null != b && z(a, c, b, d);
        return b
    }
    function D(a, b, c) {
        b = Ab(a, b, c, !1);
        if (null == b)
            return b;
        if (!eb(a.u)) {
            const d = Bb(b);
            d !== b && (b = d,
            z(a, c, b, !1))
        }
        return b
    }
    function Cb(a, b, c, d, e) {
        var f = !!(e & 2);
        r && !a.h && (a.h = {});
        var g = r ? a.h[c] : void 0
          , h = tb(a, c, 1 | (r ? 2 : 0), void 0, f);
        if (r ? !g : h === lb || !(q(h) & 4)) {
            var l = h;
            g = r ? [] : void 0;
            h = !!(e & 2);
            f = !!(q(l) & 2);
            var k = l;
            !h && f && (l = Array.prototype.slice.call(l));
            var m = e | (f ? 2 : 0);
            e = f;
            let x = 0
              , w = 0;
            for (; x < l.length; x++) {
                var u = l[x];
                if (r) {
                    var v = b;
                    Array.isArray(u) ? (rb(u, m),
                    u = new v(u)) : u = void 0
                } else
                    u = qb(u, b, m);
                void 0 !== u && (e = e || !!(2 & q(u.u)),
                r ? g.push(u) : l[w++] = u)
            }
            r ? a.h[c] = g : w < x && (l.length = w);
            m = q(l);
            b = m | 1;
            b = r ? b | 32 : b | 4;
            b = e ? b & -9 : b | 8;
            m != b && (e = l,
            Object.isFrozen(e) && (e = Array.prototype.slice.call(e)),
            cb(e, b),
            l = e);
            k !== l && z(a, c, l);
            r && (h || 1 === d && f) && ab(g, 18);
            (h || 1 === d) && Object.freeze(r ? g : l);
            return r ? g : l
        }
        if (3 === d)
            return r ? g : h;
        f || (r ? (f = Object.isFrozen(g),
        1 !== d || f) ? 2 === d && f && (g = Array.prototype.slice.call(g),
        a.h[c] = g) : Object.freeze(g) : (f = Object.isFrozen(h),
        1 === d ? f || Object.freeze(h) : (d = q(h),
        k = d & -19,
        f && (h = Array.prototype.slice.call(h),
        d = 0,
        z(a, c, h)),
        d !== k && cb(h, k))));
        return r ? g : h
    }
    function E(a, b, c) {
        var d = q(a.u)
          , e = !!(d & 2);
        b = Cb(a, b, c, e ? 1 : 2, d);
        a = r ? tb(a, c, 3, void 0, e) : b;
        if (!(e || q(a) & 8)) {
            for (e = 0; e < b.length; e++)
                c = b[e],
                d = Bb(c),
                c !== d && (b[e] = d,
                r && (a[e] = d.u));
            ab(a, 8)
        }
        return b
    }
    function Db(a, b, c) {
        mb(a);
        null == c && (c = void 0);
        return z(a, b, c)
    }
    function Eb(a, b, c, d) {
        mb(a);
        null == d && (d = void 0);
        return xb(a, b, c, d)
    }
    function Fb(a, b, c, d) {
        mb(a);
        var e = null == c ? lb : r ? db([]) : c;
        if (null != c) {
            var f = !!c.length;
            for (var g = 0; g < c.length; g++) {
                const h = c[g];
                f = f && !eb(h.u);
                r && (e[g] = h.u)
            }
            f = 1 | (f ? 8 : 0) | (r ? 0 : 4);
            g = q(e);
            (g & f) !== f && (Object.isFrozen(e) && (e = Array.prototype.slice.call(e)),
            cb(e, g | f));
            r && (a.h || (a.h = {}),
            a.h[b] = c)
        } else
            r && a.h && (a.h[b] = void 0);
        return z(a, b, e, d)
    }
    function Gb(a, b) {
        return ob(t(a, b))
    }
    function Hb(a, b) {
        a: if (a = t(a, b),
        null != a) {
            switch (typeof a) {
            case "string":
                a = +a;
                break a;
            case "number":
                break a
            }
            a = void 0
        }
        return a
    }
    function B(a, b) {
        return null == a ? b : a
    }
    function F(a, b) {
        return B(t(a, b), "")
    }
    function Ib(a, b) {
        const c = t(a, b);
        var d = null == c ? c : "number" === typeof c || "NaN" === c || "Infinity" === c || "-Infinity" === c ? Number(c) : void 0;
        null != d && d !== c && z(a, b, d);
        return B(d, 0)
    }
    function H(a, b) {
        return B(t(a, b), 0)
    }
    function Jb(a, b, c, d) {
        return D(a, b, zb(a, d, c))
    }
    ;let Kb;
    function Lb(a, b) {
        Kb = b;
        a = new a(b);
        Kb = void 0;
        return a
    }
    ;function Mb(a, b) {
        return Nb(b)
    }
    function Nb(a) {
        switch (typeof a) {
        case "number":
            return isFinite(a) ? a : String(a);
        case "object":
            if (a)
                if (Array.isArray(a)) {
                    if (0 !== (q(a) & 128))
                        return a = Array.prototype.slice.call(a),
                        nb(a),
                        a
                } else if (null != a && a instanceof Uint8Array) {
                    let b = ""
                      , c = 0;
                    const d = a.length - 10240;
                    for (; c < d; )
                        b += String.fromCharCode.apply(null, a.subarray(c, c += 10240));
                    b += String.fromCharCode.apply(null, c ? a.subarray(c) : a);
                    return btoa(b)
                }
        }
        return a
    }
    ;function Ob(a, b, c, d, e, f) {
        if (null != a) {
            if (Array.isArray(a))
                a = e && 0 == a.length && q(a) & 1 ? void 0 : f && q(a) & 2 ? a : Pb(a, b, c, void 0 !== d, e, f);
            else if (jb(a)) {
                const g = {};
                for (let h in a)
                    Object.prototype.hasOwnProperty.call(a, h) && (g[h] = Ob(a[h], b, c, d, e, f));
                a = g
            } else
                a = b(a, d);
            return a
        }
    }
    function Pb(a, b, c, d, e, f) {
        const g = q(a);
        d = d ? !!(g & 16) : void 0;
        a = Array.prototype.slice.call(a);
        for (let h = 0; h < a.length; h++)
            a[h] = Ob(a[h], b, c, d, e, f);
        c(g, a);
        return a
    }
    function Qb(a) {
        return a.va === ib ? a.toJSON() : Nb(a)
    }
    function Rb(a, b) {
        a & 128 && nb(b)
    }
    ;function Sb(a, b, c=hb) {
        if (null != a) {
            if (a instanceof Uint8Array)
                return b ? a : new Uint8Array(a);
            if (Array.isArray(a)) {
                const d = q(a);
                if (d & 2)
                    return a;
                if (b && !(d & 32) && (d & 16 || 0 === d))
                    return cb(a, d | 18),
                    a;
                a = Pb(a, Sb, d & 4 ? hb : c, !0, !1, !0);
                b = q(a);
                b & 4 && b & 2 && Object.freeze(a);
                return a
            }
            return a.va === ib ? Tb(a) : a
        }
    }
    function Ub(a, b, c, d, e, f, g) {
        (a = r ? a.h && a.h[c] : void 0) ? (d = q(a),
        d & 2 ? d = a : (f = Na(a, Tb),
        hb(d, f),
        Object.freeze(f),
        d = f),
        Fb(b, c, d, e)) : y(b, c, Sb(d, f, g), e)
    }
    function Tb(a) {
        if (eb(a.u))
            return a;
        a = Vb(a, !0);
        ab(a.u, 18);
        return a
    }
    function Vb(a, b) {
        const c = a.u;
        var d = fb([])
          , e = a.constructor.messageId;
        e && d.push(e);
        e = a.H;
        if (e) {
            d.length = c.length;
            var f = {};
            d[d.length - 1] = f
        }
        0 !== (q(c) & 128) && nb(d);
        b = b || eb(a.u) ? hb : gb;
        d = Lb(a.constructor, d);
        a.Na && (d.Na = a.Na.slice());
        f = !!(q(c) & 16);
        const g = e ? c.length - 1 : c.length;
        for (let h = 0; h < g; h++)
            Ub(a, d, h - a.W, c[h], !1, f, b);
        if (e)
            for (const h in e)
                Ub(a, d, +h, e[h], !0, f, b);
        return d
    }
    function Bb(a) {
        if (!eb(a.u))
            return a;
        const b = Vb(a, !1);
        b.v = a;
        return b
    }
    ;var I = class {
        constructor(a, b, c) {
            null == a && (a = Kb);
            Kb = void 0;
            var d = this.constructor.messageId;
            if (null == a) {
                a = d ? [d] : [];
                var e = !0;
                cb(a, 48)
            } else {
                if (!Array.isArray(a))
                    throw Error();
                if (d && d !== a[0])
                    throw Error();
                var f = ab(a, 0) | 32;
                e = 0 !== (16 & f);
                if (128 & f)
                    throw Error();
                cb(a, f)
            }
            this.W = d ? 0 : -1;
            this.h = void 0;
            this.u = a;
            a: {
                f = this.u.length;
                d = f - 1;
                if (f && (f = this.u[d],
                jb(f))) {
                    this.H = f;
                    this.j = d - this.W;
                    break a
                }
                void 0 !== b && -1 < b ? (this.j = Math.max(b, d + 1 - this.W),
                this.H = void 0) : this.j = Number.MAX_VALUE
            }
            if (this.H && "g"in this.H)
                throw Error('Unexpected "g" flag in sparse object of message that is not a group type.');
            if (c) {
                b = e && !0;
                e = this.j;
                let h;
                for (d = 0; d < c.length; d++)
                    if (f = c[d],
                    f < e) {
                        f += this.W;
                        var g = a[f];
                        g ? Wb(g, b) : a[f] = lb
                    } else
                        h || (h = sb(this)),
                        (g = h[f]) ? Wb(g, b) : h[f] = lb
            }
        }
        toJSON() {
            const a = this.u;
            var b;
            kb ? b = a : b = Pb(a, Qb, Rb, void 0, !1, !1);
            return b
        }
    }
    ;
    function Wb(a, b) {
        if (Array.isArray(a)) {
            var c = q(a)
              , d = 1;
            !b || c & 2 || (d |= 16);
            (c & d) !== d && cb(a, c | d)
        }
    }
    I.prototype.va = ib;
    const Xb = a=>null !== a && void 0 !== a;
    let Yb = void 0;
    function Zb(a, b) {
        const c = Yb;
        Yb = void 0;
        if (!b(a))
            throw b = c ? c() + "\n" : "",
            Error(b + String(a));
    }
    ;function ac(a) {
        return b=>{
            if (null == b || "" == b)
                b = new a;
            else {
                b = JSON.parse(b);
                if (!Array.isArray(b))
                    throw Error(void 0);
                b = Lb(a, fb(b))
            }
            return b
        }
    }
    ;var bc = class extends I {
        constructor(a) {
            super(a)
        }
    }
    ;
    var dc = class extends I {
        constructor(a) {
            super(a, -1, cc)
        }
    }
      , cc = [2, 3];
    function ec(a, b) {
        this.i = a === fc && b || "";
        this.h = gc
    }
    var gc = {}
      , fc = {};
    function hc(a) {
        return function() {
            return !a.apply(this, arguments)
        }
    }
    function ic(a) {
        let b = !1, c;
        return function() {
            b || (c = a(),
            b = !0);
            return c
        }
    }
    function jc(a) {
        let b = a;
        return function() {
            if (b) {
                const c = b;
                b = null;
                c()
            }
        }
    }
    ;function kc(a, b, c) {
        a.addEventListener && a.addEventListener(b, c, !1)
    }
    function lc(a, b, c) {
        return a.removeEventListener ? (a.removeEventListener(b, c, !1),
        !0) : !1
    }
    ;function mc(a, b) {
        const c = {};
        for (const d in a)
            b.call(void 0, a[d], d, a) && (c[d] = a[d]);
        return c
    }
    function nc(a, b) {
        for (const c in a)
            if (b.call(void 0, a[c], c, a))
                return !0;
        return !1
    }
    function oc(a) {
        const b = [];
        let c = 0;
        for (const d in a)
            b[c++] = a[d];
        return b
    }
    function pc(a) {
        const b = {};
        for (const c in a)
            b[c] = a[c];
        return b
    }
    ;var qc;
    function rc() {
        if (void 0 === qc) {
            var a = null
              , b = n.trustedTypes;
            if (b && b.createPolicy) {
                try {
                    a = b.createPolicy("goog#html", {
                        createHTML: oa,
                        createScript: oa,
                        createScriptURL: oa
                    })
                } catch (c) {
                    n.console && n.console.error(c.message)
                }
                qc = a
            } else
                qc = a
        }
        return qc
    }
    ;const sc = {};
    class tc {
        constructor(a, b) {
            this.h = b === sc ? a : ""
        }
        toString() {
            return this.h.toString()
        }
    }
    ;var vc = class {
        constructor(a, b) {
            this.h = b === uc ? a : ""
        }
        toString() {
            return this.h + ""
        }
    }
    ;
    function wc(a, b) {
        a = xc.exec(yc(a).toString());
        var c = a[3] || "";
        return zc(a[1] + Ac("?", a[2] || "", b) + Ac("#", c))
    }
    function yc(a) {
        return a instanceof vc && a.constructor === vc ? a.h : "type_error:TrustedResourceUrl"
    }
    var xc = /^([^?#]*)(\?[^#]*)?(#[\s\S]*)?/
      , uc = {};
    function zc(a) {
        const b = rc();
        a = b ? b.createScriptURL(a) : a;
        return new vc(a,uc)
    }
    function Ac(a, b, c) {
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
    ;function Bc(a) {
        return String(a).replace(/\-([a-z])/g, function(b, c) {
            return c.toUpperCase()
        })
    }
    ;function Cc(a, b, c) {
        function d(h) {
            h && b.appendChild("string" === typeof h ? a.createTextNode(h) : h)
        }
        for (var e = 1; e < c.length; e++) {
            var f = c[e];
            if (!da(f) || ea(f) && 0 < f.nodeType)
                d(f);
            else {
                a: {
                    if (f && "number" == typeof f.length) {
                        if (ea(f)) {
                            var g = "function" == typeof f.item || "string" == typeof f.item;
                            break a
                        }
                        if ("function" === typeof f) {
                            g = "function" == typeof f.item;
                            break a
                        }
                    }
                    g = !1
                }
                La(g ? Sa(f) : f, d)
            }
        }
    }
    function Dc(a) {
        this.h = a || n.document || document
    }
    Dc.prototype.getElementsByTagName = function(a, b) {
        return (b || this.h).getElementsByTagName(String(a))
    }
    ;
    Dc.prototype.createElement = function(a) {
        var b = this.h;
        a = String(a);
        "application/xhtml+xml" === b.contentType && (a = a.toLowerCase());
        return b.createElement(a)
    }
    ;
    Dc.prototype.createTextNode = function(a) {
        return this.h.createTextNode(String(a))
    }
    ;
    Dc.prototype.append = function(a, b) {
        Cc(9 == a.nodeType ? a : a.ownerDocument || a.document, a, arguments)
    }
    ;
    Dc.prototype.contains = function(a, b) {
        if (!a || !b)
            return !1;
        if (a.contains && 1 == b.nodeType)
            return a == b || a.contains(b);
        if ("undefined" != typeof a.compareDocumentPosition)
            return a == b || !!(a.compareDocumentPosition(b) & 16);
        for (; b && a != b; )
            b = b.parentNode;
        return b == a
    }
    ;
    function Ec() {
        return ua && xa ? xa.mobile : !Fc() && (p("iPod") || p("iPhone") || p("Android") || p("IEMobile"))
    }
    function Fc() {
        return ua && xa ? !xa.mobile && (p("iPad") || p("Android") || p("Silk")) : p("iPad") || p("Android") && !p("Mobile") || p("Silk")
    }
    ;var Gc = RegExp("^(?:([^:/?#.]+):)?(?://(?:([^\\\\/?#]*)@)?([^\\\\/?#]*?)(?::([0-9]+))?(?=[\\\\/?#]|$))?([^?#]+)?(?:\\?([^#]*))?(?:#([\\s\\S]*))?$")
      , Hc = /#|$/;
    function Ic(a, b) {
        var c = a.search(Hc);
        a: {
            var d = 0;
            for (var e = b.length; 0 <= (d = a.indexOf(b, d)) && d < c; ) {
                var f = a.charCodeAt(d - 1);
                if (38 == f || 63 == f)
                    if (f = a.charCodeAt(d + e),
                    !f || 61 == f || 38 == f || 35 == f)
                        break a;
                d += e + 1
            }
            d = -1
        }
        if (0 > d)
            return null;
        e = a.indexOf("&", d);
        if (0 > e || e > c)
            e = c;
        d += b.length + 1;
        return decodeURIComponent(a.slice(d, -1 !== e ? e : 0).replace(/\+/g, " "))
    }
    ;/* 
 
 SPDX-License-Identifier: Apache-2.0 
*/
    function Jc(a) {
        try {
            var b;
            if (b = !!a && null != a.location.href)
                a: {
                    try {
                        Ta(a.foo);
                        b = !0;
                        break a
                    } catch (c) {}
                    b = !1
                }
            return b
        } catch {
            return !1
        }
    }
    function Kc(a) {
        return Jc(a.top) ? a.top : null
    }
    function Lc(a, b) {
        const c = Mc("SCRIPT", a);
        c.src = yc(b);
        (b = (b = (c.ownerDocument && c.ownerDocument.defaultView || window).document.querySelector?.("script[nonce]")) ? b.nonce || b.getAttribute("nonce") || "" : "") && c.setAttribute("nonce", b);
        return (a = a.getElementsByTagName("script")[0]) && a.parentNode ? (a.parentNode.insertBefore(c, a),
        c) : null
    }
    function Nc(a, b) {
        return b.getComputedStyle ? b.getComputedStyle(a, null) : a.currentStyle
    }
    function Oc(a, b) {
        if (!Pc() && !Qc()) {
            let c = Math.random();
            if (c < b)
                return c = Rc(),
                a[Math.floor(c * a.length)]
        }
        return null
    }
    function Rc() {
        if (!globalThis.crypto)
            return Math.random();
        try {
            const a = new Uint32Array(1);
            globalThis.crypto.getRandomValues(a);
            return a[0] / 65536 / 65536
        } catch {
            return Math.random()
        }
    }
    function J(a, b) {
        if (a)
            for (const c in a)
                Object.prototype.hasOwnProperty.call(a, c) && b(a[c], c, a)
    }
    function Sc(a) {
        const b = a.length;
        if (0 == b)
            return 0;
        let c = 305419896;
        for (let d = 0; d < b; d++)
            c ^= (c << 5) + (c >> 2) + a.charCodeAt(d) & 4294967295;
        return 0 < c ? c : 4294967296 + c
    }
    var Qc = ic(()=>Oa(["Google Web Preview", "Mediapartners-Google", "Google-Read-Aloud", "Google-Adwords"], Tc) || 1E-4 > Math.random())
      , Pc = ic(()=>-1 != wa().indexOf("MSIE"));
    const Tc = a=>-1 != wa().indexOf(a);
    var Uc = /^([0-9.]+)px$/
      , Vc = /^(-?[0-9.]{1,30})$/;
    function Wc(a) {
        if (!Vc.test(a))
            return null;
        a = Number(a);
        return isNaN(a) ? null : a
    }
    function K(a) {
        return (a = Uc.exec(a)) ? +a[1] : null
    }
    var Xc = (a,b)=>{
        for (let e = 0; 50 > e; ++e) {
            try {
                var c = !(!a.frames || !a.frames[b])
            } catch {
                c = !1
            }
            if (c)
                return a;
            a: {
                try {
                    const f = a.parent;
                    if (f && f != a) {
                        var d = f;
                        break a
                    }
                } catch {}
                d = null
            }
            if (!(a = d))
                break
        }
        return null
    }
      , Yc = ic(()=>Ec() ? 2 : Fc() ? 1 : 0)
      , Zc = (a,b)=>{
        J(b, (c,d)=>{
            a.style.setProperty(d, c, "important")
        }
        )
    }
    ;
    let $c = [];
    const ad = ()=>{
        const a = $c;
        $c = [];
        for (const b of a)
            try {
                b()
            } catch {}
    }
    ;
    var bd = a=>{
        if ("number" !== typeof a.goog_pvsid)
            try {
                var b = Object
                  , c = b.defineProperty
                  , d = Math.random;
                var e = Math.floor(d() * 2 ** 52);
                c.call(b, a, "goog_pvsid", {
                    value: e,
                    configurable: !1
                })
            } catch (f) {}
        return Number(a.goog_pvsid) || -1
    }
      , dd = a=>{
        var b = cd;
        "complete" === b.readyState || "interactive" === b.readyState ? ($c.push(a),
        1 == $c.length && (window.Promise ? Promise.resolve().then(ad) : window.setImmediate ? setImmediate(ad) : setTimeout(ad, 0))) : b.addEventListener("DOMContentLoaded", a)
    }
    ;
    function Mc(a, b=document) {
        return b.createElement(String(a).toLowerCase())
    }
    ;function ed(a, b, c=null, d=!1, e=!1) {
        gd(a, b, c, d, e)
    }
    function gd(a, b, c, d, e=!1) {
        a.google_image_requests || (a.google_image_requests = []);
        const f = Mc("IMG", a.document);
        if (c || d) {
            const g = h=>{
                c && c(h);
                if (d) {
                    h = a.google_image_requests;
                    const l = Ka(h, f);
                    0 <= l && Array.prototype.splice.call(h, l, 1)
                }
                lc(f, "load", g);
                lc(f, "error", g)
            }
            ;
            kc(f, "load", g);
            kc(f, "error", g)
        }
        e && (f.attributionSrc = "");
        f.src = b;
        a.google_image_requests.push(f)
    }
    var id = a=>{
        let b = "https://pagead2.googlesyndication.com/pagead/gen_204?id=tcfe";
        J(a, (c,d)=>{
            if (c || 0 === c)
                b += `&${d}=${encodeURIComponent("" + c)}`
        }
        );
        hd(b)
    }
      , hd = a=>{
        var b = window;
        b.fetch ? b.fetch(a, {
            keepalive: !0,
            credentials: "include",
            redirect: "follow",
            method: "get",
            mode: "no-cors"
        }) : ed(b, a, void 0, !1, !1)
    }
    ;
    let jd = null;
    var cd = document
      , L = window;
    let kd = null;
    var ld = (a,b=[])=>{
        let c = !1;
        n.google_logging_queue || (c = !0,
        n.google_logging_queue = []);
        n.google_logging_queue.push([a, b]);
        if (a = c) {
            if (null == kd) {
                kd = !1;
                try {
                    var d = Kc(n);
                    d && -1 !== d.location.hash.indexOf("google_logging") && (kd = !0);
                    n.localStorage.getItem("google_logging") && (kd = !0)
                } catch (e) {}
            }
            a = kd
        }
        a && (d = n.document,
        a = new ec(fc,"https://pagead2.googlesyndication.com/pagead/js/logging_library.js"),
        a = zc(a instanceof ec && a.constructor === ec && a.h === gc ? a.i : "type_error:Const"),
        Lc(d, a))
    }
    ;
    function md(a=n) {
        let b = a.context || a.AMP_CONTEXT_DATA;
        if (!b)
            try {
                b = a.parent.context || a.parent.AMP_CONTEXT_DATA
            } catch {}
        return b?.pageViewId && b?.canonicalUrl ? b : null
    }
    function nd(a=md()) {
        return a ? Jc(a.master) ? a.master : null : null
    }
    ;function od(a, ...b) {
        if (0 === b.length)
            return zc(a[0]);
        const c = [a[0]];
        for (let d = 0; d < b.length; d++)
            c.push(encodeURIComponent(b[d])),
            c.push(a[d + 1]);
        return zc(c.join(""))
    }
    ;function pd(a) {
        a = a[0];
        const b = rc();
        a = b ? b.createScript(a) : a;
        return new tc(a,sc)
    }
    ;var qd = a=>{
        a = nd(md(a)) || a;
        a.google_unique_id = (a.google_unique_id || 0) + 1;
        return a.google_unique_id
    }
      , rd = a=>{
        a = a.google_unique_id;
        return "number" === typeof a ? a : 0
    }
      , sd = ()=>{
        if (!L)
            return !1;
        try {
            return !(!L.navigator.standalone && !L.top.navigator.standalone)
        } catch (a) {
            return !1
        }
    }
      , td = a=>{
        if (!a)
            return "";
        a = a.toLowerCase();
        "ca-" != a.substring(0, 3) && (a = "ca-" + a);
        return a
    }
    ;
    class ud {
        constructor(a, b) {
            this.error = a;
            this.context = b.context;
            this.msg = b.message || "";
            this.id = b.id || "jserror";
            this.meta = {}
        }
    }
    var vd = a=>!!(a.error && a.meta && a.id);
    const wd = RegExp("^https?://(\\w|-)+\\.cdn\\.ampproject\\.(net|org)(\\?|/|$)");
    var xd = class {
        constructor(a, b) {
            this.h = a;
            this.i = b
        }
    }
      , yd = class {
        constructor(a, b, c) {
            this.url = a;
            this.s = b;
            this.Oa = !!c;
            this.depth = null
        }
    }
    ;
    function zd(a, b) {
        const c = {};
        c[a] = b;
        return [c]
    }
    function Ad(a, b, c, d, e) {
        const f = [];
        J(a, function(g, h) {
            (g = Bd(g, b, c, d, e)) && f.push(h + "=" + g)
        });
        return f.join(b)
    }
    function Bd(a, b, c, d, e) {
        if (null == a)
            return "";
        b = b || "&";
        c = c || ",$";
        "string" == typeof c && (c = c.split(""));
        if (a instanceof Array) {
            if (d = d || 0,
            d < c.length) {
                const f = [];
                for (let g = 0; g < a.length; g++)
                    f.push(Bd(a[g], b, c, d + 1, e));
                return f.join(c[d])
            }
        } else if ("object" == typeof a)
            return e = e || 0,
            2 > e ? encodeURIComponent(Ad(a, b, c, d, e + 1)) : "...";
        return encodeURIComponent(String(a))
    }
    function Cd(a) {
        let b = 1;
        for (const c in a.i)
            b = c.length > b ? c.length : b;
        return 3997 - b - a.j.length - 1
    }
    function Dd(a, b) {
        let c = "https://pagead2.googlesyndication.com" + b
          , d = Cd(a) - b.length;
        if (0 > d)
            return "";
        a.h.sort(function(f, g) {
            return f - g
        });
        b = null;
        let e = "";
        for (let f = 0; f < a.h.length; f++) {
            const g = a.h[f]
              , h = a.i[g];
            for (let l = 0; l < h.length; l++) {
                if (!d) {
                    b = null == b ? g : b;
                    break
                }
                let k = Ad(h[l], a.j, ",$");
                if (k) {
                    k = e + k;
                    if (d >= k.length) {
                        d -= k.length;
                        c += k;
                        e = a.j;
                        break
                    }
                    b = null == b ? g : b
                }
            }
        }
        a = "";
        null != b && (a = e + "trn=" + b);
        return c + a
    }
    class Ed {
        constructor() {
            this.j = "&";
            this.i = {};
            this.l = 0;
            this.h = []
        }
    }
    ;function Fd(a, b) {
        0 <= b && 1 >= b && (a.h = b)
    }
    function Gd(a, b, c, d=!1, e) {
        if ((d ? a.h : Math.random()) < (e || .01))
            try {
                let f;
                c instanceof Ed ? f = c : (f = new Ed,
                J(c, (h,l)=>{
                    var k = f;
                    const m = k.l++;
                    h = zd(l, h);
                    k.h.push(m);
                    k.i[m] = h
                }
                ));
                const g = Dd(f, "/pagead/gen_204?id=" + b + "&");
                g && ed(n, g)
            } catch (f) {}
    }
    class Hd {
        constructor() {
            this.h = Math.random()
        }
    }
    ;let Id = null;
    function Jd() {
        if (null === Id) {
            Id = "";
            try {
                let a = "";
                try {
                    a = n.top.location.hash
                } catch (b) {
                    a = n.location.hash
                }
                if (a) {
                    const b = a.match(/\bdeid=([\d,]+)/);
                    Id = b ? b[1] : ""
                }
            } catch (a) {}
        }
        return Id
    }
    ;function Kd() {
        const a = n.performance;
        return a && a.now && a.timing ? Math.floor(a.now() + a.timing.navigationStart) : Date.now()
    }
    function Ld() {
        const a = n.performance;
        return a && a.now ? a.now() : null
    }
    ;class Md {
        constructor(a, b) {
            var c = Ld() || Kd();
            this.label = a;
            this.type = b;
            this.value = c;
            this.duration = 0;
            this.uniqueId = Math.random();
            this.taskId = this.slotId = void 0
        }
    }
    ;const Nd = n.performance
      , Od = !!(Nd && Nd.mark && Nd.measure && Nd.clearMarks)
      , Pd = ic(()=>{
        var a;
        if (a = Od)
            a = Jd(),
            a = !!a.indexOf && 0 <= a.indexOf("1337");
        return a
    }
    );
    function Qd(a) {
        a && Nd && Pd() && (Nd.clearMarks(`goog_${a.label}_${a.uniqueId}_start`),
        Nd.clearMarks(`goog_${a.label}_${a.uniqueId}_end`))
    }
    function Rd(a) {
        a.h = !1;
        a.i != a.j.google_js_reporting_queue && (Pd() && La(a.i, Qd),
        a.i.length = 0)
    }
    class Sd {
        constructor(a) {
            this.i = [];
            this.j = a || n;
            let b = null;
            a && (a.google_js_reporting_queue = a.google_js_reporting_queue || [],
            this.i = a.google_js_reporting_queue,
            b = a.google_measure_js_timing);
            this.h = Pd() || (null != b ? b : 1 > Math.random())
        }
        start(a, b) {
            if (!this.h)
                return null;
            a = new Md(a,b);
            b = `goog_${a.label}_${a.uniqueId}_start`;
            Nd && Pd() && Nd.mark(b);
            return a
        }
        end(a) {
            if (this.h && "number" === typeof a.value) {
                a.duration = (Ld() || Kd()) - a.value;
                var b = `goog_${a.label}_${a.uniqueId}_end`;
                Nd && Pd() && Nd.mark(b);
                !this.h || 2048 < this.i.length || this.i.push(a)
            }
        }
    }
    ;function Td(a) {
        let b = a.toString();
        a.name && -1 == b.indexOf(a.name) && (b += ": " + a.name);
        a.message && -1 == b.indexOf(a.message) && (b += ": " + a.message);
        if (a.stack) {
            a = a.stack;
            var c = b;
            try {
                -1 == a.indexOf(c) && (a = c + "\n" + a);
                let d;
                for (; a != d; )
                    d = a,
                    a = a.replace(RegExp("((https?:/..*/)[^/:]*:\\d+(?:.|\n)*)\\2"), "$1");
                b = a.replace(RegExp("\n *", "g"), "\n")
            } catch (d) {
                b = c
            }
        }
        return b
    }
    class Ud {
        constructor(a, b=null) {
            this.A = a;
            this.h = null;
            this.m = this.I;
            this.i = b;
            this.j = !1
        }
        Sa(a) {
            this.m = a
        }
        xa(a) {
            this.h = a
        }
        l(a) {
            this.j = a
        }
        ga(a, b, c) {
            let d, e;
            try {
                this.i && this.i.h ? (e = this.i.start(a.toString(), 3),
                d = b(),
                this.i.end(e)) : d = b()
            } catch (f) {
                b = !0;
                try {
                    Qd(e),
                    b = this.m(a, new ud(f,{
                        message: Td(f)
                    }), void 0, c)
                } catch (g) {
                    this.I(217, g)
                }
                if (b)
                    window.console?.error?.(f);
                else
                    throw f;
            }
            return d
        }
        oa(a, b) {
            return (...c)=>this.ga(a, ()=>b.apply(void 0, c))
        }
        I(a, b, c, d, e) {
            e = e || "jserror";
            let f;
            try {
                const Ia = new Ed;
                var g = Ia;
                g.h.push(1);
                g.i[1] = zd("context", a);
                vd(b) || (b = new ud(b,{
                    message: Td(b)
                }));
                if (b.msg) {
                    g = Ia;
                    var h = b.msg.substring(0, 512);
                    g.h.push(2);
                    g.i[2] = zd("msg", h)
                }
                var l = b.meta || {};
                b = l;
                if (this.h)
                    try {
                        this.h(b)
                    } catch (Ua) {}
                if (d)
                    try {
                        d(b)
                    } catch (Ua) {}
                d = Ia;
                l = [l];
                d.h.push(3);
                d.i[3] = l;
                d = n;
                l = [];
                b = null;
                do {
                    var k = d;
                    if (Jc(k)) {
                        var m = k.location.href;
                        b = k.document && k.document.referrer || null
                    } else
                        m = b,
                        b = null;
                    l.push(new yd(m || "",k));
                    try {
                        d = k.parent
                    } catch (Ua) {
                        d = null
                    }
                } while (d && k != d);
                for (let Ua = 0, hf = l.length - 1; Ua <= hf; ++Ua)
                    l[Ua].depth = hf - Ua;
                k = n;
                if (k.location && k.location.ancestorOrigins && k.location.ancestorOrigins.length == l.length - 1)
                    for (m = 1; m < l.length; ++m) {
                        var u = l[m];
                        u.url || (u.url = k.location.ancestorOrigins[m - 1] || "",
                        u.Oa = !0)
                    }
                var v = l;
                let $b = new yd(n.location.href,n,!1);
                k = null;
                const fd = v.length - 1;
                for (u = fd; 0 <= u; --u) {
                    var x = v[u];
                    !k && wd.test(x.url) && (k = x);
                    if (x.url && !x.Oa) {
                        $b = x;
                        break
                    }
                }
                x = null;
                const Vi = v.length && v[fd].url;
                0 != $b.depth && Vi && (x = v[fd]);
                f = new xd($b,x);
                if (f.i) {
                    v = Ia;
                    var w = f.i.url || "";
                    v.h.push(4);
                    v.i[4] = zd("top", w)
                }
                var G = {
                    url: f.h.url || ""
                };
                if (f.h.url) {
                    var ya = f.h.url.match(Gc)
                      , U = ya[1]
                      , za = ya[3]
                      , ra = ya[4];
                    w = "";
                    U && (w += U + ":");
                    za && (w += "//",
                    w += za,
                    ra && (w += ":" + ra));
                    var jf = w
                } else
                    jf = "";
                U = Ia;
                G = [G, {
                    url: jf
                }];
                U.h.push(5);
                U.i[5] = G;
                Gd(this.A, e, Ia, this.j, c)
            } catch (Ia) {
                try {
                    Gd(this.A, e, {
                        context: "ecmserr",
                        rctx: a,
                        msg: Td(Ia),
                        url: f && f.h.url
                    }, this.j, c)
                } catch ($b) {}
            }
            return !0
        }
        ba(a, b) {
            b.catch(c=>{
                c = c ? c : "unknown rejection";
                this.I(a, c instanceof Error ? c : Error(c), void 0, this.h || void 0)
            }
            )
        }
    }
    ;var Vd = a=>"string" === typeof a
      , Wd = a=>void 0 === a;
    var Yd = class extends I {
        constructor(a) {
            super(a, -1, Xd)
        }
    }
      , Xd = [2, 8]
      , Zd = [3, 4, 5]
      , $d = [6, 7];
    function ae(a) {
        return null != a ? !a : a
    }
    function be(a, b) {
        let c = !1;
        for (let d = 0; d < a.length; d++) {
            const e = a[d]();
            if (e === b)
                return e;
            null == e && (c = !0)
        }
        if (!c)
            return !b
    }
    function ce(a, b) {
        var c = E(a, Yd, 2);
        if (!c.length)
            return de(a, b);
        a = H(a, 1);
        if (1 === a)
            return ae(ce(c[0], b));
        c = Na(c, d=>()=>ce(d, b));
        switch (a) {
        case 2:
            return be(c, !1);
        case 3:
            return be(c, !0)
        }
    }
    function de(a, b) {
        const c = yb(a, Zd);
        a: {
            switch (c) {
            case 3:
                var d = H(a, zb(a, Zd, 3));
                break a;
            case 4:
                d = H(a, zb(a, Zd, 4));
                break a;
            case 5:
                d = H(a, zb(a, Zd, 5));
                break a
            }
            d = void 0
        }
        if (d && (b = (b = b[c]) && b[d])) {
            try {
                var e = b(...vb(a, 8, pb))
            } catch (f) {
                return
            }
            b = H(a, 1);
            if (4 === b)
                return !!e;
            if (5 === b)
                return null != e;
            if (12 === b)
                a = F(a, zb(a, $d, 7));
            else
                a: {
                    switch (c) {
                    case 4:
                        a = Ib(a, zb(a, $d, 6));
                        break a;
                    case 5:
                        a = F(a, zb(a, $d, 7));
                        break a
                    }
                    a = void 0
                }
            if (null != a) {
                if (6 === b)
                    return e === a;
                if (9 === b)
                    return null != e && 0 === sa(String(e), a);
                if (null != e)
                    switch (b) {
                    case 7:
                        return e < a;
                    case 8:
                        return e > a;
                    case 12:
                        return Vd(a) && Vd(e) && (new RegExp(a)).test(e);
                    case 10:
                        return null != e && -1 === sa(String(e), a);
                    case 11:
                        return null != e && 1 === sa(String(e), a)
                    }
            }
        }
    }
    function ee(a, b) {
        return !a || !(!b || !ce(a, b))
    }
    ;var ge = class extends I {
        constructor(a) {
            super(a, -1, fe)
        }
    }
      , fe = [4];
    var he = class extends I {
        constructor(a) {
            super(a)
        }
    }
    ;
    var je = class extends I {
        constructor(a) {
            super(a, -1, ie)
        }
    }
      , ke = ac(je)
      , ie = [5]
      , le = [1, 2, 3, 6, 7];
    var ne = class extends I {
        constructor() {
            super(void 0, -1, me)
        }
    }
      , me = [2];
    function oe(a, b) {
        return y(a, 1, b)
    }
    var pe = class extends I {
        constructor() {
            super()
        }
    }
    ;
    function qe(a, b) {
        return C(a, 1, b, 0)
    }
    function re(a, b) {
        return C(a, 2, b, 0)
    }
    var se = class extends I {
        constructor() {
            super()
        }
        getWidth() {
            return B(t(this, 1), 0)
        }
        getHeight() {
            return B(t(this, 2), 0)
        }
    }
    ;
    function te(a, b) {
        return Db(a, 1, b)
    }
    function ue(a, b) {
        return Db(a, 2, b)
    }
    function ve(a, b) {
        Db(a, 3, b)
    }
    function we(a, b) {
        return C(a, 5, null == b ? b : !!b, !1)
    }
    var xe = class extends I {
        constructor() {
            super()
        }
        getContentUrl() {
            return F(this, 4)
        }
    }
    ;
    var ye = class extends I {
        constructor() {
            super()
        }
        getContentUrl() {
            return F(this, 1)
        }
    }
    ;
    function ze(a, b) {
        return Eb(a, 4, Ae, b)
    }
    var Be = class extends I {
        constructor() {
            super()
        }
    }
      , Ae = [4, 5, 6, 8, 9, 10];
    function Ce(a, b) {
        return C(a, 1, b, 0)
    }
    function De(a, b) {
        return C(a, 2, b, 0)
    }
    var Ee = class extends I {
        constructor() {
            super()
        }
    }
    ;
    var Fe = class extends I {
        constructor() {
            super()
        }
    }
      , Ge = [1, 2];
    function He(a, b) {
        return Db(a, 1, b)
    }
    function Ie(a, b) {
        return Fb(a, 2, b)
    }
    function Je(a, b) {
        return wb(a, 4, b)
    }
    function Ke(a, b) {
        return Fb(a, 5, b)
    }
    function Le(a, b) {
        return C(a, 6, b, 0)
    }
    var Ne = class extends I {
        constructor() {
            super(void 0, -1, Me)
        }
    }
      , Me = [2, 4, 5];
    var Pe = class extends I {
        constructor() {
            super(void 0, -1, Oe)
        }
    }
      , Oe = [5]
      , Qe = [1, 2, 3, 4];
    var Se = class extends I {
        constructor() {
            super(void 0, -1, Re)
        }
    }
      , Re = [2, 3];
    function Te(a, b) {
        return Eb(a, 4, Ue, b)
    }
    var Ve = class extends I {
        constructor() {
            super()
        }
        getTagSessionCorrelator() {
            return B(t(this, 2), 0)
        }
    }
      , Ue = [4, 5, 7];
    function We(a, ...b) {
        Xe(a, ...b.map(c=>({
            Va: 4,
            message: c
        })))
    }
    function Ye(a, ...b) {
        Xe(a, ...b.map(c=>({
            Va: 7,
            message: c
        })))
    }
    ;function Ze(a) {
        return JSON.stringify([a.map(b=>[{
            [b.Va]: b.message.toJSON()
        }])])
    }
    ;var $e = (a,b)=>{
        globalThis.fetch(a, {
            method: "POST",
            body: b,
            keepalive: 65536 > b.length,
            credentials: "omit",
            mode: "no-cors",
            redirect: "follow"
        }).catch(()=>{}
        )
    }
    ;
    function af() {
        this.A = this.A;
        this.j = this.j
    }
    af.prototype.A = !1;
    function bf(a) {
        a.A || (a.A = !0,
        a.h())
    }
    function cf(a, b) {
        a.A ? b() : (a.j || (a.j = []),
        a.j.push(b))
    }
    af.prototype.h = function() {
        if (this.j)
            for (; this.j.length; )
                this.j.shift()()
    }
    ;
    function df(a, b, c, d) {
        kc(b, c, d);
        cf(a, ()=>lc(b, c, d))
    }
    function ef(a, b) {
        1 !== a.i && (a.i = 1,
        a.K && a.K(b))
    }
    function ff(a) {
        a.s.document.visibilityState ? df(a, a.s.document, "visibilitychange", b=>{
            "hidden" === a.s.document.visibilityState && ef(a, b);
            "visible" === a.s.document.visibilityState && (a.i = 0)
        }
        ) : "onpagehide"in a.s ? (df(a, a.s, "pagehide", b=>{
            ef(a, b)
        }
        ),
        df(a, a.s, "pageshow", ()=>{
            a.i = 0
        }
        )) : df(a, a.s, "beforeunload", b=>{
            ef(a, b)
        }
        )
    }
    function gf(a, b) {
        a.K || ff(a);
        a.K = b
    }
    var kf = class extends af {
        constructor(a) {
            super();
            this.s = a;
            this.i = 0;
            this.K = null
        }
    }
    ;
    function Xe(a, ...b) {
        a.A && 65536 <= Ze(a.h.concat(b)).length && lf(a);
        a.h.push(...b);
        a.h.length >= a.m && lf(a);
        a.h.length && null === a.i && (a.i = setTimeout(()=>{
            lf(a)
        }
        , a.B))
    }
    function mf(a, b, c, d) {
        a.j || (a.j = new kf(b),
        gf(a.j, ()=>{
            for (const e of a.l)
                e();
            c()
        }
        ));
        d && 1 !== a.j.i && a.l.push(d)
    }
    function lf(a) {
        null !== a.i && (clearTimeout(a.i),
        a.i = null);
        if (a.h.length) {
            var b = Ze(a.h);
            a.v("https://pagead2.googlesyndication.com/pagead/ping?e=1", b);
            a.h = []
        }
    }
    function nf(a, b, c) {
        mf(a, b, ()=>{
            lf(a)
        }
        , c)
    }
    var of = class {
        constructor(a, b, c) {
            this.v = $e;
            this.B = a;
            this.m = b;
            this.A = c;
            this.l = [];
            this.h = [];
            this.i = null
        }
    }
      , pf = class extends of {
        constructor(a=1E3, b=100, c=!1) {
            super(a, b, c && !0)
        }
    }
    ;
    function qf(a, b) {
        b = C(b, 1, Date.now(), 0);
        var c = bd(window);
        b = C(b, 2, c, 0);
        return C(b, 6, a.m, 0)
    }
    function rf(a, b, c, d, e, f) {
        if (a.j) {
            var g = De(Ce(new Ee, b), c);
            b = Le(Ie(He(Ke(Je(new Ne, d), e), g), a.h.slice()), f);
            b = Te(new Ve, b);
            We(a.i, qf(a, b));
            if (1 === f || 3 === f || 4 === f && !a.h.some(h=>H(h, 1) === H(g, 1) && H(h, 2) === c))
                a.h.push(g),
                100 < a.h.length && a.h.shift()
        }
    }
    function sf(a, b, c, d) {
        if (a.j && a.l) {
            var e = new Se;
            b = Fb(e, 2, b);
            c = Fb(b, 3, c);
            d && C(c, 1, d, 0);
            d = new Ve;
            d = Eb(d, 7, Ue, c);
            We(a.i, qf(a, d))
        }
    }
    var tf = class {
        constructor(a, b, c, d=new pf(b)) {
            this.m = a;
            this.l = c;
            this.i = d;
            this.h = [];
            this.j = 0 < a && Rc() < 1 / a
        }
    }
    ;
    var M = a=>{
        var b = "ua";
        if (a.ua && a.hasOwnProperty(b))
            return a.ua;
        b = new a;
        return a.ua = b
    }
    ;
    var uf = class {
        constructor() {
            this.G = {
                [3]: {},
                [4]: {},
                [5]: {}
            }
        }
    }
    ;
    var vf = /^true$/.test("false");
    function wf(a, b) {
        switch (b) {
        case 1:
            return H(a, zb(a, le, 1));
        case 2:
            return H(a, zb(a, le, 2));
        case 3:
            return H(a, zb(a, le, 3));
        case 6:
            return H(a, zb(a, le, 6));
        default:
            return null
        }
    }
    function xf(a, b) {
        if (!a)
            return null;
        switch (b) {
        case 1:
            return A(a, 1);
        case 7:
            return F(a, 3);
        case 2:
            return Ib(a, 2);
        case 3:
            return F(a, 3);
        case 6:
            return vb(a, 4, pb);
        default:
            return null
        }
    }
    const yf = ic(()=>{
        if (!vf)
            return {};
        try {
            const a = window.sessionStorage && window.sessionStorage.getItem("GGDFSSK");
            if (a)
                return JSON.parse(a)
        } catch {}
        return {}
    }
    );
    function zf(a, b, c, d=0) {
        M(Af).j[d] = M(Af).j[d]?.add(b) ?? (new Set).add(b);
        const e = yf();
        if (null != e[b])
            return e[b];
        b = Bf(d)[b];
        if (!b)
            return c;
        b = ke(JSON.stringify(b));
        b = Cf(b);
        a = xf(b, a);
        return null != a ? a : c
    }
    function Cf(a) {
        const b = M(uf).G;
        if (b) {
            const c = Qa(E(a, he, 5), d=>ee(D(d, Yd, 1), b));
            if (c)
                return D(c, ge, 2) ?? null
        }
        return D(a, ge, 4) ?? null
    }
    class Af {
        constructor() {
            this.i = {};
            this.l = [];
            this.j = {};
            this.h = new Map
        }
    }
    function Df(a, b=!1, c) {
        return !!zf(1, a, b, c)
    }
    function Ef(a, b=0, c) {
        a = Number(zf(2, a, b, c));
        return isNaN(a) ? b : a
    }
    function Ff(a, b="", c) {
        a = zf(3, a, b, c);
        return "string" === typeof a ? a : b
    }
    function Gf(a, b=[], c) {
        a = zf(6, a, b, c);
        return Array.isArray(a) ? a : b
    }
    function Bf(a) {
        return M(Af).i[a] || (M(Af).i[a] = {})
    }
    function Hf(a, b) {
        const c = Bf(b);
        J(a, (d,e)=>c[e] = d)
    }
    function If(a, b, c, d, e=!1) {
        const f = []
          , g = [];
        La(b, h=>{
            const l = Bf(h);
            La(a, k=>{
                var m = yb(k, le);
                const u = wf(k, m);
                if (u) {
                    var v = M(Af).h.get(h)?.get(u)?.slice(0) ?? [];
                    a: {
                        const x = new Pe;
                        switch (m) {
                        case 1:
                            xb(x, 1, Qe, u);
                            break;
                        case 2:
                            xb(x, 2, Qe, u);
                            break;
                        case 3:
                            xb(x, 3, Qe, u);
                            break;
                        case 6:
                            xb(x, 4, Qe, u);
                            break;
                        default:
                            m = void 0;
                            break a
                        }
                        wb(x, 5, v);
                        m = x
                    }
                    if (v = m)
                        v = !!M(Af).j[h]?.has(u);
                    v && f.push(m);
                    if (v = m)
                        v = !!M(Af).h.get(h)?.has(u);
                    v && g.push(m);
                    e || (m = M(Af),
                    m.h.has(h) || m.h.set(h, new Map),
                    m.h.get(h).has(u) || m.h.get(h).set(u, []),
                    d && m.h.get(h).get(u).push(d));
                    l[u] = k.toJSON()
                }
            }
            )
        }
        );
        (f.length || g.length) && sf(c, f, g, d ?? void 0)
    }
    function Jf(a, b) {
        const c = Bf(b);
        La(a, d=>{
            var e = ke(JSON.stringify(d));
            const f = yb(e, le);
            (e = wf(e, f)) && (c[e] || (c[e] = d))
        }
        )
    }
    function Kf() {
        return Na(Object.keys(M(Af).i), a=>Number(a))
    }
    function Lf(a) {
        Ra(M(Af).l, a) || Hf(Bf(4), a)
    }
    ;function N(a, b, c) {
        c.hasOwnProperty(a) || Object.defineProperty(c, String(a), {
            value: b
        })
    }
    function Mf(a, b, c) {
        return b[a] || c
    }
    function Nf(a) {
        N(5, Df, a);
        N(6, Ef, a);
        N(7, Ff, a);
        N(8, Gf, a);
        N(13, Jf, a);
        N(15, Lf, a)
    }
    function Of(a) {
        N(4, b=>{
            M(uf).G = b
        }
        , a);
        N(9, (b,c)=>{
            var d = M(uf);
            null == d.G[3][b] && (d.G[3][b] = c)
        }
        , a);
        N(10, (b,c)=>{
            var d = M(uf);
            null == d.G[4][b] && (d.G[4][b] = c)
        }
        , a);
        N(11, (b,c)=>{
            var d = M(uf);
            null == d.G[5][b] && (d.G[5][b] = c)
        }
        , a);
        N(14, b=>{
            var c = M(uf);
            for (const d of [3, 4, 5])
                Object.assign(c.G[d], b[d])
        }
        , a)
    }
    function Pf(a) {
        a.hasOwnProperty("init-done") || Object.defineProperty(a, "init-done", {
            value: !0
        })
    }
    ;function Qf(a, b, c) {
        a.j = Mf(1, b, ()=>{}
        );
        a.l = d=>Mf(2, b, ()=>[])(d, c, void 0);
        a.h = ()=>Mf(3, b, ()=>[])(c);
        a.i = d=>{
            Mf(16, b, ()=>{}
            )(d, c)
        }
    }
    class Rf {
        j() {}
        i() {}
        l() {
            return []
        }
        h() {
            return []
        }
    }
    ;let Sf, Tf;
    const Uf = new Sd(window);
    (a=>{
        Sf = a ?? new Hd;
        "number" !== typeof window.google_srt && (window.google_srt = Math.random());
        Fd(Sf, window.google_srt);
        Tf = new Ud(Sf,Uf);
        Tf.xa(()=>{}
        );
        Tf.l(!0);
        "complete" == window.document.readyState ? window.google_measure_js_timing || Rd(Uf) : Uf.h && kc(window, "load", ()=>{
            window.google_measure_js_timing || Rd(Uf)
        }
        )
    }
    )();
    var Vf = {
        Kb: 0,
        Jb: 1,
        Gb: 2,
        Bb: 3,
        Hb: 4,
        Cb: 5,
        Ib: 6,
        Eb: 7,
        Fb: 8,
        Ab: 9,
        Db: 10
    };
    var Wf = {
        Mb: 0,
        Nb: 1,
        Lb: 2
    };
    function Xf(a) {
        if (0 != a.h)
            throw Error("Already resolved/rejected.");
    }
    var $f = class {
        constructor() {
            this.i = new Yf(this);
            this.h = 0
        }
        resolve(a) {
            Xf(this);
            this.h = 1;
            this.l = a;
            Zf(this.i)
        }
    }
    ;
    function Zf(a) {
        switch (a.h.h) {
        case 0:
            break;
        case 1:
            a.i && a.i(a.h.l);
            break;
        case 2:
            a.j && a.j(a.h.j);
            break;
        default:
            throw Error("Unhandled deferred state.");
        }
    }
    var Yf = class {
        constructor(a) {
            this.h = a
        }
        then(a, b) {
            if (this.i)
                throw Error("Then functions already set.");
            this.i = a;
            this.j = b;
            Zf(this)
        }
    }
    ;
    const ag = class {
        constructor(a) {
            this.h = a.slice(0)
        }
        forEach(a) {
            this.h.forEach((b,c)=>void a(b, c, this))
        }
        filter(a) {
            return new ag(Ma(this.h, a))
        }
        apply(a) {
            return new ag(a(this.h.slice(0)))
        }
        get(a) {
            return this.h[a]
        }
        add(a) {
            const b = this.h.slice(0);
            b.push(a);
            return new ag(b)
        }
    }
    ;
    function bg(a, b) {
        for (var c = [], d = a.length, e = 0; e < d; e++)
            c.push(a[e]);
        c.forEach(b, void 0)
    }
    ;const dg = class {
        constructor() {
            this.h = {};
            this.i = {}
        }
        set(a, b) {
            const c = cg(a);
            this.h[c] = b;
            this.i[c] = a
        }
        get(a, b) {
            a = cg(a);
            return void 0 !== this.h[a] ? this.h[a] : b
        }
        clear() {
            this.h = {};
            this.i = {}
        }
    }
    ;
    function cg(a) {
        return a instanceof Object ? String(fa(a)) : a + ""
    }
    ;function eg(a) {
        return new fg({
            value: a
        },null)
    }
    function gg(a) {
        return new fg(null,a)
    }
    function hg(a) {
        try {
            return eg(a())
        } catch (b) {
            return gg(b)
        }
    }
    function ig(a) {
        return null != a.h ? a.h.value : null
    }
    function jg(a, b) {
        null != a.h && b(a.h.value);
        return a
    }
    function kg(a, b) {
        null != a.h || b(a.i);
        return a
    }
    class fg {
        constructor(a, b) {
            this.h = a;
            this.i = b
        }
        map(a) {
            return null != this.h ? (a = a(this.h.value),
            a instanceof fg ? a : eg(a)) : this
        }
    }
    ;const lg = class {
        constructor(a) {
            this.h = new dg;
            if (a)
                for (var b = 0; b < a.length; ++b)
                    this.add(a[b])
        }
        add(a) {
            this.h.set(a, !0)
        }
        contains(a) {
            return void 0 !== this.h.h[cg(a)]
        }
    }
    ;
    class mg {
        constructor() {
            this.h = new dg
        }
        set(a, b) {
            let c = this.h.get(a);
            c || (c = new lg,
            this.h.set(a, c));
            c.add(b)
        }
    }
    ;var O = class extends I {
        constructor(a) {
            super(a, -1, ng)
        }
        getId() {
            return t(this, 3)
        }
    }
      , ng = [4];
    class og {
        constructor({Xa: a, Ob: b, Wb: c, rb: d}) {
            this.h = b;
            this.l = new ag(a || []);
            this.j = d;
            this.i = c
        }
    }
    ;const qg = a=>{
        const b = []
          , c = a.l;
        c && c.h.length && b.push({
            Z: "a",
            fa: pg(c)
        });
        null != a.h && b.push({
            Z: "as",
            fa: a.h
        });
        null != a.i && b.push({
            Z: "i",
            fa: String(a.i)
        });
        null != a.j && b.push({
            Z: "rp",
            fa: String(a.j)
        });
        b.sort(function(d, e) {
            return d.Z.localeCompare(e.Z)
        });
        b.unshift({
            Z: "t",
            fa: "aa"
        });
        return b
    }
      , pg = a=>{
        a = a.h.slice(0).map(rg);
        a = JSON.stringify(a);
        return Sc(a)
    }
      , rg = a=>{
        const b = {};
        null != t(a, 7) && (b.q = t(a, 7));
        null != Gb(a, 2) && (b.o = Gb(a, 2));
        null != Gb(a, 5) && (b.p = Gb(a, 5));
        return b
    }
    ;
    var sg = class extends I {
        constructor(a) {
            super(a)
        }
        setLocation(a) {
            return y(this, 1, a)
        }
    }
    ;
    function tg(a) {
        const b = [].slice.call(arguments).filter(hc(e=>null === e));
        if (!b.length)
            return null;
        let c = []
          , d = {};
        b.forEach(e=>{
            c = c.concat(e.Ma || []);
            d = Object.assign(d, e.Ra)
        }
        );
        return new ug(c,d)
    }
    function vg(a) {
        switch (a) {
        case 1:
            return new ug(null,{
                google_ad_semantic_area: "mc"
            });
        case 2:
            return new ug(null,{
                google_ad_semantic_area: "h"
            });
        case 3:
            return new ug(null,{
                google_ad_semantic_area: "f"
            });
        case 4:
            return new ug(null,{
                google_ad_semantic_area: "s"
            });
        default:
            return null
        }
    }
    function wg(a) {
        if (null == a)
            var b = null;
        else {
            var c = qg(a);
            a = [];
            for (b of c)
                c = String(b.fa),
                a.push(b.Z + "." + (20 >= c.length ? c : c.slice(0, 19) + "_"));
            b = new ug(null,{
                google_placement_id: a.join("~")
            })
        }
        return b
    }
    class ug {
        constructor(a, b) {
            this.Ma = a;
            this.Ra = b
        }
    }
    ;const xg = new ug(["google-auto-placed"],{
        google_reactive_ad_format: 40,
        google_tag_origin: "qs"
    });
    var yg = {
        overlays: 1,
        interstitials: 2,
        vignettes: 2,
        inserts: 3,
        immersives: 4,
        list_view: 5,
        full_page: 6,
        side_rails: 7
    };
    function zg(a) {
        a.google_reactive_ads_global_state ? (null == a.google_reactive_ads_global_state.sideRailProcessedFixedElements && (a.google_reactive_ads_global_state.sideRailProcessedFixedElements = new Set),
        null == a.google_reactive_ads_global_state.sideRailAvailableSpace && (a.google_reactive_ads_global_state.sideRailAvailableSpace = new Map),
        null == a.google_reactive_ads_global_state.sideRailPlasParam && (a.google_reactive_ads_global_state.sideRailPlasParam = new Map)) : a.google_reactive_ads_global_state = new Ag;
        return a.google_reactive_ads_global_state
    }
    class Ag {
        constructor() {
            this.wasPlaTagProcessed = !1;
            this.wasReactiveAdConfigReceived = {};
            this.adCount = {};
            this.wasReactiveAdVisible = {};
            this.stateForType = {};
            this.reactiveTypeEnabledInAsfe = {};
            this.wasReactiveTagRequestSent = !1;
            this.reactiveTypeDisabledByPublisher = {};
            this.tagSpecificState = {};
            this.messageValidationEnabled = !1;
            this.floatingAdsStacking = new Bg;
            this.sideRailProcessedFixedElements = new Set;
            this.sideRailAvailableSpace = new Map;
            this.sideRailPlasParam = new Map
        }
    }
    var Bg = class {
        constructor() {
            this.maxZIndexRestrictions = {};
            this.nextRestrictionId = 0;
            this.maxZIndexListeners = []
        }
    }
    ;
    var P = a=>{
        a = a.document;
        let b = {};
        a && (b = "CSS1Compat" == a.compatMode ? a.documentElement : a.body);
        return b || {}
    }
    ;
    var Cg = a=>{
        a = a.getBoundingClientRect();
        return 0 < a.width && 0 < a.height
    }
      , Dg = a=>{
        let b = 0;
        a.forEach(c=>b = Math.max(b, c.getBoundingClientRect().width));
        return c=>c.getBoundingClientRect().width > .5 * b
    }
      , Eg = a=>{
        const b = P(a).clientHeight || 0;
        return c=>c.getBoundingClientRect().height >= .75 * b
    }
      , Fg = (a,b)=>a.getBoundingClientRect().top - b.getBoundingClientRect().top;
    var Gg = class extends I {
        constructor(a) {
            super(a)
        }
    }
    ;
    var Hg = class extends I {
        constructor() {
            super()
        }
    }
    ;
    var Jg = class extends I {
        constructor() {
            super(void 0, -1, Ig)
        }
    }
      , Ig = [1];
    var Kg = class extends I {
        constructor(a) {
            super(a)
        }
        i() {
            return A(this, 2)
        }
    }
    ;
    var Lg = class extends I {
        constructor(a) {
            super(a)
        }
    }
    ;
    var Mg = class extends I {
        constructor(a) {
            super(a)
        }
    }
    ;
    var Og = class extends I {
        constructor(a) {
            super(a, -1, Ng)
        }
        i() {
            return E(this, Mg, 1)
        }
    }
      , Ng = [1];
    var Q = class extends I {
        constructor(a) {
            super(a)
        }
    }
    ;
    var Pg = class extends I {
        constructor(a) {
            super(a)
        }
    }
    ;
    var Rg = class extends I {
        constructor(a) {
            super(a, -1, Qg)
        }
    }
      , Qg = [6, 7, 9, 10, 11];
    function Sg(a) {
        var b = [];
        bg(a.getElementsByTagName("p"), function(c) {
            100 <= Tg(c) && b.push(c)
        });
        return b
    }
    function Tg(a) {
        if (3 == a.nodeType)
            return a.length;
        if (1 != a.nodeType || "SCRIPT" == a.tagName)
            return 0;
        var b = 0;
        bg(a.childNodes, function(c) {
            b += Tg(c)
        });
        return b
    }
    function Ug(a) {
        return 0 == a.length || isNaN(a[0]) ? a : "\\" + (30 + parseInt(a[0], 10)) + " " + a.substring(1)
    }
    function Vg(a, b) {
        if (null == a.h)
            return b;
        switch (a.h) {
        case 1:
            return b.slice(1);
        case 2:
            return b.slice(0, b.length - 1);
        case 3:
            return b.slice(1, b.length - 1);
        case 0:
            return b;
        default:
            throw Error("Unknown ignore mode: " + a.h);
        }
    }
    const Wg = class {
        constructor(a, b, c, d) {
            this.l = a;
            this.i = b;
            this.j = c;
            this.h = d
        }
        query(a) {
            var b = [];
            try {
                b = a.querySelectorAll(this.l)
            } catch (f) {}
            if (!b.length)
                return [];
            a = Sa(b);
            a = Vg(this, a);
            "number" === typeof this.i && (b = this.i,
            0 > b && (b += a.length),
            a = 0 <= b && b < a.length ? [a[b]] : []);
            if ("number" === typeof this.j) {
                b = [];
                for (var c = 0; c < a.length; c++) {
                    var d = Sg(a[c])
                      , e = this.j;
                    0 > e && (e += d.length);
                    0 <= e && e < d.length && b.push(d[e])
                }
                a = b
            }
            return a
        }
        toString() {
            return JSON.stringify({
                nativeQuery: this.l,
                occurrenceIndex: this.i,
                paragraphIndex: this.j,
                ignoreMode: this.h
            })
        }
    }
    ;
    function Xg(a) {
        if (1 != a.nodeType)
            var b = !1;
        else if (b = "INS" == a.tagName)
            a: {
                b = ["adsbygoogle-placeholder"];
                a = a.className ? a.className.split(/\s+/) : [];
                for (var c = {}, d = 0; d < a.length; ++d)
                    c[a[d]] = !0;
                for (d = 0; d < b.length; ++d)
                    if (!c[b[d]]) {
                        b = !1;
                        break a
                    }
                b = !0
            }
        return b
    }
    ;var R = class {
        constructor(a, b=!1) {
            this.h = a;
            this.defaultValue = b
        }
    }
      , Yg = class {
        constructor(a, b=0) {
            this.h = a;
            this.defaultValue = b
        }
    }
    ;
    var Zg = new R(1082,!0)
      , $g = new Yg(1130,100)
      , ah = new class {
        constructor(a, b="") {
            this.h = a;
            this.defaultValue = b
        }
    }
    (14)
      , bh = new R(1247,!0)
      , ch = new R(316)
      , dh = new R(1207,!0)
      , eh = new R(313)
      , fh = new R(369)
      , gh = new R(1230)
      , hh = new R(1229)
      , ih = new R(1231)
      , jh = new R(1171,!0)
      , kh = new R(1201,!0)
      , lh = new R(1249)
      , mh = new R(217)
      , nh = new R(501545960)
      , oh = new R(1120)
      , ph = new R(522099048)
      , qh = new Yg(1114,1)
      , rh = new R(506914611)
      , sh = new R(501545959,!0)
      , th = new R(518318645)
      , uh = new R(1086,!0)
      , vh = new Yg(1079,5)
      , wh = new class {
        constructor(a, b=[]) {
            this.h = a;
            this.defaultValue = b
        }
    }
    (1934,["A0VQgOQvA+kwCj319NCwgf8+syUgEQ8/LLpB8RxxlRC3AkJ9xx8IAvVuQ/dcwy0ok7sGKufLLu6WhsXbQR9/UwwAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjg4MDgzMTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==", "A6kRo9zXJhOvsR4D/VeZ9CiApPAxnOGzBkW88d8eIt9ex2oOzlX+AoUk/BS50Y9Ysy2jwyHR49Mb7XwP+l9yygIAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjg4MDgzMTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==", "A3mbHZoS4VJtJ8j1aE8+Z9vaGf/oMV1eTNIWMrvGqWgNnOmvaxnRGliqKIZU2eiTzCj5Qpz8B1/UTTLuony5bAAAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjg4MDgzMTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==", "As0hBNJ8h++fNYlkq8cTye2qDLyom8NddByiVytXGGD0YVE+2CEuTCpqXMDxdhOMILKoaiaYifwEvCRlJ/9GcQ8AAAB8eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3MTk1MzI3OTksImlzU3ViZG9tYWluIjp0cnVlfQ==", "AgRYsXo24ypxC89CJanC+JgEmraCCBebKl8ZmG7Tj5oJNx0cmH0NtNRZs3NB5ubhpbX/bIt7l2zJOSyO64NGmwMAAACCeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3MTk1MzI3OTksImlzU3ViZG9tYWluIjp0cnVlfQ=="])
      , xh = new R(203)
      , yh = new R(84)
      , zh = new R(1162)
      , Ah = new R(501545961);
    var Bh = class {
        constructor() {
            const a = {};
            this.i = (b,c)=>null != a[b] ? a[b] : c;
            this.h = (b,c)=>null != a[b] ? a[b] : c;
            this.j = (b,c)=>null != a[b] ? a[b] : c;
            this.l = (b,c)=>null != a[b] ? a[b] : c;
            this.m = ()=>{}
        }
    }
    ;
    function S(a) {
        return M(Bh).i(a.h, a.defaultValue)
    }
    function Ch() {
        return M(Bh).j(ah.h, ah.defaultValue)
    }
    ;function Dh(a, b, c) {
        switch (c) {
        case 0:
            b.parentNode && b.parentNode.insertBefore(a, b);
            break;
        case 3:
            if (c = b.parentNode) {
                var d = b.nextSibling;
                if (d && d.parentNode != c)
                    for (; d && 8 == d.nodeType; )
                        d = d.nextSibling;
                c.insertBefore(a, d)
            }
            break;
        case 1:
            b.insertBefore(a, b.firstChild);
            break;
        case 2:
            b.appendChild(a)
        }
        Xg(b) && (b.setAttribute("data-init-display", b.style.display),
        b.style.display = "block")
    }
    ;function Eh(a, b) {
        const c = e=>{
            e = Fh(e);
            return null == e ? !1 : 0 < e
        }
          , d = e=>{
            e = Fh(e);
            return null == e ? !1 : 0 > e
        }
        ;
        switch (b) {
        case 0:
            return {
                init: Gh(a.previousSibling, c),
                ja: e=>Gh(e.previousSibling, c),
                na: 0
            };
        case 2:
            return {
                init: Gh(a.lastChild, c),
                ja: e=>Gh(e.previousSibling, c),
                na: 0
            };
        case 3:
            return {
                init: Gh(a.nextSibling, d),
                ja: e=>Gh(e.nextSibling, d),
                na: 3
            };
        case 1:
            return {
                init: Gh(a.firstChild, d),
                ja: e=>Gh(e.nextSibling, d),
                na: 3
            }
        }
        throw Error("Un-handled RelativePosition: " + b);
    }
    function Fh(a) {
        return a.hasOwnProperty("google-ama-order-assurance") ? a["google-ama-order-assurance"] : null
    }
    function Gh(a, b) {
        return a && b(a) ? a : null
    }
    ;var Hh = {
        rectangle: 1,
        horizontal: 2,
        vertical: 4
    };
    var Ih = a=>{
        if (a == a.top)
            return 0;
        for (; a && a != a.top && Jc(a); a = a.parent) {
            if (a.sf_)
                return 2;
            if (a.$sf)
                return 3;
            if (a.inGptIF)
                return 4;
            if (a.inDapIF)
                return 5
        }
        return 1
    }
    ;
    var Jh = (a,b)=>{
        do {
            const c = Nc(a, b);
            if (c && "fixed" == c.position)
                return !1
        } while (a = a.parentElement);
        return !0
    }
    ;
    function Kh(a, b) {
        var c = ["width", "height"];
        for (let e = 0; e < c.length; e++) {
            const f = "google_ad_" + c[e];
            if (!b.hasOwnProperty(f)) {
                var d = K(a[c[e]]);
                d = null === d ? null : Math.round(d);
                null != d && (b[f] = d)
            }
        }
    }
    var Lh = (a,b)=>!((Vc.test(b.google_ad_width) || Uc.test(a.style.width)) && (Vc.test(b.google_ad_height) || Uc.test(a.style.height)))
      , Nh = (a,b)=>(a = Mh(a, b)) ? a.y : 0
      , Mh = (a,b)=>{
        try {
            const c = b.document.documentElement.getBoundingClientRect()
              , d = a.getBoundingClientRect();
            return {
                x: d.left - c.left,
                y: d.top - c.top
            }
        } catch (c) {
            return null
        }
    }
      , Oh = a=>{
        let b = 0;
        for (let c in Hh)
            -1 != a.indexOf(c) && (b |= Hh[c]);
        return b
    }
      , Ph = (a,b,c,d,e)=>{
        if (a !== a.top)
            return Kc(a) ? 3 : 16;
        if (!(488 > P(a).clientWidth))
            return 4;
        if (!(a.innerHeight >= a.innerWidth))
            return 5;
        const f = P(a).clientWidth;
        if (!f || (f - c) / f > d)
            a = 6;
        else {
            if (c = "true" != e.google_full_width_responsive)
                a: {
                    c = b.parentElement;
                    for (b = P(a).clientWidth; c; c = c.parentElement)
                        if ((d = Nc(c, a)) && (e = K(d.width)) && !(e >= b) && "visible" != d.overflow) {
                            c = !0;
                            break a
                        }
                    c = !1
                }
            a = c ? 7 : !0
        }
        return a
    }
      , Qh = (a,b,c,d)=>{
        const e = Ph(b, c, a, .3, d);
        !0 !== e ? a = e : "true" == d.google_full_width_responsive || Jh(c, b) ? (b = P(b).clientWidth,
        a = b - a,
        a = b && 0 <= a ? !0 : b ? -10 > a ? 11 : 0 > a ? 14 : 12 : 10) : a = 9;
        return a
    }
      , Rh = (a,b,c)=>{
        a = a.style;
        "rtl" == b ? a.marginRight = c : a.marginLeft = c
    }
    ;
    const Sh = (a,b)=>{
        if (3 == b.nodeType)
            return /\S/.test(b.data);
        if (1 == b.nodeType) {
            if (/^(script|style)$/i.test(b.nodeName))
                return !1;
            let c;
            try {
                c = Nc(b, a)
            } catch (d) {}
            return !c || "none" != c.display && !("absolute" == c.position && ("hidden" == c.visibility || "collapse" == c.visibility))
        }
        return !1
    }
      , Th = (a,b,c)=>{
        a = Mh(b, a);
        return "rtl" == c ? -a.x : a.x
    }
    ;
    var Uh = (a,b)=>{
        var c;
        c = (c = b.parentElement) ? (c = Nc(c, a)) ? c.direction : "" : "";
        if (c) {
            b.style.border = b.style.borderStyle = b.style.outline = b.style.outlineStyle = b.style.transition = "none";
            b.style.borderSpacing = b.style.padding = "0";
            Rh(b, c, "0px");
            b.style.width = P(a).clientWidth + "px";
            if (0 !== Th(a, b, c)) {
                Rh(b, c, "0px");
                var d = Th(a, b, c);
                Rh(b, c, -1 * d + "px");
                a = Th(a, b, c);
                0 !== a && a !== d && Rh(b, c, d / (a - d) * d + "px")
            }
            b.style.zIndex = 30
        }
    }
    ;
    var Vh = class {
        constructor(a, b) {
            this.L = a;
            this.j = b
        }
        height() {
            return this.j
        }
        h(a) {
            return 300 < a && 300 < this.j ? this.L : Math.min(1200, Math.round(a))
        }
        i() {}
    }
    ;
    var Wh = (a,b,c,d=e=>e)=>{
        let e;
        return a.style && a.style[c] && d(a.style[c]) || (e = Nc(a, b)) && e[c] && d(e[c]) || null
    }
      , Xh = a=>b=>b.L <= a
      , $h = (a,b,c,d)=>{
        const e = a && Yh(c, b)
          , f = Zh(b, d);
        return g=>!(e && g.height() >= f)
    }
      , ai = a=>b=>b.height() <= a
      , Yh = (a,b)=>Nh(a, b) < P(b).clientHeight - 100
      , bi = (a,b)=>{
        var c = Wh(b, a, "height", K);
        if (c)
            return c;
        var d = b.style.height;
        b.style.height = "inherit";
        c = Wh(b, a, "height", K);
        b.style.height = d;
        if (c)
            return c;
        c = Infinity;
        do
            (d = b.style && K(b.style.height)) && (c = Math.min(c, d)),
            (d = Wh(b, a, "maxHeight", K)) && (c = Math.min(c, d));
        while ((b = b.parentElement) && "HTML" != b.tagName);
        return c
    }
    ;
    const Zh = (a,b)=>{
        const c = 0 == rd(a);
        return b && c ? Math.max(250, 2 * P(a).clientHeight / 3) : 250
    }
    ;
    var ci = {
        google_ad_channel: !0,
        google_ad_client: !0,
        google_ad_host: !0,
        google_ad_host_channel: !0,
        google_adtest: !0,
        google_tag_for_child_directed_treatment: !0,
        google_tag_for_under_age_of_consent: !0,
        google_tag_partner: !0,
        google_restrict_data_processing: !0,
        google_page_url: !0,
        google_debug_params: !0,
        google_shadow_mode: !0,
        google_adbreak_test: !0,
        google_ad_frequency_hint: !0,
        google_admob_interstitial_slot: !0,
        google_admob_rewarded_slot: !0,
        google_admob_ads_only: !0,
        google_max_ad_content_rating: !0,
        google_traffic_source: !0
    };
    const di = RegExp("(^| )adsbygoogle($| )");
    function ei(a, b) {
        for (let c = 0; c < b.length; c++) {
            const d = b[c]
              , e = Bc(d.Xb);
            a[e] = d.value
        }
    }
    ;class fi {
        constructor() {
            var a = od`https://pagead2.googlesyndication.com/pagead/js/err_rep.js`;
            this.h = null;
            this.j = !1;
            this.m = Math.random();
            this.i = this.I;
            this.A = a
        }
        xa(a) {
            this.h = a
        }
        l(a) {
            this.j = a
        }
        Sa(a) {
            this.i = a
        }
        I(a, b, c=.01, d, e="jserror") {
            if ((this.j ? this.m : Math.random()) > c)
                return !1;
            vd(b) || (b = new ud(b,{
                context: a,
                id: e
            }));
            if (d || this.h)
                b.meta = {},
                this.h && this.h(b.meta),
                d && d(b.meta);
            n.google_js_errors = n.google_js_errors || [];
            n.google_js_errors.push(b);
            n.error_rep_loaded || (Lc(n.document, this.A),
            n.error_rep_loaded = !0);
            return !1
        }
        ga(a, b, c) {
            try {
                return b()
            } catch (d) {
                if (!this.i(a, d, .01, c, "jserror"))
                    throw d;
            }
        }
        oa(a, b) {
            return (...c)=>this.ga(a, ()=>b.apply(void 0, c))
        }
        ba(a, b) {
            b.catch(c=>{
                c = c ? c : "unknown rejection";
                this.I(a, c instanceof Error ? c : Error(c), void 0, this.h || void 0)
            }
            )
        }
    }
    ;const gi = (a,b)=>{
        b = b.google_js_reporting_queue = b.google_js_reporting_queue || [];
        2048 > b.length && b.push(a)
    }
    ;
    var hi = (a,b,c,d,e=!1)=>{
        const f = d || window
          , g = "undefined" !== typeof queueMicrotask;
        return function() {
            e && g && queueMicrotask(()=>{
                f.google_rum_task_id_counter = f.google_rum_task_id_counter || 1;
                f.google_rum_task_id_counter += 1
            }
            );
            const h = Ld();
            let l, k = 3;
            try {
                l = b.apply(this, arguments)
            } catch (m) {
                k = 13;
                if (!c)
                    throw m;
                c(a, m)
            } finally {
                f.google_measure_js_timing && h && gi({
                    label: a.toString(),
                    value: h,
                    duration: (Ld() || 0) - h,
                    type: k,
                    ...(e && g && {
                        taskId: f.google_rum_task_id_counter = f.google_rum_task_id_counter || 1
                    })
                }, f)
            }
            return l
        }
    }
      , ii = (a,b)=>hi(a, b, (c,d)=>{
        (new fi).I(c, d)
    }
    , void 0, !1);
    function ji(a, b, c) {
        return hi(a, b, void 0, c, !0).apply()
    }
    function ki(a) {
        if (!a)
            return null;
        var b = t(a, 7);
        if (t(a, 1) || a.getId() || 0 < vb(a, 4, pb).length) {
            b = vb(a, 4, pb);
            var c = t(a, 3)
              , d = t(a, 1)
              , e = "";
            d && (e += d);
            c && (e += "#" + Ug(c));
            if (b)
                for (c = 0; c < b.length; c++)
                    e += "." + Ug(b[c]);
            a = (b = e) ? new Wg(b,Gb(a, 2),Gb(a, 5),li(t(a, 6))) : null
        } else
            a = b ? new Wg(b,Gb(a, 2),Gb(a, 5),li(t(a, 6))) : null;
        return a
    }
    var mi = {
        1: 1,
        2: 2,
        3: 3,
        0: 0
    };
    function li(a) {
        return null == a ? a : mi[a]
    }
    var ni = {
        1: 0,
        2: 1,
        3: 2,
        4: 3
    };
    function oi(a) {
        return a.google_ama_state = a.google_ama_state || {}
    }
    function pi(a) {
        a = oi(a);
        return a.optimization = a.optimization || {}
    }
    ;var qi = ac(class extends I {
        constructor(a) {
            super(a)
        }
    }
    );
    var ri = a=>{
        switch (t(a, 8)) {
        case 1:
        case 2:
            if (null == a)
                var b = null;
            else
                b = D(a, O, 1),
                null == b ? b = null : (a = t(a, 2),
                b = null == a ? null : new og({
                    Xa: [b],
                    rb: a
                }));
            return null != b ? eg(b) : gg(Error("Missing dimension when creating placement id"));
        case 3:
            return gg(Error("Missing dimension when creating placement id"));
        default:
            return gg(Error("Invalid type: " + t(a, 8)))
        }
    }
    ;
    var si = class extends I {
        constructor(a) {
            super(a)
        }
    }
    ;
    var ti = class extends I {
        constructor(a) {
            super(a)
        }
    }
    ;
    var ui = class extends I {
        constructor(a) {
            super(a)
        }
        i() {
            return ub(this, 23)
        }
    }
    ;
    var vi = class extends I {
        constructor(a) {
            super(a)
        }
    }
    ;
    var wi = class extends I {
        constructor(a) {
            super(a)
        }
    }
    ;
    var xi = class extends I {
        constructor(a) {
            super(a)
        }
    }
    ;
    var yi = class extends I {
        constructor(a) {
            super(a)
        }
    }
    ;
    var zi = class extends I {
        constructor(a) {
            super(a)
        }
    }
    ;
    var Ai = class extends I {
        constructor(a) {
            super(a)
        }
        getName() {
            return t(this, 4)
        }
    }
      , Bi = [1, 2, 3];
    var Di = class extends I {
        constructor(a) {
            super(a, -1, Ci)
        }
    }
      , Ci = [2, 5, 6, 11];
    var Ei = class extends I {
        constructor(a) {
            super(a)
        }
    }
    ;
    var Gi = class extends I {
        constructor(a) {
            super(a)
        }
        i() {
            return Jb(this, Ei, 2, Fi)
        }
    }
      , Fi = [1, 2];
    var Ii = class extends I {
        constructor(a) {
            super(a, -1, Hi)
        }
        i() {
            return D(this, Gi, 3)
        }
    }
      , Hi = [1, 4];
    var Ki = class extends I {
        constructor(a) {
            super(a, -1, Ji)
        }
    }
      , Li = ac(Ki)
      , Ji = [1, 2, 5, 7];
    var Mi = (a,b)=>{
        const c = [];
        let d = a;
        for (a = ()=>{
            c.push({
                anchor: d.anchor,
                position: d.position
            });
            return d.anchor == b.anchor && d.position == b.position
        }
        ; d; ) {
            switch (d.position) {
            case 1:
                if (a())
                    return c;
                d.position = 2;
            case 2:
                if (a())
                    return c;
                if (d.anchor.firstChild) {
                    d = {
                        anchor: d.anchor.firstChild,
                        position: 1
                    };
                    continue
                } else
                    d.position = 3;
            case 3:
                if (a())
                    return c;
                d.position = 4;
            case 4:
                if (a())
                    return c
            }
            for (; d && !d.anchor.nextSibling && d.anchor.parentNode != d.anchor.ownerDocument.body; ) {
                d = {
                    anchor: d.anchor.parentNode,
                    position: 3
                };
                if (a())
                    return c;
                d.position = 4;
                if (a())
                    return c
            }
            d && d.anchor.nextSibling ? d = {
                anchor: d.anchor.nextSibling,
                position: 1
            } : d = null
        }
        return c
    }
    ;
    function Ni(a, b) {
        const c = new mg
          , d = new lg;
        b.forEach(e=>{
            if (Jb(e, yi, 1, Bi)) {
                e = Jb(e, yi, 1, Bi);
                if (D(e, Q, 1) && D(D(e, Q, 1), O, 1) && D(e, Q, 2) && D(D(e, Q, 2), O, 1)) {
                    const g = Oi(a, D(D(e, Q, 1), O, 1))
                      , h = Oi(a, D(D(e, Q, 2), O, 1));
                    if (g && h)
                        for (var f of Mi({
                            anchor: g,
                            position: t(D(e, Q, 1), 2)
                        }, {
                            anchor: h,
                            position: t(D(e, Q, 2), 2)
                        }))
                            c.set(fa(f.anchor), f.position)
                }
                D(e, Q, 3) && D(D(e, Q, 3), O, 1) && (f = Oi(a, D(D(e, Q, 3), O, 1))) && c.set(fa(f), t(D(e, Q, 3), 2))
            } else
                Jb(e, zi, 2, Bi) ? Pi(a, Jb(e, zi, 2, Bi), c) : Jb(e, xi, 3, Bi) && Qi(a, Jb(e, xi, 3, Bi), d)
        }
        );
        return new Ri(c,d)
    }
    class Ri {
        constructor(a, b) {
            this.i = a;
            this.h = b
        }
    }
    const Pi = (a,b,c)=>{
        D(b, Q, 2) ? (b = D(b, Q, 2),
        (a = Oi(a, D(b, O, 1))) && c.set(fa(a), t(b, 2))) : D(b, O, 1) && (a = Si(a, D(b, O, 1))) && a.forEach(d=>{
            d = fa(d);
            c.set(d, 1);
            c.set(d, 4);
            c.set(d, 2);
            c.set(d, 3)
        }
        )
    }
      , Qi = (a,b,c)=>{
        D(b, O, 1) && (a = Si(a, D(b, O, 1))) && a.forEach(d=>{
            c.add(fa(d))
        }
        )
    }
      , Oi = (a,b)=>(a = Si(a, b)) && 0 < a.length ? a[0] : null
      , Si = (a,b)=>(b = ki(b)) ? b.query(a) : null;
    function Ti(a, b, c) {
        switch (c) {
        case 2:
        case 3:
            break;
        case 1:
        case 4:
            b = b.parentElement;
            break;
        default:
            throw Error("Unknown RelativePosition: " + c);
        }
        for (c = []; b; ) {
            if (Ui(b))
                return !0;
            if (a.h.has(b))
                break;
            c.push(b);
            b = b.parentElement
        }
        c.forEach(d=>a.h.add(d));
        return !1
    }
    function Wi(a) {
        a = Xi(a);
        return a.has("all") || a.has("after")
    }
    function Yi(a) {
        a = Xi(a);
        return a.has("all") || a.has("before")
    }
    function Xi(a) {
        return (a = a && a.getAttribute("data-no-auto-ads")) ? new Set(a.split("|")) : new Set
    }
    function Ui(a) {
        const b = Xi(a);
        return a && ("AUTO-ADS-EXCLUSION-AREA" === a.tagName || b.has("inside") || b.has("all"))
    }
    var Zi = class {
        constructor() {
            this.h = new Set
        }
    }
    ;
    function $i(a, b) {
        if (!a)
            return !1;
        a = Nc(a, b);
        if (!a)
            return !1;
        a = a.cssFloat || a.styleFloat;
        return "left" == a || "right" == a
    }
    function aj(a) {
        for (a = a.previousSibling; a && 1 != a.nodeType; )
            a = a.previousSibling;
        return a ? a : null
    }
    function bj(a) {
        return !!a.nextSibling || !!a.parentNode && bj(a.parentNode)
    }
    ;function cj(a, b) {
        if (!a)
            return !1;
        a = a.hash;
        if (!a || !a.indexOf)
            return !1;
        if (-1 != a.indexOf(b))
            return !0;
        b = dj(b);
        return "go" != b && -1 != a.indexOf(b) ? !0 : !1
    }
    function dj(a) {
        let b = "";
        J(a.split("_"), c=>{
            b += c.substr(0, 2)
        }
        );
        return b
    }
    ;function ej(a=window) {
        a = a.googletag;
        return a?.apiReady ? a : void 0
    }
    ;const fj = a=>{
        const b = ej(a);
        return b ? Ma(Na(b.pubads().getSlots(), c=>a.document.getElementById(c.getSlotElementId())), c=>null != c) : null
    }
    ;
    var gj = a=>{
        const b = [];
        for (const c of a) {
            a = !0;
            for (let d = 0; d < b.length; d++) {
                const e = b[d];
                if (e.contains(c)) {
                    a = !1;
                    break
                }
                if (c.contains(e)) {
                    a = !1;
                    b[d] = c;
                    break
                }
            }
            a && b.push(c)
        }
        return b
    }
    ;
    function hj(a, b) {
        if (a.l)
            return !0;
        a.l = !0;
        const c = E(a.i, Rg, 1);
        a.j = 0;
        const d = ij(a.B);
        if (cj(a.h.location, "google_audio_sense")) {
            var e = new Lg;
            e = y(e, 1, 1);
            var f = new Kg;
            f = y(f, 2, !0);
            e = Db(e, 2, f);
            f = new Jg;
            var g = new Gg;
            var h = y(g, 1, 1);
            g = q(f.u);
            if (g & 2)
                throw Error();
            g = Cb(f, Gg, 1, 2, g);
            h = null != h ? h : new Gg;
            var l = r ? tb(f, 1, 2, void 0, !1) : void 0;
            g.push(h);
            r && l.push(h.u);
            eb(h.u) && bb(r ? l : g, 8);
            g = new Hg;
            g = y(g, 1, !0);
            f = Db(f, 2, g);
            e = Db(e, 3, f)
        } else
            e = D(a.i, Lg, 27);
        if (f = e)
            if (g = D(a.i, Og, 6)?.i() || [],
            e = a.h,
            1 == H(f, 1) && D(f, Kg, 2)?.i() && 0 != g.length) {
                var k;
                f = [];
                for (k of g)
                    if (g = ki(D(k, O, 1) || null))
                        g = g.query(e.document),
                        0 < g.length && f.push(g[0]);
                f = f.filter(Cg).filter(Dg(f)).filter(Eg(e));
                f.sort(Fg);
                if (k = f[0] || null)
                    f = e.document.createElement("div"),
                    f.id = "google-auto-placed-read-aloud-player-reserved",
                    Zc(f, {
                        width: "100%",
                        height: "65px"
                    }),
                    k.insertBefore(f, k.firstChild),
                    oi(e).audioSenseSpaceReserved = !0
            }
        k = a.h;
        var m;
        try {
            var u = (m = k.localStorage.getItem("google_ama_settings")) ? qi(m) : null
        } catch (x) {
            u = null
        }
        m = null !== u && A(u, 2, !1);
        u = oi(k);
        m && (u.eatf = !0,
        ld(7, [!0, 0, !1]));
        b: {
            f = {
                hb: !1,
                ib: !1
            };
            h = Sa(k.document.querySelectorAll(".google-auto-placed"));
            l = Sa(k.document.querySelectorAll("ins.adsbygoogle[data-anchor-shown],ins.adsbygoogle[data-anchor-status]"));
            const x = Sa(k.document.querySelectorAll("ins.adsbygoogle[data-ad-format=autorelaxed]"));
            g = (fj(k) || Sa(k.document.querySelectorAll("div[id^=div-gpt-ad]"))).concat(Sa(k.document.querySelectorAll("iframe[id^=google_ads_iframe]")));
            const w = Sa(k.document.querySelectorAll("div.trc_related_container,div.OUTBRAIN,div[id^=rcjsload],div[id^=ligatusframe],div[id^=crt-],iframe[id^=cto_iframe],div[id^=yandex_], div[id^=Ya_sync],iframe[src*=adnxs],div.advertisement--appnexus,div[id^=apn-ad],div[id^=amzn-native-ad],iframe[src*=amazon-adsystem],iframe[id^=ox_],iframe[src*=openx],img[src*=openx],div[class*=adtech],div[id^=adtech],iframe[src*=adtech],div[data-content-ad-placement=true],div.wpcnt div[id^=atatags-]"))
              , G = Sa(k.document.querySelectorAll("ins.adsbygoogle-ablated-ad-slot"))
              , ya = Sa(k.document.querySelectorAll("div.googlepublisherpluginad"))
              , U = Sa(k.document.querySelectorAll("html > ins.adsbygoogle"));
            e = [].concat(Sa(k.document.querySelectorAll("iframe[id^=aswift_],iframe[id^=google_ads_frame]")), Sa(k.document.querySelectorAll("body ins.adsbygoogle")));
            m = [];
            for (const [za,ra] of [[f.Rb, h], [f.hb, l], [f.Ub, x], [f.Sb, g], [f.Vb, w], [f.Qb, G], [f.Tb, ya], [f.ib, U]])
                f = ra,
                !1 === za ? m = m.concat(f) : e = e.concat(f);
            e = gj(e);
            m = gj(m);
            e = e.slice(0);
            for (v of m)
                for (m = 0; m < e.length; m++)
                    (v.contains(e[m]) || e[m].contains(v)) && e.splice(m, 1);
            var v = e;
            m = P(k).clientHeight;
            for (k = 0; k < v.length; k++)
                if (!(v[k].getBoundingClientRect().top > m)) {
                    v = !0;
                    break b
                }
            v = !1
        }
        v = v ? u.eatfAbg = !0 : !1;
        if (v)
            return !0;
        v = new lg([2]);
        for (u = 0; u < c.length; u++) {
            m = a;
            e = c[u];
            k = u;
            f = b;
            g = d;
            h = v;
            if (D(e, sg, 4) && h.contains(t(D(e, sg, 4), 1)) && 1 === t(e, 8) && jj(e, g)) {
                m.j++;
                if (f = kj(m, e, f, g))
                    g = oi(m.h),
                    g.numAutoAdsPlaced || (g.numAutoAdsPlaced = 0),
                    D(e, O, 1) && null != Gb(D(e, O, 1), 5) && (g.numPostPlacementsPlaced ? g.numPostPlacementsPlaced++ : g.numPostPlacementsPlaced = 1),
                    null == g.placed && (g.placed = []),
                    g.numAutoAdsPlaced++,
                    g.placed.push({
                        index: k,
                        element: f.ia
                    }),
                    ld(7, [!1, m.j, !0]);
                m = f
            } else
                m = null;
            if (m)
                return !0
        }
        ld(7, [!1, a.j, !1]);
        return !1
    }
    function kj(a, b, c, d) {
        if (!jj(b, d) || 1 != t(b, 8))
            return null;
        d = D(b, O, 1);
        if (!d)
            return null;
        d = ki(d);
        if (!d)
            return null;
        d = d.query(a.h.document);
        if (0 == d.length)
            return null;
        d = d[0];
        var e = ni[t(b, 2)];
        e = void 0 === e ? null : e;
        var f;
        if (!(f = null == e)) {
            a: {
                f = a.h;
                switch (e) {
                case 0:
                    f = $i(aj(d), f);
                    break a;
                case 3:
                    f = $i(d, f);
                    break a;
                case 2:
                    var g = d.lastChild;
                    f = $i(g ? 1 == g.nodeType ? g : aj(g) : null, f);
                    break a
                }
                f = !1
            }
            if (c = !f && !(!c && 2 == e && !bj(d)))
                c = 1 == e || 2 == e ? d : d.parentNode,
                c = !(c && !Xg(c) && 0 >= c.offsetWidth);
            f = !c
        }
        if (!(c = f)) {
            c = a.A;
            f = t(b, 2);
            g = fa(d);
            g = c.i.h.get(g);
            if (!(g = g ? g.contains(f) : !1))
                a: {
                    if (c.h.contains(fa(d)))
                        switch (f) {
                        case 2:
                        case 3:
                            g = !0;
                            break a;
                        default:
                            g = !1;
                            break a
                        }
                    for (f = d.parentElement; f; ) {
                        if (c.h.contains(fa(f))) {
                            g = !0;
                            break a
                        }
                        f = f.parentElement
                    }
                    g = !1
                }
            c = g
        }
        if (!c) {
            c = a.v;
            f = t(b, 2);
            a: switch (f) {
            case 1:
                g = Wi(d.previousElementSibling) || Yi(d);
                break a;
            case 4:
                g = Wi(d) || Yi(d.nextElementSibling);
                break a;
            case 2:
                g = Yi(d.firstElementChild);
                break a;
            case 3:
                g = Wi(d.lastElementChild);
                break a;
            default:
                throw Error("Unknown RelativePosition: " + f);
            }
            c = g || Ti(c, d, f)
        }
        if (c)
            return null;
        f = D(b, Pg, 3);
        c = {};
        f && (c.Ua = t(f, 1),
        c.La = t(f, 2),
        c.ab = !!ub(f, 3));
        f = D(b, sg, 4) && t(D(b, sg, 4), 2) ? t(D(b, sg, 4), 2) : null;
        f = vg(f);
        g = null != Gb(b, 12) ? Gb(b, 12) : null;
        g = null == g ? null : new ug(null,{
            google_ml_rank: g
        });
        b = lj(a, b);
        b = tg(a.m, f, g, b);
        f = a.h;
        a = a.C;
        var h = f.document
          , l = c.ab || !1;
        g = (new Dc(h)).createElement("DIV");
        const k = g.style;
        k.width = "100%";
        k.height = "auto";
        k.clear = l ? "both" : "none";
        l = g.style;
        l.textAlign = "center";
        c.pb && ei(l, c.pb);
        h = (new Dc(h)).createElement("INS");
        l = h.style;
        l.display = "block";
        l.margin = "auto";
        l.backgroundColor = "transparent";
        c.Ua && (l.marginTop = c.Ua);
        c.La && (l.marginBottom = c.La);
        c.Wa && ei(l, c.Wa);
        g.appendChild(h);
        c = {
            sa: g,
            ia: h
        };
        c.ia.setAttribute("data-ad-format", "auto");
        g = [];
        if (h = b && b.Ma)
            c.sa.className = h.join(" ");
        h = c.ia;
        h.className = "adsbygoogle";
        h.setAttribute("data-ad-client", a);
        g.length && h.setAttribute("data-ad-channel", g.join("+"));
        a: {
            try {
                var m = c.sa;
                if (S(eh)) {
                    {
                        const G = Eh(d, e);
                        if (G.init) {
                            var u = G.init;
                            for (d = u; d = G.ja(d); )
                                u = d;
                            var v = {
                                anchor: u,
                                position: G.na
                            }
                        } else
                            v = {
                                anchor: d,
                                position: e
                            }
                    }
                    m["google-ama-order-assurance"] = 0;
                    Dh(m, v.anchor, v.position)
                } else
                    Dh(m, d, e);
                b: {
                    var x = c.ia;
                    x.dataset.adsbygoogleStatus = "reserved";
                    x.className += " adsbygoogle-noablate";
                    m = {
                        element: x
                    };
                    var w = b && b.Ra;
                    if (x.hasAttribute("data-pub-vars")) {
                        try {
                            w = JSON.parse(x.getAttribute("data-pub-vars"))
                        } catch (G) {
                            break b
                        }
                        x.removeAttribute("data-pub-vars")
                    }
                    w && (m.params = w);
                    (f.adsbygoogle = f.adsbygoogle || []).push(m)
                }
            } catch (G) {
                (x = c.sa) && x.parentNode && (w = x.parentNode,
                w.removeChild(x),
                Xg(w) && (w.style.display = w.getAttribute("data-init-display") || "none"));
                x = !1;
                break a
            }
            x = !0
        }
        return x ? c : null
    }
    function lj(a, b) {
        return ig(kg(ri(b).map(wg), c=>{
            oi(a.h).exception = c
        }
        ))
    }
    const mj = class {
        constructor(a, b, c, d, e) {
            this.h = a;
            this.C = b;
            this.i = c;
            this.m = e || null;
            this.A = (this.B = d) ? Ni(a.document, E(d, Ai, 5)) : Ni(a.document, []);
            this.v = new Zi;
            this.j = 0;
            this.l = !1
        }
    }
    ;
    function ij(a) {
        const b = {};
        a && tb(a, 6, 0, !1, eb(a.u)).forEach(c=>{
            b[c] = !0
        }
        );
        return b
    }
    function jj(a, b) {
        return a && void 0 !== Ab(a, sg, 4, !1) && b[t(D(a, sg, 4), 2)] ? !1 : !0
    }
    ;var nj = ac(class extends I {
        constructor(a) {
            super(a)
        }
    }
    );
    class T extends Error {
        constructor(a="") {
            super();
            this.name = "TagError";
            this.message = a ? "adsbygoogle.push() error: " + a : "";
            Error.captureStackTrace ? Error.captureStackTrace(this, T) : this.stack = Error().stack || ""
        }
    }
    ;let oj, V;
    const pj = new Sd(n);
    var qj = a=>{
        null != a && (n.google_measure_js_timing = a);
        n.google_measure_js_timing || Rd(pj)
    }
    ;
    (a=>{
        oj = a || new Hd;
        "number" !== typeof n.google_srt && (n.google_srt = Math.random());
        Fd(oj, n.google_srt);
        V = new Ud(oj,pj);
        V.l(!0);
        "complete" == n.document.readyState ? qj() : pj.h && kc(n, "load", ()=>{
            qj()
        }
        )
    }
    )();
    var rj = (a,b,c)=>V.ga(a, b, c)
      , sj = (a,b,c)=>{
        const d = M(Rf).h();
        !b.eid && d.length && (b.eid = d.toString());
        Gd(oj, a, b, !0, c)
    }
      , tj = (a,b)=>{
        V.ba(a, b)
    }
      , uj = (a,b,c,d)=>{
        let e;
        vd(b) ? e = b.msg || Td(b.error) : e = Td(b);
        return 0 == e.indexOf("TagError") ? (c = b instanceof ud ? b.error : b,
        c.pbr || (c.pbr = !0,
        V.I(a, b, .1, d, "puberror")),
        !1) : V.I(a, b, c, d)
    }
    ;
    function vj(a) {
        try {
            var b = a.localStorage.getItem("google_auto_fc_cmp_setting") || null
        } catch (d) {
            b = null
        }
        const c = b;
        return c ? hg(()=>nj(c)) : eg(null)
    }
    ;function wj() {
        if (xj)
            return xj;
        const a = nd() || window
          , b = a.google_persistent_state_async;
        return null != b && "object" == typeof b && null != b.S && "object" == typeof b.S ? xj = b : a.google_persistent_state_async = xj = new yj
    }
    function zj(a) {
        return Aj[a] || "google_ps_" + a
    }
    function Bj(a, b, c) {
        b = zj(b);
        a = a.S;
        const d = a[b];
        return void 0 === d ? (a[b] = c(),
        a[b]) : d
    }
    function Cj(a, b, c) {
        return Bj(a, b, ()=>c)
    }
    class yj {
        constructor() {
            this.S = {}
        }
    }
    var xj = null;
    const Aj = {
        [8]: "google_prev_ad_formats_by_region",
        [9]: "google_prev_ad_slotnames_by_region"
    };
    function Dj(a) {
        this.h = a || {
            cookie: ""
        }
    }
    Dj.prototype.set = function(a, b, c) {
        let d, e, f, g = !1, h;
        "object" === typeof c && (h = c.Yb,
        g = c.Zb || !1,
        f = c.domain || void 0,
        e = c.path || void 0,
        d = c.nb);
        if (/[;=\s]/.test(a))
            throw Error('Invalid cookie name "' + a + '"');
        if (/[;\r\n]/.test(b))
            throw Error('Invalid cookie value "' + b + '"');
        void 0 === d && (d = -1);
        this.h.cookie = a + "=" + b + (f ? ";domain=" + f : "") + (e ? ";path=" + e : "") + (0 > d ? "" : 0 == d ? ";expires=" + (new Date(1970,1,1)).toUTCString() : ";expires=" + (new Date(Date.now() + 1E3 * d)).toUTCString()) + (g ? ";secure" : "") + (null != h ? ";samesite=" + h : "")
    }
    ;
    Dj.prototype.get = function(a, b) {
        const c = a + "="
          , d = (this.h.cookie || "").split(";");
        for (let e = 0, f; e < d.length; e++) {
            f = qa(d[e]);
            if (0 == f.lastIndexOf(c, 0))
                return f.slice(c.length);
            if (f == a)
                return ""
        }
        return b
    }
    ;
    Dj.prototype.isEmpty = function() {
        return !this.h.cookie
    }
    ;
    Dj.prototype.clear = function() {
        var a = (this.h.cookie || "").split(";");
        const b = [];
        var c = [];
        let d, e;
        for (let f = 0; f < a.length; f++)
            e = qa(a[f]),
            d = e.indexOf("="),
            -1 == d ? (b.push(""),
            c.push(e)) : (b.push(e.substring(0, d)),
            c.push(e.substring(d + 1)));
        for (c = b.length - 1; 0 <= c; c--)
            a = b[c],
            this.get(a),
            this.set(a, "", {
                nb: 0,
                path: void 0,
                domain: void 0
            })
    }
    ;
    function Ej(a, b=window) {
        if (ub(a, 5))
            try {
                return b.localStorage
            } catch {}
        return null
    }
    ;function Fj(a) {
        var b = new Gj;
        return y(b, 5, a)
    }
    var Gj = class extends I {
        constructor() {
            super()
        }
    }
    ;
    const Hj = a=>{
        void 0 !== a.addtlConsent && "string" !== typeof a.addtlConsent && (a.addtlConsent = void 0);
        void 0 !== a.gdprApplies && "boolean" !== typeof a.gdprApplies && (a.gdprApplies = void 0);
        return void 0 !== a.tcString && "string" !== typeof a.tcString || void 0 !== a.listenerId && "number" !== typeof a.listenerId ? 2 : a.cmpStatus && "error" !== a.cmpStatus ? 0 : 3
    }
    ;
    function Ij(a) {
        if (!1 === a.gdprApplies)
            return !0;
        void 0 === a.internalErrorState && (a.internalErrorState = Hj(a));
        return "error" === a.cmpStatus || 0 !== a.internalErrorState ? a.internalBlockOnErrors ? (id({
            e: String(a.internalErrorState)
        }),
        !1) : !0 : "loaded" !== a.cmpStatus || "tcloaded" !== a.eventStatus && "useractioncomplete" !== a.eventStatus ? !1 : !0
    }
    function Jj(a) {
        if (a.i)
            return a.i;
        a.i = Xc(a.l, "__tcfapiLocator");
        return a.i
    }
    function Kj(a) {
        return "function" === typeof a.l.__tcfapi || null != Jj(a)
    }
    function Lj(a, b, c, d) {
        c || (c = ()=>{}
        );
        if ("function" === typeof a.l.__tcfapi)
            a = a.l.__tcfapi,
            a(b, 2, c, d);
        else if (Jj(a)) {
            Mj(a);
            const e = ++a.J;
            a.v[e] = c;
            a.i && a.i.postMessage({
                __tcfapiCall: {
                    command: b,
                    version: 2,
                    callId: e,
                    parameter: d
                }
            }, "*")
        } else
            c({}, !1)
    }
    function Mj(a) {
        a.m || (a.m = b=>{
            try {
                var c = ("string" === typeof b.data ? JSON.parse(b.data) : b.data).__tcfapiReturn;
                a.v[c.callId](c.returnValue, c.success)
            } catch (d) {}
        }
        ,
        kc(a.l, "message", a.m))
    }
    class Nj extends af {
        constructor(a) {
            var b = {};
            super();
            this.l = a;
            this.i = null;
            this.v = {};
            this.J = 0;
            this.C = b.Ta ?? 500;
            this.B = b.Pb ?? !1;
            this.m = null
        }
        h() {
            this.v = {};
            this.m && (lc(this.l, "message", this.m),
            delete this.m);
            delete this.v;
            delete this.l;
            delete this.i;
            super.h()
        }
        addEventListener(a) {
            let b = {
                internalBlockOnErrors: this.B
            };
            const c = jc(()=>a(b));
            let d = 0;
            -1 !== this.C && (d = setTimeout(()=>{
                b.tcString = "tcunavailable";
                b.internalErrorState = 1;
                c()
            }
            , this.C));
            const e = (f,g)=>{
                clearTimeout(d);
                f ? (b = f,
                b.internalErrorState = Hj(b),
                b.internalBlockOnErrors = this.B,
                g && 0 === b.internalErrorState || (b.tcString = "tcunavailable",
                g || (b.internalErrorState = 3))) : (b.tcString = "tcunavailable",
                b.internalErrorState = 3);
                a(b)
            }
            ;
            try {
                Lj(this, "addEventListener", e)
            } catch (f) {
                b.tcString = "tcunavailable",
                b.internalErrorState = 3,
                d && (clearTimeout(d),
                d = 0),
                c()
            }
        }
        removeEventListener(a) {
            a && a.listenerId && Lj(this, "removeEventListener", null, a.listenerId)
        }
    }
    ;var Sj = ({s: a, X: b, Ta: c, K: d, ka: e=!1, la: f=!1})=>{
        b = Oj({
            s: a,
            X: b,
            ka: e,
            la: f
        });
        null != b.h || "tcunav" != b.i.message ? d(b) : Pj(a, c).then(g=>g.map(Qj)).then(g=>g.map(h=>Rj(a, h))).then(d)
    }
      , Oj = ({s: a, X: b, ka: c=!1, la: d=!1})=>{
        if (!Tj({
            s: a,
            X: b,
            ka: c,
            la: d
        }))
            return Rj(a, Fj(!0));
        b = wj();
        return (b = Cj(b, 24)) ? Rj(a, Qj(b)) : gg(Error("tcunav"))
    }
    ;
    function Tj({s: a, X: b, ka: c, la: d}) {
        if (!(d = !d && Kj(new Nj(a)))) {
            if (c = !c) {
                if (b) {
                    a = vj(a);
                    if (null != a.h)
                        if ((a = a.h.value) && null != t(a, 1))
                            b: switch (a = t(a, 1),
                            a) {
                            case 1:
                                a = !0;
                                break b;
                            default:
                                throw Error("Unhandled AutoGdprFeatureStatus: " + a);
                            }
                        else
                            a = !1;
                    else
                        V.I(806, a.i, void 0, void 0),
                        a = !1;
                    b = !a
                }
                c = b
            }
            d = c
        }
        return d ? !0 : !1
    }
    function Pj(a, b) {
        return Promise.race([Uj(), Vj(a, b)])
    }
    function Uj() {
        return (new Promise(a=>{
            var b = wj();
            a = {
                resolve: a
            };
            const c = Cj(b, 25, []);
            c.push(a);
            b.S[zj(25)] = c
        }
        )).then(Wj)
    }
    function Vj(a, b) {
        return new Promise(c=>{
            a.setTimeout(c, b, gg(Error("tcto")))
        }
        )
    }
    function Wj(a) {
        return a ? eg(a) : gg(Error("tcnull"))
    }
    function Qj(a) {
        if (Ij(a))
            if (!1 !== a.gdprApplies && "tcunavailable" !== a.tcString && void 0 !== a.gdprApplies && "string" === typeof a.tcString && a.tcString.length) {
                b: {
                    if (a.publisher && a.publisher.restrictions) {
                        var b = a.publisher.restrictions["1"];
                        if (void 0 !== b) {
                            b = b["755"];
                            break b
                        }
                    }
                    b = void 0
                }
                0 === b ? a = !1 : a.purpose && a.vendor ? (b = a.vendor.consents,
                (b = !(!b || !b["755"])) && a.purposeOneTreatment && "CH" === a.publisherCC ? a = !0 : (b && (a = a.purpose.consents,
                b = !(!a || !a["1"])),
                a = b)) : a = !0
            } else
                a = !0;
        else
            a = !1;
        return Fj(a)
    }
    function Rj(a, b) {
        return (a = Ej(b, a)) ? eg(a) : gg(Error("unav"))
    }
    ;var Yj = class extends I {
        constructor(a) {
            super(a, -1, Xj)
        }
    }
      , Xj = [1, 2, 3];
    var ak = class extends I {
        constructor(a) {
            super(a, -1, Zj)
        }
    }
      , Zj = [1, 2, 3];
    var bk = class extends I {
        constructor(a) {
            super(a)
        }
        i() {
            return D(this, Yj, 2)
        }
        l() {
            return D(this, ak, 3)
        }
    }
    ;
    const ck = class {
        constructor(a) {
            this.exception = a
        }
    }
    ;
    function dk(a, b) {
        try {
            var c = a.i
              , d = c.resolve
              , e = a.h;
            oi(e.h);
            E(e.i, Rg, 1);
            d.call(c, new ck(b))
        } catch (f) {
            a = a.i,
            b = f,
            Xf(a),
            a.h = 2,
            a.j = b,
            Zf(a.i)
        }
    }
    var ek = class {
        constructor(a, b, c) {
            this.j = a;
            this.h = b;
            this.i = c
        }
        start() {
            this.l()
        }
        l() {
            try {
                switch (this.j.document.readyState) {
                case "complete":
                case "interactive":
                    hj(this.h, !0);
                    dk(this);
                    break;
                default:
                    hj(this.h, !1) ? dk(this) : this.j.setTimeout(la(this.l, this), 100)
                }
            } catch (a) {
                dk(this, a)
            }
        }
    }
    ;
    var fk = "a".charCodeAt()
      , gk = oc(Vf)
      , hk = oc(Wf);
    function W(a, b) {
        if (a.h + b > a.i.length)
            throw Error("Requested length " + b + " is past end of string.");
        const c = a.i.substring(a.h, a.h + b);
        a.h += b;
        return parseInt(c, 2)
    }
    function ik(a) {
        return String.fromCharCode(fk + W(a, 6)) + String.fromCharCode(fk + W(a, 6))
    }
    function jk(a) {
        let b = W(a, 12);
        const c = [];
        for (; b--; ) {
            var d = !0 === !!W(a, 1)
              , e = W(a, 16);
            if (d)
                for (d = W(a, 16); e <= d; e++)
                    c.push(e);
            else
                c.push(e)
        }
        c.sort((f,g)=>f - g);
        return c
    }
    function kk(a, b, c) {
        const d = [];
        for (let e = 0; e < b; e++)
            if (W(a, 1)) {
                const f = e + 1;
                if (c && -1 === c.indexOf(f))
                    throw Error(`ID: ${f} is outside of allowed values!`);
                d.push(f)
            }
        return d
    }
    function lk(a) {
        const b = W(a, 16);
        return !0 === !!W(a, 1) ? (a = jk(a),
        a.forEach(c=>{
            if (c > b)
                throw Error(`ID ${c} is past MaxVendorId ${b}!`);
        }
        ),
        a) : kk(a, b)
    }
    class mk {
        constructor(a) {
            if (/[^01]/.test(a))
                throw Error(`Input bitstring ${a} is malformed!`);
            this.i = a;
            this.h = 0
        }
    }
    ;var ok = (a,b)=>{
        try {
            var c = Xa(a.split(".")[0]).map(e=>e.toString(2).padStart(8, "0")).join("");
            const d = new mk(c);
            c = {};
            c.tcString = a;
            c.gdprApplies = !0;
            d.h += 78;
            c.cmpId = W(d, 12);
            c.cmpVersion = W(d, 12);
            d.h += 30;
            c.tcfPolicyVersion = W(d, 6);
            c.isServiceSpecific = !!W(d, 1);
            c.useNonStandardStacks = !!W(d, 1);
            c.specialFeatureOptins = nk(kk(d, 12, hk), hk);
            c.purpose = {
                consents: nk(kk(d, 24, gk), gk),
                legitimateInterests: nk(kk(d, 24, gk), gk)
            };
            c.purposeOneTreatment = !!W(d, 1);
            c.publisherCC = ik(d);
            c.vendor = {
                consents: nk(lk(d), b),
                legitimateInterests: nk(lk(d), b)
            };
            return c
        } catch (d) {
            return null
        }
    }
    ;
    const nk = (a,b)=>{
        const c = {};
        if (Array.isArray(b) && 0 !== b.length)
            for (const d of b)
                c[d] = -1 !== a.indexOf(d);
        else
            for (const d of a)
                c[d] = !0;
        delete c[0];
        return c
    }
    ;
    var pk = class extends I {
        constructor(a) {
            super(a)
        }
    }
    ;
    var qk = class extends I {
        constructor(a) {
            super(a)
        }
    }
    ;
    var sk = ac(class extends I {
        constructor(a) {
            super(a, -1, rk)
        }
    }
    )
      , rk = [7];
    function tk(a) {
        return (a = uk(a)) ? D(a, qk, 4) : null
    }
    function uk(a) {
        if (a = (new Dj(a)).get("FCCDCF", ""))
            if (a.startsWith("%"))
                try {
                    var b = decodeURIComponent(a)
                } catch (c) {
                    b = null
                }
            else
                b = a;
        else
            b = null;
        try {
            return b ? sk(b) : null
        } catch (c) {
            return null
        }
    }
    ;oc(Vf).map(a=>Number(a));
    oc(Wf).map(a=>Number(a));
    function vk(a) {
        a.__tcfapiPostMessageReady || wk(new xk(a))
    }
    function wk(a) {
        a.i = b=>{
            const c = "string" == typeof b.data;
            let d;
            try {
                d = c ? JSON.parse(b.data) : b.data
            } catch (f) {
                return
            }
            const e = d.__tcfapiCall;
            !e || "ping" !== e.command && "getTCData" !== e.command && "addEventListener" !== e.command && "removeEventListener" !== e.command || a.h.__tcfapi(e.command, e.version, (f,g)=>{
                const h = {};
                h.__tcfapiReturn = "removeEventListener" === e.command ? {
                    success: f,
                    callId: e.callId
                } : {
                    returnValue: f,
                    success: g,
                    callId: e.callId
                };
                f = c ? JSON.stringify(h) : h;
                b.source && "function" === typeof b.source.postMessage && b.source.postMessage(f, b.origin);
                return f
            }
            , e.parameter)
        }
        ;
        a.h.addEventListener("message", a.i);
        a.h.__tcfapiPostMessageReady = !0
    }
    var xk = class {
        constructor(a) {
            this.h = a;
            this.i = null
        }
    }
    ;
    var yk = (a,b)=>{
        const c = a.document
          , d = ()=>{
            if (!a.frames[b])
                if (c.body) {
                    const e = Mc("IFRAME", c);
                    e.style.display = "none";
                    e.style.width = "0px";
                    e.style.height = "0px";
                    e.style.border = "none";
                    e.style.zIndex = "-1000";
                    e.style.left = "-1000px";
                    e.style.top = "-1000px";
                    e.name = b;
                    c.body.appendChild(e)
                } else
                    a.setTimeout(d, 5)
        }
        ;
        d()
    }
    ;
    function zk() {
        var a = window
          , b = S(jh);
        a.__uspapi || a.frames.__uspapiLocator || (a = new Ak(a),
        Bk(a),
        b && Ck(a))
    }
    function Bk(a) {
        !a.l || a.h.__uspapi || a.h.frames.__uspapiLocator || (a.h.__uspapiManager = "fc",
        yk(a.h, "__uspapiLocator"),
        na("__uspapi", (...b)=>Dk(a, ...b)))
    }
    function Ck(a) {
        !a.i || a.h.__tcfapi || a.h.frames.__tcfapiLocator || (a.h.__tcfapiManager = "fc",
        yk(a.h, "__tcfapiLocator"),
        a.h.__tcfapiEventListeners = a.h.__tcfapiEventListeners || [],
        na("__tcfapi", (...b)=>Ek(a, ...b)),
        vk(a.h))
    }
    function Dk(a, b, c, d) {
        "function" === typeof d && "getUSPData" === b && d({
            version: 1,
            uspString: a.l
        }, !0)
    }
    function Ek(a, b, c, d, e=null) {
        if ("function" === typeof d)
            if (c && 2 !== c)
                d(null, !1);
            else
                switch (c = a.h.__tcfapiEventListeners,
                b) {
                case "getTCData":
                    !e || Array.isArray(e) && e.every(f=>"number" === typeof f) ? d(Fk(a, e, null), !0) : d(null, !1);
                    break;
                case "ping":
                    d({
                        gdprApplies: !0,
                        cmpLoaded: !0,
                        cmpStatus: "loaded",
                        displayStatus: "disabled",
                        apiVersion: "2.0",
                        cmpVersion: 1,
                        cmpId: 300
                    });
                    break;
                case "addEventListener":
                    b = c.push(d);
                    d(Fk(a, null, b - 1), !0);
                    break;
                case "removeEventListener":
                    c[e] ? (c[e] = null,
                    d(!0)) : d(!1);
                    break;
                case "getInAppTCData":
                case "getVendorList":
                    d(null, !1)
                }
    }
    function Fk(a, b, c) {
        if (!a.i)
            return null;
        b = ok(a.i, b);
        b.addtlConsent = null != a.j ? a.j : void 0;
        b.cmpStatus = "loaded";
        b.eventStatus = "tcloaded";
        null != c && (b.listenerId = c);
        return b
    }
    class Ak {
        constructor(a) {
            this.h = a;
            var b;
            this.l = (b = (b = uk(a.document)) ? D(b, pk, 5) || null : null) ? t(b, 2) : null;
            this.i = (b = tk(a.document)) && null != t(b, 1) ? t(b, 1) : null;
            this.j = (a = tk(a.document)) && null != t(a, 2) ? t(a, 2) : null
        }
    }
    ;const Gk = {
        google_ad_channel: !0,
        google_ad_host: !0
    };
    var Hk = (a,b)=>{
        a.location.href && a.location.href.substring && (b.url = a.location.href.substring(0, 200));
        sj("ama", b, .01)
    }
      , Ik = a=>{
        const b = {};
        J(Gk, (c,d)=>{
            d in a && (b[d] = a[d])
        }
        );
        return b
    }
    ;
    const Jk = a=>{
        const b = /[a-zA-Z0-9._~-]/
          , c = /%[89a-zA-Z]./;
        return a.replace(/(%[a-zA-Z0-9]{2})/g, function(d) {
            if (!d.match(c)) {
                const e = decodeURIComponent(d);
                if (e.match(b))
                    return e
            }
            return d.toUpperCase()
        })
    }
      , Kk = a=>{
        let b = "";
        const c = /[/%?&=]/;
        for (let d = 0; d < a.length; ++d) {
            const e = a[d];
            b = e.match(c) ? b + e : b + encodeURIComponent(e)
        }
        return b
    }
    ;
    var Lk = a=>{
        a = tb(a, 2, 0, !1, eb(a.u));
        if (!a)
            return !1;
        for (let b = 0; b < a.length; b++)
            if (1 == a[b])
                return !0;
        return !1
    }
      , Nk = (a,b)=>{
        a = Kk(Jk(a.location.pathname)).replace(/(^\/)|(\/$)/g, "");
        const c = Sc(a)
          , d = Mk(a);
        return b.find(e=>{
            const f = void 0 !== Ab(e, wi, 7, !1) ? Hb(D(e, wi, 7), 1) : Hb(e, 1);
            e = void 0 !== Ab(e, wi, 7, !1) ? t(D(e, wi, 7), 2) : 2;
            if ("number" !== typeof f)
                return !1;
            switch (e) {
            case 1:
                return f == c;
            case 2:
                return d[f] || !1
            }
            return !1
        }
        ) || null
    }
    ;
    const Mk = a=>{
        const b = {};
        for (; ; ) {
            b[Sc(a)] = !0;
            if (!a)
                return b;
            a = a.substring(0, a.lastIndexOf("/"))
        }
    }
    ;
    var Ok = a=>{
        a = D(a, vi, 3);
        return !a || t(a, 1) <= Date.now() ? !1 : !0
    }
    ;
    function Pk(a) {
        if (S(ch))
            var b = null;
        else
            try {
                b = a.getItem("google_ama_config")
            } catch (d) {
                b = null
            }
        try {
            var c = b ? Li(b) : null
        } catch (d) {
            c = null
        }
        return c
    }
    ;var Qk = class extends I {
        constructor(a) {
            super(a)
        }
        i() {
            return D(this, bk, 2)
        }
        l() {
            return A(this, 3)
        }
    }
    ;
    var Sk = class extends I {
        constructor(a) {
            super(a, -1, Rk)
        }
        i() {
            return vb(this, 1, pb)
        }
        l() {
            return D(this, Qk, 2)
        }
    }
      , Rk = [1];
    var Uk = class extends I {
        constructor(a) {
            super(a, -1, Tk)
        }
        getId() {
            return B(t(this, 1), 0)
        }
    }
      , Tk = [2];
    var Wk = class extends I {
        constructor(a) {
            super(a, -1, Vk)
        }
    }
      , Vk = [2];
    var Yk = class extends I {
        constructor(a) {
            super(a, -1, Xk)
        }
    }
      , Xk = [2];
    var Zk = class extends I {
        constructor(a) {
            super(a)
        }
        i() {
            return B(t(this, 2), 0)
        }
        l() {
            return B(t(this, 4), 0)
        }
        m() {
            return A(this, 3)
        }
    }
    ;
    var al = class extends I {
        constructor(a) {
            super(a, -1, $k)
        }
    }
      , $k = [1, 4, 2, 3];
    var dl = class extends I {
        constructor(a) {
            super(a, -1, bl)
        }
        l() {
            return Jb(this, Qk, 13, cl)
        }
        A() {
            return void 0 !== Ab(this, Qk, zb(this, cl, 13))
        }
        i() {
            return Jb(this, Sk, 14, cl)
        }
        m() {
            return void 0 !== Ab(this, Sk, zb(this, cl, 14))
        }
    }
      , bl = [19]
      , cl = [13, 14];
    let el = void 0;
    var hl = (a,b,c="",d=null)=>1 === b && fl(c, d) ? !0 : gl(a, c, e=>Oa(E(e, bc, 2), f=>t(f, 1) === b))
      , fl = (a,b)=>b ? b.A() ? A(b.l(), 1) : b.m() && "" !== a && 1 === b.i().i().length && b.i().i()[0] === a ? A(b.i().l(), 1) : !1 : !1
      , il = (a,b)=>{
        b = B(t(b, 18), 0);
        -1 !== b && (a.tmod = b)
    }
      , kl = a=>{
        const b = Kc(L) || L;
        return jl(b, a) ? !0 : gl(L, "", c=>Oa(tb(c, 3, 0, !1, eb(c.u)), d=>d === a))
    }
    ;
    function jl(a, b) {
        a = (a = (a = a.location && a.location.hash) && a.match(/forced_clientside_labs=([\d,]+)/)) && a[1];
        return !!a && Ra(a.split(","), b.toString())
    }
    function gl(a, b, c) {
        a = Kc(a) || a;
        const d = ll(a);
        b && (b = td(String(b)));
        return nc(d, (e,f)=>Object.prototype.hasOwnProperty.call(d, f) && (!b || b === f) && c(e))
    }
    function ll(a) {
        a = ml(a);
        const b = {};
        J(a, (c,d)=>{
            try {
                const e = new dc(c);
                b[d] = e
            } catch (e) {}
        }
        );
        return b
    }
    var ml = a=>S(Zg) ? (Zb(el, Xb),
    a = Oj({
        s: a,
        X: el
    }),
    null != a.h ? nl(a.h.value) : {}) : nl(a.localStorage);
    function nl(a) {
        try {
            const b = a.getItem("google_adsense_settings");
            if (!b)
                return {};
            const c = JSON.parse(b);
            return c !== Object(c) ? {} : mc(c, (d,e)=>Object.prototype.hasOwnProperty.call(c, e) && "string" === typeof e && Array.isArray(d))
        } catch (b) {
            return {}
        }
    }
    function ol(a) {
        S(kh) && sj("atf_ad_settings_from_ppabg", {
            p_s: a
        }, .01)
    }
    const pl = a=>!!a && (0 < E(a, Rg, 1).length || S(dh) && 0 < E(a, Mg, 3).length)
      , ql = a=>{
        S(kh) && sj("overlay_settings_from_ppabg", {
            p_s: a
        }, .01)
    }
      , rl = a=>{
        const b = E(a, Di, 2);
        return 0 !== b.length && Nk(n, b) ? [] : tb(a, 3, 0, !1, eb(a.u))
    }
      , sl = (a,b)=>{
        if (b?.A()) {
            a = b?.l()?.i()?.l();
            if (!a)
                return [];
            ql(!1);
            return rl(a)
        }
        if (b?.m()) {
            const c = b?.i()?.i();
            if (!c || 1 !== c.length || !a || c[0] !== a || F(b, 17) != n.location.host)
                return [];
            a = b?.i()?.l()?.i()?.l();
            if (!a)
                return [];
            ql(!0);
            return rl(a)
        }
        return []
    }
    ;
    var tl = (a,b)=>{
        const c = [];
        let d = [];
        if (S(hh) || S(gh) || S(ih))
            d = sl(a, b);
        S(hh) && !d.includes(1) && c.push(1);
        S(gh) && !d.includes(2) && c.push(2);
        S(ih) && !d.includes(7) && c.push(7);
        return c
    }
    ;
    function X(a) {
        a.google_ad_modifications || (a.google_ad_modifications = {});
        return a.google_ad_modifications
    }
    function ul(a) {
        a = X(a);
        const b = a.space_collapsing || "none";
        return a.remove_ads_by_default ? {
            Ka: !0,
            wb: b,
            qa: a.ablation_viewport_offset
        } : null
    }
    function vl(a, b) {
        a = X(a);
        a.had_ads_ablation = !0;
        a.remove_ads_by_default = !0;
        a.space_collapsing = "slot";
        a.ablation_viewport_offset = b
    }
    function wl(a) {
        X(L).allow_second_reactive_tag = a
    }
    function xl() {
        const a = X(window);
        a.afg_slotcar_vars || (a.afg_slotcar_vars = {});
        return a.afg_slotcar_vars
    }
    ;function yl(a) {
        return a.document.querySelector('meta[name="google-adsense-platform-account"]')?.getAttribute("content") ?? null
    }
    ;function zl(a, b, c, d) {
        Al(new Bl(a,b,c,d))
    }
    function Al(a) {
        kg(jg(Oj({
            s: a.s,
            X: A(a.i, 6)
        }), b=>{
            Cl(a, b, !0)
        }
        ), ()=>{
            Dl(a)
        }
        )
    }
    function Cl(a, b, c) {
        kg(jg(El(b), d=>{
            Fl("ok");
            a.h(d, {
                fromLocalStorage: !0
            })
        }
        ), ()=>{
            var d = a.s;
            try {
                b.removeItem("google_ama_config")
            } catch (e) {
                Hk(d, {
                    lserr: 1
                })
            }
            c ? Dl(a) : a.h(null, null)
        }
        )
    }
    function Dl(a) {
        kg(jg(Gl(a), b=>{
            a.h(b, {
                fromPABGSettings: !0
            })
        }
        ), ()=>{
            Hl(a)
        }
        )
    }
    function El(a) {
        return (a = (a = Pk(a)) ? Ok(a) ? a : null : null) ? eg(a) : gg(Error("invlocst"))
    }
    function Gl(a) {
        var b = a.s;
        if ((X(b)?.head_tag_slot_vars?.google_ad_host ?? yl(b)) && !A(a.i, 22))
            return gg(Error("invtag"));
        a: {
            b = a.s;
            var c = a.j;
            a = a.i;
            if (a?.A())
                b = a?.l()?.i()?.i(),
                pl(b) ? ol(!1) : b = null;
            else {
                if (a?.m()) {
                    const d = a?.i()?.i()
                      , e = a?.i()?.l()?.i()?.i();
                    if (d && 1 === d.length && d[0] === c && pl(e) && F(a, 17) === b.location.host) {
                        ol(!0);
                        b = e;
                        break a
                    }
                }
                b = null
            }
        }
        b ? (c = new Ki,
        a = E(b, Rg, 1),
        c = Fb(c, 1, a),
        a = E(b, Di, 2),
        c = Fb(c, 7, a),
        S(dh) && 0 < E(b, Mg, 3).length && (a = new Og,
        b = E(b, Mg, 3),
        b = Fb(a, 1, b),
        Db(c, 6, b)),
        b = eg(c)) : b = gg(Error("invtag"));
        return b
    }
    function Hl(a) {
        Sj({
            s: a.s,
            X: A(a.i, 6),
            Ta: 50,
            K: b=>{
                Il(a, b)
            }
        })
    }
    function Il(a, b) {
        kg(jg(b, c=>{
            Cl(a, c, !1)
        }
        ), c=>{
            Fl(c.message);
            a.h(null, null)
        }
        )
    }
    function Fl(a) {
        sj("abg::amalserr", {
            status: a,
            guarding: "true",
            timeout: 50,
            rate: .01
        }, .01)
    }
    class Bl {
        constructor(a, b, c, d) {
            this.s = a;
            this.i = b;
            this.j = c;
            this.h = d
        }
    }
    ;var Ll = (a,b,c,d)=>{
        try {
            const e = Nk(a, E(c, Di, 7));
            if (e && Lk(e)) {
                t(e, 4) && (d = tg(d, new ug(null,{
                    google_package: t(e, 4)
                })));
                const f = new mj(a,b,c,e,d);
                ji(1E3, ()=>{
                    var g = new $f;
                    (new ek(a,f,g)).start();
                    return g.i
                }
                , a).then(ma(Jl, a), ma(Kl, a))
            }
        } catch (e) {
            Hk(a, {
                atf: -1
            })
        }
    }
    ;
    const Jl = a=>{
        Hk(a, {
            atf: 1
        })
    }
      , Kl = (a,b)=>{
        (a.google_ama_state = a.google_ama_state || {}).exception = b;
        Hk(a, {
            atf: 0
        })
    }
    ;
    function Ml(a) {
        S(oh) && (a.easpi = S(oh),
        S(zh) && (a.easpa = !0),
        a.asntp = 0,
        a.asntpv = 0,
        a.asntpl = 0,
        a.asntpm = 0,
        a.asntpc = 1E3,
        a.asna = 5,
        a.asnd = 5,
        a.asnp = 5,
        a.asns = 5,
        S(Ah) || (a.asmat = M(Bh).h(qh.h, qh.defaultValue)),
        a.asptt = -1,
        a.asro = S(rh),
        S(sh) || (a.asrc = !1),
        S(nh) && (a.asbu = !0),
        S(Ah) && (a.aseb = !0,
        a.ascet = !0,
        a.asla = .4,
        S(zh) && (a.asaa = -1)),
        S(th) || (a.asupm = !0),
        S(ph) && (a.easppi = !0))
    }
    ;Va || Fa();
    class Nl {
        constructor() {
            this.promise = new Promise(a=>{
                this.resolve = a
            }
            )
        }
    }
    ;function Ol() {
        const {promise: a, resolve: b} = new Nl;
        return {
            promise: a,
            resolve: b
        }
    }
    ;function Pl(a=()=>{}
    ) {
        n.google_llp || (n.google_llp = {});
        const b = n.google_llp;
        let c = b[7];
        if (c)
            return c;
        c = Ol();
        b[7] = c;
        a();
        return c
    }
    function Ql(a) {
        return Pl(()=>{
            Lc(n.document, a)
        }
        ).promise
    }
    ;var Rl = a=>{
        if (n.google_apltlad || n !== n.top || !a.google_ad_client)
            return null;
        n.google_apltlad = !0;
        const b = {
            enable_page_level_ads: {
                pltais: !0
            },
            google_ad_client: a.google_ad_client
        }
          , c = b.enable_page_level_ads;
        J(a, (d,e)=>{
            ci[e] && "google_ad_client" !== e && (c[e] = d)
        }
        );
        c.google_pgb_reactive = 7;
        Ml(c);
        if ("google_ad_section"in a || "google_ad_region"in a)
            c.google_ad_section = a.google_ad_section || a.google_ad_region;
        return b
    }
    ;
    var Ul = (a,b)=>{
        X(L).ama_ran_on_page || ji(1001, ()=>Sl(new Tl(a,b)), n)
    }
    ;
    function Sl(a) {
        zl(a.h, a.j, a.i.google_ad_client || "", (b,c)=>{
            var d = a.h
              , e = a.i;
            X(L).ama_ran_on_page || b && Vl(d, e, b, c)
        }
        )
    }
    class Tl {
        constructor(a, b) {
            this.h = n;
            this.i = a;
            this.j = b
        }
    }
    function Vl(a, b, c, d) {
        d && (oi(a).configSourceInAbg = d);
        void 0 !== Ab(c, Ii, 24, !1) && (d = pi(a),
        d.availableAbg = !0,
        d.ablationFromStorage = !!D(c, Ii, 24)?.i()?.i());
        if (ea(b.enable_page_level_ads) && 7 === b.enable_page_level_ads.google_pgb_reactive) {
            d = Nk(a, E(c, Di, 7));
            if (!d || !ub(d, 8)) {
                sj("amaait", {
                    value: "true"
                });
                return
            }
            sj("amaait", {
                value: "false"
            })
        }
        X(L).ama_ran_on_page = !0;
        D(c, ui, 15)?.i() && (X(a).enable_overlap_observer = !0);
        var e = D(c, ti, 13);
        e && 1 === t(e, 1) ? (d = 0,
        (e = D(e, si, 6)) && Gb(e, 3) && (d = Gb(e, 3) || 0),
        vl(a, d)) : D(c, Ii, 24)?.i()?.i() && (pi(a).ablatingThisPageview = !0,
        vl(a, 1));
        ld(3, [c.toJSON()]);
        const f = b.google_ad_client || "";
        b = Ik(ea(b.enable_page_level_ads) ? b.enable_page_level_ads : {});
        const g = tg(xg, new ug(null,b));
        rj(782, ()=>{
            Ll(a, f, c, g)
        }
        )
    }
    ;var Wl = {
        "120x90": !0,
        "160x90": !0,
        "180x90": !0,
        "200x90": !0,
        "468x15": !0,
        "728x15": !0
    };
    function Xl(a, b) {
        if (15 == b) {
            if (728 <= a)
                return 728;
            if (468 <= a)
                return 468
        } else if (90 == b) {
            if (200 <= a)
                return 200;
            if (180 <= a)
                return 180;
            if (160 <= a)
                return 160;
            if (120 <= a)
                return 120
        }
        return null
    }
    ;function Yl(a) {
        return b=>!!(b.ha & a)
    }
    class Y extends Vh {
        constructor(a, b, c, d=!1) {
            super(a, b);
            this.ha = c;
            this.kb = d
        }
        pa() {
            return this.ha
        }
        i(a, b, c) {
            b.google_ad_resize || (c.style.height = this.height() + "px",
            b.rpe = !0)
        }
    }
    ;const Zl = {
        image_stacked: 1 / 1.91,
        image_sidebyside: 1 / 3.82,
        mobile_banner_image_sidebyside: 1 / 3.82,
        pub_control_image_stacked: 1 / 1.91,
        pub_control_image_sidebyside: 1 / 3.82,
        pub_control_image_card_stacked: 1 / 1.91,
        pub_control_image_card_sidebyside: 1 / 3.74,
        pub_control_text: 0,
        pub_control_text_card: 0
    }
      , $l = {
        image_stacked: 80,
        image_sidebyside: 0,
        mobile_banner_image_sidebyside: 0,
        pub_control_image_stacked: 80,
        pub_control_image_sidebyside: 0,
        pub_control_image_card_stacked: 85,
        pub_control_image_card_sidebyside: 0,
        pub_control_text: 80,
        pub_control_text_card: 80
    }
      , am = {
        pub_control_image_stacked: 100,
        pub_control_image_sidebyside: 200,
        pub_control_image_card_stacked: 150,
        pub_control_image_card_sidebyside: 250,
        pub_control_text: 100,
        pub_control_text_card: 150
    };
    function bm(a) {
        var b = 0;
        a.V && b++;
        a.M && b++;
        a.N && b++;
        if (3 > b)
            return {
                P: "Tags data-matched-content-ui-type, data-matched-content-columns-num and data-matched-content-rows-num should be set together."
            };
        b = a.V.split(",");
        const c = a.N.split(",");
        a = a.M.split(",");
        if (b.length !== c.length || b.length !== a.length)
            return {
                P: 'Lengths of parameters data-matched-content-ui-type, data-matched-content-columns-num and data-matched-content-rows-num must match. Example: \n data-matched-content-rows-num="4,2"\ndata-matched-content-columns-num="1,6"\ndata-matched-content-ui-type="image_stacked,image_card_sidebyside"'
            };
        if (2 < b.length)
            return {
                P: "The parameter length of attribute data-matched-content-ui-type, data-matched-content-columns-num and data-matched-content-rows-num is too long. At most 2 parameters for each attribute are needed: one for mobile and one for desktop, while " + `you are providing ${b.length} parameters. Example: ${'\n data-matched-content-rows-num="4,2"\ndata-matched-content-columns-num="1,6"\ndata-matched-content-ui-type="image_stacked,image_card_sidebyside"'}.`
            };
        const d = []
          , e = [];
        for (let g = 0; g < b.length; g++) {
            var f = Number(c[g]);
            if (Number.isNaN(f) || 0 === f)
                return {
                    P: `Wrong value '${c[g]}' for ${"data-matched-content-rows-num"}.`
                };
            d.push(f);
            f = Number(a[g]);
            if (Number.isNaN(f) || 0 === f)
                return {
                    P: `Wrong value '${a[g]}' for ${"data-matched-content-columns-num"}.`
                };
            e.push(f)
        }
        return {
            N: d,
            M: e,
            Qa: b
        }
    }
    function cm(a) {
        return 1200 <= a ? {
            width: 1200,
            height: 600
        } : 850 <= a ? {
            width: a,
            height: Math.floor(.5 * a)
        } : 550 <= a ? {
            width: a,
            height: Math.floor(.6 * a)
        } : 468 <= a ? {
            width: a,
            height: Math.floor(.7 * a)
        } : {
            width: a,
            height: Math.floor(3.44 * a)
        }
    }
    ;const dm = Ta("script");
    function em(a, b, c) {
        null != a.ha && (c.google_responsive_formats = a.ha);
        null != a.T && (c.google_safe_for_responsive_override = a.T);
        null != a.i && (!0 === a.i ? c.google_full_width_responsive_allowed = !0 : (c.google_full_width_responsive_allowed = !1,
        c.gfwrnwer = a.i));
        null != a.j && !0 !== a.j && (c.gfwrnher = a.j);
        var d = a.m || c.google_ad_width;
        null != d && (c.google_resizing_width = d);
        d = a.l || c.google_ad_height;
        null != d && (c.google_resizing_height = d);
        d = a.size().h(b);
        const e = a.size().height();
        if (!c.google_ad_resize) {
            c.google_ad_width = d;
            c.google_ad_height = e;
            var f = a.size();
            b = f.h(b) + "x" + f.height();
            c.google_ad_format = b;
            c.google_responsive_auto_format = a.A;
            null != a.h && (c.armr = a.h);
            c.google_ad_resizable = !0;
            c.google_override_format = 1;
            c.google_loader_features_used = 128;
            !0 === a.i && (c.gfwrnh = a.size().height() + "px")
        }
        null != a.C && (c.gfwroml = a.C);
        null != a.J && (c.gfwromr = a.J);
        null != a.l && (c.gfwroh = a.l);
        null != a.m && (c.gfwrow = a.m);
        null != a.R && (c.gfwroz = a.R);
        null != a.v && (c.gml = a.v);
        null != a.B && (c.gmr = a.B);
        null != a.U && (c.gzi = a.U);
        b = Kc(window) || window;
        cj(b.location, "google_responsive_dummy_ad") && (Ra([1, 2, 3, 4, 5, 6, 7, 8], a.A) || 1 === a.h) && 2 !== a.h && (a = JSON.stringify({
            googMsgType: "adpnt",
            key_value: [{
                key: "qid",
                value: "DUMMY_AD"
            }]
        }),
        c.dash = `<${dm}>window.top.postMessage('${a}', '*'); 
          </${dm}> 
          <div id="dummyAd" style="width:${d}px;height:${e}px; 
            background:#ddd;border:3px solid #f00;box-sizing:border-box; 
            color:#000;"> 
            <p>Requested size:${d}x${e}</p> 
            <p>Rendered size:${d}x${e}</p> 
          </div>`)
    }
    class fm {
        constructor(a, b, c=null, d=null, e=null, f=null, g=null, h=null, l=null, k=null, m=null, u=null) {
            this.A = a;
            this.ea = b;
            this.ha = c;
            this.h = d;
            this.T = e;
            this.i = f;
            this.j = g;
            this.C = h;
            this.J = l;
            this.l = k;
            this.m = m;
            this.R = u;
            this.U = this.B = this.v = null
        }
        size() {
            return this.ea
        }
    }
    ;const gm = ["google_content_recommendation_ui_type", "google_content_recommendation_columns_num", "google_content_recommendation_rows_num"];
    var hm = class extends Vh {
        h(a) {
            return Math.min(1200, Math.max(this.L, Math.round(a)))
        }
    }
      , km = (a,b)=>{
        im(a, b);
        if ("pedestal" == b.google_content_recommendation_ui_type)
            return new fm(9,new hm(a,Math.floor(a * b.google_phwr)));
        var c = Ec();
        468 > a ? c ? (c = a - 8 - 8,
        c = Math.floor(c / 1.91 + 70) + Math.floor(11 * (c * Zl.mobile_banner_image_sidebyside + $l.mobile_banner_image_sidebyside) + 96),
        a = {
            da: a,
            ca: c,
            M: 1,
            N: 12,
            V: "mobile_banner_image_sidebyside"
        }) : (a = cm(a),
        a = {
            da: a.width,
            ca: a.height,
            M: 1,
            N: 13,
            V: "image_sidebyside"
        }) : (a = cm(a),
        a = {
            da: a.width,
            ca: a.height,
            M: 4,
            N: 2,
            V: "image_stacked"
        });
        jm(b, a);
        return new fm(9,new hm(a.da,a.ca))
    }
      , lm = (a,b)=>{
        im(a, b);
        var c = bm({
            N: b.google_content_recommendation_rows_num,
            M: b.google_content_recommendation_columns_num,
            V: b.google_content_recommendation_ui_type
        });
        if (c.P)
            a = {
                da: 0,
                ca: 0,
                M: 0,
                N: 0,
                V: "image_stacked",
                P: c.P
            };
        else {
            var d = 2 === c.Qa.length && 468 <= a ? 1 : 0;
            var e = c.Qa[d];
            e = 0 === e.indexOf("pub_control_") ? e : "pub_control_" + e;
            var f = am[e];
            let g = c.M[d];
            for (; a / g < f && 1 < g; )
                g--;
            f = g;
            d = c.N[d];
            c = Math.floor(((a - 8 * f - 8) / f * Zl[e] + $l[e]) * d + 8 * d + 8);
            a = 1500 < a ? {
                width: 0,
                height: 0,
                ub: "Calculated slot width is too large: " + a
            } : 1500 < c ? {
                width: 0,
                height: 0,
                ub: "Calculated slot height is too large: " + c
            } : {
                width: a,
                height: c
            };
            a = {
                da: a.width,
                ca: a.height,
                M: f,
                N: d,
                V: e
            }
        }
        if (a.P)
            throw new T(a.P);
        jm(b, a);
        return new fm(9,new hm(a.da,a.ca))
    }
    ;
    function im(a, b) {
        if (0 >= a)
            throw new T("Invalid responsive width from Matched Content slot " + b.google_ad_slot + ": " + a + ". Please ensure to put this Matched Content slot into a non-zero width div container.");
    }
    function jm(a, b) {
        a.google_content_recommendation_ui_type = b.V;
        a.google_content_recommendation_columns_num = b.M;
        a.google_content_recommendation_rows_num = b.N
    }
    ;class mm extends Vh {
        h() {
            return this.L
        }
        i(a, b, c) {
            Uh(a, c);
            b.google_ad_resize || (c.style.height = this.height() + "px",
            b.rpe = !0)
        }
    }
    ;const nm = {
        "image-top": a=>600 >= a ? 284 + .414 * (a - 250) : 429,
        "image-middle": a=>500 >= a ? 196 - .13 * (a - 250) : 164 + .2 * (a - 500),
        "image-side": a=>500 >= a ? 205 - .28 * (a - 250) : 134 + .21 * (a - 500),
        "text-only": a=>500 >= a ? 187 - .228 * (a - 250) : 130,
        "in-article": a=>420 >= a ? a / 1.2 : 460 >= a ? a / 1.91 + 130 : 800 >= a ? a / 4 : 200
    };
    var om = class extends Vh {
        h() {
            return Math.min(1200, this.L)
        }
    }
      , pm = (a,b,c,d,e)=>{
        var f = e.google_ad_layout || "image-top";
        if ("in-article" == f) {
            var g = a;
            if ("false" == e.google_full_width_responsive)
                a = g;
            else if (a = Ph(b, c, g, .2, e),
            !0 !== a)
                e.gfwrnwer = a,
                a = g;
            else if (a = P(b).clientWidth)
                if (e.google_full_width_responsive_allowed = !0,
                c.parentElement) {
                    b: {
                        g = c;
                        for (let h = 0; 100 > h && g.parentElement; ++h) {
                            const l = g.parentElement.childNodes;
                            for (let k = 0; k < l.length; ++k) {
                                const m = l[k];
                                if (m != g && Sh(b, m))
                                    break b
                            }
                            g = g.parentElement;
                            g.style.width = "100%";
                            g.style.height = "auto"
                        }
                    }
                    Uh(b, c)
                } else
                    a = g;
            else
                a = g
        }
        if (250 > a)
            throw new T("Fluid responsive ads must be at least 250px wide: availableWidth=" + a);
        a = Math.min(1200, Math.floor(a));
        if (d && "in-article" != f) {
            f = Math.ceil(d);
            if (50 > f)
                throw new T("Fluid responsive ads must be at least 50px tall: height=" + f);
            return new fm(11,new Vh(a,f))
        }
        if ("in-article" != f && (d = e.google_ad_layout_key)) {
            f = "" + d;
            c = Math.pow(10, 3);
            if (e = (d = f.match(/([+-][0-9a-z]+)/g)) && d.length)
                for (b = [],
                g = 0; g < e; g++)
                    b.push(parseInt(d[g], 36) / c);
            else
                b = null;
            if (!b)
                throw new T("Invalid data-ad-layout-key value: " + f);
            f = (a + -725) / 1E3;
            c = 0;
            d = 1;
            e = b.length;
            for (g = 0; g < e; g++)
                c += b[g] * d,
                d *= f;
            f = Math.ceil(1E3 * c - -725 + 10);
            if (isNaN(f))
                throw new T("Invalid height: height=" + f);
            if (50 > f)
                throw new T("Fluid responsive ads must be at least 50px tall: height=" + f);
            if (1200 < f)
                throw new T("Fluid responsive ads must be at most 1200px tall: height=" + f);
            return new fm(11,new Vh(a,f))
        }
        d = nm[f];
        if (!d)
            throw new T("Invalid data-ad-layout value: " + f);
        c = Yh(c, b);
        b = P(b).clientWidth;
        b = "in-article" !== f || c || a !== b ? Math.ceil(d(a)) : Math.ceil(1.25 * d(a));
        return new fm(11,"in-article" == f ? new om(a,b) : new Vh(a,b))
    }
    ;
    var qm = a=>b=>{
        for (let c = a.length - 1; 0 <= c; --c)
            if (!a[c](b))
                return !1;
        return !0
    }
      , sm = (a,b)=>{
        var c = rm.slice(0);
        const d = c.length;
        let e = null;
        for (let f = 0; f < d; ++f) {
            const g = c[f];
            if (a(g)) {
                if (!b || b(g))
                    return g;
                null === e && (e = g)
            }
        }
        return e
    }
    ;
    var Z = [new Y(970,90,2), new Y(728,90,2), new Y(468,60,2), new Y(336,280,1), new Y(320,100,2), new Y(320,50,2), new Y(300,600,4), new Y(300,250,1), new Y(250,250,1), new Y(234,60,2), new Y(200,200,1), new Y(180,150,1), new Y(160,600,4), new Y(125,125,1), new Y(120,600,4), new Y(120,240,4), new Y(120,120,1,!0)]
      , rm = [Z[6], Z[12], Z[3], Z[0], Z[7], Z[14], Z[1], Z[8], Z[10], Z[4], Z[15], Z[2], Z[11], Z[5], Z[13], Z[9], Z[16]];
    var um = (a,b,c,d,e)=>{
        "false" == e.google_full_width_responsive ? c = {
            D: a,
            F: 1
        } : "autorelaxed" == b && e.google_full_width_responsive || tm(b) || e.google_ad_resize ? (b = Qh(a, c, d, e),
        c = !0 !== b ? {
            D: a,
            F: b
        } : {
            D: P(c).clientWidth || a,
            F: !0
        }) : c = {
            D: a,
            F: 2
        };
        const {D: f, F: g} = c;
        return !0 !== g ? {
            D: a,
            F: g
        } : d.parentElement ? {
            D: f,
            F: g
        } : {
            D: a,
            F: g
        }
    }
      , xm = (a,b,c,d,e)=>{
        const {D: f, F: g} = rj(247, ()=>um(a, b, c, d, e));
        var h = !0 === g;
        const l = K(d.style.width)
          , k = K(d.style.height)
          , {aa: m, Y: u, pa: v, Pa: x} = vm(f, b, c, d, e, h);
        h = wm(b, v);
        var w;
        const G = (w = Wh(d, c, "marginLeft", K)) ? w + "px" : ""
          , ya = (w = Wh(d, c, "marginRight", K)) ? w + "px" : "";
        w = Wh(d, c, "zIndex") || "";
        return new fm(h,m,v,null,x,g,u,G,ya,k,l,w)
    }
      , tm = a=>"auto" == a || /^((^|,) *(horizontal|vertical|rectangle) *)+$/.test(a)
      , vm = (a,b,c,d,e,f)=>{
        b = "auto" == b ? .25 >= a / Math.min(1200, P(c).clientWidth) ? 4 : 3 : Oh(b);
        let g;
        var h = !1;
        let l = !1;
        var k = 488 > P(c).clientWidth;
        if (k) {
            g = Jh(d, c);
            var m = Yh(d, c);
            h = !m && g;
            l = m && g
        }
        m = [Xh(a), Yl(b)];
        m.push($h(k, c, d, l));
        null != e.google_max_responsive_height && m.push(ai(e.google_max_responsive_height));
        k = [w=>!w.kb];
        if (h || l)
            h = bi(c, d),
            k.push(ai(h));
        let u = sm(qm(m), qm(k));
        if (!u)
            throw new T("No slot size for availableWidth=" + a);
        const {aa: v, Y: x} = rj(248, ()=>{
            var w;
            a: if (f) {
                if (e.gfwrnh && (w = K(e.gfwrnh))) {
                    w = {
                        aa: new mm(a,w),
                        Y: !0
                    };
                    break a
                }
                w = a / 1.2;
                var G = Math;
                var ya = G.min;
                if (e.google_resizing_allowed || "true" == e.google_full_width_responsive)
                    var U = Infinity;
                else {
                    U = d;
                    let ra = Infinity;
                    do {
                        var za = Wh(U, c, "height", K);
                        za && (ra = Math.min(ra, za));
                        (za = Wh(U, c, "maxHeight", K)) && (ra = Math.min(ra, za))
                    } while ((U = U.parentElement) && "HTML" != U.tagName);
                    U = ra
                }
                G = ya.call(G, w, U);
                if (G < .5 * w || 100 > G)
                    G = w;
                w = {
                    aa: new mm(a,Math.floor(G)),
                    Y: G < w ? 102 : !0
                }
            } else
                w = {
                    aa: u,
                    Y: 100
                };
            return w
        }
        );
        return "in-article" === e.google_ad_layout && c.location && "#hffwroe2etoq" == c.location.hash ? {
            aa: ym(a, c, d, v, e),
            Y: !1,
            pa: b,
            Pa: g
        } : {
            aa: v,
            Y: x,
            pa: b,
            Pa: g
        }
    }
    ;
    const wm = (a,b)=>{
        if ("auto" == a)
            return 1;
        switch (b) {
        case 2:
            return 2;
        case 1:
            return 3;
        case 4:
            return 4;
        case 3:
            return 5;
        case 6:
            return 6;
        case 5:
            return 7;
        case 7:
            return 8
        }
        throw Error("bad mask");
    }
      , ym = (a,b,c,d,e)=>{
        const f = e.google_ad_height || Wh(c, b, "height", K);
        b = pm(a, b, c, f, e).size();
        return b.L * b.height() > a * d.height() ? new Y(b.L,b.height(),1) : d
    }
    ;
    var zm = (a,b,c,d,e)=>{
        var f;
        (f = P(b).clientWidth) ? 488 > P(b).clientWidth ? b.innerHeight >= b.innerWidth ? (e.google_full_width_responsive_allowed = !0,
        Uh(b, c),
        f = {
            D: f,
            F: !0
        }) : f = {
            D: a,
            F: 5
        } : f = {
            D: a,
            F: 4
        } : f = {
            D: a,
            F: 10
        };
        const {D: g, F: h} = f;
        if (!0 !== h || a == g)
            return new fm(12,new Vh(a,d),null,null,!0,h,100);
        const {aa: l, Y: k, pa: m} = vm(g, "auto", b, c, e, !0);
        return new fm(1,l,m,2,!0,h,k)
    }
    ;
    var Bm = (a,b)=>{
        const c = b.google_ad_format;
        if ("autorelaxed" == c) {
            a: {
                if ("pedestal" != b.google_content_recommendation_ui_type)
                    for (const d of gm)
                        if (null != b[d]) {
                            a = !0;
                            break a
                        }
                a = !1
            }
            return a ? 9 : 5
        }
        if (tm(c))
            return 1;
        if ("link" === c)
            return 4;
        if ("fluid" == c)
            return "in-article" !== b.google_ad_layout || !a.location || "#hffwroe2etop" != a.location.hash && "#hffwroe2etoq" != a.location.hash ? 8 : (Am(b),
            1);
        if (27 === b.google_reactive_ad_format)
            return Am(b),
            1
    }
      , Dm = (a,b,c,d,e=!1)=>{
        e = b.offsetWidth || (c.google_ad_resize || e) && Wh(b, d, "width", K) || c.google_ad_width || 0;
        4 === a && (c.google_ad_format = "auto",
        a = 1);
        var f = (f = Cm(a, e, b, c, d)) ? f : xm(e, c.google_ad_format, d, b, c);
        f.size().i(d, c, b);
        em(f, e, c);
        1 != a && (a = f.size().height(),
        b.style.height = a + "px")
    }
    ;
    const Cm = (a,b,c,d,e)=>{
        const f = d.google_ad_height || Wh(c, e, "height", K);
        switch (a) {
        case 5:
            const {D: g, F: h} = rj(247, ()=>um(b, d.google_ad_format, e, c, d));
            !0 === h && b != g && Uh(e, c);
            !0 === h ? d.google_full_width_responsive_allowed = !0 : (d.google_full_width_responsive_allowed = !1,
            d.gfwrnwer = h);
            return km(g, d);
        case 9:
            return lm(b, d);
        case 8:
            return pm(b, e, c, f, d);
        case 10:
            return zm(b, e, c, f, d)
        }
    }
      , Am = a=>{
        a.google_ad_format = "auto";
        a.armr = 3
    }
    ;
    function Em(a, b) {
        var c = Kc(b);
        if (c) {
            c = P(c).clientWidth;
            const d = Nc(a, b) || {}
              , e = d.direction;
            if ("0px" === d.width && "none" !== d.cssFloat)
                return -1;
            if ("ltr" === e && c)
                return Math.floor(Math.min(1200, c - a.getBoundingClientRect().left));
            if ("rtl" === e && c)
                return a = b.document.body.getBoundingClientRect().right - a.getBoundingClientRect().right,
                Math.floor(Math.min(1200, c - a - Math.floor((c - b.document.body.clientWidth) / 2)))
        }
        return -1
    }
    ;var Fm = {
        google_ad_modifications: !0,
        google_analytics_domain_name: !0,
        google_analytics_uacct: !0,
        google_pause_ad_requests: !0,
        google_user_agent_client_hint: !0
    }
      , Gm = a=>(a = a.innerText || a.innerHTML) && (a = a.replace(/^\s+/, "").split(/\r?\n/, 1)[0].match(/^\x3c!--+(.*?)(?:--+>)?\s*$/)) && RegExp("google_ad_client").test(a[1]) ? a[1] : null
      , Hm = a=>{
        if (a = a.innerText || a.innerHTML)
            if (a = a.replace(/^\s+|\s+$/g, "").replace(/\s*(\r?\n)+\s*/g, ";"),
            (a = a.match(/^\x3c!--+(.*?)(?:--+>)?$/) || a.match(/^\/*\s*<!\[CDATA\[(.*?)(?:\/*\s*\]\]>)?$/i)) && RegExp("google_ad_client").test(a[1]))
                return a[1];
        return null
    }
      , Im = a=>{
        switch (a) {
        case "true":
            return !0;
        case "false":
            return !1;
        case "null":
            return null;
        case "undefined":
            break;
        default:
            try {
                const b = a.match(/^(?:'(.*)'|"(.*)")$/);
                if (b)
                    return b[1] || b[2] || "";
                if (/^[-+]?\d*(\.\d+)?$/.test(a)) {
                    const c = parseFloat(a);
                    return c === c ? c : void 0
                }
            } catch (b) {}
        }
    }
    ;
    function Jm(a) {
        if (a.google_ad_client)
            var b = String(a.google_ad_client);
        else {
            if (null == (b = X(a).head_tag_slot_vars?.google_ad_client ?? a.document.querySelector(".adsbygoogle[data-ad-client]")?.getAttribute("data-ad-client"))) {
                b: {
                    b = a.document.getElementsByTagName("script");
                    a = a.navigator && a.navigator.userAgent || "";
                    a = RegExp("appbankapppuzdradb|daumapps|fban|fbios|fbav|fb_iab|gsa/|messengerforios|naver|niftyappmobile|nonavigation|pinterest|twitter|ucbrowser|yjnewsapp|youtube", "i").test(a) || /i(phone|pad|pod)/i.test(a) && /applewebkit/i.test(a) && !/version|safari/i.test(a) && !sd() ? Gm : Hm;
                    for (var c = b.length - 1; 0 <= c; c--) {
                        var d = b[c];
                        if (!d.google_parsed_script_for_pub_code && (d.google_parsed_script_for_pub_code = !0,
                        d = a(d))) {
                            b = d;
                            break b
                        }
                    }
                    b = null
                }
                if (b) {
                    a = /(google_\w+) *= *(['"]?[\w.-]+['"]?) *(?:;|$)/gm;
                    for (c = {}; d = a.exec(b); )
                        c[d[1]] = Im(d[2]);
                    b = c;
                    b = b.google_ad_client ? b.google_ad_client : ""
                } else
                    b = ""
            }
            b = b ?? ""
        }
        return b
    }
    ;async function Km(a, b) {
        var c = 10;
        return 0 >= c ? Promise.reject() : b() ? Promise.resolve() : new Promise((d,e)=>{
            const f = a.setInterval(()=>{
                --c ? b() && (a.clearInterval(f),
                d()) : (a.clearInterval(f),
                e())
            }
            , 200)
        }
        )
    }
    ;function Lm(a) {
        const b = a.h.pc;
        return null !== b && 0 !== b ? b : a.h.pc = bd(a.s)
    }
    function Mm(a) {
        const b = a.h.wpc;
        return null !== b && "" !== b ? b : a.h.wpc = Jm(a.s)
    }
    function Nm(a, b) {
        var c = new Be;
        var d = Lm(a);
        c = C(c, 1, d, 0);
        d = Mm(a);
        c = C(c, 2, d, "");
        c = C(c, 3, a.h.sd, 0);
        return C(c, 7, Math.round(b || a.s.performance.now()), 0)
    }
    async function Om(a) {
        await Km(a.s, ()=>!(!Lm(a) || !Mm(a)))
    }
    async function Pm(a, b) {
        if (a.l && !a.h.le.includes(1)) {
            a.h.le.push(1);
            var c = a.s.performance.now();
            await Om(a);
            b = te(ue(we(new xe, b), re(qe(new se, P(a.s).scrollWidth), P(a.s).scrollHeight)), re(qe(new se, P(a.s).clientWidth), P(a.s).clientHeight));
            var d = new ye;
            S(bh) ? (C(b, 4, a.j, ""),
            C(d, 1, a.j, "")) : (C(b, 4, a.s?.document?.URL, ""),
            C(d, 1, a.s?.document?.URL, ""));
            var e = Ih(a.s);
            0 !== e && ve(b, oe(new pe, e));
            Ye(a.i, ze(Nm(a, c), b));
            nf(a.i, a.s, ()=>{
                var f = a.i;
                var g = Nm(a);
                g = Eb(g, 8, Ae, d);
                Ye(f, g)
            }
            )
        }
    }
    async function Qm(a, b, c) {
        if (a.l && c.length && !a.h.lgdp.includes(Number(b))) {
            a.h.lgdp.push(Number(b));
            var d = a.s.performance.now();
            await Om(a);
            var e = a.i;
            a = Nm(a, d);
            d = new ne;
            b = C(d, 1, b, 0);
            c = wb(b, 2, c);
            c = Eb(a, 9, Ae, c);
            Ye(e, c)
        }
    }
    var Rm = class {
        constructor(a) {
            this.s = nd() || window;
            this.i = a ?? new pf(100,100,!0);
            this.h = Bj(wj(), 33, ()=>{
                const b = M(Bh).h($g.h, $g.defaultValue);
                return {
                    sd: b,
                    ssp: 0 < b && Rc() < 1 / b,
                    pc: null,
                    wpc: null,
                    cu: null,
                    le: [],
                    lgdp: []
                }
            }
            )
        }
        get l() {
            return this.h.ssp
        }
        get j() {
            return this.h.cu
        }
        set j(a) {
            this.h.cu = a
        }
    }
    ;
    function Sm(a, b) {
        return a instanceof HTMLScriptElement && b.test(a.src) ? 0 : 1
    }
    function Tm(a) {
        var b = L.document;
        if (b.currentScript)
            return Sm(b.currentScript, a);
        for (const c of b.scripts)
            if (0 === Sm(c, a))
                return 0;
        return 1
    }
    ;function Um(a, b) {
        return {
            [3]: {
                [55]: ()=>0 === a,
                [23]: c=>hl(L, Number(c)),
                [24]: c=>kl(Number(c)),
                [61]: ()=>A(b, 6),
                [63]: ()=>A(b, 6) || ".google.ch" === F(b, 8)
            },
            [4]: {
                [7]: c=>{
                    try {
                        var d = window.localStorage
                    } catch (g) {
                        d = null
                    }
                    c = Number(c);
                    c = 0 !== c ? `${"google_experiment_mod"}${c}` : "google_experiment_mod";
                    a: {
                        var e = -1;
                        try {
                            d && (e = parseInt(d.getItem(c), 10))
                        } catch {
                            e = null;
                            break a
                        }
                        e = 0 <= e && 1E3 > e ? e : null
                    }
                    if (null === e) {
                        const g = Qc() ? null : Math.floor(1E3 * Rc());
                        if (e = null != g && d)
                            a: {
                                var f = String(g);
                                try {
                                    if (d) {
                                        d.setItem(c, f);
                                        e = f;
                                        break a
                                    }
                                } catch {}
                                e = null
                            }
                        d = e ? g : null
                    } else
                        d = e;
                    return d ?? void 0
                }
            },
            [5]: {
                [6]: ()=>F(b, 15)
            }
        }
    }
    ;function Vm(a=n) {
        return a.ggeac || (a.ggeac = {})
    }
    ;function Wm() {
        var a = M(Bh).l(wh.h, wh.defaultValue)
          , b = L.document;
        if (a.length && b.head)
            for (const d of a)
                if ((a = d) && b.head) {
                    var c = Mc("META");
                    b.head.appendChild(c);
                    c.httpEquiv = "origin-trial";
                    c.content = a
                }
    }
    function Xm(a, b=document) {
        return !!b.featurePolicy?.features().includes(a)
    }
    function Ym(a, b=document) {
        return !!b.featurePolicy?.allowedFeatures().includes(a)
    }
    ;function Zm(a, b) {
        try {
            const d = a.split(".");
            a = n;
            let e = 0, f;
            for (; null != a && e < d.length; e++)
                f = a,
                a = a[d[e]],
                "function" === typeof a && (a = f[d[e]]());
            var c = a;
            if (typeof c === b)
                return c
        } catch {}
    }
    var $m = {
        [3]: {
            [8]: a=>{
                try {
                    return null != ca(a)
                } catch {}
            }
            ,
            [9]: a=>{
                try {
                    var b = ca(a)
                } catch {
                    return
                }
                if (a = "function" === typeof b)
                    b = b && b.toString && b.toString(),
                    a = "string" === typeof b && -1 != b.indexOf("[native code]");
                return a
            }
            ,
            [10]: ()=>window === window.top,
            [6]: a=>Ra(M(Rf).h(), Number(a)),
            [27]: a=>{
                a = Zm(a, "boolean");
                return void 0 !== a ? a : void 0
            }
            ,
            [60]: a=>{
                try {
                    return !!n.document.querySelector(a)
                } catch {}
            }
            ,
            [69]: a=>Xm(a, n.document),
            [70]: a=>Ym(a, n.document)
        },
        [4]: {
            [3]: ()=>Yc(),
            [6]: a=>{
                a = Zm(a, "number");
                return void 0 !== a ? a : void 0
            }
        },
        [5]: {
            [2]: ()=>window.location.href,
            [3]: ()=>{
                try {
                    return window.top.location.hash
                } catch {
                    return ""
                }
            }
            ,
            [4]: a=>{
                a = Zm(a, "string");
                return void 0 !== a ? a : void 0
            }
        }
    };
    const an = [12, 13, 20];
    function bn(a, b, c, d) {
        const e = M(uf).G;
        if (!ee(D(b, Yd, 3), e))
            return null;
        var f = E(b, Uk, 2)
          , g = H(b, 6);
        if (g) {
            xb(d, 1, Ge, g);
            f = e[4];
            switch (c) {
            case 2:
                var h = f[8];
                break;
            case 1:
                h = f[7]
            }
            c = void 0;
            if (h)
                try {
                    c = h(g),
                    C(d, 3, c, 0)
                } catch (l) {}
            return (b = cn(b, c)) ? dn(a, [b], 1) : null
        }
        if (g = H(b, 10)) {
            xb(d, 2, Ge, g);
            h = null;
            switch (c) {
            case 1:
                h = e[4][9];
                break;
            case 2:
                h = e[4][10];
                break;
            default:
                return null
            }
            c = h ? h(String(g)) : void 0;
            if (void 0 === c && 1 === H(b, 11))
                return null;
            void 0 !== c && C(d, 3, c, 0);
            return (b = cn(b, c)) ? dn(a, [b], 1) : null
        }
        d = e ? Ma(f, l=>ee(D(l, Yd, 3), e)) : f;
        if (!d.length)
            return null;
        c = d.length * B(Hb(b, 1), 0);
        return (b = H(b, 4)) ? en(a, b, c, d) : dn(a, d, c / 1E3)
    }
    function fn(a, b, c) {
        a.h[c] || (a.h[c] = []);
        a = a.h[c];
        Ra(a, b) || a.push(b)
    }
    function gn(a, b, c) {
        const d = []
          , e = hn(a.j, b);
        var f;
        if (f = 9 !== b)
            a.l[b] ? f = !0 : (a.l[b] = !0,
            f = !1);
        if (f)
            return rf(a.O, b, c, d, [], 4),
            d;
        if (!e.length)
            return rf(a.O, b, c, d, [], 3),
            d;
        const g = Ra(an, b)
          , h = [];
        La(e, l=>{
            var k = new Fe;
            if (l = bn(a, l, c, k))
                0 !== yb(k, Ge) && h.push(k),
                k = l.getId(),
                d.push(k),
                fn(a, k, g ? 4 : c),
                (l = E(l, je, 2)) && (g ? If(l, Kf(), a.O, k) : If(l, [c], a.O, k))
        }
        );
        rf(a.O, b, c, d, h, 1);
        return d
    }
    function jn(a, b) {
        a.j.push(...Ma(Na(b, c=>new Yk(c)), c=>!Ra(an, H(c, 1))))
    }
    function dn(a, b, c) {
        const d = a.i
          , e = Pa(b, f=>!!d[f.getId()]);
        return e ? e : a.ta ? null : Oc(b, c)
    }
    function en(a, b, c, d) {
        const e = null != a.ma[b] ? a.ma[b] : 1E3;
        if (0 >= e)
            return null;
        d = dn(a, d, c / e);
        a.ma[b] = d ? 0 : e - c;
        return d
    }
    function kn(a, b) {
        N(1, c=>{
            a.i[c] = !0
        }
        , b);
        N(2, (c,d)=>gn(a, c, d), b);
        N(3, c=>(a.h[c] || []).concat(a.h[4]), b);
        N(12, c=>void jn(a, c), b);
        N(16, (c,d)=>void fn(a, c, d), b)
    }
    var ln = class {
        constructor(a, b, c, {ta: d=!1, ac: e=[], ma: f={}}={}) {
            this.O = c;
            this.j = a.slice();
            this.l = {};
            this.ta = d;
            this.ma = f;
            this.h = {
                [b]: [],
                [4]: []
            };
            this.i = {};
            (a = Jd()) && La(a.split(",") || [], g=>{
                (g = Number(g)) && (this.i[g] = !0)
            }
            );
            La(e, g=>{
                this.i[g] = !0
            }
            )
        }
    }
    ;
    function hn(a, b) {
        return (a = Pa(a, c=>H(c, 1) === b)) && E(a, Wk, 2) || []
    }
    function cn(a, b) {
        var c = E(a, Uk, 2)
          , d = c.length
          , e = B(Hb(a, 8), 0);
        a = d * B(Hb(a, 1), 0) - 1;
        b = void 0 !== b ? b : Math.floor(1E3 * Rc());
        d = (b - e) % d;
        if (b < e || b - e - d >= a)
            return null;
        c = c[d];
        e = M(uf).G;
        return !c || e && !ee(D(c, Yd, 3), e) ? null : c
    }
    ;function mn(a, b) {
        a.h = Mf(14, b, ()=>{}
        )
    }
    class nn {
        constructor() {
            this.h = ()=>{}
        }
    }
    function on(a) {
        M(nn).h(a)
    }
    ;function pn({fb: a, G: b, bb: c, Ya: d=Vm(), Za: e=0, O: f=new tf(D(a, Zk, 5)?.i() ?? 0,D(a, Zk, 5)?.l() ?? 0,D(a, Zk, 5)?.m() ?? !1)}) {
        d.hasOwnProperty("init-done") ? (Mf(12, d, ()=>{}
        )(Na(E(a, Yk, 2), g=>g.toJSON())),
        Mf(13, d, ()=>{}
        )(Na(E(a, je, 1), g=>g.toJSON()), e),
        b && Mf(14, d, ()=>{}
        )(b),
        qn(e, d)) : (kn(new ln(E(a, Yk, 2),e,f,c), d),
        Nf(d),
        Of(d),
        Pf(d),
        qn(e, d),
        If(E(a, je, 1), [e], f, void 0, !0),
        vf = vf || !(!c || !c.jb),
        on($m),
        b && on(b))
    }
    function qn(a, b=Vm()) {
        Qf(M(Rf), b, a);
        rn(b, a);
        mn(M(nn), b);
        M(Bh).m()
    }
    function rn(a, b) {
        const c = M(Bh);
        c.i = (d,e)=>Mf(5, a, ()=>!1)(d, e, b);
        c.h = (d,e)=>Mf(6, a, ()=>0)(d, e, b);
        c.j = (d,e)=>Mf(7, a, ()=>"")(d, e, b);
        c.l = (d,e)=>Mf(8, a, ()=>[])(d, e, b);
        c.m = ()=>{
            Mf(15, a, ()=>{}
            )(b)
        }
    }
    ;function sn(a) {
        var b = M(Rf).l(a);
        a = Qm(M(Rm), a, b);
        Tf.ba(1085, a)
    }
    var tn = (a,b,c)=>{
        var d = X(a);
        if (d.plle)
            qn(1, Vm(a));
        else {
            d.plle = !0;
            d = D(b, al, 12);
            var e = A(b, 9);
            pn({
                fb: d,
                G: Um(c, b),
                bb: {
                    ta: e && !!a.google_disable_experiments,
                    jb: e
                },
                Ya: Vm(a),
                Za: 1
            });
            if (c = F(b, 15))
                c = Number(c),
                M(Rf).j(c);
            for (const f of vb(b, 19, ob))
                b = f,
                M(Rf).i(b);
            sn(12);
            sn(10);
            a = Kc(a) || a;
            cj(a.location, "google_mc_lab") && M(Rf).i(44738307);
            cj(a.location, "google_auto_storify_swipeable") && M(Rf).i(44773747);
            cj(a.location, "google_auto_storify_scrollable") && M(Rf).i(44773746)
        }
    }
    ;
    function un({ra: a, wa: b}) {
        return a || ("dev" === b ? "dev" : "")
    }
    ;function vn(a) {
        V.xa(b=>{
            b.shv = String(a);
            b.mjsv = un({
                ra: "m202304110101",
                wa: a
            });
            const c = M(Rf).h()
              , d = X(n);
            d.eids || (d.eids = []);
            b.eid = c.concat(d.eids).join(",")
        }
        )
    }
    function wn(a) {
        vn(F(a, 2));
        a = A(a, 6);
        Zb(el, Wd);
        el = a
    }
    ;function xn(a) {
        var b = V;
        try {
            return Zb(a, Vd),
            new dl(JSON.parse(a))
        } catch (c) {
            b.I(838, c instanceof Error ? c : Error(String(c)), void 0, d=>{
                d.jspb = String(a)
            }
            )
        }
        return new dl
    }
    ;function yn(a, b) {
        return null == b ? `&${a}=null` : `&${a}=${Math.floor(b)}`
    }
    function zn(a, b) {
        return `&${a}=${b.toFixed(3)}`
    }
    function An() {
        const a = new Set
          , b = ej();
        try {
            if (!b)
                return a;
            const c = b.pubads();
            for (const d of c.getSlots())
                a.add(d.getSlotId().getDomId())
        } catch (c) {}
        return a
    }
    function Bn(a) {
        a = a.id;
        return null != a && (An().has(a) || a.startsWith("google_ads_iframe_") || a.startsWith("aswift"))
    }
    function Cn(a, b, c) {
        if (!a.sources)
            return !1;
        switch (Dn(a)) {
        case 2:
            const d = En(a);
            if (d)
                return c.some(f=>Fn(d, f));
        case 1:
            const e = Gn(a);
            if (e)
                return b.some(f=>Fn(e, f))
        }
        return !1
    }
    function Dn(a) {
        if (!a.sources)
            return 0;
        a = a.sources.filter(b=>b.previousRect && b.currentRect);
        if (1 <= a.length) {
            a = a[0];
            if (a.previousRect.top < a.currentRect.top)
                return 2;
            if (a.previousRect.top > a.currentRect.top)
                return 1
        }
        return 0
    }
    function Gn(a) {
        return Hn(a, b=>b.currentRect)
    }
    function En(a) {
        return Hn(a, b=>b.previousRect)
    }
    function Hn(a, b) {
        return a.sources.reduce((c,d)=>{
            d = b(d);
            return c ? d && 0 !== d.width * d.height ? d.top < c.top ? d : c : c : d
        }
        , null)
    }
    function Fn(a, b) {
        const c = Math.min(a.right, b.right) - Math.max(a.left, b.left);
        a = Math.min(a.bottom, b.bottom) - Math.max(a.top, b.top);
        return 0 >= c || 0 >= a ? !1 : 50 <= 100 * c * a / ((b.right - b.left) * (b.bottom - b.top))
    }
    function In() {
        const a = [...document.getElementsByTagName("iframe")].filter(Bn)
          , b = [...An()].map(c=>document.getElementById(c)).filter(c=>null !== c);
        Jn = window.scrollX;
        Kn = window.scrollY;
        return Ln = [...a, ...b].map(c=>c.getBoundingClientRect())
    }
    function Mn() {
        var a = new Nn;
        if (S(xh)) {
            var b = window;
            if (!b.google_plmetrics && window.PerformanceObserver) {
                b.google_plmetrics = !0;
                b = ["layout-shift", "largest-contentful-paint", "first-input", "longtask"];
                for (const c of b)
                    a.O().observe({
                        type: c,
                        buffered: !0
                    });
                On(a)
            }
        }
    }
    function On(a) {
        const b = ii(641, ()=>{
            var d = document;
            2 == (d.prerendering ? 3 : {
                visible: 1,
                hidden: 2,
                prerender: 3,
                preview: 4,
                unloaded: 5
            }[d.visibilityState || d.webkitVisibilityState || d.mozVisibilityState || ""] || 0) && Pn(a)
        }
        )
          , c = ii(641, ()=>void Pn(a));
        document.addEventListener("visibilitychange", b);
        document.addEventListener("pagehide", c);
        a.ya = ()=>{
            document.removeEventListener("visibilitychange", b);
            document.removeEventListener("pagehide", c);
            a.O().disconnect()
        }
    }
    function Pn(a) {
        if (!a.Fa) {
            a.Fa = !0;
            a.O().takeRecords();
            var b = "https://pagead2.googlesyndication.com/pagead/gen_204?id=plmetrics";
            window.LayoutShift && (b += zn("cls", a.B),
            b += zn("mls", a.J),
            b += yn("nls", a.R),
            window.LayoutShiftAttribution && (b += zn("cas", a.m),
            b += yn("nas", a.Ea)),
            b += zn("wls", a.ea),
            b += zn("tls", a.Ia),
            window.LayoutShiftAttribution && (b += zn("was", a.Ja)));
            window.LargestContentfulPaint && (b += yn("lcp", a.Ca),
            b += yn("lcps", a.Ba));
            window.PerformanceEventTiming && a.Aa && (b += yn("fid", a.za));
            window.PerformanceLongTaskTiming && (b += yn("cbt", a.v),
            b += yn("mbt", a.C),
            b += yn("nlt", a.T));
            let d = 0;
            for (var c of document.getElementsByTagName("iframe"))
                Bn(c) && d++;
            b += yn("nif", d);
            b += yn("ifi", rd(window));
            c = M(Rf).h();
            b += `&${"eid"}=${encodeURIComponent(c.join())}`;
            b += `&${"top"}=${n === n.top ? 1 : 0}`;
            b += a.Ha ? `&${"qqid"}=${encodeURIComponent(a.Ha)}` : yn("pvsid", bd(n));
            window.googletag && (b += "&gpt=1");
            window.fetch(b, {
                keepalive: !0,
                credentials: "include",
                redirect: "follow",
                method: "get",
                mode: "no-cors"
            });
            bf(a)
        }
    }
    class Nn extends af {
        constructor() {
            super();
            this.l = this.i = this.R = this.J = this.B = 0;
            this.Ga = this.Da = Number.NEGATIVE_INFINITY;
            this.za = this.Ba = this.Ca = this.Ea = this.Ja = this.m = this.Ia = this.ea = 0;
            this.Aa = !1;
            this.T = this.C = this.v = 0;
            const a = document.querySelector("[data-google-query-id]");
            this.Ha = a ? a.getAttribute("data-google-query-id") : null;
            this.U = null;
            this.Fa = !1;
            this.ya = ()=>{}
        }
        O() {
            this.U || (this.U = new PerformanceObserver(ii(640, a=>{
                const b = Jn !== window.scrollX || Kn !== window.scrollY ? [] : Ln
                  , c = In();
                for (const f of a.getEntries())
                    switch (f.entryType) {
                    case "layout-shift":
                        a = f;
                        var d = b
                          , e = c;
                        if (!a.hadRecentInput) {
                            this.B += Number(a.value);
                            Number(a.value) > this.J && (this.J = Number(a.value));
                            this.R += 1;
                            if (d = Cn(a, d, e))
                                this.m += a.value,
                                this.Ea++;
                            if (5E3 < a.startTime - this.Da || 1E3 < a.startTime - this.Ga)
                                this.Da = a.startTime,
                                this.l = this.i = 0;
                            this.Ga = a.startTime;
                            this.i += a.value;
                            d && (this.l += a.value);
                            this.i > this.ea && (this.ea = this.i,
                            this.Ja = this.l,
                            this.Ia = a.startTime + a.duration)
                        }
                        break;
                    case "largest-contentful-paint":
                        a = f;
                        this.Ca = Math.floor(a.renderTime || a.loadTime);
                        this.Ba = a.size;
                        break;
                    case "first-input":
                        a = f;
                        this.za = Number((a.processingStart - a.startTime).toFixed(3));
                        this.Aa = !0;
                        break;
                    case "longtask":
                        a = Math.max(0, f.duration - 50),
                        this.v += a,
                        this.C = Math.max(this.C, a),
                        this.T += 1
                    }
            }
            )));
            return this.U
        }
        h() {
            super.h();
            this.ya()
        }
    }
    var Jn = void 0
      , Kn = void 0
      , Ln = [];
    var Qn = class extends I {
        constructor() {
            super()
        }
        getVersion() {
            return F(this, 2)
        }
    }
    ;
    function Rn(a, b) {
        return y(a, 2, b)
    }
    function Sn(a, b) {
        return y(a, 3, b)
    }
    function Tn(a, b) {
        return y(a, 4, b)
    }
    function Un(a, b) {
        return y(a, 5, b)
    }
    function Vn(a, b) {
        return y(a, 9, b)
    }
    function Wn(a, b) {
        return Fb(a, 10, b)
    }
    function Xn(a, b) {
        return y(a, 11, b)
    }
    function Yn(a, b) {
        return y(a, 1, b)
    }
    function Zn(a, b) {
        return y(a, 7, b)
    }
    var ao = class extends I {
        constructor() {
            super(void 0, -1, $n)
        }
    }
      , $n = [10, 6];
    const bo = "platform platformVersion architecture model uaFullVersion bitness fullVersionList wow64".split(" ");
    function co() {
        if ("function" !== typeof L.navigator?.userAgentData?.getHighEntropyValues)
            return null;
        const a = L.google_tag_data ?? (L.google_tag_data = {});
        if (a.uach_promise)
            return a.uach_promise;
        const b = L.navigator.userAgentData.getHighEntropyValues(bo).then(c=>{
            a.uach ?? (a.uach = c);
            return c
        }
        );
        return a.uach_promise = b
    }
    function eo(a) {
        return Xn(Wn(Un(Rn(Yn(Tn(Zn(Vn(Sn(new ao, a.architecture || ""), a.bitness || ""), a.mobile || !1), a.model || ""), a.platform || ""), a.platformVersion || ""), a.uaFullVersion || ""), a.fullVersionList?.map(b=>{
            var c = new Qn;
            c = y(c, 1, b.brand);
            return y(c, 2, b.version)
        }
        ) || []), a.wow64 || !1)
    }
    function fo() {
        return co()?.then(a=>eo(a)) ?? null
    }
    ;function go(a, b) {
        b.google_ad_host || (a = yl(a)) && (b.google_ad_host = a)
    }
    function ho(a, b, c="") {
        L.google_sa_impl && !L.document.getElementById("google_shimpl") && (delete L.google_sa_queue,
        delete L.google_sa_impl);
        L.google_sa_queue || (L.google_sa_queue = [],
        L.google_process_slots = V.oa(215, ()=>io(L.google_sa_queue)),
        a = jo(c, a, b),
        Lc(L.document, a).id = "google_shimpl")
    }
    function io(a) {
        const b = a.shift();
        "function" === typeof b && V.ga(216, b);
        a.length && n.setTimeout(V.oa(215, ()=>io(a)), 0)
    }
    function ko(a, b, c) {
        a.google_sa_queue = a.google_sa_queue || [];
        a.google_sa_impl ? c(b) : a.google_sa_queue.push(b)
    }
    function jo(a, b, c) {
        b = A(c, 4) ? b.sb : b.tb;
        const d = {};
        a: {
            if (A(c, 4)) {
                if (a = a || Jm(L)) {
                    a = {
                        client: a,
                        plah: L.location.host
                    };
                    break a
                }
                throw Error("PublisherCodeNotFoundForAma");
            }
            a = {}
        }
        lo(a, d);
        lo(Ch() ? {
            bust: Ch()
        } : {}, d);
        return wc(b, d)
    }
    function lo(a, b) {
        J(a, (c,d)=>{
            void 0 === b[d] && (b[d] = c)
        }
        )
    }
    function mo(a) {
        a: {
            var b = [n.top];
            var c = [];
            let e = 0, f;
            for (; f = b[e++]; ) {
                c.push(f);
                try {
                    if (f.frames)
                        for (let g = 0; g < f.frames.length && 1024 > b.length; ++g)
                            b.push(f.frames[g])
                } catch {}
            }
            b = c;
            for (c = 0; c < b.length; c++)
                try {
                    var d = b[c].frames.google_esf;
                    if (d) {
                        jd = d;
                        break a
                    }
                } catch (g) {}
            jd = null
        }
        if (jd)
            return null;
        d = Mc("IFRAME");
        d.id = "google_esf";
        d.name = "google_esf";
        d.src = yc(a.zb).toString();
        d.style.display = "none";
        return d
    }
    function no(a) {
        if (S(lh)) {
            var b = [];
            b.push(1, 2);
            if (2 !== b[1])
                throw Error(`bad_array_push ${a.google_ad_client}`);
        }
    }
    function oo(a, b, c, d, e) {
        no(b);
        const f = e.gb;
        po(a, c, b);
        c = pa;
        const g = (new Date).getTime();
        b.google_lrv = un({
            ra: "m202304110101",
            wa: F(d, 2)
        });
        b.google_async_iframe_id = f;
        b.google_start_time = c;
        b.google_bpp = g > c ? g - c : 1;
        a.google_sv_map = a.google_sv_map || {};
        a.google_sv_map[f] = b;
        d = a.document.getElementById(f + "_host") ? h=>h() : h=>window.setTimeout(h, 0);
        ko(a, ()=>{
            var {yb: h} = e;
            if (!h || !h.isConnected)
                if (h = a.document.getElementById(String(b.google_async_iframe_id) + "_host"),
                null == h)
                    throw Error("no_div");
            (h = a.google_sa_impl({
                pubWin: a,
                vars: b,
                innerInsElement: h
            })) && V.ba(911, h)
        }
        , d)
    }
    function po(a, b, c) {
        var d = c.google_ad_output
          , e = c.google_ad_format
          , f = c.google_ad_width || 0
          , g = c.google_ad_height || 0;
        e || "html" !== d && null != d || (e = f + "x" + g);
        d = !c.google_ad_slot || c.google_override_format || !Wl[c.google_ad_width + "x" + c.google_ad_height] && "aa" === c.google_loader_used;
        e && d ? e = e.toLowerCase() : e = "";
        c.google_ad_format = e;
        if ("number" !== typeof c.google_reactive_sra_index || !c.google_ad_unit_key) {
            e = [c.google_ad_slot, c.google_orig_ad_format || c.google_ad_format, c.google_ad_type, c.google_orig_ad_width || c.google_ad_width, c.google_orig_ad_height || c.google_ad_height];
            d = [];
            f = 0;
            for (g = b; g && 25 > f; g = g.parentNode,
            ++f)
                9 === g.nodeType ? d.push("") : d.push(g.id);
            (d = d.join()) && e.push(d);
            c.google_ad_unit_key = Sc(e.join(":")).toString();
            e = [];
            for (d = 0; b && 25 > d; ++d) {
                f = (f = 9 !== b.nodeType && b.id) ? "/" + f : "";
                a: {
                    if (b && b.nodeName && b.parentElement) {
                        g = b.nodeName.toString().toLowerCase();
                        const h = b.parentElement.childNodes;
                        let l = 0;
                        for (let k = 0; k < h.length; ++k) {
                            const m = h[k];
                            if (m.nodeName && m.nodeName.toString().toLowerCase() === g) {
                                if (b === m) {
                                    g = "." + l;
                                    break a
                                }
                                ++l
                            }
                        }
                    }
                    g = ""
                }
                e.push((b.nodeName && b.nodeName.toString().toLowerCase()) + f + g);
                b = b.parentElement
            }
            b = e.join() + ":";
            e = [];
            if (a)
                try {
                    let h = a.parent;
                    for (d = 0; h && h !== a && 25 > d; ++d) {
                        const l = h.frames;
                        for (f = 0; f < l.length; ++f)
                            if (a === l[f]) {
                                e.push(f);
                                break
                            }
                        a = h;
                        h = a.parent
                    }
                } catch (h) {}
            c.google_ad_dom_fingerprint = Sc(b + e.join()).toString()
        }
    }
    function qo() {
        var a = Kc(n);
        a && (a = zg(a),
        a.tagSpecificState[1] || (a.tagSpecificState[1] = {
            debugCard: null,
            debugCardRequested: !1
        }))
    }
    function ro() {
        const a = fo();
        null != a && a.then(b=>{
            a: {
                kb = !0;
                try {
                    var c = JSON.stringify(b.toJSON(), Mb);
                    break a
                } finally {
                    kb = !1
                }
                c = void 0
            }
            L.google_user_agent_client_hint = c
        }
        );
        Wm()
    }
    ;function so(a, b) {
        switch (a) {
        case "google_reactive_ad_format":
            return a = parseInt(b, 10),
            isNaN(a) ? 0 : a;
        case "google_allow_expandable_ads":
            return /^true$/.test(b);
        default:
            return b
        }
    }
    function to(a, b) {
        if (a.getAttribute("src")) {
            var c = a.getAttribute("src") || ""
              , d = Ic(c, "client");
            d && (b.google_ad_client = so("google_ad_client", d));
            (c = Ic(c, "host")) && (b.google_ad_host = so("google_ad_host", c))
        }
        a = a.attributes;
        c = a.length;
        for (d = 0; d < c; d++) {
            var e = a[d];
            if (/data-/.test(e.name)) {
                const f = qa(e.name.replace("data-matched-content", "google_content_recommendation").replace("data", "google").replace(/-/g, "_"));
                b.hasOwnProperty(f) || (e = so(f, e.value),
                null !== e && (b[f] = e))
            }
        }
    }
    function uo(a) {
        if (a = md(a))
            switch (a.data && a.data.autoFormat) {
            case "rspv":
                return 13;
            case "mcrspv":
                return 15;
            default:
                return 14
            }
        else
            return 12
    }
    function vo(a, b, c, d) {
        to(a, b);
        if (c.document && c.document.body && !Bm(c, b) && !b.google_reactive_ad_format) {
            var e = parseInt(a.style.width, 10)
              , f = Em(a, c);
            if (0 < f && e > f) {
                var g = parseInt(a.style.height, 10);
                e = !!Wl[e + "x" + g];
                var h = f;
                if (e) {
                    const l = Xl(f, g);
                    if (l)
                        h = l,
                        b.google_ad_format = l + "x" + g + "_0ads_al";
                    else
                        throw new T("No slot size for availableWidth=" + f);
                }
                b.google_ad_resize = !0;
                b.google_ad_width = h;
                e || (b.google_ad_format = null,
                b.google_override_format = !0);
                f = h;
                a.style.width = `${f}px`;
                g = xm(f, "auto", c, a, b);
                h = f;
                g.size().i(c, b, a);
                em(g, h, b);
                g = g.size();
                b.google_responsive_formats = null;
                g.L > f && !e && (b.google_ad_width = g.L,
                a.style.width = `${g.L}px`)
            }
        }
        (e = a.offsetWidth) || (e = Wh(a, c, "width", K));
        e = e || b.google_ad_width || 0;
        if (488 > P(c).clientWidth) {
            f = Kc(c) || c;
            g = b.google_ad_client;
            if (d = cj(f.location, "google_responsive_slot_preview") || S(mh) || hl(f, 1, g, d))
                b: if (b.google_reactive_ad_format || b.google_ad_resize || Bm(c, b) || Lh(a, b))
                    d = !1;
                else {
                    for (d = a; d; d = d.parentElement) {
                        f = Nc(d, c);
                        if (!f) {
                            b.gfwrnwer = 18;
                            d = !1;
                            break b
                        }
                        if (!Ra(["static", "relative"], f.position)) {
                            b.gfwrnwer = 17;
                            d = !1;
                            break b
                        }
                    }
                    d = Ph(c, a, e, .3, b);
                    !0 !== d ? (b.gfwrnwer = d,
                    d = !1) : d = c === c.top ? !0 : !1
                }
            d ? (b.google_resizing_allowed = !0,
            b.ovlp = !0,
            b.google_ad_format = "auto",
            b.iaaso = !0,
            b.armr = 1,
            d = !0) : d = !1
        } else
            d = !1;
        if (e = Bm(c, b))
            Dm(e, a, b, c, d);
        else {
            if (Lh(a, b)) {
                if (d = Nc(a, c))
                    a.style.width = d.width,
                    a.style.height = d.height,
                    Kh(d, b);
                b.google_ad_width || (b.google_ad_width = a.offsetWidth);
                b.google_ad_height || (b.google_ad_height = a.offsetHeight);
                b.google_loader_features_used = 256;
                b.google_responsive_auto_format = uo(c)
            } else
                Kh(a.style, b);
            c.location && "#gfwmrp" == c.location.hash || 12 == b.google_responsive_auto_format && "true" == b.google_full_width_responsive ? Dm(10, a, b, c, !1) : .01 > Math.random() && 12 === b.google_responsive_auto_format && (a = Qh(a.offsetWidth || parseInt(a.style.width, 10) || b.google_ad_width, c, a, b),
            !0 !== a ? (b.efwr = !1,
            b.gfwrnwer = a) : b.efwr = !0)
        }
    }
    ;function wo(a) {
        if (a.i)
            return a.i;
        a.C && a.C(a.l) ? a.i = a.l : a.i = Xc(a.l, a.J);
        return a.i ?? null
    }
    var xo = class extends af {
        constructor(a, b, c) {
            super();
            this.J = a;
            this.C = b;
            this.R = c;
            this.B = new Map;
            this.v = new Map;
            this.U = new Map;
            this.T = new Map;
            this.m = void 0;
            this.l = L
        }
        h() {
            delete this.i;
            this.B.clear();
            this.v.clear();
            this.U.clear();
            this.T.clear();
            this.m && (lc(this.l, "message", this.m),
            delete this.m);
            delete this.l;
            delete this.R;
            super.h()
        }
    }
    ;
    const yo = (a,b)=>{
        (0,
        a.__uspapi)("getUSPData", 1, (c,d)=>{
            b.K({
                consentData: c ?? void 0,
                eb: d ? void 0 : 2
            })
        }
        )
    }
      , zo = {
        lb: a=>a.K,
        mb: (a,b)=>({
            __uspapiCall: {
                callId: b,
                command: "getUSPData",
                version: 1
            }
        }),
        ob: (a,b)=>{
            b = b.__uspapiReturn;
            a({
                consentData: b.returnValue ?? void 0,
                eb: b.success ? void 0 : 2
            })
        }
    };
    function Ao(a) {
        let b = {};
        "string" === typeof a.data ? b = JSON.parse(a.data) : b = a.data;
        return {
            payload: b,
            qb: b.__uspapiReturn.callId
        }
    }
    var Bo = class extends af {
        constructor() {
            super();
            this.caller = new xo("__uspapiLocator",a=>"function" === typeof a.__uspapi,Ao);
            this.caller.B.set("getDataWithCallback", yo);
            this.caller.v.set("getDataWithCallback", zo)
        }
        h() {
            bf(this.caller);
            super.h()
        }
    }
    ;
    var Co = ac(class extends I {
        constructor(a) {
            super(a)
        }
    }
    );
    const Do = (a,b)=>{
        a = a.googlefc || (a.googlefc = {});
        a.__fci = a.__fci || [];
        a.__fci.push(b.command, c=>{
            c = Co(c);
            b.K({
                consentData: c
            })
        }
        )
    }
      , Eo = {
        lb: a=>a.K,
        mb: (a,b)=>({
            __fciCall: {
                callId: b,
                command: a.command
            }
        }),
        ob: (a,b)=>{
            a({
                consentData: b
            })
        }
    };
    function Fo(a) {
        a = Co(a.data.__fciReturn);
        return {
            payload: a,
            qb: B(t(a, 1), 0)
        }
    }
    var Go = class extends af {
        constructor() {
            super();
            this.i = this.l = !1;
            this.caller = new xo("googlefcPresent",void 0,Fo);
            this.caller.B.set("getDataWithCallback", Do);
            this.caller.v.set("getDataWithCallback", Eo)
        }
        h() {
            bf(this.caller);
            super.h()
        }
    }
    ;
    function Ho() {
        const a = pd`(a=0)=>{let b;const c=class{};}`;
        try {
            var b = window;
            const c = a instanceof tc && a.constructor === tc ? a.h : "type_error:SafeScript";
            b.eval(c) === c && b.eval(c.toString());
            return {
                supports: !0,
                error: ""
            }
        } catch (c) {
            return {
                supports: !1,
                error: String(c)
            }
        }
    }
    ;var Io = a=>{
        kc(window, "message", b=>{
            let c;
            try {
                c = JSON.parse(b.data)
            } catch (d) {
                return
            }
            !c || "sc-cnf" !== c.googMsgType || a(c, b)
        }
        )
    }
    ;
    let Jo = null;
    const Ko = []
      , Lo = new Map;
    let Mo = -1;
    function No(a) {
        return di.test(a.className) && "done" !== a.dataset.adsbygoogleStatus
    }
    function Oo(a, b, c) {
        a.dataset.adsbygoogleStatus = "done";
        Po(a, b, c)
    }
    function Po(a, b, c) {
        var d = window;
        d.google_spfd || (d.google_spfd = vo);
        var e = b.google_reactive_ads_config;
        e || vo(a, b, d, c);
        go(d, b);
        if (!Qo(a, b, d)) {
            e || (d.google_lpabyc = Nh(a, d) + (Wh(a, d, "height", K) || 0));
            if (e) {
                e = e.page_level_pubvars || {};
                if (X(L).page_contains_reactive_tag && !X(L).allow_second_reactive_tag) {
                    if (e.pltais) {
                        wl(!1);
                        return
                    }
                    throw new T("Only one 'enable_page_level_ads' allowed per page.");
                }
                X(L).page_contains_reactive_tag = !0;
                wl(7 === e.google_pgb_reactive)
            }
            b.google_unique_id = qd(d);
            J(Fm, (f,g)=>{
                b[g] = b[g] || d[g]
            }
            );
            "sd" !== b.google_loader_used && (b.google_loader_used = "aa");
            b.google_reactive_tag_first = 1 === (X(L).first_tag_on_page || 0);
            rj(164, ()=>{
                var f = d.document;
                for (var g = void 0, h = 0; !g || f.getElementById(g + "_host"); )
                    g = "aswift_" + h++;
                f = g;
                g = Number(b.google_ad_width || 0);
                h = Number(b.google_ad_height || 0);
                const l = Mc("DIV");
                l.id = f + "_host";
                const k = l.style;
                k.border = "none";
                k.height = `${h}px`;
                k.width = `${g}px`;
                k.margin = "0px";
                k.padding = "0px";
                k.position = "relative";
                k.visibility = "visible";
                k.backgroundColor = "transparent";
                l.style.display = "inline-block";
                a.appendChild(l);
                oo(d, b, a, c, {
                    gb: f,
                    yb: l
                })
            }
            )
        }
    }
    function Qo(a, b, c) {
        var d = b.google_reactive_ads_config
          , e = "string" === typeof a.className && RegExp("(\\W|^)adsbygoogle-noablate(\\W|$)").test(a.className)
          , f = ul(c);
        if (f && f.Ka && "on" !== b.google_adtest && !e) {
            e = Nh(a, c);
            const g = P(c).clientHeight;
            e = 0 == g ? null : e / g;
            if (!f.qa || f.qa && (e || 0) >= f.qa)
                return a.className += " adsbygoogle-ablated-ad-slot",
                c = c.google_sv_map = c.google_sv_map || {},
                d = fa(a),
                b.google_element_uid = d,
                c[b.google_element_uid] = b,
                a.setAttribute("google_element_uid", String(d)),
                "slot" === f.wb && (null !== Wc(a.getAttribute("width")) && a.setAttribute("width", 0),
                null !== Wc(a.getAttribute("height")) && a.setAttribute("height", 0),
                a.style.width = "0px",
                a.style.height = "0px"),
                !0
        }
        if ((f = Nc(a, c)) && "none" === f.display && !("on" === b.google_adtest || 0 < b.google_reactive_ad_format || d))
            return c.document.createComment && a.appendChild(c.document.createComment("No ad requested because of display:none on the adsbygoogle tag")),
            !0;
        a = null == b.google_pgb_reactive || 3 === b.google_pgb_reactive;
        return 1 !== b.google_reactive_ad_format && 8 !== b.google_reactive_ad_format || !a ? !1 : (n.console && n.console.warn("Adsbygoogle tag with data-reactive-ad-format=" + String(b.google_reactive_ad_format) + " is deprecated. Check out page-level ads at https://www.google.com/adsense"),
        !0)
    }
    function Ro(a) {
        var b = document.getElementsByTagName("INS");
        for (let d = 0, e = b[d]; d < b.length; e = b[++d]) {
            var c = e;
            if (No(c) && "reserved" !== c.dataset.adsbygoogleStatus && (!a || e.id === a))
                return e
        }
        return null
    }
    function So(a, b, c) {
        if (a && "shift"in a)
            for (var d = 20; 0 < a.length && 0 < d; ) {
                try {
                    To(a.shift(), b, c)
                } catch (e) {
                    setTimeout(()=>{
                        throw e;
                    }
                    )
                }
                --d
            }
    }
    function Uo() {
        const a = Mc("INS");
        a.className = "adsbygoogle";
        a.className += " adsbygoogle-noablate";
        Zc(a, {
            display: "none"
        });
        return a
    }
    function Vo(a, b) {
        const c = {}
          , d = tl(a.google_ad_client, b);
        J(yg, (g,h)=>{
            !1 === a.enable_page_level_ads ? c[h] = !1 : a.hasOwnProperty(h) ? c[h] = a[h] : d.includes(g) && (c[h] = !1)
        }
        );
        ea(a.enable_page_level_ads) && (c.page_level_pubvars = a.enable_page_level_ads);
        const e = Uo();
        cd.body.appendChild(e);
        const f = {
            google_reactive_ads_config: c,
            google_ad_client: a.google_ad_client
        };
        f.google_pause_ad_requests = !!X(L).pause_ad_requests;
        Oo(e, f, b)
    }
    function Wo(a, b) {
        zg(n).wasPlaTagProcessed = !0;
        const c = ()=>{
            Vo(a, b)
        }
          , d = n.document;
        if (d.body || "complete" === d.readyState || "interactive" === d.readyState)
            Vo(a, b);
        else {
            const e = jc(V.oa(191, c));
            kc(d, "DOMContentLoaded", e);
            (new n.MutationObserver((f,g)=>{
                d.body && (e(),
                g.disconnect())
            }
            )).observe(d, {
                childList: !0,
                subtree: !0
            })
        }
    }
    function To(a, b, c) {
        const d = {};
        rj(165, ()=>Xo(a, d, b, c), e=>{
            e.client = e.client || d.google_ad_client || a.google_ad_client;
            e.slotname = e.slotname || d.google_ad_slot;
            e.tag_origin = e.tag_origin || d.google_tag_origin
        }
        )
    }
    function Yo(a) {
        delete a.google_checked_head;
        J(a, (b,c)=>{
            ci[c] || (delete a[c],
            b = c.replace("google", "data").replace(/_/g, "-"),
            n.console.warn(`AdSense head tag doesn't support ${b} attribute.`))
        }
        )
    }
    function Zo(a, b) {
        var c = L.document.querySelector('script[src*="/pagead/js/adsbygoogle.js?client="]:not([data-checked-head])') || L.document.querySelector('script[src*="/pagead/js/adsbygoogle.js"][data-ad-client]:not([data-checked-head])');
        if (c) {
            c.setAttribute("data-checked-head", "true");
            var d = X(window);
            if (d.head_tag_slot_vars)
                $o(c);
            else {
                var e = {};
                to(c, e);
                Yo(e);
                var f = pc(e);
                d.head_tag_slot_vars = f;
                c = {
                    google_ad_client: e.google_ad_client,
                    enable_page_level_ads: e
                };
                L.adsbygoogle || (L.adsbygoogle = []);
                d = L.adsbygoogle;
                d.loaded ? d.push(c) : d.splice && d.splice(0, 0, c);
                e.google_adbreak_test || b.l()?.l() && S(uh) ? ap(f, a) : Io(()=>{
                    ap(f, a)
                }
                )
            }
        }
    }
    function $o(a) {
        const b = X(window).head_tag_slot_vars
          , c = a.getAttribute("src") || "";
        if ((a = Ic(c, "client") || a.getAttribute("data-ad-client") || "") && a !== b.google_ad_client)
            throw new T("Warning: Do not add multiple property codes with AdSense tag to avoid seeing unexpected behavior. These codes were found on the page " + a + ", " + b.google_ad_client);
    }
    function bp(a) {
        if ("object" === typeof a && null != a) {
            if ("string" === typeof a.type)
                return 2;
            if ("string" === typeof a.sound || "string" === typeof a.preloadAdBreaks)
                return 3
        }
        return 0
    }
    function Xo(a, b, c, d) {
        if (null == a)
            throw new T("push() called with no parameters.");
        d.m() && cp(a, d.i().i(), F(d, 2));
        var e = bp(a);
        if (0 !== e)
            if (d = xl(),
            d.first_slotcar_request_processing_time || (d.first_slotcar_request_processing_time = Date.now(),
            d.adsbygoogle_execution_start_time = pa),
            null == Jo)
                dp(a),
                Ko.push(a);
            else if (3 === e) {
                const f = Jo;
                rj(787, ()=>{
                    f.handleAdConfig(a)
                }
                )
            } else
                tj(730, Jo.handleAdBreak(a));
        else {
            pa = (new Date).getTime();
            ho(c, d, ep(a));
            fp();
            a: {
                if (void 0 != a.enable_page_level_ads) {
                    if ("string" === typeof a.google_ad_client) {
                        e = !0;
                        break a
                    }
                    throw new T("'google_ad_client' is missing from the tag config.");
                }
                e = !1
            }
            if (e)
                gp(a, d);
            else if ((e = a.params) && J(e, (f,g)=>{
                b[g] = f
            }
            ),
            "js" === b.google_ad_output)
                console.warn("Ads with google_ad_output='js' have been deprecated and no longer work. Contact your AdSense account manager or switch to standard AdSense ads.");
            else {
                e = hp(a.element);
                to(e, b);
                c = X(n).head_tag_slot_vars || {};
                J(c, (f,g)=>{
                    b.hasOwnProperty(g) || (b[g] = f)
                }
                );
                if (e.hasAttribute("data-require-head") && !X(n).head_tag_slot_vars)
                    throw new T("AdSense head tag is missing. AdSense body tags don't work without the head tag. You can copy the head tag from your account on https://adsense.com.");
                if (!b.google_ad_client)
                    throw new T("Ad client is missing from the slot.");
                (c = 0 === (X(L).first_tag_on_page || 0) && Rl(b)) && ip(c);
                0 === (X(L).first_tag_on_page || 0) && (X(L).first_tag_on_page = 2);
                b.google_pause_ad_requests = !!X(L).pause_ad_requests;
                Oo(e, b, d)
            }
        }
    }
    let jp = !1;
    function cp(a, b, c) {
        jp || (jp = !0,
        a = ep(a) || Jm(L),
        sj("predictive_abg", {
            a_c: a,
            p_c: b.join(),
            b_v: c
        }, .01))
    }
    function ep(a) {
        return a.google_ad_client ? a.google_ad_client : (a = a.params) && a.google_ad_client ? a.google_ad_client : ""
    }
    function fp() {
        if (S(fh)) {
            var a = ul(L);
            if (!(a = a && a.Ka)) {
                try {
                    var b = L.localStorage
                } catch (c) {
                    b = null
                }
                b = b ? Pk(b) : null;
                a = !(b && Ok(b) && b)
            }
            a || vl(L, 1)
        }
    }
    function ip(a) {
        dd(()=>{
            zg(n).wasPlaTagProcessed || n.adsbygoogle && n.adsbygoogle.push(a)
        }
        )
    }
    function gp(a, b) {
        0 === (X(L).first_tag_on_page || 0) && (X(L).first_tag_on_page = 1);
        if (a.tag_partner) {
            var c = a.tag_partner;
            const d = X(n);
            d.tag_partners = d.tag_partners || [];
            d.tag_partners.push(c)
        }
        Ul(a, b);
        Wo(a, b)
    }
    function hp(a) {
        if (a) {
            if (!No(a) && (a.id ? a = Ro(a.id) : a = null,
            !a))
                throw new T("'element' has already been filled.");
            if (!("innerHTML"in a))
                throw new T("'element' is not a good DOM element.");
        } else if (a = Ro(),
        !a)
            throw new T("All ins elements in the DOM with class=adsbygoogle already have ads in them.");
        return a
    }
    function kp() {
        var a = new Nj(L)
          , b = new Bo;
        const c = new Go;
        var d = L.__cmp ? 1 : 0;
        a = Kj(a) ? 1 : 0;
        b = wo(b.caller) ? 1 : 0;
        c.l || (c.i = !!wo(c.caller),
        c.l = !0);
        sj("cmpMet", {
            tcfv1: d,
            tcfv2: a,
            usp: b,
            fc: c.i ? 1 : 0,
            ptt: 9
        }, .001)
    }
    function lp(a) {
        wj().S[zj(26)] = !!Number(a)
    }
    function mp(a) {
        Number(a) ? X(L).pause_ad_requests = !0 : (X(L).pause_ad_requests = !1,
        a = ()=>{
            if (!X(L).pause_ad_requests) {
                var b = {};
                let c;
                "function" === typeof window.CustomEvent ? c = new CustomEvent("adsbygoogle-pub-unpause-ad-requests-event",b) : (c = document.createEvent("CustomEvent"),
                c.initCustomEvent("adsbygoogle-pub-unpause-ad-requests-event", !!b.bubbles, !!b.cancelable, b.detail));
                L.dispatchEvent(c)
            }
        }
        ,
        n.setTimeout(a, 0),
        n.setTimeout(a, 1E3))
    }
    function np(a) {
        try {
            Object.defineProperty(a, "requestNonPersonalizedAds", {
                set: lp
            }),
            Object.defineProperty(a, "pauseAdRequests", {
                set: mp
            }),
            Object.defineProperty(a, "onload", {
                set: op
            })
        } catch {}
    }
    function op(a) {
        a && a.call && "function" === typeof a && window.setTimeout(a, 0)
    }
    function ap(a, b) {
        b = Ql(wc(b.vb, Ch() ? {
            bust: Ch()
        } : {})).then(c=>{
            null == Jo && (c.init(a),
            Jo = c,
            pp(c))
        }
        );
        V.ba(723, b);
        b.finally(()=>{
            Ko.length = 0;
            sj("slotcar", {
                event: "api_ld",
                time: Date.now() - pa,
                time_pr: Date.now() - Mo
            })
        }
        )
    }
    function pp(a) {
        for (const [c,d] of Lo) {
            var b = c;
            const e = d;
            -1 !== e && (n.clearTimeout(e),
            Lo.delete(b))
        }
        for (b = 0; b < Ko.length; b++) {
            if (Lo.has(b))
                continue;
            const c = Ko[b]
              , d = bp(c);
            rj(723, ()=>{
                if (3 === d)
                    a.handleAdConfig(c);
                else if (2 === d) {
                    var e = a.handleAdBreakBeforeReady(c);
                    V.ba(730, e)
                }
            }
            )
        }
    }
    function dp(a) {
        var b = Ko.length;
        if (2 === bp(a) && "preroll" === a.type && null != a.adBreakDone) {
            var c = a.adBreakDone;
            -1 === Mo && (Mo = Date.now());
            var d = n.setTimeout(()=>{
                try {
                    c({
                        breakType: "preroll",
                        breakName: a.name,
                        breakFormat: "preroll",
                        breakStatus: "timeout"
                    }),
                    Lo.set(b, -1),
                    sj("slotcar", {
                        event: "pr_to",
                        source: "adsbygoogle"
                    })
                } catch (e) {
                    console.error("[Ad Placement API] adBreakDone callback threw an error:", e instanceof Error ? e : Error(String(e)))
                }
            }
            , 1E3 * M(Bh).h(vh.h, vh.defaultValue));
            Lo.set(b, d)
        }
    }
    ;(function(a, b, c, d=()=>{}
    ) {
        V.Sa(uj);
        rj(166, ()=>{
            const e = xn(b);
            wn(e);
            d();
            ld(16, [1, e.toJSON()]);
            var f = nd(md(L)) || L;
            const g = c(un({
                ra: a,
                wa: F(e, 2)
            }), e);
            var h = null === L.document.currentScript ? 1 : Tm(g.xb);
            il(f, e);
            tn(f, e, h);
            tj(1086, Pm(M(Rm), 0 === h));
            if (!Da() || 0 <= sa(Ja(), 11)) {
                qj(S(yh));
                ro();
                zk();
                try {
                    Mn()
                } catch {}
                qo();
                Zo(g, e);
                f = window;
                h = f.adsbygoogle;
                if (!h || !h.loaded) {
                    sj("new_abg_tag", {
                        value: `${A(e, 16)}`,
                        host_v: `${A(e, 22)}`,
                        frequency: .01
                    }, .01);
                    kp();
                    var l = {
                        push: v=>{
                            To(v, g, e)
                        }
                        ,
                        loaded: !0
                    };
                    np(l);
                    if (h)
                        for (var k of ["requestNonPersonalizedAds", "pauseAdRequests"])
                            void 0 !== h[k] && (l[k] = h[k]);
                    So(h, g, e);
                    f.adsbygoogle = l;
                    h && (l.onload = h.onload);
                    (k = mo(g)) && document.documentElement.appendChild(k);
                    var {supports: m, error: u} = Ho();
                    sj("modern_js", {
                        fy: B(t(e, 1), 0),
                        supports: String(m),
                        c: 2021,
                        e: u
                    }, .01)
                }
            }
        }
        )
    }
    )("m202304110101", "undefined" === typeof sttc ? void 0 : sttc, function(a, b) {
        const c = 2012 < B(t(b, 1), 0) ? `_fy${B(t(b, 1), 0)}` : "";
        var d = F(b, 3);
        const e = F(b, 2);
        b = od`https://pagead2.googlesyndication.com/pagead/managed/js/adsense/${a}/slotcar_library${c}.js`;
        d = od`https://googleads.g.doubleclick.net/pagead/html/${e}/${d}/zrt_lookup.html`;
        return {
            vb: b,
            tb: od`https://pagead2.googlesyndication.com/pagead/managed/js/adsense/${a}/show_ads_impl${c}.js`,
            sb: od`https://pagead2.googlesyndication.com/pagead/managed/js/adsense/${a}/show_ads_impl_with_ama${c}.js`,
            bc: od`https://pagead2.googlesyndication.com/pagead/managed/js/adsense/${a}/show_ads_impl_instrumented${c}.js`,
            zb: d,
            xb: /^(?:https?:)?\/\/(?:pagead2\.googlesyndication\.com|securepubads\.g\.doubleclick\.net)\/pagead\/(?:js\/)?(?:show_ads|adsbygoogle)\.js(?:[?#].*)?$/
        }
    });
}
).call(this, "[2021,\"r20230412\",\"r20190131\",null,null,null,null,\".google.co.id\",null,null,null,[[[1082,null,null,[1]],[null,1130,null,[null,100]],[null,1032,null,[null,200],[[[12,null,null,null,4,null,\"Android\",[\"navigator.userAgent\"]],[null,500]]]],[1247,null,null,[1]],[1240,null,null,[1]],[null,1224,null,[null,0.01]],[null,1159,null,[null,500]],[1122,null,null,[1]],[1207,null,null,[1]],[null,66,null,[null,-1]],[null,65,null,[null,-1]],[1205,null,null,[1]],[1167,null,null,[1]],[1129,null,null,[1]],[1248,null,null,[1]],[null,1169,null,[null,61440]],[1171,null,null,[1]],[1201,null,null,[1]],[1199,null,null,[1]],[1161,null,null,[1]],[null,1072,null,[null,0.75]],[1101,null,null,[1]],[null,1168,null,[null,61440]],[1198,null,null,[1]],[1206,null,null,[1]],[1243,null,null,[1]],[1190,null,null,[1]],[null,1245,null,[null,3600]],[null,506864295,null,[null,300]],[null,508040914,null,[null,100]],[null,1114,null,[null,1]],[null,523968586,null,[null,4.5]],[501545959,null,null,[1]],[518318645,null,null,[1]],[null,469675170,null,[null,30000]],[null,1085,null,[null,5]],[null,63,null,[null,30]],[null,1080,null,[null,5]],[null,null,null,[null,null,null,[\"1\",\"2\"]],null,10003],[1086,null,null,[1]],[63682,null,null,[1]],[null,1027,null,[null,10]],[null,57,null,[null,120]],[null,1079,null,[null,5]],[null,1050,null,[null,30]],[null,58,null,[null,120]],[10007,null,null,[1]],[10005,null,null,[1]],[1033,null,null,[1]],[10006,null,null,[1]],[null,null,null,[null,null,null,[\"A0VQgOQvA+kwCj319NCwgf8+syUgEQ8\/LLpB8RxxlRC3AkJ9xx8IAvVuQ\/dcwy0ok7sGKufLLu6WhsXbQR9\/UwwAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjg4MDgzMTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==\",\"A6kRo9zXJhOvsR4D\/VeZ9CiApPAxnOGzBkW88d8eIt9ex2oOzlX+AoUk\/BS50Y9Ysy2jwyHR49Mb7XwP+l9yygIAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjg4MDgzMTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==\",\"A3mbHZoS4VJtJ8j1aE8+Z9vaGf\/oMV1eTNIWMrvGqWgNnOmvaxnRGliqKIZU2eiTzCj5Qpz8B1\/UTTLuony5bAAAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjg4MDgzMTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==\",\"As0hBNJ8h++fNYlkq8cTye2qDLyom8NddByiVytXGGD0YVE+2CEuTCpqXMDxdhOMILKoaiaYifwEvCRlJ\/9GcQ8AAAB8eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3MTk1MzI3OTksImlzU3ViZG9tYWluIjp0cnVlfQ==\",\"AgRYsXo24ypxC89CJanC+JgEmraCCBebKl8ZmG7Tj5oJNx0cmH0NtNRZs3NB5ubhpbX\/bIt7l2zJOSyO64NGmwMAAACCeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3MTk1MzI3OTksImlzU3ViZG9tYWluIjp0cnVlfQ==\"]],null,1934],[1957,null,null,[1]],[1975,null,null,[1]],[1974,null,null,[1]],[null,1972,null,[]],[null,501545963,null,[null,1]],[null,501545962,null,[null,1]],[null,1116,null,[null,300]],[469675169,null,null,[1]],[485990406,null,null,[]]],[[12,[[40,[[21065724],[21065725,[[203,null,null,[1]]]]],[4,null,9,null,null,null,null,[\"LayoutShift\"]],71],[10,[[31061690],[31061691,[[83,null,null,[1]],[84,null,null,[1]]]]],null,61],[10,[[44769661],[44769662,[[1973,null,null,[1]]]]]]]],[13,[[500,[[31061692],[31061693,[[77,null,null,[1]],[78,null,null,[1]],[85,null,null,[1]],[80,null,null,[1]],[76,null,null,[1]]]]],[4,null,6,null,null,null,null,[\"31061691\"]]],[1000,[[31067146,null,[4,null,70,null,null,null,null,[\"browsing-topics\"]]]],[12,null,null,null,4,null,\"Chrome\/((?!100)\\\\d{3,})\",[\"navigator.userAgent\"]]],[1000,[[31067147,null,[2,[[4,null,70,null,null,null,null,[\"run-ad-auction\"]],[4,null,70,null,null,null,null,[\"join-ad-interest-group\"]]]]]],[12,null,null,null,4,null,\"Chrome\/((?!100)\\\\d{3,})\",[\"navigator.userAgent\"]]],[1000,[[31067148,null,[4,null,70,null,null,null,null,[\"attribution-reporting\"]]]],[12,null,null,null,4,null,\"Chrome\/((?!100)\\\\d{3,})\",[\"navigator.userAgent\"]]],[1000,[[31067672,null,[2,[[4,null,69,null,null,null,null,[\"browsing-topics\"]],[1,[[4,null,70,null,null,null,null,[\"browsing-topics\"]]]]]]]],[12,null,null,null,4,null,\"Chrome\/((?!100)\\\\d{3,})\",[\"navigator.userAgent\"]]],[1000,[[31067673,null,[2,[[4,null,69,null,null,null,null,[\"join-ad-interest-group\"]],[1,[[4,null,70,null,null,null,null,[\"join-ad-interest-group\"]]]]]]]],[12,null,null,null,4,null,\"Chrome\/((?!100)\\\\d{3,})\",[\"navigator.userAgent\"]]],[1000,[[31067674,null,[2,[[4,null,69,null,null,null,null,[\"run-ad-auction\"]],[1,[[4,null,70,null,null,null,null,[\"run-ad-auction\"]]]]]]]],[12,null,null,null,4,null,\"Chrome\/((?!100)\\\\d{3,})\",[\"navigator.userAgent\"]]],[1000,[[31067675,null,[2,[[4,null,69,null,null,null,null,[\"attribution-reporting\"]],[1,[[4,null,70,null,null,null,null,[\"attribution-reporting\"]]]]]]]],[12,null,null,null,4,null,\"Chrome\/((?!100)\\\\d{3,})\",[\"navigator.userAgent\"]]],[1000,[[31068556,null,[4,null,70,null,null,null,null,[\"shared-storage\"]]]],[12,null,null,null,4,null,\"Chrome\/((?!100)\\\\d{3,})\",[\"navigator.userAgent\"]]],[1000,[[31068557,null,[2,[[4,null,69,null,null,null,null,[\"shared-storage\"]],[1,[[4,null,70,null,null,null,null,[\"shared-storage\"]]]]]]]],[12,null,null,null,4,null,\"Chrome\/((?!100)\\\\d{3,})\",[\"navigator.userAgent\"]]],[null,[[44768158,null,[4,null,70,null,null,null,null,[\"attribution-reporting\"]]],[44768159,null,[4,null,70,null,null,null,null,[\"attribution-reporting\"]]]],null,74],[10,[[44776500,null,[4,null,70,null,null,null,null,[\"attribution-reporting\"]]],[44776501,null,[4,null,70,null,null,null,null,[\"attribution-reporting\"]]]],null,74],[200,[[44776502,null,[4,null,70,null,null,null,null,[\"attribution-reporting\"]]],[44776503,null,[4,null,70,null,null,null,null,[\"attribution-reporting\"]]]],null,74],[10,[[44783616,null,[4,null,70,null,null,null,null,[\"attribution-reporting\"]]],[44783617,null,[4,null,70,null,null,null,null,[\"attribution-reporting\"]]],[44784847,null,[4,null,70,null,null,null,null,[\"attribution-reporting\"]]]],null,74]]],[10,[[50,[[31067422],[31067423,[[null,1032,null,[]]]],[44776074],[44776369],[44779109],[44779906],[44784478],[44785149]],[3,[[4,null,8,null,null,null,null,[\"gmaSdk.getQueryInfo\"]],[4,null,8,null,null,null,null,[\"webkit.messageHandlers.getGmaQueryInfo.postMessage\"]],[4,null,8,null,null,null,null,[\"webkit.messageHandlers.getGmaSig.postMessage\"]]]],69],[10,[[31071258],[31071259]]],[100,[[31071755],[31071756,[[1222,null,null,[1]]]]]],[100,[[31073584],[31073585,[[1238,null,null,[1]]]]]],[1000,[[31073761,[[null,null,14,[null,null,\"31073761\"]]],[6,null,null,null,6,null,\"31073761\"]],[31073762,[[null,null,14,[null,null,\"31073762\"]]],[6,null,null,null,6,null,\"31073762\"]]],[4,null,55],63],[10,[[31073763],[31073764,[[1250,null,null,[1]]]]]],[10,[[31073765],[31073766,[[1249,null,null,[1]]]]]],[1000,[[31073769,[[null,null,14,[null,null,\"31073769\"]]],[6,null,null,null,6,null,\"31073769\"]],[31073770,[[null,null,14,[null,null,\"31073770\"]]],[6,null,null,null,6,null,\"31073770\"]]],[4,null,55],63],[100,[[31073787],[31073788,[[515292965,null,null,[1]]]]]],[100,[[31073793],[31073794,[[516837771,null,null,[1]]]]]],[1000,[[31073806,[[null,null,14,[null,null,\"31073806\"]]],[6,null,null,null,6,null,\"31073806\"]],[31073807,[[null,null,14,[null,null,\"31073807\"]]],[6,null,null,null,6,null,\"31073807\"]]],[4,null,55],63],[1000,[[31073822,[[null,null,14,[null,null,\"31073822\"]]],[6,null,null,null,6,null,\"31073822\"]],[31073823,[[null,null,14,[null,null,\"31073823\"]]],[6,null,null,null,6,null,\"31073823\"]]],[4,null,55],63],[1000,[[31073869,[[null,null,14,[null,null,\"31073869\"]]],[6,null,null,null,6,null,\"31073869\"]],[31073870,[[null,null,14,[null,null,\"31073870\"]]],[6,null,null,null,6,null,\"31073870\"]]],[4,null,55],63],[1,[[42531513],[42531514,[[316,null,null,[1]]]]]],[1,[[42531644],[42531645,[[368,null,null,[1]]]],[42531646,[[369,null,null,[1]],[368,null,null,[1]]]]]],[50,[[42531705],[42531706]]],[1,[[44719338],[44719339,[[334,null,null,[1]],[null,54,null,[null,100]],[null,66,null,[null,10]],[null,65,null,[null,1000]]]]]],[10,[[44772268],[44772269,[[1185,null,null,[1]]]]],null,54],[10,[[44776368],[44779257]],[3,[[4,null,8,null,null,null,null,[\"gmaSdk.getQueryInfo\"]],[4,null,8,null,null,null,null,[\"webkit.messageHandlers.getGmaQueryInfo.postMessage\"]],[4,null,8,null,null,null,null,[\"webkit.messageHandlers.getGmaSig.postMessage\"]]]],69],[1,[[44776415]],null,54],[1,[[44779343],[44779344,[[1147,null,null,[1]]]]],null,54],[10,[[44782466],[44782467,[[1160,null,null,[1]]]],[44782468,[[1226,null,null,[1]],[1160,null,null,[1]]]]]],[50,[[44785292],[44785293,[[1239,null,null,[1]]]]]],[50,[[44785294],[44785295]]],[10,[[44786499],[44786500,[[1233,null,null,[1]],[1147,null,null,[1]]]],[44786501,[[1233,null,null,[1]],[1147,null,null,[1]]]],[44786502,[[1233,null,null,[1]],[1185,null,null,[1]]]],[44786559,[[1233,null,null,[1]],[1147,null,null,[1]]]],[44786560,[[1233,null,null,[1]],[1147,null,null,[1]]]]],null,54],[10,[[44786918],[44786920,[[1147,null,null,[1]]]]],null,54],[1000,[[44788055,null,[4,null,6,null,null,null,null,[\"44788055\"]]],[44788056,null,[4,null,6,null,null,null,null,[\"44788056\"]]],[44788057,[[1236,null,null,[1]]],[4,null,6,null,null,null,null,[\"44788057\"]]],[44788058,[[1241,null,null,[1]]],[4,null,6,null,null,null,null,[\"44788058\"]]],[44788059,[[1241,null,null,[1]],[1236,null,null,[1]]],[4,null,6,null,null,null,null,[\"44788059\"]]]]],[50,[[44788441],[44788442,[[1147,null,null,[1]]]],[44788443,[[1147,null,null,[1]]]]],null,54],[1000,[[44789248,null,[4,null,6,null,null,null,null,[\"44789243\"]]],[44789249,[[1223,null,null,[1]]],[4,null,6,null,null,null,null,[\"44789244\"]]]]]]],[17,[[10,[[31071260]]],[10,[[31071261],[31071262],[31071263],[31071264]],null,null,null,44,22],[10,[[31071265],[31071266]],null,null,null,44,null,500],[10,[[31071267]],null,null,null,44,null,900],[10,[[31071268],[31071269]],null,null,null,null,null,null,null,101],[10,[[44788469,[[null,506871937,null,[null,44788469]]]],[44788470,[[501545960,null,null,[1]],[1120,null,null,[1]],[501545959,null,null,[]],[null,506871937,null,[null,44788470]],[1162,null,null,[1]],[501545961,null,null,[1]]]],[44788471,[[501545960,null,null,[1]],[1120,null,null,[1]],[null,506871937,null,[null,44788471]],[1162,null,null,[1]],[501545961,null,null,[1]]]]],[4,null,55],null,null,null,null,2,null,118,1],[1,[[44788474,[[506914611,null,null,[1]],[null,506871937,null,[null,44788474]]]],[44788475,[[1120,null,null,[1]],[null,1114,null,[null,0.4]],[506914611,null,null,[1]],[null,506871937,null,[null,44788475]]]]],[4,null,55],null,null,null,null,null,null,118,1],[20,[[44788498,[[501545960,null,null,[1]],[1120,null,null,[1]],[null,506871937,null,[null,44788498]],[1162,null,null,[1]],[501545961,null,null,[1]]]],[44788499,[[501545960,null,null,[1]],[289410051,null,null,[1]],[1120,null,null,[1]],[null,506871937,null,[null,44788499]],[1162,null,null,[1]],[501545961,null,null,[1]]]]],[4,null,55],null,null,null,null,62,null,118,1]]]],null,null,[null,\"1000\",1,\"1000\"]],[null,[null,null,[]]],null,\"31073806\",1,\"www.cgv.id\",1477931658,[44759842,44759876,44759927]]");
