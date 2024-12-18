## About Energia Company Profile
Energia Company Profile is web application for company portfolio for Energia Transmedia company. this website is made with Laravel framework, showing content for company and also these contents are dynamicaly can be created through admin panel, such as:
- About
- Services (Layanan)
- Sertificates (Sertifikat)
- Company Logos of working with (Logo perusahan kerja sama)
- Gallery Photos / Portfolio
- News

Also as an admin, you also can receive mail from visitor
- Contact

## Installation
- Clone with github
  ```
  git clone https://github.com/triaanxddd/Energia-Company-Profile
  ```
- Open Directory
```
  cd Tender-Monitoring
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
