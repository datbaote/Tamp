<?php
$cfg['blowfish_secret'] = ''; /* Bạn có thể điền vào giá trị cho cookie auth */

$i = 0;
$i++;

$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['host'] = '127.0.0.1';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = 'gojovip1';
$cfg['Servers'][$i]['AllowNoPassword'] = false; // Đặt thành false để yêu cầu mật khẩu

$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

// Các phần cấu hình khác có thể giữ nguyên hoặc thay đổi tùy ý

?>
