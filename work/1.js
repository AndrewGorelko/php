$(document).ready(function() {
$.ajax({
    method: "GET",
    url: "post.php",

    success: function (result) {
        console.log (result);
    }
})
)}
