<?php $menu = $menu ?? []; ?>

<!-- HERO -->
<section class="hero">

    <div class="overlay"></div>

    <div class="hero-content">

        <h1>Coffee Shop</h1>

        <p>Ngopi santai, suasana nyaman</p>

        <div class="hero-btn">

            <a href="#menu" class="btn-secondary">
                View Menu
            </a>

        </div>

    </div>

</section>

<!-- ABOUT -->
<section class="about">

    <h2>Our Story</h2>

    <p>
        Kami menyajikan kopi berkualitas
        dari biji pilihan terbaik.
    </p>

</section>

<!-- MENU -->
<section class="menu" id="menu">

    <h2>Menu</h2>

    <div class="grid">

        <?php foreach($menu as $m): ?>

            <div class="card">

                <div class="card-img">

                    <img src="assets/images/<?= $m['gambar']; ?>">

                </div>

                <div class="card-body">

                    <h3><?= $m['nama']; ?></h3>

                    <p><?= $m['harga']; ?></p>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</section>

<!-- RESERVASI -->
<section class="booking" id="booking">

    <div class="booking-container">

        <div class="booking-text">

            <h2>Reserve Your Table</h2>

            <p>
                Nikmati pengalaman ngopi terbaik bersama kami.
                Booking sekarang dan rasakan suasana yang nyaman.
            </p>

        </div>

        <form class="booking-form">

            <input type="text" placeholder="Nama Lengkap" required>

            <input type="email" placeholder="Email" required>

            <input type="date" required>

            <input type="time" required>

            <input type="number" placeholder="Jumlah Orang" required>

            <button type="submit">
                Book Now
            </button>

        </form>

    </div>

</section>