$(function() {
query = $.parseQuery(this.href);
guid = query.guid;
box = query.box;
if (guid !== undefined && box !== undefined && (box === 'reply' || box === 'edit')) {
$(window).scrollTop($('#' + box + '-topicreply-' + guid).offset().top - 100);
}
});