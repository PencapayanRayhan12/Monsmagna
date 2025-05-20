<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mons Magna</title>
  <link rel="stylesheet" href="{{ asset('tproduk.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>

  <!-- header -->
  <div class="medsos">
    <div class="container">
      <ul>
        <li><a href="https://www.instagram.com/monsmagna/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
      </ul>
    </div>
  </div>

  <header>
    <div class="container">
      <h1><a href="/">MONS MAGNA</a></h1>
      <ul>
        <li class="active"><a href="/">HOME</a></li>
        <li><a href="/about">ABOUT</a></li>
        <li><a href="/product">PRODUCT</a></li>
        <li><a href="/tambahproduct">TAMBAH PRODUCT</a></li>
        <li><a href="/blog">BLOG</a></li>
        <li><a href="/contact">CONTACT</a></li>
      </ul>
    </div>
  </header>

  <!-- banner -->
  <section class="banner">
    <h2></h2>
  </section>

  <!-- about -->
  <section class="about">
    <div class="container">
      <h3></h3>
      <p>“An exciting challenge to become a pioneer of handcraft classic leather shoes with traditional touch”</p>
    </div>
  </section>

  <!-- services -->
  <section class="services">
    <div class="container">
      <h3>SERVICES</h3>
      <div class="box">
        <div class="col-4">
          <div class="icon"><i class="fa-solid fa-credit-card"></i></div>
          <h4>MEMBERSHIP</h4>
        </div>
        <div class="col-4">
          <div class="icon"><i class="fa-solid fa-cart-shopping"></i></div>
          <h4>CUSTOM ORDER</h4>
        </div>
        <div class="col-4">
          <div class="icon"><i class="fa-solid fa-truck"></i></div>
          <h4>FREE SHIPPING</h4>
        </div>
        <div class="col-4">
          <div class="icon"><i class="fa-solid fa-up-right-and-down-left-from-center"></i></div>
          <h4>SIZE GUIDE</h4>
        </div>
      </div>
    </div>
  </section>

  <!-- form tambah produk + daftar produk -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="mb-4">Tambah Produk Baru</h2>

      <!-- Form Tambah Produk -->
      <div class="form-section mb-5 p-4 bg-white shadow rounded">
        <form>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama" placeholder="Contoh: Sepatu Kulit">
          </div>
          <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" id="kategori">
              <option selected disabled>Pilih Kategori</option>
              <option>Formal</option>
              <option>Etnik Modern</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga (Rp)</label>
            <input type="number" class="form-control" id="harga" placeholder="Contoh: 750000">
          </div>
          <div class="mb-3">
            <label for="gambar" class="form-label">Upload Gambar Produk</label>
            <input type="file" class="form-control" id="gambar">
          </div>
          <button type="submit" class="btn btn-danger">Simpan Produk</button>
        </form>
      </div>

      <!-- Tabel Produk -->
      <h3 class="mb-3">Daftar Produk</h3>
      <table class="table table-bordered table-striped shadow-sm">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th style="width: 160px;">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Kalla Baiq</td>
            <td>Formal</td>
            <td>Rp 550.000</td>
            <td>
              <button class="btn btn-warning btn-sm">Edit</button>
              <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Orlin Sesak</td>
            <td>Etnik Modern</td>
            <td>Rp 800.000</td>
            <td>
              <button class="btn btn-warning btn-sm">Edit</button>
              <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- footer -->
  <footer class="mt-5">
    <div class="container text-center py-3">
      <small>&copy; 2019 - Mons Magna, All Rights Reserved.</small>
    </div>
  </footer>

</body>
</html>
