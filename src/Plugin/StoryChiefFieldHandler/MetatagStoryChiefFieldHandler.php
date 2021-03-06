<?php

namespace Drupal\custom_storychief_mapping\Plugin\StoryChiefFieldHandler;

use Drupal\storychief\Plugin\FieldHandlerType\MetatagFieldHandlerType;

/**
 * Class MetatagStoryChiefFieldHandler.
 * Example of a Metatag field
 *
 * @StoryChiefFieldHandler(
 *   id = "custom_meta_tag",
 *   label = @Translation("Custom mapping of the meta tags to a Meta Tag field"),
 *   drupal_field_name = "field_meta_tag",
 * )
 */
class MetatagStoryChiefFieldHandler extends MetatagFieldHandlerType {

}
