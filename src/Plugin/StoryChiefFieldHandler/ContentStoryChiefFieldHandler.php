<?php

namespace Drupal\custom_storychief_mapping\Plugin\StoryChiefFieldHandler;

use Drupal\storychief\Plugin\FieldHandlerType\ParagraphFieldHandlerType;

/**
 * Class ContentStoryChiefFieldHandler.
 * Example of a Paragraphs field.
 *
 * @StoryChiefFieldHandler(
 *   id = "custom_content",
 *   label = @Translation("Custom mapping of the content to a Paragraph field"),
 *   drupal_field_name = "field_content",
 * )
 */
class ContentStoryChiefFieldHandler extends ParagraphFieldHandlerType {

  /**
   * {@inheritdoc}
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   * @throws \Drupal\Core\Entity\EntityStorageException
   */
  public function set()
  {
    $paragraph_type = 'row'; // TODO replace with paragraph machine name
    $field_name = 'field_text'; // TODO replace with paragraph field machine name

    $paragraph = $this->getParagraph($paragraph_type);

    $paragraph->set($field_name, [
      'value' => $this->getValue(),
      'format' => 'full_html',
    ]);

    $this->setParagraph($paragraph);
  }

  /**
   * {@inheritdoc}
   */
  public function getValue()
  {
    return $this->getPayload()['content'];
  }
}
