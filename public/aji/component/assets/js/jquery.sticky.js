! function(e) {
    "function" == typeof define && define.amd ? define(["jquery"], e) : e(jQuery)
}(function(e) {
    "use strict";

    function t(t) {
        var n, s, l = i[e(this).prop("stickOnScroll")];
        for (n = 0, s = l.length; s > n; n++) ! function(t) {
            var i, s, r, c, p, f;
            t = l[n], null !== t && (e.contains(document.documentElement, t.ele[0]) || (l[n] = t = null)), null !== t && (i = t.viewport.scrollTop(), s = t.getEleMaxTop(), t.isWindow === !1 && o && t.ele.stop(), i >= s ? (r = {
                position: "fixed",
                top: t.topOffset - t.eleTopMargin
            }, t.isWindow === !1 && (r = {
                position: "absolute",
                top: i + t.topOffset - t.eleTopMargin
            }), t.isStick = !0, t.footerElement.length && (c = t.getEleTopPosition(t.footerElement), p = t.ele.outerHeight(), f = r.top + p + t.bottomOffset + t.topOffset, t.isWindow === !1 ? f = p + t.bottomOffset + t.topOffset : (f = r.top + i + p + t.bottomOffset, c = t.getElementDistanceFromViewport(t.footerElement)), f > c && (t.isWindow === !0 ? r.top = c - (i + p + t.bottomOffset) : r.top = i - (f - c))), t.setParentOnStick === !0 && t.eleParent.css("height", t.eleParent.height()), t.setWidthOnStick === !0 && t.ele.css("width", t.ele.css("width")), t.isViewportOffsetParent || (r.top = r.top - t.getElementDistanceFromViewport(t.eleOffsetParent)), o && t.isWindow === !1 ? t.ele.addClass(t.stickClass).css("position", r.position).animate({
                top: r.top
            }, 150) : t.ele.css(r).addClass(t.stickClass), t.wasStickCalled === !1 && (t.wasStickCalled = !0, setTimeout(function() {
                t.isOnStickSet === !0 && t.onStick.call(t.ele, t.ele), t.ele.trigger("stickOnScroll:onStick", [t.ele])
            }, 20))) : s >= i && t.isStick && (t.ele.css({
                position: "",
                top: ""
            }).removeClass(t.stickClass), t.isStick = !1, t.setParentOnStick === !0 && t.eleParent.css("height", ""), t.setWidthOnStick === !0 && t.ele.css("width", ""), t.wasStickCalled = !1, setTimeout(function() {
                t.isOnUnStickSet && t.onUnStick.call(t.ele, t.ele), t.ele.trigger("stickOnScroll:onUnStick", [t.ele])
            }, 20)), 0 === i && t.setEleTop())
        }(l[n]);
        return this
    }
    var o = e.support.optSelected === !1 ? !0 : !1,
        i = {};
    e.fn.stickOnScroll = function(o) {
        return this.each(function() {
            function n() {
                r.setEleTop(), s = r.viewport.prop("stickOnScroll"), r.isWindow || (r.isViewportOffsetParent = r.eleOffsetParent[0] === r.viewport[0]), s || (s = "stickOnScroll" + String(Math.random()).replace(/\D/g, ""), r.viewport.prop("stickOnScroll", s), i[s] = [], r.viewport.on("scroll", t)), i[s].push(r), r.viewport.scroll()
            }
            if (e(this).hasClass("hasStickOnScroll")) return this;
            var s, l, r = e.extend({}, {
                    topOffset: 0,
                    bottomOffset: 5,
                    footerElement: null,
                    viewport: window,
                    stickClass: "stickOnScroll-on",
                    setParentOnStick: !1,
                    setWidthOnStick: !1,
                    onStick: null,
                    onUnStick: null
                }, o),
                c = 1800;
            return r.isStick = !1, r.ele = e(this).addClass("hasStickOnScroll"), r.eleParent = r.ele.parent(), r.eleOffsetParent = r.ele.offsetParent(), r.viewport = e(r.viewport), r.eleTop = 0, r.eleTopMargin = parseFloat(r.ele.css("margin-top") || 0) || 0, r.footerElement = e(r.footerElement), r.isWindow = !0, r.isOnStickSet = e.isFunction(r.onStick), r.isOnUnStickSet = e.isFunction(r.onUnStick), r.wasStickCalled = !1, r.isViewportOffsetParent = !0, r.setEleTop = function() {
                r.isStick === !1 && (r.isWindow ? r.eleTop = r.ele.offset().top : r.eleTop = r.ele.offset().top - r.viewport.offset().top)
            }, r.getEleTopPosition = function(e) {
                var t = 0;
                return t = r.isWindow ? e.offset().top : e.offset().top - r.viewport.offset().top
            }, r.getEleMaxTop = function() {
                var e = r.eleTop - r.topOffset;
                return r.isWindow || (e += r.eleTopMargin), e
            }, r.getElementDistanceFromViewport = function(e) {
                var t = e.position().top,
                    o = e.offsetParent();
                return o.is("body") || o.is("html") ? t : t += o[0] !== r.viewport[0] ? r.getElementDistanceFromViewport(o) : r.viewport.scrollTop()
            }, r.setParentOnStick === !0 && r.eleParent.is("body") && (r.setParentOnStick = !1), e.isWindow(r.viewport[0]) || (r.isWindow = !1), r.ele.is(":visible") ? n() : l = setInterval(function() {
                (r.ele.is(":visible") || !c) && (clearInterval(l), n()), --c
            }, 100), this
        })
    }
});