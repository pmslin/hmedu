webpackJsonp(["app/js/task/index"], {
    d14d05cad9e7abf02a5d: function (e, t) {
        "use strict";
        Object.defineProperty(t, "__esModule", {value: !0});
        var n = t.toggleIcon = function (e, t, n) {
            var a = e.find(".js-remove-icon"), i = e.find(".js-remove-text");
            a.hasClass(t) ? (a.removeClass(t).addClass(n), i ? i.text(Translator.trans("收起")) : "") : (a.removeClass(n).addClass(t), i ? i.text(Translator.trans("展开")) : "")
        };
        t.chapterAnimate = function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "body",
                t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : ".js-task-chapter",
                a = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "es-icon-remove",
                i = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : "es-icon-anonymous-iconfont";
            $(e).on("click", t, function (e) {
                var r = $(e.currentTarget);
                r.nextUntil(t).animate({height: "toggle", opacity: "toggle"}, "normal"), n(r, a, i)
            })
        }
    }, 0: function (e, t, n) {
        "use strict";
        function a(e) {
            return e && e.__esModule ? e : {default: e}
        }

        var i = n("2cb4f005d1a3626b7504"), r = a(i);
        new r.default({element: $("body"), mode: $("body").find('#js-hidden-data [name="mode"]').val()})
    }, "2cb4f005d1a3626b7504": function (e, t, n) {
        "use strict";
        function a(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function i(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        function r(e, t) {
            if (!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return !t || "object" != typeof t && "function" != typeof t ? e : t
        }

        function o(e, t) {
            if ("function" != typeof t && null !== t)throw new TypeError("Super expression must either be null or a function, not " + typeof t);
            e.prototype = Object.create(t && t.prototype, {
                constructor: {
                    value: e,
                    enumerable: !1,
                    writable: !0,
                    configurable: !0
                }
            }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
        }

        Object.defineProperty(t, "__esModule", {value: !0});
        var l = function () {
                function e(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var a = t[n];
                        a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                    }
                }

                return function (t, n, a) {
                    return n && e(t.prototype, n), a && e(t, a), t
                }
            }(), s = n("5f0af4efa4df981e1cb2"), u = a(s), d = n("8564292a81bb30f6618a"), c = a(d),
            f = n("d1f69fe143d8968fb6c3"), h = a(f), p = n("63fff8fb24f3bd1f61cd"), v = a(p), b = function (e) {
                function t(e) {
                    var n = e.element, a = e.mode;
                    i(this, t);
                    var o = r(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this));
                    return o.element = $(n), o.mode = a, o.ui = new c.default({element: ".js-task-dashboard-page"}), o.init(), o
                }

                return o(t, e), l(t, [{
                    key: "init", value: function () {
                        this.initPlugin(), this.initSidebar(), "preview" != this.mode && (this.initTaskPipe(), this.initLearnBtn())
                    }
                }, {
                    key: "initPlugin", value: function () {
                        $('[data-toggle="tooltip"]').tooltip(), $('[data-toggle="popover"]').popover({
                            html: !0,
                            trigger: "hover"
                        })
                    }
                }, {
                    key: "initLearnBtn", value: function () {
                        var e = this;
                        this.element.on("click", "#learn-btn", function (t) {
                            $.post($("#learn-btn").data("url"), function (t) {
                                $("#modal").modal("show"), $("#modal").html(t), $('input[name="task-result-status"]', $("#js-hidden-data")).val("finish");
                                var n = $(".js-next-mobile-btn");
                                n.data("url") && n.removeClass("disabled").attr("href", n.data("url")), e.ui.learned()
                            })
                        })
                    }
                }, {
                    key: "initTaskPipe", value: function () {
                        var e = this;
                        this.eventEmitter = new h.default(this.element.find("#task-content-iframe")), this.eventEmitter.addListener("finish", function (t) {
                            e._receiveFinish(t)
                        })
                    }
                }, {
                    key: "_receiveFinish", value: function (e) {
                        var t = this;
                        "finish" != $('input[name="task-result-status"]', $("#js-hidden-data")).val() && $.get($(".js-learned-prompt").data("url"), function (e) {
                            $(".js-learned-prompt").attr("data-content", e), t.ui.learnedWeakPrompt(), t.ui.learned(), t.sidebar.reload();
                            var n = $(".js-next-mobile-btn");
                            n.data("url") && n.removeClass("disabled").attr("href", n.data("url")), $('input[name="task-result-status"]', $("#js-hidden-data")).val("finish")
                        })
                    }
                }, {
                    key: "initSidebar", value: function () {
                        var e = this;
                        this.sidebar = new u.default({
                            element: this.element.find("#dashboard-sidebar"),
                            url: this.element.find('#js-hidden-data [name="plugins_url"]').val()
                        }), this.sidebar.on("popup", function (t, n) {
                            e.element.find("#dashboard-content").animate({right: t}, n)
                        }).on("fold", function (t, n) {
                            e.element.find("#dashboard-content").animate({right: t}, n)
                        })
                    }
                }]), t
            }(v.default);
        t.default = b
    }, "5f0af4efa4df981e1cb2": function (e, t, n) {
        "use strict";
        function a(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function i(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        function r(e, t) {
            if (!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return !t || "object" != typeof t && "function" != typeof t ? e : t
        }

        function o(e, t) {
            if ("function" != typeof t && null !== t)throw new TypeError("Super expression must either be null or a function, not " + typeof t);
            e.prototype = Object.create(t && t.prototype, {
                constructor: {
                    value: e,
                    enumerable: !1,
                    writable: !0,
                    configurable: !0
                }
            }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
        }

        Object.defineProperty(t, "__esModule", {value: !0});
        var l = function () {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var a = t[n];
                    a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                }
            }

            return function (t, n, a) {
                return n && e(t.prototype, n), a && e(t, a), t
            }
        }(), s = n("17c25dd7d9d2615bc1d9"), u = a(s), d = n("d14d05cad9e7abf02a5d"), c = function (e) {
            function t(e) {
                var n = e.element, a = e.url;
                i(this, t);
                var o = r(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this));
                return o.url = a, o.isManualOperation = !0, o.element = $(n), o.init(), o
            }

            return o(t, e), l(t, [{
                key: "init", value: function () {
                    var e = this;
                    this.fixIconInChrome(), this.fetchPlugins().then(function (t) {
                        e.plugins = t, e.renderToolbar(), e.renderPane(), e.element.hide().show(), e.bindEvent()
                    }).fail(function (e) {
                    })
                }
            }, {
                key: "fetchPlugins", value: function () {
                    return $.post(this.url)
                }
            }, {
                key: "fixIconInChrome", value: function () {
                    var e = '<i class="es-icon es-icon-chevronleft"></i>';
                    this.element.html(e)
                }
            }, {
                key: "renderToolbar", value: function () {
                    var e = '\n    <div class="dashboard-toolbar">\n      <ul class="dashboard-toolbar-nav" id="dashboard-toolbar-nav">\n        ' + this.plugins.reduce(function (e, t) {
                            return e += '<li data-plugin="' + t.code + '" data-url="' + t.url + '"><a href="#"><div class="mbs es-icon ' + t.icon + '"></div>' + t.name + "</a></li>"
                        }, "") + "\n      </ul>\n    </div>";
                    this.element.html(e)
                }
            }, {
                key: "renderPane", value: function () {
                    var e = this.plugins.reduce(function (e, t) {
                        return e += '<div data-pane="' + t.code + '" class=" ' + t.code + '-pane js-sidebar-pane" ><div class="' + t.code + '-pane-body js-sidebar-pane-body"></div></div>'
                    }, "");
                    this.element.append(e)
                }
            }, {
                key: "bindEvent", value: function () {
                    var e = this;
                    this.element.find("#dashboard-toolbar-nav").on("click", "li", function (t) {
                        var n = $(t.currentTarget), a = n.data("plugin"), i = n.data("url"),
                            r = e.element.find('[data-pane="' + a + '"]'), o = r.find(".js-sidebar-pane-body");
                        void 0 !== a && void 0 !== i && (e.isManualOperation && e.operationContent(n), n.data("loaded") || $.get(i).then(function (t) {
                            o.html(t), r.perfectScrollbar(), n.data("loaded", !0), e.listEvent(), e.isManualOperation = !0
                        }))
                    })
                }
            }, {
                key: "operationContent", value: function (e) {
                    e.hasClass("active") ? (this.foldContent(), e.removeClass("active"), $(".dashboard-sidebar").removeClass("spread")) : (this.element.find("#dashboard-toolbar-nav li").removeClass("active"), e.addClass("active"), this.element.find("[data-pane]").hide(), this.element.find('[data-pane="' + e.data("plugin") + '"]').show(), this.popupContent(), $(".dashboard-sidebar").addClass("spread"))
                }
            }, {
                key: "popupContent", value: function () {
                    var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 500, t = "0px",
                        n = $("#dashboard-sidebar").width(), a = n + 35 + "px";
                    this.emit("popup", a, e), this.element.animate({right: t}, e)
                }
            }, {
                key: "foldContent", value: function () {
                    var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 500,
                        t = "-" + this.element.width() + "px", n = "35px";
                    this.emit("fold", n, e), this.element.animate({right: t}, e)
                }
            }, {
                key: "reload", value: function () {
                    this.isManualOperation = !1;
                    var e = this.element.find(".js-sidebar-pane:visible"), t = e.data("pane");
                    e.undelegate(), this.element.find("#dashboard-toolbar-nav").children('[data-plugin="' + t + '"]').data("loaded", !1).click()
                }
            }, {
                key: "listEvent", value: function () {
                    $(".js-sidebar-pane:visible .task-list-pane-body").length && (0, d.chapterAnimate)()
                }
            }]), t
        }(u.default);
        t.default = c
    }, d1f69fe143d8968fb6c3: function (e, t, n) {
        "use strict";
        function a(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function i(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(t, "__esModule", {value: !0});
        var r = function () {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var a = t[n];
                    a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                }
            }

            return function (t, n, a) {
                return n && e(t.prototype, n), a && e(t, a), t
            }
        }(), o = n("ae88c18278ce1387fd20"), l = a(o);
        n("ee979a31290c346a6f6f"), n("0f47cc4efffe23ee2a60");
        var s = function () {
            function e(t) {
                if (i(this, e), this.element = $(t), this.eventUrl = this.element.data("eventUrl"), void 0 === this.eventUrl)throw Error("task event url is undefined");
                this.eventDatas = {}, this.intervalId = null, this.lastTime = this.element.data("lastTime"), this.eventMap = {receives: {}}, this._registerChannel(), this._initInterval()
            }

            return r(e, [{
                key: "_registerChannel", value: function () {
                    var e = this;
                    return l.default.instanceId("task"), l.default.fedx.addFilter([{
                        channel: "activity-events",
                        topic: "#",
                        direction: "in"
                    }, {
                        channel: "task-events",
                        topic: "#",
                        direction: "out"
                    }]), l.default.subscribe({
                        channel: "activity-events", topic: "#", callback: function (t) {
                            var n = t.event, a = t.data;
                            e.eventDatas[n] = a, e._flush()
                        }
                    }), this
                }
            }, {
                key: "_initInterval", value: function () {
                    var e = this;
                    window.onbeforeunload = function () {
                        e._clearInterval(), e._flush()
                    }, this._clearInterval();
                    var t = 6e4;
                    this.intervalId = setInterval(function () {
                        return e._flush()
                    }, t)
                }
            }, {
                key: "_clearInterval", value: function () {
                    clearInterval(this.intervalId)
                }
            }, {
                key: "_flush", value: function () {
                    var e = this, t = $.post(this.eventUrl, {
                        data: {
                            lastTime: this.lastTime,
                            events: this.eventDatas
                        }
                    }).done(function (t) {
                        if (e._publishResponse(t), e.eventDatas = {}, e.lastTime = t.lastTime, t && t.result && t.result.status) {
                            var n = e.eventMap.receives[t.result.status];
                            if (n)for (var a = n.length - 1; a >= 0; a--) {
                                var i = n[a];
                                i(t)
                            }
                        }
                    }).fail(function (e) {
                    });
                    return t
                }
            }, {
                key: "_publishResponse", value: function (e) {
                    l.default.publish({channel: "task-events", topic: "#", data: {event: e.event, data: e.data}})
                }
            }, {
                key: "addListener", value: function (e, t) {
                    this.eventMap.receives[e] = this.eventMap.receives[e] || [], this.eventMap.receives[e].push(t)
                }
            }]), e
        }();
        t.default = s
    }, "8564292a81bb30f6618a": function (e, t) {
        "use strict";
        function n(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(t, "__esModule", {value: !0});
        var a = function () {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var a = t[n];
                    a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                }
            }

            return function (t, n, a) {
                return n && e(t.prototype, n), a && e(t, a), t
            }
        }(), i = function () {
            function e(t) {
                n(this, e), this.element = $(t.element), this.learningPrompt = this.element.find(".js-learning-prompt"), this.learnedPrompt = this.element.find(".js-learned-prompt"), this.learnprompt = this.element.find(".js-learn-prompt"), this.btnLearn = this.element.find(".js-btn-learn")
            }

            return a(e, [{
                key: "learnedWeakPrompt", value: function () {
                    var e = this;
                    this.learnprompt.removeClass("open"), this.learningPrompt.addClass("moveup"), window.setTimeout(function () {
                        e.learningPrompt.removeClass("moveup"), e.learnedPrompt.addClass("moveup"), e.learnedPrompt.popover("show"), window.setTimeout(function () {
                            e.learnedPrompt.popover("hide")
                        }, 2e3)
                    }, 2e3)
                }
            }, {
                key: "learned", value: function () {
                    this.btnLearn.addClass("active")
                }
            }]), e
        }();
        t.default = i
    }, "63fff8fb24f3bd1f61cd": function (e, t, n) {
        "use strict";
        function a(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function i(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        function r(e, t) {
            if (!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return !t || "object" != typeof t && "function" != typeof t ? e : t
        }

        function o(e, t) {
            if ("function" != typeof t && null !== t)throw new TypeError("Super expression must either be null or a function, not " + typeof t);
            e.prototype = Object.create(t && t.prototype, {
                constructor: {
                    value: e,
                    enumerable: !1,
                    writable: !0,
                    configurable: !0
                }
            }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
        }

        Object.defineProperty(t, "__esModule", {value: !0});
        var l = function () {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var a = t[n];
                    a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                }
            }

            return function (t, n, a) {
                return n && e(t.prototype, n), a && e(t, a), t
            }
        }(), s = n("17c25dd7d9d2615bc1d9"), u = a(s), d = function (e) {
            function t() {
                return i(this, t), r(this, (t.__proto__ || Object.getPrototypeOf(t)).apply(this, arguments))
            }

            return o(t, e), l(t, [{
                key: "delay", value: function (e, t) {
                    var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0, a = function () {
                        var e = arguments;
                        setTimeout(function () {
                            t.apply(self, [].concat(Array.prototype.slice.call(e)))
                        }, n)
                    };
                    return this.on(e, a)
                }
            }, {
                key: "once", value: function (e, t) {
                    var n = this, a = function a() {
                        t.apply(n, [].concat(Array.prototype.slice.call(arguments))), n.off(e, a)
                    };
                    return this.on(e, a)
                }
            }]), t
        }(u.default);
        t.default = d
    }
});