<div class="tab-pane active" id="scoreboardsettings">
  <h4 class="mt-3">Scoreboard Settings</h4>
  <div class="row">
    <div class="form-group col-lg-12 mt-2">
      <div class="row mt-3">
        <div class="form-group col-md-6" required>
          <label for="txtmatch">Match</label>
          <div class="input-group">
              <input type="text" class="form-control" id="txtmatch" name="txtmatch" value="<?php echo htmlspecialchars($match, ENT_QUOTES); ?>" required />
              <div class="invalid-feedback">
                <?php echo _("Please provide a valid Match UUID."); ?>
              </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="form-group col-md-6" required>
          <label for="txtapikey"><?php echo _("API Key"); ?></label>
          <div class="input-group">
              <input type="text" class="form-control" id="txtapikey" name="txtapikey" value="<?php echo htmlspecialchars($apiKey, ENT_QUOTES); ?>" required />
              <div class="invalid-feedback">
                <?php echo _("Please provide a valid API key."); ?>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.tab-pane | general tab -->

