function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#profile-image')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
        var fileLabel = document.getElementById('file-label');
        fileLabel.innerText = input.files[0].name;
    }
}
