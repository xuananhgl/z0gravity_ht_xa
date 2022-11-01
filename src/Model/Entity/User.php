<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $user_email
 * @property string $user_password
 * @property string|null $user_url
 * @property int $user_role_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Article[] $articles
 * @property \App\Model\Entity\Banner[] $banners
 * @property \App\Model\Entity\Testimonial[] $testimonials
 */
class User extends Entity
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
        'user_email' => true,
        'user_password' => true,
        'user_url' => true,
        'user_role_id' => true,
        'created' => true,
        'modified' => true,
        'role' => true,
        'articles' => true,
        'banners' => true,
        'testimonials' => true,
    ];
    protected function _setUserPassword($password) {
        return (new DefaultPasswordHasher)->hash($password);
    }
}
