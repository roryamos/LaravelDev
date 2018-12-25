# LaravelDev
docker + nginx + php + mariadb + laravel framework  
LaravelDev 這個項目是一個快速搭建 Laravel 開發環境的 Docker Compose 套件  
這個套件的詳細教程可以參考 [架構一個基於 Docker Compose 的 PHP Laravel 開發環境](https://twrory.com/2018/12/19/docker-compose-with-php-laravel-dev/)

#### 安裝 Docker
基本的安裝可以參考 [Docker 安裝筆記 - 以LNMP為例的應用](https://twrory.com/2018/12/12/docker-install/)  

#### 安裝 Docker Compose
在安裝好Docker 之後、我們可以開始安裝 Docker Compose, 首先我們需要先安裝 python-pip
```
sudo yum install -y epel-release
sudo yum install -y python-pip
```
接下來就可以安裝Docker Compose了
```
pip install docker-compose
```
需要的話將 Python 相關的套件更新一下讓 Docker Compose 能夠順利運行
```
yum upgrade python*
```
#### 接下來只需要幾個步驟
Step1. git clone https://github.com/roryamos/LaravelDev.git  
Step2. cd LaravelDev  
Step3. docker pull composer  
Step4. ./composer.sh create-project laravel/laravel html/laravel  
Step5. vi html/laravel/routes/web.php  
```
Route::get('/', function () {
    //return view('welcome');
    return "Hello World";
});
```
Step6. ./restart.sh  

