jQuery(window).load(function() {
    var $ = jQuery;

    $('img:not(".logo-img")').each(function () {
        if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) {
            var ieversion = new Number(RegExp.$1)
            if (ieversion >= 9)
                if (typeof this.naturalWidth === "undefined" || this.naturalWidth === 0) {
                    this.src = "http://placehold.it/" + ($(this).attr('width') || this.width || $(this).naturalWidth()) + "x" + (this.naturalHeight || $(this).attr('height') || $(this).height());
                }
        } else {
            if (!this.complete || typeof this.naturalWidth === "undefined" || this.naturalWidth === 0) {
                this.src = "http://placehold.it/" + ($(this).attr('width') || this.width) + "x" + ($(this).attr('height') || $(this).height());
            }
        }
    });
});