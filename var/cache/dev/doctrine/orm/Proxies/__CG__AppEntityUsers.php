<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Users extends \App\Entity\Users implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'first_name', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'last_name', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'date_of_birth', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'place_of_birth', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'phone', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'salary', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'image_url', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'gender', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'nationality', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'religion', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'is_married', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'join_date', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'emp_department', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'user_role', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'emp_position', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'bank_account', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'empFamilies', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'user_education_degree', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'empLeaves', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'empAttendances', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'is_delete', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'created', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'modified'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'first_name', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'last_name', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'date_of_birth', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'place_of_birth', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'phone', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'salary', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'image_url', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'gender', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'nationality', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'religion', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'address', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'is_married', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'join_date', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'emp_department', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'user_role', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'emp_position', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'bank_account', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'empFamilies', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'user_education_degree', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'empLeaves', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'empAttendances', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'is_delete', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'created', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'modified'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Users $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName(string $first_name): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$first_name]);

        return parent::setFirstName($first_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName(string $last_name): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$last_name]);

        return parent::setLastName($last_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateOfBirth(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateOfBirth', []);

        return parent::getDateOfBirth();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateOfBirth(\DateTimeInterface $date_of_birth): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateOfBirth', [$date_of_birth]);

        return parent::setDateOfBirth($date_of_birth);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlaceOfBirth(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlaceOfBirth', []);

        return parent::getPlaceOfBirth();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlaceOfBirth(string $place_of_birth): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlaceOfBirth', [$place_of_birth]);

        return parent::setPlaceOfBirth($place_of_birth);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', []);

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone(string $phone): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', [$phone]);

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalary(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalary', []);

        return parent::getSalary();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalary(?int $salary): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalary', [$salary]);

        return parent::setSalary($salary);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageUrl(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageUrl', []);

        return parent::getImageUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageUrl(?string $image_url): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageUrl', [$image_url]);

        return parent::setImageUrl($image_url);
    }

    /**
     * {@inheritDoc}
     */
    public function getGender(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', []);

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender(string $gender): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', [$gender]);

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getNationality(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNationality', []);

        return parent::getNationality();
    }

    /**
     * {@inheritDoc}
     */
    public function setNationality(string $nationality): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNationality', [$nationality]);

        return parent::setNationality($nationality);
    }

    /**
     * {@inheritDoc}
     */
    public function getReligion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReligion', []);

        return parent::getReligion();
    }

    /**
     * {@inheritDoc}
     */
    public function setReligion(string $religion): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReligion', [$religion]);

        return parent::setReligion($religion);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress(string $address): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsMarried(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsMarried', []);

        return parent::getIsMarried();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsMarried(bool $is_married): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsMarried', [$is_married]);

        return parent::setIsMarried($is_married);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getJoinDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJoinDate', []);

        return parent::getJoinDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setJoinDate(\DateTimeInterface $join_date): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJoinDate', [$join_date]);

        return parent::setJoinDate($join_date);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsDelete(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsDelete', []);

        return parent::getIsDelete();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDelete(int $is_delete): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDelete', [$is_delete]);

        return parent::setIsDelete($is_delete);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated(?\DateTimeInterface $created): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getModified(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModified', []);

        return parent::getModified();
    }

    /**
     * {@inheritDoc}
     */
    public function setModified(?\DateTimeInterface $modified): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModified', [$modified]);

        return parent::setModified($modified);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function __call($name, $arguments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$name, $arguments]);

        return parent::__call($name, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmpDepartment(): ?\App\Entity\EmpDepartments
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmpDepartment', []);

        return parent::getEmpDepartment();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmpDepartment(?\App\Entity\EmpDepartments $emp_department): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmpDepartment', [$emp_department]);

        return parent::setEmpDepartment($emp_department);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserRole(): ?\App\Entity\UserRoles
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserRole', []);

        return parent::getUserRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserRole(?\App\Entity\UserRoles $user_role): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserRole', [$user_role]);

        return parent::setUserRole($user_role);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmpPosition(): ?\App\Entity\EmpPositions
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmpPosition', []);

        return parent::getEmpPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmpPosition(?\App\Entity\EmpPositions $emp_position): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmpPosition', [$emp_position]);

        return parent::setEmpPosition($emp_position);
    }

    /**
     * {@inheritDoc}
     */
    public function getBankAccount(): ?\App\Entity\BankAccounts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBankAccount', []);

        return parent::getBankAccount();
    }

    /**
     * {@inheritDoc}
     */
    public function setBankAccount(?\App\Entity\BankAccounts $bank_account): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBankAccount', [$bank_account]);

        return parent::setBankAccount($bank_account);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmpFamilies(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmpFamilies', []);

        return parent::getEmpFamilies();
    }

    /**
     * {@inheritDoc}
     */
    public function addEmpFamily(\App\Entity\EmpFamilies $empFamily): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEmpFamily', [$empFamily]);

        return parent::addEmpFamily($empFamily);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEmpFamily(\App\Entity\EmpFamilies $empFamily): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEmpFamily', [$empFamily]);

        return parent::removeEmpFamily($empFamily);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserEducationDegree(): ?\App\Entity\UserEducationDegrees
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserEducationDegree', []);

        return parent::getUserEducationDegree();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserEducationDegree(?\App\Entity\UserEducationDegrees $user_education_degree): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserEducationDegree', [$user_education_degree]);

        return parent::setUserEducationDegree($user_education_degree);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmpLeaves(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmpLeaves', []);

        return parent::getEmpLeaves();
    }

    /**
     * {@inheritDoc}
     */
    public function addEmpLeaf(\App\Entity\EmpLeaves $empLeaf): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEmpLeaf', [$empLeaf]);

        return parent::addEmpLeaf($empLeaf);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEmpLeaf(\App\Entity\EmpLeaves $empLeaf): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEmpLeaf', [$empLeaf]);

        return parent::removeEmpLeaf($empLeaf);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmpAttendances(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmpAttendances', []);

        return parent::getEmpAttendances();
    }

    /**
     * {@inheritDoc}
     */
    public function addEmpAttendance(\App\Entity\EmpAttendances $empAttendance): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEmpAttendance', [$empAttendance]);

        return parent::addEmpAttendance($empAttendance);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEmpAttendance(\App\Entity\EmpAttendances $empAttendance): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEmpAttendance', [$empAttendance]);

        return parent::removeEmpAttendance($empAttendance);
    }

}
