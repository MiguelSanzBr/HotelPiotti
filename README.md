# HotelPiotti

<div align="center">
  <img src="https://img.shields.io/badge/Status-Em%20Desenvolvimento-yellow" alt="Status do Projeto">
  <img src="https://img.shields.io/badge/Licença-MIT-blue" alt="Licença">
  <img src="https://img.shields.io/badge/PHP-8.3-777BB4?logo=php" alt="PHP 8.3">
  <img src="https://img.shields.io/badge/PostgreSQL-13-4169E1?logo=postgresql" alt="PostgreSQL">
  <img src="https://img.shields.io/badge/Node.js-16-339933?logo=node.js" alt="Node.js">
  <img src="https://img.shields.io/badge/Nginx-latest-009639?logo=nginx" alt="Nginx">
</div>

## 📋 Descrição

O HotelPiotti é um sistema de gerenciamento hoteleiro desenvolvido para otimizar a experiência tanto dos hóspedes quanto da equipe administrativa. O sistema oferece uma solução completa para gestão de reservas, check-in/check-out, e serviços hoteleiros.

## 🏗️ Arquitetura

O projeto utiliza uma arquitetura baseada em containers Docker com os seguintes serviços:

- **Web (PHP 8.3)**
  - Servidor PHP-FPM
  - Porta: 8080
  - Volume montado em ./www

- **NPM (Node.js 16)**
  - Gerenciamento de dependências frontend
  - Compilação de assets
  - Volume compartilhado com o serviço web

- **Nginx**
  - Servidor web reverso
  - Porta: 8081
  - Configuração personalizada via nginx.conf

- **Banco de Dados (PostgreSQL)**
  - Porta: 5432
  - Usuário: root
  - Banco: hotel_piotti_db

## ✨ Funcionalidades Principais

- **Gestão de Reservas**
  - Sistema de reservas online
  - Controle de disponibilidade de quartos
  - Histórico de reservas

- **Gestão de Hóspedes**
  - Cadastro de hóspedes
  - Check-in/check-out automatizado
  - Histórico de estadias

- **Gestão de Quartos**
  - Categorização de quartos
  - Status de ocupação
  - Manutenção e limpeza

## 🛠️ Tecnologias Utilizadas

- **Backend**
  - PHP 8.3
  - PostgreSQL
  - Nginx

- **Frontend**
  - Node.js 16
  - NPM para gerenciamento de dependências
  - CSS compilado

- **Infraestrutura**
  - Docker
  - Docker Compose
  - Healthchecks para monitoramento

## 📦 Requisitos do Sistema

- Docker
- Docker Compose
- Git
- 4GB de RAM mínimo
- 20GB de espaço em disco

## 🚀 Instalação

1. Clone o repositório:
```bash
git clone https://github.com/seu-usuario/HotelPiotti.git
cd HotelPiotti
```

2. Inicie os containers:
```bash
docker-compose up -d
```

3. Acesse o sistema:
- Frontend: http://localhost:8081
- PHP: http://localhost:8080
- PostgreSQL: localhost:5432

## 🔍 Verificação de Status

Para verificar o status dos containers:
```bash
docker-compose ps
```

Para verificar os logs:
```bash
docker-compose logs -f
```

## 📝 Documentação

A documentação completa do projeto está disponível em [link para documentação].

## 🤝 Contribuição

Contribuições são bem-vindas! Por favor, leia o guia de contribuição antes de enviar pull requests.

## 📄 Licença

Este projeto está licenciado sob a licença MIT - veja o arquivo [LICENSE.md](LICENSE.md) para detalhes.

## 📞 Suporte

Para suporte, envie um email para [miguelsanzb.p@gmail.com] ou abra uma issue no GitHub.

## 👥 Autores

- [MiguelSanzBr](https://github.com/MiguelSanzBr)
- [EstruttiJP](https://github.com/EstruttiJP)
- [BerTrapp](https://github.com/BerTrapp)
