<div>
    <footer>
        <div class="footer-ctrl">
            <div class="container footer-ctrl-container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row " id="unset-width">
                            <?php echo $footerContent->content; ?>

                            <div class="col-md-6 mt-2">
                                <div class="fs-4" style="color: #7EB150;">
                                    CONTACT US
                                </div>
                                <ul class="d-flex flex-column gap-3">
                                    <li>
                                        <img src="<?php echo e(asset('frontend/images/Emali1.webp')); ?>" alt="..." width="40" />
                                        <strong>Email: </strong><a href="mailto:<?php echo e(config('settings.default_email_address')); ?>"><?php echo e(config('settings.default_email_address')); ?></a>
                                    </li>
                                    <li>
                                        <img src="<?php echo e(asset('frontend/images/tel.webp')); ?>" alt="..." width="40" />
                                        <strong>Telephone: </strong><?php echo e(config('settings.mobile')); ?>

                                    </li>
                                    <li>
                                        <strong>WE'RE OPEN: </strong>Saturday – Thursday, 9am – 5:30pm (except govt. holidays)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mt-5">
                        <div class="fs-4" style="color: #7EB150;">
                            GET IN TOUCH
                        </div>
                        <div class="details-form">
                            <div>
                                Merlin Tech Ltd: Your secure, reliable online shop. Fast delivery, fair prices, genuine products.
                            </div>
                            <div class="mt-3">
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('inc.contact-form', [])->html();
} elseif ($_instance->childHasBeenRendered('l3650968939-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3650968939-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3650968939-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3650968939-0');
} else {
    $response = \Livewire\Livewire::mount('inc.contact-form', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3650968939-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:inc.contact-form>
                            </div>
                        </div>
                        <div class="mt-3 d-flex flex-column align-items-center">
                            <strong>WE ARE AVAILABLE IN SOCIAL MEDIA</strong>
                            <ul class="d-flex gap-2 mt-2 social-links">
                                <li>
                                    <a href="//<?php echo e(config('settings.social_facebook')); ?>" target="_blank"><i class="fab fa-facebook fs-3"></i></a>
                                </li>
                                <li>
                                    <a href="//<?php echo e(config('settings.social_youtube')); ?>" target="_blank"><i class="fab fa-youtube fs-3"></i></a>
                                </li>
                                <li>
                                    <a href="//<?php echo e(config('settings.social_instagram')); ?>" target="_blank"><i class="fab fa-instagram fs-3"></i></a>
                                </li>
                                <li>
                                    <a href="//<?php echo e(config('settings.social_linkedin')); ?>" target="_blank"><i class="fab fa-linkedin fs-3"></i></a>
                                </li>
                            </ul>
                            <div>
                                <img src="<?php echo e(asset('frontend/images/ssl_logo.png')); ?>" alt="..." style="width: 150px; margin-top: -8px;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-between py-5">
                <div>
                    Copyright ©&nbsp;2018&nbsp;<?php echo e(config('settings.footer_copyright_text')); ?>

                </div>
                <div>
                     <a class="text-white text-decoration-none" href="<?php echo e(route('frontend.privacy.policy')); ?>">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php /**PATH C:\xampp\htdocs\merlin_app\resources\views/livewire/inc/footer.blade.php ENDPATH**/ ?>