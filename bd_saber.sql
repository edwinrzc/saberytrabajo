-- Table: viviendo.mvv_carrera_estudio

-- DROP TABLE viviendo.mvv_carrera_estudio;

CREATE TABLE viviendo.mvv_carrera_estudio
(
  cod_car_est serial NOT NULL, -- Codigo carrera de estudio
  nom_car_est character varying(40), -- Nombre de la carrera de estudio
  des_car_est text, -- Descripcion de la carrera
  est_reg character(1) DEFAULT 'A'::bpchar, -- Estatus del registro,opciones A para activo y E para eliminado
  CONSTRAINT "PK_carrera_estudio" PRIMARY KEY (cod_car_est)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE viviendo.mvv_carrera_estudio
  OWNER TO postgres;
COMMENT ON TABLE viviendo.mvv_carrera_estudio
  IS 'Tabla de la carrera de estudio';
COMMENT ON COLUMN viviendo.mvv_carrera_estudio.cod_car_est IS 'Codigo carrera de estudio';
COMMENT ON COLUMN viviendo.mvv_carrera_estudio.nom_car_est IS 'Nombre de la carrera de estudio';
COMMENT ON COLUMN viviendo.mvv_carrera_estudio.des_car_est IS 'Descripcion de la carrera';
COMMENT ON COLUMN viviendo.mvv_carrera_estudio.est_reg IS 'Estatus del registro,opciones A para activo y E para eliminado';



-- Table: viviendo.mvv_centro_penitenciario

-- DROP TABLE viviendo.mvv_centro_penitenciario;

CREATE TABLE viviendo.mvv_centro_penitenciario
(
  cod_cen_pen serial NOT NULL, -- Codigo del centro penitenciario
  nom_cen_pen character varying(60) NOT NULL, -- Nombre del centro penitenciario
  cod_edo integer, -- Codigo del estado
  est_reg character(1) DEFAULT 'A'::bpchar, -- Estatus del registro, opciones A si esta activo y E si ha sido eliminado por el usuario
  CONSTRAINT "PK_centro_penitenciario" PRIMARY KEY (cod_cen_pen)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE viviendo.mvv_centro_penitenciario
  OWNER TO postgres;
COMMENT ON TABLE viviendo.mvv_centro_penitenciario
  IS 'Tabla del centro penitenciario';
COMMENT ON COLUMN viviendo.mvv_centro_penitenciario.cod_cen_pen IS 'Codigo del centro penitenciario';
COMMENT ON COLUMN viviendo.mvv_centro_penitenciario.nom_cen_pen IS 'Nombre del centro penitenciario';
COMMENT ON COLUMN viviendo.mvv_centro_penitenciario.cod_edo IS 'Codigo del estado ';
COMMENT ON COLUMN viviendo.mvv_centro_penitenciario.est_reg IS 'Estatus del registro, opciones A si esta activo y E si ha sido eliminado por el usuario';



-- Table: viviendo.mvv_comunidad_indigena

-- DROP TABLE viviendo.mvv_comunidad_indigena;

CREATE TABLE viviendo.mvv_comunidad_indigena
(
  cod_com_ind serial NOT NULL, -- Codigo de la comunidad indigena
  nom_com_ind character varying(50) NOT NULL, -- Nombre de la comunidad indigena
  des_com_ind text, -- Descripcion de la comunidad indigena
  CONSTRAINT "PK_comunidad_indigena" PRIMARY KEY (cod_com_ind)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE viviendo.mvv_comunidad_indigena
  OWNER TO postgres;
COMMENT ON TABLE viviendo.mvv_comunidad_indigena
  IS 'Tabla de las comunidades indigenas del pais';
COMMENT ON COLUMN viviendo.mvv_comunidad_indigena.cod_com_ind IS 'Codigo de la comunidad indigena';
COMMENT ON COLUMN viviendo.mvv_comunidad_indigena.nom_com_ind IS 'Nombre de la comunidad indigena';
COMMENT ON COLUMN viviendo.mvv_comunidad_indigena.des_com_ind IS 'Descripcion de la comunidad indigena';




-- Table: viviendo.mvv_dp_encuestado

-- DROP TABLE viviendo.mvv_dp_encuestado;

CREATE TABLE viviendo.mvv_dp_encuestado
(
  cod_dp_enc serial NOT NULL, -- Codigo datos personales encuestado
  cod_par character varying(6), -- Codigo de la parroquia
  dir_com_dp_enc character varying(150), -- Direccion completa de la encuesta
  sec_dp_enc character varying(80), -- Sector localidad
  pun_ref_dp_enc character varying(80), -- Punto de referencia
  pri_nom_dp_enc character varying(40) NOT NULL, -- Primer nombre del encuestado
  seg_nom_dp_enc character varying(40), -- Segundo nombre del encuestado
  pri_ape_dp_enc character varying(40) NOT NULL, -- Primer apellido del encuestado
  seg_ape_dp_enc character varying(40), -- Segundo apellido del encuestado
  nac_dp_enc character varying(1) NOT NULL, -- Nacionalidad, campo con dos opciones: V es igual a venezolano y E es igual a extranjero
  ced_dp_enc integer NOT NULL, -- Cedula de identidad del encuestado
  cod_nac_enc integer NOT NULL, -- Codigo nacionalidad encuestado
  sit_leg_dp_enc character(3) DEFAULT 'N/A'::bpchar, -- Situacion legal del encuestado las opciones pueden ser: N que es igual a Nacionalizado, R que es igual a residenciado o N/A no aplica
  fec_nac_dp_enc date, -- Fecha de nacimiento del encuestado
  lug_nac_dp_enc character varying(50), -- Lugar de nacimiento del encuestado
  par_nac_dp_enc character(1), -- Partida de nacimiento del encuestado, Opciones S es igua a Si y N es igual No
  sex_dp_enc character(1), -- Sexo del encuestado, opciones M es igual a Masculino y F es igual a Femenino
  est_emb_dp_enc character(1), -- Estado de empresa, opciones S es igual Si y N es igual No
  sem_emb_dp_enc numeric, -- Semanas de embarazo
  asi_ctrl_emb_dp_enc character(1), -- Si asiste a control de embarazo, opciones S si es Si y N si es No
  cod_est_civ integer, -- Codigo del estado civil del encuestado
  es_ind_dp_enc character(1), -- Si es indigena el encuestado, opciones S si es Si y N si es No
  cod_com_ind integer, -- Codigo comunidad indigena
  mail_dp_enc character varying(100), -- Correo electronico del encuestado
  tel_hab_dp_enc character varying(16), -- Telefono de habitacion del contacto
  tel_cel_dp_enc character varying(16), -- Telefono celular del encuestado
  est_act_dp_enc character(1), -- Si estudia actualmente el encuestado, Opciones S  es igual Si y N es igual No
  tip_ins_dp_enc character(2), -- Tipo de institucion donde estudia el encuestado, opciones P si es publica y PV si es Privada
  cod_mot_est integer, -- Codigo del motivo por el cual no estudia el encuestado
  cod_niv_ins integer, -- Codigo del nivel de instruccion del encuestado
  tip_per_dp_enc character(2), -- Tipo de persona encuestada, opciones si es JF es igual a Jefe de Familia y si es GF es igual a grupo familiar
  cod_est_per_dp_enc integer, -- Codigo de estatus de la persona encuestada
  fec_reg_dp_enc time with time zone DEFAULT now(), -- Fecha de Registro del encuestado
  cod_car_est integer, -- Codigo de la carrera de estudio
  ult_gra_cur_dp_enc numeric, -- Ultimo grado cursado
  tit_obt_dp_enc character varying(60), -- Titulo obtenido del encuestado
  fam_pri_lib_dp_enc character(1), -- Familiar privado de libertad, opciones S es igual a Si y N es igual a No
  cod_par_fam integer, -- Codigo parentesco familiar
  cod_cen_pen integer, -- Codigo centro penitenciario
  org_soc_dp_enc character(1), -- Organizacion social, opciones S igual a Si y N es igual a No
  cod_org_soc integer, -- Codigo de la organizacion social
  mis_soc_dp_enc character(1), -- Mision social, opciones S es igual a Si y N es igual No
  cod_mis_soc integer, -- Codigo mision social
  CONSTRAINT "PK_dp_encuestado" PRIMARY KEY (cod_dp_enc),
  CONSTRAINT "UK_dp_encuestado" UNIQUE (ced_dp_enc)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE viviendo.mvv_dp_encuestado
  OWNER TO postgres;
COMMENT ON TABLE viviendo.mvv_dp_encuestado
  IS 'Tabla para los datos personales del encuestado';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.cod_dp_enc IS 'Codigo datos personales encuestado';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.cod_par IS 'Codigo de la parroquia';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.dir_com_dp_enc IS 'Direccion completa de la encuesta';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.sec_dp_enc IS 'Sector localidad';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.pun_ref_dp_enc IS 'Punto de referencia';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.pri_nom_dp_enc IS 'Primer nombre del encuestado';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.seg_nom_dp_enc IS 'Segundo nombre del encuestado';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.pri_ape_dp_enc IS 'Primer apellido del encuestado';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.seg_ape_dp_enc IS 'Segundo apellido del encuestado';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.nac_dp_enc IS 'Nacionalidad, campo con dos opciones: V es igual a venezolano y E es igual a extranjero';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.ced_dp_enc IS 'Cedula de identidad del encuestado';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.cod_nac_enc IS 'Codigo nacionalidad encuestado';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.sit_leg_dp_enc IS 'Situacion legal del encuestado las opciones pueden ser: N que es igual a Nacionalizado, R que es igual a residenciado o N/A no aplica';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.fec_nac_dp_enc IS 'Fecha de nacimiento del encuestado';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.lug_nac_dp_enc IS 'Lugar de nacimiento del encuestado';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.par_nac_dp_enc IS 'Partida de nacimiento del encuestado, Opciones S es igua a Si y N es igual No';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.sex_dp_enc IS 'Sexo del encuestado, opciones M es igual a Masculino y F es igual a Femenino';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.est_emb_dp_enc IS 'Estado de empresa, opciones S es igual Si y N es igual No';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.sem_emb_dp_enc IS 'Semanas de embarazo';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.asi_ctrl_emb_dp_enc IS 'Si asiste a control de embarazo, opciones S si es Si y N si es No';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.cod_est_civ IS 'Codigo del estado civil del encuestado';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.es_ind_dp_enc IS 'Si es indigena el encuestado, opciones S si es Si y N si es No';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.cod_com_ind IS 'Codigo comunidad indigena';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.mail_dp_enc IS 'Correo electronico del encuestado ';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.tel_hab_dp_enc IS 'Telefono de habitacion del contacto';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.tel_cel_dp_enc IS 'Telefono celular del encuestado';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.est_act_dp_enc IS 'Si estudia actualmente el encuestado, Opciones S  es igual Si y N es igual No';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.tip_ins_dp_enc IS 'Tipo de institucion donde estudia el encuestado, opciones P si es publica y PV si es Privada';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.cod_mot_est IS 'Codigo del motivo por el cual no estudia el encuestado';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.cod_niv_ins IS 'Codigo del nivel de instruccion del encuestado';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.tip_per_dp_enc IS 'Tipo de persona encuestada, opciones si es JF es igual a Jefe de Familia y si es GF es igual a grupo familiar';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.cod_est_per_dp_enc IS 'Codigo de estatus de la persona encuestada';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.fec_reg_dp_enc IS 'Fecha de Registro del encuestado';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.cod_car_est IS 'Codigo de la carrera de estudio';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.ult_gra_cur_dp_enc IS 'Ultimo grado cursado';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.tit_obt_dp_enc IS 'Titulo obtenido del encuestado';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.fam_pri_lib_dp_enc IS 'Familiar privado de libertad, opciones S es igual a Si y N es igual a No';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.cod_par_fam IS 'Codigo parentesco familiar';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.cod_cen_pen IS 'Codigo centro penitenciario';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.org_soc_dp_enc IS 'Organizacion social, opciones S igual a Si y N es igual a No';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.cod_org_soc IS 'Codigo de la organizacion social';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.mis_soc_dp_enc IS 'Mision social, opciones S es igual a Si y N es igual No';
COMMENT ON COLUMN viviendo.mvv_dp_encuestado.cod_mis_soc IS 'Codigo mision social';



-- Table: viviendo.mvv_estado_civil

-- DROP TABLE viviendo.mvv_estado_civil;

CREATE TABLE viviendo.mvv_estado_civil
(
  cod_est_civ serial NOT NULL, -- Codigo del estado civil
  nom_est_civ character varying(20) NOT NULL, -- Nombre del estado civil
  des_est_civ text, -- Descripcion del estado civil
  est_reg character(1) DEFAULT 'A'::bpchar, -- Estatus de registro, opciones A para cuando es activo y E es igual a Eliminado
  CONSTRAINT "PK_estado_civil" PRIMARY KEY (cod_est_civ)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE viviendo.mvv_estado_civil
  OWNER TO postgres;
COMMENT ON TABLE viviendo.mvv_estado_civil
  IS 'Tabla para el registro del estado civil';
COMMENT ON COLUMN viviendo.mvv_estado_civil.cod_est_civ IS 'Codigo del estado civil';
COMMENT ON COLUMN viviendo.mvv_estado_civil.nom_est_civ IS 'Nombre del estado civil';
COMMENT ON COLUMN viviendo.mvv_estado_civil.des_est_civ IS 'Descripcion del estado civil';
COMMENT ON COLUMN viviendo.mvv_estado_civil.est_reg IS 'Estatus de registro, opciones A para cuando es activo y E es igual a Eliminado';




-- Table: viviendo.mvv_motivo_estudio

-- DROP TABLE viviendo.mvv_motivo_estudio;

CREATE TABLE viviendo.mvv_motivo_estudio
(
  cod_mot_est serial NOT NULL, -- Codigo motivo de estudio
  nom_mot_est character varying(150) NOT NULL,
  des_mot_est text, -- Descripcion del motivo por el cual no ha estudiado
  est_reg character(1) DEFAULT 'A'::bpchar, -- Estado de registro, opciones A es igual activo y es E es igual a eliminado
  CONSTRAINT "PK_motivo_estudio" PRIMARY KEY (cod_mot_est)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE viviendo.mvv_motivo_estudio
  OWNER TO postgres;
COMMENT ON TABLE viviendo.mvv_motivo_estudio
  IS 'Tabla para el registro del motivo por el cual no estudia';
COMMENT ON COLUMN viviendo.mvv_motivo_estudio.cod_mot_est IS 'Codigo motivo de estudio';
COMMENT ON COLUMN viviendo.mvv_motivo_estudio.des_mot_est IS 'Descripcion del motivo por el cual no ha estudiado';
COMMENT ON COLUMN viviendo.mvv_motivo_estudio.est_reg IS 'Estado de registro, opciones A es igual activo y es E es igual a eliminado';




-- Table: viviendo.mvv_nacionalidad_encuestado

-- DROP TABLE viviendo.mvv_nacionalidad_encuestado;

CREATE TABLE viviendo.mvv_nacionalidad_encuestado
(
  cod_nac_enc integer NOT NULL DEFAULT nextval('viviendo.nacionalidad_encuestado_cod_nac_enc_seq'::regclass), -- Codigo de nacionalidad del encuestado
  nom_nac_enc character varying(50) NOT NULL, -- Nombre de la nacionalidad del encuestado
  des_nac_enc text, -- Descripcion de la nacionalidad
  CONSTRAINT "PK_nacionalidad_encuestado" PRIMARY KEY (cod_nac_enc)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE viviendo.mvv_nacionalidad_encuestado
  OWNER TO postgres;
COMMENT ON COLUMN viviendo.mvv_nacionalidad_encuestado.cod_nac_enc IS 'Codigo de nacionalidad del encuestado';
COMMENT ON COLUMN viviendo.mvv_nacionalidad_encuestado.nom_nac_enc IS 'Nombre de la nacionalidad del encuestado';
COMMENT ON COLUMN viviendo.mvv_nacionalidad_encuestado.des_nac_enc IS 'Descripcion de la nacionalidad';




-- Table: viviendo.mvv_nivel_instruccion

-- DROP TABLE viviendo.mvv_nivel_instruccion;

CREATE TABLE viviendo.mvv_nivel_instruccion
(
  cod_niv_ins serial NOT NULL, -- Codigo nivel de instruccion
  nom_niv_ins character varying(50) NOT NULL, -- Nombre del nivel de instruccion
  CONSTRAINT "PK_nivel_instruccion" PRIMARY KEY (cod_niv_ins)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE viviendo.mvv_nivel_instruccion
  OWNER TO postgres;
COMMENT ON TABLE viviendo.mvv_nivel_instruccion
  IS 'Tabla del nivel de instruccion del encuestado';
COMMENT ON COLUMN viviendo.mvv_nivel_instruccion.cod_niv_ins IS 'Codigo nivel de instruccion';
COMMENT ON COLUMN viviendo.mvv_nivel_instruccion.nom_niv_ins IS 'Nombre del nivel de instruccion';




-- Table: viviendo.mvv_parentesco_familiar

-- DROP TABLE viviendo.mvv_parentesco_familiar;

CREATE TABLE viviendo.mvv_parentesco_familiar
(
  cod_par_fam serial NOT NULL, -- Codigo del parentesco familiar
  nom_par_fam character varying(60) NOT NULL, -- Nombre del parentesco familiar
  des_par_fam text, -- Descripcion del parentesco
  CONSTRAINT "PK_parentesco_familiar" PRIMARY KEY (cod_par_fam)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE viviendo.mvv_parentesco_familiar
  OWNER TO postgres;
COMMENT ON TABLE viviendo.mvv_parentesco_familiar
  IS 'Tabla de parentesco familiar';
COMMENT ON COLUMN viviendo.mvv_parentesco_familiar.cod_par_fam IS 'Codigo del parentesco familiar';
COMMENT ON COLUMN viviendo.mvv_parentesco_familiar.nom_par_fam IS 'Nombre del parentesco familiar';
COMMENT ON COLUMN viviendo.mvv_parentesco_familiar.des_par_fam IS 'Descripcion del parentesco';




-- Table: viviendo.mvv_proyecto

-- DROP TABLE viviendo.mvv_proyecto;

CREATE TABLE viviendo.mvv_proyecto
(
  cod_pro serial NOT NULL, -- Codigo de proyecto
  nom_pro character varying(100) NOT NULL, -- Nombre de Proyecto
  cod_edo character varying(2) NOT NULL, -- Codigo de estado
  cod_mun character varying(4), -- Codigo del municipio
  cod_par character varying(6), -- Codigo de la parroquia
  sec_pro character varying(100), -- Sector del proyecto
  dir_exa_pro character varying(100), -- Direccion exacta del proyecto
  pun_ref_pro character varying(100), -- Punto de referencia
  viv_asi_pro integer, -- Vivienda asignadas del proyecto
  obs_pro text, -- Observaciones del proyecto
  num_viv_ais_pro integer DEFAULT 0, -- Numero de viviendas aisladas
  num_viv_con_pro integer DEFAULT 0, -- Numero de vivienda concentradas
  num_viv_est_met_pro numeric, -- Numero de viviendas con estructura metalica
  num_viv_est_tra_pro numeric, -- Numero de viviendas con estructura tradicional
  num_viv_est_mix_pro numeric, -- Numero de viviendas con estructura mixta
  est_pro character(1), -- Estatus del proyecto, opciones A es igual a activo y P es igual a paralizado
  the_geom geometry(Point,4326),
  cod_pdvsa_pro character varying(6), -- Codigo pvsa
  fec_reg_pro time with time zone DEFAULT now(),
  fec_reg timestamp with time zone DEFAULT now(),
  CONSTRAINT "PK_proyecto" PRIMARY KEY (cod_pro)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE viviendo.mvv_proyecto
  OWNER TO postgres;
COMMENT ON COLUMN viviendo.mvv_proyecto.cod_pro IS 'Codigo de proyecto';
COMMENT ON COLUMN viviendo.mvv_proyecto.nom_pro IS 'Nombre de Proyecto';
COMMENT ON COLUMN viviendo.mvv_proyecto.cod_edo IS 'Codigo de estado';
COMMENT ON COLUMN viviendo.mvv_proyecto.cod_mun IS 'Codigo del municipio';
COMMENT ON COLUMN viviendo.mvv_proyecto.cod_par IS 'Codigo de la parroquia';
COMMENT ON COLUMN viviendo.mvv_proyecto.sec_pro IS 'Sector del proyecto';
COMMENT ON COLUMN viviendo.mvv_proyecto.dir_exa_pro IS 'Direccion exacta del proyecto';
COMMENT ON COLUMN viviendo.mvv_proyecto.pun_ref_pro IS 'Punto de referencia';
COMMENT ON COLUMN viviendo.mvv_proyecto.viv_asi_pro IS 'Vivienda asignadas del proyecto';
COMMENT ON COLUMN viviendo.mvv_proyecto.obs_pro IS 'Observaciones del proyecto';
COMMENT ON COLUMN viviendo.mvv_proyecto.num_viv_ais_pro IS 'Numero de viviendas aisladas';
COMMENT ON COLUMN viviendo.mvv_proyecto.num_viv_con_pro IS 'Numero de vivienda concentradas';
COMMENT ON COLUMN viviendo.mvv_proyecto.num_viv_est_met_pro IS 'Numero de viviendas con estructura metalica';
COMMENT ON COLUMN viviendo.mvv_proyecto.num_viv_est_tra_pro IS 'Numero de viviendas con estructura tradicional';
COMMENT ON COLUMN viviendo.mvv_proyecto.num_viv_est_mix_pro IS 'Numero de viviendas con estructura mixta';
COMMENT ON COLUMN viviendo.mvv_proyecto.est_pro IS 'Estatus del proyecto, opciones A es igual a activo y P es igual a paralizado';
COMMENT ON COLUMN viviendo.mvv_proyecto.cod_pdvsa_pro IS 'Codigo pvsa';



