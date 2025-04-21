
<br />
<div align="center">
<h1 align="center">MyFuelPal - v1</h1>

  <p align="center">
    "MyFuelPal" is an application to track your hisotry of refulling, allows you to assign the fuelnote to vehicle.
    
⚠️ This is the **first version** of the MyFuelPal project and it may not be perfect. ⚠️  
[Check out the version 2 of MyFuelPal](<LINK_TO_NEW_VERSION>)

  </p>
</div>

## Tech Stack
![HTML5](https://img.shields.io/badge/-HTML5-%23E44D27?style=flat-square&logo=html5&logoColor=ffffff)
![CSS3](https://img.shields.io/badge/-CSS3-%231572B6?style=flat-square&logo=css3)
![JavaScript](https://img.shields.io/badge/-JavaScript-%23F7DF1C?style=flat-square&logo=javascript&logoColor=000000)

![PHP](https://img.shields.io/badge/-PHP-777BB4?style=flat-square&logo=php&logoColor=ffffff)
![Docker](https://img.shields.io/badge/-Docker-2496ED?style=flat-square&logo=docker&logoColor=ffffff)

## Installation

Clone the repository 
```
git clone <LINK_TO_REPOSITORY> 
```
Go to the proper directory
```
cd MyFuelPal
```
Run docker-compose 
```
docker-compose up --build -d
```

## Functionalities
- [ ] **Add your car**  
  Add your vehicle to your account
- [ ] **Add your fuel note**  
  Add and manage fuel notes for your car
- [ ] **Overview dashboard**  
  View all your vehicles and fuel notes in one place
- [ ] **Customize your profile**  
  Change your profile avatar and personal information
- [ ] **Account settings**  
  - Change email  
  - Change username  
  - Change password  
  - Clear all cookies

## Demo
![Zrzut ekranu 2025-04-21 o 21 42 28](https://github.com/user-attachments/assets/b231b0f2-dc5c-45f7-a0ac-aa8599419635)

### Sign up
![Zrzut ekranu 2025-04-21 o 21 43 14](https://github.com/user-attachments/assets/efcce809-aae9-4a6a-88ee-c669490a7629)

### Login
![Zrzut ekranu 2025-04-21 o 21 43 26](https://github.com/user-attachments/assets/e8574138-3fa2-42d9-9e6c-68ca5386efca)

### Home page
![Zrzut ekranu 2025-04-21 o 21 43 52](https://github.com/user-attachments/assets/cfc79085-fd8c-488b-b24e-a56927678124)

### Adding a car
![Zrzut ekranu 2025-04-21 o 21 45 27](https://github.com/user-attachments/assets/adce4638-1f4b-4a9e-ba0c-f286e2d3457e)

### Your profile
![Zrzut ekranu 2025-04-21 o 21 45 48](https://github.com/user-attachments/assets/86b4aa09-ae7e-41f9-ab91-5570eb6278f3)

### Settings
![Zrzut ekranu 2025-04-21 o 21 45 56](https://github.com/user-attachments/assets/60ec7fe2-5a8c-462b-85c4-d8ce7d7f7370)

## Database description

### One-to-Many Relationship between Vehicles and Fuelnotes:

- **vehicles** table has a primary key `id`.
- **fuelnotes** table has a foreign key `vehicle_id` referencing the `id` in the **vehicles** table.
- This implies that one vehicle can have multiple fuelnotes.

### One-to-Many Relationship between Users and Vehicles:

- **Users** table has a primary key `id`.
- **Vehicles** table has a foreign key `is_user` referencing the `id` in the **vehicles** table.
- This implies that one user can be associated with multiple vehicles.

### One-to-One Relationship between Users and Role:

- **users** table has a primary key `id`.
- **roles** table has a foreign key `user_id` referencing the `id` in the **users** table.
- This implies that each user has a unique role, forming a one-to-one relationship.

### ERD DIAGRAM
![ERD](https://github.com/user-attachments/assets/f4dd1885-e006-4333-9a2c-d41a1cf7d518)
