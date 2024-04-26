<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengumuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section class="content px-4 py-3">
        <form>
            <div class="mb-3">
                <label for="command" class="form-label">Buat dengan AI</label>
                <textarea class="form-control" id="command"></textarea>

            </div>
            <div class="mb-3">

                <button type="button" class="btn btn-primary" id="btnGenerate">Generate</button>
            </div>

            <div class="mb-3">
                <label for="pengumuman" class="form-label">Pengumuman</label>
                <textarea class="form-control" id="pengumuman"></textarea>
            </div>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#btnGenerate').click(function(event) {
                event.preventDefault(); // Mencegah formulir untuk dikirim secara default

                // Mengambil nilai dari textarea dengan id 'command'
                var commandText = $('#command').val();

                // Mengirim data ke skrip PHP menggunakan metode POST
                $.post('process.php', {
                    command: commandText
                }, function(data) {
                    // Memperbarui nilai textarea dengan id 'pengumuman' dengan hasil dari skrip PHP
                    $('#pengumuman').val(data);
                });
            });
        });
    </script>
</body>

</html>