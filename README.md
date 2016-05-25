# Twitter Bootstrap para CakePHP 3

## Instalação

Você pode instalar usando [composer](http://getcomposer.org) através do comando a seguir.

	composer require cakephp-brasil/twitter-bootstrap

Certifique-se de carregar o plugin em **config/bootstrap.php**.

	Plugin::load('TwitterBootstrap');

## Como usar

### Para criar views com **bake**

Apenas adicione `--theme TwitterBootstrap` no final do comando, por exemplo:

	bin\cake bake all MyModel --theme TwitterBootstrap

### Para ativar o formulário

Em **src/View/AppView.php** adicionar `$this->loadHelper('Form', ['className' => 'TwitterBootstrap.Form']);` dentro de `initialize()`, desta forma:

    public function initialize()
    {
        $this->loadHelper('Form', ['className' => 'TwitterBootstrap.Form']);
    }

### Layout padrão

#### Para ativar o layout

Informe `$this->viewBuilder()->theme('TwitterBootstrap');` no seu controller (por exemplo, AppController para usar em qualquer página).

Em **src/View/AppView.php** adicionar `$this->loadHelper('Form', ['className' => 'TwitterBootstrap.Form']);` dentro de `initialize()`, desta forma:

#### Para alterar o título

No AppController apenas informe com `$this->set('project_name', 'Título que você quer')`.

#### Para alterar o menu superior direito

Crie um arquivo chamado **nav-bar-right.ctp** dentro de **src/Template/Element** (você pode copiar o modelo dentro de **vendor/cakephp-brasil/twitter-bootstrap/src/Template/Element**)

Ou veja a **Publicando as views necessárias automaticamente**

#### Para alterar o menu superior esquerdo

Crie um arquivo chamado **nav-bar-left.ctp** dentro de **src/Template/Element** (você pode copiar o modelo dentro de **vendor/cakephp-brasil/twitter-bootstrap/src/Template/Element**)

Ou veja a **Publicando as views necessárias automaticamente**

### AdminLTE

#### Como ativar o layout

Informe `$this->viewBuilder()->theme('TwitterBootstrap');` no seu controller (por exemplo, AppController para usar em qualquer página) e em seguida ativar o tema usando `$this->viewBuilder()->layout('adminlte');`.

Em **src/View/AppView.php** adicionar `$this->loadHelper('Form', ['className' => 'TwitterBootstrap.Form']);` dentro de `initialize()`, desta forma:

	public function initialize()
    {
        $this->loadHelper('Form', ['className' => 'TwitterBootstrap.Form']);
    }

#### Para alterar o topo (header)

Crie um arquivo chamado **header.ctp** dentro de **src/Template/Element/adminlte** (você pode copiar o modelo dentro de **vendor/cakephp-brasil/twitter-bootstrap/src/Template/Element/adminlte**), pode ser necessário criar o diretório **adminlte**.

Ou veja a **Publicando as views necessárias automaticamente**

#### Para alterar a lateral esquerda

Crie um arquivo chamado **sidebar.ctp** dentro de **src/Template/Element/adminlte** (você pode copiar o modelo dentro de **vendor/cakephp-brasil/twitter-bootstrap/src/Template/Element/adminlte**), pode ser necessário criar o diretório **adminlte**.

Ou veja a **Publicando as views necessárias automaticamente**

#### Para alterar o rodapé

Crie um arquivo chamado **footer.ctp** dentro de **src/Template/Element/adminlte** (você pode copiar o modelo dentro de **vendor/cakephp-brasil/twitter-bootstrap/src/Template/Element/adminlte**), pode ser necessário criar o diretório **adminlte**.

Ou veja a **Publicando as views necessárias automaticamente**

#### Para alterar o bloco de conteúdo

Crie um arquivo chamado **content.ctp** dentro de **src/Template/Element/adminlte** (você pode copiar o modelo dentro de **vendor/cakephp-brasil/twitter-bootstrap/src/Template/Element/adminlte**), pode ser necessário criar o diretório **adminlte**.

Ou veja a **Publicando as views necessárias automaticamente**

#### Para alterar o menu direito (aparece quando clica no link da roda dentada no topo)

Crie um arquivo chamado **control_sidebar.ctp** dentro de **src/Template/Element/adminlte** (você pode copiar o modelo dentro de **vendor/cakephp-brasil/twitter-bootstrap/src/Template/Element/adminlte**), pode ser necessário criar o diretório **adminlte**.

Ou veja a **Publicando as views necessárias automaticamente**

Para desativar crie esta view vazia e remova o link no topo.

### Publicando as views acima necessárias automaticamente

Contribuição do [@josimar-lemos](https://github.com/josimar-lemos)

Tava achando muito trabalhoso (programador preguiçoso on) ter que copiar e colar os Elements do Tema toda vez que precisava mexer neles..

Criei um Shell para facilitar o processo, coloquei só uma opção para copiar todos os Elements de uma vez, mas posso incrementar isso aí se quiserem.

Para testar:

	$ cd path-to-project
	$ bin/cake TwitterBootstrap.publish
Ou:

	$ cd path-to-project
	$ bin/cake TwitterBootstrap.publish all

------ Fim da nota

## Para contribuir

Faça um fork deste projeto, altere e envie um pull request, não esqueça de [sugerir recursos](https://github.com/CakePHPBrasil/TwitterBootstrap/issues).
