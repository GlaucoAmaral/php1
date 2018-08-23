CREATE SCHEMA empresa; #criando o bd empresa

use empresa;

CREATE TABLE empregado(
	ssn int(10) primary key not null auto_increment,
    pnome varchar(40),
    minicial varchar(20),
    unome varchar(20),
    datanasc datetime,
    endereco varchar(60),
    sexo enum('M', 'F'),
    salario double,
    dnumero int(10),
    superssn int (10)
);


CREATE TABLE Departamento(
	dnumero int(10) primary key not null auto_increment,
    dnome varchar(40),
    gerdatainicio datetime,
    gerssn int(10)
);


CREATE TABLE dependentes(
	nome_dependente varchar(40) not null,
    essn int(10) ,
    sexo enum('M', 'F'),
    datanasc datetime,
    parentesco varchar(40),
    primary key(nome_dependente, essn)
);


CREATE TABLE trabalha_em (
	essn int(10) not null,
    pnumero int(10) not null,
    horas time,
    primary key(essn, pnumero)
);


CREATE TABLE projeto(

	pnumero int(10) primary key not null auto_increment,
    pjnome varchar(40),
    plocalizacao varchar(40),
    dnumero int(10)
);


CREATE TABLE depto_localizacoes (
	dlocalizacao varchar(40) not null,
    dnumero int(10) not null,
    primary key (dlocalizacao, dnumero)
);


RENAME TABLE Departamento To departamento; #renomear nome tabela
RENAME TABLE dependentes To dependente; #renomear nome tabela

ALTER TABLE empregado ADD FOREIGN KEY (dnumero) REFERENCES departamento(dnumero)
ON UPDATE CASCADE ON DELETE SET NULL; #empregado referenciando a um departamento

ALTER TABLE empregado ADD FOREIGN KEY (superssn) REFERENCES empregado(ssn)
ON UPDATE CASCADE ON DELETE SET NULL; #empregado referenciando a um gerente

ALTER TABLE departamento ADD FOREIGN KEY (gerssn) REFERENCES empregado(ssn)
ON UPDATE CASCADE ON DELETE SET NULL;

ALTER TABLE dependente ADD FOREIGN KEY (essn) REFERENCES empregado(ssn) 
ON UPDATE CASCADE ON DELETE CASCADE;####


ALTER TABLE trabalha_em ADD FOREIGN KEY (essn) REFERENCES empregado(ssn)
ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE trabalha_em ADD FOREIGN KEY (pnumero) REFERENCES projeto(pnumero)
ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE projeto ADD FOREIGN KEY (dnumero) REFERENCES departamento(dnumero)
ON UPDATE CASCADE ON DELETE SET NULL;

ALTER TABLE depto_localizacoes ADD FOREIGN KEY (dnumero) REFERENCES departamento (dnumero)
ON UPDATE CASCADE ON DELETE CASCADE;




INSERT INTO empregado (ssn,pnome,minicial,unome,datanasc,endereco,sexo,salario) 
VALUES (2,"Luis","P.","Andrade",19931201,"Rua Professor José Vieira",'M',1500); -- Primeira inserção sem departamento e supervisor para não dar inconsistência de acesso

INSERT INTO departamento (dnumero,dnome,gerdatainicio,gerssn) 
VALUES (2,"RH",20180619,2);

INSERT INTO empregado (ssn,pnome,minicial,unome,datanasc,endereco,sexo,salario,dnumero,superssn) 
VALUES (3,"Dara","G.","Andrade",19971226,"Rua Professor José Vieira",'F',1000,2,2);

INSERT INTO departamento VALUES (3,"Finanças",20180619,2);

INSERT INTO departamento VALUES (5,"TI",20180620,3);

INSERT INTO departamento VALUES (6,"Segurança",20180620,3);

UPDATE empregado SET dnumero = 2 WHERE dnumero IS NULL; -- Alteração para inserir dnumero no primeiro indivíduo do banco que não tinha departamento (tabela departamento ainda não havia sido criada)

INSERT INTO empregado (ssn,pnome,minicial,unome,datanasc,endereco,sexo,salario,dnumero,superssn) 
VALUES (4,"Joyce","M.","Andrade",19971210,"Rua Londrinense",'F',960,2,2);

