<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Analisis</title>
</head>

<body>
    <h1>Hasil Analisis</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <p>Protein: {{ session('protein') }} grams</p>
    <p>Lemak: {{ session('lemak') }} grams</p>
    <p>Karbohidrat: {{ session('karbohidrat') }} grams</p>

    <h2>Makanan Pagi Terbaik</h2>
    @if(session('top_result_pagi'))
    <p>{{ session('top_result_pagi.nama') }} </p>
    @else
    <p>Tidak ada data makanan pagi yang tersedia.</p>
    @endif

    <h2>Makanan Siang Terbaik</h2>
    @if(session('top_result_siang'))
    <p>{{ session('top_result_siang.nama') }} </p>
    @else
    <p>Tidak ada data makanan siang yang tersedia.</p>
    @endif

    <h2>Makanan Malam Terbaik</h2>
    @if(session('top_result_malam'))
    <p>{{ session('top_result_malam.nama') }} </p>
    @else
    <p>Tidak ada data makanan malam yang tersedia.</p>
    @endif
</body>

</html>