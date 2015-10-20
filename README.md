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

### Para ativar o layout

Informe `$this->viewBuilder()->theme('TwitterBootstrap');` no seu controller (por exemplo, AppController para usar em qualquer página).

Em **src/View/AppView.php** adicionar `$this->loadHelper('Form', ['className' => 'TwitterBootstrap.Form']);` dentro de `initialize()`, desta forma:

#### Para alterar o título

No AppController apenas informe com `$this->set('project_name', 'Título que você quer')`.

#### Para alterar o menu superior direito

Crie um arquivo chamado **nav-bar-right.ctp** dentro de **src/Template/Element** (você pode copiar o modelo dentro de **vendor/cakephp-brasil/twitter-bootstrap/src/Template/Element**)

#### Para alterar o menu superior esquerdo

Crie um arquivo chamado **nav-bar-left.ctp** dentro de **src/Template/Element** (você pode copiar o modelo dentro de **vendor/cakephp-brasil/twitter-bootstrap/src/Template/Element**)

## Para contribuir

Faça um fork deste projeto.