INSERT INTO departamento VALUES (7,"Comunicação",20180619,4);

INSERT INTO empregado (ssn,pnome,minicial,unome,datanasc,endereco,sexo,salario,dnumero,superssn) 
VALUES (5,"Pedro","P.","Cardoso",19961226,"Rua Nunciaroni",'M',500,7,4);

INSERT INTO empregado (ssn,pnome,minicial,unome,datanasc,endereco,sexo,salario,dnumero,superssn) 
VALUES (6,"Carla","P.","Silva",20001226,"Rua Augusta",'F',700,7,4);

INSERT INTO empregado (ssn,pnome,minicial,unome,datanasc,endereco,sexo,salario,dnumero,superssn) 
VALUES (7,"Ana","L.","Aquino",20001026,"Rua Augusta",'F',800,5,3);

INSERT INTO empregado (ssn,pnome,minicial,unome,datanasc,endereco,sexo,salario,dnumero,superssn) 
VALUES (8,"João","L.","Pigoso",19951026,"Rua Marculino Ferreira",'M',999,5,3);

INSERT INTO dependente
VALUES ("Diva",3,'F',20101010,"Filha");

INSERT INTO dependente
VALUES ("Martha",3,'F',20111010,"Filha");

INSERT INTO dependente
VALUES ("Nivaldo",4,'M',20120510,"Filho");

INSERT INTO dependente
VALUES ("Luca",4,'M',20131010,"Sobrinho");

INSERT INTO dependente
VALUES ("Pedro",4,'M',20151014,"Sobrinho");

INSERT INTO dependente
VALUES ("Jhohan",2,'M',20141122,"Sobrinho");

INSERT INTO dependente
VALUES ("Helena",4,'F',20170823,"Filha");

INSERT INTO depto_localizacoes
VALUES ("Alfenas",2);

INSERT INTO depto_localizacoes
VALUES ("Machado",3);

INSERT INTO depto_localizacoes
VALUES ("Areado",5);

INSERT INTO depto_localizacoes
VALUES ("Machado",6);

INSERT INTO depto_localizacoes
VALUES ("Alfenas",7);

INSERT INTO projeto VALUES (1,"Corte de gastos","Setor 5",3);

INSERT INTO projeto VALUES (2,"Aquisição de máquinas","Setor 3",3);

INSERT INTO projeto VALUES (4,"Atualiação SGBD","Setor 3",5);

INSERT INTO projeto VALUES (3,"Novo sistema de cadastro","Setor 3",5);

INSERT INTO projeto VALUES (5,"Entrevistas AD","Setor 8",2);

INSERT INTO trabalha_em VALUES (2,1,40);

INSERT INTO trabalha_em VALUES (2,4,10);

INSERT INTO trabalha_em VALUES (3,2,40);

INSERT INTO trabalha_em VALUES (4,3,30);

INSERT INTO trabalha_em VALUES (4,5,20);

SET SQL_SAFE_UPDATES=0;


UPDATE trabalha_em SET horas = 400000 WHERE horas=000040;

UPDATE trabalha_em SET horas = 100000 WHERE horas=000010;

UPDATE trabalha_em SET horas = 300000 WHERE horas=000030;

UPDATE trabalha_em SET horas = 200000 WHERE horas=000020;

INSERT INTO empregado (pnome,minicial,unome,datanasc,endereco,sexo,salario,dnumero,superssn) 
VALUES ("Gustavo","A.","Felix",19970606,"Rua Jacutinga",'M',900,7,4);

INSERT INTO empregado (pnome,minicial,unome,datanasc,endereco,sexo,salario,dnumero,superssn) 
VALUES ("Sandra","P.","Rezende",19950606,"Rua Joaquim Onofre",'F',900,7,4);

UPDATE empregado SET salario= 5000 WHERE salario = 1000; -- Atualização de salários

INSERT INTO empregado (pnome,minicial,unome,datanasc,endereco,sexo,salario,dnumero,superssn) 
VALUES ("Maria","G.","Domingues",19800730,"Rua Arthur Scalco",'F',900,7,4);

INSERT INTO empregado (pnome,minicial,unome,datanasc,endereco,sexo,salario,dnumero,superssn) 
VALUES ("Célio","S.","Junior",19850730,"Rua Arthur Scalco",'M',900,7,4);

