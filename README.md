# MyDockerDev
DockerDev is my docker compose package.
Step1. docker-machine create --driver virtualbox dev
Step2. eval (docker-machine env dev)
Step3. ./rebuild.sh
Step4. docker pull composer/composer
Step5. ./composer.sh create-project laravel/laravel html/laravel

