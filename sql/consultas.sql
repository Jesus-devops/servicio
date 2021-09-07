select * from alumno;
select * from celular;
select * from anexoe; 
delete from alumno where noControl between 16640080 and 16640099;
select * from alumno a join anexoe e on e.noControl = a.noControl where grupo='H' and semestre=11;
select * from alumno where estado='baja';
select * from anexoe where estado='baja';

delete from alumno where estado='baja' and noControl=1;
select * from extra;
select * from trabajo;
select * from beca;
select noControl from beca WHERE noControl != NULL;

delete from beca where noControl=516;
select * from madre ;
select * from padre ;
select * from hermanos ;

select * from areafamiliarysocial;

select * from psicopedagogica ;
select * from reprobadas ;

select * from estadopsicofisiologico ;

select * from caracteristicaspersonales;
select * from observaciones ;

select noControl from anexoe;

select * from admin ;
select * from asesor ;

select * from otroscreditos ;

select * from periodo ;

SELECT count(noControl) cant, titulacion FROM anexoe ae join alumno a on a.noControl=ae.noControl WHERE creditosAcumulados>180 and a.semestre='9' and a.grupo='H' group by titulacion;


select count(noControl), semestre from alumno group by semestre;
select count(noControl), GRUPO from alumno group by GRUPO;

SELECT * from anexoe;
SELECT * from alumno;

SELECT count(C) cant, C from anexoe where creditosAcumulados>180 and C>0;


SELECT * FROM anexoe ae join alumno a on a.noControl=ae.noControl join celular c on c.noControl=ae.noControl WHERE creditosAcumulados>180 
    and a.semestre='5' and a.grupo='H' ORDER By a.noControl;


update alumno set fecha=CURDATE() where noControl=1;
select noControl from extra where noControl=1;

SELECT count(noControl) cant from anexoe where creditosAcumulados>180;

SELECT count(noControl) cant, servicioSocial,  nombre from anexoe where creditosAcumulados>180 and nombre NOT LIKE '' or  creditosAcumulados>180 and noControl NOT LIKE '' group by servicioSocial;


SELECT * from anexoe where creditosAcumulados>180 ORDER By 'no%' LIMIT 5;

SELECT * FROM anexoe WHERE creditosAcumulados>180 ORDER By adeudaMaterias desc;


select * from anexoe ae join alumno a on a.noControl=ae.noControl;
SELECT * FROM anexoe ae join alumno a on a.noControl=ae.noControanexoel WHERE creditosAcumulados>180 ORDER By a.noControl;

SELECT * FROM anexoe ae join alumno a on a.noControl=ae.noControl join celular c on c.noControl=ae.noControl WHERE creditosAcumulados>180 ORDER By a.noControl;




select * from alumno;

select * from ingles;
select * from otroscreditos;

select * from alumno a join ingles i on a.noControl=i.noControl join otroscreditos o on o.noControl= a.noControl where a.noControl=a.noControl;
update alumno set nombre='jesus' where noControl=20; 


SELECT * FROM jugadores WHERE Name NOT LIKE '' ORDER By Id_no LIMIT 25;








select * from empleados;





SELECT count(a.noControl) cant, servicioSocial from alumno a 
join ingles i on a.noControl=i.noControl 
join otroscreditos o on o.noControl= a.noControl 
where a.noControl=a.noControl 
group by servicioSocial
;

SELECT count(a.noControl) cant, residenciasPro from alumno a 
join ingles i on a.noControl=i.noControl 
join otroscreditos o on o.noControl= a.noControl 
where a.noControl=a.noControl 
group by residenciasPro
;

SELECT count(a.noControl) cant, titulacion from alumno a 
join ingles i on a.noControl=i.noControl 
join otroscreditos o on o.noControl= a.noControl 
where a.noControl=a.noControl 
group by titulacion
;

SELECT count(a.noControl) cant, adeudaMaterias,  nombre , a.noControl from alumno a 
join ingles i on a.noControl=i.noControl 
join otroscreditos o on o.noControl= a.noControl 
where nombre NOT LIKE '' or a.noControl NOT LIKE '' and a.noControl=a.noControl 
group by adeudaMaterias 
;



-- --------------------------------------------------------------------------


SELECT count(a.noControl) cant, servicioSocial from alumno a group by servicioSocial
;

SELECT count(a.noControl) cant, residenciasPro from alumno a group by residenciasPro
;

SELECT count(a.noControl) cant, adeudaMaterias from alumno a group by adeudaMaterias 
;

SELECT count(a.noControl) cant, titulacion from alumno a group by titulacion
;

SELECT count(n9) cant, n9 from ingles group by n9
;
SELECT count(n10) cant, n10 from ingles group by n10
;


SELECT * from alumno where servicioSocial="si" and residenciasPro="no" and titulacion="no" and adeudaMaterias="no" order by nombre;

SELECT count(C) cant  from otroscreditos group by C;


SELECT * FROM anexoe ae join alumno a on a.noControl=ae.noControl WHERE creditosAcumulados>180 and a.semestre='9' and a.grupo='H bis' ORDER By a.noControl;

SELECT count(ae.noControl) cant, residenciasPro FROM anexoe ae join alumno a on a.noControl=ae.noControl WHERE creditosAcumulados>182 and a.semestre='".$_POST['semestre']."' and a.grupo='".$_POST['grupo'].' '.$_POST['turno']."' group by residenciasPro;

update alumno set semestre=(semestre+1) where semestre='9' and grupo='H' and noControl=2;  

select * from alumno where semestre='9' and grupo='H';
select * from anexoe where noControl=17640067;
select * from anexoe ae join alumno a on a.noControl=ae.noControl where a.noControl=17640067;
