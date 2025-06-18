pipeline {
    agent any
    stages {
        stage('Clone Repository') {
            steps {
                git 'https://github.com/AldoArdiansyah17/php-sample-app.git'
            }
        }
        stage('Install Dependencies') {
            steps {
                echo 'Tidak ada dependensi untuk PHP sederhana'
            }
        }
        stage('Run Unit Test') {
            steps {
                sh 'php test.php'
            }
        }
        stage('Build Docker Image') {
            steps {
                sh 'docker build -t php-sample-app .'
            }
        }
        stage('Deploy (Run Docker Container)') {
            steps {
                sh 'docker run -d -p 8000:8000 --name php-sample php-sample-app'
            }
        }
    }
}
