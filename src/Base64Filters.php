<?php

namespace useralberto\craftbase64filters;

use Craft;
use craft\base\Plugin;
use useralberto\craftbase64filters\Base64FiltersTwigExtension;

/**
 * Base64 filters plugin
 *
 * @method static Base64Filters getInstance()
 * @method Settings getSettings()
 * @author useralberto <lalonso.dev@gmail.com>
 * @copyright useralberto
 * @license MIT
 */
class Base64Filters extends Plugin
{
  public string $schemaVersion = "1.0.0";
  public function init()
  {
    parent::init();
    Craft::$app->view->registerTwigExtension(new Base64FiltersTwigExtension());
  }
}
