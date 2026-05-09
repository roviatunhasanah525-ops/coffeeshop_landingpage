<?php $menu = $menu ?? []; ?>

<!-- HERO -->
<section class="hero">

    <div class="overlay"></div>

    <div class="hero-content">

        <h1>Sweet Crumbs Bakery</h1>

        <p>Freshly baked happiness everyday</p>

        <div class="hero-btn">
            <a href="#menu" class="btn-secondary">
                View Menu
            </a>
        </div>

    </div>

</section>

<!-- ABOUT -->
<section class="about">

    <h2>Our Bakery Story</h2>

    <p>
        Kami menghadirkan roti dan dessert premium
        dengan bahan berkualitas dan rasa terbaik.
    </p>

</section>

<!-- MENU -->
<section class="menu" id="menu">

    <h2>Our Best Menu</h2>

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

<!-- BOOKING -->
<section class="booking" id="booking">

    <div class="booking-container">

        <div class="booking-text">

            <h2>Order Your Favorite Dessert</h2>

            <p>
                Nikmati berbagai pilihan roti dan dessert
                fresh dari bakery kami.
            </p>

        </div>

        <form class="booking-form">

            <input type="text" placeholder="Nama Lengkap" required>

            <input type="email" placeholder="Email" required>

            <input type="date" required>

            <input type="time" required>

            <input type="number" placeholder="Jumlah Pesanan" required>

            <button type="submit">
                Order Now
            </button>

        </form>

    </div>

</section>