webpackJsonp(["app/js/question-manage/picker/index"], {
    b7747c79a9f58b90eaab: function (e, t, n) {
        "use strict";
        function i(e, t) {
            if (!(e instanceof t))throw new TypeError("Cannot call a class as a function")
        }

        Object.defineProperty(t, "__esModule", {value: !0});
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
        }(), a = n("71e1df85d5928925f4b1"), r = function () {
            function e(t, n) {
                i(this, e), this.$questionPickerBody = t, this.$questionPickerModal = this.$questionPickerBody.closest(".modal"), this.$questionAppendForm = n, this._initEvent()
            }

            return o(e, [{
                key: "_initEvent", value: function () {
                    var e = this;
                    this.$questionPickerBody.find('[data-role="search-btn"]').on("click", function (t) {
                        return e.searchQuestion(t)
                    }), this.$questionPickerBody.find('[data-role="picked-item"]').on("click", function (t) {
                        return e.pickItem(t)
                    }), this.$questionPickerBody.find('[data-role="preview-btn"]').on("click", function (t) {
                        return e.questionPreview(t)
                    }), this.$questionPickerBody.find(".pagination a").on("click", function (t) {
                        return e.pagination(t)
                    });
                    var t = $('[data-role="batch-select-save"]', window.parent.document);
                    t.on("click", function (t) {
                        return e.batchSelectSave(t)
                    })
                }
            }, {
                key: "pagination", value: function (e) {
                    var t = this, n = $(e.currentTarget);
                    return $.get(n.attr("href"), function (e) {
                        t.$questionPickerModal.html(e)
                    }), !1
                }
            }, {
                key: "searchQuestion", value: function (e) {
                    var t = this;
                    e.preventDefault();
                    var n = $(e.currentTarget), i = n.closest("form");
                    $.get(i.attr("action"), i.serialize(), function (e) {
                        t.$questionPickerModal.html(e)
                    })
                }
            }, {
                key: "pickItem", value: function (e) {
                    var t = $(e.currentTarget), n = parseInt(t.data("replace")), i = t.data("questionId"), o = [];
                    o.push(i), this.pickItemPost(t.data("url"), o, n)
                }
            }, {
                key: "pickItemPost", value: function (e, t) {
                    var n = this, i = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : null;
                    $.post(e, {questionIds: t}, function (e) {
                        if (i) n.$questionAppendForm.find('tr[data-id="' + i + '"]').replaceWith(e), n.$questionAppendForm.find('tr[data-parent-id="' + i + '"]').remove(); else {
                            var t = n.$questionAppendForm.find("tbody:visible");
                            t.length <= 0 && (t = n.$questionAppendForm.find("tbody")), t.append(e).removeClass("hide")
                        }
                        n._refreshSeqs(), (0, a.questionSubjectiveRemask)(n.$questionAppendForm), n.$questionPickerModal.modal("hide")
                    })
                }
            }, {
                key: "questionPreview", value: function (e) {
                    window.open($(e.currentTarget).data("url"), "_blank", "directories=0,height=580,width=820,scrollbars=1,toolbar=0,status=0,menubar=0,location=0")
                }
            }, {
                key: "batchSelectSave", value: function (e) {
                    var t = $(e.currentTarget), n = [], i = t.data("url");
                    return 0 == this.$questionPickerBody.find('[data-role="batch-item"]:checked').length ? void $(".js-choice-notice", window.parent.document).show() : (this.$questionPickerBody.find('[data-role="batch-item"]:checked').each(function (e, t) {
                        var i = $(this).data("questionId");
                        n.push(i)
                    }), void this.pickItemPost(i, n, null))
                }
            }, {
                key: "_refreshSeqs", value: function () {
                    var e = 1;
                    this.$questionAppendForm.find("tbody tr").each(function (t, n) {
                        var i = $(n);
                        i.hasClass("have-sub-questions") || (i.find("td.seq").html(e), e++)
                    }), this.$questionAppendForm.find('[name="questionLength"]').val(e - 1 > 0 ? e - 1 : null)
                }
            }]), e
        }();
        t.default = r
    }, "71e1df85d5928925f4b1": function (e, t) {
        "use strict";
        Object.defineProperty(t, "__esModule", {value: !0});
        t.questionSubjectiveRemask = function (e) {
            var t = !1, n = "", i = $(".js-subjective-remask");
            return e.find("tbody tr").each(function () {
                var e = $(this).data("type");
                "essay" == e && (t = !0)
            }), t ? void i.html("") : (n = "homework" == i.data("type") ? '这是一份纯客观题的作业，正确率达到为<input type="text" name="passedCondition[]" class="form-control width-input width-input-mini ph5 text-center correctPercent1" value="60" />％合格，<input type="text" name="passedCondition[]" class="form-control width-input width-input-mini ph5 text-center correctPercent2" value="80" />％良好，<input type="text" name="passedCondition[]" class="form-control width-input width-input-mini ph5 text-center correctPercent3" value="100" />％优秀' : '这是一份纯客观题的试卷, 达到<input type="text" name="passedScore" class="form-control width-150 mhs" value="0" data-score-total="0" />分（含）可以自动审阅通过考试。', void i.html(n).removeClass("hidden"))
        }
    }, 0: function (e, t, n) {
        "use strict";
        function i(e) {
            return e && e.__esModule ? e : {default: e}
        }

        var o = n("b7747c79a9f58b90eaab"), a = i(o), r = n("de585ca0d3c2d0205c51"), c = i(r),
            s = n("1be2a74362f00ba903a0"), u = i(s);
        new a.default($("#question-picker-body"), $("#question-checked-form")), new c.default($("#question-picker-body")), new u.default($('[name="courseId"]'), $('[name="lessonId"]'))
    }
});