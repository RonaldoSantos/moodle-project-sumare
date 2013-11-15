require.config({
	paths: {
		jquery: '../bower_components/jquery/jquery.min',
		bootstrap: '../bower_components/bootstrap/docs/assets/js/bootstrap.min',
		ckeditor: '../bower_components/ckeditor/ckeditor'
	},
	shim: { 'bootstrap': { deps: ['jquery'] } }
});

require(['jquery', 'bootstrap', 'ckeditor'], function ($, bootstrap, ckeditor) {
	'use strict';

	var redirectPage = function () {
		if (localStorage.getItem('redirect') === null) {
			localStorage.setItem('redirect', 'true');
			window.location.href = '/index.html';
		}
	};

	redirectPage();

	var sidebarActive = function () {
		$('.sidebar-teacher ul li').on('click', function () {
			if($(this).hasClass('nav-header')) {
				return false;
			}

			$('.sidebar-teacher ul li').removeClass('active');
			$(this).addClass('active');
		});
	};

	sidebarActive();

	var createTopic = function () {
		$('.createTopic').on('click', function () {
			var textTopic = $('.input-append').find('input').val(),
				lengthAccordion = $('#accordion2').find('.accordion-group').size(),
				accordionGroup = $('#accordion2');

			var templateAccordion = '<div class="accordion-group">';
			templateAccordion += '<div class="accordion-heading">';
			templateAccordion += '<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse'+(lengthAccordion+1)+'">'+(textTopic)+'</a>';
			templateAccordion += '</div>';
			templateAccordion += '<div id="collapse'+(lengthAccordion+1)+'" class="accordion-body collapse">';
			templateAccordion += '<div class="accordion-inner">';
			templateAccordion += '<a href="#"><i class="icon-wrench"></i>Editar conteúdo </span></a>';
			templateAccordion += '<a href="create_activit.html#sistemas-operacionais" class="btn btn-small" type="button">Criar atividade</a>';
			templateAccordion += '</div>';
			templateAccordion += '</div>';
			templateAccordion += '</div>';
			
			if (textTopic === '' || textTopic === undefined) {
				$('.input-append').find('input').attr('placeholder', 'Preencha a descrição do campo.');
				return false;
			} else {
				accordionGroup.append(templateAccordion);
			}
		});
	};

	createTopic();

	$('#submitLogin').on('click', function () {
		var user = $('#username'),
			pass = $('#password');

		// if (user.val() !== '' || pass.val() !== '') {
		// 	alert('não tenho o  que faze');
		// } else {
		// 	window.location = 'restricted_teacher.html';
		// }
		
		if (user.val() === 'admin' || pass.val() !== '') {
			window.location.href = 'ead-admin/';
		}

		if (user.val() === 'professor' || pass.val() !== '') {
			window.location.href = 'ead-teacher/';
		}

		if (user.val() === 'aluno' || pass.val() !== '') {
			window.location.href = 'ead-student/';
		}
	});

	var validateLogin = function () {
		var user = $('#username'),
			pass = $('#password'),
			regexUser = /[a-zA-Z0-9_]{3}/gi,
			regexPass = /\w{4}/;


		console.log(regexUser.test(user.val()));
		console.log(regexPass.test(pass.val()));
	};

	// $('#submitLogin').on('click', function (event) {
	// 	event.preventDefault();

	// 	validateLogin();
	// 	return false;
	// });
});