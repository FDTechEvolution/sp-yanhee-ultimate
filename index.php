<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>วิตามินรีเซ็ตรูปร่าง จาก ยันฮี : Yanhee Utimate</title>

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    
    <!--https://getbootstrap.com/docs/5.0 -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dist/css/blog.css" rel="stylesheet">
    <link href="dist/fonts/prompt.css" rel="stylesheet">

    <!--https://icons.getbootstrap.com/-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    
  </head>

<body>    
<div id="app" class="container">
  <header class="blog-header py-3 px-2 position-sticky">
    <div class="row">
      <div class="col-1">
        <img src="dist/img/yh_ultm_product.png" class="img-fluid">
      </div>
      <div class="col-6">
        <p class="mb-0">YANHEE</p>
        <h2 class="mb-0">ULTIMATE</h2>
      </div>
      <div class="col-5 text-end">
        <a class="btn btn-lg btn-primary" href="#"><i class="bi bi-cart4"></i> สั่งซื้อ</a>
      </div>
    </div>
  </header>

  <main class="container my-3">
    <div class="row">
      <div class="col-12">
        <img src="dist/img/cover/Ultimate_cover_1.jpg" class="img-fluid rounded" alt="">
      </div>
    </div>

    <button-full></button-full>

    <hr />

    <div class="row my-5"> <!-- โปรโมชั่น -->
      <div class="col-12 text-center"><h2>โปรโมชั่นพิเศษ</h2></div>
      <div class="col-lg-6 col-md-12 my-2">
        <img src="dist/img/promotion/Ultimate_210219_28.jpg" class="img-fluid rounded">
      </div>
      <div class="col-lg-6 col-md-12 my-2">
        <img src="dist/img/promotion/Ultimate_210219_29.jpg" class="img-fluid rounded">
      </div>
      <div class="d-grid gap-2 col-lg-6 col-md-12 mx-auto mt-5"><button-contact></button-contact></div>
    </div>

    <hr />

    <div class="row my-5"> <!-- Before & After -->
      <div class="col-12 mb-2 text-center">
        <h2 class="mb-1">Before & After</h2>
        <a href="#" class="text-primary px-2">รีวิว</a>จากผู้ใช้งานจริง
      </div>
      <div v-for="BnA in beforeAfter" class="col-lg-6 col-md-12 cls_b-n-a">
        <img :src="BnA.src" class="img-fluid rounded my-2" :title="BnA.title" :alt="BnA.alt">
      </div>
    </div>

    <hr />

    <div class="row my-5">
      <div class="col-12">วิธีทาน & ใบรับรอง</div>
    </div>

    <hr />

    <div class="row my-5">
      <div class="col-12">โรงงาน</div>
    </div>

    <hr />

    <div class="row my-5">
      <div class="col-12">รีวิว</div>
    </div>

  </main>

  <footer class="blog-footer">
    <p>Sales Page by <a href="https://www.fdtech.co.th/" target="_blank">FDTECH</a></p>
  </footer>  
  </body>
</html>

<style>
  .col-lg-6.col-md-12.cls_b-n-a:last-child:not(:nth-child(even)) {
    width: 100% !important;
  }
</style>

<script>
Vue.component('button-order', {
  data: function () {
    return {}
  },
  template: `<a href="#" class="btn btn-primary btn-lg rounded text-center"><i class="bi bi-cart4"></i> สั่งซื้อ</a>`
})

Vue.component('button-contact', {
  data: function () {
    return {}
  },
  template: `<a href="#" class="btn btn-success btn-lg rounded text-center">Line @ (ชั่วคราว)</a>`
})

Vue.component('button-full', {
  data: function () {
    return {}
  },
  template: `<div class="row my-5">
              <div class="col-lg-5 col-md-12 text-center d-grid gap-2">
                <button-order></button-order>
              </div>
              <div class="col-lg-2 col-md-12 text-center my-md-3 my-sm-3">-หรือ-</div>
              <div class="col-lg-5 col-md-12 text-center d-grid gap-2">
                <button-contact></button-contact>
              </div>
            </div>`
})

new Vue({
  el: '#app',
  data() {
    return {
      beforeAfter: [
        {src: 'dist/img/before_after/Ultimate_210219_17.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'},
        {src: 'dist/img/before_after/Ultimate_210219_18.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'},
        {src: 'dist/img/before_after/Ultimate_210219_19.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'},
        {src: 'dist/img/before_after/Ultimate_210219_20.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'},
        {src: 'dist/img/before_after/Ultimate_210219_21.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'},
        {src: 'dist/img/before_after/Ultimate_210219_22.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'},
        {src: 'dist/img/before_after/Ultimate_210219_23.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'},
        {src: 'dist/img/before_after/Ultimate_210219_24.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'},
        {src: 'dist/img/before_after/Ultimate_210219_25.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'}
      ]
    }
  }
})
</script>