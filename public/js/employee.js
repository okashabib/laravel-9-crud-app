$(document).ready(function() {
    console.log("Loaded");

    $('#employee-form').submit(function(e) {
        e.preventDefault();

        const formData = $(this).serialize();
        console.log("🚀 ~ formData:", formData)

        $.ajax({
            type: "post",
            url: "{{ route('employee.create') }}",
            data: formData,
            success: function (response) {
                console.log(response);
            }
        });
    });

});