(function () {
    alert(123123);
    window.CKEDITOR && window.CKEDITOR.dom || (window.CKEDITOR || (window.CKEDITOR = function () {
        var e = /(^|.*[\\\/])ckeditor\.js(?:\?.*|;.*)?$/i, t = {
            timestamp: "F0UE",
            version: "4.4.7",
            revision: "3a35b3d",
            rnd: Math.floor(900 * Math.random()) + 100,
            _: {pending: [], basePathSrcPattern: e},
            status: "unloaded",
            basePath: function () {
                var t = window.CKEDITOR_BASEPATH || "";
                if (!t)for (var n = document.getElementsByTagName("script"), i = 0; i < n.length; i++) {
                    var o = n[i].src.match(e);
                    if (o) {
                        t = o[1];
                        break
                    }
                }
                if (-1 == t.indexOf(":/") && "//" != t.slice(0, 2) && (t = 0 === t.indexOf("/") ? location.href.match(/^.*?:\/\/[^\/]*/)[0] + t : location.href.match(/^[^\?]*\/(?:)/)[0] + t), !t)throw'The CKEditor installation path could not be automatically detected. Please set the global variable "CKEDITOR_BASEPATH" before creating editor instances.';
                return t
            }(),
            getUrl: function (e) {
                return -1 == e.indexOf(":/") && 0 !== e.indexOf("/") && (e = this.basePath + e), this.timestamp && "/" != e.charAt(e.length - 1) && !/[&?]t=/.test(e) && (e += (e.indexOf("?") >= 0 ? "&" : "?") + "t=" + this.timestamp), e
            },
            domReady: function () {
                function e() {
                    try {
                        document.addEventListener ? (document.removeEventListener("DOMContentLoaded", e, !1), t()) : document.attachEvent && "complete" === document.readyState && (document.detachEvent("onreadystatechange", e), t())
                    } catch (n) {
                    }
                }

                function t() {
                    for (var e; e = n.shift();)e()
                }

                var n = [];
                return function (t) {
                    function i() {
                        try {
                            document.documentElement.doScroll("left")
                        } catch (t) {
                            return void setTimeout(i, 1)
                        }
                        e()
                    }

                    if (n.push(t), "complete" === document.readyState && setTimeout(e, 1), 1 == n.length)if (document.addEventListener) document.addEventListener("DOMContentLoaded", e, !1), window.addEventListener("load", e, !1); else if (document.attachEvent) {
                        document.attachEvent("onreadystatechange", e), window.attachEvent("onload", e);
                        var o = !1;
                        try {
                            o = !window.frameElement
                        } catch (r) {
                        }
                        document.documentElement.doScroll && o && i()
                    }
                }
            }()
        }, n = window.CKEDITOR_GETURL;
        if (n) {
            var i = t.getUrl;
            t.getUrl = function (e) {
                return n.call(t, e) || i.call(t, e)
            }
        }
        return t
    }()), CKEDITOR.event || (CKEDITOR.event = function () {
    }, CKEDITOR.event.implementOn = function (e) {
        var t = CKEDITOR.event.prototype;
        for (var n in t)null == e[n] && (e[n] = t[n])
    }, CKEDITOR.event.prototype = function () {
        function e(e) {
            var i = t(this);
            return i[e] || (i[e] = new n(e))
        }

        var t = function (e) {
            var t = e.getPrivate && e.getPrivate() || e._ || (e._ = {});
            return t.events || (t.events = {})
        }, n = function (e) {
            this.name = e, this.listeners = []
        };
        return n.prototype = {
            getListenerIndex: function (e) {
                for (var t = 0, n = this.listeners; t < n.length; t++)if (n[t].fn == e)return t;
                return -1
            }
        }, {
            define: function (t, n) {
                var i = e.call(this, t);
                CKEDITOR.tools.extend(i, n, !0)
            }, on: function (t, n, i, o, r) {
                function a(e, r, a, l) {
                    var c = {
                        name: t,
                        sender: this,
                        editor: e,
                        data: r,
                        listenerData: o,
                        stop: a,
                        cancel: l,
                        removeListener: s
                    }, d = n.call(i, c);
                    return d === !1 ? !1 : c.data
                }

                function s() {
                    d.removeListener(t, n)
                }

                var l = e.call(this, t);
                if (l.getListenerIndex(n) < 0) {
                    var c = l.listeners;
                    i || (i = this), isNaN(r) && (r = 10);
                    var d = this;
                    a.fn = n, a.priority = r;
                    for (var u = c.length - 1; u >= 0; u--)if (c[u].priority <= r)return c.splice(u + 1, 0, a), {removeListener: s};
                    c.unshift(a)
                }
                return {removeListener: s}
            }, once: function () {
                var e = Array.prototype.slice.call(arguments), t = e[1];
                return e[1] = function (e) {
                    return e.removeListener(), t.apply(this, arguments)
                }, this.on.apply(this, e)
            }, capture: function () {
                CKEDITOR.event.useCapture = 1;
                var e = this.on.apply(this, arguments);
                return CKEDITOR.event.useCapture = 0, e
            }, fire: function () {
                var e = 0, n = function () {
                    e = 1
                }, i = 0, o = function () {
                    i = 1
                };
                return function (r, a, s) {
                    var l = t(this)[r], c = e, d = i;
                    if (e = i = 0, l) {
                        var u = l.listeners;
                        if (u.length) {
                            u = u.slice(0);
                            for (var h, f = 0; f < u.length; f++) {
                                if (l.errorProof)try {
                                    h = u[f].call(this, s, a, n, o)
                                } catch (m) {
                                } else h = u[f].call(this, s, a, n, o);
                                if (h === !1 ? i = 1 : "undefined" != typeof h && (a = h), e || i)break
                            }
                        }
                    }
                    var E = i ? !1 : "undefined" == typeof a ? !0 : a;
                    return e = c, i = d, E
                }
            }(), fireOnce: function (e, n, i) {
                var o = this.fire(e, n, i);
                return delete t(this)[e], o
            }, removeListener: function (e, n) {
                var i = t(this)[e];
                if (i) {
                    var o = i.getListenerIndex(n);
                    o >= 0 && i.listeners.splice(o, 1)
                }
            }, removeAllListeners: function () {
                var e = t(this);
                for (var n in e)delete e[n]
            }, hasListeners: function (e) {
                var n = t(this)[e];
                return n && n.listeners.length > 0
            }
        }
    }()), CKEDITOR.editor || (CKEDITOR.editor = function () {
        CKEDITOR._.pending.push([this, arguments]), CKEDITOR.event.call(this)
    }, CKEDITOR.editor.prototype.fire = function (e, t) {
        return e in {
            instanceReady: 1,
            loaded: 1
        } && (this[e] = !0), CKEDITOR.event.prototype.fire.call(this, e, t, this)
    }, CKEDITOR.editor.prototype.fireOnce = function (e, t) {
        return e in {
            instanceReady: 1,
            loaded: 1
        } && (this[e] = !0), CKEDITOR.event.prototype.fireOnce.call(this, e, t, this)
    }, CKEDITOR.event.implementOn(CKEDITOR.editor.prototype)), CKEDITOR.env || (CKEDITOR.env = function () {
        var e = navigator.userAgent.toLowerCase(), t = {
            ie: e.indexOf("trident/") > -1,
            webkit: e.indexOf(" applewebkit/") > -1,
            air: e.indexOf(" adobeair/") > -1,
            mac: e.indexOf("macintosh") > -1,
            quirks: "BackCompat" == document.compatMode && (!document.documentMode || document.documentMode < 10),
            mobile: e.indexOf("mobile") > -1,
            iOS: /(ipad|iphone|ipod)/.test(e),
            isCustomDomain: function () {
                if (!this.ie)return !1;
                var e = document.domain, t = window.location.hostname;
                return e != t && e != "[" + t + "]"
            },
            secure: "https:" == location.protocol
        };
        t.gecko = "Gecko" == navigator.product && !t.webkit && !t.ie, t.webkit && (e.indexOf("chrome") > -1 ? t.chrome = !0 : t.safari = !0);
        var n = 0;
        if (t.ie && (n = t.quirks || !document.documentMode ? parseFloat(e.match(/msie (\d+)/)[1]) : document.documentMode, t.ie9Compat = 9 == n, t.ie8Compat = 8 == n, t.ie7Compat = 7 == n, t.ie6Compat = 7 > n || t.quirks), t.gecko) {
            var i = e.match(/rv:([\d\.]+)/);
            i && (i = i[1].split("."), n = 1e4 * i[0] + 100 * (i[1] || 0) + 1 * (i[2] || 0))
        }
        return t.air && (n = parseFloat(e.match(/ adobeair\/(\d+)/)[1])), t.webkit && (n = parseFloat(e.match(/ applewebkit\/(\d+)/)[1])), t.version = n, t.isCompatible = t.iOS && n >= 534 || !t.mobile && (t.ie && n > 6 || t.gecko && n >= 2e4 || t.air && n >= 1 || t.webkit && n >= 522 || !1), t.hidpi = window.devicePixelRatio >= 2, t.needsBrFiller = t.gecko || t.webkit || t.ie && n > 10, t.needsNbspFiller = t.ie && 11 > n, t.cssClass = "cke_browser_" + (t.ie ? "ie" : t.gecko ? "gecko" : t.webkit ? "webkit" : "unknown"), t.quirks && (t.cssClass += " cke_browser_quirks"), t.ie && (t.cssClass += " cke_browser_ie" + (t.quirks ? "6 cke_browser_iequirks" : t.version)), t.air && (t.cssClass += " cke_browser_air"), t.iOS && (t.cssClass += " cke_browser_ios"), t.hidpi && (t.cssClass += " cke_hidpi"), t
    }()), "unloaded" == CKEDITOR.status && !function () {
        CKEDITOR.event.implementOn(CKEDITOR), CKEDITOR.loadFullCore = function () {
            if ("basic_ready" != CKEDITOR.status)return void(CKEDITOR.loadFullCore._load = 1);
            delete CKEDITOR.loadFullCore;
            var e = document.createElement("script");
            e.type = "text/javascript", e.src = CKEDITOR.basePath + "ckeditor.js", document.getElementsByTagName("head")[0].appendChild(e)
        }, CKEDITOR.loadFullCoreTimeout = 0, CKEDITOR.add = function (e) {
            var t = this._.pending || (this._.pending = []);
            t.push(e)
        }, function () {
            var e = function () {
                var e = CKEDITOR.loadFullCore, t = CKEDITOR.loadFullCoreTimeout;
                e && (CKEDITOR.status = "basic_ready", e && e._load ? e() : t && setTimeout(function () {
                        CKEDITOR.loadFullCore && CKEDITOR.loadFullCore()
                    }, 1e3 * t))
            };
            CKEDITOR.domReady(e)
        }(), CKEDITOR.status = "basic_loaded"
    }(), CKEDITOR.dom = {}, function () {
        var e = [], t = CKEDITOR.env.gecko ? "-moz-" : CKEDITOR.env.webkit ? "-webkit-" : CKEDITOR.env.ie ? "-ms-" : "",
            n = /&/g, i = />/g, o = /</g, r = /"/g, a = /&amp;/g, s = /&gt;/g, l = /&lt;/g, c = /&quot;/g;
        CKEDITOR.on("reset", function () {
            e = []
        }), CKEDITOR.tools = {
            arrayCompare: function (e, t) {
                if (!e && !t)return !0;
                if (!e || !t || e.length != t.length)return !1;
                for (var n = 0; n < e.length; n++)if (e[n] != t[n])return !1;
                return !0
            },
            clone: function (e) {
                var t;
                if (e && e instanceof Array) {
                    t = [];
                    for (var n = 0; n < e.length; n++)t[n] = CKEDITOR.tools.clone(e[n]);
                    return t
                }
                if (null === e || "object" != typeof e || e instanceof String || e instanceof Number || e instanceof Boolean || e instanceof Date || e instanceof RegExp)return e;
                if (e.nodeType || e.window === e)return e;
                t = new e.constructor;
                for (var i in e) {
                    var o = e[i];
                    t[i] = CKEDITOR.tools.clone(o)
                }
                return t
            },
            capitalize: function (e, t) {
                return e.charAt(0).toUpperCase() + (t ? e.slice(1) : e.slice(1).toLowerCase())
            },
            extend: function (e) {
                var t, n, i = arguments.length;
                "boolean" == typeof(t = arguments[i - 1]) ? i-- : "boolean" == typeof(t = arguments[i - 2]) && (n = arguments[i - 1], i -= 2);
                for (var o = 1; i > o; o++) {
                    var r = arguments[o];
                    for (var a in r)(t === !0 || null == e[a]) && (!n || a in n) && (e[a] = r[a])
                }
                return e
            },
            prototypedCopy: function (e) {
                var t = function () {
                };
                return t.prototype = e, new t
            },
            copy: function (e) {
                var t, n = {};
                for (t in e)n[t] = e[t];
                return n
            },
            isArray: function (e) {
                return "[object Array]" == Object.prototype.toString.call(e)
            },
            isEmpty: function (e) {
                for (var t in e)if (e.hasOwnProperty(t))return !1;
                return !0
            },
            cssVendorPrefix: function (e, n, i) {
                if (i)return t + e + ":" + n + ";" + e + ":" + n;
                var o = {};
                return o[e] = n, o[t + e] = n, o
            },
            cssStyleToDomStyle: function () {
                var e = document.createElement("div").style,
                    t = "undefined" != typeof e.cssFloat ? "cssFloat" : "undefined" != typeof e.styleFloat ? "styleFloat" : "float";
                return function (e) {
                    return "float" == e ? t : e.replace(/-./g, function (e) {
                        return e.substr(1).toUpperCase()
                    })
                }
            }(),
            buildStyleHtml: function (e) {
                e = [].concat(e);
                for (var t, n = [], i = 0; i < e.length; i++)(t = e[i]) && n.push(/@import|[{}]/.test(t) ? "<style>" + t + "</style>" : '<link type="text/css" rel=stylesheet href="' + t + '">');
                return n.join("")
            },
            htmlEncode: function (e) {
                return String(e).replace(n, "&amp;").replace(i, "&gt;").replace(o, "&lt;")
            },
            htmlDecode: function (e) {
                return e.replace(a, "&").replace(s, ">").replace(l, "<")
            },
            htmlEncodeAttr: function (e) {
                return e.replace(r, "&quot;").replace(o, "&lt;").replace(i, "&gt;")
            },
            htmlDecodeAttr: function (e) {
                return e.replace(c, '"').replace(l, "<").replace(s, ">")
            },
            getNextNumber: function () {
                var e = 0;
                return function () {
                    return ++e
                }
            }(),
            getNextId: function () {
                return "cke_" + this.getNextNumber()
            },
            override: function (e, t) {
                var n = t(e);
                return n.prototype = e.prototype, n
            },
            setTimeout: function (e, t, n, i, o) {
                return o || (o = window), n || (n = o), o.setTimeout(function () {
                    i ? e.apply(n, [].concat(i)) : e.apply(n)
                }, t || 0)
            },
            trim: function () {
                var e = /(?:^[ \t\n\r]+)|(?:[ \t\n\r]+$)/g;
                return function (t) {
                    return t.replace(e, "")
                }
            }(),
            ltrim: function () {
                var e = /^[ \t\n\r]+/g;
                return function (t) {
                    return t.replace(e, "")
                }
            }(),
            rtrim: function () {
                var e = /[ \t\n\r]+$/g;
                return function (t) {
                    return t.replace(e, "")
                }
            }(),
            indexOf: function (e, t) {
                if ("function" == typeof t) {
                    for (var n = 0, i = e.length; i > n; n++)if (t(e[n]))return n
                } else {
                    if (e.indexOf)return e.indexOf(t);
                    for (n = 0, i = e.length; i > n; n++)if (e[n] === t)return n
                }
                return -1
            },
            search: function (e, t) {
                var n = CKEDITOR.tools.indexOf(e, t);
                return n >= 0 ? e[n] : null
            },
            bind: function (e, t) {
                return function () {
                    return e.apply(t, arguments)
                }
            },
            createClass: function (e) {
                var t = e.$, n = e.base, i = e.privates || e._, o = e.proto, r = e.statics;
                if (!t && (t = function () {
                        n && this.base.apply(this, arguments)
                    }), i) {
                    var a = t;
                    t = function () {
                        var e = this._ || (this._ = {});
                        for (var t in i) {
                            var n = i[t];
                            e[t] = "function" == typeof n ? CKEDITOR.tools.bind(n, this) : n
                        }
                        a.apply(this, arguments)
                    }
                }
                return n && (t.prototype = this.prototypedCopy(n.prototype), t.prototype.constructor = t, t.base = n, t.baseProto = n.prototype, t.prototype.base = function () {
                    this.base = n.prototype.base, n.apply(this, arguments), this.base = arguments.callee
                }), o && this.extend(t.prototype, o, !0), r && this.extend(t, r, !0), t
            },
            addFunction: function (t, n) {
                return e.push(function () {
                        return t.apply(n || this, arguments)
                    }) - 1
            },
            removeFunction: function (t) {
                e[t] = null
            },
            callFunction: function (t) {
                var n = e[t];
                return n && n.apply(window, Array.prototype.slice.call(arguments, 1))
            },
            cssLength: function () {
                var e, t = /^-?\d+\.?\d*px$/;
                return function (n) {
                    return e = CKEDITOR.tools.trim(n + "") + "px", t.test(e) ? e : n || ""
                }
            }(),
            convertToPx: function () {
                var e;
                return function (t) {
                    return e || (e = CKEDITOR.dom.element.createFromHtml('<div style="position:absolute;left:-9999px;top:-9999px;margin:0px;padding:0px;border:0px;"></div>', CKEDITOR.document), CKEDITOR.document.getBody().append(e)), /%$/.test(t) ? t : (e.setStyle("width", t), e.$.clientWidth)
                }
            }(),
            repeat: function (e, t) {
                return new Array(t + 1).join(e)
            },
            tryThese: function () {
                for (var e, t = 0, n = arguments.length; n > t; t++) {
                    var i = arguments[t];
                    try {
                        e = i();
                        break
                    } catch (o) {
                    }
                }
                return e
            },
            genKey: function () {
                return Array.prototype.slice.call(arguments).join("-")
            },
            defer: function (e) {
                return function () {
                    var t = arguments, n = this;
                    window.setTimeout(function () {
                        e.apply(n, t)
                    }, 0)
                }
            },
            normalizeCssText: function (e, t) {
                var n, i = [], o = CKEDITOR.tools.parseCssText(e, !0, t);
                for (n in o)i.push(n + ":" + o[n]);
                return i.sort(), i.length ? i.join(";") + ";" : ""
            },
            convertRgbToHex: function (e) {
                return e.replace(/(?:rgb\(\s*(\d+)\s*,\s*(\d+)\s*,\s*(\d+)\s*\))/gi, function (e, t, n, i) {
                    for (var o = [t, n, i], r = 0; 3 > r; r++)o[r] = ("0" + parseInt(o[r], 10).toString(16)).slice(-2);
                    return "#" + o.join("")
                })
            },
            parseCssText: function (e, t, n) {
                var i = {};
                if (n) {
                    var o = new CKEDITOR.dom.element("span");
                    o.setAttribute("style", e), e = CKEDITOR.tools.convertRgbToHex(o.getAttribute("style") || "")
                }
                return e && ";" != e ? (e.replace(/&quot;/g, '"').replace(/\s*([^:;\s]+)\s*:\s*([^;]+)\s*(?=;|$)/g, function (e, n, o) {
                    t && (n = n.toLowerCase(), "font-family" == n && (o = o.toLowerCase().replace(/["']/g, "").replace(/\s*,\s*/g, ",")), o = CKEDITOR.tools.trim(o)), i[n] = o
                }), i) : i
            },
            writeCssText: function (e, t) {
                var n, i = [];
                for (n in e)i.push(n + ":" + e[n]);
                return t && i.sort(), i.join("; ")
            },
            objectCompare: function (e, t, n) {
                var i;
                if (!e && !t)return !0;
                if (!e || !t)return !1;
                for (i in e)if (e[i] != t[i])return !1;
                if (!n)for (i in t)if (e[i] != t[i])return !1;
                return !0
            },
            objectKeys: function (e) {
                var t = [];
                for (var n in e)t.push(n);
                return t
            },
            convertArrayToObject: function (e, t) {
                var n = {};
                1 == arguments.length && (t = !0);
                for (var i = 0, o = e.length; o > i; ++i)n[e[i]] = t;
                return n
            },
            fixDomain: function () {
                for (var e; ;)try {
                    e = window.parent.document.domain;
                    break
                } catch (t) {
                    if (e = e ? e.replace(/.+?(?:\.|$)/, "") : document.domain, !e)break;
                    document.domain = e
                }
                return !!e
            },
            eventsBuffer: function (e, t) {
                function n() {
                    o = (new Date).getTime(), i = !1, t()
                }

                var i, o = 0;
                return {
                    input: function () {
                        if (!i) {
                            var t = (new Date).getTime() - o;
                            e > t ? i = setTimeout(n, e - t) : n()
                        }
                    }, reset: function () {
                        i && clearTimeout(i), i = o = 0
                    }
                }
            },
            enableHtml5Elements: function (e, t) {
                for (var n, i = "abbr,article,aside,audio,bdi,canvas,data,datalist,details,figcaption,figure,footer,header,hgroup,mark,meter,nav,output,progress,section,summary,time,video".split(","), o = i.length; o--;)n = e.createElement(i[o]), t && e.appendChild(n)
            },
            checkIfAnyArrayItemMatches: function (e, t) {
                for (var n = 0, i = e.length; i > n; ++n)if (e[n].match(t))return !0;
                return !1
            },
            checkIfAnyObjectPropertyMatches: function (e, t) {
                for (var n in e)if (n.match(t))return !0;
                return !1
            },
            transparentImageData: "data:image/gif;base64,R0lGODlhAQABAPABAP///wAAACH5BAEKAAAALAAAAAABAAEAAAICRAEAOw=="
        }
    }(), CKEDITOR.dtd = function () {
        "use strict";
        var e = CKEDITOR.tools.extend, t = function (e, t) {
                for (var n = CKEDITOR.tools.clone(e), i = 1; i < arguments.length; i++) {
                    t = arguments[i];
                    for (var o in t)delete n[o]
                }
                return n
            }, n = {}, i = {}, o = {
                a: 1,
                abbr: 1,
                area: 1,
                audio: 1,
                b: 1,
                bdi: 1,
                bdo: 1,
                br: 1,
                button: 1,
                canvas: 1,
                cite: 1,
                code: 1,
                command: 1,
                datalist: 1,
                del: 1,
                dfn: 1,
                em: 1,
                embed: 1,
                i: 1,
                iframe: 1,
                img: 1,
                input: 1,
                ins: 1,
                kbd: 1,
                keygen: 1,
                label: 1,
                map: 1,
                mark: 1,
                meter: 1,
                noscript: 1,
                object: 1,
                output: 1,
                progress: 1,
                q: 1,
                ruby: 1,
                s: 1,
                samp: 1,
                script: 1,
                select: 1,
                small: 1,
                span: 1,
                strong: 1,
                sub: 1,
                sup: 1,
                textarea: 1,
                time: 1,
                u: 1,
                "var": 1,
                video: 1,
                wbr: 1
            }, r = {
                address: 1,
                article: 1,
                aside: 1,
                blockquote: 1,
                details: 1,
                div: 1,
                dl: 1,
                fieldset: 1,
                figure: 1,
                footer: 1,
                form: 1,
                h1: 1,
                h2: 1,
                h3: 1,
                h4: 1,
                h5: 1,
                h6: 1,
                header: 1,
                hgroup: 1,
                hr: 1,
                main: 1,
                menu: 1,
                nav: 1,
                ol: 1,
                p: 1,
                pre: 1,
                section: 1,
                table: 1,
                ul: 1
            }, a = {command: 1, link: 1, meta: 1, noscript: 1, script: 1, style: 1}, s = {}, l = {"#": 1},
            c = {acronym: 1, applet: 1, basefont: 1, big: 1, font: 1, isindex: 1, strike: 1, style: 1, tt: 1},
            d = {center: 1, dir: 1, noframes: 1};
        e(n, o, l, c), e(i, r, n, d);
        var u = {
            a: t(n, {a: 1, button: 1}),
            abbr: n,
            address: i,
            area: s,
            article: i,
            aside: i,
            audio: e({source: 1, track: 1}, i),
            b: n,
            base: s,
            bdi: n,
            bdo: n,
            blockquote: i,
            body: i,
            br: s,
            button: t(n, {a: 1, button: 1}),
            canvas: n,
            caption: i,
            cite: n,
            code: n,
            col: s,
            colgroup: {col: 1},
            command: s,
            datalist: e({option: 1}, n),
            dd: i,
            del: n,
            details: e({summary: 1}, i),
            dfn: n,
            div: i,
            dl: {dt: 1, dd: 1},
            dt: i,
            em: n,
            embed: s,
            fieldset: e({legend: 1}, i),
            figcaption: i,
            figure: e({figcaption: 1}, i),
            footer: i,
            form: i,
            h1: n,
            h2: n,
            h3: n,
            h4: n,
            h5: n,
            h6: n,
            head: e({title: 1, base: 1}, a),
            header: i,
            hgroup: {h1: 1, h2: 1, h3: 1, h4: 1, h5: 1, h6: 1},
            hr: s,
            html: e({head: 1, body: 1}, i, a),
            i: n,
            iframe: l,
            img: s,
            input: s,
            ins: n,
            kbd: n,
            keygen: s,
            label: n,
            legend: n,
            li: i,
            link: s,
            main: i,
            map: i,
            mark: n,
            menu: e({li: 1}, i),
            meta: s,
            meter: t(n, {meter: 1}),
            nav: i,
            noscript: e({link: 1, meta: 1, style: 1}, n),
            object: e({param: 1}, n),
            ol: {li: 1},
            optgroup: {option: 1},
            option: l,
            output: n,
            p: n,
            param: s,
            pre: n,
            progress: t(n, {progress: 1}),
            q: n,
            rp: n,
            rt: n,
            ruby: e({rp: 1, rt: 1}, n),
            s: n,
            samp: n,
            script: l,
            section: i,
            select: {optgroup: 1, option: 1},
            small: n,
            source: s,
            span: n,
            strong: n,
            style: l,
            sub: n,
            summary: n,
            sup: n,
            table: {caption: 1, colgroup: 1, thead: 1, tfoot: 1, tbody: 1, tr: 1},
            tbody: {tr: 1},
            td: i,
            textarea: l,
            tfoot: {tr: 1},
            th: i,
            thead: {tr: 1},
            time: t(n, {time: 1}),
            title: l,
            tr: {th: 1, td: 1},
            track: s,
            u: n,
            ul: {li: 1},
            "var": n,
            video: e({source: 1, track: 1}, i),
            wbr: s,
            acronym: n,
            applet: e({param: 1}, i),
            basefont: s,
            big: n,
            center: i,
            dialog: s,
            dir: {li: 1},
            font: n,
            isindex: s,
            noframes: i,
            strike: n,
            tt: n
        };
        return e(u, {
            $block: e({audio: 1, dd: 1, dt: 1, figcaption: 1, li: 1, video: 1}, r, d),
            $blockLimit: {
                article: 1,
                aside: 1,
                audio: 1,
                body: 1,
                caption: 1,
                details: 1,
                dir: 1,
                div: 1,
                dl: 1,
                fieldset: 1,
                figcaption: 1,
                figure: 1,
                footer: 1,
                form: 1,
                header: 1,
                hgroup: 1,
                main: 1,
                menu: 1,
                nav: 1,
                ol: 1,
                section: 1,
                table: 1,
                td: 1,
                th: 1,
                tr: 1,
                ul: 1,
                video: 1
            },
            $cdata: {script: 1, style: 1},
            $editable: {
                address: 1,
                article: 1,
                aside: 1,
                blockquote: 1,
                body: 1,
                details: 1,
                div: 1,
                fieldset: 1,
                figcaption: 1,
                footer: 1,
                form: 1,
                h1: 1,
                h2: 1,
                h3: 1,
                h4: 1,
                h5: 1,
                h6: 1,
                header: 1,
                hgroup: 1,
                main: 1,
                nav: 1,
                p: 1,
                pre: 1,
                section: 1
            },
            $empty: {
                area: 1,
                base: 1,
                basefont: 1,
                br: 1,
                col: 1,
                command: 1,
                dialog: 1,
                embed: 1,
                hr: 1,
                img: 1,
                input: 1,
                isindex: 1,
                keygen: 1,
                link: 1,
                meta: 1,
                param: 1,
                source: 1,
                track: 1,
                wbr: 1
            },
            $inline: n,
            $list: {dl: 1, ol: 1, ul: 1},
            $listItem: {dd: 1, dt: 1, li: 1},
            $nonBodyContent: e({body: 1, head: 1, html: 1}, u.head),
            $nonEditable: {
                applet: 1,
                audio: 1,
                button: 1,
                embed: 1,
                iframe: 1,
                map: 1,
                object: 1,
                option: 1,
                param: 1,
                script: 1,
                textarea: 1,
                video: 1
            },
            $object: {
                applet: 1,
                audio: 1,
                button: 1,
                hr: 1,
                iframe: 1,
                img: 1,
                input: 1,
                object: 1,
                select: 1,
                table: 1,
                textarea: 1,
                video: 1
            },
            $removeEmpty: {
                abbr: 1,
                acronym: 1,
                b: 1,
                bdi: 1,
                bdo: 1,
                big: 1,
                cite: 1,
                code: 1,
                del: 1,
                dfn: 1,
                em: 1,
                font: 1,
                i: 1,
                ins: 1,
                label: 1,
                kbd: 1,
                mark: 1,
                meter: 1,
                output: 1,
                q: 1,
                ruby: 1,
                s: 1,
                samp: 1,
                small: 1,
                span: 1,
                strike: 1,
                strong: 1,
                sub: 1,
                sup: 1,
                time: 1,
                tt: 1,
                u: 1,
                "var": 1
            },
            $tabIndex: {a: 1, area: 1, button: 1, input: 1, object: 1, select: 1, textarea: 1},
            $tableContent: {caption: 1, col: 1, colgroup: 1, tbody: 1, td: 1, tfoot: 1, th: 1, thead: 1, tr: 1},
            $transparent: {a: 1, audio: 1, canvas: 1, del: 1, ins: 1, map: 1, noscript: 1, object: 1, video: 1},
            $intermediate: {
                caption: 1,
                colgroup: 1,
                dd: 1,
                dt: 1,
                figcaption: 1,
                legend: 1,
                li: 1,
                optgroup: 1,
                option: 1,
                rp: 1,
                rt: 1,
                summary: 1,
                tbody: 1,
                td: 1,
                tfoot: 1,
                th: 1,
                thead: 1,
                tr: 1
            }
        }), u
    }(), CKEDITOR.dom.event = function (e) {
        this.$ = e
    }, CKEDITOR.dom.event.prototype = {
        getKey: function () {
            return this.$.keyCode || this.$.which
        }, getKeystroke: function () {
            var e = this.getKey();
            return (this.$.ctrlKey || this.$.metaKey) && (e += CKEDITOR.CTRL), this.$.shiftKey && (e += CKEDITOR.SHIFT), this.$.altKey && (e += CKEDITOR.ALT), e
        }, preventDefault: function (e) {
            var t = this.$;
            t.preventDefault ? t.preventDefault() : t.returnValue = !1, e && this.stopPropagation()
        }, stopPropagation: function () {
            var e = this.$;
            e.stopPropagation ? e.stopPropagation() : e.cancelBubble = !0
        }, getTarget: function () {
            var e = this.$.target || this.$.srcElement;
            return e ? new CKEDITOR.dom.node(e) : null
        }, getPhase: function () {
            return this.$.eventPhase || 2
        }, getPageOffset: function () {
            var e = this.getTarget().getDocument().$,
                t = this.$.pageX || this.$.clientX + (e.documentElement.scrollLeft || e.body.scrollLeft),
                n = this.$.pageY || this.$.clientY + (e.documentElement.scrollTop || e.body.scrollTop);
            return {x: t, y: n}
        }
    }, CKEDITOR.CTRL = 1114112, CKEDITOR.SHIFT = 2228224, CKEDITOR.ALT = 4456448, CKEDITOR.EVENT_PHASE_CAPTURING = 1, CKEDITOR.EVENT_PHASE_AT_TARGET = 2, CKEDITOR.EVENT_PHASE_BUBBLING = 3, CKEDITOR.dom.domObject = function (e) {
        e && (this.$ = e)
    }, CKEDITOR.dom.domObject.prototype = function () {
        var e = function (e, t) {
            return function (n) {
                "undefined" != typeof CKEDITOR && e.fire(t, new CKEDITOR.dom.event(n))
            }
        };
        return {
            getPrivate: function () {
                var e;
                return (e = this.getCustomData("_")) || this.setCustomData("_", e = {}), e
            }, on: function (t) {
                var n = this.getCustomData("_cke_nativeListeners");
                if (n || (n = {}, this.setCustomData("_cke_nativeListeners", n)), !n[t]) {
                    var i = n[t] = e(this, t);
                    this.$.addEventListener ? this.$.addEventListener(t, i, !!CKEDITOR.event.useCapture) : this.$.attachEvent && this.$.attachEvent("on" + t, i)
                }
                return CKEDITOR.event.prototype.on.apply(this, arguments)
            }, removeListener: function (e) {
                if (CKEDITOR.event.prototype.removeListener.apply(this, arguments), !this.hasListeners(e)) {
                    var t = this.getCustomData("_cke_nativeListeners"), n = t && t[e];
                    n && (this.$.removeEventListener ? this.$.removeEventListener(e, n, !1) : this.$.detachEvent && this.$.detachEvent("on" + e, n), delete t[e])
                }
            }, removeAllListeners: function () {
                var e = this.getCustomData("_cke_nativeListeners");
                for (var t in e) {
                    var n = e[t];
                    this.$.detachEvent ? this.$.detachEvent("on" + t, n) : this.$.removeEventListener && this.$.removeEventListener(t, n, !1), delete e[t]
                }
                CKEDITOR.event.prototype.removeAllListeners.call(this)
            }
        }
    }(), function (e) {
        var t = {};
        CKEDITOR.on("reset", function () {
            t = {}
        }), e.equals = function (e) {
            try {
                return e && e.$ === this.$
            } catch (t) {
                return !1
            }
        }, e.setCustomData = function (e, n) {
            var i = this.getUniqueId(), o = t[i] || (t[i] = {});
            return o[e] = n, this
        }, e.getCustomData = function (e) {
            var n = this.$["data-cke-expando"], i = n && t[n];
            return i && e in i ? i[e] : null
        }, e.removeCustomData = function (e) {
            var n, i, o = this.$["data-cke-expando"], r = o && t[o];
            return r && (n = r[e], i = e in r, delete r[e]), i ? n : null
        }, e.clearCustomData = function () {
            this.removeAllListeners();
            var e = this.$["data-cke-expando"];
            e && delete t[e]
        }, e.getUniqueId = function () {
            return this.$["data-cke-expando"] || (this.$["data-cke-expando"] = CKEDITOR.tools.getNextNumber())
        }, CKEDITOR.event.implementOn(e)
    }(CKEDITOR.dom.domObject.prototype), CKEDITOR.dom.node = function (e) {
        if (e) {
            var t = e.nodeType == CKEDITOR.NODE_DOCUMENT ? "document" : e.nodeType == CKEDITOR.NODE_ELEMENT ? "element" : e.nodeType == CKEDITOR.NODE_TEXT ? "text" : e.nodeType == CKEDITOR.NODE_COMMENT ? "comment" : e.nodeType == CKEDITOR.NODE_DOCUMENT_FRAGMENT ? "documentFragment" : "domObject";
            return new CKEDITOR.dom[t](e)
        }
        return this
    }, CKEDITOR.dom.node.prototype = new CKEDITOR.dom.domObject, CKEDITOR.NODE_ELEMENT = 1, CKEDITOR.NODE_DOCUMENT = 9, CKEDITOR.NODE_TEXT = 3, CKEDITOR.NODE_COMMENT = 8, CKEDITOR.NODE_DOCUMENT_FRAGMENT = 11, CKEDITOR.POSITION_IDENTICAL = 0, CKEDITOR.POSITION_DISCONNECTED = 1, CKEDITOR.POSITION_FOLLOWING = 2, CKEDITOR.POSITION_PRECEDING = 4, CKEDITOR.POSITION_IS_CONTAINED = 8, CKEDITOR.POSITION_CONTAINS = 16, CKEDITOR.tools.extend(CKEDITOR.dom.node.prototype, {
        appendTo: function (e, t) {
            return e.append(this, t), e
        }, clone: function (e, t) {
            var n = this.$.cloneNode(e), i = function (n) {
                if (n["data-cke-expando"] && (n["data-cke-expando"] = !1), n.nodeType == CKEDITOR.NODE_ELEMENT && (t || n.removeAttribute("id", !1), e))for (var o = n.childNodes, r = 0; r < o.length; r++)i(o[r])
            };
            return i(n), new CKEDITOR.dom.node(n)
        }, hasPrevious: function () {
            return !!this.$.previousSibling
        }, hasNext: function () {
            return !!this.$.nextSibling
        }, insertAfter: function (e) {
            return e.$.parentNode.insertBefore(this.$, e.$.nextSibling), e
        }, insertBefore: function (e) {
            return e.$.parentNode.insertBefore(this.$, e.$), e
        }, insertBeforeMe: function (e) {
            return this.$.parentNode.insertBefore(e.$, this.$), e
        }, getAddress: function (e) {
            for (var t = [], n = this.getDocument().$.documentElement, i = this.$; i && i != n;) {
                var o = i.parentNode;
                o && t.unshift(this.getIndex.call({$: i}, e)), i = o
            }
            return t
        }, getDocument: function () {
            return new CKEDITOR.dom.document(this.$.ownerDocument || this.$.parentNode.ownerDocument)
        }, getIndex: function (e) {
            function t(e, n) {
                var i = n ? e.nextSibling : e.previousSibling;
                return i && i.nodeType == CKEDITOR.NODE_TEXT ? i.nodeValue ? i : t(i, n) : null
            }

            var n, i = this.$, o = -1;
            if (!this.$.parentNode)return -1;
            if (e && i.nodeType == CKEDITOR.NODE_TEXT && !i.nodeValue) {
                var r = t(i) || t(i, !0);
                if (!r)return -1
            }
            do(!e || i == this.$ || i.nodeType != CKEDITOR.NODE_TEXT || !n && i.nodeValue) && (o++, n = i.nodeType == CKEDITOR.NODE_TEXT); while (i = i.previousSibling);
            return o
        }, getNextSourceNode: function (e, t, n) {
            if (n && !n.call) {
                var i = n;
                n = function (e) {
                    return !e.equals(i)
                }
            }
            var o, r = !e && this.getFirst && this.getFirst();
            if (!r) {
                if (this.type == CKEDITOR.NODE_ELEMENT && n && n(this, !0) === !1)return null;
                r = this.getNext()
            }
            for (; !r && (o = (o || this).getParent());) {
                if (n && n(o, !0) === !1)return null;
                r = o.getNext()
            }
            return r ? n && n(r) === !1 ? null : t && t != r.type ? r.getNextSourceNode(!1, t, n) : r : null
        }, getPreviousSourceNode: function (e, t, n) {
            if (n && !n.call) {
                var i = n;
                n = function (e) {
                    return !e.equals(i)
                }
            }
            var o, r = !e && this.getLast && this.getLast();
            if (!r) {
                if (this.type == CKEDITOR.NODE_ELEMENT && n && n(this, !0) === !1)return null;
                r = this.getPrevious()
            }
            for (; !r && (o = (o || this).getParent());) {
                if (n && n(o, !0) === !1)return null;
                r = o.getPrevious()
            }
            return r ? n && n(r) === !1 ? null : t && r.type != t ? r.getPreviousSourceNode(!1, t, n) : r : null
        }, getPrevious: function (e) {
            var t, n = this.$;
            do n = n.previousSibling, t = n && 10 != n.nodeType && new CKEDITOR.dom.node(n); while (t && e && !e(t));
            return t
        }, getNext: function (e) {
            var t, n = this.$;
            do n = n.nextSibling, t = n && new CKEDITOR.dom.node(n); while (t && e && !e(t));
            return t
        }, getParent: function (e) {
            var t = this.$.parentNode;
            return t && (t.nodeType == CKEDITOR.NODE_ELEMENT || e && t.nodeType == CKEDITOR.NODE_DOCUMENT_FRAGMENT) ? new CKEDITOR.dom.node(t) : null
        }, getParents: function (e) {
            var t = this, n = [];
            do n[e ? "push" : "unshift"](t); while (t = t.getParent());
            return n
        }, getCommonAncestor: function (e) {
            if (e.equals(this))return this;
            if (e.contains && e.contains(this))return e;
            var t = this.contains ? this : this.getParent();
            do if (t.contains(e))return t; while (t = t.getParent());
            return null
        }, getPosition: function (e) {
            var t = this.$, n = e.$;
            if (t.compareDocumentPosition)return t.compareDocumentPosition(n);
            if (t == n)return CKEDITOR.POSITION_IDENTICAL;
            if (this.type == CKEDITOR.NODE_ELEMENT && e.type == CKEDITOR.NODE_ELEMENT) {
                if (t.contains) {
                    if (t.contains(n))return CKEDITOR.POSITION_CONTAINS + CKEDITOR.POSITION_PRECEDING;
                    if (n.contains(t))return CKEDITOR.POSITION_IS_CONTAINED + CKEDITOR.POSITION_FOLLOWING
                }
                if ("sourceIndex" in t)return t.sourceIndex < 0 || n.sourceIndex < 0 ? CKEDITOR.POSITION_DISCONNECTED : t.sourceIndex < n.sourceIndex ? CKEDITOR.POSITION_PRECEDING : CKEDITOR.POSITION_FOLLOWING
            }
            for (var i = this.getAddress(), o = e.getAddress(), r = Math.min(i.length, o.length), a = 0; r - 1 >= a; a++)if (i[a] != o[a]) {
                if (r > a)return i[a] < o[a] ? CKEDITOR.POSITION_PRECEDING : CKEDITOR.POSITION_FOLLOWING;
                break
            }
            return i.length < o.length ? CKEDITOR.POSITION_CONTAINS + CKEDITOR.POSITION_PRECEDING : CKEDITOR.POSITION_IS_CONTAINED + CKEDITOR.POSITION_FOLLOWING
        }, getAscendant: function (e, t) {
            var n, i, o = this.$;
            t || (o = o.parentNode), "function" == typeof e ? (i = !0, n = e) : (i = !1, n = function (t) {
                var n = "string" == typeof t.nodeName ? t.nodeName.toLowerCase() : "";
                return "string" == typeof e ? n == e : n in e
            });
            for (; o;) {
                if (n(i ? new CKEDITOR.dom.node(o) : o))return new CKEDITOR.dom.node(o);
                try {
                    o = o.parentNode
                } catch (r) {
                    o = null
                }
            }
            return null
        }, hasAscendant: function (e, t) {
            var n = this.$;
            for (t || (n = n.parentNode); n;) {
                if (n.nodeName && n.nodeName.toLowerCase() == e)return !0;
                n = n.parentNode
            }
            return !1
        }, move: function (e, t) {
            e.append(this.remove(), t)
        }, remove: function (e) {
            var t = this.$, n = t.parentNode;
            if (n) {
                if (e)for (var i; i = t.firstChild;)n.insertBefore(t.removeChild(i), t);
                n.removeChild(t)
            }
            return this
        }, replace: function (e) {
            this.insertBefore(e), e.remove()
        }, trim: function () {
            this.ltrim(), this.rtrim()
        }, ltrim: function () {
            for (var e; this.getFirst && (e = this.getFirst());) {
                if (e.type == CKEDITOR.NODE_TEXT) {
                    var t = CKEDITOR.tools.ltrim(e.getText()), n = e.getLength();
                    if (!t) {
                        e.remove();
                        continue
                    }
                    t.length < n && (e.split(n - t.length), this.$.removeChild(this.$.firstChild))
                }
                break
            }
        }, rtrim: function () {
            for (var e; this.getLast && (e = this.getLast());) {
                if (e.type == CKEDITOR.NODE_TEXT) {
                    var t = CKEDITOR.tools.rtrim(e.getText()), n = e.getLength();
                    if (!t) {
                        e.remove();
                        continue
                    }
                    t.length < n && (e.split(t.length), this.$.lastChild.parentNode.removeChild(this.$.lastChild))
                }
                break
            }
            CKEDITOR.env.needsBrFiller && (e = this.$.lastChild, e && 1 == e.type && "br" == e.nodeName.toLowerCase() && e.parentNode.removeChild(e))
        }, isReadOnly: function () {
            var e = this;
            if (this.type != CKEDITOR.NODE_ELEMENT && (e = this.getParent()), e && "undefined" != typeof e.$.isContentEditable)return !(e.$.isContentEditable || e.data("cke-editable"));
            for (; e && !e.data("cke-editable");) {
                if ("false" == e.getAttribute("contentEditable"))return !0;
                if ("true" == e.getAttribute("contentEditable"))break;
                e = e.getParent()
            }
            return !e
        }
    }), CKEDITOR.dom.window = function (e) {
        CKEDITOR.dom.domObject.call(this, e)
    }, CKEDITOR.dom.window.prototype = new CKEDITOR.dom.domObject, CKEDITOR.tools.extend(CKEDITOR.dom.window.prototype, {
        focus: function () {
            this.$.focus()
        }, getViewPaneSize: function () {
            var e = this.$.document, t = "CSS1Compat" == e.compatMode;
            return {
                width: (t ? e.documentElement.clientWidth : e.body.clientWidth) || 0,
                height: (t ? e.documentElement.clientHeight : e.body.clientHeight) || 0
            }
        }, getScrollPosition: function () {
            var e = this.$;
            if ("pageXOffset" in e)return {x: e.pageXOffset || 0, y: e.pageYOffset || 0};
            var t = e.document;
            return {
                x: t.documentElement.scrollLeft || t.body.scrollLeft || 0,
                y: t.documentElement.scrollTop || t.body.scrollTop || 0
            }
        }, getFrame: function () {
            var e = this.$.frameElement;
            return e ? new CKEDITOR.dom.element.get(e) : null
        }
    }), CKEDITOR.dom.document = function (e) {
        CKEDITOR.dom.domObject.call(this, e)
    }, CKEDITOR.dom.document.prototype = new CKEDITOR.dom.domObject, CKEDITOR.tools.extend(CKEDITOR.dom.document.prototype, {
        type: CKEDITOR.NODE_DOCUMENT,
        appendStyleSheet: function (e) {
            if (this.$.createStyleSheet) this.$.createStyleSheet(e); else {
                var t = new CKEDITOR.dom.element("link");
                t.setAttributes({rel: "stylesheet", type: "text/css", href: e}), this.getHead().append(t)
            }
        },
        appendStyleText: function (e) {
            if (this.$.createStyleSheet) {
                var t = this.$.createStyleSheet("");
                t.cssText = e
            } else {
                var n = new CKEDITOR.dom.element("style", this);
                n.append(new CKEDITOR.dom.text(e, this)), this.getHead().append(n)
            }
            return t || n.$.sheet
        },
        createElement: function (e, t) {
            var n = new CKEDITOR.dom.element(e, this);
            return t && (t.attributes && n.setAttributes(t.attributes), t.styles && n.setStyles(t.styles)), n
        },
        createText: function (e) {
            return new CKEDITOR.dom.text(e, this)
        },
        focus: function () {
            this.getWindow().focus()
        },
        getActive: function () {
            var e;
            try {
                e = this.$.activeElement
            } catch (t) {
                return null
            }
            return new CKEDITOR.dom.element(e)
        },
        getById: function (e) {
            var t = this.$.getElementById(e);
            return t ? new CKEDITOR.dom.element(t) : null
        },
        getByAddress: function (e, t) {
            for (var n = this.$.documentElement, i = 0; n && i < e.length; i++) {
                var o = e[i];
                if (t)for (var r = -1, a = 0; a < n.childNodes.length; a++) {
                    var s = n.childNodes[a];
                    if ((t !== !0 || 3 != s.nodeType || !s.previousSibling || 3 != s.previousSibling.nodeType) && (r++, r == o)) {
                        n = s;
                        break
                    }
                } else n = n.childNodes[o]
            }
            return n ? new CKEDITOR.dom.node(n) : null
        },
        getElementsByTag: function (e, t) {
            return CKEDITOR.env.ie && document.documentMode <= 8 || !t || (e = t + ":" + e), new CKEDITOR.dom.nodeList(this.$.getElementsByTagName(e))
        },
        getHead: function () {
            var e = this.$.getElementsByTagName("head")[0];
            return e = e ? new CKEDITOR.dom.element(e) : this.getDocumentElement().append(new CKEDITOR.dom.element("head"), !0)
        },
        getBody: function () {
            return new CKEDITOR.dom.element(this.$.body)
        },
        getDocumentElement: function () {
            return new CKEDITOR.dom.element(this.$.documentElement)
        },
        getWindow: function () {
            return new CKEDITOR.dom.window(this.$.parentWindow || this.$.defaultView)
        },
        write: function (e) {
            this.$.open("text/html", "replace"), CKEDITOR.env.ie && (e = e.replace(/(?:^\s*<!DOCTYPE[^>]*?>)|^/i, '$&\n<script data-cke-temp="1">(' + CKEDITOR.tools.fixDomain + ")();</script>")), this.$.write(e), this.$.close()
        },
        find: function (e) {
            return new CKEDITOR.dom.nodeList(this.$.querySelectorAll(e))
        },
        findOne: function (e) {
            var t = this.$.querySelector(e);
            return t ? new CKEDITOR.dom.element(t) : null
        },
        _getHtml5ShivFrag: function () {
            var e = this.getCustomData("html5ShivFrag");
            return e || (e = this.$.createDocumentFragment(), CKEDITOR.tools.enableHtml5Elements(e, !0), this.setCustomData("html5ShivFrag", e)), e
        }
    }), CKEDITOR.dom.nodeList = function (e) {
        this.$ = e
    }, CKEDITOR.dom.nodeList.prototype = {
        count: function () {
            return this.$.length
        }, getItem: function (e) {
            if (0 > e || e >= this.$.length)return null;
            var t = this.$[e];
            return t ? new CKEDITOR.dom.node(t) : null
        }
    }, CKEDITOR.dom.element = function (e, t) {
        "string" == typeof e && (e = (t ? t.$ : document).createElement(e)), CKEDITOR.dom.domObject.call(this, e)
    }, CKEDITOR.dom.element.get = function (e) {
        var t = "string" == typeof e ? document.getElementById(e) || document.getElementsByName(e)[0] : e;
        return t && (t.$ ? t : new CKEDITOR.dom.element(t))
    }, CKEDITOR.dom.element.prototype = new CKEDITOR.dom.node, CKEDITOR.dom.element.createFromHtml = function (e, t) {
        var n = new CKEDITOR.dom.element("div", t);
        return n.setHtml(e), n.getFirst().remove()
    }, CKEDITOR.dom.element.setMarker = function (e, t, n, i) {
        var o = t.getCustomData("list_marker_id") || t.setCustomData("list_marker_id", CKEDITOR.tools.getNextNumber()).getCustomData("list_marker_id"),
            r = t.getCustomData("list_marker_names") || t.setCustomData("list_marker_names", {}).getCustomData("list_marker_names");
        return e[o] = t, r[n] = 1, t.setCustomData(n, i)
    }, CKEDITOR.dom.element.clearAllMarkers = function (e) {
        for (var t in e)CKEDITOR.dom.element.clearMarkers(e, e[t], 1)
    }, CKEDITOR.dom.element.clearMarkers = function (e, t, n) {
        var i = t.getCustomData("list_marker_names"), o = t.getCustomData("list_marker_id");
        for (var r in i)t.removeCustomData(r);
        t.removeCustomData("list_marker_names"), n && (t.removeCustomData("list_marker_id"), delete e[o])
    }, function () {
        function e(e) {
            var t = !0;
            return e.$.id || (e.$.id = "cke_tmp_" + CKEDITOR.tools.getNextNumber(), t = !1), function () {
                t || e.removeAttribute("id")
            }
        }

        function t(e, t) {
            return "#" + e.$.id + " " + t.split(/,\s*/).join(", #" + e.$.id + " ")
        }

        function n(e) {
            var t, n = ["top", "left", "right", "bottom"];
            "border" == e && (t = ["color", "style", "width"]);
            for (var i = [], o = 0; o < n.length; o++)if (t)for (var r = 0; r < t.length; r++)i.push([e, n[o], t[r]].join("-")); else i.push([e, n[o]].join("-"));
            return i
        }

        function i(e) {
            for (var t = 0, n = 0, i = o[e].length; i > n; n++)t += parseInt(this.getComputedStyle(o[e][n]) || 0, 10) || 0;
            return t
        }

        CKEDITOR.tools.extend(CKEDITOR.dom.element.prototype, {
            type: CKEDITOR.NODE_ELEMENT,
            addClass: function (e) {
                var t = this.$.className;
                if (t) {
                    var n = new RegExp("(?:^|\\s)" + e + "(?:\\s|$)", "");
                    n.test(t) || (t += " " + e)
                }
                return this.$.className = t || e, this
            },
            removeClass: function (e) {
                var t = this.getAttribute("class");
                if (t) {
                    var n = new RegExp("(?:^|\\s+)" + e + "(?=\\s|$)", "i");
                    n.test(t) && (t = t.replace(n, "").replace(/^\s+/, ""), t ? this.setAttribute("class", t) : this.removeAttribute("class"))
                }
                return this
            },
            hasClass: function (e) {
                var t = new RegExp("(?:^|\\s+)" + e + "(?=\\s|$)", "");
                return t.test(this.getAttribute("class"))
            },
            append: function (e, t) {
                return "string" == typeof e && (e = this.getDocument().createElement(e)), t ? this.$.insertBefore(e.$, this.$.firstChild) : this.$.appendChild(e.$), e
            },
            appendHtml: function (e) {
                if (this.$.childNodes.length) {
                    var t = new CKEDITOR.dom.element("div", this.getDocument());
                    t.setHtml(e), t.moveChildren(this)
                } else this.setHtml(e)
            },
            appendText: function (e) {
                null != this.$.text ? this.$.text += e : this.append(new CKEDITOR.dom.text(e))
            },
            appendBogus: function (e) {
                if (e || CKEDITOR.env.needsBrFiller) {
                    for (var t = this.getLast(); t && t.type == CKEDITOR.NODE_TEXT && !CKEDITOR.tools.rtrim(t.getText());)t = t.getPrevious();
                    if (!t || !t.is || !t.is("br")) {
                        var n = this.getDocument().createElement("br");
                        CKEDITOR.env.gecko && n.setAttribute("type", "_moz"), this.append(n)
                    }
                }
            },
            breakParent: function (e) {
                var t = new CKEDITOR.dom.range(this.getDocument());
                t.setStartAfter(this), t.setEndAfter(e);
                var n = t.extractContents();
                t.insertNode(this.remove()), n.insertAfterNode(this)
            },
            contains: CKEDITOR.env.ie || CKEDITOR.env.webkit ? function (e) {
                var t = this.$;
                return e.type != CKEDITOR.NODE_ELEMENT ? t.contains(e.getParent().$) : t != e.$ && t.contains(e.$)
            } : function (e) {
                return !!(16 & this.$.compareDocumentPosition(e.$))
            },
            focus: function () {
                function e() {
                    try {
                        this.$.focus()
                    } catch (e) {
                    }
                }

                return function (t) {
                    t ? CKEDITOR.tools.setTimeout(e, 100, this) : e.call(this)
                }
            }(),
            getHtml: function () {
                var e = this.$.innerHTML;
                return CKEDITOR.env.ie ? e.replace(/<\?[^>]*>/g, "") : e
            },
            getOuterHtml: function () {
                if (this.$.outerHTML)return this.$.outerHTML.replace(/<\?[^>]*>/, "");
                var e = this.$.ownerDocument.createElement("div");
                return e.appendChild(this.$.cloneNode(!0)), e.innerHTML
            },
            getClientRect: function () {
                var e = CKEDITOR.tools.extend({}, this.$.getBoundingClientRect());
                return !e.width && (e.width = e.right - e.left), !e.height && (e.height = e.bottom - e.top), e
            },
            setHtml: CKEDITOR.env.ie && CKEDITOR.env.version < 9 ? function (e) {
                try {
                    var t = this.$;
                    if (this.getParent())return t.innerHTML = e;
                    var n = this.getDocument()._getHtml5ShivFrag();
                    return n.appendChild(t), t.innerHTML = e, n.removeChild(t), e
                } catch (i) {
                    this.$.innerHTML = "";
                    var o = new CKEDITOR.dom.element("body", this.getDocument());
                    o.$.innerHTML = e;
                    for (var r = o.getChildren(); r.count();)this.append(r.getItem(0));
                    return e
                }
            } : function (e) {
                return this.$.innerHTML = e
            },
            setText: function () {
                var e = document.createElement("p");
                return e.innerHTML = "x", e = e.textContent, function (t) {
                    this.$[e ? "textContent" : "innerText"] = t
                }
            }(),
            getAttribute: function () {
                var e = function (e) {
                    return this.$.getAttribute(e, 2)
                };
                return CKEDITOR.env.ie && (CKEDITOR.env.ie7Compat || CKEDITOR.env.quirks) ? function (t) {
                    switch (t) {
                        case"class":
                            t = "className";
                            break;
                        case"http-equiv":
                            t = "httpEquiv";
                            break;
                        case"name":
                            return this.$.name;
                        case"tabindex":
                            var n = e.call(this, t);
                            return 0 !== n && 0 === this.$.tabIndex && (n = null), n;
                        case"checked":
                            var i = this.$.attributes.getNamedItem(t), o = i.specified ? i.nodeValue : this.$.checked;
                            return o ? "checked" : null;
                        case"hspace":
                        case"value":
                            return this.$[t];
                        case"style":
                            return this.$.style.cssText;
                        case"contenteditable":
                        case"contentEditable":
                            return this.$.attributes.getNamedItem("contentEditable").specified ? this.$.getAttribute("contentEditable") : null
                    }
                    return e.call(this, t)
                } : e
            }(),
            getChildren: function () {
                return new CKEDITOR.dom.nodeList(this.$.childNodes)
            },
            getComputedStyle: CKEDITOR.env.ie ? function (e) {
                return this.$.currentStyle[CKEDITOR.tools.cssStyleToDomStyle(e)]
            } : function (e) {
                var t = this.getWindow().$.getComputedStyle(this.$, null);
                return t ? t.getPropertyValue(e) : ""
            },
            getDtd: function () {
                var e = CKEDITOR.dtd[this.getName()];
                return this.getDtd = function () {
                    return e
                }, e
            },
            getElementsByTag: CKEDITOR.dom.document.prototype.getElementsByTag,
            getTabIndex: CKEDITOR.env.ie ? function () {
                var e = this.$.tabIndex;
                return 0 !== e || CKEDITOR.dtd.$tabIndex[this.getName()] || 0 === parseInt(this.getAttribute("tabindex"), 10) || (e = -1), e
            } : CKEDITOR.env.webkit ? function () {
                var e = this.$.tabIndex;
                return void 0 === e && (e = parseInt(this.getAttribute("tabindex"), 10), isNaN(e) && (e = -1)), e
            } : function () {
                return this.$.tabIndex
            },
            getText: function () {
                return this.$.textContent || this.$.innerText || ""
            },
            getWindow: function () {
                return this.getDocument().getWindow()
            },
            getId: function () {
                return this.$.id || null
            },
            getNameAtt: function () {
                return this.$.name || null
            },
            getName: function () {
                var e = this.$.nodeName.toLowerCase();
                if (CKEDITOR.env.ie && document.documentMode <= 8) {
                    var t = this.$.scopeName;
                    "HTML" != t && (e = t.toLowerCase() + ":" + e)
                }
                return this.getName = function () {
                    return e
                }, this.getName()
            },
            getValue: function () {
                return this.$.value
            },
            getFirst: function (e) {
                var t = this.$.firstChild, n = t && new CKEDITOR.dom.node(t);
                return n && e && !e(n) && (n = n.getNext(e)), n
            },
            getLast: function (e) {
                var t = this.$.lastChild, n = t && new CKEDITOR.dom.node(t);
                return n && e && !e(n) && (n = n.getPrevious(e)), n
            },
            getStyle: function (e) {
                return this.$.style[CKEDITOR.tools.cssStyleToDomStyle(e)]
            },
            is: function () {
                var e = this.getName();
                if ("object" == typeof arguments[0])return !!arguments[0][e];
                for (var t = 0; t < arguments.length; t++)if (arguments[t] == e)return !0;
                return !1
            },
            isEditable: function (e) {
                var t = this.getName();
                if (this.isReadOnly() || "none" == this.getComputedStyle("display") || "hidden" == this.getComputedStyle("visibility") || CKEDITOR.dtd.$nonEditable[t] || CKEDITOR.dtd.$empty[t] || this.is("a") && (this.data("cke-saved-name") || this.hasAttribute("name")) && !this.getChildCount())return !1;
                if (e !== !1) {
                    var n = CKEDITOR.dtd[t] || CKEDITOR.dtd.span;
                    return !(!n || !n["#"])
                }
                return !0
            },
            isIdentical: function (e) {
                var t = this.clone(0, 1), n = e.clone(0, 1);
                if (t.removeAttributes(["_moz_dirty", "data-cke-expando", "data-cke-saved-href", "data-cke-saved-name"]), n.removeAttributes(["_moz_dirty", "data-cke-expando", "data-cke-saved-href", "data-cke-saved-name"]), t.$.isEqualNode)return t.$.style.cssText = CKEDITOR.tools.normalizeCssText(t.$.style.cssText), n.$.style.cssText = CKEDITOR.tools.normalizeCssText(n.$.style.cssText), t.$.isEqualNode(n.$);
                if (t = t.getOuterHtml(), n = n.getOuterHtml(), CKEDITOR.env.ie && CKEDITOR.env.version < 9 && this.is("a")) {
                    var i = this.getParent();
                    if (i.type == CKEDITOR.NODE_ELEMENT) {
                        var o = i.clone();
                        o.setHtml(t), t = o.getHtml(), o.setHtml(n), n = o.getHtml()
                    }
                }
                return t == n
            },
            isVisible: function () {
                var e, t,
                    n = (this.$.offsetHeight || this.$.offsetWidth) && "hidden" != this.getComputedStyle("visibility");
                return n && CKEDITOR.env.webkit && (e = this.getWindow(), !e.equals(CKEDITOR.document.getWindow()) && (t = e.$.frameElement) && (n = new CKEDITOR.dom.element(t).isVisible())), !!n
            },
            isEmptyInlineRemoveable: function () {
                if (!CKEDITOR.dtd.$removeEmpty[this.getName()])return !1;
                for (var e = this.getChildren(), t = 0, n = e.count(); n > t; t++) {
                    var i = e.getItem(t);
                    if ((i.type != CKEDITOR.NODE_ELEMENT || !i.data("cke-bookmark")) && (i.type == CKEDITOR.NODE_ELEMENT && !i.isEmptyInlineRemoveable() || i.type == CKEDITOR.NODE_TEXT && CKEDITOR.tools.trim(i.getText())))return !1
                }
                return !0
            },
            hasAttributes: CKEDITOR.env.ie && (CKEDITOR.env.ie7Compat || CKEDITOR.env.quirks) ? function () {
                for (var e = this.$.attributes, t = 0; t < e.length; t++) {
                    var n = e[t];
                    switch (n.nodeName) {
                        case"class":
                            if (this.getAttribute("class"))return !0;
                        case"data-cke-expando":
                            continue;
                        default:
                            if (n.specified)return !0
                    }
                }
                return !1
            } : function () {
                var e = this.$.attributes, t = e.length, n = {"data-cke-expando": 1, _moz_dirty: 1};
                return t > 0 && (t > 2 || !n[e[0].nodeName] || 2 == t && !n[e[1].nodeName])
            },
            hasAttribute: function () {
                function e(e) {
                    var t = this.$.attributes.getNamedItem(e);
                    if ("input" == this.getName())switch (e) {
                        case"class":
                            return this.$.className.length > 0;
                        case"checked":
                            return !!this.$.checked;
                        case"value":
                            var n = this.getAttribute("type");
                            return "checkbox" == n || "radio" == n ? "on" != this.$.value : !!this.$.value
                    }
                    return t ? t.specified : !1
                }

                return CKEDITOR.env.ie ? CKEDITOR.env.version < 8 ? function (t) {
                    return "name" == t ? !!this.$.name : e.call(this, t)
                } : e : function (e) {
                    return !!this.$.attributes.getNamedItem(e)
                }
            }(),
            hide: function () {
                this.setStyle("display", "none")
            },
            moveChildren: function (e, t) {
                var n = this.$;
                if (e = e.$, n != e) {
                    var i;
                    if (t)for (; i = n.lastChild;)e.insertBefore(n.removeChild(i), e.firstChild); else for (; i = n.firstChild;)e.appendChild(n.removeChild(i))
                }
            },
            mergeSiblings: function () {
                function e(e, t, n) {
                    if (t && t.type == CKEDITOR.NODE_ELEMENT) {
                        for (var i = []; t.data("cke-bookmark") || t.isEmptyInlineRemoveable();)if (i.push(t), t = n ? t.getNext() : t.getPrevious(), !t || t.type != CKEDITOR.NODE_ELEMENT)return;
                        if (e.isIdentical(t)) {
                            for (var o = n ? e.getLast() : e.getFirst(); i.length;)i.shift().move(e, !n);
                            t.moveChildren(e, !n), t.remove(), o && o.type == CKEDITOR.NODE_ELEMENT && o.mergeSiblings()
                        }
                    }
                }

                return function (t) {
                    (t === !1 || CKEDITOR.dtd.$removeEmpty[this.getName()] || this.is("a")) && (e(this, this.getNext(), !0), e(this, this.getPrevious()))
                }
            }(),
            show: function () {
                this.setStyles({display: "", visibility: ""})
            },
            setAttribute: function () {
                var e = function (e, t) {
                    return this.$.setAttribute(e, t), this
                };
                return CKEDITOR.env.ie && (CKEDITOR.env.ie7Compat || CKEDITOR.env.quirks) ? function (t, n) {
                    return "class" == t ? this.$.className = n : "style" == t ? this.$.style.cssText = n : "tabindex" == t ? this.$.tabIndex = n : "checked" == t ? this.$.checked = n : "contenteditable" == t ? e.call(this, "contentEditable", n) : e.apply(this, arguments), this
                } : CKEDITOR.env.ie8Compat && CKEDITOR.env.secure ? function (t, n) {
                    if ("src" == t && n.match(/^http:\/\//))try {
                        e.apply(this, arguments)
                    } catch (i) {
                    } else e.apply(this, arguments);
                    return this
                } : e
            }(),
            setAttributes: function (e) {
                for (var t in e)this.setAttribute(t, e[t]);
                return this
            },
            setValue: function (e) {
                return this.$.value = e, this
            },
            removeAttribute: function () {
                var e = function (e) {
                    this.$.removeAttribute(e)
                };
                return CKEDITOR.env.ie && (CKEDITOR.env.ie7Compat || CKEDITOR.env.quirks) ? function (t) {
                    "class" == t ? t = "className" : "tabindex" == t ? t = "tabIndex" : "contenteditable" == t && (t = "contentEditable"), e.call(this, t)
                } : e
            }(),
            removeAttributes: function (e) {
                if (CKEDITOR.tools.isArray(e))for (var t = 0; t < e.length; t++)this.removeAttribute(e[t]); else for (var n in e)e.hasOwnProperty(n) && this.removeAttribute(n)
            },
            removeStyle: function (e) {
                var t = this.$.style;
                if (t.removeProperty || "border" != e && "margin" != e && "padding" != e) t.removeProperty ? t.removeProperty(e) : t.removeAttribute(CKEDITOR.tools.cssStyleToDomStyle(e)), this.$.style.cssText || this.removeAttribute("style"); else for (var i = n(e), o = 0; o < i.length; o++)this.removeStyle(i[o])
            },
            setStyle: function (e, t) {
                return this.$.style[CKEDITOR.tools.cssStyleToDomStyle(e)] = t, this
            },
            setStyles: function (e) {
                for (var t in e)this.setStyle(t, e[t]);
                return this
            },
            setOpacity: function (e) {
                CKEDITOR.env.ie && CKEDITOR.env.version < 9 ? (e = Math.round(100 * e), this.setStyle("filter", e >= 100 ? "" : "progid:DXImageTransform.Microsoft.Alpha(opacity=" + e + ")")) : this.setStyle("opacity", e)
            },
            unselectable: function () {
                if (this.setStyles(CKEDITOR.tools.cssVendorPrefix("user-select", "none")), CKEDITOR.env.ie) {
                    this.setAttribute("unselectable", "on");
                    for (var e, t = this.getElementsByTag("*"), n = 0, i = t.count(); i > n; n++)e = t.getItem(n), e.setAttribute("unselectable", "on")
                }
            },
            getPositionedAncestor: function () {
                for (var e = this; "html" != e.getName();) {
                    if ("static" != e.getComputedStyle("position"))return e;
                    e = e.getParent()
                }
                return null
            },
            getDocumentPosition: function (e) {
                var t = 0, n = 0, i = this.getDocument(), o = i.getBody(), r = CKEDITOR.env.quirks;
                if (document.documentElement.getBoundingClientRect) {
                    var a = this.$.getBoundingClientRect(), s = i.$, l = s.documentElement,
                        c = l.clientTop || o.$.clientTop || 0, d = l.clientLeft || o.$.clientLeft || 0, u = !0;
                    if (CKEDITOR.env.ie) {
                        var h = i.getDocumentElement().contains(this), f = i.getBody().contains(this);
                        u = r && f || !r && h
                    }
                    if (u) {
                        var m, E;
                        if (CKEDITOR.env.webkit) m = o.$.scrollLeft || l.scrollLeft, E = o.$.scrollTop || l.scrollTop; else {
                            var g = r ? o.$ : l;
                            m = g.scrollLeft, E = g.scrollTop
                        }
                        t = a.left + m - d, n = a.top + E - c
                    }
                } else for (var p, T = this, C = null; T && "body" != T.getName() && "html" != T.getName();) {
                    t += T.$.offsetLeft - T.$.scrollLeft, n += T.$.offsetTop - T.$.scrollTop, T.equals(this) || (t += T.$.clientLeft || 0, n += T.$.clientTop || 0);
                    for (var v = C; v && !v.equals(T);)t -= v.$.scrollLeft, n -= v.$.scrollTop, v = v.getParent();
                    C = T, T = (p = T.$.offsetParent) ? new CKEDITOR.dom.element(p) : null
                }
                if (e) {
                    var I = this.getWindow(), O = e.getWindow();
                    if (!I.equals(O) && I.$.frameElement) {
                        var D = new CKEDITOR.dom.element(I.$.frameElement).getDocumentPosition(e);
                        t += D.x, n += D.y
                    }
                }
                return document.documentElement.getBoundingClientRect || CKEDITOR.env.gecko && !r && (t += this.$.clientLeft ? 1 : 0, n += this.$.clientTop ? 1 : 0), {
                    x: t,
                    y: n
                }
            },
            scrollIntoView: function (e) {
                var t = this.getParent();
                if (t)do {
                    var n = t.$.clientWidth && t.$.clientWidth < t.$.scrollWidth || t.$.clientHeight && t.$.clientHeight < t.$.scrollHeight;
                    if (n && !t.is("body") && this.scrollIntoParent(t, e, 1), t.is("html")) {
                        var i = t.getWindow();
                        try {
                            var o = i.$.frameElement;
                            o && (t = new CKEDITOR.dom.element(o))
                        } catch (r) {
                        }
                    }
                } while (t = t.getParent())
            },
            scrollIntoParent: function (e, t, n) {
                function i(t, n) {
                    /body|html/.test(e.getName()) ? e.getWindow().$.scrollBy(t, n) : (e.$.scrollLeft += t, e.$.scrollTop += n)
                }

                function o(e, t) {
                    var n = {x: 0, y: 0};
                    if (!e.is(s ? "body" : "html")) {
                        var i = e.$.getBoundingClientRect();
                        n.x = i.left, n.y = i.top
                    }
                    var r = e.getWindow();
                    if (!r.equals(t)) {
                        var a = o(CKEDITOR.dom.element.get(r.$.frameElement), t);
                        n.x += a.x, n.y += a.y
                    }
                    return n
                }

                function r(e, t) {
                    return parseInt(e.getComputedStyle("margin-" + t) || 0, 10) || 0
                }

                !e && (e = this.getWindow());
                var a = e.getDocument(), s = "BackCompat" == a.$.compatMode;
                e instanceof CKEDITOR.dom.window && (e = s ? a.getBody() : a.getDocumentElement());
                var l, c, d = e.getWindow(), u = o(this, d), h = o(e, d), f = this.$.offsetHeight,
                    m = this.$.offsetWidth, E = e.$.clientHeight, g = e.$.clientWidth;
                l = {
                    x: u.x - r(this, "left") - h.x || 0,
                    y: u.y - r(this, "top") - h.y || 0
                }, c = {
                    x: u.x + m + r(this, "right") - (h.x + g) || 0,
                    y: u.y + f + r(this, "bottom") - (h.y + E) || 0
                }, (l.y < 0 || c.y > 0) && i(0, t === !0 ? l.y : t === !1 ? c.y : l.y < 0 ? l.y : c.y), n && (l.x < 0 || c.x > 0) && i(l.x < 0 ? l.x : c.x, 0)
            },
            setState: function (e, t, n) {
                switch (t = t || "cke", e) {
                    case CKEDITOR.TRISTATE_ON:
                        this.addClass(t + "_on"), this.removeClass(t + "_off"), this.removeClass(t + "_disabled"), n && this.setAttribute("aria-pressed", !0), n && this.removeAttribute("aria-disabled");
                        break;
                    case CKEDITOR.TRISTATE_DISABLED:
                        this.addClass(t + "_disabled"), this.removeClass(t + "_off"), this.removeClass(t + "_on"), n && this.setAttribute("aria-disabled", !0), n && this.removeAttribute("aria-pressed");
                        break;
                    default:
                        this.addClass(t + "_off"), this.removeClass(t + "_on"), this.removeClass(t + "_disabled"), n && this.removeAttribute("aria-pressed"), n && this.removeAttribute("aria-disabled")
                }
            },
            getFrameDocument: function () {
                var e = this.$;
                try {
                    e.contentWindow.document
                } catch (t) {
                    e.src = e.src
                }
                return e && new CKEDITOR.dom.document(e.contentWindow.document)
            },
            copyAttributes: function (e, t) {
                var n = this.$.attributes;
                t = t || {};
                for (var i = 0; i < n.length; i++) {
                    var o, r = n[i], a = r.nodeName.toLowerCase();
                    a in t || ("checked" == a && (o = this.getAttribute(a)) ? e.setAttribute(a, o) : (!CKEDITOR.env.ie || this.hasAttribute(a)) && (o = this.getAttribute(a), null === o && (o = r.nodeValue), e.setAttribute(a, o)))
                }
                "" !== this.$.style.cssText && (e.$.style.cssText = this.$.style.cssText)
            },
            renameNode: function (e) {
                if (this.getName() != e) {
                    var t = this.getDocument(), n = new CKEDITOR.dom.element(e, t);
                    this.copyAttributes(n), this.moveChildren(n), this.getParent() && this.$.parentNode.replaceChild(n.$, this.$), n.$["data-cke-expando"] = this.$["data-cke-expando"], this.$ = n.$, delete this.getName
                }
            },
            getChild: function () {
                function e(e, t) {
                    var n = e.childNodes;
                    return t >= 0 && t < n.length ? n[t] : void 0
                }

                return function (t) {
                    var n = this.$;
                    if (t.slice)for (; t.length > 0 && n;)n = e(n, t.shift()); else n = e(n, t);
                    return n ? new CKEDITOR.dom.node(n) : null
                }
            }(),
            getChildCount: function () {
                return this.$.childNodes.length
            },
            disableContextMenu: function () {
                this.on("contextmenu", function (e) {
                    e.data.getTarget().hasClass("cke_enable_context_menu") || e.data.preventDefault()
                })
            },
            getDirection: function (e) {
                return e ? this.getComputedStyle("direction") || this.getDirection() || this.getParent() && this.getParent().getDirection(1) || this.getDocument().$.dir || "ltr" : this.getStyle("direction") || this.getAttribute("dir")
            },
            data: function (e, t) {
                return e = "data-" + e, void 0 === t ? this.getAttribute(e) : (t === !1 ? this.removeAttribute(e) : this.setAttribute(e, t), null)
            },
            getEditor: function () {
                var e, t, n = CKEDITOR.instances;
                for (e in n)if (t = n[e], t.element.equals(this) && t.elementMode != CKEDITOR.ELEMENT_MODE_APPENDTO)return t;
                return null
            },
            find: function (n) {
                var i = e(this), o = new CKEDITOR.dom.nodeList(this.$.querySelectorAll(t(this, n)));
                return i(), o
            },
            findOne: function (n) {
                var i = e(this), o = this.$.querySelector(t(this, n));
                return i(), o ? new CKEDITOR.dom.element(o) : null
            },
            forEach: function (e, t, n) {
                if (!(n || t && this.type != t))var i = e(this);
                if (i !== !1)for (var o, r = this.getChildren(), a = 0; a < r.count(); a++)o = r.getItem(a), o.type == CKEDITOR.NODE_ELEMENT ? o.forEach(e, t) : t && o.type != t || e(o)
            }
        });
        var o = {
            width: ["border-left-width", "border-right-width", "padding-left", "padding-right"],
            height: ["border-top-width", "border-bottom-width", "padding-top", "padding-bottom"]
        };
        CKEDITOR.dom.element.prototype.setSize = function (e, t, n) {
            "number" == typeof t && (!n || CKEDITOR.env.ie && CKEDITOR.env.quirks || (t -= i.call(this, e)), this.setStyle(e, t + "px"))
        }, CKEDITOR.dom.element.prototype.getSize = function (e, t) {
            var n = Math.max(this.$["offset" + CKEDITOR.tools.capitalize(e)], this.$["client" + CKEDITOR.tools.capitalize(e)]) || 0;
            return t && (n -= i.call(this, e)), n
        }
    }(), CKEDITOR.dom.documentFragment = function (e) {
        e = e || CKEDITOR.document, this.$ = e.type == CKEDITOR.NODE_DOCUMENT ? e.$.createDocumentFragment() : e
    }, CKEDITOR.tools.extend(CKEDITOR.dom.documentFragment.prototype, CKEDITOR.dom.element.prototype, {
        type: CKEDITOR.NODE_DOCUMENT_FRAGMENT,
        insertAfterNode: function (e) {
            e = e.$, e.parentNode.insertBefore(this.$, e.nextSibling)
        }
    }, !0, {
        append: 1,
        appendBogus: 1,
        getFirst: 1,
        getLast: 1,
        getParent: 1,
        getNext: 1,
        getPrevious: 1,
        appendTo: 1,
        moveChildren: 1,
        insertBefore: 1,
        insertAfterNode: 1,
        replace: 1,
        trim: 1,
        type: 1,
        ltrim: 1,
        rtrim: 1,
        getDocument: 1,
        getChildCount: 1,
        getChild: 1,
        getChildren: 1
    }), function () {
        function e(e, t) {
            var n = this.range;
            if (this._.end)return null;
            if (!this._.start) {
                if (this._.start = 1, n.collapsed)return this.end(), null;
                n.optimize()
            }
            var i, o, r = n.startContainer, a = n.endContainer, s = n.startOffset, l = n.endOffset, c = this.guard,
                d = this.type, u = e ? "getPreviousSourceNode" : "getNextSourceNode";
            if (!e && !this._.guardLTR) {
                var h = a.type == CKEDITOR.NODE_ELEMENT ? a : a.getParent(),
                    f = a.type == CKEDITOR.NODE_ELEMENT ? a.getChild(l) : a.getNext();
                this._.guardLTR = function (e, t) {
                    return !(t && h.equals(e) || f && e.equals(f) || e.type == CKEDITOR.NODE_ELEMENT && t && e.equals(n.root))
                }
            }
            if (e && !this._.guardRTL) {
                var m = r.type == CKEDITOR.NODE_ELEMENT ? r : r.getParent(),
                    E = r.type == CKEDITOR.NODE_ELEMENT ? s ? r.getChild(s - 1) : null : r.getPrevious();
                this._.guardRTL = function (e, t) {
                    return !(t && m.equals(e) || E && e.equals(E) || e.type == CKEDITOR.NODE_ELEMENT && t && e.equals(n.root))
                }
            }
            var g = e ? this._.guardRTL : this._.guardLTR;
            for (o = c ? function (e, t) {
                return g(e, t) === !1 ? !1 : c(e, t)
            } : g, this.current ? i = this.current[u](!1, d, o) : (e ? (i = a, i.type == CKEDITOR.NODE_ELEMENT && (i = l > 0 ? i.getChild(l - 1) : o(i, !0) === !1 ? null : i.getPreviousSourceNode(!0, d, o))) : (i = r, i.type == CKEDITOR.NODE_ELEMENT && ((i = i.getChild(s)) || (i = o(r, !0) === !1 ? null : r.getNextSourceNode(!0, d, o)))), i && o(i) === !1 && (i = null)); i && !this._.end;) {
                if (this.current = i, this.evaluator && this.evaluator(i) === !1) {
                    if (t && this.evaluator)return !1
                } else if (!t)return i;
                i = i[u](!1, d, o)
            }
            return this.end(), this.current = null
        }

        function t(t) {
            for (var n, i = null; n = e.call(this, t);)i = n;
            return i
        }

        function n(e) {
            for (var t = 0, n = e.getChildCount(); n > t; ++t)if (!h(e.getChild(t)))return !1;
            return !0
        }

        function i(e) {
            var t, n = {};
            for (t in e)CKEDITOR.dtd[t]["#"] && (n[t] = 1);
            return n
        }

        function o(e) {
            if (h(e))return !1;
            if (e.type == CKEDITOR.NODE_TEXT)return !0;
            if (e.type == CKEDITOR.NODE_ELEMENT) {
                if (e.is(CKEDITOR.dtd.$inline) || e.is("hr") || "false" == e.getAttribute("contenteditable"))return !0;
                if (!CKEDITOR.env.needsBrFiller && e.is(f) && n(e))return !0
            }
            return !1
        }

        CKEDITOR.dom.walker = CKEDITOR.tools.createClass({
            $: function (e) {
                this.range = e, this._ = {}
            }, proto: {
                end: function () {
                    this._.end = 1
                }, next: function () {
                    return e.call(this)
                }, previous: function () {
                    return e.call(this, 1)
                }, checkForward: function () {
                    return e.call(this, 0, 1) !== !1
                }, checkBackward: function () {
                    return e.call(this, 1, 1) !== !1
                }, lastForward: function () {
                    return t.call(this)
                }, lastBackward: function () {
                    return t.call(this, 1)
                }, reset: function () {
                    delete this.current, this._ = {}
                }
            }
        });
        var r = {
            block: 1,
            "list-item": 1,
            table: 1,
            "table-row-group": 1,
            "table-header-group": 1,
            "table-footer-group": 1,
            "table-row": 1,
            "table-column-group": 1,
            "table-column": 1,
            "table-cell": 1,
            "table-caption": 1
        }, a = {absolute: 1, fixed: 1};
        CKEDITOR.dom.element.prototype.isBlockBoundary = function (e) {
            var t = "none" == this.getComputedStyle("float") && !(this.getComputedStyle("position") in a);
            return t && r[this.getComputedStyle("display")] ? !0 : !!(this.is(CKEDITOR.dtd.$block) || e && this.is(e))
        }, CKEDITOR.dom.walker.blockBoundary = function (e) {
            return function (t) {
                return !(t.type == CKEDITOR.NODE_ELEMENT && t.isBlockBoundary(e))
            }
        }, CKEDITOR.dom.walker.listItemBoundary = function () {
            return this.blockBoundary({br: 1})
        }, CKEDITOR.dom.walker.bookmark = function (e, t) {
            function n(e) {
                return e && e.getName && "span" == e.getName() && e.data("cke-bookmark")
            }

            return function (i) {
                var o, r;
                return o = i && i.type != CKEDITOR.NODE_ELEMENT && (r = i.getParent()) && n(r), o = e ? o : o || n(i), !!(t ^ o)
            }
        }, CKEDITOR.dom.walker.whitespaces = function (e) {
            return function (t) {
                var n;
                return t && t.type == CKEDITOR.NODE_TEXT && (n = !CKEDITOR.tools.trim(t.getText()) || CKEDITOR.env.webkit && "\u200b" == t.getText()), !!(e ^ n)
            }
        }, CKEDITOR.dom.walker.invisible = function (e) {
            var t = CKEDITOR.dom.walker.whitespaces(), n = CKEDITOR.env.webkit ? 1 : 0;
            return function (i) {
                var o;
                return t(i) ? o = 1 : (i.type == CKEDITOR.NODE_TEXT && (i = i.getParent()), o = i.$.offsetWidth <= n), !!(e ^ o)
            }
        }, CKEDITOR.dom.walker.nodeType = function (e, t) {
            return function (n) {
                return !!(t ^ n.type == e)
            }
        }, CKEDITOR.dom.walker.bogus = function (e) {
            function t(e) {
                return !l(e) && !c(e)
            }

            return function (n) {
                var i = CKEDITOR.env.needsBrFiller ? n.is && n.is("br") : n.getText && s.test(n.getText());
                if (i) {
                    var o = n.getParent(), r = n.getNext(t);
                    i = o.isBlockBoundary() && (!r || r.type == CKEDITOR.NODE_ELEMENT && r.isBlockBoundary())
                }
                return !!(e ^ i)
            }
        }, CKEDITOR.dom.walker.temp = function (e) {
            return function (t) {
                t.type != CKEDITOR.NODE_ELEMENT && (t = t.getParent());
                var n = t && t.hasAttribute("data-cke-temp");
                return !!(e ^ n)
            }
        };
        var s = /^[\t\r\n ]*(?:&nbsp;|\xa0)$/, l = CKEDITOR.dom.walker.whitespaces(),
            c = CKEDITOR.dom.walker.bookmark(), d = CKEDITOR.dom.walker.temp(), u = function (e) {
                return c(e) || l(e) || e.type == CKEDITOR.NODE_ELEMENT && e.is(CKEDITOR.dtd.$inline) && !e.is(CKEDITOR.dtd.$empty)
            };
        CKEDITOR.dom.walker.ignored = function (e) {
            return function (t) {
                var n = l(t) || c(t) || d(t);
                return !!(e ^ n)
            }
        };
        var h = CKEDITOR.dom.walker.ignored(), f = i(CKEDITOR.dtd.$block);
        CKEDITOR.dom.walker.editable = function (e) {
            return function (t) {
                return !!(e ^ o(t))
            }
        }, CKEDITOR.dom.element.prototype.getBogus = function () {
            var e = this;
            do e = e.getPreviousSourceNode(); while (u(e));
            return e && (CKEDITOR.env.needsBrFiller ? e.is && e.is("br") : e.getText && s.test(e.getText())) ? e : !1
        }
    }(), CKEDITOR.dom.range = function (e) {
        this.startContainer = null, this.startOffset = null, this.endContainer = null, this.endOffset = null, this.collapsed = !0;
        var t = e instanceof CKEDITOR.dom.document;
        this.document = t ? e : e.getDocument(), this.root = t ? e.getBody() : e
    }, function () {
        function e() {
            var e = !1, t = CKEDITOR.dom.walker.whitespaces(), n = CKEDITOR.dom.walker.bookmark(!0),
                i = CKEDITOR.dom.walker.bogus();
            return function (o) {
                return n(o) || t(o) ? !0 : i(o) && !e ? (e = !0, !0) : o.type == CKEDITOR.NODE_TEXT && (o.hasAscendant("pre") || CKEDITOR.tools.trim(o.getText()).length) ? !1 : o.type != CKEDITOR.NODE_ELEMENT || o.is(r) ? !0 : !1
            }
        }

        function t(e) {
            var t = CKEDITOR.dom.walker.whitespaces(), n = CKEDITOR.dom.walker.bookmark(1);
            return function (i) {
                return n(i) || t(i) ? !0 : !e && a(i) || i.type == CKEDITOR.NODE_ELEMENT && i.is(CKEDITOR.dtd.$removeEmpty)
            }
        }

        function n(e) {
            return function () {
                var t;
                return this[e ? "getPreviousNode" : "getNextNode"](function (e) {
                    return !t && c(e) && (t = e), l(e) && !(a(e) && e.equals(t))
                })
            }
        }

        var i = function (e) {
                e.collapsed = e.startContainer && e.endContainer && e.startContainer.equals(e.endContainer) && e.startOffset == e.endOffset
            }, o = function (e, t, n, i) {
                e.optimizeBookmark();
                var o, r, a = e.startContainer, s = e.endContainer, l = e.startOffset, c = e.endOffset;
                s.type == CKEDITOR.NODE_TEXT ? s = s.split(c) : s.getChildCount() > 0 && (c >= s.getChildCount() ? (s = s.append(e.document.createText("")), r = !0) : s = s.getChild(c)), a.type == CKEDITOR.NODE_TEXT ? (a.split(l), a.equals(s) && (s = a.getNext())) : l ? l >= a.getChildCount() ? (a = a.append(e.document.createText("")), o = !0) : a = a.getChild(l).getPrevious() : (a = a.append(e.document.createText(""), 1), o = !0);
                var d, u, h, f = a.getParents(), m = s.getParents();
                for (d = 0; d < f.length && (u = f[d], h = m[d], u.equals(h)); d++);
                for (var E, g, p, T, C = n, v = d; v < f.length; v++) {
                    for (E = f[v], C && !E.equals(a) && (g = C.append(E.clone())), p = E.getNext(); p && !p.equals(m[v]) && !p.equals(s);)T = p.getNext(), 2 == t ? C.append(p.clone(!0)) : (p.remove(), 1 == t && C.append(p)), p = T;
                    C && (C = g)
                }
                C = n;
                for (var I = d; I < m.length; I++) {
                    if (E = m[I], t > 0 && !E.equals(s) && (g = C.append(E.clone())), !f[I] || E.$.parentNode != f[I].$.parentNode)for (p = E.getPrevious(); p && !p.equals(f[I]) && !p.equals(a);)T = p.getPrevious(), 2 == t ? C.$.insertBefore(p.$.cloneNode(!0), C.$.firstChild) : (p.remove(), 1 == t && C.$.insertBefore(p.$, C.$.firstChild)), p = T;
                    C && (C = g)
                }
                if (2 == t) {
                    var O = e.startContainer;
                    O.type == CKEDITOR.NODE_TEXT && (O.$.data += O.$.nextSibling.data, O.$.parentNode.removeChild(O.$.nextSibling));
                    var D = e.endContainer;
                    D.type == CKEDITOR.NODE_TEXT && D.$.nextSibling && (D.$.data += D.$.nextSibling.data, D.$.parentNode.removeChild(D.$.nextSibling))
                } else {
                    if (u && h && (a.$.parentNode != u.$.parentNode || s.$.parentNode != h.$.parentNode)) {
                        var R = h.getIndex();
                        if (o && h.$.parentNode == a.$.parentNode && R--, i && u.type == CKEDITOR.NODE_ELEMENT) {
                            var b = CKEDITOR.dom.element.createFromHtml('<span data-cke-bookmark="1" style="display:none">&nbsp;</span>', e.document);
                            b.insertAfter(u), u.mergeSiblings(!1), e.moveToBookmark({startNode: b})
                        } else e.setStart(h.getParent(), R)
                    }
                    e.collapse(!0)
                }
                o && a.remove(), r && s.$.parentNode && s.remove()
            }, r = {
                abbr: 1,
                acronym: 1,
                b: 1,
                bdo: 1,
                big: 1,
                cite: 1,
                code: 1,
                del: 1,
                dfn: 1,
                em: 1,
                font: 1,
                i: 1,
                ins: 1,
                label: 1,
                kbd: 1,
                q: 1,
                samp: 1,
                small: 1,
                span: 1,
                strike: 1,
                strong: 1,
                sub: 1,
                sup: 1,
                tt: 1,
                u: 1,
                "var": 1
            }, a = CKEDITOR.dom.walker.bogus(), s = /^[\t\r\n ]*(?:&nbsp;|\xa0)$/, l = CKEDITOR.dom.walker.editable(),
            c = CKEDITOR.dom.walker.ignored(!0);
        CKEDITOR.dom.range.prototype = {
            clone: function () {
                var e = new CKEDITOR.dom.range(this.root);
                return e._setStartContainer(this.startContainer), e.startOffset = this.startOffset, e._setEndContainer(this.endContainer), e.endOffset = this.endOffset, e.collapsed = this.collapsed, e
            }, collapse: function (e) {
                e ? (this._setEndContainer(this.startContainer), this.endOffset = this.startOffset) : (this._setStartContainer(this.endContainer), this.startOffset = this.endOffset), this.collapsed = !0
            }, cloneContents: function () {
                var e = new CKEDITOR.dom.documentFragment(this.document);
                return this.collapsed || o(this, 2, e), e
            }, deleteContents: function (e) {
                this.collapsed || o(this, 0, null, e)
            }, extractContents: function (e) {
                var t = new CKEDITOR.dom.documentFragment(this.document);
                return this.collapsed || o(this, 1, t, e), t
            }, createBookmark: function (e) {
                var t, n, i, o, r = this.collapsed;
                return t = this.document.createElement("span"), t.data("cke-bookmark", 1), t.setStyle("display", "none"), t.setHtml("&nbsp;"), e && (i = "cke_bm_" + CKEDITOR.tools.getNextNumber(), t.setAttribute("id", i + (r ? "C" : "S"))), r || (n = t.clone(), n.setHtml("&nbsp;"), e && n.setAttribute("id", i + "E"), o = this.clone(), o.collapse(), o.insertNode(n)), o = this.clone(), o.collapse(!0), o.insertNode(t), n ? (this.setStartAfter(t), this.setEndBefore(n)) : this.moveToPosition(t, CKEDITOR.POSITION_AFTER_END), {
                    startNode: e ? i + (r ? "C" : "S") : t,
                    endNode: e ? i + "E" : n,
                    serializable: e,
                    collapsed: r
                }
            }, createBookmark2: function () {
                function e(e, t) {
                    return e.type != CKEDITOR.NODE_ELEMENT || 0 === t || t == e.getChildCount() ? 0 : e.getChild(t - 1).type == CKEDITOR.NODE_TEXT && e.getChild(t).type == CKEDITOR.NODE_TEXT
                }

                function t(e) {
                    for (var t = 0; (e = e.getPrevious()) && e.type == CKEDITOR.NODE_TEXT;)t += e.getLength();
                    return t
                }

                function n(n) {
                    var o = n.container, r = n.offset;
                    if (e(o, r) && (o = o.getChild(r - 1), r = o.getLength()), o.type == CKEDITOR.NODE_ELEMENT && r > 1 && (r = o.getChild(r - 1).getIndex(!0) + 1), o.type == CKEDITOR.NODE_TEXT) {
                        var a = t(o);
                        if (o.getText()) r += a; else {
                            var s = o.getPrevious(i);
                            a ? (r = a, o = s ? s.getNext() : o.getParent().getFirst()) : (o = o.getParent(), r = s ? s.getIndex(!0) + 1 : 0)
                        }
                    }
                    n.container = o, n.offset = r
                }

                var i = CKEDITOR.dom.walker.nodeType(CKEDITOR.NODE_TEXT, !0);
                return function (e) {
                    var t = this.collapsed, i = {container: this.startContainer, offset: this.startOffset},
                        o = {container: this.endContainer, offset: this.endOffset};
                    return e && (n(i), t || n(o)), {
                        start: i.container.getAddress(e),
                        end: t ? null : o.container.getAddress(e),
                        startOffset: i.offset,
                        endOffset: o.offset,
                        normalized: e,
                        collapsed: t,
                        is2: !0
                    }
                }
            }(), moveToBookmark: function (e) {
                if (e.is2) {
                    var t = this.document.getByAddress(e.start, e.normalized), n = e.startOffset,
                        i = e.end && this.document.getByAddress(e.end, e.normalized), o = e.endOffset;
                    this.setStart(t, n), i ? this.setEnd(i, o) : this.collapse(!0)
                } else {
                    var r = e.serializable, a = r ? this.document.getById(e.startNode) : e.startNode,
                        s = r ? this.document.getById(e.endNode) : e.endNode;
                    this.setStartBefore(a), a.remove(), s ? (this.setEndBefore(s), s.remove()) : this.collapse(!0)
                }
            }, getBoundaryNodes: function () {
                var e, t = this.startContainer, n = this.endContainer, i = this.startOffset, o = this.endOffset;
                if (t.type == CKEDITOR.NODE_ELEMENT)if (e = t.getChildCount(), e > i) t = t.getChild(i); else if (1 > e) t = t.getPreviousSourceNode(); else {
                    for (t = t.$; t.lastChild;)t = t.lastChild;
                    t = new CKEDITOR.dom.node(t), t = t.getNextSourceNode() || t
                }
                if (n.type == CKEDITOR.NODE_ELEMENT)if (e = n.getChildCount(), e > o) n = n.getChild(o).getPreviousSourceNode(!0); else if (1 > e) n = n.getPreviousSourceNode(); else {
                    for (n = n.$; n.lastChild;)n = n.lastChild;
                    n = new CKEDITOR.dom.node(n)
                }
                return t.getPosition(n) & CKEDITOR.POSITION_FOLLOWING && (t = n), {startNode: t, endNode: n}
            }, getCommonAncestor: function (e, t) {
                var n, i = this.startContainer, o = this.endContainer;
                return n = i.equals(o) ? e && i.type == CKEDITOR.NODE_ELEMENT && this.startOffset == this.endOffset - 1 ? i.getChild(this.startOffset) : i : i.getCommonAncestor(o), t && !n.is ? n.getParent() : n
            }, optimize: function () {
                var e = this.startContainer, t = this.startOffset;
                e.type != CKEDITOR.NODE_ELEMENT && (t ? t >= e.getLength() && this.setStartAfter(e) : this.setStartBefore(e)), e = this.endContainer, t = this.endOffset, e.type != CKEDITOR.NODE_ELEMENT && (t ? t >= e.getLength() && this.setEndAfter(e) : this.setEndBefore(e))
            }, optimizeBookmark: function () {
                var e = this.startContainer, t = this.endContainer;
                e.is && e.is("span") && e.data("cke-bookmark") && this.setStartAt(e, CKEDITOR.POSITION_BEFORE_START), t && t.is && t.is("span") && t.data("cke-bookmark") && this.setEndAt(t, CKEDITOR.POSITION_AFTER_END)
            }, trim: function (e, t) {
                var n = this.startContainer, i = this.startOffset, o = this.collapsed;
                if ((!e || o) && n && n.type == CKEDITOR.NODE_TEXT) {
                    if (i)if (i >= n.getLength()) i = n.getIndex() + 1, n = n.getParent(); else {
                        var r = n.split(i);
                        i = n.getIndex() + 1, n = n.getParent(), this.startContainer.equals(this.endContainer) ? this.setEnd(r, this.endOffset - this.startOffset) : n.equals(this.endContainer) && (this.endOffset += 1)
                    } else i = n.getIndex(), n = n.getParent();
                    if (this.setStart(n, i), o)return void this.collapse(!0)
                }
                var a = this.endContainer, s = this.endOffset;
                t || o || !a || a.type != CKEDITOR.NODE_TEXT || (s ? s >= a.getLength() ? (s = a.getIndex() + 1, a = a.getParent()) : (a.split(s), s = a.getIndex() + 1, a = a.getParent()) : (s = a.getIndex(), a = a.getParent()), this.setEnd(a, s))
            }, enlarge: function (e, t) {
                function n(e, t) {
                    var n = new CKEDITOR.dom.range(m);
                    n.setStart(e, t), n.setEndAt(m, CKEDITOR.POSITION_BEFORE_END);
                    var i, r = new CKEDITOR.dom.walker(n);
                    for (r.guard = function (e) {
                        return !(e.type == CKEDITOR.NODE_ELEMENT && e.isBlockBoundary())
                    }; i = r.next();) {
                        if (i.type != CKEDITOR.NODE_TEXT)return !1;
                        if (h = i != e ? i.getText() : i.substring(t), o.test(h))return !1
                    }
                    return !0
                }

                function i(e) {
                    return e && e.type == CKEDITOR.NODE_ELEMENT && e.hasAttribute("contenteditable") ? null : e
                }

                var o = new RegExp(/[^\s\ufeff]/);
                switch (e) {
                    case CKEDITOR.ENLARGE_INLINE:
                        var r = 1;
                    case CKEDITOR.ENLARGE_ELEMENT:
                        if (this.collapsed)return;
                        var a, s, l, c, d, u, h, f = this.getCommonAncestor(), m = this.root, E = !1,
                            g = this.startContainer, p = this.startOffset;
                        for (g.type == CKEDITOR.NODE_TEXT ? (p && (g = !CKEDITOR.tools.trim(g.substring(0, p)).length && g, E = !!g), g && ((c = g.getPrevious()) || (l = g.getParent()))) : (p && (c = g.getChild(p - 1) || g.getLast()), c || (l = g)), l = i(l); l || c;) {
                            if (l && !c) {
                                if (!d && l.equals(f) && (d = !0), r ? l.isBlockBoundary() : !m.contains(l))break;
                                E && "inline" == l.getComputedStyle("display") || (E = !1, d ? a = l : this.setStartBefore(l)), c = l.getPrevious()
                            }
                            for (; c;)if (u = !1, c.type != CKEDITOR.NODE_COMMENT) {
                                if (c.type == CKEDITOR.NODE_TEXT) h = c.getText(), o.test(h) && (c = null), u = /[\s\ufeff]$/.test(h); else {
                                    var T = CKEDITOR.env.webkit ? 1 : 0;
                                    if ((c.$.offsetWidth > T || t && c.is("br")) && !c.data("cke-bookmark"))if (E && CKEDITOR.dtd.$removeEmpty[c.getName()]) {
                                        if (h = c.getText(), o.test(h)) c = null; else for (var C, v = c.$.getElementsByTagName("*"), I = 0; C = v[I++];)if (!CKEDITOR.dtd.$removeEmpty[C.nodeName.toLowerCase()]) {
                                            c = null;
                                            break
                                        }
                                        c && (u = !!h.length)
                                    } else c = null
                                }
                                if (u && (E ? d ? a = l : l && this.setStartBefore(l) : E = !0), c) {
                                    var O = c.getPrevious();
                                    if (!l && !O) {
                                        l = c, c = null;
                                        break
                                    }
                                    c = O
                                } else l = null
                            } else c = c.getPrevious();
                            l && (l = i(l.getParent()))
                        }
                        for (g = this.endContainer, p = this.endOffset, l = c = null, d = E = !1, g.type == CKEDITOR.NODE_TEXT ? CKEDITOR.tools.trim(g.substring(p)).length ? E = !0 : (E = !g.getLength(), p == g.getLength() ? (c = g.getNext()) || (l = g.getParent()) : n(g, p) && (l = g.getParent())) : (c = g.getChild(p), c || (l = g)); l || c;) {
                            if (l && !c) {
                                if (!d && l.equals(f) && (d = !0), r ? l.isBlockBoundary() : !m.contains(l))break;
                                E && "inline" == l.getComputedStyle("display") || (E = !1, d ? s = l : l && this.setEndAfter(l)), c = l.getNext()
                            }
                            for (; c;) {
                                if (u = !1, c.type == CKEDITOR.NODE_TEXT) h = c.getText(), n(c, 0) || (c = null), u = /^[\s\ufeff]/.test(h); else if (c.type == CKEDITOR.NODE_ELEMENT) {
                                    if ((c.$.offsetWidth > 0 || t && c.is("br")) && !c.data("cke-bookmark"))if (E && CKEDITOR.dtd.$removeEmpty[c.getName()]) {
                                        if (h = c.getText(), o.test(h)) c = null; else for (v = c.$.getElementsByTagName("*"), I = 0; C = v[I++];)if (!CKEDITOR.dtd.$removeEmpty[C.nodeName.toLowerCase()]) {
                                            c = null;
                                            break
                                        }
                                        c && (u = !!h.length)
                                    } else c = null
                                } else u = 1;
                                if (u && E && (d ? s = l : this.setEndAfter(l)), c) {
                                    if (O = c.getNext(), !l && !O) {
                                        l = c, c = null;
                                        break
                                    }
                                    c = O
                                } else l = null
                            }
                            l && (l = i(l.getParent()))
                        }
                        a && s && (f = a.contains(s) ? s : a, this.setStartBefore(f), this.setEndAfter(f));
                        break;
                    case CKEDITOR.ENLARGE_BLOCK_CONTENTS:
                    case CKEDITOR.ENLARGE_LIST_ITEM_CONTENTS:
                        var D = new CKEDITOR.dom.range(this.root);
                        m = this.root, D.setStartAt(m, CKEDITOR.POSITION_AFTER_START), D.setEnd(this.startContainer, this.startOffset);
                        var R, b, K = new CKEDITOR.dom.walker(D),
                            y = CKEDITOR.dom.walker.blockBoundary(e == CKEDITOR.ENLARGE_LIST_ITEM_CONTENTS ? {br: 1} : null),
                            _ = null, k = function (e) {
                                if (e.type == CKEDITOR.NODE_ELEMENT && "false" == e.getAttribute("contenteditable"))if (_) {
                                    if (_.equals(e))return void(_ = null)
                                } else _ = e; else if (_)return;
                                var t = y(e);
                                return t || (R = e), t
                            }, N = function (e) {
                                var t = k(e);
                                return !t && e.is && e.is("br") && (b = e), t
                            };
                        if (K.guard = k, l = K.lastBackward(), R = R || m, this.setStartAt(R, !R.is("br") && (!l && this.checkStartOfBlock() || l && R.contains(l)) ? CKEDITOR.POSITION_AFTER_START : CKEDITOR.POSITION_AFTER_END), e == CKEDITOR.ENLARGE_LIST_ITEM_CONTENTS) {
                            var w = this.clone();
                            K = new CKEDITOR.dom.walker(w);
                            var S = CKEDITOR.dom.walker.whitespaces(), x = CKEDITOR.dom.walker.bookmark();
                            K.evaluator = function (e) {
                                return !S(e) && !x(e)
                            };
                            var A = K.previous();
                            if (A && A.type == CKEDITOR.NODE_ELEMENT && A.is("br"))return
                        }
                        D = this.clone(), D.collapse(), D.setEndAt(m, CKEDITOR.POSITION_BEFORE_END), K = new CKEDITOR.dom.walker(D), K.guard = e == CKEDITOR.ENLARGE_LIST_ITEM_CONTENTS ? N : k, R = _ = b = null, l = K.lastForward(), R = R || m, this.setEndAt(R, !l && this.checkEndOfBlock() || l && R.contains(l) ? CKEDITOR.POSITION_BEFORE_END : CKEDITOR.POSITION_BEFORE_START), b && this.setEndAfter(b)
                }
            }, shrink: function (e, t, n) {
                if (!this.collapsed) {
                    e = e || CKEDITOR.SHRINK_TEXT;
                    var i = this.clone(), o = this.startContainer, r = this.endContainer, a = this.startOffset,
                        s = this.endOffset, l = 1, c = 1;
                    o && o.type == CKEDITOR.NODE_TEXT && (a ? a >= o.getLength() ? i.setStartAfter(o) : (i.setStartBefore(o), l = 0) : i.setStartBefore(o)), r && r.type == CKEDITOR.NODE_TEXT && (s ? s >= r.getLength() ? i.setEndAfter(r) : (i.setEndAfter(r), c = 0) : i.setEndBefore(r));
                    var d = new CKEDITOR.dom.walker(i), u = CKEDITOR.dom.walker.bookmark();
                    d.evaluator = function (t) {
                        return t.type == (e == CKEDITOR.SHRINK_ELEMENT ? CKEDITOR.NODE_ELEMENT : CKEDITOR.NODE_TEXT)
                    };
                    var h;
                    if (d.guard = function (t, i) {
                            return u(t) ? !0 : e == CKEDITOR.SHRINK_ELEMENT && t.type == CKEDITOR.NODE_TEXT ? !1 : i && t.equals(h) ? !1 : n === !1 && t.type == CKEDITOR.NODE_ELEMENT && t.isBlockBoundary() ? !1 : t.type == CKEDITOR.NODE_ELEMENT && t.hasAttribute("contenteditable") ? !1 : (i || t.type != CKEDITOR.NODE_ELEMENT || (h = t), !0)
                        }, l) {
                        var f = d[e == CKEDITOR.SHRINK_ELEMENT ? "lastForward" : "next"]();
                        f && this.setStartAt(f, t ? CKEDITOR.POSITION_AFTER_START : CKEDITOR.POSITION_BEFORE_START)
                    }
                    if (c) {
                        d.reset();
                        var m = d[e == CKEDITOR.SHRINK_ELEMENT ? "lastBackward" : "previous"]();
                        m && this.setEndAt(m, t ? CKEDITOR.POSITION_BEFORE_END : CKEDITOR.POSITION_AFTER_END)
                    }
                    return !(!l && !c)
                }
            }, insertNode: function (e) {
                this.optimizeBookmark(), this.trim(!1, !0);
                var t = this.startContainer, n = this.startOffset, i = t.getChild(n);
                i ? e.insertBefore(i) : t.append(e), e.getParent() && e.getParent().equals(this.endContainer) && this.endOffset++, this.setStartBefore(e)
            }, moveToPosition: function (e, t) {
                this.setStartAt(e, t), this.collapse(!0)
            }, moveToRange: function (e) {
                this.setStart(e.startContainer, e.startOffset), this.setEnd(e.endContainer, e.endOffset)
            }, selectNodeContents: function (e) {
                this.setStart(e, 0), this.setEnd(e, e.type == CKEDITOR.NODE_TEXT ? e.getLength() : e.getChildCount())
            }, setStart: function (e, t) {
                e.type == CKEDITOR.NODE_ELEMENT && CKEDITOR.dtd.$empty[e.getName()] && (t = e.getIndex(), e = e.getParent()), this._setStartContainer(e), this.startOffset = t, this.endContainer || (this._setEndContainer(e), this.endOffset = t), i(this)
            }, setEnd: function (e, t) {
                e.type == CKEDITOR.NODE_ELEMENT && CKEDITOR.dtd.$empty[e.getName()] && (t = e.getIndex() + 1, e = e.getParent()), this._setEndContainer(e), this.endOffset = t, this.startContainer || (this._setStartContainer(e), this.startOffset = t), i(this)
            }, setStartAfter: function (e) {
                this.setStart(e.getParent(), e.getIndex() + 1)
            }, setStartBefore: function (e) {
                this.setStart(e.getParent(), e.getIndex())
            }, setEndAfter: function (e) {
                this.setEnd(e.getParent(), e.getIndex() + 1)
            }, setEndBefore: function (e) {
                this.setEnd(e.getParent(), e.getIndex())
            }, setStartAt: function (e, t) {
                switch (t) {
                    case CKEDITOR.POSITION_AFTER_START:
                        this.setStart(e, 0);
                        break;
                    case CKEDITOR.POSITION_BEFORE_END:
                        e.type == CKEDITOR.NODE_TEXT ? this.setStart(e, e.getLength()) : this.setStart(e, e.getChildCount());
                        break;
                    case CKEDITOR.POSITION_BEFORE_START:
                        this.setStartBefore(e);
                        break;
                    case CKEDITOR.POSITION_AFTER_END:
                        this.setStartAfter(e)
                }
                i(this)
            }, setEndAt: function (e, t) {
                switch (t) {
                    case CKEDITOR.POSITION_AFTER_START:
                        this.setEnd(e, 0);
                        break;
                    case CKEDITOR.POSITION_BEFORE_END:
                        e.type == CKEDITOR.NODE_TEXT ? this.setEnd(e, e.getLength()) : this.setEnd(e, e.getChildCount());
                        break;
                    case CKEDITOR.POSITION_BEFORE_START:
                        this.setEndBefore(e);
                        break;
                    case CKEDITOR.POSITION_AFTER_END:
                        this.setEndAfter(e)
                }
                i(this)
            }, fixBlock: function (e, t) {
                var n = this.createBookmark(), i = this.document.createElement(t);
                return this.collapse(e), this.enlarge(CKEDITOR.ENLARGE_BLOCK_CONTENTS), this.extractContents().appendTo(i), i.trim(), i.appendBogus(), this.insertNode(i), this.moveToBookmark(n), i
            }, splitBlock: function (e) {
                var t = new CKEDITOR.dom.elementPath(this.startContainer, this.root),
                    n = new CKEDITOR.dom.elementPath(this.endContainer, this.root), i = t.blockLimit, o = n.blockLimit,
                    r = t.block, a = n.block, s = null;
                if (!i.equals(o))return null;
                "br" != e && (r || (r = this.fixBlock(!0, e), a = new CKEDITOR.dom.elementPath(this.endContainer, this.root).block), a || (a = this.fixBlock(!1, e)));
                var l = r && this.checkStartOfBlock(), c = a && this.checkEndOfBlock();
                return this.deleteContents(), r && r.equals(a) && (c ? (s = new CKEDITOR.dom.elementPath(this.startContainer, this.root), this.moveToPosition(a, CKEDITOR.POSITION_AFTER_END), a = null) : l ? (s = new CKEDITOR.dom.elementPath(this.startContainer, this.root), this.moveToPosition(r, CKEDITOR.POSITION_BEFORE_START), r = null) : (a = this.splitElement(r), r.is("ul", "ol") || r.appendBogus())), {
                    previousBlock: r,
                    nextBlock: a,
                    wasStartOfBlock: l,
                    wasEndOfBlock: c,
                    elementPath: s
                }
            }, splitElement: function (e) {
                if (!this.collapsed)return null;
                this.setEndAt(e, CKEDITOR.POSITION_BEFORE_END);
                var t = this.extractContents(), n = e.clone(!1);
                return t.appendTo(n), n.insertAfter(e), this.moveToPosition(e, CKEDITOR.POSITION_AFTER_END), n
            }, removeEmptyBlocksAtEnd: function () {
                function e(e) {
                    return function (i) {
                        return t(i) || n(i) || i.type == CKEDITOR.NODE_ELEMENT && i.isEmptyInlineRemoveable() ? !1 : e.is("table") && i.is("caption") ? !1 : !0
                    }
                }

                var t = CKEDITOR.dom.walker.whitespaces(), n = CKEDITOR.dom.walker.bookmark(!1);
                return function (t) {
                    for (var n, i = this.createBookmark(), o = this[t ? "endPath" : "startPath"](), r = o.block || o.blockLimit; r && !r.equals(o.root) && !r.getFirst(e(r));)n = r.getParent(), this[t ? "setEndAt" : "setStartAt"](r, CKEDITOR.POSITION_AFTER_END), r.remove(1), r = n;
                    this.moveToBookmark(i)
                }
            }(), startPath: function () {
                return new CKEDITOR.dom.elementPath(this.startContainer, this.root)
            }, endPath: function () {
                return new CKEDITOR.dom.elementPath(this.endContainer, this.root)
            }, checkBoundaryOfElement: function (e, n) {
                var i = n == CKEDITOR.START, o = this.clone();
                o.collapse(i), o[i ? "setStartAt" : "setEndAt"](e, i ? CKEDITOR.POSITION_AFTER_START : CKEDITOR.POSITION_BEFORE_END);
                var r = new CKEDITOR.dom.walker(o);
                return r.evaluator = t(i), r[i ? "checkBackward" : "checkForward"]()
            }, checkStartOfBlock: function () {
                var t = this.startContainer, n = this.startOffset;
                if (CKEDITOR.env.ie && n && t.type == CKEDITOR.NODE_TEXT) {
                    var i = CKEDITOR.tools.ltrim(t.substring(0, n));
                    s.test(i) && this.trim(0, 1)
                }
                this.trim();
                var o = new CKEDITOR.dom.elementPath(this.startContainer, this.root), r = this.clone();
                r.collapse(!0), r.setStartAt(o.block || o.blockLimit, CKEDITOR.POSITION_AFTER_START);
                var a = new CKEDITOR.dom.walker(r);
                return a.evaluator = e(), a.checkBackward()
            }, checkEndOfBlock: function () {
                var t = this.endContainer, n = this.endOffset;
                if (CKEDITOR.env.ie && t.type == CKEDITOR.NODE_TEXT) {
                    var i = CKEDITOR.tools.rtrim(t.substring(n));
                    s.test(i) && this.trim(1, 0)
                }
                this.trim();
                var o = new CKEDITOR.dom.elementPath(this.endContainer, this.root), r = this.clone();
                r.collapse(!1), r.setEndAt(o.block || o.blockLimit, CKEDITOR.POSITION_BEFORE_END);
                var a = new CKEDITOR.dom.walker(r);
                return a.evaluator = e(), a.checkForward()
            }, getPreviousNode: function (e, t, n) {
                var i = this.clone();
                i.collapse(1), i.setStartAt(n || this.root, CKEDITOR.POSITION_AFTER_START);
                var o = new CKEDITOR.dom.walker(i);
                return o.evaluator = e, o.guard = t, o.previous()
            }, getNextNode: function (e, t, n) {
                var i = this.clone();
                i.collapse(), i.setEndAt(n || this.root, CKEDITOR.POSITION_BEFORE_END);
                var o = new CKEDITOR.dom.walker(i);
                return o.evaluator = e, o.guard = t, o.next()
            }, checkReadOnly: function () {
                function e(e, t) {
                    for (; e;) {
                        if (e.type == CKEDITOR.NODE_ELEMENT) {
                            if ("false" == e.getAttribute("contentEditable") && !e.data("cke-editable"))return 0;
                            if (e.is("html") || "true" == e.getAttribute("contentEditable") && (e.contains(t) || e.equals(t)))break
                        }
                        e = e.getParent()
                    }
                    return 1
                }

                return function () {
                    var t = this.startContainer, n = this.endContainer;
                    return !(e(t, n) && e(n, t))
                }
            }(), moveToElementEditablePosition: function (e, t) {
                function n(e, n) {
                    var i;
                    return e.type == CKEDITOR.NODE_ELEMENT && e.isEditable(!1) && (i = e[t ? "getLast" : "getFirst"](c)), n || i || (i = e[t ? "getPrevious" : "getNext"](c)), i
                }

                if (e.type == CKEDITOR.NODE_ELEMENT && !e.isEditable(!1))return this.moveToPosition(e, t ? CKEDITOR.POSITION_AFTER_END : CKEDITOR.POSITION_BEFORE_START), !0;
                for (var i = 0; e;) {
                    if (e.type == CKEDITOR.NODE_TEXT) {
                        t && this.endContainer && this.checkEndOfBlock() && s.test(e.getText()) ? this.moveToPosition(e, CKEDITOR.POSITION_BEFORE_START) : this.moveToPosition(e, t ? CKEDITOR.POSITION_AFTER_END : CKEDITOR.POSITION_BEFORE_START), i = 1;
                        break
                    }
                    if (e.type == CKEDITOR.NODE_ELEMENT)if (e.isEditable()) this.moveToPosition(e, t ? CKEDITOR.POSITION_BEFORE_END : CKEDITOR.POSITION_AFTER_START), i = 1; else if (t && e.is("br") && this.endContainer && this.checkEndOfBlock()) this.moveToPosition(e, CKEDITOR.POSITION_BEFORE_START); else if ("false" == e.getAttribute("contenteditable") && e.is(CKEDITOR.dtd.$block))return this.setStartBefore(e), this.setEndAfter(e), !0;
                    e = n(e, i)
                }
                return !!i
            }, moveToClosestEditablePosition: function (e, t) {
                var n, i = new CKEDITOR.dom.range(this.root), o = 0,
                    r = [CKEDITOR.POSITION_AFTER_END, CKEDITOR.POSITION_BEFORE_START];
                return i.moveToPosition(e, r[t ? 0 : 1]), e.is(CKEDITOR.dtd.$block) ? (n = i[t ? "getNextEditableNode" : "getPreviousEditableNode"](), n && (o = 1, n.type == CKEDITOR.NODE_ELEMENT && n.is(CKEDITOR.dtd.$block) && "false" == n.getAttribute("contenteditable") ? (i.setStartAt(n, CKEDITOR.POSITION_BEFORE_START), i.setEndAt(n, CKEDITOR.POSITION_AFTER_END)) : i.moveToPosition(n, r[t ? 1 : 0]))) : o = 1, o && this.moveToRange(i), !!o
            }, moveToElementEditStart: function (e) {
                return this.moveToElementEditablePosition(e)
            }, moveToElementEditEnd: function (e) {
                return this.moveToElementEditablePosition(e, !0)
            }, getEnclosedNode: function () {
                var e = this.clone();
                if (e.optimize(), e.startContainer.type != CKEDITOR.NODE_ELEMENT || e.endContainer.type != CKEDITOR.NODE_ELEMENT)return null;
                var t = new CKEDITOR.dom.walker(e), n = CKEDITOR.dom.walker.bookmark(!1, !0),
                    i = CKEDITOR.dom.walker.whitespaces(!0);
                t.evaluator = function (e) {
                    return i(e) && n(e)
                };
                var o = t.next();
                return t.reset(), o && o.equals(t.previous()) ? o : null
            }, getTouchedStartNode: function () {
                var e = this.startContainer;
                return this.collapsed || e.type != CKEDITOR.NODE_ELEMENT ? e : e.getChild(this.startOffset) || e
            }, getTouchedEndNode: function () {
                var e = this.endContainer;
                return this.collapsed || e.type != CKEDITOR.NODE_ELEMENT ? e : e.getChild(this.endOffset - 1) || e
            }, getNextEditableNode: n(), getPreviousEditableNode: n(1), scrollIntoView: function () {
                var e, t, n, i = new CKEDITOR.dom.element.createFromHtml("<span>&nbsp;</span>", this.document),
                    o = this.clone();
                o.optimize(), (n = o.startContainer.type == CKEDITOR.NODE_TEXT) ? (t = o.startContainer.getText(), e = o.startContainer.split(o.startOffset), i.insertAfter(o.startContainer)) : o.insertNode(i), i.scrollIntoView(), n && (o.startContainer.setText(t), e.remove()), i.remove()
            }, _setStartContainer: function (e) {
                this.startContainer = e
            }, _setEndContainer: function (e) {
                this.endContainer = e
            }
        }
    }(), CKEDITOR.POSITION_AFTER_START = 1, CKEDITOR.POSITION_BEFORE_END = 2, CKEDITOR.POSITION_BEFORE_START = 3, CKEDITOR.POSITION_AFTER_END = 4, CKEDITOR.ENLARGE_ELEMENT = 1, CKEDITOR.ENLARGE_BLOCK_CONTENTS = 2, CKEDITOR.ENLARGE_LIST_ITEM_CONTENTS = 3, CKEDITOR.ENLARGE_INLINE = 4, CKEDITOR.START = 1, CKEDITOR.END = 2, CKEDITOR.SHRINK_ELEMENT = 1, CKEDITOR.SHRINK_TEXT = 2, function () {
        function e(e) {
            arguments.length < 1 || (this.range = e, this.forceBrBreak = 0, this.enlargeBr = 1, this.enforceRealBlocks = 0, this._ || (this._ = {}))
        }

        function t() {
            var e, t = this.range.clone(), n = t.startPath(), i = t.endPath(), o = !t.collapsed && a(t, n.block),
                r = !t.collapsed && a(t, i.block, 1);
            if (t.shrink(CKEDITOR.SHRINK_ELEMENT, !0), o && t.setStartAt(n.block, CKEDITOR.POSITION_BEFORE_END), r && t.setEndAt(i.block, CKEDITOR.POSITION_AFTER_START), e = t.endContainer.hasAscendant("pre", !0) || t.startContainer.hasAscendant("pre", !0), t.enlarge(this.forceBrBreak && !e || !this.enlargeBr ? CKEDITOR.ENLARGE_LIST_ITEM_CONTENTS : CKEDITOR.ENLARGE_BLOCK_CONTENTS), !t.collapsed) {
                var s = new CKEDITOR.dom.walker(t.clone()), l = CKEDITOR.dom.walker.bookmark(!0, !0);
                s.evaluator = l, this._.nextNode = s.next(), s = new CKEDITOR.dom.walker(t.clone()), s.evaluator = l;
                var c = s.previous();
                if (this._.lastNode = c.getNextSourceNode(!0, null, t.root), this._.lastNode && this._.lastNode.type == CKEDITOR.NODE_TEXT && !CKEDITOR.tools.trim(this._.lastNode.getText()) && this._.lastNode.getParent().isBlockBoundary()) {
                    var d = this.range.clone();
                    if (d.moveToPosition(this._.lastNode, CKEDITOR.POSITION_AFTER_END), d.checkEndOfBlock()) {
                        var u = new CKEDITOR.dom.elementPath(d.endContainer, d.root), h = u.block || u.blockLimit;
                        this._.lastNode = h.getNextSourceNode(!0)
                    }
                }
                this._.lastNode && t.root.contains(this._.lastNode) || (this._.lastNode = this._.docEndMarker = t.document.createText(""), this._.lastNode.insertAfter(c)), t = null
            }
            return this._.started = 1, t
        }

        function n(e, t) {
            null == t && (t = o(e));
            for (var n; n = t.shift();)if (i(n))return {element: n, remaining: t};
            return null
        }

        function i(e) {
            return e.getDtd().p
        }

        function o(e) {
            var t = [];
            return e.forEach(function (e) {
                return "true" == e.getAttribute("contenteditable") ? (t.push(e), !1) : void 0
            }, CKEDITOR.NODE_ELEMENT, !0), t
        }

        function r(e, t, i, o) {
            var a = n(i, o);
            if (!a)return 0;
            var s = CKEDITOR.filter.instances[a.element.data("cke-filter")];
            if (s && !s.check(t))return r(e, t, i, a.remaining);
            var l = new CKEDITOR.dom.range(a.element);
            l.selectNodeContents(a.element);
            var c = l.createIterator();
            return c.enlargeBr = e.enlargeBr, c.enforceRealBlocks = e.enforceRealBlocks, c.activeFilter = c.filter = s, e._.nestedEditable = {
                element: a.element,
                container: i,
                remaining: a.remaining,
                iterator: c
            }, 1
        }

        function a(e, t, n) {
            if (!t)return !1;
            var i = e.clone();
            return i.collapse(!n), i.checkBoundaryOfElement(t, n ? CKEDITOR.START : CKEDITOR.END)
        }

        var s = /^[\r\n\t ]+$/, l = CKEDITOR.dom.walker.bookmark(!1, !0), c = CKEDITOR.dom.walker.whitespaces(!0),
            d = function (e) {
                return l(e) && c(e)
            }, u = {dd: 1, dt: 1, li: 1};
        e.prototype = {
            getNextParagraph: function (e) {
                var n, i, o, a, c;
                if (e = e || "p", this._.nestedEditable) {
                    if (n = this._.nestedEditable.iterator.getNextParagraph(e))return this.activeFilter = this._.nestedEditable.iterator.activeFilter, n;
                    if (this.activeFilter = this.filter, r(this, e, this._.nestedEditable.container, this._.nestedEditable.remaining))return this.activeFilter = this._.nestedEditable.iterator.activeFilter, this._.nestedEditable.iterator.getNextParagraph(e);
                    this._.nestedEditable = null
                }
                if (!this.range.root.getDtd()[e])return null;
                this._.started || (i = t.call(this));
                var h = this._.nextNode, f = this._.lastNode;
                for (this._.nextNode = null; h;) {
                    var m = 0, E = h.hasAscendant("pre"), g = h.type != CKEDITOR.NODE_ELEMENT, p = 0;
                    if (g) h.type == CKEDITOR.NODE_TEXT && s.test(h.getText()) && (g = 0); else {
                        var T = h.getName();
                        if (CKEDITOR.dtd.$block[T] && "false" == h.getAttribute("contenteditable")) {
                            n = h, r(this, e, n);
                            break
                        }
                        if (h.isBlockBoundary(this.forceBrBreak && !E && {br: 1})) {
                            if ("br" == T) g = 1; else if (!i && !h.getChildCount() && "hr" != T) {
                                n = h, o = h.equals(f);
                                break
                            }
                            i && (i.setEndAt(h, CKEDITOR.POSITION_BEFORE_START), "br" != T && (this._.nextNode = h)), m = 1
                        } else {
                            if (h.getFirst()) {
                                i || (i = this.range.clone(), i.setStartAt(h, CKEDITOR.POSITION_BEFORE_START)), h = h.getFirst();
                                continue
                            }
                            g = 1
                        }
                    }
                    if (g && !i && (i = this.range.clone(), i.setStartAt(h, CKEDITOR.POSITION_BEFORE_START)), o = (!m || g) && h.equals(f), i && !m)for (; !h.getNext(d) && !o;) {
                        var C = h.getParent();
                        if (C.isBlockBoundary(this.forceBrBreak && !E && {br: 1})) {
                            m = 1, g = 0, o = o || C.equals(f), i.setEndAt(C, CKEDITOR.POSITION_BEFORE_END);
                            break
                        }
                        h = C, g = 1, o = h.equals(f), p = 1
                    }
                    if (g && i.setEndAt(h, CKEDITOR.POSITION_AFTER_END), h = this._getNextSourceNode(h, p, f), o = !h, o || m && i)break
                }
                if (!n) {
                    if (!i)return this._.docEndMarker && this._.docEndMarker.remove(), this._.nextNode = null, null;
                    var v = new CKEDITOR.dom.elementPath(i.startContainer, i.root), I = v.blockLimit,
                        O = {div: 1, th: 1, td: 1};
                    if (n = v.block, !n && I && !this.enforceRealBlocks && O[I.getName()] && i.checkStartOfBlock() && i.checkEndOfBlock() && !I.equals(i.root)) n = I; else if (!n || this.enforceRealBlocks && n.is(u)) n = this.range.document.createElement(e), i.extractContents().appendTo(n), n.trim(), i.insertNode(n), a = c = !0; else if ("li" != n.getName()) {
                        if (!i.checkStartOfBlock() || !i.checkEndOfBlock()) {
                            n = n.clone(!1), i.extractContents().appendTo(n), n.trim();
                            var D = i.splitBlock();
                            a = !D.wasStartOfBlock, c = !D.wasEndOfBlock, i.insertNode(n)
                        }
                    } else o || (this._.nextNode = n.equals(f) ? null : this._getNextSourceNode(i.getBoundaryNodes().endNode, 1, f))
                }
                if (a) {
                    var R = n.getPrevious();
                    R && R.type == CKEDITOR.NODE_ELEMENT && ("br" == R.getName() ? R.remove() : R.getLast() && "br" == R.getLast().$.nodeName.toLowerCase() && R.getLast().remove())
                }
                if (c) {
                    var b = n.getLast();
                    b && b.type == CKEDITOR.NODE_ELEMENT && "br" == b.getName() && (!CKEDITOR.env.needsBrFiller || b.getPrevious(l) || b.getNext(l)) && b.remove()
                }
                return this._.nextNode || (this._.nextNode = o || n.equals(f) || !f ? null : this._getNextSourceNode(n, 1, f)), n
            }, _getNextSourceNode: function (e, t, n) {
                function i(e) {
                    return !(e.equals(n) || e.equals(r))
                }

                var o, r = this.range.root;
                for (o = e.getNextSourceNode(t, null, i); !l(o);)o = o.getNextSourceNode(t, null, i);
                return o
            }
        }, CKEDITOR.dom.range.prototype.createIterator = function () {
            return new e(this)
        }
    }(), CKEDITOR.command = function (e, t) {
        this.uiItems = [], this.exec = function (n) {
            return this.state != CKEDITOR.TRISTATE_DISABLED && this.checkAllowed() ? (this.editorFocus && e.focus(), this.fire("exec") === !1 ? !0 : t.exec.call(this, e, n) !== !1) : !1
        }, this.refresh = function (e, n) {
            return !this.readOnly && e.readOnly ? !0 : this.context && !n.isContextFor(this.context) ? (this.disable(), !0) : this.checkAllowed(!0) ? (this.startDisabled || this.enable(), this.modes && !this.modes[e.mode] && this.disable(), this.fire("refresh", {
                editor: e,
                path: n
            }) === !1 ? !0 : t.refresh && t.refresh.apply(this, arguments) !== !1) : (this.disable(), !0)
        };
        var n;
        this.checkAllowed = function (t) {
            return t || "boolean" != typeof n ? n = e.activeFilter.checkFeature(this) : n
        }, CKEDITOR.tools.extend(this, t, {
            modes: {wysiwyg: 1},
            editorFocus: 1,
            contextSensitive: !!t.context,
            state: CKEDITOR.TRISTATE_DISABLED
        }), CKEDITOR.event.call(this)
    }, CKEDITOR.command.prototype = {
        enable: function () {
            this.state == CKEDITOR.TRISTATE_DISABLED && this.checkAllowed() && this.setState(this.preserveState && "undefined" != typeof this.previousState ? this.previousState : CKEDITOR.TRISTATE_OFF)
        }, disable: function () {
            this.setState(CKEDITOR.TRISTATE_DISABLED)
        }, setState: function (e) {
            return this.state == e ? !1 : e == CKEDITOR.TRISTATE_DISABLED || this.checkAllowed() ? (this.previousState = this.state, this.state = e, this.fire("state"), !0) : !1
        }, toggleState: function () {
            this.state == CKEDITOR.TRISTATE_OFF ? this.setState(CKEDITOR.TRISTATE_ON) : this.state == CKEDITOR.TRISTATE_ON && this.setState(CKEDITOR.TRISTATE_OFF)
        }
    }, CKEDITOR.event.implementOn(CKEDITOR.command.prototype), CKEDITOR.ENTER_P = 1, CKEDITOR.ENTER_BR = 2, CKEDITOR.ENTER_DIV = 3, CKEDITOR.config = {
        customConfig: "config.js",
        autoUpdateElement: !0,
        language: "",
        defaultLanguage: "en",
        contentsLangDirection: "",
        enterMode: CKEDITOR.ENTER_P,
        forceEnterMode: !1,
        shiftEnterMode: CKEDITOR.ENTER_BR,
        docType: "<!DOCTYPE html>",
        bodyId: "",
        bodyClass: "",
        fullPage: !1,
        height: 200,
        extraPlugins: "",
        removePlugins: "",
        protectedSource: [],
        tabIndex: 0,
        width: "",
        baseFloatZIndex: 1e4,
        blockedKeystrokes: [CKEDITOR.CTRL + 66, CKEDITOR.CTRL + 73, CKEDITOR.CTRL + 85]
    }, function () {
        "use strict";
        function e(e, t, n, i, o) {
            var r, a, s = [];
            for (r in t)a = t[r], a = "boolean" == typeof a ? {} : "function" == typeof a ? {match: a} : Y(a), "$" != r.charAt(0) && (a.elements = r), n && (a.featureName = n.toLowerCase()), y(a), i.push(a), s.push(a);
            v(o, s)
        }

        function t(e, t, o, r) {
            (!e.match || e.match(t)) && (r || f(e, t)) && (e.propertiesOnly || (o.valid = !0), o.allAttributes || (o.allAttributes = i(e.attributes, t.attributes, o.validAttributes)), o.allStyles || (o.allStyles = i(e.styles, t.styles, o.validStyles)), o.allClasses || (o.allClasses = n(e.classes, t.classes, o.validClasses)))
        }

        function n(e, t, n) {
            if (!e)return !1;
            if (e === !0)return !0;
            for (var i, o = 0, r = t.length; r > o; ++o)i = t[o], n[i] || (n[i] = e(i));
            return !1
        }

        function i(e, t, n) {
            if (!e)return !1;
            if (e === !0)return !0;
            for (var i in t)n[i] || (n[i] = e(i));
            return !1
        }

        function o(e, t, n) {
            if (!e.match || e.match(t)) {
                if (e.noProperties)return !1;
                n.hadInvalidAttribute = a(e.attributes, t.attributes) || n.hadInvalidAttribute, n.hadInvalidStyle = a(e.styles, t.styles) || n.hadInvalidStyle, n.hadInvalidClass = r(e.classes, t.classes) || n.hadInvalidClass
            }
        }

        function r(e, t) {
            if (!e)return !1;
            for (var n = !1, i = e === !0, o = t.length; o--;)(i || e(t[o])) && (t.splice(o, 1), n = !0);
            return n
        }

        function a(e, t) {
            if (!e)return !1;
            var n = !1, i = e === !0;
            for (var o in t)(i || e(o)) && (delete t[o], n = !0);
            return n
        }

        function s(e, t, n) {
            return e.disabled ? !1 : e.customConfig && !n ? !1 : t ? (e._.cachedChecks = {}, !0) : !1
        }

        function l(e) {
            var t, n = e.getDefinition(), i = {}, o = n.attributes;
            return i[n.element] = t = {
                styles: n.styles,
                requiredStyles: n.styles && CKEDITOR.tools.objectKeys(n.styles)
            }, o && (o = Y(o), t.classes = o["class"] ? o["class"].split(/\s+/) : null, t.requiredClasses = t.classes, delete o["class"], t.attributes = o, t.requiredAttributes = o && CKEDITOR.tools.objectKeys(o)), i
        }

        function c(e, t) {
            if (!e)return !1;
            if (e === !0)return e;
            if ("string" == typeof e)return e = Z(e), "*" == e ? !0 : CKEDITOR.tools.convertArrayToObject(e.split(t));
            if (CKEDITOR.tools.isArray(e))return e.length ? CKEDITOR.tools.convertArrayToObject(e) : !1;
            var n = {}, i = 0;
            for (var o in e)n[o] = e[o], i++;
            return i ? n : !1
        }

        function d(e, t) {
            for (var n, i = 0, o = t.length; o > i; ++i)if (n = t[i](e))return n
        }

        function u(e, t) {
            var n, i = [], o = !0;
            e ? o = !1 : e = {};
            for (n in t)"!" == n.charAt(0) && (n = n.slice(1), i.push(n), e[n] = !0, o = !1);
            for (; n = i.pop();)t[n] = t["!" + n], delete t["!" + n];
            return o ? !1 : e
        }

        function h(e, n, i) {
            var r, a, s = n.name, l = e._, c = l.allowedRules.elements[s], d = l.allowedRules.generic,
                u = l.disallowedRules.elements[s], h = l.disallowedRules.generic, f = i.skipRequired, m = {
                    valid: !1,
                    validAttributes: {},
                    validClasses: {},
                    validStyles: {},
                    allAttributes: !1,
                    allClasses: !1,
                    allStyles: !1,
                    hadInvalidAttribute: !1,
                    hadInvalidClass: !1,
                    hadInvalidStyle: !1
                };
            if (!c && !d)return null;
            if (D(n), u)for (r = 0, a = u.length; a > r; ++r)if (o(u[r], n, m) === !1)return null;
            if (h)for (r = 0, a = h.length; a > r; ++r)o(h[r], n, m);
            if (c)for (r = 0, a = c.length; a > r; ++r)t(c[r], n, m, f);
            if (d)for (r = 0, a = d.length; a > r; ++r)t(d[r], n, m, f);
            return m
        }

        function f(e, t) {
            if (e.nothingRequired)return !0;
            var n, i, o, r;
            if (o = e.requiredClasses)for (r = t.classes, n = 0; n < o.length; ++n)if (i = o[n], "string" == typeof i) {
                if (-1 == CKEDITOR.tools.indexOf(r, i))return !1
            } else if (!CKEDITOR.tools.checkIfAnyArrayItemMatches(r, i))return !1;
            return m(t.styles, e.requiredStyles) && m(t.attributes, e.requiredAttributes)
        }

        function m(e, t) {
            if (!t)return !0;
            for (var n, i = 0; i < t.length; ++i)if (n = t[i], "string" == typeof n) {
                if (!(n in e))return !1
            } else if (!CKEDITOR.tools.checkIfAnyObjectPropertyMatches(e, n))return !1;
            return !0
        }

        function E(e) {
            var t = I(e).$1, n = t.styles, i = t.classes;
            return t.name = t.elements, t.classes = i = i ? i.split(/\s*,\s*/) : [], t.styles = p(n), t.attributes = p(t.attributes), t.children = [], i.length && (t.attributes["class"] = i.join(" ")), n && (t.attributes.style = CKEDITOR.tools.writeCssText(t.styles)), t
        }

        function g(e) {
            var t = e.getDefinition(), n = t.styles, i = t.attributes || {};
            n ? (n = Y(n), i.style = CKEDITOR.tools.writeCssText(n, !0)) : n = {};
            var o = {
                name: t.element,
                attributes: i,
                classes: i["class"] ? i["class"].split(/\s+/) : [],
                styles: n,
                children: []
            };
            return o
        }

        function p(e) {
            if (!e)return {};
            for (var t = e.split(/\s*,\s*/).sort(), n = {}; t.length;)n[t.shift()] = J;
            return n
        }

        function T(e) {
            var t = [];
            for (var n in e)t.push(n.indexOf("*") > -1 ? new RegExp("^" + n.replace(/\*/g, ".*") + "$") : n);
            return t
        }

        function C(e) {
            var t, n, i;
            for (t in et)e[t] = S(e[t]);
            var o = !0;
            for (i in tt)t = tt[i], n = T(e[t]), n.length && (e[t] = n, o = !1);
            e.nothingRequired = o, e.noProperties = !(e.attributes || e.classes || e.styles)
        }

        function v(e, t) {
            var n, i, o, r, a, s = e.elements, l = e.generic;
            for (n = 0, i = t.length; i > n; ++n)if (o = Y(t[n]), a = o.classes === !0 || o.styles === !0 || o.attributes === !0, C(o), o.elements === !0 || null === o.elements) l[a ? "unshift" : "push"](o); else {
                var c = o.elements;
                delete o.elements;
                for (r in c)s[r] ? s[r][a ? "unshift" : "push"](o) : s[r] = [o]
            }
        }

        function I(e) {
            var t, n, i, o, r, a = {}, s = 1;
            for (e = Z(e); t = e.match(nt);)(n = t[2]) ? (i = O(n, "styles"), o = O(n, "attrs"), r = O(n, "classes")) : i = o = r = null, a["$" + s++] = {
                elements: t[1],
                classes: r,
                styles: i,
                attributes: o
            }, e = e.slice(t[0].length);
            return a
        }

        function O(e, t) {
            var n = e.match(it[t]);
            return n ? Z(n[1]) : null
        }

        function D(e) {
            var t = e.styleBackup = e.attributes.style, n = e.classBackup = e.attributes["class"];
            e.styles || (e.styles = CKEDITOR.tools.parseCssText(t || "", 1)), e.classes || (e.classes = n ? n.split(/\s+/) : [])
        }

        function R(e, t, n, i) {
            var o, r, a, s, l = decodeURIComponent(t.value.replace(/^\{cke_protected\}/, "")), c = [];
            if (n)for (a = 0; a < n.length; ++a)if ((s = l.match(n[a])) && s[0].length == l.length)return !0;
            return o = CKEDITOR.htmlParser.fragment.fromHtml(l), 1 == o.children.length && (r = o.children[0]).type == CKEDITOR.NODE_ELEMENT && b(e, r, c, i), !c.length
        }

        function b(e, t, n, i) {
            var o, r, a = 0;
            if (i.toHtml && (t.name = t.name.replace(ot, "$1")), i.doCallbacks && e.elementCallbacks && (r = d(t, e.elementCallbacks)))return r;
            if (i.doTransform && _(e, t), i.doFilter) {
                if (o = h(e, t, i), !o)return n.push(t), G;
                if (!o.valid)return n.push(t), G;
                if (N(t, o) && (a = G), !i.skipFinalValidation && !w(t))return n.push(t), G
            }
            return i.toHtml && (t.name = t.name.replace(rt, "cke:$1")), a
        }

        function K(e) {
            var t, n = [];
            for (t in e)t.indexOf("*") > -1 && n.push(t.replace(/\*/g, ".*"));
            return n.length ? new RegExp("^(?:" + n.join("|") + ")$") : null
        }

        function y(e) {
            e.elements = c(e.elements, /\s+/) || null, e.propertiesOnly = e.propertiesOnly || e.elements === !0;
            var t, n = /\s*,\s*/;
            for (t in et)e[t] = c(e[t], n) || null, e[tt[t]] = u(c(e[tt[t]], n), e[t]) || null;
            e.match = e.match || null
        }

        function _(e, t) {
            var n, i = e._.transformations[t.name];
            if (i) {
                for (D(t), n = 0; n < i.length; ++n)M(e, t, i[n]);
                k(t)
            }
        }

        function k(e) {
            var t, n = e.attributes;
            delete n.style, delete n["class"], (t = CKEDITOR.tools.writeCssText(e.styles, !0)) && (n.style = t), e.classes.length && (n["class"] = e.classes.sort().join(" "))
        }

        function N(e, t) {
            var n, i, o, r = t.validAttributes, a = t.validStyles, s = t.validClasses, l = e.attributes, c = e.styles,
                d = e.classes, u = e.classBackup, h = e.styleBackup, f = [], m = [], E = /^data-cke-/, g = !1;
            if (delete l.style, delete l["class"], delete e.classBackup, delete e.styleBackup, !t.allAttributes)for (n in l)r[n] || (E.test(n) ? n == (i = n.replace(/^data-cke-saved-/, "")) || r[i] || (delete l[n], g = !0) : (delete l[n], g = !0));
            if (!t.allStyles || t.hadInvalidStyle) {
                for (n in c)t.allStyles || a[n] ? f.push(n + ":" + c[n]) : g = !0;
                f.length && (l.style = f.sort().join("; "))
            } else h && (l.style = h);
            if (!t.allClasses || t.hadInvalidClass) {
                for (o = 0; o < d.length; ++o)(t.allClasses || s[d[o]]) && m.push(d[o]);
                m.length && (l["class"] = m.sort().join(" ")), u && m.length < u.split(/\s+/).length && (g = !0)
            } else u && (l["class"] = u);
            return g
        }

        function w(e) {
            switch (e.name) {
                case"a":
                    if (!e.children.length && !e.attributes.name)return !1;
                    break;
                case"img":
                    if (!e.attributes.src)return !1
            }
            return !0
        }

        function S(e) {
            if (!e)return !1;
            if (e === !0)return !0;
            var t = K(e);
            return function (n) {
                return n in e || t && n.match(t)
            }
        }

        function x(e, t) {
            for (var n, i = W[t], o = 0, r = e.length; r > o; ++o)if (n = e[o], n.type == CKEDITOR.NODE_ELEMENT && !i[n.name])return !1;
            return !0
        }

        function A() {
            return new CKEDITOR.htmlParser.element("br")
        }

        function L(e) {
            return e.type == CKEDITOR.NODE_TEXT || e.type == CKEDITOR.NODE_ELEMENT && W.$inline[e.name]
        }

        function P(e) {
            return e.type == CKEDITOR.NODE_ELEMENT && ("br" == e.name || W.$block[e.name])
        }

        function B(e, t, n) {
            var i = e.name;
            W.$empty[i] || !e.children.length ? "hr" == i && "br" == t ? e.replaceWith(A()) : (e.parent && n.push({
                check: "it",
                el: e.parent
            }), e.remove()) : W.$block[i] || "tr" == i ? "br" == t ? $(e, n) : F(e, t, n) : "style" == i ? e.remove() : (e.parent && n.push({
                check: "it",
                el: e.parent
            }), e.replaceWithChildren())
        }

        function F(e, t, n) {
            var i = e.children;
            if (x(i, t))return e.name = t, e.attributes = {}, void n.push({check: "parent-down", el: e});
            var o, r, a, s, l = e.parent, c = l.type == CKEDITOR.NODE_DOCUMENT_FRAGMENT || "body" == l.name;
            for (o = i.length; o > 0;)r = i[--o], c && L(r) ? (a || (a = new CKEDITOR.htmlParser.element(t), a.insertAfter(e), n.push({
                check: "parent-down",
                el: a
            })), a.add(r, 0)) : (a = null, s = W[l.name] || W.span, r.insertAfter(e), l.type == CKEDITOR.NODE_DOCUMENT_FRAGMENT || r.type != CKEDITOR.NODE_ELEMENT || s[r.name] || n.push({
                check: "el-up",
                el: r
            }));
            e.remove()
        }

        function $(e) {
            var t;
            e.previous && !P(e.previous) && (t = A(), t.insertBefore(e)), e.next && !P(e.next) && (t = A(), t.insertAfter(e)), e.replaceWithChildren()
        }

        function M(e, t, n) {
            var i, o;
            for (i = 0; i < n.length; ++i)if (o = n[i], !(o.check && !e.check(o.check, !1) || o.left && !o.left(t)))return void o.right(t, at)
        }

        function H(e, t) {
            var n, i, o, r, a, s = t.getDefinition(), l = s.attributes, c = s.styles;
            if (e.name != s.element)return !1;
            for (n in l)if ("class" == n) {
                for (o = l[n].split(/\s+/), r = e.classes.join("|"); a = o.pop();)if (-1 == r.indexOf(a))return !1
            } else if (e.attributes[n] != l[n])return !1;
            for (i in c)if (e.styles[i] != c[i])return !1;
            return !0
        }

        function q(e, t) {
            var n, i;
            return "string" == typeof e ? n = e : e instanceof CKEDITOR.style ? i = e : (n = e[0], i = e[1]), [{
                element: n,
                left: i,
                right: function (e, n) {
                    n.transform(e, t)
                }
            }]
        }

        function z(e, t) {
            return e.element ? e.element : t ? t.match(/^([a-z0-9]+)/i)[0] : e.left.getDefinition().element
        }

        function U(e) {
            return function (t) {
                return H(t, e)
            }
        }

        function j(e) {
            return function (t, n) {
                n[e](t)
            }
        }

        function V(e) {
            var t, n, i, o, r, a, s = [];
            for (n = 0; n < e.length; ++n)i = e[n], "string" == typeof i ? (i = i.split(/\s*:\s*/), o = i[0], r = null, a = i[1]) : (o = i.check, r = i.left, a = i.right), t || (t = z(i, o)), r instanceof CKEDITOR.style && (r = U(r)), s.push({
                check: o == t ? null : o,
                left: r,
                right: "string" == typeof a ? j(a) : a
            });
            return {name: t, rules: s}
        }

        var W = CKEDITOR.dtd, G = 1, X = 2, Y = CKEDITOR.tools.copy, Z = CKEDITOR.tools.trim, J = "cke-test",
            Q = ["", "p", "br", "div"];
        CKEDITOR.FILTER_SKIP_TREE = X, CKEDITOR.filter = function (e) {
            if (this.allowedContent = [], this.disallowedContent = [], this.elementCallbacks = null, this.disabled = !1, this.editor = null, this.id = CKEDITOR.tools.getNextNumber(), this._ = {
                    allowedRules: {
                        elements: {},
                        generic: []
                    }, disallowedRules: {elements: {}, generic: []}, transformations: {}, cachedTests: {}
                }, CKEDITOR.filter.instances[this.id] = this, e instanceof CKEDITOR.editor) {
                var t = this.editor = e;
                this.customConfig = !0;
                var n = t.config.allowedContent;
                if (n === !0)return void(this.disabled = !0);
                n || (this.customConfig = !1), this.allow(n, "config", 1), this.allow(t.config.extraAllowedContent, "extra", 1), this.allow(Q[t.enterMode] + " " + Q[t.shiftEnterMode], "default", 1), this.disallow(t.config.disallowedContent)
            } else this.customConfig = !1, this.allow(e, "default", 1)
        }, CKEDITOR.filter.instances = {}, CKEDITOR.filter.prototype = {
            allow: function (t, n, i) {
                if (!s(this, t, i))return !1;
                var o, r;
                if ("string" == typeof t) t = I(t); else if (t instanceof CKEDITOR.style) {
                    if (t.toAllowedContentRules)return this.allow(t.toAllowedContentRules(this.editor), n, i);
                    t = l(t)
                } else if (CKEDITOR.tools.isArray(t)) {
                    for (o = 0; o < t.length; ++o)r = this.allow(t[o], n, i);
                    return r
                }
                return e(this, t, n, this.allowedContent, this._.allowedRules), !0
            }, applyTo: function (e, t, n, i) {
                if (this.disabled)return !1;
                var o, r = this, a = [], s = this.editor && this.editor.config.protectedSource, l = !1,
                    c = {doFilter: !n, doTransform: !0, doCallbacks: !0, toHtml: t};
                e.forEach(function (e) {
                    if (e.type == CKEDITOR.NODE_ELEMENT) {
                        if ("off" == e.attributes["data-cke-filter"])return !1;
                        if (t && "span" == e.name && ~CKEDITOR.tools.objectKeys(e.attributes).join("|").indexOf("data-cke-"))return;
                        if (o = b(r, e, a, c), o & G) l = !0; else if (o & X)return !1
                    } else e.type == CKEDITOR.NODE_COMMENT && e.value.match(/^\{cke_protected\}(?!\{C\})/) && (R(r, e, s, c) || a.push(e))
                }, null, !0), a.length && (l = !0);
                for (var d, u, h, f, m = [], E = Q[i || (this.editor ? this.editor.enterMode : CKEDITOR.ENTER_P)]; d = a.pop();)d.type == CKEDITOR.NODE_ELEMENT ? B(d, E, m) : d.remove();
                for (; h = m.pop();)if (u = h.el, u.parent)switch (f = W[u.parent.name] || W.span, h.check) {
                    case"it":
                        W.$removeEmpty[u.name] && !u.children.length ? B(u, E, m) : w(u) || B(u, E, m);
                        break;
                    case"el-up":
                        u.parent.type == CKEDITOR.NODE_DOCUMENT_FRAGMENT || f[u.name] || B(u, E, m);
                        break;
                    case"parent-down":
                        u.parent.type == CKEDITOR.NODE_DOCUMENT_FRAGMENT || f[u.name] || B(u.parent, E, m)
                }
                return l
            }, checkFeature: function (e) {
                return this.disabled ? !0 : e ? (e.toFeature && (e = e.toFeature(this.editor)), !e.requiredContent || this.check(e.requiredContent)) : !0
            }, disable: function () {
                this.disabled = !0
            }, disallow: function (t) {
                return s(this, t, !0) ? ("string" == typeof t && (t = I(t)), e(this, t, null, this.disallowedContent, this._.disallowedRules), !0) : !1
            }, addContentForms: function (e) {
                if (!this.disabled && e) {
                    var t, n, i, o = [];
                    for (t = 0; t < e.length && !i; ++t)n = e[t], ("string" == typeof n || n instanceof CKEDITOR.style) && this.check(n) && (i = n);
                    if (i) {
                        for (t = 0; t < e.length; ++t)o.push(q(e[t], i));
                        this.addTransformations(o)
                    }
                }
            }, addElementCallback: function (e) {
                this.elementCallbacks || (this.elementCallbacks = []), this.elementCallbacks.push(e)
            }, addFeature: function (e) {
                return this.disabled ? !0 : e ? (e.toFeature && (e = e.toFeature(this.editor)), this.allow(e.allowedContent, e.name), this.addTransformations(e.contentTransformations), this.addContentForms(e.contentForms), e.requiredContent && (this.customConfig || this.disallowedContent.length) ? this.check(e.requiredContent) : !0) : !0
            }, addTransformations: function (e) {
                if (!this.disabled && e) {
                    var t, n, i = this._.transformations;
                    for (n = 0; n < e.length; ++n)t = V(e[n]), i[t.name] || (i[t.name] = []), i[t.name].push(t.rules)
                }
            }, check: function (e, t, n) {
                if (this.disabled)return !0;
                if (CKEDITOR.tools.isArray(e)) {
                    for (var i = e.length; i--;)if (this.check(e[i], t, n))return !0;
                    return !1
                }
                var o, r, a;
                if ("string" == typeof e) {
                    if (a = e + "<" + (t === !1 ? "0" : "1") + (n ? "1" : "0") + ">", a in this._.cachedChecks)return this._.cachedChecks[a];
                    o = E(e)
                } else o = g(e);
                var s, l = CKEDITOR.tools.clone(o), c = [];
                if (t !== !1 && (s = this._.transformations[o.name])) {
                    for (i = 0; i < s.length; ++i)M(this, o, s[i]);
                    k(o)
                }
                return b(this, l, c, {
                    doFilter: !0,
                    doTransform: t !== !1,
                    skipRequired: !n,
                    skipFinalValidation: !n
                }), r = c.length > 0 ? !1 : CKEDITOR.tools.objectCompare(o.attributes, l.attributes, !0) ? !0 : !1, "string" == typeof e && (this._.cachedChecks[a] = r), r
            }, getAllowedEnterMode: function () {
                var e = ["p", "div", "br"], t = {p: CKEDITOR.ENTER_P, div: CKEDITOR.ENTER_DIV, br: CKEDITOR.ENTER_BR};
                return function (n, i) {
                    var o, r = e.slice();
                    if (this.check(Q[n]))return n;
                    for (i || (r = r.reverse()); o = r.pop();)if (this.check(o))return t[o];
                    return CKEDITOR.ENTER_BR
                }
            }(), destroy: function () {
                delete CKEDITOR.filter.instances[this.id], delete this._, delete this.allowedContent, delete this.disallowedContent
            }
        };
        var et = {styles: 1, attributes: 1, classes: 1},
            tt = {styles: "requiredStyles", attributes: "requiredAttributes", classes: "requiredClasses"},
            nt = /^([a-z0-9\-*\s]+)((?:\s*\{[!\w\-,\s\*]+\}\s*|\s*\[[!\w\-,\s\*]+\]\s*|\s*\([!\w\-,\s\*]+\)\s*){0,3})(?:;\s*|$)/i,
            it = {styles: /{([^}]+)}/, attrs: /\[([^\]]+)\]/, classes: /\(([^\)]+)\)/},
            ot = /^cke:(object|embed|param)$/, rt = /^(object|embed|param)$/,
            at = CKEDITOR.filter.transformationsTools = {
                sizeToStyle: function (e) {
                    this.lengthToStyle(e, "width"), this.lengthToStyle(e, "height")
                }, sizeToAttribute: function (e) {
                    this.lengthToAttribute(e, "width"), this.lengthToAttribute(e, "height")
                }, lengthToStyle: function (e, t, n) {
                    if (n = n || t, !(n in e.styles)) {
                        var i = e.attributes[t];
                        i && (/^\d+$/.test(i) && (i += "px"), e.styles[n] = i)
                    }
                    delete e.attributes[t]
                }, lengthToAttribute: function (e, t, n) {
                    if (n = n || t, !(n in e.attributes)) {
                        var i = e.styles[t], o = i && i.match(/^(\d+)(?:\.\d*)?px$/);
                        o ? e.attributes[n] = o[1] : i == J && (e.attributes[n] = J)
                    }
                    delete e.styles[t]
                }, alignmentToStyle: function (e) {
                    if (!("float" in e.styles)) {
                        var t = e.attributes.align;
                        ("left" == t || "right" == t) && (e.styles["float"] = t)
                    }
                    delete e.attributes.align
                }, alignmentToAttribute: function (e) {
                    if (!("align" in e.attributes)) {
                        var t = e.styles["float"];
                        ("left" == t || "right" == t) && (e.attributes.align = t)
                    }
                    delete e.styles["float"]
                }, matchesStyle: H, transform: function (e, t) {
                    if ("string" == typeof t) e.name = t; else {
                        var n, i, o, r, a, s = t.getDefinition(), l = s.styles, c = s.attributes;
                        e.name = s.element;
                        for (n in c)if ("class" == n)for (o = e.classes.join("|"), r = c[n].split(/\s+/); a = r.pop();)-1 == o.indexOf(a) && e.classes.push(a); else e.attributes[n] = c[n];
                        for (i in l)e.styles[i] = l[i]
                    }
                }
            }
    }(), function () {
        CKEDITOR.focusManager = function (e) {
            return e.focusManager ? e.focusManager : (this.hasFocus = !1, this.currentActive = null, this._ = {editor: e}, this)
        };
        var e = "focusmanager", t = "focusmanager_handlers";
        CKEDITOR.focusManager._ = {blurDelay: 200}, CKEDITOR.focusManager.prototype = {
            focus: function (e) {
                if (this._.timer && clearTimeout(this._.timer), e && (this.currentActive = e), !this.hasFocus && !this._.locked) {
                    var t = CKEDITOR.currentInstance;
                    t && t.focusManager.blur(1), this.hasFocus = !0;
                    var n = this._.editor.container;
                    n && n.addClass("cke_focus"), this._.editor.fire("focus")
                }
            }, lock: function () {
                this._.locked = 1
            }, unlock: function () {
                delete this._.locked
            }, blur: function (e) {
                function t() {
                    if (this.hasFocus) {
                        this.hasFocus = !1;
                        var e = this._.editor.container;
                        e && e.removeClass("cke_focus"), this._.editor.fire("blur")
                    }
                }

                if (!this._.locked) {
                    this._.timer && clearTimeout(this._.timer);
                    var n = CKEDITOR.focusManager._.blurDelay;
                    e || !n ? t.call(this) : this._.timer = CKEDITOR.tools.setTimeout(function () {
                        delete this._.timer, t.call(this)
                    }, n, this)
                }
            }, add: function (n, i) {
                var o = n.getCustomData(e);
                if (!o || o != this) {
                    o && o.remove(n);
                    var r = "focus", a = "blur";
                    i && (CKEDITOR.env.ie ? (r = "focusin", a = "focusout") : CKEDITOR.event.useCapture = 1);
                    var s = {
                        blur: function () {
                            n.equals(this.currentActive) && this.blur()
                        }, focus: function () {
                            this.focus(n)
                        }
                    };
                    n.on(r, s.focus, this), n.on(a, s.blur, this), i && (CKEDITOR.event.useCapture = 0), n.setCustomData(e, this), n.setCustomData(t, s)
                }
            }, remove: function (n) {
                n.removeCustomData(e);
                var i = n.removeCustomData(t);
                n.removeListener("blur", i.blur), n.removeListener("focus", i.focus)
            }
        }
    }(), CKEDITOR.keystrokeHandler = function (e) {
        return e.keystrokeHandler ? e.keystrokeHandler : (this.keystrokes = {}, this.blockedKeystrokes = {}, this._ = {editor: e}, this)
    }, function () {
        var e, t = function (t) {
            t = t.data;
            var n = t.getKeystroke(), i = this.keystrokes[n], o = this._.editor;
            if (e = o.fire("key", {keyCode: n, domEvent: t}) === !1, !e) {
                if (i) {
                    var r = {from: "keystrokeHandler"};
                    e = o.execCommand(i, r) !== !1
                }
                e || (e = !!this.blockedKeystrokes[n])
            }
            return e && t.preventDefault(!0), !e
        }, n = function (t) {
            e && (e = !1, t.data.preventDefault(!0))
        };
        CKEDITOR.keystrokeHandler.prototype = {
            attach: function (e) {
                e.on("keydown", t, this), CKEDITOR.env.gecko && CKEDITOR.env.mac && e.on("keypress", n, this)
            }
        }
    }(), function () {
        CKEDITOR.lang = {
            languages: {
                af: 1,
                ar: 1,
                bg: 1,
                bn: 1,
                bs: 1,
                ca: 1,
                cs: 1,
                cy: 1,
                da: 1,
                de: 1,
                el: 1,
                "en-au": 1,
                "en-ca": 1,
                "en-gb": 1,
                en: 1,
                eo: 1,
                es: 1,
                et: 1,
                eu: 1,
                fa: 1,
                fi: 1,
                fo: 1,
                "fr-ca": 1,
                fr: 1,
                gl: 1,
                gu: 1,
                he: 1,
                hi: 1,
                hr: 1,
                hu: 1,
                id: 1,
                is: 1,
                it: 1,
                ja: 1,
                ka: 1,
                km: 1,
                ko: 1,
                ku: 1,
                lt: 1,
                lv: 1,
                mk: 1,
                mn: 1,
                ms: 1,
                nb: 1,
                nl: 1,
                no: 1,
                pl: 1,
                "pt-br": 1,
                pt: 1,
                ro: 1,
                ru: 1,
                si: 1,
                sk: 1,
                sl: 1,
                sq: 1,
                "sr-latn": 1,
                sr: 1,
                sv: 1,
                th: 1,
                tr: 1,
                tt: 1,
                ug: 1,
                uk: 1,
                vi: 1,
                "zh-cn": 1,
                zh: 1
            }, rtl: {ar: 1, fa: 1, he: 1, ku: 1, ug: 1}, load: function (e, t, n) {
                e && CKEDITOR.lang.languages[e] || (e = this.detect(t, e));
                var i = this, o = function () {
                    i[e].dir = i.rtl[e] ? "rtl" : "ltr", n(e, i[e])
                };
                this[e] ? o() : CKEDITOR.scriptLoader.load(CKEDITOR.getUrl("lang/" + e + ".js"), o, this)
            }, detect: function (e, t) {
                var n = this.languages;
                t = t || navigator.userLanguage || navigator.language || e;
                var i = t.toLowerCase().match(/([a-z]+)(?:-([a-z]+))?/), o = i[1], r = i[2];
                return n[o + "-" + r] ? o = o + "-" + r : n[o] || (o = null), CKEDITOR.lang.detect = o ? function () {
                    return o
                } : function (e) {
                    return e
                }, o || e
            }
        }
    }(), CKEDITOR.scriptLoader = function () {
        var e = {}, t = {};
        return {
            load: function (n, i, o, r) {
                var a = "string" == typeof n;
                a && (n = [n]), o || (o = CKEDITOR);
                var s = n.length, l = [], c = [], d = function (e) {
                    i && (a ? i.call(o, e) : i.call(o, l, c))
                };
                if (0 === s)return void d(!0);
                var u = function (e, t) {
                    (t ? l : c).push(e), --s <= 0 && (r && CKEDITOR.document.getDocumentElement().removeStyle("cursor"), d(t))
                }, h = function (n, i) {
                    e[n] = 1;
                    var o = t[n];
                    delete t[n];
                    for (var r = 0; r < o.length; r++)o[r](n, i)
                }, f = function (n) {
                    if (e[n])return void u(n, !0);
                    var o = t[n] || (t[n] = []);
                    if (o.push(u), !(o.length > 1)) {
                        var r = new CKEDITOR.dom.element("script");
                        r.setAttributes({
                            type: "text/javascript",
                            src: n
                        }), i && (CKEDITOR.env.ie && CKEDITOR.env.version < 11 ? r.$.onreadystatechange = function () {
                            ("loaded" == r.$.readyState || "complete" == r.$.readyState) && (r.$.onreadystatechange = null, h(n, !0))
                        } : (r.$.onload = function () {
                            setTimeout(function () {
                                h(n, !0)
                            }, 0)
                        }, r.$.onerror = function () {
                            h(n, !1)
                        })), r.appendTo(CKEDITOR.document.getHead())
                    }
                };
                r && CKEDITOR.document.getDocumentElement().setStyle("cursor", "wait");
                for (var m = 0; s > m; m++)f(n[m])
            }, queue: function () {
                function e() {
                    var e;
                    (e = t[0]) && this.load(e.scriptUrl, e.callback, CKEDITOR, 0)
                }

                var t = [];
                return function (n, i) {
                    function o() {
                        i && i.apply(this, arguments), t.shift(), e.call(r)
                    }

                    var r = this;
                    t.push({scriptUrl: n, callback: o}), 1 == t.length && e.call(this)
                }
            }()
        }
    }(), CKEDITOR.resourceManager = function (e, t) {
        this.basePath = e, this.fileName = t, this.registered = {}, this.loaded = {}, this.externals = {}, this._ = {waitingList: {}}
    }, CKEDITOR.resourceManager.prototype = {
        add: function (e, t) {
            if (this.registered[e])throw'[CKEDITOR.resourceManager.add] The resource name "' + e + '" is already registered.';
            var n = this.registered[e] = t || {};
            return n.name = e, n.path = this.getPath(e), CKEDITOR.fire(e + CKEDITOR.tools.capitalize(this.fileName) + "Ready", n), this.get(e)
        }, get: function (e) {
            return this.registered[e] || null
        }, getPath: function (e) {
            var t = this.externals[e];
            return CKEDITOR.getUrl(t && t.dir || this.basePath + e + "/")
        }, getFilePath: function (e) {
            var t = this.externals[e];
            return CKEDITOR.getUrl(this.getPath(e) + (t ? t.file : this.fileName + ".js"))
        }, addExternal: function (e, t, n) {
            e = e.split(",");
            for (var i = 0; i < e.length; i++) {
                var o = e[i];
                n || (t = t.replace(/[^\/]+$/, function (e) {
                    return n = e, ""
                })), this.externals[o] = {dir: t, file: n || this.fileName + ".js"}
            }
        }, load: function (e, t, n) {
            CKEDITOR.tools.isArray(e) || (e = e ? [e] : []);
            for (var i = this.loaded, o = this.registered, r = [], a = {}, s = {}, l = 0; l < e.length; l++) {
                var c = e[l];
                if (c)if (i[c] || o[c]) s[c] = this.get(c); else {
                    var d = this.getFilePath(c);
                    r.push(d), d in a || (a[d] = []), a[d].push(c)
                }
            }
            CKEDITOR.scriptLoader.load(r, function (e, o) {
                if (o.length)throw'[CKEDITOR.resourceManager.load] Resource name "' + a[o[0]].join(",") + '" was not found at "' + o[0] + '".';
                for (var r = 0; r < e.length; r++)for (var l = a[e[r]], c = 0; c < l.length; c++) {
                    var d = l[c];
                    s[d] = this.get(d), i[d] = 1
                }
                t.call(n, s)
            }, this)
        }
    }, CKEDITOR.plugins = new CKEDITOR.resourceManager("plugins/", "plugin"), CKEDITOR.plugins.load = CKEDITOR.tools.override(CKEDITOR.plugins.load, function (e) {
        var t = {};
        return function (n, i, o) {
            var r = {}, a = function (n) {
                e.call(this, n, function (e) {
                    CKEDITOR.tools.extend(r, e);
                    var n = [];
                    for (var s in e) {
                        var l = e[s], c = l && l.requires;
                        if (!t[s]) {
                            if (l.icons)for (var d = l.icons.split(","), u = d.length; u--;)CKEDITOR.skin.addIcon(d[u], l.path + "icons/" + (CKEDITOR.env.hidpi && l.hidpi ? "hidpi/" : "") + d[u] + ".png");
                            t[s] = 1
                        }
                        if (c) {
                            c.split && (c = c.split(","));
                            for (var h = 0; h < c.length; h++)r[c[h]] || n.push(c[h])
                        }
                    }
                    if (n.length) a.call(this, n); else {
                        for (s in r)l = r[s], l.onLoad && !l.onLoad._called && (l.onLoad() === !1 && delete r[s], l.onLoad._called = 1);
                        i && i.call(o || window, r)
                    }
                }, this)
            };
            a.call(this, n)
        }
    }), CKEDITOR.plugins.setLang = function (e, t, n) {
        var i = this.get(e), o = i.langEntries || (i.langEntries = {}), r = i.lang || (i.lang = []);
        r.split && (r = r.split(",")), -1 == CKEDITOR.tools.indexOf(r, t) && r.push(t), o[t] = n
    }, CKEDITOR.ui = function (e) {
        return e.ui ? e.ui : (this.items = {}, this.instances = {}, this.editor = e, this._ = {handlers: {}}, this)
    }, CKEDITOR.ui.prototype = {
        add: function (e, t, n) {
            n.name = e.toLowerCase();
            var i = this.items[e] = {
                type: t,
                command: n.command || null,
                args: Array.prototype.slice.call(arguments, 2)
            };
            CKEDITOR.tools.extend(i, n)
        }, get: function (e) {
            return this.instances[e]
        }, create: function (e) {
            var t = this.items[e], n = t && this._.handlers[t.type],
                i = t && t.command && this.editor.getCommand(t.command), o = n && n.create.apply(this, t.args);
            return this.instances[e] = o, i && i.uiItems.push(o), o && !o.type && (o.type = t.type), o
        }, addHandler: function (e, t) {
            this._.handlers[e] = t
        }, space: function (e) {
            return CKEDITOR.document.getById(this.spaceId(e))
        }, spaceId: function (e) {
            return this.editor.id + "_" + e
        }
    }, CKEDITOR.event.implementOn(CKEDITOR.ui), function () {
        function e(e, o, a) {
            if (CKEDITOR.event.call(this), e = e && CKEDITOR.tools.clone(e), void 0 !== o) {
                if (!(o instanceof CKEDITOR.dom.element))throw new Error("Expect element of type CKEDITOR.dom.element.");
                if (!a)throw new Error("One of the element modes must be specified.");
                if (CKEDITOR.env.ie && CKEDITOR.env.quirks && a == CKEDITOR.ELEMENT_MODE_INLINE)throw new Error("Inline element mode is not supported on IE quirks.");
                if (!n(o, a))throw new Error('The specified element mode is not supported on element: "' + o.getName() + '".');
                this.element = o, this.elementMode = a, this.name = this.elementMode != CKEDITOR.ELEMENT_MODE_APPENDTO && (o.getId() || o.getNameAtt())
            } else this.elementMode = CKEDITOR.ELEMENT_MODE_NONE;
            this._ = {}, this.commands = {}, this.templates = {}, this.name = this.name || t(), this.id = CKEDITOR.tools.getNextId(), this.status = "unloaded", this.config = CKEDITOR.tools.prototypedCopy(CKEDITOR.config), this.ui = new CKEDITOR.ui(this), this.focusManager = new CKEDITOR.focusManager(this), this.keystrokeHandler = new CKEDITOR.keystrokeHandler(this), this.on("readOnly", i), this.on("selectionChange", function (e) {
                r(this, e.data.path)
            }), this.on("activeFilterChange", function () {
                r(this, this.elementPath(), !0)
            }), this.on("mode", i), this.on("instanceReady", function () {
                this.config.startupFocus && this.focus()
            }), CKEDITOR.fire("instanceCreated", null, this), CKEDITOR.add(this), CKEDITOR.tools.setTimeout(function () {
                s(this, e)
            }, 0, this)
        }

        function t() {
            do var e = "editor" + ++g; while (CKEDITOR.instances[e]);
            return e
        }

        function n(e, t) {
            return t == CKEDITOR.ELEMENT_MODE_INLINE ? e.is(CKEDITOR.dtd.$editable) || e.is("textarea") : t == CKEDITOR.ELEMENT_MODE_REPLACE ? !e.is(CKEDITOR.dtd.$nonBodyContent) : 1
        }

        function i() {
            var e, t = this.commands;
            for (e in t)o(this, t[e])
        }

        function o(e, t) {
            t[t.startDisabled ? "disable" : e.readOnly && !t.readOnly ? "disable" : t.modes[e.mode] ? "enable" : "disable"]()
        }

        function r(e, t, n) {
            if (t) {
                var i, o, r = e.commands;
                for (o in r)i = r[o], (n || i.contextSensitive) && i.refresh(e, t)
            }
        }

        function a(e) {
            var t = e.config.customConfig;
            if (!t)return !1;
            t = CKEDITOR.getUrl(t);
            var n = p[t] || (p[t] = {});
            return n.fn ? (n.fn.call(e, e.config), CKEDITOR.getUrl(e.config.customConfig) != t && a(e) || e.fireOnce("customConfigLoaded")) : CKEDITOR.scriptLoader.queue(t, function () {
                n.fn = CKEDITOR.editorConfig ? CKEDITOR.editorConfig : function () {
                }, a(e)
            }), !0
        }

        function s(e, t) {
            e.on("customConfigLoaded", function () {
                if (t) {
                    if (t.on)for (var n in t.on)e.on(n, t.on[n]);
                    CKEDITOR.tools.extend(e.config, t, !0), delete e.config.on
                }
                l(e)
            }), t && null != t.customConfig && (e.config.customConfig = t.customConfig), a(e) || e.fireOnce("customConfigLoaded")
        }

        function l(e) {
            var t = e.config;
            e.readOnly = !!(t.readOnly || (e.elementMode == CKEDITOR.ELEMENT_MODE_INLINE ? e.element.is("textarea") ? e.element.hasAttribute("disabled") : e.element.isReadOnly() : e.elementMode == CKEDITOR.ELEMENT_MODE_REPLACE ? e.element.hasAttribute("disabled") : !1)), e.blockless = e.elementMode == CKEDITOR.ELEMENT_MODE_INLINE ? !(e.element.is("textarea") || CKEDITOR.dtd[e.element.getName()].p) : !1, e.tabIndex = t.tabIndex || e.element && e.element.getAttribute("tabindex") || 0, e.activeEnterMode = e.enterMode = E(e, t.enterMode), e.activeShiftEnterMode = e.shiftEnterMode = E(e, t.shiftEnterMode), t.skin && (CKEDITOR.skinName = t.skin), e.fireOnce("configLoaded"), c(e)
        }

        function c(e) {
            e.dataProcessor = new CKEDITOR.htmlDataProcessor(e), e.filter = e.activeFilter = new CKEDITOR.filter(e), d(e)
        }

        function d(e) {
            CKEDITOR.skin.loadPart("editor", function () {
                u(e)
            })
        }

        function u(e) {
            CKEDITOR.lang.load(e.config.language, e.config.defaultLanguage, function (t, n) {
                var i = e.config.title;
                e.langCode = t, e.lang = CKEDITOR.tools.prototypedCopy(n), e.title = "string" == typeof i || i === !1 ? i : [e.lang.editor, e.name].join(", "), e.config.contentsLangDirection || (e.config.contentsLangDirection = e.elementMode == CKEDITOR.ELEMENT_MODE_INLINE ? e.element.getDirection(1) : e.lang.dir), e.fire("langLoaded"), h(e)
            })
        }

        function h(e) {
            e.getStylesSet(function (t) {
                e.once("loaded", function () {
                    e.fire("stylesSet", {styles: t})
                }, null, null, 1), f(e)
            })
        }

        function f(e) {
            var t = e.config, n = t.plugins, i = t.extraPlugins, o = t.removePlugins;
            if (i) {
                var r = new RegExp("(?:^|,)(?:" + i.replace(/\s*,\s*/g, "|") + ")(?=,|$)", "g");
                n = n.replace(r, ""), n += "," + i
            }
            if (o) {
                var a = new RegExp("(?:^|,)(?:" + o.replace(/\s*,\s*/g, "|") + ")(?=,|$)", "g");
                n = n.replace(a, "")
            }
            CKEDITOR.env.air && (n += ",adobeair"), CKEDITOR.plugins.load(n.split(","), function (n) {
                var i = [], o = [], r = [];
                e.plugins = n;
                for (var s in n) {
                    var l, c, d = n[s], u = d.lang, h = null, f = d.requires;
                    if (CKEDITOR.tools.isArray(f) && (f = f.join(",")), f && (l = f.match(a)))for (; c = l.pop();)CKEDITOR.tools.setTimeout(function (e, t) {
                        throw new Error('Plugin "' + e.replace(",", "") + '" cannot be removed from the plugins list, because it\'s required by "' + t + '" plugin.')
                    }, 0, null, [c, s]);
                    if (u && !e.lang[s]) {
                        if (u.split && (u = u.split(",")), CKEDITOR.tools.indexOf(u, e.langCode) >= 0) h = e.langCode; else {
                            var m = e.langCode.replace(/-.*/, "");
                            h = m != e.langCode && CKEDITOR.tools.indexOf(u, m) >= 0 ? m : CKEDITOR.tools.indexOf(u, "en") >= 0 ? "en" : u[0]
                        }
                        d.langEntries && d.langEntries[h] ? (e.lang[s] = d.langEntries[h], h = null) : r.push(CKEDITOR.getUrl(d.path + "lang/" + h + ".js"))
                    }
                    o.push(h), i.push(d)
                }
                CKEDITOR.scriptLoader.load(r, function () {
                    for (var n = ["beforeInit", "init", "afterInit"], r = 0; r < n.length; r++)for (var a = 0; a < i.length; a++) {
                        var s = i[a];
                        0 === r && o[a] && s.lang && s.langEntries && (e.lang[s.name] = s.langEntries[o[a]]), s[n[r]] && s[n[r]](e)
                    }
                    for (e.fireOnce("pluginsLoaded"), t.keystrokes && e.setKeystroke(e.config.keystrokes), a = 0; a < e.config.blockedKeystrokes.length; a++)e.keystrokeHandler.blockedKeystrokes[e.config.blockedKeystrokes[a]] = 1;
                    e.status = "loaded", e.fireOnce("loaded"), CKEDITOR.fire("instanceLoaded", null, e)
                })
            })
        }

        function m() {
            var e = this.element;
            if (e && this.elementMode != CKEDITOR.ELEMENT_MODE_APPENDTO) {
                var t = this.getData();
                return this.config.htmlEncodeOutput && (t = CKEDITOR.tools.htmlEncode(t)), e.is("textarea") ? e.setValue(t) : e.setHtml(t), !0
            }
            return !1
        }

        function E(e, t) {
            return e.blockless ? CKEDITOR.ENTER_BR : t
        }

        e.prototype = CKEDITOR.editor.prototype, CKEDITOR.editor = e;
        var g = 0, p = {};
        CKEDITOR.tools.extend(CKEDITOR.editor.prototype, {
            addCommand: function (e, t) {
                t.name = e.toLowerCase();
                var n = new CKEDITOR.command(this, t);
                return this.mode && o(this, n), this.commands[e] = n
            }, _attachToForm: function () {
                function e(e) {
                    n.updateElement(), n._.required && !i.getValue() && n.fire("required") === !1 && e.data.preventDefault()
                }

                function t(e) {
                    return !!(e && e.call && e.apply)
                }

                var n = this, i = n.element, o = new CKEDITOR.dom.element(i.$.form);
                i.is("textarea") && o && (o.on("submit", e), t(o.$.submit) && (o.$.submit = CKEDITOR.tools.override(o.$.submit, function (t) {
                    return function () {
                        e(), t.apply ? t.apply(this) : t()
                    }
                })), n.on("destroy", function () {
                    o.removeListener("submit", e)
                }))
            }, destroy: function (e) {
                this.fire("beforeDestroy"), !e && m.call(this), this.editable(null), this.filter.destroy(), delete this.filter, delete this.activeFilter, this.status = "destroyed", this.fire("destroy"), this.removeAllListeners(), CKEDITOR.remove(this), CKEDITOR.fire("instanceDestroyed", null, this)
            }, elementPath: function (e) {
                if (!e) {
                    var t = this.getSelection();
                    if (!t)return null;
                    e = t.getStartElement()
                }
                return e ? new CKEDITOR.dom.elementPath(e, this.editable()) : null
            }, createRange: function () {
                var e = this.editable();
                return e ? new CKEDITOR.dom.range(e) : null
            }, execCommand: function (e, t) {
                var n = this.getCommand(e), i = {name: e, commandData: t, command: n};
                return n && n.state != CKEDITOR.TRISTATE_DISABLED && this.fire("beforeCommandExec", i) !== !1 && (i.returnValue = n.exec(i.commandData), !n.async && this.fire("afterCommandExec", i) !== !1) ? i.returnValue : !1
            }, getCommand: function (e) {
                return this.commands[e]
            }, getData: function (e) {
                !e && this.fire("beforeGetData");
                var t = this._.data;
                if ("string" != typeof t) {
                    var n = this.element;
                    t = n && this.elementMode == CKEDITOR.ELEMENT_MODE_REPLACE ? n.is("textarea") ? n.getValue() : n.getHtml() : ""
                }
                return t = {dataValue: t}, !e && this.fire("getData", t), t.dataValue
            }, getSnapshot: function () {
                var e = this.fire("getSnapshot");
                if ("string" != typeof e) {
                    var t = this.element;
                    t && this.elementMode == CKEDITOR.ELEMENT_MODE_REPLACE && (e = t.is("textarea") ? t.getValue() : t.getHtml())
                }
                return e
            }, loadSnapshot: function (e) {
                this.fire("loadSnapshot", e)
            }, setData: function (e, t, n) {
                var i, o = !0, r = t;
                t && "object" == typeof t && (n = t.internal, r = t.callback, o = !t.noSnapshot), !n && o && this.fire("saveSnapshot"), (r || !n) && this.once("dataReady", function (e) {
                    !n && o && this.fire("saveSnapshot"), r && r.call(e.editor)
                }), i = {dataValue: e}, !n && this.fire("setData", i), this._.data = i.dataValue, !n && this.fire("afterSetData", i)
            }, setReadOnly: function (e) {
                e = null == e || e, this.readOnly != e && (this.readOnly = e, this.keystrokeHandler.blockedKeystrokes[8] = +e, this.editable().setReadOnly(e), this.fire("readOnly"))
            }, insertHtml: function (e, t) {
                this.fire("insertHtml", {dataValue: e, mode: t})
            }, insertText: function (e) {
                this.fire("insertText", e)
            }, insertElement: function (e) {
                this.fire("insertElement", e)
            }, focus: function () {
                this.fire("beforeFocus")
            }, checkDirty: function () {
                return "ready" == this.status && this._.previousValue !== this.getSnapshot()
            }, resetDirty: function () {
                this._.previousValue = this.getSnapshot()
            }, updateElement: function () {
                return m.call(this)
            }, setKeystroke: function () {
                for (var e, t, n = this.keystrokeHandler.keystrokes, i = CKEDITOR.tools.isArray(arguments[0]) ? arguments[0] : [[].slice.call(arguments, 0)], o = i.length; o--;)e = i[o], t = 0, CKEDITOR.tools.isArray(e) && (t = e[1], e = e[0]), t ? n[e] = t : delete n[e]
            }, addFeature: function (e) {
                return this.filter.addFeature(e)
            }, setActiveFilter: function (e) {
                e || (e = this.filter), this.activeFilter !== e && (this.activeFilter = e, this.fire("activeFilterChange"), e === this.filter ? this.setActiveEnterMode(null, null) : this.setActiveEnterMode(e.getAllowedEnterMode(this.enterMode), e.getAllowedEnterMode(this.shiftEnterMode, !0)))
            }, setActiveEnterMode: function (e, t) {
                e = e ? E(this, e) : this.enterMode, t = t ? E(this, t) : this.shiftEnterMode, (this.activeEnterMode != e || this.activeShiftEnterMode != t) && (this.activeEnterMode = e, this.activeShiftEnterMode = t, this.fire("activeEnterModeChange"))
            }
        })
    }(), CKEDITOR.ELEMENT_MODE_NONE = 0, CKEDITOR.ELEMENT_MODE_REPLACE = 1, CKEDITOR.ELEMENT_MODE_APPENDTO = 2, CKEDITOR.ELEMENT_MODE_INLINE = 3, CKEDITOR.htmlParser = function () {
        this._ = {htmlPartsRegex: /<(?:(?:\/([^>]+)>)|(?:!--([\S|\s]*?)-->)|(?:([^\/\s>]+)((?:\s+[\w\-:.]+(?:\s*=\s*?(?:(?:"[^"]*")|(?:'[^']*')|[^\s"'\/>]+))?)*)[\S\s]*?(\/?)>))/g}
    }, function () {
        var e = /([\w\-:.]+)(?:(?:\s*=\s*(?:(?:"([^"]*)")|(?:'([^']*)')|([^\s>]+)))|(?=\s|$))/g, t = {
            checked: 1,
            compact: 1,
            declare: 1,
            defer: 1,
            disabled: 1,
            ismap: 1,
            multiple: 1,
            nohref: 1,
            noresize: 1,
            noshade: 1,
            nowrap: 1,
            readonly: 1,
            selected: 1
        };
        CKEDITOR.htmlParser.prototype = {
            onTagOpen: function () {
            }, onTagClose: function () {
            }, onText: function () {
            }, onCDATA: function () {
            }, onComment: function () {
            }, parse: function (n) {
                for (var i, o, r, a = 0; i = this._.htmlPartsRegex.exec(n);) {
                    var s = i.index;
                    if (s > a) {
                        var l = n.substring(a, s);
                        r ? r.push(l) : this.onText(l)
                    }
                    if (a = this._.htmlPartsRegex.lastIndex, !(o = i[1]) || (o = o.toLowerCase(), r && CKEDITOR.dtd.$cdata[o] && (this.onCDATA(r.join("")), r = null), r))if (r) r.push(i[0]); else if (o = i[3]) {
                        if (o = o.toLowerCase(), /="/.test(o))continue;
                        var c, d = {}, u = i[4], h = !!i[5];
                        if (u)for (; c = e.exec(u);) {
                            var f = c[1].toLowerCase(), m = c[2] || c[3] || c[4] || "";
                            d[f] = !m && t[f] ? f : CKEDITOR.tools.htmlDecodeAttr(m)
                        }
                        this.onTagOpen(o, d, h), !r && CKEDITOR.dtd.$cdata[o] && (r = [])
                    } else(o = i[2]) && this.onComment(o); else this.onTagClose(o)
                }
                n.length > a && this.onText(n.substring(a, n.length))
            }
        }
    }(), CKEDITOR.htmlParser.basicWriter = CKEDITOR.tools.createClass({
        $: function () {
            this._ = {output: []}
        }, proto: {
            openTag: function (e) {
                this._.output.push("<", e)
            }, openTagClose: function (e, t) {
                this._.output.push(t ? " />" : ">")
            }, attribute: function (e, t) {
                "string" == typeof t && (t = CKEDITOR.tools.htmlEncodeAttr(t)), this._.output.push(" ", e, '="', t, '"')
            }, closeTag: function (e) {
                this._.output.push("</", e, ">")
            }, text: function (e) {
                this._.output.push(e)
            }, comment: function (e) {
                this._.output.push("<!--", e, "-->")
            }, write: function (e) {
                this._.output.push(e)
            }, reset: function () {
                this._.output = [], this._.indent = !1
            }, getHtml: function (e) {
                var t = this._.output.join("");
                return e && this.reset(), t
            }
        }
    }), function () {
        CKEDITOR.htmlParser.node = function () {
        }, CKEDITOR.htmlParser.node.prototype = {
            remove: function () {
                var e = this.parent.children, t = CKEDITOR.tools.indexOf(e, this), n = this.previous, i = this.next;
                n && (n.next = i), i && (i.previous = n), e.splice(t, 1), this.parent = null
            }, replaceWith: function (e) {
                var t = this.parent.children, n = CKEDITOR.tools.indexOf(t, this), i = e.previous = this.previous,
                    o = e.next = this.next;
                i && (i.next = e), o && (o.previous = e), t[n] = e, e.parent = this.parent, this.parent = null
            }, insertAfter: function (e) {
                var t = e.parent.children, n = CKEDITOR.tools.indexOf(t, e), i = e.next;
                t.splice(n + 1, 0, this), this.next = e.next, this.previous = e, e.next = this, i && (i.previous = this), this.parent = e.parent
            }, insertBefore: function (e) {
                var t = e.parent.children, n = CKEDITOR.tools.indexOf(t, e);
                t.splice(n, 0, this), this.next = e, this.previous = e.previous, e.previous && (e.previous.next = this), e.previous = this, this.parent = e.parent
            }, getAscendant: function (e) {
                for (var t = ("function" == typeof e ? e : "string" == typeof e ? function (t) {
                    return t.name == e
                } : function (t) {
                    return t.name in e
                }), n = this.parent; n && n.type == CKEDITOR.NODE_ELEMENT;) {
                    if (t(n))return n;
                    n = n.parent
                }
                return null
            }, wrapWith: function (e) {
                return this.replaceWith(e), e.add(this), e
            }, getIndex: function () {
                return CKEDITOR.tools.indexOf(this.parent.children, this)
            }, getFilterContext: function (e) {
                return e || {}
            }
        }
    }(), CKEDITOR.htmlParser.comment = function (e) {
        this.value = e, this._ = {isBlockLike: !1}
    }, CKEDITOR.htmlParser.comment.prototype = CKEDITOR.tools.extend(new CKEDITOR.htmlParser.node, {
        type: CKEDITOR.NODE_COMMENT,
        filter: function (e, t) {
            var n = this.value;
            return (n = e.onComment(t, n, this)) ? "string" != typeof n ? (this.replaceWith(n), !1) : (this.value = n, !0) : (this.remove(), !1)
        },
        writeHtml: function (e, t) {
            t && this.filter(t), e.comment(this.value)
        }
    }), function () {
        CKEDITOR.htmlParser.text = function (e) {
            this.value = e, this._ = {isBlockLike: !1}
        }, CKEDITOR.htmlParser.text.prototype = CKEDITOR.tools.extend(new CKEDITOR.htmlParser.node, {
            type: CKEDITOR.NODE_TEXT,
            filter: function (e, t) {
                return (this.value = e.onText(t, this.value, this)) ? void 0 : (this.remove(), !1)
            },
            writeHtml: function (e, t) {
                t && this.filter(t), e.text(this.value)
            }
        })
    }(), function () {
        CKEDITOR.htmlParser.cdata = function (e) {
            this.value = e
        }, CKEDITOR.htmlParser.cdata.prototype = CKEDITOR.tools.extend(new CKEDITOR.htmlParser.node, {
            type: CKEDITOR.NODE_TEXT,
            filter: function () {
            },
            writeHtml: function (e) {
                e.write(this.value)
            }
        })
    }(),CKEDITOR.htmlParser.fragment = function () {
        this.children = [], this.parent = null, this._ = {isBlockLike: !0, hasInlineStarted: !1}
    },function () {
        function e(e) {
            return e.attributes["data-cke-survive"] ? !1 : "a" == e.name && e.attributes.href || CKEDITOR.dtd.$removeEmpty[e.name]
        }

        var t = CKEDITOR.tools.extend({
                table: 1,
                ul: 1,
                ol: 1,
                dl: 1
            }, CKEDITOR.dtd.table, CKEDITOR.dtd.ul, CKEDITOR.dtd.ol, CKEDITOR.dtd.dl), n = {ol: 1, ul: 1},
            i = CKEDITOR.tools.extend({}, {html: 1}, CKEDITOR.dtd.html, CKEDITOR.dtd.body, CKEDITOR.dtd.head, {
                style: 1,
                script: 1
            }), o = {ul: "li", ol: "li", dl: "dd", table: "tbody", tbody: "tr", thead: "tr", tfoot: "tr", tr: "td"};
        CKEDITOR.htmlParser.fragment.fromHtml = function (r, a, s) {
            function l(e) {
                var t;
                if (g.length > 0)for (var n = 0; n < g.length; n++) {
                    var i = g[n], o = i.name, r = CKEDITOR.dtd[o], a = T.name && CKEDITOR.dtd[T.name];
                    a && !a[o] || e && r && !r[e] && CKEDITOR.dtd[e] ? o == T.name && (u(T, T.parent, 1), n--) : (t || (c(), t = 1), i = i.clone(), i.parent = T, T = i, g.splice(n, 1), n--)
                }
            }

            function c() {
                for (; p.length;)u(p.shift(), T)
            }

            function d(e) {
                if (e._.isBlockLike && "pre" != e.name && "textarea" != e.name) {
                    var t, n = e.children.length, i = e.children[n - 1];
                    i && i.type == CKEDITOR.NODE_TEXT && ((t = CKEDITOR.tools.rtrim(i.value)) ? i.value = t : e.children.length = n - 1)
                }
            }

            function u(t, n, i) {
                n = n || T || E;
                var o = T;
                void 0 === t.previous && (h(n, t) && (T = n, m.onTagOpen(s, {}), t.returnPoint = n = T), d(t), (!e(t) || t.children.length) && n.add(t), "pre" == t.name && (v = !1), "textarea" == t.name && (C = !1)), t.returnPoint ? (T = t.returnPoint, delete t.returnPoint) : T = i ? n : o
            }

            function h(e, t) {
                if ((e == E || "body" == e.name) && s && (!e.name || CKEDITOR.dtd[e.name][s])) {
                    var n, i;
                    return n = t.attributes && (i = t.attributes["data-cke-real-element-type"]) ? i : t.name, n && n in CKEDITOR.dtd.$inline && !(n in CKEDITOR.dtd.head) && !t.isOrphan || t.type == CKEDITOR.NODE_TEXT
                }
            }

            function f(e, t) {
                return e in CKEDITOR.dtd.$listItem || e in CKEDITOR.dtd.$tableContent ? e == t || "dt" == e && "dd" == t || "dd" == e && "dt" == t : !1
            }

            var m = new CKEDITOR.htmlParser,
                E = a instanceof CKEDITOR.htmlParser.element ? a : "string" == typeof a ? new CKEDITOR.htmlParser.element(a) : new CKEDITOR.htmlParser.fragment,
                g = [], p = [], T = E, C = "textarea" == E.name, v = "pre" == E.name;
            m.onTagOpen = function (o, r, a, s) {
                var d = new CKEDITOR.htmlParser.element(o, r);
                if (d.isUnknown && a && (d.isEmpty = !0), d.isOptionalClose = s, e(d))return void g.push(d);
                if ("pre" == o) v = !0; else {
                    if ("br" == o && v)return void T.add(new CKEDITOR.htmlParser.text("\n"));
                    "textarea" == o && (C = !0)
                }
                if ("br" == o)return void p.push(d);
                for (; ;) {
                    var h = T.name,
                        E = h ? CKEDITOR.dtd[h] || (T._.isBlockLike ? CKEDITOR.dtd.div : CKEDITOR.dtd.span) : i;
                    if (d.isUnknown || T.isUnknown || E[o])break;
                    if (T.isOptionalClose) m.onTagClose(h); else if (o in n && h in n) {
                        var I = T.children, O = I[I.length - 1];
                        O && "li" == O.name || u(O = new CKEDITOR.htmlParser.element("li"), T), !d.returnPoint && (d.returnPoint = T), T = O
                    } else if (o in CKEDITOR.dtd.$listItem && !f(o, h)) m.onTagOpen("li" == o ? "ul" : "dl", {}, 0, 1); else if (h in t && !f(o, h)) !d.returnPoint && (d.returnPoint = T), T = T.parent; else {
                        if (h in CKEDITOR.dtd.$inline && g.unshift(T), !T.parent) {
                            d.isOrphan = 1;
                            break
                        }
                        u(T, T.parent, 1)
                    }
                }
                l(o), c(), d.parent = T, d.isEmpty ? u(d) : T = d
            }, m.onTagClose = function (e) {
                for (var t = g.length - 1; t >= 0; t--)if (e == g[t].name)return void g.splice(t, 1);
                for (var n = [], i = [], o = T; o != E && o.name != e;)o._.isBlockLike || i.unshift(o), n.push(o), o = o.returnPoint || o.parent;
                if (o != E) {
                    for (t = 0; t < n.length; t++) {
                        var r = n[t];
                        u(r, r.parent)
                    }
                    T = o, o._.isBlockLike && c(), u(o, o.parent), o == T && (T = T.parent), g = g.concat(i)
                }
                "body" == e && (s = !1)
            }, m.onText = function (e) {
                if (T._.hasInlineStarted && !p.length || v || C || (e = CKEDITOR.tools.ltrim(e), 0 !== e.length)) {
                    var n = T.name,
                        r = n ? CKEDITOR.dtd[n] || (T._.isBlockLike ? CKEDITOR.dtd.div : CKEDITOR.dtd.span) : i;
                    if (!C && !r["#"] && n in t)return m.onTagOpen(o[n] || ""), void m.onText(e);
                    c(), l(), v || C || (e = e.replace(/[\t\r\n ]{2,}|[\t\r\n]/g, " ")), e = new CKEDITOR.htmlParser.text(e), h(T, e) && this.onTagOpen(s, {}, 0, 1), T.add(e)
                }
            }, m.onCDATA = function (e) {
                T.add(new CKEDITOR.htmlParser.cdata(e))
            }, m.onComment = function (e) {
                c(), l(), T.add(new CKEDITOR.htmlParser.comment(e))
            }, m.parse(r), c();
            for (; T != E;)u(T, T.parent, 1);
            return d(E), E
        }, CKEDITOR.htmlParser.fragment.prototype = {
            type: CKEDITOR.NODE_DOCUMENT_FRAGMENT, add: function (e, t) {
                isNaN(t) && (t = this.children.length);
                var n = t > 0 ? this.children[t - 1] : null;
                if (n) {
                    if (e._.isBlockLike && n.type == CKEDITOR.NODE_TEXT && (n.value = CKEDITOR.tools.rtrim(n.value), 0 === n.value.length))return this.children.pop(), void this.add(e);
                    n.next = e
                }
                e.previous = n, e.parent = this, this.children.splice(t, 0, e), this._.hasInlineStarted || (this._.hasInlineStarted = e.type == CKEDITOR.NODE_TEXT || e.type == CKEDITOR.NODE_ELEMENT && !e._.isBlockLike)
            }, filter: function (e, t) {
                t = this.getFilterContext(t), e.onRoot(t, this), this.filterChildren(e, !1, t)
            }, filterChildren: function (e, t, n) {
                if (this.childrenFilteredBy != e.id) {
                    n = this.getFilterContext(n), t && !this.parent && e.onRoot(n, this), this.childrenFilteredBy = e.id;
                    for (var i = 0; i < this.children.length; i++)this.children[i].filter(e, n) === !1 && i--
                }
            }, writeHtml: function (e, t) {
                t && this.filter(t), this.writeChildrenHtml(e)
            }, writeChildrenHtml: function (e, t, n) {
                var i = this.getFilterContext();
                n && !this.parent && t && t.onRoot(i, this), t && this.filterChildren(t, !1, i);
                for (var o = 0, r = this.children, a = r.length; a > o; o++)r[o].writeHtml(e)
            }, forEach: function (e, t, n) {
                if (!(n || t && this.type != t))var i = e(this);
                if (i !== !1)for (var o, r = this.children, a = 0; a < r.length; a++)o = r[a], o.type == CKEDITOR.NODE_ELEMENT ? o.forEach(e, t) : t && o.type != t || e(o)
            }, getFilterContext: function (e) {
                return e || {}
            }
        }
    }(),function () {
        function e() {
            this.rules = []
        }

        function t(t, n, i, o) {
            var r, a;
            for (r in n)a = t[r], a || (a = t[r] = new e), a.add(n[r], i, o)
        }

        function n(e, t) {
            return e.nonEditable && !t.options.applyToAll ? !1 : e.nestedEditable && t.options.excludeNestedEditable ? !1 : !0
        }

        CKEDITOR.htmlParser.filter = CKEDITOR.tools.createClass({
            $: function (t) {
                this.id = CKEDITOR.tools.getNextNumber(), this.elementNameRules = new e, this.attributeNameRules = new e, this.elementsRules = {}, this.attributesRules = {}, this.textRules = new e, this.commentRules = new e, this.rootRules = new e, t && this.addRules(t, 10)
            }, proto: {
                addRules: function (e, n) {
                    var i;
                    "number" == typeof n ? i = n : n && "priority" in n && (i = n.priority), "number" != typeof i && (i = 10), "object" != typeof n && (n = {}), e.elementNames && this.elementNameRules.addMany(e.elementNames, i, n), e.attributeNames && this.attributeNameRules.addMany(e.attributeNames, i, n), e.elements && t(this.elementsRules, e.elements, i, n), e.attributes && t(this.attributesRules, e.attributes, i, n), e.text && this.textRules.add(e.text, i, n), e.comment && this.commentRules.add(e.comment, i, n), e.root && this.rootRules.add(e.root, i, n)
                }, applyTo: function (e) {
                    e.filter(this)
                }, onElementName: function (e, t) {
                    return this.elementNameRules.execOnName(e, t)
                }, onAttributeName: function (e, t) {
                    return this.attributeNameRules.execOnName(e, t)
                }, onText: function (e, t, n) {
                    return this.textRules.exec(e, t, n)
                }, onComment: function (e, t, n) {
                    return this.commentRules.exec(e, t, n)
                }, onRoot: function (e, t) {
                    return this.rootRules.exec(e, t)
                }, onElement: function (e, t) {
                    for (var n, i, o = [this.elementsRules["^"], this.elementsRules[t.name], this.elementsRules.$], r = 0; 3 > r; r++)if (n = o[r]) {
                        if (i = n.exec(e, t, this), i === !1)return null;
                        if (i && i != t)return this.onNode(e, i);
                        if (t.parent && !t.name)break
                    }
                    return t
                }, onNode: function (e, t) {
                    var n = t.type;
                    return n == CKEDITOR.NODE_ELEMENT ? this.onElement(e, t) : n == CKEDITOR.NODE_TEXT ? new CKEDITOR.htmlParser.text(this.onText(e, t.value)) : n == CKEDITOR.NODE_COMMENT ? new CKEDITOR.htmlParser.comment(this.onComment(e, t.value)) : null
                }, onAttribute: function (e, t, n, i) {
                    var o = this.attributesRules[n];
                    return o ? o.exec(e, i, t, this) : i
                }
            }
        }), CKEDITOR.htmlParser.filterRulesGroup = e, e.prototype = {
            add: function (e, t, n) {
                this.rules.splice(this.findIndex(t), 0, {value: e, priority: t, options: n})
            }, addMany: function (e, t, n) {
                for (var i = [this.findIndex(t), 0], o = 0, r = e.length; r > o; o++)i.push({
                    value: e[o],
                    priority: t,
                    options: n
                });
                this.rules.splice.apply(this.rules, i)
            }, findIndex: function (e) {
                for (var t = this.rules, n = t.length, i = n - 1; i >= 0 && e < t[i].priority;)i--;
                return i + 1
            }, exec: function (e, t) {
                var i, o, r, a, s,
                    l = t instanceof CKEDITOR.htmlParser.node || t instanceof CKEDITOR.htmlParser.fragment,
                    c = Array.prototype.slice.call(arguments, 1), d = this.rules, u = d.length;
                for (a = 0; u > a; a++)if (l && (i = t.type, o = t.name), s = d[a], n(e, s)) {
                    if (r = s.value.apply(null, c), r === !1)return r;
                    if (l && r && (r.name != o || r.type != i))return r;
                    null != r && (c[0] = t = r)
                }
                return t
            }, execOnName: function (e, t) {
                for (var i, o = 0, r = this.rules, a = r.length; t && a > o; o++)i = r[o], n(e, i) && (t = t.replace(i.value[0], i.value[1]));
                return t
            }
        }
    }(),function () {
        function e(e, t) {
            function r(e) {
                return e || CKEDITOR.env.needsNbspFiller ? new CKEDITOR.htmlParser.text("\xa0") : new CKEDITOR.htmlParser.element("br", {"data-cke-bogus": 1})
            }

            function l(e, t) {
                return function (n) {
                    if (n.type != CKEDITOR.NODE_DOCUMENT_FRAGMENT) {
                        u(n);
                        var i = !e || ("function" == typeof t ? t(n) : t) !== !1;
                        i && h(n) && n.add(r(e))
                    }
                }
            }

            function c(e) {
                return function (t) {
                    if (t.parent.type != CKEDITOR.NODE_DOCUMENT_FRAGMENT) {
                        var n = t.attributes;
                        if ("data-cke-bogus" in n || "data-cke-eol" in n)return void delete n["data-cke-bogus"];
                        var l = i(t), c = o(t);
                        !l && a(t.parent) ? s(t.parent, r(e)) : a(l) && c && !a(c) && r(e).insertBefore(l)
                    }
                }
            }

            function d(e, t) {
                if ((!m || CKEDITOR.env.needsBrFiller) && e.type == CKEDITOR.NODE_ELEMENT && "br" == e.name && !e.attributes["data-cke-eol"])return !0;
                var n;
                if (e.type == CKEDITOR.NODE_TEXT && (n = e.value.match(R))) {
                    if (n.index && (new CKEDITOR.htmlParser.text(e.value.substring(0, n.index)).insertBefore(e), e.value = n[0]), !CKEDITOR.env.needsBrFiller && m && (!t || e.parent.name in E))return !0;
                    if (!m) {
                        var i = e.previous;
                        if (i && "br" == i.name)return !0;
                        if (!i || a(i))return !0
                    }
                }
                return !1
            }

            function u(e) {
                var t, i, s = [], l = n(e);
                if (l)for (d(l, 1) && s.push(l); l;)a(l) && (t = o(l)) && d(t) && ((i = o(t)) && !a(i) ? s.push(t) : (r(m).insertAfter(t), t.remove())), l = l.previous;
                for (var c = 0; c < s.length; c++)s[c].remove()
            }

            function h(e) {
                if (!m && !CKEDITOR.env.needsBrFiller && e.type == CKEDITOR.NODE_DOCUMENT_FRAGMENT)return !1;
                if (!m && !CKEDITOR.env.needsBrFiller && (document.documentMode > 7 || e.name in CKEDITOR.dtd.tr || e.name in CKEDITOR.dtd.$listItem))return !1;
                var t = n(e);
                return !t || "form" == e.name && "input" == t.name
            }

            var f = {elements: {}}, m = "html" == t, E = CKEDITOR.tools.extend({}, _);
            for (var g in E)"#" in K[g] || delete E[g];
            for (g in E)f.elements[g] = l(m, e.config.fillEmptyBlocks);
            return f.root = l(m, !1), f.elements.br = c(m), f
        }

        function t(e, t) {
            return e != CKEDITOR.ENTER_BR && t !== !1 ? e == CKEDITOR.ENTER_DIV ? "div" : "p" : !1
        }

        function n(e) {
            for (var t = e.children[e.children.length - 1]; t && r(t);)t = t.previous;
            return t
        }

        function i(e) {
            for (var t = e.next; t && r(t);)t = t.next;
            return t
        }

        function o(e) {
            for (var t = e.previous; t && r(t);)t = t.previous;
            return t
        }

        function r(e) {
            return e.type == CKEDITOR.NODE_TEXT && !CKEDITOR.tools.trim(e.value) || e.type == CKEDITOR.NODE_ELEMENT && e.attributes["data-cke-bookmark"]
        }

        function a(e) {
            return e && (e.type == CKEDITOR.NODE_ELEMENT && e.name in _ || e.type == CKEDITOR.NODE_DOCUMENT_FRAGMENT)
        }

        function s(e, t) {
            var n = e.children[e.children.length - 1];
            e.children.push(t), t.parent = e, n && (n.next = t, t.previous = n)
        }

        function l(e) {
            return e.parent ? e.getIndex() : -1
        }

        function c(e) {
            var t = e.attributes;
            "false" != t.contenteditable && (t["data-cke-editable"] = t.contenteditable ? "true" : 1), t.contenteditable = "false"
        }

        function d(e) {
            var t = e.attributes;
            switch (t["data-cke-editable"]) {
                case"true":
                    t.contenteditable = "true";
                    break;
                case"1":
                    delete t.contenteditable
            }
        }

        function u(e) {
            return e.replace(x, function (e, t, n) {
                return "<" + t + n.replace(A, function (e, t) {
                        return L.test(t) && -1 == n.indexOf("data-cke-saved-" + t) ? " data-cke-saved-" + e + " data-cke-" + CKEDITOR.rnd + "-" + e : e
                    }) + ">"
            })
        }

        function h(e, t) {
            return e.replace(t, function (e, t, n) {
                return 0 === e.indexOf("<textarea") && (e = t + v(n).replace(/</g, "&lt;").replace(/>/g, "&gt;") + "</textarea>"), "<cke:encoded>" + encodeURIComponent(e) + "</cke:encoded>"
            })
        }

        function f(e) {
            return e.replace(F, function (e, t) {
                return decodeURIComponent(t)
            })
        }

        function m(e) {
            return e.replace($, "$1cke:$2")
        }

        function E(e) {
            return e.replace(M, "$1$2")
        }

        function g(e) {
            return e.replace(H, "<cke:$1$2></cke:$1>")
        }

        function p(e) {
            return e.replace(/(<pre\b[^>]*>)(\r\n|\n)/g, "$1$2$2")
        }

        function T(e) {
            return e.replace(/<!--(?!{cke_protected})[\s\S]+?-->/g, function (e) {
                return "<!--" + b + "{C}" + encodeURIComponent(e).replace(/--/g, "%2D%2D") + "-->"
            })
        }

        function C(e) {
            return e.replace(/([^a-z0-9<\-])(on\w{3,})(?!>)/gi, "$1data-cke-" + CKEDITOR.rnd + "-$2")
        }

        function v(e) {
            return e.replace(/<!--\{cke_protected\}\{C\}([\s\S]+?)-->/g, function (e, t) {
                return decodeURIComponent(t)
            })
        }

        function I(e, t) {
            var n = t._.dataStore;
            return e.replace(/<!--\{cke_protected\}([\s\S]+?)-->/g, function (e, t) {
                return decodeURIComponent(t)
            }).replace(/\{cke_protected_(\d+)\}/g, function (e, t) {
                return n && n[t] || ""
            })
        }

        function O(e, t) {
            var n = [], i = t.config.protectedSource, o = t._.dataStore || (t._.dataStore = {id: 1}),
                r = /<\!--\{cke_temp(comment)?\}(\d*?)-->/g,
                a = [/<script[\s\S]*?<\/script>/gi, /<noscript[\s\S]*?<\/noscript>/gi, /<meta[\s\S]*?\/?>/gi].concat(i);
            e = e.replace(/<!--[\s\S]*?-->/g, function (e) {
                return "<!--{cke_tempcomment}" + (n.push(e) - 1) + "-->"
            });
            for (var s = 0; s < a.length; s++)e = e.replace(a[s], function (e) {
                return e = e.replace(r, function (e, t, i) {
                    return n[i]
                }), /cke_temp(comment)?/.test(e) ? e : "<!--{cke_temp}" + (n.push(e) - 1) + "-->"
            });
            return e = e.replace(r, function (e, t, i) {
                return "<!--" + b + (t ? "{C}" : "") + encodeURIComponent(n[i]).replace(/--/g, "%2D%2D") + "-->"
            }), e = e.replace(/<\w+(?:\s+(?:(?:[^\s=>]+\s*=\s*(?:[^'"\s>]+|'[^']*'|"[^"]*"))|[^\s=>]+))+\s*>/g, function (e) {
                return e.replace(/<!--\{cke_protected\}([^>]*)-->/g, function (e, t) {
                    return o[o.id] = decodeURIComponent(t), "{cke_protected_" + o.id++ + "}"
                })
            }), e = e.replace(/<(title|iframe|textarea)([^>]*)>([\s\S]*?)<\/\1>/g, function (e, n, i, o) {
                return "<" + n + i + ">" + I(v(o), t) + "</" + n + ">"
            })
        }

        function D(e, t) {
            if (!e.children.length && CKEDITOR.dtd[e.name][t]) {
                var n = new CKEDITOR.htmlParser.element(t);
                e.add(n)
            }
        }

        CKEDITOR.htmlDataProcessor = function (n) {
            var i, o, r = this;
            this.editor = n, this.dataFilter = i = new CKEDITOR.htmlParser.filter, this.htmlFilter = o = new CKEDITOR.htmlParser.filter, this.writer = new CKEDITOR.htmlParser.basicWriter, i.addRules(k), i.addRules(N, {applyToAll: !0}), i.addRules(e(n, "data"), {applyToAll: !0}), o.addRules(w), o.addRules(S, {applyToAll: !0}), o.addRules(e(n, "html"), {applyToAll: !0}), n.on("toHtml", function (e) {
                var i, o = e.data, r = o.dataValue;
                r = O(r, n), r = h(r, B), r = u(r), r = h(r, P), r = m(r), r = g(r), r = p(r), r = C(r);
                var a, s = o.context || n.editable().getName();
                CKEDITOR.env.ie && CKEDITOR.env.version < 9 && "pre" == s && (s = "div", r = "<pre>" + r + "</pre>", a = 1);
                var l = n.document.createElement(s);
                l.setHtml("a" + r), r = l.getHtml().substr(1), r = r.replace(new RegExp("data-cke-" + CKEDITOR.rnd + "-", "ig"), ""), a && (r = r.replace(/^<pre>|<\/pre>$/gi, "")), r = E(r), r = f(r), r = v(r), i = o.fixForBody === !1 ? !1 : t(o.enterMode, n.config.autoParagraph), r = CKEDITOR.htmlParser.fragment.fromHtml(r, o.context, i), i && D(r, i), o.dataValue = r
            }, null, null, 5), n.on("toHtml", function (e) {
                e.data.filter.applyTo(e.data.dataValue, !0, e.data.dontFilter, e.data.enterMode) && n.fire("dataFiltered")
            }, null, null, 6), n.on("toHtml", function (e) {
                e.data.dataValue.filterChildren(r.dataFilter, !0)
            }, null, null, 10), n.on("toHtml", function (e) {
                var t = e.data, n = t.dataValue, i = new CKEDITOR.htmlParser.basicWriter;
                n.writeChildrenHtml(i), n = i.getHtml(!0), t.dataValue = T(n)
            }, null, null, 15), n.on("toDataFormat", function (e) {
                var i = e.data.dataValue;
                e.data.enterMode != CKEDITOR.ENTER_BR && (i = i.replace(/^<br *\/?>/i, "")), e.data.dataValue = CKEDITOR.htmlParser.fragment.fromHtml(i, e.data.context, t(e.data.enterMode, n.config.autoParagraph))
            }, null, null, 5), n.on("toDataFormat", function (e) {
                e.data.dataValue.filterChildren(r.htmlFilter, !0)
            }, null, null, 10), n.on("toDataFormat", function (e) {
                e.data.filter.applyTo(e.data.dataValue, !1, !0)
            }, null, null, 11), n.on("toDataFormat", function (e) {
                var t = e.data.dataValue, i = r.writer;
                i.reset(), t.writeChildrenHtml(i), t = i.getHtml(!0), t = v(t), t = I(t, n), e.data.dataValue = t
            }, null, null, 15)
        }, CKEDITOR.htmlDataProcessor.prototype = {
            toHtml: function (e, t, n, i) {
                var o, r, a, s = this.editor;
                return t && "object" == typeof t ? (o = t.context, n = t.fixForBody, i = t.dontFilter, r = t.filter, a = t.enterMode) : o = t, o || null === o || (o = s.editable().getName()), s.fire("toHtml", {
                    dataValue: e,
                    context: o,
                    fixForBody: n,
                    dontFilter: i,
                    filter: r || s.filter,
                    enterMode: a || s.enterMode
                }).dataValue
            }, toDataFormat: function (e, t) {
                var n, i, o;
                return t && (n = t.context, i = t.filter, o = t.enterMode), n || null === n || (n = this.editor.editable().getName()), this.editor.fire("toDataFormat", {
                    dataValue: e,
                    filter: i || this.editor.filter,
                    context: n,
                    enterMode: o || this.editor.enterMode
                }).dataValue
            }
        };
        var R = /(?:&nbsp;|\xa0)$/, b = "{cke_protected}", K = CKEDITOR.dtd,
            y = ["caption", "colgroup", "col", "thead", "tfoot", "tbody"],
            _ = CKEDITOR.tools.extend({}, K.$blockLimit, K.$block), k = {elements: {input: c, textarea: c}},
            N = {attributeNames: [[/^on/, "data-cke-pa-on"], [/^data-cke-expando$/, ""]]}, w = {
                elements: {
                    embed: function (e) {
                        var t = e.parent;
                        if (t && "object" == t.name) {
                            var n = t.attributes.width, i = t.attributes.height;
                            n && (e.attributes.width = n), i && (e.attributes.height = i)
                        }
                    }, a: function (e) {
                        return e.children.length || e.attributes.name || e.attributes["data-cke-saved-name"] ? void 0 : !1
                    }
                }
            }, S = {
                elementNames: [[/^cke:/, ""], [/^\?xml:namespace$/, ""]],
                attributeNames: [[/^data-cke-(saved|pa)-/, ""], [/^data-cke-.*/, ""], ["hidefocus", ""]],
                elements: {
                    $: function (e) {
                        var t = e.attributes;
                        if (t) {
                            if (t["data-cke-temp"])return !1;
                            for (var n, i = ["name", "href", "src"], o = 0; o < i.length; o++)n = "data-cke-saved-" + i[o], n in t && delete t[i[o]]
                        }
                        return e
                    }, table: function (e) {
                        var t = e.children.slice(0);
                        t.sort(function (e, t) {
                            var n, i;
                            return e.type == CKEDITOR.NODE_ELEMENT && t.type == e.type && (n = CKEDITOR.tools.indexOf(y, e.name), i = CKEDITOR.tools.indexOf(y, t.name)), n > -1 && i > -1 && n != i || (n = l(e), i = l(t)), n > i ? 1 : -1
                        })
                    }, param: function (e) {
                        return e.children = [], e.isEmpty = !0, e
                    }, span: function (e) {
                        "Apple-style-span" == e.attributes["class"] && delete e.name
                    }, html: function (e) {
                        delete e.attributes.contenteditable, delete e.attributes["class"]
                    }, body: function (e) {
                        delete e.attributes.spellcheck, delete e.attributes.contenteditable
                    }, style: function (e) {
                        var t = e.children[0];
                        t && t.value && (t.value = CKEDITOR.tools.trim(t.value)), e.attributes.type || (e.attributes.type = "text/css")
                    }, title: function (e) {
                        var t = e.children[0];
                        !t && s(e, t = new CKEDITOR.htmlParser.text), t.value = e.attributes["data-cke-title"] || ""
                    }, input: d, textarea: d
                },
                attributes: {
                    "class": function (e) {
                        return CKEDITOR.tools.ltrim(e.replace(/(?:^|\s+)cke_[^\s]*/g, "")) || !1
                    }
                }
            };
        CKEDITOR.env.ie && (S.attributes.style = function (e) {
            return e.replace(/(^|;)([^\:]+)/g, function (e) {
                return e.toLowerCase()
            })
        });
        var x = /<(a|area|img|input|source)\b([^>]*)>/gi,
            A = /([\w-]+)\s*=\s*(?:(?:"[^"]*")|(?:'[^']*')|(?:[^ "'>]+))/gi, L = /^(href|src|name)$/i,
            P = /(?:<style(?=[ >])[^>]*>[\s\S]*?<\/style>)|(?:<(:?link|meta|base)[^>]*>)/gi,
            B = /(<textarea(?=[ >])[^>]*>)([\s\S]*?)(?:<\/textarea>)/gi, F = /<cke:encoded>([^<]*)<\/cke:encoded>/gi,
            $ = /(<\/?)((?:object|embed|param|html|body|head|title)[^>]*>)/gi,
            M = /(<\/?)cke:((?:html|body|head|title)[^>]*>)/gi, H = /<cke:(param|embed)([^>]*?)\/?>(?!\s*<\/cke:\1)/gi
    }(),CKEDITOR.htmlParser.element = function (e, t) {
        this.name = e, this.attributes = t || {}, this.children = [];
        var n = e || "", i = n.match(/^cke:(.*)/);
        i && (n = i[1]);
        var o = !!(CKEDITOR.dtd.$nonBodyContent[n] || CKEDITOR.dtd.$block[n] || CKEDITOR.dtd.$listItem[n] || CKEDITOR.dtd.$tableContent[n] || CKEDITOR.dtd.$nonEditable[n] || "br" == n);
        this.isEmpty = !!CKEDITOR.dtd.$empty[e], this.isUnknown = !CKEDITOR.dtd[e], this._ = {
            isBlockLike: o,
            hasInlineStarted: this.isEmpty || !o
        }
    },CKEDITOR.htmlParser.cssStyle = function () {
        var e, t = arguments[0], n = {};
        return e = t instanceof CKEDITOR.htmlParser.element ? t.attributes.style : t, (e || "").replace(/&quot;/g, '"').replace(/\s*([^ :;]+)\s*:\s*([^;]+)\s*(?=;|$)/g, function (e, t, i) {
            "font-family" == t && (i = i.replace(/["']/g, "")), n[t.toLowerCase()] = i
        }), {
            rules: n, populate: function (e) {
                var t = this.toString();
                t && (e instanceof CKEDITOR.dom.element ? e.setAttribute("style", t) : e instanceof CKEDITOR.htmlParser.element ? e.attributes.style = t : e.style = t)
            }, toString: function () {
                var e = [];
                for (var t in n)n[t] && e.push(t, ":", n[t], ";");
                return e.join("")
            }
        }
    },function () {
        function e(e) {
            return function (t) {
                return t.type == CKEDITOR.NODE_ELEMENT && ("string" == typeof e ? t.name == e : t.name in e)
            }
        }

        var t = function (e, t) {
            return e = e[0], t = t[0], t > e ? -1 : e > t ? 1 : 0
        }, n = CKEDITOR.htmlParser.fragment.prototype;
        CKEDITOR.htmlParser.element.prototype = CKEDITOR.tools.extend(new CKEDITOR.htmlParser.node, {
            type: CKEDITOR.NODE_ELEMENT,
            add: n.add,
            clone: function () {
                return new CKEDITOR.htmlParser.element(this.name, this.attributes)
            },
            filter: function (e, t) {
                var n, i, o = this;
                if (t = o.getFilterContext(t), t.off)return !0;
                for (o.parent || e.onRoot(t, o); ;) {
                    if (n = o.name, !(i = e.onElementName(t, n)))return this.remove(), !1;
                    if (o.name = i, !(o = e.onElement(t, o)))return this.remove(), !1;
                    if (o !== this)return this.replaceWith(o), !1;
                    if (o.name == n)break;
                    if (o.type != CKEDITOR.NODE_ELEMENT)return this.replaceWith(o), !1;
                    if (!o.name)return this.replaceWithChildren(), !1
                }
                var r, a, s, l = o.attributes;
                for (r in l) {
                    for (s = r, a = l[r]; ;) {
                        if (s = e.onAttributeName(t, r)) {
                            if (s != r) {
                                delete l[r], r = s;
                                continue
                            }
                            break
                        }
                        delete l[r];
                        break
                    }
                    s && ((a = e.onAttribute(t, o, s, a)) === !1 ? delete l[s] : l[s] = a)
                }
                return o.isEmpty || this.filterChildren(e, !1, t), !0
            },
            filterChildren: n.filterChildren,
            writeHtml: function (e, n) {
                n && this.filter(n);
                var i, o, r, a, s = this.name, l = [], c = this.attributes;
                e.openTag(s, c);
                for (i in c)l.push([i, c[i]]);
                for (e.sortAttributes && l.sort(t), r = 0, a = l.length; a > r; r++)o = l[r], e.attribute(o[0], o[1]);
                e.openTagClose(s, this.isEmpty), this.writeChildrenHtml(e), this.isEmpty || e.closeTag(s)
            },
            writeChildrenHtml: n.writeChildrenHtml,
            replaceWithChildren: function () {
                for (var e = this.children, t = e.length; t;)e[--t].insertAfter(this);
                this.remove()
            },
            forEach: n.forEach,
            getFirst: function (t) {
                if (!t)return this.children.length ? this.children[0] : null;
                "function" != typeof t && (t = e(t));
                for (var n = 0, i = this.children.length; i > n; ++n)if (t(this.children[n]))return this.children[n];
                return null
            },
            getHtml: function () {
                var e = new CKEDITOR.htmlParser.basicWriter;
                return this.writeChildrenHtml(e), e.getHtml()
            },
            setHtml: function (e) {
                for (var t = this.children = CKEDITOR.htmlParser.fragment.fromHtml(e).children, n = 0, i = t.length; i > n; ++n)t[n].parent = this
            },
            getOuterHtml: function () {
                var e = new CKEDITOR.htmlParser.basicWriter;
                return this.writeHtml(e), e.getHtml()
            },
            split: function (e) {
                for (var t = this.children.splice(e, this.children.length - e), n = this.clone(), i = 0; i < t.length; ++i)t[i].parent = n;
                return n.children = t, t[0] && (t[0].previous = null), e > 0 && (this.children[e - 1].next = null), this.parent.add(n, this.getIndex() + 1), n
            },
            addClass: function (e) {
                if (!this.hasClass(e)) {
                    var t = this.attributes["class"] || "";
                    this.attributes["class"] = t + (t ? " " : "") + e
                }
            },
            removeClass: function (e) {
                var t = this.attributes["class"];
                t && (t = CKEDITOR.tools.trim(t.replace(new RegExp("(?:\\s+|^)" + e + "(?:\\s+|$)"), " ")), t ? this.attributes["class"] = t : delete this.attributes["class"])
            },
            hasClass: function (e) {
                var t = this.attributes["class"];
                return t ? new RegExp("(?:^|\\s)" + e + "(?=\\s|$)").test(t) : !1
            },
            getFilterContext: function (e) {
                var t = [];
                if (e || (e = {
                        off: !1,
                        nonEditable: !1,
                        nestedEditable: !1
                    }), e.off || "off" != this.attributes["data-cke-processor"] || t.push("off", !0), e.nonEditable || "false" != this.attributes.contenteditable ? e.nonEditable && !e.nestedEditable && "true" == this.attributes.contenteditable && t.push("nestedEditable", !0) : t.push("nonEditable", !0), t.length) {
                    e = CKEDITOR.tools.copy(e);
                    for (var n = 0; n < t.length; n += 2)e[t[n]] = t[n + 1]
                }
                return e
            }
        }, !0)
    }(),function () {
        var e = {}, t = /{([^}]+)}/g, n = /([\\'])/g, i = /\n/g, o = /\r/g;
        CKEDITOR.template = function (r) {
            if (e[r]) this.output = e[r]; else {
                var a = r.replace(n, "\\$1").replace(i, "\\n").replace(o, "\\r").replace(t, function (e, t) {
                    return "',data['" + t + "']==undefined?'{" + t + "}':data['" + t + "'],'"
                });
                a = "return buffer?buffer.push('" + a + "'):['" + a + "'].join('');", this.output = e[r] = Function("data", "buffer", a)
            }
        }
    }(),delete CKEDITOR.loadFullCore,CKEDITOR.instances = {},CKEDITOR.document = new CKEDITOR.dom.document(document),CKEDITOR.add = function (e) {
        CKEDITOR.instances[e.name] = e, e.on("focus", function () {
            CKEDITOR.currentInstance != e && (CKEDITOR.currentInstance = e, CKEDITOR.fire("currentInstance"))
        }), e.on("blur", function () {
            CKEDITOR.currentInstance == e && (CKEDITOR.currentInstance = null, CKEDITOR.fire("currentInstance"))
        }), CKEDITOR.fire("instance", null, e)
    },CKEDITOR.remove = function (e) {
        delete CKEDITOR.instances[e.name]
    },function () {
        var e = {};
        CKEDITOR.addTemplate = function (t, n) {
            var i = e[t];
            if (i)return i;
            var o = {name: t, source: n};
            return CKEDITOR.fire("template", o), e[t] = new CKEDITOR.template(o.source)
        }, CKEDITOR.getTemplate = function (t) {
            return e[t]
        }
    }(),function () {
        var e = [];
        CKEDITOR.addCss = function (t) {
            e.push(t)
        }, CKEDITOR.getCss = function () {
            return e.join("\n")
        }
    }(),CKEDITOR.on("instanceDestroyed", function () {
        CKEDITOR.tools.isEmpty(this.instances) && CKEDITOR.fire("reset")
    }),CKEDITOR.TRISTATE_ON = 1,CKEDITOR.TRISTATE_OFF = 2,CKEDITOR.TRISTATE_DISABLED = 0,function () {
        CKEDITOR.inline = function (e, t) {
            if (!CKEDITOR.env.isCompatible)return null;
            if (e = CKEDITOR.dom.element.get(e), e.getEditor())throw'The editor instance "' + e.getEditor().name + '" is already attached to the provided element.';
            var n = new CKEDITOR.editor(t, e, CKEDITOR.ELEMENT_MODE_INLINE), i = e.is("textarea") ? e : null;
            return i ? (n.setData(i.getValue(), null, !0), e = CKEDITOR.dom.element.createFromHtml('<div contenteditable="' + !!n.readOnly + '" class="cke_textarea_inline">' + i.getValue() + "</div>", CKEDITOR.document), e.insertAfter(i), i.hide(), i.$.form && n._attachToForm()) : n.setData(e.getHtml(), null, !0), n.on("loaded", function () {
                n.fire("uiReady"), n.editable(e), n.container = e, n.setData(n.getData(1)), n.resetDirty(), n.fire("contentDom"), n.mode = "wysiwyg", n.fire("mode"), n.status = "ready", n.fireOnce("instanceReady"), CKEDITOR.fire("instanceReady", null, n)
            }, null, null, 1e4), n.on("destroy", function () {
                i && (n.container.clearCustomData(), n.container.remove(), i.show()), n.element.clearCustomData(), delete n.element
            }), n
        }, CKEDITOR.inlineAll = function () {
            var e, t;
            for (var n in CKEDITOR.dtd.$editable)for (var i = CKEDITOR.document.getElementsByTag(n), o = 0, r = i.count(); r > o; o++)e = i.getItem(o), "true" == e.getAttribute("contenteditable") && (t = {
                element: e,
                config: {}
            }, CKEDITOR.fire("inline", t) !== !1 && CKEDITOR.inline(e, t.config))
        }, CKEDITOR.domReady(function () {
            !CKEDITOR.disableAutoInline && CKEDITOR.inlineAll()
        })
    }(),CKEDITOR.replaceClass = "ckeditor",function () {
        function e(e, i, o, r) {
            if (!CKEDITOR.env.isCompatible)return null;
            if (e = CKEDITOR.dom.element.get(e), e.getEditor())throw'The editor instance "' + e.getEditor().name + '" is already attached to the provided element.';
            var a = new CKEDITOR.editor(i, e, r);
            return r == CKEDITOR.ELEMENT_MODE_REPLACE && (e.setStyle("visibility", "hidden"), a._.required = e.hasAttribute("required"), e.removeAttribute("required")), o && a.setData(o, null, !0), a.on("loaded", function () {
                n(a), r == CKEDITOR.ELEMENT_MODE_REPLACE && a.config.autoUpdateElement && e.$.form && a._attachToForm(), a.setMode(a.config.startupMode, function () {
                    a.resetDirty(), a.status = "ready", a.fireOnce("instanceReady"), CKEDITOR.fire("instanceReady", null, a)
                })
            }), a.on("destroy", t), a
        }

        function t() {
            var e = this, t = e.container, n = e.element;
            t && (t.clearCustomData(), t.remove()), n && (n.clearCustomData(), e.elementMode == CKEDITOR.ELEMENT_MODE_REPLACE && (n.show(), e._.required && n.setAttribute("required", "required")), delete e.element)
        }

        function n(e) {
            var t = e.name, n = e.element, i = e.elementMode, o = e.fire("uiSpace", {space: "top", html: ""}).html,
                r = e.fire("uiSpace", {space: "bottom", html: ""}).html,
                a = new CKEDITOR.template('<{outerEl} id="cke_{name}" class="{id} cke cke_reset cke_chrome cke_editor_{name} cke_{langDir} ' + CKEDITOR.env.cssClass + '"  dir="{langDir}" lang="{langCode}" role="application"' + (e.title ? ' aria-labelledby="cke_{name}_arialbl"' : "") + ">" + (e.title ? '<span id="cke_{name}_arialbl" class="cke_voice_label">{voiceLabel}</span>' : "") + '<{outerEl} class="cke_inner cke_reset" role="presentation">{topHtml}<{outerEl} id="{contentId}" class="cke_contents cke_reset" role="presentation"></{outerEl}>{bottomHtml}</{outerEl}></{outerEl}>'),
                s = CKEDITOR.dom.element.createFromHtml(a.output({
                    id: e.id,
                    name: t,
                    langDir: e.lang.dir,
                    langCode: e.langCode,
                    voiceLabel: e.title,
                    topHtml: o ? '<span id="' + e.ui.spaceId("top") + '" class="cke_top cke_reset_all" role="presentation" style="height:auto">' + o + "</span>" : "",
                    contentId: e.ui.spaceId("contents"),
                    bottomHtml: r ? '<span id="' + e.ui.spaceId("bottom") + '" class="cke_bottom cke_reset_all" role="presentation">' + r + "</span>" : "",
                    outerEl: CKEDITOR.env.ie ? "span" : "div"
                }));
            i == CKEDITOR.ELEMENT_MODE_REPLACE ? (n.hide(), s.insertAfter(n)) : n.append(s), e.container = s, o && e.ui.space("top").unselectable(), r && e.ui.space("bottom").unselectable();
            var l = e.config.width, c = e.config.height;
            l && s.setStyle("width", CKEDITOR.tools.cssLength(l)), c && e.ui.space("contents").setStyle("height", CKEDITOR.tools.cssLength(c)), s.disableContextMenu(), CKEDITOR.env.webkit && s.on("focus", function () {
                e.focus()
            }), e.fireOnce("uiReady")
        }

        CKEDITOR.replace = function (t, n) {
            return e(t, n, null, CKEDITOR.ELEMENT_MODE_REPLACE)
        }, CKEDITOR.appendTo = function (t, n, i) {
            return e(t, n, i, CKEDITOR.ELEMENT_MODE_APPENDTO)
        }, CKEDITOR.replaceAll = function () {
            for (var e = document.getElementsByTagName("textarea"), t = 0; t < e.length; t++) {
                var n = null, i = e[t];
                if (i.name || i.id) {
                    if ("string" == typeof arguments[0]) {
                        var o = new RegExp("(?:^|\\s)" + arguments[0] + "(?:$|\\s)");
                        if (!o.test(i.className))continue
                    } else if ("function" == typeof arguments[0] && (n = {}, arguments[0](i, n) === !1))continue;
                    this.replace(i, n)
                }
            }
        }, CKEDITOR.editor.prototype.addMode = function (e, t) {
            (this._.modes || (this._.modes = {}))[e] = t
        }, CKEDITOR.editor.prototype.setMode = function (e, t) {
            var n = this, i = this._.modes;
            if (e != n.mode && i && i[e]) {
                if (n.fire("beforeSetMode", e), n.mode) {
                    var o, r = n.checkDirty(), a = n._.previousModeData, s = 0;
                    n.fire("beforeModeUnload"), n.editable(0), n._.previousMode = n.mode, n._.previousModeData = o = n.getData(1), "source" == n.mode && a == o && (n.fire("lockSnapshot", {forceUpdate: !0}), s = 1), n.ui.space("contents").setHtml(""), n.mode = ""
                } else n._.previousModeData = n.getData(1);
                this._.modes[e](function () {
                    n.mode = e, void 0 !== r && !r && n.resetDirty(), s ? n.fire("unlockSnapshot") : "wysiwyg" == e && n.fire("saveSnapshot"), setTimeout(function () {
                        n.fire("mode"), t && t.call(n)
                    }, 0)
                })
            }
        }, CKEDITOR.editor.prototype.resize = function (e, t, n, i) {
            var o, r = this.container, a = this.ui.space("contents"),
                s = CKEDITOR.env.webkit && this.document && this.document.getWindow().$.frameElement;
            o = i ? this.container.getFirst(function (e) {
                return e.type == CKEDITOR.NODE_ELEMENT && e.hasClass("cke_inner")
            }) : r, o.setSize("width", e, !0), s && (s.style.width = "1%");
            var l = n ? 0 : (o.$.offsetHeight || 0) - (a.$.clientHeight || 0);
            a.setStyle("height", Math.max(t - l, 0) + "px"), s && (s.style.width = "100%"), this.fire("resize")
        }, CKEDITOR.editor.prototype.getResizable = function (e) {
            return e ? this.ui.space("contents") : this.container
        }, CKEDITOR.domReady(function () {
            CKEDITOR.replaceClass && CKEDITOR.replaceAll(CKEDITOR.replaceClass)
        })
    }(),CKEDITOR.config.startupMode = "wysiwyg",function () {
        function e(e) {
            var n, r = e.editor, a = e.data.path, l = a.blockLimit, c = e.data.selection, d = c.getRanges()[0];
            if (CKEDITOR.env.gecko || CKEDITOR.env.ie && CKEDITOR.env.needsBrFiller) {
                var u = t(c, a);
                u && (u.appendBogus(), n = CKEDITOR.env.ie)
            }
            if (s(r, a.block, l) && d.collapsed && !d.getCommonAncestor().isReadOnly()) {
                var h = d.clone();
                h.enlarge(CKEDITOR.ENLARGE_BLOCK_CONTENTS);
                var f = new CKEDITOR.dom.walker(h);
                if (f.guard = function (e) {
                        return !i(e) || e.type == CKEDITOR.NODE_COMMENT || e.isReadOnly()
                    }, !f.checkForward() || h.checkStartOfBlock() && h.checkEndOfBlock()) {
                    var m = d.fixBlock(!0, r.activeEnterMode == CKEDITOR.ENTER_DIV ? "div" : "p");
                    if (!CKEDITOR.env.needsBrFiller) {
                        var E = m.getFirst(i);
                        E && o(E) && E.remove()
                    }
                    n = 1, e.cancel()
                }
            }
            n && d.select()
        }

        function t(e, t) {
            if (e.isFake)return 0;
            var n = t.block || t.blockLimit, o = n && n.getLast(i);
            return !n || !n.isBlockBoundary() || o && o.type == CKEDITOR.NODE_ELEMENT && o.isBlockBoundary() || n.is("pre") || n.getBogus() ? void 0 : n
        }

        function n(e) {
            var t = e.data.getTarget();
            if (t.is("input")) {
                var n = t.getAttribute("type");
                ("submit" == n || "reset" == n) && e.data.preventDefault()
            }
        }

        function i(e) {
            return E(e) && g(e)
        }

        function o(e) {
            return e.type == CKEDITOR.NODE_TEXT && CKEDITOR.tools.trim(e.getText()).match(/^(?:&nbsp;|\xa0)$/)
        }

        function r(e, t) {
            return function (n) {
                var i = CKEDITOR.dom.element.get(n.data.$.toElement || n.data.$.fromElement || n.data.$.relatedTarget);
                i && (t.equals(i) || t.contains(i)) || e.call(this, n)
            }
        }

        function a(e) {
            function t(e) {
                return function (t, o) {
                    return o && t.type == CKEDITOR.NODE_ELEMENT && t.is(s) && (n = t), o || !i(t) || e && f(t) ? void 0 : !1
                }
            }

            var n, o = e.getRanges()[0], r = e.root, a = o.startPath(), s = {table: 1, ul: 1, ol: 1, dl: 1};
            if (a.contains(s)) {
                var l = o.clone();
                l.collapse(1), l.setStartAt(r, CKEDITOR.POSITION_AFTER_START);
                var c = new CKEDITOR.dom.walker(l);
                if (c.guard = t(), c.checkBackward(), n)return l = o.clone(), l.collapse(), l.setEndAt(n, CKEDITOR.POSITION_AFTER_END), c = new CKEDITOR.dom.walker(l), c.guard = t(!0), n = !1, c.checkForward(), n
            }
            return null
        }

        function s(e, t, n) {
            return e.config.autoParagraph !== !1 && e.activeEnterMode != CKEDITOR.ENTER_BR && e.editable().equals(n) && !t || t && "true" == t.getAttribute("contenteditable")
        }

        function l(e) {
            e.editor.focus(), e.editor.fire("saveSnapshot")
        }

        function c(e) {
            var t = e.editor;
            t.getSelection().scrollIntoView(), setTimeout(function () {
                t.fire("saveSnapshot")
            }, 0)
        }

        function d(e, t, n, i) {
            var o = i.block;
            if (!o)return !1;
            if (!t[n ? "checkStartOfBlock" : "checkEndOfBlock"]())return !1;
            if (!t.moveToClosestEditablePosition(o, !n) || !t.collapsed)return !1;
            if (t.startContainer.type == CKEDITOR.NODE_ELEMENT) {
                var r = t.startContainer.getChild(t.startOffset - (n ? 1 : 0));
                if (r && r.type == CKEDITOR.NODE_ELEMENT && r.is("hr"))return e.fire("saveSnapshot"), r.remove(), !0
            }
            var a = t.startPath().block;
            if (!(!a || a && a.contains(o))) {
                e.fire("saveSnapshot");
                var s;
                (s = (n ? a : o).getBogus()) && s.remove();
                var l = e.getSelection(), c = l.createBookmarks();
                return (n ? o : a).moveChildren(n ? a : o, !1), i.lastElement.mergeSiblings(), h(o, a, !n), l.selectBookmarks(c), !0
            }
        }

        function u(e, t, n) {
            var i = n.block, o = t.endPath(), r = o.block;
            if (!i || !r || i.equals(r))return !1;
            e.fire("saveSnapshot");
            var a;
            return (a = i.getBogus()) && a.remove(), t.deleteContents(), r.getParent() && (r.moveChildren(i, !1), n.lastElement.mergeSiblings(), h(i, r, !0)), t = e.getSelection().getRanges()[0], t.collapse(1), t.select(), !0
        }

        function h(e, t, n) {
            for (var i = e.getCommonAncestor(t), o = n ? t : e, r = o; (o = o.getParent()) && !i.equals(o) && 1 == o.getChildCount();)r = o;
            r.remove()
        }

        CKEDITOR.editable = CKEDITOR.tools.createClass({
            base: CKEDITOR.dom.element, $: function (e, t) {
                this.base(t.$ || t), this.editor = e, this.status = "unloaded", this.hasFocus = !1, this.setup()
            }, proto: {
                focus: function () {
                    var e;
                    if (CKEDITOR.env.webkit && !this.hasFocus && (e = this.editor._.previousActive || this.getDocument().getActive(), this.contains(e)))return void e.focus();
                    try {
                        this.$[CKEDITOR.env.ie && this.getDocument().equals(CKEDITOR.document) ? "setActive" : "focus"]()
                    } catch (t) {
                        if (!CKEDITOR.env.ie)throw t
                    }
                    CKEDITOR.env.safari && !this.isInline() && (e = CKEDITOR.document.getActive(), e.equals(this.getWindow().getFrame()) || this.getWindow().focus())
                }, on: function (e, t) {
                    var n = Array.prototype.slice.call(arguments, 0);
                    return CKEDITOR.env.ie && /^focus|blur$/.exec(e) && (e = "focus" == e ? "focusin" : "focusout", t = r(t, this), n[0] = e, n[1] = t), CKEDITOR.dom.element.prototype.on.apply(this, n)
                }, attachListener: function (e) {
                    !this._.listeners && (this._.listeners = []);
                    var t = Array.prototype.slice.call(arguments, 1), n = e.on.apply(e, t);
                    return this._.listeners.push(n), n
                }, clearListeners: function () {
                    var e = this._.listeners;
                    try {
                        for (; e.length;)e.pop().removeListener()
                    } catch (t) {
                    }
                }, restoreAttrs: function () {
                    var e, t = this._.attrChanges;
                    for (var n in t)t.hasOwnProperty(n) && (e = t[n], null !== e ? this.setAttribute(n, e) : this.removeAttribute(n))
                }, attachClass: function (e) {
                    var t = this.getCustomData("classes");
                    this.hasClass(e) || (!t && (t = []), t.push(e), this.setCustomData("classes", t), this.addClass(e))
                }, changeAttr: function (e, t) {
                    var n = this.getAttribute(e);
                    t !== n && (!this._.attrChanges && (this._.attrChanges = {}), e in this._.attrChanges || (this._.attrChanges[e] = n), this.setAttribute(e, t))
                }, insertHtml: function (e, t) {
                    l(this), p(this, t || "html", e)
                }, insertText: function (e) {
                    l(this);
                    var t = this.editor,
                        n = t.getSelection().getStartElement().hasAscendant("pre", !0) ? CKEDITOR.ENTER_BR : t.activeEnterMode,
                        i = n == CKEDITOR.ENTER_BR, o = CKEDITOR.tools, r = o.htmlEncode(e.replace(/\r\n/g, "\n"));
                    r = r.replace(/\t/g, "&nbsp;&nbsp; &nbsp;");
                    var a = n == CKEDITOR.ENTER_P ? "p" : "div";
                    if (!i) {
                        var s = /\n{2}/g;
                        if (s.test(r)) {
                            var c = "<" + a + ">", d = "</" + a + ">";
                            r = c + r.replace(s, function () {
                                    return d + c
                                }) + d
                        }
                    }
                    r = r.replace(/\n/g, "<br>"), i || (r = r.replace(new RegExp("<br>(?=</" + a + ">)"), function (e) {
                        return o.repeat(e, 2)
                    })), r = r.replace(/^ | $/g, "&nbsp;"), r = r.replace(/(>|\s) /g, function (e, t) {
                        return t + "&nbsp;"
                    }).replace(/ (?=<)/g, "&nbsp;"), p(this, "text", r)
                }, insertElement: function (e, t) {
                    t ? this.insertElementIntoRange(e, t) : this.insertElementIntoSelection(e)
                }, insertElementIntoRange: function (e, t) {
                    var n = this.editor, i = n.config.enterMode, o = e.getName(), r = CKEDITOR.dtd.$block[o];
                    if (t.checkReadOnly())return !1;
                    t.deleteContents(1), t.startContainer.type == CKEDITOR.NODE_ELEMENT && t.startContainer.is({
                        tr: 1,
                        table: 1,
                        tbody: 1,
                        thead: 1,
                        tfoot: 1
                    }) && T(t);
                    var a, s;
                    if (r)for (; (a = t.getCommonAncestor(0, 1)) && (s = CKEDITOR.dtd[a.getName()]) && (!s || !s[o]);)a.getName() in CKEDITOR.dtd.span ? t.splitElement(a) : t.checkStartOfBlock() && t.checkEndOfBlock() ? (t.setStartBefore(a), t.collapse(!0), a.remove()) : t.splitBlock(i == CKEDITOR.ENTER_DIV ? "div" : "p", n.editable());
                    return t.insertNode(e), !0
                }, insertElementIntoSelection: function (e) {
                    l(this);
                    var t = this.editor, n = t.activeEnterMode, o = t.getSelection(), r = o.getRanges()[0],
                        a = e.getName(), s = CKEDITOR.dtd.$block[a];
                    if (this.insertElementIntoRange(e, r) && (r.moveToPosition(e, CKEDITOR.POSITION_AFTER_END), s)) {
                        var d = e.getNext(function (e) {
                            return i(e) && !f(e)
                        });
                        d && d.type == CKEDITOR.NODE_ELEMENT && d.is(CKEDITOR.dtd.$block) ? d.getDtd()["#"] ? r.moveToElementEditStart(d) : r.moveToElementEditEnd(e) : d || n == CKEDITOR.ENTER_BR || (d = r.fixBlock(!0, n == CKEDITOR.ENTER_DIV ? "div" : "p"), r.moveToElementEditStart(d))
                    }
                    o.selectRanges([r]), c(this)
                }, setData: function (e, t) {
                    t || (e = this.editor.dataProcessor.toHtml(e)), this.setHtml(e), this.fixInitialSelection(), "unloaded" == this.status && (this.status = "ready"), this.editor.fire("dataReady")
                }, getData: function (e) {
                    var t = this.getHtml();
                    return e || (t = this.editor.dataProcessor.toDataFormat(t)), t
                }, setReadOnly: function (e) {
                    this.setAttribute("contenteditable", !e)
                }, detach: function () {
                    this.removeClass("cke_editable"), this.status = "detached";
                    var e = this.editor;
                    this._.detach(), delete e.document, delete e.window
                }, isInline: function () {
                    return this.getDocument().equals(CKEDITOR.document)
                }, fixInitialSelection: function () {
                    function e() {
                        var e = i.getDocument().$, n = e.getSelection();
                        if (t(n)) {
                            var o = new CKEDITOR.dom.range(i);
                            o.moveToElementEditStart(i);
                            var r = e.createRange();
                            r.setStart(o.startContainer.$, o.startOffset), r.collapse(!0), n.removeAllRanges(), n.addRange(r)
                        }
                    }

                    function t(e) {
                        if (e.anchorNode && e.anchorNode == i.$)return !0;
                        if (CKEDITOR.env.webkit) {
                            var t = i.getDocument().getActive();
                            if (t && t.equals(i) && !e.anchorNode)return !0
                        }
                    }

                    function n() {
                        var e = i.getDocument().$, t = e.selection, n = i.getDocument().getActive();
                        if ("None" == t.type && n.equals(i)) {
                            var o, r = new CKEDITOR.dom.range(i), a = e.body.createTextRange();
                            r.moveToElementEditStart(i), o = r.startContainer, o.type != CKEDITOR.NODE_ELEMENT && (o = o.getParent()), a.moveToElementText(o.$), a.collapse(!0), a.select()
                        }
                    }

                    var i = this;
                    return CKEDITOR.env.ie && (CKEDITOR.env.version < 9 || CKEDITOR.env.quirks) ? void(this.hasFocus && (this.focus(), n())) : void(this.hasFocus ? (this.focus(), e()) : this.once("focus", function () {
                        e()
                    }, null, null, -999))
                }, setup: function () {
                    var e = this.editor;
                    this.attachListener(e, "beforeGetData", function () {
                        var t = this.getData();
                        this.is("textarea") || e.config.ignoreEmptyParagraph !== !1 && (t = t.replace(m, function (e, t) {
                            return t
                        })), e.setData(t, null, 1)
                    }, this), this.attachListener(e, "getSnapshot", function (e) {
                        e.data = this.getData(1)
                    }, this), this.attachListener(e, "afterSetData", function () {
                        this.setData(e.getData(1))
                    }, this), this.attachListener(e, "loadSnapshot", function (e) {
                        this.setData(e.data, 1)
                    }, this), this.attachListener(e, "beforeFocus", function () {
                        var t = e.getSelection(), n = t && t.getNative();
                        n && "Control" == n.type || this.focus()
                    }, this), this.attachListener(e, "insertHtml", function (e) {
                        this.insertHtml(e.data.dataValue, e.data.mode)
                    }, this), this.attachListener(e, "insertElement", function (e) {
                        this.insertElement(e.data)
                    }, this), this.attachListener(e, "insertText", function (e) {
                        this.insertText(e.data)
                    }, this), this.setReadOnly(e.readOnly), this.attachClass("cke_editable"), this.attachClass(e.elementMode == CKEDITOR.ELEMENT_MODE_INLINE ? "cke_editable_inline" : e.elementMode == CKEDITOR.ELEMENT_MODE_REPLACE || e.elementMode == CKEDITOR.ELEMENT_MODE_APPENDTO ? "cke_editable_themed" : ""), this.attachClass("cke_contents_" + e.config.contentsLangDirection);
                    var t = e.keystrokeHandler;
                    if (t.blockedKeystrokes[8] = +e.readOnly, e.keystrokeHandler.attach(this), this.on("blur", function () {
                            this.hasFocus = !1
                        }, null, null, -1), this.on("focus", function () {
                            this.hasFocus = !0
                        }, null, null, -1), e.focusManager.add(this), this.equals(CKEDITOR.document.getActive()) && (this.hasFocus = !0, e.once("contentDom", function () {
                            e.focusManager.focus(this)
                        }, this)), this.isInline() && this.changeAttr("tabindex", e.tabIndex), !this.is("textarea")) {
                        e.document = this.getDocument(), e.window = this.getWindow();
                        var o = e.document;
                        this.changeAttr("spellcheck", !e.config.disableNativeSpellChecker);
                        var r = e.config.contentsLangDirection;
                        this.getDirection(1) != r && this.changeAttr("dir", r);
                        var s = CKEDITOR.getCss();
                        if (s) {
                            var l = o.getHead();
                            if (!l.getCustomData("stylesheet")) {
                                var c = o.appendStyleText(s);
                                c = new CKEDITOR.dom.element(c.ownerNode || c.owningElement), l.setCustomData("stylesheet", c), c.data("cke-temp", 1)
                            }
                        }
                        var h = o.getCustomData("stylesheet_ref") || 0;
                        o.setCustomData("stylesheet_ref", h + 1), this.setCustomData("cke_includeReadonly", !e.config.disableReadonlyStyling), this.attachListener(this, "click", function (e) {
                            e = e.data;
                            var t = new CKEDITOR.dom.elementPath(e.getTarget(), this).contains("a");
                            t && 2 != e.$.button && t.isReadOnly() && e.preventDefault()
                        });
                        var f = {8: 1, 46: 1};
                        this.attachListener(e, "key", function (t) {
                            if (e.readOnly)return !0;
                            var n, i = t.data.domEvent.getKey();
                            if (i in f) {
                                var o, r, s, l, c = e.getSelection(), d = c.getRanges()[0], u = d.startPath(),
                                    h = 8 == i;
                                CKEDITOR.env.ie && CKEDITOR.env.version < 11 && (o = c.getSelectedElement()) || (o = a(c)) ? (e.fire("saveSnapshot"), d.moveToPosition(o, CKEDITOR.POSITION_BEFORE_START), o.remove(), d.select(), e.fire("saveSnapshot"), n = 1) : d.collapsed && ((r = u.block) && (l = r[h ? "getPrevious" : "getNext"](E)) && l.type == CKEDITOR.NODE_ELEMENT && l.is("table") && d[h ? "checkStartOfBlock" : "checkEndOfBlock"]() ? (e.fire("saveSnapshot"), d[h ? "checkEndOfBlock" : "checkStartOfBlock"]() && r.remove(), d["moveToElementEdit" + (h ? "End" : "Start")](l), d.select(), e.fire("saveSnapshot"), n = 1) : u.blockLimit && u.blockLimit.is("td") && (s = u.blockLimit.getAscendant("table")) && d.checkBoundaryOfElement(s, h ? CKEDITOR.START : CKEDITOR.END) && (l = s[h ? "getPrevious" : "getNext"](E)) ? (e.fire("saveSnapshot"), d["moveToElementEdit" + (h ? "End" : "Start")](l), d.checkStartOfBlock() && d.checkEndOfBlock() ? l.remove() : d.select(), e.fire("saveSnapshot"), n = 1) : (s = u.contains(["td", "th", "caption"])) && d.checkBoundaryOfElement(s, h ? CKEDITOR.START : CKEDITOR.END) && (n = 1))
                            }
                            return !n
                        }), e.blockless && CKEDITOR.env.ie && CKEDITOR.env.needsBrFiller && this.attachListener(this, "keyup", function (t) {
                            if (t.data.getKeystroke() in f && !this.getFirst(i)) {
                                this.appendBogus();
                                var n = e.createRange();
                                n.moveToPosition(this, CKEDITOR.POSITION_AFTER_START), n.select()
                            }
                        }), this.attachListener(this, "dblclick", function (t) {
                            if (e.readOnly)return !1;
                            var n = {element: t.data.getTarget()};
                            e.fire("doubleclick", n)
                        }), CKEDITOR.env.ie && this.attachListener(this, "click", n), CKEDITOR.env.ie || this.attachListener(this, "mousedown", function (t) {
                            var n = t.data.getTarget();
                            n.is("img", "hr", "input", "textarea", "select") && !n.isReadOnly() && (e.getSelection().selectElement(n), n.is("input", "textarea", "select") && t.data.preventDefault())
                        }), CKEDITOR.env.gecko && this.attachListener(this, "mouseup", function (t) {
                            if (2 == t.data.$.button) {
                                var n = t.data.getTarget();
                                if (!n.getOuterHtml().replace(m, "")) {
                                    var i = e.createRange();
                                    i.moveToElementEditStart(n), i.select(!0)
                                }
                            }
                        }), CKEDITOR.env.webkit && (this.attachListener(this, "click", function (e) {
                            e.data.getTarget().is("input", "select") && e.data.preventDefault()
                        }), this.attachListener(this, "mouseup", function (e) {
                            e.data.getTarget().is("input", "textarea") && e.data.preventDefault()
                        })), CKEDITOR.env.webkit && this.attachListener(e, "key", function (t) {
                            var n = t.data.domEvent.getKey();
                            if (n in f) {
                                var i = 8 == n, o = e.getSelection().getRanges()[0], r = o.startPath();
                                if (o.collapsed) {
                                    if (!d(e, o, i, r))return
                                } else if (!u(e, o, r))return;
                                return e.getSelection().scrollIntoView(), e.fire("saveSnapshot"), !1
                            }
                        }, this, null, 100)
                    }
                }
            }, _: {
                detach: function () {
                    this.editor.setData(this.editor.getData(), 0, 1), this.clearListeners(), this.restoreAttrs();
                    var e;
                    if (e = this.removeCustomData("classes"))for (; e.length;)this.removeClass(e.pop());
                    if (!this.is("textarea")) {
                        var t = this.getDocument(), n = t.getHead();
                        if (n.getCustomData("stylesheet")) {
                            var i = t.getCustomData("stylesheet_ref");
                            if (--i) t.setCustomData("stylesheet_ref", i); else {
                                t.removeCustomData("stylesheet_ref");
                                var o = n.removeCustomData("stylesheet");
                                o.remove()
                            }
                        }
                    }
                    this.editor.fire("contentDomUnload"), delete this.editor
                }
            }
        }), CKEDITOR.editor.prototype.editable = function (e) {
            var t = this._.editable;
            return t && e ? 0 : (arguments.length && (t = this._.editable = e ? e instanceof CKEDITOR.editable ? e : new CKEDITOR.editable(this, e) : (t && t.detach(), null)), t)
        };
        var f = CKEDITOR.dom.walker.bogus(),
            m = /(^|<body\b[^>]*>)\s*<(p|div|address|h\d|center|pre)[^>]*>\s*(?:<br[^>]*>|&nbsp;|\u00A0|&#160;)?\s*(:?<\/\2>)?\s*(?=$|<\/body>)/gi,
            E = CKEDITOR.dom.walker.whitespaces(!0), g = CKEDITOR.dom.walker.bookmark(!1, !0);
        CKEDITOR.on("instanceLoaded", function (t) {
            var n = t.editor;
            n.on("insertElement", function (e) {
                var t = e.data;
                t.type == CKEDITOR.NODE_ELEMENT && (t.is("input") || t.is("textarea")) && ("false" != t.getAttribute("contentEditable") && t.data("cke-editable", t.hasAttribute("contenteditable") ? "true" : "1"), t.setAttribute("contentEditable", !1))
            }), n.on("selectionChange", function (t) {
                if (!n.readOnly) {
                    var i = n.getSelection();
                    if (i && !i.isLocked) {
                        var o = n.checkDirty();
                        n.fire("lockSnapshot"), e(t), n.fire("unlockSnapshot"), !o && n.resetDirty()
                    }
                }
            })
        }), CKEDITOR.on("instanceCreated", function (e) {
            var t = e.editor;
            t.on("mode", function () {
                var e = t.editable();
                if (e && e.isInline()) {
                    var n = t.title;
                    e.changeAttr("role", "textbox"), e.changeAttr("aria-label", n), n && e.changeAttr("title", n);
                    var i = t.fire("ariaEditorHelpLabel", {}).label;
                    if (i) {
                        var o = this.ui.space(this.elementMode == CKEDITOR.ELEMENT_MODE_INLINE ? "top" : "contents");
                        if (o) {
                            var r = CKEDITOR.tools.getNextId(),
                                a = CKEDITOR.dom.element.createFromHtml('<span id="' + r + '" class="cke_voice_label">' + i + "</span>");
                            o.append(a), e.changeAttr("aria-describedby", r)
                        }
                    }
                }
            })
        }), CKEDITOR.addCss(".cke_editable{cursor:text}.cke_editable img,.cke_editable input,.cke_editable textarea{cursor:default}");
        var p = function () {
            "use strict";
            function e(e, i, a) {
                var s = e.editor, l = s.getSelection(), d = l.getRanges()[0], u = !1;
                if ("unfiltered_html" == i && (i = "html", u = !0), !d.checkReadOnly()) {
                    var h = new CKEDITOR.dom.elementPath(d.startContainer, d.root), f = h.blockLimit || d.root, m = {
                        type: i,
                        dontFilter: u,
                        editable: e,
                        editor: s,
                        range: d,
                        blockLimit: f,
                        mergeCandidates: [],
                        zombies: []
                    };
                    t(m), a && n(m, a) && o(m), r(m), d.select(), c(e)
                }
            }

            function t(e) {
                var t, n, o, r, a, s, c, d = e.range, u = e.mergeCandidates;
                if ("text" == e.type && d.shrink(CKEDITOR.SHRINK_ELEMENT, !0, !1) && (n = CKEDITOR.dom.element.createFromHtml("<span>&nbsp;</span>", d.document), d.insertNode(n), d.setStartAfter(n)), r = new CKEDITOR.dom.elementPath(d.startContainer), e.endPath = a = new CKEDITOR.dom.elementPath(d.endContainer), !d.collapsed) {
                    t = a.block || a.blockLimit;
                    var h = d.getCommonAncestor();
                    t && !t.equals(h) && !t.contains(h) && d.checkEndOfBlock() && e.zombies.push(t), d.deleteContents()
                }
                for (; (s = f(d)) && l(s) && s.isBlockBoundary() && r.contains(s);)d.moveToPosition(s, CKEDITOR.POSITION_BEFORE_END);
                for (E(d, e.blockLimit, r, a), n && (d.setEndBefore(n), d.collapse(), n.remove()), o = d.startPath(), (t = o.contains(m, !1, 1)) && (d.splitElement(t), e.inlineStylesRoot = t, e.inlineStylesPeak = o.lastElement), c = d.createBookmark(), t = c.startNode.getPrevious(i), t && l(t) && m(t) && u.push(t), t = c.startNode.getNext(i), t && l(t) && m(t) && u.push(t), t = c.startNode; (t = t.getParent()) && m(t);)u.push(t);
                d.moveToBookmark(c)
            }

            function n(e, t) {
                var n = e.range;
                "text" == e.type && e.inlineStylesRoot && (t = C(t, e));
                var i = e.blockLimit.getName();
                if (/^\s+|\s+$/.test(t) && "span" in CKEDITOR.dtd[i]) {
                    var o = '<span data-cke-marker="1">&nbsp;</span>';
                    t = o + t + o
                }
                t = e.editor.dataProcessor.toHtml(t, {
                    context: null,
                    fixForBody: !1,
                    dontFilter: e.dontFilter,
                    filter: e.editor.activeFilter,
                    enterMode: e.editor.activeEnterMode
                });
                var r = n.document, a = r.createElement("body");
                a.setHtml(t), o && (a.getFirst().remove(), a.getLast().remove());
                var s = n.startPath().block;
                return !s || 1 == s.getChildCount() && s.getBogus() || T(a), e.dataWrapper = a, t
            }

            function o(e) {
                var t, n, i, o, r, l, c, h, f, m, E, T = e.range, C = T.document, I = e.blockLimit, O = 0, D = [],
                    R = 0, b = 0, K = T.startContainer, y = e.endPath.elements[0], _ = y.getPosition(K),
                    k = !(!y.getCommonAncestor(K) || _ == CKEDITOR.POSITION_IDENTICAL || _ & CKEDITOR.POSITION_CONTAINS + CKEDITOR.POSITION_IS_CONTAINED);
                for (n = d(e.dataWrapper, e), g(n, T); O < n.length; O++)if (i = n[O], i.isLineBreak && p(T, I, i)) b = O > 0; else {
                    if (t = T.startPath(), !i.isBlock && s(e.editor, t.block, t.blockLimit) && (c = a(e.editor)) && (c = C.createElement(c), c.appendBogus(), T.insertNode(c), CKEDITOR.env.needsBrFiller && (r = c.getBogus()) && r.remove(), T.moveToPosition(c, CKEDITOR.POSITION_BEFORE_END)), o = T.startPath().block, o && !o.equals(l) && (r = o.getBogus(), r && (r.remove(), D.push(o)), l = o), i.firstNotAllowed && (R = 1), R && i.isElement) {
                        for (h = T.startContainer, f = null; h && !v[h.getName()][i.name];) {
                            if (h.equals(I)) {
                                h = null;
                                break
                            }
                            f = h, h = h.getParent()
                        }
                        h ? f && (m = T.splitElement(f), e.zombies.push(m), e.zombies.push(f)) : E = u(i.node, I.getName(), !O, O == n.length - 1)
                    }
                    if (E) {
                        for (; o = E.pop();)T.insertNode(o);
                        E = 0
                    } else T.insertNode(i.node);
                    i.lastNotAllowed && O < n.length - 1 && (m = k ? y : m, m && T.setEndAt(m, CKEDITOR.POSITION_AFTER_START), R = 0), T.collapse()
                }
                e.dontMoveCaret = b, e.bogusNeededBlocks = D
            }

            function r(e) {
                for (var t, n, o, r = e.range, a = e.bogusNeededBlocks, s = r.createBookmark(); t = e.zombies.pop();)t.getParent() && (n = r.clone(), n.moveToElementEditStart(t), n.removeEmptyBlocksAtEnd());
                if (a)for (; t = a.pop();)CKEDITOR.env.needsBrFiller ? t.appendBogus() : t.append(r.document.createText("\xa0"));
                for (; t = e.mergeCandidates.pop();)t.mergeSiblings();
                if (r.moveToBookmark(s), !e.dontMoveCaret) {
                    for (t = f(r); t && l(t) && !t.is(v.$empty);) {
                        if (t.isBlockBoundary()) r.moveToPosition(t, CKEDITOR.POSITION_BEFORE_END); else {
                            if (m(t) && t.getHtml().match(/(\s|&nbsp;)$/g)) {
                                o = null;
                                break
                            }
                            o = r.clone(), o.moveToPosition(t, CKEDITOR.POSITION_BEFORE_END)
                        }
                        t = t.getLast(i)
                    }
                    o && r.moveToRange(o)
                }
            }

            function a(e) {
                return e.activeEnterMode != CKEDITOR.ENTER_BR && e.config.autoParagraph !== !1 ? e.activeEnterMode == CKEDITOR.ENTER_DIV ? "div" : "p" : !1
            }

            function l(e) {
                return e.type == CKEDITOR.NODE_ELEMENT
            }

            function d(e, t) {
                for (var n, i, o, r, a, s = [], c = t.range.startContainer, u = t.range.startPath(), h = v[c.getName()], f = 0, m = e.getChildren(), E = m.count(), g = -1, p = -1, T = 0, C = u.contains(v.$list); E > f; ++f)if (n = m.getItem(f), l(n)) {
                    if (o = n.getName(), C && o in CKEDITOR.dtd.$list) {
                        s = s.concat(d(n, t));
                        continue
                    }
                    r = !!h[o], "br" != o || !n.data("cke-eol") || f && f != E - 1 || (i = f ? s[f - 1].node : m.getItem(f + 1), T = i && (!l(i) || !i.is("br")), a = i && l(i) && v.$block[i.getName()]), -1 != g || r || (g = f), r || (p = f), s.push({
                        isElement: 1,
                        isLineBreak: T,
                        isBlock: n.isBlockBoundary(),
                        hasBlockSibling: a,
                        node: n,
                        name: o,
                        allowed: r
                    }), T = 0, a = 0
                } else s.push({isElement: 0, node: n, allowed: 1});
                return g > -1 && (s[g].firstNotAllowed = 1), p > -1 && (s[p].lastNotAllowed = 1), s
            }

            function u(e, t, n, i) {
                for (var o, r = h(e, t), a = [], s = r.length, l = 0, c = 0, d = -1; s > l; l++)o = r[l], " " == o ? (c || n && !l || (a.push(new CKEDITOR.dom.text(" ")), d = a.length), c = 1) : (a.push(o), c = 0);
                return i && d == a.length && a.pop(), a
            }

            function h(e, t) {
                var n, i = [], o = e.getChildren(), r = o.count(), a = 0, s = v[t], c = !e.is(v.$inline) || e.is("br");
                for (c && i.push(" "); r > a; a++)n = o.getItem(a), l(n) && !n.is(s) ? i = i.concat(h(n, t)) : i.push(n);
                return c && i.push(" "), i
            }

            function f(e) {
                return l(e.startContainer) && e.startContainer.getChild(e.startOffset - 1)
            }

            function m(e) {
                return e && l(e) && (e.is(v.$removeEmpty) || e.is("a") && !e.isBlockBoundary())
            }

            function E(e, t, n, i) {
                var o, r, a, s = e.clone();
                s.setEndAt(t, CKEDITOR.POSITION_BEFORE_END), o = new CKEDITOR.dom.walker(s), (r = o.next()) && l(r) && I[r.getName()] && (a = r.getPrevious()) && l(a) && !a.getParent().equals(e.startContainer) && n.contains(a) && i.contains(r) && r.isIdentical(a) && (r.moveChildren(a), r.remove(), E(e, t, n, i))
            }

            function g(e, t) {
                function n(e, t) {
                    return t.isBlock && t.isElement && !t.node.is("br") && l(e) && e.is("br") ? (e.remove(), 1) : void 0
                }

                var i = t.endContainer.getChild(t.endOffset), o = t.endContainer.getChild(t.endOffset - 1);
                i && n(i, e[e.length - 1]), o && n(o, e[0]) && (t.setEnd(t.endContainer, t.endOffset - 1), t.collapse())
            }

            function p(e, t, n) {
                var i, o;
                if (n.hasBlockSibling)return 1;
                if (i = e.startContainer.getAscendant(v.$block, 1), !i || !i.is({div: 1, p: 1}))return 0;
                if (o = i.getPosition(t), o == CKEDITOR.POSITION_IDENTICAL || o == CKEDITOR.POSITION_CONTAINS)return 0;
                var r = e.splitElement(i);
                return e.moveToPosition(r, CKEDITOR.POSITION_AFTER_START), 1
            }

            function T(e) {
                var t, n;
                if (1 == e.getChildCount() && l(t = e.getFirst()) && t.is(O)) {
                    n = t.getElementsByTag("*");
                    for (var i, o = 0, r = n.count(); r > o; o++)if (i = n.getItem(o), !i.is(D))return;
                    t.moveChildren(t.getParent(1)), t.remove()
                }
            }

            function C(e, t) {
                for (var n = t.inlineStylesPeak, i = n.getDocument(), o = i.createText("{cke-peak}"), r = t.inlineStylesRoot.getParent(); !n.equals(r);)o = o.appendTo(n.clone()), n = n.getParent();
                return o.getOuterHtml().split("{cke-peak}").join(e)
            }

            var v = CKEDITOR.dtd, I = {
                p: 1,
                div: 1,
                h1: 1,
                h2: 1,
                h3: 1,
                h4: 1,
                h5: 1,
                h6: 1,
                ul: 1,
                ol: 1,
                li: 1,
                pre: 1,
                dl: 1,
                blockquote: 1
            }, O = {p: 1, div: 1, h1: 1, h2: 1, h3: 1, h4: 1, h5: 1, h6: 1}, D = CKEDITOR.tools.extend({}, v.$inline);
            return delete D.br, e
        }(), T = function () {
            function e(e) {
                var t = new CKEDITOR.dom.walker(e);
                return t.guard = function (e, t) {
                    return t ? !1 : e.type == CKEDITOR.NODE_ELEMENT ? e.is(CKEDITOR.dtd.$tableContent) : void 0
                }, t.evaluator = function (e) {
                    return e.type == CKEDITOR.NODE_ELEMENT
                }, t
            }

            function t(e, t, n) {
                var i = e.getDocument().createElement(t);
                return e.append(i, n), i
            }

            function n(e) {
                var t, n = e.count();
                for (n; n-- > 0;)t = e.getItem(n), CKEDITOR.tools.trim(t.getHtml()) || (t.appendBogus(), CKEDITOR.env.ie && CKEDITOR.env.version < 9 && t.getChildCount() && t.getFirst().remove())
            }

            return function (i) {
                var o, r, a = i.startContainer, s = a.getAscendant("table", 1), l = !1;
                if (n(s.getElementsByTag("td")), n(s.getElementsByTag("th")), o = i.clone(), o.setStart(a, 0), r = e(o).lastBackward(), r || (o = i.clone(), o.setEndAt(a, CKEDITOR.POSITION_BEFORE_END), r = e(o).lastForward(), l = !0), r || (r = a), r.is("table"))return i.setStartAt(r, CKEDITOR.POSITION_BEFORE_START), i.collapse(!0), void r.remove();
                r.is({
                    tbody: 1,
                    thead: 1,
                    tfoot: 1
                }) && (r = t(r, "tr", l)), r.is("tr") && (r = t(r, r.getParent().is("thead") ? "th" : "td", l));
                var c = r.getBogus();
                c && c.remove(), i.moveToPosition(r, l ? CKEDITOR.POSITION_AFTER_START : CKEDITOR.POSITION_BEFORE_END)
            }
        }()
    }(),function () {
        function e() {
            var e, t = this._.fakeSelection;
            if (t && (e = this.getSelection(1), e && e.isHidden() || (t.reset(), t = 0)), t || (t = e || this.getSelection(1), t && t.getType() != CKEDITOR.SELECTION_NONE)) {
                this.fire("selectionCheck", t);
                var n = this.elementPath();
                n.compare(this._.selectionPreviousPath) || (CKEDITOR.env.webkit && (this._.previousActive = this.document.getActive()), this._.selectionPreviousPath = n, this.fire("selectionChange", {
                    selection: t,
                    path: n
                }))
            }
        }

        function t() {
            C = !0, T || (n.call(this), T = CKEDITOR.tools.setTimeout(n, 200, this))
        }

        function n() {
            T = null, C && (CKEDITOR.tools.setTimeout(e, 0, this), C = !1)
        }

        function i(e) {
            return v(e) ? !0 : e.type != CKEDITOR.NODE_ELEMENT || e.is(CKEDITOR.dtd.$empty) ? !1 : !0
        }

        function o(e) {
            function t(t, n) {
                if (!t || t.type == CKEDITOR.NODE_TEXT)return !1;
                var i = e.clone();
                return i["moveToElementEdit" + (n ? "End" : "Start")](t)
            }

            if (!(e.root instanceof CKEDITOR.editable))return !1;
            var n = e.startContainer, o = e.getPreviousNode(i, null, n), r = e.getNextNode(i, null, n);
            return t(o) || t(r, 1) ? !0 : o || r || n.type == CKEDITOR.NODE_ELEMENT && n.isBlockBoundary() && n.getBogus() ? !1 : !0
        }

        function r(e) {
            l(e, !1);
            var t = e.getDocument().createText("\u200b");
            return e.setCustomData("cke-fillingChar", t), t
        }

        function a(e) {
            return e.getCustomData("cke-fillingChar")
        }

        function s(e) {
            var t = a(e);
            t && (t.getCustomData("ready") ? l(e) : t.setCustomData("ready", 1))
        }

        function l(e, t) {
            var n = e && e.removeCustomData("cke-fillingChar");
            if (n) {
                if (t !== !1) {
                    var i, o = e.getDocument().getSelection().getNative(), r = o && "None" != o.type && o.getRangeAt(0);
                    if (n.getLength() > 1 && r && r.intersectsNode(n.$)) {
                        i = d(o);
                        var a = o.anchorNode == n.$ && o.anchorOffset > 0, s = o.focusNode == n.$ && o.focusOffset > 0;
                        a && i[0].offset--, s && i[1].offset--
                    }
                }
                n.setText(c(n.getText())), i && u(e.getDocument().$, i)
            }
        }

        function c(e) {
            return e.replace(/\u200B( )?/g, function (e) {
                return e[1] ? "\xa0" : ""
            })
        }

        function d(e) {
            return [{node: e.anchorNode, offset: e.anchorOffset}, {node: e.focusNode, offset: e.focusOffset}]
        }

        function u(e, t) {
            var n = e.getSelection(), i = e.createRange();
            i.setStart(t[0].node, t[0].offset), i.collapse(!0), n.removeAllRanges(), n.addRange(i), n.extend(t[1].node, t[1].offset)
        }

        function h(e) {
            var t = CKEDITOR.env.ie ? "display:none" : "position:fixed;top:0;left:-1000px",
                n = CKEDITOR.dom.element.createFromHtml('<div data-cke-hidden-sel="1" data-cke-temp="1" style="' + t + '">&nbsp;</div>', e.document);
            e.fire("lockSnapshot"), e.editable().append(n);
            var i = e.getSelection(1), o = e.createRange(), r = i.root.on("selectionchange", function (e) {
                e.cancel()
            }, null, null, 0);
            o.setStartAt(n, CKEDITOR.POSITION_AFTER_START), o.setEndAt(n, CKEDITOR.POSITION_BEFORE_END), i.selectRanges([o]), r.removeListener(), e.fire("unlockSnapshot"), e._.hiddenSelectionContainer = n
        }

        function f(e) {
            var t = e._.hiddenSelectionContainer;
            if (t) {
                var n = e.checkDirty();
                e.fire("lockSnapshot"), t.remove(), e.fire("unlockSnapshot"), !n && e.resetDirty()
            }
            delete e._.hiddenSelectionContainer
        }

        function m(e) {
            var t = {37: 1, 39: 1, 8: 1, 46: 1};
            return function (n) {
                var i = n.data.getKeystroke();
                if (t[i]) {
                    var o = e.getSelection(), r = o.getRanges(), a = r[0];
                    if (1 == r.length && a.collapsed) {
                        var s = a[38 > i ? "getPreviousEditableNode" : "getNextEditableNode"]();
                        s && s.type == CKEDITOR.NODE_ELEMENT && "false" == s.getAttribute("contenteditable") && (e.getSelection().fake(s), n.data.preventDefault(), n.cancel())
                    }
                }
            }
        }

        function E(e) {
            var t, n, i, o;
            return 1 == e.length && !(o = e[0]).collapsed && (t = o.getEnclosedNode()) && t.type == CKEDITOR.NODE_ELEMENT && (i = o.clone(), i.shrink(CKEDITOR.SHRINK_ELEMENT, !0), (n = i.getEnclosedNode()) && n.type == CKEDITOR.NODE_ELEMENT && (t = n), "false" == t.getAttribute("contenteditable")) ? t : void 0
        }

        function g(e, t) {
            for (var n, i = 0; i < e.length; ++i)n = e[i], n.endContainer.equals(t) && (n.endOffset = Math.min(n.endOffset, t.getChildCount()))
        }

        function p(e) {
            for (var t = 0; t < e.length; t++) {
                var n = e[t], i = n.getCommonAncestor();
                if (i.isReadOnly() && e.splice(t, 1), !n.collapsed) {
                    if (n.startContainer.isReadOnly())for (var o, r = n.startContainer; r && (o = r.type == CKEDITOR.NODE_ELEMENT, !(o && r.is("body") || !r.isReadOnly()));)o && "false" == r.getAttribute("contentEditable") && n.setStartAfter(r), r = r.getParent();
                    var a = n.startContainer, s = n.endContainer, l = n.startOffset, c = n.endOffset, d = n.clone();
                    a && a.type == CKEDITOR.NODE_TEXT && (l >= a.getLength() ? d.setStartAfter(a) : d.setStartBefore(a)), s && s.type == CKEDITOR.NODE_TEXT && (c ? d.setEndAfter(s) : d.setEndBefore(s));
                    var u = new CKEDITOR.dom.walker(d);
                    u.evaluator = function (i) {
                        if (i.type == CKEDITOR.NODE_ELEMENT && i.isReadOnly()) {
                            var o = n.clone();
                            return n.setEndBefore(i), n.collapsed && e.splice(t--, 1), i.getPosition(d.endContainer) & CKEDITOR.POSITION_CONTAINS || (o.setStartAfter(i), o.collapsed || e.splice(t + 1, 0, o)), !0
                        }
                        return !1
                    }, u.next()
                }
            }
            return e
        }

        var T, C, v = CKEDITOR.dom.walker.invisible(1), I = function () {
            function e(e) {
                return function (t) {
                    var n = t.editor.createRange();
                    return n.moveToClosestEditablePosition(t.selected, e) && t.editor.getSelection().selectRanges([n]), !1
                }
            }

            function t(e) {
                return function (t) {
                    var n, i = t.editor, o = i.createRange();
                    return (n = o.moveToClosestEditablePosition(t.selected, e)) || (n = o.moveToClosestEditablePosition(t.selected, !e)), n && i.getSelection().selectRanges([o]), i.fire("saveSnapshot"), t.selected.remove(), n || (o.moveToElementEditablePosition(i.editable()), i.getSelection().selectRanges([o])), i.fire("saveSnapshot"), !1
                }
            }

            var n = e(), i = e(1);
            return {37: n, 38: n, 39: i, 40: i, 8: t(), 46: t(1)}
        }();
        CKEDITOR.on("instanceCreated", function (n) {
            function i() {
                var e = o.getSelection();
                e && e.removeAllRanges()
            }

            var o = n.editor;
            o.on("contentDom", function () {
                function n() {
                    c = new CKEDITOR.dom.selection(o.getSelection()), c.lock()
                }

                function i(e, t, n) {
                    try {
                        e.moveToPoint(t, n)
                    } catch (i) {
                    }
                }

                function r() {
                    u.removeListener("mouseup", a), E.removeListener("mouseup", a)
                }

                function a() {
                    r();
                    var e = CKEDITOR.document.$.selection, t = e.createRange();
                    "None" != e.type && t.parentElement().ownerDocument == d.$ && t.select()
                }

                var s, c, d = o.document, u = CKEDITOR.document, h = o.editable(), f = d.getBody(),
                    E = d.getDocumentElement(), g = h.isInline();
                if (CKEDITOR.env.gecko && h.attachListener(h, "focus", function (e) {
                        if (e.removeListener(), 0 !== s) {
                            var t = o.getSelection().getNative();
                            if (t && t.isCollapsed && t.anchorNode == h.$) {
                                var n = o.createRange();
                                n.moveToElementEditStart(h), n.select()
                            }
                        }
                    }, null, null, -2), h.attachListener(h, CKEDITOR.env.webkit ? "DOMFocusIn" : "focus", function () {
                        s && CKEDITOR.env.webkit && (s = o._.previousActive && o._.previousActive.equals(d.getActive())), o.unlockSelection(s), s = 0
                    }, null, null, -1), h.attachListener(h, "mousedown", function () {
                        s = 0
                    }), (CKEDITOR.env.ie || g) && (O ? h.attachListener(h, "beforedeactivate", n, null, null, -1) : h.attachListener(o, "selectionCheck", n, null, null, -1), h.attachListener(h, CKEDITOR.env.webkit ? "DOMFocusOut" : "blur", function () {
                        o.lockSelection(c), s = 1
                    }, null, null, -1), h.attachListener(h, "mousedown", function () {
                        s = 0
                    })), CKEDITOR.env.ie && !g) {
                    var p;
                    h.attachListener(h, "mousedown", function (e) {
                        if (2 == e.data.$.button) {
                            var t = o.document.getSelection();
                            t && t.getType() != CKEDITOR.SELECTION_NONE || (p = o.window.getScrollPosition())
                        }
                    }), h.attachListener(h, "mouseup", function (e) {
                        2 == e.data.$.button && p && (o.document.$.documentElement.scrollLeft = p.x, o.document.$.documentElement.scrollTop = p.y), p = null
                    }), "BackCompat" != d.$.compatMode && ((CKEDITOR.env.ie7Compat || CKEDITOR.env.ie6Compat) && E.on("mousedown", function (e) {
                        function t(e) {
                            if (e = e.data.$, r) {
                                var t = f.$.createTextRange();
                                i(t, e.clientX, e.clientY), r.setEndPoint(a.compareEndPoints("StartToStart", t) < 0 ? "EndToEnd" : "StartToStart", t), r.select()
                            }
                        }

                        function n() {
                            u.removeListener("mouseup", o), E.removeListener("mouseup", o)
                        }

                        function o() {
                            E.removeListener("mousemove", t), n(), r.select()
                        }

                        if (e = e.data, e.getTarget().is("html") && e.$.y < E.$.clientHeight && e.$.x < E.$.clientWidth) {
                            var r = f.$.createTextRange();
                            i(r, e.$.clientX, e.$.clientY);
                            var a = r.duplicate();
                            E.on("mousemove", t), u.on("mouseup", o), E.on("mouseup", o)
                        }
                    }), CKEDITOR.env.version > 7 && CKEDITOR.env.version < 11 && E.on("mousedown", function (e) {
                        e.data.getTarget().is("html") && (u.on("mouseup", a), E.on("mouseup", a))
                    }))
                }
                if (h.attachListener(h, "selectionchange", e, o), h.attachListener(h, "keyup", t, o), h.attachListener(h, CKEDITOR.env.webkit ? "DOMFocusIn" : "focus", function () {
                        o.forceNextSelectionCheck(), o.selectionChange(1)
                    }), g && (CKEDITOR.env.webkit || CKEDITOR.env.gecko)) {
                    var T;
                    h.attachListener(h, "mousedown", function () {
                        T = 1
                    }), h.attachListener(d.getDocumentElement(), "mouseup", function () {
                        T && t.call(o), T = 0
                    })
                } else h.attachListener(CKEDITOR.env.ie ? h : d.getDocumentElement(), "mouseup", t, o);
                CKEDITOR.env.webkit && h.attachListener(d, "keydown", function (e) {
                    var t = e.data.getKey();
                    switch (t) {
                        case 13:
                        case 33:
                        case 34:
                        case 35:
                        case 36:
                        case 37:
                        case 39:
                        case 8:
                        case 45:
                        case 46:
                            l(h)
                    }
                }, null, null, -1), h.attachListener(h, "keydown", m(o), null, null, -1)
            }), o.on("setData", function () {
                o.unlockSelection(), CKEDITOR.env.webkit && i()
            }), o.on("contentDomUnload", function () {
                o.unlockSelection()
            }), CKEDITOR.env.ie9Compat && o.on("beforeDestroy", i, null, null, 9), o.on("dataReady", function () {
                delete o._.fakeSelection, delete o._.hiddenSelectionContainer, o.selectionChange(1)
            }), o.on("loadSnapshot", function () {
                var e = CKEDITOR.dom.walker.nodeType(CKEDITOR.NODE_ELEMENT), t = o.editable().getLast(e);
                if (t && t.hasAttribute("data-cke-hidden-sel") && (t.remove(), CKEDITOR.env.gecko)) {
                    var n = o.editable().getFirst(e);
                    n && n.is("br") && n.getAttribute("_moz_editor_bogus_node") && n.remove()
                }
            }, null, null, 100), o.on("key", function (e) {
                if ("wysiwyg" == o.mode) {
                    var t = o.getSelection();
                    if (t.isFake) {
                        var n = I[e.data.keyCode];
                        return n ? n({editor: o, selected: t.getSelectedElement(), selection: t, keyEvent: e}) : void 0
                    }
                }
            })
        }), CKEDITOR.on("instanceReady", function (e) {
            function t() {
                var e = r.editable();
                if (e) {
                    var t = a(e);
                    if (t) {
                        var n = r.document.$.getSelection();
                        "None" == n.type || n.anchorNode != t.$ && n.focusNode != t.$ || (o = d(n)), i = t.getText(), t.setText(c(i))
                    }
                }
            }

            function n() {
                var e = r.editable();
                if (e) {
                    var t = a(e);
                    t && (t.setText(i), o && (u(r.document.$, o), o = null))
                }
            }

            var i, o, r = e.editor;
            CKEDITOR.env.webkit && (r.on("selectionChange", function () {
                s(r.editable())
            }, null, null, -1), r.on("beforeSetMode", function () {
                l(r.editable())
            }, null, null, -1), r.on("beforeUndoImage", t), r.on("afterUndoImage", n), r.on("beforeGetData", t, null, null, 0), r.on("getData", n))
        }), CKEDITOR.editor.prototype.selectionChange = function (n) {
            (n ? e : t).call(this)
        }, CKEDITOR.editor.prototype.getSelection = function (e) {
            if ((this._.savedSelection || this._.fakeSelection) && !e)return this._.savedSelection || this._.fakeSelection;
            var t = this.editable();
            return t && "wysiwyg" == this.mode ? new CKEDITOR.dom.selection(t) : null
        }, CKEDITOR.editor.prototype.lockSelection = function (e) {
            return e = e || this.getSelection(1), e.getType() != CKEDITOR.SELECTION_NONE ? (!e.isLocked && e.lock(), this._.savedSelection = e, !0) : !1
        }, CKEDITOR.editor.prototype.unlockSelection = function (e) {
            var t = this._.savedSelection;
            return t ? (t.unlock(e), delete this._.savedSelection, !0) : !1
        }, CKEDITOR.editor.prototype.forceNextSelectionCheck = function () {
            delete this._.selectionPreviousPath
        }, CKEDITOR.dom.document.prototype.getSelection = function () {
            return new CKEDITOR.dom.selection(this)
        }, CKEDITOR.dom.range.prototype.select = function () {
            var e = this.root instanceof CKEDITOR.editable ? this.root.editor.getSelection() : new CKEDITOR.dom.selection(this.root);
            return e.selectRanges([this]), e
        }, CKEDITOR.SELECTION_NONE = 1, CKEDITOR.SELECTION_TEXT = 2, CKEDITOR.SELECTION_ELEMENT = 3;
        var O = "function" != typeof window.getSelection, D = 1;
        CKEDITOR.dom.selection = function (e) {
            if (e instanceof CKEDITOR.dom.selection) {
                var t = e;
                e = e.root
            }
            var n, i = e instanceof CKEDITOR.dom.element;
            if (this.rev = t ? t.rev : D++, this.document = e instanceof CKEDITOR.dom.document ? e : e.getDocument(), this.root = n = i ? e : this.document.getBody(), this.isLocked = 0, this._ = {cache: {}}, t)return CKEDITOR.tools.extend(this._.cache, t._.cache), this.isFake = t.isFake, this.isLocked = t.isLocked, this;
            var o, r, a = this.getNative();
            if (a)if (a.getRangeAt) r = a.rangeCount && a.getRangeAt(0), o = r && new CKEDITOR.dom.node(r.commonAncestorContainer); else {
                try {
                    r = a.createRange()
                } catch (s) {
                }
                o = r && CKEDITOR.dom.element.get(r.item && r.item(0) || r.parentElement())
            }
            return (!o || o.type != CKEDITOR.NODE_ELEMENT && o.type != CKEDITOR.NODE_TEXT || !this.root.equals(o) && !this.root.contains(o)) && (this._.cache.type = CKEDITOR.SELECTION_NONE, this._.cache.startElement = null, this._.cache.selectedElement = null, this._.cache.selectedText = "", this._.cache.ranges = new CKEDITOR.dom.rangeList), this
        };
        var R = {
            img: 1,
            hr: 1,
            li: 1,
            table: 1,
            tr: 1,
            td: 1,
            th: 1,
            embed: 1,
            object: 1,
            ol: 1,
            ul: 1,
            a: 1,
            input: 1,
            form: 1,
            select: 1,
            textarea: 1,
            button: 1,
            fieldset: 1,
            thead: 1,
            tfoot: 1
        };
        CKEDITOR.dom.selection.prototype = {
            getNative: function () {
                return void 0 !== this._.cache.nativeSel ? this._.cache.nativeSel : this._.cache.nativeSel = O ? this.document.$.selection : this.document.getWindow().$.getSelection()
            }, getType: O ? function () {
                var e = this._.cache;
                if (e.type)return e.type;
                var t = CKEDITOR.SELECTION_NONE;
                try {
                    var n = this.getNative(), i = n.type;
                    "Text" == i && (t = CKEDITOR.SELECTION_TEXT), "Control" == i && (t = CKEDITOR.SELECTION_ELEMENT), n.createRange().parentElement() && (t = CKEDITOR.SELECTION_TEXT)
                } catch (o) {
                }
                return e.type = t
            } : function () {
                var e = this._.cache;
                if (e.type)return e.type;
                var t = CKEDITOR.SELECTION_TEXT, n = this.getNative();
                if (n && n.rangeCount) {
                    if (1 == n.rangeCount) {
                        var i = n.getRangeAt(0), o = i.startContainer;
                        o == i.endContainer && 1 == o.nodeType && i.endOffset - i.startOffset == 1 && R[o.childNodes[i.startOffset].nodeName.toLowerCase()] && (t = CKEDITOR.SELECTION_ELEMENT)
                    }
                } else t = CKEDITOR.SELECTION_NONE;
                return e.type = t
            }, getRanges: function () {
                var e = O ? function () {
                    function e(e) {
                        return new CKEDITOR.dom.node(e).getIndex()
                    }

                    var t = function (t, n) {
                        t = t.duplicate(), t.collapse(n);
                        var i = t.parentElement();
                        if (!i.hasChildNodes())return {container: i, offset: 0};
                        for (var o, r, a, s, l, c = i.children, d = t.duplicate(), u = 0, h = c.length - 1, f = -1; h >= u;)if (f = Math.floor((u + h) / 2), o = c[f], d.moveToElementText(o), a = d.compareEndPoints("StartToStart", t), a > 0) h = f - 1; else {
                            if (!(0 > a))return {container: i, offset: e(o)};
                            u = f + 1
                        }
                        if (-1 == f || f == c.length - 1 && 0 > a) {
                            if (d.moveToElementText(i), d.setEndPoint("StartToStart", t), s = d.text.replace(/(\r\n|\r)/g, "\n").length, c = i.childNodes, !s)return o = c[c.length - 1], o.nodeType != CKEDITOR.NODE_TEXT ? {
                                container: i,
                                offset: c.length
                            } : {container: o, offset: o.nodeValue.length};
                            for (var m = c.length; s > 0 && m > 0;)r = c[--m], r.nodeType == CKEDITOR.NODE_TEXT && (l = r, s -= r.nodeValue.length);
                            return {container: l, offset: -s}
                        }
                        if (d.collapse(a > 0 ? !0 : !1), d.setEndPoint(a > 0 ? "StartToStart" : "EndToStart", t), s = d.text.replace(/(\r\n|\r)/g, "\n").length, !s)return {
                            container: i,
                            offset: e(o) + (a > 0 ? 0 : 1)
                        };
                        for (; s > 0;)try {
                            r = o[a > 0 ? "previousSibling" : "nextSibling"], r.nodeType == CKEDITOR.NODE_TEXT && (s -= r.nodeValue.length, l = r), o = r
                        } catch (E) {
                            return {container: i, offset: e(o)}
                        }
                        return {container: l, offset: a > 0 ? -s : l.nodeValue.length + s}
                    };
                    return function () {
                        var e, n = this.getNative(), i = n && n.createRange(), o = this.getType();
                        if (!n)return [];
                        if (o == CKEDITOR.SELECTION_TEXT) {
                            e = new CKEDITOR.dom.range(this.root);
                            var r = t(i, !0);
                            return e.setStart(new CKEDITOR.dom.node(r.container), r.offset), r = t(i), e.setEnd(new CKEDITOR.dom.node(r.container), r.offset), e.endContainer.getPosition(e.startContainer) & CKEDITOR.POSITION_PRECEDING && e.endOffset <= e.startContainer.getIndex() && e.collapse(), [e]
                        }
                        if (o == CKEDITOR.SELECTION_ELEMENT) {
                            for (var a = [], s = 0; s < i.length; s++) {
                                var l = i.item(s), c = l.parentNode, d = 0;
                                for (e = new CKEDITOR.dom.range(this.root); d < c.childNodes.length && c.childNodes[d] != l; d++);
                                e.setStart(new CKEDITOR.dom.node(c), d), e.setEnd(new CKEDITOR.dom.node(c), d + 1), a.push(e)
                            }
                            return a
                        }
                        return []
                    }
                }() : function () {
                    var e, t = [], n = this.getNative();
                    if (!n)return t;
                    for (var i = 0; i < n.rangeCount; i++) {
                        var o = n.getRangeAt(i);
                        e = new CKEDITOR.dom.range(this.root), e.setStart(new CKEDITOR.dom.node(o.startContainer), o.startOffset), e.setEnd(new CKEDITOR.dom.node(o.endContainer), o.endOffset), t.push(e)
                    }
                    return t
                };
                return function (t) {
                    var n = this._.cache, i = n.ranges;
                    return i || (n.ranges = i = new CKEDITOR.dom.rangeList(e.call(this))), t ? p(new CKEDITOR.dom.rangeList(i.slice())) : i
                }
            }(), getStartElement: function () {
                var e = this._.cache;
                if (void 0 !== e.startElement)return e.startElement;
                var t;
                switch (this.getType()) {
                    case CKEDITOR.SELECTION_ELEMENT:
                        return this.getSelectedElement();
                    case CKEDITOR.SELECTION_TEXT:
                        var n = this.getRanges()[0];
                        if (n) {
                            if (n.collapsed) t = n.startContainer, t.type != CKEDITOR.NODE_ELEMENT && (t = t.getParent()); else {
                                for (n.optimize(); ;) {
                                    var i = n.startContainer, o = n.startOffset;
                                    if (o != (i.getChildCount ? i.getChildCount() : i.getLength()) || i.isBlockBoundary())break;
                                    n.setStartAfter(i)
                                }
                                if (t = n.startContainer, t.type != CKEDITOR.NODE_ELEMENT)return t.getParent();
                                if (t = t.getChild(n.startOffset), t && t.type == CKEDITOR.NODE_ELEMENT)for (var r = t.getFirst(); r && r.type == CKEDITOR.NODE_ELEMENT;)t = r, r = r.getFirst();
                                else t = n.startContainer
                            }
                            t = t.$
                        }
                }
                return e.startElement = t ? new CKEDITOR.dom.element(t) : null
            }, getSelectedElement: function () {
                var e = this._.cache;
                if (void 0 !== e.selectedElement)return e.selectedElement;
                var t = this, n = CKEDITOR.tools.tryThese(function () {
                    return t.getNative().createRange().item(0)
                }, function () {
                    for (var e, n, i = t.getRanges()[0].clone(), o = 2; o && !((e = i.getEnclosedNode()) && e.type == CKEDITOR.NODE_ELEMENT && R[e.getName()] && (n = e)); o--)i.shrink(CKEDITOR.SHRINK_ELEMENT);
                    return n && n.$
                });
                return e.selectedElement = n ? new CKEDITOR.dom.element(n) : null
            }, getSelectedText: function () {
                var e = this._.cache;
                if (void 0 !== e.selectedText)return e.selectedText;
                var t = this.getNative(), n = O ? "Control" == t.type ? "" : t.createRange().text : t.toString();
                return e.selectedText = n
            }, lock: function () {
                this.getRanges(), this.getStartElement(), this.getSelectedElement(), this.getSelectedText(), this._.cache.nativeSel = null, this.isLocked = 1
            }, unlock: function (e) {
                if (this.isLocked) {
                    if (e)var t = this.getSelectedElement(), n = !t && this.getRanges(), i = this.isFake;
                    if (this.isLocked = 0, this.reset(), e) {
                        var o = t || n[0] && n[0].getCommonAncestor();
                        if (!o || !o.getAscendant("body", 1))return;
                        i ? this.fake(t) : t ? this.selectElement(t) : this.selectRanges(n)
                    }
                }
            }, reset: function () {
                this._.cache = {}, this.isFake = 0;
                var e = this.root.editor;
                e && e._.fakeSelection && this.rev == e._.fakeSelection.rev && (delete e._.fakeSelection, f(e)), this.rev = D++
            }, selectElement: function (e) {
                var t = new CKEDITOR.dom.range(this.root);
                t.setStartBefore(e), t.setEndAfter(e), this.selectRanges([t])
            }, selectRanges: function (e) {
                var t = this.root.editor, n = t && t._.hiddenSelectionContainer;
                if (this.reset(), n && g(e, this.root), e.length) {
                    if (this.isLocked) {
                        var i = CKEDITOR.document.getActive();
                        return this.unlock(), this.selectRanges(e), this.lock(), void(i && !i.equals(this.root) && i.focus())
                    }
                    var a = E(e);
                    if (a)return void this.fake(a);
                    if (O) {
                        var s = CKEDITOR.dom.walker.whitespaces(!0), c = /\ufeff|\u00a0/,
                            d = {table: 1, tbody: 1, tr: 1};
                        if (e.length > 1) {
                            var u = e[e.length - 1];
                            e[0].setEnd(u.endContainer, u.endOffset)
                        }
                        var h, f, m, p = e[0], T = p.collapsed, C = p.getEnclosedNode();
                        if (C && C.type == CKEDITOR.NODE_ELEMENT && C.getName() in R && (!C.is("a") || !C.getText()))try {
                            return m = C.$.createControlRange(), m.addElement(C.$), void m.select()
                        } catch (v) {
                        }
                        (p.startContainer.type == CKEDITOR.NODE_ELEMENT && p.startContainer.getName() in d || p.endContainer.type == CKEDITOR.NODE_ELEMENT && p.endContainer.getName() in d) && (p.shrink(CKEDITOR.NODE_ELEMENT, !0), T = p.collapsed);
                        var I, D = p.createBookmark(), b = D.startNode;
                        if (T || (I = D.endNode), m = p.document.$.body.createTextRange(), m.moveToElementText(b.$), m.moveStart("character", 1), I) {
                            var K = p.document.$.body.createTextRange();
                            K.moveToElementText(I.$), m.setEndPoint("EndToEnd", K), m.moveEnd("character", -1)
                        } else {
                            var y = b.getNext(s), _ = b.hasAscendant("pre");
                            h = !(y && y.getText && y.getText().match(c)) && (_ || !b.hasPrevious() || b.getPrevious().is && b.getPrevious().is("br")), f = p.document.createElement("span"), f.setHtml("&#65279;"), f.insertBefore(b), h && p.document.createText("\ufeff").insertBefore(b)
                        }
                        p.setStartBefore(b), b.remove(), T ? (h ? (m.moveStart("character", -1), m.select(), p.document.$.selection.clear()) : m.select(), p.moveToPosition(f, CKEDITOR.POSITION_BEFORE_START), f.remove()) : (p.setEndBefore(I), I.remove(), m.select())
                    } else {
                        var k = this.getNative();
                        if (!k)return;
                        this.removeAllRanges();
                        for (var N = 0; N < e.length; N++) {
                            if (N < e.length - 1) {
                                var w = e[N], S = e[N + 1], x = w.clone();
                                if (x.setStart(w.endContainer, w.endOffset), x.setEnd(S.startContainer, S.startOffset), !x.collapsed) {
                                    x.shrink(CKEDITOR.NODE_ELEMENT, !0);
                                    var A = x.getCommonAncestor(), L = x.getEnclosedNode();
                                    if (A.isReadOnly() || L && L.isReadOnly()) {
                                        S.setStart(w.startContainer, w.startOffset), e.splice(N--, 1);
                                        continue
                                    }
                                }
                            }
                            p = e[N];
                            var P = this.document.$.createRange();
                            if (p.collapsed && CKEDITOR.env.webkit && o(p)) {
                                var B = r(this.root);
                                p.insertNode(B), y = B.getNext(), y && !B.getPrevious() && y.type == CKEDITOR.NODE_ELEMENT && "br" == y.getName() ? (l(this.root), p.moveToPosition(y, CKEDITOR.POSITION_BEFORE_START)) : p.moveToPosition(B, CKEDITOR.POSITION_AFTER_END)
                            }
                            P.setStart(p.startContainer.$, p.startOffset);
                            try {
                                P.setEnd(p.endContainer.$, p.endOffset)
                            } catch (F) {
                                if (!(F.toString().indexOf("NS_ERROR_ILLEGAL_VALUE") >= 0))throw F;
                                p.collapse(1), P.setEnd(p.endContainer.$, p.endOffset)
                            }
                            k.addRange(P)
                        }
                    }
                    this.reset(), this.root.fire("selectionchange")
                }
            }, fake: function (e) {
                var t = this.root.editor;
                this.reset(), h(t);
                var n = this._.cache, i = new CKEDITOR.dom.range(this.root);
                i.setStartBefore(e), i.setEndAfter(e), n.ranges = new CKEDITOR.dom.rangeList(i), n.selectedElement = n.startElement = e, n.type = CKEDITOR.SELECTION_ELEMENT, n.selectedText = n.nativeSel = null, this.isFake = 1, this.rev = D++, t._.fakeSelection = this, this.root.fire("selectionchange")
            }, isHidden: function () {
                var e = this.getCommonAncestor();
                return e && e.type == CKEDITOR.NODE_TEXT && (e = e.getParent()), !(!e || !e.data("cke-hidden-sel"))
            }, createBookmarks: function (e) {
                var t = this.getRanges().createBookmarks(e);
                return this.isFake && (t.isFake = 1), t
            }, createBookmarks2: function (e) {
                var t = this.getRanges().createBookmarks2(e);
                return this.isFake && (t.isFake = 1), t
            }, selectBookmarks: function (e) {
                for (var t = [], n = 0; n < e.length; n++) {
                    var i = new CKEDITOR.dom.range(this.root);
                    i.moveToBookmark(e[n]), t.push(i)
                }
                return e.isFake ? this.fake(t[0].getEnclosedNode()) : this.selectRanges(t), this
            }, getCommonAncestor: function () {
                var e = this.getRanges();
                if (!e.length)return null;
                var t = e[0].startContainer, n = e[e.length - 1].endContainer;
                return t.getCommonAncestor(n)
            }, scrollIntoView: function () {
                this.type != CKEDITOR.SELECTION_NONE && this.getRanges()[0].scrollIntoView()
            }, removeAllRanges: function () {
                if (this.getType() != CKEDITOR.SELECTION_NONE) {
                    var e = this.getNative();
                    try {
                        e && e[O ? "empty" : "removeAllRanges"]()
                    } catch (t) {
                    }
                    this.reset()
                }
            }
        }
    }(),CKEDITOR.STYLE_BLOCK = 1,CKEDITOR.STYLE_INLINE = 2,CKEDITOR.STYLE_OBJECT = 3,function () {
        function e(e, t) {
            for (var n, i; (e = e.getParent()) && !e.equals(t);)if (e.getAttribute("data-nostyle")) n = e; else if (!i) {
                var o = e.getAttribute("contentEditable");
                "false" == o ? n = e : "true" == o && (i = 1)
            }
            return n
        }

        function t(e, t, n, i, o, a, s, l) {
            return i ? !o[i] || a ? 0 : s && !l ? 0 : r(t, n, e, M) : 1
        }

        function n(e, t, n, i) {
            return t && ((t.getDtd() || CKEDITOR.dtd.span)[n] || i) && (!e.parentRule || e.parentRule(t))
        }

        function i(e, t, n) {
            return !e || !CKEDITOR.dtd.$removeEmpty[e] || (t.getPosition(n) | M) == M
        }

        function o(e, t) {
            var n = e.type;
            return n == CKEDITOR.NODE_TEXT || t || n == CKEDITOR.NODE_ELEMENT && !e.getChildCount()
        }

        function r(e, t, n, i) {
            return (e.getPosition(t) | i) == i && (!n.childRule || n.childRule(e))
        }

        function a(a) {
            var s = a.document;
            if (a.collapsed) {
                var c = K(this, s);
                return a.insertNode(c), void a.moveToPosition(c, CKEDITOR.POSITION_BEFORE_END)
            }
            var d, u = this.element, h = this._.definition, f = h.ignoreReadonly, m = f || h.includeReadonly;
            null == m && (m = a.root.getCustomData("cke_includeReadonly"));
            var E = CKEDITOR.dtd[u];
            E || (d = !0, E = CKEDITOR.dtd.span), a.enlarge(CKEDITOR.ENLARGE_INLINE, 1), a.trim();
            var g, p = a.createBookmark(), T = p.startNode, C = p.endNode, v = T;
            if (!f) {
                var I = a.getCommonAncestor(), O = e(T, I), R = e(C, I);
                O && (v = O.getNextSourceNode(!0)), R && (C = R)
            }
            for (v.getPosition(C) == CKEDITOR.POSITION_FOLLOWING && (v = 0); v;) {
                var b = !1;
                if (v.equals(C)) v = null, b = !0; else {
                    var y = v.type == CKEDITOR.NODE_ELEMENT ? v.getName() : null,
                        _ = y && "false" == v.getAttribute("contentEditable"), k = y && v.getAttribute("data-nostyle");
                    if (y && v.data("cke-bookmark")) {
                        v = v.getNextSourceNode(!0);
                        continue
                    }
                    if (_ && m && CKEDITOR.dtd.$block[y] && l.call(this, v), t(h, v, C, y, E, k, _, m)) {
                        var N = v.getParent();
                        if (n(h, N, u, d)) {
                            if (!g && i(y, v, C) && (g = a.clone(), g.setStartBefore(v)), o(v, _)) {
                                for (var w, S = v; (b = !S.getNext(F)) && (w = S.getParent(), E[w.getName()]) && r(w, T, h, H);)S = w;
                                g.setEndAfter(S)
                            }
                        } else b = !0
                    } else b = !0;
                    v = v.getNextSourceNode(k || _)
                }
                if (b && g && !g.collapsed) {
                    for (var x, A, L, P = K(this, s), B = P.hasAttributes(), $ = g.getCommonAncestor(), M = {
                        styles: {},
                        attrs: {},
                        blockedStyles: {},
                        blockedAttrs: {}
                    }; P && $;) {
                        if ($.getName() == u) {
                            for (x in h.attributes)!M.blockedAttrs[x] && (L = $.getAttribute(A)) && (P.getAttribute(x) == L ? M.attrs[x] = 1 : M.blockedAttrs[x] = 1);
                            for (A in h.styles)!M.blockedStyles[A] && (L = $.getStyle(A)) && (P.getStyle(A) == L ? M.styles[A] = 1 : M.blockedStyles[A] = 1)
                        }
                        $ = $.getParent()
                    }
                    for (x in M.attrs)P.removeAttribute(x);
                    for (A in M.styles)P.removeStyle(A);
                    B && !P.hasAttributes() && (P = null), P ? (g.extractContents().appendTo(P), g.insertNode(P), D.call(this, P), P.mergeSiblings(), CKEDITOR.env.ie || P.$.normalize()) : (P = new CKEDITOR.dom.element("span"), g.extractContents().appendTo(P), g.insertNode(P), D.call(this, P), P.remove(!0)), g = null
                }
            }
            a.moveToBookmark(p), a.shrink(CKEDITOR.SHRINK_TEXT), a.shrink(CKEDITOR.NODE_ELEMENT, !0)
        }

        function s(e) {
            function t() {
                for (var e = new CKEDITOR.dom.elementPath(i.getParent()), t = new CKEDITOR.dom.elementPath(u.getParent()), n = null, o = null, r = 0; r < e.elements.length; r++) {
                    var a = e.elements[r];
                    if (a == e.block || a == e.blockLimit)break;
                    h.checkElementRemovable(a, !0) && (n = a)
                }
                for (r = 0; r < t.elements.length && (a = t.elements[r], a != t.block && a != t.blockLimit); r++)h.checkElementRemovable(a, !0) && (o = a);
                o && u.breakParent(o), n && i.breakParent(n)
            }

            e.enlarge(CKEDITOR.ENLARGE_INLINE, 1);
            var n = e.createBookmark(), i = n.startNode;
            if (e.collapsed) {
                for (var o, r, a = new CKEDITOR.dom.elementPath(i.getParent(), e.root), s = 0; s < a.elements.length && (r = a.elements[s]) && (r != a.block && r != a.blockLimit); s++)if (this.checkElementRemovable(r)) {
                    var l;
                    e.collapsed && (e.checkBoundaryOfElement(r, CKEDITOR.END) || (l = e.checkBoundaryOfElement(r, CKEDITOR.START))) ? (o = r, o.match = l ? "start" : "end") : (r.mergeSiblings(), r.is(this.element) ? O.call(this, r) : R(r, N(this)[r.getName()]))
                }
                if (o) {
                    var c = i;
                    for (s = 0; ; s++) {
                        var d = a.elements[s];
                        if (d.equals(o))break;
                        d.match || (d = d.clone(), d.append(c), c = d)
                    }
                    c["start" == o.match ? "insertBefore" : "insertAfter"](o)
                }
            } else {
                var u = n.endNode, h = this;
                t();
                for (var f = i; !f.equals(u);) {
                    var m = f.getNextSourceNode();
                    f.type == CKEDITOR.NODE_ELEMENT && this.checkElementRemovable(f) && (f.getName() == this.element ? O.call(this, f) : R(f, N(this)[f.getName()]), m.type == CKEDITOR.NODE_ELEMENT && m.contains(i) && (t(), m = i.getNext())), f = m
                }
            }
            e.moveToBookmark(n), e.shrink(CKEDITOR.NODE_ELEMENT, !0)
        }

        function l(e) {
            for (var t, n = c(e), i = n.length, o = 0, r = i && new CKEDITOR.dom.range(e.getDocument()); i > o; ++o)t = n[o], d(t, this) && (r.selectNodeContents(t), a.call(this, r))
        }

        function c(e) {
            var t = [];
            return e.forEach(function (e) {
                return "true" == e.getAttribute("contenteditable") ? (t.push(e), !1) : void 0
            }, CKEDITOR.NODE_ELEMENT, !0), t
        }

        function d(e, t) {
            var n = CKEDITOR.filter.instances[e.data("cke-filter")];
            return n ? n.check(t) : 1
        }

        function u(e, t) {
            return e.activeFilter ? e.activeFilter.check(t) : 1
        }

        function h(e) {
            var t = e.getEnclosedNode() || e.getCommonAncestor(!1, !0),
                n = new CKEDITOR.dom.elementPath(t, e.root).contains(this.element, 1);
            n && !n.isReadOnly() && y(n, this)
        }

        function f(e) {
            var t = e.getCommonAncestor(!0, !0), n = new CKEDITOR.dom.elementPath(t, e.root).contains(this.element, 1);
            if (n) {
                var i = this, o = i._.definition, r = o.attributes;
                if (r)for (var a in r)n.removeAttribute(a, r[a]);
                if (o.styles)for (var s in o.styles)o.styles.hasOwnProperty(s) && n.removeStyle(s)
            }
        }

        function m(e) {
            var t = e.createBookmark(!0), n = e.createIterator();
            n.enforceRealBlocks = !0, this._.enterMode && (n.enlargeBr = this._.enterMode != CKEDITOR.ENTER_BR);
            for (var i, o, r = e.document; i = n.getNextParagraph();)!i.isReadOnly() && u(n, this) && (o = K(this, r, i), g(i, o));
            e.moveToBookmark(t)
        }

        function E(e) {
            var t = e.createBookmark(1), n = e.createIterator();
            n.enforceRealBlocks = !0, n.enlargeBr = this._.enterMode != CKEDITOR.ENTER_BR;
            for (var i, o; i = n.getNextParagraph();)this.checkElementRemovable(i) && (i.is("pre") ? (o = this._.enterMode == CKEDITOR.ENTER_BR ? null : e.document.createElement(this._.enterMode == CKEDITOR.ENTER_P ? "p" : "div"), o && i.copyAttributes(o), g(i, o)) : O.call(this, i));
            e.moveToBookmark(t)
        }

        function g(e, t) {
            var n = !t;
            n && (t = e.getDocument().createElement("div"), e.copyAttributes(t));
            var i = t && t.is("pre"), o = e.is("pre"), r = i && !o, a = !i && o;
            r ? t = I(e, t) : a ? t = v(n ? [e.getHtml()] : T(e), t) : e.moveChildren(t), t.replace(e), i ? p(t) : n && b(t)
        }

        function p(e) {
            var t;
            if ((t = e.getPrevious($)) && t.type == CKEDITOR.NODE_ELEMENT && t.is("pre")) {
                var n = C(t.getHtml(), /\n$/, "") + "\n\n" + C(e.getHtml(), /^\n/, "");
                CKEDITOR.env.ie ? e.$.outerHTML = "<pre>" + n + "</pre>" : e.setHtml(n), t.remove()
            }
        }

        function T(e) {
            var t = /(\S\s*)\n(?:\s|(<span[^>]+data-cke-bookmark.*?\/span>))*\n(?!$)/gi, n = [],
                i = C(e.getOuterHtml(), t, function (e, t, n) {
                    return t + "</pre>" + n + "<pre>"
                });
            return i.replace(/<pre\b.*?>([\s\S]*?)<\/pre>/gi, function (e, t) {
                n.push(t)
            }), n
        }

        function C(e, t, n) {
            var i = "", o = "";
            return e = e.replace(/(^<span[^>]+data-cke-bookmark.*?\/span>)|(<span[^>]+data-cke-bookmark.*?\/span>$)/gi, function (e, t, n) {
                return t && (i = t), n && (o = n), ""
            }), i + e.replace(t, n) + o
        }

        function v(e, t) {
            var n;
            e.length > 1 && (n = new CKEDITOR.dom.documentFragment(t.getDocument()));
            for (var i = 0; i < e.length; i++) {
                var o = e[i];
                if (o = o.replace(/(\r\n|\r)/g, "\n"), o = C(o, /^[ \t]*\n/, ""), o = C(o, /\n$/, ""), o = C(o, /^[ \t]+|[ \t]+$/g, function (e, t) {
                        return 1 == e.length ? "&nbsp;" : t ? " " + CKEDITOR.tools.repeat("&nbsp;", e.length - 1) : CKEDITOR.tools.repeat("&nbsp;", e.length - 1) + " "
                    }), o = o.replace(/\n/g, "<br>"), o = o.replace(/[ \t]{2,}/g, function (e) {
                        return CKEDITOR.tools.repeat("&nbsp;", e.length - 1) + " "
                    }), n) {
                    var r = t.clone();
                    r.setHtml(o), n.append(r)
                } else t.setHtml(o)
            }
            return n || t
        }

        function I(e, t) {
            var n = e.getBogus();
            n && n.remove();
            var i = e.getHtml();
            if (i = C(i, /(?:^[ \t\n\r]+)|(?:[ \t\n\r]+$)/g, ""), i = i.replace(/[ \t\r\n]*(<br[^>]*>)[ \t\r\n]*/gi, "$1"), i = i.replace(/([ \t\n\r]+|&nbsp;)/g, " "), i = i.replace(/<br\b[^>]*>/gi, "\n"), CKEDITOR.env.ie) {
                var o = e.getDocument().createElement("div");
                o.append(t), t.$.outerHTML = "<pre>" + i + "</pre>", t.copyAttributes(o.getFirst()), t = o.getFirst().remove()
            } else t.setHtml(i);
            return t
        }

        function O(e, t) {
            var n = this._.definition, i = n.attributes, o = n.styles, r = N(this)[e.getName()],
                a = CKEDITOR.tools.isEmpty(i) && CKEDITOR.tools.isEmpty(o);
            for (var s in i)("class" != s && !this._.definition.fullMatch || e.getAttribute(s) == w(s, i[s])) && (t && "data-" == s.slice(0, 5) || (a = e.hasAttribute(s), e.removeAttribute(s)));
            for (var l in o)this._.definition.fullMatch && e.getStyle(l) != w(l, o[l], !0) || (a = a || !!e.getStyle(l), e.removeStyle(l));
            R(e, r, A[e.getName()]), a && (this._.definition.alwaysRemoveElement ? b(e, 1) : !CKEDITOR.dtd.$block[e.getName()] || this._.enterMode == CKEDITOR.ENTER_BR && !e.hasAttributes() ? b(e) : e.renameNode(this._.enterMode == CKEDITOR.ENTER_P ? "p" : "div"))
        }

        function D(e) {
            for (var t, n = N(this), i = e.getElementsByTag(this.element), o = i.count(); --o >= 0;)t = i.getItem(o), t.isReadOnly() || O.call(this, t, !0);
            for (var r in n)if (r != this.element)for (i = e.getElementsByTag(r), o = i.count() - 1; o >= 0; o--)t = i.getItem(o), t.isReadOnly() || R(t, n[r])
        }

        function R(e, t, n) {
            var i = t && t.attributes;
            if (i)for (var o = 0; o < i.length; o++) {
                var r, a = i[o][0];
                if (r = e.getAttribute(a)) {
                    var s = i[o][1];
                    (null === s || s.test && s.test(r) || "string" == typeof s && r == s) && e.removeAttribute(a)
                }
            }
            n || b(e)
        }

        function b(e, t) {
            if (!e.hasAttributes() || t)if (CKEDITOR.dtd.$block[e.getName()]) {
                var n = e.getPrevious($), i = e.getNext($);
                !n || n.type != CKEDITOR.NODE_TEXT && n.isBlockBoundary({br: 1}) || e.append("br", 1), !i || i.type != CKEDITOR.NODE_TEXT && i.isBlockBoundary({br: 1}) || e.append("br"), e.remove(!0)
            } else {
                var o = e.getFirst(), r = e.getLast();
                e.remove(!0), o && (o.type == CKEDITOR.NODE_ELEMENT && o.mergeSiblings(), r && !o.equals(r) && r.type == CKEDITOR.NODE_ELEMENT && r.mergeSiblings())
            }
        }

        function K(e, t, n) {
            var i, o = e.element;
            return "*" == o && (o = "span"), i = new CKEDITOR.dom.element(o, t), n && n.copyAttributes(i), i = y(i, e), t.getCustomData("doc_processing_style") && i.hasAttribute("id") ? i.removeAttribute("id") : t.setCustomData("doc_processing_style", 1), i
        }

        function y(e, t) {
            var n = t._.definition, i = n.attributes, o = CKEDITOR.style.getStyleText(n);
            if (i)for (var r in i)e.setAttribute(r, i[r]);
            return o && e.setAttribute("style", o), e
        }

        function _(e, t) {
            for (var n in e)e[n] = e[n].replace(B, function (e, n) {
                return t[n]
            })
        }

        function k(e) {
            var t = e._AC;
            if (t)return t;
            t = {};
            var n = 0, i = e.attributes;
            if (i)for (var o in i)n++, t[o] = i[o];
            var r = CKEDITOR.style.getStyleText(e);
            return r && (t.style || n++, t.style = r), t._length = n, e._AC = t
        }

        function N(e) {
            if (e._.overrides)return e._.overrides;
            var t = e._.overrides = {}, n = e._.definition.overrides;
            if (n) {
                CKEDITOR.tools.isArray(n) || (n = [n]);
                for (var i = 0; i < n.length; i++) {
                    var o, r, a, s = n[i];
                    if ("string" == typeof s ? o = s.toLowerCase() : (o = s.element ? s.element.toLowerCase() : e.element, a = s.attributes), r = t[o] || (t[o] = {}), a) {
                        var l = r.attributes = r.attributes || [];
                        for (var c in a)l.push([c.toLowerCase(), a[c]])
                    }
                }
            }
            return t
        }

        function w(e, t, n) {
            var i = new CKEDITOR.dom.element("span");
            return i[n ? "setStyle" : "setAttribute"](e, t), i[n ? "getStyle" : "getAttribute"](e)
        }

        function S(e, t) {
            "string" == typeof e && (e = CKEDITOR.tools.parseCssText(e)), "string" == typeof t && (t = CKEDITOR.tools.parseCssText(t, !0));
            for (var n in e)if (!(n in t) || t[n] != e[n] && "inherit" != e[n] && "inherit" != t[n])return !1;
            return !0
        }

        function x(e, t, n) {
            for (var i, o = e.document, r = e.getRanges(), a = t ? this.removeFromRange : this.applyToRange, s = r.createIterator(); i = s.getNextRange();)a.call(this, i, n);
            e.selectRanges(r), o.removeCustomData("doc_processing_style")
        }

        var A = {
                address: 1,
                div: 1,
                h1: 1,
                h2: 1,
                h3: 1,
                h4: 1,
                h5: 1,
                h6: 1,
                p: 1,
                pre: 1,
                section: 1,
                header: 1,
                footer: 1,
                nav: 1,
                article: 1,
                aside: 1,
                figure: 1,
                dialog: 1,
                hgroup: 1,
                time: 1,
                meter: 1,
                menu: 1,
                command: 1,
                keygen: 1,
                output: 1,
                progress: 1,
                details: 1,
                datagrid: 1,
                datalist: 1
            }, L = {
                a: 1,
                blockquote: 1,
                embed: 1,
                hr: 1,
                img: 1,
                li: 1,
                object: 1,
                ol: 1,
                table: 1,
                td: 1,
                tr: 1,
                th: 1,
                ul: 1,
                dl: 1,
                dt: 1,
                dd: 1,
                form: 1,
                audio: 1,
                video: 1
            }, P = /\s*(?:;\s*|$)/, B = /#\((.+?)\)/g, F = CKEDITOR.dom.walker.bookmark(0, 1),
            $ = CKEDITOR.dom.walker.whitespaces(1);
        CKEDITOR.style = function (e, t) {
            if ("string" == typeof e.type)return new CKEDITOR.style.customHandlers[e.type](e);
            var n = e.attributes;
            n && n.style && (e.styles = CKEDITOR.tools.extend({}, e.styles, CKEDITOR.tools.parseCssText(n.style)), delete n.style), t && (e = CKEDITOR.tools.clone(e), _(e.attributes, t), _(e.styles, t));
            var i = this.element = e.element ? "string" == typeof e.element ? e.element.toLowerCase() : e.element : "*";
            this.type = e.type || (A[i] ? CKEDITOR.STYLE_BLOCK : L[i] ? CKEDITOR.STYLE_OBJECT : CKEDITOR.STYLE_INLINE), "object" == typeof this.element && (this.type = CKEDITOR.STYLE_OBJECT), this._ = {definition: e}
        }, CKEDITOR.style.prototype = {
            apply: function (e) {
                if (e instanceof CKEDITOR.dom.document)return x.call(this, e.getSelection());
                if (this.checkApplicable(e.elementPath(), e)) {
                    var t = this._.enterMode;
                    t || (this._.enterMode = e.activeEnterMode), x.call(this, e.getSelection(), 0, e), this._.enterMode = t
                }
            }, remove: function (e) {
                if (e instanceof CKEDITOR.dom.document)return x.call(this, e.getSelection(), 1);
                if (this.checkApplicable(e.elementPath(), e)) {
                    var t = this._.enterMode;
                    t || (this._.enterMode = e.activeEnterMode), x.call(this, e.getSelection(), 1, e), this._.enterMode = t
                }
            }, applyToRange: function (e) {
                return this.applyToRange = this.type == CKEDITOR.STYLE_INLINE ? a : this.type == CKEDITOR.STYLE_BLOCK ? m : this.type == CKEDITOR.STYLE_OBJECT ? h : null, this.applyToRange(e)
            }, removeFromRange: function (e) {
                return this.removeFromRange = this.type == CKEDITOR.STYLE_INLINE ? s : this.type == CKEDITOR.STYLE_BLOCK ? E : this.type == CKEDITOR.STYLE_OBJECT ? f : null, this.removeFromRange(e)
            }, applyToObject: function (e) {
                y(e, this)
            }, checkActive: function (e, t) {
                switch (this.type) {
                    case CKEDITOR.STYLE_BLOCK:
                        return this.checkElementRemovable(e.block || e.blockLimit, !0, t);
                    case CKEDITOR.STYLE_OBJECT:
                    case CKEDITOR.STYLE_INLINE:
                        for (var n, i = e.elements, o = 0; o < i.length; o++)if (n = i[o], this.type != CKEDITOR.STYLE_INLINE || n != e.block && n != e.blockLimit) {
                            if (this.type == CKEDITOR.STYLE_OBJECT) {
                                var r = n.getName();
                                if (!("string" == typeof this.element ? r == this.element : r in this.element))continue
                            }
                            if (this.checkElementRemovable(n, !0, t))return !0
                        }
                }
                return !1
            }, checkApplicable: function (e, t, n) {
                if (t && t instanceof CKEDITOR.filter && (n = t), n && !n.check(this))return !1;
                switch (this.type) {
                    case CKEDITOR.STYLE_OBJECT:
                        return !!e.contains(this.element);
                    case CKEDITOR.STYLE_BLOCK:
                        return !!e.blockLimit.getDtd()[this.element]
                }
                return !0
            }, checkElementMatch: function (e, t) {
                var n = this._.definition;
                if (!e || !n.ignoreReadonly && e.isReadOnly())return !1;
                var i, o = e.getName();
                if ("string" == typeof this.element ? o == this.element : o in this.element) {
                    if (!t && !e.hasAttributes())return !0;
                    if (i = k(n), !i._length)return !0;
                    for (var r in i)if ("_length" != r) {
                        var a = e.getAttribute(r) || "";
                        if ("style" == r ? S(i[r], a) : i[r] == a) {
                            if (!t)return !0
                        } else if (t)return !1
                    }
                    if (t)return !0
                }
                return !1
            }, checkElementRemovable: function (e, t, n) {
                if (this.checkElementMatch(e, t, n))return !0;
                var i = N(this)[e.getName()];
                if (i) {
                    var o, r;
                    if (!(o = i.attributes))return !0;
                    for (var a = 0; a < o.length; a++) {
                        r = o[a][0];
                        var s = e.getAttribute(r);
                        if (s) {
                            var l = o[a][1];
                            if (null === l)return !0;
                            if ("string" == typeof l) {
                                if (s == l)return !0
                            } else if (l.test(s))return !0
                        }
                    }
                }
                return !1
            }, buildPreview: function (e) {
                var t = this._.definition, n = [], i = t.element;
                "bdo" == i && (i = "span"), n = ["<", i];
                var o = t.attributes;
                if (o)for (var r in o)n.push(" ", r, '="', o[r], '"');
                var a = CKEDITOR.style.getStyleText(t);
                return a && n.push(' style="', a, '"'), n.push(">", e || t.name, "</", i, ">"), n.join("")
            }, getDefinition: function () {
                return this._.definition
            }
        }, CKEDITOR.style.getStyleText = function (e) {
            var t = e._ST;
            if (t)return t;
            t = e.styles;
            var n = e.attributes && e.attributes.style || "", i = "";
            n.length && (n = n.replace(P, ";"));
            for (var o in t) {
                var r = t[o], a = (o + ":" + r).replace(P, ";");
                "inherit" == r ? i += a : n += a
            }
            return n.length && (n = CKEDITOR.tools.normalizeCssText(n, !0)), n += i, e._ST = n
        }, CKEDITOR.style.customHandlers = {}, CKEDITOR.style.addCustomHandler = function (e) {
            var t = function (e) {
                this._ = {definition: e}, this.setup && this.setup(e)
            };
            return t.prototype = CKEDITOR.tools.extend(CKEDITOR.tools.prototypedCopy(CKEDITOR.style.prototype), {assignedTo: CKEDITOR.STYLE_OBJECT}, e, !0), this.customHandlers[e.type] = t, t
        };
        var M = CKEDITOR.POSITION_PRECEDING | CKEDITOR.POSITION_IDENTICAL | CKEDITOR.POSITION_IS_CONTAINED,
            H = CKEDITOR.POSITION_FOLLOWING | CKEDITOR.POSITION_IDENTICAL | CKEDITOR.POSITION_IS_CONTAINED
    }(),CKEDITOR.styleCommand = function (e, t) {
        this.style = e, this.allowedContent = e, this.requiredContent = e, CKEDITOR.tools.extend(this, t, !0)
    },CKEDITOR.styleCommand.prototype.exec = function (e) {
        e.focus(), this.state == CKEDITOR.TRISTATE_OFF ? e.applyStyle(this.style) : this.state == CKEDITOR.TRISTATE_ON && e.removeStyle(this.style)
    },CKEDITOR.stylesSet = new CKEDITOR.resourceManager("", "stylesSet"),CKEDITOR.addStylesSet = CKEDITOR.tools.bind(CKEDITOR.stylesSet.add, CKEDITOR.stylesSet),CKEDITOR.loadStylesSet = function (e, t, n) {
        CKEDITOR.stylesSet.addExternal(e, t, ""), CKEDITOR.stylesSet.load(e, n)
    },CKEDITOR.tools.extend(CKEDITOR.editor.prototype, {
        attachStyleStateChange: function (e, t) {
            var n = this._.styleStateChangeCallbacks;
            n || (n = this._.styleStateChangeCallbacks = [], this.on("selectionChange", function (e) {
                for (var t = 0; t < n.length; t++) {
                    var i = n[t],
                        o = i.style.checkActive(e.data.path, this) ? CKEDITOR.TRISTATE_ON : CKEDITOR.TRISTATE_OFF;
                    i.fn.call(this, o)
                }
            })), n.push({style: e, fn: t})
        }, applyStyle: function (e) {
            e.apply(this)
        }, removeStyle: function (e) {
            e.remove(this)
        }, getStylesSet: function (e) {
            if (this._.stylesDefinitions) e(this._.stylesDefinitions); else {
                var t = this, n = t.config.stylesCombo_stylesSet || t.config.stylesSet;
                if (n === !1)return void e(null);
                if (n instanceof Array)return t._.stylesDefinitions = n, void e(n);
                n || (n = "default");
                var i = n.split(":"), o = i[0], r = i[1];
                CKEDITOR.stylesSet.addExternal(o, r ? i.slice(1).join(":") : CKEDITOR.getUrl("styles.js"), ""), CKEDITOR.stylesSet.load(o, function (n) {
                    t._.stylesDefinitions = n[o], e(t._.stylesDefinitions)
                })
            }
        }
    }),CKEDITOR.dom.comment = function (e, t) {
        "string" == typeof e && (e = (t ? t.$ : document).createComment(e)), CKEDITOR.dom.domObject.call(this, e)
    },CKEDITOR.dom.comment.prototype = new CKEDITOR.dom.node,CKEDITOR.tools.extend(CKEDITOR.dom.comment.prototype, {
        type: CKEDITOR.NODE_COMMENT,
        getOuterHtml: function () {
            return "<!--" + this.$.nodeValue + "-->"
        }
    }),function () {
        function e(e) {
            for (var t = e.getChildren(), n = 0, i = t.count(); i > n; n++) {
                var o = t.getItem(n);
                if (o.type == CKEDITOR.NODE_ELEMENT && CKEDITOR.dtd.$block[o.getName()])return !0
            }
            return !1
        }

        var t, n = {}, i = {};
        for (t in CKEDITOR.dtd.$blockLimit)t in CKEDITOR.dtd.$list || (n[t] = 1);
        for (t in CKEDITOR.dtd.$block)t in CKEDITOR.dtd.$blockLimit || t in CKEDITOR.dtd.$empty || (i[t] = 1);
        CKEDITOR.dom.elementPath = function (t, o) {
            var r, a = null, s = null, l = [], c = t;
            o = o || t.getDocument().getBody();
            do if (c.type == CKEDITOR.NODE_ELEMENT) {
                if (l.push(c), !this.lastElement && (this.lastElement = c, c.is(CKEDITOR.dtd.$object) || "false" == c.getAttribute("contenteditable")))continue;
                if (c.equals(o))break;
                s || (r = c.getName(), "true" == c.getAttribute("contenteditable") ? s = c : !a && i[r] && (a = c), n[r] && (a || "div" != r || e(c) ? s = c : a = c))
            } while (c = c.getParent());
            s || (s = o), this.block = a, this.blockLimit = s, this.root = o, this.elements = l
        }
    }(),CKEDITOR.dom.elementPath.prototype = {
        compare: function (e) {
            var t = this.elements, n = e && e.elements;
            if (!n || t.length != n.length)return !1;
            for (var i = 0; i < t.length; i++)if (!t[i].equals(n[i]))return !1;
            return !0
        }, contains: function (e, t, n) {
            var i;
            "string" == typeof e && (i = function (t) {
                return t.getName() == e
            }), e instanceof CKEDITOR.dom.element ? i = function (t) {
                return t.equals(e)
            } : CKEDITOR.tools.isArray(e) ? i = function (t) {
                return CKEDITOR.tools.indexOf(e, t.getName()) > -1
            } : "function" == typeof e ? i = e : "object" == typeof e && (i = function (t) {
                    return t.getName() in e
                });
            var o = this.elements, r = o.length;
            t && r--, n && (o = Array.prototype.slice.call(o, 0), o.reverse());
            for (var a = 0; r > a; a++)if (i(o[a]))return o[a];
            return null
        }, isContextFor: function (e) {
            var t;
            if (e in CKEDITOR.dtd.$block) {
                var n = this.contains(CKEDITOR.dtd.$intermediate);
                return t = n || this.root.equals(this.block) && this.block || this.blockLimit, !!t.getDtd()[e]
            }
            return !0
        }, direction: function () {
            var e = this.block || this.blockLimit || this.root;
            return e.getDirection(1)
        }
    },CKEDITOR.dom.text = function (e, t) {
        "string" == typeof e && (e = (t ? t.$ : document).createTextNode(e)), this.$ = e
    },CKEDITOR.dom.text.prototype = new CKEDITOR.dom.node,CKEDITOR.tools.extend(CKEDITOR.dom.text.prototype, {
        type: CKEDITOR.NODE_TEXT,
        getLength: function () {
            return this.$.nodeValue.length
        },
        getText: function () {
            return this.$.nodeValue
        },
        setText: function (e) {
            this.$.nodeValue = e
        },
        split: function (e) {
            var t = this.$.parentNode, n = t.childNodes.length, i = this.getLength(), o = this.getDocument(),
                r = new CKEDITOR.dom.text(this.$.splitText(e), o);
            if (t.childNodes.length == n)if (e >= i) r = o.createText(""), r.insertAfter(this); else {
                var a = o.createText("");
                a.insertAfter(r), a.remove()
            }
            return r
        },
        substring: function (e, t) {
            return "number" != typeof t ? this.$.nodeValue.substr(e) : this.$.nodeValue.substring(e, t)
        }
    }),function () {
        function e(e, t, n) {
            var i = e.serializable, o = t[n ? "endContainer" : "startContainer"], r = n ? "endOffset" : "startOffset",
                a = i ? t.document.getById(e.startNode) : e.startNode,
                s = i ? t.document.getById(e.endNode) : e.endNode;
            return o.equals(a.getPrevious()) ? (t.startOffset = t.startOffset - o.getLength() - s.getPrevious().getLength(), o = s.getNext()) : o.equals(s.getPrevious()) && (t.startOffset = t.startOffset - o.getLength(), o = s.getNext()), o.equals(a.getParent()) && t[r]++, o.equals(s.getParent()) && t[r]++, t[n ? "endContainer" : "startContainer"] = o, t
        }

        CKEDITOR.dom.rangeList = function (e) {
            return e instanceof CKEDITOR.dom.rangeList ? e : (e ? e instanceof CKEDITOR.dom.range && (e = [e]) : e = [], CKEDITOR.tools.extend(e, t))
        };
        var t = {
            createIterator: function () {
                var e, t = this, n = CKEDITOR.dom.walker.bookmark(), i = [];
                return {
                    getNextRange: function (o) {
                        e = void 0 === e ? 0 : e + 1;
                        var r = t[e];
                        if (r && t.length > 1) {
                            if (!e)for (var a = t.length - 1; a >= 0; a--)i.unshift(t[a].createBookmark(!0));
                            if (o)for (var s = 0; t[e + s + 1];) {
                                for (var l, c = r.document, d = 0, u = c.getById(i[s].endNode), h = c.getById(i[s + 1].startNode); ;) {
                                    if (l = u.getNextSourceNode(!1), h.equals(l)) d = 1; else if (n(l) || l.type == CKEDITOR.NODE_ELEMENT && l.isBlockBoundary()) {
                                        u = l;
                                        continue
                                    }
                                    break
                                }
                                if (!d)break;
                                s++
                            }
                            for (r.moveToBookmark(i.shift()); s--;)l = t[++e], l.moveToBookmark(i.shift()), r.setEnd(l.endContainer, l.endOffset)
                        }
                        return r
                    }
                }
            }, createBookmarks: function (t) {
                for (var n, i = [], o = 0; o < this.length; o++) {
                    i.push(n = this[o].createBookmark(t, !0));
                    for (var r = o + 1; r < this.length; r++)this[r] = e(n, this[r]), this[r] = e(n, this[r], !0)
                }
                return i
            }, createBookmarks2: function (e) {
                for (var t = [], n = 0; n < this.length; n++)t.push(this[n].createBookmark2(e));
                return t
            }, moveToBookmarks: function (e) {
                for (var t = 0; t < this.length; t++)this[t].moveToBookmark(e[t])
            }
        }
    }(),function () {
        function e() {
            return CKEDITOR.skinName.split(",")[0]
        }

        function t() {
            return CKEDITOR.getUrl(CKEDITOR.skinName.split(",")[1] || "skins/" + e() + "/")
        }

        function n(e) {
            var n = CKEDITOR.skin["ua_" + e], i = CKEDITOR.env;
            if (n) {
                n = n.split(",").sort(function (e, t) {
                    return e > t ? -1 : 1
                });
                for (var o, r = 0; r < n.length; r++)if (o = n[r], i.ie && (o.replace(/^ie/, "") == i.version || i.quirks && "iequirks" == o) && (o = "ie"), i[o]) {
                    e += "_" + n[r];
                    break
                }
            }
            return CKEDITOR.getUrl(t() + e + ".css")
        }

        function i(e, t) {
            a[e] || (CKEDITOR.document.appendStyleSheet(n(e)), a[e] = 1), t && t()
        }

        function o(e) {
            var t = e.getById(s);
            return t || (t = e.getHead().append("style"), t.setAttribute("id", s), t.setAttribute("type", "text/css")), t
        }

        function r(e, t, n) {
            var i, o, r;
            if (CKEDITOR.env.webkit)for (t = t.split("}").slice(0, -1), o = 0; o < t.length; o++)t[o] = t[o].split("{");
            for (var a = 0; a < e.length; a++)if (CKEDITOR.env.webkit)for (o = 0; o < t.length; o++) {
                for (r = t[o][1], i = 0; i < n.length; i++)r = r.replace(n[i][0], n[i][1]);
                e[a].$.sheet.addRule(t[o][0], r)
            } else {
                for (r = t, i = 0; i < n.length; i++)r = r.replace(n[i][0], n[i][1]);
                CKEDITOR.env.ie && CKEDITOR.env.version < 11 ? e[a].$.styleSheet.cssText += r : e[a].$.innerHTML += r
            }
        }

        var a = {};
        CKEDITOR.skin = {
            path: t, loadPart: function (n, o) {
                CKEDITOR.skin.name != e() ? CKEDITOR.scriptLoader.load(CKEDITOR.getUrl(t() + "skin.js"), function () {
                    i(n, o)
                }) : i(n, o)
            }, getPath: function (e) {
                return CKEDITOR.getUrl(n(e))
            }, icons: {}, addIcon: function (e, t, n, i) {
                e = e.toLowerCase(), this.icons[e] || (this.icons[e] = {path: t, offset: n || 0, bgsize: i || "16px"})
            }, getIconStyle: function (e, t, n, i, o) {
                var r, a, s, l;
                return e && (e = e.toLowerCase(), t && (r = this.icons[e + "-rtl"]), r || (r = this.icons[e])), a = n || r && r.path || "", s = i || r && r.offset, l = o || r && r.bgsize || "16px", a && "background-image:url(" + CKEDITOR.getUrl(a) + ");background-position:0 " + s + "px;background-size:" + l + ";"
            }
        }, CKEDITOR.tools.extend(CKEDITOR.editor.prototype, {
            getUiColor: function () {
                return this.uiColor
            }, setUiColor: function (e) {
                var t = o(CKEDITOR.document);
                return (this.setUiColor = function (e) {
                    this.uiColor = e;
                    var n = CKEDITOR.skin.chameleon, i = "", o = "";
                    "function" == typeof n && (i = n(this, "editor"), o = n(this, "panel"));
                    var a = [[c, e]];
                    r([t], i, a), r(l, o, a)
                }).call(this, e)
            }
        });
        var s = "cke_ui_color", l = [], c = /\$color/g;
        CKEDITOR.on("instanceLoaded", function (e) {
            if (!CKEDITOR.env.ie || !CKEDITOR.env.quirks) {
                var t = e.editor, n = function (e) {
                    var n = e.data[0] || e.data, i = n.element.getElementsByTag("iframe").getItem(0).getFrameDocument();
                    if (!i.getById("cke_ui_color")) {
                        var a = o(i);
                        l.push(a);
                        var s = t.getUiColor();
                        s && r([a], CKEDITOR.skin.chameleon(t, "panel"), [[c, s]])
                    }
                };
                t.on("panelShow", n), t.on("menuShow", n), t.config.uiColor && t.setUiColor(t.config.uiColor)
            }
        })
    }(),function () {
        if (CKEDITOR.env.webkit) CKEDITOR.env.hc = !1; else {
            var e = CKEDITOR.dom.element.createFromHtml('<div style="width:0;height:0;position:absolute;left:-10000px;border:1px solid;border-color:red blue"></div>', CKEDITOR.document);
            e.appendTo(CKEDITOR.document.getHead());
            try {
                var t = e.getComputedStyle("border-top-color"), n = e.getComputedStyle("border-right-color");
                CKEDITOR.env.hc = !(!t || t != n)
            } catch (i) {
                CKEDITOR.env.hc = !1
            }
            e.remove()
        }
        CKEDITOR.env.hc && (CKEDITOR.env.cssClass += " cke_hc"), CKEDITOR.document.appendStyleText(".cke{visibility:hidden;}"), CKEDITOR.status = "loaded", CKEDITOR.fireOnce("loaded");
        var o = CKEDITOR._.pending;
        if (o) {
            delete CKEDITOR._.pending;
            for (var r = 0; r < o.length; r++)CKEDITOR.editor.prototype.constructor.apply(o[r][0], o[r][1]), CKEDITOR.add(o[r][0])
        }
    }(),CKEDITOR.skin.name = "moono",CKEDITOR.skin.ua_editor = "ie,iequirks,ie7,ie8,gecko",CKEDITOR.skin.ua_dialog = "ie,iequirks,ie7,ie8",CKEDITOR.skin.chameleon = function () {
        var e = function () {
            function e(e, t) {
                return ("0" + (0 > t ? 0 | e * (1 + t) : 0 | e + (255 - e) * t).toString(16)).slice(-2)
            }

            return function (t, n) {
                for (var i = t.match(/[^#]./g), o = 0; 3 > o; o++)i[o] = e(parseInt(i[o], 16), n);
                return "#" + i.join("")
            }
        }(), t = function () {
            var e = new CKEDITOR.template("background:#{to};background-image:-webkit-gradient(linear,lefttop,leftbottom,from({from}),to({to}));background-image:-moz-linear-gradient(top,{from},{to});background-image:-webkit-linear-gradient(top,{from},{to});background-image:-o-linear-gradient(top,{from},{to});background-image:-ms-linear-gradient(top,{from},{to});background-image:linear-gradient(top,{from},{to});filter:progid:DXImageTransform.Microsoft.gradient(gradientType=0,startColorstr='{from}',endColorstr='{to}');");
            return function (t, n) {
                return e.output({from: t, to: n})
            }
        }(), n = {
            editor: new CKEDITOR.template("{id}.cke_chrome [border-color:{defaultBorder};] {id} .cke_top [ {defaultGradient}border-bottom-color:{defaultBorder};] {id} .cke_bottom [{defaultGradient}border-top-color:{defaultBorder};] {id} .cke_resizer [border-right-color:{ckeResizer}] {id} .cke_dialog_title [{defaultGradient}border-bottom-color:{defaultBorder};] {id} .cke_dialog_footer [{defaultGradient}outline-color:{defaultBorder};border-top-color:{defaultBorder};] {id} .cke_dialog_tab [{lightGradient}border-color:{defaultBorder};] {id} .cke_dialog_tab:hover [{mediumGradient}] {id} .cke_dialog_contents [border-top-color:{defaultBorder};] {id} .cke_dialog_tab_selected, {id} .cke_dialog_tab_selected:hover [background:{dialogTabSelected};border-bottom-color:{dialogTabSelectedBorder};] {id} .cke_dialog_body [background:{dialogBody};border-color:{defaultBorder};] {id} .cke_toolgroup [{lightGradient}border-color:{defaultBorder};] {id} a.cke_button_off:hover, {id} a.cke_button_off:focus, {id} a.cke_button_off:active [{mediumGradient}] {id} .cke_button_on [{ckeButtonOn}] {id} .cke_toolbar_separator [background-color: {ckeToolbarSeparator};] {id} .cke_combo_button [border-color:{defaultBorder};{lightGradient}] {id} a.cke_combo_button:hover, {id} a.cke_combo_button:focus, {id} .cke_combo_on a.cke_combo_button [border-color:{defaultBorder};{mediumGradient}] {id} .cke_path_item [color:{elementsPathColor};] {id} a.cke_path_item:hover, {id} a.cke_path_item:focus, {id} a.cke_path_item:active [background-color:{elementsPathBg};] {id}.cke_panel [border-color:{defaultBorder};] "),
            panel: new CKEDITOR.template(".cke_panel_grouptitle [{lightGradient}border-color:{defaultBorder};] .cke_menubutton_icon [background-color:{menubuttonIcon};] .cke_menubutton:hover .cke_menubutton_icon, .cke_menubutton:focus .cke_menubutton_icon, .cke_menubutton:active .cke_menubutton_icon [background-color:{menubuttonIconHover};] .cke_menuseparator [background-color:{menubuttonIcon};] a:hover.cke_colorbox, a:focus.cke_colorbox, a:active.cke_colorbox [border-color:{defaultBorder};] a:hover.cke_colorauto, a:hover.cke_colormore, a:focus.cke_colorauto, a:focus.cke_colormore, a:active.cke_colorauto, a:active.cke_colormore [background-color:{ckeColorauto};border-color:{defaultBorder};] ")
        };
        return function (i, o) {
            var r = i.uiColor, a = {
                id: "." + i.id,
                defaultBorder: e(r, -.1),
                defaultGradient: t(e(r, .9), r),
                lightGradient: t(e(r, 1), e(r, .7)),
                mediumGradient: t(e(r, .8), e(r, .5)),
                ckeButtonOn: t(e(r, .6), e(r, .7)),
                ckeResizer: e(r, -.4),
                ckeToolbarSeparator: e(r, .5),
                ckeColorauto: e(r, .8),
                dialogBody: e(r, .7),
                dialogTabSelected: t("#FFFFFF", "#FFFFFF"),
                dialogTabSelectedBorder: "#FFF",
                elementsPathColor: e(r, -.6),
                elementsPathBg: r,
                menubuttonIcon: e(r, .5),
                menubuttonIconHover: e(r, .3)
            };
            return n[o].output(a).replace(/\[/g, "{").replace(/\]/g, "}")
        }
    }(),CKEDITOR.plugins.add("basicstyles", {
        init: function (e) {
            var t = 0, n = function (n, o, r, a) {
                if (a) {
                    var s = new CKEDITOR.style(a), l = i[r];
                    l.unshift(s), e.attachStyleStateChange(s, function (t) {
                        !e.readOnly && e.getCommand(r).setState(t)
                    }), e.addCommand(r, new CKEDITOR.styleCommand(s, {contentForms: l})), e.ui.addButton && e.ui.addButton(n, {
                        label: o,
                        command: r,
                        toolbar: "basicstyles," + (t += 10)
                    })
                }
            }, i = {
                bold: ["strong", "b", ["span", function (e) {
                    var t = e.styles["font-weight"];
                    return "bold" == t || +t >= 700
                }]], italic: ["em", "i", ["span", function (e) {
                    return "italic" == e.styles["font-style"]
                }]], underline: ["u", ["span", function (e) {
                    return "underline" == e.styles["text-decoration"]
                }]], strike: ["s", "strike", ["span", function (e) {
                    return "line-through" == e.styles["text-decoration"]
                }]], subscript: ["sub"], superscript: ["sup"]
            }, o = e.config, r = e.lang.basicstyles;
            n("Bold", r.bold, "bold", o.coreStyles_bold), n("Italic", r.italic, "italic", o.coreStyles_italic), n("Underline", r.underline, "underline", o.coreStyles_underline), n("Strike", r.strike, "strike", o.coreStyles_strike), n("Subscript", r.subscript, "subscript", o.coreStyles_subscript), n("Superscript", r.superscript, "superscript", o.coreStyles_superscript), e.setKeystroke([[CKEDITOR.CTRL + 66, "bold"], [CKEDITOR.CTRL + 73, "italic"], [CKEDITOR.CTRL + 85, "underline"]])
        }
    }),CKEDITOR.config.coreStyles_bold = {
        element: "strong",
        overrides: "b"
    },CKEDITOR.config.coreStyles_italic = {
        element: "em",
        overrides: "i"
    },CKEDITOR.config.coreStyles_underline = {element: "u"},CKEDITOR.config.coreStyles_strike = {
        element: "s",
        overrides: "strike"
    },CKEDITOR.config.coreStyles_subscript = {element: "sub"},CKEDITOR.config.coreStyles_superscript = {element: "sup"},function () {
        function e(e, t) {
            var i, o = e.config.useComputedState;
            if (o = void 0 === o || o, o || (i = n(t.lastElement, e.editable())), i = i || t.block || t.blockLimit, i.equals(e.editable())) {
                var r = e.getSelection().getRanges()[0].getEnclosedNode();
                r && r.type == CKEDITOR.NODE_ELEMENT && (i = r)
            }
            if (i) {
                var a = o ? i.getComputedStyle("direction") : i.getStyle("direction") || i.getAttribute("dir");
                e.getCommand("bidirtl").setState("rtl" == a ? CKEDITOR.TRISTATE_ON : CKEDITOR.TRISTATE_OFF), e.getCommand("bidiltr").setState("ltr" == a ? CKEDITOR.TRISTATE_ON : CKEDITOR.TRISTATE_OFF)
            }
        }

        function t(e, t) {
            var n = t.block || t.blockLimit || e.editable(), i = n.getDirection(1);
            i != (e._.selDir || e.lang.dir) && (e._.selDir = i, e.fire("contentDirChanged", i))
        }

        function n(e, t) {
            for (; e && !(e.getName() in d || e.equals(t));) {
                var n = e.getParent();
                if (!n)break;
                e = n
            }
            return e
        }

        function i(e, t, n, i) {
            if (!e.isReadOnly() && !e.equals(n.editable())) {
                CKEDITOR.dom.element.setMarker(i, e, "bidi_processed", 1);
                for (var o = e, r = n.editable(); (o = o.getParent()) && !o.equals(r);)if (o.getCustomData("bidi_processed"))return e.removeStyle("direction"), void e.removeAttribute("dir");
                var a = "useComputedState" in n.config ? n.config.useComputedState : 1,
                    s = a ? e.getComputedStyle("direction") : e.getStyle("direction") || e.hasAttribute("dir");
                s != t && (e.removeStyle("direction"), a ? (e.removeAttribute("dir"), t != e.getComputedStyle("direction") && e.setAttribute("dir", t)) : e.setAttribute("dir", t), n.forceNextSelectionCheck())
            }
        }

        function o(e, t, n) {
            var i = e.getCommonAncestor(!1, !0);
            if (e = e.clone(), e.enlarge(n == CKEDITOR.ENTER_BR ? CKEDITOR.ENLARGE_LIST_ITEM_CONTENTS : CKEDITOR.ENLARGE_BLOCK_CONTENTS), e.checkBoundaryOfElement(i, CKEDITOR.START) && e.checkBoundaryOfElement(i, CKEDITOR.END)) {
                for (var o; i && i.type == CKEDITOR.NODE_ELEMENT && (o = i.getParent()) && 1 == o.getChildCount() && !(i.getName() in t);)i = o;
                return i.type == CKEDITOR.NODE_ELEMENT && i.getName() in t && i
            }
        }

        function r(n) {
            return {
                context: "p",
                allowedContent: {
                    "h1 h2 h3 h4 h5 h6 table ul ol blockquote div tr p div li td": {
                        propertiesOnly: !0,
                        attributes: "dir"
                    }
                },
                requiredContent: "p[dir]",
                refresh: function (n, i) {
                    e(n, i), t(n, i)
                },
                exec: function (e) {
                    var t = e.getSelection(), r = e.config.enterMode, a = t.getRanges();
                    if (a && a.length) {
                        for (var s, d = {}, u = t.createBookmarks(), h = a.createIterator(), f = 0; s = h.getNextRange(1);) {
                            var m = s.getEnclosedNode();
                            m && (!m || m.type == CKEDITOR.NODE_ELEMENT && m.getName() in c) || (m = o(s, l, r)), m && i(m, n, e, d);
                            var E, g, p = new CKEDITOR.dom.walker(s), T = u[f].startNode, C = u[f++].endNode;
                            p.evaluator = function (e) {
                                function t(e) {
                                    return e ? e.type == CKEDITOR.NODE_ELEMENT : !1
                                }

                                function n(e) {
                                    return e.getName() in l
                                }

                                var i = r == CKEDITOR.ENTER_P ? "p" : "div";
                                return !(!t(e) || !n(e) || e.is(i) && t(e.getParent()) && e.getParent().is("blockquote") || !(e.getPosition(T) & CKEDITOR.POSITION_FOLLOWING) || (e.getPosition(C) & CKEDITOR.POSITION_PRECEDING + CKEDITOR.POSITION_CONTAINS) != CKEDITOR.POSITION_PRECEDING)
                            };
                            for (; g = p.next();)i(g, n, e, d);
                            for (E = s.createIterator(), E.enlargeBr = r != CKEDITOR.ENTER_BR; g = E.getNextParagraph(r == CKEDITOR.ENTER_P ? "p" : "div");)i(g, n, e, d)
                        }
                        CKEDITOR.dom.element.clearAllMarkers(d), e.forceNextSelectionCheck(), t.selectBookmarks(u), e.focus()
                    }
                }
            }
        }

        function a(e) {
            for (var t = e.getDocument().getBody().getParent(); e;) {
                if (e.equals(t))return !1;
                e = e.getParent()
            }
            return !0
        }

        function s(e) {
            var t = e == u.setAttribute, n = e == u.removeAttribute, i = /\bdirection\s*:\s*(.*?)\s*(:?$|;)/;
            return function (o, r) {
                if (!this.isReadOnly()) {
                    var s;
                    if ((o == (t || n ? "dir" : "direction") || "style" == o && (n || i.test(r))) && !a(this)) {
                        s = this.getDirection(1);
                        var l = e.apply(this, arguments);
                        if (s != this.getDirection(1))return this.getDocument().fire("dirChanged", this), l
                    }
                }
                return e.apply(this, arguments)
            }
        }

        var l = {table: 1, ul: 1, ol: 1, blockquote: 1, div: 1}, c = {}, d = {};
        CKEDITOR.tools.extend(c, l, {
            tr: 1,
            p: 1,
            div: 1,
            li: 1
        }), CKEDITOR.tools.extend(d, c, {td: 1}), CKEDITOR.plugins.add("bidi", {
            init: function (e) {
                function t(t, n, i, o, r) {
                    e.addCommand(i, new CKEDITOR.command(e, o)), e.ui.addButton && e.ui.addButton(t, {
                        label: n,
                        command: i,
                        toolbar: "bidi," + r
                    })
                }

                if (!e.blockless) {
                    var n = e.lang.bidi;
                    t("BidiLtr", n.ltr, "bidiltr", r("ltr"), 10), t("BidiRtl", n.rtl, "bidirtl", r("rtl"), 20), e.on("contentDom", function () {
                        e.document.on("dirChanged", function (t) {
                            e.fire("dirChanged", {node: t.data, dir: t.data.getDirection(1)})
                        })
                    }), e.on("contentDirChanged", function (t) {
                        var n = (e.lang.dir != t.data ? "add" : "remove") + "Class",
                            i = e.ui.space(e.config.toolbarLocation);
                        i && i[n]("cke_mixed_dir_content")
                    })
                }
            }
        });
        for (var u = CKEDITOR.dom.element.prototype, h = ["setStyle", "removeStyle", "setAttribute", "removeAttribute"], f = 0; f < h.length; f++)u[h[f]] = CKEDITOR.tools.override(u[h[f]], s)
    }(),function () {
        function e(e) {
            for (var t, n = 0, i = e.getChildCount(); i > n && (t = e.getChild(n)); n++)if (t.type == CKEDITOR.NODE_ELEMENT && t.isBlockBoundary())return !1;
            return !0
        }

        var t = {
            exec: function (t) {
                var n = t.getCommand("blockquote").state, i = t.getSelection(), o = i && i.getRanges()[0];
                if (o) {
                    var r = i.createBookmarks();
                    if (CKEDITOR.env.ie) {
                        var a, s = r[0].startNode, l = r[0].endNode;
                        if (s && "blockquote" == s.getParent().getName())for (a = s; a = a.getNext();)if (a.type == CKEDITOR.NODE_ELEMENT && a.isBlockBoundary()) {
                            s.move(a, !0);
                            break
                        }
                        if (l && "blockquote" == l.getParent().getName())for (a = l; a = a.getPrevious();)if (a.type == CKEDITOR.NODE_ELEMENT && a.isBlockBoundary()) {
                            l.move(a);
                            break
                        }
                    }
                    var c, d = o.createIterator();
                    if (d.enlargeBr = t.config.enterMode != CKEDITOR.ENTER_BR, n == CKEDITOR.TRISTATE_OFF) {
                        for (var u = []; c = d.getNextParagraph();)u.push(c);
                        if (u.length < 1) {
                            var h = t.document.createElement(t.config.enterMode == CKEDITOR.ENTER_P ? "p" : "div"),
                                f = r.shift();
                            o.insertNode(h), h.append(new CKEDITOR.dom.text("\ufeff", t.document)), o.moveToBookmark(f), o.selectNodeContents(h), o.collapse(!0), f = o.createBookmark(), u.push(h), r.unshift(f)
                        }
                        for (var m = u[0].getParent(), E = [], g = 0; g < u.length; g++)c = u[g], m = m.getCommonAncestor(c.getParent());
                        for (var p = {table: 1, tbody: 1, tr: 1, ol: 1, ul: 1}; p[m.getName()];)m = m.getParent();
                        for (var T = null; u.length > 0;) {
                            for (c = u.shift(); !c.getParent().equals(m);)c = c.getParent();
                            c.equals(T) || E.push(c), T = c
                        }
                        for (; E.length > 0;)if (c = E.shift(), "blockquote" == c.getName()) {
                            for (var C = new CKEDITOR.dom.documentFragment(t.document); c.getFirst();)C.append(c.getFirst().remove()), u.push(C.getLast());
                            C.replace(c)
                        } else u.push(c);
                        var v = t.document.createElement("blockquote");
                        for (v.insertBefore(u[0]); u.length > 0;)c = u.shift(), v.append(c)
                    } else if (n == CKEDITOR.TRISTATE_ON) {
                        for (var I = [], O = {}; c = d.getNextParagraph();) {
                            for (var D = null, R = null; c.getParent();) {
                                if ("blockquote" == c.getParent().getName()) {
                                    D = c.getParent(), R = c;
                                    break
                                }
                                c = c.getParent()
                            }
                            D && R && !R.getCustomData("blockquote_moveout") && (I.push(R), CKEDITOR.dom.element.setMarker(O, R, "blockquote_moveout", !0))
                        }
                        CKEDITOR.dom.element.clearAllMarkers(O);
                        var b = [], K = [];
                        for (O = {}; I.length > 0;) {
                            var y = I.shift();
                            v = y.getParent(), y.getPrevious() ? y.getNext() ? (y.breakParent(y.getParent()), K.push(y.getNext())) : y.remove().insertAfter(v) : y.remove().insertBefore(v), v.getCustomData("blockquote_processed") || (K.push(v), CKEDITOR.dom.element.setMarker(O, v, "blockquote_processed", !0)), b.push(y)
                        }
                        for (CKEDITOR.dom.element.clearAllMarkers(O), g = K.length - 1; g >= 0; g--)v = K[g], e(v) && v.remove();
                        if (t.config.enterMode == CKEDITOR.ENTER_BR)for (var _ = !0; b.length;)if (y = b.shift(), "div" == y.getName()) {
                            C = new CKEDITOR.dom.documentFragment(t.document);
                            var k = _ && y.getPrevious() && !(y.getPrevious().type == CKEDITOR.NODE_ELEMENT && y.getPrevious().isBlockBoundary());
                            k && C.append(t.document.createElement("br"));
                            for (var N = y.getNext() && !(y.getNext().type == CKEDITOR.NODE_ELEMENT && y.getNext().isBlockBoundary()); y.getFirst();)y.getFirst().remove().appendTo(C);
                            N && C.append(t.document.createElement("br")), C.replace(y), _ = !1
                        }
                    }
                    i.selectBookmarks(r), t.focus()
                }
            }, refresh: function (e, t) {
                var n = t.block || t.blockLimit;
                this.setState(e.elementPath(n).contains("blockquote", 1) ? CKEDITOR.TRISTATE_ON : CKEDITOR.TRISTATE_OFF)
            }, context: "blockquote", allowedContent: "blockquote", requiredContent: "blockquote"
        };
        CKEDITOR.plugins.add("blockquote", {
            init: function (e) {
                e.blockless || (e.addCommand("blockquote", t), e.ui.addButton && e.ui.addButton("Blockquote", {
                    label: e.lang.blockquote.toolbar,
                    command: "blockquote",
                    toolbar: "blocks,10"
                }))
            }
        })
    }(),CKEDITOR.plugins.add("dialogui", {
        onLoad: function () {
            var e = function (e) {
                this._ || (this._ = {}), this._["default"] = this._.initValue = e["default"] || "", this._.required = e.required || !1;
                for (var t = [this._], n = 1; n < arguments.length; n++)t.push(arguments[n]);
                return t.push(!0), CKEDITOR.tools.extend.apply(CKEDITOR.tools, t), this._
            }, t = {
                build: function (e, t, n) {
                    return new CKEDITOR.ui.dialog.textInput(e, t, n)
                }
            }, n = {
                build: function (e, t, n) {
                    return new CKEDITOR.ui.dialog[t.type](e, t, n)
                }
            }, i = {
                build: function (e, t, n) {
                    for (var i, o = t.children, r = [], a = [], s = 0; s < o.length && (i = o[s]); s++) {
                        var l = [];
                        r.push(l), a.push(CKEDITOR.dialog._.uiElementBuilders[i.type].build(e, i, l))
                    }
                    return new CKEDITOR.ui.dialog[t.type](e, a, r, n, t)
                }
            }, o = {
                isChanged: function () {
                    return this.getValue() != this.getInitValue()
                }, reset: function (e) {
                    this.setValue(this.getInitValue(), e)
                }, setInitValue: function () {
                    this._.initValue = this.getValue()
                }, resetInitValue: function () {
                    this._.initValue = this._["default"]
                }, getInitValue: function () {
                    return this._.initValue
                }
            }, r = CKEDITOR.tools.extend({}, CKEDITOR.ui.dialog.uiElement.prototype.eventProcessors, {
                onChange: function (e, t) {
                    this._.domOnChangeRegistered || (e.on("load", function () {
                        this.getInputElement().on("change", function () {
                            e.parts.dialog.isVisible() && this.fire("change", {value: this.getValue()})
                        }, this)
                    }, this), this._.domOnChangeRegistered = !0), this.on("change", t)
                }
            }, !0), a = /^on([A-Z]\w+)/, s = function (e) {
                for (var t in e)(a.test(t) || "title" == t || "type" == t) && delete e[t];
                return e
            };
            CKEDITOR.tools.extend(CKEDITOR.ui.dialog, {
                labeledElement: function (t, n, i, o) {
                    if (!(arguments.length < 4)) {
                        var r = e.call(this, n);
                        r.labelId = CKEDITOR.tools.getNextId() + "_label", this._.children = [];
                        var a = function () {
                            var e = [], i = n.required ? " cke_required" : "";
                            if ("horizontal" != n.labelLayout) e.push('<label class="cke_dialog_ui_labeled_label' + i + '" ', ' id="' + r.labelId + '"', r.inputId ? ' for="' + r.inputId + '"' : "", (n.labelStyle ? ' style="' + n.labelStyle + '"' : "") + ">", n.label, "</label>", '<div class="cke_dialog_ui_labeled_content"', n.controlStyle ? ' style="' + n.controlStyle + '"' : "", ' role="presentation">', o.call(this, t, n), "</div>"); else {
                                var a = {
                                    type: "hbox",
                                    widths: n.widths,
                                    padding: 0,
                                    children: [{
                                        type: "html",
                                        html: '<label class="cke_dialog_ui_labeled_label' + i + '" id="' + r.labelId + '" for="' + r.inputId + '"' + (n.labelStyle ? ' style="' + n.labelStyle + '"' : "") + ">" + CKEDITOR.tools.htmlEncode(n.label) + "</span>"
                                    }, {
                                        type: "html",
                                        html: '<span class="cke_dialog_ui_labeled_content"' + (n.controlStyle ? ' style="' + n.controlStyle + '"' : "") + ">" + o.call(this, t, n) + "</span>"
                                    }]
                                };
                                CKEDITOR.dialog._.uiElementBuilders.hbox.build(t, a, e)
                            }
                            return e.join("")
                        }, s = {role: n.role || "presentation"};
                        n.includeLabel && (s["aria-labelledby"] = r.labelId), CKEDITOR.ui.dialog.uiElement.call(this, t, n, i, "div", null, s, a)
                    }
                }, textInput: function (t, n, i) {
                    if (!(arguments.length < 3)) {
                        e.call(this, n);
                        var o = this._.inputId = CKEDITOR.tools.getNextId() + "_textInput",
                            r = {"class": "cke_dialog_ui_input_" + n.type, id: o, type: n.type};
                        n.validate && (this.validate = n.validate), n.maxLength && (r.maxlength = n.maxLength), n.size && (r.size = n.size), n.inputStyle && (r.style = n.inputStyle);
                        var a = this, s = !1;
                        t.on("load", function () {
                            a.getInputElement().on("keydown", function (e) {
                                13 == e.data.getKeystroke() && (s = !0)
                            }), a.getInputElement().on("keyup", function (e) {
                                13 == e.data.getKeystroke() && s && (t.getButton("ok") && setTimeout(function () {
                                    t.getButton("ok").click()
                                }, 0), s = !1)
                            }, null, null, 1e3)
                        });
                        var l = function () {
                            var e = ['<div class="cke_dialog_ui_input_', n.type, '" role="presentation"'];
                            n.width && e.push('style="width:' + n.width + '" '), e.push("><input "), r["aria-labelledby"] = this._.labelId, this._.required && (r["aria-required"] = this._.required);
                            for (var t in r)e.push(t + '="' + r[t] + '" ');
                            return e.push(" /></div>"), e.join("")
                        };
                        CKEDITOR.ui.dialog.labeledElement.call(this, t, n, i, l)
                    }
                }, textarea: function (t, n, i) {
                    if (!(arguments.length < 3)) {
                        e.call(this, n);
                        var o = this, r = this._.inputId = CKEDITOR.tools.getNextId() + "_textarea", a = {};
                        n.validate && (this.validate = n.validate), a.rows = n.rows || 5, a.cols = n.cols || 20, a["class"] = "cke_dialog_ui_input_textarea " + (n["class"] || ""), "undefined" != typeof n.inputStyle && (a.style = n.inputStyle), n.dir && (a.dir = n.dir);
                        var s = function () {
                            a["aria-labelledby"] = this._.labelId, this._.required && (a["aria-required"] = this._.required);
                            var e = ['<div class="cke_dialog_ui_input_textarea" role="presentation"><textarea id="', r, '" '];
                            for (var t in a)e.push(t + '="' + CKEDITOR.tools.htmlEncode(a[t]) + '" ');
                            return e.push(">", CKEDITOR.tools.htmlEncode(o._["default"]), "</textarea></div>"), e.join("")
                        };
                        CKEDITOR.ui.dialog.labeledElement.call(this, t, n, i, s)
                    }
                }, checkbox: function (t, n, i) {
                    if (!(arguments.length < 3)) {
                        var o = e.call(this, n, {"default": !!n["default"]});
                        n.validate && (this.validate = n.validate);
                        var r = function () {
                            var e = CKEDITOR.tools.extend({}, n, {id: n.id ? n.id + "_checkbox" : CKEDITOR.tools.getNextId() + "_checkbox"}, !0),
                                i = [], r = CKEDITOR.tools.getNextId() + "_label",
                                a = {"class": "cke_dialog_ui_checkbox_input", type: "checkbox", "aria-labelledby": r};
                            return s(e), n["default"] && (a.checked = "checked"), "undefined" != typeof e.inputStyle && (e.style = e.inputStyle), o.checkbox = new CKEDITOR.ui.dialog.uiElement(t, e, i, "input", null, a), i.push(' <label id="', r, '" for="', a.id, '"' + (n.labelStyle ? ' style="' + n.labelStyle + '"' : "") + ">", CKEDITOR.tools.htmlEncode(n.label), "</label>"), i.join("")
                        };
                        CKEDITOR.ui.dialog.uiElement.call(this, t, n, i, "span", null, null, r)
                    }
                }, radio: function (t, n, i) {
                    if (!(arguments.length < 3)) {
                        e.call(this, n), this._["default"] || (this._["default"] = this._.initValue = n.items[0][1]), n.validate && (this.validate = n.valdiate);
                        var o = [], r = this, a = function () {
                            for (var e = [], i = [], a = (n.id ? n.id : CKEDITOR.tools.getNextId()) + "_radio", l = 0; l < n.items.length; l++) {
                                var c = n.items[l], d = void 0 !== c[2] ? c[2] : c[0],
                                    u = void 0 !== c[1] ? c[1] : c[0], h = CKEDITOR.tools.getNextId() + "_radio_input",
                                    f = h + "_label",
                                    m = CKEDITOR.tools.extend({}, n, {id: h, title: null, type: null}, !0),
                                    E = CKEDITOR.tools.extend({}, m, {title: d}, !0), g = {
                                        type: "radio",
                                        "class": "cke_dialog_ui_radio_input",
                                        name: a,
                                        value: u,
                                        "aria-labelledby": f
                                    }, p = [];
                                r._["default"] == u && (g.checked = "checked"), s(m), s(E), "undefined" != typeof m.inputStyle && (m.style = m.inputStyle), m.keyboardFocusable = !0, o.push(new CKEDITOR.ui.dialog.uiElement(t, m, p, "input", null, g)), p.push(" "), new CKEDITOR.ui.dialog.uiElement(t, E, p, "label", null, {
                                    id: f,
                                    "for": g.id
                                }, c[0]), e.push(p.join(""))
                            }
                            return new CKEDITOR.ui.dialog.hbox(t, o, e, i), i.join("")
                        };
                        n.role = "radiogroup", n.includeLabel = !0, CKEDITOR.ui.dialog.labeledElement.call(this, t, n, i, a), this._.children = o
                    }
                }, button: function (t, n, i) {
                    if (arguments.length) {
                        "function" == typeof n && (n = n(t.getParentEditor())), e.call(this, n, {disabled: n.disabled || !1}), CKEDITOR.event.implementOn(this);
                        var o = this;
                        t.on("load", function () {
                            var e = this.getElement();
                            !function () {
                                e.on("click", function (e) {
                                    o.click(), e.data.preventDefault()
                                }), e.on("keydown", function (e) {
                                    e.data.getKeystroke() in {32: 1} && (o.click(), e.data.preventDefault())
                                })
                            }(), e.unselectable()
                        }, this);
                        var r = CKEDITOR.tools.extend({}, n);
                        delete r.style;
                        var a = CKEDITOR.tools.getNextId() + "_label";
                        CKEDITOR.ui.dialog.uiElement.call(this, t, r, i, "a", null, {
                            style: n.style,
                            href: "javascript:void(0)",
                            title: n.label,
                            hidefocus: "true",
                            "class": n["class"],
                            role: "button",
                            "aria-labelledby": a
                        }, '<span id="' + a + '" class="cke_dialog_ui_button">' + CKEDITOR.tools.htmlEncode(n.label) + "</span>")
                    }
                }, select: function (t, n, i) {
                    if (!(arguments.length < 3)) {
                        var o = e.call(this, n);
                        n.validate && (this.validate = n.validate), o.inputId = CKEDITOR.tools.getNextId() + "_select";
                        var r = function () {
                            var e = CKEDITOR.tools.extend({}, n, {id: n.id ? n.id + "_select" : CKEDITOR.tools.getNextId() + "_select"}, !0),
                                i = [], r = [], a = {
                                    id: o.inputId,
                                    "class": "cke_dialog_ui_input_select",
                                    "aria-labelledby": this._.labelId
                                };
                            i.push('<div class="cke_dialog_ui_input_', n.type, '" role="presentation"'), n.width && i.push('style="width:' + n.width + '" '), i.push(">"), void 0 !== n.size && (a.size = n.size), void 0 !== n.multiple && (a.multiple = n.multiple), s(e);
                            for (var l, c = 0; c < n.items.length && (l = n.items[c]); c++)r.push('<option value="', CKEDITOR.tools.htmlEncode(void 0 !== l[1] ? l[1] : l[0]).replace(/"/g, "&quot;"), '" /> ', CKEDITOR.tools.htmlEncode(l[0]));
                            return "undefined" != typeof e.inputStyle && (e.style = e.inputStyle), o.select = new CKEDITOR.ui.dialog.uiElement(t, e, i, "select", null, a, r.join("")), i.push("</div>"), i.join("")
                        };
                        CKEDITOR.ui.dialog.labeledElement.call(this, t, n, i, r)
                    }
                }, file: function (t, n, i) {
                    if (!(arguments.length < 3)) {
                        void 0 === n["default"] && (n["default"] = "");
                        var o = CKEDITOR.tools.extend(e.call(this, n), {definition: n, buttons: []});
                        n.validate && (this.validate = n.validate);
                        var r = function () {
                            o.frameId = CKEDITOR.tools.getNextId() + "_fileInput";
                            var e = ['<iframe frameborder="0" allowtransparency="0" class="cke_dialog_ui_input_file" role="presentation" id="', o.frameId, '" title="', n.label, '" src="javascript:void('];
                            return e.push(CKEDITOR.env.ie ? "(function(){" + encodeURIComponent("document.open();(" + CKEDITOR.tools.fixDomain + ")();document.close();") + "})()" : "0"), e.push(')"></iframe>'), e.join("")
                        };
                        t.on("load", function () {
                            var e = CKEDITOR.document.getById(o.frameId), t = e.getParent();
                            t.addClass("cke_dialog_ui_input_file")
                        }), CKEDITOR.ui.dialog.labeledElement.call(this, t, n, i, r)
                    }
                }, fileButton: function (t, n, i) {
                    var o = this;
                    if (!(arguments.length < 3)) {
                        e.call(this, n), n.validate && (this.validate = n.validate);
                        var r = CKEDITOR.tools.extend({}, n), a = r.onClick;
                        r.className = (r.className ? r.className + " " : "") + "cke_dialog_ui_button", r.onClick = function (e) {
                            var i = n["for"];
                            a && a.call(this, e) === !1 || (t.getContentElement(i[0], i[1]).submit(), this.disable())
                        }, t.on("load", function () {
                            t.getContentElement(n["for"][0], n["for"][1])._.buttons.push(o)
                        }), CKEDITOR.ui.dialog.button.call(this, t, r, i)
                    }
                }, html: function () {
                    var e = /^\s*<[\w:]+\s+([^>]*)?>/, t = /^(\s*<[\w:]+(?:\s+[^>]*)?)((?:.|\r|\n)+)$/, n = /\/$/;
                    return function (i, o, r) {
                        if (!(arguments.length < 3)) {
                            var a, s, l, c = [], d = o.html;
                            "<" != d.charAt(0) && (d = "<span>" + d + "</span>");
                            var u = o.focus;
                            if (u) {
                                var h = this.focus;
                                if (this.focus = function () {
                                        ("function" == typeof u ? u : h).call(this), this.fire("focus")
                                    }, o.isFocusable) {
                                    var f = this.isFocusable;
                                    this.isFocusable = f
                                }
                                this.keyboardFocusable = !0
                            }
                            CKEDITOR.ui.dialog.uiElement.call(this, i, o, c, "span", null, null, ""), a = c.join(""), s = a.match(e), l = d.match(t) || ["", "", ""], n.test(l[1]) && (l[1] = l[1].slice(0, -1), l[2] = "/" + l[2]), r.push([l[1], " ", s[1] || "", l[2]].join(""))
                        }
                    }
                }(), fieldset: function (e, t, n, i, o) {
                    var r = o.label, a = function () {
                        var e = [];
                        r && e.push("<legend" + (o.labelStyle ? ' style="' + o.labelStyle + '"' : "") + ">" + r + "</legend>");
                        for (var t = 0; t < n.length; t++)e.push(n[t]);
                        return e.join("")
                    };
                    this._ = {children: t}, CKEDITOR.ui.dialog.uiElement.call(this, e, o, i, "fieldset", null, null, a)
                }
            }, !0), CKEDITOR.ui.dialog.html.prototype = new CKEDITOR.ui.dialog.uiElement, CKEDITOR.ui.dialog.labeledElement.prototype = CKEDITOR.tools.extend(new CKEDITOR.ui.dialog.uiElement, {
                setLabel: function (e) {
                    var t = CKEDITOR.document.getById(this._.labelId);
                    return t.getChildCount() < 1 ? new CKEDITOR.dom.text(e, CKEDITOR.document).appendTo(t) : t.getChild(0).$.nodeValue = e, this
                }, getLabel: function () {
                    var e = CKEDITOR.document.getById(this._.labelId);
                    return !e || e.getChildCount() < 1 ? "" : e.getChild(0).getText()
                }, eventProcessors: r
            }, !0), CKEDITOR.ui.dialog.button.prototype = CKEDITOR.tools.extend(new CKEDITOR.ui.dialog.uiElement, {
                click: function () {
                    return this._.disabled ? !1 : this.fire("click", {dialog: this._.dialog})
                },
                enable: function () {
                    this._.disabled = !1;
                    var e = this.getElement();
                    e && e.removeClass("cke_disabled")
                },
                disable: function () {
                    this._.disabled = !0, this.getElement().addClass("cke_disabled")
                },
                isVisible: function () {
                    return this.getElement().getFirst().isVisible()
                },
                isEnabled: function () {
                    return !this._.disabled
                },
                eventProcessors: CKEDITOR.tools.extend({}, CKEDITOR.ui.dialog.uiElement.prototype.eventProcessors, {
                    onClick: function (e, t) {
                        this.on("click", function () {
                            t.apply(this, arguments)
                        })
                    }
                }, !0),
                accessKeyUp: function () {
                    this.click()
                },
                accessKeyDown: function () {
                    this.focus()
                },
                keyboardFocusable: !0
            }, !0), CKEDITOR.ui.dialog.textInput.prototype = CKEDITOR.tools.extend(new CKEDITOR.ui.dialog.labeledElement, {
                getInputElement: function () {
                    return CKEDITOR.document.getById(this._.inputId)
                }, focus: function () {
                    var e = this.selectParentTab();
                    setTimeout(function () {
                        var t = e.getInputElement();
                        t && t.$.focus()
                    }, 0)
                }, select: function () {
                    var e = this.selectParentTab();
                    setTimeout(function () {
                        var t = e.getInputElement();
                        t && (t.$.focus(), t.$.select())
                    }, 0)
                }, accessKeyUp: function () {
                    this.select()
                }, setValue: function (e) {
                    return !e && (e = ""), CKEDITOR.ui.dialog.uiElement.prototype.setValue.apply(this, arguments)
                }, keyboardFocusable: !0
            }, o, !0), CKEDITOR.ui.dialog.textarea.prototype = new CKEDITOR.ui.dialog.textInput, CKEDITOR.ui.dialog.select.prototype = CKEDITOR.tools.extend(new CKEDITOR.ui.dialog.labeledElement, {
                getInputElement: function () {
                    return this._.select.getElement()
                }, add: function (e, t, n) {
                    var i = new CKEDITOR.dom.element("option", this.getDialog().getParentEditor().document),
                        o = this.getInputElement().$;
                    return i.$.text = e, i.$.value = void 0 === t || null === t ? e : t, void 0 === n || null === n ? CKEDITOR.env.ie ? o.add(i.$) : o.add(i.$, null) : o.add(i.$, n), this
                }, remove: function (e) {
                    var t = this.getInputElement().$;
                    return t.remove(e), this
                }, clear: function () {
                    for (var e = this.getInputElement().$; e.length > 0;)e.remove(0);
                    return this
                }, keyboardFocusable: !0
            }, o, !0), CKEDITOR.ui.dialog.checkbox.prototype = CKEDITOR.tools.extend(new CKEDITOR.ui.dialog.uiElement, {
                getInputElement: function () {
                    return this._.checkbox.getElement()
                }, setValue: function (e, t) {
                    this.getInputElement().$.checked = e, !t && this.fire("change", {value: e})
                }, getValue: function () {
                    return this.getInputElement().$.checked
                }, accessKeyUp: function () {
                    this.setValue(!this.getValue())
                }, eventProcessors: {
                    onChange: function (e, t) {
                        return !CKEDITOR.env.ie || CKEDITOR.env.version > 8 ? r.onChange.apply(this, arguments) : (e.on("load", function () {
                            var e = this._.checkbox.getElement();
                            e.on("propertychange", function (t) {
                                t = t.data.$, "checked" == t.propertyName && this.fire("change", {value: e.$.checked})
                            }, this)
                        }, this), this.on("change", t), null)
                    }
                }, keyboardFocusable: !0
            }, o, !0), CKEDITOR.ui.dialog.radio.prototype = CKEDITOR.tools.extend(new CKEDITOR.ui.dialog.uiElement, {
                setValue: function (e, t) {
                    for (var n, i = this._.children, o = 0; o < i.length && (n = i[o]); o++)n.getElement().$.checked = n.getValue() == e;
                    !t && this.fire("change", {value: e})
                }, getValue: function () {
                    for (var e = this._.children, t = 0; t < e.length; t++)if (e[t].getElement().$.checked)return e[t].getValue();
                    return null
                }, accessKeyUp: function () {
                    var e, t = this._.children;
                    for (e = 0; e < t.length; e++)if (t[e].getElement().$.checked)return void t[e].getElement().focus();
                    t[0].getElement().focus()
                }, eventProcessors: {
                    onChange: function (e, t) {
                        return CKEDITOR.env.ie ? (e.on("load", function () {
                            for (var e = this._.children, t = this, n = 0; n < e.length; n++) {
                                var i = e[n].getElement();
                                i.on("propertychange", function (e) {
                                    e = e.data.$, "checked" == e.propertyName && this.$.checked && t.fire("change", {value: this.getAttribute("value")})
                                })
                            }
                        }, this), this.on("change", t), null) : r.onChange.apply(this, arguments)
                    }
                }
            }, o, !0), CKEDITOR.ui.dialog.file.prototype = CKEDITOR.tools.extend(new CKEDITOR.ui.dialog.labeledElement, o, {
                getInputElement: function () {
                    var e = CKEDITOR.document.getById(this._.frameId).getFrameDocument();
                    return e.$.forms.length > 0 ? new CKEDITOR.dom.element(e.$.forms[0].elements[0]) : this.getElement()
                }, submit: function () {
                    return this.getInputElement().getParent().$.submit(), this
                }, getAction: function () {
                    return this.getInputElement().getParent().$.action
                }, registerEvents: function (e) {
                    var t, n = /^on([A-Z]\w+)/, i = function (e, t, n, i) {
                        e.on("formLoaded", function () {
                            e.getInputElement().on(n, i, e)
                        })
                    };
                    for (var o in e)(t = o.match(n)) && (this.eventProcessors[o] ? this.eventProcessors[o].call(this, this._.dialog, e[o]) : i(this, this._.dialog, t[1].toLowerCase(), e[o]));
                    return this
                }, reset: function () {
                    function e() {
                        i.$.open();
                        var e = "";
                        o.size && (e = o.size - (CKEDITOR.env.ie ? 7 : 0));
                        var n = t.frameId + "_input";
                        i.$.write(['<html dir="' + l + '" lang="' + c + '"><head><title></title></head><body style="margin: 0; overflow: hidden; background: transparent;">', '<form enctype="multipart/form-data" method="POST" dir="' + l + '" lang="' + c + '" action="', CKEDITOR.tools.htmlEncode(o.action), '">', '<label id="', t.labelId, '" for="', n, '" style="display:none">', CKEDITOR.tools.htmlEncode(o.label), "</label>", '<input style="width:100%" id="', n, '" aria-labelledby="', t.labelId, '" type="file" name="', CKEDITOR.tools.htmlEncode(o.id || "cke_upload"), '" size="', CKEDITOR.tools.htmlEncode(e > 0 ? e : ""), '" />', "</form>", "</body></html>", "<script>", CKEDITOR.env.ie ? "(" + CKEDITOR.tools.fixDomain + ")();" : "", "window.parent.CKEDITOR.tools.callFunction(" + a + ");", "window.onbeforeunload = function() {window.parent.CKEDITOR.tools.callFunction(" + s + ")}", "</script>"].join("")), i.$.close();
                        for (var d = 0; d < r.length; d++)r[d].enable()
                    }

                    var t = this._, n = CKEDITOR.document.getById(t.frameId), i = n.getFrameDocument(),
                        o = t.definition, r = t.buttons, a = this.formLoadedNumber, s = this.formUnloadNumber,
                        l = t.dialog._.editor.lang.dir, c = t.dialog._.editor.langCode;
                    a || (a = this.formLoadedNumber = CKEDITOR.tools.addFunction(function () {
                        this.fire("formLoaded")
                    }, this), s = this.formUnloadNumber = CKEDITOR.tools.addFunction(function () {
                        this.getInputElement().clearCustomData()
                    }, this), this.getDialog()._.editor.on("destroy", function () {
                        CKEDITOR.tools.removeFunction(a), CKEDITOR.tools.removeFunction(s)
                    })), CKEDITOR.env.gecko ? setTimeout(e, 500) : e()
                }, getValue: function () {
                    return this.getInputElement().$.value || ""
                }, setInitValue: function () {
                    this._.initValue = ""
                }, eventProcessors: {
                    onChange: function (e, t) {
                        this._.domOnChangeRegistered || (this.on("formLoaded", function () {
                            this.getInputElement().on("change", function () {
                                this.fire("change", {value: this.getValue()})
                            }, this)
                        }, this), this._.domOnChangeRegistered = !0), this.on("change", t)
                    }
                }, keyboardFocusable: !0
            }, !0), CKEDITOR.ui.dialog.fileButton.prototype = new CKEDITOR.ui.dialog.button, CKEDITOR.ui.dialog.fieldset.prototype = CKEDITOR.tools.clone(CKEDITOR.ui.dialog.hbox.prototype), CKEDITOR.dialog.addUIElement("text", t), CKEDITOR.dialog.addUIElement("password", t), CKEDITOR.dialog.addUIElement("textarea", n), CKEDITOR.dialog.addUIElement("checkbox", n), CKEDITOR.dialog.addUIElement("radio", n), CKEDITOR.dialog.addUIElement("button", n), CKEDITOR.dialog.addUIElement("select", n), CKEDITOR.dialog.addUIElement("file", n), CKEDITOR.dialog.addUIElement("fileButton", n), CKEDITOR.dialog.addUIElement("html", n), CKEDITOR.dialog.addUIElement("fieldset", i)
        }
    }),CKEDITOR.DIALOG_RESIZE_NONE = 0,CKEDITOR.DIALOG_RESIZE_WIDTH = 1,CKEDITOR.DIALOG_RESIZE_HEIGHT = 2,CKEDITOR.DIALOG_RESIZE_BOTH = 3,function () {
        function e(e) {
            return !!this._.tabs[e][0].$.offsetHeight
        }

        function t() {
            for (var t = this._.currentTabId, n = this._.tabIdList.length, i = CKEDITOR.tools.indexOf(this._.tabIdList, t) + n, o = i - 1; o > i - n; o--)if (e.call(this, this._.tabIdList[o % n]))return this._.tabIdList[o % n];
            return null
        }

        function n() {
            for (var t = this._.currentTabId, n = this._.tabIdList.length, i = CKEDITOR.tools.indexOf(this._.tabIdList, t), o = i + 1; i + n > o; o++)if (e.call(this, this._.tabIdList[o % n]))return this._.tabIdList[o % n];
            return null
        }

        function i(e, t) {
            for (var n = e.$.getElementsByTagName("input"), i = 0, o = n.length; o > i; i++) {
                var r = new CKEDITOR.dom.element(n[i]);
                "text" == r.getAttribute("type").toLowerCase() && (t ? (r.setAttribute("value", r.getCustomData("fake_value") || ""), r.removeCustomData("fake_value")) : (r.setCustomData("fake_value", r.getAttribute("value")), r.setAttribute("value", "")))
            }
        }

        function o(e, t) {
            var n = this.getInputElement();
            n && (e ? n.removeAttribute("aria-invalid") : n.setAttribute("aria-invalid", !0)), e || (this.select ? this.select() : this.focus()), t && alert(t), this.fire("validated", {
                valid: e,
                msg: t
            })
        }

        function r() {
            var e = this.getInputElement();
            e && e.removeAttribute("aria-invalid")
        }

        function a(e) {
            var t = CKEDITOR.dom.element.createFromHtml(CKEDITOR.addTemplate("dialog", p).output({
                id: CKEDITOR.tools.getNextNumber(),
                editorId: e.id,
                langDir: e.lang.dir,
                langCode: e.langCode,
                editorDialogClass: "cke_editor_" + e.name.replace(/\./g, "\\.") + "_dialog",
                closeTitle: e.lang.common.close,
                hidpi: CKEDITOR.env.hidpi ? "cke_hidpi" : ""
            })), n = t.getChild([0, 0, 0, 0, 0]), i = n.getChild(0), o = n.getChild(1);
            if (CKEDITOR.env.ie && !CKEDITOR.env.quirks) {
                var r = "javascript:void(function(){" + encodeURIComponent("document.open();(" + CKEDITOR.tools.fixDomain + ")();document.close();") + "}())",
                    a = CKEDITOR.dom.element.createFromHtml('<iframe frameBorder="0" class="cke_iframe_shim" src="' + r + '" tabIndex="-1"></iframe>');
                a.appendTo(n.getParent())
            }
            return i.unselectable(), o.unselectable(), {
                element: t,
                parts: {
                    dialog: t.getChild(0),
                    title: i,
                    close: o,
                    tabs: n.getChild(2),
                    contents: n.getChild([3, 0, 0, 0]),
                    footer: n.getChild([3, 0, 1, 0])
                }
            }
        }

        function s(e, t, n) {
            this.element = t, this.focusIndex = n, this.tabIndex = 0, this.isFocusable = function () {
                return !t.getAttribute("disabled") && t.isVisible()
            }, this.focus = function () {
                e._.currentFocusIndex = this.focusIndex, this.element.focus()
            }, t.on("keydown", function (e) {
                e.data.getKeystroke() in {32: 1, 13: 1} && this.fire("click")
            }), t.on("focus", function () {
                this.fire("mouseover")
            }), t.on("blur", function () {
                this.fire("mouseout")
            })
        }

        function l(e) {
            function t() {
                e.layout()
            }

            var n = CKEDITOR.document.getWindow();
            n.on("resize", t), e.on("hide", function () {
                n.removeListener("resize", t)
            })
        }

        function c(e, t) {
            this._ = {dialog: e}, CKEDITOR.tools.extend(this, t)
        }

        function d(e) {
            function t(t) {
                var n, l, c = e.getSize(), d = CKEDITOR.document.getWindow().getViewPaneSize(), u = t.data.$.screenX,
                    h = t.data.$.screenY, f = u - i.x, m = h - i.y;
                i = {
                    x: u,
                    y: h
                }, o.x += f, o.y += m, n = o.x + s[3] < a ? -s[3] : o.x - s[1] > d.width - c.width - a ? d.width - c.width + ("rtl" == r.lang.dir ? 0 : s[1]) : o.x, l = o.y + s[0] < a ? -s[0] : o.y - s[2] > d.height - c.height - a ? d.height - c.height + s[2] : o.y, e.move(n, l, 1), t.data.preventDefault()
            }

            function n() {
                if (CKEDITOR.document.removeListener("mousemove", t), CKEDITOR.document.removeListener("mouseup", n), CKEDITOR.env.ie6Compat) {
                    var e = R.getChild(0).getFrameDocument();
                    e.removeListener("mousemove", t), e.removeListener("mouseup", n)
                }
            }

            var i = null, o = null, r = e.getParentEditor(), a = r.config.dialog_magnetDistance,
                s = CKEDITOR.skin.margins || [0, 0, 0, 0];
            "undefined" == typeof a && (a = 20), e.parts.title.on("mousedown", function (r) {
                if (i = {
                        x: r.data.$.screenX,
                        y: r.data.$.screenY
                    }, CKEDITOR.document.on("mousemove", t), CKEDITOR.document.on("mouseup", n), o = e.getPosition(), CKEDITOR.env.ie6Compat) {
                    var a = R.getChild(0).getFrameDocument();
                    a.on("mousemove", t), a.on("mouseup", n)
                }
                r.data.preventDefault()
            }, e)
        }

        function u(e) {
            function t(t) {
                var n = "rtl" == u.lang.dir, d = (t.data.$.screenX - l.x) * (n ? -1 : 1), h = t.data.$.screenY - l.y,
                    f = c.width, m = c.height, E = f + d * (e._.moved ? 1 : 2), g = m + h * (e._.moved ? 1 : 2),
                    p = e._.element.getFirst(), T = n && p.getComputedStyle("right"), C = e.getPosition();
                C.y + g > s.height && (g = s.height - C.y), (n ? T : C.x) + E > s.width && (E = s.width - (n ? T : C.x)), (o == CKEDITOR.DIALOG_RESIZE_WIDTH || o == CKEDITOR.DIALOG_RESIZE_BOTH) && (f = Math.max(i.minWidth || 0, E - r)), (o == CKEDITOR.DIALOG_RESIZE_HEIGHT || o == CKEDITOR.DIALOG_RESIZE_BOTH) && (m = Math.max(i.minHeight || 0, g - a)), e.resize(f, m), e._.moved || e.layout(), t.data.preventDefault()
            }

            function n() {
                if (CKEDITOR.document.removeListener("mouseup", n), CKEDITOR.document.removeListener("mousemove", t), d && (d.remove(), d = null), CKEDITOR.env.ie6Compat) {
                    var e = R.getChild(0).getFrameDocument();
                    e.removeListener("mouseup", n), e.removeListener("mousemove", t)
                }
            }

            var i = e.definition, o = i.resizable;
            if (o != CKEDITOR.DIALOG_RESIZE_NONE) {
                var r, a, s, l, c, d, u = e.getParentEditor(), h = CKEDITOR.tools.addFunction(function (i) {
                    c = e.getSize();
                    var o = e.parts.contents, u = o.$.getElementsByTagName("iframe").length;
                    if (u && (d = CKEDITOR.dom.element.createFromHtml('<div class="cke_dialog_resize_cover" style="height: 100%; position: absolute; width: 100%;"></div>'), o.append(d)), a = c.height - e.parts.contents.getSize("height", !(CKEDITOR.env.gecko || CKEDITOR.env.ie && CKEDITOR.env.quirks)), r = c.width - e.parts.contents.getSize("width", 1), l = {
                            x: i.screenX,
                            y: i.screenY
                        }, s = CKEDITOR.document.getWindow().getViewPaneSize(), CKEDITOR.document.on("mousemove", t), CKEDITOR.document.on("mouseup", n), CKEDITOR.env.ie6Compat) {
                        var h = R.getChild(0).getFrameDocument();
                        h.on("mousemove", t), h.on("mouseup", n)
                    }
                    i.preventDefault && i.preventDefault()
                });
                e.on("load", function () {
                    var t = "";
                    o == CKEDITOR.DIALOG_RESIZE_WIDTH ? t = " cke_resizer_horizontal" : o == CKEDITOR.DIALOG_RESIZE_HEIGHT && (t = " cke_resizer_vertical");
                    var n = CKEDITOR.dom.element.createFromHtml('<div class="cke_resizer' + t + " cke_resizer_" + u.lang.dir + '" title="' + CKEDITOR.tools.htmlEncode(u.lang.common.resize) + '" onmousedown="CKEDITOR.tools.callFunction(' + h + ', event )">' + ("ltr" == u.lang.dir ? "\u25e2" : "\u25e3") + "</div>");
                    e.parts.footer.append(n, 1)
                }), u.on("destroy", function () {
                    CKEDITOR.tools.removeFunction(h)
                })
            }
        }

        function h(e) {
            e.data.preventDefault(1)
        }

        function f(e) {
            var t = CKEDITOR.document.getWindow(), n = e.config, i = n.dialog_backgroundCoverColor || "white",
                o = n.dialog_backgroundCoverOpacity, r = n.baseFloatZIndex, a = CKEDITOR.tools.genKey(i, o, r),
                s = b[a];
            if (s) s.show(); else {
                var l = ['<div tabIndex="-1" style="position: ', CKEDITOR.env.ie6Compat ? "absolute" : "fixed", "; z-index: ", r, "; top: 0px; left: 0px; ", CKEDITOR.env.ie6Compat ? "" : "background-color: " + i, '" class="cke_dialog_background_cover">'];
                if (CKEDITOR.env.ie6Compat) {
                    var c = "<html><body style=\\'background-color:" + i + ";\\'></body></html>";
                    l.push('<iframe hidefocus="true" frameborder="0" id="cke_dialog_background_iframe" src="javascript:'), l.push("void((function(){" + encodeURIComponent("document.open();(" + CKEDITOR.tools.fixDomain + ")();document.write( '" + c + "' );document.close();") + "})())"), l.push('" style="position:absolute;left:0;top:0;width:100%;height: 100%;filter: progid:DXImageTransform.Microsoft.Alpha(opacity=0)"></iframe>')
                }
                l.push("</div>"), s = CKEDITOR.dom.element.createFromHtml(l.join("")), s.setOpacity(void 0 !== o ? o : .5), s.on("keydown", h), s.on("keypress", h), s.on("keyup", h), s.appendTo(CKEDITOR.document.getBody()), b[a] = s
            }
            e.focusManager.add(s), R = s;
            var d = function () {
                var e = t.getViewPaneSize();
                s.setStyles({width: e.width + "px", height: e.height + "px"})
            }, u = function () {
                var e = t.getScrollPosition(), n = CKEDITOR.dialog._.currentTop;
                if (s.setStyles({left: e.x + "px", top: e.y + "px"}), n)do {
                    var i = n.getPosition();
                    n.move(i.x, i.y)
                } while (n = n._.parentDialog)
            };
            if (D = d, t.on("resize", d), d(), CKEDITOR.env.mac && CKEDITOR.env.webkit || s.focus(), CKEDITOR.env.ie6Compat) {
                var f = function () {
                    u(), arguments.callee.prevScrollHandler.apply(this, arguments)
                };
                t.$.setTimeout(function () {
                    f.prevScrollHandler = window.onscroll || function () {
                        }, window.onscroll = f
                }, 0), u()
            }
        }

        function m(e) {
            if (R) {
                e.focusManager.remove(R);
                var t = CKEDITOR.document.getWindow();
                R.hide(), t.removeListener("resize", D), CKEDITOR.env.ie6Compat && t.$.setTimeout(function () {
                    var e = window.onscroll && window.onscroll.prevScrollHandler;
                    window.onscroll = e || null
                }, 0), D = null
            }
        }

        function E() {
            for (var e in b)b[e].remove();
            b = {}
        }

        var g = CKEDITOR.tools.cssLength,
            p = '<div class="cke_reset_all {editorId} {editorDialogClass} {hidpi}" dir="{langDir}" lang="{langCode}" role="dialog" aria-labelledby="cke_dialog_title_{id}"><table class="cke_dialog ' + CKEDITOR.env.cssClass + ' cke_{langDir}" style="position:absolute" role="presentation"><tr><td role="presentation"><div class="cke_dialog_body" role="presentation"><div id="cke_dialog_title_{id}" class="cke_dialog_title" role="presentation"></div><a id="cke_dialog_close_button_{id}" class="cke_dialog_close_button" href="javascript:void(0)" title="{closeTitle}" role="button"><span class="cke_label">X</span></a><div id="cke_dialog_tabs_{id}" class="cke_dialog_tabs" role="tablist"></div><table class="cke_dialog_contents" role="presentation"><tr><td id="cke_dialog_contents_{id}" class="cke_dialog_contents_body" role="presentation"></td></tr><tr><td id="cke_dialog_footer_{id}" class="cke_dialog_footer" role="presentation"></td></tr></table></div></td></tr></table></div>';
        CKEDITOR.dialog = function (e, i) {
            function s() {
                var e = _._.focusList;
                e.sort(function (e, t) {
                    return e.tabIndex != t.tabIndex ? t.tabIndex - e.tabIndex : e.focusIndex - t.focusIndex
                });
                for (var t = e.length, n = 0; t > n; n++)e[n].focusIndex = n
            }

            function l(e) {
                var t = _._.focusList;
                if (e = e || 0, !(t.length < 1)) {
                    var n = _._.currentFocusIndex;
                    try {
                        t[n].getInputElement().$.blur()
                    } catch (i) {
                    }
                    for (var o = (n + e + t.length) % t.length, r = o; e && !t[r].isFocusable() && (r = (r + e + t.length) % t.length, r != o););
                    t[r].focus(), "text" == t[r].type && t[r].select()
                }
            }

            function c(i) {
                if (_ == CKEDITOR.dialog._.currentTop) {
                    var o, r = i.data.getKeystroke(), a = "rtl" == e.lang.dir;
                    if (m = E = 0, 9 == r || r == CKEDITOR.SHIFT + 9) {
                        var s = r == CKEDITOR.SHIFT + 9;
                        if (_._.tabBarMode) {
                            var c = s ? t.call(_) : n.call(_);
                            _.selectPage(c), _._.tabs[c][0].focus()
                        } else l(s ? -1 : 1);
                        m = 1
                    } else if (r == CKEDITOR.ALT + 121 && !_._.tabBarMode && _.getPageCount() > 1) _._.tabBarMode = !0, _._.tabs[_._.currentTabId][0].focus(), m = 1; else if (37 != r && 39 != r || !_._.tabBarMode)if (13 != r && 32 != r || !_._.tabBarMode)if (13 == r) {
                        var d = i.data.getTarget();
                        d.is("a", "button", "select", "textarea") || d.is("input") && "button" == d.$.type || (o = this.getButton("ok"), o && CKEDITOR.tools.setTimeout(o.click, 0, o), m = 1), E = 1
                    } else {
                        if (27 != r)return;
                        o = this.getButton("cancel"), o ? CKEDITOR.tools.setTimeout(o.click, 0, o) : this.fire("cancel", {hide: !0}).hide !== !1 && this.hide(), E = 1
                    } else this.selectPage(this._.currentTabId), this._.tabBarMode = !1, this._.currentFocusIndex = -1, l(1), m = 1; else c = r == (a ? 39 : 37) ? t.call(_) : n.call(_), _.selectPage(c), _._.tabs[c][0].focus(), m = 1;
                    h(i)
                }
            }

            function h(e) {
                m ? e.data.preventDefault(1) : E && e.data.stopPropagation()
            }

            var f, m, E, g = CKEDITOR.dialog._.dialogDefinitions[i], p = CKEDITOR.tools.clone(T),
                C = e.config.dialog_buttonsOrder || "OS", v = e.lang.dir, I = {};
            ("OS" == C && CKEDITOR.env.mac || "rtl" == C && "ltr" == v || "ltr" == C && "rtl" == v) && p.buttons.reverse(), g = CKEDITOR.tools.extend(g(e), p), g = CKEDITOR.tools.clone(g), g = new O(this, g);
            var D = a(e);
            this._ = {
                editor: e,
                element: D.element,
                name: i,
                contentSize: {width: 0, height: 0},
                size: {width: 0, height: 0},
                contents: {},
                buttons: {},
                accessKeyMap: {},
                tabs: {},
                tabIdList: [],
                currentTabId: null,
                currentTabIndex: null,
                pageCount: 0,
                lastTab: null,
                tabBarMode: !1,
                focusList: [],
                currentFocusIndex: 0,
                hasFocus: !1
            }, this.parts = D.parts, CKEDITOR.tools.setTimeout(function () {
                e.fire("ariaWidget", this.parts.contents)
            }, 0, this);
            var R = {position: CKEDITOR.env.ie6Compat ? "absolute" : "fixed", top: 0, visibility: "hidden"};
            if (R["rtl" == v ? "right" : "left"] = 0, this.parts.dialog.setStyles(R), CKEDITOR.event.call(this), this.definition = g = CKEDITOR.fire("dialogDefinition", {
                    name: i,
                    definition: g
                }, e).definition, !("removeDialogTabs" in e._) && e.config.removeDialogTabs) {
                var b = e.config.removeDialogTabs.split(";");
                for (f = 0; f < b.length; f++) {
                    var K = b[f].split(":");
                    if (2 == K.length) {
                        var y = K[0];
                        I[y] || (I[y] = []), I[y].push(K[1])
                    }
                }
                e._.removeDialogTabs = I
            }
            if (e._.removeDialogTabs && (I = e._.removeDialogTabs[i]))for (f = 0; f < I.length; f++)g.removeContents(I[f]);
            g.onLoad && this.on("load", g.onLoad), g.onShow && this.on("show", g.onShow), g.onHide && this.on("hide", g.onHide), g.onOk && this.on("ok", function (t) {
                e.fire("saveSnapshot"), setTimeout(function () {
                    e.fire("saveSnapshot")
                }, 0), g.onOk.call(this, t) === !1 && (t.data.hide = !1)
            }), g.onCancel && this.on("cancel", function (e) {
                g.onCancel.call(this, e) === !1 && (e.data.hide = !1)
            });
            var _ = this, k = function (e) {
                var t = _._.contents, n = !1;
                for (var i in t)for (var o in t[i])if (n = e.call(this, t[i][o]))return
            };
            this.on("ok", function (e) {
                k(function (t) {
                    if (t.validate) {
                        var n = t.validate(this), i = "string" == typeof n || n === !1;
                        return i && (e.data.hide = !1, e.stop()), o.call(t, !i, "string" == typeof n ? n : void 0), i
                    }
                })
            }, this, null, 0), this.on("cancel", function (t) {
                k(function (n) {
                    return n.isChanged() ? (e.config.dialog_noConfirmCancel || confirm(e.lang.common.confirmCancel) || (t.data.hide = !1), !0) : void 0
                })
            }, this, null, 0), this.parts.close.on("click", function (e) {
                this.fire("cancel", {hide: !0}).hide !== !1 && this.hide(), e.data.preventDefault()
            }, this), this.changeFocus = l;
            var N = this._.element;
            for (e.focusManager.add(N, 1), this.on("show", function () {
                N.on("keydown", c, this), CKEDITOR.env.gecko && N.on("keypress", h, this)
            }), this.on("hide", function () {
                N.removeListener("keydown", c), CKEDITOR.env.gecko && N.removeListener("keypress", h), k(function (e) {
                    r.apply(e)
                })
            }), this.on("iframeAdded", function (e) {
                var t = new CKEDITOR.dom.document(e.data.iframe.$.contentWindow.document);
                t.on("keydown", c, this, null, 0)
            }), this.on("show", function () {
                if (s(), e.config.dialog_startupFocusTab && _._.pageCount > 1) _._.tabBarMode = !0, _._.tabs[_._.currentTabId][0].focus(); else if (!this._.hasFocus)if (this._.currentFocusIndex = -1, g.onFocus) {
                    var t = g.onFocus.call(this);
                    t && t.focus()
                } else l(1)
            }, this, null, 4294967295), CKEDITOR.env.ie6Compat && this.on("load", function () {
                var e = this.getElement(), t = e.getFirst();
                t.remove(), t.appendTo(e)
            }, this), d(this), u(this), new CKEDITOR.dom.text(g.title, CKEDITOR.document).appendTo(this.parts.title), f = 0; f < g.contents.length; f++) {
                var w = g.contents[f];
                w && this.addPage(w)
            }
            this.parts.tabs.on("click", function (e) {
                var t = e.data.getTarget();
                if (t.hasClass("cke_dialog_tab")) {
                    var n = t.$.id;
                    this.selectPage(n.substring(4, n.lastIndexOf("_"))), this._.tabBarMode && (this._.tabBarMode = !1, this._.currentFocusIndex = -1, l(1)), e.data.preventDefault()
                }
            }, this);
            var S = [], x = CKEDITOR.dialog._.uiElementBuilders.hbox.build(this, {
                type: "hbox",
                className: "cke_dialog_footer_buttons",
                widths: [],
                children: g.buttons
            }, S).getChild();
            for (this.parts.footer.setHtml(S.join("")), f = 0; f < x.length; f++)this._.buttons[x[f].id] = x[f]
        }, CKEDITOR.dialog.prototype = {
            destroy: function () {
                this.hide(), this._.element.remove()
            }, resize: function () {
                return function (e, t) {
                    if (!this._.contentSize || this._.contentSize.width != e || this._.contentSize.height != t) {
                        CKEDITOR.dialog.fire("resize", {
                            dialog: this,
                            width: e,
                            height: t
                        }, this._.editor), this.fire("resize", {width: e, height: t}, this._.editor);
                        var n = this.parts.contents;
                        n.setStyles({
                            width: e + "px",
                            height: t + "px"
                        }), "rtl" == this._.editor.lang.dir && this._.position && (this._.position.x = CKEDITOR.document.getWindow().getViewPaneSize().width - this._.contentSize.width - parseInt(this._.element.getFirst().getStyle("right"), 10)), this._.contentSize = {
                            width: e,
                            height: t
                        }
                    }
                }
            }(), getSize: function () {
                var e = this._.element.getFirst();
                return {width: e.$.offsetWidth || 0, height: e.$.offsetHeight || 0}
            }, move: function (e, t, n) {
                var i = this._.element.getFirst(), o = "rtl" == this._.editor.lang.dir,
                    r = "fixed" == i.getComputedStyle("position");
                if (CKEDITOR.env.ie && i.setStyle("zoom", "100%"), !r || !this._.position || this._.position.x != e || this._.position.y != t) {
                    if (this._.position = {x: e, y: t}, !r) {
                        var a = CKEDITOR.document.getWindow().getScrollPosition();
                        e += a.x, t += a.y
                    }
                    if (o) {
                        var s = this.getSize(), l = CKEDITOR.document.getWindow().getViewPaneSize();
                        e = l.width - s.width - e
                    }
                    var c = {top: (t > 0 ? t : 0) + "px"};
                    c[o ? "right" : "left"] = (e > 0 ? e : 0) + "px", i.setStyles(c), n && (this._.moved = 1)
                }
            }, getPosition: function () {
                return CKEDITOR.tools.extend({}, this._.position)
            }, show: function () {
                var e = this._.element, t = this.definition;
                if (e.getParent() && e.getParent().equals(CKEDITOR.document.getBody()) ? e.setStyle("display", "block") : e.appendTo(CKEDITOR.document.getBody()), this.resize(this._.contentSize && this._.contentSize.width || t.width || t.minWidth, this._.contentSize && this._.contentSize.height || t.height || t.minHeight), this.reset(), this.selectPage(this.definition.contents[0].id), null === CKEDITOR.dialog._.currentZIndex && (CKEDITOR.dialog._.currentZIndex = this._.editor.config.baseFloatZIndex), this._.element.getFirst().setStyle("z-index", CKEDITOR.dialog._.currentZIndex += 10), null === CKEDITOR.dialog._.currentTop) CKEDITOR.dialog._.currentTop = this, this._.parentDialog = null, f(this._.editor); else {
                    this._.parentDialog = CKEDITOR.dialog._.currentTop;
                    var n = this._.parentDialog.getElement().getFirst();
                    n.$.style.zIndex -= Math.floor(this._.editor.config.baseFloatZIndex / 2), CKEDITOR.dialog._.currentTop = this
                }
                e.on("keydown", y), e.on("keyup", _), this._.hasFocus = !1;
                for (var i in t.contents)if (t.contents[i]) {
                    var o = t.contents[i], r = this._.tabs[o.id], a = o.requiredContent, s = 0;
                    if (r) {
                        for (var c in this._.contents[o.id]) {
                            var d = this._.contents[o.id][c];
                            "hbox" != d.type && "vbox" != d.type && d.getInputElement() && (d.requiredContent && !this._.editor.activeFilter.check(d.requiredContent) ? d.disable() : (d.enable(), s++))
                        }
                        !s || a && !this._.editor.activeFilter.check(a) ? r[0].addClass("cke_dialog_tab_disabled") : r[0].removeClass("cke_dialog_tab_disabled")
                    }
                }
                CKEDITOR.tools.setTimeout(function () {
                    this.layout(), l(this), this.parts.dialog.setStyle("visibility", ""), this.fireOnce("load", {}), CKEDITOR.ui.fire("ready", this), this.fire("show", {}), this._.editor.fire("dialogShow", this), this._.parentDialog || this._.editor.focusManager.lock(), this.foreach(function (e) {
                        e.setInitValue && e.setInitValue()
                    })
                }, 100, this)
            }, layout: function () {
                var e = this.parts.dialog, t = this.getSize(), n = CKEDITOR.document.getWindow(),
                    i = n.getViewPaneSize(), o = (i.width - t.width) / 2, r = (i.height - t.height) / 2;
                CKEDITOR.env.ie6Compat || (t.height + (r > 0 ? r : 0) > i.height || t.width + (o > 0 ? o : 0) > i.width ? e.setStyle("position", "absolute") : e.setStyle("position", "fixed")), this.move(this._.moved ? this._.position.x : o, this._.moved ? this._.position.y : r)
            }, foreach: function (e) {
                for (var t in this._.contents)for (var n in this._.contents[t])e.call(this, this._.contents[t][n]);
                return this
            }, reset: function () {
                var e = function (e) {
                    e.reset && e.reset(1)
                };
                return function () {
                    return this.foreach(e), this
                }
            }(), setupContent: function () {
                var e = arguments;
                this.foreach(function (t) {
                    t.setup && t.setup.apply(t, e)
                })
            }, commitContent: function () {
                var e = arguments;
                this.foreach(function (t) {
                    CKEDITOR.env.ie && this._.currentFocusIndex == t.focusIndex && t.getInputElement().$.blur(), t.commit && t.commit.apply(t, e)
                })
            }, hide: function () {
                if (this.parts.dialog.isVisible()) {
                    this.fire("hide", {}), this._.editor.fire("dialogHide", this), this.selectPage(this._.tabIdList[0]);
                    var e = this._.element;
                    for (e.setStyle("display", "none"), this.parts.dialog.setStyle("visibility", "hidden"), N(this); CKEDITOR.dialog._.currentTop != this;)CKEDITOR.dialog._.currentTop.hide();
                    if (this._.parentDialog) {
                        var t = this._.parentDialog.getElement().getFirst();
                        t.setStyle("z-index", parseInt(t.$.style.zIndex, 10) + Math.floor(this._.editor.config.baseFloatZIndex / 2))
                    } else m(this._.editor);
                    if (CKEDITOR.dialog._.currentTop = this._.parentDialog, this._.parentDialog) CKEDITOR.dialog._.currentZIndex -= 10; else {
                        CKEDITOR.dialog._.currentZIndex = null, e.removeListener("keydown", y), e.removeListener("keyup", _);
                        var n = this._.editor;
                        n.focus(), setTimeout(function () {
                            n.focusManager.unlock(), CKEDITOR.env.iOS && n.window.focus()
                        }, 0)
                    }
                    delete this._.parentDialog, this.foreach(function (e) {
                        e.resetInitValue && e.resetInitValue()
                    })
                }
            }, addPage: function (e) {
                if (!e.requiredContent || this._.editor.filter.check(e.requiredContent)) {
                    for (var t, n = [], i = e.label ? ' title="' + CKEDITOR.tools.htmlEncode(e.label) + '"' : "", o = CKEDITOR.dialog._.uiElementBuilders.vbox.build(this, {
                        type: "vbox",
                        className: "cke_dialog_page_contents",
                        children: e.elements,
                        expand: !!e.expand,
                        padding: e.padding,
                        style: e.style || "width: 100%;"
                    }, n), r = this._.contents[e.id] = {}, a = o.getChild(), s = 0; t = a.shift();)t.notAllowed || "hbox" == t.type || "vbox" == t.type || s++, r[t.id] = t, "function" == typeof t.getChild && a.push.apply(a, t.getChild());
                    s || (e.hidden = !0);
                    var l = CKEDITOR.dom.element.createFromHtml(n.join(""));
                    l.setAttribute("role", "tabpanel");
                    var c = CKEDITOR.env, d = "cke_" + e.id + "_" + CKEDITOR.tools.getNextNumber(),
                        u = CKEDITOR.dom.element.createFromHtml(['<a class="cke_dialog_tab"', this._.pageCount > 0 ? " cke_last" : "cke_first", i, e.hidden ? ' style="display:none"' : "", ' id="', d, '"', c.gecko && !c.hc ? "" : ' href="javascript:void(0)"', ' tabIndex="-1"', ' hidefocus="true"', ' role="tab">', e.label, "</a>"].join(""));
                    l.setAttribute("aria-labelledby", d), this._.tabs[e.id] = [u, l], this._.tabIdList.push(e.id), !e.hidden && this._.pageCount++, this._.lastTab = u, this.updateStyle(), l.setAttribute("name", e.id), l.appendTo(this.parts.contents), u.unselectable(), this.parts.tabs.append(u), e.accessKey && (k(this, this, "CTRL+" + e.accessKey, S, w), this._.accessKeyMap["CTRL+" + e.accessKey] = e.id)
                }
            }, selectPage: function (e) {
                if (this._.currentTabId != e && !this._.tabs[e][0].hasClass("cke_dialog_tab_disabled") && this.fire("selectPage", {
                        page: e,
                        currentPage: this._.currentTabId
                    }) !== !1) {
                    for (var t in this._.tabs) {
                        var n = this._.tabs[t][0], o = this._.tabs[t][1];
                        t != e && (n.removeClass("cke_dialog_tab_selected"), o.hide()), o.setAttribute("aria-hidden", t != e)
                    }
                    var r = this._.tabs[e];
                    r[0].addClass("cke_dialog_tab_selected"), CKEDITOR.env.ie6Compat || CKEDITOR.env.ie7Compat ? (i(r[1]), r[1].show(), setTimeout(function () {
                        i(r[1], 1)
                    }, 0)) : r[1].show(), this._.currentTabId = e, this._.currentTabIndex = CKEDITOR.tools.indexOf(this._.tabIdList, e)
                }
            }, updateStyle: function () {
                this.parts.dialog[(1 === this._.pageCount ? "add" : "remove") + "Class"]("cke_single_page")
            }, hidePage: function (e) {
                var n = this._.tabs[e] && this._.tabs[e][0];
                n && 1 != this._.pageCount && n.isVisible() && (e == this._.currentTabId && this.selectPage(t.call(this)), n.hide(), this._.pageCount--, this.updateStyle())
            }, showPage: function (e) {
                var t = this._.tabs[e] && this._.tabs[e][0];
                t && (t.show(), this._.pageCount++, this.updateStyle())
            }, getElement: function () {
                return this._.element
            }, getName: function () {
                return this._.name
            }, getContentElement: function (e, t) {
                var n = this._.contents[e];
                return n && n[t]
            }, getValueOf: function (e, t) {
                return this.getContentElement(e, t).getValue()
            }, setValueOf: function (e, t, n) {
                return this.getContentElement(e, t).setValue(n)
            }, getButton: function (e) {
                return this._.buttons[e]
            }, click: function (e) {
                return this._.buttons[e].click()
            }, disableButton: function (e) {
                return this._.buttons[e].disable()
            }, enableButton: function (e) {
                return this._.buttons[e].enable()
            }, getPageCount: function () {
                return this._.pageCount
            }, getParentEditor: function () {
                return this._.editor
            }, getSelectedElement: function () {
                return this.getParentEditor().getSelection().getSelectedElement()
            }, addFocusable: function (e, t) {
                if ("undefined" == typeof t) t = this._.focusList.length, this._.focusList.push(new s(this, e, t)); else {
                    this._.focusList.splice(t, 0, new s(this, e, t));
                    for (var n = t + 1; n < this._.focusList.length; n++)this._.focusList[n].focusIndex++
                }
            }
        }, CKEDITOR.tools.extend(CKEDITOR.dialog, {
            add: function (e, t) {
                this._.dialogDefinitions[e] && "function" != typeof t || (this._.dialogDefinitions[e] = t)
            }, exists: function (e) {
                return !!this._.dialogDefinitions[e]
            }, getCurrent: function () {
                return CKEDITOR.dialog._.currentTop
            }, isTabEnabled: function (e, t, n) {
                var i = e.config.removeDialogTabs;
                return !(i && i.match(new RegExp("(?:^|;)" + t + ":" + n + "(?:$|;)", "i")))
            }, okButton: function () {
                var e = function (e, t) {
                    return t = t || {}, CKEDITOR.tools.extend({
                        id: "ok",
                        type: "button",
                        label: e.lang.common.ok,
                        "class": "cke_dialog_ui_button_ok",
                        onClick: function (e) {
                            var t = e.data.dialog;
                            t.fire("ok", {hide: !0}).hide !== !1 && t.hide()
                        }
                    }, t, !0)
                };
                return e.type = "button", e.override = function (t) {
                    return CKEDITOR.tools.extend(function (n) {
                        return e(n, t)
                    }, {type: "button"}, !0)
                }, e
            }(), cancelButton: function () {
                var e = function (e, t) {
                    return t = t || {}, CKEDITOR.tools.extend({
                        id: "cancel",
                        type: "button",
                        label: e.lang.common.cancel,
                        "class": "cke_dialog_ui_button_cancel",
                        onClick: function (e) {
                            var t = e.data.dialog;
                            t.fire("cancel", {hide: !0}).hide !== !1 && t.hide()
                        }
                    }, t, !0)
                };
                return e.type = "button", e.override = function (t) {
                    return CKEDITOR.tools.extend(function (n) {
                        return e(n, t)
                    }, {type: "button"}, !0)
                }, e
            }(), addUIElement: function (e, t) {
                this._.uiElementBuilders[e] = t
            }
        }), CKEDITOR.dialog._ = {
            uiElementBuilders: {},
            dialogDefinitions: {},
            currentTop: null,
            currentZIndex: null
        }, CKEDITOR.event.implementOn(CKEDITOR.dialog), CKEDITOR.event.implementOn(CKEDITOR.dialog.prototype);
        var T = {
            resizable: CKEDITOR.DIALOG_RESIZE_BOTH,
            minWidth: 600,
            minHeight: 400,
            buttons: [CKEDITOR.dialog.okButton, CKEDITOR.dialog.cancelButton]
        }, C = function (e, t, n) {
            for (var i, o = 0; i = e[o]; o++) {
                if (i.id == t)return i;
                if (n && i[n]) {
                    var r = C(i[n], t, n);
                    if (r)return r
                }
            }
            return null
        }, v = function (e, t, n, i, o) {
            if (n) {
                for (var r, a = 0; r = e[a]; a++) {
                    if (r.id == n)return e.splice(a, 0, t), t;
                    if (i && r[i]) {
                        var s = v(r[i], t, n, i, !0);
                        if (s)return s
                    }
                }
                if (o)return null
            }
            return e.push(t), t
        }, I = function (e, t, n) {
            for (var i, o = 0; i = e[o]; o++) {
                if (i.id == t)return e.splice(o, 1);
                if (n && i[n]) {
                    var r = I(i[n], t, n);
                    if (r)return r
                }
            }
            return null
        }, O = function (e, t) {
            this.dialog = e;
            for (var n, i = t.contents, o = 0; n = i[o]; o++)i[o] = n && new c(e, n);
            CKEDITOR.tools.extend(this, t)
        };
        O.prototype = {
            getContents: function (e) {
                return C(this.contents, e)
            }, getButton: function (e) {
                return C(this.buttons, e)
            }, addContents: function (e, t) {
                return v(this.contents, e, t)
            }, addButton: function (e, t) {
                return v(this.buttons, e, t)
            }, removeContents: function (e) {
                I(this.contents, e)
            }, removeButton: function (e) {
                I(this.buttons, e)
            }
        }, c.prototype = {
            get: function (e) {
                return C(this.elements, e, "children")
            }, add: function (e, t) {
                return v(this.elements, e, t, "children")
            }, remove: function (e) {
                I(this.elements, e, "children")
            }
        };
        var D, R, b = {}, K = {}, y = function (e) {
            var t = e.data.$.ctrlKey || e.data.$.metaKey, n = e.data.$.altKey, i = e.data.$.shiftKey,
                o = String.fromCharCode(e.data.$.keyCode),
                r = K[(t ? "CTRL+" : "") + (n ? "ALT+" : "") + (i ? "SHIFT+" : "") + o];
            r && r.length && (r = r[r.length - 1], r.keydown && r.keydown.call(r.uiElement, r.dialog, r.key), e.data.preventDefault())
        }, _ = function (e) {
            var t = e.data.$.ctrlKey || e.data.$.metaKey, n = e.data.$.altKey, i = e.data.$.shiftKey,
                o = String.fromCharCode(e.data.$.keyCode),
                r = K[(t ? "CTRL+" : "") + (n ? "ALT+" : "") + (i ? "SHIFT+" : "") + o];
            r && r.length && (r = r[r.length - 1], r.keyup && (r.keyup.call(r.uiElement, r.dialog, r.key), e.data.preventDefault()))
        }, k = function (e, t, n, i, o) {
            var r = K[n] || (K[n] = []);
            r.push({uiElement: e, dialog: t, key: n, keyup: o || e.accessKeyUp, keydown: i || e.accessKeyDown})
        }, N = function (e) {
            for (var t in K) {
                for (var n = K[t], i = n.length - 1; i >= 0; i--)(n[i].dialog == e || n[i].uiElement == e) && n.splice(i, 1);
                0 === n.length && delete K[t]
            }
        }, w = function (e, t) {
            e._.accessKeyMap[t] && e.selectPage(e._.accessKeyMap[t])
        }, S = function () {
        };
        !function () {
            CKEDITOR.ui.dialog = {
                uiElement: function (e, t, n, i, o, r, a) {
                    if (!(arguments.length < 4)) {
                        var s, l = (i.call ? i(t) : i) || "div", c = ["<", l, " "], d = (o && o.call ? o(t) : o) || {},
                            u = (r && r.call ? r(t) : r) || {}, h = (a && a.call ? a.call(this, e, t) : a) || "",
                            f = this.domId = u.id || CKEDITOR.tools.getNextId() + "_uiElement";
                        t.requiredContent && !e.getParentEditor().filter.check(t.requiredContent) && (d.display = "none", this.notAllowed = !0), u.id = f;
                        var m = {};
                        t.type && (m["cke_dialog_ui_" + t.type] = 1), t.className && (m[t.className] = 1), t.disabled && (m.cke_disabled = 1);
                        var E = u["class"] && u["class"].split ? u["class"].split(" ") : [];
                        for (s = 0; s < E.length; s++)E[s] && (m[E[s]] = 1);
                        var g = [];
                        for (s in m)g.push(s);
                        u["class"] = g.join(" "), t.title && (u.title = t.title);
                        var p = (t.style || "").split(";");
                        if (t.align) {
                            var T = t.align;
                            d["margin-left"] = "left" == T ? 0 : "auto", d["margin-right"] = "right" == T ? 0 : "auto"
                        }
                        for (s in d)p.push(s + ":" + d[s]);
                        for (t.hidden && p.push("display:none"), s = p.length - 1; s >= 0; s--)"" === p[s] && p.splice(s, 1);
                        p.length > 0 && (u.style = (u.style ? u.style + "; " : "") + p.join("; "));
                        for (s in u)c.push(s + '="' + CKEDITOR.tools.htmlEncode(u[s]) + '" ');
                        c.push(">", h, "</", l, ">"), n.push(c.join("")), (this._ || (this._ = {})).dialog = e, "boolean" == typeof t.isChanged && (this.isChanged = function () {
                            return t.isChanged
                        }), "function" == typeof t.isChanged && (this.isChanged = t.isChanged), "function" == typeof t.setValue && (this.setValue = CKEDITOR.tools.override(this.setValue, function (e) {
                            return function (n) {
                                e.call(this, t.setValue.call(this, n))
                            }
                        })), "function" == typeof t.getValue && (this.getValue = CKEDITOR.tools.override(this.getValue, function (e) {
                            return function () {
                                return t.getValue.call(this, e.call(this))
                            }
                        })), CKEDITOR.event.implementOn(this), this.registerEvents(t), this.accessKeyUp && this.accessKeyDown && t.accessKey && k(this, e, "CTRL+" + t.accessKey);
                        var C = this;
                        e.on("load", function () {
                            var t = C.getInputElement();
                            if (t) {
                                var n = C.type in {
                                    checkbox: 1,
                                    ratio: 1
                                } && CKEDITOR.env.ie && CKEDITOR.env.version < 8 ? "cke_dialog_ui_focused" : "";
                                t.on("focus", function () {
                                    e._.tabBarMode = !1, e._.hasFocus = !0, C.fire("focus"), n && this.addClass(n)
                                }), t.on("blur", function () {
                                    C.fire("blur"), n && this.removeClass(n)
                                })
                            }
                        }), CKEDITOR.tools.extend(this, t), this.keyboardFocusable && (this.tabIndex = t.tabIndex || 0, this.focusIndex = e._.focusList.push(this) - 1, this.on("focus", function () {
                            e._.currentFocusIndex = C.focusIndex
                        }))
                    }
                }, hbox: function (e, t, n, i, o) {
                    if (!(arguments.length < 4)) {
                        this._ || (this._ = {});
                        var r, a = this._.children = t, s = o && o.widths || null, l = o && o.height || null, c = {},
                            d = function () {
                                var e = ['<tbody><tr class="cke_dialog_ui_hbox">'];
                                for (r = 0; r < n.length; r++) {
                                    var t = "cke_dialog_ui_hbox_child", i = [];
                                    0 === r && (t = "cke_dialog_ui_hbox_first"), r == n.length - 1 && (t = "cke_dialog_ui_hbox_last"), e.push('<td class="', t, '" role="presentation" '), s ? s[r] && i.push("width:" + g(s[r])) : i.push("width:" + Math.floor(100 / n.length) + "%"), l && i.push("height:" + g(l)), o && void 0 !== o.padding && i.push("padding:" + g(o.padding)), CKEDITOR.env.ie && CKEDITOR.env.quirks && a[r].align && i.push("text-align:" + a[r].align), i.length > 0 && e.push('style="' + i.join("; ") + '" '), e.push(">", n[r], "</td>")
                                }
                                return e.push("</tr></tbody>"), e.join("")
                            }, u = {role: "presentation"};
                        o && o.align && (u.align = o.align), CKEDITOR.ui.dialog.uiElement.call(this, e, o || {type: "hbox"}, i, "table", c, u, d)
                    }
                }, vbox: function (e, t, n, i, o) {
                    if (!(arguments.length < 3)) {
                        this._ || (this._ = {});
                        var r = this._.children = t, a = o && o.width || null, s = o && o.heights || null,
                            l = function () {
                                var t = ['<table role="presentation" cellspacing="0" border="0" '];
                                t.push('style="'), o && o.expand && t.push("height:100%;"), t.push("width:" + g(a || "100%"), ";"), CKEDITOR.env.webkit && t.push("float:none;"), t.push('"'), t.push('align="', CKEDITOR.tools.htmlEncode(o && o.align || ("ltr" == e.getParentEditor().lang.dir ? "left" : "right")), '" '), t.push("><tbody>");
                                for (var i = 0; i < n.length; i++) {
                                    var l = [];
                                    t.push('<tr><td role="presentation" '), a && l.push("width:" + g(a || "100%")), s ? l.push("height:" + g(s[i])) : o && o.expand && l.push("height:" + Math.floor(100 / n.length) + "%"), o && void 0 !== o.padding && l.push("padding:" + g(o.padding)), CKEDITOR.env.ie && CKEDITOR.env.quirks && r[i].align && l.push("text-align:" + r[i].align), l.length > 0 && t.push('style="', l.join("; "), '" '), t.push(' class="cke_dialog_ui_vbox_child">', n[i], "</td></tr>")
                                }
                                return t.push("</tbody></table>"), t.join("")
                            };
                        CKEDITOR.ui.dialog.uiElement.call(this, e, o || {type: "vbox"}, i, "div", null, {role: "presentation"}, l)
                    }
                }
            }
        }(), CKEDITOR.ui.dialog.uiElement.prototype = {
            getElement: function () {
                return CKEDITOR.document.getById(this.domId)
            }, getInputElement: function () {
                return this.getElement()
            }, getDialog: function () {
                return this._.dialog
            }, setValue: function (e, t) {
                return this.getInputElement().setValue(e), !t && this.fire("change", {value: e}), this
            }, getValue: function () {
                return this.getInputElement().getValue()
            }, isChanged: function () {
                return !1
            }, selectParentTab: function () {
                for (var e, t = this.getInputElement(), n = t; (n = n.getParent()) && -1 == n.$.className.search("cke_dialog_page_contents"););
                return n ? (e = n.getAttribute("name"), this._.dialog._.currentTabId != e && this._.dialog.selectPage(e), this) : this
            }, focus: function () {
                return this.selectParentTab().getInputElement().focus(), this
            }, registerEvents: function (e) {
                var t, n = /^on([A-Z]\w+)/, i = function (e, t, n, i) {
                    t.on("load", function () {
                        e.getInputElement().on(n, i, e)
                    })
                };
                for (var o in e)(t = o.match(n)) && (this.eventProcessors[o] ? this.eventProcessors[o].call(this, this._.dialog, e[o]) : i(this, this._.dialog, t[1].toLowerCase(), e[o]));
                return this
            }, eventProcessors: {
                onLoad: function (e, t) {
                    e.on("load", t, this)
                }, onShow: function (e, t) {
                    e.on("show", t, this)
                }, onHide: function (e, t) {
                    e.on("hide", t, this)
                }
            }, accessKeyDown: function () {
                this.focus()
            }, accessKeyUp: function () {
            }, disable: function () {
                var e = this.getElement(), t = this.getInputElement();
                t.setAttribute("disabled", "true"), e.addClass("cke_disabled")
            }, enable: function () {
                var e = this.getElement(), t = this.getInputElement();
                t.removeAttribute("disabled"), e.removeClass("cke_disabled")
            }, isEnabled: function () {
                return !this.getElement().hasClass("cke_disabled")
            }, isVisible: function () {
                return this.getInputElement().isVisible()
            }, isFocusable: function () {
                return this.isEnabled() && this.isVisible() ? !0 : !1
            }
        }, CKEDITOR.ui.dialog.hbox.prototype = CKEDITOR.tools.extend(new CKEDITOR.ui.dialog.uiElement, {
            getChild: function (e) {
                return arguments.length < 1 ? this._.children.concat() : (e.splice || (e = [e]), e.length < 2 ? this._.children[e[0]] : this._.children[e[0]] && this._.children[e[0]].getChild ? this._.children[e[0]].getChild(e.slice(1, e.length)) : null)
            }
        }, !0), CKEDITOR.ui.dialog.vbox.prototype = new CKEDITOR.ui.dialog.hbox, function () {
            var e = {
                build: function (e, t, n) {
                    for (var i, o = t.children, r = [], a = [], s = 0; s < o.length && (i = o[s]); s++) {
                        var l = [];
                        r.push(l), a.push(CKEDITOR.dialog._.uiElementBuilders[i.type].build(e, i, l))
                    }
                    return new CKEDITOR.ui.dialog[t.type](e, a, r, n, t)
                }
            };
            CKEDITOR.dialog.addUIElement("hbox", e), CKEDITOR.dialog.addUIElement("vbox", e)
        }(), CKEDITOR.dialogCommand = function (e, t) {
            this.dialogName = e, CKEDITOR.tools.extend(this, t, !0)
        }, CKEDITOR.dialogCommand.prototype = {
            exec: function (e) {
                e.openDialog(this.dialogName)
            }, canUndo: !1, editorFocus: 1
        }, function () {
            var e = /^([a]|[^a])+$/, t = /^\d*$/, n = /^\d*(?:\.\d+)?$/, i = /^(((\d*(\.\d+))|(\d*))(px|\%)?)?$/,
                o = /^(((\d*(\.\d+))|(\d*))(px|em|ex|in|cm|mm|pt|pc|\%)?)?$/i, r = /^(\s*[\w-]+\s*:\s*[^:;]+(?:;|$))*$/;
            CKEDITOR.VALIDATE_OR = 1, CKEDITOR.VALIDATE_AND = 2, CKEDITOR.dialog.validate = {
                functions: function () {
                    var e = arguments;
                    return function () {
                        var t, n, i = this && this.getValue ? this.getValue() : e[0], o = CKEDITOR.VALIDATE_AND, r = [];
                        for (n = 0; n < e.length && "function" == typeof e[n]; n++)r.push(e[n]);
                        n < e.length && "string" == typeof e[n] && (t = e[n], n++), n < e.length && "number" == typeof e[n] && (o = e[n]);
                        var a = o == CKEDITOR.VALIDATE_AND ? !0 : !1;
                        for (n = 0; n < r.length; n++)a = o == CKEDITOR.VALIDATE_AND ? a && r[n](i) : a || r[n](i);
                        return a ? !0 : t
                    }
                }, regex: function (e, t) {
                    return function () {
                        var n = this && this.getValue ? this.getValue() : arguments[0];
                        return e.test(n) ? !0 : t
                    }
                }, notEmpty: function (t) {
                    return this.regex(e, t)
                }, integer: function (e) {
                    return this.regex(t, e)
                }, number: function (e) {
                    return this.regex(n, e)
                }, cssLength: function (e) {
                    return this.functions(function (e) {
                        return o.test(CKEDITOR.tools.trim(e))
                    }, e)
                }, htmlLength: function (e) {
                    return this.functions(function (e) {
                        return i.test(CKEDITOR.tools.trim(e))
                    }, e)
                }, inlineStyle: function (e) {
                    return this.functions(function (e) {
                        return r.test(CKEDITOR.tools.trim(e))
                    }, e)
                }, equals: function (e, t) {
                    return this.functions(function (t) {
                        return t == e
                    }, t)
                }, notEqual: function (e, t) {
                    return this.functions(function (t) {
                        return t != e
                    }, t)
                }
            }, CKEDITOR.on("instanceDestroyed", function (e) {
                if (CKEDITOR.tools.isEmpty(CKEDITOR.instances)) {
                    for (var t; t = CKEDITOR.dialog._.currentTop;)t.hide();
                    E()
                }
                var n = e.editor._.storedDialogs;
                for (var i in n)n[i].destroy()
            })
        }(), CKEDITOR.tools.extend(CKEDITOR.editor.prototype, {
            openDialog: function (e, t) {
                var n = null, i = CKEDITOR.dialog._.dialogDefinitions[e];
                if (null === CKEDITOR.dialog._.currentTop && f(this), "function" == typeof i) {
                    var o = this._.storedDialogs || (this._.storedDialogs = {});
                    n = o[e] || (o[e] = new CKEDITOR.dialog(this, e)), t && t.call(n, n), n.show()
                } else {
                    if ("failed" == i)throw m(this), new Error('[CKEDITOR.dialog.openDialog] Dialog "' + e + '" failed when loading definition.');
                    "string" == typeof i && CKEDITOR.scriptLoader.load(CKEDITOR.getUrl(i), function () {
                        var n = CKEDITOR.dialog._.dialogDefinitions[e];
                        "function" != typeof n && (CKEDITOR.dialog._.dialogDefinitions[e] = "failed"), this.openDialog(e, t)
                    }, this, 0, 1)
                }
                return CKEDITOR.skin.loadPart("dialog"), n
            }
        })
    }(),CKEDITOR.plugins.add("dialog", {
        requires: "dialogui", init: function (e) {
            e.on("doubleclick", function (t) {
                t.data.dialog && e.openDialog(t.data.dialog)
            }, null, null, 999)
        }
    }),function () {
        function e(e) {
            function t() {
                function t(t, n, i, o, r) {
                    var a = e.lang.clipboard[n];
                    e.addCommand(n, i), e.ui.addButton && e.ui.addButton(t, {
                        label: a,
                        command: n,
                        toolbar: "clipboard," + o
                    }), e.addMenuItems && e.addMenuItem(n, {label: a, command: n, group: "clipboard", order: r})
                }

                t("Cut", "cut", o("cut"), 10, 1), t("Copy", "copy", o("copy"), 20, 4), t("Paste", "paste", r(), 30, 8)
            }

            function n() {
                e.on("key", f), e.on("contentDom", i), e.on("selectionChange", function (e) {
                    C = e.data.selection.getRanges()[0].checkReadOnly(), E()
                }), e.contextMenu && e.contextMenu.addListener(function (e, t) {
                    return C = t.getRanges()[0].checkReadOnly(), {cut: g("cut"), copy: g("copy"), paste: g("paste")}
                })
            }

            function i() {
                var t = e.editable();
                t.on(v, function (e) {
                    CKEDITOR.env.ie && p || m(e)
                }), CKEDITOR.env.ie && t.on("paste", function (t) {
                    T || (a(), t.data.preventDefault(), m(t), l("paste") || e.openDialog("paste"))
                }), CKEDITOR.env.ie && (t.on("contextmenu", s, null, null, 0), t.on("beforepaste", function (e) {
                    !e.data || e.data.$.ctrlKey || e.data.$.shiftKey || s()
                }, null, null, 0)), t.on("beforecut", function () {
                    !p && d(e)
                });
                var n;
                t.attachListener(CKEDITOR.env.ie ? t : e.document.getDocumentElement(), "mouseup", function () {
                    n = setTimeout(function () {
                        E()
                    }, 0)
                }), e.on("destroy", function () {
                    clearTimeout(n)
                }), t.on("keyup", E)
            }

            function o(t) {
                return {
                    type: t, canUndo: "cut" == t, startDisabled: !0, exec: function () {
                        function t(t) {
                            if (CKEDITOR.env.ie)return l(t);
                            try {
                                return e.document.$.execCommand(t, !1, null)
                            } catch (n) {
                                return !1
                            }
                        }

                        "cut" == this.type && d();
                        var n = t(this.type);
                        return n || alert(e.lang.clipboard[this.type + "Error"]), n
                    }
                }
            }

            function r() {
                return {
                    canUndo: !1, async: !0, exec: function (e, t) {
                        var n = function (t, n) {
                            t && c(t.type, t.dataValue, !!n), e.fire("afterCommandExec", {
                                name: "paste",
                                command: i,
                                returnValue: !!t
                            })
                        }, i = this;
                        "string" == typeof t ? n({type: "auto", dataValue: t}, 1) : e.getClipboardData(n)
                    }
                }
            }

            function a() {
                T = 1, setTimeout(function () {
                    T = 0
                }, 100)
            }

            function s() {
                p = 1, setTimeout(function () {
                    p = 0
                }, 10)
            }

            function l(t) {
                var n = e.document, i = n.getBody(), o = !1, r = function () {
                    o = !0
                };
                return i.on(t, r), (CKEDITOR.env.version > 7 ? n.$ : n.$.selection.createRange()).execCommand(t), i.removeListener(t, r), o
            }

            function c(t, n, i) {
                var o = {type: t};
                return i && e.fire("beforePaste", o) === !1 ? !1 : n ? (o.dataValue = n, e.fire("paste", o)) : !1
            }

            function d() {
                if (CKEDITOR.env.ie && !CKEDITOR.env.quirks) {
                    var t, n, i, o = e.getSelection();
                    o.getType() == CKEDITOR.SELECTION_ELEMENT && (t = o.getSelectedElement()) && (n = o.getRanges()[0], i = e.document.createText(""), i.insertBefore(t), n.setStartBefore(i), n.setEndAfter(t), o.selectRanges([n]), setTimeout(function () {
                        t.getParent() && (i.remove(), o.selectElement(t))
                    }, 0))
                }
            }

            function u(t, n) {
                var i, o = e.document, r = e.editable(), a = function (e) {
                    e.cancel()
                };
                if (!o.getById("cke_pastebin")) {
                    var s = e.getSelection(), l = s.createBookmarks();
                    CKEDITOR.env.ie && s.root.fire("selectionchange");
                    var c = new CKEDITOR.dom.element(!CKEDITOR.env.webkit && !r.is("body") || CKEDITOR.env.ie ? "div" : "body", o);
                    c.setAttributes({id: "cke_pastebin", "data-cke-temp": "1"});
                    var d, u = 0, h = o.getWindow();
                    CKEDITOR.env.webkit ? (r.append(c), c.addClass("cke_editable"), r.is("body") || (d = "static" != r.getComputedStyle("position") ? r : CKEDITOR.dom.element.get(r.$.offsetParent), u = d.getDocumentPosition().y)) : r.getAscendant(CKEDITOR.env.ie ? "body" : "html", 1).append(c), c.setStyles({
                        position: "absolute",
                        top: h.getScrollPosition().y - u + 10 + "px",
                        width: "1px",
                        height: Math.max(1, h.getViewPaneSize().height - 20) + "px",
                        overflow: "hidden",
                        margin: 0,
                        padding: 0
                    }), CKEDITOR.env.safari && c.setStyles(CKEDITOR.tools.cssVendorPrefix("user-select", "text"));
                    var f = c.getParent().isReadOnly();
                    f ? (c.setOpacity(0), c.setAttribute("contenteditable", !0)) : c.setStyle("ltr" == e.config.contentsLangDirection ? "left" : "right", "-1000px"), e.on("selectionChange", a, null, null, 0), (CKEDITOR.env.webkit || CKEDITOR.env.gecko) && (i = r.once("blur", a, null, null, -100)), f && c.focus();
                    var m = new CKEDITOR.dom.range(c);
                    m.selectNodeContents(c);
                    var E = m.select();
                    CKEDITOR.env.ie && (i = r.once("blur", function () {
                        e.lockSelection(E)
                    }));
                    var g = CKEDITOR.document.getWindow().getScrollPosition().y;
                    setTimeout(function () {
                        CKEDITOR.env.webkit && (CKEDITOR.document.getBody().$.scrollTop = g), i && i.removeListener(), CKEDITOR.env.ie && r.focus(), s.selectBookmarks(l), c.remove();
                        var t;
                        CKEDITOR.env.webkit && (t = c.getFirst()) && t.is && t.hasClass("Apple-style-span") && (c = t), e.removeListener("selectionChange", a), n(c.getHtml())
                    }, 0)
                }
            }

            function h() {
                if (CKEDITOR.env.ie) {
                    e.focus(), a();
                    var t = e.focusManager;
                    if (t.lock(), e.editable().fire(v) && !l("paste"))return t.unlock(), !1;
                    t.unlock()
                } else try {
                    if (e.editable().fire(v) && !e.document.$.execCommand("Paste", !1, null))throw 0
                } catch (n) {
                    return !1
                }
                return !0
            }

            function f(t) {
                if ("wysiwyg" == e.mode)switch (t.data.keyCode) {
                    case CKEDITOR.CTRL + 86:
                    case CKEDITOR.SHIFT + 45:
                        var n = e.editable();
                        return a(), void(!CKEDITOR.env.ie && n.fire("beforepaste"));
                    case CKEDITOR.CTRL + 88:
                    case CKEDITOR.SHIFT + 46:
                        e.fire("saveSnapshot"), setTimeout(function () {
                            e.fire("saveSnapshot")
                        }, 50)
                }
            }

            function m(t) {
                var n = {type: "auto"}, i = e.fire("beforePaste", n);
                u(t, function (e) {
                    e = e.replace(/<span[^>]+data-cke-bookmark[^<]*?<\/span>/gi, ""), i && c(n.type, e, 0, 1)
                })
            }

            function E() {
                if ("wysiwyg" == e.mode) {
                    var t = g("paste");
                    e.getCommand("cut").setState(g("cut")), e.getCommand("copy").setState(g("copy")), e.getCommand("paste").setState(t), e.fire("pasteState", t)
                }
            }

            function g(t) {
                if (C && t in {paste: 1, cut: 1})return CKEDITOR.TRISTATE_DISABLED;
                if ("paste" == t)return CKEDITOR.TRISTATE_OFF;
                var n = e.getSelection(), i = n.getRanges(),
                    o = n.getType() == CKEDITOR.SELECTION_NONE || 1 == i.length && i[0].collapsed;
                return o ? CKEDITOR.TRISTATE_DISABLED : CKEDITOR.TRISTATE_OFF
            }

            var p = 0, T = 0, C = 0, v = CKEDITOR.env.ie ? "beforepaste" : "paste";
            n(), t(), e.getClipboardData = function (t, n) {
                function i(e) {
                    e.removeListener(), e.cancel(), n(e.data)
                }

                function o(e) {
                    e.removeListener(), s = !0, l = e.data.type
                }

                function r(e) {
                    e.removeListener(), e.cancel(), c = !0, n({type: l, dataValue: e.data})
                }

                function a() {
                    this.customTitle = t && t.title
                }

                var s = !1, l = "auto", c = !1;
                n || (n = t, t = null), e.on("paste", i, null, null, 0), e.on("beforePaste", o, null, null, 1e3), h() === !1 && (e.removeListener("paste", i), s && e.fire("pasteDialog", a) ? (e.on("pasteDialogCommit", r), e.on("dialogHide", function (e) {
                    e.removeListener(), e.data.removeListener("pasteDialogCommit", r), setTimeout(function () {
                        c || n(null)
                    }, 10)
                })) : n(null))
            }
        }

        function t(e) {
            if (CKEDITOR.env.webkit) {
                if (!e.match(/^[^<]*$/g) && !e.match(/^(<div><br( ?\/)?><\/div>|<div>[^<]*<\/div>)*$/gi))return "html"
            } else if (CKEDITOR.env.ie) {
                if (!e.match(/^([^<]|<br( ?\/)?>)*$/gi) && !e.match(/^(<p>([^<]|<br( ?\/)?>)*<\/p>|(\r\n))*$/gi))return "html"
            } else {
                if (!CKEDITOR.env.gecko)return "html";
                if (!e.match(/^([^<]|<br( ?\/)?>)*$/gi))return "html"
            }
            return "htmlifiedtext"
        }

        function n(e, t) {
            function n(e) {
                return CKEDITOR.tools.repeat("</p><p>", ~~(e / 2)) + (e % 2 == 1 ? "<br>" : "")
            }

            return t = t.replace(/\s+/g, " ").replace(/> +</g, "><").replace(/<br ?\/>/gi, "<br>"), t = t.replace(/<\/?[A-Z]+>/g, function (e) {
                return e.toLowerCase()
            }), t.match(/^[^<]$/) ? t : (CKEDITOR.env.webkit && t.indexOf("<div>") > -1 && (t = t.replace(/^(<div>(<br>|)<\/div>)(?!$|(<div>(<br>|)<\/div>))/g, "<br>").replace(/^(<div>(<br>|)<\/div>){2}(?!$)/g, "<div></div>"), t.match(/<div>(<br>|)<\/div>/) && (t = "<p>" + t.replace(/(<div>(<br>|)<\/div>)+/g, function (e) {
                    return n(e.split("</div><div>").length + 1)
                }) + "</p>"), t = t.replace(/<\/div><div>/g, "<br>"), t = t.replace(/<\/?div>/g, "")), CKEDITOR.env.gecko && e.enterMode != CKEDITOR.ENTER_BR && (CKEDITOR.env.gecko && (t = t.replace(/^<br><br>$/, "<br>")), t.indexOf("<br><br>") > -1 && (t = "<p>" + t.replace(/(<br>){2,}/g, function (e) {
                    return n(e.length / 4)
                }) + "</p>")), r(e, t))
        }

        function i() {
            var e = new CKEDITOR.htmlParser.filter, t = {
                    blockquote: 1,
                    dl: 1,
                    fieldset: 1,
                    h1: 1,
                    h2: 1,
                    h3: 1,
                    h4: 1,
                    h5: 1,
                    h6: 1,
                    ol: 1,
                    p: 1,
                    table: 1,
                    ul: 1
                }, n = CKEDITOR.tools.extend({br: 0}, CKEDITOR.dtd.$inline), i = {p: 1, br: 1, "cke:br": 1},
                o = CKEDITOR.dtd, r = CKEDITOR.tools.extend({
                    area: 1,
                    basefont: 1,
                    embed: 1,
                    iframe: 1,
                    map: 1,
                    object: 1,
                    param: 1
                }, CKEDITOR.dtd.$nonBodyContent, CKEDITOR.dtd.$cdata), a = function (e) {
                    delete e.name, e.add(new CKEDITOR.htmlParser.text(" "))
                }, s = function (e) {
                    for (var t, n, i = e; (i = i.next) && i.name && i.name.match(/^h\d$/);)for (t = new CKEDITOR.htmlParser.element("cke:br"), t.isEmpty = !0, e.add(t); n = i.children.shift();)e.add(n)
                };
            return e.addRules({
                elements: {
                    h1: s, h2: s, h3: s, h4: s, h5: s, h6: s, img: function (e) {
                        var t = CKEDITOR.tools.trim(e.attributes.alt || ""), n = " ";
                        return t && !t.match(/(^http|\.(jpe?g|gif|png))/i) && (n = " [" + t + "] "), new CKEDITOR.htmlParser.text(n)
                    }, td: a, th: a, $: function (e) {
                        var a, s = e.name;
                        if (r[s])return !1;
                        if (e.attributes = {}, "br" == s)return e;
                        if (t[s]) e.name = "p"; else if (n[s]) delete e.name; else if (o[s]) {
                            if (a = new CKEDITOR.htmlParser.element("cke:br"), a.isEmpty = !0, CKEDITOR.dtd.$empty[s])return a;
                            e.add(a, 0), a = a.clone(), a.isEmpty = !0, e.add(a), delete e.name
                        }
                        return i[e.name] || delete e.name, e
                    }
                }
            }, {applyToAll: !0}), e
        }

        function o(e, t, n) {
            var i = new CKEDITOR.htmlParser.fragment.fromHtml(t), o = new CKEDITOR.htmlParser.basicWriter;
            i.writeHtml(o, n), t = o.getHtml(), t = t.replace(/\s*(<\/?[a-z:]+ ?\/?>)\s*/g, "$1").replace(/(<cke:br \/>){2,}/g, "<cke:br />").replace(/(<cke:br \/>)(<\/?p>|<br \/>)/g, "$2").replace(/(<\/?p>|<br \/>)(<cke:br \/>)/g, "$1").replace(/<(cke:)?br( \/)?>/g, "<br>").replace(/<p><\/p>/g, "");
            var a = 0;
            return t = t.replace(/<\/?p>/g, function (e) {
                if ("<p>" == e) {
                    if (++a > 1)return "</p><p>"
                } else if (--a > 0)return "</p><p>";
                return e
            }).replace(/<p><\/p>/g, ""), r(e, t)
        }

        function r(e, t) {
            return e.enterMode == CKEDITOR.ENTER_BR ? t = t.replace(/(<\/p><p>)+/g, function (e) {
                return CKEDITOR.tools.repeat("<br>", e.length / 7 * 2)
            }).replace(/<\/?p>/g, "") : e.enterMode == CKEDITOR.ENTER_DIV && (t = t.replace(/<(\/)?p>/g, "<$1div>")), t
        }

        CKEDITOR.plugins.add("clipboard", {
            requires: "dialog", init: function (r) {
                var a;
                e(r), CKEDITOR.dialog.add("paste", CKEDITOR.getUrl(this.path + "dialogs/paste.js")), r.on("paste", function (e) {
                    var t = e.data.dataValue, n = CKEDITOR.dtd.$block;
                    if (t.indexOf("Apple-") > -1 && (t = t.replace(/<span class="Apple-converted-space">&nbsp;<\/span>/gi, " "), "html" != e.data.type && (t = t.replace(/<span class="Apple-tab-span"[^>]*>([^<]*)<\/span>/gi, function (e, t) {
                            return t.replace(/\t/g, "&nbsp;&nbsp; &nbsp;")
                        })), t.indexOf('<br class="Apple-interchange-newline">') > -1 && (e.data.startsWithEOL = 1, e.data.preSniffing = "html", t = t.replace(/<br class="Apple-interchange-newline">/, "")), t = t.replace(/(<[^>]+) class="Apple-[^"]*"/gi, "$1")), t.match(/^<[^<]+cke_(editable|contents)/i)) {
                        var i, o, r = new CKEDITOR.dom.element("div");
                        for (r.setHtml(t); 1 == r.getChildCount() && (i = r.getFirst()) && i.type == CKEDITOR.NODE_ELEMENT && (i.hasClass("cke_editable") || i.hasClass("cke_contents"));)r = o = i;
                        o && (t = o.getHtml().replace(/<br>$/i, ""))
                    }
                    CKEDITOR.env.ie ? t = t.replace(/^&nbsp;(?: |\r\n)?<(\w+)/g, function (t, i) {
                        return i.toLowerCase() in n ? (e.data.preSniffing = "html", "<" + i) : t
                    }) : CKEDITOR.env.webkit ? t = t.replace(/<\/(\w+)><div><br><\/div>$/, function (t, i) {
                        return i in n ? (e.data.endsWithEOL = 1, "</" + i + ">") : t
                    }) : CKEDITOR.env.gecko && (t = t.replace(/(\s)<br>$/, "$1")), e.data.dataValue = t
                }, null, null, 3), r.on("paste", function (e) {
                    var s, l = e.data, c = l.type, d = l.dataValue, u = r.config.clipboard_defaultContentType || "html";
                    s = "html" == c || "html" == l.preSniffing ? "html" : t(d), "htmlifiedtext" == s ? d = n(r.config, d) : "text" == c && "html" == s && (d = o(r.config, d, a || (a = i(r)))), l.startsWithEOL && (d = '<br data-cke-eol="1">' + d), l.endsWithEOL && (d += '<br data-cke-eol="1">'), "auto" == c && (c = "html" == s || "html" == u ? "html" : "text"), l.type = c, l.dataValue = d, delete l.preSniffing, delete l.startsWithEOL, delete l.endsWithEOL
                }, null, null, 6), r.on("paste", function (e) {
                    var t = e.data;
                    r.insertHtml(t.dataValue, t.type), setTimeout(function () {
                        r.fire("afterPaste")
                    }, 0)
                }, null, null, 1e3), r.on("pasteDialog", function (e) {
                    setTimeout(function () {
                        r.openDialog("paste", e.data)
                    }, 0)
                })
            }
        })
    }(),function () {
        var e = '<a id="{id}" class="cke_button cke_button__{name} cke_button_{state} {cls}"' + (CKEDITOR.env.gecko && !CKEDITOR.env.hc ? "" : " href=\"javascript:void('{titleJs}')\"") + ' title="{title}" tabindex="-1" hidefocus="true" role="button" aria-labelledby="{id}_label" aria-haspopup="{hasArrow}" aria-disabled="{ariaDisabled}"';
        CKEDITOR.env.gecko && CKEDITOR.env.mac && (e += ' onkeypress="return false;"'), CKEDITOR.env.gecko && (e += ' onblur="this.style.cssText = this.style.cssText;"'), e += ' onkeydown="return CKEDITOR.tools.callFunction({keydownFn},event);" onfocus="return CKEDITOR.tools.callFunction({focusFn},event);" ' + (CKEDITOR.env.ie ? 'onclick="return false;" onmouseup' : "onclick") + '="CKEDITOR.tools.callFunction({clickFn},this);return false;"><span class="cke_button_icon cke_button__{iconName}_icon" style="{style}"', e += '>&nbsp;</span><span id="{id}_label" class="cke_button_label cke_button__{name}_label" aria-hidden="false">{label}</span>{arrowHtml}</a>';
        var t = '<span class="cke_button_arrow">' + (CKEDITOR.env.hc ? "&#9660;" : "") + "</span>",
            n = CKEDITOR.addTemplate("buttonArrow", t), i = CKEDITOR.addTemplate("button", e);
        CKEDITOR.plugins.add("button", {
            beforeInit: function (e) {
                e.ui.addHandler(CKEDITOR.UI_BUTTON, CKEDITOR.ui.button.handler)
            }
        }), CKEDITOR.UI_BUTTON = "button", CKEDITOR.ui.button = function (e) {
            CKEDITOR.tools.extend(this, e, {
                title: e.label, click: e.click || function (t) {
                    t.execCommand(e.command)
                }
            }), this._ = {}
        }, CKEDITOR.ui.button.handler = {
            create: function (e) {
                return new CKEDITOR.ui.button(e)
            }
        }, CKEDITOR.ui.button.prototype = {
            render: function (e, t) {
                function o() {
                    var t = e.mode;
                    if (t) {
                        var n = this.modes[t] ? void 0 !== m[t] ? m[t] : CKEDITOR.TRISTATE_OFF : CKEDITOR.TRISTATE_DISABLED;
                        n = e.readOnly && !this.readOnly ? CKEDITOR.TRISTATE_DISABLED : n, this.setState(n), this.refresh && this.refresh()
                    }
                }

                var r, a = CKEDITOR.env, s = this._.id = CKEDITOR.tools.getNextId(), l = "", c = this.command;
                this._.editor = e;
                var d = {
                    id: s, button: this, editor: e, focus: function () {
                        var e = CKEDITOR.document.getById(s);
                        e.focus()
                    }, execute: function () {
                        this.button.click(e)
                    }, attach: function (e) {
                        this.button.attach(e)
                    }
                }, u = CKEDITOR.tools.addFunction(function (e) {
                    return d.onkey ? (e = new CKEDITOR.dom.event(e), d.onkey(d, e.getKeystroke()) !== !1) : void 0
                }), h = CKEDITOR.tools.addFunction(function (e) {
                    var t;
                    return d.onfocus && (t = d.onfocus(d, new CKEDITOR.dom.event(e)) !== !1), t
                }), f = 0;
                if (d.clickFn = r = CKEDITOR.tools.addFunction(function () {
                        f && (e.unlockSelection(1), f = 0), d.execute(), a.iOS && e.focus()
                    }), this.modes) {
                    var m = {};
                    e.on("beforeModeUnload", function () {
                        e.mode && this._.state != CKEDITOR.TRISTATE_DISABLED && (m[e.mode] = this._.state)
                    }, this), e.on("activeFilterChange", o, this), e.on("mode", o, this), !this.readOnly && e.on("readOnly", o, this)
                } else c && (c = e.getCommand(c), c && (c.on("state", function () {
                    this.setState(c.state)
                }, this), l += c.state == CKEDITOR.TRISTATE_ON ? "on" : c.state == CKEDITOR.TRISTATE_DISABLED ? "disabled" : "off"));
                this.directional && e.on("contentDirChanged", function (t) {
                    var n = CKEDITOR.document.getById(this._.id), i = n.getFirst(), o = t.data;
                    o != e.lang.dir ? n.addClass("cke_" + o) : n.removeClass("cke_ltr").removeClass("cke_rtl"), i.setAttribute("style", CKEDITOR.skin.getIconStyle(g, "rtl" == o, this.icon, this.iconOffset))
                }, this), c || (l += "off");
                var E = this.name || this.command, g = E;
                this.icon && !/\./.test(this.icon) && (g = this.icon, this.icon = null);
                var p = {
                    id: s,
                    name: E,
                    iconName: g,
                    label: this.label,
                    cls: this.className || "",
                    state: l,
                    ariaDisabled: "disabled" == l ? "true" : "false",
                    title: this.title,
                    titleJs: a.gecko && !a.hc ? "" : (this.title || "").replace("'", ""),
                    hasArrow: this.hasArrow ? "true" : "false",
                    keydownFn: u,
                    focusFn: h,
                    clickFn: r,
                    style: CKEDITOR.skin.getIconStyle(g, "rtl" == e.lang.dir, this.icon, this.iconOffset),
                    arrowHtml: this.hasArrow ? n.output() : ""
                };
                return i.output(p, t), this.onRender && this.onRender(), d
            }, setState: function (e) {
                if (this._.state == e)return !1;
                this._.state = e;
                var t = CKEDITOR.document.getById(this._.id);
                if (t) {
                    if (t.setState(e, "cke_button"), e == CKEDITOR.TRISTATE_DISABLED ? t.setAttribute("aria-disabled", !0) : t.removeAttribute("aria-disabled"), this.hasArrow) {
                        var n = e == CKEDITOR.TRISTATE_ON ? this._.editor.lang.button.selectedLabel.replace(/%1/g, this.label) : this.label;
                        CKEDITOR.document.getById(this._.id + "_label").setText(n)
                    } else e == CKEDITOR.TRISTATE_ON ? t.setAttribute("aria-pressed", !0) : t.removeAttribute("aria-pressed");
                    return !0
                }
                return !1
            }, getState: function () {
                return this._.state
            }, toFeature: function (e) {
                if (this._.feature)return this._.feature;
                var t = this;
                return this.allowedContent || this.requiredContent || !this.command || (t = e.getCommand(this.command) || t), this._.feature = t
            }
        }, CKEDITOR.ui.prototype.addButton = function (e, t) {
            this.add(e, CKEDITOR.UI_BUTTON, t)
        }
    }(),CKEDITOR.plugins.add("panelbutton", {
        requires: "button", onLoad: function () {
            function e(e) {
                var t = this._;
                if (t.state != CKEDITOR.TRISTATE_DISABLED)return this.createPanel(e), t.on ? void t.panel.hide() : void t.panel.showBlock(this._.id, this.document.getById(this._.id), 4)
            }

            CKEDITOR.ui.panelButton = CKEDITOR.tools.createClass({
                base: CKEDITOR.ui.button, $: function (t) {
                    var n = t.panel || {};
                    delete t.panel, this.base(t), this.document = n.parent && n.parent.getDocument() || CKEDITOR.document, n.block = {attributes: n.attributes}, n.toolbarRelated = !0, this.hasArrow = !0, this.click = e, this._ = {panelDefinition: n}
                }, statics: {
                    handler: {
                        create: function (e) {
                            return new CKEDITOR.ui.panelButton(e)
                        }
                    }
                }, proto: {
                    createPanel: function (e) {
                        var t = this._;
                        if (!t.panel) {
                            var n = this._.panelDefinition, i = this._.panelDefinition.block,
                                o = n.parent || CKEDITOR.document.getBody(),
                                r = this._.panel = new CKEDITOR.ui.floatPanel(e, o, n), a = r.addBlock(t.id, i),
                                s = this;
                            r.onShow = function () {
                                s.className && this.element.addClass(s.className + "_panel"), s.setState(CKEDITOR.TRISTATE_ON), t.on = 1, s.editorFocus && e.focus(), s.onOpen && s.onOpen()
                            }, r.onHide = function (n) {
                                s.className && this.element.getFirst().removeClass(s.className + "_panel"), s.setState(s.modes && s.modes[e.mode] ? CKEDITOR.TRISTATE_OFF : CKEDITOR.TRISTATE_DISABLED), t.on = 0, !n && s.onClose && s.onClose()
                            }, r.onEscape = function () {
                                r.hide(1), s.document.getById(t.id).focus()
                            }, this.onBlock && this.onBlock(r, a), a.onHide = function () {
                                t.on = 0, s.setState(CKEDITOR.TRISTATE_OFF)
                            }
                        }
                    }
                }
            })
        }, beforeInit: function (e) {
            e.ui.addHandler(CKEDITOR.UI_PANELBUTTON, CKEDITOR.ui.panelButton.handler)
        }
    }),CKEDITOR.UI_PANELBUTTON = "panelbutton",function () {
        CKEDITOR.plugins.add("panel", {
            beforeInit: function (e) {
                e.ui.addHandler(CKEDITOR.UI_PANEL, CKEDITOR.ui.panel.handler)
            }
        }), CKEDITOR.UI_PANEL = "panel", CKEDITOR.ui.panel = function (e, t) {
            t && CKEDITOR.tools.extend(this, t), CKEDITOR.tools.extend(this, {
                className: "",
                css: []
            }), this.id = CKEDITOR.tools.getNextId(), this.document = e, this.isFramed = this.forceIFrame || this.css.length, this._ = {blocks: {}}
        }, CKEDITOR.ui.panel.handler = {
            create: function (e) {
                return new CKEDITOR.ui.panel(e)
            }
        };
        var e = CKEDITOR.addTemplate("panel", '<div lang="{langCode}" id="{id}" dir={dir} class="cke cke_reset_all {editorId} cke_panel cke_panel {cls} cke_{dir}" style="z-index:{z-index}" role="presentation">{frame}</div>'),
            t = CKEDITOR.addTemplate("panel-frame", '<iframe id="{id}" class="cke_panel_frame" role="presentation" frameborder="0" src="{src}"></iframe>'),
            n = CKEDITOR.addTemplate("panel-frame-inner", '<!DOCTYPE html><html class="cke_panel_container {env}" dir="{dir}" lang="{langCode}"><head>{css}</head><body class="cke_{dir}" style="margin:0;padding:0" onload="{onload}"></body></html>');
        CKEDITOR.ui.panel.prototype = {
            render: function (i, o) {
                this.getHolderElement = function () {
                    var e = this._.holder;
                    if (!e) {
                        if (this.isFramed) {
                            var t = this.document.getById(this.id + "_frame"), i = t.getParent(),
                                o = t.getFrameDocument();
                            CKEDITOR.env.iOS && i.setStyles({
                                overflow: "scroll",
                                "-webkit-overflow-scrolling": "touch"
                            });
                            var a = CKEDITOR.tools.addFunction(CKEDITOR.tools.bind(function () {
                                this.isLoaded = !0, this.onLoad && this.onLoad()
                            }, this));
                            o.write(n.output(CKEDITOR.tools.extend({
                                css: CKEDITOR.tools.buildStyleHtml(this.css),
                                onload: "window.parent.CKEDITOR.tools.callFunction(" + a + ");"
                            }, r)));
                            var s = o.getWindow();
                            s.$.CKEDITOR = CKEDITOR, o.on("keydown", function (e) {
                                var t = e.data.getKeystroke(), n = this.document.getById(this.id).getAttribute("dir");
                                return this._.onKeyDown && this._.onKeyDown(t) === !1 ? void e.data.preventDefault() : void((27 == t || t == ("rtl" == n ? 39 : 37)) && this.onEscape && this.onEscape(t) === !1 && e.data.preventDefault())
                            }, this), e = o.getBody(), e.unselectable(), CKEDITOR.env.air && CKEDITOR.tools.callFunction(a)
                        } else e = this.document.getById(this.id);
                        this._.holder = e
                    }
                    return e
                };
                var r = {
                    editorId: i.id,
                    id: this.id,
                    langCode: i.langCode,
                    dir: i.lang.dir,
                    cls: this.className,
                    frame: "",
                    env: CKEDITOR.env.cssClass,
                    "z-index": i.config.baseFloatZIndex + 1
                };
                if (this.isFramed) {
                    var a = CKEDITOR.env.air ? "javascript:void(0)" : CKEDITOR.env.ie ? "javascript:void(function(){" + encodeURIComponent("document.open();(" + CKEDITOR.tools.fixDomain + ")();document.close();") + "}())" : "";
                    r.frame = t.output({id: this.id + "_frame", src: a})
                }
                var s = e.output(r);
                return o && o.push(s), s
            }, addBlock: function (e, t) {
                return t = this._.blocks[e] = t instanceof CKEDITOR.ui.panel.block ? t : new CKEDITOR.ui.panel.block(this.getHolderElement(), t), this._.currentBlock || this.showBlock(e), t
            }, getBlock: function (e) {
                return this._.blocks[e]
            }, showBlock: function (e) {
                var t = this._.blocks, n = t[e], i = this._.currentBlock,
                    o = !this.forceIFrame || CKEDITOR.env.ie ? this._.holder : this.document.getById(this.id + "_frame");
                return i && i.hide(), this._.currentBlock = n, CKEDITOR.fire("ariaWidget", o), n._.focusIndex = -1, this._.onKeyDown = n.onKeyDown && CKEDITOR.tools.bind(n.onKeyDown, n), n.show(), n
            }, destroy: function () {
                this.element && this.element.remove()
            }
        }, CKEDITOR.ui.panel.block = CKEDITOR.tools.createClass({
            $: function (e, t) {
                this.element = e.append(e.getDocument().createElement("div", {
                    attributes: {
                        tabindex: -1,
                        "class": "cke_panel_block"
                    }, styles: {display: "none"}
                })), t && CKEDITOR.tools.extend(this, t), this.element.setAttributes({
                    role: this.attributes.role || "presentation",
                    "aria-label": this.attributes["aria-label"],
                    title: this.attributes.title || this.attributes["aria-label"]
                }), this.keys = {}, this._.focusIndex = -1, this.element.disableContextMenu()
            }, _: {
                markItem: function (e) {
                    if (-1 != e) {
                        var t = this.element.getElementsByTag("a"), n = t.getItem(this._.focusIndex = e);
                        CKEDITOR.env.webkit && n.getDocument().getWindow().focus(), n.focus(), this.onMark && this.onMark(n)
                    }
                }
            }, proto: {
                show: function () {
                    this.element.setStyle("display", "")
                }, hide: function () {
                    this.onHide && this.onHide.call(this) === !0 || this.element.setStyle("display", "none")
                }, onKeyDown: function (e, t) {
                    var n = this.keys[e];
                    switch (n) {
                        case"next":
                            for (var i, o = this._.focusIndex, r = this.element.getElementsByTag("a"); i = r.getItem(++o);)if (i.getAttribute("_cke_focus") && i.$.offsetWidth) {
                                this._.focusIndex = o, i.focus();
                                break
                            }
                            return i || t ? !1 : (this._.focusIndex = -1, this.onKeyDown(e, 1));
                        case"prev":
                            for (o = this._.focusIndex, r = this.element.getElementsByTag("a"); o > 0 && (i = r.getItem(--o));) {
                                if (i.getAttribute("_cke_focus") && i.$.offsetWidth) {
                                    this._.focusIndex = o, i.focus();
                                    break
                                }
                                i = null
                            }
                            return i || t ? !1 : (this._.focusIndex = r.count(), this.onKeyDown(e, 1));
                        case"click":
                        case"mouseup":
                            return o = this._.focusIndex, i = o >= 0 && this.element.getElementsByTag("a").getItem(o), i && (i.$[n] ? i.$[n]() : i.$["on" + n]()), !1
                    }
                    return !0
                }
            }
        })
    }(),CKEDITOR.plugins.add("floatpanel", {requires: "panel"}),function () {
        function e(e, n, i, o, r) {
            var a = CKEDITOR.tools.genKey(n.getUniqueId(), i.getUniqueId(), e.lang.dir, e.uiColor || "", o.css || "", r || ""),
                s = t[a];
            return s || (s = t[a] = new CKEDITOR.ui.panel(n, o), s.element = i.append(CKEDITOR.dom.element.createFromHtml(s.render(e), n)), s.element.setStyles({
                display: "none",
                position: "absolute"
            })), s
        }

        var t = {};
        CKEDITOR.ui.floatPanel = CKEDITOR.tools.createClass({
            $: function (t, n, i, o) {
                function r() {
                    d.hide()
                }

                i.forceIFrame = 1, i.toolbarRelated && t.elementMode == CKEDITOR.ELEMENT_MODE_INLINE && (n = CKEDITOR.document.getById("cke_" + t.name));
                var a = n.getDocument(), s = e(t, a, n, i, o || 0), l = s.element, c = l.getFirst(), d = this;
                l.disableContextMenu(), this.element = l, this._ = {
                    editor: t,
                    panel: s,
                    parentElement: n,
                    definition: i,
                    document: a,
                    iframe: c,
                    children: [],
                    dir: t.lang.dir
                }, t.on("mode", r), t.on("resize", r), CKEDITOR.env.iOS || a.getWindow().on("resize", r)
            }, proto: {
                addBlock: function (e, t) {
                    return this._.panel.addBlock(e, t)
                }, addListBlock: function (e, t) {
                    return this._.panel.addListBlock(e, t)
                }, getBlock: function (e) {
                    return this._.panel.getBlock(e)
                }, showBlock: function (e, t, n, i, o, r) {
                    var a = this._.panel, s = a.showBlock(e);
                    this.allowBlur(!1);
                    var l = this._.editor.editable();
                    this._.returnFocus = l.hasFocus ? l : new CKEDITOR.dom.element(CKEDITOR.document.$.activeElement), this._.hideTimeout = 0;
                    var c = this.element, d = this._.iframe,
                        u = CKEDITOR.env.ie ? d : new CKEDITOR.dom.window(d.$.contentWindow), h = c.getDocument(),
                        f = this._.parentElement.getPositionedAncestor(), m = t.getDocumentPosition(h),
                        E = f ? f.getDocumentPosition(h) : {x: 0, y: 0}, g = "rtl" == this._.dir,
                        p = m.x + (i || 0) - E.x, T = m.y + (o || 0) - E.y;
                    !g || 1 != n && 4 != n ? g || 2 != n && 3 != n || (p += t.$.offsetWidth - 1) : p += t.$.offsetWidth, (3 == n || 4 == n) && (T += t.$.offsetHeight - 1), this._.panel._.offsetParentId = t.getId(), c.setStyles({
                        top: T + "px",
                        left: 0,
                        display: ""
                    }), c.setOpacity(0), c.getFirst().removeStyle("width"), this._.editor.focusManager.add(u), this._.blurSet || (CKEDITOR.event.useCapture = !0, u.on("blur", function (e) {
                        function t() {
                            delete this._.returnFocus, this.hide()
                        }

                        this.allowBlur() && e.data.getPhase() == CKEDITOR.EVENT_PHASE_AT_TARGET && this.visible && !this._.activeChild && (CKEDITOR.env.iOS ? this._.hideTimeout || (this._.hideTimeout = CKEDITOR.tools.setTimeout(t, 0, this)) : t.call(this))
                    }, this), u.on("focus", function () {
                        this._.focused = !0, this.hideChild(), this.allowBlur(!0)
                    }, this), CKEDITOR.env.iOS && (u.on("touchstart", function () {
                        clearTimeout(this._.hideTimeout)
                    }, this), u.on("touchend", function () {
                        this._.hideTimeout = 0, this.focus()
                    }, this)), CKEDITOR.event.useCapture = !1, this._.blurSet = 1), a.onEscape = CKEDITOR.tools.bind(function (e) {
                        return this.onEscape && this.onEscape(e) === !1 ? !1 : void 0
                    }, this), CKEDITOR.tools.setTimeout(function () {
                        var e = CKEDITOR.tools.bind(function () {
                            var e = c;
                            if (e.removeStyle("width"), s.autoSize) {
                                var t = s.element.getDocument(),
                                    n = (CKEDITOR.env.webkit ? s.element : t.getBody()).$.scrollWidth;
                                CKEDITOR.env.ie && CKEDITOR.env.quirks && n > 0 && (n += (e.$.offsetWidth || 0) - (e.$.clientWidth || 0) + 3), n += 10, e.setStyle("width", n + "px");
                                var i = s.element.$.scrollHeight;
                                CKEDITOR.env.ie && CKEDITOR.env.quirks && i > 0 && (i += (e.$.offsetHeight || 0) - (e.$.clientHeight || 0) + 3), e.setStyle("height", i + "px"), a._.currentBlock.element.setStyle("display", "none").removeStyle("display")
                            } else e.removeStyle("height");
                            g && (p -= c.$.offsetWidth), c.setStyle("left", p + "px");
                            var o = a.element, l = o.getWindow(), d = c.$.getBoundingClientRect(),
                                u = l.getViewPaneSize(), h = d.width || d.right - d.left,
                                f = d.height || d.bottom - d.top, m = g ? d.right : u.width - d.left,
                                E = g ? u.width - d.right : d.left;
                            g ? h > m && (E > h ? p += h : u.width > h ? p -= d.left : p = p - d.right + u.width) : h > m && (E > h ? p -= h : u.width > h ? p = p - d.right + u.width : p -= d.left);
                            var C = u.height - d.top, v = d.top;
                            if (f > C && (v > f ? T -= f : u.height > f ? T = T - d.bottom + u.height : T -= d.top), CKEDITOR.env.ie) {
                                var I = new CKEDITOR.dom.element(c.$.offsetParent), O = I;
                                "html" == O.getName() && (O = O.getDocument().getBody()), "rtl" == O.getComputedStyle("direction") && (p -= CKEDITOR.env.ie8Compat ? 2 * c.getDocument().getDocumentElement().$.scrollLeft : I.$.scrollWidth - I.$.clientWidth)
                            }
                            var D, R = c.getFirst();
                            (D = R.getCustomData("activePanel")) && D.onHide && D.onHide.call(this, 1), R.setCustomData("activePanel", this), c.setStyles({
                                top: T + "px",
                                left: p + "px"
                            }), c.setOpacity(1), r && r()
                        }, this);
                        a.isLoaded ? e() : a.onLoad = e, CKEDITOR.tools.setTimeout(function () {
                            var e = CKEDITOR.env.webkit && CKEDITOR.document.getWindow().getScrollPosition().y;
                            this.focus(), s.element.focus(), CKEDITOR.env.webkit && (CKEDITOR.document.getBody().$.scrollTop = e), this.allowBlur(!0), this._.editor.fire("panelShow", this)
                        }, 0, this)
                    }, CKEDITOR.env.air ? 200 : 0, this), this.visible = 1, this.onShow && this.onShow.call(this)
                }, focus: function () {
                    if (CKEDITOR.env.webkit) {
                        var e = CKEDITOR.document.getActive();
                        e && !e.equals(this._.iframe) && e.$.blur()
                    }
                    var t = this._.lastFocused || this._.iframe.getFrameDocument().getWindow();
                    t.focus()
                }, blur: function () {
                    var e = this._.iframe.getFrameDocument(), t = e.getActive();
                    t && t.is("a") && (this._.lastFocused = t)
                }, hide: function (e) {
                    if (this.visible && (!this.onHide || this.onHide.call(this) !== !0)) {
                        this.hideChild(), CKEDITOR.env.gecko && this._.iframe.getFrameDocument().$.activeElement.blur(), this.element.setStyle("display", "none"), this.visible = 0, this.element.getFirst().removeCustomData("activePanel");
                        var t = e && this._.returnFocus;
                        t && (CKEDITOR.env.webkit && t.type && t.getWindow().$.focus(), t.focus()), delete this._.lastFocused, this._.editor.fire("panelHide", this)
                    }
                }, allowBlur: function (e) {
                    var t = this._.panel;
                    return void 0 !== e && (t.allowBlur = e), t.allowBlur
                }, showAsChild: function (e, t, n, i, o, r) {
                    (this._.activeChild != e || e._.panel._.offsetParentId != n.getId()) && (this.hideChild(), e.onHide = CKEDITOR.tools.bind(function () {
                        CKEDITOR.tools.setTimeout(function () {
                            this._.focused || this.hide()
                        }, 0, this)
                    }, this), this._.activeChild = e, this._.focused = !1, e.showBlock(t, n, i, o, r), this.blur(), (CKEDITOR.env.ie7Compat || CKEDITOR.env.ie6Compat) && setTimeout(function () {
                        e.element.getChild(0).$.style.cssText += ""
                    }, 100))
                }, hideChild: function (e) {
                    var t = this._.activeChild;
                    t && (delete t.onHide, delete this._.activeChild, t.hide(), e && this.focus())
                }
            }
        }), CKEDITOR.on("instanceDestroyed", function () {
            var e = CKEDITOR.tools.isEmpty(CKEDITOR.instances);
            for (var n in t) {
                var i = t[n];
                e ? i.destroy() : i.element.hide()
            }
            e && (t = {})
        })
    }(),CKEDITOR.plugins.add("colorbutton", {
        requires: "panelbutton,floatpanel", init: function (e) {
            function t(t, i, a, s) {
                var l = new CKEDITOR.style(o["colorButton_" + i + "Style"]),
                    c = CKEDITOR.tools.getNextId() + "_colorBox";
                e.ui.add(t, CKEDITOR.UI_PANELBUTTON, {
                    label: a,
                    title: a,
                    modes: {wysiwyg: 1},
                    editorFocus: 0,
                    toolbar: "colors," + s,
                    allowedContent: l,
                    requiredContent: l,
                    panel: {
                        css: CKEDITOR.skin.getPath("editor"),
                        attributes: {role: "listbox", "aria-label": r.panelTitle}
                    },
                    onBlock: function (t, o) {
                        o.autoSize = !0, o.element.addClass("cke_colorblock"), o.element.setHtml(n(t, i, c)), o.element.getDocument().getBody().setStyle("overflow", "hidden"), CKEDITOR.ui.fire("ready", this);
                        var r = o.keys, a = "rtl" == e.lang.dir;
                        r[a ? 37 : 39] = "next", r[40] = "next", r[9] = "next", r[a ? 39 : 37] = "prev", r[38] = "prev", r[CKEDITOR.SHIFT + 9] = "prev", r[32] = "click"
                    },
                    refresh: function () {
                        e.activeFilter.check(l) || this.setState(CKEDITOR.TRISTATE_DISABLED)
                    },
                    onOpen: function () {
                        var t, n = e.getSelection(), o = n && n.getStartElement(), r = e.elementPath(o);
                        if (r) {
                            o = r.block || r.blockLimit || e.document.getBody();
                            do t = o && o.getComputedStyle("back" == i ? "background-color" : "color") || "transparent"; while ("back" == i && "transparent" == t && o && (o = o.getParent()));
                            return t && "transparent" != t || (t = "#ffffff"), this._.panel._.iframe.getFrameDocument().getById(c).setStyle("background-color", t), t
                        }
                    }
                })
            }

            function n(t, n, a) {
                var s = [], l = o.colorButton_colors.split(","),
                    c = e.plugins.colordialog && o.colorButton_enableMore !== !1, d = l.length + (c ? 2 : 1),
                    u = CKEDITOR.tools.addFunction(function (n, r) {
                        function a(e) {
                            this.removeListener("ok", a), this.removeListener("cancel", a), "ok" == e.name && s(this.getContentElement("picker", "selectedColor").getValue(), r)
                        }

                        var s = arguments.callee;
                        if ("?" == n)return void e.openDialog("colordialog", function () {
                            this.on("ok", a), this.on("cancel", a)
                        });
                        if (e.focus(), t.hide(), e.fire("saveSnapshot"), e.removeStyle(new CKEDITOR.style(o["colorButton_" + r + "Style"], {color: "inherit"})), n) {
                            var l = o["colorButton_" + r + "Style"];
                            l.childRule = "back" == r ? function (e) {
                                return i(e)
                            } : function (e) {
                                return !(e.is("a") || e.getElementsByTag("a").count()) || i(e)
                            }, e.applyStyle(new CKEDITOR.style(l, {color: n}))
                        }
                        e.fire("saveSnapshot")
                    });
                s.push('<a class="cke_colorauto" _cke_focus=1 hidefocus=true title="', r.auto, '" onclick="CKEDITOR.tools.callFunction(', u, ",null,'", n, "');return false;\" href=\"javascript:void('", r.auto, '\')" role="option" aria-posinset="1" aria-setsize="', d, '"><table role="presentation" cellspacing=0 cellpadding=0 width="100%"><tr><td><span class="cke_colorbox" id="', a, '"></span></td><td colspan=7 align=center>', r.auto, '</td></tr></table></a><table role="presentation" cellspacing=0 cellpadding=0 width="100%">');
                for (var h = 0; h < l.length; h++) {
                    h % 8 === 0 && s.push("</tr><tr>");
                    var f = l[h].split("/"), m = f[0], E = f[1] || m;
                    f[1] || (m = "#" + m.replace(/^(.)(.)(.)$/, "$1$1$2$2$3$3"));
                    var g = e.lang.colorbutton.colors[E] || E;
                    s.push('<td><a class="cke_colorbox" _cke_focus=1 hidefocus=true title="', g, '" onclick="CKEDITOR.tools.callFunction(', u, ",'", m, "','", n, "'); return false;\" href=\"javascript:void('", g, '\')" role="option" aria-posinset="', h + 2, '" aria-setsize="', d, '"><span class="cke_colorbox" style="background-color:#', E, '"></span></a></td>')
                }
                return c && s.push('</tr><tr><td colspan=8 align=center><a class="cke_colormore" _cke_focus=1 hidefocus=true title="', r.more, '" onclick="CKEDITOR.tools.callFunction(', u, ",'?','", n, "');return false;\" href=\"javascript:void('", r.more, "')\"", ' role="option" aria-posinset="', d, '" aria-setsize="', d, '">', r.more, "</a></td>"), s.push("</tr></table>"), s.join("")
            }

            function i(e) {
                return "false" == e.getAttribute("contentEditable") || e.getAttribute("data-nostyle")
            }

            var o = e.config, r = e.lang.colorbutton;
            CKEDITOR.env.hc || (t("TextColor", "fore", r.textColorTitle, 10), t("BGColor", "back", r.bgColorTitle, 20))
        }
    }),CKEDITOR.config.colorButton_colors = "000,800000,8B4513,2F4F4F,008080,000080,4B0082,696969,B22222,A52A2A,DAA520,006400,40E0D0,0000CD,800080,808080,F00,FF8C00,FFD700,008000,0FF,00F,EE82EE,A9A9A9,FFA07A,FFA500,FFFF00,00FF00,AFEEEE,ADD8E6,DDA0DD,D3D3D3,FFF0F5,FAEBD7,FFFFE0,F0FFF0,F0FFFF,F0F8FF,E6E6FA,FFF",CKEDITOR.config.colorButton_foreStyle = {
        element: "span",
        styles: {color: "#(color)"},
        overrides: [{element: "font", attributes: {color: null}}]
    },CKEDITOR.config.colorButton_backStyle = {
        element: "span",
        styles: {"background-color": "#(color)"}
    },CKEDITOR.plugins.colordialog = {
        requires: "dialog", init: function (e) {
            var t = new CKEDITOR.dialogCommand("colordialog");
            t.editorFocus = !1, e.addCommand("colordialog", t), CKEDITOR.dialog.add("colordialog", this.path + "dialogs/colordialog.js"), e.getColorFromDialog = function (t, n) {
                var i = function (e) {
                    o(this);
                    var i = "ok" == e.name ? this.getValueOf("picker", "selectedColor") : null;
                    t.call(n, i)
                }, o = function (e) {
                    e.removeListener("ok", i), e.removeListener("cancel", i)
                }, r = function (e) {
                    e.on("ok", i), e.on("cancel", i)
                };
                e.execCommand("colordialog"), e._.storedDialogs && e._.storedDialogs.colordialog ? r(e._.storedDialogs.colordialog) : CKEDITOR.on("dialogDefinition", function (e) {
                    if ("colordialog" == e.data.name) {
                        var t = e.data.definition;
                        e.removeListener(), t.onLoad = CKEDITOR.tools.override(t.onLoad, function (e) {
                            return function () {
                                r(this), t.onLoad = e, "function" == typeof e && e.call(this)
                            }
                        })
                    }
                })
            }
        }
    },CKEDITOR.plugins.add("colordialog", CKEDITOR.plugins.colordialog),CKEDITOR.plugins.add("menu", {
        requires: "floatpanel",
        beforeInit: function (e) {
            for (var t = e.config.menu_groups.split(","), n = e._.menuGroups = {}, i = e._.menuItems = {}, o = 0; o < t.length; o++)n[t[o]] = o + 1;
            e.addMenuGroup = function (e, t) {
                n[e] = t || 100
            }, e.addMenuItem = function (e, t) {
                n[t.group] && (i[e] = new CKEDITOR.menuItem(this, e, t))
            }, e.addMenuItems = function (e) {
                for (var t in e)this.addMenuItem(t, e[t])
            }, e.getMenuItem = function (e) {
                return i[e]
            }, e.removeMenuItem = function (e) {
                delete i[e]
            }
        }
    }),function () {
        function e(e) {
            e.sort(function (e, t) {
                return e.group < t.group ? -1 : e.group > t.group ? 1 : e.order < t.order ? -1 : e.order > t.order ? 1 : 0
            })
        }

        var t = '<span class="cke_menuitem"><a id="{id}" class="cke_menubutton cke_menubutton__{name} cke_menubutton_{state} {cls}" href="{href}" title="{title}" tabindex="-1"_cke_focus=1 hidefocus="true" role="{role}" aria-haspopup="{hasPopup}" aria-disabled="{disabled}" {ariaChecked}';
        CKEDITOR.env.gecko && CKEDITOR.env.mac && (t += ' onkeypress="return false;"'), CKEDITOR.env.gecko && (t += ' onblur="this.style.cssText = this.style.cssText;"'), t += ' onmouseover="CKEDITOR.tools.callFunction({hoverFn},{index});" onmouseout="CKEDITOR.tools.callFunction({moveOutFn},{index});" ' + (CKEDITOR.env.ie ? 'onclick="return false;" onmouseup' : "onclick") + '="CKEDITOR.tools.callFunction({clickFn},{index}); return false;">', t += '<span class="cke_menubutton_inner"><span class="cke_menubutton_icon"><span class="cke_button_icon cke_button__{iconName}_icon" style="{iconStyle}"></span></span><span class="cke_menubutton_label">{label}</span>{arrowHtml}</span></a></span>';
        var n = '<span class="cke_menuarrow"><span>{label}</span></span>', i = CKEDITOR.addTemplate("menuItem", t),
            o = CKEDITOR.addTemplate("menuArrow", n);
        CKEDITOR.menu = CKEDITOR.tools.createClass({
            $: function (e, t) {
                t = this._.definition = t || {}, this.id = CKEDITOR.tools.getNextId(), this.editor = e, this.items = [], this._.listeners = [], this._.level = t.level || 1;
                var n = CKEDITOR.tools.extend({}, t.panel, {
                    css: [CKEDITOR.skin.getPath("editor")],
                    level: this._.level - 1,
                    block: {}
                }), i = n.block.attributes = n.attributes || {};
                !i.role && (i.role = "menu"), this._.panelDefinition = n
            }, _: {
                onShow: function () {
                    var e = this.editor.getSelection(), t = e && e.getStartElement(), n = this.editor.elementPath(),
                        i = this._.listeners;
                    this.removeAll();
                    for (var o = 0; o < i.length; o++) {
                        var r = i[o](t, e, n);
                        if (r)for (var a in r) {
                            var s = this.editor.getMenuItem(a);
                            !s || s.command && !this.editor.getCommand(s.command).state || (s.state = r[a], this.add(s))
                        }
                    }
                }, onClick: function (e) {
                    this.hide(), e.onClick ? e.onClick() : e.command && this.editor.execCommand(e.command)
                }, onEscape: function (e) {
                    var t = this.parent;
                    return t ? t._.panel.hideChild(1) : 27 == e && this.hide(1), !1
                }, onHide: function () {
                    this.onHide && this.onHide()
                }, showSubMenu: function (e) {
                    var t = this._.subMenu, n = this.items[e], i = n.getItems && n.getItems();
                    if (!i)return void this._.panel.hideChild(1);
                    t ? t.removeAll() : (t = this._.subMenu = new CKEDITOR.menu(this.editor, CKEDITOR.tools.extend({}, this._.definition, {level: this._.level + 1}, !0)), t.parent = this, t._.onClick = CKEDITOR.tools.bind(this._.onClick, this));
                    for (var o in i) {
                        var r = this.editor.getMenuItem(o);
                        r && (r.state = i[o], t.add(r))
                    }
                    var a = this._.panel.getBlock(this.id).element.getDocument().getById(this.id + String(e));
                    setTimeout(function () {
                        t.show(a, 2)
                    }, 0)
                }
            }, proto: {
                add: function (e) {
                    e.order || (e.order = this.items.length), this.items.push(e)
                }, removeAll: function () {
                    this.items = []
                }, show: function (t, n, i, o) {
                    if (this.parent || (this._.onShow(), this.items.length)) {
                        n = n || ("rtl" == this.editor.lang.dir ? 2 : 1);
                        var r = this.items, a = this.editor, s = this._.panel, l = this._.element;
                        if (!s) {
                            s = this._.panel = new CKEDITOR.ui.floatPanel(this.editor, CKEDITOR.document.getBody(), this._.panelDefinition, this._.level), s.onEscape = CKEDITOR.tools.bind(function (e) {
                                return this._.onEscape(e) === !1 ? !1 : void 0
                            }, this), s.onShow = function () {
                                var e = s._.panel.getHolderElement();
                                e.getParent().addClass("cke cke_reset_all")
                            }, s.onHide = CKEDITOR.tools.bind(function () {
                                this._.onHide && this._.onHide()
                            }, this);
                            var c = s.addBlock(this.id, this._.panelDefinition.block);
                            c.autoSize = !0;
                            var d = c.keys;
                            d[40] = "next", d[9] = "next", d[38] = "prev", d[CKEDITOR.SHIFT + 9] = "prev", d["rtl" == a.lang.dir ? 37 : 39] = CKEDITOR.env.ie ? "mouseup" : "click", d[32] = CKEDITOR.env.ie ? "mouseup" : "click", CKEDITOR.env.ie && (d[13] = "mouseup"), l = this._.element = c.element;
                            var u = l.getDocument();
                            u.getBody().setStyle("overflow", "hidden"), u.getElementsByTag("html").getItem(0).setStyle("overflow", "hidden"), this._.itemOverFn = CKEDITOR.tools.addFunction(function (e) {
                                clearTimeout(this._.showSubTimeout), this._.showSubTimeout = CKEDITOR.tools.setTimeout(this._.showSubMenu, a.config.menu_subMenuDelay || 400, this, [e])
                            }, this), this._.itemOutFn = CKEDITOR.tools.addFunction(function () {
                                clearTimeout(this._.showSubTimeout)
                            }, this), this._.itemClickFn = CKEDITOR.tools.addFunction(function (e) {
                                var t = this.items[e];
                                return t.state == CKEDITOR.TRISTATE_DISABLED ? void this.hide(1) : void(t.getItems ? this._.showSubMenu(e) : this._.onClick(t))
                            }, this)
                        }
                        e(r);
                        for (var h = a.elementPath(), f = h && h.direction() != a.lang.dir ? " cke_mixed_dir_content" : "", m = ['<div class="cke_menu' + f + '" role="presentation">'], E = r.length, g = E && r[0].group, p = 0; E > p; p++) {
                            var T = r[p];
                            g != T.group && (m.push('<div class="cke_menuseparator" role="separator"></div>'), g = T.group), T.render(this, p, m)
                        }
                        m.push("</div>"), l.setHtml(m.join("")), CKEDITOR.ui.fire("ready", this), this.parent ? this.parent._.panel.showAsChild(s, this.id, t, n, i, o) : s.showBlock(this.id, t, n, i, o), a.fire("menuShow", [s])
                    }
                }, addListener: function (e) {
                    this._.listeners.push(e)
                }, hide: function (e) {
                    this._.onHide && this._.onHide(), this._.panel && this._.panel.hide(e)
                }
            }
        }), CKEDITOR.menuItem = CKEDITOR.tools.createClass({
            $: function (e, t, n) {
                CKEDITOR.tools.extend(this, n, {
                    order: 0,
                    className: "cke_menubutton__" + t
                }), this.group = e._.menuGroups[this.group], this.editor = e, this.name = t
            }, proto: {
                render: function (e, t, n) {
                    var r = e.id + String(t), a = "undefined" == typeof this.state ? CKEDITOR.TRISTATE_OFF : this.state,
                        s = "",
                        l = a == CKEDITOR.TRISTATE_ON ? "on" : a == CKEDITOR.TRISTATE_DISABLED ? "disabled" : "off";
                    this.role in {
                        menuitemcheckbox: 1,
                        menuitemradio: 1
                    } && (s = ' aria-checked="' + (a == CKEDITOR.TRISTATE_ON ? "true" : "false") + '"');
                    var c = this.getItems, d = "&#" + ("rtl" == this.editor.lang.dir ? "9668" : "9658") + ";",
                        u = this.name;
                    this.icon && !/\./.test(this.icon) && (u = this.icon);
                    var h = {
                        id: r,
                        name: this.name,
                        iconName: u,
                        label: this.label,
                        cls: this.className || "",
                        state: l,
                        hasPopup: c ? "true" : "false",
                        disabled: a == CKEDITOR.TRISTATE_DISABLED,
                        title: this.label,
                        href: "javascript:void('" + (this.label || "").replace("'") + "')",
                        hoverFn: e._.itemOverFn,
                        moveOutFn: e._.itemOutFn,
                        clickFn: e._.itemClickFn,
                        index: t,
                        iconStyle: CKEDITOR.skin.getIconStyle(u, "rtl" == this.editor.lang.dir, u == this.icon ? null : this.icon, this.iconOffset),
                        arrowHtml: c ? o.output({label: d}) : "",
                        role: this.role ? this.role : "menuitem",
                        ariaChecked: s
                    };
                    i.output(h, n)
                }
            }
        })
    }(),CKEDITOR.config.menu_groups = "clipboard,form,tablecell,tablecellproperties,tablerow,tablecolumn,table,anchor,link,image,flash,checkbox,radio,textfield,hiddenfield,imagebutton,button,select,textarea,div",CKEDITOR.plugins.add("contextmenu", {
        requires: "menu",
        onLoad: function () {
            CKEDITOR.plugins.contextMenu = CKEDITOR.tools.createClass({
                base: CKEDITOR.menu, $: function (e) {
                    this.base.call(this, e, {
                        panel: {
                            className: "cke_menu_panel",
                            attributes: {"aria-label": e.lang.contextmenu.options}
                        }
                    })
                }, proto: {
                    addTarget: function (e, t) {
                        if (e.on("contextmenu", function (e) {
                                var i = e.data,
                                    o = CKEDITOR.env.webkit ? n : CKEDITOR.env.mac ? i.$.metaKey : i.$.ctrlKey;
                                if (!t || !o) {
                                    if (i.preventDefault(), CKEDITOR.env.mac && CKEDITOR.env.webkit) {
                                        var r = this.editor,
                                            a = new CKEDITOR.dom.elementPath(i.getTarget(), r.editable()).contains(function (e) {
                                                return e.hasAttribute("contenteditable")
                                            }, !0);
                                        a && "false" == a.getAttribute("contenteditable") && r.getSelection().fake(a)
                                    }
                                    var s = i.getTarget().getDocument(),
                                        l = i.getTarget().getDocument().getDocumentElement(),
                                        c = !s.equals(CKEDITOR.document), d = s.getWindow().getScrollPosition(),
                                        u = c ? i.$.clientX : i.$.pageX || d.x + i.$.clientX,
                                        h = c ? i.$.clientY : i.$.pageY || d.y + i.$.clientY;
                                    CKEDITOR.tools.setTimeout(function () {
                                        this.open(l, null, u, h)
                                    }, CKEDITOR.env.ie ? 200 : 0, this)
                                }
                            }, this), CKEDITOR.env.webkit) {
                            var n, i = function (e) {
                                n = CKEDITOR.env.mac ? e.data.$.metaKey : e.data.$.ctrlKey
                            }, o = function () {
                                n = 0
                            };
                            e.on("keydown", i), e.on("keyup", o), e.on("contextmenu", o)
                        }
                    }, open: function (e, t, n, i) {
                        this.editor.focus(), e = e || CKEDITOR.document.getDocumentElement(), this.editor.selectionChange(1), this.show(e, t, n, i)
                    }
                }
            })
        },
        beforeInit: function (e) {
            var t = e.contextMenu = new CKEDITOR.plugins.contextMenu(e);
            e.on("contentDom", function () {
                t.addTarget(e.editable(), e.config.browserContextMenuOnCtrl !== !1)
            }), e.addCommand("contextMenu", {
                exec: function () {
                    e.contextMenu.open(e.document.getBody())
                }
            }), e.setKeystroke(CKEDITOR.SHIFT + 121, "contextMenu"), e.setKeystroke(CKEDITOR.CTRL + CKEDITOR.SHIFT + 121, "contextMenu")
        }
    }),function () {
        function e(e, t) {
            var n = {}, i = [], o = {nbsp: "\xa0", shy: "\xad", gt: ">", lt: "<", amp: "&", apos: "'", quot: '"'};
            if (e = e.replace(/\b(nbsp|shy|gt|lt|amp|apos|quot)(?:,|$)/g, function (e, r) {
                    var a = t ? "&" + r + ";" : o[r], s = t ? o[r] : "&" + r + ";";
                    return n[a] = s, i.push(a), ""
                }), !t && e) {
                e = e.split(",");
                var r, a = document.createElement("div");
                a.innerHTML = "&" + e.join(";&") + ";", r = a.innerHTML, a = null;
                for (var s = 0; s < r.length; s++) {
                    var l = r.charAt(s);
                    n[l] = "&" + e[s] + ";", i.push(l)
                }
            }
            return n.regex = i.join(t ? "|" : ""), n
        }

        var t = "nbsp,gt,lt,amp",
            n = "quot,iexcl,cent,pound,curren,yen,brvbar,sect,uml,copy,ordf,laquo,not,shy,reg,macr,deg,plusmn,sup2,sup3,acute,micro,para,middot,cedil,sup1,ordm,raquo,frac14,frac12,frac34,iquest,times,divide,fnof,bull,hellip,prime,Prime,oline,frasl,weierp,image,real,trade,alefsym,larr,uarr,rarr,darr,harr,crarr,lArr,uArr,rArr,dArr,hArr,forall,part,exist,empty,nabla,isin,notin,ni,prod,sum,minus,lowast,radic,prop,infin,ang,and,or,cap,cup,int,there4,sim,cong,asymp,ne,equiv,le,ge,sub,sup,nsub,sube,supe,oplus,otimes,perp,sdot,lceil,rceil,lfloor,rfloor,lang,rang,loz,spades,clubs,hearts,diams,circ,tilde,ensp,emsp,thinsp,zwnj,zwj,lrm,rlm,ndash,mdash,lsquo,rsquo,sbquo,ldquo,rdquo,bdquo,dagger,Dagger,permil,lsaquo,rsaquo,euro",
            i = "Agrave,Aacute,Acirc,Atilde,Auml,Aring,AElig,Ccedil,Egrave,Eacute,Ecirc,Euml,Igrave,Iacute,Icirc,Iuml,ETH,Ntilde,Ograve,Oacute,Ocirc,Otilde,Ouml,Oslash,Ugrave,Uacute,Ucirc,Uuml,Yacute,THORN,szlig,agrave,aacute,acirc,atilde,auml,aring,aelig,ccedil,egrave,eacute,ecirc,euml,igrave,iacute,icirc,iuml,eth,ntilde,ograve,oacute,ocirc,otilde,ouml,oslash,ugrave,uacute,ucirc,uuml,yacute,thorn,yuml,OElig,oelig,Scaron,scaron,Yuml",
            o = "Alpha,Beta,Gamma,Delta,Epsilon,Zeta,Eta,Theta,Iota,Kappa,Lambda,Mu,Nu,Xi,Omicron,Pi,Rho,Sigma,Tau,Upsilon,Phi,Chi,Psi,Omega,alpha,beta,gamma,delta,epsilon,zeta,eta,theta,iota,kappa,lambda,mu,nu,xi,omicron,pi,rho,sigmaf,sigma,tau,upsilon,phi,chi,psi,omega,thetasym,upsih,piv";
        CKEDITOR.plugins.add("entities", {
            afterInit: function (r) {
                function a(e) {
                    return m[e]
                }

                function s(e) {
                    return "force" != l.entities_processNumerical && h[e] ? h[e] : "&#" + e.charCodeAt(0) + ";"
                }

                var l = r.config, c = r.dataProcessor, d = c && c.htmlFilter;
                if (d) {
                    var u = [];
                    l.basicEntities !== !1 && u.push(t), l.entities && (u.length && u.push(n), l.entities_latin && u.push(i), l.entities_greek && u.push(o), l.entities_additional && u.push(l.entities_additional));
                    var h = e(u.join(",")), f = h.regex ? "[" + h.regex + "]" : "a^";
                    delete h.regex, l.entities && l.entities_processNumerical && (f = "[^ -~]|" + f), f = new RegExp(f, "g");
                    var m = e([t, "shy"].join(","), !0), E = new RegExp(m.regex, "g");
                    d.addRules({
                        text: function (e) {
                            return e.replace(E, a).replace(f, s)
                        }
                    }, {applyToAll: !0, excludeNestedEditable: !0})
                }
            }
        })
    }(),CKEDITOR.config.basicEntities = !0,CKEDITOR.config.entities = !0,CKEDITOR.config.entities_latin = !0,CKEDITOR.config.entities_greek = !0,CKEDITOR.config.entities_additional = "#39",CKEDITOR.plugins.add("popup"),CKEDITOR.tools.extend(CKEDITOR.editor.prototype, {
        popup: function (e, t, n, i) {
            t = t || "80%", n = n || "70%", "string" == typeof t && t.length > 1 && "%" == t.substr(t.length - 1, 1) && (t = parseInt(window.screen.width * parseInt(t, 10) / 100, 10)), "string" == typeof n && n.length > 1 && "%" == n.substr(n.length - 1, 1) && (n = parseInt(window.screen.height * parseInt(n, 10) / 100, 10)), 640 > t && (t = 640), 420 > n && (n = 420);
            var o = parseInt((window.screen.height - n) / 2, 10), r = parseInt((window.screen.width - t) / 2, 10);
            i = (i || "location=no,menubar=no,toolbar=no,dependent=yes,minimizable=no,modal=yes,alwaysRaised=yes,resizable=yes,scrollbars=yes") + ",width=" + t + ",height=" + n + ",top=" + o + ",left=" + r;
            var a = window.open("", null, i, !0);
            if (!a)return !1;
            try {
                var s = navigator.userAgent.toLowerCase();
                -1 == s.indexOf(" chrome/") && (a.moveTo(r, o), a.resizeTo(t, n)), a.focus(), a.location.href = e
            } catch (l) {
                a = window.open(e, null, i, !0)
            }
            return !0
        }
    }),function () {
        function e(e, t) {
            var n = [];
            if (!t)return e;
            for (var i in t)n.push(i + "=" + encodeURIComponent(t[i]));
            return e + (-1 != e.indexOf("?") ? "&" : "?") + n.join("&")
        }

        function t(e) {
            e += "";
            var t = e.charAt(0).toUpperCase();
            return t + e.substr(1)
        }

        function n() {
            var n = this.getDialog(), i = n.getParentEditor();
            i._.filebrowserSe = this;
            var o = i.config["filebrowser" + t(n.getName()) + "WindowWidth"] || i.config.filebrowserWindowWidth || "80%",
                r = i.config["filebrowser" + t(n.getName()) + "WindowHeight"] || i.config.filebrowserWindowHeight || "70%",
                a = this.filebrowser.params || {};
            a.CKEditor = i.name, a.CKEditorFuncNum = i._.filebrowserFn, a.langCode || (a.langCode = i.langCode);
            var s = e(this.filebrowser.url, a);
            i.popup(s, o, r, i.config.filebrowserWindowFeatures || i.config.fileBrowserWindowFeatures)
        }

        function i() {
            var e = this.getDialog(), t = e.getParentEditor();
            return t._.filebrowserSe = this, e.getContentElement(this["for"][0], this["for"][1]).getInputElement().$.value && e.getContentElement(this["for"][0], this["for"][1]).getAction() ? !0 : !1
        }

        function o(t, n, i) {
            var o = i.params || {};
            o.CKEditor = t.name, o.CKEditorFuncNum = t._.filebrowserFn, o.langCode || (o.langCode = t.langCode), n.action = e(i.url, o), n.filebrowser = i
        }

        function r(e, a, s, l) {
            if (l && l.length)for (var c, d = l.length; d--;)if (c = l[d], ("hbox" == c.type || "vbox" == c.type || "fieldset" == c.type) && r(e, a, s, c.children), c.filebrowser) {
                if ("string" == typeof c.filebrowser) {
                    var u = {action: "fileButton" == c.type ? "QuickUpload" : "Browse", target: c.filebrowser};
                    c.filebrowser = u
                }
                if ("Browse" == c.filebrowser.action) {
                    var h = c.filebrowser.url;
                    void 0 === h && (h = e.config["filebrowser" + t(a) + "BrowseUrl"], void 0 === h && (h = e.config.filebrowserBrowseUrl)), h && (c.onClick = n, c.filebrowser.url = h, c.hidden = !1)
                } else if ("QuickUpload" == c.filebrowser.action && c["for"] && (h = c.filebrowser.url, void 0 === h && (h = e.config["filebrowser" + t(a) + "UploadUrl"], void 0 === h && (h = e.config.filebrowserUploadUrl)), h)) {
                    var f = c.onClick;
                    c.onClick = function (e) {
                        var t = e.sender;
                        return f && f.call(t, e) === !1 ? !1 : i.call(t, e)
                    }, c.filebrowser.url = h, c.hidden = !1, o(e, s.getContents(c["for"][0]).get(c["for"][1]), c.filebrowser)
                }
            }
        }

        function a(e, t) {
            var n = t.getDialog(), i = t.filebrowser.target || null;
            if (i) {
                var o = i.split(":"), r = n.getContentElement(o[0], o[1]);
                r && (r.setValue(e), n.selectPage(o[0]))
            }
        }

        function s(e, t, n) {
            if (-1 !== n.indexOf(";")) {
                for (var i = n.split(";"), o = 0; o < i.length; o++)if (s(e, t, i[o]))return !0;
                return !1
            }
            var r = e.getContents(t).get(n).filebrowser;
            return r && r.url
        }

        function l(e, t) {
            var n = this._.filebrowserSe.getDialog(), i = this._.filebrowserSe["for"],
                o = this._.filebrowserSe.filebrowser.onSelect;
            i && n.getContentElement(i[0], i[1]).reset(), ("function" != typeof t || t.call(this._.filebrowserSe) !== !1) && (o && o.call(this._.filebrowserSe, e, t) === !1 || ("string" == typeof t && t && alert(t), e && a(e, this._.filebrowserSe)))
        }

        CKEDITOR.plugins.add("filebrowser", {
            requires: "popup", init: function (e) {
                e._.filebrowserFn = CKEDITOR.tools.addFunction(l, e), e.on("destroy", function () {
                    CKEDITOR.tools.removeFunction(this._.filebrowserFn)
                })
            }
        }), CKEDITOR.on("dialogDefinition", function (e) {
            if (e.editor.plugins.filebrowser)for (var t, n = e.data.definition, i = 0; i < n.contents.length; ++i)(t = n.contents[i]) && (r(e.editor, e.data.name, n, t.elements), t.hidden && t.filebrowser && (t.hidden = !s(n, t.id, t.filebrowser)))
        })
    }(),CKEDITOR.plugins.add("find", {
        requires: "dialog", init: function (e) {
            var t = e.addCommand("find", new CKEDITOR.dialogCommand("find"));
            t.canUndo = !1, t.readOnly = 1;
            var n = e.addCommand("replace", new CKEDITOR.dialogCommand("replace"));
            n.canUndo = !1, e.ui.addButton && (e.ui.addButton("Find", {
                label: e.lang.find.find,
                command: "find",
                toolbar: "find,10"
            }), e.ui.addButton("Replace", {
                label: e.lang.find.replace,
                command: "replace",
                toolbar: "find,20"
            })), CKEDITOR.dialog.add("find", this.path + "dialogs/find.js"), CKEDITOR.dialog.add("replace", this.path + "dialogs/find.js")
        }
    }),CKEDITOR.config.find_highlight = {
        element: "span",
        styles: {"background-color": "#004", color: "#fff"}
    },function () {
        function e(e, t) {
            var n = i.exec(e), o = i.exec(t);
            if (n) {
                if (!n[2] && "px" == o[2])return o[1];
                if ("px" == n[2] && !o[2])return o[1] + "px"
            }
            return t
        }

        var t = CKEDITOR.htmlParser.cssStyle, n = CKEDITOR.tools.cssLength, i = /^((?:\d*(?:\.\d+))|(?:\d+))(.*)?$/i,
            o = {
                elements: {
                    $: function (n) {
                        var i = n.attributes, o = i && i["data-cke-realelement"],
                            r = o && new CKEDITOR.htmlParser.fragment.fromHtml(decodeURIComponent(o)),
                            a = r && r.children[0];
                        if (a && n.attributes["data-cke-resizable"]) {
                            var s = new t(n).rules, l = a.attributes, c = s.width, d = s.height;
                            c && (l.width = e(l.width, c)), d && (l.height = e(l.height, d))
                        }
                        return a
                    }
                }
            };
        CKEDITOR.plugins.add("fakeobjects", {
            init: function (e) {
                e.filter.allow("img[!data-cke-realelement,src,alt,title](*){*}", "fakeobjects")
            }, afterInit: function (e) {
                var t = e.dataProcessor, n = t && t.htmlFilter;
                n && n.addRules(o, {applyToAll: !0})
            }
        }), CKEDITOR.editor.prototype.createFakeElement = function (e, i, o, r) {
            var a = this.lang.fakeobjects, s = a[o] || a.unknown, l = {
                "class": i,
                "data-cke-realelement": encodeURIComponent(e.getOuterHtml()),
                "data-cke-real-node-type": e.type,
                alt: s,
                title: s,
                align: e.getAttribute("align") || ""
            };
            if (CKEDITOR.env.hc || (l.src = CKEDITOR.tools.transparentImageData), o && (l["data-cke-real-element-type"] = o), r) {
                l["data-cke-resizable"] = r;
                var c = new t, d = e.getAttribute("width"), u = e.getAttribute("height");
                d && (c.rules.width = n(d)), u && (c.rules.height = n(u)), c.populate(l)
            }
            return this.document.createElement("img", {attributes: l})
        }, CKEDITOR.editor.prototype.createFakeParserElement = function (e, i, o, r) {
            var a, s = this.lang.fakeobjects, l = s[o] || s.unknown, c = new CKEDITOR.htmlParser.basicWriter;
            e.writeHtml(c), a = c.getHtml();
            var d = {
                "class": i,
                "data-cke-realelement": encodeURIComponent(a),
                "data-cke-real-node-type": e.type,
                alt: l,
                title: l,
                align: e.attributes.align || ""
            };
            if (CKEDITOR.env.hc || (d.src = CKEDITOR.tools.transparentImageData), o && (d["data-cke-real-element-type"] = o), r) {
                d["data-cke-resizable"] = r;
                var u = e.attributes, h = new t, f = u.width, m = u.height;
                void 0 !== f && (h.rules.width = n(f)), void 0 !== m && (h.rules.height = n(m)), h.populate(d)
            }
            return new CKEDITOR.htmlParser.element("img", d)
        }, CKEDITOR.editor.prototype.restoreRealElement = function (t) {
            if (t.data("cke-real-node-type") != CKEDITOR.NODE_ELEMENT)return null;
            var n = CKEDITOR.dom.element.createFromHtml(decodeURIComponent(t.data("cke-realelement")), this.document);
            if (t.data("cke-resizable")) {
                var i = t.getStyle("width"), o = t.getStyle("height");
                i && n.setAttribute("width", e(n.getAttribute("width"), i)), o && n.setAttribute("height", e(n.getAttribute("height"), o))
            }
            return n
        }
    }(),function () {
        function e(e) {
            var t = e.attributes;
            return "application/x-shockwave-flash" == t.type || n.test(t.src || "")
        }

        function t(e, t) {
            return e.createFakeParserElement(t, "cke_flash", "flash", !0)
        }

        var n = /\.swf(?:$|\?)/i;
        CKEDITOR.plugins.add("flash", {
            requires: "dialog,fakeobjects", onLoad: function () {
                CKEDITOR.addCss("img.cke_flash{background-image: url(" + CKEDITOR.getUrl(this.path + "images/placeholder.png") + ");background-position: center center;background-repeat: no-repeat;border: 1px solid #a9a9a9;width: 80px;height: 80px;}")
            }, init: function (e) {
                var t = "object[classid,codebase,height,hspace,vspace,width];param[name,value];embed[height,hspace,pluginspage,src,type,vspace,width]";
                CKEDITOR.dialog.isTabEnabled(e, "flash", "properties") && (t += ";object[align]; embed[allowscriptaccess,quality,scale,wmode]"), CKEDITOR.dialog.isTabEnabled(e, "flash", "advanced") && (t += ";object[id]{*}; embed[bgcolor]{*}(*)"), e.addCommand("flash", new CKEDITOR.dialogCommand("flash", {
                    allowedContent: t,
                    requiredContent: "embed"
                })), e.ui.addButton && e.ui.addButton("Flash", {
                    label: e.lang.common.flash,
                    command: "flash",
                    toolbar: "insert,20"
                }), CKEDITOR.dialog.add("flash", this.path + "dialogs/flash.js"), e.addMenuItems && e.addMenuItems({
                    flash: {
                        label: e.lang.flash.properties,
                        command: "flash",
                        group: "flash"
                    }
                }), e.on("doubleclick", function (e) {
                    var t = e.data.element;
                    t.is("img") && "flash" == t.data("cke-real-element-type") && (e.data.dialog = "flash")
                }), e.contextMenu && e.contextMenu.addListener(function (e) {
                    return e && e.is("img") && !e.isReadOnly() && "flash" == e.data("cke-real-element-type") ? {flash: CKEDITOR.TRISTATE_OFF} : void 0
                })
            }, afterInit: function (n) {
                var i = n.dataProcessor, o = i && i.dataFilter;
                o && o.addRules({
                    elements: {
                        "cke:object": function (i) {
                            var o = i.attributes, r = o.classid && String(o.classid).toLowerCase();
                            if (!r && !e(i)) {
                                for (var a = 0; a < i.children.length; a++)if ("cke:embed" == i.children[a].name)return e(i.children[a]) ? t(n, i) : null;
                                return null
                            }
                            return t(n, i)
                        }, "cke:embed": function (i) {
                            return e(i) ? t(n, i) : null
                        }
                    }
                }, 5)
            }
        })
    }(),CKEDITOR.tools.extend(CKEDITOR.config, {
        flashEmbedTagOnly: !1,
        flashAddEmbedTag: !0,
        flashConvertOnEdit: !1
    }),function () {
        function e(e) {
            var t = "left" == e ? "pageXOffset" : "pageYOffset", i = "left" == e ? "scrollLeft" : "scrollTop";
            return t in n.$ ? n.$[t] : CKEDITOR.document.$.documentElement[i]
        }

        function t(t) {
            var o = t.config, r = t.fire("uiSpace", {space: "top", html: ""}).html, a = function () {
                function r(e, t, n) {
                    l.setStyle(t, i(n)), l.setStyle("position", e)
                }

                function s(e) {
                    var t = d.getDocumentPosition();
                    switch (e) {
                        case"top":
                            r("absolute", "top", t.y - m - p);
                            break;
                        case"pin":
                            r("fixed", "top", C);
                            break;
                        case"bottom":
                            r("absolute", "top", t.y + (h.height || h.bottom - h.top) + p)
                    }
                    c = e
                }

                var c, d, u, h, f, m, E, g = o.floatSpaceDockedOffsetX || 0, p = o.floatSpaceDockedOffsetY || 0,
                    T = o.floatSpacePinnedOffsetX || 0, C = o.floatSpacePinnedOffsetY || 0;
                return function (o) {
                    if (d = t.editable()) {
                        if (o && "focus" == o.name && l.show(), l.removeStyle("left"), l.removeStyle("right"), u = l.getClientRect(), h = d.getClientRect(), f = n.getViewPaneSize(), m = u.height, E = e("left"), !c)return c = "pin", s("pin"), void a(o);
                        s(m + p <= h.top ? "top" : m + p > f.height - h.bottom ? "pin" : "bottom");
                        var r, C = f.width / 2,
                            v = h.left > 0 && h.right < f.width && h.width > u.width ? "rtl" == t.config.contentsLangDirection ? "right" : "left" : C - h.left > h.right - C ? "left" : "right";
                        u.width > f.width ? (v = "left", r = 0) : (r = "left" == v ? h.left > 0 ? h.left : 0 : h.right < f.width ? f.width - h.right : 0, r + u.width > f.width && (v = "left" == v ? "right" : "left", r = 0));
                        var I = "pin" == c ? 0 : "left" == v ? E : -E;
                        l.setStyle(v, i(("pin" == c ? T : g) + r + I))
                    }
                }
            }();
            if (r) {
                var s = new CKEDITOR.template('<div id="cke_{name}" class="cke {id} cke_reset_all cke_chrome cke_editor_{name} cke_float cke_{langDir} ' + CKEDITOR.env.cssClass + '" dir="{langDir}" title="' + (CKEDITOR.env.gecko ? " " : "") + '" lang="{langCode}" role="application" style="{style}"' + (t.title ? ' aria-labelledby="cke_{name}_arialbl"' : " ") + ">" + (t.title ? '<span id="cke_{name}_arialbl" class="cke_voice_label">{voiceLabel}</span>' : " ") + '<div class="cke_inner"><div id="{topId}" class="cke_top" role="presentation">{content}</div></div></div>'),
                    l = CKEDITOR.document.getBody().append(CKEDITOR.dom.element.createFromHtml(s.output({
                        content: r,
                        id: t.id,
                        langDir: t.lang.dir,
                        langCode: t.langCode,
                        name: t.name,
                        style: "display:none;z-index:" + (o.baseFloatZIndex - 1),
                        topId: t.ui.spaceId("top"),
                        voiceLabel: t.title
                    }))), c = CKEDITOR.tools.eventsBuffer(500, a), d = CKEDITOR.tools.eventsBuffer(100, a);
                l.unselectable(), l.on("mousedown", function (e) {
                    e = e.data, e.getTarget().hasAscendant("a", 1) || e.preventDefault()
                }), t.on("focus", function (e) {
                    a(e), t.on("change", c.input), n.on("scroll", d.input), n.on("resize", d.input)
                }), t.on("blur", function () {
                    l.hide(), t.removeListener("change", c.input), n.removeListener("scroll", d.input), n.removeListener("resize", d.input)
                }), t.on("destroy", function () {
                    n.removeListener("scroll", d.input), n.removeListener("resize", d.input), l.clearCustomData(), l.remove()
                }), t.focusManager.hasFocus && l.show(), t.focusManager.add(l, 1)
            }
        }

        var n = CKEDITOR.document.getWindow(), i = CKEDITOR.tools.cssLength;
        CKEDITOR.plugins.add("floatingspace", {
            init: function (e) {
                e.on("loaded", function () {
                    t(this)
                }, null, null, 20)
            }
        })
    }(),CKEDITOR.plugins.add("listblock", {
        requires: "panel", onLoad: function () {
            var e = CKEDITOR.addTemplate("panel-list", '<ul role="presentation" class="cke_panel_list">{items}</ul>'),
                t = CKEDITOR.addTemplate("panel-list-item", '<li id="{id}" class="cke_panel_listItem" role=presentation><a id="{id}_option" _cke_focus=1 hidefocus=true title="{title}" href="javascript:void(\'{val}\')"  {onclick}="CKEDITOR.tools.callFunction({clickFn},\'{val}\'); return false;" role="option">{text}</a></li>'),
                n = CKEDITOR.addTemplate("panel-list-group", '<h1 id="{id}" class="cke_panel_grouptitle" role="presentation" >{label}</h1>'),
                i = /\'/g, o = function (e) {
                    return e.replace(i, "\\'")
                };
            CKEDITOR.ui.panel.prototype.addListBlock = function (e, t) {
                return this.addBlock(e, new CKEDITOR.ui.listBlock(this.getHolderElement(), t))
            }, CKEDITOR.ui.listBlock = CKEDITOR.tools.createClass({
                base: CKEDITOR.ui.panel.block, $: function (e, t) {
                    t = t || {};
                    var n = t.attributes || (t.attributes = {});
                    (this.multiSelect = !!t.multiSelect) && (n["aria-multiselectable"] = !0), !n.role && (n.role = "listbox"), this.base.apply(this, arguments), this.element.setAttribute("role", n.role);
                    var i = this.keys;
                    i[40] = "next", i[9] = "next", i[38] = "prev", i[CKEDITOR.SHIFT + 9] = "prev", i[32] = CKEDITOR.env.ie ? "mouseup" : "click", CKEDITOR.env.ie && (i[13] = "mouseup"), this._.pendingHtml = [], this._.pendingList = [], this._.items = {}, this._.groups = {}
                }, _: {
                    close: function () {
                        if (this._.started) {
                            var t = e.output({items: this._.pendingList.join("")});
                            this._.pendingList = [], this._.pendingHtml.push(t), delete this._.started
                        }
                    }, getClick: function () {
                        return this._.click || (this._.click = CKEDITOR.tools.addFunction(function (e) {
                            var t = this.toggle(e);
                            this.onClick && this.onClick(e, t)
                        }, this)), this._.click
                    }
                }, proto: {
                    add: function (e, n, i) {
                        var r = CKEDITOR.tools.getNextId();
                        this._.started || (this._.started = 1, this._.size = this._.size || 0), this._.items[e] = r;
                        var a = {
                            id: r,
                            val: o(CKEDITOR.tools.htmlEncodeAttr(e)),
                            onclick: CKEDITOR.env.ie ? 'onclick="return false;" onmouseup' : "onclick",
                            clickFn: this._.getClick(),
                            title: CKEDITOR.tools.htmlEncodeAttr(i || e),
                            text: n || e
                        };
                        this._.pendingList.push(t.output(a))
                    }, startGroup: function (e) {
                        this._.close();
                        var t = CKEDITOR.tools.getNextId();
                        this._.groups[e] = t, this._.pendingHtml.push(n.output({id: t, label: e}))
                    }, commit: function () {
                        this._.close(), this.element.appendHtml(this._.pendingHtml.join("")), delete this._.size, this._.pendingHtml = []
                    }, toggle: function (e) {
                        var t = this.isMarked(e);
                        return t ? this.unmark(e) : this.mark(e), !t
                    }, hideGroup: function (e) {
                        var t = this.element.getDocument().getById(this._.groups[e]), n = t && t.getNext();
                        t && (t.setStyle("display", "none"), n && "ul" == n.getName() && n.setStyle("display", "none"))
                    }, hideItem: function (e) {
                        this.element.getDocument().getById(this._.items[e]).setStyle("display", "none")
                    }, showAll: function () {
                        var e = this._.items, t = this._.groups, n = this.element.getDocument();
                        for (var i in e)n.getById(e[i]).setStyle("display", "");
                        for (var o in t) {
                            var r = n.getById(t[o]), a = r.getNext();
                            r.setStyle("display", ""), a && "ul" == a.getName() && a.setStyle("display", "")
                        }
                    }, mark: function (e) {
                        this.multiSelect || this.unmarkAll();
                        var t = this._.items[e], n = this.element.getDocument().getById(t);
                        n.addClass("cke_selected"), this.element.getDocument().getById(t + "_option").setAttribute("aria-selected", !0), this.onMark && this.onMark(n)
                    }, unmark: function (e) {
                        var t = this.element.getDocument(), n = this._.items[e], i = t.getById(n);
                        i.removeClass("cke_selected"), t.getById(n + "_option").removeAttribute("aria-selected"), this.onUnmark && this.onUnmark(i)
                    }, unmarkAll: function () {
                        var e = this._.items, t = this.element.getDocument();
                        for (var n in e) {
                            var i = e[n];
                            t.getById(i).removeClass("cke_selected"), t.getById(i + "_option").removeAttribute("aria-selected")
                        }
                        this.onUnmark && this.onUnmark()
                    }, isMarked: function (e) {
                        return this.element.getDocument().getById(this._.items[e]).hasClass("cke_selected")
                    }, focus: function (e) {
                        this._.focusIndex = -1;
                        var t, n, i = this.element.getElementsByTag("a"), o = -1;
                        if (e) {
                            for (n = this.element.getDocument().getById(this._.items[e]).getFirst(); t = i.getItem(++o);)if (t.equals(n)) {
                                this._.focusIndex = o;
                                break
                            }
                        } else this.element.focus();
                        n && setTimeout(function () {
                            n.focus()
                        }, 0)
                    }
                }
            })
        }
    }),CKEDITOR.plugins.add("richcombo", {
        requires: "floatpanel,listblock,button", beforeInit: function (e) {
            e.ui.addHandler(CKEDITOR.UI_RICHCOMBO, CKEDITOR.ui.richCombo.handler)
        }
    }),function () {
        var e = '<span id="{id}" class="cke_combo cke_combo__{name} {cls}" role="presentation"><span id="{id}_label" class="cke_combo_label">{label}</span><a class="cke_combo_button" title="{title}" tabindex="-1"' + (CKEDITOR.env.gecko && !CKEDITOR.env.hc ? "" : " href=\"javascript:void('{titleJs}')\"") + ' hidefocus="true" role="button" aria-labelledby="{id}_label" aria-haspopup="true"';
        CKEDITOR.env.gecko && CKEDITOR.env.mac && (e += ' onkeypress="return false;"'), CKEDITOR.env.gecko && (e += ' onblur="this.style.cssText = this.style.cssText;"'), e += ' onkeydown="return CKEDITOR.tools.callFunction({keydownFn},event,this);" onfocus="return CKEDITOR.tools.callFunction({focusFn},event);" ' + (CKEDITOR.env.ie ? 'onclick="return false;" onmouseup' : "onclick") + '="CKEDITOR.tools.callFunction({clickFn},this);return false;"><span id="{id}_text" class="cke_combo_text cke_combo_inlinelabel">{label}</span><span class="cke_combo_open"><span class="cke_combo_arrow">' + (CKEDITOR.env.hc ? "&#9660;" : CKEDITOR.env.air ? "&nbsp;" : "") + "</span></span></a></span>";
        var t = CKEDITOR.addTemplate("combo", e);
        CKEDITOR.UI_RICHCOMBO = "richcombo", CKEDITOR.ui.richCombo = CKEDITOR.tools.createClass({
            $: function (e) {
                CKEDITOR.tools.extend(this, e, {canGroup: !1, title: e.label, modes: {wysiwyg: 1}, editorFocus: 1});
                var t = this.panel || {};
                delete this.panel, this.id = CKEDITOR.tools.getNextNumber(), this.document = t.parent && t.parent.getDocument() || CKEDITOR.document, t.className = "cke_combopanel", t.block = {
                    multiSelect: t.multiSelect,
                    attributes: t.attributes
                }, t.toolbarRelated = !0, this._ = {panelDefinition: t, items: {}}
            }, proto: {
                renderHtml: function (e) {
                    var t = [];
                    return this.render(e, t), t.join("")
                }, render: function (e, n) {
                    function i() {
                        if (this.getState() != CKEDITOR.TRISTATE_ON) {
                            var t = this.modes[e.mode] ? CKEDITOR.TRISTATE_OFF : CKEDITOR.TRISTATE_DISABLED;
                            e.readOnly && !this.readOnly && (t = CKEDITOR.TRISTATE_DISABLED), this.setState(t), this.setValue(""), t != CKEDITOR.TRISTATE_DISABLED && this.refresh && this.refresh()
                        }
                    }

                    var o = CKEDITOR.env, r = "cke_" + this.id, a = CKEDITOR.tools.addFunction(function (t) {
                        u && (e.unlockSelection(1), u = 0), l.execute(t)
                    }, this), s = this, l = {
                        id: r, combo: this, focus: function () {
                            var e = CKEDITOR.document.getById(r).getChild(1);
                            e.focus()
                        }, execute: function (t) {
                            var n = s._;
                            if (n.state != CKEDITOR.TRISTATE_DISABLED) {
                                if (s.createPanel(e), n.on)return void n.panel.hide();
                                s.commit();
                                var i = s.getValue();
                                i ? n.list.mark(i) : n.list.unmarkAll(), n.panel.showBlock(s.id, new CKEDITOR.dom.element(t), 4)
                            }
                        }, clickFn: a
                    };
                    e.on("activeFilterChange", i, this), e.on("mode", i, this), e.on("selectionChange", i, this), !this.readOnly && e.on("readOnly", i, this);
                    var c = CKEDITOR.tools.addFunction(function (t, n) {
                        t = new CKEDITOR.dom.event(t);
                        var i = t.getKeystroke();
                        switch (40 == i && e.once("panelShow", function (e) {
                            e.data._.panel._.currentBlock.onKeyDown(40)
                        }), i) {
                            case 13:
                            case 32:
                            case 40:
                                CKEDITOR.tools.callFunction(a, n);
                                break;
                            default:
                                l.onkey(l, i)
                        }
                        t.preventDefault()
                    }), d = CKEDITOR.tools.addFunction(function () {
                        l.onfocus && l.onfocus()
                    }), u = 0;
                    l.keyDownFn = c;
                    var h = {
                        id: r,
                        name: this.name || this.command,
                        label: this.label,
                        title: this.title,
                        cls: this.className || "",
                        titleJs: o.gecko && !o.hc ? "" : (this.title || "").replace("'", ""),
                        keydownFn: c,
                        focusFn: d,
                        clickFn: a
                    };
                    return t.output(h, n), this.onRender && this.onRender(), l
                }, createPanel: function (e) {
                    if (!this._.panel) {
                        var t = this._.panelDefinition, n = this._.panelDefinition.block,
                            i = t.parent || CKEDITOR.document.getBody(), o = "cke_combopanel__" + this.name,
                            r = new CKEDITOR.ui.floatPanel(e, i, t), a = r.addListBlock(this.id, n), s = this;
                        r.onShow = function () {
                            this.element.addClass(o), s.setState(CKEDITOR.TRISTATE_ON), s._.on = 1, s.editorFocus && !e.focusManager.hasFocus && e.focus(), s.onOpen && s.onOpen(), e.once("panelShow", function () {
                                a.focus(!a.multiSelect && s.getValue())
                            })
                        }, r.onHide = function (t) {
                            this.element.removeClass(o), s.setState(s.modes && s.modes[e.mode] ? CKEDITOR.TRISTATE_OFF : CKEDITOR.TRISTATE_DISABLED), s._.on = 0, !t && s.onClose && s.onClose()
                        }, r.onEscape = function () {
                            r.hide(1)
                        }, a.onClick = function (e, t) {
                            s.onClick && s.onClick.call(s, e, t), r.hide()
                        }, this._.panel = r, this._.list = a, r.getBlock(this.id).onHide = function () {
                            s._.on = 0, s.setState(CKEDITOR.TRISTATE_OFF)
                        }, this.init && this.init()
                    }
                }, setValue: function (e, t) {
                    this._.value = e;
                    var n = this.document.getById("cke_" + this.id + "_text");
                    n && (e || t ? n.removeClass("cke_combo_inlinelabel") : (t = this.label, n.addClass("cke_combo_inlinelabel")), n.setText("undefined" != typeof t ? t : e))
                }, getValue: function () {
                    return this._.value || ""
                }, unmarkAll: function () {
                    this._.list.unmarkAll()
                }, mark: function (e) {
                    this._.list.mark(e)
                }, hideItem: function (e) {
                    this._.list.hideItem(e)
                }, hideGroup: function (e) {
                    this._.list.hideGroup(e)
                }, showAll: function () {
                    this._.list.showAll()
                }, add: function (e, t, n) {
                    this._.items[e] = n || e, this._.list.add(e, t, n)
                }, startGroup: function (e) {
                    this._.list.startGroup(e)
                }, commit: function () {
                    this._.committed || (this._.list.commit(), this._.committed = 1, CKEDITOR.ui.fire("ready", this)), this._.committed = 1
                }, setState: function (e) {
                    if (this._.state != e) {
                        var t = this.document.getById("cke_" + this.id);
                        t.setState(e, "cke_combo"), e == CKEDITOR.TRISTATE_DISABLED ? t.setAttribute("aria-disabled", !0) : t.removeAttribute("aria-disabled"), this._.state = e
                    }
                }, getState: function () {
                    return this._.state
                }, enable: function () {
                    this._.state == CKEDITOR.TRISTATE_DISABLED && this.setState(this._.lastState)
                }, disable: function () {
                    this._.state != CKEDITOR.TRISTATE_DISABLED && (this._.lastState = this._.state, this.setState(CKEDITOR.TRISTATE_DISABLED))
                }
            }, statics: {
                handler: {
                    create: function (e) {
                        return new CKEDITOR.ui.richCombo(e)
                    }
                }
            }
        }), CKEDITOR.ui.prototype.addRichCombo = function (e, t) {
            this.add(e, CKEDITOR.UI_RICHCOMBO, t)
        }
    }(),CKEDITOR.plugins.add("format", {
        requires: "richcombo", init: function (e) {
            if (!e.blockless) {
                for (var t = e.config, n = e.lang.format, i = t.format_tags.split(";"), o = {}, r = 0, a = [], s = 0; s < i.length; s++) {
                    var l = i[s], c = new CKEDITOR.style(t["format_" + l]);
                    (!e.filter.customConfig || e.filter.check(c)) && (r++, o[l] = c, o[l]._.enterMode = e.config.enterMode, a.push(c))
                }
                0 !== r && e.ui.addRichCombo("Format", {
                    label: n.label,
                    title: n.panelTitle,
                    toolbar: "styles,20",
                    allowedContent: a,
                    panel: {
                        css: [CKEDITOR.skin.getPath("editor")].concat(t.contentsCss),
                        multiSelect: !1,
                        attributes: {"aria-label": n.panelTitle}
                    },
                    init: function () {
                        this.startGroup(n.panelTitle);
                        for (var e in o) {
                            var t = n["tag_" + e];
                            this.add(e, o[e].buildPreview(t), t)
                        }
                    },
                    onClick: function (t) {
                        e.focus(), e.fire("saveSnapshot");
                        var n = o[t], i = e.elementPath();
                        e[n.checkActive(i, e) ? "removeStyle" : "applyStyle"](n), setTimeout(function () {
                            e.fire("saveSnapshot")
                        }, 0)
                    },
                    onRender: function () {
                        e.on("selectionChange", function (t) {
                            var n = this.getValue(), i = t.data.path;
                            this.refresh();
                            for (var r in o)if (o[r].checkActive(i, e))return void(r != n && this.setValue(r, e.lang.format["tag_" + r]));
                            this.setValue("")
                        }, this)
                    },
                    onOpen: function () {
                        this.showAll();
                        for (var t in o) {
                            var n = o[t];
                            e.activeFilter.check(n) || this.hideItem(t)
                        }
                    },
                    refresh: function () {
                        var t = e.elementPath();
                        if (t) {
                            if (!t.isContextFor("p"))return void this.setState(CKEDITOR.TRISTATE_DISABLED);
                            for (var n in o)if (e.activeFilter.check(o[n]))return;
                            this.setState(CKEDITOR.TRISTATE_DISABLED)
                        }
                    }
                })
            }
        }
    }),CKEDITOR.config.format_tags = "p;h1;h2;h3;h4;h5;h6;pre;address;div",CKEDITOR.config.format_p = {element: "p"},CKEDITOR.config.format_div = {element: "div"},CKEDITOR.config.format_pre = {element: "pre"},CKEDITOR.config.format_address = {element: "address"},CKEDITOR.config.format_h1 = {element: "h1"},CKEDITOR.config.format_h2 = {element: "h2"},CKEDITOR.config.format_h3 = {element: "h3"},CKEDITOR.config.format_h4 = {element: "h4"},CKEDITOR.config.format_h5 = {element: "h5"},CKEDITOR.config.format_h6 = {element: "h6"},function () {
        var e = {
            canUndo: !1, exec: function (e) {
                var t = e.document.createElement("hr");
                e.insertElement(t)
            }, allowedContent: "hr", requiredContent: "hr"
        }, t = "horizontalrule";
        CKEDITOR.plugins.add(t, {
            init: function (n) {
                n.blockless || (n.addCommand(t, e), n.ui.addButton && n.ui.addButton("HorizontalRule", {
                    label: n.lang.horizontalrule.toolbar,
                    command: t,
                    toolbar: "insert,40"
                }))
            }
        })
    }(),CKEDITOR.plugins.add("htmlwriter", {
        init: function (e) {
            var t = new CKEDITOR.htmlWriter;
            t.forceSimpleAmpersand = e.config.forceSimpleAmpersand, t.indentationChars = e.config.dataIndentationChars || "	", e.dataProcessor.writer = t
        }
    }),CKEDITOR.htmlWriter = CKEDITOR.tools.createClass({
        base: CKEDITOR.htmlParser.basicWriter, $: function () {
            this.base(), this.indentationChars = "	", this.selfClosingEnd = " />", this.lineBreakChars = "\n", this.sortAttributes = 1, this._.indent = 0, this._.indentation = "", this._.inPre = 0, this._.rules = {};
            var e = CKEDITOR.dtd;
            for (var t in CKEDITOR.tools.extend({}, e.$nonBodyContent, e.$block, e.$listItem, e.$tableContent))this.setRules(t, {
                indent: !e[t]["#"],
                breakBeforeOpen: 1,
                breakBeforeClose: !e[t]["#"],
                breakAfterClose: 1,
                needsSpace: t in e.$block && !(t in {li: 1, dt: 1, dd: 1})
            });
            this.setRules("br", {breakAfterOpen: 1}), this.setRules("title", {
                indent: 0,
                breakAfterOpen: 0
            }), this.setRules("style", {indent: 0, breakBeforeClose: 1}), this.setRules("pre", {
                breakAfterOpen: 1,
                indent: 0
            })
        }, proto: {
            openTag: function (e) {
                var t = this._.rules[e];
                this._.afterCloser && t && t.needsSpace && this._.needsSpace && this._.output.push("\n"), this._.indent ? this.indentation() : t && t.breakBeforeOpen && (this.lineBreak(), this.indentation()), this._.output.push("<", e), this._.afterCloser = 0
            }, openTagClose: function (e, t) {
                var n = this._.rules[e];
                t ? (this._.output.push(this.selfClosingEnd), n && n.breakAfterClose && (this._.needsSpace = n.needsSpace)) : (this._.output.push(">"), n && n.indent && (this._.indentation += this.indentationChars)), n && n.breakAfterOpen && this.lineBreak(), "pre" == e && (this._.inPre = 1)
            }, attribute: function (e, t) {
                "string" == typeof t && (this.forceSimpleAmpersand && (t = t.replace(/&amp;/g, "&")), t = CKEDITOR.tools.htmlEncodeAttr(t)), this._.output.push(" ", e, '="', t, '"')
            }, closeTag: function (e) {
                var t = this._.rules[e];
                t && t.indent && (this._.indentation = this._.indentation.substr(this.indentationChars.length)), this._.indent ? this.indentation() : t && t.breakBeforeClose && (this.lineBreak(), this.indentation()), this._.output.push("</", e, ">"), "pre" == e && (this._.inPre = 0), t && t.breakAfterClose && (this.lineBreak(), this._.needsSpace = t.needsSpace), this._.afterCloser = 1
            }, text: function (e) {
                this._.indent && (this.indentation(), !this._.inPre && (e = CKEDITOR.tools.ltrim(e))), this._.output.push(e)
            }, comment: function (e) {
                this._.indent && this.indentation(), this._.output.push("<!--", e, "-->")
            }, lineBreak: function () {
                !this._.inPre && this._.output.length > 0 && this._.output.push(this.lineBreakChars), this._.indent = 1
            }, indentation: function () {
                !this._.inPre && this._.indentation && this._.output.push(this._.indentation), this._.indent = 0
            }, reset: function () {
                this._.output = [], this._.indent = 0, this._.indentation = "", this._.afterCloser = 0, this._.inPre = 0
            }, setRules: function (e, t) {
                var n = this._.rules[e];
                n ? CKEDITOR.tools.extend(n, t, !0) : this._.rules[e] = t
            }
        }
    }),function () {
        CKEDITOR.plugins.add("iframe", {
            requires: "dialog,fakeobjects", onLoad: function () {
                CKEDITOR.addCss("img.cke_iframe{background-image: url(" + CKEDITOR.getUrl(this.path + "images/placeholder.png") + ");background-position: center center;background-repeat: no-repeat;border: 1px solid #a9a9a9;width: 80px;height: 80px;}")
            }, init: function (e) {
                var t = "iframe", n = e.lang.iframe,
                    i = "iframe[align,longdesc,frameborder,height,name,scrolling,src,title,width]";
                e.plugins.dialogadvtab && (i += ";iframe" + e.plugins.dialogadvtab.allowedContent({
                        id: 1,
                        classes: 1,
                        styles: 1
                    })), CKEDITOR.dialog.add(t, this.path + "dialogs/iframe.js"), e.addCommand(t, new CKEDITOR.dialogCommand(t, {
                    allowedContent: i,
                    requiredContent: "iframe"
                })), e.ui.addButton && e.ui.addButton("Iframe", {
                    label: n.toolbar,
                    command: t,
                    toolbar: "insert,80"
                }), e.on("doubleclick", function (e) {
                    var t = e.data.element;
                    t.is("img") && "iframe" == t.data("cke-real-element-type") && (e.data.dialog = "iframe")
                }), e.addMenuItems && e.addMenuItems({
                    iframe: {
                        label: n.title,
                        command: "iframe",
                        group: "image"
                    }
                }), e.contextMenu && e.contextMenu.addListener(function (e) {
                    return e && e.is("img") && "iframe" == e.data("cke-real-element-type") ? {iframe: CKEDITOR.TRISTATE_OFF} : void 0
                })
            }, afterInit: function (e) {
                var t = e.dataProcessor, n = t && t.dataFilter;
                n && n.addRules({
                    elements: {
                        iframe: function (t) {
                            return e.createFakeParserElement(t, "cke_iframe", "iframe", !0)
                        }
                    }
                })
            }
        })
    }(),function () {
        function e(e, t) {
            CKEDITOR.tools.extend(this, {
                editor: e,
                editable: e.editable(),
                doc: e.document,
                win: e.window
            }, t, !0), this.inline = this.editable.isInline(), this.inline || (this.frame = this.win.getFrame()), this.target = this[this.inline ? "editable" : "doc"]
        }

        function t(e, t) {
            CKEDITOR.tools.extend(this, t, {editor: e}, !0)
        }

        function n(e, t) {
            var n = e.editable();
            CKEDITOR.tools.extend(this, {
                editor: e,
                editable: n,
                doc: e.document,
                win: e.window,
                container: CKEDITOR.document.getBody(),
                winTop: CKEDITOR.document.getWindow()
            }, t, !0), this.hidden = {}, this.visible = {}, this.inline = n.isInline(), this.inline || (this.frame = this.win.getFrame()), this.queryViewport();
            var i = CKEDITOR.tools.bind(this.queryViewport, this), o = CKEDITOR.tools.bind(this.hideVisible, this),
                r = CKEDITOR.tools.bind(this.removeAll, this);
            n.attachListener(this.winTop, "resize", i), n.attachListener(this.winTop, "scroll", i), n.attachListener(this.winTop, "resize", o), n.attachListener(this.win, "scroll", o), n.attachListener(this.inline ? n : this.frame, "mouseout", function (e) {
                var t = e.data.$.clientX, n = e.data.$.clientY;
                this.queryViewport(), (t <= this.rect.left || t >= this.rect.right || n <= this.rect.top || n >= this.rect.bottom) && this.hideVisible(), (0 >= t || t >= this.winTopPane.width || 0 >= n || n >= this.winTopPane.height) && this.hideVisible()
            }, this), n.attachListener(e, "resize", i), n.attachListener(e, "mode", r), e.on("destroy", r), this.lineTpl = new CKEDITOR.template(u).output({
                lineStyle: CKEDITOR.tools.writeCssText(CKEDITOR.tools.extend({}, d, this.lineStyle, !0)),
                tipLeftStyle: CKEDITOR.tools.writeCssText(CKEDITOR.tools.extend({}, c, {
                    left: "0px",
                    "border-left-color": "red",
                    "border-width": "6px 0 6px 6px"
                }, this.tipCss, this.tipLeftStyle, !0)),
                tipRightStyle: CKEDITOR.tools.writeCssText(CKEDITOR.tools.extend({}, c, {
                    right: "0px",
                    "border-right-color": "red",
                    "border-width": "6px 6px 6px 0"
                }, this.tipCss, this.tipRightStyle, !0))
            })
        }

        function i(e, t) {
            return e & t
        }

        function o(e) {
            return e && e.type == CKEDITOR.NODE_ELEMENT
        }

        function r(e) {
            return !(!h[e.getComputedStyle("float")] && !h[e.getAttribute("align")])
        }

        function a(e) {
            return !!f[e.getComputedStyle("position")]
        }

        function s(e) {
            return o(e) && "true" == e.getAttribute("contenteditable")
        }

        function l(e) {
            return o(e) && !r(e) && !a(e)
        }

        CKEDITOR.plugins.add("lineutils"), CKEDITOR.LINEUTILS_BEFORE = 1, CKEDITOR.LINEUTILS_AFTER = 2, CKEDITOR.LINEUTILS_INSIDE = 4, e.prototype = {
            start: function (e) {
                var t, n, i, o = this, r = this.editor, a = this.doc, s = CKEDITOR.tools.eventsBuffer(50, function () {
                    r.readOnly || "wysiwyg" != r.mode || (o.relations = {}, t = new CKEDITOR.dom.element(a.$.elementFromPoint(n, i)), o.traverseSearch(t), isNaN(n + i) || o.pixelSearch(t, n, i), e && e(o.relations, n, i))
                });
                this.listener = this.editable.attachListener(this.target, "mousemove", function (e) {
                    n = e.data.$.clientX, i = e.data.$.clientY, s.input()
                }), this.editable.attachListener(this.inline ? this.editable : this.frame, "mouseout", function () {
                    s.reset()
                })
            }, stop: function () {
                this.listener && this.listener.removeListener()
            }, getRange: function () {
                var e = {};
                return e[CKEDITOR.LINEUTILS_BEFORE] = CKEDITOR.POSITION_BEFORE_START, e[CKEDITOR.LINEUTILS_AFTER] = CKEDITOR.POSITION_AFTER_END, e[CKEDITOR.LINEUTILS_INSIDE] = CKEDITOR.POSITION_AFTER_START, function (t) {
                    var n = this.editor.createRange();
                    return n.moveToPosition(this.relations[t.uid].element, e[t.type]), n
                }
            }(), store: function () {
                function e(e, t, n) {
                    var i = e.getUniqueId();
                    i in n ? n[i].type |= t : n[i] = {element: e, type: t}
                }

                return function (t, n) {
                    var o;
                    i(n, CKEDITOR.LINEUTILS_AFTER) && l(o = t.getNext()) && o.isVisible() && (e(o, CKEDITOR.LINEUTILS_BEFORE, this.relations), n ^= CKEDITOR.LINEUTILS_AFTER), i(n, CKEDITOR.LINEUTILS_INSIDE) && l(o = t.getFirst()) && o.isVisible() && (e(o, CKEDITOR.LINEUTILS_BEFORE, this.relations), n ^= CKEDITOR.LINEUTILS_INSIDE), e(t, n, this.relations)
                }
            }(), traverseSearch: function (e) {
                var t, n, i;
                do if (i = e.$["data-cke-expando"], !(i && i in this.relations)) {
                    if (e.equals(this.editable))return;
                    if (l(e))for (t in this.lookups)(n = this.lookups[t](e)) && this.store(e, n)
                } while (!s(e) && (e = e.getParent()))
            }, pixelSearch: function () {
                function e(e, n, i, o, r) {
                    for (var a, s = i, c = 0; r(s);) {
                        if (s += o, 25 == ++c)return;
                        if (a = this.doc.$.elementFromPoint(n, s))if (a != e) {
                            if (t(e, a) && (c = 0, l(a = new CKEDITOR.dom.element(a))))return a
                        } else c = 0
                    }
                }

                var t = CKEDITOR.env.ie || CKEDITOR.env.webkit ? function (e, t) {
                    return e.contains(t)
                } : function (e, t) {
                    return !!(16 & e.compareDocumentPosition(t))
                };
                return function (t, n, i) {
                    var o = this.win.getViewPaneSize().height, r = e.call(this, t.$, n, i, -1, function (e) {
                        return e > 0
                    }), a = e.call(this, t.$, n, i, 1, function (e) {
                        return o > e
                    });
                    if (r)for (this.traverseSearch(r); !r.getParent().equals(t);)r = r.getParent();
                    if (a)for (this.traverseSearch(a); !a.getParent().equals(t);)a = a.getParent();
                    for (; (r || a) && (r && (r = r.getNext(l)), r && !r.equals(a)) && (this.traverseSearch(r), a && (a = a.getPrevious(l)), a && !a.equals(r));)this.traverseSearch(a)
                }
            }(), greedySearch: function () {
                this.relations = {};
                for (var e, t, n, i = this.editable.getElementsByTag("*"), o = 0; e = i.getItem(o++);)if (!e.equals(this.editable) && (e.hasAttribute("contenteditable") || !e.isReadOnly()) && l(e) && e.isVisible())for (n in this.lookups)(t = this.lookups[n](e)) && this.store(e, t);
                return this.relations
            }
        }, t.prototype = {
            locate: function () {
                function e(e, t) {
                    var n = e.element[t === CKEDITOR.LINEUTILS_BEFORE ? "getPrevious" : "getNext"]();
                    return n && l(n) ? (e.siblingRect = n.getClientRect(), t == CKEDITOR.LINEUTILS_BEFORE ? (e.siblingRect.bottom + e.elementRect.top) / 2 : (e.elementRect.bottom + e.siblingRect.top) / 2) : t == CKEDITOR.LINEUTILS_BEFORE ? e.elementRect.top : e.elementRect.bottom
                }

                return function (t) {
                    var n;
                    this.locations = {};
                    for (var o in t)n = t[o], n.elementRect = n.element.getClientRect(), i(n.type, CKEDITOR.LINEUTILS_BEFORE) && this.store(o, CKEDITOR.LINEUTILS_BEFORE, e(n, CKEDITOR.LINEUTILS_BEFORE)), i(n.type, CKEDITOR.LINEUTILS_AFTER) && this.store(o, CKEDITOR.LINEUTILS_AFTER, e(n, CKEDITOR.LINEUTILS_AFTER)), i(n.type, CKEDITOR.LINEUTILS_INSIDE) && this.store(o, CKEDITOR.LINEUTILS_INSIDE, (n.elementRect.top + n.elementRect.bottom) / 2);
                    return this.locations
                }
            }(), sort: function () {
                function e(e, n, i) {
                    return Math.abs(e - t[n][i])
                }

                var t, n, i, o;
                return function (r, a) {
                    t = this.locations, n = [];
                    for (var s in t)for (var l in t[s])if (i = e(r, s, l), n.length) {
                        for (o = 0; o < n.length; o++)if (i < n[o].dist) {
                            n.splice(o, 0, {uid: +s, type: l, dist: i});
                            break
                        }
                        o == n.length && n.push({uid: +s, type: l, dist: i})
                    } else n.push({uid: +s, type: l, dist: i});
                    return "undefined" != typeof a ? n.slice(0, a) : n
                }
            }(), store: function (e, t, n) {
                this.locations[e] || (this.locations[e] = {}), this.locations[e][t] = n
            }
        };
        var c = {
                display: "block",
                width: "0px",
                height: "0px",
                "border-color": "transparent",
                "border-style": "solid",
                position: "absolute",
                top: "-6px"
            }, d = {height: "0px", "border-top": "1px dashed red", position: "absolute", "z-index": 9999},
            u = '<div data-cke-lineutils-line="1" class="cke_reset_all" style="{lineStyle}"><span style="{tipLeftStyle}">&nbsp;</span><span style="{tipRightStyle}">&nbsp;</span></div>';
        n.prototype = {
            removeAll: function () {
                var e;
                for (e in this.hidden)this.hidden[e].remove(), delete this.hidden[e];
                for (e in this.visible)this.visible[e].remove(), delete this.visible[e]
            }, hideLine: function (e) {
                var t = e.getUniqueId();
                e.hide(), this.hidden[t] = e, delete this.visible[t]
            }, showLine: function (e) {
                var t = e.getUniqueId();
                e.show(), this.visible[t] = e, delete this.hidden[t]
            }, hideVisible: function () {
                for (var e in this.visible)this.hideLine(this.visible[e])
            }, placeLine: function (e, t) {
                var n, i, o;
                if (n = this.getStyle(e.uid, e.type)) {
                    for (o in this.visible)if (this.visible[o].getCustomData("hash") !== this.hash) {
                        i = this.visible[o];
                        break
                    }
                    if (!i)for (o in this.hidden)if (this.hidden[o].getCustomData("hash") !== this.hash) {
                        this.showLine(i = this.hidden[o]);
                        break
                    }
                    i || this.showLine(i = this.addLine()), i.setCustomData("hash", this.hash), this.visible[i.getUniqueId()] = i, i.setStyles(n), t && t(i)
                }
            }, getStyle: function (e, t) {
                var n, i = this.relations[e], o = this.locations[e][t], r = {};
                if (r.width = i.siblingRect ? Math.max(i.siblingRect.width, i.elementRect.width) : i.elementRect.width, r.top = this.inline ? o + this.winTopScroll.y : this.rect.top + this.winTopScroll.y + o, r.top - this.winTopScroll.y < this.rect.top || r.top - this.winTopScroll.y > this.rect.bottom)return !1;
                this.inline ? r.left = i.elementRect.left : (i.elementRect.left > 0 ? r.left = this.rect.left + i.elementRect.left : (r.width += i.elementRect.left, r.left = this.rect.left), (n = r.left + r.width - (this.rect.left + this.winPane.width)) > 0 && (r.width -= n)), r.left += this.winTopScroll.x;
                for (var a in r)r[a] = CKEDITOR.tools.cssLength(r[a]);
                return r
            }, addLine: function () {
                var e = CKEDITOR.dom.element.createFromHtml(this.lineTpl);
                return e.appendTo(this.container), e
            }, prepare: function (e, t) {
                this.relations = e, this.locations = t, this.hash = Math.random()
            }, cleanup: function () {
                var e;
                for (var t in this.visible)e = this.visible[t], e.getCustomData("hash") !== this.hash && this.hideLine(e)
            }, queryViewport: function () {
                this.winPane = this.win.getViewPaneSize(), this.winTopScroll = this.winTop.getScrollPosition(), this.winTopPane = this.winTop.getViewPaneSize(), this.rect = this.inline ? this.editable.getClientRect() : this.frame.getClientRect()
            }
        };
        var h = {left: 1, right: 1, center: 1}, f = {absolute: 1, fixed: 1};
        CKEDITOR.plugins.lineutils = {finder: e, locator: t, liner: n}
    }(),function () {
        function e(e) {
            this.editor = e, this.registered = {}, this.instances = {}, this.selected = [], this.focused = null, this.widgetHoldingFocusedEditable = null, this._ = {
                nextId: 0,
                upcasts: [],
                upcastCallbacks: [],
                filters: {}
            }, P(this), L(this), S(this), x(this), w(this), A(this)
        }

        function t(e, n, i, o, r) {
            var a = e.editor;
            CKEDITOR.tools.extend(this, o, {
                editor: a,
                id: n,
                inline: "span" == i.getParent().getName(),
                element: i,
                data: CKEDITOR.tools.extend({}, "function" == typeof o.defaults ? o.defaults() : o.defaults),
                dataReady: !1,
                inited: !1,
                ready: !1,
                edit: t.prototype.edit,
                focusedEditable: null,
                definition: o,
                repository: e,
                draggable: o.draggable !== !1,
                _: {downcastFn: o.downcast && "string" == typeof o.downcast ? o.downcasts[o.downcast] : o.downcast}
            }, !0), e.fire("instanceCreated", this), Q(this, o), this.init && this.init(), this.inited = !0, et(this, r), this.isInited() && a.editable().contains(this.wrapper) && (this.ready = !0, this.fire("ready"))
        }

        function n(e, t, n) {
            CKEDITOR.dom.element.call(this, t.$), this.editor = e;
            var i = this.filter = n.filter;
            CKEDITOR.dtd[this.getName()].p ? (this.enterMode = i ? i.getAllowedEnterMode(e.enterMode) : e.enterMode, this.shiftEnterMode = i ? i.getAllowedEnterMode(e.shiftEnterMode, !0) : e.shiftEnterMode) : this.enterMode = this.shiftEnterMode = CKEDITOR.ENTER_BR
        }

        function i(e) {
            var t, n, i, o = e.widgets.registered;
            for (n in o)t = o[n], i = t.button, i && e.ui.addButton && e.ui.addButton(CKEDITOR.tools.capitalize(t.name, !0), {
                label: i,
                command: t.name,
                toolbar: "insert,10"
            })
        }

        function o(e, t) {
            e.addCommand(t.name, {
                exec: function () {
                    function n() {
                        e.widgets.finalizeCreation(l)
                    }

                    var i = e.widgets.focused;
                    if (i && i.name == t.name) i.edit(); else if (t.insert) t.insert(); else if (t.template) {
                        var o, r = "function" == typeof t.defaults ? t.defaults() : t.defaults,
                            a = CKEDITOR.dom.element.createFromHtml(t.template.output(r)),
                            s = e.widgets.wrapElement(a, t.name),
                            l = new CKEDITOR.dom.documentFragment(s.getDocument());
                        if (l.append(s), o = e.widgets.initOn(a, t), !o)return void n();
                        var c = o.once("edit", function (t) {
                            t.data.dialog ? o.once("dialog", function (t) {
                                var i, r, a = t.data;
                                i = a.once("ok", n, null, null, 20), r = a.once("cancel", function () {
                                    e.widgets.destroy(o, !0)
                                }), a.once("hide", function () {
                                    i.removeListener(), r.removeListener()
                                })
                            }) : n()
                        }, null, null, 999);
                        o.edit(), c.removeListener()
                    }
                },
                refresh: function (e, t) {
                    this.setState(f(e.editable(), t.blockLimit) ? CKEDITOR.TRISTATE_DISABLED : CKEDITOR.TRISTATE_OFF)
                },
                context: "div",
                allowedContent: t.allowedContent,
                requiredContent: t.requiredContent,
                contentForms: t.contentForms,
                contentTransformations: t.contentTransformations
            })
        }

        function r(e, t) {
            var n, i = t.upcast;
            if (i)if ("string" == typeof i)for (n = i.split(","); n.length;)e._.upcasts.push([t.upcasts[n.pop()], t.name]); else e._.upcasts.push([i, t.name])
        }

        function a(e, t) {
            if (e.focused = null, t.isInited()) {
                var n = t.editor.checkDirty();
                e.fire("widgetBlurred", {widget: t}), t.setFocused(!1), !n && t.editor.resetDirty()
            }
        }

        function s(e) {
            var t = e.data;
            if ("wysiwyg" == this.editor.mode) {
                var n, i, o, r, a = this.editor.editable(), s = this.instances;
                if (a) {
                    for (i in s)a.contains(s[i].wrapper) || this.destroy(s[i], !0);
                    if (t && t.initOnlyNew) n = this.initOnAll(); else {
                        var l = a.find(".cke_widget_wrapper");
                        for (n = [], i = 0, o = l.count(); o > i; i++)r = l.getItem(i), this.getByElement(r, !0) || h(r, O) || (r.addClass("cke_widget_new"), n.push(this.initOn(r.getFirst(p))))
                    }
                    t && t.focusInited && 1 == n.length && n[0].focus()
                }
            }
        }

        function l(e) {
            var t = e.parent;
            t.type == CKEDITOR.NODE_ELEMENT && t.attributes["data-cke-widget-wrapper"] && t.replaceWith(e)
        }

        function c(e, t) {
            for (var n, i, o = t.find(".cke_widget_wrapper"), r = 0, a = o.count(); a > r; ++r)n = o.getItem(r), i = n.getFirst(p), i.type == CKEDITOR.NODE_ELEMENT && i.data("widget") ? (i.replace(n), e.wrapElement(i)) : n.remove()
        }

        function d(e, t, n) {
            if (!n.allowedContent)return null;
            var i = this._.filters[e];
            i || (this._.filters[e] = i = {});
            var o = i[t];
            return o || (i[t] = o = new CKEDITOR.filter(n.allowedContent)), o
        }

        function u(e) {
            var t = [], n = e._.upcasts, i = e._.upcastCallbacks;
            return {
                toBeWrapped: t, iterator: function (e) {
                    var o, r, a, s, l, c;
                    if ("data-cke-widget-wrapper" in e.attributes)return e = e.getFirst(g), e && t.push([e]), !1;
                    if ("data-widget" in e.attributes)return t.push([e]), !1;
                    if (l = n.length) {
                        if (e.attributes["data-cke-widget-upcasted"])return !1;
                        for (s = 0, c = i.length; c > s; ++s)if (i[s](e) === !1)return;
                        for (s = 0; l > s; ++s)if (o = n[s], a = {}, r = o[0](e, a))return r instanceof CKEDITOR.htmlParser.element && (e = r), e.attributes["data-cke-widget-data"] = encodeURIComponent(JSON.stringify(a)), e.attributes["data-cke-widget-upcasted"] = 1, t.push([e, o[1]]), !1
                    }
                }
            }
        }

        function h(e, t) {
            for (var n = e; n = n.getParent();)if (t(n))return !0;
            return !1
        }

        function f(e, t) {
            return !t || t.equals(e) ? null : I(t) ? t : f(e, t.getParent())
        }

        function m(e) {
            return {
                tabindex: -1,
                contenteditable: "false",
                "data-cke-widget-wrapper": 1,
                "data-cke-filter": "off",
                "class": "cke_widget_wrapper cke_widget_new cke_widget_" + (e ? "inline" : "block")
            }
        }

        function E(e, t, n) {
            if (e.type == CKEDITOR.NODE_ELEMENT) {
                var i = CKEDITOR.dtd[e.name];
                if (i && !i[n.name]) {
                    var o = e.split(t), r = e.parent;
                    return t = o.getIndex(), e.children.length || (t -= 1, e.remove()), o.children.length || o.remove(), E(r, t, n)
                }
            }
            e.add(n, t)
        }

        function g(e) {
            return e.type == CKEDITOR.NODE_ELEMENT && !!e.attributes["data-widget"]
        }

        function p(e) {
            return e.type == CKEDITOR.NODE_ELEMENT && e.hasAttribute("data-widget")
        }

        function T(e, t) {
            return "boolean" == typeof e.inline ? e.inline : !!CKEDITOR.dtd.$inline[t]
        }

        function C(e) {
            return e.type == CKEDITOR.NODE_ELEMENT && e.attributes["data-cke-widget-wrapper"]
        }

        function v(e) {
            return e.type == CKEDITOR.NODE_ELEMENT && e.hasAttribute("data-cke-widget-wrapper")
        }

        function I(e) {
            return e.type == CKEDITOR.NODE_ELEMENT && e.hasAttribute("data-cke-widget-editable")
        }

        function O(e) {
            return e.hasAttribute("data-cke-temp")
        }

        function D(e) {
            return e.type == CKEDITOR.NODE_ELEMENT && e.hasAttribute("data-cke-widget-drag-handler")
        }

        function R(e) {
            return e.type == CKEDITOR.NODE_ELEMENT && e.hasClass("cke_widget_drag_handler_container")
        }

        function b(e, t, n) {
            t.focus(), e.fire("saveSnapshot"), e.fire("lockSnapshot", {dontUpdate: !0}), n.select();
            var i = t.wrapper.getOuterHtml();
            t.wrapper.remove(), e.widgets.destroy(t, !0), e.execCommand("paste", i), e.fire("unlockSnapshot")
        }

        function K(e, t) {
            var n, i = t.data.$, o = e.createRange();
            if (t.data.testRange)return t.data.testRange;
            if (document.caretRangeFromPoint) n = e.document.$.caretRangeFromPoint(i.clientX, i.clientY), o.setStart(CKEDITOR.dom.node(n.startContainer), n.startOffset), o.collapse(!0); else if (i.rangeParent) o.setStart(CKEDITOR.dom.node(i.rangeParent), i.rangeOffset), o.collapse(!0); else {
                if (!document.body.createTextRange)return null;
                n = e.document.getBody().$.createTextRange(), n.moveToPoint(i.clientX, i.clientY);
                var r = "cke-temp-" + (new Date).getTime();
                n.pasteHTML('<span id="' + r + '">\u200b</span>');
                var a = e.document.getById(r);
                o.moveToPosition(a, CKEDITOR.POSITION_BEFORE_START), a.remove()
            }
            return o
        }

        function y(e, t) {
            var n, i = e.focusedEditable;
            if (t == CKEDITOR.CTRL + 65) {
                var o = i.getBogus();
                return n = e.editor.createRange(), n.selectNodeContents(i), o && n.setEndAt(o, CKEDITOR.POSITION_BEFORE_START), n.select(), !1
            }
            if (8 == t || 46 == t) {
                var r = e.editor.getSelection().getRanges();
                return n = r[0], !(1 == r.length && n.collapsed && n.checkBoundaryOfElement(i, CKEDITOR[8 == t ? "START" : "END"]))
            }
        }

        function _(e, t, n, i) {
            var o = e.editor;
            if (o.fire("lockSnapshot"), n) {
                var r = n.data("cke-widget-editable"), a = t.editables[r];
                e.widgetHoldingFocusedEditable = t, t.focusedEditable = a, n.addClass("cke_widget_editable_focused"), a.filter && o.setActiveFilter(a.filter), o.setActiveEnterMode(a.enterMode, a.shiftEnterMode)
            } else i || t.focusedEditable.removeClass("cke_widget_editable_focused"), t.focusedEditable = null, e.widgetHoldingFocusedEditable = null, o.setActiveFilter(null), o.setActiveEnterMode(null, null);
            o.fire("unlockSnapshot")
        }

        function k(e) {
            e.contextMenu && e.contextMenu.addListener(function (t) {
                var n = e.widgets.getByElement(t, !0);
                return n ? n.fire("contextMenu", {}) : void 0
            })
        }

        function N(e, t) {
            return CKEDITOR.tools.trim(t)
        }

        function w(e) {
            var t = e.editor, n = CKEDITOR.plugins.lineutils;
            t.on("contentDom", function () {
                var i = t.editable(), o = CKEDITOR.env.ie && CKEDITOR.env.version < 9 || i.isInline() ? i : t.document;
                i.attachListener(o, "drop", function (n) {
                    var i, o, r, a = n.data.$.dataTransfer.getData("text");
                    if (a) {
                        try {
                            i = JSON.parse(a)
                        } catch (s) {
                            return
                        }
                        "cke-widget" == i.type && (n.data.preventDefault(), i.editor == t.name && (o = e.instances[i.id]) && (r = K(t, n), r && (CKEDITOR.env.gecko ? setTimeout(b, 0, t, o, r) : b(t, o, r))))
                    }
                }), CKEDITOR.tools.extend(e, {
                    finder: new n.finder(t, {
                        lookups: {
                            "default": function (e) {
                                if (!e.is(CKEDITOR.dtd.$listItem) && e.is(CKEDITOR.dtd.$block)) {
                                    for (; e;) {
                                        if (I(e))return;
                                        e = e.getParent()
                                    }
                                    return CKEDITOR.LINEUTILS_BEFORE | CKEDITOR.LINEUTILS_AFTER
                                }
                            }
                        }
                    }),
                    locator: new n.locator(t),
                    liner: new n.liner(t, {
                        lineStyle: {cursor: "move !important", "border-top-color": "#666"},
                        tipLeftStyle: {"border-left-color": "#666"},
                        tipRightStyle: {"border-right-color": "#666"}
                    })
                }, !0)
            })
        }

        function S(e) {
            var t = e.editor;
            t.on("contentDom", function () {
                var n, i, o = t.editable(), r = o.isInline() ? o : t.document;
                o.attachListener(r, "mousedown", function (t) {
                    var o = t.data.getTarget();
                    if (!o.type)return !1;
                    if (n = e.getByElement(o), i = 0, n) {
                        if (n.inline && o.type == CKEDITOR.NODE_ELEMENT && o.hasAttribute("data-cke-widget-drag-handler"))return void(i = 1);
                        f(n.wrapper, o) ? n = null : (t.data.preventDefault(), CKEDITOR.env.ie || n.focus())
                    }
                }), o.attachListener(r, "mouseup", function () {
                    n && i && (i = 0, n.focus())
                }), CKEDITOR.env.ie && o.attachListener(r, "mouseup", function () {
                    n && setTimeout(function () {
                        n.focus(), n = null
                    })
                })
            }), t.on("doubleclick", function (t) {
                var n = e.getByElement(t.data.element);
                if (n && !f(n.wrapper, t.data.element))return n.fire("doubleclick", {element: t.data.element})
            }, null, null, 1)
        }

        function x(e) {
            var t = e.editor;
            t.on("key", function (t) {
                var n, i = e.focused, o = e.widgetHoldingFocusedEditable;
                return i ? n = i.fire("key", {keyCode: t.data.keyCode}) : o && (n = y(o, t.data.keyCode)), n
            }, null, null, 1)
        }

        function A(e) {
            function t(t) {
                e.focused && q(e.focused, "cut" == t.name)
            }

            var n = e.editor;
            n.on("contentDom", function () {
                var e = n.editable();
                e.attachListener(e, "copy", t), e.attachListener(e, "cut", t)
            })
        }

        function L(e) {
            var t = e.editor;
            t.on("selectionCheck", function () {
                e.fire("checkSelection")
            }), e.on("checkSelection", e.checkSelection, e), t.on("selectionChange", function (n) {
                var i = f(t.editable(), n.data.selection.getStartElement()), o = i && e.getByElement(i),
                    r = e.widgetHoldingFocusedEditable;
                r ? r === o && r.focusedEditable.equals(i) || (_(e, r, null), o && i && _(e, o, i)) : o && i && _(e, o, i)
            }), t.on("dataReady", function () {
                $(e).commit()
            }), t.on("blur", function () {
                var t;
                (t = e.focused) && a(e, t), (t = e.widgetHoldingFocusedEditable) && _(e, t, null)
            })
        }

        function P(e) {
            F(e), B(e), e.on("checkWidgets", s), e.editor.on("contentDomInvalidated", e.checkWidgets, e)
        }

        function B(e) {
            var t = e.editor, n = {};
            t.on("toDataFormat", function (t) {
                var i = CKEDITOR.tools.getNextNumber(), o = [];
                t.data.downcastingSessionId = i, n[i] = o, t.data.dataValue.forEach(function (t) {
                    var n, i, r = t.attributes;
                    if ("data-cke-widget-id" in r) n = e.instances[r["data-cke-widget-id"]], n && (i = t.getFirst(g), o.push({
                        wrapper: t,
                        element: i,
                        widget: n,
                        editables: {}
                    }), "1" != i.attributes["data-cke-widget-keep-attr"] && delete i.attributes["data-widget"]); else if ("data-cke-widget-editable" in r)return o[o.length - 1].editables[r["data-cke-widget-editable"]] = t, !1
                }, CKEDITOR.NODE_ELEMENT, !0)
            }, null, null, 8), t.on("toDataFormat", function (e) {
                if (e.data.downcastingSessionId)for (var t, i, o, r, a, s, l = n[e.data.downcastingSessionId]; t = l.shift();) {
                    i = t.widget, o = t.element, r = i._.downcastFn && i._.downcastFn.call(i, o);
                    for (s in t.editables)a = t.editables[s], delete a.attributes.contenteditable, a.setHtml(i.editables[s].getData());
                    r || (r = o), t.wrapper.replaceWith(r)
                }
            }, null, null, 13), t.on("contentDomUnload", function () {
                e.destroyAll(!0)
            })
        }

        function F(e) {
            function t() {
                o.fire("lockSnapshot"), e.checkWidgets({initOnlyNew: !0, focusInited: n}), o.fire("unlockSnapshot")
            }

            var n, i, o = e.editor;
            o.on("toHtml", function (t) {
                var i, o = u(e);
                for (t.data.dataValue.forEach(o.iterator, CKEDITOR.NODE_ELEMENT, !0); i = o.toBeWrapped.pop();)l(i[0]), e.wrapElement(i[0], i[1]);
                n = 1 == t.data.dataValue.children.length && C(t.data.dataValue.children[0])
            }, null, null, 8), o.on("dataReady", function () {
                i && c(e, o.editable()), i = 0, e.destroyAll(!0), e.initOnAll()
            }), o.on("loadSnapshot", function (t) {
                /data-cke-widget/.test(t.data) && (i = 1), e.destroyAll(!0)
            }, null, null, 9), o.on("paste", function (e) {
                e.data.dataValue = e.data.dataValue.replace(ot, N)
            }), o.on("insertText", t, null, null, 999), o.on("insertHtml", t, null, null, 999)
        }

        function $(e) {
            var t = e.selected, n = [], i = t.slice(0), o = null;
            return {
                select: function (e) {
                    CKEDITOR.tools.indexOf(t, e) < 0 && n.push(e);
                    var o = CKEDITOR.tools.indexOf(i, e);
                    return o >= 0 && i.splice(o, 1), this
                }, focus: function (e) {
                    return o = e, this
                }, commit: function () {
                    var r, s, l = e.focused !== o;
                    for (e.editor.fire("lockSnapshot"), l && (r = e.focused) && a(e, r); r = i.pop();)t.splice(CKEDITOR.tools.indexOf(t, r), 1), r.isInited() && (s = r.editor.checkDirty(), r.setSelected(!1), !s && r.editor.resetDirty());
                    for (l && o && (s = e.editor.checkDirty(), e.focused = o, e.fire("widgetFocused", {widget: o}), o.setFocused(!0), !s && e.editor.resetDirty()); r = n.pop();)t.push(r), r.setSelected(!0);
                    e.editor.fire("unlockSnapshot")
                }
            }
        }

        function M(e, t, n) {
            var i, o = 0, r = z(t), a = e.data.classes || {};
            if (r) {
                for (a = CKEDITOR.tools.clone(a); i = r.pop();)n ? a[i] || (o = a[i] = 1) : a[i] && (delete a[i], o = 1);
                o && e.setData("classes", a)
            }
        }

        function H(e) {
            e.cancel()
        }

        function q(e, t) {
            var n = e.editor, i = n.document;
            if (!i.getById("cke_copybin")) {
                var o = n.blockless || CKEDITOR.env.ie ? "span" : "div", r = i.createElement(o), a = i.createElement(o),
                    s = CKEDITOR.env.ie && CKEDITOR.env.version < 9;
                a.setAttributes({id: "cke_copybin", "data-cke-temp": "1"}), r.setStyles({
                    position: "absolute",
                    width: "1px",
                    height: "1px",
                    overflow: "hidden"
                }), r.setStyle("ltr" == n.config.contentsLangDirection ? "left" : "right", "-5000px"), r.setHtml('<span data-cke-copybin-start="1">\u200b</span>' + e.wrapper.getOuterHtml() + '<span data-cke-copybin-end="1">\u200b</span>'), n.fire("saveSnapshot"), n.fire("lockSnapshot"), a.append(r), n.editable().append(a);
                var l = n.on("selectionChange", H, null, null, 0),
                    c = e.repository.on("checkSelection", H, null, null, 0);
                if (s)var d = i.getDocumentElement().$, u = d.scrollTop;
                var h = n.createRange();
                h.selectNodeContents(r), h.select(), s && (d.scrollTop = u), setTimeout(function () {
                    t || e.focus(), a.remove(), l.removeListener(), c.removeListener(), n.fire("unlockSnapshot"), t && (e.repository.del(e), n.fire("saveSnapshot"))
                }, 100)
            }
        }

        function z(e) {
            var t = e.getDefinition().attributes, n = t && t["class"];
            return n ? n.split(/\s+/) : null
        }

        function U() {
            var e = CKEDITOR.document.getActive(), t = this.editor, n = t.editable();
            (n.isInline() ? n : t.document.getWindow().getFrame()).equals(e) && t.focusManager.focus(n)
        }

        function j() {
            CKEDITOR.env.gecko && this.editor.unlockSelection(), CKEDITOR.env.webkit || (this.editor.forceNextSelectionCheck(), this.editor.selectionChange(1))
        }

        function V(e) {
            var t = null;
            e.on("data", function () {
                var e, n = this.data.classes;
                if (t != n) {
                    for (e in t)n && n[e] || this.removeClass(e);
                    for (e in n)this.addClass(e);
                    t = n
                }
            })
        }

        function W(e) {
            if (e.draggable) {
                var t, n = e.editor, i = e.wrapper.getLast(R);
                i ? t = i.findOne("img") : (i = new CKEDITOR.dom.element("span", n.document), i.setAttributes({
                    "class": "cke_reset cke_widget_drag_handler_container",
                    style: "background:rgba(220,220,220,0.5);background-image:url(" + n.plugins.widget.path + "images/handle.png)"
                }), t = new CKEDITOR.dom.element("img", n.document), t.setAttributes({
                    "class": "cke_reset cke_widget_drag_handler",
                    "data-cke-widget-drag-handler": "1",
                    src: CKEDITOR.tools.transparentImageData,
                    width: it,
                    title: n.lang.widget.move,
                    height: it
                }), e.inline && t.setAttribute("draggable", "true"), i.append(t), e.wrapper.append(i)), e.wrapper.on("mouseenter", e.updateDragHandlerPosition, e), setTimeout(function () {
                    e.on("data", e.updateDragHandlerPosition, e)
                }, 50), e.inline ? t.on("dragstart", function (t) {
                    t.data.$.dataTransfer.setData("text", JSON.stringify({
                        type: "cke-widget",
                        editor: n.name,
                        id: e.id
                    }))
                }) : t.on("mousedown", G, e), e.dragHandlerContainer = i
            }
        }

        function G() {
            function e() {
                var e;
                for (u.reset(); e = l.pop();)e.removeListener();
                X.call(this, c)
            }

            var t, n, i = this.repository.finder, o = this.repository.locator, r = this.repository.liner,
                a = this.editor, s = a.editable(), l = [], c = [], d = i.greedySearch(),
                u = CKEDITOR.tools.eventsBuffer(50, function () {
                    t = o.locate(d), c = o.sort(n, 1), c.length && (r.prepare(d, t), r.placeLine(c[0]), r.cleanup())
                });
            s.addClass("cke_widget_dragging"), l.push(s.on("mousemove", function (e) {
                n = e.data.$.clientY, u.input()
            })), l.push(a.document.once("mouseup", e, this)), l.push(CKEDITOR.document.once("mouseup", e, this))
        }

        function X(e) {
            var t = this.repository.finder, n = this.repository.liner, i = this.editor, o = this.editor.editable();
            if (!CKEDITOR.tools.isEmpty(n.visible)) {
                var r = t.getRange(e[0]);
                this.focus(), i.fire("saveSnapshot"), i.fire("lockSnapshot", {dontUpdate: 1}), i.getSelection().reset(), o.insertElementIntoRange(this.wrapper, r), this.focus(), i.fire("unlockSnapshot"), i.fire("saveSnapshot")
            }
            o.removeClass("cke_widget_dragging"), n.hideVisible()
        }

        function Y(e) {
            var t, n, i = e.editables;
            if (e.editables = {}, e.editables)for (t in i)n = i[t], e.initEditable(t, "string" == typeof n ? {selector: n} : n)
        }

        function Z(e) {
            if (e.mask) {
                var t = e.wrapper.findOne(".cke_widget_mask");
                t || (t = new CKEDITOR.dom.element("img", e.editor.document), t.setAttributes({
                    src: CKEDITOR.tools.transparentImageData,
                    "class": "cke_reset cke_widget_mask"
                }), e.wrapper.append(t)), e.mask = t
            }
        }

        function J(e) {
            if (e.parts) {
                var t, n, i = {};
                for (n in e.parts)t = e.wrapper.findOne(e.parts[n]), i[n] = t;
                e.parts = i
            }
        }

        function Q(e, t) {
            tt(e), J(e), Y(e), Z(e), W(e), V(e), CKEDITOR.env.ie && CKEDITOR.env.version < 9 && e.wrapper.on("dragstart", function (t) {
                var n = t.data.getTarget();
                f(e, n) || e.inline && D(n) || t.data.preventDefault()
            }), e.wrapper.removeClass("cke_widget_new"), e.element.addClass("cke_widget_element"), e.on("key", function (t) {
                var n = t.data.keyCode;
                if (13 == n) e.edit(); else {
                    if (n == CKEDITOR.CTRL + 67 || n == CKEDITOR.CTRL + 88)return void q(e, n == CKEDITOR.CTRL + 88);
                    if (n in rt || CKEDITOR.CTRL & n || CKEDITOR.ALT & n)return
                }
                return !1
            }, null, null, 999), e.on("doubleclick", function (t) {
                e.edit() && t.cancel()
            }), t.data && e.on("data", t.data), t.edit && e.on("edit", t.edit)
        }

        function et(e, t) {
            var n = e.element.data("cke-widget-data");
            n && e.setData(JSON.parse(decodeURIComponent(n))), t && e.setData(t), e.data.classes || e.setData("classes", e.getClasses()), e.dataReady = !0, nt(e), e.fire("data", e.data)
        }

        function tt(e) {
            var t = e.wrapper = e.element.getParent();
            t.setAttribute("data-cke-widget-id", e.id)
        }

        function nt(e) {
            e.element.data("cke-widget-data", encodeURIComponent(JSON.stringify(e.data)))
        }

        var it = 15;
        CKEDITOR.plugins.add("widget", {
            requires: "lineutils,clipboard", onLoad: function () {
                CKEDITOR.addCss(".cke_widget_wrapper{position:relative;outline:none}.cke_widget_inline{display:inline-block}.cke_widget_wrapper:hover>.cke_widget_element{outline:2px solid yellow;cursor:default}.cke_widget_wrapper:hover .cke_widget_editable{outline:2px solid yellow}.cke_widget_wrapper.cke_widget_focused>.cke_widget_element,.cke_widget_wrapper .cke_widget_editable.cke_widget_editable_focused{outline:2px solid #ace}.cke_widget_editable{cursor:text}.cke_widget_drag_handler_container{position:absolute;width:" + it + "px;height:0;left:-9999px;opacity:0.75;transition:height 0s 0.2s;line-height:0}.cke_widget_wrapper:hover>.cke_widget_drag_handler_container{height:" + it + "px;transition:none}.cke_widget_drag_handler_container:hover{opacity:1}img.cke_widget_drag_handler{cursor:move;width:" + it + "px;height:" + it + "px;display:inline-block}.cke_widget_mask{position:absolute;top:0;left:0;width:100%;height:100%;display:block}.cke_editable.cke_widget_dragging, .cke_editable.cke_widget_dragging *{cursor:move !important}")
            }, beforeInit: function (t) {
                t.widgets = new e(t)
            }, afterInit: function (e) {
                i(e), k(e)
            }
        }), e.prototype = {
            MIN_SELECTION_CHECK_INTERVAL: 500, add: function (e, t) {
                return t = CKEDITOR.tools.prototypedCopy(t), t.name = e, t._ = t._ || {}, this.editor.fire("widgetDefinition", t), t.template && (t.template = new CKEDITOR.template(t.template)), o(this.editor, t), r(this, t), this.registered[e] = t, t
            }, addUpcastCallback: function (e) {
                this._.upcastCallbacks.push(e)
            }, checkSelection: function () {
                var e, t = this.editor.getSelection(), n = t.getSelectedElement(), i = $(this);
                if (n && (e = this.getByElement(n, !0)))return i.focus(e).select(e).commit();
                var o = t.getRanges()[0];
                if (!o || o.collapsed)return i.commit();
                var r, a = new CKEDITOR.dom.walker(o);
                for (a.evaluator = v; r = a.next();)i.select(this.getByElement(r));
                i.commit()
            }, checkWidgets: function (e) {
                this.fire("checkWidgets", CKEDITOR.tools.copy(e || {}))
            }, del: function (e) {
                if (this.focused === e) {
                    var t, n = e.editor, i = n.createRange();
                    (t = i.moveToClosestEditablePosition(e.wrapper, !0)) || (t = i.moveToClosestEditablePosition(e.wrapper, !1)), t && n.getSelection().selectRanges([i])
                }
                e.wrapper.remove(), this.destroy(e, !0)
            }, destroy: function (e, t) {
                this.widgetHoldingFocusedEditable === e && _(this, e, null, t), e.destroy(t), delete this.instances[e.id], this.fire("instanceDestroyed", e)
            }, destroyAll: function (e) {
                var t, n = this.instances;
                for (var i in n)t = n[i], this.destroy(t, e)
            }, finalizeCreation: function (e) {
                var t = e.getFirst();
                if (t && v(t)) {
                    this.editor.insertElement(t);
                    var n = this.getByElement(t);
                    n.ready = !0, n.fire("ready"), n.focus()
                }
            }, getByElement: function () {
                function e(e) {
                    return e.is(t) && e.data("cke-widget-id")
                }

                var t = {div: 1, span: 1};
                return function (t, n) {
                    if (!t)return null;
                    var i = e(t);
                    if (!n && !i) {
                        var o = this.editor.editable();
                        do t = t.getParent(); while (t && !t.equals(o) && !(i = e(t)))
                    }
                    return this.instances[i] || null
                }
            }(), initOn: function (e, n, i) {
                if (n ? "string" == typeof n && (n = this.registered[n]) : n = this.registered[e.data("widget")], !n)return null;
                var o = this.wrapElement(e, n.name);
                if (o) {
                    if (o.hasClass("cke_widget_new")) {
                        var r = new t(this, this._.nextId++, e, n, i);
                        return r.isInited() ? (this.instances[r.id] = r, r) : null
                    }
                    return this.getByElement(e)
                }
                return null
            }, initOnAll: function (e) {
                for (var t, n = (e || this.editor.editable()).find(".cke_widget_new"), i = [], o = n.count(); o--;)t = this.initOn(n.getItem(o).getFirst(p)), t && i.push(t);
                return i
            }, parseElementClasses: function (e) {
                if (!e)return null;
                e = CKEDITOR.tools.trim(e).split(/\s+/);
                for (var t, n = {}, i = 0; t = e.pop();)-1 == t.indexOf("cke_") && (n[t] = i = 1);
                return i ? n : null
            }, wrapElement: function (e, t) {
                var n, i, o = null;
                if (e instanceof CKEDITOR.dom.element) {
                    if (n = this.registered[t || e.data("widget")], !n)return null;
                    if (o = e.getParent(), o && o.type == CKEDITOR.NODE_ELEMENT && o.data("cke-widget-wrapper"))return o;
                    e.hasAttribute("data-cke-widget-keep-attr") || e.data("cke-widget-keep-attr", e.data("widget") ? 1 : 0), t && e.data("widget", t), i = T(n, e.getName()), o = new CKEDITOR.dom.element(i ? "span" : "div"), o.setAttributes(m(i)), o.data("cke-display-name", n.pathName ? n.pathName : e.getName()), e.getParent(!0) && o.replace(e), e.appendTo(o)
                } else if (e instanceof CKEDITOR.htmlParser.element) {
                    if (n = this.registered[t || e.attributes["data-widget"]], !n)return null;
                    if (o = e.parent, o && o.type == CKEDITOR.NODE_ELEMENT && o.attributes["data-cke-widget-wrapper"])return o;
                    "data-cke-widget-keep-attr" in e.attributes || (e.attributes["data-cke-widget-keep-attr"] = e.attributes["data-widget"] ? 1 : 0), t && (e.attributes["data-widget"] = t), i = T(n, e.name), o = new CKEDITOR.htmlParser.element(i ? "span" : "div", m(i)), o.attributes["data-cke-display-name"] = n.pathName ? n.pathName : e.name;
                    var r, a = e.parent;
                    a && (r = e.getIndex(), e.remove()), o.add(e), a && E(a, r, o)
                }
                return o
            }, _tests_getNestedEditable: f, _tests_createEditableFilter: d
        }, CKEDITOR.event.implementOn(e.prototype), t.prototype = {
            addClass: function (e) {
                this.element.addClass(e)
            }, applyStyle: function (e) {
                M(this, e, 1)
            }, checkStyleActive: function (e) {
                var t, n = z(e);
                if (!n)return !1;
                for (; t = n.pop();)if (!this.hasClass(t))return !1;
                return !0
            }, destroy: function (e) {
                if (this.fire("destroy"), this.editables)for (var t in this.editables)this.destroyEditable(t, e);
                e || ("0" == this.element.data("cke-widget-keep-attr") && this.element.removeAttribute("data-widget"), this.element.removeAttributes(["data-cke-widget-data", "data-cke-widget-keep-attr"]), this.element.removeClass("cke_widget_element"), this.element.replace(this.wrapper)), this.wrapper = null
            }, destroyEditable: function (e, t) {
                var n = this.editables[e];
                n.removeListener("focus", j), n.removeListener("blur", U), this.editor.focusManager.remove(n), t || (n.removeClass("cke_widget_editable"), n.removeClass("cke_widget_editable_focused"), n.removeAttributes(["contenteditable", "data-cke-widget-editable", "data-cke-enter-mode"])), delete this.editables[e]
            }, edit: function () {
                var e = {dialog: this.dialog}, t = this;
                return this.fire("edit", e) !== !1 && e.dialog ? (this.editor.openDialog(e.dialog, function (e) {
                    var n, i;
                    t.fire("dialog", e) !== !1 && (n = e.on("show", function () {
                        e.setupContent(t)
                    }), i = e.on("ok", function () {
                        var n, i = t.on("data", function (e) {
                            n = 1, e.cancel()
                        }, null, null, 0);
                        t.editor.fire("saveSnapshot"), e.commitContent(t), i.removeListener(), n && (t.fire("data", t.data), t.editor.fire("saveSnapshot"))
                    }), e.once("hide", function () {
                        n.removeListener(), i.removeListener()
                    }))
                }), !0) : !1
            }, getClasses: function () {
                return this.repository.parseElementClasses(this.element.getAttribute("class"))
            }, hasClass: function (e) {
                return this.element.hasClass(e)
            }, initEditable: function (e, t) {
                var i = this.wrapper.findOne(t.selector);
                return i && i.is(CKEDITOR.dtd.$editable) ? (i = new n(this.editor, i, {filter: d.call(this.repository, this.name, e, t)}), this.editables[e] = i, i.setAttributes({
                    contenteditable: "true",
                    "data-cke-widget-editable": e,
                    "data-cke-enter-mode": i.enterMode
                }), i.filter && i.data("cke-filter", i.filter.id), i.addClass("cke_widget_editable"), i.removeClass("cke_widget_editable_focused"), t.pathName && i.data("cke-display-name", t.pathName), this.editor.focusManager.add(i), i.on("focus", j, this), CKEDITOR.env.ie && i.on("blur", U, this), i.setData(i.getHtml()), !0) : !1
            }, isInited: function () {
                return !(!this.wrapper || !this.inited)
            }, isReady: function () {
                return this.isInited() && this.ready
            }, focus: function () {
                var e = this.editor.getSelection();
                if (e) {
                    var t = this.editor.checkDirty();
                    e.fake(this.wrapper), !t && this.editor.resetDirty()
                }
                this.editor.focus()
            }, removeClass: function (e) {
                this.element.removeClass(e)
            }, removeStyle: function (e) {
                M(this, e, 0)
            }, setData: function (e, t) {
                var n = this.data, i = 0;
                if ("string" == typeof e) n[e] !== t && (n[e] = t, i = 1); else {
                    var o = e;
                    for (e in o)n[e] !== o[e] && (i = 1, n[e] = o[e])
                }
                return i && this.dataReady && (nt(this), this.fire("data", n)), this
            }, setFocused: function (e) {
                return this.wrapper[e ? "addClass" : "removeClass"]("cke_widget_focused"), this.fire(e ? "focus" : "blur"), this
            }, setSelected: function (e) {
                return this.wrapper[e ? "addClass" : "removeClass"]("cke_widget_selected"), this.fire(e ? "select" : "deselect"), this
            }, updateDragHandlerPosition: function () {
                var e = this.editor, t = this.element.$, n = this._.dragHandlerOffset,
                    i = {x: t.offsetLeft, y: t.offsetTop - it};
                if (!n || i.x != n.x || i.y != n.y) {
                    var o = e.checkDirty();
                    e.fire("lockSnapshot"), this.dragHandlerContainer.setStyles({
                        top: i.y + "px",
                        left: i.x + "px"
                    }), e.fire("unlockSnapshot"), !o && e.resetDirty(), this._.dragHandlerOffset = i
                }
            }
        }, CKEDITOR.event.implementOn(t.prototype), n.prototype = CKEDITOR.tools.extend(CKEDITOR.tools.prototypedCopy(CKEDITOR.dom.element.prototype), {
            setData: function (e) {
                e = this.editor.dataProcessor.toHtml(e, {
                    context: this.getName(),
                    filter: this.filter,
                    enterMode: this.enterMode
                }), this.setHtml(e), this.editor.widgets.initOnAll(this)
            }, getData: function () {
                return this.editor.dataProcessor.toDataFormat(this.getHtml(), {
                    context: this.getName(),
                    filter: this.filter,
                    enterMode: this.enterMode
                })
            }
        });
        var ot = new RegExp('^(?:<(?:div|span)(?: data-cke-temp="1")?(?: id="cke_copybin")?(?: data-cke-temp="1")?>)?(?:<(?:div|span)(?: style="[^"]+")?>)?<span [^>]*data-cke-copybin-start="1"[^>]*>.?</span>([\\s\\S]+)<span [^>]*data-cke-copybin-end="1"[^>]*>.?</span>(?:</(?:div|span)>)?(?:</(?:div|span)>)?$'),
            rt = {37: 1, 38: 1, 39: 1, 40: 1, 8: 1, 46: 1};
        !function () {
            function e() {
            }

            function t(e, t, n) {
                if (!n)return !1;
                if (!this.checkElement(e))return !1;
                var i = n.widgets.getByElement(e, !0);
                return i && i.checkStyleActive(this)
            }

            CKEDITOR.style.addCustomHandler({
                type: "widget", setup: function (e) {
                    this.widget = e.widget
                }, apply: function (e) {
                    e instanceof CKEDITOR.editor && this.checkApplicable(e.elementPath(), e) && e.widgets.focused.applyStyle(this)
                }, remove: function (e) {
                    e instanceof CKEDITOR.editor && this.checkApplicable(e.elementPath(), e) && e.widgets.focused.removeStyle(this)
                }, checkActive: function (e, t) {
                    return this.checkElementMatch(e.lastElement, 0, t)
                }, checkApplicable: function (e, t) {
                    return t instanceof CKEDITOR.editor ? this.checkElement(e.lastElement) : !1
                }, checkElementMatch: t, checkElementRemovable: t, checkElement: function (e) {
                    if (!v(e))return !1;
                    var t = e.getFirst(p);
                    return t && t.data("widget") == this.widget
                }, buildPreview: function (e) {
                    return e || this._.definition.name
                }, toAllowedContentRules: function (e) {
                    if (!e)return null;
                    var t, n = e.widgets.registered[this.widget], i = {};
                    return n ? n.styleableElements ? (t = this.getClassesArray()) ? (i[n.styleableElements] = {
                        classes: t,
                        propertiesOnly: !0
                    }, i) : null : n.styleToAllowedContentRules ? n.styleToAllowedContentRules(this) : null : null
                }, getClassesArray: function () {
                    var e = this._.definition.attributes && this._.definition.attributes["class"];
                    return e ? CKEDITOR.tools.trim(e).split(/\s+/) : null
                }, applyToRange: e, removeFromRange: e, applyToObject: e
            })
        }(), CKEDITOR.plugins.widget = t, t.repository = e, t.nestedEditable = n
    }(),function () {
        function e(e) {
            function o() {
                this.deflated || (e.widgets.focused == this.widget && (this.focused = !0), e.widgets.destroy(this.widget), this.deflated = !0)
            }

            function r() {
                var n = e.editable(), i = e.document;
                if (this.deflated) {
                    if (this.widget = e.widgets.initOn(this.element, "image", this.widget.data), this.widget.inline && !new CKEDITOR.dom.elementPath(this.widget.wrapper, n).block) {
                        var o = i.createElement(e.activeEnterMode == CKEDITOR.ENTER_P ? "p" : "div");
                        o.replace(this.widget.wrapper), this.widget.wrapper.move(o)
                    }
                    this.focused && (this.widget.focus(), delete this.focused), delete this.deflated
                } else t(this.widget, l)
            }

            var l = e.config.image2_alignClasses, c = e.config.image2_captionedClass;
            return {
                allowedContent: u(e),
                requiredContent: "img[src,alt]",
                features: h(e),
                styleableElements: "img figure",
                contentTransformations: [["img[width]: sizeToAttribute"]],
                editables: {caption: {selector: "figcaption", allowedContent: "br em strong sub sup u s; a[!href]"}},
                parts: {image: "img", caption: "figcaption"},
                dialog: "image2",
                template: m,
                data: function () {
                    var t = this.features;
                    if (this.data.hasCaption && !e.filter.checkFeature(t.caption) && (this.data.hasCaption = !1), "none" == this.data.align || e.filter.checkFeature(t.align) || (this.data.align = "none"), this.shiftState({
                            widget: this,
                            element: this.element,
                            oldData: this.oldData,
                            newData: this.data,
                            deflate: o,
                            inflate: r
                        }), this.data.link ? this.parts.link || (this.parts.link = this.parts.image.getParent()) : this.parts.link && delete this.parts.link, this.parts.image.setAttributes({
                            src: this.data.src,
                            "data-cke-saved-src": this.data.src,
                            alt: this.data.alt
                        }), this.oldData && !this.oldData.hasCaption && this.data.hasCaption)for (var n in this.data.classes)this.parts.image.removeClass(n);
                    e.filter.checkFeature(t.dimension) && a(this), this.oldData = CKEDITOR.tools.extend({}, this.data)
                },
                init: function () {
                    var t = CKEDITOR.plugins.image2, n = this.parts.image, i = {
                        hasCaption: !!this.parts.caption,
                        src: n.getAttribute("src"),
                        alt: n.getAttribute("alt") || "",
                        width: n.getAttribute("width") || "",
                        height: n.getAttribute("height") || "",
                        lock: this.ready ? t.checkHasNaturalRatio(n) : !0
                    }, o = n.getAscendant("a");
                    if (o && this.wrapper.contains(o) && (this.parts.link = o), i.align || (l ? (this.element.hasClass(l[0]) ? i.align = "left" : this.element.hasClass(l[2]) && (i.align = "right"), i.align ? this.element.removeClass(l[g[i.align]]) : i.align = "none") : (i.align = this.element.getStyle("float") || n.getStyle("float") || "none", this.element.removeStyle("float"), n.removeStyle("float"))), e.plugins.link && this.parts.link) {
                        i.link = CKEDITOR.plugins.link.parseLinkAttributes(e, this.parts.link);
                        var r = i.link.advanced;
                        r && r.advCSSClasses && (r.advCSSClasses = CKEDITOR.tools.trim(r.advCSSClasses.replace(/cke_\S+/, "")))
                    }
                    this.wrapper[(i.hasCaption ? "remove" : "add") + "Class"]("cke_image_nocaption"), this.setData(i), e.filter.checkFeature(this.features.dimension) && s(this), this.shiftState = t.stateShifter(this.editor), this.on("contextMenu", function (e) {
                        e.data.image = CKEDITOR.TRISTATE_OFF, (this.parts.link || this.wrapper.getAscendant("a")) && (e.data.link = e.data.unlink = CKEDITOR.TRISTATE_OFF)
                    }), this.on("dialog", function (e) {
                        e.data.widget = this
                    }, this)
                },
                addClass: function (e) {
                    f(this).addClass(e)
                },
                hasClass: function (e) {
                    return f(this).hasClass(e)
                },
                removeClass: function (e) {
                    f(this).removeClass(e)
                },
                getClasses: function () {
                    var e = new RegExp("^(" + [].concat(c, l).join("|") + ")$");
                    return function () {
                        var t = this.repository.parseElementClasses(f(this).getAttribute("class"));
                        for (var n in t)e.test(n) && delete t[n];
                        return t
                    }
                }(),
                upcast: n(e),
                downcast: i(e)
            }
        }

        function t(e, t) {
            var n = e.wrapper, i = e.data.align, o = e.data.hasCaption;
            if (t) {
                for (var r = 3; r--;)n.removeClass(t[r]);
                "center" == i ? o && n.addClass(t[1]) : "none" != i && n.addClass(t[g[i]])
            } else"center" == i ? (o ? n.setStyle("text-align", "center") : n.removeStyle("text-align"), n.removeStyle("float")) : ("none" == i ? n.removeStyle("float") : n.setStyle("float", i), n.removeStyle("text-align"))
        }

        function n(e) {
            var t = o(e), n = e.config.image2_captionedClass;
            return function (e, i) {
                var o, a = {width: 1, height: 1}, s = e.name;
                if (!e.attributes["data-cke-realelement"]) {
                    if (t(e)) {
                        if ("div" == s) {
                            var l = e.getFirst("figure");
                            l && (e.replaceWith(l), e = l)
                        }
                        i.align = "center", o = e.getFirst("img") || e.getFirst("a").getFirst("img")
                    } else"figure" == s && e.hasClass(n) ? o = e.getFirst("img") || e.getFirst("a").getFirst("img") : r(e) && (o = "a" == e.name ? e.children[0] : e);
                    if (o) {
                        for (var c in a) {
                            var d = o.attributes[c];
                            d && d.match(p) && delete o.attributes[c]
                        }
                        return e
                    }
                }
            }
        }

        function i(e) {
            var t = e.config.image2_alignClasses;
            return function (e) {
                var n = "a" == e.name ? e.getFirst() : e, i = n.attributes, o = this.data.align;
                if (!this.inline) {
                    var r = e.getFirst("span");
                    r && r.replaceWith(r.getFirst({img: 1, a: 1}))
                }
                if (o && "none" != o) {
                    var a = CKEDITOR.tools.parseCssText(i.style || "");
                    "center" == o && "figure" == e.name ? e = e.wrapWith(new CKEDITOR.htmlParser.element("div", t ? {"class": t[1]} : {style: "text-align:center"})) : o in {
                            left: 1,
                            right: 1
                        } && (t ? n.addClass(t[g[o]]) : a["float"] = o), t || CKEDITOR.tools.isEmpty(a) || (i.style = CKEDITOR.tools.writeCssText(a))
                }
                return e
            }
        }

        function o(e) {
            var t = e.config.image2_captionedClass, n = e.config.image2_alignClasses, i = {figure: 1, a: 1, img: 1};
            return function (o) {
                if (!(o.name in {div: 1, p: 1}))return !1;
                var a = o.children;
                if (1 !== a.length)return !1;
                var s = a[0];
                if (!(s.name in i))return !1;
                if ("p" == o.name) {
                    if (!r(s))return !1
                } else if ("figure" == s.name) {
                    if (!s.hasClass(t))return !1
                } else {
                    if (e.enterMode == CKEDITOR.ENTER_P)return !1;
                    if (!r(s))return !1
                }
                return (n ? o.hasClass(n[1]) : "center" == CKEDITOR.tools.parseCssText(o.attributes.style || "", !0)["text-align"]) ? !0 : !1
            }
        }

        function r(e) {
            return "img" == e.name ? !0 : "a" == e.name ? 1 == e.children.length && e.getFirst("img") : !1
        }

        function a(e) {
            var t = e.data, n = {width: t.width, height: t.height}, i = e.parts.image;
            for (var o in n)n[o] ? i.setAttribute(o, n[o]) : i.removeAttribute(o)
        }

        function s(e) {
            var t = e.editor, n = t.editable(), i = t.document, o = e.resizer = i.createElement("span");
            if (o.addClass("cke_image_resizer"), o.setAttribute("title", t.lang.image2.resizer), o.append(new CKEDITOR.dom.text("\u200b", i)), e.inline) e.wrapper.append(o); else {
                var r = e.parts.link || e.parts.image, a = r.getParent(), s = i.createElement("span");
                s.addClass("cke_image_resizer_wrapper"), s.append(r), s.append(o), e.element.append(s, !0), a.is("span") && a.remove()
            }
            o.on("mousedown", function (r) {
                function a(e, t, n) {
                    var o = CKEDITOR.document, r = [];
                    if (i.equals(o) || r.push(o.on(e, t)), r.push(i.on(e, t)), n)for (var a = r.length; a--;)n.push(r.pop())
                }

                function s() {
                    h = O + C * E, f = Math.round(h / R)
                }

                function l() {
                    f = D - g, h = Math.round(f * R)
                }

                function c(e) {
                    u = e.data.$, E = u.screenX - v, g = I - u.screenY, p = Math.abs(E / g), 1 == C ? 0 >= E ? 0 >= g ? s() : p >= R ? s() : l() : 0 >= g ? p >= R ? l() : s() : l() : 0 >= E ? 0 >= g ? p >= R ? l() : s() : l() : 0 >= g ? s() : p >= R ? s() : l(), h >= 15 && f >= 15 ? (T.setAttributes({
                        width: h,
                        height: f
                    }), m = !0) : m = !1
                }

                function d() {
                    for (var i; i = b.pop();)i.removeListener();
                    n.removeClass(K), o.removeClass("cke_image_resizing"), m && (e.setData({
                        width: h,
                        height: f
                    }), t.fire("saveSnapshot")), m = !1
                }

                var u, h, f, m, E, g, p, T = e.parts.image, C = "right" == e.data.align ? -1 : 1, v = r.data.$.screenX,
                    I = r.data.$.screenY, O = T.$.clientWidth, D = T.$.clientHeight, R = O / D, b = [],
                    K = "cke_image_s" + (~C ? "e" : "w");
                t.fire("saveSnapshot"), a("mousemove", c, b), a("mouseup", d, b), n.addClass(K), o.addClass("cke_image_resizing")
            }), e.on("data", function () {
                o["right" == e.data.align ? "addClass" : "removeClass"]("cke_image_resizer_left")
            })
        }

        function l(e) {
            var t, n = [];
            return function (i) {
                var o = e.getCommand("justify" + i);
                o && (n.push(function () {
                    o.refresh(e, e.elementPath())
                }), i in {right: 1, left: 1, center: 1} && o.on("exec", function (t) {
                    var o = d(e);
                    if (o) {
                        o.setData("align", i);
                        for (var r = n.length; r--;)n[r]();
                        t.cancel()
                    }
                }), o.on("refresh", function (n) {
                    var o = d(e), r = {right: 1, left: 1, center: 1};
                    o && (void 0 === t && (t = e.filter.checkFeature(e.widgets.registered.image.features.align)), this.setState(t ? o.data.align == i ? CKEDITOR.TRISTATE_ON : i in r ? CKEDITOR.TRISTATE_OFF : CKEDITOR.TRISTATE_DISABLED : CKEDITOR.TRISTATE_DISABLED), n.cancel())
                }))
            }
        }

        function c(e) {
            e.plugins.link && (CKEDITOR.on("dialogDefinition", function (t) {
                var n = t.data;
                if ("link" == n.name) {
                    var i = n.definition, o = i.onShow, r = i.onOk;
                    i.onShow = function () {
                        var t = d(e);
                        t && (t.inline ? !t.wrapper.getAscendant("a") : 1) ? this.setupContent(t.data.link || {}) : o.apply(this, arguments)
                    }, i.onOk = function () {
                        var t = d(e);
                        if (t && (t.inline ? !t.wrapper.getAscendant("a") : 1)) {
                            var n = {};
                            this.commitContent(n), t.setData("link", n)
                        } else r.apply(this, arguments)
                    }
                }
            }), e.getCommand("unlink").on("exec", function (t) {
                var n = d(e);
                n && n.parts.link && (n.setData("link", null), this.refresh(e, e.elementPath()), t.cancel())
            }), e.getCommand("unlink").on("refresh", function (t) {
                var n = d(e);
                n && (this.setState(n.data.link || n.wrapper.getAscendant("a") ? CKEDITOR.TRISTATE_OFF : CKEDITOR.TRISTATE_DISABLED), t.cancel())
            }))
        }

        function d(e) {
            var t = e.widgets.focused;
            return t && "image" == t.name ? t : null
        }

        function u(e) {
            var t = e.config.image2_alignClasses, n = {
                div: {match: o(e)},
                p: {match: o(e)},
                img: {attributes: "!src,alt,width,height"},
                figure: {classes: "!" + e.config.image2_captionedClass},
                figcaption: !0
            };
            return t ? (n.div.classes = t[1], n.p.classes = n.div.classes, n.img.classes = t[0] + "," + t[2], n.figure.classes += "," + n.img.classes) : (n.div.styles = "text-align", n.p.styles = "text-align", n.img.styles = "float", n.figure.styles = "float,display"), n
        }

        function h(e) {
            var t = e.config.image2_alignClasses, n = {
                dimension: {requiredContent: "img[width,height]"},
                align: {requiredContent: "img" + (t ? "(" + t[0] + ")" : "{float}")},
                caption: {requiredContent: "figcaption"}
            };
            return n
        }

        function f(e) {
            return e.data.hasCaption ? e.element : e.parts.image
        }

        var m = '<img alt="" src="" />',
            E = new CKEDITOR.template('<figure class="{captionedClass}">' + m + "<figcaption>{captionPlaceholder}</figcaption></figure>"),
            g = {left: 0, center: 1, right: 2}, p = /^\s*(\d+\%)\s*$/i;
        CKEDITOR.plugins.add("image2", {
            requires: "widget,dialog", icons: "image", hidpi: !0, onLoad: function () {
                CKEDITOR.addCss(".cke_image_nocaption{line-height:0}.cke_editable.cke_image_sw, .cke_editable.cke_image_sw *{cursor:sw-resize !important}.cke_editable.cke_image_se, .cke_editable.cke_image_se *{cursor:se-resize !important}.cke_image_resizer{display:none;position:absolute;width:10px;height:10px;bottom:-5px;right:-5px;background:#000;outline:1px solid #fff;line-height:0;cursor:se-resize;}.cke_image_resizer_wrapper{position:relative;display:inline-block;line-height:0;}.cke_image_resizer.cke_image_resizer_left{right:auto;left:-5px;cursor:sw-resize;}.cke_widget_wrapper:hover .cke_image_resizer,.cke_image_resizer.cke_image_resizing{display:block}.cke_widget_wrapper>a{display:inline-block}")
            }, init: function (t) {
                var n = t.config, i = t.lang.image2, o = e(t);
                n.filebrowserImage2BrowseUrl = n.filebrowserImageBrowseUrl, n.filebrowserImage2UploadUrl = n.filebrowserImageUploadUrl, o.pathName = i.pathName, o.editables.caption.pathName = i.pathNameCaption, t.widgets.add("image", o), t.ui.addButton && t.ui.addButton("Image", {
                    label: t.lang.common.image,
                    command: "image",
                    toolbar: "insert,10"
                }), t.contextMenu && (t.addMenuGroup("image", 10), t.addMenuItem("image", {
                    label: i.menu,
                    command: "image",
                    group: "image"
                })), CKEDITOR.dialog.add("image2", this.path + "dialogs/image2.js")
            }, afterInit: function (e) {
                var t = {left: 1, right: 1, center: 1, block: 1}, n = l(e);
                for (var i in t)n(i);
                c(e)
            }
        }), CKEDITOR.plugins.image2 = {
            stateShifter: function (e) {
                function t(e, t) {
                    var n = {};
                    s ? n.attributes = {"class": s[1]} : n.styles = {"text-align": "center"};
                    var i = a.createElement(e.activeEnterMode == CKEDITOR.ENTER_P ? "p" : "div", n);
                    return r(i, t), t.move(i), i
                }

                function n(e) {
                    var t = e.findOne("a,img");
                    return t.replace(e), t
                }

                function i(e, t) {
                    var n = a.createElement("a", {attributes: {href: t.url}});
                    return n.replace(e), e.move(n), n
                }

                function o(e) {
                    var t = e.findOne("img");
                    return t.replace(e), t
                }

                function r(t, n) {
                    if (n.getParent()) {
                        var i = e.createRange();
                        i.moveToPosition(n, CKEDITOR.POSITION_BEFORE_START), n.remove(), c.insertElementIntoRange(t, i)
                    } else t.replace(n)
                }

                var a = e.document, s = e.config.image2_alignClasses, l = e.config.image2_captionedClass,
                    c = e.editable(), d = ["hasCaption", "align", "link"], u = {
                        align: function (i, o, r) {
                            var a = i.element;
                            i.changed.align ? i.newData.hasCaption || ("center" == r && (i.deflate(), i.element = t(e, a)), i.changed.hasCaption || "center" != o || "center" == r || (i.deflate(), i.element = n(a))) : "center" == r && i.changed.hasCaption && !i.newData.hasCaption && (i.deflate(), i.element = t(e, a)), !s && a.is("figure") && ("center" == r ? a.setStyle("display", "inline-block") : a.removeStyle("display"))
                        }, hasCaption: function (t, n, i) {
                            if (t.changed.hasCaption) {
                                var o;
                                if (o = t.element.is({
                                        img: 1,
                                        a: 1
                                    }) ? t.element : t.element.findOne("a,img"), t.deflate(), i) {
                                    var s = CKEDITOR.dom.element.createFromHtml(E.output({
                                        captionedClass: l,
                                        captionPlaceholder: e.lang.image2.captionPlaceholder
                                    }), a);
                                    r(s, t.element), o.replace(s.findOne("img")), t.element = s
                                } else o.replace(t.element), t.element = o
                            }
                        }, link: function (t, n, r) {
                            if (t.changed.link) {
                                var a, s = t.element.is("img") ? t.element : t.element.findOne("img"),
                                    l = t.element.is("a") ? t.element : t.element.findOne("a"),
                                    c = t.element.is("a") && !r || t.element.is("img") && r;
                                if (c && t.deflate(), r) {
                                    n || (a = i(s, t.newData.link));
                                    var d = CKEDITOR.plugins.link.getLinkAttributes(e, r);
                                    CKEDITOR.tools.isEmpty(d.set) || (a || l).setAttributes(d.set), d.removed.length && (a || l).removeAttributes(d.removed)
                                } else a = o(l);
                                c && (t.element = a)
                            }
                        }
                    };
                return function (e) {
                    var t, n;
                    for (e.changed = {}, n = 0; n < d.length; n++)t = d[n], e.changed[t] = e.oldData ? e.oldData[t] !== e.newData[t] : !1;
                    for (n = 0; n < d.length; n++)t = d[n], u[t](e, e.oldData ? e.oldData[t] : null, e.newData[t]);
                    e.inflate()
                }
            }, checkHasNaturalRatio: function (e) {
                var t = e.$, n = this.getNatural(e);
                return Math.round(t.clientWidth / n.width * n.height) == t.clientHeight || Math.round(t.clientHeight / n.height * n.width) == t.clientWidth
            }, getNatural: function (e) {
                var t;
                if (e.$.naturalWidth) t = {width: e.$.naturalWidth, height: e.$.naturalHeight}; else {
                    var n = new Image;
                    n.src = e.getAttribute("src"), t = {width: n.width, height: n.height}
                }
                return t
            }
        }
    }(),CKEDITOR.config.image2_captionedClass = "image",function () {
        "use strict";
        function e(e, i) {
            var o, r;
            i.on("refresh", function (e) {
                var i = [t];
                for (var o in e.data.states)i.push(e.data.states[o]);
                this.setState(CKEDITOR.tools.search(i, n) ? n : t)
            }, i, null, 100), i.on("exec", function (t) {
                o = e.getSelection(), r = o.createBookmarks(1), t.data || (t.data = {}), t.data.done = !1
            }, i, null, 0), i.on("exec", function () {
                e.forceNextSelectionCheck(), o.selectBookmarks(r)
            }, i, null, 100)
        }

        var t = CKEDITOR.TRISTATE_DISABLED, n = CKEDITOR.TRISTATE_OFF;
        CKEDITOR.plugins.add("indent", {
            init: function (t) {
                var n = CKEDITOR.plugins.indent.genericDefinition;
                e(t, t.addCommand("indent", new n(!0))), e(t, t.addCommand("outdent", new n)), t.ui.addButton && (t.ui.addButton("Indent", {
                    label: t.lang.indent.indent,
                    command: "indent",
                    directional: !0,
                    toolbar: "indent,20"
                }), t.ui.addButton("Outdent", {
                    label: t.lang.indent.outdent,
                    command: "outdent",
                    directional: !0,
                    toolbar: "indent,10"
                })), t.on("dirChanged", function (e) {
                    var n = t.createRange(), i = e.data.node;
                    n.setStartBefore(i), n.setEndAfter(i);
                    for (var o, r = new CKEDITOR.dom.walker(n); o = r.next();)if (o.type == CKEDITOR.NODE_ELEMENT) {
                        if (!o.equals(i) && o.getDirection()) {
                            n.setStartAfter(o), r = new CKEDITOR.dom.walker(n);
                            continue
                        }
                        var a = t.config.indentClasses;
                        if (a)for (var s = "ltr" == e.data.dir ? ["_rtl", ""] : ["", "_rtl"], l = 0; l < a.length; l++)o.hasClass(a[l] + s[0]) && (o.removeClass(a[l] + s[0]), o.addClass(a[l] + s[1]));
                        var c = o.getStyle("margin-right"), d = o.getStyle("margin-left");
                        c ? o.setStyle("margin-left", c) : o.removeStyle("margin-left"), d ? o.setStyle("margin-right", d) : o.removeStyle("margin-right")
                    }
                })
            }
        }), CKEDITOR.plugins.indent = {
            genericDefinition: function (e) {
                this.isIndent = !!e, this.startDisabled = !this.isIndent
            }, specificDefinition: function (e, t, n) {
                this.name = t, this.editor = e, this.jobs = {}, this.enterBr = e.config.enterMode == CKEDITOR.ENTER_BR, this.isIndent = !!n, this.relatedGlobal = n ? "indent" : "outdent", this.indentKey = n ? 9 : CKEDITOR.SHIFT + 9, this.database = {}
            }, registerCommands: function (e, t) {
                e.on("pluginsLoaded", function () {
                    for (var e in t)!function (e, t) {
                        var n = e.getCommand(t.relatedGlobal);
                        for (var i in t.jobs)n.on("exec", function (n) {
                            n.data.done || (e.fire("lockSnapshot"), t.execJob(e, i) && (n.data.done = !0), e.fire("unlockSnapshot"), CKEDITOR.dom.element.clearAllMarkers(t.database))
                        }, this, null, i), n.on("refresh", function (n) {
                            n.data.states || (n.data.states = {}), n.data.states[t.name + "@" + i] = t.refreshJob(e, i, n.data.path)
                        }, this, null, i);
                        e.addFeature(t)
                    }(this, t[e])
                })
            }
        }, CKEDITOR.plugins.indent.genericDefinition.prototype = {
            context: "p", exec: function () {
            }
        }, CKEDITOR.plugins.indent.specificDefinition.prototype = {
            execJob: function (e, n) {
                var i = this.jobs[n];
                return i.state != t ? i.exec.call(this, e) : void 0
            }, refreshJob: function (e, n, i) {
                var o = this.jobs[n];
                return o.state = e.activeFilter.checkFeature(this) ? o.refresh.call(this, e, i) : t, o.state
            }, getContext: function (e) {
                return e.contains(this.context)
            }
        }
    }(),function () {
        "use strict";
        function e(e) {
            function i(t) {
                for (var i = o.startContainer, l = o.endContainer; i && !i.getParent().equals(t);)i = i.getParent();
                for (; l && !l.getParent().equals(t);)l = l.getParent();
                if (!i || !l)return !1;
                for (var c = i, d = [], u = !1; !u;)c.equals(l) && (u = !0), d.push(c), c = c.getNext();
                if (d.length < 1)return !1;
                for (var h = t.getParents(!0), f = 0; f < h.length; f++)if (h[f].getName && s[h[f].getName()]) {
                    t = h[f];
                    break
                }
                var m = r.isIndent ? 1 : -1, E = d[0], g = d[d.length - 1], p = CKEDITOR.plugins.list.listToArray(t, a),
                    T = p[g.getCustomData("listarray_index")].indent;
                for (f = E.getCustomData("listarray_index"); f <= g.getCustomData("listarray_index"); f++)if (p[f].indent += m, m > 0) {
                    var C = p[f].parent;
                    p[f].parent = new CKEDITOR.dom.element(C.getName(), C.getDocument())
                }
                for (f = g.getCustomData("listarray_index") + 1; f < p.length && p[f].indent > T; f++)p[f].indent += m;
                var v = CKEDITOR.plugins.list.arrayToList(p, a, null, e.config.enterMode, t.getDirection());
                if (!r.isIndent) {
                    var I;
                    if ((I = t.getParent()) && I.is("li")) {
                        var O, D = v.listNode.getChildren(), R = [], b = D.count();
                        for (f = b - 1; f >= 0; f--)(O = D.getItem(f)) && O.is && O.is("li") && R.push(O)
                    }
                }
                if (v && v.listNode.replace(t), R && R.length)for (f = 0; f < R.length; f++) {
                    for (var K = R[f], y = K; (y = y.getNext()) && y.is && y.getName() in s;)CKEDITOR.env.needsNbspFiller && !K.getFirst(n) && K.append(o.document.createText("\xa0")), K.append(y);
                    K.insertAfter(I)
                }
                return v && e.fire("contentDomInvalidated"), !0
            }

            for (var o, r = this, a = this.database, s = this.context, l = e.getSelection(), c = l && l.getRanges(), d = c.createIterator(); o = d.getNextRange();) {
                for (var u = o.getCommonAncestor(), h = u; h && (h.type != CKEDITOR.NODE_ELEMENT || !s[h.getName()]);)h = h.getParent();
                if (h || (h = o.startPath().contains(s)) && o.setEndAt(h, CKEDITOR.POSITION_BEFORE_END), !h) {
                    var f = o.getEnclosedNode();
                    f && f.type == CKEDITOR.NODE_ELEMENT && f.getName() in s && (o.setStartAt(f, CKEDITOR.POSITION_AFTER_START), o.setEndAt(f, CKEDITOR.POSITION_BEFORE_END), h = f)
                }
                if (h && o.startContainer.type == CKEDITOR.NODE_ELEMENT && o.startContainer.getName() in s) {
                    var m = new CKEDITOR.dom.walker(o);
                    m.evaluator = t, o.startContainer = m.next()
                }
                if (h && o.endContainer.type == CKEDITOR.NODE_ELEMENT && o.endContainer.getName() in s && (m = new CKEDITOR.dom.walker(o), m.evaluator = t, o.endContainer = m.previous()), h)return i(h)
            }
            return 0
        }

        function t(e) {
            return e.type == CKEDITOR.NODE_ELEMENT && e.is("li")
        }

        function n(e) {
            return i(e) && o(e)
        }

        var i = CKEDITOR.dom.walker.whitespaces(!0), o = CKEDITOR.dom.walker.bookmark(!1, !0),
            r = CKEDITOR.TRISTATE_DISABLED, a = CKEDITOR.TRISTATE_OFF;
        CKEDITOR.plugins.add("indentlist", {
            requires: "indent", init: function (t) {
                function n(t) {
                    i.specificDefinition.apply(this, arguments), this.requiredContent = ["ul", "ol"], t.on("key", function (e) {
                        if ("wysiwyg" == t.mode && e.data.keyCode == this.indentKey) {
                            var n = this.getContext(t.elementPath());
                            if (n) {
                                if (this.isIndent && CKEDITOR.plugins.indentList.firstItemInPath(this.context, t.elementPath(), n))return;
                                t.execCommand(this.relatedGlobal), e.cancel()
                            }
                        }
                    }, this), this.jobs[this.isIndent ? 10 : 30] = {
                        refresh: this.isIndent ? function (e, t) {
                            var n = this.getContext(t),
                                i = CKEDITOR.plugins.indentList.firstItemInPath(this.context, t, n);
                            return n && this.isIndent && !i ? a : r
                        } : function (e, t) {
                            var n = this.getContext(t);
                            return !n || this.isIndent ? r : a
                        }, exec: CKEDITOR.tools.bind(e, this)
                    }
                }

                var i = CKEDITOR.plugins.indent;
                i.registerCommands(t, {
                    indentlist: new n(t, "indentlist", !0),
                    outdentlist: new n(t, "outdentlist")
                }), CKEDITOR.tools.extend(n.prototype, i.specificDefinition.prototype, {context: {ol: 1, ul: 1}})
            }
        }), CKEDITOR.plugins.indentList = {}, CKEDITOR.plugins.indentList.firstItemInPath = function (e, n, i) {
            var o = n.contains(t);
            return i || (i = n.contains(e)), i && o && o.equals(i.getFirst(t))
        }
    }(),function () {
        "use strict";
        function e(e, t, i) {
            if (!e.getCustomData("indent_processed")) {
                var o = this.editor, r = this.isIndent;
                if (t) {
                    var a = e.$.className.match(this.classNameRegex), s = 0;
                    if (a && (a = a[1], s = CKEDITOR.tools.indexOf(t, a) + 1), (s += r ? 1 : -1) < 0)return;
                    s = Math.min(s, t.length), s = Math.max(s, 0), e.$.className = CKEDITOR.tools.ltrim(e.$.className.replace(this.classNameRegex, "")), s > 0 && e.addClass(t[s - 1])
                } else {
                    var l = n(e, i), c = parseInt(e.getStyle(l), 10), d = o.config.indentOffset || 40;
                    if (isNaN(c) && (c = 0), c += (r ? 1 : -1) * d, 0 > c)return;
                    c = Math.max(c, 0), c = Math.ceil(c / d) * d, e.setStyle(l, c ? c + (o.config.indentUnit || "px") : ""), "" === e.getAttribute("style") && e.removeAttribute("style")
                }
                CKEDITOR.dom.element.setMarker(this.database, e, "indent_processed", 1)
            }
        }

        function t(e, t) {
            var n = e.$.className.match(this.classNameRegex), i = this.isIndent;
            return n ? i ? n[1] != t.slice(-1) : !0 : i
        }

        function n(e, t) {
            return "ltr" == (t || e.getComputedStyle("direction")) ? "margin-left" : "margin-right"
        }

        function i(e) {
            return parseInt(e.getStyle(n(e)), 10)
        }

        var o = CKEDITOR.dtd.$listItem, r = CKEDITOR.dtd.$list, a = CKEDITOR.TRISTATE_DISABLED,
            s = CKEDITOR.TRISTATE_OFF;
        CKEDITOR.plugins.add("indentblock", {
            requires: "indent", init: function (n) {
                function l() {
                    c.specificDefinition.apply(this, arguments), this.allowedContent = {
                        "div h1 h2 h3 h4 h5 h6 ol p pre ul": {
                            propertiesOnly: !0,
                            styles: d ? null : "margin-left,margin-right",
                            classes: d || null
                        }
                    }, this.enterBr && (this.allowedContent.div = !0), this.requiredContent = (this.enterBr ? "div" : "p") + (d ? "(" + d.join(",") + ")" : "{margin-left}"), this.jobs = {
                        20: {
                            refresh: function (e, n) {
                                var r = n.block || n.blockLimit;
                                return r.is(o) || (r = r.getAscendant(o) || r), r.is(o) && (r = r.getParent()), this.enterBr || this.getContext(n) ? d ? t.call(this, r, d) ? s : a : this.isIndent ? s : r ? CKEDITOR[(i(r) || 0) <= 0 ? "TRISTATE_DISABLED" : "TRISTATE_OFF"] : a : a
                            }, exec: function (t) {
                                var n, i = t.getSelection(), o = i && i.getRanges()[0];
                                if (n = t.elementPath().contains(r)) e.call(this, n, d); else {
                                    var a, s = o.createIterator(), l = t.config.enterMode;
                                    for (s.enforceRealBlocks = !0, s.enlargeBr = l != CKEDITOR.ENTER_BR; a = s.getNextParagraph(l == CKEDITOR.ENTER_P ? "p" : "div");)a.isReadOnly() || e.call(this, a, d)
                                }
                                return !0
                            }
                        }
                    }
                }

                var c = CKEDITOR.plugins.indent, d = n.config.indentClasses;
                c.registerCommands(n, {
                    indentblock: new l(n, "indentblock", !0),
                    outdentblock: new l(n, "outdentblock")
                }), CKEDITOR.tools.extend(l.prototype, c.specificDefinition.prototype, {
                    context: {
                        div: 1,
                        dl: 1,
                        h1: 1,
                        h2: 1,
                        h3: 1,
                        h4: 1,
                        h5: 1,
                        h6: 1,
                        ul: 1,
                        ol: 1,
                        p: 1,
                        pre: 1,
                        table: 1
                    }, classNameRegex: d ? new RegExp("(?:^|\\s+)(" + d.join("|") + ")(?=$|\\s)") : null
                })
            }
        })
    }(),function () {
        function e(e, t) {
            t = void 0 === t || t;
            var n;
            if (t) n = e.getComputedStyle("text-align"); else {
                for (; !e.hasAttribute || !e.hasAttribute("align") && !e.getStyle("text-align");) {
                    var i = e.getParent();
                    if (!i)break;
                    e = i
                }
                n = e.getStyle("text-align") || e.getAttribute("align") || ""
            }
            return n && (n = n.replace(/(?:-(?:moz|webkit)-)?(?:start|auto)/i, "")), !n && t && (n = "rtl" == e.getComputedStyle("direction") ? "right" : "left"), n
        }

        function t(e, t, n) {
            this.editor = e, this.name = t, this.value = n, this.context = "p";
            var i = e.config.justifyClasses, o = e.config.enterMode == CKEDITOR.ENTER_P ? "p" : "div";
            if (i) {
                switch (n) {
                    case"left":
                        this.cssClassName = i[0];
                        break;
                    case"center":
                        this.cssClassName = i[1];
                        break;
                    case"right":
                        this.cssClassName = i[2];
                        break;
                    case"justify":
                        this.cssClassName = i[3]
                }
                this.cssClassRegex = new RegExp("(?:^|\\s+)(?:" + i.join("|") + ")(?=$|\\s)"), this.requiredContent = o + "(" + this.cssClassName + ")"
            } else this.requiredContent = o + "{text-align}";
            this.allowedContent = {
                "caption div h1 h2 h3 h4 h5 h6 p pre td th li": {
                    propertiesOnly: !0,
                    styles: this.cssClassName ? null : "text-align",
                    classes: this.cssClassName || null
                }
            }, e.config.enterMode == CKEDITOR.ENTER_BR && (this.allowedContent.div = !0)
        }

        function n(e) {
            var t = e.editor, n = t.createRange();
            n.setStartBefore(e.data.node), n.setEndAfter(e.data.node);
            for (var i, o = new CKEDITOR.dom.walker(n); i = o.next();)if (i.type == CKEDITOR.NODE_ELEMENT) {
                if (!i.equals(e.data.node) && i.getDirection()) {
                    n.setStartAfter(i), o = new CKEDITOR.dom.walker(n);
                    continue
                }
                var r = t.config.justifyClasses;
                r && (i.hasClass(r[0]) ? (i.removeClass(r[0]), i.addClass(r[2])) : i.hasClass(r[2]) && (i.removeClass(r[2]), i.addClass(r[0])));
                var a = "text-align", s = i.getStyle(a);
                "left" == s ? i.setStyle(a, "right") : "right" == s && i.setStyle(a, "left")
            }
        }

        t.prototype = {
            exec: function (t) {
                var n = t.getSelection(), i = t.config.enterMode;
                if (n) {
                    var o, r, a = n.createBookmarks(), s = n.getRanges(), l = this.cssClassName,
                        c = t.config.useComputedState;
                    c = void 0 === c || c;
                    for (var d = s.length - 1; d >= 0; d--)for (o = s[d].createIterator(), o.enlargeBr = i != CKEDITOR.ENTER_BR; r = o.getNextParagraph(i == CKEDITOR.ENTER_P ? "p" : "div");)if (!r.isReadOnly()) {
                        r.removeAttribute("align"), r.removeStyle("text-align");
                        var u = l && (r.$.className = CKEDITOR.tools.ltrim(r.$.className.replace(this.cssClassRegex, ""))),
                            h = this.state == CKEDITOR.TRISTATE_OFF && (!c || e(r, !0) != this.value);
                        l ? h ? r.addClass(l) : u || r.removeAttribute("class") : h && r.setStyle("text-align", this.value)
                    }
                    t.focus(), t.forceNextSelectionCheck(), n.selectBookmarks(a)
                }
            }, refresh: function (t, n) {
                var i = n.block || n.blockLimit;
                this.setState("body" != i.getName() && e(i, this.editor.config.useComputedState) == this.value ? CKEDITOR.TRISTATE_ON : CKEDITOR.TRISTATE_OFF)
            }
        }, CKEDITOR.plugins.add("justify", {
            init: function (e) {
                if (!e.blockless) {
                    var i = new t(e, "justifyleft", "left"), o = new t(e, "justifycenter", "center"),
                        r = new t(e, "justifyright", "right"), a = new t(e, "justifyblock", "justify");
                    e.addCommand("justifyleft", i), e.addCommand("justifycenter", o), e.addCommand("justifyright", r), e.addCommand("justifyblock", a), e.ui.addButton && (e.ui.addButton("JustifyLeft", {
                        label: e.lang.justify.left,
                        command: "justifyleft",
                        toolbar: "align,10"
                    }), e.ui.addButton("JustifyCenter", {
                        label: e.lang.justify.center,
                        command: "justifycenter",
                        toolbar: "align,20"
                    }), e.ui.addButton("JustifyRight", {
                        label: e.lang.justify.right,
                        command: "justifyright",
                        toolbar: "align,30"
                    }), e.ui.addButton("JustifyBlock", {
                        label: e.lang.justify.block,
                        command: "justifyblock",
                        toolbar: "align,40"
                    })), e.on("dirChanged", n)
                }
            }
        })
    }(),function () {
        function e(e) {
            return e.replace(/\\'/g, "'")
        }

        function t(e) {
            return e.replace(/'/g, "\\$&")
        }

        function n(e) {
            for (var t, n = e.length, i = [], o = 0; n > o; o++)t = e.charCodeAt(o), i.push(t);
            return "String.fromCharCode(" + i.join(",") + ")"
        }

        function i(e, n) {
            var i, o, r, a = e.plugins.link, s = a.compiledProtectionFunction.name,
                l = a.compiledProtectionFunction.params;
            r = [s, "("];
            for (var c = 0; c < l.length; c++)i = l[c].toLowerCase(), o = n[i], c > 0 && r.push(","), r.push("'", o ? t(encodeURIComponent(n[i])) : "", "'");
            return r.push(")"), r.join("")
        }

        function o(e) {
            var t, n = e.config.emailProtection || "";
            return n && "encode" != n && (t = {}, n.replace(/^([^(]+)\(([^)]+)\)$/, function (e, n, i) {
                t.name = n, t.params = [], i.replace(/[^,\s]+/g, function (e) {
                    t.params.push(e)
                })
            })), t
        }

        CKEDITOR.plugins.add("link", {
            requires: "dialog,fakeobjects", onLoad: function () {
                function e(e) {
                    return i.replace(/%1/g, "rtl" == e ? "right" : "left").replace(/%2/g, "cke_contents_" + e)
                }

                var t = CKEDITOR.getUrl(this.path + "images" + (CKEDITOR.env.hidpi ? "/hidpi" : "") + "/anchor.png"),
                    n = "background:url(" + t + ") no-repeat %1 center;border:1px dotted #00f;background-size:16px;",
                    i = ".%2 a.cke_anchor,.%2 a.cke_anchor_empty,.cke_editable.%2 a[name],.cke_editable.%2 a[data-cke-saved-name]{" + n + "padding-%1:18px;cursor:auto;}.%2 img.cke_anchor{" + n + "width:16px;min-height:15px;height:1.15em;vertical-align:text-bottom;}";
                CKEDITOR.addCss(e("ltr") + e("rtl"))
            }, init: function (e) {
                var t = "a[!href]", n = "a[href]";
                CKEDITOR.dialog.isTabEnabled(e, "link", "advanced") && (t = t.replace("]", ",accesskey,charset,dir,id,lang,name,rel,tabindex,title,type]{*}(*)")), CKEDITOR.dialog.isTabEnabled(e, "link", "target") && (t = t.replace("]", ",target,onclick]")), e.addCommand("link", new CKEDITOR.dialogCommand("link", {
                    allowedContent: t,
                    requiredContent: n
                })), e.addCommand("anchor", new CKEDITOR.dialogCommand("anchor", {
                    allowedContent: "a[!name,id]",
                    requiredContent: "a[name]"
                })), e.addCommand("unlink", new CKEDITOR.unlinkCommand), e.addCommand("removeAnchor", new CKEDITOR.removeAnchorCommand), e.setKeystroke(CKEDITOR.CTRL + 76, "link"), e.ui.addButton && (e.ui.addButton("Link", {
                    label: e.lang.link.toolbar,
                    command: "link",
                    toolbar: "links,10"
                }), e.ui.addButton("Unlink", {
                    label: e.lang.link.unlink,
                    command: "unlink",
                    toolbar: "links,20"
                }), e.ui.addButton("Anchor", {
                    label: e.lang.link.anchor.toolbar,
                    command: "anchor",
                    toolbar: "links,30"
                })), CKEDITOR.dialog.add("link", this.path + "dialogs/link.js"), CKEDITOR.dialog.add("anchor", this.path + "dialogs/anchor.js"), e.on("doubleclick", function (t) {
                    var n = CKEDITOR.plugins.link.getSelectedLink(e) || t.data.element;
                    n.isReadOnly() || (n.is("a") ? (t.data.dialog = !n.getAttribute("name") || n.getAttribute("href") && n.getChildCount() ? "link" : "anchor", t.data.link = n) : CKEDITOR.plugins.link.tryRestoreFakeAnchor(e, n) && (t.data.dialog = "anchor"))
                }, null, null, 0), e.on("doubleclick", function (t) {
                    t.data.dialog in {link: 1, anchor: 1} && t.data.link && e.getSelection().selectElement(t.data.link)
                }, null, null, 20), e.addMenuItems && e.addMenuItems({
                    anchor: {
                        label: e.lang.link.anchor.menu,
                        command: "anchor",
                        group: "anchor",
                        order: 1
                    },
                    removeAnchor: {
                        label: e.lang.link.anchor.remove,
                        command: "removeAnchor",
                        group: "anchor",
                        order: 5
                    },
                    link: {label: e.lang.link.menu, command: "link", group: "link", order: 1},
                    unlink: {label: e.lang.link.unlink, command: "unlink", group: "link", order: 5}
                }), e.contextMenu && e.contextMenu.addListener(function (t) {
                    if (!t || t.isReadOnly())return null;
                    var n = CKEDITOR.plugins.link.tryRestoreFakeAnchor(e, t);
                    if (!n && !(n = CKEDITOR.plugins.link.getSelectedLink(e)))return null;
                    var i = {};
                    return n.getAttribute("href") && n.getChildCount() && (i = {
                        link: CKEDITOR.TRISTATE_OFF,
                        unlink: CKEDITOR.TRISTATE_OFF
                    }), n && n.hasAttribute("name") && (i.anchor = i.removeAnchor = CKEDITOR.TRISTATE_OFF), i
                }), this.compiledProtectionFunction = o(e)
            }, afterInit: function (e) {
                e.dataProcessor.dataFilter.addRules({
                    elements: {
                        a: function (t) {
                            return t.attributes.name ? t.children.length ? null : e.createFakeParserElement(t, "cke_anchor", "anchor") : null
                        }
                    }
                });
                var t = e._.elementsPath && e._.elementsPath.filters;
                t && t.push(function (t, n) {
                    return "a" != n || !CKEDITOR.plugins.link.tryRestoreFakeAnchor(e, t) && (!t.getAttribute("name") || t.getAttribute("href") && t.getChildCount()) ? void 0 : "anchor"
                })
            }
        });
        var r = /^javascript:/, a = /^mailto:([^?]+)(?:\?(.+))?$/, s = /subject=([^;?:@&=$,\/]*)/,
            l = /body=([^;?:@&=$,\/]*)/, c = /^#(.*)$/, d = /^((?:http|https|ftp|news):\/\/)?(.*)$/,
            u = /^(_(?:self|top|parent|blank))$/,
            h = /^javascript:void\(location\.href='mailto:'\+String\.fromCharCode\(([^)]+)\)(?:\+'(.*)')?\)$/,
            f = /^javascript:([^(]+)\(([^)]+)\)$/,
            m = /\s*window.open\(\s*this\.href\s*,\s*(?:'([^']*)'|null)\s*,\s*'([^']*)'\s*\)\s*;\s*return\s*false;*\s*/,
            E = /(?:^|,)([^=]+)=(\d+|yes|no)/gi, g = {
                id: "advId",
                dir: "advLangDir",
                accessKey: "advAccessKey",
                name: "advName",
                lang: "advLangCode",
                tabindex: "advTabIndex",
                title: "advTitle",
                type: "advContentType",
                "class": "advCSSClasses",
                charset: "advCharset",
                style: "advStyles",
                rel: "advRel"
            };
        CKEDITOR.plugins.link = {
            getSelectedLink: function (e) {
                var t = e.getSelection(), n = t.getSelectedElement();
                if (n && n.is("a"))return n;
                var i = t.getRanges()[0];
                return i ? (i.shrink(CKEDITOR.SHRINK_TEXT), e.elementPath(i.getCommonAncestor()).contains("a", 1)) : null
            }, getEditorAnchors: function (e) {
                for (var t, n = e.editable(), i = n.isInline() && !e.plugins.divarea ? e.document : n, o = i.getElementsByTag("a"), r = i.getElementsByTag("img"), a = [], s = 0; t = o.getItem(s++);)(t.data("cke-saved-name") || t.hasAttribute("name")) && a.push({
                    name: t.data("cke-saved-name") || t.getAttribute("name"),
                    id: t.getAttribute("id")
                });
                for (s = 0; t = r.getItem(s++);)(t = this.tryRestoreFakeAnchor(e, t)) && a.push({
                    name: t.getAttribute("name"),
                    id: t.getAttribute("id")
                });
                return a
            }, fakeAnchor: !0, tryRestoreFakeAnchor: function (e, t) {
                if (t && t.data("cke-real-element-type") && "anchor" == t.data("cke-real-element-type")) {
                    var n = e.restoreRealElement(t);
                    if (n.data("cke-saved-name"))return n
                }
            }, parseLinkAttributes: function (t, n) {
                var i, o, p, T, C = n && (n.data("cke-saved-href") || n.getAttribute("href")) || "",
                    v = t.plugins.link.compiledProtectionFunction, I = t.config.emailProtection, O = {};
                if ((i = C.match(r)) && ("encode" == I ? C = C.replace(h, function (t, n, i) {
                        return "mailto:" + String.fromCharCode.apply(String, n.split(",")) + (i && e(i))
                    }) : I && C.replace(f, function (t, n, i) {
                            if (n == v.name) {
                                O.type = "email";
                                for (var o, r, a = O.email = {}, s = /[^,\s]+/g, l = /(^')|('$)/g, c = i.match(s), d = c.length, u = 0; d > u; u++)r = decodeURIComponent(e(c[u].replace(l, ""))), o = v.params[u].toLowerCase(), a[o] = r;
                                a.address = [a.name, a.domain].join("@")
                            }
                        })), !O.type)if (p = C.match(c)) O.type = "anchor", O.anchor = {}, O.anchor.name = O.anchor.id = p[1]; else if (o = C.match(a)) {
                    var D = C.match(s), R = C.match(l);
                    O.type = "email";
                    var b = O.email = {};
                    b.address = o[1], D && (b.subject = decodeURIComponent(D[1])), R && (b.body = decodeURIComponent(R[1]))
                } else C && (T = C.match(d)) && (O.type = "url", O.url = {}, O.url.protocol = T[1], O.url.url = T[2]);
                if (n) {
                    var K = n.getAttribute("target");
                    if (K) O.target = {type: K.match(u) ? K : "frame", name: K}; else {
                        var y = n.data("cke-pa-onclick") || n.getAttribute("onclick"), _ = y && y.match(m);
                        if (_) {
                            O.target = {type: "popup", name: _[1]};
                            for (var k; k = E.exec(_[2]);)"yes" != k[2] && "1" != k[2] || k[1] in {
                                height: 1,
                                width: 1,
                                top: 1,
                                left: 1
                            } ? isFinite(k[2]) && (O.target[k[1]] = k[2]) : O.target[k[1]] = !0
                        }
                    }
                    var N = {};
                    for (var w in g) {
                        var S = n.getAttribute(w);
                        S && (N[g[w]] = S)
                    }
                    var x = n.data("cke-saved-name") || N.advName;
                    x && (N.advName = x), CKEDITOR.tools.isEmpty(N) || (O.advanced = N)
                }
                return O
            }, getLinkAttributes: function (e, o) {
                var r = e.config.emailProtection || "", a = {};
                switch (o.type) {
                    case"url":
                        var s = o.url && void 0 !== o.url.protocol ? o.url.protocol : "http://",
                            l = o.url && CKEDITOR.tools.trim(o.url.url) || "";
                        a["data-cke-saved-href"] = 0 === l.indexOf("/") ? l : s + l;
                        break;
                    case"anchor":
                        var c = o.anchor && o.anchor.name, d = o.anchor && o.anchor.id;
                        a["data-cke-saved-href"] = "#" + (c || d || "");
                        break;
                    case"email":
                        var u, h = o.email, f = h.address;
                        switch (r) {
                            case"":
                            case"encode":
                                var m = encodeURIComponent(h.subject || ""), E = encodeURIComponent(h.body || ""),
                                    p = [];
                                m && p.push("subject=" + m), E && p.push("body=" + E), p = p.length ? "?" + p.join("&") : "", "encode" == r ? (u = ["javascript:void(location.href='mailto:'+", n(f)], p && u.push("+'", t(p), "'"), u.push(")")) : u = ["mailto:", f, p];
                                break;
                            default:
                                var T = f.split("@", 2);
                                h.name = T[0], h.domain = T[1], u = ["javascript:", i(e, h)]
                        }
                        a["data-cke-saved-href"] = u.join("")
                }
                if (o.target)if ("popup" == o.target.type) {
                    for (var C = ["window.open(this.href, '", o.target.name || "", "', '"], v = ["resizable", "status", "location", "toolbar", "menubar", "fullscreen", "scrollbars", "dependent"], I = v.length, O = function (e) {
                        o.target[e] && v.push(e + "=" + o.target[e])
                    }, D = 0; I > D; D++)v[D] = v[D] + (o.target[v[D]] ? "=yes" : "=no");
                    O("width"), O("left"), O("height"), O("top"), C.push(v.join(","), "'); return false;"), a["data-cke-pa-onclick"] = C.join("")
                } else"notSet" != o.target.type && o.target.name && (a.target = o.target.name);
                if (o.advanced) {
                    for (var R in g) {
                        var b = o.advanced[g[R]];
                        b && (a[R] = b)
                    }
                    a.name && (a["data-cke-saved-name"] = a.name)
                }
                a["data-cke-saved-href"] && (a.href = a["data-cke-saved-href"]);
                var K = CKEDITOR.tools.extend({
                    target: 1,
                    onclick: 1,
                    "data-cke-pa-onclick": 1,
                    "data-cke-saved-name": 1
                }, g);
                for (var y in a)delete K[y];
                return {set: a, removed: CKEDITOR.tools.objectKeys(K)}
            }
        }, CKEDITOR.unlinkCommand = function () {
        }, CKEDITOR.unlinkCommand.prototype = {
            exec: function (e) {
                var t = new CKEDITOR.style({element: "a", type: CKEDITOR.STYLE_INLINE, alwaysRemoveElement: 1});
                e.removeStyle(t)
            }, refresh: function (e, t) {
                var n = t.lastElement && t.lastElement.getAscendant("a", !0);
                this.setState(n && "a" == n.getName() && n.getAttribute("href") && n.getChildCount() ? CKEDITOR.TRISTATE_OFF : CKEDITOR.TRISTATE_DISABLED)
            }, contextSensitive: 1, startDisabled: 1, requiredContent: "a[href]"
        }, CKEDITOR.removeAnchorCommand = function () {
        }, CKEDITOR.removeAnchorCommand.prototype = {
            exec: function (e) {
                var t, n = e.getSelection(), i = n.createBookmarks();
                n && (t = n.getSelectedElement()) && (t.getChildCount() ? t.is("a") : CKEDITOR.plugins.link.tryRestoreFakeAnchor(e, t)) ? t.remove(1) : (t = CKEDITOR.plugins.link.getSelectedLink(e)) && (t.hasAttribute("href") ? (t.removeAttributes({
                        name: 1,
                        "data-cke-saved-name": 1
                    }), t.removeClass("cke_anchor")) : t.remove(1)), n.selectBookmarks(i)
            }, requiredContent: "a[name]"
        }, CKEDITOR.tools.extend(CKEDITOR.config, {linkShowAdvancedTab: !0, linkShowTargetTab: !0})
    }(),function () {
        function e(e) {
            var t, n, i;
            if (t = e.getDirection()) {
                for (n = e.getParent(); n && !(i = n.getDirection());)n = n.getParent();
                t == i && e.removeAttribute("dir")
            }
        }

        function t(e, t) {
            var n = e.getAttribute("style");
            n && t.setAttribute("style", n.replace(/([^;])$/, "$1;") + (t.getAttribute("style") || ""))
        }

        function n(e, t, n, i) {
            for (var o = CKEDITOR.plugins.list.listToArray(t.root, n), r = [], a = 0; a < t.contents.length; a++) {
                var s = t.contents[a];
                s = s.getAscendant("li", !0), s && !s.getCustomData("list_item_processed") && (r.push(s), CKEDITOR.dom.element.setMarker(n, s, "list_item_processed", !0))
            }
            var l, c, d = t.root, u = d.getDocument();
            for (a = 0; a < r.length; a++) {
                var h = r[a].getCustomData("listarray_index");
                l = o[h].parent, l.is(this.type) || (c = u.createElement(this.type), l.copyAttributes(c, {
                    start: 1,
                    type: 1
                }), c.removeStyle("list-style-type"), o[h].parent = c)
            }
            var f, m = CKEDITOR.plugins.list.arrayToList(o, n, null, e.config.enterMode),
                E = m.listNode.getChildCount();
            for (a = 0; E > a && (f = m.listNode.getChild(a)); a++)f.getName() == this.type && i.push(f);
            m.listNode.replace(t.root), e.fire("contentDomInvalidated")
        }

        function i(e, t, n) {
            var i = t.contents, o = t.root.getDocument(), a = [];
            if (1 == i.length && i[0].equals(t.root)) {
                var s = o.createElement("div");
                i[0].moveChildren && i[0].moveChildren(s), i[0].append(s), i[0] = s
            }
            for (var l = t.contents[0].getParent(), c = 0; c < i.length; c++)l = l.getCommonAncestor(i[c].getParent());
            var d, u, h = e.config.useComputedState;
            for (h = void 0 === h || h, c = 0; c < i.length; c++)for (var f, m = i[c]; f = m.getParent();) {
                if (f.equals(l)) {
                    a.push(m), !u && m.getDirection() && (u = 1);
                    var E = m.getDirection(h);
                    null !== d && (d = d && d != E ? null : E);
                    break
                }
                m = f
            }
            if (!(a.length < 1)) {
                var g = a[a.length - 1].getNext(), p = o.createElement(this.type);
                n.push(p);
                for (var T, C; a.length;)T = a.shift(), C = o.createElement("li"), r(T) ? T.appendTo(C) : (T.copyAttributes(C), d && T.getDirection() && (C.removeStyle("direction"), C.removeAttribute("dir")), T.moveChildren(C), T.remove()), C.appendTo(p);
                d && u && p.setAttribute("dir", d), g ? p.insertBefore(g) : p.appendTo(l)
            }
        }

        function o(e, t, n) {
            function i(n) {
                !(h = E[n ? "getFirst" : "getLast"]()) || h.is && h.isBlockBoundary() || !(f = t.root[n ? "getPrevious" : "getNext"](CKEDITOR.dom.walker.invisible(!0))) || f.is && f.isBlockBoundary({br: 1}) || e.document.createElement("br")[n ? "insertBefore" : "insertAfter"](h)
            }

            for (var o = CKEDITOR.plugins.list.listToArray(t.root, n), r = [], a = 0; a < t.contents.length; a++) {
                var s = t.contents[a];
                s = s.getAscendant("li", !0), s && !s.getCustomData("list_item_processed") && (r.push(s), CKEDITOR.dom.element.setMarker(n, s, "list_item_processed", !0))
            }
            var l = null;
            for (a = 0; a < r.length; a++) {
                var c = r[a].getCustomData("listarray_index");
                o[c].indent = -1, l = c
            }
            for (a = l + 1; a < o.length; a++)if (o[a].indent > o[a - 1].indent + 1) {
                for (var d = o[a - 1].indent + 1 - o[a].indent, u = o[a].indent; o[a] && o[a].indent >= u;)o[a].indent += d, a++;
                a--
            }
            var h, f, m = CKEDITOR.plugins.list.arrayToList(o, n, null, e.config.enterMode, t.root.getAttribute("dir")),
                E = m.listNode;
            i(!0), i(), E.replace(t.root), e.fire("contentDomInvalidated")
        }

        function r(e) {
            return e.is("pre") || p.test(e.getName()) || "false" == e.getAttribute("contenteditable")
        }

        function a(e, t) {
            this.name = e, this.type = t, this.context = t, this.allowedContent = t + " li", this.requiredContent = t
        }

        function s(e, t, n, i) {
            for (var o, r; o = e[i ? "getLast" : "getFirst"](T);)(r = o.getDirection(1)) !== t.getDirection(1) && o.setAttribute("dir", r), o.remove(), n ? o[i ? "insertBefore" : "insertAfter"](n) : t.append(o, i)
        }

        function l(e) {
            function t(t) {
                var n = e[t ? "getPrevious" : "getNext"](E);
                n && n.type == CKEDITOR.NODE_ELEMENT && n.is(e.getName()) && (s(e, n, null, !t), e.remove(), e = n)
            }

            t(), t(1)
        }

        function c(e) {
            return e.type == CKEDITOR.NODE_ELEMENT && (e.getName() in CKEDITOR.dtd.$block || e.getName() in CKEDITOR.dtd.$listItem) && CKEDITOR.dtd[e.getName()]["#"]
        }

        function d(e, t, n) {
            e.fire("saveSnapshot"), n.enlarge(CKEDITOR.ENLARGE_LIST_ITEM_CONTENTS);
            var i = n.extractContents();
            t.trim(!1, !0);
            var o, r = t.createBookmark(), a = new CKEDITOR.dom.elementPath(t.startContainer), c = a.block,
                d = a.lastElement.getAscendant("li", 1) || c, h = new CKEDITOR.dom.elementPath(n.startContainer),
                f = h.contains(CKEDITOR.dtd.$listItem), m = h.contains(CKEDITOR.dtd.$list);
            if (c) {
                var p = c.getBogus();
                p && p.remove()
            } else m && (o = m.getPrevious(E), o && g(o) && o.remove());
            o = i.getLast(), o && o.type == CKEDITOR.NODE_ELEMENT && o.is("br") && o.remove();
            var T = t.startContainer.getChild(t.startOffset);
            if (T ? i.insertBefore(T) : t.startContainer.append(i), f) {
                var C = u(f);
                C && (d.contains(f) ? (s(C, f.getParent(), f), C.remove()) : d.append(C))
            }
            for (var v, I; n.checkStartOfBlock() && n.checkEndOfBlock() && (h = n.startPath(), v = h.block);)v.is("li") && (I = v.getParent(), v.equals(I.getLast(E)) && v.equals(I.getFirst(E)) && (v = I)), n.moveToPosition(v, CKEDITOR.POSITION_BEFORE_START), v.remove();
            var O = n.clone(), D = e.editable();
            O.setEndAt(D, CKEDITOR.POSITION_BEFORE_END);
            var R = new CKEDITOR.dom.walker(O);
            R.evaluator = function (e) {
                return E(e) && !g(e)
            };
            var b = R.next();
            b && b.type == CKEDITOR.NODE_ELEMENT && b.getName() in CKEDITOR.dtd.$list && l(b), t.moveToBookmark(r), t.select(), e.fire("saveSnapshot")
        }

        function u(e) {
            var t = e.getLast(E);
            return t && t.type == CKEDITOR.NODE_ELEMENT && t.getName() in h ? t : null
        }

        var h = {ol: 1, ul: 1}, f = CKEDITOR.dom.walker.whitespaces(), m = CKEDITOR.dom.walker.bookmark(),
            E = function (e) {
                return !(f(e) || m(e))
            }, g = CKEDITOR.dom.walker.bogus();
        CKEDITOR.plugins.list = {
            listToArray: function (e, t, n, i, o) {
                if (!h[e.getName()])return [];
                i || (i = 0), n || (n = []);
                for (var r = 0, a = e.getChildCount(); a > r; r++) {
                    var s = e.getChild(r);
                    if (s.type == CKEDITOR.NODE_ELEMENT && s.getName() in CKEDITOR.dtd.$list && CKEDITOR.plugins.list.listToArray(s, t, n, i + 1), "li" == s.$.nodeName.toLowerCase()) {
                        var l = {parent: e, indent: i, element: s, contents: []};
                        o ? l.grandparent = o : (l.grandparent = e.getParent(), l.grandparent && "li" == l.grandparent.$.nodeName.toLowerCase() && (l.grandparent = l.grandparent.getParent())), t && CKEDITOR.dom.element.setMarker(t, s, "listarray_index", n.length), n.push(l);
                        for (var c, d = 0, u = s.getChildCount(); u > d; d++)c = s.getChild(d), c.type == CKEDITOR.NODE_ELEMENT && h[c.getName()] ? CKEDITOR.plugins.list.listToArray(c, t, n, i + 1, l.grandparent) : l.contents.push(c)
                    }
                }
                return n
            }, arrayToList: function (n, i, o, r, a) {
                if (o || (o = 0), !n || n.length < o + 1)return null;
                for (var s, l, c, d = n[o].parent.getDocument(), u = new CKEDITOR.dom.documentFragment(d), f = null, g = o, p = Math.max(n[o].indent, 0), T = null, C = r == CKEDITOR.ENTER_P ? "p" : "div"; ;) {
                    var v = n[g], I = v.grandparent;
                    if (l = v.element.getDirection(1), v.indent == p) {
                        for (f && n[g].parent.getName() == f.getName() || (f = n[g].parent.clone(!1, 1), a && f.setAttribute("dir", a), u.append(f)), T = f.append(v.element.clone(0, 1)), l != f.getDirection(1) && T.setAttribute("dir", l), s = 0; s < v.contents.length; s++)T.append(v.contents[s].clone(1, 1));
                        g++
                    } else if (v.indent == Math.max(p, 0) + 1) {
                        var O = n[g - 1].element.getDirection(1),
                            D = CKEDITOR.plugins.list.arrayToList(n, null, g, r, O != l ? l : null);
                        !T.getChildCount() && CKEDITOR.env.needsNbspFiller && d.$.documentMode <= 7 && T.append(d.createText("\xa0")), T.append(D.listNode), g = D.nextIndex
                    } else {
                        if (-1 != v.indent || o || !I)return null;
                        h[I.getName()] ? (T = v.element.clone(!1, !0), l != I.getDirection(1) && T.setAttribute("dir", l)) : T = new CKEDITOR.dom.documentFragment(d);
                        var R, b, K = I.getDirection(1) != l, y = v.element, _ = y.getAttribute("class"),
                            k = y.getAttribute("style"),
                            N = T.type == CKEDITOR.NODE_DOCUMENT_FRAGMENT && (r != CKEDITOR.ENTER_BR || K || k || _),
                            w = v.contents.length;
                        for (s = 0; w > s; s++)R = v.contents[s], m(R) && w > 1 ? N ? b = R.clone(1, 1) : T.append(R.clone(1, 1)) : R.type == CKEDITOR.NODE_ELEMENT && R.isBlockBoundary() ? (K && !R.getDirection() && R.setAttribute("dir", l), t(y, R), _ && R.addClass(_), c = null, b && (T.append(b), b = null), T.append(R.clone(1, 1))) : N ? (c || (c = d.createElement(C), T.append(c), K && c.setAttribute("dir", l)), k && c.setAttribute("style", k), _ && c.setAttribute("class", _), b && (c.append(b), b = null), c.append(R.clone(1, 1))) : T.append(R.clone(1, 1));
                        if (b && ((c || T).append(b), b = null), T.type == CKEDITOR.NODE_DOCUMENT_FRAGMENT && g != n.length - 1) {
                            var S;
                            CKEDITOR.env.needsBrFiller && (S = T.getLast(), S && S.type == CKEDITOR.NODE_ELEMENT && S.is("br") && S.remove()), S = T.getLast(E), S && S.type == CKEDITOR.NODE_ELEMENT && S.is(CKEDITOR.dtd.$block) || T.append(d.createElement("br"))
                        }
                        var x = T.$.nodeName.toLowerCase();
                        ("div" == x || "p" == x) && T.appendBogus(), u.append(T), f = null, g++
                    }
                    if (c = null, n.length <= g || Math.max(n[g].indent, 0) < p)break
                }
                if (i)for (var A = u.getFirst(); A;)A.type == CKEDITOR.NODE_ELEMENT && (CKEDITOR.dom.element.clearMarkers(i, A), A.getName() in CKEDITOR.dtd.$listItem && e(A)), A = A.getNextSourceNode();
                return {listNode: u, nextIndex: g}
            }
        };
        var p = /^h[1-6]$/, T = CKEDITOR.dom.walker.nodeType(CKEDITOR.NODE_ELEMENT);
        a.prototype = {
            exec: function (e) {
                this.refresh(e, e.elementPath());
                var t = e.config, r = e.getSelection(), a = r && r.getRanges();
                if (this.state == CKEDITOR.TRISTATE_OFF) {
                    var s = e.editable();
                    if (s.getFirst(E)) {
                        var c = 1 == a.length && a[0], d = c && c.getEnclosedNode();
                        d && d.is && this.type == d.getName() && this.setState(CKEDITOR.TRISTATE_ON)
                    } else t.enterMode == CKEDITOR.ENTER_BR ? s.appendBogus() : a[0].fixBlock(1, t.enterMode == CKEDITOR.ENTER_P ? "p" : "div"), r.selectRanges(a)
                }
                for (var u = r.createBookmarks(!0), f = [], m = {}, g = a.createIterator(), p = 0; (c = g.getNextRange()) && ++p;) {
                    var T = c.getBoundaryNodes(), C = T.startNode, v = T.endNode;
                    C.type == CKEDITOR.NODE_ELEMENT && "td" == C.getName() && c.setStartAt(T.startNode, CKEDITOR.POSITION_AFTER_START), v.type == CKEDITOR.NODE_ELEMENT && "td" == v.getName() && c.setEndAt(T.endNode, CKEDITOR.POSITION_BEFORE_END);
                    var I, O = c.createIterator();
                    for (O.forceBrBreak = this.state == CKEDITOR.TRISTATE_OFF; I = O.getNextParagraph();)if (!I.getCustomData("list_block")) {
                        CKEDITOR.dom.element.setMarker(m, I, "list_block", 1);
                        for (var D, R = e.elementPath(I), b = R.elements, K = b.length, y = 0, _ = R.blockLimit, k = K - 1; k >= 0 && (D = b[k]); k--)if (h[D.getName()] && _.contains(D)) {
                            _.removeCustomData("list_group_object_" + p);
                            var N = D.getCustomData("list_group_object");
                            N ? N.contents.push(I) : (N = {
                                root: D,
                                contents: [I]
                            }, f.push(N), CKEDITOR.dom.element.setMarker(m, D, "list_group_object", N)), y = 1;
                            break
                        }
                        if (!y) {
                            var w = _;
                            w.getCustomData("list_group_object_" + p) ? w.getCustomData("list_group_object_" + p).contents.push(I) : (N = {
                                root: w,
                                contents: [I]
                            }, CKEDITOR.dom.element.setMarker(m, w, "list_group_object_" + p, N), f.push(N))
                        }
                    }
                }
                for (var S = []; f.length > 0;)N = f.shift(), this.state == CKEDITOR.TRISTATE_OFF ? h[N.root.getName()] ? n.call(this, e, N, m, S) : i.call(this, e, N, S) : this.state == CKEDITOR.TRISTATE_ON && h[N.root.getName()] && o.call(this, e, N, m);
                for (k = 0; k < S.length; k++)l(S[k]);
                CKEDITOR.dom.element.clearAllMarkers(m), r.selectBookmarks(u), e.focus()
            }, refresh: function (e, t) {
                var n = t.contains(h, 1), i = t.blockLimit || t.root;
                this.setState(n && i.contains(n) && n.is(this.type) ? CKEDITOR.TRISTATE_ON : CKEDITOR.TRISTATE_OFF)
            }
        }, CKEDITOR.plugins.add("list", {
            requires: "indentlist", init: function (e) {
                e.blockless || (e.addCommand("numberedlist", new a("numberedlist", "ol")), e.addCommand("bulletedlist", new a("bulletedlist", "ul")), e.ui.addButton && (e.ui.addButton("NumberedList", {
                    label: e.lang.list.numberedlist,
                    command: "numberedlist",
                    directional: !0,
                    toolbar: "list,10"
                }), e.ui.addButton("BulletedList", {
                    label: e.lang.list.bulletedlist,
                    command: "bulletedlist",
                    directional: !0,
                    toolbar: "list,20"
                })), e.on("key", function (t) {
                    var n, i = t.data.domEvent.getKey();
                    if ("wysiwyg" == e.mode && i in {8: 1, 46: 1}) {
                        var o = e.getSelection(), r = o.getRanges()[0], a = r && r.startPath();
                        if (!r || !r.collapsed)return;
                        var s = 8 == i, l = e.editable(), f = new CKEDITOR.dom.walker(r.clone());
                        f.evaluator = function (e) {
                            return E(e) && !g(e)
                        }, f.guard = function (e, t) {
                            return !(t && e.type == CKEDITOR.NODE_ELEMENT && e.is("table"))
                        };
                        var m = r.clone();
                        if (s) {
                            var p, T;
                            if ((p = a.contains(h)) && r.checkBoundaryOfElement(p, CKEDITOR.START) && (p = p.getParent()) && p.is("li") && (p = u(p)) ? (T = p, p = p.getPrevious(E), m.moveToPosition(p && g(p) ? p : T, CKEDITOR.POSITION_BEFORE_START)) : (f.range.setStartAt(l, CKEDITOR.POSITION_AFTER_START), f.range.setEnd(r.startContainer, r.startOffset), p = f.previous(), p && p.type == CKEDITOR.NODE_ELEMENT && (p.getName() in h || p.is("li")) && (p.is("li") || (f.range.selectNodeContents(p), f.reset(), f.evaluator = c, p = f.previous()), T = p, m.moveToElementEditEnd(T))), T) d(e, m, r), t.cancel(); else {
                                var C = a.contains(h);
                                C && r.checkBoundaryOfElement(C, CKEDITOR.START) && (n = C.getFirst(E), r.checkBoundaryOfElement(n, CKEDITOR.START) && (p = C.getPrevious(E), u(n) ? (p && (r.moveToElementEditEnd(p), r.select()), t.cancel()) : (e.execCommand("outdent"), t.cancel())))
                            }
                        } else {
                            var v, I;
                            if (n = a.contains("li")) {
                                f.range.setEndAt(l, CKEDITOR.POSITION_BEFORE_END);
                                var O = n.getLast(E), D = O && c(O) ? O : n, R = 0;
                                v = f.next(), v && v.type == CKEDITOR.NODE_ELEMENT && v.getName() in h && v.equals(O) ? (R = 1, v = f.next()) : r.checkBoundaryOfElement(D, CKEDITOR.END) && (R = 1), R && v && (I = r.clone(), I.moveToElementEditStart(v), d(e, m, I), t.cancel())
                            } else f.range.setEndAt(l, CKEDITOR.POSITION_BEFORE_END), v = f.next(), v && v.type == CKEDITOR.NODE_ELEMENT && v.is(h) && (v = v.getFirst(E), a.block && r.checkStartOfBlock() && r.checkEndOfBlock() ? (a.block.remove(), r.moveToElementEditStart(v), r.select(), t.cancel()) : u(v) ? (r.moveToElementEditStart(v), r.select(), t.cancel()) : (I = r.clone(), I.moveToElementEditStart(v), d(e, m, I), t.cancel()))
                        }
                        setTimeout(function () {
                            e.selectionChange(1)
                        })
                    }
                }))
            }
        })
    }(),function () {
        CKEDITOR.plugins.liststyle = {
            requires: "dialog,contextmenu", init: function (e) {
                if (!e.blockless) {
                    var t, n;
                    t = new CKEDITOR.dialogCommand("numberedListStyle", {
                        requiredContent: "ol",
                        allowedContent: "ol{list-style-type}[start]"
                    }), n = e.addCommand("numberedListStyle", t), e.addFeature(n), CKEDITOR.dialog.add("numberedListStyle", this.path + "dialogs/liststyle.js"), t = new CKEDITOR.dialogCommand("bulletedListStyle", {
                        requiredContent: "ul",
                        allowedContent: "ul{list-style-type}"
                    }), n = e.addCommand("bulletedListStyle", t), e.addFeature(n), CKEDITOR.dialog.add("bulletedListStyle", this.path + "dialogs/liststyle.js"), e.addMenuGroup("list", 108), e.addMenuItems({
                        numberedlist: {
                            label: e.lang.liststyle.numberedTitle,
                            group: "list",
                            command: "numberedListStyle"
                        },
                        bulletedlist: {
                            label: e.lang.liststyle.bulletedTitle,
                            group: "list",
                            command: "bulletedListStyle"
                        }
                    }), e.contextMenu.addListener(function (e) {
                        if (!e || e.isReadOnly())return null;
                        for (; e;) {
                            var t = e.getName();
                            if ("ol" == t)return {numberedlist: CKEDITOR.TRISTATE_OFF};
                            if ("ul" == t)return {bulletedlist: CKEDITOR.TRISTATE_OFF};
                            e = e.getParent()
                        }
                        return null
                    })
                }
            }
        }, CKEDITOR.plugins.add("liststyle", CKEDITOR.plugins.liststyle)
    }(),function () {
        function e(e) {
            function t() {
                function t(t) {
                    D.mouse = t, D.trigger = null, f = null, b(D), s && !D.hiddenMode && e.focusManager.hasFocus && !D.line.mouseNear() && (D.element = Z(D, !0)) && ((D.trigger = v(D) || I(D) || et(D)) && !T(D, D.trigger.upper || D.trigger.lower) ? D.line.attach().place() : (D.trigger = null, D.line.detach()), s = !1)
                }

                var h = e.editable(), m = e.document, p = e.window;
                y(D, {
                    editable: h,
                    inInlineMode: h.isInline(),
                    doc: m,
                    win: p,
                    hotNode: null
                }, !0), D.boundary = D.inInlineMode ? D.editable : D.doc.getDocumentElement(), h.is(S.$inline) || (D.inInlineMode && !E(h) && h.setStyles({
                    position: "relative",
                    top: null,
                    left: null
                }), l.call(this, D), b(D), h.attachListener(e, "beforeUndoImage", function () {
                    D.line.detach()
                }), h.attachListener(e, "beforeGetData", function () {
                    D.line.wrap.getParent() && (D.line.detach(), e.once("getData", function () {
                        D.line.attach()
                    }, null, null, 1e3))
                }, null, null, 0), h.attachListener(D.inInlineMode ? m : m.getWindow().getFrame(), "mouseout", function (t) {
                    if ("wysiwyg" == e.mode)if (D.inInlineMode) {
                        var n = {x: t.data.$.clientX, y: t.data.$.clientY};
                        b(D), R(D, !0);
                        var i = D.view.editable, o = D.view.scroll;
                        a(n.x, i.left - o.x, i.right - o.x) && a(n.y, i.top - o.y, i.bottom - o.y) || (clearTimeout(f), f = null, D.line.detach())
                    } else clearTimeout(f), f = null, D.line.detach()
                }), h.attachListener(h, "keyup", function () {
                    D.hiddenMode = 0
                }), h.attachListener(h, "keydown", function (t) {
                    if ("wysiwyg" == e.mode) {
                        var n = t.data.getKeystroke();
                        switch (n) {
                            case 2228240:
                            case 16:
                                D.hiddenMode = 1, D.line.detach()
                        }
                    }
                }), h.attachListener(D.inInlineMode ? h : m, "mousemove", function (n) {
                    if (s = !0, "wysiwyg" == e.mode && !e.readOnly && !f) {
                        var i = {x: n.data.$.clientX, y: n.data.$.clientY};
                        f = setTimeout(function () {
                            t(i)
                        }, 30)
                    }
                }), h.attachListener(p, "scroll", function () {
                    "wysiwyg" == e.mode && (D.line.detach(), N.webkit && (D.hiddenMode = 1, clearTimeout(o), o = setTimeout(function () {
                        D.mouseDown || (D.hiddenMode = 0)
                    }, 50)))
                }), h.attachListener(w ? m : p, "mousedown", function () {
                    "wysiwyg" == e.mode && (D.line.detach(), D.hiddenMode = 1, D.mouseDown = 1)
                }), h.attachListener(w ? m : p, "mouseup", function () {
                    D.hiddenMode = 0, D.mouseDown = 0
                }), e.addCommand("accessPreviousSpace", d(D)), e.addCommand("accessNextSpace", d(D, !0)), e.setKeystroke([[g.magicline_keystrokePrevious, "accessPreviousSpace"], [g.magicline_keystrokeNext, "accessNextSpace"]]), e.on("loadSnapshot", function () {
                    var t, n, i;
                    for (var o in{
                        p: 1,
                        br: 1,
                        div: 1
                    })for (t = e.document.getElementsByTag(o), i = t.count(); i--;)if ((n = t.getItem(i)).data("cke-magicline-hot"))return D.hotNode = n, void(D.lastCmdDirection = "true" === n.data("cke-magicline-dir") ? !0 : !1)
                }), this.backdoor = {
                    accessFocusSpace: c,
                    boxTrigger: n,
                    isLine: u,
                    getAscendantTrigger: i,
                    getNonEmptyNeighbour: r,
                    getSize: O,
                    that: D,
                    triggerEdge: I,
                    triggerEditable: v,
                    triggerExpand: et
                })
            }

            var o, s, f, g = e.config, p = g.magicline_triggerOffset || 30, C = g.enterMode, D = {
                editor: e,
                enterMode: C,
                triggerOffset: p,
                holdDistance: 0 | p * (g.magicline_holdDistance || .5),
                boxColor: g.magicline_color || "#ff0000",
                rtl: "rtl" == g.contentsLangDirection,
                tabuList: ["data-cke-hidden-sel"].concat(g.magicline_tabuList || []),
                triggers: g.magicline_everywhere ? V : {
                    table: 1,
                    hr: 1,
                    div: 1,
                    ul: 1,
                    ol: 1,
                    dl: 1,
                    form: 1,
                    blockquote: 1
                }
            };
            D.isRelevant = function (e) {
                return h(e) && !u(D, e) && !m(e)
            }, e.on("contentDom", t, this)
        }

        function t(e, t, n) {
            return h(t) && h(n) && n.equals(t.getNext(function (e) {
                    return !(J(e) || Q(e) || m(e))
                }))
        }

        function n(e) {
            this.upper = e[0], this.lower = e[1], this.set.apply(this, e.slice(2))
        }

        function i(e) {
            var t, n = e.element;
            if (n && h(n)) {
                if (t = n.getAscendant(e.triggers, !0), t && e.editable.contains(t)) {
                    var i = s(t);
                    return "true" == i.getAttribute("contenteditable") ? t : i.is(e.triggers) ? i : null
                }
                return null
            }
            return null
        }

        function o(e, t, n) {
            D(e, t), D(e, n);
            var i = t.size.bottom, o = n.size.top;
            return i && o ? 0 | (i + o) / 2 : i || o
        }

        function r(e, t, n) {
            return t = t[n ? "getPrevious" : "getNext"](function (t) {
                return g(t) && !J(t) || h(t) && !m(t) && !u(e, t)
            })
        }

        function a(e, t, n) {
            return e > t && n > e
        }

        function s(e, t) {
            if (e.data("cke-editable"))return null;
            for (t || (e = e.getParent()); e;) {
                if (e.data("cke-editable"))return null;
                if (e.hasAttribute("contenteditable"))return e;
                e = e.getParent()
            }
            return null
        }

        function l(e) {
            var t = e.doc,
                n = k('<span contenteditable="false" style="' + G + "position:absolute;border-top:1px dashed " + e.boxColor + '"></span>', t),
                i = CKEDITOR.getUrl(this.path + "images/" + (N.hidpi ? "hidpi/" : "") + "icon" + (e.rtl ? "-rtl" : "") + ".png");
            y(n, {
                attach: function () {
                    return this.wrap.getParent() || this.wrap.appendTo(e.editable, !0), this
                },
                lineChildren: [y(k('<span title="' + e.editor.lang.magicline.title + '" contenteditable="false">&#8629;</span>', t), {
                    base: G + "height:17px;width:17px;" + (e.rtl ? "left" : "right") + ":17px;background:url(" + i + ") center no-repeat " + e.boxColor + ";cursor:pointer;" + (N.hc ? "font-size: 15px;line-height:14px;border:1px solid #fff;text-align:center;" : "") + (N.hidpi ? "background-size: 9px 10px;" : ""),
                    looks: ["top:-8px;" + CKEDITOR.tools.cssVendorPrefix("border-radius", "2px", 1), "top:-17px;" + CKEDITOR.tools.cssVendorPrefix("border-radius", "2px 2px 0px 0px", 1), "top:-1px;" + CKEDITOR.tools.cssVendorPrefix("border-radius", "0px 0px 2px 2px", 1)]
                }), y(k(Y, t), {
                    base: X + "left:0px;border-left-color:" + e.boxColor + ";",
                    looks: ["border-width:8px 0 8px 8px;top:-8px", "border-width:8px 0 0 8px;top:-8px", "border-width:0 0 8px 8px;top:0px"]
                }), y(k(Y, t), {
                    base: X + "right:0px;border-right-color:" + e.boxColor + ";",
                    looks: ["border-width:8px 8px 8px 0;top:-8px", "border-width:8px 8px 0 0;top:-8px", "border-width:0 8px 8px 0;top:0px"]
                })],
                detach: function () {
                    return this.wrap.getParent() && this.wrap.remove(), this
                },
                mouseNear: function () {
                    D(e, this);
                    var t = e.holdDistance, n = this.size;
                    return n && a(e.mouse.y, n.top - t, n.bottom + t) && a(e.mouse.x, n.left - t, n.right + t) ? !0 : !1
                },
                place: function () {
                    var t = e.view, n = e.editable, i = e.trigger, o = i.upper, r = i.lower, s = o || r,
                        l = s.getParent(), c = {};
                    this.trigger = i, o && D(e, o, !0), r && D(e, r, !0), D(e, l, !0), e.inInlineMode && R(e, !0), l.equals(n) ? (c.left = t.scroll.x, c.right = -t.scroll.x, c.width = "") : (c.left = s.size.left - s.size.margin.left + t.scroll.x - (e.inInlineMode ? t.editable.left + t.editable.border.left : 0), c.width = s.size.outerWidth + s.size.margin.left + s.size.margin.right + t.scroll.x, c.right = ""), o && r ? c.top = o.size.margin.bottom === r.size.margin.top ? 0 | o.size.bottom + o.size.margin.bottom / 2 : o.size.margin.bottom < r.size.margin.top ? o.size.bottom + o.size.margin.bottom : o.size.bottom + o.size.margin.bottom - r.size.margin.top : o ? r || (c.top = o.size.bottom + o.size.margin.bottom) : c.top = r.size.top - r.size.margin.top, i.is($) || a(c.top, t.scroll.y - 15, t.scroll.y + 5) ? (c.top = e.inInlineMode ? 0 : t.scroll.y, this.look($)) : i.is(M) || a(c.top, t.pane.bottom - 5, t.pane.bottom + 15) ? (c.top = e.inInlineMode ? t.editable.height + t.editable.padding.top + t.editable.padding.bottom : t.pane.bottom - 1, this.look(M)) : (e.inInlineMode && (c.top -= t.editable.top + t.editable.border.top), this.look(H)), e.inInlineMode && (c.top--, c.top += t.editable.scroll.top, c.left += t.editable.scroll.left);
                    for (var d in c)c[d] = CKEDITOR.tools.cssLength(c[d]);
                    this.setStyles(c)
                },
                look: function (e) {
                    if (this.oldLook != e) {
                        for (var t, n = this.lineChildren.length; n--;)(t = this.lineChildren[n]).setAttribute("style", t.base + t.looks[0 | e / 2]);
                        this.oldLook = e
                    }
                },
                wrap: new _("span", e.doc)
            });
            for (var o = n.lineChildren.length; o--;)n.lineChildren[o].appendTo(n);
            n.look(H), n.appendTo(n.wrap), n.unselectable(), n.lineChildren[0].on("mouseup", function (t) {
                n.detach(), c(e, function (t) {
                    var n = e.line.trigger;
                    t[n.is(A) ? "insertBefore" : "insertAfter"](n.is(A) ? n.lower : n.upper)
                }, !0), e.editor.focus(), N.ie || e.enterMode == CKEDITOR.ENTER_BR || e.hotNode.scrollIntoView(), t.data.preventDefault(!0)
            }), n.on("mousedown", function (e) {
                e.data.preventDefault(!0)
            }), e.line = n
        }

        function c(e, t, n) {
            var i, o = new CKEDITOR.dom.range(e.doc), r = e.editor;
            if (N.ie && e.enterMode == CKEDITOR.ENTER_BR) i = e.doc.createText(q); else {
                var a = s(e.element, !0), l = a && a.data("cke-enter-mode") || e.enterMode;
                if (i = new _(x[l], e.doc), !i.is("br")) {
                    var c = e.doc.createText(q);
                    c.appendTo(i)
                }
            }
            n && r.fire("saveSnapshot"), t(i), o.moveToPosition(i, CKEDITOR.POSITION_AFTER_START), r.getSelection().selectRanges([o]), e.hotNode = i, n && r.fire("saveSnapshot")
        }

        function d(e, t) {
            return {
                canUndo: !0, modes: {wysiwyg: 1}, exec: function () {
                    function n(n) {
                        var i = N.ie && N.version < 9 ? " " : q,
                            o = e.hotNode && e.hotNode.getText() == i && e.element.equals(e.hotNode) && e.lastCmdDirection === !!t;
                        c(e, function (i) {
                            o && e.hotNode && e.hotNode.remove(), i[t ? "insertAfter" : "insertBefore"](n), i.setAttributes({
                                "data-cke-magicline-hot": 1,
                                "data-cke-magicline-dir": !!t
                            }), e.lastCmdDirection = !!t
                        }), N.ie || e.enterMode == CKEDITOR.ENTER_BR || e.hotNode.scrollIntoView(), e.line.detach()
                    }

                    return function (o) {
                        var a, l = o.getSelection().getStartElement();
                        if (l = l.getAscendant(V, 1), !T(e, l) && l && !l.equals(e.editable) && !l.contains(e.editable)) {
                            (a = s(l)) && "false" == a.getAttribute("contenteditable") && (l = a), e.element = l;
                            var c, d = r(e, l, !t);
                            if (h(d) && d.is(e.triggers) && d.is(j) && (!r(e, d, !t) || (c = r(e, d, !t)) && h(c) && c.is(e.triggers)))return void n(d);
                            var u = i(e, l);
                            if (h(u)) {
                                if (!r(e, u, !t))return void n(u);
                                var f = r(e, u, !t);
                                return f && h(f) && f.is(e.triggers) ? void n(u) : void 0
                            }
                        }
                    }
                }()
            }
        }

        function u(e, t) {
            if (!t || t.type != CKEDITOR.NODE_ELEMENT || !t.$)return !1;
            var n = e.line;
            return n.wrap.equals(t) || n.wrap.contains(t)
        }

        function h(e) {
            return e && e.type == CKEDITOR.NODE_ELEMENT && e.$
        }

        function f(e) {
            if (!h(e))return !1;
            var t = {left: 1, right: 1, center: 1};
            return !(!t[e.getComputedStyle("float")] && !t[e.getAttribute("align")])
        }

        function m(e) {
            return h(e) ? E(e) || f(e) : !1
        }

        function E(e) {
            return !!{absolute: 1, fixed: 1}[e.getComputedStyle("position")]
        }

        function g(e) {
            return e && e.type == CKEDITOR.NODE_TEXT
        }

        function p(e, t) {
            return h(t) ? t.is(e.triggers) : null
        }

        function T(e, t) {
            if (!t)return !1;
            for (var n = t.getParents(1), i = n.length; i--;)for (var o = e.tabuList.length; o--;)if (n[i].hasAttribute(e.tabuList[o]))return !0;
            return !1
        }

        function C(e, t, n) {
            var i = t[n ? "getLast" : "getFirst"](function (t) {
                return e.isRelevant(t) && !t.is(U)
            });
            return i ? (D(e, i), n ? i.size.top > e.mouse.y : i.size.bottom < e.mouse.y) : !1
        }

        function v(e) {
            var t, i = e.editable, o = e.mouse, r = e.view, s = e.triggerOffset;
            R(e);
            var l = o.y > (e.inInlineMode ? r.editable.top + r.editable.height / 2 : Math.min(r.editable.height, r.pane.height) / 2),
                c = i[l ? "getLast" : "getFirst"](function (e) {
                    return !(J(e) || Q(e))
                });
            return c ? (u(e, c) && (c = e.line.wrap[l ? "getPrevious" : "getNext"](function (e) {
                return !(J(e) || Q(e))
            })), h(c) && !m(c) && p(e, c) ? (D(e, c), !l && c.size.top >= 0 && a(o.y, 0, c.size.top + s) ? (t = e.inInlineMode || 0 === r.scroll.y ? $ : H, new n([null, c, A, B, t])) : l && c.size.bottom <= r.pane.height && a(o.y, c.size.bottom - s, r.pane.height) ? (t = e.inInlineMode || a(c.size.bottom, r.pane.height - s, r.pane.height) ? M : H, new n([c, null, L, B, t])) : null) : null) : null
        }

        function I(e) {
            var t = e.mouse, o = e.view, s = e.triggerOffset, l = i(e);
            if (!l)return null;
            D(e, l);
            var c, d, u = Math.min(s, 0 | l.size.outerHeight / 2), f = [];
            if (a(t.y, l.size.top - 1, l.size.top + u)) d = !1; else {
                if (!a(t.y, l.size.bottom - u, l.size.bottom + 1))return null;
                d = !0
            }
            if (m(l) || C(e, l, d) || l.getParent().is(z))return null;
            var E = r(e, l, !d);
            if (E) {
                if (g(E))return null;
                if (h(E)) {
                    if (m(E) || !p(e, E) || E.getParent().is(z))return null;
                    f = [E, l][d ? "reverse" : "concat"]().concat([P, B])
                }
            } else l.equals(e.editable[d ? "getLast" : "getFirst"](e.isRelevant)) ? (R(e), d && a(t.y, l.size.bottom - u, o.pane.height) && a(l.size.bottom, o.pane.height - u, o.pane.height) ? c = M : a(t.y, 0, l.size.top + u) && (c = $)) : c = H, f = [null, l][d ? "reverse" : "concat"]().concat([d ? L : A, B, c, l.equals(e.editable[d ? "getLast" : "getFirst"](e.isRelevant)) ? d ? M : $ : H]);
            return 0 in f ? new n(f) : null
        }

        function O(e, t, n, i) {
            for (var o = function () {
                var n = N.ie ? t.$.currentStyle : e.win.$.getComputedStyle(t.$, "");
                return N.ie ? function (e) {
                    return n[CKEDITOR.tools.cssStyleToDomStyle(e)]
                } : function (e) {
                    return n.getPropertyValue(e)
                }
            }(), r = t.getDocumentPosition(), a = {}, s = {}, l = {}, c = {}, d = tt.length; d--;)a[tt[d]] = parseInt(o("border-" + tt[d] + "-width"), 10) || 0, l[tt[d]] = parseInt(o("padding-" + tt[d]), 10) || 0, s[tt[d]] = parseInt(o("margin-" + tt[d]), 10) || 0;
            return (!n || i) && b(e, i), c.top = r.y - (n ? 0 : e.view.scroll.y), c.left = r.x - (n ? 0 : e.view.scroll.x), c.outerWidth = t.$.offsetWidth, c.outerHeight = t.$.offsetHeight, c.height = c.outerHeight - (l.top + l.bottom + a.top + a.bottom), c.width = c.outerWidth - (l.left + l.right + a.left + a.right), c.bottom = c.top + c.outerHeight, c.right = c.left + c.outerWidth, e.inInlineMode && (c.scroll = {
                top: t.$.scrollTop,
                left: t.$.scrollLeft
            }), y({border: a, padding: l, margin: s, ignoreScroll: n}, c, !0)
        }

        function D(e, t, n) {
            if (!h(t))return t.size = null;
            if (t.size) {
                if (t.size.ignoreScroll == n && t.size.date > new Date - W)return null
            } else t.size = {};
            return y(t.size, O(e, t, n), {date: +new Date}, !0)
        }

        function R(e, t) {
            e.view.editable = O(e, e.editable, t, !0)
        }

        function b(e, t) {
            e.view || (e.view = {});
            var n = e.view;
            if (!(!t && n && n.date > new Date - W)) {
                var i = e.win, o = i.getScrollPosition(), r = i.getViewPaneSize();
                y(e.view, {
                    scroll: {
                        x: o.x,
                        y: o.y,
                        width: e.doc.$.documentElement.scrollWidth - r.width,
                        height: e.doc.$.documentElement.scrollHeight - r.height
                    }, pane: {width: r.width, height: r.height, bottom: r.height + o.y}, date: +new Date
                }, !0)
            }
        }

        function K(e, t, i, o) {
            for (var r = o, a = o, s = 0, l = !1, c = !1, d = e.view.pane.height, u = e.mouse; u.y + s < d && u.y - s > 0 && (l || (l = t(r, o)), c || (c = t(a, o)), !l && u.y - s > 0 && (r = i(e, {
                x: u.x,
                y: u.y - s
            })), !c && u.y + s < d && (a = i(e, {x: u.x, y: u.y + s})), !l || !c);)s += 2;
            return new n([r, a, null, null])
        }

        CKEDITOR.plugins.add("magicline", {init: e});
        var y = CKEDITOR.tools.extend, _ = CKEDITOR.dom.element, k = _.createFromHtml, N = CKEDITOR.env,
            w = CKEDITOR.env.ie && CKEDITOR.env.version < 9, S = CKEDITOR.dtd, x = {}, A = 128, L = 64, P = 32, B = 16,
            F = 8, $ = 4, M = 2, H = 1, q = "\xa0", z = S.$listItem, U = S.$tableContent,
            j = y({}, S.$nonEditable, S.$empty), V = S.$block, W = 100,
            G = "width:0px;height:0px;padding:0px;margin:0px;display:block;z-index:9999;color:#fff;position:absolute;font-size: 0px;line-height:0px;",
            X = G + "border-color:transparent;display:block;border-style:solid;", Y = "<span>" + q + "</span>";
        x[CKEDITOR.ENTER_BR] = "br", x[CKEDITOR.ENTER_P] = "p", x[CKEDITOR.ENTER_DIV] = "div", n.prototype = {
            set: function (e, t, n) {
                return this.properties = e + t + (n || H), this
            }, is: function (e) {
                return (this.properties & e) == e
            }
        };
        var Z = function () {
                function e(e, t) {
                    var n = e.$.elementFromPoint(t.x, t.y);
                    return n && n.nodeType ? new CKEDITOR.dom.element(n) : null
                }

                return function (t, n, i) {
                    if (!t.mouse)return null;
                    var o = t.doc, r = t.line.wrap, a = i || t.mouse, s = e(o, a);
                    return n && u(t, s) && (r.hide(), s = e(o, a), r.show()), s && s.type == CKEDITOR.NODE_ELEMENT && s.$ ? N.ie && N.version < 9 && !t.boundary.equals(s) && !t.boundary.contains(s) ? null : s : null
                }
            }(), J = CKEDITOR.dom.walker.whitespaces(), Q = CKEDITOR.dom.walker.nodeType(CKEDITOR.NODE_COMMENT),
            et = function () {
                function e(e) {
                    var r, a, s, l = e.element;
                    if (!h(l) || l.contains(e.editable))return null;
                    if (l.isReadOnly())return null;
                    if (s = K(e, function (e, t) {
                            return !t.equals(e)
                        }, function (e, t) {
                            return Z(e, !0, t)
                        }, l), r = s.upper, a = s.lower, t(e, r, a))return s.set(P, F);
                    if (r && l.contains(r))for (; !r.getParent().equals(l);)r = r.getParent(); else r = l.getFirst(function (t) {
                        return n(e, t)
                    });
                    if (a && l.contains(a))for (; !a.getParent().equals(l);)a = a.getParent(); else a = l.getLast(function (t) {
                        return n(e, t)
                    });
                    if (!r || !a)return null;
                    if (D(e, r), D(e, a), !i(e, r, a))return null;
                    for (var c, d, u, f, m = Number.MAX_VALUE; a && !a.equals(r) && (d = r.getNext(e.isRelevant));)c = Math.abs(o(e, r, d) - e.mouse.y), m > c && (m = c, u = r, f = d), r = d, D(e, r);
                    return u && f && i(e, u, f) ? (s.upper = u, s.lower = f, s.set(P, F)) : null
                }

                function n(e, t) {
                    return !(g(t) || Q(t) || m(t) || u(e, t) || t.type == CKEDITOR.NODE_ELEMENT && t.$ && t.is("br"))
                }

                function i(e, t, n) {
                    return a(e.mouse.y, t.size.top, n.size.bottom)
                }

                function r(e, n) {
                    var i = n.upper, o = n.lower;
                    return !i || !o || m(o) || m(i) || o.equals(i) || i.equals(o) || o.contains(i) || i.contains(o) ? !1 : p(e, i) && p(e, o) && t(e, i, o) ? !0 : !1
                }

                return function (t) {
                    var n = e(t);
                    return n && r(t, n) ? n : null
                }
            }(), tt = ["top", "left", "right", "bottom"]
    }(),CKEDITOR.config.magicline_keystrokePrevious = CKEDITOR.CTRL + CKEDITOR.SHIFT + 51,CKEDITOR.config.magicline_keystrokeNext = CKEDITOR.CTRL + CKEDITOR.SHIFT + 52,function () {
        function e(e) {
            if (!e || e.type != CKEDITOR.NODE_ELEMENT || "form" != e.getName())return [];
            for (var t = [], n = ["style", "className"], i = 0; i < n.length; i++) {
                var o = n[i], r = e.$.elements.namedItem(o);
                if (r) {
                    var a = new CKEDITOR.dom.element(r);
                    t.push([a, a.nextSibling]), a.remove()
                }
            }
            return t
        }

        function t(e, t) {
            if (e && e.type == CKEDITOR.NODE_ELEMENT && "form" == e.getName() && t.length > 0)for (var n = t.length - 1; n >= 0; n--) {
                var i = t[n][0], o = t[n][1];
                o ? i.insertBefore(o) : i.appendTo(e)
            }
        }

        function n(n, i) {
            var o = e(n), r = {}, a = n.$;
            return i || (r["class"] = a.className || "", a.className = ""), r.inline = a.style.cssText || "", i || (a.style.cssText = "position: static; overflow: visible"), t(o), r
        }

        function i(n, i) {
            var o = e(n), r = n.$;
            "class" in i && (r.className = i["class"]), "inline" in i && (r.style.cssText = i.inline), t(o)
        }

        function o(e) {
            if (!e.editable().isInline()) {
                var t = CKEDITOR.instances;
                for (var n in t) {
                    var i = t[n];
                    if ("wysiwyg" == i.mode && !i.readOnly) {
                        var o = i.document.getBody();
                        o.setAttribute("contentEditable", !1), o.setAttribute("contentEditable", !0)
                    }
                }
                e.editable().hasFocus && (e.toolbox.focus(), e.focus())
            }
        }

        CKEDITOR.plugins.add("maximize", {
            init: function (e) {
                function t() {
                    var t = d.getViewPaneSize();
                    e.resize(t.width, t.height, null, !0)
                }

                if (e.elementMode != CKEDITOR.ELEMENT_MODE_INLINE) {
                    var r, a, s, l = e.lang, c = CKEDITOR.document, d = c.getWindow(), u = CKEDITOR.TRISTATE_OFF;
                    e.addCommand("maximize", {
                        modes: {wysiwyg: !CKEDITOR.env.iOS, source: !CKEDITOR.env.iOS},
                        readOnly: 1,
                        editorFocus: !1,
                        exec: function () {
                            var h = e.container.getFirst(function (e) {
                                return e.type == CKEDITOR.NODE_ELEMENT && e.hasClass("cke_inner")
                            }), f = e.ui.space("contents");
                            if ("wysiwyg" == e.mode) {
                                var m = e.getSelection();
                                r = m && m.getRanges(), a = d.getScrollPosition()
                            } else {
                                var E = e.editable().$;
                                r = !CKEDITOR.env.ie && [E.selectionStart, E.selectionEnd], a = [E.scrollLeft, E.scrollTop]
                            }
                            if (this.state == CKEDITOR.TRISTATE_OFF) {
                                d.on("resize", t), s = d.getScrollPosition();
                                for (var g = e.container; g = g.getParent();)g.setCustomData("maximize_saved_styles", n(g)), g.setStyle("z-index", e.config.baseFloatZIndex - 5);
                                f.setCustomData("maximize_saved_styles", n(f, !0)), h.setCustomData("maximize_saved_styles", n(h, !0));
                                var p = {overflow: CKEDITOR.env.webkit ? "" : "hidden", width: 0, height: 0};
                                c.getDocumentElement().setStyles(p), !CKEDITOR.env.gecko && c.getDocumentElement().setStyle("position", "fixed"), !(CKEDITOR.env.gecko && CKEDITOR.env.quirks) && c.getBody().setStyles(p), CKEDITOR.env.ie ? setTimeout(function () {
                                    d.$.scrollTo(0, 0)
                                }, 0) : d.$.scrollTo(0, 0), h.setStyle("position", CKEDITOR.env.gecko && CKEDITOR.env.quirks ? "fixed" : "absolute"), h.$.offsetLeft, h.setStyles({
                                    "z-index": e.config.baseFloatZIndex - 5,
                                    left: "0px",
                                    top: "0px"
                                }), h.addClass("cke_maximized"), t();
                                var T = h.getDocumentPosition();
                                h.setStyles({left: -1 * T.x + "px", top: -1 * T.y + "px"}), CKEDITOR.env.gecko && o(e)
                            } else if (this.state == CKEDITOR.TRISTATE_ON) {
                                d.removeListener("resize", t);
                                for (var C = [f, h], v = 0; v < C.length; v++)i(C[v], C[v].getCustomData("maximize_saved_styles")), C[v].removeCustomData("maximize_saved_styles");
                                for (g = e.container; g = g.getParent();)i(g, g.getCustomData("maximize_saved_styles")), g.removeCustomData("maximize_saved_styles");
                                CKEDITOR.env.ie ? setTimeout(function () {
                                    d.$.scrollTo(s.x, s.y)
                                }, 0) : d.$.scrollTo(s.x, s.y), h.removeClass("cke_maximized"), CKEDITOR.env.webkit && (h.setStyle("display", "inline"), setTimeout(function () {
                                    h.setStyle("display", "block")
                                }, 0)), e.fire("resize")
                            }
                            this.toggleState();
                            var I = this.uiItems[0];
                            if (I) {
                                var O = this.state == CKEDITOR.TRISTATE_OFF ? l.maximize.maximize : l.maximize.minimize,
                                    D = CKEDITOR.document.getById(I._.id);
                                D.getChild(1).setHtml(O), D.setAttribute("title", O), D.setAttribute("href", 'javascript:void("' + O + '");')
                            }
                            if ("wysiwyg" == e.mode)if (r) {
                                CKEDITOR.env.gecko && o(e), e.getSelection().selectRanges(r);
                                var R = e.getSelection().getStartElement();
                                R && R.scrollIntoView(!0)
                            } else d.$.scrollTo(a.x, a.y); else r && (E.selectionStart = r[0], E.selectionEnd = r[1]), E.scrollLeft = a[0], E.scrollTop = a[1];
                            r = a = null, u = this.state, e.fire("maximize", this.state)
                        },
                        canUndo: !1
                    }), e.ui.addButton && e.ui.addButton("Maximize", {
                        label: l.maximize.maximize,
                        command: "maximize",
                        toolbar: "tools,10"
                    }), e.on("mode", function () {
                        var t = e.getCommand("maximize");
                        t.setState(t.state == CKEDITOR.TRISTATE_DISABLED ? CKEDITOR.TRISTATE_DISABLED : u)
                    }, null, null, 100)
                }
            }
        })
    }(),function () {
        function e(e, t, n) {
            var i = CKEDITOR.cleanWord;
            if (i) n(); else {
                var o = CKEDITOR.getUrl(e.config.pasteFromWordCleanupFile || t + "filter/default.js");
                CKEDITOR.scriptLoader.load(o, n, null, !0)
            }
            return !i
        }

        function t(e) {
            e.data.type = "html"
        }

        CKEDITOR.plugins.add("pastefromword", {
            requires: "clipboard", init: function (n) {
                var i = "pastefromword", o = 0, r = this.path;
                n.addCommand(i, {
                    canUndo: !1, async: !0, exec: function (e) {
                        var n = this;
                        o = 1, e.once("beforePaste", t), e.getClipboardData({title: e.lang.pastefromword.title}, function (t) {
                            t && e.fire("paste", {type: "html", dataValue: t.dataValue}), e.fire("afterCommandExec", {
                                name: i,
                                command: n,
                                returnValue: !!t
                            })
                        })
                    }
                }), n.ui.addButton && n.ui.addButton("PasteFromWord", {
                    label: n.lang.pastefromword.toolbar,
                    command: i,
                    toolbar: "clipboard,50"
                }), n.on("pasteState", function (e) {
                    n.getCommand(i).setState(e.data)
                }), n.on("paste", function (t) {
                    var i = t.data, a = i.dataValue;
                    if (a && (o || /(class=\"?Mso|style=\"[^\"]*\bmso\-|w:WordDocument)/.test(a))) {
                        var s = e(n, r, function () {
                            s ? n.fire("paste", i) : (!n.config.pasteFromWordPromptCleanup || o || confirm(n.lang.pastefromword.confirmCleanup)) && (i.dataValue = CKEDITOR.cleanWord(a, n)), o = 0
                        });
                        s && t.cancel()
                    }
                }, null, null, 3)
            }
        })
    }(),function () {
        var e = {
            canUndo: !1, async: !0, exec: function (t) {
                t.getClipboardData({title: t.lang.pastetext.title}, function (n) {
                    n && t.fire("paste", {
                        type: "text",
                        dataValue: n.dataValue
                    }), t.fire("afterCommandExec", {name: "pastetext", command: e, returnValue: !!n})
                })
            }
        };
        CKEDITOR.plugins.add("pastetext", {
            requires: "clipboard", init: function (t) {
                var n = "pastetext";
                t.addCommand(n, e), t.ui.addButton && t.ui.addButton("PasteText", {
                    label: t.lang.pastetext.button,
                    command: n,
                    toolbar: "clipboard,40"
                }), t.config.forcePasteAsPlainText && t.on("beforePaste", function (e) {
                    "html" != e.data.type && (e.data.type = "text")
                }), t.on("pasteState", function (e) {
                    t.getCommand(n).setState(e.data)
                })
            }
        })
    }(),CKEDITOR.plugins.add("removeformat", {
        init: function (e) {
            e.addCommand("removeFormat", CKEDITOR.plugins.removeformat.commands.removeformat), e.ui.addButton && e.ui.addButton("RemoveFormat", {
                label: e.lang.removeformat.toolbar,
                command: "removeFormat",
                toolbar: "cleanup,10"
            })
        }
    }),CKEDITOR.plugins.removeformat = {
        commands: {
            removeformat: {
                exec: function (e) {
                    for (var t, n = e._.removeFormatRegex || (e._.removeFormatRegex = new RegExp("^(?:" + e.config.removeFormatTags.replace(/,/g, "|") + ")$", "i")), i = e._.removeAttributes || (e._.removeAttributes = e.config.removeFormatAttributes.split(",")), o = CKEDITOR.plugins.removeformat.filter, r = e.getSelection().getRanges(), a = r.createIterator(), s = function (e) {
                        return e.type == CKEDITOR.NODE_ELEMENT
                    }; t = a.getNextRange();) {
                        t.collapsed || t.enlarge(CKEDITOR.ENLARGE_ELEMENT);
                        var l, c = t.createBookmark(), d = c.startNode, u = c.endNode, h = function (t) {
                            for (var i, r = e.elementPath(t), a = r.elements, s = 1; (i = a[s]) && (!i.equals(r.block) && !i.equals(r.blockLimit)); s++)n.test(i.getName()) && o(e, i) && t.breakParent(i)
                        };
                        if (h(d), u)for (h(u), l = d.getNextSourceNode(!0, CKEDITOR.NODE_ELEMENT); l && !l.equals(u);)if (l.isReadOnly()) {
                            if (l.getPosition(u) & CKEDITOR.POSITION_CONTAINS)break;
                            l = l.getNext(s)
                        } else {
                            var f = l.getNextSourceNode(!1, CKEDITOR.NODE_ELEMENT),
                                m = "img" == l.getName() && l.data("cke-realelement");
                            !m && o(e, l) && (n.test(l.getName()) ? l.remove(1) : (l.removeAttributes(i), e.fire("removeFormatCleanup", l))), l = f
                        }
                        t.moveToBookmark(c)
                    }
                    e.forceNextSelectionCheck(), e.getSelection().selectRanges(r)
                }
            }
        }, filter: function (e, t) {
            for (var n = e._.removeFormatFilters || [], i = 0; i < n.length; i++)if (n[i](t) === !1)return !1;
            return !0
        }
    },CKEDITOR.editor.prototype.addRemoveFormatFilter = function (e) {
        this._.removeFormatFilters || (this._.removeFormatFilters = []), this._.removeFormatFilters.push(e)
    },CKEDITOR.config.removeFormatTags = "b,big,cite,code,del,dfn,em,font,i,ins,kbd,q,s,samp,small,span,strike,strong,sub,sup,tt,u,var",CKEDITOR.config.removeFormatAttributes = "class,style,lang,width,height,align,hspace,valign",CKEDITOR.plugins.add("resize", {
        init: function (e) {
            function t(t) {
                var n = t.data.$.screenX - a.x, o = t.data.$.screenY - a.y, l = s.width, u = s.height,
                    h = l + n * ("rtl" == r ? -1 : 1), f = u + o;
                c && (l = Math.max(i.resize_minWidth, Math.min(h, i.resize_maxWidth))), d && (u = Math.max(i.resize_minHeight, Math.min(f, i.resize_maxHeight))), e.resize(c ? l : null, u)
            }

            function n() {
                CKEDITOR.document.removeListener("mousemove", t), CKEDITOR.document.removeListener("mouseup", n), e.document && (e.document.removeListener("mousemove", t), e.document.removeListener("mouseup", n))
            }

            var i = e.config, o = e.ui.spaceId("resizer"), r = e.element ? e.element.getDirection(1) : "ltr";
            if (!i.resize_dir && (i.resize_dir = "vertical"), void 0 === i.resize_maxWidth && (i.resize_maxWidth = 3e3), void 0 === i.resize_maxHeight && (i.resize_maxHeight = 3e3), void 0 === i.resize_minWidth && (i.resize_minWidth = 750), void 0 === i.resize_minHeight && (i.resize_minHeight = 250), i.resize_enabled !== !1) {
                var a, s, l = null,
                    c = ("both" == i.resize_dir || "horizontal" == i.resize_dir) && i.resize_minWidth != i.resize_maxWidth,
                    d = ("both" == i.resize_dir || "vertical" == i.resize_dir) && i.resize_minHeight != i.resize_maxHeight,
                    u = CKEDITOR.tools.addFunction(function (o) {
                        l || (l = e.getResizable()), s = {
                            width: l.$.offsetWidth || 0,
                            height: l.$.offsetHeight || 0
                        }, a = {
                            x: o.screenX,
                            y: o.screenY
                        }, i.resize_minWidth > s.width && (i.resize_minWidth = s.width), i.resize_minHeight > s.height && (i.resize_minHeight = s.height), CKEDITOR.document.on("mousemove", t), CKEDITOR.document.on("mouseup", n), e.document && (e.document.on("mousemove", t), e.document.on("mouseup", n)), o.preventDefault && o.preventDefault()
                    });
                e.on("destroy", function () {
                    CKEDITOR.tools.removeFunction(u)
                }), e.on("uiSpace", function (t) {
                    if ("bottom" == t.data.space) {
                        var n = "";
                        c && !d && (n = " cke_resizer_horizontal"), !c && d && (n = " cke_resizer_vertical");
                        var i = '<span id="' + o + '" class="cke_resizer' + n + " cke_resizer_" + r + '" title="' + CKEDITOR.tools.htmlEncode(e.lang.common.resize) + '" onmousedown="CKEDITOR.tools.callFunction(' + u + ', event)">' + ("ltr" == r ? "\u25e2" : "\u25e3") + "</span>";
                        "ltr" == r && "ltr" == n ? t.data.html += i : t.data.html = i + t.data.html
                    }
                }, e, null, 100), e.on("maximize", function (t) {
                    e.ui.space("resizer")[t.data == CKEDITOR.TRISTATE_ON ? "hide" : "show"]()
                })
            }
        }
    }),function () {
        CKEDITOR.plugins.add("sourcearea", {
            init: function (t) {
                function n() {
                    var e = o && this.equals(CKEDITOR.document.getActive());
                    this.hide(), this.setStyle("height", this.getParent().$.clientHeight + "px"), this.setStyle("width", this.getParent().$.clientWidth + "px"), this.show(), e && this.focus()
                }

                if (t.elementMode != CKEDITOR.ELEMENT_MODE_INLINE) {
                    var i = CKEDITOR.plugins.sourcearea;
                    t.addMode("source", function (i) {
                        var o = t.ui.space("contents"), r = o.getDocument().createElement("textarea");
                        r.setStyles(CKEDITOR.tools.extend({
                            width: CKEDITOR.env.ie7Compat ? "99%" : "100%",
                            height: "100%",
                            resize: "none",
                            outline: "none",
                            "text-align": "left"
                        }, CKEDITOR.tools.cssVendorPrefix("tab-size", t.config.sourceAreaTabSize || 4))), r.setAttribute("dir", "ltr"), r.addClass("cke_source cke_reset cke_enable_context_menu"), t.ui.space("contents").append(r);
                        var a = t.editable(new e(t, r));
                        a.setData(t.getData(1)), CKEDITOR.env.ie && (a.attachListener(t, "resize", n, a), a.attachListener(CKEDITOR.document.getWindow(), "resize", n, a), CKEDITOR.tools.setTimeout(n, 0, a)), t.fire("ariaWidget", this), i()
                    }), t.addCommand("source", i.commands.source), t.ui.addButton && t.ui.addButton("Source", {
                        label: t.lang.sourcearea.toolbar,
                        command: "source",
                        toolbar: "mode,10"
                    }), t.on("mode", function () {
                        t.getCommand("source").setState("source" == t.mode ? CKEDITOR.TRISTATE_ON : CKEDITOR.TRISTATE_OFF)
                    });
                    var o = CKEDITOR.env.ie && 9 == CKEDITOR.env.version
                }
            }
        });
        var e = CKEDITOR.tools.createClass({
            base: CKEDITOR.editable, proto: {
                setData: function (e) {
                    this.setValue(e), this.status = "ready", this.editor.fire("dataReady")
                }, getData: function () {
                    return this.getValue()
                }, insertHtml: function () {
                }, insertElement: function () {
                }, insertText: function () {
                }, setReadOnly: function (e) {
                    this[(e ? "set" : "remove") + "Attribute"]("readOnly", "readonly")
                }, detach: function () {
                    e.baseProto.detach.call(this), this.clearCustomData(), this.remove()
                }
            }
        })
    }(),CKEDITOR.plugins.sourcearea = {
        commands: {
            source: {
                modes: {wysiwyg: 1, source: 1},
                editorFocus: !1,
                readOnly: 1,
                exec: function (e) {
                    "wysiwyg" == e.mode && e.fire("saveSnapshot"), e.getCommand("source").setState(CKEDITOR.TRISTATE_DISABLED), e.setMode("source" == e.mode ? "wysiwyg" : "source")
                },
                canUndo: !1
            }
        }
    },CKEDITOR.plugins.add("specialchar", {
        availableLangs: {
            af: 1,
            ar: 1,
            bg: 1,
            ca: 1,
            cs: 1,
            cy: 1,
            da: 1,
            de: 1,
            el: 1,
            en: 1,
            "en-gb": 1,
            eo: 1,
            es: 1,
            et: 1,
            fa: 1,
            fi: 1,
            fr: 1,
            "fr-ca": 1,
            gl: 1,
            he: 1,
            hr: 1,
            hu: 1,
            id: 1,
            it: 1,
            ja: 1,
            km: 1,
            ku: 1,
            lt: 1,
            lv: 1,
            nb: 1,
            nl: 1,
            no: 1,
            pl: 1,
            pt: 1,
            "pt-br": 1,
            ru: 1,
            si: 1,
            sk: 1,
            sl: 1,
            sq: 1,
            sv: 1,
            th: 1,
            tr: 1,
            tt: 1,
            ug: 1,
            uk: 1,
            vi: 1,
            zh: 1,
            "zh-cn": 1
        }, requires: "dialog", init: function (e) {
            var t = "specialchar", n = this;
            CKEDITOR.dialog.add(t, this.path + "dialogs/specialchar.js"), e.addCommand(t, {
                exec: function () {
                    var i = e.langCode;
                    i = n.availableLangs[i] ? i : n.availableLangs[i.replace(/-.*/, "")] ? i.replace(/-.*/, "") : "en", CKEDITOR.scriptLoader.load(CKEDITOR.getUrl(n.path + "dialogs/lang/" + i + ".js"), function () {
                        CKEDITOR.tools.extend(e.lang.specialchar, n.langEntries[i]), e.openDialog(t)
                    })
                }, modes: {wysiwyg: 1}, canUndo: !1
            }), e.ui.addButton && e.ui.addButton("SpecialChar", {
                label: e.lang.specialchar.toolbar,
                command: t,
                toolbar: "insert,50"
            })
        }
    }),CKEDITOR.config.specialChars = ["!", "&quot;", "#", "$", "%", "&amp;", "'", "(", ")", "*", "+", "-", ".", "/", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", ":", ";", "&lt;", "=", "&gt;", "?", "@", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "[", "]", "^", "_", "`", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "{", "|", "}", "~", "&euro;", "&lsquo;", "&rsquo;", "&ldquo;", "&rdquo;", "&ndash;", "&mdash;", "&iexcl;", "&cent;", "&pound;", "&curren;", "&yen;", "&brvbar;", "&sect;", "&uml;", "&copy;", "&ordf;", "&laquo;", "&not;", "&reg;", "&macr;", "&deg;", "&sup2;", "&sup3;", "&acute;", "&micro;", "&para;", "&middot;", "&cedil;", "&sup1;", "&ordm;", "&raquo;", "&frac14;", "&frac12;", "&frac34;", "&iquest;", "&Agrave;", "&Aacute;", "&Acirc;", "&Atilde;", "&Auml;", "&Aring;", "&AElig;", "&Ccedil;", "&Egrave;", "&Eacute;", "&Ecirc;", "&Euml;", "&Igrave;", "&Iacute;", "&Icirc;", "&Iuml;", "&ETH;", "&Ntilde;", "&Ograve;", "&Oacute;", "&Ocirc;", "&Otilde;", "&Ouml;", "&times;", "&Oslash;", "&Ugrave;", "&Uacute;", "&Ucirc;", "&Uuml;", "&Yacute;", "&THORN;", "&szlig;", "&agrave;", "&aacute;", "&acirc;", "&atilde;", "&auml;", "&aring;", "&aelig;", "&ccedil;", "&egrave;", "&eacute;", "&ecirc;", "&euml;", "&igrave;", "&iacute;", "&icirc;", "&iuml;", "&eth;", "&ntilde;", "&ograve;", "&oacute;", "&ocirc;", "&otilde;", "&ouml;", "&divide;", "&oslash;", "&ugrave;", "&uacute;", "&ucirc;", "&uuml;", "&yacute;", "&thorn;", "&yuml;", "&OElig;", "&oelig;", "&#372;", "&#374", "&#373", "&#375;", "&sbquo;", "&#8219;", "&bdquo;", "&hellip;", "&trade;", "&#9658;", "&bull;", "&rarr;", "&rArr;", "&hArr;", "&diams;", "&asymp;"],function () {
        "use strict";
        CKEDITOR.plugins.add("stylescombo", {
            requires: "richcombo", init: function (e) {
                var t, n = e.config, i = e.lang.stylescombo, o = {}, r = [], a = [];
                e.on("stylesSet", function (t) {
                    var i = t.data.styles;
                    if (i) {
                        for (var s, l, c, d = 0, u = i.length; u > d; d++) {
                            var h = i[d];
                            e.blockless && h.element in CKEDITOR.dtd.$block || (l = h.name, s = new CKEDITOR.style(h), (!e.filter.customConfig || e.filter.check(s)) && (s._name = l, s._.enterMode = n.enterMode, s._.type = c = s.assignedTo || s.type, s._.weight = d + 1e3 * (c == CKEDITOR.STYLE_OBJECT ? 1 : c == CKEDITOR.STYLE_BLOCK ? 2 : 3), o[l] = s, r.push(s), a.push(s)))
                        }
                        r.sort(function (e, t) {
                            return e._.weight - t._.weight
                        })
                    }
                }), e.ui.addRichCombo("Styles", {
                    label: i.label,
                    title: i.panelTitle,
                    toolbar: "styles,10",
                    allowedContent: a,
                    panel: {
                        css: [CKEDITOR.skin.getPath("editor")].concat(n.contentsCss),
                        multiSelect: !0,
                        attributes: {"aria-label": i.panelTitle}
                    },
                    init: function () {
                        var e, t, n, o, a, s;
                        for (a = 0, s = r.length; s > a; a++)e = r[a], t = e._name, o = e._.type, o != n && (this.startGroup(i["panelTitle" + String(o)]), n = o), this.add(t, e.type == CKEDITOR.STYLE_OBJECT ? t : e.buildPreview(), t);
                        this.commit()
                    },
                    onClick: function (t) {
                        e.focus(), e.fire("saveSnapshot");
                        var n = o[t], i = e.elementPath();
                        e[n.checkActive(i, e) ? "removeStyle" : "applyStyle"](n), e.fire("saveSnapshot")
                    },
                    onRender: function () {
                        e.on("selectionChange", function (t) {
                            for (var n, i = this.getValue(), r = t.data.path, a = r.elements, s = 0, l = a.length; l > s; s++) {
                                n = a[s];
                                for (var c in o)if (o[c].checkElementRemovable(n, !0, e))return void(c != i && this.setValue(c))
                            }
                            this.setValue("")
                        }, this)
                    },
                    onOpen: function () {
                        var t = e.getSelection(), n = t.getSelectedElement(), r = e.elementPath(n), a = [0, 0, 0, 0];
                        this.showAll(), this.unmarkAll();
                        for (var s in o) {
                            var l = o[s], c = l._.type;
                            l.checkApplicable(r, e, e.activeFilter) ? a[c]++ : this.hideItem(s), l.checkActive(r, e) && this.mark(s)
                        }
                        a[CKEDITOR.STYLE_BLOCK] || this.hideGroup(i["panelTitle" + String(CKEDITOR.STYLE_BLOCK)]), a[CKEDITOR.STYLE_INLINE] || this.hideGroup(i["panelTitle" + String(CKEDITOR.STYLE_INLINE)]), a[CKEDITOR.STYLE_OBJECT] || this.hideGroup(i["panelTitle" + String(CKEDITOR.STYLE_OBJECT)])
                    },
                    refresh: function () {
                        var t = e.elementPath();
                        if (t) {
                            for (var n in o) {
                                var i = o[n];
                                if (i.checkApplicable(t, e, e.activeFilter))return
                            }
                            this.setState(CKEDITOR.TRISTATE_DISABLED)
                        }
                    },
                    reset: function () {
                        t && (delete t._.panel, delete t._.list, t._.committed = 0, t._.items = {}, t._.state = CKEDITOR.TRISTATE_OFF), o = {}, r = []
                    }
                })
            }
        })
    }(),function () {
        function e(e) {
            return {
                editorFocus: !1, canUndo: !1, modes: {wysiwyg: 1}, exec: function (t) {
                    if (t.editable().hasFocus) {
                        var n, i = t.getSelection(), o = new CKEDITOR.dom.elementPath(i.getCommonAncestor(), i.root);
                        if (n = o.contains({td: 1, th: 1}, 1)) {
                            var r = t.createRange(), a = CKEDITOR.tools.tryThese(function () {
                                var t = n.getParent(), i = t.$.cells[n.$.cellIndex + (e ? -1 : 1)];
                                return i.parentNode.parentNode, i
                            }, function () {
                                var t = n.getParent(), i = t.getAscendant("table"),
                                    o = i.$.rows[t.$.rowIndex + (e ? -1 : 1)];
                                return o.cells[e ? o.cells.length - 1 : 0]
                            });
                            if (a || e) {
                                if (!a)return !0;
                                a = new CKEDITOR.dom.element(a), r.moveToElementEditStart(a), r.checkStartOfBlock() && r.checkEndOfBlock() || r.selectNodeContents(a)
                            } else {
                                for (var s = n.getAscendant("table").$, l = n.getParent().$.cells, c = new CKEDITOR.dom.element(s.insertRow(-1), t.document), d = 0, u = l.length; u > d; d++) {
                                    var h = c.append(new CKEDITOR.dom.element(l[d], t.document).clone(!1, !1));
                                    h.appendBogus()
                                }
                                r.moveToElementEditStart(c)
                            }
                            return r.select(!0), !0
                        }
                    }
                    return !1
                }
            }
        }

        var t = {editorFocus: !1, modes: {wysiwyg: 1, source: 1}}, n = {
            exec: function (e) {
                e.container.focusNext(!0, e.tabIndex)
            }
        }, i = {
            exec: function (e) {
                e.container.focusPrevious(!0, e.tabIndex)
            }
        };
        CKEDITOR.plugins.add("tab", {
            init: function (o) {
                for (var r = o.config.enableTabKeyTools !== !1, a = o.config.tabSpaces || 0, s = ""; a--;)s += "\xa0";
                s && o.on("key", function (e) {
                    9 == e.data.keyCode && (o.insertText(s), e.cancel())
                }), r && o.on("key", function (e) {
                    (9 == e.data.keyCode && o.execCommand("selectNextCell") || e.data.keyCode == CKEDITOR.SHIFT + 9 && o.execCommand("selectPreviousCell")) && e.cancel()
                }), o.addCommand("blur", CKEDITOR.tools.extend(n, t)), o.addCommand("blurBack", CKEDITOR.tools.extend(i, t)), o.addCommand("selectNextCell", e()), o.addCommand("selectPreviousCell", e(!0))
            }
        })
    }(),CKEDITOR.dom.element.prototype.focusNext = function (e, t) {
        var n, i, o, r, a, s, l = void 0 === t ? this.getTabIndex() : t;
        if (0 >= l)for (a = this.getNextSourceNode(e, CKEDITOR.NODE_ELEMENT); a;) {
            if (a.isVisible() && 0 === a.getTabIndex()) {
                o = a;
                break
            }
            a = a.getNextSourceNode(!1, CKEDITOR.NODE_ELEMENT)
        } else for (a = this.getDocument().getBody().getFirst(); a = a.getNextSourceNode(!1, CKEDITOR.NODE_ELEMENT);) {
            if (!n)if (!i && a.equals(this)) {
                if (i = !0, e) {
                    if (!(a = a.getNextSourceNode(!0, CKEDITOR.NODE_ELEMENT)))break;
                    n = 1
                }
            } else i && !this.contains(a) && (n = 1);
            if (a.isVisible() && !((s = a.getTabIndex()) < 0)) {
                if (n && s == l) {
                    o = a;
                    break
                }
                s > l && (!o || !r || r > s) ? (o = a, r = s) : o || 0 !== s || (o = a, r = s)
            }
        }
        o && o.focus()
    },CKEDITOR.dom.element.prototype.focusPrevious = function (e, t) {
        for (var n, i, o, r, a = void 0 === t ? this.getTabIndex() : t, s = 0, l = this.getDocument().getBody().getLast(); l = l.getPreviousSourceNode(!1, CKEDITOR.NODE_ELEMENT);) {
            if (!n)if (!i && l.equals(this)) {
                if (i = !0, e) {
                    if (!(l = l.getPreviousSourceNode(!0, CKEDITOR.NODE_ELEMENT)))break;
                    n = 1
                }
            } else i && !this.contains(l) && (n = 1);
            if (l.isVisible() && !((r = l.getTabIndex()) < 0))if (0 >= a) {
                if (n && 0 === r) {
                    o = l;
                    break
                }
                r > s && (o = l, s = r)
            } else {
                if (n && r == a) {
                    o = l;
                    break
                }
                a > r && (!o || r > s) && (o = l, s = r)
            }
        }
        o && o.focus()
    },function () {
        CKEDITOR.plugins.add("templates", {
            requires: "dialog", init: function (e) {
                CKEDITOR.dialog.add("templates", CKEDITOR.getUrl(this.path + "dialogs/templates.js")), e.addCommand("templates", new CKEDITOR.dialogCommand("templates")), e.ui.addButton && e.ui.addButton("Templates", {
                    label: e.lang.templates.button,
                    command: "templates",
                    toolbar: "doctools,10"
                })
            }
        });
        var e = {}, t = {};
        CKEDITOR.addTemplates = function (t, n) {
            e[t] = n
        }, CKEDITOR.getTemplates = function (t) {
            return e[t]
        }, CKEDITOR.loadTemplates = function (e, n) {
            for (var i = [], o = 0, r = e.length; r > o; o++)t[e[o]] || (i.push(e[o]), t[e[o]] = 1);
            i.length ? CKEDITOR.scriptLoader.load(i, n) : setTimeout(n, 0)
        }
    }(),CKEDITOR.config.templates_files = [CKEDITOR.getUrl("plugins/templates/templates/default.js")],CKEDITOR.config.templates_replaceContent = !0,function () {
        function e(e) {
            function n() {
                for (var n = i(), r = CKEDITOR.tools.clone(e.config.toolbarGroups) || t(e), a = 0; a < r.length; a++) {
                    var s = r[a];
                    if ("/" != s) {
                        "string" == typeof s && (s = r[a] = {name: s});
                        var l, c = s.groups;
                        if (c)for (var d, u = 0; u < c.length; u++)d = c[u], l = n[d], l && o(s, l);
                        l = n[s.name], l && o(s, l)
                    }
                }
                return r
            }

            function i() {
                var t, n, i, o, r, a = {};
                for (t in e.ui.items)n = e.ui.items[t], i = n.toolbar || "others", i && (i = i.split(","), o = i[0], r = parseInt(i[1] || -1, 10), a[o] || (a[o] = []), a[o].push({
                    name: t,
                    order: r
                }));
                for (o in a)a[o] = a[o].sort(function (e, t) {
                    return e.order == t.order ? 0 : t.order < 0 ? -1 : e.order < 0 ? 1 : e.order < t.order ? -1 : 1
                });
                return a
            }

            function o(t, n) {
                if (n.length) {
                    t.items ? t.items.push(e.ui.create("-")) : t.items = [];
                    for (var i, o; i = n.shift();)if (o = "string" == typeof i ? i : i.name, !a || -1 == CKEDITOR.tools.indexOf(a, o)) {
                        if (i = e.ui.create(o), !i)continue;
                        if (!e.addFeature(i))continue;
                        t.items.push(i)
                    }
                }
            }

            function r(e) {
                var t, n, i, r = [];
                for (t = 0; t < e.length; ++t)n = e[t], i = {}, "/" == n ? r.push(n) : CKEDITOR.tools.isArray(n) ? (o(i, CKEDITOR.tools.clone(n)), r.push(i)) : n.items && (o(i, CKEDITOR.tools.clone(n.items)), i.name = n.name, r.push(i));
                return r
            }

            var a = e.config.removeButtons;
            a = a && a.split(",");
            var s = e.config.toolbar;
            return "string" == typeof s && (s = e.config["toolbar_" + s]), e.toolbar = s ? r(s) : n()
        }

        function t(e) {
            return e._.toolbarGroups || (e._.toolbarGroups = [{
                    name: "document",
                    groups: ["mode", "document", "doctools"]
                }, {name: "clipboard", groups: ["clipboard", "undo"]}, {
                    name: "editing",
                    groups: ["find", "selection", "spellchecker"]
                }, {name: "forms"}, "/", {name: "basicstyles", groups: ["basicstyles", "cleanup"]}, {
                    name: "paragraph",
                    groups: ["list", "indent", "blocks", "align", "bidi"]
                }, {name: "links"}, {name: "insert"}, "/", {name: "styles"}, {name: "colors"}, {name: "tools"}, {name: "others"}, {name: "about"}])
        }

        var n = function () {
            this.toolbars = [], this.focusCommandExecuted = !1
        };
        n.prototype.focus = function () {
            for (var e, t = 0; e = this.toolbars[t++];)for (var n, i = 0; n = e.items[i++];)if (n.focus)return void n.focus()
        };
        var i = {
            toolbarFocus: {
                modes: {wysiwyg: 1, source: 1}, readOnly: 1, exec: function (e) {
                    e.toolbox && (e.toolbox.focusCommandExecuted = !0, CKEDITOR.env.ie || CKEDITOR.env.air ? setTimeout(function () {
                        e.toolbox.focus()
                    }, 100) : e.toolbox.focus())
                }
            }
        };
        CKEDITOR.plugins.add("toolbar", {
            requires: "button", init: function (t) {
                var o, r = function (e, n) {
                    var i, a, s = "rtl" == t.lang.dir, l = t.config.toolbarGroupCycling, c = s ? 37 : 39,
                        d = s ? 39 : 37;
                    switch (l = void 0 === l || l, n) {
                        case 9:
                        case CKEDITOR.SHIFT + 9:
                            for (; !a || !a.items.length;)if (a = 9 == n ? (a ? a.next : e.toolbar.next) || t.toolbox.toolbars[0] : (a ? a.previous : e.toolbar.previous) || t.toolbox.toolbars[t.toolbox.toolbars.length - 1], a.items.length)for (e = a.items[o ? a.items.length - 1 : 0]; e && !e.focus;)e = o ? e.previous : e.next, e || (a = 0);
                            return e && e.focus(), !1;
                        case c:
                            i = e;
                            do i = i.next, !i && l && (i = e.toolbar.items[0]); while (i && !i.focus);
                            return i ? i.focus() : r(e, 9), !1;
                        case 40:
                            return e.button && e.button.hasArrow ? (t.once("panelShow", function (e) {
                                e.data._.panel._.currentBlock.onKeyDown(40)
                            }), e.execute()) : r(e, 40 == n ? c : d), !1;
                        case d:
                        case 38:
                            i = e;
                            do i = i.previous, !i && l && (i = e.toolbar.items[e.toolbar.items.length - 1]); while (i && !i.focus);
                            return i ? i.focus() : (o = 1, r(e, CKEDITOR.SHIFT + 9), o = 0), !1;
                        case 27:
                            return t.focus(), !1;
                        case 13:
                        case 32:
                            return e.execute(), !1
                    }
                    return !0
                };
                t.on("uiSpace", function (i) {
                    function o(e) {
                        var n = e.render(t, c);
                        O = p.items.push(n) - 1, O > 0 && (n.previous = p.items[O - 1], n.previous.next = n), n.toolbar = p, n.onkey = r, n.onfocus = function () {
                            t.toolbox.focusCommandExecuted || t.focus()
                        }
                    }

                    if (i.data.space == t.config.toolbarLocation) {
                        i.removeListener(), t.toolbox = new n;
                        var a, s, l = CKEDITOR.tools.getNextId(),
                            c = ['<span id="', l, '" class="cke_voice_label">', t.lang.toolbar.toolbars, "</span>", '<span id="' + t.ui.spaceId("toolbox") + '" class="cke_toolbox" role="group" aria-labelledby="', l, '" onmousedown="return false;">'],
                            d = t.config.toolbarStartupExpanded !== !1;
                        t.config.toolbarCanCollapse && t.elementMode != CKEDITOR.ELEMENT_MODE_INLINE && c.push('<span class="cke_toolbox_main"' + (d ? ">" : ' style="display:none">'));
                        for (var u = t.toolbox.toolbars, h = e(t), f = 0; f < h.length; f++) {
                            var m, E, g, p = 0, T = h[f];
                            if (T)if (a && (c.push("</span>"), a = 0, s = 0), "/" !== T) {
                                g = T.items || T;
                                for (var C = 0; C < g.length; C++) {
                                    var v, I = g[C];
                                    if (I) {
                                        if (I.type == CKEDITOR.UI_SEPARATOR) {
                                            s = a && I;
                                            continue
                                        }
                                        if (v = I.canGroup !== !1, !p) {
                                            m = CKEDITOR.tools.getNextId(), p = {
                                                id: m,
                                                items: []
                                            }, E = T.name && (t.lang.toolbar.toolbarGroups[T.name] || T.name), c.push('<span id="', m, '" class="cke_toolbar"', E ? ' aria-labelledby="' + m + '_label"' : "", ' role="toolbar">'), E && c.push('<span id="', m, '_label" class="cke_voice_label">', E, "</span>"), c.push('<span class="cke_toolbar_start"></span>');
                                            var O = u.push(p) - 1;
                                            O > 0 && (p.previous = u[O - 1], p.previous.next = p)
                                        }
                                        v ? a || (c.push('<span class="cke_toolgroup" role="presentation">'), a = 1) : a && (c.push("</span>"), a = 0), s && (o(s), s = 0), o(I)
                                    }
                                }
                                a && (c.push("</span>"), a = 0, s = 0), p && c.push('<span class="cke_toolbar_end"></span></span>')
                            } else c.push('<span class="cke_toolbar_break"></span>')
                        }
                        if (t.config.toolbarCanCollapse && c.push("</span>"), t.config.toolbarCanCollapse && t.elementMode != CKEDITOR.ELEMENT_MODE_INLINE) {
                            var D = CKEDITOR.tools.addFunction(function () {
                                t.execCommand("toolbarCollapse")
                            });
                            t.on("destroy", function () {
                                CKEDITOR.tools.removeFunction(D)
                            }), t.addCommand("toolbarCollapse", {
                                readOnly: 1, exec: function (e) {
                                    var t = e.ui.space("toolbar_collapser"), n = t.getPrevious(),
                                        i = e.ui.space("contents"), o = n.getParent(),
                                        r = parseInt(i.$.style.height, 10), a = o.$.offsetHeight,
                                        s = "cke_toolbox_collapser_min", l = t.hasClass(s);
                                    l ? (n.show(), t.removeClass(s), t.setAttribute("title", e.lang.toolbar.toolbarCollapse)) : (n.hide(), t.addClass(s), t.setAttribute("title", e.lang.toolbar.toolbarExpand)), t.getFirst().setText(l ? "\u25b2" : "\u25c0");
                                    var c = o.$.offsetHeight - a;
                                    i.setStyle("height", r - c + "px"), e.fire("resize")
                                }, modes: {wysiwyg: 1, source: 1}
                            }), t.setKeystroke(CKEDITOR.ALT + (CKEDITOR.env.ie || CKEDITOR.env.webkit ? 189 : 109), "toolbarCollapse"), c.push('<a title="' + (d ? t.lang.toolbar.toolbarCollapse : t.lang.toolbar.toolbarExpand) + '" id="' + t.ui.spaceId("toolbar_collapser") + '" tabIndex="-1" class="cke_toolbox_collapser'), d || c.push(" cke_toolbox_collapser_min"), c.push('" onclick="CKEDITOR.tools.callFunction(' + D + ')">', '<span class="cke_arrow">&#9650;</span>', "</a>")
                        }
                        c.push("</span>"), i.data.html += c.join("")
                    }
                }), t.on("destroy", function () {
                    if (this.toolbox) {
                        var e, t, n, i, o = 0;
                        for (e = this.toolbox.toolbars; o < e.length; o++)for (n = e[o].items, t = 0; t < n.length; t++)i = n[t], i.clickFn && CKEDITOR.tools.removeFunction(i.clickFn), i.keyDownFn && CKEDITOR.tools.removeFunction(i.keyDownFn)
                    }
                }), t.on("uiReady", function () {
                    var e = t.ui.space("toolbox");
                    e && t.focusManager.add(e, 1)
                }), t.addCommand("toolbarFocus", i.toolbarFocus), t.setKeystroke(CKEDITOR.ALT + 121, "toolbarFocus"), t.ui.add("-", CKEDITOR.UI_SEPARATOR, {}), t.ui.addHandler(CKEDITOR.UI_SEPARATOR, {
                    create: function () {
                        return {
                            render: function (e, t) {
                                return t.push('<span class="cke_toolbar_separator" role="separator"></span>'), {}
                            }
                        }
                    }
                })
            }
        }), CKEDITOR.ui.prototype.addToolbarGroup = function (e, n, i) {
            var o = t(this.editor), r = 0 === n, a = {name: e};
            if (i) {
                if (i = CKEDITOR.tools.search(o, function (e) {
                        return e.name == i
                    }))return !i.groups && (i.groups = []), n && (n = CKEDITOR.tools.indexOf(i.groups, n), n >= 0) ? void i.groups.splice(n + 1, 0, e) : void(r ? i.groups.splice(0, 0, e) : i.groups.push(e));
                n = null
            }
            n && (n = CKEDITOR.tools.indexOf(o, function (e) {
                return e.name == n
            })), r ? o.splice(0, 0, e) : "number" == typeof n ? o.splice(n + 1, 0, a) : o.push(e)
        }
    }(),CKEDITOR.UI_SEPARATOR = "separator",CKEDITOR.config.toolbarLocation = "top",function () {
        function e(e) {
            e.typing = !0, e.hasUndo = !0, e.hasRedo = !1, e.onChange()
        }

        var t = [CKEDITOR.CTRL + 90, CKEDITOR.CTRL + 89, CKEDITOR.CTRL + CKEDITOR.SHIFT + 90], n = {8: 1, 46: 1};
        CKEDITOR.plugins.add("undo", {
            init: function (e) {
                function n(e) {
                    r.enabled && e.data.command.canUndo !== !1 && r.save()
                }

                function o() {
                    r.enabled = e.readOnly ? !1 : "wysiwyg" == e.mode, r.onChange()
                }

                var r = e.undoManager = new i(e), s = r.editingHandler = new a(r), l = e.addCommand("undo", {
                    exec: function () {
                        r.undo() && (e.selectionChange(), this.fire("afterUndo"))
                    }, startDisabled: !0, canUndo: !1
                }), c = e.addCommand("redo", {
                    exec: function () {
                        r.redo() && (e.selectionChange(), this.fire("afterRedo"))
                    }, startDisabled: !0, canUndo: !1
                });
                e.setKeystroke([[t[0], "undo"], [t[1], "redo"], [t[2], "redo"]]), r.onChange = function () {
                    l.setState(r.undoable() ? CKEDITOR.TRISTATE_OFF : CKEDITOR.TRISTATE_DISABLED), c.setState(r.redoable() ? CKEDITOR.TRISTATE_OFF : CKEDITOR.TRISTATE_DISABLED)
                }, e.on("beforeCommandExec", n), e.on("afterCommandExec", n), e.on("saveSnapshot", function (e) {
                    r.save(e.data && e.data.contentOnly)
                }), e.on("contentDom", s.attachListeners, s), e.on("instanceReady", function () {
                    e.fire("saveSnapshot")
                }), e.on("beforeModeUnload", function () {
                    "wysiwyg" == e.mode && r.save(!0)
                }), e.on("mode", o), e.on("readOnly", o), e.ui.addButton && (e.ui.addButton("Undo", {
                    label: e.lang.undo.undo,
                    command: "undo",
                    toolbar: "undo,10"
                }), e.ui.addButton("Redo", {
                    label: e.lang.undo.redo,
                    command: "redo",
                    toolbar: "undo,20"
                })), e.resetUndo = function () {
                    r.reset(), e.fire("saveSnapshot")
                }, e.on("updateSnapshot", function () {
                    r.currentImage && r.update()
                }), e.on("lockSnapshot", function (e) {
                    var t = e.data;
                    r.lock(t && t.dontUpdate, t && t.forceUpdate)
                }), e.on("unlockSnapshot", r.unlock, r)
            }
        }), CKEDITOR.plugins.undo = {};
        var i = CKEDITOR.plugins.undo.UndoManager = function (e) {
            this.strokesRecorded = [0, 0], this.locked = null, this.previousKeyGroup = -1, this.limit = e.config.undoStackSize || 20, this.strokesLimit = 25, this.editor = e, this.reset()
        };
        i.prototype = {
            type: function (t, n) {
                var o = i.getKeyGroup(t), r = this.strokesRecorded[o] + 1;
                n = n || r >= this.strokesLimit, this.typing || e(this), n ? (r = 0, this.editor.fire("saveSnapshot")) : this.editor.fire("change"), this.strokesRecorded[o] = r, this.previousKeyGroup = o
            }, keyGroupChanged: function (e) {
                return i.getKeyGroup(e) != this.previousKeyGroup
            }, reset: function () {
                this.snapshots = [], this.index = -1, this.currentImage = null, this.hasUndo = !1, this.hasRedo = !1, this.locked = null, this.resetType()
            }, resetType: function () {
                this.strokesRecorded = [0, 0], this.typing = !1, this.previousKeyGroup = -1
            }, refreshState: function () {
                this.hasUndo = !!this.getNextImage(!0), this.hasRedo = !!this.getNextImage(!1), this.resetType(), this.onChange()
            }, save: function (e, t, n) {
                var i = this.editor;
                if (this.locked || "ready" != i.status || "wysiwyg" != i.mode)return !1;
                var r = i.editable();
                if (!r || "ready" != r.status)return !1;
                var a = this.snapshots;
                if (t || (t = new o(i)), t.contents === !1)return !1;
                if (this.currentImage)if (t.equalsContent(this.currentImage)) {
                    if (e)return !1;
                    if (t.equalsSelection(this.currentImage))return !1
                } else n !== !1 && i.fire("change");
                return a.splice(this.index + 1, a.length - this.index - 1), a.length == this.limit && a.shift(), this.index = a.push(t) - 1, this.currentImage = t, n !== !1 && this.refreshState(), !0
            }, restoreImage: function (e) {
                var t, n = this.editor;
                if (e.bookmarks && (n.focus(), t = n.getSelection()), this.locked = {level: 999}, this.editor.loadSnapshot(e.contents), e.bookmarks) t.selectBookmarks(e.bookmarks); else if (CKEDITOR.env.ie) {
                    var i = this.editor.document.getBody().$.createTextRange();
                    i.collapse(!0), i.select()
                }
                this.locked = null, this.index = e.index, this.currentImage = this.snapshots[this.index], this.update(), this.refreshState(), n.fire("change")
            }, getNextImage: function (e) {
                var t, n, i = this.snapshots, o = this.currentImage;
                if (o)if (e) {
                    for (n = this.index - 1; n >= 0; n--)if (t = i[n], !o.equalsContent(t))return t.index = n, t
                } else for (n = this.index + 1; n < i.length; n++)if (t = i[n], !o.equalsContent(t))return t.index = n, t;
                return null
            }, redoable: function () {
                return this.enabled && this.hasRedo
            }, undoable: function () {
                return this.enabled && this.hasUndo
            }, undo: function () {
                if (this.undoable()) {
                    this.save(!0);
                    var e = this.getNextImage(!0);
                    if (e)return this.restoreImage(e), !0
                }
                return !1
            }, redo: function () {
                if (this.redoable() && (this.save(!0), this.redoable())) {
                    var e = this.getNextImage(!1);
                    if (e)return this.restoreImage(e), !0
                }
                return !1
            }, update: function (e) {
                if (!this.locked) {
                    e || (e = new o(this.editor));
                    for (var t = this.index, n = this.snapshots; t > 0 && this.currentImage.equalsContent(n[t - 1]);)t -= 1;
                    n.splice(t, this.index - t + 1, e), this.index = t, this.currentImage = e
                }
            }, updateSelection: function (e) {
                if (!this.snapshots.length)return !1;
                var t = this.snapshots, n = t[t.length - 1];
                return n.equalsContent(e) && !n.equalsSelection(e) ? (t[t.length - 1] = e, this.currentImage = e, !0) : !1
            }, lock: function (e, t) {
                if (this.locked) this.locked.level++; else if (e) this.locked = {level: 1}; else {
                    var n = null;
                    if (t) n = !0; else {
                        var i = new o(this.editor, !0);
                        this.currentImage && this.currentImage.equalsContent(i) && (n = i)
                    }
                    this.locked = {update: n, level: 1}
                }
            }, unlock: function () {
                if (this.locked && !--this.locked.level) {
                    var e = this.locked.update;
                    if (this.locked = null, e === !0) this.update(); else if (e) {
                        var t = new o(this.editor, !0);
                        e.equalsContent(t) || this.update()
                    }
                }
            }
        }, i.navigationKeyCodes = {37: 1, 38: 1, 39: 1, 40: 1, 36: 1, 35: 1, 33: 1, 34: 1}, i.keyGroups = {
            PRINTABLE: 0,
            FUNCTIONAL: 1
        }, i.isNavigationKey = function (e) {
            return !!i.navigationKeyCodes[e]
        }, i.getKeyGroup = function (e) {
            var t = i.keyGroups;
            return n[e] ? t.FUNCTIONAL : t.PRINTABLE
        }, i.getOppositeKeyGroup = function (e) {
            var t = i.keyGroups;
            return e == t.FUNCTIONAL ? t.PRINTABLE : t.FUNCTIONAL
        }, i.ieFunctionalKeysBug = function (e) {
            return CKEDITOR.env.ie && i.getKeyGroup(e) == i.keyGroups.FUNCTIONAL
        };
        var o = CKEDITOR.plugins.undo.Image = function (e, t) {
            this.editor = e, e.fire("beforeUndoImage");
            var n = e.getSnapshot();
            if (CKEDITOR.env.ie && n && (n = n.replace(/\s+data-cke-expando=".*?"/g, "")), this.contents = n, !t) {
                var i = n && e.getSelection();
                this.bookmarks = i && i.createBookmarks2(!0)
            }
            e.fire("afterUndoImage")
        }, r = /\b(?:href|src|name)="[^"]*?"/gi;
        o.prototype = {
            equalsContent: function (e) {
                var t = this.contents, n = e.contents;
                return CKEDITOR.env.ie && (CKEDITOR.env.ie7Compat || CKEDITOR.env.quirks) && (t = t.replace(r, ""), n = n.replace(r, "")), t != n ? !1 : !0
            }, equalsSelection: function (e) {
                var t = this.bookmarks, n = e.bookmarks;
                if (t || n) {
                    if (!t || !n || t.length != n.length)return !1;
                    for (var i = 0; i < t.length; i++) {
                        var o = t[i], r = n[i];
                        if (o.startOffset != r.startOffset || o.endOffset != r.endOffset || !CKEDITOR.tools.arrayCompare(o.start, r.start) || !CKEDITOR.tools.arrayCompare(o.end, r.end))return !1
                    }
                }
                return !0
            }
        };
        var a = CKEDITOR.plugins.undo.NativeEditingHandler = function (e) {
            this.undoManager = e, this.ignoreInputEvent = !1, this.keyEventsStack = new s, this.lastKeydownImage = null
        };
        a.prototype = {
            onKeydown: function (e) {
                var n = e.data.getKey();
                if (229 !== n) {
                    if (CKEDITOR.tools.indexOf(t, e.data.getKeystroke()) > -1)return void e.data.preventDefault();
                    this.keyEventsStack.cleanUp(e);
                    var r = this.undoManager, a = this.keyEventsStack.getLast(n);
                    a || this.keyEventsStack.push(n), this.lastKeydownImage = new o(r.editor), (i.isNavigationKey(n) || this.undoManager.keyGroupChanged(n)) && (r.strokesRecorded[0] || r.strokesRecorded[1]) && (r.save(!1, this.lastKeydownImage, !1), r.resetType())
                }
            }, onInput: function () {
                if (this.ignoreInputEvent)return void(this.ignoreInputEvent = !1);
                var e = this.keyEventsStack.getLast();
                e || (e = this.keyEventsStack.push(0)), this.keyEventsStack.increment(e.keyCode), this.keyEventsStack.getTotalInputs() >= this.undoManager.strokesLimit && (this.undoManager.type(e.keyCode, !0), this.keyEventsStack.resetInputs())
            }, onKeyup: function (e) {
                var t = this.undoManager, n = e.data.getKey(), r = this.keyEventsStack.getTotalInputs();
                this.keyEventsStack.remove(n), i.ieFunctionalKeysBug(n) && this.lastKeydownImage && this.lastKeydownImage.equalsContent(new o(t.editor, !0)) || (r > 0 ? t.type(n) : i.isNavigationKey(n) && this.onNavigationKey(!0))
            }, onNavigationKey: function (e) {
                var t = this.undoManager;
                (e || !t.save(!0, null, !1)) && t.updateSelection(new o(t.editor)), t.resetType()
            }, ignoreInputEventListener: function () {
                this.ignoreInputEvent = !0
            }, attachListeners: function () {
                var e = this.undoManager.editor, t = e.editable(), n = this;
                t.attachListener(t, "keydown", function (e) {
                    n.onKeydown(e), i.ieFunctionalKeysBug(e.data.getKey()) && n.onInput()
                }, null, null, 999), t.attachListener(t, CKEDITOR.env.ie ? "keypress" : "input", n.onInput, n, null, 999), t.attachListener(t, "keyup", n.onKeyup, n, null, 999), t.attachListener(t, "paste", n.ignoreInputEventListener, n, null, 999), t.attachListener(t, "drop", n.ignoreInputEventListener, n, null, 999), t.attachListener(t.isInline() ? t : e.document.getDocumentElement(), "click", function () {
                    n.onNavigationKey()
                }, null, null, 999), t.attachListener(this.undoManager.editor, "blur", function () {
                    n.keyEventsStack.remove(9)
                }, null, null, 999)
            }
        };
        var s = CKEDITOR.plugins.undo.KeyEventsStack = function () {
            this.stack = []
        };
        s.prototype = {
            push: function (e) {
                var t = this.stack.push({keyCode: e, inputs: 0});
                return this.stack[t - 1]
            }, getLastIndex: function (e) {
                if ("number" != typeof e)return this.stack.length - 1;
                for (var t = this.stack.length; t--;)if (this.stack[t].keyCode == e)return t;
                return -1
            }, getLast: function (e) {
                var t = this.getLastIndex(e);
                return -1 != t ? this.stack[t] : null
            }, increment: function (e) {
                var t = this.getLast(e);
                t.inputs++
            }, remove: function (e) {
                var t = this.getLastIndex(e);
                -1 != t && this.stack.splice(t, 1)
            }, resetInputs: function (e) {
                if ("number" == typeof e) {
                    var t = this.getLast(e);
                    t.inputs = 0
                } else for (var n = this.stack.length; n--;)this.stack[n].inputs = 0
            }, getTotalInputs: function () {
                for (var e = this.stack.length, t = 0; e--;)t += this.stack[e].inputs;
                return t
            }, cleanUp: function (e) {
                var t = e.data.$;
                t.ctrlKey || t.metaKey || this.remove(17), t.shiftKey || this.remove(16), t.altKey || this.remove(18)
            }
        }
    }(),function () {
        function e(e) {
            var n = this.editor, i = e.document, o = i.body, r = i.getElementById("cke_actscrpt");
            r && r.parentNode.removeChild(r), r = i.getElementById("cke_shimscrpt"), r && r.parentNode.removeChild(r), r = i.getElementById("cke_basetagscrpt"), r && r.parentNode.removeChild(r), o.contentEditable = !0, CKEDITOR.env.ie && (o.hideFocus = !0, o.disabled = !0, o.removeAttribute("disabled")), delete this._.isLoadingData, this.$ = o, i = new CKEDITOR.dom.document(i), this.setup(), this.fixInitialSelection(), CKEDITOR.env.ie && (i.getDocumentElement().addClass(i.$.compatMode), n.config.enterMode != CKEDITOR.ENTER_P && this.attachListener(i, "selectionchange", function () {
                var e = i.getBody(), t = n.getSelection(), o = t && t.getRanges()[0];
                o && e.getHtml().match(/^<p>(?:&nbsp;|<br>)<\/p>$/i) && o.startContainer.equals(e) && setTimeout(function () {
                    o = n.getSelection().getRanges()[0], o.startContainer.equals("body") || (e.getFirst().remove(1), o.moveToElementEditEnd(e), o.select())
                }, 0)
            })), (CKEDITOR.env.webkit || CKEDITOR.env.ie && CKEDITOR.env.version > 10) && i.getDocumentElement().on("mousedown", function (e) {
                e.data.getTarget().is("html") && setTimeout(function () {
                    n.editable().focus()
                })
            }), t(n);
            try {
                n.document.$.execCommand("2D-position", !1, !0)
            } catch (a) {
            }
            (CKEDITOR.env.gecko || CKEDITOR.env.ie && "CSS1Compat" == n.document.$.compatMode) && this.attachListener(this, "keydown", function (e) {
                var t = e.data.getKeystroke();
                if (33 == t || 34 == t)if (CKEDITOR.env.ie) setTimeout(function () {
                    n.getSelection().scrollIntoView()
                }, 0); else if (n.window.$.innerHeight > this.$.offsetHeight) {
                    var i = n.createRange();
                    i[33 == t ? "moveToElementEditStart" : "moveToElementEditEnd"](this), i.select(), e.data.preventDefault()
                }
            }), CKEDITOR.env.ie && this.attachListener(i, "blur", function () {
                try {
                    i.$.selection.empty()
                } catch (e) {
                }
            }), CKEDITOR.env.iOS && this.attachListener(i, "touchend", function () {
                e.focus()
            });
            var s = n.document.getElementsByTag("title").getItem(0);
            s.data("cke-title", s.getText()), CKEDITOR.env.ie && (n.document.$.title = this._.docTitle), CKEDITOR.tools.setTimeout(function () {
                "unloaded" == this.status && (this.status = "ready"), n.fire("contentDom"), this._.isPendingFocus && (n.focus(), this._.isPendingFocus = !1), setTimeout(function () {
                    n.fire("dataReady")
                }, 0), CKEDITOR.env.ie && setTimeout(function () {
                    if (n.document) {
                        var e = n.document.$.body;
                        e.runtimeStyle.marginBottom = "0px", e.runtimeStyle.marginBottom = ""
                    }
                }, 1e3)
            }, 0, this)
        }

        function t(e) {
            function t() {
                var t;
                e.editable().attachListener(e, "selectionChange", function () {
                    var i = e.getSelection().getSelectedElement();
                    i && (t && (t.detachEvent("onresizestart", n), t = null), i.$.attachEvent("onresizestart", n), t = i.$)
                })
            }

            function n(e) {
                e.returnValue = !1
            }

            if (CKEDITOR.env.gecko)try {
                var i = e.document.$;
                i.execCommand("enableObjectResizing", !1, !e.config.disableObjectResizing), i.execCommand("enableInlineTableEditing", !1, !e.config.disableNativeTableHandles)
            } catch (o) {
            } else CKEDITOR.env.ie && CKEDITOR.env.version < 11 && e.config.disableObjectResizing && t(e)
        }

        function n() {
            var e = [];
            if (CKEDITOR.document.$.documentMode >= 8) {
                e.push("html.CSS1Compat [contenteditable=false]{min-height:0 !important}");
                var t = [];
                for (var n in CKEDITOR.dtd.$removeEmpty)t.push("html.CSS1Compat " + n + "[contenteditable=false]");
                e.push(t.join(",") + "{display:inline-block}")
            } else CKEDITOR.env.gecko && (e.push("html{height:100% !important}"), e.push("img:-moz-broken{-moz-force-broken-image-icon:1;min-width:24px;min-height:24px}"));
            return e.push("html{cursor:text;*cursor:auto}"), e.push("img,input,textarea{cursor:default}"), e.join("\n")
        }

        CKEDITOR.plugins.add("wysiwygarea", {
            init: function (e) {
                e.config.fullPage && e.addFeature({
                    allowedContent: "html head title; style [media,type]; body (*)[id]; meta link [*]",
                    requiredContent: "body"
                }), e.addMode("wysiwyg", function (t) {
                    function n(n) {
                        n && n.removeListener(), e.editable(new i(e, r.$.contentWindow.document.body)), e.setData(e.getData(1), t)
                    }

                    var o = "document.open();" + (CKEDITOR.env.ie ? "(" + CKEDITOR.tools.fixDomain + ")();" : "") + "document.close();";
                    o = CKEDITOR.env.air ? "javascript:void(0)" : CKEDITOR.env.ie ? "javascript:void(function(){" + encodeURIComponent(o) + "}())" : "";
                    var r = CKEDITOR.dom.element.createFromHtml('<iframe src="' + o + '" frameBorder="0"></iframe>');
                    r.setStyles({width: "100%", height: "100%"}), r.addClass("cke_wysiwyg_frame cke_reset");
                    var a = e.ui.space("contents");
                    a.append(r);
                    var s = CKEDITOR.env.ie || CKEDITOR.env.gecko;
                    s && r.on("load", n);
                    var l = e.title, c = e.fire("ariaEditorHelpLabel", {}).label;
                    if (l && (CKEDITOR.env.ie && c && (l += ", " + c), r.setAttribute("title", l)), c) {
                        var d = CKEDITOR.tools.getNextId(),
                            u = CKEDITOR.dom.element.createFromHtml('<span id="' + d + '" class="cke_voice_label">' + c + "</span>");
                        a.append(u, 1), r.setAttribute("aria-describedby", d)
                    }
                    if (e.on("beforeModeUnload", function (e) {
                            e.removeListener(), u && u.remove()
                        }), r.setAttributes({
                            tabIndex: e.tabIndex,
                            allowTransparency: "true"
                        }), !s && n(), CKEDITOR.env.webkit) {
                        var h = function () {
                            a.setStyle("width", "100%"), r.hide(), r.setSize("width", a.getSize("width")), a.removeStyle("width"), r.show()
                        };
                        r.setCustomData("onResize", h), CKEDITOR.document.getWindow().on("resize", h)
                    }
                    e.fire("ariaWidget", r)
                })
            }
        }), CKEDITOR.editor.prototype.addContentsCss = function (e) {
            var t = this.config, n = t.contentsCss;
            CKEDITOR.tools.isArray(n) || (t.contentsCss = n ? [n] : []), t.contentsCss.push(e)
        };
        var i = CKEDITOR.tools.createClass({
            $: function () {
                this.base.apply(this, arguments), this._.frameLoadedHandler = CKEDITOR.tools.addFunction(function (t) {
                    CKEDITOR.tools.setTimeout(e, 0, this, t)
                }, this), this._.docTitle = this.getWindow().getFrame().getAttribute("title")
            }, base: CKEDITOR.editable, proto: {
                setData: function (e, t) {
                    var i = this.editor;
                    if (t) this.setHtml(e), this.fixInitialSelection(), i.fire("dataReady"); else {
                        this._.isLoadingData = !0, i._.dataStore = {id: 1};
                        var o = i.config, r = o.fullPage, a = o.docType,
                            s = CKEDITOR.tools.buildStyleHtml(n()).replace(/<style>/, '<style data-cke-temp="1">');
                        r || (s += CKEDITOR.tools.buildStyleHtml(i.config.contentsCss));
                        var l = o.baseHref ? '<base href="' + o.baseHref + '" data-cke-temp="1" />' : "";
                        r && (e = e.replace(/<!DOCTYPE[^>]*>/i, function (e) {
                            return i.docType = a = e, ""
                        }).replace(/<\?xml\s[^\?]*\?>/i, function (e) {
                            return i.xmlDeclaration = e, ""
                        })), e = i.dataProcessor.toHtml(e), r ? (/<body[\s|>]/.test(e) || (e = "<body>" + e), /<html[\s|>]/.test(e) || (e = "<html>" + e + "</html>"), /<head[\s|>]/.test(e) ? /<title[\s|>]/.test(e) || (e = e.replace(/<head[^>]*>/, "$&<title></title>")) : e = e.replace(/<html[^>]*>/, "$&<head><title></title></head>"), l && (e = e.replace(/<head[^>]*?>/, "$&" + l)), e = e.replace(/<\/head\s*>/, s + "$&"), e = a + e) : e = o.docType + '<html dir="' + o.contentsLangDirection + '" lang="' + (o.contentsLanguage || i.langCode) + '"><head><title>' + this._.docTitle + "</title>" + l + s + "</head><body" + (o.bodyId ? ' id="' + o.bodyId + '"' : "") + (o.bodyClass ? ' class="' + o.bodyClass + '"' : "") + ">" + e + "</body></html>", CKEDITOR.env.gecko && (e = e.replace(/<body/, '<body contenteditable="true" '), CKEDITOR.env.version < 2e4 && (e = e.replace(/<body[^>]*>/, "$&<!-- cke-content-start -->")));
                        var c = '<script id="cke_actscrpt" type="text/javascript"' + (CKEDITOR.env.ie ? ' defer="defer" ' : "") + ">var wasLoaded=0;function onload(){if(!wasLoaded)window.parent.CKEDITOR.tools.callFunction(" + this._.frameLoadedHandler + ",window);wasLoaded=1;}" + (CKEDITOR.env.ie ? "onload();" : 'document.addEventListener("DOMContentLoaded", onload, false );') + "</script>";
                        CKEDITOR.env.ie && CKEDITOR.env.version < 9 && (c += '<script id="cke_shimscrpt">window.parent.CKEDITOR.tools.enableHtml5Elements(document)</script>'), l && CKEDITOR.env.ie && CKEDITOR.env.version < 10 && (c += '<script id="cke_basetagscrpt">var baseTag = document.querySelector( "base" );baseTag.href = baseTag.href;</script>'), e = e.replace(/(?=\s*<\/(:?head)>)/, c), this.clearCustomData(), this.clearListeners(), i.fire("contentDomUnload");
                        var d = this.getDocument();
                        try {
                            d.write(e)
                        } catch (u) {
                            setTimeout(function () {
                                d.write(e)
                            }, 0)
                        }
                    }
                }, getData: function (e) {
                    if (e)return this.getHtml();
                    var t = this.editor, n = t.config, i = n.fullPage, o = i && t.docType, r = i && t.xmlDeclaration,
                        a = this.getDocument(), s = i ? a.getDocumentElement().getOuterHtml() : a.getBody().getHtml();
                    return CKEDITOR.env.gecko && n.enterMode != CKEDITOR.ENTER_BR && (s = s.replace(/<br>(?=\s*(:?$|<\/body>))/, "")), s = t.dataProcessor.toDataFormat(s), r && (s = r + "\n" + s), o && (s = o + "\n" + s), s
                }, focus: function () {
                    this._.isLoadingData ? this._.isPendingFocus = !0 : i.baseProto.focus.call(this)
                }, detach: function () {
                    var e = this.editor, t = e.document, n = e.window.getFrame();
                    i.baseProto.detach.call(this), this.clearCustomData(), t.getDocumentElement().clearCustomData(), n.clearCustomData(), CKEDITOR.tools.removeFunction(this._.frameLoadedHandler);
                    var o = n.removeCustomData("onResize");
                    o && o.removeListener(), n.remove()
                }
            }
        })
    }(),CKEDITOR.config.disableObjectResizing = !1,CKEDITOR.config.disableNativeTableHandles = !0,CKEDITOR.config.disableNativeSpellChecker = !0,CKEDITOR.config.contentsCss = CKEDITOR.getUrl("contents.css"),CKEDITOR.config.plugins = "basicstyles,bidi,blockquote,dialogui,dialog,clipboard,button,panelbutton,panel,floatpanel,colorbutton,colordialog,menu,contextmenu,entities,popup,filebrowser,find,fakeobjects,flash,floatingspace,listblock,richcombo,format,horizontalrule,htmlwriter,iframe,lineutils,widget,image2,indent,indentlist,indentblock,justify,link,list,liststyle,magicline,maximize,pastefromword,pastetext,removeformat,resize,sourcearea,specialchar,stylescombo,tab,templates,toolbar,undo,wysiwygarea",CKEDITOR.config.skin = "moono",function () {
        var e = function (e, t) {
            var n = CKEDITOR.getUrl("plugins/" + t);
            e = e.split(",");
            for (var i = 0; i < e.length; i++)CKEDITOR.skin.icons[e[i]] = {path: n, offset: -e[++i], bgsize: e[++i]}
        };
        CKEDITOR.env.hidpi ? e("about,0,,bold,24,,italic,48,,strike,72,,subscript,96,,superscript,120,,underline,144,,bidiltr,168,,bidirtl,192,,blockquote,216,,copy-rtl,240,,copy,264,,cut-rtl,288,,cut,312,,paste-rtl,336,,paste,360,,codesnippet,384,,bgcolor,408,,textcolor,432,,creatediv,456,,docprops-rtl,480,,docprops,504,,find-rtl,528,,find,552,,replace,576,,flash,600,,button,624,,checkbox,648,,form,672,,hiddenfield,696,,imagebutton,720,,radio,744,,select-rtl,768,,select,792,,textarea-rtl,816,,textarea,840,,textfield-rtl,864,,textfield,888,,horizontalrule,912,,iframe,936,,image,960,,indent-rtl,984,,indent,1008,,outdent-rtl,1032,,outdent,1056,,justifyblock,1080,,justifycenter,1104,,justifyleft,1128,,justifyright,1152,,language,1176,,anchor-rtl,1200,,anchor,1224,,link,1248,,unlink,1272,,bulletedlist-rtl,1296,,bulletedlist,1320,,numberedlist-rtl,1344,,numberedlist,1368,,mathjax,1392,,maximize,1416,,newpage-rtl,1440,,newpage,1464,,pagebreak-rtl,1488,,pagebreak,1512,,pastefromword-rtl,1536,,pastefromword,1560,,pastetext-rtl,1584,,pastetext,1608,,placeholder,1632,,preview-rtl,1656,,preview,1680,,print,1704,,removeformat,1728,,save,1752,,selectall,1776,,showblocks-rtl,1800,,showblocks,1824,,smiley,1848,,source-rtl,1872,,source,1896,,sourcedialog-rtl,1920,,sourcedialog,1944,,specialchar,1968,,table,1992,,templates-rtl,2016,,templates,2040,,uicolor,2064,,redo-rtl,2088,,redo,2112,,undo-rtl,2136,,undo,2160,,simplebox,4368,auto", "icons_hidpi.png") : e("about,0,auto,bold,24,auto,italic,48,auto,strike,72,auto,subscript,96,auto,superscript,120,auto,underline,144,auto,bidiltr,168,auto,bidirtl,192,auto,blockquote,216,auto,copy-rtl,240,auto,copy,264,auto,cut-rtl,288,auto,cut,312,auto,paste-rtl,336,auto,paste,360,auto,codesnippet,384,auto,bgcolor,408,auto,textcolor,432,auto,creatediv,456,auto,docprops-rtl,480,auto,docprops,504,auto,find-rtl,528,auto,find,552,auto,replace,576,auto,flash,600,auto,button,624,auto,checkbox,648,auto,form,672,auto,hiddenfield,696,auto,imagebutton,720,auto,radio,744,auto,select-rtl,768,auto,select,792,auto,textarea-rtl,816,auto,textarea,840,auto,textfield-rtl,864,auto,textfield,888,auto,horizontalrule,912,auto,iframe,936,auto,image,960,auto,indent-rtl,984,auto,indent,1008,auto,outdent-rtl,1032,auto,outdent,1056,auto,justifyblock,1080,auto,justifycenter,1104,auto,justifyleft,1128,auto,justifyright,1152,auto,language,1176,auto,anchor-rtl,1200,auto,anchor,1224,auto,link,1248,auto,unlink,1272,auto,bulletedlist-rtl,1296,auto,bulletedlist,1320,auto,numberedlist-rtl,1344,auto,numberedlist,1368,auto,mathjax,1392,auto,maximize,1416,auto,newpage-rtl,1440,auto,newpage,1464,auto,pagebreak-rtl,1488,auto,pagebreak,1512,auto,pastefromword-rtl,1536,auto,pastefromword,1560,auto,pastetext-rtl,1584,auto,pastetext,1608,auto,placeholder,1632,auto,preview-rtl,1656,auto,preview,1680,auto,print,1704,auto,removeformat,1728,auto,save,1752,auto,selectall,1776,auto,showblocks-rtl,1800,auto,showblocks,1824,auto,smiley,1848,auto,source-rtl,1872,auto,source,1896,auto,sourcedialog-rtl,1920,auto,sourcedialog,1944,auto,specialchar,1968,auto,table,1992,auto,templates-rtl,2016,auto,templates,2040,auto,uicolor,2064,auto,redo-rtl,2088,auto,redo,2112,auto,undo-rtl,2136,auto,undo,2160,auto,simplebox,2184,auto", "icons.png")
    }())
})();
CKEDITOR.env.isCompatible = true;