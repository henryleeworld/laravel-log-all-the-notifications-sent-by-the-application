# Laravel 12 紀錄應用程式寄送所有通知

引入 spatie 的 laravel-notification-log 套件來擴增紀錄應用程式寄送通知，通常，通知訊息都很簡短，訊息會用來通知你的使用者某些應用程式的資訊。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 執行 __Artisan__ 指令的 __queue:work__ 來處理被推送進隊列內的新任務。
```sh
$ php artisan queue:work
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 完成註冊後，可以經由 `/login` 來進行登入。

----

## 畫面截圖
![](https://i.imgur.com/ddzkEkP.png)
> 使用者從新設備登入時會接收電子郵件通知

![](https://i.imgur.com/fNMoVM1.png)
> 儀表板顯示使用者全部個人電子郵件通知
