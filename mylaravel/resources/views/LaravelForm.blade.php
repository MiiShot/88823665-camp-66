<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="text-center">ตารางสูตรคูณ</h1>

            <!-- ฟอร์มรับค่า -->
            <form method="post"
            action= "{{url ('/LaravelForm') }}" class="mb-4">
            @csrf
                <div class="mb-3">
                    <label for="number" class="form-label">กรอกแม่สูตรคูณที่ต้องการ:</label>
                    <input type="number" name="number" id="number" class="form-control" required placeholder="เช่นใส่เลข 2">
                </div>
                <button type="submit" class="btn btn-success">แสดงตารางสูตรคูณ</button>
            </form>

            <?php
            // ตรวจสอบว่าผู้ใช้กรอกข้อมูลหรือไม่
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['number'])) {
                $my_var = intval($_POST['number']); // รับค่าจากฟอร์ม
            ?>
                <h2 class="text-center">ตารางสูตรคูณแม่ <?php echo $my_var; ?></h2>
                <div class="mt-4">
                    <?php
                    for ($i = 1; $i <= 12; $i++) { // วนลูปสร้างสูตรคูณ
                    ?>
                    <div class="row">
                        <div class="col h4 text-end">
                            <?php echo $my_var . " x " . $i . " = "; ?>
                        </div>
                        <div class="col h4 text-start">
                            <?php echo $my_var * $i; ?>
                        </div>
                    </div>
                    <?php
                    } // ปิดลูป
                    ?>
                </div>
            <?php
            } // ปิดการตรวจสอบ
            ?>
        </div>
    </body>
</html>
