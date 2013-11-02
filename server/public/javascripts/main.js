require.config({
	paths: {
		jquery: '../bower_components/jquery/jquery.min',
		bootstrap: '../bower_components/bootstrap/docs/assets/js/bootstrap.min',
		holder: '../bower_components/bootstrap/docs/assets/js/holder/holder'
	},
	shim: { 'bootstrap': { deps: ['jquery'] } }
});

require(['jquery', 'bootstrap', 'holder'], function ($, bootstrap, holder) {
	'use strict';

	var socket = io.connect();
	var $messageForm = $('#send-message');
	var $messageBox = $('#message');
	var $chat = $('#chat');

	$messageForm.submit(function(e){
		e.preventDefault();

		socket.emit('send message', $messageBox.val());
		$messageBox.val('');
	});
	
	socket.on('new message', function(data){
		var templateChat = '<li class="media">';
			templateChat += '\t<a class="pull-left" href="#">';
			templateChat += '\t\t<img class="media-object">';
			templateChat += '\t</a>';
			templateChat += '\t<div class="media-body">';
			templateChat += '\t\t<h4 class="media-heading">Rafael Antonio Lucio</h4>';
			templateChat += '\t\t'+data;
			templateChat += '\t</div>';
			templateChat += '</li>';

		$chat.children().append(templateChat);
	});
});