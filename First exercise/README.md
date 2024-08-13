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
*make sure the dockerfile is in the project folder*

### 2. Build the Dockerfile
   ```bash
   sudo docker build -t vuejs-docker .
   ```

### 3. Run the Dockerfile
   ```bash
   sudo docker run -it -p 5073:5073 vuejs-docker
   ```
**check your website on http://localhost:5073**


##
### Reactjs
### 1. Create your project
   ```bash
   npx create-react-app reactjs-docker
   ```
*make sure the dockerfile is in the project folder*

### 2. Build the Dockerfile
   ```bash
   sudo docker build -t reactjs-docker .
   ```

### 3. Run the Dockerfile
   ```bash
   sudo docker run  -it -p 4000:80 —name docker-react-container reactjs-docker
   ```
**check your website on http://localhost:4000**


##
### Laravel
### 1. Create your project
   ```bash
   composer create laravel/laravel laravel-docker-app
   ```
*make sure the dockerfile is in the project folder*

### 2. Build the Dockerfile
   ```bash
   sudo docker build -t laravel-docker .
   ```

### 3. Run the Dockerfile
   ```bash
   sudo docker run  -it -p 8000:8000 —name docker-laravel-container laravel-docker
   ```

**check your website on http://localhost:8000**


##
### NestJS
### 1. Create your project
   ```bash
   npm i -g @nestjs/cli
   ```

   ```bash
   nest new nestjs–docker
   ```

*make sure the dockerfile is in the project folder*

### 2. Build the Dockerfile
   ```bash
   sudo docker build -t nestjs-docker . 
   ```

### 3. Run the Dockerfile
   ```bash
   sudo docker run  -it -p 3000:3000 —name docker-nestjs-container nestjs-docker
   ```
**check your website on http://localhost:3000**


##
### NextJS
### 1. Create your project
   ```bash
   npx create-next-app@latest
   ```

*make sure the dockerfile is in the project folder*

### 2. Build the Dockerfile
   ```bash
   sudo docker build -t nextjs-docker .
   ```

### 3. Run the Dockerfile
   ```bash
   sudo docker run  -it -p 3000:3000 —name docker-nextjs-container nextjs-docker
   ```
**check your website on http://localhost:3000**


##
### NuxtJS
### 1. Create your project
   ```bash
   npx nuxi@latest init nuxtjs-docker-app
   ```

*make sure the dockerfile is in the project folder*

### 2. Build the Dockerfile
   ```bash
   sudo docker build -t nuxtjs-docker .
   ```

### 3. Run the Dockerfile
   ```bash
   sudo docker run  -it -p 3000:3000 —name docker-nuxtjs-container nuxtjs-docker
   ```
**check your website on http://localhost:3000**


##
### React Native
### 1. Create your project
   ```bash
   npx react-native init react-native-docker
   ```

*make sure the dockerfile is in the project folder*

### 2. Build the Dockerfile
   ```bash
   sudo docker build -t reactNative-docker .
   ```

### 3. Run the Dockerfile
   ```bash
   sudo docker run  -it -p 3000:3000 —name docker-reactNative-container reactNative-docker
   ```
**check your website on http://localhost:8081**


#
### Flask
### 1. Create a directory named "Flask-Docker-App"
   ```bash
   mkdir Flask-Docker-App
   ```

### 2. Navigate to the newly created directory
   ```bash
   cd Flask-Docker-App
   ```

### 3. Create a virtual environment

**Windows**
   ```bash
   py -3 -m venv venv
   ```
**macOS/Linux**
   ```bash
   python3 -m venv venv
   ```

### 4. Activate the environment

**Windows**
   ```bash
   venv\Scripts\activate
   ```
**macOS/Linux**
   ```bash
   . venv/bin/activate
   ```

### 5. Install Flask
   ```bash
   pip install Flask
   ```

### 6. Create the required files

**Create three files:** *app.py, requirements.txt and Dockerfile*
   ```bash
   touch app.py requirements.txt Dockerfile
   ```

### 7. app.py content

You can add this into your app.py file

   ```bash
   from flask import Flask
   app = Flask(__name__)
   @app.route('/')
   def hello_geek():
   return '<h1>Hello from Flask & Docker</h2>'
   if __name__ == "__main__":
   app.run(debug=True)
   ```

### 8. requirements.txt content

**Here, All we need is the flask module for our little workshop.**

**You can check your flask version by typing :** *pip freeze*

   ```bash
   flask==3.0.3
   ```

**Now, make sure the dockerfile is in the project folder**

### 9. Build the Dockerfile
   ```bash
   sudo docker build -t flask-docker . 
   ```

### 10. Run the Dockerfile
   ```bash
   sudo docker run  -it -p 5000:5000 —name docker-flask-container flask-docker
   ```

**check your website on http://127.0.0.1:5000 / http://127.0.0.2:5000**



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
