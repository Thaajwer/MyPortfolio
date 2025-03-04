! function(e) {
    e.fn.hover3d = function(t) {
        var r = e.extend({
            selector: null,
            perspective: 1e3,
            sensitivity: 20,
            invert: !1,
            shine: !1,
            hoverInClass: "hover-in",
            hoverOutClass: "hover-out",
            hoverClass: "hover-3d"
        }, t);
        return this.each(function() {
            function t(e) {
                i.addClass(r.hoverInClass + " " + r.hoverClass), currentX = currentY = 0, setTimeout(function() {
                    i.removeClass(r.hoverInClass)
                }, 1e3)
            }

            function s(e) {
                var t = i.innerWidth(),
                    s = i.innerHeight(),
                    n = Math.round(e.pageX - i.offset().left),
                    o = Math.round(e.pageY - i.offset().top),
                    v = r.invert ? (t / 2 - n) / r.sensitivity : -(t / 2 - n) / r.sensitivity,
                    c = r.invert ? -(s / 2 - o) / r.sensitivity : (s / 2 - o) / r.sensitivity,
                    u = n - t / 2,
                    p = o - s / 2,
                    f = Math.atan2(p, u),
                    h = 180 * f / Math.PI - 90;
                0 > h && (h += 360), i.css({
                    perspective: r.perspective + "px",
                    transformStyle: "preserve-3d",
                    transform: "rotateY(" + v + "deg) rotateX(" + c + "deg)"
                }), a.css("background", "linear-gradient(" + h + "deg, rgba(255,255,255," + e.offsetY / s * .5 + ") 0%,rgba(255,255,255,0) 80%)")
            }

            function n() {
                i.addClass(r.hoverOutClass + " " + r.hoverClass), i.css({
                    perspective: r.perspective + "px",
                    transformStyle: "preserve-3d",
                    transform: "rotateX(0) rotateY(0)"
                }), setTimeout(function() {
                    i.removeClass(r.hoverOutClass + " " + r.hoverClass), currentX = currentY = 0
                }, 1e3)
            }
            var o = e(this),
                i = o.find(r.selector);
            currentX = 0, currentY = 0, r.shine && i.append('<div class="shine"></div>');
            var a = e(this).find(".shine");
            o.css({
                perspective: r.perspective + "px",
                transformStyle: "preserve-3d"
            }), i.css({
                perspective: r.perspective + "px",
                transformStyle: "preserve-3d"
            }), a.css({
                position: "absolute",
                top: 0,
                left: 0,
                bottom: 0,
                right: 0,
                transform: "translateZ(1px)",
                "z-index": 9
            }), o.on("mouseenter", function() {
                return t()
            }), o.on("mousemove", function(e) {
                return s(e)
            }), o.on("mouseleave", function() {
                return n()
            })
        })
    }
}(jQuery);