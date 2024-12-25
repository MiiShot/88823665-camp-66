<!DOCTYPE html>
<html lang="th">
<head>
    <title>ตารางสูตรคูณแม่ 2</title>
</head>
<body>
    <h1>ตารางสูตรคูณแม่ 2</h1>
    <table id="multiplication-table">
        <thead>
            <tr>
                <th>แม่ 2</th>
                <th>ผลลัพธ์</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <script>
        const table = document.querySelector('#multiplication-table tbody');
        for (let i = 1; i <= 12; i++) {
            const row = `<tr><td>2 x ${i}</td><td>${2 * i}</td></tr>`;
            table.innerHTML += row;
        }
    </script>
</body>
</html>
