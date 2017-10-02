<?php

use LasseRafn\InitialAvatarGenerator\InitialAvatar;
use PHPUnit\Framework\TestCase;

class ScriptLanguageDetectionTest extends TestCase
{
    public function testCanDetectScriptLanguagesAndUseThem()
    {
        $avatar = new InitialAvatar();

        // Arabic
        $image = $avatar->autoFont()->generate('الحزمة');

        $this->assertEquals('Image', class_basename($image));
        $this->assertTrue($image->stream()->isReadable());

        // Armenian
        $image = $avatar->autoFont()->generate('բենգիմžē');

        $this->assertEquals('Image', class_basename($image));
        $this->assertTrue($image->stream()->isReadable());

        // Bengali
        $image = $avatar->autoFont()->generate('ǰǰô জ');

        $this->assertEquals('Image', class_basename($image));
        $this->assertTrue($image->stream()->isReadable());

        // Georgian
        $image = $avatar->autoFont()->generate('გამარჯობა');

        $this->assertEquals('Image', class_basename($image));
        $this->assertTrue($image->stream()->isReadable());

        // Hebrew
        $image = $avatar->autoFont()->generate('ה ו ז ח ט');

        $this->assertEquals('Image', class_basename($image));
        $this->assertTrue($image->stream()->isReadable());

        // Mongolian
        $image = $avatar->autoFont()->generate('ᠪᠣᠯᠠᠢ᠃');

        $this->assertEquals('Image', class_basename($image));
        $this->assertTrue($image->stream()->isReadable());

        // Thai
        $image = $avatar->autoFont()->generate('สวัสดีชาวโลกและยินดีต้อนรับแพ็กเกจนี้');

        $this->assertEquals('Image', class_basename($image));
        $this->assertTrue($image->stream()->isReadable());

        // Tibetan
        $image = $avatar->autoFont()->generate('ཀཁཆཇའ');

        $this->assertEquals('Image', class_basename($image));
        $this->assertTrue($image->stream()->isReadable());
    }
}
