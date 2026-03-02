<?php
# 测试PHP是否正常
phpinfo();

# 测试PHP连接MySQL
$link = mysqli_connect('localhost', 'root', 'Aa126520!');
if ($link) {
    echo "<br><h2>MySQL连接成功！</h2>";
} else {
    echo "<br><h2>MySQL连接失败：" . mysqli_connect_error() . "</h2>";
}
?>
