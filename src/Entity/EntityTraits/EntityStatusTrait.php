<?php

namespace Drupal\kgaut_tools\Entity\EntityTraits;

use Drupal\Core\Field\BaseFieldDefinition;

trait EntityStatusTrait {

  /**
   * {@inheritdoc}
   */
  public function isPublished() {
    return (bool) $this->getEntityKey('status');
  }

  /**
   * {@inheritdoc}
   */
  public function setPublished($published) {
    $this->set('status', $published ? TRUE : FALSE);
    return $this;
  }


  public static function baseFieldStatus() {
    return BaseFieldDefinition::create('boolean')
      ->setLabel(t('Publishing status'))
      ->setDescription(t('A boolean indicating whether the content is published.'))
      ->setDefaultValue(TRUE);
  }

}
