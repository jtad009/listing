<?php
namespace Users\Model\Entity;

use Cake\ORM\Entity;

/**
 * RolePrevileadge Entity
 *
 * @property string $id
 * @property string $previleadge_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $role_id
 *
 * @property \Users\Model\Entity\Previleadge $previleadge
 * @property \Users\Model\Entity\Role $role
 */
class RolePrevileadge extends Entity
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
        'previleadge_id' => true,
        'created' => true,
        'modified' => true,
        'role_id' => true,
        'previleadge' => true,
        'role' => true,
    ];
}
