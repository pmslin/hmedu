webpackJsonp(["app/js/testpaper-manage/questions/index"], {
    "1e0cf618bc778b8ab554": function (e, t, n) {
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
        }(), o = n("b334fd7e4c5a19234db2"), s = a(o), c = n("71e1df85d5928925f4b1"), u = function () {
            function e(t, n) {
                i(this, e), this.$form = t, this.$modal = n, this.initEvent()
            }

            return r(e, [{
                key: "initEvent", value: function () {
                    var e = this;
                    this.$form.on("click", '[data-role="item-delete-btn"]', function (t) {
                        return e.deleteQuestion(t)
                    }), this.$form.on("click", '[data-role="replace-item"]', function (t) {
                        return e.replaceQuestion(t)
                    }), this.$form.on("click", '[data-role="preview-btn"]', function (t) {
                        return e.previewQuestion(t)
                    }), this.$form.on("click", '[data-role="batch-delete-btn"]', function (t) {
                        return e.batchDelete(t)
                    }), this.initSortList()
                }
            }, {
                key: "initSortList", value: function () {
                    var e = this;
                    this.$form.find("tbody").sortable({
                        containerPath: "> tr",
                        containerSelector: "tbody",
                        itemSelector: "tr.is-question",
                        placeholder: '<tr class="placeholder"/>',
                        exclude: ".notMoveHandle",
                        onDrop: function (t, n, a) {
                            if (a(t, n), t.hasClass("have-sub-questions")) {
                                var i = t.parents("tbody");
                                i.find("tr.is-question").each(function () {
                                    var e = $(this);
                                    i.find("[data-parent-id=" + e.data("id") + "]").detach().insertAfter(e)
                                })
                            }
                            e.refreshSeqs()
                        }
                    })
                }
            }, {
                key: "replaceQuestion", value: function (e) {
                    var t = this, n = $(e.currentTarget), a = [], i = this.$form.find("tbody:visible");
                    i.find('[name="questionIds[]"]').each(function () {
                        a.push($(this).val())
                    }), this.$modal.data("manager", this).modal(), $.get(n.data("url"), {
                        excludeIds: a.join(","),
                        type: i.data("type")
                    }, function (e) {
                        t.$modal.html(e)
                    })
                }
            }, {
                key: "deleteQuestion", value: function (e) {
                    e.stopPropagation();
                    var t = $(e.currentTarget), n = t.closest("tr").data("id"), a = t.closest("tbody");
                    a.find('[data-parent-id="' + n + '"]').remove(), t.closest("tr").remove(), (0, c.questionSubjectiveRemask)(this.$form), this.refreshSeqs()
                }
            }, {
                key: "batchDelete", value: function (e) {
                    if (0 == this.$form.find('[data-role="batch-item"]:checked').length) {
                        var t = this.$form.find(".js-help-redmine");
                        t ? (t.text("请选择题目").show(), setTimeout(function () {
                            t.slideUp()
                        }, 3e3)) : (0, s.default)("danger", "请选择题目")
                    }
                    var n = this;
                    this.$form.find('[data-role="batch-item"]:checked').each(function (e, t) {
                        var a = $(this).val();
                        "material" == $(this).closest("tr").data("type") && n.$form.find('[data-parent-id="' + a + '"]').remove(), $(this).closest("tr").remove()
                    }), (0, c.questionSubjectiveRemask)(this.$form)
                }
            }, {
                key: "previewQuestion", value: function (e) {
                    e.preventDefault(), window.open($(e.currentTarget).data("url"), "_blank", "directories=0,height=580,width=820,scrollbars=1,toolbar=0,status=0,menubar=0,location=0")
                }
            }, {
                key: "refreshSeqs", value: function () {
                    var e = 1;
                    this.$form.find("tbody tr").each(function () {
                        var t = $(this);
                        t.hasClass("have-sub-questions") || (t.find("td.seq").html(e), e++)
                    }), this.$form.find('[name="questionLength"]').val(e - 1 > 0 ? e - 1 : null)
                }
            }]), e
        }();
        t.default = u
    }, "71e1df85d5928925f4b1": function (e, t) {
        "use strict";
        Object.defineProperty(t, "__esModule", {value: !0});
        t.questionSubjectiveRemask = function (e) {
            var t = !1, n = "", a = $(".js-subjective-remask");
            return e.find("tbody tr").each(function () {
                var e = $(this).data("type");
                "essay" == e && (t = !0)
            }), t ? void a.html("") : (n = "homework" == a.data("type") ? '这是一份纯客观题的作业，正确率达到为<input type="text" name="passedCondition[]" class="form-control width-input width-input-mini ph5 text-center correctPercent1" value="60" />％合格，<input type="text" name="passedCondition[]" class="form-control width-input width-input-mini ph5 text-center correctPercent2" value="80" />％良好，<input type="text" name="passedCondition[]" class="form-control width-input width-input-mini ph5 text-center correctPercent3" value="100" />％优秀' : '这是一份纯客观题的试卷, 达到<input type="text" name="passedScore" class="form-control width-150 mhs" value="0" data-score-total="0" />分（含）可以自动审阅通过考试。', void a.html(n).removeClass("hidden"))
        }
    }, 0: function (e, t, n) {
        "use strict";
        function a(e) {
            return e && e.__esModule ? e : {default: e}
        }

        var i = n("63fff8fb24f3bd1f61cd");
        a(i);
        n("b3c50df5d8bf6315aeba");
        var r = n("de585ca0d3c2d0205c51"), o = a(r), s = n("1e0cf618bc778b8ab554"), c = a(s),
            u = n("65c0e24ccad86ee24949"), l = a(u), d = $("#testpaper-items-manager");
        new c.default(d, $("#modal")), new l.default(d), new o.default(d)
    }, "65c0e24ccad86ee24949": function (e, t, n) {
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
        }(), o = n("b334fd7e4c5a19234db2"), s = a(o), c = function () {
            function e(t) {
                i(this, e), this.$element = t, this.$button = this.$element.find('[data-role="pick-item"]'), this.$typeNav = this.$element.find("#testpaper-question-nav"), this.$modal = $("#testpaper-confirm-modal"), this.currentType = this.$typeNav.find(".active").children().data("type"), this.questions = [], this._initEvent()
            }

            return r(e, [{
                key: "_initEvent", value: function () {
                    var e = this;
                    this.$button.on("click", function (t) {
                        return e._showPickerModal(t)
                    }), this.$typeNav.on("click", "li", function (t) {
                        return e._changeNav(t)
                    }), this.$element.on("click", ".js-request-save", function (t) {
                        return e._confirmSave(t)
                    }), this.$modal.on("click", ".js-confirm-submit", function (t) {
                        return e._submitSave(t)
                    })
                }
            }, {
                key: "_showPickerModal", value: function (e) {
                    var t = [];
                    $('[data-type="' + this.currentType + '"]').find('[name="questionIds[]"]').each(function () {
                        t.push($(this).val())
                    });
                    var n = $("#modal").modal();
                    n.data("manager", this), $.get(this.$button.data("url"), {
                        excludeIds: t.join(","),
                        type: this.currentType
                    }, function (e) {
                        n.html(e)
                    })
                }
            }, {
                key: "_changeNav", value: function (e) {
                    var t = $(e.currentTarget), n = t.children().data("type");
                    this.currentType = n, this.$typeNav.find("li").removeClass("active"), t.addClass("active"), this.$element.find('[data-role="question-body"]').addClass("hide"), this.$element.find("#testpaper-items-" + n).removeClass("hide"), this.$element.find('[data-role="batch-select"]').prop("checked", !1), this.$element.find('[data-role="batch-item"]').prop("checked", !1)
                }
            }, {
                key: "_confirmSave", value: function (e) {
                    var t = this._validateScore();
                    if (t) {
                        if ($('[name="passedScore"]').length > 0) {
                            var n = $(".passedScoreDiv").siblings(".help-block").html();
                            if ("" != $.trim(n))return
                        }
                        var a = this._calTestpaperStats();
                        if ($('[name="passedScore"]').length > 0) {
                            var i = $('input[name="passedScore"]').val();
                            if (i > a.total.score)return void(0, s.default)("danger", "及格分数（" + i + "）不能高于总分（" + a.total.score + "）。")
                        }
                        var r = "";
                        $.each(a, function (e, t) {
                            var n = "<tr>";
                            n += "<td>" + t.name + "</td>", n += "<td>" + t.count + "</td>", n += "<td>" + t.score.toFixed(1) + "</td>", n += "</tr>", r += n
                        }), this.$modal.find(".detail-tbody").html(r), this.$modal.modal("show")
                    }
                }
            }, {
                key: "_validateScore", value: function () {
                    var e = !0;
                    return 0 == this.$element.find('[name="scores[]"]').length && ((0, s.default)("danger", "请选择题目。"), e = !1), this.$element.find('input[type="text"][name="scores[]"]').each(function () {
                        var t = $(this).val();
                        "0" == t && ((0, s.default)("danger", "题目分值不能为0。"), e = !1), /^(([1-9]{1}\d{0,2})|([0]{1}))(\.(\d){1})?$/.test(t) || ((0, s.default)("danger", "题目分值只能填写数字，并且在3位数以内，保留一位小数。"), $(this).focus(), e = !1)
                    }), e
                }
            }, {
                key: "_calTestpaperStats", value: function () {
                    var e = {}, t = this;
                    this.$typeNav.find("li").each(function () {
                        var n = $(this).find("a").data("type"), a = $(this).find("a").data("name");
                        e[n] = {
                            name: a,
                            count: 0,
                            score: 0,
                            missScore: 0
                        }, t.$element.find("#testpaper-items-" + n).find('[name="scores[]"]').each(function () {
                            var a = $(this).closest("tr").data("type"),
                                i = "material" == a ? 0 : parseFloat($(this).val()), r = {};
                            "material" != a && e[n].count++, e[n].score += i, e[n].missScore = parseFloat($(this).data("miss-score"));
                            var o = $(this).closest("tr").data("id");
                            r.id = o, r.score = i, r.missScore = parseFloat($(this).data("miss-score")), r.type = n, t.questions.push(r)
                        })
                    });
                    var n = {name: Translator.trans("总计"), count: 0, score: 0};
                    return $.each(e, function (e, t) {
                        n.count += t.count, n.score += t.score
                    }), e.total = n, e
                }
            }, {
                key: "_submitSave", value: function (e) {
                    var t = 0, n = $(e.currentTarget);
                    $('input[name="passedScore"]:visible').length > 0 && (t = $('input[name="passedScore"]').val()), n.button("loading").addClass("disabled"), $.post(this.$element.attr("action"), {
                        questions: this.questions,
                        passedScore: t
                    }, function (e) {
                        e.goto && (window.location.href = e.goto)
                    })
                }
            }]), e
        }();
        t.default = c
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
        var s = function () {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var a = t[n];
                    a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                }
            }

            return function (t, n, a) {
                return n && e(t.prototype, n), a && e(t, a), t
            }
        }(), c = n("17c25dd7d9d2615bc1d9"), u = a(c), l = function (e) {
            function t() {
                return i(this, t), r(this, (t.__proto__ || Object.getPrototypeOf(t)).apply(this, arguments))
            }

            return o(t, e), s(t, [{
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
        t.default = l
    }
});