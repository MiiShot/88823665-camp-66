<!DOCTYPE html>
<html lang="th">
<head>
    <title>เลขคู่และเลขคี่</title>
</head>
<body>
    <h1>แสดงเลขคู่และเลขคี่</h1>
    <form onsubmit="showNumbers(); return false;">
        <label for="start">เริ่มต้น: </label>
        <input type="number" id="start" required>
        <label for="end">สิ้นสุด: </label>
        <input type="number" id="end" required>
        <button type="submit">แสดงผล</button>
    </form>
    <div id="result"></div>

    <script>
        function showNumbers() {
            const start = parseInt(document.getElementById('start').value);
            const end = parseInt(document.getElementById('end').value);
            let result = '';
            
            for (let i = start; i <= end; i++) {
                const type = (i % 2 === 0) ? 'เลขคู่' : 'เลขคี่';
                result += `${i} - ${type}<br>`;
            }
            
            document.getElementById('result').innerHTML = result;
        }
    </script>
</body>
</html>
