<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Testimonials Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Testimonial get($primaryKey, $options = [])
 * @method \App\Model\Entity\Testimonial newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Testimonial[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Testimonial|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Testimonial saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Testimonial patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Testimonial[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Testimonial findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TestimonialsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('testimonials');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Translate', [
            'fields' => ['description','btn_content','testimonial_author',],
            'allowEmptyTranslations' => false,
            'translationTable' => 'TestimonialsI18n',
        ]);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('logo_url')
            ->maxLength('logo_url', 255)
            ->requirePresence('logo_url', 'create')
            ->notEmptyString('logo_url');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('testimonial_author')
            ->maxLength('testimonial_author', 255)
            ->allowEmptyString('testimonial_author');

        $validator
            ->scalar('testimonial_author_position')
            ->maxLength('testimonial_author_position', 255)
            ->allowEmptyString('testimonial_author_position');

        $validator
            ->scalar('testimonial_url')
            ->maxLength('testimonial_url', 255)
            ->requirePresence('testimonial_url', 'create')
            ->notEmptyString('testimonial_url');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
