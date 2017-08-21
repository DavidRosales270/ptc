$(document).ready(function() {

    function checkIframeLoaded() {
        // Get a handle to the iframe element
        var iframe = document.getElementById('load_announce');
        var iframeDoc = iframe.contentDocument || iframe.contentWindow.document;

        // Check if loading is complete
        if (  iframeDoc.readyState  == 'complete' ) {
            // The loading is complete, call the function we want executed once the iframe is loaded
            afterLoading();
            return;
        }

        // If we are here, it is not loaded. Set things up so we check   the status again in 100 milliseconds
        window.setTimeout('checkIframeLoaded();', 100);
    }

    checkIframeLoaded();

    function afterLoading(){
        $('.wait').hide();
        $('.timer').html('15').show();

        setTimeout(function(){ controlTiempo(); }, 1000);
    }

    function controlTiempo()
    {
        var tact = $('.timer').html();
        if (tact > 0)
        {

            $('.timer').html(tact - 1);
            setTimeout(function(){ controlTiempo(); }, 1000);
        }
        else
        {
            $('.timer').hide();
            $('.valid_announce').show();
        }
    }
$('.btn').on('click', function() {
    window.close();
})


});
