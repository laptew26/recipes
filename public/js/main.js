/*Регистрация*/

$('#regBtn').on('click', function (e) {
    e.preventDefault();

    let name = $('#nameReg').val();
    let email = $('#emailReg').val();
    let password = $('#passwordReg').val();

    $.ajax({
        type: 'POST',
        url: '/registration',
        dataType: 'text',
        cache: false,
        data: {name:name, email:email, password:password},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (){
            $('.form').hide();
            $('.alert-success').show();
        },
        error: function (msg){
            console.log(msg)
        },
    });
    return false;
});



/*Фильтрация заявок*/
// $('#filter').click(function () {
//     if ($("#filter option:selected").val() != "0"){
//         $('.card_item').hide();
//         $('.status_' + $("#filter option:selected").val()).show();
//     }
//     else{
//         $('.card_item').hide();
//     }
// });

/*Админ панель*/
// $('table').hide();
// $('.create').hide();
// $('#applicationsTable').show();
// $('#applicationsBtn').click(function () {
//     $('button').removeClass('active');
//     $('#applicationsBtn').addClass('active');
//     $('table').hide();
//     $('#applicationsTable').show();
//     $('.create').hide();
// });
// $('#categoriesBtn').click(function () {
//     $('button').removeClass('active');
//     $('#categoriesBtn').addClass('active');
//     $('table').hide();
//     $('#categoriesTable').show();
//     $('.create').show();
// });
//
// /*Проверка подтверждения пароля в регистрации*/
// $('#password, #password_confirmation').on('keyup', function () {
//     if ($('#password').val() == $('#password_confirmation').val()) {
//         $('#message').html('Пароли совпадают').addClass('alert alert-warning');
//     } else {
//         $('#message').html('Пароли не совпадают').addClass('alert alert-warning');
//         return false;
//     }
//
// });

/*Выбор статуса в админ панели*/
// $('.callback').hide();
// $('#status').click(function(){
//     if ($('#status option:selected').val() != ""){
//         $('.callback').hide();
//         $('.callback_' + $("#status option:selected").val()).show();
//     }
// });


/*Hover эффект для карточек заявок*/
// let sourceSwap = function () {
//     let $this = $(this);
//     let newSource = $this.data('alt-src');
//     $this.data('alt-src', $this.attr('src'));
//     $this.attr('src', newSource);
// }
//
// $(function () {
//     $('img.app').hover(sourceSwap, sourceSwap);
// });
