(function() {
    return this.JST || (this.JST = {}), this.JST["p4/partials/monthly_billing_breakdown"] = Handlebars.template(function(a, t, n, l, s) {
        function o(a, t) {
            return "total_amounts"
        }

        function e(a, t) {
            return "accommodation"
        }

        function r(a, t) {
            return "service_fee"
        }

        function i(a, t) {
            var l, s, o;
            return o = {
                hash: {},
                inverse: y.noop,
                fn: y.program(8, h, t),
                data: t
            }, (s = n.t) ? l = s.call(a, o) : (s = a && a.t, l = typeof s === b ? s.call(a, o) : s), n.t || (l = w.call(a, l, {
                hash: {},
                inverse: y.noop,
                fn: y.program(8, h, t),
                data: t
            })), l || 0 === l ? l : ""
        }

        function h(a, t) {
            return "includes_vat"
        }

        function c(a, t) {
            var l = "",
                s, o, e;
            return l += "\n      <tr>\n        <td>", e = {
                hash: {},
                inverse: y.noop,
                fn: y.program(11, p, t),
                data: t
            }, (o = n.t) ? s = o.call(a, e) : (o = a && a.t, s = typeof o === b ? o.call(a, e) : o), n.t || (s = w.call(a, s, {
                hash: {},
                inverse: y.noop,
                fn: y.program(11, p, t),
                data: t
            })), (s || 0 === s) && (l += s), l += "</td>\n        <td>", (o = n.taxes) ? s = o.call(a, {
                hash: {},
                data: t
            }) : (o = a && a.taxes, s = typeof o === b ? o.call(a, {
                hash: {},
                data: t
            }) : o), (s || 0 === s) && (l += s), l += "</td>\n      </tr>\n    "
        }

        function p(a, t) {
            return "occupancy_taxes"
        }

        function d(a, t) {
            var l = "",
                s, o, e;
            return l += '\n  <div class="panel-body">\n    <table>\n      ', e = {
                hash: {},
                inverse: y.noop,
                fn: y.program(14, f, t),
                data: t
            }, (o = n.tax_descriptions) ? s = o.call(a, e) : (o = a && a.tax_descriptions, s = typeof o === b ? o.call(a, e) : o), n.tax_descriptions || (s = w.call(a, s, {
                hash: {},
                inverse: y.noop,
                fn: y.program(14, f, t),
                data: t
            })), (s || 0 === s) && (l += s), l += '\n      <tr>\n        <td colspan=2><a href="#help/article/318" target="_blank">', e = {
                hash: {},
                inverse: y.noop,
                fn: y.program(16, _, t),
                data: t
            }, (o = n.t) ? s = o.call(a, e) : (o = a && a.t, s = typeof o === b ? o.call(a, e) : o), n.t || (s = w.call(a, s, {
                hash: {},
                inverse: y.noop,
                fn: y.program(16, _, t),
                data: t
            })), (s || 0 === s) && (l += s), l += "</a></td>\n      </tr>\n    </table>\n  </div>\n"
        }

        function f(a, t) {
            var l = "",
                s, o;
            return l += "\n        <tr>\n         <td>", (o = n.name) ? s = o.call(a, {
                hash: {},
                data: t
            }) : (o = a && a.name, s = typeof o === b ? o.call(a, {
                hash: {},
                data: t
            }) : o), (s || 0 === s) && (l += s), l += "</td>\n        </tr>\n      "
        }

        function _(a, t) {
            return "learn_more"
        }
        this.compilerInfo = [4, ">= 1.0.0"], n = this.merge(n, a.helpers), s = s || {};
        var u = "",
            m, g, v, y = this,
            b = "function",
            w = n.blockHelperMissing;
        return u += '<div class="panel-body">\n  <strong>', v = {
            hash: {},
            inverse: y.noop,
            fn: y.program(1, o, s),
            data: s
        }, (g = n.t) ? m = g.call(t, v) : (g = t && t.t, m = typeof g === b ? g.call(t, v) : g), n.t || (m = w.call(t, m, {
            hash: {},
            inverse: y.noop,
            fn: y.program(1, o, s),
            data: s
        })), (m || 0 === m) && (u += m), u += "</strong>\n  <table>\n    <tr>\n      <td>", v = {
            hash: {},
            inverse: y.noop,
            fn: y.program(3, e, s),
            data: s
        }, (g = n.t) ? m = g.call(t, v) : (g = t && t.t, m = typeof g === b ? g.call(t, v) : g), n.t || (m = w.call(t, m, {
            hash: {},
            inverse: y.noop,
            fn: y.program(3, e, s),
            data: s
        })), (m || 0 === m) && (u += m), u += "</td>\n      <td>", (g = n.subtotal) ? m = g.call(t, {
            hash: {},
            data: s
        }) : (g = t && t.subtotal, m = typeof g === b ? g.call(t, {
            hash: {},
            data: s
        }) : g), (m || 0 === m) && (u += m), u += "</td>\n    </tr>\n    <tr>\n      <td>\n        ", v = {
            hash: {},
            inverse: y.noop,
            fn: y.program(5, r, s),
            data: s
        }, (g = n.t) ? m = g.call(t, v) : (g = t && t.t, m = typeof g === b ? g.call(t, v) : g), n.t || (m = w.call(t, m, {
            hash: {},
            inverse: y.noop,
            fn: y.program(5, r, s),
            data: s
        })), (m || 0 === m) && (u += m), u += "\n        ", v = {
            hash: {},
            inverse: y.noop,
            fn: y.program(7, i, s),
            data: s
        }, (g = n.guest_pays_vat) ? m = g.call(t, v) : (g = t && t.guest_pays_vat, m = typeof g === b ? g.call(t, v) : g), n.guest_pays_vat || (m = w.call(t, m, {
            hash: {},
            inverse: y.noop,
            fn: y.program(7, i, s),
            data: s
        })), (m || 0 === m) && (u += m), u += "\n      </td>\n      <td>", (g = n.service_fee) ? m = g.call(t, {
            hash: {},
            data: s
        }) : (g = t && t.service_fee, m = typeof g === b ? g.call(t, {
            hash: {},
            data: s
        }) : g), (m || 0 === m) && (u += m), u += "</td>\n    </tr>\n    ", v = {
            hash: {},
            inverse: y.noop,
            fn: y.program(10, c, s),
            data: s
        }, (g = n.show_tax_data) ? m = g.call(t, v) : (g = t && t.show_tax_data, m = typeof g === b ? g.call(t, v) : g), n.show_tax_data || (m = w.call(t, m, {
            hash: {},
            inverse: y.noop,
            fn: y.program(10, c, s),
            data: s
        })), (m || 0 === m) && (u += m), u += "\n  </table>\n</div>\n", v = {
            hash: {},
            inverse: y.noop,
            fn: y.program(13, d, s),
            data: s
        }, (g = n.show_tax_data) ? m = g.call(t, v) : (g = t && t.show_tax_data, m = typeof g === b ? g.call(t, v) : g), n.show_tax_data || (m = w.call(t, m, {
            hash: {},
            inverse: y.noop,
            fn: y.program(13, d, s),
            data: s
        })), (m || 0 === m) && (u += m), u += "\n"
    }), this.JST["p4/partials/monthly_billing_breakdown"]
}).call(this),
    function() {
        return this.JST || (this.JST = {}), this.JST["p4/partials/tax_descriptions"] = Handlebars.template(function(a, t, n, l, s) {
            function o(a, t) {
                var l = "",
                    s, o;
                return l += "\n      <tr>\n       <td colspan=2>", (o = n.name) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.name, s = typeof o === p ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), (s || 0 === s) && (l += s), l += "</td>\n      </tr>\n    "
            }

            function e(a, t) {
                return "learn_more"
            }
            this.compilerInfo = [4, ">= 1.0.0"], n = this.merge(n, a.helpers), s = s || {};
            var r = "",
                i, h, c, p = "function",
                d = this,
                f = n.blockHelperMissing;
            return r += '<div class="panel-body">\n  <table>\n    ', c = {
                hash: {},
                inverse: d.noop,
                fn: d.program(1, o, s),
                data: s
            }, (h = n.tax_descriptions) ? i = h.call(t, c) : (h = t && t.tax_descriptions, i = typeof h === p ? h.call(t, c) : h), n.tax_descriptions || (i = f.call(t, i, {
                hash: {},
                inverse: d.noop,
                fn: d.program(1, o, s),
                data: s
            })), (i || 0 === i) && (r += i), r += '\n    <tr>\n      <td colspan=2><a href="#help/question/318" target="_blank">', c = {
                hash: {},
                inverse: d.noop,
                fn: d.program(3, e, s),
                data: s
            }, (h = n.t) ? i = h.call(t, c) : (h = t && t.t, i = typeof h === p ? h.call(t, c) : h), n.t || (i = f.call(t, i, {
                hash: {},
                inverse: d.noop,
                fn: d.program(3, e, s),
                data: s
            })), (i || 0 === i) && (r += i), r += "</a></td>\n    </tr>\n  </table>\n</div>\n"
        }), this.JST["p4/partials/tax_descriptions"]
    }.call(this),
    function() {
        return this.JST || (this.JST = {}), this.JST["shared/empty_modal"] = Handlebars.template(function(a, t, n, l, s) {
            return this.compilerInfo = [4, ">= 1.0.0"], n = this.merge(n, a.helpers), s = s || {}, '<div class="modal" role="dialog" aria-hidden="true">\n  <div class="modal-table">\n    <div class="modal-cell">\n      <div class="modal-content">\n      </div>\n    </div>\n  </div>\n</div>\n'
        }), this.JST["shared/empty_modal"]
    }.call(this),
    function() {
        return this.JST || (this.JST = {}), this.JST.listing_card = Handlebars.template(function(a, t, n, l, s) {
            function o(a, t) {
                var l, s;
                return (s = n.id) ? l = s.call(a, {
                    hash: {},
                    data: t
                }) : (s = a && a.id, l = typeof s === L ? s.call(a, {
                    hash: {},
                    data: t
                }) : s), N(l)
            }

            function e(a, t) {
                return " has-relationships"
            }

            function r(a, t) {
                var l = "",
                    s, o, e;
                return l += '\n      <div class="listing-description wl-data-', (o = n.id) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.id, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '">\n        <div class="summary">\n          <p>\n            ', (o = n.summary) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.summary, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + "\n            ", e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(6, i, t),
                    data: t
                }, (o = n.description) ? s = o.call(a, e) : (o = a && a.description, s = typeof o === L ? o.call(a, e) : o), n.description || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(6, i, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += "\n          </p>\n          ", e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(9, c, t),
                    data: t
                }, (o = n.description) ? s = o.call(a, e) : (o = a && a.description, s = typeof o === L ? o.call(a, e) : o), n.description || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(9, c, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += '\n        </div>\n        <p class="address">', (o = n.address) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.address, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '</p>\n        <div class="details row-space-2">', (o = n.details) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.details, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), (s || 0 === s) && (l += s), l += "</div>\n      </div>\n    "
            }

            function i(a, t) {
                var l = "",
                    s, o, e;
                return l += '\n              <a href="#" id="tooltip-sticky-', (o = n.id) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.id, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '" class="learn-more">', e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(7, h, t),
                    data: t
                }, (o = n.t) ? s = o.call(a, e) : (o = a && a.t, s = typeof o === L ? o.call(a, e) : o), n.t || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(7, h, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += "</a>\n            "
            }

            function h(a, t) {
                return "learn_more"
            }

            function c(a, t) {
                var l = "",
                    s, o;
                return l += '\n            <div class="tooltip tooltip-top-middle" role="tooltip" data-trigger="#tooltip-sticky-', (o = n.id) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.id, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '" aria-hidden="true">\n              <p class="panel-body">\n                ', (o = n.description) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.description, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + "\n              </p>\n            </div>\n          "
            }

            function p(a, t) {
                var l = "",
                    s, o, e;
                return l += '\n          <img itemprop="image" data-current="0" src="', (o = n.x_medium_pic_url) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.x_medium_pic_url, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '" class="img-responsive-height" alt="', (o = n.listing_image_alt_text) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.listing_image_alt_text, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '" ', e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(12, d, t),
                    data: t
                }, (o = n.show_photo_carousel) ? s = o.call(a, e) : (o = a && a.show_photo_carousel, s = typeof o === L ? o.call(a, e) : o), n.show_photo_carousel || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(12, d, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += ">\n        "
            }

            function d(a, t) {
                var l = "",
                    s, o;
                return l += 'data-urls="', (o = n.all_pic_urls) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.all_pic_urls, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '"'
            }

            function f(a, t) {
                var l = "",
                    s, o, e;
                return l += '\n          <img src="', (o = n.default_pic_url) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.default_pic_url, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '" data-current="0" class="img-responsive-height hide" alt="', (o = n.listing_image_alt_text) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.listing_image_alt_text, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '" ', e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(12, d, t),
                    data: t
                }, (o = n.show_photo_carousel) ? s = o.call(a, e) : (o = a && a.show_photo_carousel, s = typeof o === L ? o.call(a, e) : o), n.show_photo_carousel || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(12, d, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += ">\n        "
            }

            function _(a, t) {
                return '\n      <div class="target-prev target-control block-link">\n        <i class="icon icon-chevron-left icon-size-2 icon-white"></i>\n      </div>\n    '
            }

            function u(a, t) {
                var l = "",
                    s, o, e;
                return l += '\n    <a href="', (o = n.url) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.url, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '" target="', (o = n.p3_link_target) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.p3_link_target, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '"\n       class="link-reset panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">\n      <div>\n        <sup class="h6 text-contrast">', (o = n.currency_symbol_left) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.currency_symbol_left, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), (s || 0 === s) && (l += s), l += '</sup>\n        <span class="h3 text-contrast price-amount">', (o = n.price_to_display) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.price_to_display, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '</span>\n        <sup class="h6 text-contrast">', (o = n.currency_symbol_right) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.currency_symbol_right, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), (s || 0 === s) && (l += s), l += "</sup>\n        ", e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(19, m, t),
                    data: t
                }, (o = n.per_month) ? s = o.call(a, e) : (o = a && a.per_month, s = typeof o === L ? o.call(a, e) : o), n.per_month || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(19, m, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += "\n        ", e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(22, v, t),
                    data: t
                }, (o = n.is_total_price) ? s = o.call(a, e) : (o = a && a.is_total_price, s = typeof o === L ? o.call(a, e) : o), n.is_total_price || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(22, v, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += "\n        ", e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(25, b, t),
                    data: t
                }, (o = n.instant_book) ? s = o.call(a, e) : (o = a && a.instant_book, s = typeof o === L ? o.call(a, e) : o), n.instant_book || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(25, b, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += "\n      </div>\n\n      ", e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(28, k, t),
                    data: t
                }, (o = n.instant_book) ? s = o.call(a, e) : (o = a && a.instant_book, s = typeof o === L ? o.call(a, e) : o), n.instant_book || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(28, k, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += "\n    </a>\n\n    ", e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(32, S, t),
                    data: t
                }, (o = n.instant_book) ? s = o.call(a, e) : (o = a && a.instant_book, s = typeof o === L ? o.call(a, e) : o), n.instant_book || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(32, S, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += "\n    "
            }

            function m(a, t) {
                var l = "",
                    s, o, e;
                return l += '\n          <span class="h5"><small>', e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(20, g, t),
                    data: t
                }, (o = n.t) ? s = o.call(a, e) : (o = a && a.t, s = typeof o === L ? o.call(a, e) : o), n.t || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(20, g, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += "</small></span>\n        "
            }

            function g(a, t) {
                return "per_month"
            }

            function v(a, t) {
                var l = "",
                    s, o, e;
                return l += '\n          <span class="h5"><small>', e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(23, y, t),
                    data: t
                }, (o = n.t) ? s = o.call(a, e) : (o = a && a.t, s = typeof o === L ? o.call(a, e) : o), n.t || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(23, y, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += "</small></span>\n        "
            }

            function y(a, t) {
                return "total"
            }

            function b(a, t) {
                var l = "",
                    s, o, e;
                return l += "\n          ", e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(26, w, t),
                    data: t
                }, (o = n.show_instant_book_icon) ? s = o.call(a, e) : (o = a && a.show_instant_book_icon, s = typeof o === L ? o.call(a, e) : o), n.show_instant_book_icon || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(26, w, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += "\n        "
            }

            function w(a, t) {
                return '\n          <span class="h3 icon-beach">\n            <i class="icon icon-instant-book icon-flush-sides"></i>\n          </span>\n          '
            }

            function k(a, t) {
                var l = "",
                    s, o, e;
                return l += "\n        ", e = {
                    hash: {},
                    inverse: O.program(29, x, t),
                    fn: O.noop,
                    data: t
                }, (o = n.show_instant_book_icon) ? s = o.call(a, e) : (o = a && a.show_instant_book_icon, s = typeof o === L ? o.call(a, e) : o), n.show_instant_book_icon || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.program(29, x, t),
                    fn: O.noop,
                    data: t
                })), (s || 0 === s) && (l += s), l += "\n      "
            }

            function x(a, t) {
                var l = "",
                    s, o, e;
                return l += '\n          <div class="h6 icon-beach">\n            ', e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(30, J, t),
                    data: t
                }, (o = n.t) ? s = o.call(a, e) : (o = a && a.t, s = typeof o === L ? o.call(a, e) : o), n.t || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(30, J, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += "\n          </div>\n        "
            }

            function J(a, t) {
                return "instant_book"
            }

            function S(a, t) {
                var l = "",
                    s, o, e;
                return l += "\n      ", e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(33, T, t),
                    data: t
                }, (o = n.show_instant_book_icon) ? s = o.call(a, e) : (o = a && a.show_instant_book_icon, s = typeof o === L ? o.call(a, e) : o), n.show_instant_book_icon || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(33, T, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += "\n    "
            }

            function T(a, t) {
                var l = "",
                    s, o, e;
                return l += '\n        <div class="tooltip tooltip-left-middle listing-card-ib-tooltip" data-fixed="true">\n          <div class="panel-body text-dark-gray">\n            <div class="space-1 h5">', e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(30, J, t),
                    data: t
                }, (o = n.t) ? s = o.call(a, e) : (o = a && a.t, s = typeof o === L ? o.call(a, e) : o), n.t || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(30, J, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += '</div>\n            <p class="text-muted">\n              ', e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(34, z, t),
                    data: t
                }, (o = n.t) ? s = o.call(a, e) : (o = a && a.t, s = typeof o === L ? o.call(a, e) : o), n.t || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(34, z, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += "\n            </p>\n          </div>\n        </div>\n      "
            }

            function z(a, t) {
                return "search_tooltip_instant_book_faster_booking"
            }

            function H(a, t) {
                return '\n      <div class="target-next target-control block-link">\n        <i class="icon icon-chevron-right icon-size-2 icon-white"></i>\n      </div>\n    '
            }

            function I(a, t) {
                var l = "",
                    s, o, e;
                return l += '\n      <span class="rich-toggle wish_list_button wishlist-button"\n            data-img="', (o = n.x_medium_pic_url) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.x_medium_pic_url, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '"\n            data-name="', (o = n.name) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.name, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '"\n            data-address="', (o = n.address) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.address, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '"\n            data-hosting_id="', (o = n.id) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.id, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '"\n            data-price="', (o = n.currency_symbol_left) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.currency_symbol_left, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), (s || 0 === s) && (l += s), (o = n.price_to_display) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.price_to_display, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s), (o = n.currency_symbol_right) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.currency_symbol_right, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), (s || 0 === s) && (l += s), l += '"\n            data-review_count="', (o = n.visible_review_count) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.visible_review_count, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '"\n            data-host_img="', e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(39, M, t),
                    data: t
                }, (o = n.user) ? s = o.call(a, e) : (o = a && a.user, s = typeof o === L ? o.call(a, e) : o), n.user || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(39, M, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += '"\n            data-star_rating="', (o = n.visible_star_rating) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.visible_star_rating, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '"\n            data-summary="', (o = n.summary) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.summary, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '"\n            data-description="', (o = n.description) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.description, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '">\n        <input type="checkbox"\n               id="wishlist-widget-', (o = n.id) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.id, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '"\n               name="wishlist-widget-', (o = n.id) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.id, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '"\n               data-for-hosting="', (o = n.id) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.id, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '">\n        <label for="wishlist-widget-', (o = n.id) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.id, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '" class="hide-sm">\n          <span class="screen-reader-only">', (o = n.add_to_wishlist) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.add_to_wishlist, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '</span>\n          <i class="icon icon-heart icon-rausch icon-size-2 rich-toggle-checked"></i>\n          <i class="icon icon-heart wishlist-heart-unchecked icon-size-2 rich-toggle-unchecked"></i>\n          <i class="icon icon-heart-alt icon-white icon-size-2" id="wishlist-widget-icon-', (o = n.id) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.id, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '"></i>\n        </label>\n        <div class="tooltip tooltip-right-middle bg-dark-gray wishlist-widget-tooltip" role="tooltip" data-trigger="#wishlist-widget-icon-', (o = n.id) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.id, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '" data-event="none">\n          <p class="text-white wishlist-widget-tooltip__body"></p>\n        </div>\n      </span>\n      '
            }

            function M(a, t) {
                var l, s;
                return (s = n.thumbnail_url) ? l = s.call(a, {
                    hash: {},
                    data: t
                }) : (s = a && a.thumbnail_url, l = typeof s === L ? s.call(a, {
                    hash: {},
                    data: t
                }) : s), N(l)
            }

            function E(a, t) {
                var l = "",
                    s, o, e;
                return l += '\n      <div class="social-connection-panel"\n           data-behavior="tooltip"\n           title="', e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(42, G, t),
                    data: t
                }, (o = n.t) ? s = o.call(a, e) : (o = a && a.t, s = typeof o === L ? o.call(a, e) : o), n.t || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(42, G, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += '">\n        ', e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(44, q, t),
                    data: t
                }, (o = n.relationships) ? s = o.call(a, e) : (o = a && a.relationships, s = typeof o === L ? o.call(a, e) : o), n.relationships || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(44, q, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += "\n      </div>\n      "
            }

            function G(a, t) {
                return "social_connections_tooltip"
            }

            function q(a, t) {
                var l = "",
                    s, o;
                return l += '\n        <div class="media-photo media-round">\n          <img src="', (o = n.pic_url_small) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.pic_url_small, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '" alt="', (o = n.first_name) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.first_name, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '" width="30" height="30">\n        </div>\n        '
            }

            function P(a, t) {
                var l = "",
                    s, o, e;
                return l += '\n        <a href="#users/show/', (o = n.id) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.id, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '"\n           class="media-photo-badge pull-right card-profile-picture card-profile-picture-offset">\n          <div class="media-photo media-round">\n            <img src="', (o = n.thumbnail_url) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.thumbnail_url, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '" alt="', (o = n.first_name) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.first_name, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '">\n          </div>\n          ', e = {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(47, j, t),
                    data: t
                }, (o = n.show_superhost_badge) ? s = o.call(a, e) : (o = a && a.show_superhost_badge, s = typeof o === L ? o.call(a, e) : o), n.show_superhost_badge || (s = Q.call(a, s, {
                    hash: {},
                    inverse: O.noop,
                    fn: O.program(47, j, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += "\n        </a>\n      "
            }

            function j(a, t) {
                var l = "",
                    s, o;
                return l += '\n            <img src="', (o = n.superhost_image_path) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.superhost_image_path, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + '"\n                 class="superhost-photo-badge superhost-photo-badge--small">\n          '
            }

            function A(a, t) {
                var l = "",
                    s, o;
                return l += '\n          <span class="label-contrast dot-tirol new-badge">', (o = n["new"]) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a["new"], s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += N(s) + "</span>\n        "
            }

            function B(a, t) {
                var l = "",
                    s, o;
                return l += '\n      <div class="debug-string">\n        ', (o = n.debug_string) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.debug_string, s = typeof o === L ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), (s || 0 === s) && (l += s), l += "\n      </div>\n    "
            }
            this.compilerInfo = [4, ">= 1.0.0"], n = this.merge(n, a.helpers), s = s || {};
            var C = "",
                D, F, K, L = "function",
                N = this.escapeExpression,
                O = this,
                Q = n.blockHelperMissing;
            return C += '\n\n<div data-lat="', (F = n.lat) ? D = F.call(t, {
                hash: {},
                data: s
            }) : (F = t && t.lat, D = typeof F === L ? F.call(t, {
                hash: {},
                data: s
            }) : F), C += N(D) + '"\n     data-lng="', (F = n.lng) ? D = F.call(t, {
                hash: {},
                data: s
            }) : (F = t && t.lng, D = typeof F === L ? F.call(t, {
                hash: {},
                data: s
            }) : F), C += N(D) + '"\n     data-name="', (F = n.name) ? D = F.call(t, {
                hash: {},
                data: s
            }) : (F = t && t.name, D = typeof F === L ? F.call(t, {
                hash: {},
                data: s
            }) : F), C += N(D) + '"\n     data-url="', (F = n.url) ? D = F.call(t, {
                hash: {},
                data: s
            }) : (F = t && t.url, D = typeof F === L ? F.call(t, {
                hash: {},
                data: s
            }) : F), C += N(D) + '"\n     data-user="', K = {
                hash: {},
                inverse: O.noop,
                fn: O.program(1, o, s),
                data: s
            }, (F = n.user) ? D = F.call(t, K) : (F = t && t.user, D = typeof F === L ? F.call(t, K) : F), n.user || (D = Q.call(t, D, {
                hash: {},
                inverse: O.noop,
                fn: O.program(1, o, s),
                data: s
            })), (D || 0 === D) && (C += D), C += '"\n     data-id="', (F = n.id) ? D = F.call(t, {
                hash: {},
                data: s
            }) : (F = t && t.id, D = typeof F === L ? F.call(t, {
                hash: {},
                data: s
            }) : F), C += N(D) + '"\n     data-instant-book="', (F = n.instant_book) ? D = F.call(t, {
                hash: {},
                data: s
            }) : (F = t && t.instant_book, D = typeof F === L ? F.call(t, {
                hash: {},
                data: s
            }) : F), C += N(D) + '"\n     data-price="<sup>', (F = n.currency_symbol_left) ? D = F.call(t, {
                hash: {},
                data: s
            }) : (F = t && t.currency_symbol_left, D = typeof F === L ? F.call(t, {
                hash: {},
                data: s
            }) : F), (D || 0 === D) && (C += D), C += "</sup>", (F = n.price_to_display) ? D = F.call(t, {
                hash: {},
                data: s
            }) : (F = t && t.price_to_display, D = typeof F === L ? F.call(t, {
                hash: {},
                data: s
            }) : F), C += N(D) + "<sup>", (F = n.currency_symbol_right) ? D = F.call(t, {
                hash: {},
                data: s
            }) : (F = t && t.currency_symbol_right, D = typeof F === L ? F.call(t, {
                hash: {},
                data: s
            }) : F), (D || 0 === D) && (C += D), C += '</sup>"\n     class="listing', K = {
                hash: {},
                inverse: O.noop,
                fn: O.program(3, e, s),
                data: s
            }, (F = n.has_relationships) ? D = F.call(t, K) : (F = t && t.has_relationships, D = typeof F === L ? F.call(t, K) : F), n.has_relationships || (D = Q.call(t, D, {
                hash: {},
                inverse: O.noop,
                fn: O.program(3, e, s),
                data: s
            })), (D || 0 === D) && (C += D), C += '"\n     itemscope itemtype="http://schema.org/Enumeration">\n\n  <div class="panel-image listing-img">\n    ', K = {
                hash: {},
                inverse: O.noop,
                fn: O.program(5, r, s),
                data: s
            }, (F = n.include_summary) ? D = F.call(t, K) : (F = t && t.include_summary, D = typeof F === L ? F.call(t, K) : F), n.include_summary || (D = Q.call(t, D, {
                hash: {},
                inverse: O.noop,
                fn: O.program(5, r, s),
                data: s
            })), (D || 0 === D) && (C += D), C += '\n    <a href="', (F = n.url) ? D = F.call(t, {
                hash: {},
                data: s
            }) : (F = t && t.url, D = typeof F === L ? F.call(t, {
                hash: {},
                data: s
            }) : F), C += N(D) + '" target="', (F = n.p3_link_target) ? D = F.call(t, {
                hash: {},
                data: s
            }) : (F = t && t.p3_link_target, D = typeof F === L ? F.call(t, {
                hash: {},
                data: s
            }) : F), C += N(D) + '" class="media-photo media-cover">\n      <div class="listing-img-container media-cover text-center">\n        ', K = {
                hash: {},
                inverse: O.program(11, p, s),
                fn: O.noop,
                data: s
            }, (F = n.should_lazy_load) ? D = F.call(t, K) : (F = t && t.should_lazy_load, D = typeof F === L ? F.call(t, K) : F), n.should_lazy_load || (D = Q.call(t, D, {
                hash: {},
                inverse: O.program(11, p, s),
                fn: O.noop,
                data: s
            })), (D || 0 === D) && (C += D), C += "\n        ", K = {
                hash: {},
                inverse: O.noop,
                fn: O.program(14, f, s),
                data: s
            }, (F = n.should_lazy_load) ? D = F.call(t, K) : (F = t && t.should_lazy_load, D = typeof F === L ? F.call(t, K) : F), n.should_lazy_load || (D = Q.call(t, D, {
                hash: {},
                inverse: O.noop,
                fn: O.program(14, f, s),
                data: s
            })), (D || 0 === D) && (C += D), C += "\n      </div>\n    </a>\n\n    ", K = {
                hash: {},
                inverse: O.noop,
                fn: O.program(16, _, s),
                data: s
            }, (F = n.has_photo_carousel) ? D = F.call(t, K) : (F = t && t.has_photo_carousel, D = typeof F === L ? F.call(t, K) : F), n.has_photo_carousel || (D = Q.call(t, D, {
                hash: {},
                inverse: O.noop,
                fn: O.program(16, _, s),
                data: s
            })), (D || 0 === D) && (C += D), C += "\n\n    ", K = {
                hash: {},
                inverse: O.noop,
                fn: O.program(18, u, s),
                data: s
            }, (F = n.show_price) ? D = F.call(t, K) : (F = t && t.show_price, D = typeof F === L ? F.call(t, K) : F), n.show_price || (D = Q.call(t, D, {
                hash: {},
                inverse: O.noop,
                fn: O.program(18, u, s),
                data: s
            })), (D || 0 === D) && (C += D), C += "\n\n    ", K = {
                hash: {},
                inverse: O.noop,
                fn: O.program(36, H, s),
                data: s
            }, (F = n.has_photo_carousel) ? D = F.call(t, K) : (F = t && t.has_photo_carousel, D = typeof F === L ? F.call(t, K) : F), n.has_photo_carousel || (D = Q.call(t, D, {
                hash: {},
                inverse: O.noop,
                fn: O.program(36, H, s),
                data: s
            })), (D || 0 === D) && (C += D), C += '\n\n    <div class="panel-overlay-top-right wl-social-connection-panel">\n      ', K = {
                hash: {},
                inverse: O.noop,
                fn: O.program(38, I, s),
                data: s
            }, (F = n.show_wishlist_button) ? D = F.call(t, K) : (F = t && t.show_wishlist_button, D = typeof F === L ? F.call(t, K) : F), n.show_wishlist_button || (D = Q.call(t, D, {
                hash: {},
                inverse: O.noop,
                fn: O.program(38, I, s),
                data: s
            })), (D || 0 === D) && (C += D), C += "\n\n      ", K = {
                hash: {},
                inverse: O.noop,
                fn: O.program(41, E, s),
                data: s
            }, (F = n.has_relationships) ? D = F.call(t, K) : (F = t && t.has_relationships, D = typeof F === L ? F.call(t, K) : F), n.has_relationships || (D = Q.call(t, D, {
                hash: {},
                inverse: O.noop,
                fn: O.program(41, E, s),
                data: s
            })), (D || 0 === D) && (C += D), C += '\n\n    </div>\n\n  </div>\n\n  <div class="panel-body panel-card-section">\n    <div class="media">\n      ', K = {
                hash: {},
                inverse: O.noop,
                fn: O.program(46, P, s),
                data: s
            }, (F = n.user) ? D = F.call(t, K) : (F = t && t.user, D = typeof F === L ? F.call(t, K) : F), n.user || (D = Q.call(t, D, {
                hash: {},
                inverse: O.noop,
                fn: O.program(46, P, s),
                data: s
            })), (D || 0 === D) && (C += D), C += '\n      <h3 title="', (F = n.name) ? D = F.call(t, {
                hash: {},
                data: s
            }) : (F = t && t.name, D = typeof F === L ? F.call(t, {
                hash: {},
                data: s
            }) : F), C += N(D) + '" itemprop="name" class="h5 listing-name text-truncate row-space-top-1">\n        ', K = {
                hash: {},
                inverse: O.noop,
                fn: O.program(49, A, s),
                data: s
            }, (F = n.show_new_listing_badge) ? D = F.call(t, K) : (F = t && t.show_new_listing_badge, D = typeof F === L ? F.call(t, K) : F), n.show_new_listing_badge || (D = Q.call(t, D, {
                hash: {},
                inverse: O.noop,
                fn: O.program(49, A, s),
                data: s
            })), (D || 0 === D) && (C += D), C += '\n        <a href="', (F = n.url) ? D = F.call(t, {
                hash: {},
                data: s
            }) : (F = t && t.url, D = typeof F === L ? F.call(t, {
                hash: {},
                data: s
            }) : F), C += N(D) + '" target="', (F = n.p3_link_target) ? D = F.call(t, {
                hash: {},
                data: s
            }) : (F = t && t.p3_link_target, D = typeof F === L ? F.call(t, {
                hash: {},
                data: s
            }) : F), C += N(D) + '" class="text-normal">\n          ', (F = n.name) ? D = F.call(t, {
                hash: {},
                data: s
            }) : (F = t && t.name, D = typeof F === L ? F.call(t, {
                hash: {},
                data: s
            }) : F), C += N(D) + '\n        </a>\n      </h3>\n      <div itemprop="description" class="text-muted listing-location text-truncate">', (F = n.footer_text) ? D = F.call(t, {
                hash: {},
                data: s
            }) : (F = t && t.footer_text, D = typeof F === L ? F.call(t, {
                hash: {},
                data: s
            }) : F), (D || 0 === D) && (C += D), C += "</div>\n    </div>\n\n    ", K = {
                hash: {},
                inverse: O.noop,
                fn: O.program(51, B, s),
                data: s
            }, (F = n.has_debug) ? D = F.call(t, K) : (F = t && t.has_debug, D = typeof F === L ? F.call(t, K) : F), n.has_debug || (D = Q.call(t, D, {
                hash: {},
                inverse: O.noop,
                fn: O.program(51, B, s),
                data: s
            })), (D || 0 === D) && (C += D), C += "\n  </div>\n</div>\n"
        }), this.JST.listing_card
    }.call(this),
    function() {
        return this.JST || (this.JST = {}), this.JST["p3/similar_listings"] = Handlebars.template(function(a, t, n, l, s) {
            function o(a, t) {
                var l = "",
                    s, o, r;
                return l += "\n\n    ", r = {
                    hash: {},
                    inverse: d.noop,
                    fn: d.program(2, e, t),
                    data: t
                }, (o = n.groups) ? s = o.call(a, r) : (o = a && a.groups, s = typeof o === f ? o.call(a, r) : o), n.groups || (s = u.call(a, s, {
                    hash: {},
                    inverse: d.noop,
                    fn: d.program(2, e, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += "\n\n  "
            }

            function e(a, t) {
                var l = "",
                    s, o, e;
                return l += '\n      <li class="carousel-item page-container-responsive" data-index="', (o = n.index) ? s = o.call(a, {
                    hash: {},
                    data: t
                }) : (o = a && a.index, s = typeof o === f ? o.call(a, {
                    hash: {},
                    data: t
                }) : o), l += _(s) + '">\n        ', e = {
                    hash: {},
                    inverse: d.noop,
                    fn: d.program(3, r, t),
                    data: t
                }, (o = n.cards) ? s = o.call(a, e) : (o = a && a.cards, s = typeof o === f ? o.call(a, e) : o), n.cards || (s = u.call(a, s, {
                    hash: {},
                    inverse: d.noop,
                    fn: d.program(3, r, t),
                    data: t
                })), (s || 0 === s) && (l += s), l += "\n      </li>\n    "
            }

            function r(a, t) {
                var s = "",
                    o;
                return s += '\n          <div class="col-md-4">\n            ', o = d.invokePartial(l.listing_card, "listing_card", a, n, l, t), (o || 0 === o) && (s += o), s += "\n          </div>\n        "
            }
            this.compilerInfo = [4, ">= 1.0.0"], n = this.merge(n, a.helpers), l = this.merge(l, a.partials), s = s || {};
            var i = "",
                h, c, p, d = this,
                f = "function",
                _ = this.escapeExpression,
                u = n.blockHelperMissing;
            return i += '<ul class="listings-container carousel-item-list list-unstyled row">\n\n  ', p = {
                hash: {},
                inverse: d.noop,
                fn: d.program(1, o, s),
                data: s
            }, (c = n.cardGroups) ? h = c.call(t, p) : (c = t && t.cardGroups, h = typeof c === f ? c.call(t, p) : c), n.cardGroups || (h = u.call(t, h, {
                hash: {},
                inverse: d.noop,
                fn: d.program(1, o, s),
                data: s
            })), (h || 0 === h) && (i += h), i += "\n\n</ul>\n"
        }), this.JST["p3/similar_listings"]
    }.call(this);;