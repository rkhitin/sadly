$(function() {
    $('#goup-cursor').click(function() {
        $('html,body').animate({scrollTop:0}, 200);
    })
    $('#goup-cursor').hover(function() {
        $('#goup').css('opacity', '0.5');
    }, function() {
        $('#goup').css('opacity', '0.25');
    })
    $(window).scroll(function() {
        var speedAnimation = 300;
        var position = $(this).scrollTop();
        var effect = (position > 500) ? 'fadeIn' : 'fadeOut';
        // console.log(position);

        $('#goup')[effect](speedAnimation);
        $('#goup-cursor')[effect](speedAnimation);
    })
})
