$(function () {
    const toast = $('.notificacao--toast');
    const close = $('.feather-x');

    close.on('click', function () {
        toast.removeClass('ativo');
    });

    setTimeout(() => {
        toast.removeClass('ativo')
    }, 3000);
});