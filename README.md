# Docker: Utilizacao Pratica no Cenario de Microsservicos

## Descricao

Projeto pratico do bootcamp **Microsoft Azure Advanced #2** da DIO, focado na utilizacao do Docker para implementar uma arquitetura de microsservicos. O projeto demonstra como containerizar aplicacoes, orquestrar multiplos servicos com Docker Compose e utilizar Docker Swarm para escalabilidade.

## Arquitetura

A arquitetura consiste em:
- **Nginx** como proxy reverso e load balancer
- **App PHP/Apache** como servico web principal
- **MySQL** como banco de dados relacional
- **Docker Swarm** para orquestracao do cluster

## Tecnologias

- Docker & Docker Compose
- Docker Swarm
- Nginx (proxy reverso)
- PHP 7.4 + Apache
- MySQL 5.7
- Linux

## Estrutura do Projeto

```
.
|-- docker-compose.yml
|-- nginx/
|   |-- nginx.conf
|-- app/
|   |-- Dockerfile
|   |-- index.php
|-- mysql/
|   |-- init.sql
|-- README.md
```

## Como Executar

### Pre-requisitos
- Docker instalado
- Docker Compose instalado

### Execucao

```bash
# Clonar o repositorio
git clone https://github.com/galafis/docker-microservices-project.git
cd docker-microservices-project

# Subir os servicos
docker-compose up -d

# Verificar containers em execucao
docker container ls

# Acessar a aplicacao
# http://localhost:80

# Parar os servicos
docker-compose down
```

### Docker Swarm

```bash
# Inicializar o Swarm
docker swarm init

# Criar o servico
docker service create --name webserver --replicas 3 -p 80:80 nginx

# Listar servicos
docker service ls

# Escalar servico
docker service scale webserver=5
```

## Conceitos Aplicados

- Containerizacao de aplicacoes
- Orquestracao com Docker Compose
- Proxy reverso com Nginx
- Persistencia de dados com volumes
- Redes Docker customizadas
- Cluster com Docker Swarm
- Replicacao de servicos
- Stress testing de containers

## Autor

Gabriel Demetrios Lafis - [GitHub](https://github.com/galafis)

---
*Projeto desenvolvido como parte do bootcamp Microsoft Azure Advanced #2 - DIO*
