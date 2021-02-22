<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Form Registrasi</title>
</head>

<body class="bg-light">
    <div class="container-sm">
        <!-- Content here -->
        <form class="col-6 mx-auto" method="POST">
            @csrf

            <div class="card p-2 mt-3 border-0 border-top border-primary border-5 rounded-3">
                <div class="card-body">
                    <h2>Formulir Pendaftar Peserta Didik Baru SMP Mazaya Islamic Boarding School TA 2021/2022</h2>
                    <br>
                    <span class="text-danger">* Wajib</span>
                </div>
            </div>

            @if (session('message'))
            <div class="alert alert-success py-5 mt-3" role="alert">
                <h4 class="alert-heading">{{ session('message') }}</h4>
            </div>

            @else
            <div class="card p-2 mt-3 border-0 rounded-3">
                <div class="card-body">
                    <div class="form-group col-6">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                        <input name="nama_lengkap" value="{{ old('nama_lengkap') }}" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap"
                            placeholder="Jawaban Anda" autocomplete="off">
                        @error('nama_lengkap')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card p-2 mt-3 border-0 rounded-3">
                <div class="card-body">
                    <div class="form-group col-6">
                        <label for="nama_panggilan"  class="form-label">Nama Panggilan <span class="text-danger">*</span></label>
                        <input name="nama_panggilan" value="{{ old('nama_panggilan') }}" type="text" class="form-control @error('nama_panggilan') is-invalid @enderror" id="nama_panggilan"
                            placeholder="Jawaban Anda" autocomplete="off">
                        @error('nama_panggilan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card p-2 mt-3 border-0 rounded-3">
                <div class="card-body">
                    <div class="form-group col-6">
                        <label for="laki-laki" class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                        <div class="form-check">
                            <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin" value="laki-laki" id="laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'checked' : '' }}>
                            <label class="form-check-label" for="laki-laki">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin" value="perempuan" id="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'checked' : '' }}>
                            <label class="form-check-label" for="perempuan">
                                Perempuan
                            </label>
                        </div>
                        @error('jenis_kelamin')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card p-2 mt-3 border-0 rounded-3">
                <div class="card-body">
                    <div class="form-group col-6">
                        <label for="ttl" class="form-label">Tempat / tanggal lahir <span class="text-danger">*</span></label>
                        <input name="ttl" value="{{ old('ttl') }}" type="text" class="form-control @error('ttl') is-invalid @enderror" id="ttl"
                            placeholder="Jawaban Anda" autocomplete="off">
                        @error('ttl')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card p-2 mt-3 border-0 rounded-3">
                <div class="card-body">
                    <div class="form-group col-6">
                        <label for="wni" class="form-label">Kewarganegaraan <span class="text-danger">*</span></label>
                        <div class="form-check">
                            <input class="form-check-input @error('kewarganegaraan') is-invalid @enderror" type="radio" name="kewarganegaraan" value="wni" id="wni" {{ old('kewarganegaraan') == 'wni' ? 'checked' : '' }}>
                            <label class="form-check-label" for="wni">
                                WNI (Indonesia)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('kewarganegaraan') is-invalid @enderror" type="radio" name="kewarganegaraan" value="wna" id="wna" {{ old('kewarganegaraan') == 'wna' ? 'checked' : '' }}>
                            <label class="form-check-label" for="wna">
                                WNA (Asing)
                            </label>
                        </div>
                        @error('kewarganegaraan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card p-2 mt-3 border-0 rounded-3">
                <div class="card-body">
                    <div class="form-group col-6">
                        <label for="1" class="form-label">Gelombang Pendaftaran <span class="text-danger">*</span></label>
                        <div class="form-check">
                            <input class="form-check-input  @error('gelombang') is-invalid @enderror" type="radio" name="gelombang" value="gelombang 1" id="1" {{ old('gelombang') == 'gelombang 1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="1">
                                Gelombang 1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input  @error('gelombang') is-invalid @enderror" type="radio" name="gelombang" value="gelombang 2" id="2" {{ old('gelombang') == 'gelombang 2' ? 'checked' : '' }}>
                            <label class="form-check-label" for="2">
                                Gelombang 2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input  @error('gelombang') is-invalid @enderror" type="radio" name="gelombang" value="gelombang 3" id="3" {{ old('gelombang') == 'gelombang 3' ? 'checked' : '' }}>
                            <label class="form-check-label" for="3">
                                Gelombang 3
                            </label>
                        </div>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card p-2 mt-3 border-0 rounded-3">
                <div class="card-body">
                    <div class="form-group col-6">
                        <label for="ya" class="form-label">Anak Berkebutuhan Khusus (ABK) <span class="text-danger">*</span></label>
                        <div class="form-check">
                            <input class="form-check-input @error('abk') is-invalid @enderror" type="radio" name="abk" value="ya" id="ya" {{ old('abk') == 'ya' ? 'checked' : '' }}>
                            <label class="form-check-label" for="ya">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('abk') is-invalid @enderror" type="radio" name="abk" value="tidak" id="tidak" {{ old('abk') == 'tidak' ? 'checked' : '' }}>
                            <label class="form-check-label" for="tidak">
                                Tidak
                            </label>
                        </div>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card p-2 mt-3 border-0 rounded-3">
                <div class="card-body">
                    <div class="form-group col-6">
                        <label for="alamat" class="form-label">Alamat Tempat Tinggal Sekarang (diisi lengkap) <span class="text-danger">*</span></label>
                        <input name="alamat" value="{{ old('alamat') }}" type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                            placeholder="Jawaban Anda" autocomplete="off">
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card p-2 mt-3 border-0 rounded-3">
                <div class="card-body">
                    <div class="form-group col-6">
                        <label for="nama_ayah" class="form-label">Nama Ayah <span class="text-danger">*</span></label>
                        <input name="nama_ayah" value="{{ old('nama_ayah') }}" type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah"
                            placeholder="Jawaban Anda" autocomplete="off">
                        @error('nama_ayah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card p-2 mt-3 border-0 rounded-3">
                <div class="card-body">
                    <div class="form-group col-6">
                        <label for="nama_ibu" class="form-label">Nama Ibu <span class="text-danger">*</span></label>
                        <input name="nama_ibu" value="{{ old('nama_ibu') }}" type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu"
                            placeholder="Jawaban Anda" autocomplete="off">
                        @error('nama_ibu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card p-2 mt-3 border-0 rounded-3">
                <div class="card-body">
                    <div class="form-group col-6">
                        <label for="daerah" class="form-label">Nama kelp. desa. daerah (JM) </label>
                        <input name="daerah" value="{{ old('daerah') }}" type="text" class="form-control @error('daerah') is-invalid @enderror" id="daerah"
                            placeholder="Jawaban Anda" autocomplete="off">
                        @error('daerah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card p-2 mt-3 border-0 rounded-3">
                <div class="card-body">
                    <div class="form-group col-6">
                        <label for="no_hp_ayah" class="form-label">Nomor HP Ayah </label>
                        <input name="no_hp_ayah" value="{{ old('no_hp_ayah') }}" type="text" class="form-control @error('no_hp_ayah') is-invalid @enderror" id="no_hp_ayah"
                            placeholder="Jawaban Anda" autocomplete="off">
                        @error('no_hp_ayah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card p-2 mt-3 border-0 rounded-3">
                <div class="card-body">
                    <div class="form-group col-6">
                        <label for="no_hp_ibu" class="form-label">No. HP Ibu </label>
                        <input name="no_hp_ibu" value="{{ old('no_hp_ibu') }}" type="text" class="form-control @error('no_hp_ibu') is-invalid @enderror" id="no_hp_ibu"
                            placeholder="Jawaban Anda" autocomplete="off">
                        @error('no_hp_ibu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card p-2 mt-3 border-0 rounded-3">
                <div class="card-body">
                    <div class="form-group col-6">
                        <label for="tlp" class="form-label">Nomor Telp. Rumah (jika ada) </label>
                        <input name="tlp" value="{{ old('tlp') }}" type="text" class="form-control @error('tlp') is-invalid @enderror" id="tlp"
                            placeholder="Jawaban Anda" autocomplete="off">
                        @error('tlp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card p-2 mt-3 border-0 rounded-3">
                <div class="card-body">
                    <div class="form-group col-6">
                        <label for="email" class="form-label">Email pribadi atau email orang tua </label>
                        <input name="email" value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="Jawaban Anda" autocomplete="off">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card p-2 mt-3 border-0 rounded-3">
                <div class="card-body">
                    <div class="form-group col-12">
                        <label for="info1" class="form-label">Mendapatkan Informasi tentang penerimaan siswa baru SMP Mazaya <span class="text-danger">*</span></label>
                        <div class="form-check">
                            <input class="form-check-input @error('info_dari') is-invalid @enderror" type="radio" name="info_dari" value="Direkomendasikan Saudara/kerabat/tetangga" id="info1" {{ old('info_dari') == 'Direkomendasikan Saudara/kerabat/tetangga' ? 'checked' : '' }}>
                            <label class="form-check-label" for="info1">
                                Direkomendasikan Saudara/kerabat/tetangga
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('info_dari') is-invalid @enderror" type="radio" name="info_dari" value="Media sosial (WA/Youtube/telegram/IG, dll)" id="info2" {{ old('info_dari') == 'Media sosial (WA/Youtube/telegram/IG, dll)' ? 'checked' : '' }}>
                            <label class="form-check-label" for="info2">
                                Media sosial (WA/Youtube/telegram/IG, dll)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('info_dari') is-invalid @enderror" type="radio" name="info_dari" value="Media cetak (Nuansa)" id="info3" {{ old('info_dari') == 'Media cetak (Nuansa)' ? 'checked' : '' }}>
                            <label class="form-check-label" for="info3">
                                Media cetak (Nuansa)
                            </label>
                        </div>
                        @error('info_dari')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mt-3 mb-5">
                <div class="form-group">
                    <button class="btn btn-primary">Kirim</button>
                </div>
            </div>
            @endif




        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>
