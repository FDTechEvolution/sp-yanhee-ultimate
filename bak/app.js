Vue.component('button-order', {
    data: function () {
      return {}
    },
    template: `<a href="#" class="btn btn-primary btn-lg rounded text-center w-100"><i class="bi bi-cart4"></i> สั่งซื้อ</a>`
})
  
Vue.component('button-contact', {
    data: function () {
      return {}
    },
    template: `<a href="#" class="btn btn-success btn-lg rounded text-center w-100">Line @ (สอบถาม)</a>`
})
  
Vue.component('button-full', {
    data: function () {
      return {}
    },
    template: `<div class="row my-5">
                <div class="col-lg-5 col-md-6 d-md-grid gap-2 mx-auto col-sm-12 text-center">
                  <button-order></button-order>
                </div>
                <div class="col-lg-2 col-md-12 text-center my-md-3">-หรือ-</div>
                <div class="col-lg-5 col-md-6 d-md-grid gap-2 mx-auto col-sm-12 text-center">
                  <button-contact></button-contact>
                </div>
              </div>`
})
  
Vue.component("modal", {
    data() {
      return {
        isProduct: 'Yanhee Ultimate',
        products: [
          {name: 'ชุดกู้ระบบเผาผลาญ 1 แถม 1', price: 1200, discount: 990, src: 'dist/img/promotion/Ultimate_210219_28.jpg'},
          {name: 'ชุดโปรเร่งเบิร์น 2 แถม 2', price: 2400, discount: 1890, src: 'dist/img/promotion/Ultimate_210219_29.jpg'}
        ],
        productSelect: '',
        customerData: {
            name: '',
            address: '',
            mobile: ''
        }
      }
    },
    computed: {
        confirmOrder() {
            return (this.productSelect !== '' && this.customerData.name !== '' && this.customerData.address !== '' && this.customerData.mobile !== '') ? true : false
        }
    },
    methods: {

    },
    template: `<transition name="modal">
                <div class="modal-mask">
                  <div class="modal-wrapper">
                    <div class="modal-container">
  
                      <div class="modal-header">
                        <div class="start-0">
                            <slot name="header"><h4>ยืนยันการสั่งซื้อ</h4></slot>
                        </div>
                        <div class="end-0">
                            <button class="btn btn-secondary" @click="$emit('close')">X</button>
                        </div>
                      </div>
  
                      <div class="modal-body">
                        <slot name="body">
                          <div class="row">
                            <div class="col-lg-5 col-sm-12 text-center">
                              <img v-if="productSelect" :src="productSelect.src" class="img-fluid">
                              <img v-else src="dist/img/yh_ultm_product.png" class="img-fluid">
                            </div>
                            <div class="col-lg-7 col-sm-12 form-check">
                              <div v-for="(product, index) in products">
                                <input v-model="productSelect" type="radio" class="form-check-input" name="product" :id="index" :value="product" checked> <label :for="index">{{product.name}}</label>
                              </div>
                              <hr />
                              <div class="card">
                                <div v-if="productSelect" class="card-body text-end expandable">
                                    <p><strong>ค่าสินค้า :</strong> {{productSelect.price}}</p>
                                    <p><strong>ส่วนลด :</strong> -{{productSelect.price - productSelect.discount}}</p>
                                    <p><strong>ราคาสุทธิ :</strong> {{productSelect.discount}}</p>
                                </div>
                                <div v-else class="card-body text-center">กรุณาเลือกรายการสินค้า</div>
                              </div>
                            </div>
                          </div>
                          <hr />
                          <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label">ชื่อ - สกุล</label>
                                    <input v-model="customerData.name" type="text" class="form-control" id="name" placeholder="ชื่อผู้รับ">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">ที่อยู่</label>
                                    <textarea v-model="customerData.address" class="form-control" id="address" rows="3" placeholder="ที่อยู่สำหรับรับสินค้า"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="mobile" class="form-label">เบอร์โทร</label>
                                    <input v-model="customerData.mobile" type="number" class="form-control" id="mobile" placeholder="โทรศัพท์มือถือ">
                                </div>
                            </div>
                          </div>
                        </slot>
                      </div>
  
                      <div class="modal-footer">
                        <slot name="footer">
                          <button v-if="confirmOrder" class="btn btn-success" @click="$emit('close')">ยืนยัน</button>
                          <button v-else class="btn btn-success" disabled>ยืนยัน</button>
                          <button class="btn btn-secondary" @click="$emit('close')">ยกเลิก</button>
                        </slot>
                      </div>
                    </div>
                  </div>
                </div>
              </transition>`
});
  
new Vue({
    el: '#app',
    data() {
      return {
        showModal: false,
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
        ],
        factories: [
          {src: 'dist/img/factory/cover-2_factory.jpg', alt: 'มาตรฐานการผลิตระดับสากล', title: ''},
          {src: 'dist/img/factory/C.2-1_V.1.jpg', alt: 'มาตรฐานการผลิตระดับสากล', title: ''},
          {src: 'dist/img/factory/C.1_V.3-2.jpg', alt: 'มาตรฐานการผลิตระดับสากล', title: ''},
          {src: 'dist/img/factory/C.1_V.4-1.jpg', alt: 'มาตรฐานการผลิตระดับสากล', title: ''}
        ]
      }
    }
})