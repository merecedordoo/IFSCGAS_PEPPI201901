(($) => {
    $(document).ready(() => {
        $('.overflow-text-600').each((i, e) => {
            let el = $(e);
            let text = el.text();

            if(text.length > 600)
                el.text(text.substring(0, 596) + '...');
        });
    });
})(jQuery);