$(function() {
guid = $.parseQuery(this.href).guid;
if (guid !== undefined) {
    $(window).scrollTop($('#reply-topicreply-' + guid).offset().top - 100);
}
});