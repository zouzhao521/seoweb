window._$logutil_ = {
    pathprepend: function(t) {
        return 0 === t.indexOf("//") ? [window.location.protocol, t].join("") : 0 === t.indexOf("/") ? [window.location.origin, t].join("") : t
    },
    trimquery: function(t) {
        var e = t.indexOf("?");
        return~e ? t.substring(0, e) : t
    },
    urlParser: function(t) {
        var e = window;
        if (e._$logutil_.urlParser._$cache_ || (e._$logutil_.urlParser._$cache_ = {}), e._$logutil_.urlParser._$cache_[t]) return e._$logutil_.urlParser._$cache_[t];
        var o = e._$logutil_.regexUrl.exec(t);
        return o ? (o[1] || (o[1] = e.location.protocol.substring(0, e.location.protocol.length - 1)), e._$logutil_.urlParser._$cache_[t] = {
            host: o[2],
            port: o[3],
            scheme: o[1],
            path: o[4]
        }) : {
            host: "",
            port: "",
            scheme: "",
            path: ""
        }
    },
    regexUrl: /^(https?)?:?\/\/((?:[a-z0-9.-]|%[0-9A-F]{2}){3,})(?::(\d+))?((?:\/(?:[a-z0-9-._~!$&'()*+,;=:@]|%[0-9A-F]{2})*)*)(?:\?((?:[a-z0-9-._~!$&'()*+,;=:\/?@]|%[0-9A-F]{2})*))?(?:#((?:[a-z0-9-._~!$&'()*+,;=:\/?@]|%[0-9A-F]{2})*))?$/i
},
!
function() {
    var t = window;
    if (t._$logouterresgap_ = 500, t._$logreserrorgap_ = 1e3, t._$logrestiminggap_ = 4e3, t._$logrestimingdelay_ = 3e3, t._$loggaptime_ = 1e3, t._$logtarget_ = t.location.protocol + "//www.toutiao.com/__utm.gif", t._$logsend_ = function(t, e) {
        t.src = e + "&tm=" + (new Date).getTime()
    },
    t._$post_ = function(e, o) {
        e.length && !o._timer_ && (t._$logsend_(o, e.shift()), o._timer_ = t.setInterval(function() {
            return e.length ? void t._$logsend_(o, e.shift()) : (t.clearInterval(o._timer_), delete o._timer_)
        },
        t._$loggaptime_))
    },
    t._$logcurloc_ || (t._$logcurloc_ = encodeURIComponent(t.location.origin + t.location.pathname)), t._$logpn_) {
        var e = document.createElement("meta");
        e.setAttribute("name", "pathname"),
        e.setAttribute("content", t._$logpn_),
        document.head.appendChild(e)
    }
    t._$logpn_ || (t._$logpn_ = function() {
        var t;
        return [].slice.call(document.querySelectorAll("head meta")).some(function(e) {
            return "pathname" === e.getAttribute("name") && (t = e.getAttribute("content"))
        }),
        t
    } () || t._$pathname_ || encodeURIComponent(t.location.pathname.replace(/\/(\d+)(\/)?$/, "/$id$2")) || "unknown pathname"),
    t._$logdi_ || (t._$logdi_ = function() {
        var e = ~document.cookie.indexOf("device_id=") ? document.cookie.split(";") : ~t.location.search.indexOf("device_id=") ? t.location.search.substring(1).split("&") : [];
        if (!e.length) return "unknown deviceid";
        e = e.map(function(t) {
            return t.trim()
        });
        var o;
        return e.some(function(t) {
            var e = t.split("=");
            return "device_id" == e[0] && (o = {
                key: e[0],
                value: e[1]
            })
        }),
        o.value
    } ())
} ();
var wOldOnError = window.onerror;
window.onerror = function(t, e, o, n) {
    var r = window,
    i = "error",
    a = "runtimeerr",
    l = "unknown error message";
    wOldOnError && wOldOnError.apply(this, arguments),
    r._$errimg_ || (r._$errimg_ = new Image),
    r._$errqueue_ || (r._$errqueue_ = []);
    try {
        "string" != typeof t && (t = t.message || t.error && t.error.toString())
    } catch(u) {
        t = l
    }
    "string" == typeof t && t || (t = l),
    t = encodeURIComponent(t),
    e = encodeURIComponent(r._$logutil_.trimquery(e));
    var c = ["logtype=" + i, "label=" + a, "msg=" + t, "url=" + e, "ln=" + o, "cn=" + n, "pathname=" + r._$logpn_, "deviceid=" + r._$logdi_, "location=" + r._$logcurloc_].join("&");
    return r._$errqueue_.push([r._$logtarget_, c].join("?")),
    r._$post_(r._$errqueue_, r._$errimg_),
    !1
},
window.toutiao = window.toutiao || {},
toutiao.log = toutiao.log || {},
toutiao.log.error = function(t, e) {
    var o = window,
    n = "error",
    r = "customerr";
    if (t) {
        toutiao.log.error._$img_ = toutiao.log.error._$img_ || new Image,
        toutiao.log.error._$errqueue_ = toutiao.log.error._$errqueue_ || [],
        t = encodeURIComponent("string" != typeof t ? t.toString() : t),
        e = encodeURIComponent(e);
        var i = ["logtype=" + n, "label=" + r, "msg=" + t, "file=" + e, "pathname=" + o._$logpn_, "deviceid=" + o._$logdi_, "location=" + o._$logcurloc_].join("&");
        toutiao.log.error._$errqueue_.push([o._$logtarget_, i].join("?")),
        o._$post_(toutiao.log.error._$errqueue_, toutiao.log.error._$img_)
    }
},
!
function() {
    function t(t) {
        var e = [];
        for (var n in t) e.push(n + "=" + t[n]);
        return [o._$logtarget_, e.join("&")].join("?")
    }
    function e(t) {
        var e = this,
        o = t.prototype.open,
        r = t.prototype.send;
        return t.prototype.open = function(t, e) {
            return e = (e || "").toString(),
            0 > e.indexOf("localhost:0") && (this._$logajaxinfo_ = {
                method: t,
                url: e
            }),
            o.apply(this, arguments)
        },
        t.prototype.send = function() {
            try {
                if (!this._$logajaxinfo_) return r.apply(this, arguments);
                this._$logajaxinfo_.logId = e.log.add("n", {
                    startedon: n.isoNow(),
                    method: this._$logajaxinfo_.method,
                    url: this._$logajaxinfo_.url
                }),
                e.listenForNetworkComplete(this)
            } catch(t) {
                e.onError("ajax", t.toString())
            }
            return r.apply(this, arguments)
        },
        t
    }
    var o = window,
    n = {
        bind: function(t, e) {
            return function() {
                return t.apply(e, Array.prototype.slice.call(arguments))
            }
        },
        contains: function(t, e) {
            var o;
            for (o = 0; o < t.length; o++) if (t[o] === e) return ! 0;
            return ! 1
        },
        defer: function(t, e) {
            setTimeout(function() {
                t.apply(e)
            })
        },
        extend: function(t) {
            for (var e, o = Array.prototype.slice.call(arguments, 1), n = 0; n < o.length; n++) for (e in o[n]) null === o[n][e] || o[n][e] === l ? t[e] = o[n][e] : "[object Object]" === Object.prototype.toString.call(o[n][e]) ? (t[e] = t[e] || {},
            this.extend(t[e], o[n][e])) : t[e] = o[n][e];
            return t
        },
        hasFunction: function(t, e) {
            try {
                return !! t[e]
            } catch(o) {
                return ! 1
            }
        },
        isBrowserIE: function() {
            var t = this.window.navigator.userAgent,
            e = t.match(/Trident\/([\d.]+)/);
            return e && "7.0" === e[1] ? 11 : (t = t.match(/MSIE ([\d.]+)/)) ? parseInt(t[1], 10) : !1
        },
        isBrowserSupported: function() {
            var t = this.isBrowserIE();
            return ! t || t >= 8
        },
        isoNow: function() {
            return (new Date).getTime()
        },
        pad: function(t) {
            return t = String(t),
            1 === t.length && (t = "0" + t),
            t
        },
        testCrossdomainXhr: function() {
            return "withCredentials" in new XMLHttpRequest
        },
        wrapError: function(t) {
            if (t.innerError) return t;
            var e = Error("toutiao.log.error Caught: " + (t.message || t));
            return e.description = "toutiao.log.error Caught: " + t.description,
            e.file = t.file,
            e.line = t.line || t.lineNumber,
            e.column = t.column || t.columnNumber,
            e.stack = t.stack,
            e.innerError = t,
            e
        }
    },
    r = 0,
    i = {},
    a = "ajaxstate",
    u = [],
    c = function() {
        u.length && !c._$timer_ && (o._$logsend_(c._$logimg_, u.shift()), c._$timer_ = o.setInterval(function() {
            return u.length ? void o._$logsend_(c._$logimg_, u.shift()) : (o.clearInterval(c._$timer_), delete c._$timer_)
        },
        o._$loggaptime_))
    };
    c._$logimg_ = new Image;
    var s = {
        options: {
            error: !0
        },
        util: n,
        log: {
            sendtimer: {},
            add: function(t, e) {
                return i[t] || (i[t] = {}),
                i[t][++r + ""] = e,
                r
            },
            get: function(t, e) {
                return i[t][e]
            },
            send: function(t, e) {
                var n = t + e;
                s.log.sendtimer[n] || (s.log.sendtimer[n] = o.setTimeout(function() {
                    s.log.realsend(this.key, this.inx),
                    delete s.log.sendtimer[this.key + this.inx]
                }.bind({
                    key: t,
                    inx: e
                }), 2e3))
            },
            realsend: function(e, n) {
                if (i[e][n]) {
                    var r = i[e][n];
                    0 !== r.url.indexOf("http") && (r.url = [o.location.origin, r.url].join(""));
                    var l = o._$logutil_.urlParser(r.url);
                    r.url = encodeURIComponent(r.url),
                    r.host = encodeURIComponent((l.port ? [l.host, l.port] : [l.host]).join(":")),
                    r.scheme = encodeURIComponent(l.scheme),
                    r.path = encodeURIComponent(l.path),
                    r.logtype = a,
                    r.pathname = o._$logpn_,
                    r.deviceid = o._$logdi_,
                    r.location = o._$logcurloc_,
                    u.push(t(r)),
                    c(),
                    delete i[e][n]
                }
            }
        },
        listenForNetworkComplete: function(t) {
            o.ProgressEvent && t.addEventListener && t.addEventListener("readystatechange",
            function() {
                4 === t.readyState && s.finalizeNetworkEvent(t)
            },
            !0),
            t.addEventListener ? t.addEventListener("load",
            function() {
                s.finalizeNetworkEvent(t),
                s.checkNetworkFault(t)
            },
            !0) : setTimeout(function() {
                try {
                    var e = t.onload;
                    t.onload = function() {
                        s.finalizeNetworkEvent(t),
                        s.checkNetworkFault(t),
                        "function" == typeof e && n.hasFunction(e, "apply") && e.apply(t, arguments)
                    };
                    var o = t.onerror;
                    t.onerror = function() {
                        s.finalizeNetworkEvent(t),
                        s.checkNetworkFault(t),
                        "function" == typeof o && n.hasFunction(o, "apply") && o.apply(t, arguments)
                    }
                } catch(r) {
                    s.onError("ajax", r.toString())
                }
            },
            0)
        },
        finalizeNetworkEvent: function(t) {
            if (t._$logajaxinfo_) {
                var e = s.log.get("n", t._$logajaxinfo_.logId);
                e && (e.completedon = n.isoNow(), e.duration = e.completedon - e.startedon, e.statuscode = 1223 == t.status ? 204 : t.status, e.statustext = 1223 == t.status ? "No Content": t.statusText),
                s.log.send("n", t._$logajaxinfo_.logId)
            }
        },
        checkNetworkFault: function(t) {
            if (s.options.error && 400 <= t.status && 1223 != t.status) {
                var e = t._$logajaxinfo_ || {};
                s.onError("ajax", t.status + " " + t.statusText + ": " + e.method + " " + e.url)
            }
        },
        report: function() {
            return s.log.all("n")
        },
        onError: function(t, e) {
            toutiao.log.error([t, ": ", e].join(""), "error.js")
        }
    };
    o.XMLHttpRequest && n.hasFunction(o.XMLHttpRequest.prototype.open, "apply") && e.bind(s, o.XMLHttpRequest)()
} (),
window._$logouter_onload_func_ = function() {
    var t = window;
    if (t.removeEventListener("load", window._$logouter_onload_func_, !1), !t._$logouter_onload_func_._$triggered_) {
        t._$logouterwhitelist_ = t._$logouterwhitelist_ || ["pstatp.com", "toutiao.com", "bytecdn.cn"];
        var e, o, n, r, i = "outerres",
        a = 3,
        l = 0,
        u = 0,
        c = 0,
        s = [],
        _ = function() {
            e = document.getElementsByTagName("link"),
            o = document.getElementsByTagName("script"),
            m()
        },
        g = function(t, e) {
            return !! ~t.indexOf(e)
        },
        d = function(e) {
            if ("dns-prefetch" != e.getAttribute("rel") && !e._$travtag_) {
                e._$travtag_ = 1;
                var o = "link" == e.tagName.toLowerCase() ? e.getAttribute("href") : e.getAttribute("src") || "";
                if (o && (0 === o.indexOf("//") || 0 !== o.indexOf("/") && 0 !== o.indexOf("./") && 0 !== o.indexOf("../")) && 0 !== o.indexOf("data:text/css") && (o = t._$logutil_.trimquery(o), o = t._$logutil_.pathprepend(o), !t._$logouterwhitelist_.some(g.bind(null, o)))) {
                    var n = t._$logutil_.urlParser(o);
                    s.push({
                        link: encodeURIComponent(o),
                        host: encodeURIComponent((n.port ? [n.host, n.port] : [n.host]).join(":")),
                        scheme: encodeURIComponent(n.scheme),
                        path: encodeURIComponent(n.path)
                    })
                }
            }
        },
        m = function() {
            return++l,
            n = e.length,
            r = o.length,
            n != u && ([].slice.call(e).forEach(d), u = n),
            r != c && ([].slice.call(o).forEach(d), c = r),
            console.info("outerres log startCheck: " + l),
            l == a ? p() : void t.setTimeout(m, 700)
        },
        p = function() {
            e = null,
            o = null,
            p._$logimg_ || (p._$logimg_ = new Image),
            s = s.map(function(e) {
                return [t._$logtarget_, ["logtype=" + i, "link=" + e.link, "host=" + e.host, "pathname=" + t._$logpn_, "deviceid=" + t._$logdi_, "scheme=" + e.scheme, "path=" + e.path, "location=" + t._$logcurloc_].join("&")].join("?")
            }),
            s.length && !p._$timer_ && (t._$logsend_(p._$logimg_, s.shift()), p._$timer_ = t.setInterval(function() {
                return s.length ? void t._$logsend_(p._$logimg_, s.shift()) : (t.clearInterval(p._$timer_), delete p._$timer_)
            },
            t._$loggaptime_))
        };
        t.setTimeout(_, t._$logouterresgap_),
        t._$logouter_onload_func_._$triggered_ = !0
    }
},
window.addEventListener("load", window._$logouter_onload_func_, !1),
window.addEventListener("load",
function() {
    var t, e, o, n, r = window,
    i = "resfailed",
    a = [],
    l = [];
    t = document.getElementsByTagName("link"),
    e = document.getElementsByTagName("script");
    for (var u = 0,
    c = Math.max(t.length, e.length); c > u; u++) t[u] && "stylesheet" == t[u].getAttribute("rel") && (o = t[u].getAttribute("href")) && a.push(r._$logutil_.trimquery(o)),
    e[u] && (o = e[u].getAttribute("src")) && l.push(r._$logutil_.trimquery(o));
    try {
        if (!performance.getEntriesByType) return;
        n = performance.getEntriesByType("resource")
    } catch(s) {
        n = []
    }
    if (n.length) {
        var _ = [];
        n.forEach(function(t) { ("link" == t.initiatorType || "script" == t.initiatorType) && _.push(r._$logutil_.trimquery(t.name))
        });
        var g = a.concat(l).map(function(t) {
            return {
                val: t,
                state: !1
            }
        });
        g.forEach(function(t) {
            _.some(function(e) {
                return~e.indexOf(t.val) && (t.state = !0)
            })
        });
        var d = function() {
            for (var t = 0,
            e = [], o = g.length; o > t; t++) ! g[t].state && e.push(g[t].val);
            return e = e.map(function(t) {
                var e = r._$logutil_.urlParser(t);
                return {
                    link: encodeURIComponent(t),
                    host: encodeURIComponent((e.port ? [e.host, e.port] : [e.host]).join(":")),
                    scheme: encodeURIComponent(e.scheme),
                    path: encodeURIComponent(e.path)
                }
            })
        } (),
        m = function() {
            t = null,
            e = null,
            m._$logimg_ || (m._$logimg_ = new Image),
            d = d.map(function(t) {
                return [r._$logtarget_, ["logtype=" + i, "link=" + t.link, "host=" + t.host, "pathname=" + r._$logpn_, "deviceid=" + r._$logdi_, "scheme=" + t.scheme, "path=" + t.path, "location=" + r._$logcurloc_].join("&")].join("?")
            }),
            d.length && !m._$timer_ && (r._$logsend_(m._$logimg_, d.shift()), m._$timer_ = r.setInterval(function() {
                return d.length ? void r._$logsend_(m._$logimg_, d.shift()) : (r.clearInterval(m._$timer_), delete m._$timer_)
            },
            r._$loggaptime_))
        };
        r.setTimeout(m, r._$logreserrorgap_)
    }
}),
!
function() {
    function t() {
        var t = "",
        e = "";
        try {
            t = window.screen.width,
            e = window.screen.height
        } catch(o) {}
        return t + "*" + e
    }
    function e() {
        var t = "Android";
        return c.match(/(Android)\s+([\d.]+)/) ? "Android_" + c.match(/(Android)\s+([\d.]+)/)[2] : c.match(/(iPad).*OS\s([\d_]+)/) || c.match(/(iPhone\sOS)\s([\d_]+)/) ? t = "iOS_" + (c.match(/(iPad).*OS\s([\d_]+)/) ? c.match(/(iPad).*OS\s([\d_]+)/)[2] : c.match(/(iPhone\sOS)\s([\d_]+)/)[2]) : c.match(/Windows Phone/) ? t = "WP": t
    }
    function o() {
        var t, e, o = navigator.userAgent.toLowerCase(),
        n = {};
        try {
            if (e = o.match(/(?:newsarticle|safari|chrome|msie|micromessenger)[\/: ]([\d.]+)/), e = e ? e[1] : "0", n = {
                version: e,
                safari: /version.+safari/.test(o) || /safari[\/ ]+([\d.]+)/.test(o),
                chrome: /chrome\/([\d.]+)/.test(o) || /crios\/([\d.]+)/.test(o),
                ie: /msie/.test(o) || /trident/.test(o),
                tt: /newsarticle/.test(o),
                uc: /ucbrowser\/([\d.]+)/.test(o),
                qq: /qqbrowser/.test(o),
                wx: /micromessenger/.test(o),
                facebook: /fban/.test(o),
                twitter: /twitter/.test(o)
            },
            t = n.version.split(".")[0], n.uc) return t = o.match(/ucbrowser\/([\d.]+)/)[1],
            "UC_" + t;
            if (n.qq) return t = o.match(/qqbrowser\/([\d.]+)/)[1],
            "QQ_" + t;
            if (n.tt) return t = o.match(/newsarticle\/([\d.]+)/)[1],
            "toutiao_" + t;
            if (n.chrome) return t = o.match(/chrome\/([\d.]+)/)[1],
            "chrome_" + t;
            if (n.wx) return t = o.match(/micromessenger\/([\d.]+)/)[1],
            "weixin_" + t;
            if (n.safari) {
                if (o.match(/android/)) return "Webkit_" + o.match(/webkit\/([\d.]+)/)[1];
                try {
                    o.match(/(?:version)[\/: ]([\d.]+)/) && (t = o.match(/(?:version)[\/: ]([\d.]+)/)[1])
                } catch(r) {}
                return "safari_" + t
            }
            if (n.ie) return o.indexOf("rv:11") > -1 && (t = "11"),
            "IE_" + t;
            if (n.facebook) return "facebook";
            if (n.twitter) return "twitter"
        } catch(i) {
            return "unkonw"
        }
        return "unkonw"
    }
    function r() {
        var t = c.match(/NetType\/([^\s]*)/i),
        e = "WIFI";
        return t && (e = t[1]),
        e
    }
    function i() {
        var t = localStorage._ta;
        if (!t) {
            var e = Math.random(),
            o = +new Date;
            t = "TA." + e + "." + o,
            localStorage._ta = t
        }
        return t
    }
    function a(t) {
        t = t || {};
        for (n in s) t[n] = s[n];
        var e = [];
        for (k in t) e.push(k + "=" + t[k]);
        var o = new Image,
        r = u + "?" + e.join("&");
        console.log("performance: ", r),
        o.src = r
    }
    function l() {
        var n = {
            screen: t(),
            dpr: devicePixelRatio,
            net_type: r(),
            iframes: document.querySelectorAll("iframe").length,
            system: e(),
            browser: o(),
            event: "pv"
        };
        try {
            if ("object" == typeof performance) {
                var i = performance.timing;
                n.redirect_count = performance.navigation.redirectCount,
                n.redirect = i.redirectEnd - i.redirectStart,
                n.dns = i.domainLookupEnd - i.domainLookupStart,
                n.tcp = i.connectEnd - i.connectStart,
                n.request = i.responseStart - i.requestStart,
                n.response = i.responseEnd - i.responseStart,
                n.processing = i.domComplete - i.domLoading,
                n.blank = i.responseEnd - i.navigationStart,
                n.domready = i.domInteractive - i.navigationStart,
                n.load = i.loadEventEnd - i.navigationStart
            }
        } catch(l) {}
        a(n)
    }
    var u = window.location.protocol + "//www.toutiao.com/__utm.gif",
    c = navigator.userAgent,
    s = {};
    s.pathname = encodeURIComponent(location.pathname.replace(/\/(\d+)(\/)?$/, "/$id$2")),
    s.hostname = location.hostname,
    s._ta = i();
    for (var _ = document.querySelectorAll("meta"), g = 0; g < _.length; g++)"pathname" == _[g].name && (s.pathname = _[g].content);
    window.sendToutiaoGifLog = a,
    window.addEventListener("load",
    function() {
        setTimeout(l, 1e3)
    },
    !1)
} ();