INSERT INTO departamento (dnome,gerdatainicio,gerssn) VALUES ("Vendas",20001212,7);

UPDATE empregado SET superssn=2 WHERE superssn IS NULL; -- O gerente referencia a si mesmo ao invés de ter o campo nulo. Esse indivídio é o primeiro inserido que não havia supervisor.

INSERT INTO dependente
VALUES ("Lucas",11,'M',20161010,"Filho");

INSERT INTO dependente
VALUES ("Augusto",11,'M',20151228,"Filho");

INSERT INTO dependente
VALUES ("Débora",12,'F',20180122,"Filha");

INSERT INTO projeto VALUES (8,"Formalização de preços","Setor 11",8);

INSERT INTO empregado (pnome,minicial,unome,datanasc,endereco,sexo,salario,dnumero,superssn) 
VALUES ("Marcel","S.","Pereira",19870730,"Rua Marciano Freitas",'M',1200,8,4);

INSERT INTO empregado (pnome,minicial,unome,datanasc,endereco,sexo,salario,dnumero,superssn) 
VALUES ("Alef","C.","Padilha",19890930,"Rua da Máquina",'M',2000,8,4);

INSERT INTO trabalha_em VALUES (13,8,400000);

INSERT INTO trabalha_em VALUES (14,8,400000);

UPDATE empregado SET salario=3000 WHERE salario=500;

UPDATE empregado SET salario=2500 WHERE salario=700;

INSERT INTO depto_localizacoes VALUES ("Varginha",8);


select * from projeto;
select * from empregado;
select * from trabalha_em;
select * from todos_empregados;
select * from departamento;
select * from projeto where dnumero = 3;

##############################################################
select empregado.pnome from empregado, trabalha_em, projeto
where empregado.ssn = trabalha_em.essn and trabalha_em.pnumero = projeto.pnumero and projeto.dnumero = 3 and projeto.pnumero = 1; 
#O Luis trabalha no projeto "corte de gastos" que esta no departamento 3

##############################################################
select empregado.pnome from empregado, trabalha_em, projeto
where empregado.ssn = trabalha_em.essn and trabalha_em.pnumero = projeto.pnumero and projeto.dnumero = 3 and projeto.pnumero = 2;
#A Dara trabalha no projeto "aquisicao de maquinas" que esta no departamento 3


#####5 DOS SELECT

#Recupere o endereço de todos os empregados que trabalham no departamento 8.
select endereco from empregado where dnumero = 8;

#Para cada projeto localizado em “Setor 3”, recupere o numero do projeto, o número do departamento responsável e o último nome do gerente do departamento.
select projeto.pnumero,  projeto.dnumero, empregado.unome from projeto ,empregado, departamento
where projeto.plocalizacao = "Setor 3"
and projeto.dnumero = departamento.dnumero and departamento.gerssn = empregado.ssn;

#Retorne a média dos salário pagos.
select avg(empregado.salario) from empregado;


#Recupere os salários dos empregados, mostrando como seria caso tivessem um aumento de 10%.
select empregado.salario * 1.1 from empregado; #só funciona com ponto


#Retorne o primeiro nome de todos os empregados que trabalham no projeto “Corte de Gastos”
select empregado.pnome from empregado, trabalha_em, projeto where projeto.pjnome = "Corte de Gastos" and empregado.ssn = trabalha_em.essn and trabalha_em.pnumero = projeto.pnumero;


#####5 DAS VIEW

#Desenvolva uma visão que retorne todos os empregados e seus respectivos departamentos.
CREATE VIEW todos_empregados AS SELECT pnome , dnome FROM empregado e, departamento d WHERE e.dnumero = d.dnumero;
select * from todos_empregados;
#criei a view (nomeEmpregado, NomeDepartamento) onde o numero de departamento que o empregado trabalha é igual ao dnumero do departamento em DEPARTAMENTO

#Deselvolva uma visão que retorne o nome dos empregados e seus respectivos salários caso o aumento de 20% em cada salário some um valor acima de 1000 reais.
create view todos_empregados_e_salario as select empregado.pnome, empregado.salario * 1.2 from empregado where empregado.salario * 1.2 > 1000;	
select * from todos_empregados_e_salario ;


