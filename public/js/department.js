$(document).ready(function () {
    console.log("DEPARTMENT");
    $('#department-form').submit(function (e) {
        e.preventDefault()
        const formData = $(this).serialize();

        $.ajax({
            type: "post",
            url: "{{ route('department.create') }}",
            data: formData,
            success: function (response) {
                console.log(response);
            }
        });
    })

})