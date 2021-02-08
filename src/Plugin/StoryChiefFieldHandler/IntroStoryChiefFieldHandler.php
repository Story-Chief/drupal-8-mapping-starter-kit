<?php

namespace Drupal\custom_storychief_mapping\Plugin\StoryChiefFieldHandler;

use Drupal\storychief\Plugin\FieldHandlerType\BaseFieldHandlerType;

/**
 * Class IntroStoryChiefFieldHandler.
 * Example of simple field mapping altering the payload value.
 *
 * @StoryChiefFieldHandler(
 *   id = "excerpt",
 *   label = @Translation("Custom mapping of the excerpt"),
 *   drupal_field_name = "field_intro",
 * )
 */
class IntroStoryChiefFieldHandler extends BaseFieldHandlerType {

  /**
   * {@inheritdoc}
   * Uppercase the payload value before saving.
   */
  public function getValue()
  {
    $value = parent::getValue();

    return strtoupper($value);
  }
}