#Desenvolva uma visão que retorne o primeiro nome dos empregados e seus respectivos salários. Em seguida, atualize os salários de 5000 para 4000 apenas na view. Descreva o que acontece com a view e com a tabela original.
create view todos_empregado_e_salario_att as select empregado.pnome, empregado.salario from empregado;
update todos_empregado_e_salario_att set salario = 4000 where salario = 5000;
select * from todos_empregado_e_salario_att;


#Desenvolva uma view que retorne o nome dos empregados que trabalham no projeto "Aquisição de máquinas".
create view todos_empregados_maquinas as select empregado.pnome from empregado,trabalha_em, projeto 
where projeto.pjnome = "Aquisicao de máquinas" and trabalha_em.essn = empregado.ssn and trabalha_em.pnumero = projeto.pnumero ;
select * from todos_empregados_maquinas; #A Dara trabalha no projeto de aquisicao de maquinas
#Nem todos trabalhadores trabalham necessariamente.
#Possuo 14 empregados, mas somente 5 trabalham em projetos.

create view todos_empregados_maquinas_outrojeito as select e.pnome from empregado e, departamento d, projeto p
where e.dnumero = d.dnumero and d.dnumero = p.dnumero and p.pjnome = "Aquisição de máquinas";
#drop view todos_empregados_maquinas_outrojeito;
select * from todos_empregados_maquinas_outrojeito;


#Desenvolva uma view que retorne o nome dos dependentes do sexo feminino do empregado de primeiro nome "Dara".
create view dependentes_fem_Dara as select dep.nome_dependente from empregado e, dependente dep where dep.sexo = 'F' and e.pnome = "Dara" and dep.essn = e.ssn; 
select * from dependentes_fem_Dara;


#Desenvolva uma view que retorne o nome dos empregados e os nomes dos projetos em que eles trabalham.
create view empregados_trabalha as select e.pnome, p.pjnome from empregado e, trabalha_em t, projeto p
where t.essn = e.ssn and t.pnumero = p.pnumero;
select * from empregados_trabalha;

#Desenvolva uma view que retorne o primeiro nome do gerente de cada departamento.
create view gerentes as select d.dnome, e.pnome from empregado e, departamento d
where e.ssn = d.gerssn;
select * from gerentes;


#Desenvolva uma view que retorne o primeiro nome e o último nome do supervisor de cada empregado.
create view emp_e_supervisores as select e.pnome, s.pnome as nomeSuperVisor, s.unome as unomeSupervisor from empregado e, empregado s
where e.superssn = s.ssn;
select * from emp_e_supervisores;

#DESENVOLVIMENTO 13 de julho - procedimentos, funcoes e triggers
#Desenvolva uma função que retorne a quantidade de dependentes do empregado "Joyce".
delimiter //
CREATE FUNCTION funcao2(meu_nome varchar(40)) -- Parametros
RETURNS int DETERMINISTIC -- Definicao do tipo do retorno
BEGIN
	DECLARE qtd int; -- declaracao de variavel local
    SELECT COUNT(*) INTO qtd -- contador armazenando em qtd
    FROM empregado e, dependente d
    WHERE e.ssn = d.essn AND e.pnome = meu_nome;
    RETURN qtd;
END
//
delimiter ;
#drop function funcao2;
SELECT funcao2("Joyce");


/*Exemplo de procedimento que retorna quantidade de dependentes*/
/*CONCAT é uma funcao de concatenacao*/
#Desenvolva um procedimento que retorne a quantidade de dependentes do empregado "Dara".

delimiter //
create procedure procedimento1 (meu_nome varchar(40))
BEGIN
	DECLARE qtd integer;
    SELECT CONCAT(meu_nome, ' possui ', COUNT(*), ' dependentes(s), ') AS qtd
    FROM empregado e, dependente d
    WHERE e.ssn = d.essn AND e.pnome = meu_nome;
END
//
delimiter ;
call procedimento1("Dara");

#Desenvolva um procedimento que retorne a soma dos salários de todos os empregados.
delimiter //
create procedure salarios()
BEGIN
	DECLARE totalSalarios double;
    select sum(salario)
    from empregado;    
END
//
delimiter ;
call salarios();



