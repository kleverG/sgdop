<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => 'Coordinador','metaDescription' => 'Description de Coordinador']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Coordinador','meta-description' => 'Description de Coordinador']); ?>
    
    <h2> Coordinador</h2>

    <a href="<?php echo e(route('coordinadores.create')); ?>"> Añadir coordinador</a>
    
    <table>
        
        <tr>
            <th>Nombre        </th>
            <th>Cédula        </th>
            <th>Fecha update  </th>
            <th>Acciones      </th>
        </tr>
    
        <?php $__currentLoopData = $coordinadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coordinador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>  <?php echo e($coordinador->name); ?>       </td>    
                <td>  <?php echo e($coordinador->cedula); ?>       </td>
                <td>  <?php echo e($coordinador->updated_at); ?>       </td>
                <td>
                    <a href="<?php echo e(route('coordinadores.edit', $coordinador)); ?>">Editar  </a>&nbsp;
                    <a href="<?php echo e(route('coordinadores.show', $coordinador)); ?>">Ver más </a>&nbsp;
                    <a href="<?php echo e(route('coordinadores.show', $coordinador)); ?>">Borrar  </a>
                </td>
            </tr>    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>   

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php /**PATH C:\laragon\www\SGDOP\resources\views/coordinadores/index.blade.php ENDPATH**/ ?>