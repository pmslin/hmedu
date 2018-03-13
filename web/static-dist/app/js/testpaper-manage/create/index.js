webpackJsonp(["app/js/testpaper-manage/create/index"], [function (e, t, n) {
    "use strict";
    function i(e) {
        return e && e.__esModule ? e : {default: e}
    }

    function a(e, t) {
        if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
    }

    function r(e) {
        var t = $('[name="ranges[courseId]"]').val(), n = $('[name="ranges[lessonId]"]').val();
        $.post(e, {courseId: t, lessonId: n}, function (e) {
            $('[role="questionNum"]').text(0), $.each(e, function (e, t) {
                $("[type='" + e + "']").text(t.questionNum)
            })
        })
    }

    var o = function () {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var i = t[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
                }
            }

            return function (t, n, i) {
                return n && e(t.prototype, n), i && e(t, i), t
            }
        }(), s = n("8f840897d9471c8c1fbd"), l = i(s), d = n("9181c6995ae8c5c94b7a"), c = n("1be2a74362f00ba903a0"),
        u = i(c), f = function () {
            function e(t) {
                a(this, e), this.$form = t, this.$description = this.$form.find('[name="description"]'), this.validator = null, this.difficultySlider = null, this._initEvent(), this._initValidate(), this._initSortList(), this.scoreSlider = null
            }

            return o(e, [{
                key: "_initEvent", value: function () {
                    var e = this;
                    this.$form.on("click", '[data-role="submit"]', function (t) {
                        return e._submit(t)
                    }), this.$form.on("click", '[name="mode"]', function (t) {
                        return e.changeMode(t)
                    }), this.$form.on("click", '[name="range"]', function (t) {
                        return e.changeRange(t)
                    }), this.$form.on("blur", '[data-role="count"]', function (t) {
                        return e.changeCount(t)
                    })
                }
            }, {
                key: "initScoreSlider", value: function (e, t) {
                    var n = document.getElementById("score-slider"),
                        i = {start: e, connect: [!0, !1], tooltips: [!0], step: 1, range: {min: 0, max: t}};
                    this.scoreSlider ? this.scoreSlider.updateOptions(i) : (this.scoreSlider = noUiSlider.create(n, i), n.noUiSlider.on("update", function (e, n) {
                        $(".noUi-tooltip").text((e[n] / t * 100).toFixed(0) + "%"), $(".js-passScore").text(parseInt(e[n]))
                    })), $(".noUi-handle").attr("data-placement", "top").attr("data-original-title", '达标分数：<span class="js-passScore">' + e + "</span>分").attr("data-container", "body"), $(".noUi-handle").tooltip({html: !0}), $(".noUi-tooltip").text((e / t * 100).toFixed(0) + "%")
                }
            }, {
                key: "changeMode", value: function (e) {
                    var t = $(e.currentTarget);
                    "difficulty" == t.val() ? (this.$form.find("#difficulty-form-group").removeClass("hidden"), this.initDifficultySlider()) : this.$form.find("#difficulty-form-group").addClass("hidden")
                }
            }, {
                key: "changeRange", value: function (e) {
                    var t = $(e.currentTarget);
                    "course" == t.val() ? this.$form.find("#testpaper-range-selects").addClass("hidden") : this.$form.find("#testpaper-range-selects").removeClass("hidden")
                }
            }, {
                key: "initDifficultySlider", value: function () {
                    if (!this.difficultySlider) {
                        var e = document.getElementById("difficulty-percentage-slider");
                        this.difficultySlider = noUiSlider.create(e, {
                            start: [30, 70],
                            margin: 30,
                            range: {min: 0, max: 100},
                            step: 1,
                            connect: [!0, !0, !0],
                            serialization: {resolution: 1}
                        }), e.noUiSlider.on("update", function (e, t) {
                            var n = parseInt(e[0]), i = e[1] - e[0], a = 100 - e[1];
                            $(".js-simple-percentage-text").html(Translator.trans("简单") + n + "%"), $(".js-normal-percentage-text").html(Translator.trans("一般") + i + "%"), $(".js-difficulty-percentage-text").html(Translator.trans("困难") + a + "%"), $('input[name="percentages[simple]"]').val(n), $('input[name="percentages[normal]"]').val(i), $('input[name="percentages[difficulty]"]').val(a)
                        })
                    }
                }
            }, {
                key: "_initEditor", value: function (e) {
                    var t = this, n = CKEDITOR.replace(this.$description.attr("id"), {
                        toolbar: "Simple",
                        filebrowserImageUploadUrl: this.$description.data("imageUploadUrl"),
                        height: 100
                    });
                    n.on("change", function (e, i, a) {
                        t.$description.val((0, d.delHtmlTag)(n.getData()))
                    }), n.on("blur", function () {
                        t.$description.val((0, d.delHtmlTag)(n.getData())), e.form()
                    })
                }
            }, {
                key: "changeCount", value: function () {
                    var e = 0;
                    this.$form.find('[data-role="count"]').each(function (t, n) {
                        e += parseInt($(n).val())
                    }), this.$form.find('[name="questioncount"]').val(e > 0 ? e : null)
                }
            }, {
                key: "_initValidate", value: function () {
                    this.validator = this.$form.validate({
                        rules: {
                            name: {required: !0, maxlength: 50, trim: !0},
                            description: {required: !0, maxlength: 500, trim: !0},
                            limitedTime: {min: 0, max: 1e4, digits: !0},
                            mode: {required: !0},
                            range: {required: !0},
                            questioncount: {required: !0},
                            TestSort: {min: 0, max: 1e4, digits: !0}
                        },
                        messages: {
                            questioncount: "请选择题目",
                            name: {required: "请输入试卷名称", maxlength: "最多只能输入50个字符"},
                            description: {required: "请输入试卷描述", maxlength: "最多只能输入500个字符"},
                            mode: "请选择生成方式",
                            range: "请选择出题范围"
                        }
                    }), this.$form.find(".testpaper-question-option-item").each(function () {
                        var e = $(this);
                        e.find('[data-role="count"]').rules("add", {
                            min: 0, max: function () {
                                return parseInt(e.find('[role="questionNum"]').text())
                            }, digits: !0
                        }), e.find('[data-role="score"]').rules("add", {
                            min: 0,
                            max: 100,
                            digits: !0
                        }), e.find('[data-role="missScore"]').length > 0 && e.find('[data-role="missScore"]').rules("add", {
                            min: 0,
                            max: function () {
                                return parseInt(e.find('[data-role="score"]').val())
                            },
                            digits: !0
                        })
                    }), this._initEditor(this.validator)
                }
            }, {
                key: "_initSortList", value: function () {
                    (0, l.default)({
                        element: "#testpaper-question-options",
                        itemSelector: ".testpaper-question-option-item",
                        handle: ".question-type-sort-handler",
                        ajax: !1
                    })
                }
            }, {
                key: "_submit", value: function (e) {
                    var t = this, n = $(e.currentTarget), i = this.validator.form();
                    i && $.post(n.data("checkUrl"), this.$form.serialize(), function (e) {
                        "no" == e.status ? $(".js-build-check").html("该范围内题目数量不足") : ($(".js-build-check").html(""), n.button("loading").addClass("disabled"), t.$form.submit())
                    })
                }
            }]), e
        }();
    new f($("#testpaper-form")), new u.default($('[name="ranges[courseId]"]'), $('[name="ranges[lessonId]"]')), $('[name="ranges[courseId]"]').change(function () {
        var e = $(this).data("checkNumUrl");
        r(e)
    }), $('[name="ranges[lessonId]"]').change(function () {
        var e = $(this).data("checkNumUrl");
        r(e)
    })
}]);