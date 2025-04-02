# Bixo-Espaco-pet
/
├── index.php              # Página única (HTML + PHP)
├── .htaccess             # Configurações do Apache (opcional)
├── composer.json         # Dependências PHP (se necessário)
├── Procfile              # Configuração do servidor (ex: Heroku)
├── database.sql          # Script SQL para criar tabela
│
├── css/
│   └── styles.css        # Estilos personalizados
│
├── includes/
│   ├── db.php            # Conexão com o banco de dados
│   ├── create.php        # Lógica de criação (POST)
│   ├── update.php        # Lógica de atualização (POST)
│   └── delete.php        # Lógica de exclusão (GET)
│
└── .env                  # Variáveis de ambiente (DB credentials)
