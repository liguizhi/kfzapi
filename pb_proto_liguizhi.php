<?php
/**
 * Auto generated from liguizhi.proto at 2014-11-30 18:34:38
 */

/**
 *  message
 */
class  extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const AREA = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => true,
            'type' => 7,
        ),
        self::AREA => array(
            'name' => 'area',
            'required' => false,
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
        $this->values[self::NAME] = null;
        $this->values[self::AREA] = null;
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
     * Sets value of 'area' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setArea($value)
    {
        return $this->set(self::AREA, $value);
    }

    /**
     * Returns value of 'area' property
     *
     * @return string
     */
    public function getArea()
    {
        return $this->get(self::AREA);
    }
}
