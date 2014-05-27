<?php

abstract class Actor {

    private static $name;
    private static $age;
    private static $gender;
    private static $race;
    private static $hpMax;
    private static $mpMax;
    private static $hpCurrent;
    private static $mpCurrent;

    
    abstract protected function decreaseHpCurrent();

    abstract protected function increaseHpCurrent();

    abstract protected function decreaseMpCurrent();

    abstract protected function increaseMpCurrent();

    abstract protected function decreaseHpMax();

    abstract protected function increaseHpMax();

    abstract protected function decreaseMpMax();

    abstract protected function increaseMpMax();

    public static function getName() {
        return self::$name;
    }

    public static function getAge() {
        return self::$age;
    }

    public static function getGender() {
        return self::$gender;
    }

    public static function getRace() {
        return self::$race;
    }

    public static function setName($name) {
        self::$name = $name;
    }

    public static function setAge($age) {
        self::$age = $age;
    }

    public static function setGender($gender) {
        self::$gender = $gender;
    }

    public static function setRace($race) {
        self::$race = $race;
    }

    public static function getHpMax() {
        return self::$hpMax;
    }

    public static function getMpMax() {
        return self::$mpMax;
    }

    public static function getHpCurrent() {
        return self::$hpCurrent;
    }

    public static function getMpCurrent() {
        return self::$mpCurrent;
    }

    public static function setHpMax($hpMax) {
        self::$hpMax = $hpMax;
    }

    public static function setMpMax($mpMax) {
        self::$mpMax = $mpMax;
    }

    public static function setHpCurrent($hpCurrent) {
        self::$hpCurrent = $hpCurrent;
    }

    public static function setMpCurrent($mpCurrent) {
        self::$mpCurrent = $mpCurrent;
    }

}

?>