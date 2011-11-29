<?php
Cache::config('default', array('engine' => 'File'));
Configure::write('recaptcha.publickey', '');
Configure::write('recaptcha.privatekey', '');
Configure::write('Config.language', 'en');
Configure::write('Security.cipherSeed', '123');
Configure::write('Security.salt', 'abc');
Configure::write('Session.cookie', 'COORDINO');
Configure::write('log', false);
?>