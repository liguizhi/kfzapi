<?php
/**
 * Auto generated from test.proto at 2014-11-30 20:28:33
 */

/**
 * PhoneType enum embedded in Person message
 */
final class Person_PhoneType
{
    const MOBILE = 0;
    const HOME = 1;
    const WORK = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MOBILE' => self::MOBILE,
            'HOME' => self::HOME,
            'WORK' => self::WORK,
        );
    }
}

/**
 * PhoneNumber message embedded in Person message
 */
class Person_PhoneNumber extends \ProtobufMessage
{
    /* Field index constants */
    const NUMBER = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NUMBER => array(
            'name' => 'number',
            'required' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NUMBER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'number' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNumber($value)
    {
        return $this->set(self::NUMBER, $value);
    }

    /**
     * Returns value of 'number' property
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->get(self::NUMBER);
    }
}

/**
 * Person message
 */
class Person extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const ID = 2;
    const EMAIL = 3;
    const PHONE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
        self::ID => array(
            'name' => 'id',
            'required' => true,
            'type' => 5,
        ),
        self::EMAIL => array(
            'name' => 'email',
            'required' => false,
            'type' => 7,
        ),
        self::PHONE => array(
            'name' => 'phone',
            'repeated' => true,
            'type' => 'Person_PhoneNumber'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NAME] = null;
        $this->values[self::ID] = null;
        $this->values[self::EMAIL] = null;
        $this->values[self::PHONE] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        return $this->get(self::NAME);
    }

    /**
     * Sets value of 'id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return int
     */
    public function getId()
    {
        return $this->get(self::ID);
    }

    /**
     * Sets value of 'email' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEmail($value)
    {
        return $this->set(self::EMAIL, $value);
    }

    /**
     * Returns value of 'email' property
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->get(self::EMAIL);
    }

    /**
     * Appends value to 'phone' list
     *
     * @param Person_PhoneNumber $value Value to append
     *
     * @return null
     */
    public function appendPhone(Person_PhoneNumber $value)
    {
        return $this->append(self::PHONE, $value);
    }

    /**
     * Clears 'phone' list
     *
     * @return null
     */
    public function clearPhone()
    {
        return $this->clear(self::PHONE);
    }

    /**
     * Returns 'phone' list
     *
     * @return Person_PhoneNumber[]
     */
    public function getPhone()
    {
        return $this->get(self::PHONE);
    }

    /**
     * Returns 'phone' iterator
     *
     * @return ArrayIterator
     */
    public function getPhoneIterator()
    {
        return new \ArrayIterator($this->get(self::PHONE));
    }

    /**
     * Returns element from 'phone' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Person_PhoneNumber
     */
    public function getPhoneAt($offset)
    {
        return $this->get(self::PHONE, $offset);
    }

    /**
     * Returns count of 'phone' list
     *
     * @return int
     */
    public function getPhoneCount()
    {
        return $this->count(self::PHONE);
    }
}
