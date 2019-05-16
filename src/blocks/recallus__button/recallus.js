import $ from 'jquery';
window.$ = window.jQuery = $;


$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
});

$('#input22,#input2, #input-2').focus(function(){
    $(this).attr("value","");
});

$('#input22,#input2, #input-2').blur(function(){
    $(this).attr("value","Введите ваш телефон");
});

// $('#exampleModal').on('show.bs.modal', function (event) {
//     var button = $(event.relatedTarget) // Button that triggered the modal
//     var recipient = button.data('whatever') // Extract info from data-* attributes
//     // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
//     // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
//     var modal = $(this)
//     modal.find('.modal-title').text('Если вы не смогли определиться или у вас остались вопросы')
//     modal.find('.modal-body input').val(recipient)
// })