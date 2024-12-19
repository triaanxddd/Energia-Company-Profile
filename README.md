![image](https://github.com/user-attachments/assets/0f308da6-357b-4c60-86a0-bb3e88bfb632)## About Energia Company Profile
![1](https://github.com/user-attachments/assets/6a32bf8a-692d-40eb-b5cf-208bbbc00231)

Energia Company Profile is web application for company portfolio for Energia Transmedia company. this website is made with Laravel framework, showing content for company and also these contents are dynamicaly can be created through admin panel, such as:
- About
- Services (Layanan)
- Sertificates Company (Sertifikat)
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
- Dashboard Bootstrap admin template from BootstrapDash
  
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

## Showcase Main Pages for Visitors
**About Page**
![about 1](https://github.com/user-attachments/assets/384784e5-998a-4fdb-80c0-d29b7688b799)

**Services Page**
![service](https://github.com/user-attachments/assets/2951c768-ced8-42ea-8701-f38af6a2b5f6)

**Sertificates of Company Page**
![sertificate](https://github.com/user-attachments/assets/6759da64-696c-450c-b971-20a87394841d)

**News Page**
![news](https://github.com/user-attachments/assets/22eadcee-b9da-4b34-864f-3baa3818d574)

**Contact to Admin Page**
![contact](https://github.com/user-attachments/assets/5533b3d0-bbe2-4f1e-b280-95370710cfcb)

## Showcase Admin Pages Dashboard
**Admin Main Dashboard**
![admin-dashboard](https://github.com/user-attachments/assets/ab6e99dd-62cf-48a9-816c-00f67351065b)

**Modify About by Admin**
![image](https://github.com/user-attachments/assets/966c1d67-b6cf-47ce-8ca9-4e0596129283)

**Modify Services by Admin**
![image](https://github.com/user-attachments/assets/b60d16e1-dd3c-4ab7-ad38-de8d6f9035a6)

**Modify Sertificates by Admin**
![image](https://github.com/user-attachments/assets/614a3e94-909b-4f5a-8aa7-9e8562bd7a06)

**Modify Gallery Portfolios by Admin**
![image](https://github.com/user-attachments/assets/e7c70a41-2294-4c40-a66f-f64ca0a50c03)

**Modify News by Admin**
![image](https://github.com/user-attachments/assets/5bb3557a-594b-49ab-8b2c-7e06f6a9a241)

**Modify Contact by Admin**
![image](https://github.com/user-attachments/assets/c9153630-01a5-4c8f-94d7-30a19a3f085b)
