<?php
/**
 * Auto generated from sellerLogin.proto at 2014-11-30 19:41:31
 */

/**
 * SellerLogin message
 */
class SellerLogin extends \ProtobufMessage
{
    /* Field index constants */
    const USERNAME = 1;
    const PASSWORD = 2;
    const APPID = 3;
    const APPNAME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERNAME => array(
            'name' => 'username',
            'required' => true,
            'type' => 7,
        ),
        self::PASSWORD => array(
            'name' => 'password',
            'required' => true,
            'type' => 7,
        ),
        self::APPID => array(
            'name' => 'appId',
            'required' => true,
            'type' => 5,
        ),
        self::APPNAME => array(
            'name' => 'appName',
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
        $this->values[self::USERNAME] = null;
        $this->values[self::PASSWORD] = null;
        $this->values[self::APPID] = null;
        $this->values[self::APPNAME] = null;
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
     * Sets value of 'username' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUsername($value)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'username' property
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->get(self::USERNAME);
    }

    /**
     * Sets value of 'password' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPassword($value)
    {
        return $this->set(self::PASSWORD, $value);
    }

    /**
     * Returns value of 'password' property
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->get(self::PASSWORD);
    }

    /**
     * Sets value of 'appId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAppId($value)
    {
        return $this->set(self::APPID, $value);
    }

    /**
     * Returns value of 'appId' property
     *
     * @return int
     */
    public function getAppId()
    {
        return $this->get(self::APPID);
    }

    /**
     * Sets value of 'appName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAppName($value)
    {
        return $this->set(self::APPNAME, $value);
    }

    /**
     * Returns value of 'appName' property
     *
     * @return string
     */
    public function getAppName()
    {
        return $this->get(self::APPNAME);
    }
}

/**
 * SellerLoginOutPut message
 */
class SellerLoginOutPut extends \ProtobufMessage
{
    /* Field index constants */
    const STATUS = 1;
    const CODE = 2;
    const INFO = 3;
    const TOKEN = 4;
    const UID = 5;
    const PHOTO = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STATUS => array(
            'name' => 'status',
            'required' => true,
            'type' => 5,
        ),
        self::CODE => array(
            'name' => 'code',
            'required' => false,
            'type' => 5,
        ),
        self::INFO => array(
            'name' => 'info',
            'required' => false,
            'type' => 7,
        ),
        self::TOKEN => array(
            'name' => 'token',
            'required' => false,
            'type' => 7,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::PHOTO => array(
            'name' => 'photo',
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
        $this->values[self::STATUS] = null;
        $this->values[self::CODE] = null;
        $this->values[self::INFO] = null;
        $this->values[self::TOKEN] = null;
        $this->values[self::UID] = null;
        $this->values[self::PHOTO] = null;
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
     * Sets value of 'status' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->get(self::STATUS);
    }

    /**
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode()
    {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'info' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInfo($value)
    {
        return $this->set(self::INFO, $value);
    }

    /**
     * Returns value of 'info' property
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->get(self::INFO);
    }

    /**
     * Sets value of 'token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToken($value)
    {
        return $this->set(self::TOKEN, $value);
    }

    /**
     * Returns value of 'token' property
     *
     * @return string
     */
    public function getToken()
    {
        return $this->get(self::TOKEN);
    }

    /**
     * Sets value of 'uid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUid($value)
    {
        return $this->set(self::UID, $value);
    }

    /**
     * Returns value of 'uid' property
     *
     * @return string
     */
    public function getUid()
    {
        return $this->get(self::UID);
    }

    /**
     * Sets value of 'photo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPhoto($value)
    {
        return $this->set(self::PHOTO, $value);
    }

    /**
     * Returns value of 'photo' property
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->get(self::PHOTO);
    }
}
