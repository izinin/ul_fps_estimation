<?php
/**
 * @file
 * Contains \Drupal\ul_fps_estimation\Controller\UlFpsEstimationController.
 */
namespace Drupal\ul_fps_estimation\Controller;
class UlFpsEstimationController {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello, World!'),
    );
  }
}