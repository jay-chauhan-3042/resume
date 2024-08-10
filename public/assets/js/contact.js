$("#contact-form").submit(function (event) {
    event.preventDefault();
    $("#submit").attr("disabled", true);
    $("#submit-test").text("Sending Message...");
    $("#submit-icon").addClass("hide");

    var form = $(this);
    var formdata = form.serializeArray();
    console.log(formdata);

    var formData = new FormData();
    $.each(formdata, (index, data) => {
        formData.append(data.name, data.value);
    });

    $.ajax({
        type: "POST",
        url: "/api/contact",
        data: formData,
        processData: false,  // Prevent jQuery from converting the data to a string
        contentType: false,  // Prevent jQuery from setting a content-type header
        success: function (response) {
            // Handle the response here
            if (response.status == 200) {
                $("#submit").attr("disabled", false);
                $("#submit-test").text("Send Message");
                $("#submit-icon").removeClass("hide");
                form.trigger("reset");
            }
        },
        error: function (xhr, status, error) {
            // Handle errors here
            console.error(xhr, status, error);
            $("#submit").attr("disabled", false);
            $("#submit-test").text("Send Message");
            $("#submit-icon").removeClass("hide");
        }
    });

});
