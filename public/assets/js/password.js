$(function() {
    $('.toggle-password').on('click', function() {
        const input = $($(this).attr('data-input'))

        if ( input.attr('type') === 'password' ) {
            input.attr('type', 'text')
        } else {
            input.attr('type', 'password')
        }
    })
})