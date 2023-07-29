"use strict";
!(function () {
    const e = document.querySelectorAll(".invoice-item-price"),
        t = document.querySelectorAll(".invoice-item-qty"),
        n = document.querySelectorAll(".date-picker");
    e &&
        e.forEach(function (e) {
            new Cleave(e, { delimiter: "", numeral: !0 });
        }),
        t &&
            t.forEach(function (e) {
                new Cleave(e, { delimiter: "", numeral: !0 });
            }),
        n &&
            n.forEach(function (e) {
                e.flatpickr({ monthSelectorType: "static" });
            });
})(),
    $(function () {
        var e,
            t,
            n,
            o,
            a,
            i,
            l = $(".btn-apply-changes"),
            r = $(".source-item"),
            c = {
                "App Design": "Designed UI kit & app pages.",
                "App Customization": "Customization & Bug Fixes.",
                "ABC Template": "Bootstrap 4 admin template.",
                "App Development": "Native App Development.",
            };
        function p(e, t) {
            e.closest(".repeater-wrapper").find(t).text(e.val());
        }
        $(document).on("click", ".tax-select", function (e) {
            e.stopPropagation();
        }),
            l.length &&
                $(document).on("click", ".btn-apply-changes", function (l) {
                    var r = $(this);
                    (a = r.closest(".dropdown-menu").find("#taxInput1")),
                        (i = r.closest(".dropdown-menu").find("#taxInput2")),
                        (o = r
                            .closest(".dropdown-menu")
                            .find("#discountInput")),
                        (t = r.closest(".repeater-wrapper").find(".tax-1")),
                        (n = r.closest(".repeater-wrapper").find(".tax-2")),
                        (e = $(".discount")),
                        null !== a.val() && p(a, t),
                        null !== i.val() && p(i, n),
                        o.val().length &&
                            r
                                .closest(".repeater-wrapper")
                                .find(e)
                                .text(o.val() + "%");
                }),
            r.length &&
                (r.on("submit", function (e) {
                    e.preventDefault();
                }),
                r.repeater({
                    show: function () {
                        $(this).slideDown();
                        [].slice
                            .call(
                                document.querySelectorAll(
                                    '[data-bs-toggle="tooltip"]'
                                )
                            )
                            .map(function (e) {
                                return new bootstrap.Tooltip(e);
                            });
                    },
                    hide: function (e) {
                        $(this).slideUp();
                    },
                })),
            $(document).on("change", ".item-details", function () {
                var e = $(this),
                    t = c[e.val()];
                e.next("textarea").length
                    ? e.next("textarea").val(t)
                    : e.after(
                          '<textarea class="form-control" rows="2">' +
                              t +
                              "</textarea>"
                      );
            });
    });
