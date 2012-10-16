$(document).ready(function() {
    $.post('view_courses.php', function(data) {
	$('.course_list').html(data);
    });
    $.post('view_users.php', function(data) {
	$('.user_list').html(data);
	$('.user_list').bind('change', function(){
	    var $user = ($('#user_list').val());
	    $.post('set_user_session.php', {user: $user}, function(data){
		$.post('show_user.php', function(data){
		    if(data){
			$('.user_list').html('You are now logged in as ' + data + '.'); 
		    }
		});
	    });
	});
    });
    
    $('.new_user_button').bind('mouseup', function(){
	var $id = ($('.new_user').val());
	$.post('set_user_session.php', {user: $user}, function(data){
	    $.post('show_user.php', function(data){
		if(data){
		    $('.user_list').html('You are now logged in as ' + data + '.'); 
		}
	    });
	});
    });


    $('.random_button').bind('mouseup', function(){
	$.post('random_question.php', function(data){
	    $('.question_content').html(data);

   $('.show_answer').bind('mouseup', function(){
	console.log('show answer button pressed');
	$qid = $('.show_answer').data('qid'); 
	$.post('question_answer.php', {qid: $qid},  function(data){
	    $('.question_answer').html(data);
	});
    });

	});
    });

 
});
