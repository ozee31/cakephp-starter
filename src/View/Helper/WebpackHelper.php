<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\Core\Configure;
use Cake\View\View;
use Cake\Filesystem\File;

class WebpackHelper extends Helper {

  public $helpers = ['Html'];
  private $_assets = ['js' => '', 'css' => ''];

  public function __construct(View $View, array $config = []) {
    parent::__construct($View, $config);
    $this->_loadAssetsConfig();
  }

  public function css(array $options = []) {
    if (Configure::read('debug') && (!isset($options['build']) || !$options['build'] )) {
      return;
    }

    return '<link rel="stylesheet" href="' . $this->_assets['css'] . '">';
  }

  public function script(array $options = []) {
    if (Configure::read('debug') && (!isset($options['build']) || !$options['build'] )) {
      $url = Configure::read('Webpack.assets.dev');
      return $this->Html->script(Configure::read('Webpack.assets.dev'), $options);
    }

    return '<script src="' . $this->_assets['js'] . '"></script>';
  }

  private function _loadAssetsConfig() {
    $file = new File(Configure::read('Webpack.assets.config'));

    if (($config = json_decode($file->read(), true)) && isset($config['app'])) {
      $this->_assets = $config['app'];
    }
  }
}