/**
 * Created by Adrian on 4/4월/17.
 */

$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    $(this).find('i').toggleClass('glyphicon-chevron-right').toggleClass('glyphicon-chevron-left');
});
