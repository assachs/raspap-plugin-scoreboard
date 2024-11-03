<?php
namespace scoreboard;


/**
 * Handler for RestAPI settings
 */
function pluginHandlePageAction($page) {
	displayScoreboard();
}
function DisplayScoreboard()
{
    // initialize status object
    $status = new \RaspAP\Messages\StatusMessage;

    // create instance of DotEnv
    $dotenv = new \RaspAP\DotEnv\DotEnv;
    $dotenv->load();

    $file = file_get_contents("/var/www/html/config/match.json");
    $data = json_decode($file);
    // set defaults
    $apiKey = $data->apikey;
    $match = $data->spieluuid;

    if (!RASPI_MONITOR_ENABLED) {
        if (isset($_POST['SaveAPIsettings'])) {
            if (isset($_POST['txtapikey'])) {
                $apiKey = trim($_POST['txtapikey']);
                $match = trim($_POST['txtmatch']);
                if (strlen($apiKey) == 0) {
                    $status->addMessage('Please enter a valid API key', 'danger');
                } else {
                    $return = saveSBSettings($status, $apiKey,$match, $dotenv);
                    $status->addMessage('Restarting scoreboard.service', 'info');
                    exec('sudo /bin/systemctl stop scoreboard.service', $return);
                    sleep(1);
                    exec('sudo /bin/systemctl start scoreboard.service', $return);
                }
            }
        } elseif (isset($_POST['StartRestAPIservice'])) {
            $status->addMessage('Attempting to start scoreboard.service', 'info');
            exec('sudo /bin/systemctl start scoreboard.service', $return);
            foreach ($return as $line) {
                $status->addMessage($line, 'info');
            }
        } elseif (isset($_POST['StopRestAPIservice'])) {
            $status->addMessage('Attempting to stop scoreboard.service', 'info');
            exec('sudo /bin/systemctl stop scoreboard.service', $return);
            foreach ($return as $line) {
                $status->addMessage($line, 'info');
            }
        }
    }
    exec("ps aux | grep -v grep | grep \"scoreboard.py\"", $output, $return);
    $serviceStatus = !empty($output) ? "up" : "down";

    exec("sudo systemctl status scoreboard.service", $output, $return);
    array_shift($output);
    $serviceLog = implode("\n", $output);


    echo pluginRenderTemplate("scoreboard","scoreboard", compact(
        "status",
        "apiKey",
        "match",
        "serviceStatus",
        "serviceLog"
    ));
}

/**
 * Saves RestAPI settings
 *
 * @param object status
 * @param object dotenv
 * @param string $apiKey
 */
function saveSBSettings($status, $apiKey, $match, $dotenv)
{
    $status->addMessage('Saving API key', 'info');
 $data=new \stdClass;
        $data->apikey = $apiKey;
        $data->spieluuid = $match;
        $str = json_encode($data);
        file_put_contents("/var/www/html/config/match.json", $str);
	
    return $status;
}


