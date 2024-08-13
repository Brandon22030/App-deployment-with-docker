<img src="docker.jpg" alt="docker" style="width:100vh; align-items:center">

# DOCKERFILES
It's about how to create Dockerfiles for various frameworks and libraries

# Introduction 
This project explores the use of Docker for the deployment of modern web applications.

# Getting Started


## INSTALLATION

1. Clone the repository:
   ```bash
   git clone https://github.com/Brandon22030/App-deployment-with-docker.git
   ```

<br>

# Usage

### Vuejs
<img src="vuejs.png" alt="vuejs" style="width:100vh; align-items:center">

### 1. Create your project
   ```bash
   npm create vue@latest
   ```
make sure the dockerfile is in the project folder

### 2. Build the Dockerfile
   ```bash
   sudo docker build -t vuejs-docker .
   ```

### 3. Run the Dockerfile
   ```bash
   sudo docker run -it -p 5073:5073 vuejs-docker
   ```
check your website on http://localhost:5073


##
### Reactjs
### 1. Create your project
   ```bash
   npx create-react-app reactjs-docker
   ```
make sure the dockerfile is in the project folder

### 2. Build the Dockerfile
   ```bash
   sudo docker build -t reactjs-docker .
   ```

### 3. Run the Dockerfile
   ```bash
   sudo docker run  -it -p 4000:80 —name docker-react-container reactjs-docker
   ```
check your website on http://localhost:4000
<br>

##
### Laravel
### 1. Create your project
   ```bash
   composer create laravel/laravel laravel-docker-app
   ```
make sure the dockerfile is in the project folder

### 2. Build the Dockerfile
   ```bash
   sudo docker build -t laravel-docker .
   ```

### 3. Run the Dockerfile
   ```bash
   sudo docker run  -it -p 8000:8000 —name docker-laravel-container laravel-docker
   ```

check your website on http://localhost:8000


##
### NestJS
### 1. Create your project
   ```bash
   npm i -g @nestjs/cli
   ```

   ```bash
   nest new nestjs–docker
   ```

make sure the dockerfile is in the project folder

### 2. Build the Dockerfile
   ```bash
   sudo docker build -t nestjs-docker . 
   ```

### 3. Run the Dockerfile
   ```bash
   sudo docker run  -it -p 3000:3000 —name docker-nestjs-container nestjs-docker
   ```
check your website on http://localhost:3000






# Authors
1. This project was carried out by Daniel MEDEHOU project manager responsible for

   - Post and category crud api management
   - Oragnisation and cordination of the team and Merging

   - Github : [Daniel MEDEHOU](https://github.com/Brandon22030)
   - Email : daniel.medehou@epitech.eu

2. Romeo GOSSOU-BAH in charge of user crud and user profile management

   * Github : [Romeo GOSSOU-BAH](https://github.com/Romeo2520)
   * Email : romeo.gossou-bah@epitech.eu

3.  Stone AFEDJOU in charge of comment crud management and post display, kpi management

   * Github : [Stone AFEDJOU](https://github.com/stonefadel02)
   * Email : stone.afedjou@epitech.eu

4.  Farid ADOI in charge of managing likes and posts 

   * Github : [Farid ADOI](https://github.com/Fqr1d0)
   * Email : farid.adoi@epitech.eu

<br>

# License

- This project is owned by Daniel MEDEHOU, Romeo GOSSOU-BAH,Stone AFEDJOU and Farid ADOI
- The project is open source but can't be used for illegal purposes.
