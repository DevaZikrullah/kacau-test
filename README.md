<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


Buat database = laravel_sail
username = root
password = root

##LOGIN
example :POST http://localhost:80/api/auth/login
{
    "email":"test@example.com",
    "password":"password"
}

##TRANSAKSI MOBIL
example :POST http://localhost:80/api/auth/belimobil
{
    "nama":"deva",
    "id_item":"62c3e7666b40a81b8e052138", //sesuaikan id dari collection mobils
    "stok_item":"1"
}

##TRANSAKSI MOTOR
example :POST http://localhost:80/api/auth/belimotor
{
    "nama":"deva",
    "id_item":"62c3e7666b40a81b8e052138", //sesuaikan id dari collection motor
    "stok_item":"1"
}
##GET TRANSAKSI AKHIR
example :GET http://localhost:80/api/auth/latest-history

##GET SEMUA TRANSAKSI
example :GET http://localhost:80/api/auth/history

##GET LIST KENDARAAN
example :GET http://localhost:80/api/auth/kendaraan

