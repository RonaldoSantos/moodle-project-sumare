select * from users;
select * from type_users;

insert into users (username
	, password
	, first_name
	, last_name
	, email
	, date_register
	, status
	, type_users
	, image_user_path) 
values ('aluno'
	, '63a9f0ea7bb98050796b649e85481845'
	, 'aluno'
	, 'aluno'
	, 'aluno@aluno.com'
	, now()
	, 1
	, 4
	, '/users/id/documents/image.jpg');

select * from courses;

insert into courses (
	course_title,
	course_description,
	course_status,
	course_datetime
) values (
	'Ciência da Computação',
	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, error non aspernatur quasi dolorum velit.',
	1,
	now()
);

select * from team;

insert into team (
	team_title,
	team_status
) values (
	'N2-Turma-PERSENCIAL-2',
	1
);

select * from users_team;

insert into users_team (
	id_users,
	id_team
) values (
	3,
	1
);

select * from type_disciplines;

insert into type_disciplines (
	type_discipline_description
) values (
	'Online'
);

select * from disciplines;

insert into disciplines (
	discipline_title,
	discipline_description,
	discipline_status,
	id_type_disciplines
) values (
	'Redes para computação II',
	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, voluptate.',
	1,
	2
);

select * from course_disciplines;

insert into course_disciplines () values ();