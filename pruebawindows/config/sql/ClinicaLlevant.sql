
/*use bdClinica;*/


create table paises (
	id int auto_increment primary key,
    codigo_Traduccion varchar (255) not null
);


create table ciudades (
	id int auto_increment primary key,
    codigo_Traduccion varchar (255) not null,
    id_pais int,
	CONSTRAINT fk_ciudad_pais FOREIGN KEY (id_pais)
    REFERENCES paises(id)
);


create table usuarios (
	id int auto_increment primary key,
    nombre varchar(255) not null,
    apellido1 varchar(255) not null,
    apellido2 varchar(255) null,
    id_ciudad int,
    constraint fk_usuario_ciudad foreign key (id_ciudad) references ciudades(id)
);


create table historial_medico(
	id int auto_increment primary key,
    informe varchar (2000) not null
);


create table pacientes (
	id int auto_increment primary key,
    esta_registrado boolean default 0,
    dni varchar(255) null,
    nombre_usuario varchar(255) null,
    contraseña varchar(255) null,
    telefono int null,
    email varchar(255) null,
    direccion varchar(400) null,
    fecha_nacimiento date null,
    compañia_Aseguradora varchar(255) null,
    id_historial int,
    id_usuario int,
	constraint fk_paciente_historial foreign key (id_historial) references historial_medico(id),
	constraint fk_paciente_usuario foreign key (id_usuario) references usuarios(id)
);


create table roles (
	id int auto_increment primary key,
    codigo_traduccion varchar(255) not null
);

/*con el estado del trabajador sabremos si esta de vacaciones, de baja....*/
create table estado_trabajador(
	id int auto_increment primary key,
    fecha_inicio date not null,
    fecha_final date not null,
    hora_inicio time not null,
    hora_final time not null
);

create table especialidades(
	id int auto_increment primary key,
    codigo_traduccion varchar(255) not null
);


create table horarios(
	id int auto_increment primary key,
    fecha_inicio date not null,
    fecha_final date not null,
    hora_inicio time null,
    hora_final time null
);


create table trabajadores (
	id int auto_increment primary key,
    dni varchar(255) not null,
    nombre_usuario varchar(255) not null,
    contraseña varchar(255) not null,
    email varchar(255) not null,
    telefono int not null,
    direccion varchar(400) not null,
    id_rol int,
    id_usuario int,
    id_estado int,
    id_horario int,
    constraint fk_trabajador_rol foreign key (id_rol) references roles(id),
    constraint fk_trabajador_estado foreign key (id_estado) references estado_trabajador(id),
    constraint fk_trabajador_usuario foreign key (id_usuario) references usuarios(id),
    constraint fk_trabajador_horario foreign key (id_horario) references horarios(id)
);


create table trabajador_especialidad (
	id_trabajador int,
	id_especialidad int,
    primary key(id_trabajador,id_especialidad),
    constraint fk_trabajador_especialidad_trabajador foreign key(id_trabajador) references trabajadores(id),
    constraint fk_especialidad_trabajador_especialidad foreign key(id_especialidad) references especialidades(id)
);




create table tipos_cita(
	id int auto_increment primary key,
    precio float not null,
    tiempo_aproximado time not null,
	codigo_traduccion varchar(255) not null
);

create table estados_cita(
	id int auto_increment primary key,
    codigo_traduccion varchar(255) not null
);


create table citas (
	id int auto_increment primary key,
    fecha datetime not null,
    formato enum("online","presencial"),
    id_tipo int,
    id_estado int,
    id_trabajador_crea int null,
    id_trabajador_atiende int null,
    id_horario int,
    id_paciente int,
    constraint fk_cita_tipo foreign key(id_tipo) references tipos_cita(id),
    constraint fk_cita_estado foreign key(id_estado) references estados_cita(id),
    constraint fk_cita_trabajador_crea foreign key(id_trabajador_crea) references trabajadores(id),
    constraint fk_cita_trabajador_atiende foreign key(id_trabajador_atiende) references trabajadores(id),
    constraint fk_cita_horario foreign key(id_horario) references horarios(id),
    constraint fk_cita_paciente foreign key(id_paciente) references pacientes(id)
);


create table dias_festivos (
	id int auto_increment primary key,
    fecha date not null,
    codigo_traduccion varchar(255) not null
);


create table horario_dias_festivos (
	id_horario int,
    id_dias_festivos int,
    primary key(id_horario,id_dias_festivos),
    constraint fk_horario_dias_festivos foreign key(id_horario) references horarios(id),
    constraint fk_dias_festivos_horario foreign key(id_dias_festivos) references dias_festivos(id)
);


create table facturas(
	id int auto_increment primary key,
    fecha datetime not null,
    importe float not null,
    estado enum("PAGADO","NO"),
    porcentaje_seguro int,
    id_cita int,
    constraint fk_factura_cita foreign key (id_cita) references citas(id)
);

create table copia_factura(
	id_factura int,
    constraint fk_copia_factura foreign key(id_factura) references facturas(id)
);

create table urgencias(
	id int auto_increment primary key,
    id_factura int,
    constraint fk_urgencia_factura foreign key (id_factura) references facturas (id)
);

create table trabajador_urgencia(
	id_trabajador int,
    id_urgencia int,
    constraint fk_trabajador_urgencia foreign key (id_trabajador) references trabajadores(id),
    constraint fk_urgencia_trabajador foreign key (id_urgencia) references urgencias(id)
);


create table trabajador_urgencia_paciente (
	id_trabajador int,
    id_urgencia int,
    id_paciente int,
    fecha datetime,
	constraint fk_trabajador_urgencia_paciente_trabajador foreign key (id_trabajador) references trabajadores(id),
	constraint fk_trabajador_urgencia_paciente foreign key (id_paciente) references pacientes(id),
    constraint fk_trabajador_urgencia_paciente_urgencia foreign key (id_urgencia) references urgencias(id)
);

create table diagnostico (
	id int auto_increment primary key,
    fecha datetime not null,
    descripcion varchar (2000) not null,
    codigoTraduccion varchar(255) not null
);















