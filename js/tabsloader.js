//This file works to make sure the proper tab is highlighted based on keywords in the URL

$(function() {
    if (window.location.href.indexOf("index") > -1) {

        $('#homeTab').parent('li').addClass('active');

    }
    else if (window.location.href.indexOf("team") > -1) {

        $('#teamTab').parent('li').addClass('active');

    }
    /* Commented out for tive 10/12/2014
    else if (window.location.href.indexOf("media") > -1) {

        $('#mediaTab').parent('li').addClass('active');

    }
    */
    else if (window.location.href.indexOf("Sounds") > -1) {

        $('#musicTab').parent('li').addClass('active');

    }
    else if (window.location.href.indexOf("Visuals") > -1) {

        $('#visualsTab').parent('li').addClass('active');

    }
    else if (window.location.href.indexOf("blog") > -1) {

        $('#blogTab').parent('li').addClass('active');

    }
    else{

        $('#homeTab').parent('li').addClass('active');

    }
});