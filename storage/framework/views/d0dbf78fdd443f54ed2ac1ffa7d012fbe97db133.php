
<?php $__env->startSection('content'); ?>
<section id="tracking-steps" class="section tracking-steps-section is-clearfix">
    <div class="container">
      <p class="heading-title-top has-text-centered">tracking</p>
      <h1 class="heading-title style-3">how we work</h1>
      <br>
      <br>
      <div class="steps" data-aos="fade-right">
        <div class="step-item" data-step-id="0">
          <div class="step-marker"> 1 </div>
          <div class="step-details">
            <p class="step-title">lorem ipsum dolor</p>
            <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
          </div>
        </div>
        <div class="step-item active" data-step-id="1">
          <div class="step-marker">2</div>
          <div class="step-details">
            <p class="step-title">lorem ipsum dolor</p>
            <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
          </div>
        </div>
        <div class="step-item" data-step-id="2">
          <div class="step-marker">3</div>
          <div class="step-details">
            <p class="step-title">lorem ipsum dolor</p>
            <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
          </div>
        </div>
        <div class="step-item" data-step-id="3">
          <div class="step-marker"> 4 </div>
          <div class="step-details">
            <p class="step-title">lorem ipsum dolor</p>
            <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<section id="quote" class="section quote-section padding-bottom-none is-clearfix">
    <div class="container">
      <div class="columns is-variable is-2 is-multiline">
        <div class="column is-6-desktop is-12-tablet" data-aos="fade">
          <h1 class="heading-title style-3 has-text-left"> request a
            <span class="has-text-primary">quote</span>
          </h1>
          <p class="heading-title-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit Nulla chronocrator accumsan, metus ultrices eleifend gravi.</p>
          <!-- successful form message -->
          <div class="overhang-message-content is-hidden success">
            <span class="icon">
              <i class="ion-md-notifications"></i>
            </span> Thank You! Your message was sent successfully. </div>
          <!-- error form message -->
          <div class="overhang-message-content is-hidden error">
            <span class="icon">
              <i class="ion-md-notifications"></i>
            </span> Oops! Something went wrong, we couldn't send your message. </div>
          <!-- ajax contact form -->
          <form accept-charset="UTF-8" class="ajax-contact-form" action="https://usebasin.com/f/3587049dbc33.json" method="POST">
            <div class="field is-horizontal">
              <div class="field-body">
                <div class="field">
                  <div class="control is-expanded">
                    <input class="input" type="text" name="name" placeholder="Name" required> </div>
                </div>
                <!-- .field -->
                <div class="field">
                  <div class="control is-expanded">
                    <input class="input" type="email" name="email" placeholder="Email" required=""> </div>
                </div>
                <!-- .field -->
              </div>
              <!-- .field-body -->
            </div>
            <div class="field is-horizontal">
              <div class="field-body">
                <div class="field">
                  <div class="control is-expanded">
                    <input class="input" type="text" name="subject" placeholder="Subject" required=""> </div>
                </div>
                <!-- .field -->
                <div class="field">
                  <div class="control is-expanded">
                    <div class="select">
                      <select>
                        <option>Air Freight</option>
                        <option>Land Transport</option>
                        <option>Ocean Freight</option>
                        <option>Warehousing</option>
                      </select>
                    </div>
                  </div>
                  <!-- .field -->
                </div>
                <!-- .field-body -->
              </div>
            </div>
            <div class="field ">
              <div class="control is-expanded">
                <textarea class="textarea" name="textarea" placeholder="Message" required=""></textarea>
              </div>
            </div>
            <div class="field ">
              <div class="control">
                <button class="button" type="submit">request a quote</button>
              </div>
            </div>
          </form>
        </div>
        <div class="column is-6-desktop is-12-tablet"  data-aos-delay="600">
          <br>
          <br>
          <br>
          <br>
          <img alt="Joo - Niche Multi-Purpose HTML Template" src="<?php echo e(asset('front/images/global/man.png')); ?>">
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shipping-app\resources\views/order-service.blade.php ENDPATH**/ ?>