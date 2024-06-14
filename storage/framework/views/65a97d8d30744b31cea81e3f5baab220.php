<div class="flex flex-col items-center justify-center min-h-screen p-4 dark:bg-gray-900 text-gray-900 dark:text-white">
    <!--[if BLOCK]><![endif]--><?php if(Session::has('message')): ?>
        <div id="testimonialPopup" class="fixed top-4 right-4 z-50 w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="flex items-center justify-between">
                <div class="flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg flex items-center justify-center dark:bg-green-800 dark:text-green-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="ml-3 text-sm font-normal"><?php echo e(Session::get('message')); ?></div>
                <button type="button" class="-mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" onclick="closeTestimonialPopup()" aria-label="Close">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <div class="w-full max-w-3xl p-8 bg-white rounded-lg shadow dark:bg-gray-800">
        <h2 class="md:text-2xl sm:text-xl font-bold mb-4 text-center">
            Photobooth by One Dream
        </h2>

        <div class="w-full p-8 bg-white rounded-lg shadow dark:bg-gray-800">
            <form wire:submit.prevent="submit" class="space-y-6">
                <?php echo e($this->form); ?>


                <!--[if BLOCK]><![endif]--><?php if($transaction_type === 'qris'): ?>
                    <div class="flex justify-center">
                        <img src="<?php echo e(asset('img/images/IMG_6642.png')); ?>" alt="QRIS Image" class="w-1/2 h-auto">
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                <div class="flex flex-wrap items-center gap-4 justify-start">
                    <?php if (isset($component)) { $__componentOriginal6330f08526bbb3ce2a0da37da512a11f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['type' => 'submit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit']); ?>
                        <?php echo e(__('Submit')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $attributes = $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $component = $__componentOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    setTimeout(() => {
        let popup = document.getElementById("testimonialPopup");
        if (popup) {
            popup.style.display = "none";
        }
    }, 5000);

    function closeTestimonialPopup() {
        let popup = document.getElementById("testimonialPopup");
        if (popup) {
            popup.style.display = "none";
        }
    }
</script>
<?php /**PATH C:\xampp\htdocs\onedream_website\resources\views/livewire/ticketing-forms.blade.php ENDPATH**/ ?>