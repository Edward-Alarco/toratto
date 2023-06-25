<?php if(!empty(get_option('facebook'))): ?>
<li>
    <a href="<?php echo get_option('facebook'); ?>" target="_blank">
        <i class="fab fa-facebook-f"></i>
    </a>
</li>
<?php endif; ?>

<?php if(!empty(get_option('instagram'))): ?>
<li>
    <a href="<?php echo get_option('instagram'); ?>" target="_blank">
        <i class="fab fa-instagram"></i>
    </a>
</li>
<?php endif; ?>

<?php if(!empty(get_option('twitter'))): ?>
<li>
    <a href="<?php echo get_option('twitter'); ?>" target="_blank">
        <i class="fab fa-twitter"></i>
    </a>
</li>
<?php endif; ?>

<?php if(!empty(get_option('tiktok'))): ?>
<li>
    <a href="<?php echo get_option('tiktok'); ?>" target="_blank">
        <i class="fab fa-tiktok"></i>
    </a>
</li>
<?php endif; ?>

<?php if(!empty(get_option('linkedin'))): ?>
<li>
    <a href="<?php echo get_option('linkedin'); ?>" target="_blank">
        <i class="fab fa-linkedin-in"></i>
    </a>
</li>
<?php endif; ?>