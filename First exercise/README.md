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
### 1. Create a virtual environment
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
   sudo docker run  -it -p 5073:5073 vuejs-docker
   ```
check your website on http://localhost:5073

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
