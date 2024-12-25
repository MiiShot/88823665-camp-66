<!DOCTYPE html>
<html lang="th">
<head>
    <title>เลขคู่และเลขคี่</title>
</head>
<body>
    <h1>แสดงเลขคู่และเลขคี่</h1>
    <div id="number-list"></div>
    <script>
        const list = document.getElementById('number-list');
        for (let i = 1; i <= 100; i++) {
            const type = (i % 2 === 0) ? 'เลขคู่' : 'เลขคี่';
            list.innerHTML += `<p>${i} - ${type}</p>`;
        }
    </script>
</body>
</html>
