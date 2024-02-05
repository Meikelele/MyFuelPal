<a name="readme-top">MyFuelPal</a>

<!-- PROJECT LOGO -->
<br />
<div align="center">
<h3 align="center">MyFuelPal</h3>

  <p align="center">
    "MyFuelPal" is an application to track your hisotry of refulling, allows you to assign the fuelnote to vehicle.
    <br />
    <a href="https://github.com/Meikelele/MyFuelPal.git"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    ·
    <a href="https://github.com/Meikelele/MyFuelPal.git/issues">Report Bug</a>
    ·
    <a href="https://github.com/Meikelele/MyFuelPal.git/issues">Request Feature</a>
  </p>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
        <li><a href="#database-description">Database description</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#contact">Contact</a></li>
    
  </ol>
</details>

<!-- ABOUT THE PROJECT -->

## About The Project

<br>
https://postimg.cc/gallery/bbbGHK8 [https://postimg.cc/gallery/bbbGHK8]


<p align="right">(<a href="#readme-top">back to top</a>)</p>

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

- [![HTML Version](https://img.shields.io/badge/HTML-5-orange)](https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Built With

- [![HTML Version](https://img.shields.io/badge/HTML-5-orange)](https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5)
- [![CSS Version](https://img.shields.io/badge/CSS-3-blue)](https://developer.mozilla.org/en-US/docs/Web/CSS)
- [![PHP Version](https://img.shields.io/badge/PHP-v8.2.11-blue)](https://www.php.net/)
- [![JavaScript Version](https://img.shields.io/badge/JavaScript-ES6-yellow)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
- [![Docker Version](https://img.shields.io/badge/Docker-latest-blue)](https://www.docker.com/)
- [![Nginx Version](https://img.shields.io/badge/Nginx-1.17.8--alpine-brightgreen)](https://nginx.org/)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- GETTING STARTED -->

## Getting Started

This is an example of how you may give instructions on setting up your project locally.
To get a local copy up and running follow these simple example steps.

### Prerequisites

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/Meikelele/MyFuelPal.git
   ```
2. Build the Docker image
   ```sh
   docker build -t myfuelpal-app .
   ```
3. Run Docker Compose
   ```sh
   docker-compose up -d
   ```
4. Import Database from sql file

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- USAGE EXAMPLES -->

## Usage

Use this space to show useful examples of how a project can be used. Additional screenshots, code examples and demos work well in this space. You may also link to more resources.

_For more examples, please refer to the [Documentation](https://example.com)_

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- ROADMAP -->

## Roadmap

- [ ] **Add your car**

  - Add your vehicle to your account

- [ ] **Add your fuelote**

  - Add your fuelnote to your account

- [ ] **Have a overview**

  - Look at yours vehicles and fuelnotes at dashboard

    - [ ] **Nested Feature**
      - Create a community where you can talk about best restaurant

See the [open issues](https://github.com/Meikelele/MyFuelPal.git\issues) for a full list of proposed features (and known issues).

Feel free to tailor the descriptions based on the actual features and their specifics in your project. Providing clear and detailed information can help contributors and users better understand the roadmap and goals of your project.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTRIBUTING -->

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/Features`)
3. Commit your Changes (`git commit -m 'Add some Features'`)
4. Push to the Branch (`git push origin features/Features`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTACT -->

## Contact

Michał Bąk - [@MichalLenovo](https://twitter.com/@MichalLenovo) - michal.bak2002@interia.pl

Project Link: [https://github.com/Meikelele/MyFuelPal.git](https://github.com/Meikelele/MyFuelPal.git)

<p align="right">(<a href="#readme-top">back to top</a>)</p>
