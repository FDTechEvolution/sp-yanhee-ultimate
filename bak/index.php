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

    <!-- My Style -->
    <link href="dist/css/style.css" rel="stylesheet">

    <!--https://icons.getbootstrap.com/-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  </head>

<body>    
<div id="app" class="container">
  <header class="blog-header py-3 px-2 position-sticky">
    <div class="row">
      <div class="col-1 d-none d-sm-block">
        <img src="dist/img/yh_ultm_product.png" class="img-fluid">
      </div>
      <div class="col-6">
        <p class="mb-0">YANHEE</p>
        <h2 class="mb-0">ULTIMATE</h2>
      </div>
      <div class="col-5 text-end">
        <button type="button" class="btn btn-primary btn-lg" id="show-modal" @click="showModal = true"><i class="bi bi-cart4"></i> สั่งซื้อ</button>
      </div>
    </div>
  </header>

  <div class="blog-header px-0 position-fixed bottom-0 start-0 d-block d-sm-none w-100 bg-white" style="z-index: 99; margin-bottom: -1px; box-shadow: 2px 6px 10px 5px #aaa;">
    <div class="row gutter-0">
      <div class="col-4 px-0 d-grid gap-2 mx-auto">
        <a class="btn btn-success btn-lg rounded-0" href="#">Line</a>
      </div>
      <div class="col-8 px-0 d-grid gap-2 mx-auto">
        <button type="button" class="btn btn-primary btn-lg rounded-0" id="show-modal" @click="showModal = true"><i class="bi bi-cart4"></i> สั่งซื้อ</button>
      </div>
    </div>
  </div>

  <main class="container my-3">
    <div class="row">
      <div class="col-12">
        <img src="dist/img/cover/Ultimate_cover_1.jpg" class="img-fluid rounded" alt="">
      </div>
    </div>

    <button-full></button-full>

    <div class="row">
      <div class="col-12 text-center">
        <img src="dist/img/cover/Ultimate_cover_2.jpg" class="img-fluid rounded mb-2" alt="">
        <img src="dist/img/cover/Ultimate_cover_3.jpg" class="img-fluid rounded" alt="">
        <span>ตรวจสอบหมายเลข อย. <br/>เลขที่ <a href="https://porta.fda.moph.go.th/FDA_SEARCH_ALL/PRODUCT/FRM_PRODUCT_FOOD.aspx?fdpdtno=1214844150016" target="_blank">12-1-48441-5-0016</a></span>
      </div>
    </div>

    <hr />

    <div class="row my-5"> <!-- โปรโมชั่น -->
      <div class="col-12 text-center"><h2>โปรโมชั่นพิเศษ</h2></div>
      <div class="col-lg-6 col-md-12 my-2">
        <img src="dist/img/promotion/Ultimate_210219_28.jpg" class="img-fluid rounded">
      </div>
      <div class="col-lg-6 col-md-12 my-2">
        <img src="dist/img/promotion/Ultimate_210219_29.jpg" class="img-fluid rounded">
      </div>
    </div>

    <button-full></button-full>

    <hr />

    <div class="row my-5"> <!-- Before & After -->
      <div class="col-12 mb-2 text-center">
        <h2 class="mb-1">Before & After</h2>
        <span>ลูกค้าหลังทาน 'วิตามินรีเซ็ตรูปร่าง'</span>
      </div>
      <div v-for="BnA in beforeAfter" class="col-lg-6 col-md-12 cls_b-n-a">
        <img :src="BnA.src" class="img-fluid rounded my-2" :title="BnA.title" :alt="BnA.alt">
      </div>
    </div>

    <div class="row my-5"> <!-- วิธีทาน -->
      <div class="col-12 text-center">
        <img src="dist/img/products/Ultimate_210219_27.jpg" class="img-fluid mb-1">
        <img src="dist/img/products/Ultimate_210219_26.jpg" class="img-fluid my-1">
        <img src="dist/img/products/Ultimate_210219_1.jpg" class="img-fluid mt-1">
        <span>ตรวจสอบหมายเลข อย. <br/>เลขที่ <a href="https://porta.fda.moph.go.th/FDA_SEARCH_ALL/PRODUCT/FRM_PRODUCT_FOOD.aspx?fdpdtno=1214844150016" target="_blank">12-1-48441-5-0016</a></span>
      </div>
    </div>

    <button-full></button-full>

    <div class="row my-5"> <!-- Review -->
      <div class="col-12 text-center">
        <img src="dist/img/reviews/full-review_2.jpg" class="img-fluid rounded">
      </div>
    </div>

    <div class="row my-5">
      <div v-for="fact in factories" class="col-lg-6 col-md-12 cls_b-n-a">
        <img :src="fact.src" class="img-fluid rounded my-2" :title="fact.title" :alt="fact.alt">
      </div>
    </div>

    <button-full></button-full>
  </main>

  <modal v-if="showModal" @close="showModal = false"></modal>

  <footer class="blog-footer mb-5 mb-0 mb-lg-0 mb-md-0 mb-sm-5">
    <p>Sales Page by <a href="https://www.fdtech.co.th/" target="_blank">FDTECH</a></p>
  </footer>  
  </body>
</html>

<script src="dist/js/app.js"></script>