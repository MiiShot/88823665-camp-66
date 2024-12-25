<!DOCTYPE html>
<html lang="th">
<head>
    <title>ตารางสูตรคูณ</title>
</head>
<body>
    <h1>ตารางสูตรคูณ</h1>
    <form onsubmit="showTable(); return false;">
        <label for="base-number">ระบุแม่สูตรคูณ: </label>
        <input type="number" id="base-number" min="1" required>
        <button type="submit">แสดงตาราง</button>
    </form>
    <div id="result"></div>

    <script>
        function showTable() {
            const baseNumber = document.getElementById('base-number').value;
            let result = '';
            for (let i = 1; i <= 12; i++) {
                result += baseNumber + ' x ' + i + ' = ' + (baseNumber * i) + '<br>';
            }
            document.getElementById('result').innerHTML = result;
        }
    </script>
</body>
</html>
