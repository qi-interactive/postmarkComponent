<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DevNotificationTest
 *
 * @author wichura
 */
class DevNotificationTest extends CTestCase {
    public function testDevNotificationSent() {
        Yii::app()->postmark->sendDevNotification("Problem", "Problem desc");
    }
}
