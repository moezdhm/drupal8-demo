<?php

/**
 * @file
 * Contains \Drupal\demo_form\Controller\DemoFormController.
 */

namespace Drupal\demo_form\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Demo Form module routes.
 */
class DemoFormController extends ControllerBase {

  /**
   * Controller content callback: Info page.
   *
   * @return string
   */
  public function infoPage() {

    $output['info'] = array(
      '#markup' => $this->t('This demonstrates forms in Drupal 8. The following examples are available:'),
    );

    $output['urls'] = array(
      '#theme' => 'item_list',
      '#items' => array(
        $this->t('A basic form: !url.', array('!url' => l('/demo/form/basic', 'demo/form/basic'))),
      ),
    );

    return $output;
  }

}
