<?php
class User extends CI_Model {
    public function make() {
        return R::dispense('users');
    }

    public function save($user) {
        $id = R::store($user);
        return $id;
    }

    public function loadById($id) {
        return R::load('users', $id);
    }

    public function loadByPhone($phone) {
        return R::findOne('users', 'phone_number = ?', array($phone));
    }
}

class Model_Users extends RedBean_SimpleModel {
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getPhoneNumber() {
        return $this->phone_number;
    }

    public function setPhoneNumber($phoneNumber) {
        $this->phone_number = $phoneNumber;
    }

    public function getPlaying() {
        return $this->playing;
    }

    public function setPlaying($playing) {
        $this->playing = $playing;
    }
}
