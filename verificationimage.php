<?php
  /**
   * Verfication Image Generator - No need to touch this code!
   * Available under an MIT License (see details below)
   */

  header('Content-type: image/jpeg');

  $width = 50;
  $height = 30;

  $my_image = imagecreatetruecolor($width, $height);

  imagefill($my_image, 0, 0, 0xFFFFFF);

  // add noise
  for ($c = 0; $c < 40; $c++) {
    $x = rand(0,$width-1);
    $y = rand(0,$height-1);
    imagesetpixel($my_image, $x, $y, 0x000000);
  }

  $x = rand(1,10);
  $y = rand(1,10);

  $rand_string = rand(1000,9999);
  imagestring($my_image, 5, $x, $y, $rand_string, 0x000000);

  setcookie('tntcon',(md5($rand_string).'a4xn'));

  imagejpeg($my_image);
  imagedestroy($my_image);

  /*
  Copyright (c) 2013 Jonathan Grover

  Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

  The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
  */
?>