webpackJsonp(["app/js/question-manage/form/index"], {
    b13eefde5dd7af09b834: function (e, t, a) {
        "use strict";
        function n(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        function i(e, t) {
            if (!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return !t || "object" != typeof t && "function" != typeof t ? e : t
        }

        function r(e, t) {
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

        function u(e, t, a, n, o) {
            var i = {
                optionId: Math.random().toString().replace(".", ""),
                optionLabel: "选项" + (0, w.numberConvertLetter)(n),
                inputValue: t,
                checked: o
            };
            a.Options[i.optionId] = t.length > 0 ? 1 : 0, o && (a.checkedNum += 1), e.push(i)
        }

        function s(e, t, a) {
            for (var n = 0; n < e.length; n++)e[n].optionId == a ? (e[n].checked && (t.checkedNum = 0), e.splice(n, 1), delete t.Options[a], n--) : e[n].optionLabel = "选项" + (0, w.numberConvertLetter)(n + 1)
        }

        function l(e, t, a, n, o) {
            var i = 0;
            e.map(function (t, r) {
                o ? t.optionId != a || n ? n || (e[r].checked = !1) : e[r].checked = !0 : t.optionId == a && (e[r].checked = !n), e[r].checked && i++
            }), t.checkedNum = i
        }

        function c(e, t, a, n) {
            e.map(function (t, o) {
                t.optionId == a && (e[o].inputValue = n)
            })
        }

        Object.defineProperty(t, "__esModule", {value: !0});
        var d = function () {
                function e(e, t) {
                    for (var a = 0; a < t.length; a++) {
                        var n = t[a];
                        n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                    }
                }

                return function (t, a, n) {
                    return a && e(t.prototype, a), n && e(t, n), t
                }
            }(), f = a("33a776824bec073629e5"), p = n(f), h = a("e7f6be29a6dce7725ed1"), b = n(h),
            m = a("b334fd7e4c5a19234db2"), y = n(m), v = a("ae88c18278ce1387fd20"), g = n(v),
            w = a("3c398f87808202f19beb"), _ = function (e) {
                function t(e) {
                    o(this, t);
                    var a = i(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this, e));
                    a.state = {dataSource: [], isValidator: !1}, a.validatorDatas = {checkedNum: 0, Options: {}};
                    var n = a.props.dataSource, r = a.props.dataAnswer;
                    if (n.length > 0) n.map(function (e, t) {
                        for (var n = !1, o = 0; o < r.length; o++)t == r[o] && (n = !0);
                        u(a.state.dataSource, e, a.validatorDatas, t + 1, n)
                    }); else for (var s = 1; s <= a.props.defaultNum; s++)u(a.state.dataSource, "", a.validatorDatas, s, !1);
                    return a.subscriptionMessage(), a
                }

                return r(t, e), d(t, [{
                    key: "subscriptionMessage", value: function () {
                        var e = this;
                        g.default.subscribe({
                            channel: "manage-question",
                            topic: "question-create-form-validator-start",
                            callback: function (t, a) {
                                e.validatorOptions(t)
                            }
                        })
                    }
                }, {
                    key: "publishMessage", value: function (e) {
                        g.default.publish({
                            channel: "manage-question",
                            topic: "question-create-form-validator-end",
                            data: {isValidator: e}
                        })
                    }
                }, {
                    key: "validatorOptions", value: function (e) {
                        var t = 0;
                        this.setState({isValidator: e.isValidator});
                        for (var a in this.validatorDatas.Options)t += this.validatorDatas.Options[a];
                        t < this.state.dataSource.length || (this.validatorDatas.checkedNum < this.props.minCheckedNum ? (0, y.default)("danger", "至少选择" + this.props.minCheckedNum + "个答案!") : this.publishMessage(!0))
                    }
                }, {
                    key: "addOption", value: function () {
                        return this.state.dataSource.length >= this.props.maxNum ? void(0, y.default)("danger", "选项最多" + this.props.maxNum + "个!") : (u(this.state.dataSource, "", this.validatorDatas, this.state.dataSource.length + 1, !1), void this.setState({dataSource: this.state.dataSource}))
                    }
                }, {
                    key: "changeOptionChecked", value: function (e, t) {
                        l(this.state.dataSource, this.validatorDatas, e, t, this.props.isRadio), this.setState({dataSource: this.state.dataSource}), this.validatorDatas.checkedNum <= 0 && this.publishMessage(!1)
                    }
                }, {
                    key: "deleteOption", value: function (e) {
                        return this.state.dataSource.length <= this.props.minNum ? void(0, y.default)("danger", "选项最少" + this.props.minNum + "个!") : (s(this.state.dataSource, this.validatorDatas, e), void this.setState({dataSource: this.state.dataSource}))
                    }
                }, {
                    key: "updateInputValue", value: function (e, t) {
                        c(this.state.dataSource, this.validatorDatas, e, t), this.validatorDatas.Options[e] = t.length > 0 ? 1 : 0, t.length <= 0 && this.publishMessage(!1), this.setState({dataSource: this.state.dataSource})
                    }
                }, {
                    key: "render", value: function () {
                        var e = this;
                        return p.default.createElement("div", {className: "question-options-group"}, this.state.dataSource.map(function (t, a) {
                            return p.default.createElement(b.default, {
                                imageUploadUrl: e.props.imageUploadUrl,
                                imageDownloadUrl: e.props.imageDownloadUrl,
                                isRadio: e.props.isRadio,
                                publishMessage: function (t) {
                                    return e.publishMessage(t)
                                },
                                validatorDatas: e.validatorDatas,
                                isValidator: e.state.isValidator,
                                datas: t,
                                key: a,
                                index: a,
                                deleteOption: function (t) {
                                    return e.deleteOption(t)
                                },
                                changeOptionChecked: function (t, a) {
                                    return e.changeOptionChecked(t, a)
                                },
                                updateInputValue: function (t, a) {
                                    return e.updateInputValue(t, a)
                                }
                            })
                        }), p.default.createElement("div", {className: "form-group"}, p.default.createElement("div", {className: "col-md-8 col-md-offset-2"}, p.default.createElement("a", {
                            className: "btn btn-success btn-sm pull-right",
                            onClick: function () {
                                return e.addOption()
                            }
                        }, "新增选项"))))
                    }
                }]), t
            }(f.Component);
        t.default = _, _.defaultProps = {defaultNum: 4, maxNum: 10, minNum: 2, isRadio: !1, minCheckedNum: 1}
    }, "5a8ff9f4ed340a8713f6": function (e, t, a) {
        "use strict";
        function n(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        function i(e, t) {
            if (!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return !t || "object" != typeof t && "function" != typeof t ? e : t
        }

        function r(e, t) {
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
        var u = function () {
                function e(e, t) {
                    for (var a = 0; a < t.length; a++) {
                        var n = t[a];
                        n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                    }
                }

                return function (t, a, n) {
                    return a && e(t.prototype, a), n && e(t, n), t
                }
            }(), s = a("2cf47b8094e4851a7f1f"), l = n(s), c = a("5fdcf1aea784583ca083"), d = n(c),
            f = a("33a776824bec073629e5"), p = n(f), h = a("b13eefde5dd7af09b834"), b = n(h), m = function (e) {
                function t() {
                    return o(this, t), i(this, (t.__proto__ || Object.getPrototypeOf(t)).apply(this, arguments))
                }

                return r(t, e), u(t, [{
                    key: "initOptions", value: function () {
                        d.default.render(p.default.createElement(b.default, {
                            imageUploadUrl: this.imageUploadUrl,
                            imageDownloadUrl: this.imageDownloadUrl,
                            dataSource: this.dataSource,
                            dataAnswer: this.dataAnswer
                        }), document.getElementById("question-options"))
                    }
                }]), t
            }(l.default);
        t.default = m
    }, d5fb0e67d2d4c1ebaaed: function (e, t, a) {
        "use strict";
        function n(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(t, "__esModule", {value: !0});
        var i = function () {
            function e(e, t) {
                for (var a = 0; a < t.length; a++) {
                    var n = t[a];
                    n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                }
            }

            return function (t, a, n) {
                return a && e(t.prototype, a), n && e(t, n), t
            }
        }(), r = a("b334fd7e4c5a19234db2"), u = n(r), s = function () {
            function e(t) {
                o(this, e), this.$ele = t, this.initEvent()
            }

            return i(e, [{
                key: "initEvent", value: function () {
                    var e = this;
                    this.$ele.on("click", '[data-role="delte-item"]', function (t) {
                        return e._deleteItem(t)
                    })
                }
            }, {
                key: "_deleteItem", value: function (e) {
                    var t = $(e.currentTarget).button("loading");
                    $.post(t.data("url"), {}, function (e) {
                        "ok" == e.msg && ((0, u.default)("success", Translator.trans("删除成功！")), t.closest(".js-attachment-list").siblings(".js-upload-file").show(), t.closest(".js-attachment-list").closest("div").siblings('[data-role="fileId"]').val(""), t.closest("div").remove(), $(".js-upload-file").show())
                    })
                }
            }]), e
        }();
        t.default = s
    }, 0: function (e, t, a) {
        "use strict";
        function n(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        var i = function () {
                function e(e, t) {
                    for (var a = 0; a < t.length; a++) {
                        var n = t[a];
                        n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                    }
                }

                return function (t, a, n) {
                    return a && e(t.prototype, a), n && e(t, n), t
                }
            }(), r = a("fed3b995e613c074e80b"), u = n(r), s = a("2cf47b8094e4851a7f1f"), l = n(s),
            c = a("e85a87f5cf404e5d12c1"), d = n(c), f = a("5a8ff9f4ed340a8713f6"), p = n(f),
            h = a("3c1fcf442037b440aea5"), b = n(h), m = a("228720083c8f03b23e6d"), y = n(m),
            v = a("7fed9bfb1a62b2d3ee74"), g = n(v), w = a("d10d1a490b8cc019f3a3"), _ = n(w),
            O = a("1be2a74362f00ba903a0"), k = n(O), E = function () {
                function e() {
                    o(this, e)
                }

                return i(e, null, [{
                    key: "getCreator", value: function (t, a) {
                        switch (t) {
                            case"single_choice":
                                e = new d.default(a);
                                break;
                            case"uncertain_choice":
                                e = new p.default(a);
                                break;
                            case"choice":
                                e = new l.default(a);
                                break;
                            case"determine":
                                e = new b.default(a);
                                break;
                            case"essay":
                                e = new g.default(a);
                                break;
                            case"fill":
                                e = new y.default(a);
                                break;
                            case"material":
                                e = new _.default(a);
                                break;
                            default:
                                e = new u.default(a), e.initTitleEditor(), e.initAnalysisEditor()
                        }
                        return e
                    }
                }]), e
            }(), j = $('[data-role="question-form"]'), S = $('[data-role="question-form"]').find('[name="type"]').val();
        E.getCreator(S, j), new k.default($('[data-role="courseId"]'), $('[data-role="lessonId"]'))
    }, fed3b995e613c074e80b: function (e, t, a) {
        "use strict";
        function n(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(t, "__esModule", {value: !0});
        var i = function () {
            function e(e, t) {
                for (var a = 0; a < t.length; a++) {
                    var n = t[a];
                    n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                }
            }

            return function (t, a, n) {
                return a && e(t.prototype, a), n && e(t, n), t
            }
        }(), r = a("d5fb0e67d2d4c1ebaaed"), u = n(r), s = function () {
            function e(t) {
                o(this, e), this.$form = t, this.titleFieldId = "question-stem-field", this.analysisFieldId = "question-analysis-field", this.validator = null, this.titleEditorToolBarName = "Minimal", this._init(), this.attachmentActions = new u.default(t)
            }

            return i(e, [{
                key: "_init", value: function () {
                    this._initEvent(), this._initValidate()
                }
            }, {
                key: "_initEvent", value: function () {
                    var e = this;
                    this.$form.on("click", "[data-role=submit]", function (t) {
                        return e.submitForm(t)
                    })
                }
            }, {
                key: "submitForm", value: function (e) {
                    var t = $(e.currentTarget).data("submission");
                    this.$form.find("[name=submission]").val(t);
                    var a = this;
                    this.validator.form() && ($(e.currentTarget).button("loading"), a.$form.submit())
                }
            }, {
                key: "_initValidate", value: function () {
                    var e = this.$form.validate({
                        onkeyup: !1,
                        rules: {
                            '[data-role="target"]': {required: !0},
                            difficulty: {required: !0},
                            stem: {required: !0},
                            score: {required: !0, number: !0, max: 999, min: 0}
                        },
                        messages: {'[data-role="target"]': "请选择从属", difficulty: "请选择难度"}
                    });
                    this.validator = e
                }
            }, {
                key: "initTitleEditor", value: function (e) {
                    var t = $("#" + this.titleFieldId), a = CKEDITOR.replace(this.titleFieldId, {
                        toolbar: this.titleEditorToolBarName,
                        filebrowserImageUploadUrl: t.data("imageUploadUrl"),
                        height: t.height()
                    });
                    a.on("change", function () {
                        t.val(a.getData()), e.form()
                    }), a.on("blur", function () {
                        t.val(a.getData()), e.form()
                    })
                }
            }, {
                key: "initAnalysisEditor", value: function () {
                    var e = $("#" + this.analysisFieldId), t = CKEDITOR.replace(this.analysisFieldId, {
                        toolbar: this.titleEditorToolBarName,
                        filebrowserImageUploadUrl: e.data("imageUploadUrl"),
                        height: e.height()
                    });
                    t.on("change", function () {
                        e.val(t.getData())
                    })
                }
            }, {
                key: "titleEditorToolBarName", set: function (e) {
                    this._titleEditorToolBarName = e
                }, get: function () {
                    return this._titleEditorToolBarName
                }
            }]), e
        }();
        t.default = s
    }, "2cf47b8094e4851a7f1f": function (e, t, a) {
        "use strict";
        function n(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        function i(e, t) {
            if (!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return !t || "object" != typeof t && "function" != typeof t ? e : t
        }

        function r(e, t) {
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
        var u = function () {
                function e(e, t) {
                    for (var a = 0; a < t.length; a++) {
                        var n = t[a];
                        n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                    }
                }

                return function (t, a, n) {
                    return a && e(t.prototype, a), n && e(t, n), t
                }
            }(), s = a("fed3b995e613c074e80b"), l = n(s), c = a("5fdcf1aea784583ca083"), d = n(c),
            f = a("33a776824bec073629e5"), p = n(f), h = a("b13eefde5dd7af09b834"), b = n(h),
            m = a("ae88c18278ce1387fd20"), y = n(m), v = function (e) {
                function t(e) {
                    o(this, t);
                    var a = i(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this, e));
                    return a.isSubmit = !1, a.$submit = null, a.$questionOptions = $("#question-options"), a.dataSource = a.$questionOptions.data("choices"), a.dataAnswer = a.$questionOptions.data("answer"), a.dataSource ? (a.dataSource = JSON.parse(a.dataSource), a.dataAnswer = JSON.parse(a.dataAnswer)) : (a.dataSource = [], a.dataAnswer = []), a.imageUploadUrl = a.$questionOptions.data("imageUploadUrl"), a.imageDownloadUrl = a.$questionOptions.data("imageDownloadUrl"), a.initTitleEditor(a.validator), a.initAnalysisEditor(), a.initOptions(), a.subscriptionMessage(), a
                }

                return r(t, e), u(t, [{
                    key: "_initEvent", value: function () {
                        var e = this;
                        this.$form.on("click", "[data-role=submit]", function (t) {
                            return e.submitForm(t)
                        })
                    }
                }, {
                    key: "submitForm", value: function (e) {
                        this.$submit = $(e.currentTarget);
                        var t = this.$submit.data("submission");
                        this.$form.find("[name=submission]").val(t), this.validator.form() && this.isSubmit && this.submit(), this.isSubmit || this.publishMessage()
                    }
                }, {
                    key: "submit", value: function () {
                        this.$submit.button("loading"), this.$form.submit()
                    }
                }, {
                    key: "initOptions", value: function () {
                        d.default.render(p.default.createElement(b.default, {
                            imageUploadUrl: this.imageUploadUrl,
                            imageDownloadUrl: this.imageDownloadUrl,
                            dataSource: this.dataSource,
                            dataAnswer: this.dataAnswer,
                            minCheckedNum: 2
                        }), document.getElementById("question-options"))
                    }
                }, {
                    key: "publishMessage", value: function () {
                        y.default.publish({
                            channel: "manage-question",
                            topic: "question-create-form-validator-start",
                            data: {isValidator: !0}
                        })
                    }
                }, {
                    key: "subscriptionMessage", value: function () {
                        var e = this;
                        y.default.subscribe({
                            channel: "manage-question",
                            topic: "question-create-form-validator-end",
                            callback: function (t, a) {
                                e.isSubmit = t.isValidator, e.isSubmit && e.validator.form() && e.submit()
                            }
                        })
                    }
                }]), t
            }(l.default);
        t.default = v
    }, e7f6be29a6dce7725ed1: function (e, t, a) {
        "use strict";
        function n(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        function i(e, t) {
            if (!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return !t || "object" != typeof t && "function" != typeof t ? e : t
        }

        function r(e, t) {
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
        var u = function () {
            function e(e, t) {
                for (var a = 0; a < t.length; a++) {
                    var n = t[a];
                    n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                }
            }

            return function (t, a, n) {
                return a && e(t.prototype, a), n && e(t, n), t
            }
        }(), s = a("33a776824bec073629e5"), l = n(s), c = function (e) {
            function t(e) {
                o(this, t);
                var a = i(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this, e));
                return a.state = {datas: a.props.datas}, a.editor = null, a.editorBody = null, a.editorHtml = null, a
            }

            return r(t, e), u(t, [{
                key: "componentDidMount", value: function () {
                    this.initCkeditor()
                }
            }, {
                key: "deleteOption", value: function (e) {
                    this.editorHtml = null, this.props.deleteOption(e.currentTarget.attributes["data-option-id"].value)
                }
            }, {
                key: "onChangeChecked", value: function (e) {
                    this.updateInputValue(this.editor.getData()), this.props.changeOptionChecked(e.currentTarget.attributes["data-option-id"].value, this.props.datas.checked)
                }
            }, {
                key: "initCkeditor", value: function (e) {
                    if (this.editor) this.editor.setData(datas.inputValue); else {
                        this.editor = CKEDITOR.replace(this.props.datas.optionId, {
                            toolbar: "Minimal",
                            filebrowserImageUploadUrl: this.props.imageUploadUrl,
                            height: 120
                        });
                        var t = this;
                        this.editor.on("instanceReady", function () {
                            t.editorBody = $("#" + [t.props.datas.optionId]).parent().find("iframe").contents().find("body")
                        }), this.editor.on("change", function () {
                            setTimeout(function () {
                                t.updateInputValue(t.editor.getData())
                            }, 100)
                        }), this.editor.on("blur", function () {
                            setTimeout(function () {
                                t.updateInputValue(t.editor.getData())
                            }, 100)
                        })
                    }
                }
            }, {
                key: "updateInputValue", value: function (e) {
                    this.editorHtml = e, this.props.updateInputValue(this.props.datas.optionId, e)
                }
            }, {
                key: "render", value: function () {
                    var e = this, t = this.props.isValidator && this.props.datas.inputValue.length <= 0, a = "checkbox";
                    return this.props.isRadio && (a = "radio"), this.editorBody && this.editorHtml != this.props.datas.inputValue && this.editorBody.html(this.props.datas.inputValue), l.default.createElement("div", {className: "form-group"}, l.default.createElement("div", {className: "col-sm-2 control-label"}, l.default.createElement("label", {className: "choice-label control-label-required"}, this.props.datas.optionLabel)), l.default.createElement("div", {className: "col-sm-8 controls"}, l.default.createElement("textarea", {
                        className: "form-control datas-input col-md-8",
                        id: this.props.datas.optionId,
                        defaultValue: this.props.datas.inputValue,
                        name: "choices[]",
                        value: this.props.datas.inputValue,
                        "data-image-upload-url": this.props.imageUploadUrl,
                        "data-image-download-url": this.props.imageDownloadUrl
                    }), l.default.createElement("div", {className: "mtm"}, l.default.createElement("label", null, l.default.createElement("input", {
                        type: a,
                        name: "answer[]",
                        "data-option-id": this.props.datas.optionId,
                        value: this.props.index,
                        checked: this.props.datas.checked,
                        className: "answer-checkbox",
                        onChange: function (t) {
                            return e.onChangeChecked(t)
                        }
                    }), "正确答案")), l.default.createElement("p", {className: t ? "color-danger" : "hidden"}, "请输入选项内容")), l.default.createElement("div", {className: "col-sm-2"}, l.default.createElement("a", {
                        className: "btn btn-default btn-sm",
                        "data-option-id": this.props.datas.optionId,
                        onClick: function (t) {
                            return e.deleteOption(t)
                        },
                        href: "javascript:;"
                    }, l.default.createElement("i", {className: "glyphicon glyphicon-trash"}))))
                }
            }]), t
        }(s.Component);
        t.default = c
    }, "7fed9bfb1a62b2d3ee74": function (e, t, a) {
        "use strict";
        function n(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        function i(e, t) {
            if (!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return !t || "object" != typeof t && "function" != typeof t ? e : t
        }

        function r(e, t) {
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
        var u = function () {
            function e(e, t) {
                for (var a = 0; a < t.length; a++) {
                    var n = t[a];
                    n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                }
            }

            return function (t, a, n) {
                return a && e(t.prototype, a), n && e(t, n), t
            }
        }(), s = a("fed3b995e613c074e80b"), l = n(s), c = function (e) {
            function t(e) {
                o(this, t);
                var a = i(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this, e));
                return a.initTitleEditor(a.validator), a.initAnalysisEditor(), a.answerFieldId = "question-answer-field", a.$answerField = $("#" + a.answerFieldId), a.init(), a
            }

            return r(t, e), u(t, [{
                key: "init", value: function () {
                    var e = this;
                    this.$answerField.rules("add", {required: !0});
                    var t = CKEDITOR.replace(this.answerFieldId, {
                        toolbar: "Minimal",
                        filebrowserImageUploadUrl: this.$answerField.data("imageUploadUrl"),
                        height: this.$answerField.height()
                    });
                    t.on("change", function () {
                        e.$answerField.val(t.getData())
                    }), t.on("blur", function () {
                        e.$answerField.val(t.getData())
                    })
                }
            }]), t
        }(l.default);
        t.default = c
    }, "228720083c8f03b23e6d": function (e, t, a) {
        "use strict";
        function n(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        function i(e, t) {
            if (!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return !t || "object" != typeof t && "function" != typeof t ? e : t
        }

        function r(e, t) {
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
        var u = function () {
            function e(e, t) {
                for (var a = 0; a < t.length; a++) {
                    var n = t[a];
                    n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                }
            }

            return function (t, a, n) {
                return a && e(t.prototype, a), n && e(t, n), t
            }
        }(), s = a("fed3b995e613c074e80b"), l = n(s);
        jQuery.validator.addMethod("fillCheck", function (e, t) {
            return this.optional(t) || /(\[\[(.+?)\]\])/i.test(e)
        }, "请输入正确的答案,如今天是[[晴|阴|雨]]天");
        var c = function (e) {
            function t(e) {
                o(this, t);
                var a = i(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this, e));
                return a.titleEditorToolBarName = "Question", a.initTitleEditor(a.validator), a.initAnalysisEditor(), a.$titleField = $("#" + a.titleFieldId), a.init(), a
            }

            return r(t, e), u(t, [{
                key: "init", value: function () {
                    this.$titleField.rules("add", {fillCheck: !0})
                }
            }]), t
        }(l.default);
        t.default = c
    }, d10d1a490b8cc019f3a3: function (e, t, a) {
        "use strict";
        function n(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        function i(e, t) {
            if (!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return !t || "object" != typeof t && "function" != typeof t ? e : t
        }

        function r(e, t) {
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
        var u = a("fed3b995e613c074e80b"), s = n(u), l = function (e) {
            function t(e) {
                o(this, t);
                var a = i(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this, e));
                return a.initTitleEditor(a.validator), a.initAnalysisEditor(), a
            }

            return r(t, e), t
        }(s.default);
        t.default = l
    }, e85a87f5cf404e5d12c1: function (e, t, a) {
        "use strict";
        function n(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        function i(e, t) {
            if (!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return !t || "object" != typeof t && "function" != typeof t ? e : t
        }

        function r(e, t) {
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
        var u = function () {
                function e(e, t) {
                    for (var a = 0; a < t.length; a++) {
                        var n = t[a];
                        n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                    }
                }

                return function (t, a, n) {
                    return a && e(t.prototype, a), n && e(t, n), t
                }
            }(), s = a("2cf47b8094e4851a7f1f"), l = n(s), c = a("5fdcf1aea784583ca083"), d = n(c),
            f = a("33a776824bec073629e5"), p = n(f), h = a("b13eefde5dd7af09b834"), b = n(h), m = function (e) {
                function t() {
                    return o(this, t), i(this, (t.__proto__ || Object.getPrototypeOf(t)).apply(this, arguments))
                }

                return r(t, e), u(t, [{
                    key: "initOptions", value: function () {
                        d.default.render(p.default.createElement(b.default, {
                            imageUploadUrl: this.imageUploadUrl,
                            imageDownloadUrl: this.imageDownloadUrl,
                            dataSource: this.dataSource,
                            dataAnswer: this.dataAnswer,
                            isRadio: !0
                        }), document.getElementById("question-options"))
                    }
                }]), t
            }(l.default);
        t.default = m
    }, "3c1fcf442037b440aea5": function (e, t, a) {
        "use strict";
        function n(e) {
            return e && e.__esModule ? e : {default: e}
        }

        function o(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        function i(e, t) {
            if (!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return !t || "object" != typeof t && "function" != typeof t ? e : t
        }

        function r(e, t) {
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
        var u = function () {
            function e(e, t) {
                for (var a = 0; a < t.length; a++) {
                    var n = t[a];
                    n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                }
            }

            return function (t, a, n) {
                return a && e(t.prototype, a), n && e(t, n), t
            }
        }(), s = a("fed3b995e613c074e80b"), l = n(s), c = function (e) {
            function t(e) {
                o(this, t);
                var a = i(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this, e));
                return a.initTitleEditor(a.validator), a.initAnalysisEditor(), a.$answerField = $('[name="answer[]"]'), a.init(), a
            }

            return r(t, e), u(t, [{
                key: "init", value: function () {
                    this.$answerField.rules("add", {required: !0, messages: {required: Translator.trans("请输入正确答案")}})
                }
            }]), t
        }(l.default);
        t.default = c
    }
});