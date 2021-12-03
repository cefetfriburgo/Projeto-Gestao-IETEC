USE mydb;


/*
Rodar o script 'base_de_dados.sql' antes de inserir os dados de teste
*/

-- -------------------------------------------------------
-- PERMISSOES POSSIVEIS DO SISTEMA
-- -------------------------------------------------------

-- Tabela 'Permissao'
INSERT INTO Permissao VALUES ( 1 , 101 ); -- "table_empresa_write"
INSERT INTO Permissao VALUES ( 2 , 102 ); -- "table_empresa_read"


-- -------------------------------------------------------
-- GRUPOS DO SISTEMA
-- -------------------------------------------------------

INSERT INTO Grupo VALUES ( 1, "Administrador" );
INSERT INTO Grupo VALUES ( 2, "Dono da empresa" );


-- -------------------------------------------------------
-- PERMISSOES DOS GRUPOS 
-- -------------------------------------------------------

/*
Grupo "Administrador" pode fazer tudo no sistema
*/
INSERT INTO Grupo_has_Permissao VALUES ( 1 , 1 );
INSERT INTO Grupo_has_Permissao VALUES ( 1 , 2 );

/*
Grupo "Dono da empresa" pode ler dados da empresa
*/
INSERT INTO Grupo_has_Permissao VALUES ( 2 , 2 );


-- -------------------------------------------------------
-- USUARIOS
-- -------------------------------------------------------
INSERT INTO Usuario VALUES (  1 , 1, "marcelo.testando@fabrica.org.br", AES_ENCRYPT('123', 'token') );

