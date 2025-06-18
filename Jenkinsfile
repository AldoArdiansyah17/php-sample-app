pipeline {
    agent any
    stages {
        stage('Clone Repository') {
    steps {
        git branch: 'main', url: 'https://github.com/AldoArdiansyah17/php-sample-app.git'
    }
}

        stage('Install Dependencies') {
            steps {
                echo 'Tidak ada dependensi untuk PHP sederhana'
            }
        }
        stage('Run Unit Test') {
    steps {
        sh 'docker run --rm -v $PWD:/app -w /app php:8.1-cli php test.php'
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
