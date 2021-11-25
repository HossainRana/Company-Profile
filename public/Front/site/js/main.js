

/*          FLoating Button         */


$( document ).ready(function() {
    $("#getQuote").click(function() {
        $('html,body').animate({
                scrollTop: $("#getQuoteForm").offset().top},
            'slow');
    });
});

