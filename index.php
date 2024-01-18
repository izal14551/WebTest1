<?php
// Mulai atau resume sesi
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    // Jika tidak, redirect ke halaman login
    header("Location: /WebTest/login/login.html");
    exit();
}

// Email pengguna yang digunakan untuk login
$userEmail = $_SESSION['email'];

// Pisahkan email menjadi dua bagian: nama depan dan domain
$emailParts = explode('@', $userEmail);

// Ambil nama depan (elemen pertama setelah pemisahan)
$firstName = $emailParts[0];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Calistoga&family=Inter:wght@100;200;300;400;500;600&family=Poppins:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <title>Document</title>

    <script src="fontawesome/js/all.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <div class="container-fluid ms-lg-5 me-lg-5">
        <a
          class="navbar-brand"
          style="
            font-family: Calistoga;
            font-size: 24px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
          "
          href="index.html"
          >Tambaksari Kidul</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-lg-auto">
            <a class="nav-link" href="/WebTest/profil/visimisi.html">Profil</a>
            <a
              class="nav-link"
              href="/WebTest/pemerintah-desa/pemerintah-desa.html"
              >Pemerintah Desa</a
            >

            <a
              class="nav-link"
              href="/WebTest/data-kependudukan/data-kependudukan.html"
              >Data Kependudukan</a
            >

            <a class="nav-link" href="/WebTest/ppid/profileppid.html">PPID</a>

            <a class="nav-link" href="/WebTest/produk-hukum/perdes.html"
              >Produk Hukum</a
            >

            <a
              class="nav-link"
              href="/WebTest/desa-anti-korupsi/indikator1.html"
              >Desa Anti korupsi</a
            >
            
            <a
              class="navbar-brand ms-2"
              ><?php echo $firstName; ?></a
            >

       
          </div>
        </div>
      </div>
    </nav>
    <div class="background-jumbotron">
      <div class="jumbotron">
        <div class="container">
          <div class="text-jumbotron">
            <h1>Selamat Datang di Desa <br />Tambaksari Kidul</h1>
            <p>Kembaran, Kabupaten Banyumas</p>

            <div class="row">
              <div class="col-lg-2 col-md-4 col-sm-6 mb-4 text-center">
                <div class="col1">3,7K+<br /></div>
                Jumlah Penduduk
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6 mb-4 text-center">
                <div class="col1">7<br /></div>
                Jumlah Wilayah
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6 mb-4 text-center">
                <div class="col1">1,5K+<br /></div>
                Jumlah Keluarga
              </div>
            </div>
          </div>

          <div class="container-layanan">
            <a href="/WebTest/login/login.html">
              <div class="layanan">
                <img src="img/letter 1.png" alt="image" draggable="false" />
                <h2>Masuk Layanan Mandiri</h2>
              </div>
            </a>
            <a href="/WebTest/login/login.html">
              <div class="register-layanan">
                <img src="img/letter 1.png" alt="image" draggable="false" />
                <h2>Registrasi Layanan</h2>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron End -->

    <!-- Services Section Start -->
    <div class="background-color">
      <h2
        style="
          text-align: center;
          margin-bottom: 20px;
          margin-top: -30px;
          color: white;
          font-family: Calistoga;
        "
      >
        PENGUMUMAN DESA
      </h2>
      <div
        id="carouselExampleCaptions"
        class="carousel slide mt-3"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="/WebTest/img/Nature Landscape Background - Free photo on Pixabay 1.png"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="/WebTest/img/Nature Landscape Background - Free photo on Pixabay 1.png"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>
                Some representative placeholder content for the second slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="/WebTest/img/Nature Landscape Background - Free photo on Pixabay 1.png"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>
                Some representative placeholder content for the third slide.
              </p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div class="container">
      <div class="sosial">
        <div class="box">
          <div class="flex-image">
            <img src="img/image 2.png" alt="gambar1" />
            <p style="font-family: Inter; font-size: 16px;">
              Nuryoko Niti Alam <br />
              Kepala Desa Tambaksari Kidul
            </p>
          </div>
          <div class="sambutan">
            <div class="judul mb-2">sambutan</div>
            <p class="deks-sambutan">
              Tambaksari Kidul merupakan sebuah desa di kecamatan Kembaran,
              Banyumas, Jawa Tengah, Indonesia. Desa ini memiliki luas 149km2
              dan memiliki kepadatan sebesar 37 jiwa/km2. Dengan masyarakatnya
              yang sebagian besar sebagai petani dan pedagang.
            </p>
          </div>
        </div>

        <div class="box d-flex flex-column">
          <div class="berita-utama">
            <h1 class="judul">BERITA UTAMA</h1>
            <img
              src="/WebTest/img/bagi sembako 1.png"
              class="mb-3 mt-2"
              alt="image"
            />
            <p class="deks-sambutan">
              Tambaksari Kidul – Senin, 26/07/2021 Mulai Pukul 08.00 – 14.30 WIB
              Pendistribusian Sembako untuk KPM Penerima BST Dibantu oleh
              Petugas BULOG , Petugas PSM , dan Perangkat Kelurahan Manisrejo
              Kecamatan Taman Kota Madiun. Bantuan Sembako berjumlah 5.56 Ton
              Beras didistribusikan kepada warga 10Kg/Karung sejumlah 556
              Karung.
            </p>
            <button
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#berita"
              aria-expanded="false"
              aria-controls="collapseExample"
              style="font-family: Inter; font-size: 18px;"
            >
              Lihat Selengkapnya
            </button>
          </div>

          <div class="d-flex">
            <div class="collapse mt-3" id="berita">
              <div class="card card-body">
                <div class="berita-terbaru">
                  <h1
                    class="mb-3"
                    style="font-family: Calistoga; font-size: 32px;"
                  >
                    Berita Terbaru
                  </h1>
                  <div class="row">
                    <div class="col-3">
                      <img src="/WebTest/img/aspla 1.png" alt="" />
                      <h6 class="deks-berita">
                        Pengaspalan Jalan Desa Yang Rusak
                      </h6>
                      <p class="deks-berita">
                        Rabu, 23 Oktober 2023, 10.00 WIB
                      </p>
                    </div>
                    <div class="col-3">
                      <img src="/WebTest/img/BLT 1.png" alt="" />
                      <h6 class="deks-berita">
                        Penerimaan BLT Untuk Warga Tambaksari Kidul
                      </h6>
                      <p class="deks-berita">
                        Senin, 5 November 2023, 10.00 WIB
                      </p>
                    </div>
                    <div class="col-3">
                      <img src="/WebTest/img/kerjabakti 1.png" alt="" />
                      <h6 class="deks-berita">
                        Warga Desa Melakukan Kerja Bakti
                      </h6>
                      <p class="deks-berita">
                        Minggu, 4 November 2023, 08.00 WIB
                      </p>
                    </div>
                    <div class="col-3">
                      <img src="/WebTest/img/lele 1.png" alt="" />
                      <h6 class="deks-berita">
                        Pembuatan Kolam Lele Untuk UMKM Warga Desa
                      </h6>
                      <p class="deks-berita">
                        Sabtu, 3 November 2023, 09.00 WIB
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="box d-flex flex-column">
          <div class="wilayah">
            <h3 class="judul" style="margin-bottom: 1rem;">
              Survey Kepuasan Masyarakat (SKM)
            </h3>
            <p class="deks-skm">
              Silahkan klik tombol dibawah ini untuk mengisi survei
            </p>
            <button style="font-family: Inter; font-size: 18px;">
              Mengisi SKM
            </button>
          </div>
        </div>
        <div class="informasi">
          <div
            class="maps"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapseExample"
            aria-expanded="false"
            aria-controls="collapseExample"
          >
            <button style="font-family: Inter; font-size: 18px;">
              Lihat Selengkapnya
            </button>
          </div>
          <div class="collapse" id="collapseExample">
            <div class="box d-flex flex-column">
              <h3 class="judul">Agenda Desa Sudagaran</h3>
              <div class="agenda d-flex flex-row">
                <img src="/WebTest/img/agenda (1) 1.png" alt="" />
                <div style="font-size: 20px;">
                  <p
                    class="deks-skm"
                    style="font-weight: 500; margin-bottom: -1px;"
                  >
                    Agenda Desa Sudagaran
                  </p>
                  <p class="tanggal">Senin,23 Oktober 2023</p>
                </div>
              </div>
            </div>
            <div class="box d-flex flex-column">
              <h3 class="judul">Kategori</h3>
              <div class="kategori row">
                <a href="/WebTest/arsip/ArsipBerita.html">>Berita</a>
                <a href="">>Sambutan dan Himbauan</a>
                <a href="/WebTest/arsip/produk-desa.html"
                  >>Potensi dan Produk Desa</a
                >
                <a href="/WebTest/arsip/artikel-tidak-tersedia.html"
                  >>Kegiatan Desa</a
                >
                <a href="/WebTest/arsip/artikel-tidak-tersedia.html"
                  >>Kegiatan Pemerintah Desa</a
                >
                <a href="/WebTest/arsip/artikel-tidak-tersedia.html"
                  >>Pembangunan Desa</a
                >
                <a href="/WebTest/arsip/artikel-tidak-tersedia.html"
                  >>Panduan Layanan</a
                >
                <a href="/WebTest/arsip/artikel-tidak-tersedia.html"
                  >>Transparansi Dana Desa</a
                >
                <a href="/WebTest/arsip/artikel-tidak-tersedia.html"
                  >>Pengumunan</a
                >
                <a href="/WebTest/arsip/artikel-tidak-tersedia.html"
                  >>Konten Video</a
                >
                <a href="/WebTest/ppid/profileppid.html">>PPID</a>
              </div>
            </div>
            <div class="box d-flex flex-column">
              <h3 class="judul">Polling</h3>
              <div class="polling">
                <p class="deks-skm">
                  Apakah dengan adanya layanan mandiri bisa mempermudah anda
                  dalam membuat surat keterangan dari desa?
                </p>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="flexRadioDefault1"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    Iya
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault"
                    id="flexRadioDefault2"
                    checked
                  />
                  <label class="form-check-label" for="flexRadioDefault2">
                    Tidak
                  </label>
                </div>
                <div class="form-floating">
                  <textarea
                    class="form-control"
                    placeholder="Leave a comment here"
                    id="floatingTextarea2"
                    style="height: 100px;"
                  ></textarea>
                  <label for="floatingTextarea2">Tulis Komentar Disini</label>
                </div>
                <button class="btn">Vote</button>
                <button class="btn">Lihat Hasil</button>
              </div>
            </div>
            <div class="box d-flex flex-column">
              <h3 class="judul">Artikel Populer</h3>
              <div class="artikel">
                <h5>SAMBUTAN</h5>
                <p>Dibaca : 250 kali | Sambutan dan Himbauan</p>
                <h5>INFORMASI YANG DIUMUMKAN SECARA BERKALA</h5>
                <p>Dibaca : 240 kali | Sambutan dan Himbauan</p>
                <h5>SAMBUTAN</h5>
                <p>Dibaca : 250 kali | Sambutan dan Himbauan</p>
                <h5>SAMBUTAN</h5>
                <p>Dibaca : 250 kali | Sambutan dan Himbauan</p>
                <h5>SAMBUTAN</h5>
                <p>Dibaca : 250 kali | Sambutan dan Himbauan</p>
              </div>
            </div>
            <div class="box d-flex flex-column">
              <div class="d-flex flex-column">
                <h3 class="judul">Statistik Pengunjung</h3>
                <div class="pengunjung">
                  <div class="row">
                    <div class="deks-skm col-5">IP Address</div>
                    <div class="deks-skm col-5">103.105.190.242</div>
                    <div class="deks-skm col-5">Browser</div>
                    <div class="deks-skm col-5">Google Chrome v.118.0.0.0</div>
                    <div class="deks-skm col-5">Sistem Operasi</div>
                    <div class="deks-skm col-5">Windows 10</div>
                    <div class="deks-skm col-5">Pengunjung Hari ini</div>
                    <div class="deks-skm col-5">11</div>
                    <div class="deks-skm col-5">Pengunjung Kemarin</div>
                    <div class="deks-skm col-5">15</div>
                    <div class="deks-skm col-5">Total Pengunjung</div>
                    <div class="deks-skm col-5">4.851</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="perangkat-desa">
      <h2
        style="
          text-align: center;
          margin-bottom: 20px;
          margin-top: -25px;
          color: rgb(0, 0, 0);
          font-family: Calistoga;
          font-size: 32px;
        "
      >
        PERANGKAT DESA
      </h2>
      <div class="container">
        <div class="slide-container">
          <swiper-container
            class="mySwiper"
            pagination="true"
            pagination-clickable="true"
            space-between="30"
            slides-per-view="3"
          >
            <swiper-slide
              ><img src="/WebTest/img/perangkat 1 4.png" alt=""
            /></swiper-slide>
            <swiper-slide
              ><img src="/WebTest/img/perangkat 1 4.png" alt=""
            /></swiper-slide>
            <swiper-slide
              ><img src="/WebTest/img/perangkat 1 4.png" alt=""
            /></swiper-slide>
            <swiper-slide
              ><img src="/WebTest/img/perangkat 1 4.png" alt=""
            /></swiper-slide>
            <swiper-slide
              ><img src="/WebTest/img/perangkat 1 4.png" alt=""
            /></swiper-slide>
            <swiper-slide
              ><img src="/WebTest/img/perangkat 1 4.png" alt=""
            /></swiper-slide>
            <swiper-slide
              ><img src="/WebTest/img/perangkat 1 4.png" alt=""
            /></swiper-slide>
            <swiper-slide
              ><img src="/WebTest/img/perangkat 1 4.png" alt=""
            /></swiper-slide>
            <swiper-slide
              ><img src="/WebTest/img/perangkat 1 4.png" alt=""
            /></swiper-slide>
          </swiper-container>
        </div>
      </div>
    </div>
    <div class="pembangunan">
      <h2 style="text-align: center; font-family: Calistoga; font-size: 32px;">
        PEMBANGUNAN DESA
      </h2>
      <p
        style="
          text-align: center;
          margin-top: -5px;
          font-family: Inter;
          font-size: 18px;
        "
      >
        Pembangunan yang ada di desa TAMBAKSARI KIDUL semua untuk kepentingan
        masyarakat
      </p>
      <table>
        <thead>
          <tr class="jdl-tabel">
            <th>KEGIATAN</th>
            <th>LOKASI KEGIATAN</th>
            <th>PELAKSANAAN KEGIATAN</th>
            <th>ANGGARAN KEGIATAN</th>
          </tr>
        </thead>
        <tbody>
          <tr class="deks-tabel">
            <td>Pembangunan Saluran Air RT.02 RW.01</td>
            <td>RT 02 RW 01</td>
            <td>Ahmad Khoeri</td>
            <td>21.997.000,00</td>
          </tr>
          <tr class="deks-tabel1">
            <td>Pembangunan Bronjong RT.02 RW.01</td>
            <td>RT 02 RW 01</td>
            <td>Ahmad Khoeri</td>
            <td>21.997.000,00</td>
          </tr>
          <tr class="deks-tabel">
            <td>Pembangunan Talud Saluran Air RT.02 RW.01</td>
            <td>RT 02 RW 01</td>
            <td>Ahmad Khoeri</td>
            <td>21.997.000,00</td>
          </tr>
          <tr class="deks-tabel1">
            <td>Perbaikan Saluran Air RT.02 RW.01</td>
            <td>RT 02 RW 01</td>
            <td>Ahmad Khoeri</td>
            <td>21.997.000,00</td>
          </tr>
          <tr class="deks-tabel">
            <td>Pembangunan Talud RT. 03 RW. 01</td>
            <td>RT 03 RW 01</td>
            <td>Ahmad Khoeri</td>
            <td>21.997.000,00</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="container">
      <div class="laporan-container">
        <h2
          style="text-align: center; font-family: Calistoga; font-size: 32px;"
        >
          LAPORAN DAN ASPIRASI WARGA
        </h2>
        <div class="laporan-aspirasi">
          <div class="grid-container">
            <div class="content-apb-2022">
              <div class="header-content">
                <h2
                  style="color: white; font-family: Calistoga; font-size: 28;"
                >
                  APBDes 2022
                </h2>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    margin-top: 1rem;
                    margin-bottom: -0.5px;

                    font-family: Inter;
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 800;
                  "
                >
                  Alokasi Dana Desa
                </p>
                <div class="jumlah">Rp 428.403.426,00</div>
                <div class="presentase">28%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="28"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Dana Desa
                </p>
                <div class="jumlah">Rp 782.680.000,00</div>
                <div class="presentase">52%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="52"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Pendapatan Asli Desa
                </p>
                <div class="jumlah">Rp 179.605.663,00</div>
                <div class="presentase">12%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="12"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Dana Bagi Hasil
                </p>
                <div class="jumlah">Rp 120.077.754,00</div>
                <div class="presentase">8%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="8"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Bantuan Keuangan Provinsi
                </p>
                <div class="jumlah">Rp 5.000.000,00</div>
                <div class="presentase">0%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="0"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Pendapatan Lainnya
                </p>
                <div class="jumlah">Rp 500.000,00</div>
                <div class="presentase">0%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="0"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Total APBDes 2022
                </p>
                <div class="jumlah">Rp 1.516.266.843,00</div>
                <div class="presentase">100%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="100"></div>
                </div>
              </div>
            </div>
            <div class="content-apb-2023">
              <div class="header-content">
                <h2 style="font-family: Calistoga; font-size: 28;">
                  APBDes 2023
                </h2>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Alokasi Dana Desa
                </p>
                <div class="jumlah">Rp 428.893.252,00</div>
                <div class="presentase">28%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="28"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Dana Desa
                </p>
                <div class="jumlah">Rp 766.203.000,00</div>
                <div class="presentase">50%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="50"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Pendapatan Asli Desa
                </p>
                <div class="jumlah">Rp 182.639.714,00</div>
                <div class="presentase">12%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="12"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Dana Bagi Hasil
                </p>
                <div class="jumlah">Rp 137.155.619,00</div>
                <div class="presentase">9%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="9"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Bantuan Keuangan Provinsi
                </p>
                <div class="jumlah">Rp 5.000.000,00</div>
                <div class="presentase">0%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="0"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Pendapatan Lainnya
                </p>
                <div class="jumlah">Rp 5.000.000,00</div>
                <div class="presentase">0%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="0"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Total APBDes 2023
                </p>
                <div class="jumlah">Rp 1.524.891.585,00</div>
                <div class="presentase">100%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="100"></div>
                </div>
              </div>
            </div>
            <div class="content-realisasi">
              <div class="header-content">
                <h2 style="font-family: Calistoga; font-size: 28;">
                  Realisasi APBDes 2022
                </h2>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Alokasi Dana Desa
                </p>
                <div class="jumlah">Rp 428.285.828,00</div>
                <div class="presentase">28%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="28"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Dana Desa
                </p>
                <div class="jumlah">Rp 749.546.383,00</div>
                <div class="presentase">49%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="49"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Pendapatan Asli Desa
                </p>
                <div class="jumlah">Rp 196.250.720,00</div>
                <div class="presentase">13%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="13"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Dana Bagi Hasil
                </p>
                <div class="jumlah">Rp 107.611.820,00</div>
                <div class="presentase">7%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="7"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Bantuan Keuangan Provinsi
                </p>
                <div class="jumlah">Rp 5.000.000,00</div>
                <div class="presentase">0%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="0"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Pendapatan Lainnya
                </p>
                <div class="jumlah">Rp 6.600.000,00</div>
                <div class="presentase">0%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="0"></div>
                </div>
              </div>
              <div class="alokasi-dana">
                <p
                  style="
                    font-size: 12px;
                    margin-top: 1rem;
                    margin-bottom: -0.5px;
                    font-weight: 800;
                    font-family: Inter;
                  "
                >
                  Total Realisasi APBDes 2022
                </p>
                <div class="jumlah">Rp 22.972.092,00</div>
                <div class="presentase">100%</div>
                <div class="processing">
                  <div class="processing-bar" data-bar="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="background-footer">
      <div class="container">
        <div class="footer">
          <div class="tambaksari">
            <h2 style="font-size: 18px; font-family: Calistoga;">
              TAMBAKSARI KIDUL
            </h2>
            <p class="deks-footer">
              Tambaksari Kidul merupakan sebuah desa di kecamatan Kembaran,
              Banyumas, Jawa Tengah, Indonesia. Desa ini memiliki luas 149km2
              dan memiliki kepadatan sebesar 37 jiwa/km2. Dengan masyarakatnya
              yang sebagian besar sebagai petani dan pedagang.
            </p>
          </div>
          <div class="tengah">
            <div class="alamat">
              <h2 style="font-size: 18px; font-family: Calistoga;">Alamat</h2>
              <p class="deks-footer">
                Dusun I Jalan Sunan Bonang No.36, RT.05/RW.03, Dusun I,
                Tambaksari Kidul, Kec. Kembaran, Kabupaten Banyumas, Jawa Tengah
                53146
              </p>
            </div>
            <div class="profil-desa">
              <h2 style="font-size: 18px; font-family: Calistoga;">
                Profil Desa
              </h2>
              <a href="#">Visi Misi</a>
              <a href="#">Wilayah</a>
              <a href="#">Demografi</a>
              <a href="#">Tugas dan Fungsi</a>
              <a href="#">Struktur Organisasi</a>
            </div>
          </div>
          <div class="side">
            <div class="email">
              <h2 style="font-size: 18px; font-family: Calistoga;">Email</h2>
              <p class="profil-desa">tambaksarikidul@gmail.com</p>
            </div>
            <div class="social-media">
              <h2 style="font-size: 18px; font-family: Calistoga;">
                Social Media
              </h2>
              <img src="img/fb.png" alt="image" />
              <img src="img/xtwiter 5.png" alt="image" />
              <img src="img/ig.png" alt="image" />
              <img src="img/yt 5.png" alt="image" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="deks-footer">
      © 2023 Hak Cipta Dilindungi. Develop oleh STMIK Team
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        speed: 1000,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
          },
          480: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 3,
          },
          1200: {
            slidesPerView: 4,
          },
        },
      });
    </script>
    <script src="script.js"></script>
  </body>
</html>
