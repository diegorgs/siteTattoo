
//Debounce do Lodash
debounce = function(func, wait, immdiate) {
    var timeout;
    return function() {
        var context = this, args = arguments;
        var later = function() {
        timeout = null;
        if (!immdiate) func.apply(context, args);
        };
        var callNow = immdiate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args)
        };
    };



(function () {

    let $target = $('.anime'),
        animationClass = 'anime-start',
        offset = $(window).height() * 3.6/4;

    function animeScroll() {
        let documentTop = $(document).scrollTop();

        $target.each(function() {
            var itemTop = $(this).offset().top;
            if (documentTop > itemTop - offset) {
                $(this).addClass(animationClass);
            } else {
                $(this).removeClass(animationClass);
            }
        })
    }

    animeScroll();

    $(document).scroll(debounce(function() {
        animeScroll ();
    }, 100));

}());