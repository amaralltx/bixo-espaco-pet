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

        <table class="crud-table" rules="groups">
          <thead class="table-head">
            <tr>
              <th><input type="checkbox" name="" id="" /></th>
              <th>Nome</th>
              <th>E-mail</th>
              <th>Telefone</th>
              <th>Nome Pet</th>
              <th>Espécie</th>
              <th>Raça</th>
              <th class="edit-collum"> Editar | Deletar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Davi Britto</b></td>
                <td>calabrezo@email.com</td>
                <td>(11) 99999-9999</td>
                <td>Rex</td>
                <td>Cachorro</td>
                <td>Pastor Alemão</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Ana Silva</b></td>
                <td>ana.silva@email.com</td>
                <td>(21) 98888-7777</td>
                <td>Luna</td>
                <td>Gato</td>
                <td>Siamês</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Carlos Oliveira</b></td>
                <td>carlos.oliveira@email.com</td>
                <td>(31) 97777-6666</td>
                <td>Thor</td>
                <td>Cachorro</td>
                <td>Golden Retriever</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Mariana Costa</b></td>
                <td>mariana.costa@email.com</td>
                <td>(41) 96666-5555</td>
                <td>Mel</td>
                <td>Cachorro</td>
                <td>Poodle</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Pedro Santos</b></td>
                <td>pedro.santos@email.com</td>
                <td>(51) 95555-4444</td>
                <td>Bolinha</td>
                <td>Gato</td>
                <td>Persa</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Juliana Pereira</b></td>
                <td>juliana.pereira@email.com</td>
                <td>(61) 94444-3333</td>
                <td>Max</td>
                <td>Cachorro</td>
                <td>Bulldog Francês</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Lucas Fernandes</b></td>
                <td>lucas.fernandes@email.com</td>
                <td>(71) 93333-2222</td>
                <td>Nina</td>
                <td>Gato</td>
                <td>Maine Coon</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Fernanda Almeida</b></td>
                <td>fernanda.almeida@email.com</td>
                <td>(81) 92222-1111</td>
                <td>Bob</td>
                <td>Cachorro</td>
                <td>Labrador</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Rafael Souza</b></td>
                <td>rafael.souza@email.com</td>
                <td>(85) 91111-0000</td>
                <td>Lola</td>
                <td>Cachorro</td>
                <td>Shih Tzu</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Patrícia Lima</b></td>
                <td>patricia.lima@email.com</td>
                <td>(92) 90000-9999</td>
                <td>Bela</td>
                <td>Gato</td>
                <td>Angorá</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Gustavo Rocha</b></td>
                <td>gustavo.rocha@email.com</td>
                <td>(47) 98888-7777</td>
                <td>Zoe</td>
                <td>Cachorro</td>
                <td>Beagle</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Camila Nunes</b></td>
                <td>camila.nunes@email.com</td>
                <td>(63) 97777-6666</td>
                <td>Luke</td>
                <td>Gato</td>
                <td>Ragdoll</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Bruno Carvalho</b></td>
                <td>bruno.carvalho@email.com</td>
                <td>(27) 96666-5555</td>
                <td>Maya</td>
                <td>Cachorro</td>
                <td>Dachshund</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Amanda Dias</b></td>
                <td>amanda.dias@email.com</td>
                <td>(98) 95555-4444</td>
                <td>Jack</td>
                <td>Cachorro</td>
                <td>Rottweiler</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Rodrigo Martins</b></td>
                <td>rodrigo.martins@email.com</td>
                <td>(69) 94444-3333</td>
                <td>Bella</td>
                <td>Gato</td>
                <td>Sphynx</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Tatiane Ribeiro</b></td>
                <td>tatiane.ribeiro@email.com</td>
                <td>(96) 93333-2222</td>
                <td>Rocky</td>
                <td>Cachorro</td>
                <td>Husky Siberiano</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Diego Gonçalves</b></td>
                <td>diego.goncalves@email.com</td>
                <td>(84) 92222-1111</td>
                <td>Lily</td>
                <td>Gato</td>
                <td>British Shorthair</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Vanessa Castro</b></td>
                <td>vanessa.castro@email.com</td>
                <td>(79) 91111-0000</td>
                <td>Duke</td>
                <td>Cachorro</td>
                <td>Doberman</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Leonardo Barbosa</b></td>
                <td>leonardo.barbosa@email.com</td>
                <td>(66) 90000-9999</td>
                <td>Molly</td>
                <td>Cachorro</td>
                <td>Pug</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
              <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <td><b>Isabela Freitas</b></td>
                <td>isabela.freitas@email.com</td>
                <td>(93) 98888-7777</td>
                <td>Charlie</td>
                <td>Gato</td>
                <td>Scottish Fold</td>
                <td class="edit-collum">
                  <span class="material-symbols-outlined">edit</span>
                  <span class="material-symbols-outlined">delete</span>
                </td>
              </tr>
          </tbody>
        </table>