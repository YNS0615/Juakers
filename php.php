<?php
// الاتصال بقاعدة البيانات
$db = new mysqli("localhost", "username", "password", "database_name");

// استعلام لجلب المستخدمين
$result = $db->query("SELECT id, email, username FROM users");

echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Password</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>******** (كلمة المرور مشفرة ومحمية)</td>"; // لا تعرض كلمة المرور الحقيقية هنا
    echo "</tr>";
}
echo "</table>";
?>