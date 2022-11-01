<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Testimonial Entity
 *
 * @property int $id
 * @property string $logo_url
 * @property string|null $description
 * @property string|null $testimonial_author
 * @property string|null $testimonial_author_position
 * @property string $testimonial_url
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Testimonial extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'logo_url' => true,
        'description' => true,
        'testimonial_author' => true,
        'testimonial_author_position' => true,
        'testimonial_url' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
