$(document).ready(function() {
    $.post('view_courses.php', function(data) {
	$('.course_list').html(data);
    });
});
