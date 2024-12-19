## About Energia Company Profile
![1](https://github.com/user-attachments/assets/6a32bf8a-692d-40eb-b5cf-208bbbc00231)

Energia Company Profile is web application for company portfolio for Energia Transmedia company. this website is made with Laravel framework, showing content for company and also these contents are dynamicaly can be created through admin panel, such as:
- About
- Services (Layanan)
- Sertificates (Sertifikat)
- Company Logos of working with (Logo perusahan kerja sama)
- Gallery Photos / Portfolio
- News

Also as an admin, you can do these activities:
- Modify text About
- Modify Services data
- Add or delete Sertificate datas and pictures
- Add or delete Company Logos
- Add or delete Gallery Pictures
- Receive mail in Contact

## Requirement
- **PHP**     : 8.0^
- **Laravel** : 9.52.16
- **Bootstrap CSS** : 5.3.0

## Reference
- Modify Template (thanks to Tiya Golf Club Template) from  : https://templatemo.com/tm-587-tiya-golf-club
  
## Installation
- Clone with github
  ```
  git clone https://github.com/triaanxddd/Energia-Company-Profile
  ```
- Open Directory
```
  cd Energia-Company-Profile
  ```
- And open terminal
```
composer install
cp .env.example .env <-- edit db config
```

to migrate database and seed the data
```
php artisan key:generate
php artisan migrate
php artisan db:seed
```

to run application
```
php artisan serve
```

## Admin panel login
- **Email:** admin@gmail.com
- **Password:** admin@123
