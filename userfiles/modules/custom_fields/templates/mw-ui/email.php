<div class="mw-flex-col-md-<?php echo $settings['field_size']; ?>">
    <div class="mw-ui-field-holder">
        <label class="mw-ui-label">
        <?php echo $data['name']; ?>
        <?php if ($settings['required']): ?>
        <span style="color: red;">*</span>
        <?php endif; ?>
        </label>
        <div class="mw-ui-controls">
            <input type="email" class="mw-ui-field" <?php if ($settings['required']): ?>required="true"<?php endif; ?> data-custom-field-id="<?php echo $data['id']; ?>" name="<?php echo $data['name']; ?>" placeholder="<?php echo $data['placeholder']; ?>" />
        </div>
    </div>
</div>