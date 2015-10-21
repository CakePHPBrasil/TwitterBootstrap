<?php

namespace TwitterBootstrap\Shell;

use Cake\Core\Plugin;
use Cake\Console\Shell;
use Cake\Filesystem\Folder;

class PublishShell extends Shell
{

  private $optionsPublish = [
    'all' => 'Publicar todos os arquivos.'
  ];

  public function main()
  {

    $this->out($this->nl(1));

    if(empty($this->args) || !array_key_exists($this->args[0], $this->optionsPublish)){

      $option = $this->_optionsPublish();

    }else{

      $option = $this->args[0];

    }

    $this->out($this->nl(1));

    $this->_publish($option);

    $this->out($this->nl(1));

  }

  protected function _publish($option)
  {

    $folderElement = new Folder(Plugin::path('TwitterBootstrap') . DS . 'src' . DS . 'Template' . DS . 'Element');

    switch ($option) {

      case 'all':

        $folderElement->copy(APP . 'Template' . DS . 'Element', false);

        break;

    }

    $this->out('Arquivos publicados');

  }

  protected function _optionsPublish()
  {

    $this->hr();

    foreach ($this->optionsPublish as $key => $value) {

      $this->out("[$key] $value");

    }

    $this->hr();

    $keys = array_keys($this->optionsPublish);

    return $this->in('O que você quer publicar.', $keys, $keys[0]);

  }

}
