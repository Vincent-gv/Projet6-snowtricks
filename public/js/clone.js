function moreVideo() {
    if (!$("#add-video :input").val()) {
        alert("Please fill all required fields");
        return false;
    } else {
        $('#add-video').removeAttr('id');
        document.getElementById("add-video-child").insertAdjacentHTML("beforeend",
            "<div id=\"add-video\" class=\"row mt-2\"> <div class=\"col-lg-5 col-md-5 col-sm-6\"> <select id=\"group\" class=\"custom-select\" name=\"group\"> <option value=\"\">Select Video Plateform</option> <option value=\"YouTube\">YouTube</option> <option value=\"DailyMotion\">DailyMotion</option> </select> </div> <div class=\"col-lg-7 col-md-7 col-sm-6\"> <input name=\"video-url\" type=\"text\" class=\"form-control\" placeholder=\"Enter the video ID\"> </div> </div>");
    }
}

function morePicture() {
    if (!$("#add-picture :input").val()) {
        alert("Please fill all required fields");
        return false;
    } else {
        document.getElementById("add-picture-child").insertAdjacentHTML("beforeend",
            "<div id=\"add-picture\" class=\"form-row mt-2\"> <div class=\"col-lg-12 col-md-12 col-sm-12\"> <div class=\"form-group-2\"> <input type=\"file\" class=\"custom-file-input\" id=\"validatedCustomFile\" required> <label class=\"custom-file-label\" for=\"validatedCustomFile\">Choose file...</label> </div> </div> </div>");
    }
}