<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Roby Website</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
     <!-- Datatables -->
      <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
</head>
<body>


<!-- Hero Section -->
<header class="bg-light text-dark text-center py-5" style="background-image: url('assets/img/hero.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <h1 class="display-4 fw-bold">Welcome to MyWebsite</h1>
        <p class="lead">Ini adalah website dinamis yang dibuat untuk memenuhi tugas UTS mata kuliah pemrograman web. website ini mengenai jasa/layanan. Disini kami menyediakan layanan terbaik untuk membantu Anda sukses.</p>
        <a href="#services" class="btn btn-primary mt-3">Jelajahi Layanan Kami</a>
    </div>
</header>

<!-- About Us Section -->
<section id="about" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Tentang Kami</h2>
        <div class="row">
            <div class="col-md-6">
                <p>Kami adalah tim profesional yang berdedikasi untuk menyediakan layanan berkualitas tinggi bagi klien kami. Keahlian kami mencakup berbagai bidang, sehingga kami dapat memberikan solusi terbaik yang disesuaikan dengan kebutuhan Anda.</p>
            </div>
            <div class="col-md-6">
                <p>Misi kami adalah membantu Anda mencapai tujuan secara efisien dan efektif. Dengan pengalaman dan komitmen terhadap keunggulan, kami menjamin kepuasan dalam setiap proyek yang kami kerjakan.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Layanan Kami</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Membuat applikasi android</h5>
                        <p class="card-text">Aplikasi Android adalah perangkat lunak yang dapat diinstal pada perangkat seluler yang menggunakan sistem operasi Android. Kami sangat ahli dalam hal ini. Jadi anda tidak perlu ragu lagi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Les privat</h5>
                        <p class="card-text">Les privat merupakan salah satu pendidikan nonformal yang dinyatakan efektif dalam membantu menunjang keberhasilan proses pembelajaran siswa. Kami memiliki guru guru yang ahli dan sangat mumpuni, anda tidak perlu ragu untuk hal ini.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Web development</h5>
                        <p class="card-text">Website adalah media promosi yang efektif dan efisien untuk bisnis bersaing di pasar modern.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us Section -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Kontak Kami</h2>
        <div class="row">
            <div class="col-md-6">
                <h5>Address</h5>
                <p>Desa Kedokansayang Tarub, Tegal, Jawa Tengah</p>
                <h5>Email</h5>
                <p>robysunjaya9@gmail.com</p>
                <h5>Phone</h5>
                <p>0895 3851 91979</p>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">&copy; RobyCoding.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
