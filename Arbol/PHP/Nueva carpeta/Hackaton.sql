create database arboles;
use arboles;
create table vivero(planta varchar(20),
					nombre varchar(100),
					telefono int,
					correo varchar(50),
                    calle varchar(30),
                    colonia varchar(30),
                    primary key(planta));
create table usuario(idUsuario int auto_increment,
					plantaP varchar(20),
					nombre varchar(100),
					telefono int,
					correo varchar(50),
                    calle varchar(30),
                    colonia varchar(30),
                    ciudad varchar(20),
                    primary key(idUsuario,plantaP),
                    foreign key(plantaP)references vivero(planta));
insert into vivero values('Cola de Caballo','Luis Sanchez',477201251,'luis.ug@gmail.com','Cerrito #103','Av. Principal'),
						('Flor tocada','Ramiro Huerta',477201236,'rhuerta.ug@gmail.com','Lomas #103','Av. Torres');
insert into usuario values (0,'Flor tocada','Carlos Ruiz',477201296,'rcarlos.utl@gmail.com','Santa Ana #93','Calle Chines','Guanajuato'),
							(0,'Flor tocada','Jose Hernandez',47761296,'udl.jose@hotmail.com','Calle Premer #467','Colonia boscos','Guanajuato'),
                            (0,'Flor tocada','Arnol Fuentes',47206396,'-','Santa Agustin #980','Colonia Los Olivos','Guanajuato'),
                            (0,'Cola de Caballo','Sonia Garcia',477237810,'vrendez.65@hotmail.com','Calle Martin de Lopez #456','Colonia Centro','Guanajuato'),
                            (0,'Cola de Caballo','Feleictas Crespo',471475689,'fcrespo@unam.edu,.mx','Calle Esfuerzo #101','Colonia Los Santos','Guanajuato');
                            
select u.*,v.nombre as VIVERO from usuario u inner join vivero v on v.planta=u.plantaP where plantaP like 'C%';

drop database arboles;