<?php if($isModelTranslatable): ?>
    <input type="hidden"
           data-i18n="true"
           name="<?php echo e($_field_name); ?>_i18n"
           id="<?php echo e($_field_name); ?>_i18n"
           value="<?php echo e($_field_trans); ?>">
<?php endif; ?>
<?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/vendor/tcg/voyager/src/../resources/views/multilingual/input-hidden.blade.php ENDPATH**/ ?>