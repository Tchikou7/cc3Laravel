<!DOCTYPE html>
<html>
<head>
    <title>إرسال إيميل</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>مرحبا بيك فصفحة الإيميل</h1>
    <p>هادي صفحة تجريبية لإرسال الإيميلات.</p>
    <form action="{{ route('send.email') }}" method="POST">
        @csrf
        <label for="message">الرسالة:</label>
        <input type="text" name="message" id="message" placeholder="كتب الرسالة هنا" required>
        <button type="submit">أرسل</button>
    </form>
</body>
</html>
