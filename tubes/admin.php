<!DOCTYPE html>
<html>

<head>
    <title>Halaman Admin Berita</title>
    <style>
        /* CSS untuk tampilan halaman */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .news-form {
            max-width: 500px;
            margin: 0 auto;
        }

        .news-form label {
            display: block;
            margin-bottom: 10px;
        }

        .news-form input[type="text"],
        .news-form textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .news-form button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>Halaman Admin Berita</h1>

    <div class="news-form">
        <form>
            <label for="title">Judul Berita:</label>
            <input type="text" id="title" name="title" placeholder="Masukkan judul berita" required>

            <label for="content">Konten Berita:</label>
            <textarea id="content" name="content" rows="8" placeholder="Masukkan konten berita" required></textarea>

            <button type="submit">Tambah Berita</button>
        </form>
    </div>
</body>

</html>