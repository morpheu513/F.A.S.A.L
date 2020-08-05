$(document).ready(function () {
  $('#add-crop-form').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var crop_type = button.data('crop-type') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    /*modal.find('.modal-title').text('N ' + crop_type)*/
    modal.find('#crop-type').val(crop_type)
    modal.find('#crop-name').val('')
    modal.find('#quantity').val('')
    modal.find('#crop-planted-date').val('')
  })
})