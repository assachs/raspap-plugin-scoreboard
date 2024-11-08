  <?php ob_start() ?>
    <?php if (!RASPI_MONITOR_ENABLED) : ?>
    <input type="submit" class="btn btn-outline btn-primary" name="SaveAPIsettings" value="<?php echo _("Save settings"); ?>" />
        <?php if ($serviceStatus == 'down') : ?>
        <input type="submit" class="btn btn-success" name="StartRestAPIservice" value="<?php echo "Start Scoreboard service"; ?>" />
        <?php else : ?>
        <input type="submit" class="btn btn-warning" name="StopRestAPIservice" value="<?php echo "Stop Scoreboard service"; ?>" />
        <?php endif; ?>
    <?php endif ?>
  <?php $buttons = ob_get_clean(); ob_end_clean() ?>
 
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col">
              <i class="fas fa-puzzle-piece mr-2"></i>Scoreboard
            </div>
            <div class="col">
              <button class="btn btn-light btn-icon-split btn-sm service-status float-right">
                <span class="icon text-gray-600"><i class="fas fa-circle service-status-<?php echo $serviceStatus ?>"></i></span>
                <span class="text service-status">scoreboard.service <?php echo _($serviceStatus) ?></span>
              </button>
            </div>
          </div><!-- /.row -->
        </div><!-- /.card-header -->
        <div class="card-body">
        <?php $status->showMessages(); ?>
          <form role="form" action="plugin__scoreboard__scoreboard" method="POST" class="needs-validation" novalidate>
            <?php echo CSRFTokenFieldTag() ?>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" id="scoreboardsettingstab" href="#scoreboardsettings" data-toggle="tab"><?php echo _("Settings"); ?></a></li>
                <li class="nav-item"><a class="nav-link" id="scoreboardstatustab" href="#scoreboardstatus" data-toggle="tab"><?php echo _("Status"); ?></a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <?php echo pluginRenderTemplate("scoreboard","scoreboard/general", $__template_data) ?>
              <?php echo pluginRenderTemplate("scoreboard","scoreboard/status", $__template_data) ?>
            </div><!-- /.tab-content -->

            <?php echo $buttons ?>
          </form>
        </div><!-- /.card-body -->
      <div class="card-footer"></div>
    </div><!-- /.card -->
  </div><!-- /.col-lg-12 -->
</div><!-- /.row -->


