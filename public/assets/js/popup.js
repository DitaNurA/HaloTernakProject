$(function() {
    $('.popup-before').before().on('click', function() {
        $('.popup-container').each(function() {
            $(this).addClass('hidden')
            $(this).find('.popup-card').removeClass('popup-animation')
        })
    })

    $('.popup-btn').on('click', function() {
        const popupContainer = $('.' + $(this).attr('data-target'))

        popupContainer.removeClass('hidden')
        popupContainer.find('.popup-card').addClass('popup-animation')
    })

    $('.popup-btn-close').on('click', function() {
        const popupContainer = $('.' + $(this).attr('data-target'))
        
        popupContainer.addClass('hidden')
        popupContainer.find('.popup-card').removeClass('popup-animation')
    })
})