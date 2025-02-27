<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => 'My Courses']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'My Courses']); ?>
    <head>
        <link href="<?php echo e(asset('css/course.css')); ?>" rel="stylesheet">
    </head>
    <body>
        <form action="<?php echo e(route('searchCourses')); ?>" method="GET">
            <div class="input-group rounded" style="padding-top:60px;text-align:center; width:500px;left:35%">
                <input type="search" class="form-control rounded" name="search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                <button type="submit" style="border: none;background-color:transparent;">
                    <i class="fas fa-search" style="font-size: 30px"></i>
                </button>
                </span>
            </div>
        </form>        
        <ul class="cards">
            <?php $__currentLoopData = $courses1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $colors = ['#F0F8FF', '#FFFAF0', '#F0FFF0', '#FFFFF0', '#F5FFFA'];
            $color = $colors[$index % count($colors)];
        ?>
            <li>
              <div href="" class="card" style="background-color:<?php echo e($color); ?>;">
                <div class="head"><?php echo e($course->titre); ?></div>
                <div class="description"><?php echo e($course->module->nom); ?></div>
                <div class="card__overlay">
                  <div class="card__header">            
                    <img class="card__thumb" src="<?php echo e(asset('storage/'.$course->teacher->image)); ?>" alt="" />
                    <div class="card__header-text">
                      <h3 class="card__title"><?php echo e($course->teacher->name); ?></h3>
                      <span class="card__status"><?php echo e($course->createdAt); ?></span>
                    </div>          
                  </div>
                  <div class="card__description "><a class="button" href="<?php echo e(route('showDetails',$course->id)); ?>">Details</a></div>
                </div>
            </div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>          
    </body>
    </html>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9881aee3032510140a884de503784c66)): ?>
<?php $attributes = $__attributesOriginal9881aee3032510140a884de503784c66; ?>
<?php unset($__attributesOriginal9881aee3032510140a884de503784c66); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9881aee3032510140a884de503784c66)): ?>
<?php $component = $__componentOriginal9881aee3032510140a884de503784c66; ?>
<?php unset($__componentOriginal9881aee3032510140a884de503784c66); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/student/allCourses.blade.php ENDPATH**/ ?>