#Desenvolva um procedimento que retorne a soma dos salários de todos os empregados do departamento de supervisor "Joyce".
delimiter //
create procedure salariosdepartamento(nome_supervisor varchar(40))
begin
	declare totalsalariosdependentes double;
    select sum(e.salario) as totalsalariosdependentes 
    from empregado e, empregado sup, departamento d
    where e.superssn = sup.ssn and sup.pnome = nome_supervisor
    and e.dnumero = d.dnumero and d.gerssn = sup.ssn;
end
//
delimiter ;
drop procedure salariosdepartamento;
call salariosdepartamento("Joyce");




#Desenvolva uma função que retorne a quantidade de projetos registrados no departamento 5.
delimiter //
create function qtdprojetos(numeroProjeto int(10))
RETURNS int DETERMINISTIC
BEGIN 
	DECLARE qtdpojetos int;
    select count(*) into qtdpojetos
    from departamento d, projeto p
    where p.dnumero = d.dnumero and d.dnumero = numeroProjeto;
    return qtdpojetos;
END
//
delimiter ;

select qtdprojetos(5);



select * from empregado;

select * from empregado where superssn = 2;


select * from departamento;

select * from empregado where empregado.superssn = 4 and empregado.dnumero = 7;



INSERT INTO empregado (pnome,minicial,unome,datanasc,endereco,sexo,salario,dnumero,superssn) 
VALUES ("XAMPS","Souza.","Pereira",19880730,"Rua Marciano Freitas",'M',1900,8,4);
delete from empregado where pnome = "XAMPS";
select * from empregado


#Um empregado entra na empresa;
set @sum = 0; /*variavel comeca como null, setamos para 0 para trigger fazer as contas*/
drop trigger novo_empregado;
delimiter //
create trigger novo_empregado
before insert on empregado
for each row
begin
	set @sum = @sum + new.salario;
end//
delimiter ;

select @sum as 'Salario Total: ';/*visualizar atualmnte a soma dos salarios*/


#Um empregado é mandado embora;
delimiter //
create trigger apos_exclusao
before delete on empregado
for each row
begin
	set @sum = @sum - old.salario;
end//
delimiter ;
drop trigger apos_exclusao;

#Um empregado tem seu salário atualizado
delimiter //
create trigger atualizacao_salario
after update on empregado
for each row
begin 
	if(new.salario > old.salario) then
		set @sum = @sum + (new.salario-old.salario);
        else
			set @sum = @sum -(old.salario-new.salario);
        end if;
    
end//
delimiter ;
update empregado set salario = 2000 where empregado.pnome = "XAMPS" ;







#########################################EXERCÍCIOS ASSERTIONS#############################################
#Desenvolva uma restrição que impeça que o salário de um empregado não seja maior que o salário do gerente do departamento em que ele trabalha.
#CREATE ASSERTION salario_empregado_gerente CHECK
#(NOT EXIST(SELECT * FROM empregado emp, empregado ger, departamento dep WHERE emp.salario > ger.salario and emp.dno = dep.dno and 
#ger.ssn = dep.gerssn and ger.dno = dep.dnumerp))



#Desenvolva uma restrição que impeça que o salário de um empregado, que não seja supervisor de algum outro empregado, seja sempre inferior a R$ 2.500,00.
#CREATE ASSERTION salario_supervisor CHECK (NOT EXIST(SELECT * FROM empregado emp, empregado super WHERE emp.superssn <> super.ssn
#and emp.salario > 2500))



#Desenvolva uma restrição que impeça que um empregado só possa ser gerente de um departamento se o mesmo estiver vinculado a este departamento.
#CREATE ASSERTION empregado_depV CHECK (NOT EXIST (SELECT * FROM empregado e, departamento d WHERE e.ssn = d.gerssn and e.dnum <> d.dnum))


#Desenvolva uma restrição que impeça que um departamento seja gerenciado por um empregado que ainda não é supervisor.
#CREATE ASSERTION empregado_gerente_sup CHECK (NOT EXIST (select * from empregado e, empregado sup, departamento d where e.ssn <> sup.essn and dep.gerssn = e.ssn))


#Desenvolva uma restrição que impeça que um supervisor tenha sexo masculino.
#CREATE ASSERTION supervisor_masc CHECK (NOT EXIST(select * from empregado e, empregado sup where e.ssn = sup.superssn and sup.sexo = 'F'))






















