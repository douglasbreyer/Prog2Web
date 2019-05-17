create table cliente(
	codc serial constraint pk_cliente primary key,

	nome varchar(50) not null ,
	email varchar (30) not null,
	senha varchar(30) not null,
	cpf integer not null
);

CREATE TABLE produto(
    codp serial constraint pk_produto primary key,
    nome varchar(100) not null,
    descricao varchar(400) not null,
    cor varchar(15) not null,
    estoque integer not null,
    peso varchar(10) not null,
    categoria varchar(15) not null,
    preco money not null,
    marca varchar(20) not null,
    promocao char(1) not null,
    img_list varchar(40) not null,
    img_promo varchar(40) not null
);

CREATE TABLE pedido(
	id_pedido serial constraint pk_pedido primary key,
	data_entrega date not null,
	data_compra date not null,
	valor_final money not null,
	codc integer not null,
	constraint fk_pedido_cliente foreign key(codc) references cliente(codc),
	codp integer not null,
	constraint fk_pedido_produto foreign key(codp) references produto(codp)
);

CREATE TABLE endereco(
	id_ender serial constraint pk_endereco primary key,
	cep integer not null,
	rua varchar(50) not null,
	numero varchar(5) not null,
	cidade varchar(20) not null,
	estado varchar(20) not null
);
