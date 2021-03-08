Vue.component("thank-you", {
  template: `<transition name="modal">
              <div class="modal-mask">
                <div class="modal-wrapper">
                  <div class="modal-container">

                    <div class="modal-body my-0 text-center p-0">
                      <slot v-if="$parent.responseStatus === 200" name="body">
                        <img src="dist/img/thankyou.jpg" class="img-fluid rounded" alt="">
                      </slot>
                      
                      <slot v-else name="body">
                        <h3 class="text-danger">เกิดข้อผิดพลาด</h3>
                        <p>กรุณาลองใหม่อีกครั้ง หรือ สั่งซื้อผ่านทางไลน์</p>
                      </slot>
                    </div>

                    <div class="modal-footer mb-0 py-0 end-0">
                      <button class="btn btn-secondary btn-sm" @click="$parent.showResponse = false">X ปิด</button>
                    </div>

                  </div>
                </div>
              </div>
            </transition>`
})
  
new Vue({
    el: '#app',
    data() {
      return {
        showModal: false,
        showResponse: false,
        responseStatus: '',
        beforeAfter: [
          {src: 'dist/img/before_after/Ultimate_210219_17.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'},
          {src: 'dist/img/before_after/Ultimate_210219_18.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'},
          {src: 'dist/img/before_after/Ultimate_210219_19.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'},
          {src: 'dist/img/before_after/Ultimate_210219_20.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'},
          //{src: 'dist/img/before_after/Ultimate_210219_21.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'},
          //{src: 'dist/img/before_after/Ultimate_210219_22.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'},
          //{src: 'dist/img/before_after/Ultimate_210219_23.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'},
          //{src: 'dist/img/before_after/Ultimate_210219_24.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'},
          //{src: 'dist/img/before_after/Ultimate_210219_25.jpg', alt: 'YANHEE ULTIMATE - Before & After', title: 'Before & After'}
        ],
        factories: [
          {src: 'dist/img/factory/cover-2_factory.jpg', alt: 'มาตรฐานการผลิตระดับสากล', title: ''},
          {src: 'dist/img/factory/C.2-1_V.1.jpg', alt: 'มาตรฐานการผลิตระดับสากล', title: ''},
          {src: 'dist/img/factory/C.1_V.3-2.jpg', alt: 'มาตรฐานการผลิตระดับสากล', title: ''},
          {src: 'dist/img/factory/C.1_V.4-1.jpg', alt: 'มาตรฐานการผลิตระดับสากล', title: ''}
        ],
        formData: {
          name: '',
          address: '',
          mobile: '',
          product: '',
          price: '',
          source: '',
          description: ''
        }
      }
    },
    computed: {
      checkFormOrder() {
        return (this.formData.name !== '' 
                && this.formData.address !== '' 
                && this.formData.mobile !== '' 
                && this.formData.product !== '')
                ? true : false
      }
    },
    methods: {
      confirmOrder() {
        if(this.checkFormOrder) {
          let price = this.formData.product.split(" ")
          this.formData.product = price[0] + ' ' + price[1]
          this.formData.price = price[2]
          this.formData.source = document.location.origin
          try{
            axios.post('https://shop.orderpang-sv.com/tmporder/save', this.formData , {
              headers: {
                'Content-Type' : 'application/json'
              }
            })
            .then((response) => {
              window.location.replace(this.formData.source + "/thankyou.php?price=" + this.formData.price)
            })
            .finally(() => {
              this.formData.name = ''
              this.formData.address = ''
              this.formData.mobile = ''
              this.formData.product = ''
              this.formData.description = ''
            })
          }catch(e) {
            throw e
          }
        }
      }
    }
})