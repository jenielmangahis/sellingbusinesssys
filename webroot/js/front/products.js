$(function(){
  $('.thumbnail').hover(
        function(){
            $(this).find('.caption').fadeIn(250)
        },
        function(){
            $(this).find('.caption').fadeOut(205)
        }
    ); 
  $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});