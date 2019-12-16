$(document).ready(function () {
    $('#choose-crop-type').on('click', '.btn-primary', function () {
        var button = $(this)
        var crop_type = button.data('crop-type')
        console.log(crop_type)
        $('div form div #type-of-crop').val(crop_type)
    })
})        
