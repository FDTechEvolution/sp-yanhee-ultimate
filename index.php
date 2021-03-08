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
    <link href="https://sp-dist.orderpang-sv.com/dist/css/bootstrap.css" rel="stylesheet">
    <link href="https://sp-dist.orderpang-sv.com/dist/css/blog.css" rel="stylesheet">
    <link href="https://sp-dist.orderpang-sv.com/dist/fonts/prompt.css" rel="stylesheet">

    <!-- My Style -->
    <link href="https://sp-dist.orderpang-sv.com/dist/css/style.css" rel="stylesheet">

    <!--https://icons.getbootstrap.com/-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- Vue.js & Axios -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  </head>

<body>    
<div id="app" class="container">
  <header class="blog-header py-3 px-2 position-sticky">
    <div class="row">
      <div class="col-12">
        <img src="dist/img/title.png" class="img-fluid">
      </div>
      
    </div>
  </header>

  <div class="blog-header px-0 position-fixed bottom-0 start-0 d-block d-sm-none w-100 bg-white" style="z-index: 99; margin-bottom: -1px; box-shadow: 2px 6px 10px 5px #aaa;">
    <div class="row gutter-0">
   
      <div class="col-12 px-0 d-grid gap-2 mx-auto">
        <a href="#box-form" class="btn btn-success btn-lg rounded-0"><i class="bi bi-cart4"></i> สั่งซื้อ ราคาพิเศษ 10 ท่านแรก</a>
      </div>
    </div>
  </div>

  <main class="container my-3">
    <div class="row">
      <div class="col-12">
        <img src="dist/img/products/yanhee-01.gif" class="img-fluid rounded" alt="">
      </div>
      <div class="col-12">
        <img src="dist/img/products/Ultimate_210219_33.jpg" class="img-fluid rounded" alt="">
      </div>
      
    </div>

    <hr/>
    <div class="row justify-content-center">
      <div class="col-10">
        <a href="https://lin.ee/n82RxUd" class="">
          <img src="https://sp-dist.orderpang-sv.com/dist/img/btn_line_contact.png" class="w-100"/>
        </a>
      </div>
      <div class="col-10 mt-2">
        <a href="#box-form" class="">
          <img src="https://sp-dist.orderpang-sv.com/dist/img/btn_order.png" class="w-100"/>
        </a>
      </div>
      
    </div>
    <hr/>

    <div class="row">
      <div class="col-12">
        <img src="dist/img/feature/01.jpg" class="img-fluid rounded" alt="">
      </div>
      <div class="col-12">
        <img src="dist/img/feature/02.jpg" class="img-fluid rounded" alt="">
      </div>
      <div class="col-12">
        <img src="dist/img/feature/03.jpg" class="img-fluid rounded" alt="">
      </div>
      <div class="col-12">
        <img src="dist/img/feature/04.jpg" class="img-fluid rounded" alt="">
      </div>
      <div class="col-12">
        <img src="dist/img/feature/05.jpg" class="img-fluid rounded" alt="">
      </div>
      <div class="col-12">
        <img src="dist/img/feature/06.jpg" class="img-fluid rounded" alt="">
      </div>
    </div>
    <hr/>
    <div class="row">
      <div class="col-12">
        <img src="dist/img/factory/C.1_V.4-1.jpg" class="img-fluid rounded" alt="">
      </div>
    </div>

    
    <hr />

    <div class="row my-5 justify-content-center"> <!-- โปรโมชั่น -->
      <div class="col-12 text-center">
        <img src="dist/img/promotion.gif" class="img-fluid rounded" alt="">
      </div>
      <div class="col-10 my-2">
        <img src="dist/img/promotion/Ultimate_210219_28.jpg" class="img-fluid rounded">
      </div>
      <div class="col-10 my-2">
        <img src="dist/img/promotion/Ultimate_210219_29.jpg" class="img-fluid rounded">
      </div>
    </div>

    <hr/>
    <div class="row justify-content-center">
      <div class="col-10">
        <a href="https://lin.ee/n82RxUd" class="">
          <img src="https://sp-dist.orderpang-sv.com/dist/img/btn_line_contact.png" class="w-100"/>
        </a>
      </div>
      <div class="col-10 mt-2">
        <a href="#box-form" class="">
          <img src="https://sp-dist.orderpang-sv.com/dist/img/btn_order.png" class="w-100"/>
        </a>
      </div>
      
    </div>
    <hr/>

    <div class="row my-5"> <!-- Before & After -->
      <div class="col-12 mb-2 text-center">
        <h2 class="mb-1">การันตีจากลูกค้า</h2>
        <span>ผลลัพท์ดี ใช้ดี จึงบอกต่อ</span>
      </div>
      <div v-for="BnA in beforeAfter" class="col-lg-6 col-sm-12 mt-3">
        <img :src="BnA.src" :title="BnA.title" :alt="BnA.alt" class="img-fluid">
      </div>
    </div>

    
    <hr/>
    <div class="row my-5" id="box-form">
      <div class="col-12 text-center">
        <h2>กรอกข้อมูลเพื่อสั่งซื้อ</h2>
      </div>
      <div class="col-12">
        
          <div class="mb-3">
            <label for="name" class="form-label"><strong>สินค้า/โปรโมชั่นที่ต้องการ</strong></label>
            <div class="form-check">
              <input v-model="formData.product" class="form-check-input" type="radio" name="product" id="pro1" value="ยันฮี 1แถม1 1040" checked="checked">
              <label class="form-check-label" for="pro1">1แถม1 <del>1,200</del> เพียง 990฿ <span class="text-danger blink_me">ค่าส่ง 50฿</span> รวม 1,040฿</label>
            </div>
            <div class="form-check">
              <input v-model="formData.product" class="form-check-input" type="radio" name="product" id="pro2" value="ยันฮี 2แถม2 1890">
              <label class="form-check-label" for="pro2">2แถม2 <del>2,400</del> เพียง 1,890฿ <span class="text-success blink_me">ส่งฟรี!</span></label>
            </div>
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">ชื่อของคุณ</label>
            <input v-model="formData.name" type="text" class="form-control" id="name" name="name" placeholder="" required="required">
          </div>
          <div class="mb-3">
            <label for="mobile" class="form-label">เบอร์มือถือของคุณ <span class="text-info"><small>เราจะติดต่อคุณด้วยเบอร์นี้</small></span></label>
            <input v-model="formData.mobile" type="tel" class="form-control" id="mobile" name="mobile" placeholder="" required="required">
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">ที่อยู่สำหรับจัดส่งสินค้า</label>
            <textarea v-model="formData.address" class="form-control" id="address" name="address" rows="3" required="required"></textarea>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">หมายเหตุ/ฝากข้อความ (ไม่ระบุก็ได้)</label>
            <textarea v-model="formData.description" class="form-control" id="description" name="description" rows="3"></textarea>
          </div>
          <div class="mb-3 text-center">
            <button :disabled="!checkFormOrder" class="btn btn-success btn-lg" @click="confirmOrder()">ยืนยันการสั่งซื้อ</button>
          </div>
        
      </div>
    </div>

    <thank-you v-if="showResponse"></thank-you>
    
  </main>

  

  <footer class="blog-footer mb-5 mb-0 mb-lg-0 mb-md-0 mb-sm-5">
    <p>Sales Page by <a href="https://www.fdtech.co.th/" target="_blank">FDTECH</a></p>
  </footer>  
  </body>
</html>


<script src="dist/js/app.js"></script>