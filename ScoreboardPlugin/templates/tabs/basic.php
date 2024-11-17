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
                        <div class="input-group-text" id="gen_matchkey"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                        <div class="invalid-feedback">
                            <?php echo _("Please provide a valid Match UUID."); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="mb-3 col-md-6" required>
                    <label for="txtapikey"><?php echo _("API Key"); ?></label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="txtapikey" name="txtapikey" value="<?php echo htmlspecialchars($__template_data['apiKey'], ENT_QUOTES); ?>" required />
                        <div class="input-group-text" id="gen_apikey"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                        <div class="invalid-feedback">
                            <?php echo _("Please provide a valid API key."); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.tab-pane | basic tab -->

