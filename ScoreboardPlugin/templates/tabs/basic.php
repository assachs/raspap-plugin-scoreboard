<div class="tab-pane active" id="scoreboardsettings">
    <h4 class="mt-3"><?php echo _("Basic settings"); ?></h4>
    <div class="row">
        <div class="mb-3 col-12 mt-2">
            <div class="row">
                <div class="col-12">
                    <?php echo htmlspecialchars($content); ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="mb-3 col-md-6" required>
                    <label for="txtmatchkey"><?php echo _("Match UUID"); ?></label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="txtmatchkey" name="txtmatchkey" value="<?php echo htmlspecialchars($__template_data['matchKey'], ENT_QUOTES); ?>" required />
                        <div class="invalid-feedback">
                            <?php echo _("Please provide a valid Match UUID."); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-md-6" required>
                    <label for="txtapikey"><?php echo _("API Key"); ?></label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="txtapikey" name="txtapikey" value="<?php echo htmlspecialchars($__template_data['apiKey'], ENT_QUOTES); ?>" required />
                        <div class="invalid-feedback">
                            <?php echo _("Please provide a valid API key."); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-md-6" required>
                    <div class="input-group">
                        <div class="form-check form-switch">
                            <?php $checked = $__template_data['noswitch'] == 1 ? 'checked="checked"' : '' ?>
                            <input class="form-check-input" id="noswitch" name="noswitch" type="checkbox" value="1" <?php echo $checked ?> />
                            <label class="form-check-label" for="noswitch"><?php echo _("Kein Seitenwechsel") ?></label>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-check form-switch">
                            <?php $checked = $__template_data['switchedsetup'] == 1 ? 'checked="checked"' : '' ?>
                            <input class="form-check-input" id="switchedsetup" name="switchedsetup" type="checkbox" value="1" <?php echo $checked ?> />
                            <label class="form-check-label" for="switchedsetup"><?php echo _("drehen, Kabel links") ?></label>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-check form-switch">
                            <?php $checked = $__template_data['noswitchedback'] == 1 ? 'checked="checked"' : '' ?>
                            <input class="form-check-input" id="noswitchedback" name="noswitchedback" type="checkbox" value="1" <?php echo $checked ?> />
                            <label class="form-check-label" for="noswitchedback"><?php echo _("keine gedrehte Rückseite") ?></label>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="form-check form-switch">
                            <?php $checked = $__template_data['onboot'] == 1 ? 'checked="checked"' : '' ?>
                            <input class="form-check-input" id="onboot" name="onboot" type="checkbox" value="1" <?php echo $checked ?> />
                            <label class="form-check-label" for="onboot"><?php echo _("Autostart") ?></label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div><!-- /.tab-pane | basic tab -->

