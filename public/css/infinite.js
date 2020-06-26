$(document).ready(function() {

    // The max number of images to be loaded at a time.
    var limit = 20;

    // JSON data will be assigned to this
    var images = "";

    // to remember where in JSON we are
    // initialize to the value of limit - so that we can load in images
    // before page scroll.
    var currentIndex = limit;

    // When there are fewer than `limit` images left, this
    // value will be the difference between the current index
    // and the length of the images array.
    var stop = limit;

    // hit up pixabay for images
    var apiKey = "2430018-6f65c9dad43d336b5ef56ed1c";

    // initialize masonry
    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true,
        columnWidth: '.grid-sizer'
    });

    // Make a GET request to the pixabay api
    $.getJSON("https://pixabay.com/api/?key=" + apiKey + "&per_page=200", function(data) {

        // save the data to be used later.
        images = data.hits;

    })

        // create the first round of images.
        .done(function() {
            var html = "";

            for (var i = 0; i < limit; i++) {
                html += '<div class="grid-item"><img src="' + images[i].webformatURL + '"></div>';
            }

            $html = $(html);

            $grid.append($html);
            $grid.imagesLoaded(function() {
                $grid.masonry('appended', $html).masonry('layout');
            });
        });

    $('.ui-btn').on('vclick', function() {

        //     // get the scoll position with support for IE
        //     // see https://jsbin.com/egegu3/6/edit?html,js,output
        //     // for original code.
        //     var totalHeight, currentScroll, visibleHeight;
        //     if (document.documentElement.scrollTop) {
        //       currentScroll = document.documentElement.scrollTop;
        //     } else {
        //       currentScroll = document.body.scrollTop;
        //     }

        //     totalHeight = document.body.offsetHeight;
        //     visibleHeight = document.documentElement.clientHeight;

        //     var windowHeight = $(window).height();
        //     var docHeight = $(document).height();
        //     var scroll = $(document).scrollTop();
        //     // only load more images if the scroll bar is at the bottom
        //     if (totalHeight <= currentScroll + visibleHeight + 100) {
        //     if (docHeight - windowHeight <= scroll) {
        var diff = images.length - (currentIndex + 1);

        // if the difference is > 0 then there are more images in the array
        if (diff > 0) {
            stop = diff > limit ? limit : diff;
            getImages(currentIndex, stop);
            currentIndex += stop;
        }

        // otherwise, reset the index before calling getImages()
        else {
            currentIndex = 0;
            getImages(currentIndex, stop);
            currentIndex += stop;
        }
    });

    // gets the path for each image from index to stop
    function getImages(index, stop) {

        var html = "";

        // create the img tags.
        for (var i = index; i < index + stop; i++) {
            html += '<div class="grid-item"><img src="' + images[i].webformatURL + '"></div>';
        }

        $html = $(html);

        $grid.append($html);
        $grid.imagesLoaded(function() {
            $grid.masonry('appended', $html).masonry('layout');
        });
    }

});